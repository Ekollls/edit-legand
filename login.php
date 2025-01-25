<?php

//error_reporting(0);

include("application/Account.php");

if(isset($_GET['del_cookie'])) {
	setcookie("COOKUSR","",time()-3600*24,"/login.php");
	setcookie("PW","",time()-3600*24,"/login.php");
	header("Location: login.php");
    exit();
}

if(!isset($_COOKIE['COOKUSR'])) {
	$_COOKIE['COOKUSR'] = "";
}
if(!isset($_COOKIE['PW'])) {
	$_COOKIE['PW'] = "";
}

?>


<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE login  perspectiveBuildings <?php echo DIRECTION; ?> season- buildingsV3">
<div id="background">
    
    <div id="bodyWrapper">
        <img style="filter:chroma();" src="<?=GP_LOCATION2; ?>x.gif" id="msfilter" alt=""/>
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
                    <div id="content" style="padding: 66px 6px 10px;" class="login">
				<p>
			
                        <h1 class="titleInHeader"><?=SIGN6?></h1>
                        <script type="text/javascript">
                            Element.implement({
                                //imgid: falls zu dem link ein pfeil gehört kann dieser "auf/zugeklappt" werden
                                showOrHide: function(imgid) {
                                    //einblenden
                                    if (this.getStyle('display') == 'none'){
                                        if (imgid != ''){
                                            $(imgid).className = 'open';
                                        }
                                    }
                                    //ausblenden
                                    else {
                                        if (imgid != '') {
                                            $(imgid).className = 'close';
                                        }
                                    }
                                    this.toggleClass('hide');
                                }
                            });
                        </script>
                        <?php
                        $loginform = '';
                        $startin = '';
                        if(OPENING > time()){
                            $loginform = "hide";
                        }else{ $startin = "hide"; }
                        ?>
                        <script type="text/javascript">
                            Element.implement({
                                //imgid: falls zu dem link ein pfeil gehört kann dieser "auf/zugeklappt" werden
                                showOrHide: function(imgid) {
                                    //einblenden
                                    if (this.getStyle('display') == 'none'){
                                        if (imgid != ''){
                                            $(imgid).className = 'open';
                                        }
                                    }
                                    //ausblenden
                                    else{
                                        if (imgid != ''){
                                            $(imgid).className = 'close';
                                        }
                                    }
                                    this.toggleClass('hide');
                                }
                            });
                        </script>
                                            <div class="worldStartInfo <?php echo $startin; ?>" id="worldStartInfo">
                        <?php echo LOGIN_SERVER_START; ?>
                        <script language="JavaScript">
                            dthen = <?php echo OPENING; ?>; var dnow = <?php echo time()?>; CountActive = true; CountStepper = -1; LeadingZero = true; DisplayFormat = "%%D%% <?php echo DAYS;?> + %%H%%:%%M%%:%%S%% <?php echo HRS;?>";
                            FinishMessage = "<?php echo STARTNOW;?>";

                            function calcage(secs, num1, num2) {
                                s = ((Math.floor(secs/num1))%num2).toString();
                                if (LeadingZero && s.length < 2) s = "0" + s;
                                return "" + s + "";
                            }

                            function CountBack(secs) {
                                if (secs < 0) { document.getElementById("worldStartInfo").innerHTML = "<a href='login.php'>"+FinishMessage+'</a>'; return; }
                                DisplayStr = DisplayFormat.replace(/%%D%%/g, calcage(secs,86400,100000));
                                DisplayStr = DisplayStr.replace(/%%H%%/g, calcage(secs,3600,24));
                                DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs,60,60));
                                DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs,1,60));

                                document.getElementById("gameStartInfo").innerHTML = DisplayStr;
                                if (CountActive) setTimeout("CountBack(" + (secs+CountStepper) + ")", SetTimeOutPeriod);
                            }

                            function putspan(backcolor, forecolor) { document.write("<div class='countdownContent' id='gameStartInfo'></div>");}

                            if (typeof(BackColor)=="undefined") BackColor = "white";
                            if (typeof(ForeColor)=="undefined") ForeColor= "black";

                            CountStepper = Math.ceil(CountStepper);
                            if (CountStepper == 0)
                                CountActive = false;
                            var SetTimeOutPeriod = (Math.abs(CountStepper)-1)*1000 + 990;
                            putspan(BackColor, ForeColor);
                            var dnow = <?php echo time()?>;
                            if(CountStepper>0)
                                ddiff = new Date(dnow-dthen);
                            else
                                ddiff = new Date(dthen-dnow);
                            gsecs = Math.floor(ddiff);
                            CountBack(gsecs);
                        </script>


                    </div>

                        <div class="outerLoginBox <?php echo @$loginform; ?>">
                            <h2><?php echo $lang['login']['Welcome'].' '; echo SERVER_NAME.' '; ?></h2>
                            <?php if(isset($_GET['email'])){
                               echo "<h2 style=\"color: green;\">ثبت نام با موفقیت انجام شد
                               <br>ایمیل فعال سازی به ادرس ".$_GET['email']." ارسال شده است.در صورتی که به اینباکس نرسیده بود پوشه اسپم نیز بررسی شود.</h2>" ;
                            }?><noscript>
                                <div class="noJavaScript"><?php echo LOGIN_NO_JAVASCRIPT; ?></div>
                            </noscript>




                            <div class="innerLoginBox">
                                <form method="post" name="snd" action="login.php" class="<?php echo @$loginform; ?>">
                                    <input type="hidden" name="ft" value="a4" />
                                    
                                    <table class="transparent loginTable">
                                        <tbody>
                                        <tr class="account">
                                            <td class="accountNameOrEmailAddress"><?php echo $lang['login']['Username']; ?>:</td>
                                            <td><input class="text" type="text" name="user" maxlength="35" autocomplete='off' /> <span class="error"> <?php echo $form->getError("user"); ?></span></td>
                                            <!--<div class="error <?php echo DIRECTION; ?>"><?php echo $form->getError("user"); ?></div>-->


                                        </tr>
                                        <tr class="pass">
                                           <td> <?php echo $lang['login']['Password']; ?>:</td>
											<td><input class="text" type="password" name="pw" maxlength="20" autocomplete='off' /> 
                                            <span class="error"><br><?php echo $form->getError("pw"); ?></span></td>
                                            <!--<div class="error <?php echo DIRECTION; ?>"><?php echo $form->getError("pw"); ?></div>-->


                                        </tr>

                                        <tr class="lowResOption">
                                                            <td><?php echo $lang['login']['Notice1']; ?> </td>
                                                            <td colspan="2">
                                                                <input type="checkbox" class="checkbox" id="lowRes" name="lowRes" value="">
                                                                <label for="lowRes"><?php echo $lang['login']['Notice2']; ?></label>
                                                            </td>
                                                        </tr>
                                        <tr class="lowResInfo">
                                        <td colspan="3"><?php echo $lang['login']['Notice3']; ?></td>
                </tr>

                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                        <button type="submit" value="<?php echo $lang['login']['Login']; ?>" name="s2" id="s2" class="textButtonV1 green " onclick="document.login.w.value=screen.width+':'+screen.height;">
                                            <div class="button-container addHoverClick ">
                                                <div class="button-background">
                                                    <div class="buttonStart">
                                                        <div class="buttonEnd">
                                                            <div class="buttonMiddle"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-content"><?php echo $lang['login']['Login']; ?></div>
                                            </div>
                                        </button>

                                        </td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </form>
                                        <?php //} ?>
                                </div>
                            </div>

                            <div class="clear"></div>
                        <div class="greenbox passwordForgotten">
                            <div class="greenbox-top"></div>
                            <div class="greenbox-content">
                                <div class="passwordForgottenLink">
                                    <a onClick="$('showPasswordForgotten').showOrHide('arrow');" href="<?php if(isset($_GET['action'])){ echo'#'; }else{ echo'?action=forgotPassword'; }?>" class="showPWForgottenLink">
                                        <img class="close" id="arrow" src="<?=GP_LOCATION2; ?>x.gif"><?php echo $lang['login']['ForgetPW1']; ?>
                                    </a>
                                </div>
                                <div class="showPasswordForgotten <?php if(isset($_GET['action']) && $_GET['action']=='forgotPassword'){}else{ echo'hide'; }?>" id="showPasswordForgotten">
                                    <?php if(isset($_GET['finish'])){ ?>
                                        <font color="#008000"><?php echo LOGIN_PW_SENT; ?></font>
                                    <?php }else{ ?>
                                        <form method="post">
                                            <input type="hidden" name="forgotPassword" value="1">
                                            <div class="forgotPasswordDescription"><?php echo $lang['login']['ForgetPW2']; ?></div>
                                            <table class="transparent pwForgottenTable" id="pw_forgotten_form" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                <tr class="mail">
                                                    <th><?php echo $lang['login']['ForgetPW3']; ?></th>
                                                    <td>
                                                        <input class="text" type="text" name="pw_email" value=""><br><div class="error <?php echo DIRECTION; ?>"><?php echo $form->getError("pw_email"); ?></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td colspan="2">
                                                        <button type="submit" value="<?php echo $lang['login']['ForgetPW4']; ?>" name="s2" id="s2" class="textButtonV1 green " onclick="document.login.w.value=screen.width+':'+screen.height;">
                                                            <div class="button-container addHoverClick ">
                                                                <div class="button-background">
                                                                    <div class="buttonStart">
                                                                        <div class="buttonEnd">
                                                                            <div class="buttonMiddle"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=""><?php echo $lang['login']['ForgetPW4']; ?></div>
                                                            </div>
                                                        </button>

                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="greenbox-bottom"></div>
                            <div class="clear"></div>
                        </div>
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
