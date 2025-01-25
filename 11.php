<?php 
// date_default_timezone_set('Asia/Tehran');
// $dateString = "10 September 2024 18:00";
// $timestamp = strtotime($dateString);

// echo time().'    '.$timestamp;
//var_dump(!isset($_SERVER['REMOTE_ADDR']));
//phpinfo();
?>
<?php
// Create a PHP file, e.g., test_exec.php
/*$output = [];
$returnValue = 0;

// Run a simple command using exec
exec('ls -l', $output, $returnValue);

// Display the results
echo "<h1>Output:</h1>";
echo "<pre>" . implode("\n", $output) . "</pre>";
echo "<h1>Return Value:</h1>";
echo $returnValue;*/
?>
<?php
/*
$servername = "localhost";
$username = "tramian_tno1";
$password = "CpTqKCsPTtjxrq9km5Tq";
$dbname = "tramian_tno1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
$conn->set_charset("utf8");
$naghes=array(16,17,18,22,23,24,37,38,39,46,47,48,115,116,117,123,124,125);
$uid=19;//uid tahe spieler.php?uid=6
for( $rr=130;$rr<=144;$rr++){
    $sql = "INSERT INTO `heroitems` (`id`, `uid`, `btype`, `type`, `num`, `proc`) VALUES (NULL, '".$uid."', '4', '".$rr."', '1', '0'); ";
    $conn->query($sql);
}*/
//echo "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=" . urlencode("https://t.me/CafeBilyard_bot");

//echo time();
$servername = "localhost";
$username = "cp52249_tt1";
$password = "k8DRHzNZnPYbWPqyDs9Q";
$dbname = "cp52249_tt1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
$conn->set_charset("utf8");

$sql = "SELECT * FROM config";
$res = $conn->query($sql);

if ($res) {
    $sData = $res->fetch_array(MYSQLI_ASSOC); // Fetch as an associative array
} else {
    die("Query failed: " . $conn->error);
}

$message = "درود بر دوستان عزیز و قهرمانان ترامین! 🌟
امیدوارم روز خوبی داشته باشید! ✨

📣 با خوشحالی به اطلاع می‌رسانیم که سرور جدید ترامین با سرعت " . $sData['SPEED'] . "، " . $sData['OPENING'] . " راه‌اندازی می‌شود! آماده یک تجربه هیجان‌انگیز باشید! ⚔️

🎁 طلای اولیه بازی: ۱۰۰۰ طلا  
⚡️ سرعت بازی: " . $sData['SPEED'] . "  
⚡️ سرعت تربیت نیروها: " . $sData['SPEED'] . "  
⚡️ سرعت جابجایی نیروها: " . $sData['INCREASE_SPEED'] . "  
🛡 زمان حمایت اولیه: " . $sData['PROTECTIOND'] . "  
🔐 تأیید و فعال‌سازی ایمیل در این سرور الزامی است!

🔗 آدرس سرور:  
" . $sData['SERVERPAGE'] . "

حتماً در این سرور ثبت‌نام کنید و دوستانتان را هم دعوت کنید تا از این ماجراجویی بی‌نظیر لذت ببرند! 👑

✨ تمامی باگ‌های گزارش‌شده برطرف شده‌اند و آماده یک تجربه بی‌نقص هستیم.  
در صورت بروز هرگونه مشکل، می‌توانید با پشتیبانی در تماس باشید:  
@tramian_tech

منتظرتان هستیم! 😉🌹";

// Send the message to the Telegram channel

    $channelId='-1002028123102';
    // Your Telegram bot token
    $botToken = "7574753987:AAHPsDOu9DvX80_uWXIDVFoQGHlG1q2r2r0";

    // The Telegram API URL for sending messages
   // $url = "https://api.telegram.org/bot$botToken/sendMessage";

    // Parameters for the API request
    $params = [
        'chat_id' => $channelId,  // Channel ID or username (@channelUsername)
        'text' => $message,       // The message content
        'parse_mode' => 'HTML'    // Optional: Use HTML or Markdown for text formatting
    ];
    
    $data = array(
        "botoken" => $botToken,
        "data" => $params
    );
    // Initialize a cURL session
    $jsonData = json_encode($data);
    $ch = curl_init('https://self.benwrites.ir/tramian/single.php');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));

    $result = curl_exec($ch);
    $err = curl_error($ch);
    $result = json_decode($result, JSON_PRETTY_PRINT);
    var_dump($result );
    var_dump($err);
    curl_close($ch);
    // Return the API response
     

