<?php
ob_start();
session_start();
error_reporting(0);
include ("/../application/config.php");
include_once(dirname(__FILE__) . "/../application/config.php");
$servername = SQL_SERVER;
$username = SQL_USER;
$password = SQL_PASS;
$dbname = SQL_DB;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("ارتباط با پایگاه داده با خطا مواجه شد: " . $conn->connect_error);
}

$conf_merchantAccountNumber = 'C5C41B28-B25B-4F81-BC47-5107AF6F218E';
$conf_merchantSecurityWord = "SecurityWord";


$serverUrlAndPath = "http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["REQUEST_URI"]);
$serverUrlAndPath = str_replace("\\", "/", $serverUrlAndPath);
$succesUrl = $serverUrlAndPath."/payment_success.php";
$failUrl = $serverUrlAndPath."/payment_fail.php";

$username = $_SESSION['username'];

if ($_GET[gold])
{
	$gold = $_GET[gold];
	$Desc = ''.$gold.' Gold';
	$PageTitle = 'Buy '.$gold.' gold';
	if ($gold=='180')
		$Price = '10000';
	elseif ($gold=='600')
		$Price = '10000';
	elseif ($gold=='1500')
		$Price = '20000';
	elseif ($gold=='3600')
		$Price = '30000';
	elseif ($gold=='9600')
		$Price = '50000';
	elseif ($gold=='22000')
		$Price = '2000000';	
	else
		die('Undefiend Gold Count !');
		
	$orderid = time().rand(1000,9999);
	
}


include_once(dirname(__FILE__) . "/../application/config.php");
$servername = SQL_SERVER;
$username = SQL_USER;
$password = SQL_PASS;
$dbname = SQL_DB;
$connection = new mysqli($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

register_shutdown_function(function () use ($connection) {
    
    $username = $_SESSION['username'];
  
    $gold = $_GET[gold];
    $orderid = time().rand(1000,9999);

    $query = "INSERT INTO `transactions` (`username`, `amount`, `gold`, `orderid`, `time`) VALUES ('$username', '$Price', '$gold', '$orderid', NOW())";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        error_log("Error inserting data: " . mysqli_error($connection));
    }
});
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $PageTitle;?></title>
</head>
<body onload="javascript:document.payform.submit();">
	<?php
    	if ($_GET[gold])
		
		?>
        <div style="text-align:center; padding:8px;">
        	Connecting to payment gateway , Please wait ...
        </div>
		<?php
$data = [
    "merchant_id" => "C5C41B28-B25B-4F81-BC47-5107AF6F218E",
    "amount" => $Price, //// rial
    "invoice_id" => "PF-123456",
    "description" => "Invoice Description",
    "name" => "Ali Ahmadi",
    "mobile" => "09120001234",
    "email" => "info@irantra.ir",
    "callback_url" => "https://irantra.ir/ts1/lrpayment/payment_success.php"
];
		$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.novinopay.com/payment/ipg/v2/request");
curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type" => "application/json"]);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
curl_setopt($curl, CURLOPT_TIMEOUT, 50);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_exec = curl_exec($curl);
curl_close($curl);

$result = json_decode($curl_exec);

if (isset($result->status) && $result->status == 100) {
    ///save $result->data->authority in db
    ///save $result->data->trans_id in db

    header("Location: {$result->data->payment_url}");
} else {
    echo isset($result->status) ? "Error Code: {$result->status} | {$result->message}" : "Error Connecting to novinopay.com";
}

		
ob_end_flush();		
	?>
</body>
</html>


