<?php
$aid = $session->alliance;
$levels = array(0 => 0, 1 => 1200000, 2 => 5600000, 3 => 17100000, 4 => 51200000, 5 => 153600000);
		
$allianceinfo = $database->getAlliance($aid);
$alldonation=$database->getAllDonation($aid);
$donateinfo = $database->getAllMemberforBoun($aid,0);
$donateinfo1 = $database->getMemberforBoun($session->uid)[0];
//var_dump($alldonation );die();
$dailyinfo = $database->getUserField($session->uid, 'dailydonate', 0);
$dailyreset = $database->getUserField($session->uid, 'ddonatereset', 0);
$dailylimit=300000*SPEED;
$vv=$dailyinfo / $dailylimit; 
if(intval($vv)>=1){
    $full=1;

}else{
    $full=0;
}
$currentStatus = $database->calculateCurrentStatus($aid);
//var_dump($currentStatus);die();
//echo "<h1>".$database->RemoveXSS($allianceinfo['tag'])." - ".$database->RemoveXSS($allianceinfo['name'])."</h1>";
include ("alli_menu.php");
?>
 <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: auto; /* Enables scrolling */
        }
        
    </style>
<div>
    <div class=" contentPage">



        <div class="alliance allianceBonuses">

            <div id="allianceBonusWrapper" class="alliance-bonuses-overview alliance-bonuses-details">
                <div class="header">
                    <div class="description">
                        کار تیمی رمز موفقیت در دنیای تراوین است. با کمک به تأمین منابع، جوایزی را برای کل اتحاد خود به
                        ارمغان ببرید و برتری‌تان را نسبت به سایرین افزایش دهید. با توجه به اینکه فعال کردن یک امتیاز
                        ویژه نیاز به میزان زیادی منابع دارد، کل اتحاد می بایست برای رسیدن به این هدف همکاری کنند و برای
                        رسیدن به امتیاز ویژه حمایت از راه اهداء منابع انجام دهند.
                    </div>
                </div>
                <div id="contributionBox" class="roundedCornersBox">
                    <div class="contributionIconLarge"></div>
                    <h4>مشارکت در ارسال منابع</h4>
                    <div id="contributionForm"> <input type="hidden" id="gold" value="1">
                        <input type="hidden" id="canTriple" value="1">
                        <input type="hidden" id="bid">
                        <input type="hidden" id="did" value="27971">
                        <input type="hidden" id="limitReached" value="<?=$full?>">
                        <div id="bonusSelection">

                            <div data-index="0" class="bonusButtonRound">
                                <img src="img/x.gif" alt="" class="bonusIconRecruitment">
                            </div>
                            <input type="radio" name="bonus" value="TroopProductionSpeed" id="bonusTroopProductionSpeed"
                                onchange="Travian.Game.AllianceDonation.checkButtonState('donate')">
                            <label for="bonusTroopProductionSpeed">
                                آزمون </label>
                            <div class="clear"></div>
                            <div data-index="1" class="bonusButtonRound">
                                <img src="img/x.gif" alt="" class="bonusIconPhilosophy">
                            </div>
                            <input type="radio" name="bonus" value="CPProduction" id="bonusCPProduction"
                                onchange="Travian.Game.AllianceDonation.checkButtonState('donate')">
                            <label for="bonusCPProduction">
                                فلسفه </label>
                            <div class="clear"></div>
                            <div data-index="2" class="bonusButtonRound">
                                <img src="img/x.gif" alt="" class="bonusIconMetallurgy">
                            </div>
                            <input type="radio" name="bonus" value="SmithyPower" id="bonusSmithyPower"
                                onchange="Travian.Game.AllianceDonation.checkButtonState('donate')">
                            <label for="bonusSmithyPower">
                                فلز کاری </label>
                            <div class="clear"></div>
                            <div data-index="3" class="bonusButtonRound">
                                <img src="img/x.gif" alt="" class="bonusIconCommerce">
                            </div>
                            <input type="radio" name="bonus" value="MerchantCapacity" id="bonusMerchantCapacity"
                                onchange="Travian.Game.AllianceDonation.checkButtonState('donate')">
                            <label for="bonusMerchantCapacity">
                                تجارت </label>
                            <div class="clear"></div>
                        </div>

                        <div id="resourceSelection">
                            <table class="resourceSelection transparent">
                                <tbody>
                                    <tr>
                                        <td class="resourceIcon">
                                            <a
                                                onclick="Travian.Game.AllianceDonation.fillUp(document.getElementById('donate1'), <?=ROUND($village->awood)?>, 'donate')">
                                                <i class="r1"></i> </a>
                                        </td>
                                        <td class="resourceName">چوب</td>
                                        <td class="resourceInput ratiortl">
                                            <input id="donate1" class="text" type="text" inputmode="numeric"
                                                maxlength="7" size="5" value="0"
                                                onkeyup="Travian.Game.AllianceDonation.checkAndChange(this, <?=ROUND($village->awood)?>, 'donate')">&nbsp;\&nbsp; <a onclick="Travian.Game.AllianceDonation.fillUp(document.getElementById('donate1'), <?=ROUND($village->awood)?>, 'donate')">
                                               <?=ROUND($village->awood)?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="resourceIcon">
                                            <a
                                                onclick="Travian.Game.AllianceDonation.fillUp(document.getElementById('donate2'), <?=ROUND($village->aclay)?>, 'donate')">
                                                <i class="r2"></i> </a>
                                        </td>
                                        <td class="resourceName">خشت</td>
                                        <td class="resourceInput ratiortl">
                                            <input id="donate2" class="text" type="text" inputmode="numeric"
                                                maxlength="7" size="5" value="0"
                                                onkeyup="Travian.Game.AllianceDonation.checkAndChange(this, <?=ROUND($village->aclay)?>, 'donate')">&nbsp;\&nbsp; <a onclick="Travian.Game.AllianceDonation.fillUp(document.getElementById('donate2'), <?=ROUND($village->aclay)?>, 'donate')">
                                               <?=ROUND($village->aclay)?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="resourceIcon">
                                            <a
                                                onclick="Travian.Game.AllianceDonation.fillUp(document.getElementById('donate3'), <?=ROUND($village->airon)?>, 'donate')">
                                                <i class="r3"></i> </a>
                                        </td>
                                        <td class="resourceName">آهن</td>
                                        <td class="resourceInput ratiortl">
                                            <input id="donate3" class="text" type="text" inputmode="numeric"
                                                maxlength="7" size="5" value="0"
                                                onkeyup="Travian.Game.AllianceDonation.checkAndChange(this, <?=ROUND($village->airon)?>, 'donate')">&nbsp;\&nbsp; <a onclick="Travian.Game.AllianceDonation.fillUp(document.getElementById('donate3'), <?=ROUND($village->airon)?>, 'donate')">
                                               <?=ROUND($village->airon)?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="resourceIcon">
                                            <a
                                                onclick="Travian.Game.AllianceDonation.fillUp(document.getElementById('donate4'), <?=ROUND($village->acrop)?>, 'donate')">
                                                <i class="r4"></i> </a>
                                        </td>
                                        <td class="resourceName">گندم</td>
                                        <td class="resourceInput ratiortl">
                                            <input id="donate4" class="text" type="text" inputmode="numeric"
                                                maxlength="7" size="5" value="0"
                                                onkeyup="Travian.Game.AllianceDonation.checkAndChange(this, <?=ROUND($village->acrop)?>, 'donate')">&nbsp;\&nbsp;
                                                <a onclick="Travian.Game.AllianceDonation.fillUp(document.getElementById('donate4'), <?=ROUND($village->acrop)?>, 'donate')">
                                                <?=ROUND($village->acrop)?></a>
                                                
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>

                            <div class="resourceSum">
                                <img src="img/x.gif" alt="" class="resAllBigIcon"> <span class="sumText">جمع:</span>
                                <span id="donateSum" class="sumValue">0</span>
                            </div>

                        </div>
                        <div class="clear"></div>
                        <div id="contributeButtons">
                            <button type="button" value="مشارکت ×3" id="donate_gold" class="textButtonV1 gold  disabled"
                                onclick="if(jQuery(this).hasClass('disabled')){event.stopPropagation(); return false;} else {Travian.Game.AllianceDonation.donate('donate', this.id, Travian.Game.AllianceDonation.getDonationParams('donate', this))}"
                                onfocus="jQuery('button', 'input[type!=hidden]', 'select').focus(); event.stopPropagation(); return false;"
                                version="textButtonV1">
                                مشارکت ×3</button>
                            <script type="text/javascript" id="donate_gold_script">
                                jQuery(function () {
                                    jQuery('button#donate_gold').click(function () {
                                        jQuery(window).trigger('buttonClicked', [this, { "type": "button", "value": "\u0645\u0633\u0627\u0647\u0645\u0629 \u00d73", "name": "", "id": "donate_gold", "class": "textButtonV1 gold  disabled", "title": "\u0645\u0633\u0627\u0647\u0645\u0629", "confirm": "", "onclick": "if(jQuery(this).hasClass(\u0027disabled\u0027)){event.stopPropagation(); return false;} else {Travian.Game.AllianceDonation.donate(\u0027donate\u0027, this.id, Travian.Game.AllianceDonation.getDonationParams(\u0027donate\u0027, this))}", "onfocus": "jQuery(\u0027button\u0027, \u0027input[type!=hidden]\u0027, \u0027select\u0027).focus(); event.stopPropagation(); return false;", "version": "textButtonV1" }]);
                                    });
                                });
                            </script>
                            <button type="button" value="مشارکت" id="donate_green" class="textButtonV1 green  disabled"
                                onclick="if(jQuery(this).hasClass('disabled')){event.stopPropagation(); return false;} else {Travian.Game.AllianceDonation.donate('donate', this.id, Travian.Game.AllianceDonation.getDonationParams('donate', this))}"
                                onfocus="jQuery('button', 'input[type!=hidden]', 'select').focus(); event.stopPropagation(); return false;"
                                version="textButtonV1">
                                مشارکت</button>
                            <script type="text/javascript" id="donate_green_script">
                                jQuery(function () {
                                    jQuery('button#donate_green').click(function () {
                                        jQuery(window).trigger('buttonClicked', [this, { "type": "button", "value": "\u0645\u0633\u0627\u0647\u0645\u0629", "name": "", "id": "donate_green", "class": "textButtonV1 green  disabled", "title": "\u0645\u0633\u0627\u0647\u0645\u0629", "confirm": "", "onclick": "if(jQuery(this).hasClass(\u0027disabled\u0027)){event.stopPropagation(); return false;} else {Travian.Game.AllianceDonation.donate(\u0027donate\u0027, this.id, Travian.Game.AllianceDonation.getDonationParams(\u0027donate\u0027, this))}", "onfocus": "jQuery(\u0027button\u0027, \u0027input[type!=hidden]\u0027, \u0027select\u0027).focus(); event.stopPropagation(); return false;", "version": "textButtonV1" }]);
                                    });
                                });
                            </script>
                        </div>
                        <div id="bonusNotSelectedMessage">

                            یک امتیاز ویژه انتخاب کنید.
                        </div>
                        <div class="clear"></div>
                        <script>
                            Travian.Game.AllianceDonation.initContributeDisabledAction();
                        </script>
                    </div>
                </div><?php

                ?>
                <div id="myDailyContributionLimit"> <input type="hidden" id="dailyLimit" value="300000000">
                    <input type="hidden" id="donatedToday" value="0">
                    <div id="dailyContributionTitle">
                        حد مجاز مشارکت من در روز ( ریست در : <strong><span class="timer" counting="down"
                                value="<?php echo  86400-(time()-$dailyreset);?>">18:52:50</span></strong>)&lrm;
                    </div>
                    <div class="progressBarDailyLimit"
                        data-tooltip="كمية الموارد التي ما يزال بإمكانك المساهمة بها: [AMOUNT]">
                        <div id="dailyContributionTitleArrow" class="greenArrow" style='width: <?=$vv*100?>%;'></div>
                        <div id="dailyContributionTitleText" class="contributionText">
                            <span class="donationValueNumber"><?=number_format($dailyinfo)?></span>\<span
                                class="donationMaxNumber"><?=number_format($dailylimit)?></span> </div>
                    </div>
                    <div class="clear"></div>
                    <div class="bonus-donation-response"></div>
                </div>
                <h4 class="round">بررسی امتیاز ویژه اتحاد</h4>
                <div id="allianceBonusOverview">
                    <div class="roundedCornersBox bonusBox" id="bonusBox0">
                        <h4>
                            <button type="button" class="icon bonusCollapse" ref="bonusInfo0" useicon=""><img
                                    src="img/x.gif" class="openedClosedSwitch switchOpened"></button> <span>
                                <strong> آموزش</strong> - امتیاز ویژه آموزش سریع نیروها </span>
                        </h4>
                        <?php
                        //var_dump($currentStatus);die();
                        
                        ?>
                        <div class="bonusBar">
                            <img src="img/x.gif" title="" alt="" class="bonusIconRecruitment">
                            <div class="progressBar">
                            <div class="levelIndicator level0">
                                    <div class="indicator">+0% <div class="arrow"></div>
                                        <div class="crown"></div>
                                    </div>
                                </div>
                                <div class="levelPercentages" >
                                    <?php
                                    $nowlvl=$currentStatus['tLevel'];
                                    $zarib=2;
                                    for($iu=1;$iu<=5;$iu++){
                                        if($iu<=$nowlvl){
                                            $ttx="reached";
                                        }else{
                                            $ttx="notreached";
                                        }
?>
<div class="level<?=$iu?> <?=$ttx?>">+<?php echo $iu*$zarib; ?>%</div>
                                        <?php
                                    }
                                    ?>
                                    
                                   
                                </div>
                                <div class="levels">

                                    
                                    <?php
                                    for($iu=1;$iu<=5;$iu++){
                                        if($iu<=$nowlvl){
                                            $ttx="reached";
                                        }else{
                                            $ttx="notreached";
                                        }
?>

 <span class="levelTooltip<?=$iu?>"> </span>
 <div class="level<?=$iu?> <?=$ttx?>" title=""></div>

                                        <?php
                                    }
                                    
                                   
                                    ?>
                                   
                                </div>
                                <div class="front">
                                    <div class="back" style="width: <?=$currentStatus['tprec']?>%"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="bonusActivationMessage hide">
                            </div>
                        </div>
                        <div class="bonusInfo collapsed  bonusInfo0">
                            <div class="descriptionWrapper">
                                <div class="bonusExtendedDescription bonusImage0">
                                    <div class="textContent">
                                        اشتراک‌گذاری بینش‌های نظامی می‌تواند نقش بسزایی در پیروزی در جنگ داشته باشد.
                                        پیشرفت‌های حاصل در حوزه توسعه ماشین‌های جنگی و مربیان مجرب باعث افزایش سریعتر
                                        بزرگی ارتش شما خواهد شد.
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="bonusStatistics">
                                <div class="top5Wrapper" style="width: 47.5%;" id="statLeft">
                                    <h4 class="round small top"><strong>مشارکت کننده های هفته </strong></h4>
                                    <table cellspacing="1" cellpadding="1" class="top5 row_table_data"
                                        id="top5_contributors_week">
                                        <thead>
                                            <tr>
                                                <td class="ra">شماره</td>
                                                <td class="pla">بازیکن</td>
                                                <td class="val">منابع</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                            <?php
                                            $allimem=$database->getAllMemberforBoun($aid,1);
                                            $allimemm=count($allimem);
                                            $counteeer=($allimemm>=5)?5:$allimemm;
                                            for ($i = 0; $i < $counteeer; $i++) {

                                                ?>
                                                <tr class="hover ">
                                                    <td class="ra fc"><?php echo $i+1; ?>.&nbsp;</td>
                                                    <td class="pla">
                                                        <span class="archived"><a href="spieler.php?uid=<?=$allimem[$i]['id']?>"><?=$allimem[$i]['username']?></a></span>
                                                    </td>
                                                    <td class="val lc"><?=$allimem[$i]['point']?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="3" class="empty"></td>
                                            </tr>
                                            <tr class="own hl">
                                                <td class="ra fc">
                                                    ? </td>
                                                <td class="pla">
                                                    <a href="spieler.php?uid=<?php echo $session->uid; ?>"><?php echo $session->username; ?></a>
                                                </td>
                                                <td class="val lc">
                                                    <?=$donateinfo1['tweek']?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="top5Wrapper" style="width: 47.5%;" id="statRight">
                                    <h4 class="round small top"><strong>مشارکت کننده های کل</strong></h4>
                                    <table cellspacing="1" cellpadding="1" class="top5 row_table_data"
                                        id="top5_contributors_all">
                                        <thead>
                                            <tr>
                                                <td>شماره</td>
                                                <td>بازیکن</td>
                                                <td>منابع</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $allimem=$database->getAllMemberforBoun($aid,2);
                                            $allimemm=count($allimem);
                                            $counteeer=($allimemm>=5)?5:$allimemm;
                                            for ($i = 0; $i < $counteeer; $i++) {

                                                ?>
                                                <tr class="hover ">
                                                    <td class="ra fc"><?php echo $i+1; ?>.&nbsp;</td>
                                                    <td class="pla">
                                                        <span class="archived"><a href="spieler.php?uid=<?=$allimem[$i]['id']?>"><?=$allimem[$i]['username']?></a></span>
                                                    </td>
                                                    <td class="val lc"><?=$allimem[$i]['point']?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="3" class="empty"></td>
                                            </tr>
                                            <tr class="own hl">
                                                <td class="ra fc">
                                                    ? </td>
                                                <td class="pla">
                                                    <a href="spieler.php?uid=<?php echo $session->uid; ?>"><?php echo $session->username; ?></a>
                                                </td>
                                                <td class="val lc">
                                                <?=$donateinfo1['tall']?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="roundedCornersBox bonusBox" id="bonusBox1">
                        <h4>
                            <button type="button" class="icon bonusCollapse" ref="bonusInfo1" useicon=""><img
                                    src="img/x.gif" class="openedClosedSwitch switchClosed"></button> <span>
                                <strong> فلسفه</strong> -  امتیاز ویژه تولید امتیاز فرهنگی </span>
                        </h4>
                        <div class="bonusBar">
                            <img src="img/x.gif" title="" alt="" class="bonusIconPhilosophy">
                            <div class="progressBar">
                                <div class="levelIndicator level0">
                                    <div class="indicator">+0% <div class="arrow"></div>
                                        <div class="crown"></div>
                                    </div>
                                </div>
                                <div class="levelPercentages" >
                                    <?php
                                    $nowlvl=$currentStatus['cpLevel'];
                                    $zarib=4;
                                    for($iu=1;$iu<=5;$iu++){
                                        if($iu<=$nowlvl){
                                            $ttx="reached";
                                        }else{
                                            $ttx="notreached";
                                        }
?>
<div class="level<?=$iu?> <?=$ttx?>">+<?php echo $iu*$zarib; ?>%</div>
                                        <?php
                                    }
                                    ?>
                                    
                                   
                                </div>
                                <div class="levels">

                                    
                                    <?php
                                    for($iu=1;$iu<=5;$iu++){
                                        if($iu<=$nowlvl){
                                            $ttx="reached";
                                        }else{
                                            $ttx="notreached";
                                        }
?>

 <span class="levelTooltip<?=$iu?>"> </span>
 <div class="level<?=$iu?> <?=$ttx?>" title=""></div>

                                        <?php
                                    }
                                    
                                   
                                    ?>
                                   
                                </div>
                                <div class="front">
                                    <div class="back" style="width: <?=$currentStatus['cpprec']?>%"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="bonusActivationMessage hide">
                            </div>
                        </div>
                        <div class="bonusInfo collapsed hide bonusInfo1">
                            <div class="descriptionWrapper">
                                <div class="bonusExtendedDescription bonusImage1">
                                    <div class="textContent">
                                        برای رشد یک امپراتوری شما نیاز به چیزهایی بیشتری نسبت به یک ارتش دارید. به مردم
                                        خود آموزش علوم مختلف ارائه دهید تا در زمینه های مختلف تبدیل شوند به پیشگامان در
                                        معماری و مزرعه داری و مدیریت دهکده. یک فرهنگ غنی، به راحتی با نفوذ خود در ملت
                                        های دیگر، آنها را به پذیرش قوانین و حکومت شما تشویق خواهد کرد.
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="bonusStatistics">
                                <div class="top5Wrapper" style="width: 47.5%;" id="statLeft">
                                    <h4 class="round small top"><strong>مشارکت کننده های هفته</strong></h4>
                                    <table cellspacing="1" cellpadding="1" class="top5 row_table_data"
                                        id="top5_contributors_week">
                                        <thead>
                                            <tr>
                                                <td class="ra">شماره</td>
                                                <td class="pla">بازیکن</td>
                                                <td class="val">منابع</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $allimem=$database->getAllMemberforBoun($aid,3);
                                            $allimemm=count($allimem);
                                            $counteeer=($allimemm>=5)?5:$allimemm;
                                            for ($i = 0; $i < $counteeer; $i++) {

                                                ?>
                                                <tr class="hover ">
                                                    <td class="ra fc"><?php echo $i+1; ?>.&nbsp;</td>
                                                    <td class="pla">
                                                        <span class="archived"><a href="spieler.php?uid=<?=$allimem[$i]['id']?>"><?=$allimem[$i]['username']?></a></span>
                                                    </td>
                                                    <td class="val lc"><?=$allimem[$i]['point']?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="3" class="empty"></td>
                                            </tr>
                                            <tr class="own hl">
                                                <td class="ra fc">
                                                    ? </td>
                                                <td class="pla">
                                                    <a href="spieler.php?uid=<?php echo $session->uid; ?>"><?php echo $session->username; ?></a>
                                                </td>
                                                <td class="val lc">
                                                <?=$donateinfo1['cpweek']?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="top5Wrapper" style="width: 47.5%;" id="statRight">
                                    <h4 class="round small top"><strong>مشارکت کننده های کل</strong></h4>
                                    <table cellspacing="1" cellpadding="1" class="top5 row_table_data"
                                        id="top5_contributors_all">
                                        <thead>
                                            <tr>
                                                <td>شماره</td>
                                                <td>بازیکن</td>
                                                <td>منابع</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $allimem=$database->getAllMemberforBoun($aid,4);
                                            $allimemm=count($allimem);
                                            $counteeer=($allimemm>=5)?5:$allimemm;
                                            for ($i = 0; $i < $counteeer; $i++) {

                                                ?>
                                                <tr class="hover ">
                                                    <td class="ra fc"><?php echo $i+1; ?>.&nbsp;</td>
                                                    <td class="pla">
                                                        <span class="archived"><a href="spieler.php?uid=<?=$allimem[$i]['id']?>"><?=$allimem[$i]['username']?></a></span>
                                                    </td>
                                                    <td class="val lc"><?=$allimem[$i]['point']?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="3" class="empty"></td>
                                            </tr>
                                            <tr class="own hl">
                                                <td class="ra fc">
                                                    ? </td>
                                                <td class="pla">
                                                    <a href="spieler.php?uid=<?php echo $session->uid; ?>"><?php echo $session->username; ?></a>
                                                </td>
                                                <td class="val lc">
                                                <?=$donateinfo1['cpall']?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="roundedCornersBox bonusBox" id="bonusBox2">
                        <h4>
                            <button type="button" class="icon bonusCollapse" ref="bonusInfo2" useicon=""><img
                                    src="img/x.gif" class="openedClosedSwitch switchOpened"></button> <span>
                                <strong> فلزکاری</strong> -  امتیاز ویژه سلاح و زره </span>
                        </h4>
                        <div class="bonusBar">
                            <img src="img/x.gif" title="" alt="" class="bonusIconMetallurgy">
                            <div class="progressBar">
                                <div class="levelIndicator level0">
                                    <div class="indicator">+0% <div class="arrow"></div>
                                        <div class="crown"></div>
                                    </div>
                                </div>
                                <div class="levelPercentages" >
                                    <?php
                                    $nowlvl=$currentStatus['sLevel'];
                                    $zarib=2;
                                    for($iu=1;$iu<=5;$iu++){
                                        if($iu<=$nowlvl){
                                            $ttx="reached";
                                        }else{
                                            $ttx="notreached";
                                        }
?>
<div class="level<?=$iu?> <?=$ttx?>">+<?php echo $iu*$zarib; ?>%</div>
                                        <?php
                                    }
                                    ?>
                                    
                                   
                                </div>
                                <div class="levels">

                                    
                                    <?php
                                    for($iu=1;$iu<=5;$iu++){
                                        if($iu<=$nowlvl){
                                            $ttx="reached";
                                        }else{
                                            $ttx="notreached";
                                        }
?>

 <span class="levelTooltip<?=$iu?>"> </span>
 <div class="level<?=$iu?> <?=$ttx?>" title=""></div>

                                        <?php
                                    }
                                    
                                   
                                    ?>
                                   
                                </div>
                                <div class="front">
                                    <div class="back" style="width: <?=$currentStatus['sprec']?>%"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="bonusActivationMessage hide">
                            </div>
                        </div>
                        <div class="bonusInfo collapsed  bonusInfo2">
                            <div class="descriptionWrapper">
                                <div class="bonusExtendedDescription bonusImage2">
                                    <div class="textContent">
                                
در طول تاریخ، درگیری‌ها با یک اصل مشترک تعیین می‌شده است: باید چوبت بزرگتر باشد. زره تقویت‌شده و تسلیحات پیشرفته‌تر کمک می‌کند که سربازان شما بر دشمنان برتری یابند.
   
                                </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="bonusStatistics">
                                <div class="top5Wrapper" style="width: 47.5%;" id="statLeft">
                                    <h4 class="round small top"><strong>مشارکت کننده های هفته</strong></h4>
                                    <table cellspacing="1" cellpadding="1" class="top5 row_table_data"
                                        id="top5_contributors_week">
                                        <thead>
                                            <tr>
                                                <td class="ra">شماره</td>
                                                <td class="pla">بازیکن</td>
                                                <td class="val">منابع</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $allimem=$database->getAllMemberforBoun($aid,5);
                                            $allimemm=count($allimem);
                                            $counteeer=($allimemm>=5)?5:$allimemm;
                                            for ($i = 0; $i < $counteeer; $i++) {

                                                ?>
                                                <tr class="hover ">
                                                    <td class="ra fc"><?php echo $i+1; ?>.&nbsp;</td>
                                                    <td class="pla">
                                                        <span class="archived"><a href="spieler.php?uid=<?=$allimem[$i]['id']?>"><?=$allimem[$i]['username']?></a></span>
                                                    </td>
                                                    <td class="val lc"><?=$allimem[$i]['point']?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="3" class="empty"></td>
                                            </tr>
                                            <tr class="own hl">
                                                <td class="ra fc">
                                                    ? </td>
                                                <td class="pla">
                                                    <a href="spieler.php?uid=<?php echo $session->uid; ?>"><?php echo $session->username; ?></a>
                                                </td>
                                                <td class="val lc">
                                                <?=$donateinfo1['sweek']?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="top5Wrapper" style="width: 47.5%;" id="statRight">
                                    <h4 class="round small top"><strong>مشارکت کننده های کل</strong></h4>
                                    <table cellspacing="1" cellpadding="1" class="top5 row_table_data"
                                        id="top5_contributors_all">
                                        <thead>
                                            <tr>
                                                <td>شماره</td>
                                                <td>بازیکن</td>
                                                <td>منابع</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $allimem=$database->getAllMemberforBoun($aid,6);
                                            $allimemm=count($allimem);
                                            $counteeer=($allimemm>=5)?5:$allimemm;
                                            for ($i = 0; $i < $counteeer; $i++) {

                                                ?>
                                                <tr class="hover ">
                                                    <td class="ra fc"><?php echo $i+1; ?>.&nbsp;</td>
                                                    <td class="pla">
                                                        <span class="archived"><a href="spieler.php?uid=<?=$allimem[$i]['id']?>"><?=$allimem[$i]['username']?></a></span>
                                                    </td>
                                                    <td class="val lc"><?=$allimem[$i]['point']?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="3" class="empty"></td>
                                            </tr>
                                            <tr class="own hl">
                                                <td class="ra fc">
                                                    ? </td>
                                                <td class="pla">
                                                    <a href="spieler.php?uid=<?php echo $session->uid; ?>"><?php echo $session->username; ?></a>
                                                </td>
                                                <td class="val lc">
                                                <?=$donateinfo1['sall']?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="roundedCornersBox bonusBox" id="bonusBox3">
                        <h4>
                            <button type="button" class="icon bonusCollapse" ref="bonusInfo3" useicon=""><img
                                    src="img/x.gif" class="openedClosedSwitch switchOpened"></button> <span>
                                <strong> تجارت</strong> -  امتیاز ویژه برای ظرفیت تاجران  </span>
                        </h4>
                        <div class="bonusBar">
                            <img src="img/x.gif" title="" alt="" class="bonusIconCommerce">
                            <div class="progressBar">
                                <div class="levelIndicator level0">
                                    <div class="indicator">+0% <div class="arrow"></div>
                                        <div class="crown"></div>
                                    </div>
                                </div>
                                <div class="levelPercentages" >
                                    <?php
                                    $nowlvl=$currentStatus['mcLevel'];
                                    $zarib=30;
                                    for($iu=1;$iu<=5;$iu++){
                                        if($iu<=$nowlvl){
                                            $ttx="reached";
                                        }else{
                                            $ttx="notreached";
                                        }
?>
<div class="level<?=$iu?> <?=$ttx?>">+<?php echo $iu*$zarib; ?>%</div>
                                        <?php
                                    }
                                    ?>
                                    
                                   
                                </div>
                                <div class="levels">

                                    
                                    <?php
                                    for($iu=1;$iu<=5;$iu++){
                                        if($iu<=$nowlvl){
                                            $ttx="reached";
                                        }else{
                                            $ttx="notreached";
                                        }
?>

 <span class="levelTooltip<?=$iu?>"> </span>
 <div class="level<?=$iu?> <?=$ttx?>" title=""></div>

                                        <?php
                                    }
                                    
                                   
                                    ?>
                                   
                                </div>
                                <div class="front">
                                    <div class="back" style="width: <?=$currentStatus['mcprec']?>%"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="bonusActivationMessage hide">
                            </div>
                        </div>
                        <div class="bonusInfo collapsed  bonusInfo3">
                            <div class="descriptionWrapper">
                                <div class="bonusExtendedDescription bonusImage3">
                                    <div class="textContent">
                                
نبردی که منابعش تأمین مجدد نشود مساوی است با باخت. اسب‌های بارکش و ارابه‌های بزرگتر به تاجران شما کمک می‌کند که منابع بیشتری را به محل‌های مورد نیاز حمل کنند، چه آنجا خط مقدم باشد و چه دوستی که نیازمند کمک است.
      
                                </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="bonusStatistics">
                                <div class="top5Wrapper" style="width: 47.5%;" id="statLeft">
                                    <h4 class="round small top"><strong>مشارکت کننده های هفته</strong></h4>
                                    <table cellspacing="1" cellpadding="1" class="top5 row_table_data"
                                        id="top5_contributors_week">
                                        <thead>
                                            <tr>
                                                <td class="ra">شماره</td>
                                                <td class="pla">بازیکن</td>
                                                <td class="val">منابع</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $allimem=$database->getAllMemberforBoun($aid,7);
                                            $allimemm=count($allimem);
                                            $counteeer=($allimemm>=5)?5:$allimemm;
                                            for ($i = 0; $i < $counteeer; $i++) {

                                                ?>
                                                <tr class="hover ">
                                                    <td class="ra fc"><?php echo $i+1; ?>.&nbsp;</td>
                                                    <td class="pla">
                                                        <span class="archived"><a href="spieler.php?uid=<?=$allimem[$i]['id']?>"><?=$allimem[$i]['username']?></a></span>
                                                    </td>
                                                    <td class="val lc"><?=$allimem[$i]['point']?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="3" class="empty"></td>
                                            </tr>
                                            <tr class="own hl">
                                                <td class="ra fc">
                                                    ? </td>
                                                <td class="pla">
                                                    <a href="spieler.php?uid=<?php echo $session->uid; ?>"><?php echo $session->username; ?></a>
                                                </td>
                                                <td class="val lc">
                                                <?=$donateinfo1['mcweek']?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="top5Wrapper" style="width: 47.5%;" id="statRight">
                                    <h4 class="round small top"><strong>مشارکت کننده های کل</strong></h4>
                                    <table cellspacing="1" cellpadding="1" class="top5 row_table_data"
                                        id="top5_contributors_all">
                                        <thead>
                                            <tr>
                                                <td>شماره</td>
                                                <td>بازیکن</td>
                                                <td>منابع</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $allimem=$database->getAllMemberforBoun($aid,8);
                                            $allimemm=count($allimem);
                                            $counteeer=($allimemm>=5)?5:$allimemm;
                                            for ($i = 0; $i < $counteeer; $i++) {

                                                ?>
                                                <tr class="hover ">
                                                    <td class="ra fc"><?php echo $i+1; ?>.&nbsp;</td>
                                                    <td class="pla">
                                                        <span class="archived"><a href="spieler.php?uid=<?=$allimem[$i]['id']?>"><?=$allimem[$i]['username']?></a></span>
                                                    </td>
                                                    <td class="val lc"><?=$allimem[$i]['point']?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            <tr>
                                                <td colspan="3" class="empty"></td>
                                            </tr>
                                            <tr class="own hl">
                                                <td class="ra fc">
                                                    ? </td>
                                                <td class="pla">
                                                    <a href="spieler.php?uid=<?php echo $session->uid; ?>"><?php echo $session->username; ?></a>
                                                </td>
                                                <td class="val lc">
                                                <?=$donateinfo1['mcall']?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bonusLevelUpRewardTemplate" class="hide">
                <div class="bonusLevelUpReward">
                    <div class="banner">
                        <div class="description">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                    <div class="stoneDisplayHeader">
                        <div class="level1">
                            <div class="star"></div>
                            <div class="glow"></div>
                        </div>
                        <div class="level2">
                            <div class="star"></div>
                            <div class="glow"></div>
                        </div>
                        <div class="level5">
                            <div class="star"></div>
                            <div class="glow"></div>
                        </div>
                        <div class="level3">
                            <div class="star"></div>
                            <div class="glow"></div>
                        </div>
                        <div class="level4">
                            <div class="star"></div>
                            <div class="glow"></div>
                        </div>
                    </div>
                    <div class="swords">
                        <div class="sword1"></div>
                        <div class="sword2"></div>
                    </div>
                    <div class="stoneDisplay">
                        <div class="bonusRepresentation">
                            <div>
                                <div class="stage1"></div>
                                <div class="glow"></div>
                                <div class="stage2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(function () {
                    Travian.Game.AllianceDonation.initBonusIcons();
                    Travian.Game.AllianceDonation.initBonusOverview();
                });
            </script>
        </div>
    </div>
</div>