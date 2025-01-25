<?php

//error_reporting(0);

include("application/Account.php");



?>


<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE login  perspectiveBuildings <?php echo DIRECTION; ?> season- buildingsV3">
<div id="background">
    
    <div id="bodyWrapper">
        <img style="filter:chroma();" src="img/x.gif" id="msfilter" alt=""/>
        <div id="header">
            <div id="mtop">
                <a id="logo" href="<?php echo HOMEPAGE; ?>" target="_blank" title="<?php echo SERVER_NAME; ?>"></a>
                <div class="clear"></div>
            </div>
        </div>
		
        <div id="center">
            <?php include('application/views/menu.php');?>
			
            <div id="contentOuterContainer" class="size1">
			
 
                <div class="contentContainer">
                <h1 class="titleInHeader">Password recovery</h1>
<div id="content" style="padding: 66px 6px 10px;" class="login">
<?php
$npw = $_GET['npw'];
$act = $_GET['code'];
$user = $_GET['user'];
$pagehide = false;
$userid=$database->getUserField($user,'id',1);
if($userid>0){
    $getProc = $database->getNewProc($userid);
    if($npw == $getProc['npw']){
    	if($act == $getProc['act']){
        	$newPassword = md5($getProc['npw'].mb_convert_case($user,MB_CASE_LOWER,"UTF-8"));
        	$database->updateUserField($user, 'password', $newPassword, 0);
            $database->editTableField('newproc', 'proc', 1, 'uid', $userid);
			echo 'A password has changed<br /><br />Log in with a new password<a class="a arrow" href="login.php">Login</a>';
			$database->removeProc($userid);
        }else{
        	echo '<font color="#FF0000">You log in with the wrong code, or it was already used</font>';
        }
    }else{
        	echo '<font color="#FF0000">Wrong code</font>';
        }
}else{
	echo '<font color="#FF0000">Wrong user!	</font>';
}
?>

</div>
                    </div>
</div>
<div style="top:73px;" id="sidebarAfterContent" class="sidebar afterContent">

<?php
 if (NEWSBOX1) {

// Get and display the current default timezone
//$currentTimezone = date_default_timezone_get();
//echo "Current default timezone: " . $currentTimezone . "\n";
//$serverTime = exec('date');

// Display the server's current system time
//echo "Server's current system time: " . $serverTime;

    // $t1 = trim(file_get_contents("Templates/News/newsbox1.tpl"));
    //date_default_timezone_set('America/St_Johns');
     $templateContent = file_get_contents("application/views/News/newsbox1.tpl");
     include_once("jdf.php");
     
     $ttttt = OPENING;
     $ttttt1 = OPENING+7200;
     $ttttt2= ARTEFACTS-86400;
     $ttttt3 = ARTEFACTS;
     $ttttt4 = WW_PLAN;

     $startTime=jdate('J F V H:i:s', $ttttt);
     $startTime1=jdate('J F V H:i:s', $ttttt1);
     $startTime2=jdate('J F V H:i:s', $ttttt2);
     $startTime3=jdate('J F V H:i:s', $ttttt3);
     $startTime4=jdate('J F V H:i:s', $ttttt4);

   
// Define the values to replace placeholders
$serverName = SERVER_NAME;
$speed = SPEED;
//$startTime = "2024-03-04 12:00:00";
$prize = "طلای بازی";

// Replace placeholders with actual values
$formattedContent = sprintf($templateContent, $serverName, $startTime,$startTime1,$startTime2,$startTime3,$startTime4, $prize);

// Output the formatted content
$t1= $formattedContent;
     if (strlen($t1) > 0) {
         ?>
         <div id="sidebarBoxNews1" class="sidebarBox   sidebarBoxNews">
             <div class="sidebarBoxBaseBox">
                 <div class="baseBox baseBoxTop">
                     <div class="baseBox baseBoxBottom">
                         <div class="baseBox baseBoxCenter"></div>
                     </div>
                 </div>
             </div>
             <div class="sidebarBoxInnerBox">
                 <div class="innerBox header noHeader"></div>
                 <div class="innerBox content">
                     <div class="news news1">
                         <a href="#" class="newsContent newsContentWithLink"
                            onclick="$H({data:{cmd:'News',id:'1'}}).dialog(); return false;"><?php echo $t1; ?></a>
                     </div>
                 </div>
                 <div class="innerBox footer">
                 </div>
             </div>
         </div>
     <?php
     }
 }
 if (NEWSBOX2) {
     $t2 = trim(file_get_contents("application/views/News/newsbox2.tpl"));
     if (strlen($t2) > 0) {
         ?>
         <div id="sidebarBoxNews2" class="sidebarBox   sidebarBoxNews">
             <div class="sidebarBoxBaseBox">
                 <div class="baseBox baseBoxTop">
                     <div class="baseBox baseBoxBottom">
                         <div class="baseBox baseBoxCenter"></div>
                     </div>
                 </div>
             </div>
             <div class="sidebarBoxInnerBox">
                 <div class="innerBox header noHeader"></div>
                 <div class="innerBox content">
                     <div class="news news2">
                         <a href="#" class="newsContent newsContentWithLink"
                            onclick="$H({data:{cmd:'News',id:'2'}}).dialog(); return false;"><?php echo $t2; ?></a>
                     </div>
                 </div>
                 <div class="innerBox footer">
                     
                     <?php
//                   <img  src="https://tramian.ir/ax/Kaftarbaz.jpg"  alt="" width="170" height="160" >
?>
                 </div>
                 
             </div>
         </div>
                         
     <?php
     }
 }    ?>     
     </div>
   </div>

<div id="ce"></div>

</body>
</html>
