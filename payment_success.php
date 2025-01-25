<?php
ob_start();
session_start();

include ("/../application/config.php");
include_once(dirname(__FILE__) . "/../application/config.php");
$servername = SQL_SERVER;
$username = SQL_USER;
$password = SQL_PASS;
$dbname = SQL_DB;
$mrc=merchantid;
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("ارتباط با پایگاه داده با خطا مواجه شد: " . $conn->connect_error);
}


if (isset($_REQUEST["PaymentStatus"]) && $_REQUEST["PaymentStatus"] == "OK") {

    $Authority = (isset($_REQUEST["Authority"]) && !empty($_REQUEST["Authority"])) ? $_REQUEST["Authority"] : "";
    $InvoiceID = (isset($_REQUEST["InvoiceID"]) &&  !empty($_REQUEST["InvoiceID"])) ? $_REQUEST["InvoiceID"] : "";

    $amount = pricex1; /// Get From DB

    $data = [
        "merchant_id" => "$mrc",
        "amount" => (int) $amount,
        "authority" => $Authority
    ];

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://api.novinopay.com/payment/ipg/v2/verification");
    curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type" => "application/json"]);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
    curl_setopt($curl, CURLOPT_TIMEOUT, 50);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curl_exec = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($curl_exec);

    if (isset($result->status) && $result->status == 100) {
        echo "Invoice Successfully Paid | Price: {$result->data->amount} Rial | RefID: {$result->data->ref_id}";
        
      include_once(dirname(__FILE__) . "/../application/Account.php");  
     include_once(dirname(__FILE__) . "/../application/config.php");
$servername = SQL_SERVER;
$username = SQL_USER;
$password = SQL_PASS;
$dbname = SQL_DB;
$connection = new mysqli($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
    
   
	$pcode=time().rand(1000,9999);	
    $uid = $session->uid;
    $Price=pricex1;
    $gold = goldp1;
    $timed =time();
    $insert_query = "INSERT INTO `payments` (`pMethod`, `idTrans`, `dTrans`, `idUser`, `gAmount`, `cost`) VALUES ('paynovin','$pcode','$timed','$uid','$gold', '$Price')";
    $update_query = "UPDATE `users` SET `gold` = `gold` + '".$gold."' WHERE username = '".$_SESSION['username']."'";

    $insert_result = $connection->query($insert_query);
     if (!$insert_result) {
     error_log("Error inserting data: " . mysqli_error($connection));
}

$update_result = $connection->query($update_query);
if (!$update_result) {
    error_log("Error updating gold: " . mysqli_error($connection));
}
   
        
        
        
        
    } else {
        echo isset($result->status) ? "Error Code: {$result->status} | {$result->message}" : "Error Connecting to novinopay.com";
    }

}else{
   echo '<center><h1></br><b>پرداخت شما انجام نشد</b></h1></<center>';
   echo '<center><h1><b> لطفا مجددا تلاش کنید</b></h1></center>';
   echo '<center><h3><b>. . . . در حال بستــن خودکـار صفحــه</b></h3><center>';
include_once(dirname(__FILE__) . "/../application/Account.php");
include_once(dirname(__FILE__) . "/../application/config.php");
$servername = SQL_SERVER;
$username = SQL_USER;
$password = SQL_PASS;
$dbname = SQL_DB;
$connection = new mysqli($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
	
    $uid = $session->uid;
    $Price=pricex1;
    $gold = goldp1;
    $timed =time();
    $insert_query = "INSERT INTO `payments` (`pMethod`, `idTrans`, `dTrans`, `idUser`, `gAmount`, `cost`) VALUES ('paynovin','0','$timed','$uid','$gold', '$Price')";
    
    $insert_result = $connection->query($insert_query);
     if (!$insert_result) {
     error_log("Error inserting data: " . mysqli_error($connection));
}

    
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  style="   family-font: iransans;    background-color: #e5e5e5;
    border-radius: 10px;  box-shadow: 0px 0px 10px #064b8b;  " dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
    </br>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>درگاه پرداخت آنلاین</title>
</head>
<body style="color:blue;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
        body {
		family-font: iransans;
            background-color: #fef7e7;
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    border: solid 1px #b39253;
    box-shadow: 0 0 10px rgba(179, 146, 83, 0.7) inset;
			
			
			
			
			
			
        }
    </style>
      <center>
    <script>
      setTimeout(function() {
        window.close(); 
    }, 22223000); 
</script>

    <br>
    <style>
	
    .big-blue-button {
  
        color: #fff;
        padding: 15px 32px;
        font-size: 18px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
		    display: inline-block;
    box-sizing: border-box;
    z-index: 0;
    border: 1px solid #34220d;
	    background-image: linear-gradient(to bottom, #cba467 5%, #f3e2ae 13%, #efbf7b 32%, #aa8050 48%, #835e35 72%, #ad8a54 93%, #d7b672 100%);
    }
</style>
<button class="big-blue-button" onclick="javascript:window.close()">بستن دستی صفحه </button>
</center>
</body>
</html>
<?php ob_end_flush(); ?>


