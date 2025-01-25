<?php
include('application/Account.php');
if(!isset($_GET['code'])){
    $pData = array(
        'BClass' => 'activate',
        'CClass' => 'activate',
    );

    $Token = $_GET['token'];
    $actData = $database->queryFetch('SELECT * FROM activate WHERE `password` = "'.$Token.'"');
    
    if(!$actData['id'] && !$_SESSION['usrname']){
        header('Location: login.php'); exit(); 
    }else{
        if(!$_SESSION['usrname'] && $actData['username']){
            $_SESSION['usrname'] = $actData['username'];
        }
    }
    

    require_once("application/views/html.php");
    require_once("application/views/main/Top_Out.php");
    require_once("application/views/menu.php");

    if(!$_SESSION['step']) $_SESSION['step'] = 1;

    switch($_GET['page']){
        case 'vid': $_SESSION['step'] = 1; break; 
        case 'sector': $_SESSION['step'] = 2; break; 
        case 'confirmation': $_SESSION['step'] = 3; break; 
    }

    switch($_SESSION['step']){
        // Select Tribe
        case 1: 
            if(isset($_POST) && $_POST){
                TRI5BES ? $vids = array(1,2,3,6,7) : $vids = array(1,2,3);
                if(in_array($_POST['vid'], $vids) && is_numeric($_POST['vid'])){
                    $_SESSION['step'] = 2;
                    $_SESSION['vid'] = $_POST['vid'];

                    header('Location: activate.php?page=sector');
                }  
            }
            require_once("application/views/activate/Tribes.php"); 
        break;

        // Select Sector
        case 2:
            if(!$_SESSION['vid']){ $_SESSION['step'] = 1; header('Location: activate.php?page=vid'); exit(); }

            if(isset($_POST) && $_POST){
                print_r($_POST); 
                if(in_array($_POST['sector'], array('nw','no','sw','so'))){
                    $_SESSION['step'] = 3;
                    $_SESSION['sector'] = $_POST['sector'];
                    header('Location: activate.php?page=confirmation');
                }  
            }
            require_once("application/views/activate/Sectors.php"); 
        break;

        // Confirmation
        case 3:
            if(!$_SESSION['vid'] || !$_SESSION['sector']){ 
                $_SESSION['step'] = 1; 
                header('Location: activate.php?page=vid'); 
                exit(); 
            }
            
        
            if(isset($_POST) && $_POST){
                $database->query("UPDATE activate set tribe = ".$_SESSION['vid']." where `username`='".$_SESSION['usrname']."'");
            	switch($_SESSION['sector']) {
                    default: $sector = "1"; break;
                    case "no": $sector = "3"; break;
                    case "nw": $sector = "4"; break;
                    case "sw": $sector = "1"; break;
                    case "so": $sector = "2"; break;
                }
                $database->query("UPDATE activate set location= ".$sector." where `username`='".$_SESSION['usrname']."'");
                $_SESSION['username'] = $_SESSION['usrname'];

                $account->Activate();
            }
            
            require_once("application/views/activate/Confirm.php"); 
        break;
    }

    require_once("application/views/footer.php");

}else{
    // the old sh#t
    if(!empty($_GET['ref'])){$inviter=$database->filterstringvalue($_GET['ref']);}

?>


<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE login perspectiveBuildings <?php echo DIRECTION; ?> season- buildingsV1">
<div id="background">
    
    <div id="bodyWrapper">
        <img style="filter:chroma();" src="<?= GP_LOCATION2 ?>x.gif" id="msfilter" alt=""/>
        <div id="header">
            <div id="mtop">
                <a id="logo" href="<?php echo HOMEPAGE; ?>" target="_blank" title="<?php echo SERVER_NAME; ?>"></a>
                <div class="clear"></div>
            </div>
        </div>
        <div id="center">
            <?php include('application/views/menu.php');?>
            <div id="contentOuterContainer" class="size1">
                <div class="contentTitle">&nbsp;</div>
                <div class="contentContainer">
                    <div id="content" class="signup"><h1 class="titleInHeader">Sign up</h1>
<?php


	include("application/views/activate/activate.php");


?> <div class="clear"></div>
                </div>
                <div class="contentFooter">&nbsp;</div>
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


    </div>
    <div id="ce"></div></div></div>

</body>
</html>
<?php } ?>