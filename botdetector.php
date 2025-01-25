<?php
session_start();
function scoreBotLikelihood($data)
{
    $score = 1.0; // Start with a full score (legitimate)

    // Check if running with WebDriver (often indicates automated testing)
    if (isset($data['isWebdriver']) && $data['isWebdriver'] == 1) {
        $score -= 0.5;
    }

    // Verify languages (unexpected combinations can suggest a bot)
    $expectedLanguages = ['en-US', 'en', 'fa']; // Customize based on target audience
    if (isset($data['languages']) && !array_intersect(explode(',', $data['languages']), $expectedLanguages)) {
        $score -= 0.2;
    }

    // Check User-Agent for suspicious patterns
    $suspiciousAgents = ['bot', 'crawl', 'spider', 'headless', 'phantom'];
    if (isset($data['userAgent'])) {
        foreach ($suspiciousAgents as $agent) {
            if (stripos($data['userAgent'], $agent) !== false) {
                $score -= 0.3;
                break;
            }
        }
    }

    // Additional deduction for Internet Explorer
    if (isset($data['isIE']) && $data['isIE']) {
        $score -= 0.5;
    }

    // Deduct score if the console was detected as opened
    if (isset($data['consoleOpened']) && $data['consoleOpened']) {
        $score -= 0.5;
    }

    // Detect headless browsers using common properties
    if (isset($data['userAgent']) && preg_match('/Headless|webdriver|selenium|puppeteer/i', $data['userAgent'])) {
        $score -= 0.4;
    }

    // Ensure the score is not below 0.0 (indicating definite bot)
    return max(0.0, $score);
}

// Process request
$data = json_decode(file_get_contents('php://input'), true);
if ($data) {
    $score = scoreBotLikelihood($data);
    echo $score;

    if ($score < 0.5) {
        $_SESSION['CAPTCHATIME'] = 0; // Store session variable for CAPTCHA verification
        // Log suspicious activity
        error_log('Suspicious activity detected: User-Agent - ' . ($data['userAgent'] ?? 'unknown'));
    } else {
        $_SESSION['CAPTCHATIME'] = rand(1, 1000);
    }
} else {
    echo 'Invalid data';
}
?>