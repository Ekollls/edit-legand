<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql_server = $_POST['sql_server'];
    $sql_user = $_POST['sql_user'];
    $sql_pass = $_POST['sql_pass'];
    $sql_db = $_POST['sql_db'];
    $license = $_POST['license'];
    $mpass = $_POST['mpass'];
    $title = $_POST['title'];
    $mysqli = new mysqli($sql_server, $sql_user, $sql_pass, $sql_db);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    // Save the database info to a session
    session_start();
    

    // Validate the license using an API request
    $licenseValidationUrl = 'https://server.titanic.icu/Api/sinIn';
    $data = [
        'license' => $license,
        'domain' => $_SERVER['HTTP_HOST']
    ];

    $ch = curl_init($licenseValidationUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($response, true);
    if (!$response['valid']) {
        die('Invalid license.');
    }else{
        $link="https://server.titanic.icu/Downloads/".$response['name'];
        $passw=$response['hash'];
        $passw1=$response['link'];
        $passw1=$response['link'];
        $passw1=$response['link'];
    }
    unset($_SESSION['db_info']);
    $_SESSION['db_info'] = [
        'sql_server' => $sql_server,
        'sql_user' => $sql_user,
        'sql_pass' => $sql_pass,
        'sql_db' => $sql_db,
        'license' => $license,
        'mpass' => $mpass,
        'title' => $title,
        'paswworking' => $passw
    ];
    // Proceed with downloading the file
    $file_url =$link;
    $save_to = 'yourfile.zip';

    $ch = curl_init($file_url);
    $fp = fopen($save_to, 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);
    curl_close($ch);
    fclose($fp);

    header('Location: extract.php');
    exit;
}
?>
