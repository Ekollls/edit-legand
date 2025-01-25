<?php


header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set("Asia/Tehran");
$get_data = file_get_contents("php://input");
$get_all_data = json_decode($get_data,true);


$apikey="6702705183:AAEPcPXBLoMwGc8sXVa-ZYsBSJq_W2xzi6o";

include "botConfig.php";
include "jdf.php";
    //$conn = new mysqli($servername, $username, $password, $dbname);
    $menu1 = ["keyboard" => [["احراز تلگرامی در سرور جدید"],["تاریخچه جهان بازی های احراز شده"]], "one_time_keyboard" => true, "resize_keyboard" => true];

    $encodedmenu1 = json_encode($menu1);

   
    
    $chatfirst_name = $get_all_data["message"]["chat"]["first_name"];
    $chatlast_name = $get_all_data["message"]["chat"]["last_name"];
    $chattext = $get_all_data["message"]["text"];
    $newline = urlencode("\n");


    //file_get_contents($API . "sendChatAction?chat_id=" . $chatID . "&action=typing");
    $chatID = $get_all_data["message"]["chat"]["id"];
    $data = array("botoken" => $apikey,
    "user" => $chatID
    );
    $javab=ffiran($data);
   // print_r($javab);
   $sql = "SELECT * FROM telusers where telid='".$chatID."'";
$useractive =0;
$result = mysqli_query($conn, $sql);

if($chattext=="/start"){
   
    $confirmationMessage="به بات ترامین خوش امدید";

    $sendMessageUrl = 'sendMessage?' . http_build_query([
                    'reply_markup'=> $encodedmenu1,
                    'chat_id' => $chatID,
                    'text' => $confirmationMessage,
                ]);
                $data = array("botoken" => $apikey,
        "data" => $sendMessageUrl
        );
        $javab11=ffiran($data);
  }
if ($javab['ok'] && ($javab['result']['status'] == 'member' || $javab['result']['status'] == 'creator' || $javab['result']['status'] == 'administrator')) {
//inja age ozv bood checkesh konam : ba code 
if(mysqli_num_rows($result)==0){
    $sql22 = "INSERT INTO `telusers`( `telid`, `lastmemcheck`, `status`, `joined`) VALUES ('".$chatID."','".time()."','0','".time()."')";
    $reswwult = mysqli_query($conn, $sql22);
    $confirmationMessage="با موفقیت در بات ثبت نام شدید .چه کمکی از دستمون بر میاد؟";

    $sendMessageUrl = 'sendMessage?' . http_build_query([
                    'reply_markup'=> $encodedmenu1,
                    'chat_id' => $chatID,
                    'text' => $confirmationMessage,
                ]);
                $data = array("botoken" => $apikey,
        "data" => $sendMessageUrl
        );
        $javab=ffiran($data);
        die();
}
if($chattext == "احراز تلگرامی در سرور جدید"){
    $confirmationMessage="لطفا کد احراز هویتی خود را با فرمت /code_123456 ارسال کنید";

    $sendMessageUrl = 'sendMessage?' . http_build_query([
                    'reply_markup'=> $encodedmenu1,
                    'chat_id' => $chatID,
                    'text' => $confirmationMessage,
                ]);
                $data = array("botoken" => $apikey,
        "data" => $sendMessageUrl
        );
        $javab=ffiran($data);
        die();
}
if($chattext == "تاریخچه جهان بازی های احراز شده"){
    $sql = "SELECT * FROM botusersshaker where telid='".$chatID."'";
    $useractive =0;
    if ($result = mysqli_query($conn, $sql)) {
        $useractive = mysqli_num_rows($result);
    }
    if($useractive>0){
        //user sabt daare mikhad roozane tala begire :
        $i=0;
        $serversplay="";
        while($result1 =mysqli_fetch_array($result)){
            $srv=$result1["servtoken"];
            $srv=explode("_",$srv);
           
            $serversplay .=" سرور : ".$srv[0]." شروع : ".jdate('J F V H:i:s',$srv[1])." \n";
        }
       
        $confirmationMessage=" در سرور های زیر افتخار میزبانیتونو داشتیم \n". $serversplay;

        $sendMessageUrl = 'sendMessage?' . http_build_query([
            'reply_markup'=> $encodedmenu1,
            'chat_id' => $chatID,
            'text' => $confirmationMessage,
        ]);
        $data = array("botoken" => $apikey,
"data" => $sendMessageUrl
);
$javab=ffiran($data);
die();
    }else{
        //useri sabt ndre byd code bzne subs she 
        $confirmationMessage="شما تا کنون در بات ترامین احراز نشده اید.";

        $sendMessageUrl = 'sendMessage?' . http_build_query([
            'reply_markup'=> $encodedmenu1,
            'chat_id' => $chatID,
            'text' => $confirmationMessage,
        ]);
        $data = array("botoken" => $apikey,
"data" => $sendMessageUrl
);
$javab=ffiran($data);
die();
    }

  
}
if (strpos($chattext, "/code_",0) !== false ) {
    $code=explode("_",$chattext);
    
    if(!empty($code[1])){
        $sql = "SELECT * FROM botusersshaker where shaker='".$code[1]."'";
    $useractive =0;
    if ($result = mysqli_query($conn, $sql)) {
        $useractive = mysqli_num_rows($result);
        $shdata=mysqli_fetch_array($result);
    }
    if($useractive>0){
        $sqld = "SELECT id  FROM botusersshaker where servtoken='".$shdata["servtoken"]."' AND telid='".$chatID."' ";
        $resultd = mysqli_query($conn, $sqld);
        $telreginsrv = mysqli_num_rows($resultd);
      
        //$telreginsrv["okshod"]
        if($telreginsrv>0){
            $confirmationMessage="شما قبلا برای یک اکانت دیگر احراز شده اید.در صورت مشاهده مولتی اکانت بن خواهید شد.";

            $sendMessageUrl = 'sendMessage?' . http_build_query([
                'reply_markup'=> $encodedmenu1,
                'chat_id' => $chatID,
                'text' => $confirmationMessage,
            ]);
            $data = array("botoken" => $apikey,
    "data" => $sendMessageUrl
    );
    $javab=ffiran($data);
    die();
        }
    }else{
        $confirmationMessage="کد صحیح نیست.مجددا تلاش کنید.";

        $sendMessageUrl = 'sendMessage?' . http_build_query([
            'reply_markup'=> $encodedmenu1,
            'chat_id' => $chatID,
            'text' => $confirmationMessage,
        ]);
        $data = array("botoken" => $apikey,
"data" => $sendMessageUrl
);
$javab=ffiran($data);
die();
    }
        $sqlcode = "UPDATE botusersshaker set  telid='".$chatID."' where shaker='".$code[1]."' AND telid='0' ";
        $resultcode = mysqli_query($conn, $sqlcode);
        if($resultcode){
            $srv=$shdata["servtoken"];
            $srv=explode("_",$srv);

            $confirmationMessage="با تشکر از  شما.با موفقیت احراز شدید.جایزه شما هم اکنون در ".$srv[0]." قابل دریافت است.";

            $sendMessageUrl = 'sendMessage?' . http_build_query([
                'reply_markup'=> $encodedmenu1,
                'chat_id' => $chatID,
                'text' => $confirmationMessage,
            ]);
            $data = array("botoken" => $apikey,
    "data" => $sendMessageUrl
    );
    $javab=ffiran($data);
    die();
        }else{
            $confirmationMessage="کد صحیح نیست.مجددا تلاش کنید.";

            $sendMessageUrl = 'sendMessage?' . http_build_query([
                'reply_markup'=> $encodedmenu1,
                'chat_id' => $chatID,
                'text' => $confirmationMessage,
            ]);
            $data = array("botoken" => $apikey,
    "data" => $sendMessageUrl
    );
    $javab=ffiran($data);
    die();
        }
       
    }
}


}else{
    $confirmationMessage="شما در چنل ترامین عضو نیستید برای استفاده از بات باید در کانال @Tramian عضو باشید";
$sendMessageUrl = 'sendMessage?' . http_build_query([
    'reply_markup'=> $encodedmenu1,
                'chat_id' => $chatID,
                'text' => $confirmationMessage,
            ]);
            $data = array("botoken" => $apikey,
    "data" => $sendMessageUrl
    );
    $javab=ffiran($data);
    //print_r($javab);
    die();
}
function ffiran($data){
   if(isset($data["user"])){
    $jsonData = json_encode($data);
    $ch = curl_init('http://msrv2.traviandesign.ir/tramian/telRequestForwarder.php');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    
    $result = curl_exec($ch);
    $err = curl_error($ch);
    $result = json_decode($result, JSON_PRETTY_PRINT);
    curl_close($ch);
    $var["ok"]=0;
    if($result["ok"]==1){
        return $result ;
    }else{
        return $var;
    }
   }else{
    $jsonData = json_encode($data);
    $ch = curl_init('http://msrv2.traviandesign.ir/tramian/telRequestForwarder.php');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    
    $result = curl_exec($ch);
    $err = curl_error($ch);
    $result = json_decode($result, JSON_PRETTY_PRINT);
    curl_close($ch);
   
        return $result ;
   
   }

}
?>