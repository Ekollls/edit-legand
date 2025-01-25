<?php 
//echo md5('mmd3517' . mb_convert_case('Fresh', MB_CASE_LOWER, "UTF-8"));die();
include('application/Account.php');
//include('application/library/Paypal/paypal.class.php');
//echo $_POST['PAYMENT_ID'].$_POST['PAYMENT_AMOUNT'].$_POST['PAYMENT_AMOUNT'].$_POST['PAYMENT_UNITS'].$_POST['PAYMENT_BATCH_NUM'].$_POST['PAYER_ACCOUNT'].$_POST['TIMESTAMPGMT'];
	// // Payment success or nah
	// if(isset($_GET['success'])){
	// 	if(!isset($_POST['PAYMENT_ID']) || !isset($_POST['PAYEE_ACCOUNT']) || !isset($_POST['PAYMENT_AMOUNT']) || !isset($_POST['PAYMENT_UNITS']) || !isset($_POST['PAYMENT_BATCH_NUM']) || !isset($_POST['PAYER_ACCOUNT']) || !isset($_POST['TIMESTAMPGMT'])){			
	// 		$response = $Paypal->request('GetExpressCheckoutDetails', array(
	// 			'TOKEN' => $_GET['token']
	// 		));
				
	// 		// check if the response if TRUE of 0
	// 		if ($response) {
	// 			if ($response['CHECKOUTSTATUS'] == 'PaymentActionCompleted') {
	// 				die('Error');
	// 				}
	// 		} else { // Error  !
	// 			die('Error!');
	// 		}
				
	// 		// add the payment data and the new fundus to user account
	// 		$params = array(
	// 			'TOKEN' => $_GET['token'],
	// 			'PAYERID' => $_GET['PayerID'],
	// 			'PAYEMENTACTION' => 'Sale',
	// 			'PAYMENTREQUEST_0_AMT' => $_SESSION['cost'],
	// 			'PAYMENTREQUEST_0_CURRENCYCODE' => 'USD',
	// 			'PAYMENTREQUEST_0_SHIPPINGAMT' => 0,
	// 			'PAYMENTREQUEST_0_ITEMAMT' => $_SESSION['cost'],
	// 		);
	// 		$response = $Paypal->request('DoExpressCheckoutPayment', $params);
	// 		if($response['PAYMENTINFO_0_TRANSACTIONID'] != ''){
	// 			$database->query("INSERT INTO payments VALUES(NULL,'Paypal','".$response['PAYMENTINFO_0_TRANSACTIONID']."',".time().",".$session->uid.",".$_SESSION['goldAmount'].",'".$_SESSION['cost']."')");
	// 			$database->query("UPDATE users set gold = gold + ".$_SESSION['goldAmount']." where id = ".$session->uid."");
	// 			$database->sendMessage($session->uid, 6, 'Account charged: ', "New sold".($session->gold + $_SESSION['goldAmount']), 0, 0, 0, 0,0);
	// 			$database->sendMessage(6, 6, 'Renewed shipping','player "'.$session->username.'" -> '.$_SESSION['goldAmount'].' gold '.$_SESSION['cost'].'. '.$session->gold.' '.($session->gold + $_SESSION['goldAmount']).'.', 0, 0, 0, 0,0);
	// 			echo "Gold has been shipped, you can close this page"; die();
	// 		}else{
	// 			echo "There is a problem with the payment currency, try again."; die();
	// 		}
	// 	}
			
	// 	unset($_SESSION['goldAmount']);
	// 	unset($_SESSION['cost']);
	// }elseif(isset($_GET['error'])){
	// 	echo "erreur";
	// }else{ // Paypal redirect
	// 	if(isset($_GET) && !empty($_GET)){
	// 		foreach($packages as $package){
	// 			if($package['id'] == $_GET['product']){
	// 				$_SESSION['goldAmount'] = $package['gold'];
	// 				$_SESSION['cost'] = $package['cost'];

	// 				$params = array(
	// 					'RETURNURL' => HOMEPAGE.'tgpay.php?success',
	// 					'CANCELURL' => HOMEPAGE.'tgpay.php?error',
	// 					'PAYMENTREQUEST_0_AMT' => $package['cost'],
	// 					'PAYMENTREQUEST_0_CURRENCYCODE' => $package['currency'],
	// 				);

	// 				$response = $Paypal->request('SetExpressCheckout', $params);
	// 				if ($response) {
	// 					header('Location: '.$Paypal->getUrl($response).'');
	// 				} else {
	// 					die("Cannot get response");
	// 				}

	// 			}
	// 		}
	// 	}
 // } 
 if(isset($_GET['success'])){
	if (isset($_GET['Authority'])) {
		$apikey = $config['ZarinpalapiKey'];
	
	
	
		$UID = $_GET['id'];
		$PgID = $_GET['pg'];
	
	
	
		// مبلغ پرداخت -واحد پول پیشفرض سیستم ریال می باشد و در تنظیمات درگاه قابل تغییر است
		// در پیاده سازی می بایست اطلاعات سفارش یا فاکتور را در پایگاه داده ذخیره و در این بخش با فراخوانی داده ها مبلغ را مشخص و برای تایید با رسید پرداخت شده ارسال نمایید
		$amount = $_SESSION['cost'];
		//die(var_dump($amount));
		$Authority = $_GET['Authority'];
		$data = array('merchant_id' => $apikey, 'authority' => $Authority, 'amount' => $amount * 10000);
		$jsonData = json_encode($data);
		$ch = curl_init('https://api.zarinpal.com/pg/v4/payment/verify.json');
		curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v4');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Content-Length: ' . strlen($jsonData)
		)
		);
	
		$result = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($result, true);
		$result22=$result ;
		//var_dump($result);
		if ($result['data']['code'] == 100) // Your Peyment Code Only This Event
		{
			$result = $database->queryFetch( "SELECT * FROM users WHERE id='$UID'");
			foreach ($result as $row ) {
				$Codemaker = rand(10000, 200000000);
				$goldenb = 0;
				$client = $row['id'];
				$owner = 4;
				$goldb = $_SESSION['goldAmount'];
				//	$rand=rand(150,200);
				$rand = rand(100, 105);
				//$rand=rand(110,150);
				$rand1 = $rand - 100;
	
				$goldb = intval($goldb * $rand / 100);
	
				$mablagh = $_SESSION['goldAmount'];
				$offtime = 0;
				$offtime = $offtime + 86400;
				if ($offtime > time()) {
					//$database->giveGold($client, $goldb, $goldenb, $Codemaker);
					//	$database->giveGold1gift($client,($goldb*0.6),$goldenb,$Codemaker);
					//$goldb=ROUND($goldb*1.6);
					//$rand1 = $rand1;
				} else {
					$jvb=$database->query("update payments set `idTrans` = '".$_GET['Authority']."' where idUser = '".$session->uid."' and gAmount = '".$_SESSION['goldAmount']."' and cost='".$_SESSION['cost']."' and idTrans='' limit 1 ");
					
					//$database->query("INSERT INTO payments VALUES(NULL,'Paypal','".$_GET['Authority']."',".time().",".$session->uid.",".$_SESSION['goldAmount'].",'".$_SESSION['cost']."')");
					 			$database->query("UPDATE users set gold = gold + ".$_SESSION['goldAmount']." , boughtgold = boughtgold + ".$_SESSION['goldAmount']." where id = ".$session->uid."");
					 			$database->sendMessage($session->uid, 6, 'Account charged: ', "New sold".($session->gold + $_SESSION['goldAmount']), 0, 0, 0, 0,0);
					 			$database->sendMessage(6, 6, 'Renewed shipping','player "'.$session->username.'" -> '.$_SESSION['goldAmount'].' gold '.$_SESSION['cost'].'. '.$session->gold.' '.($session->gold + $_SESSION['goldAmount']).'.', 0, 0, 0, 0,0);
					 			echo "Gold has been shipped, you can close this page"; die();
									
					//$database->giveGold($client, $goldb, $goldenb, $Codemaker);
					//$database->giveGold1gift($client,$goldb,$goldenb,$Codemaker);
					//$goldb = $goldb;
					//$rand1=100+$rand1;
				}
	
				//	$database->giveGold($client,$goldb,$goldenb,$Codemaker);
				//		$database->giveGold1gift($client,$goldb*4,$goldenb,$Codemaker);
				//		$goldb=$goldb*5;
				//		 $rand1=600+$rand1;
				/*$send = 0;
				$Refnumber = $result22['data']['ref_id'];
				$topic = "خرید $goldb سکه طلا ";
				$message = "خريد شما با موفقيت انجام شد و تعداد $goldb طلا به حسابتان واريز گرديد . درصد شانس شما در این خرید : $rand1 %  با تشکر از خريدتان . -  شماره رسيد پرداخت $Refnumber";
	
				$database->sendMessage($client, $owner, $topic, $message, $send, $alliance, $player, $coor, $report);
	*/
	
			}
	
	
	
		} else {
			
			$client = $UID;
			$owner = 4;
			$send = 0;
			$topic = "خرید ناموفق";
			$message = "خرید شما با شکست مواجه شد در صورتی که مبلغ از حساب شما کسر و تا 72 ساعت برگشت نخورد به بانک مراجعه نمایید ";
	
			//$database->sendMessage($client, $owner, $topic, $message, $send, 0, 0, 0, 0);
		}
	
	
	} else {
		$receipt_number = $_POST["receipt_number"]; // شماره رسید پرداخت در صورت موفق بودن پرداخت
		$reserve_id = $_POST["reserve_id"]; // مقدار تعیین شده در هنگام درخواست پرداخت
		$order_id = $_POST["order_id"]; // مقدار تعیین شده در هنگام درخواست پرداخت
	
		$info = explode("_", $reserve_id);
	
		$UID = $info[0];
		$PgID = $info[1];
		$client = $UID;
		$owner = 4;
		$send = 0;
		$topic = "خرید ناموفق1";
		$message = "خرید شما با شکست مواجه شد در صورتی که مبلغ از حساب شما کسر و تا 72 ساعت برگشت نخورد به بانک مراجعه نمایید ";
	
		//$database->sendMessage($client, $owner, $topic, $message, $send, 0, 0, 0, 0);
	}
	unset($_SESSION['goldAmount']);
	unset($_SESSION['cost']);
	header('Location: nachrichten.php' );
		 
                        
 }
 function redirect($url)
{
    if (!headers_sent()) {
        echo '<script type="text/javascript">';
        echo 'window.location.href=' . $url;
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url="' . $url . '" />';
        echo '</noscript>';
        exit;
    } else {
        echo '<script type="text/javascript">';
        echo 'window.location.href=' . $url;
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url="' . $url . '" />';
        echo '</noscript>';
        exit;
    }
}

if($_GET['provider']==11){


?>
<center><b>
        درحال اتصال به درگاه بانک ...
        کمتر از 5 ثانیه به درگاه مورد نظر هدایت میشوید ..
        <center><b>
                <?php
                if (!isset($_GET['product'])) {
                    header('Location: dorf1.php');

                } else if (isset($_GET['product'])) {
                    if (($_GET['product'] == 1) ||  ($_GET['product'] == 2) || ($_GET['product'] == 3) || ($_GET['product'] == 4) || ($_GET['product'] == 5) || ($_GET['product'] == 6) || ($_GET['product'] == 7) || ($_GET['product'] == 8)) {
                        $id = $session->uid;
                        $name = $session->username;
                        $email = $session->email;
                        $td = explode('tgpay.php', $_SERVER['REQUEST_URI']);
                        $ReturnPath = "https://" . $_SERVER['HTTP_HOST'] . $td[0] . "tgpay.php?id=" . $session->uid . "&pg=" . $_GET['product']."&success=1";
                        $Codemaker = rand(10000, 200000000);
						unset($_SESSION['goldAmount']);
						unset($_SESSION['cost']);
						foreach($packages as $package){
							if($package['id'] == $_GET['product']){
								$_SESSION['goldAmount'] = $package['gold'];
								$_SESSION['cost'] = $package['cost'];	
							//	var_dump($package)	;				
							}
						}
						if(!isset($_SESSION['goldAmount'])||empty($_SESSION['goldAmount'])){
							header('Location: dorf1.php' );

						}
						//die();
						//var_dump($session->uid);die();
                        $goldenb = $_SESSION['goldAmount'];

                        $price =  $_SESSION['cost'];
                        $apikey = $config['ZarinpalapiKey'];
                        $dtest = sprintf(" buy  %s Travian Gold " , $_SESSION['goldAmount']);


                        // توضیحات بیشتر در بخش توسعه دهندگان : developer.parspal.com
                
                        // کلید اتصال درگاه
//$apikey      = '00000000aaaabbbbcccc000000000000';
                
                        // اطلاعات اختیاری جهت دسترسی به فاکتور یا اطلاعات رزرو - این مقدار به مسیر بازگشت پست می گردد
                        $reserve_id = $session->uid . '_' . $_GET['product'];

                        // اطلاعات اختیاری برای شماره سفارش در سیستم - این مقدار به مسیر بازگشت پست میگردد
                        $order_id = $id;

                        // مبلغ پرداخت -واحد پول پیشفرض سیستم ریال می باشد و در تنظیمات درگاه قابل تغییر است
//$amount      = 1000;
                
                        // مسیر بازگشت به سایت شما پس از انجام یا انصراف کاربر از پرداخت
//$return_url  = 'http://websiteaddress.ir/callback.php';
                
                        // توضیحات  اختیاری خرید یا سفارش
//$description = $session->uid.'_'.$_GET['product'];
                

                        $data = array(
                            "merchant_id" => $apikey,
                            "amount" => $price * 10000,
                            "callback_url" => $ReturnPath,
                            "description" => "خرید سکه بازی",
                            "metadata" => array('email' => $email),
                        );
						//var_dump($_SESSION['cost']);die();

                        $jsonData = json_encode($data);
                        $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
                        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                            'Content-Type: application/json',
                            'Content-Length: ' . strlen($jsonData)
                        )
                        );

                        $result = curl_exec($ch);
                        $err = curl_error($ch);
                        $result = json_decode($result, true);
                        curl_close($ch);
						//var_dump($result);
                        if ($result['data']['code'] == 100) {
							$database->query("INSERT INTO payments VALUES(NULL,'zarinpal:".$result['data']["authority"]."','',".time().",".$session->uid.",".$_SESSION['goldAmount'].",'".$_SESSION['cost']."')");
					
                            header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
                        } else {
                            $message = $response["message"];// توضیحات فارسی در رابطه با وضعیت درخواست
                            echo "خطا در ثبت درخواست پرداخت! وضعیت خطا : " . $status . " - توضیحات : " . $message;
                        }




                    } else {
                        echo '<p align="center">
	<fieldset style="padding: 0">
	<legend>تقلب</legend>
      شما سعی دارید در خرید طلا تقلب کنید. لطفا از کار خود دست بردارید. در غیر این صورت اکانت شما به مولتی هانتر گزارش خواهد شد.<br />
      ایپی شما در سرور ثبت شد
	</fieldset></p>';


                    }
                }
			}else{

			}
?>