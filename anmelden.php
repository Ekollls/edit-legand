<?php
include('application/Account.php');

if(!empty($_GET['ref'])){$inviter=$database->filterstringvalue($_GET['ref']);}

?>


<?php include("application/views/html.php");?>
<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE login  perspectiveBuildings <?php echo DIRECTION; ?> season- buildingsV3">
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
           
                <div class="contentContainer">
                    <div id="content" style="    padding: 76px 6px 10px;" class="signup"><h1 class="titleInHeader"><?php echo REG; ?></h1>
                        <?php if($_SESSION['isOkay']){ ?><b style="color:blue;"><?php echo $_SESSION['isOkay']; ?></b><br><br><?php } ?>
                        <?php if($database->config()['regstatus']){ ?>
                        <h4 class="round"><?php echo REGISTER_USERINFO; ?></h4>
                        <form name="snd" method="post" action="anmelden.php">
                            <input type="hidden" name="ft" value="a1" />
                            <table cellpadding="0" cellspacing="0" align="center">
                                <tbody>
                               
                                <input class="text" type="hidden" name="referal"  value="<?php if(!empty($inviter) && is_numeric($inviter)){echo $database->getUserField($inviter,'username',0); }elseif(!empty($inviter) && !is_numeric($inviter)){
                                            echo $inviter;
                                        } ?>" maxlength="15"  />
                                    

                                <th><?php echo NICKNAME; ?></th>
                                <td><input class="text" type="text" name="name" placeholder="<?=anlm0?>" value="<?php echo $form->getValue('name'); ?>" maxlength="15" />
                                    <span class="error"><?php echo $form->getError('name'); ?></span>
                                </td>

                                <tr>
                                    <th><?php echo EMAIL; ?></th>
                                    <td>
                                        <input class="text" type="text"  placeholder="<?=anlm1?>"  name="email" value="<?php echo stripslashes($form->getValue('email')); ?>" />
                                        <span class="error"><?php echo $form->getError('email'); ?></span>
                                    </td>
                                </tr>
                                <tr class="btm">
                                    <th><?php echo PASSWORD; ?></th>
                                    <td>
                                        <input class="text" type="password"  placeholder="<?=anlm2?>" name="pw" value="<?php echo stripslashes($form->getValue('pw')); ?>" maxlength="30" />
                                        <span class="error"><?php echo $form->getError('pw'); ?></span>
                                    </td>
                                </tr>
                                <?php
                                $ip = $_SERVER['REMOTE_ADDR']; // Get the user's IP address
                                $access_key = 'your_access_key'; // Your access key for the geolocation API
                                $geo_data = unserialize(file_get_contents("http://ip-api.com/php/$ip"));
                                $country_code = strtolower($geo_data['countryCode']); // Get the country code
                                      //  var_dump($country_code);die();
                                ?>
                               
                                    <input class="text" type="hidden"    name="country" value="<?php echo $country_code; ?>" />

                                    
                               
                                </tbody>
                            </table>
                            <br>
                            <h4 class="round"><?php echo REGISTER_MOREINFO; ?></h4>
	<h5>					
<font size="3" color="red"><b>
قوانین بازی :
</b></font><b>
قوانین بازی : هر سیستمی ممکن است مشکلات و کاستی هایی داشته باشد، همچنین قوانین بازی ممکن است با سایر سایت های تراوین و بازی آنلاین، متفاوت باشد. در صورتی که نمی توانید این نواقص را بپذیرید و این تفاوت ها را قبول کنید از ثبت نام خودداری نمائید. زیرا پذیرفتن این کاستی ها و تفاوت ها قانون ثبت نام در بازی می باشد. البته تیم تراوین در حال رفع این کاستی ها بوده و سعی دارد بهترین بازی آنلاین را برای کاربران گرامی فراهم آورد. قبل از ثبت نام باید بپذیرید که از توهین به سایر کاربران، توهین به مقدسات اسلام و سایر ادیان بپرهیزید همچنین این وبسایت تابع قوانین جمهوری اسلامی ایران می باشد و از پذیرفتن کاربرانی که اعمال آنها ناقض این قوانین باشد معذور است. 
<br><br>
</b>
</h5>

                            <div class="checks">
                                <input class="check" type="checkbox" id="agb" name="agb" value="1" <?php echo $form->getRadio('agb',1); ?>/>
								
                                <label for="agb"><?php echo ACCEPT_RULES; ?></label>
                            </div>
                            <br>
                            <div class="btn">
                                <input type="hidden" name="vid" value="0">
                                <input type="hidden" name="kid" value="0">
                                <button type="submit" value="anmelden" name="s1" class="textButtonV1 green  "  id="btn_signup" title="Register">
                                    <div class="button-container addHoverClick ">
                                        <div class="button-background">
                                            <div class="buttonStart">
                                                <div class="buttonEnd">
                                                    <div class="buttonMiddle"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-content"><?php echo REG; ?></div>
                                    </div>
                                </button>
                            </div>
                        </form>
                        <?php }else{ ?>
                         ورود به سیستم در این سرور بسته شده است.
                        <?php } ?>
                        <div class="clear">&nbsp;</div>

                    </div>
                    <div class="clear"></div>
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
      

    </div>
    <div id="ce"></div></div></div></div>

</body>
</html>
