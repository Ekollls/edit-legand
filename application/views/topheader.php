


<?php
include("../Models/jdf.php");
if($heroF->getHeroStatus()!=100){
	$dis = ' disabled';
	if($heroF->getHeroStatus() == 101){
		$deadTitle = "<span class='itemNotMoveable'>You cannot use this tool and your hero is dead.</span><br>";
	}else{
		$deadTitle = "<span class='itemNotMoveable'>Your hero is out.</span><br>";
	}

}else{
	$dis = '';
	$deadTitle = '';
}

if(isset($_GET['inventory']) && !$dis){

	$uid = $session->uid;
	if(isset($_GET['helmet'])){
		$database->setHeroInventory($uid, "helmet", 0);
		$database->editProcItem($gi['helmet'], 0, $uid);
		$database->modifyHeroFace($uid, "helmet", 0);

	}elseif(isset($_GET['leftHand'])){
        $itemData2 = $database->getItemData($gi['rightHand']);
        if($itemData2['type']>=76 && $itemData2['type']<=78){
            switch($itemData2['type']){
                case 76:
                    $strong=500;
                    break;
                case 77:$strong=1000;
                    break;
                case 78:$strong=1500;
                    break;

            }
            $database->modifyHero2("itempower",$strong,$uid,2);
        }
		$database->setHeroInventory($uid, "leftHand", 0);
		$database->editProcItem($gi['leftHand'], 0, $uid);
		$database->modifyHeroFace($uid, "leftHand", 0);

	}elseif(isset($_GET['rightHand'])){
		$itemData2 = $database->getItemData($gi['rightHand']);
        $database->modifyHero2("itempower",$sizes[$itemData2['type']],$uid,2);
		$database->setHeroInventory($uid, "rightHand", 0);
		$database->editProcItem($gi['rightHand'], 0, $uid);
		$database->modifyHeroFace($uid, "rightHand", 0);

	}elseif(isset($_GET['body'])){
        $itemData2 = $database->getItemData($gi['body']);
		$database->setHeroInventory($uid, "body", 0);
		$database->editProcItem($gi['body'], 0, $uid);
		$database->modifyHeroFace($uid, "body", 0);
        if($itemData2['type']>=88 && $itemData2['type']<=93){
            switch($itemData2['type']){
                case 88:
                case 92:
                    $strong=500;
                    break;
                case 89:$strong=1000;
                    break;
                case 90:$strong=1500;
                    break;
                case 91:$strong=250;
                    break;
                case 93:$strong=750;
                    break;
            }
            $database->modifyHero2("itempower",$strong,$uid,2);
        }

	}elseif(isset($_GET['horse'])){
		$itemData2 = $database->getItemData($gi['horse']);
		if($itemData2['type']==103){
		$database->modifyHero2("speed",7,$uid,2);
		}elseif($itemData2['type']==104){
		$database->modifyHero2("speed",10,$uid,2);
		}elseif($itemData2['type']==105){
		$database->modifyHero2("speed",13,$uid,2);
		}
		$database->setHeroInventory($uid, "horse", 0);
		$database->editProcItem($gi['horse'], 0, $uid);
		$database->modifyHeroFace($uid, "horse", 0);

	}elseif(isset($_GET['bag'])){
		$database->setHeroInventory($uid, "bag", 0);
		$database->editProcItem($gi['bag'], 0, $uid);
		$itemdata = $database->getItemData($gi['bag']);
		if($itemdata['btype'] >= 7 && $itemdata['btype']<=9){
		$database->editHeroType($itemdata['id'], 0, 2);
		}
	}elseif(isset($_GET['shoes'])){
        $itemData2 = $database->getItemData($gi['shoes']);
        $database->setHeroInventory($uid, "shoes", 0);
        $database->editProcItem($gi['shoes'], 0, $uid);
        $database->modifyHeroFace($uid, "foot", 0);
        if($itemData2['type']>=100 && $itemData2['type']<=102){
            if($itemData2['type']==100){
                $value = 3;
            }elseif($itemData2['type']==101){
                $value = 4;
            }elseif($itemData2['type']==102){
                $value = 5;
            }
            $database->modifyHero2('speed', $value, $uid, 2);
        }elseif($itemData2['type']>=94 && $itemData2['type']<=96){

            if($itemData2['type']==94){
                $value = 10;
            }elseif($itemData2['type']==95){
                $value = 15;
            }elseif($itemData2['type']==96){
                $value = 20;
            }
            $database->modifyHero2('autoregen', $value, $uid, 2);
            //exit;
        }
    }
}

?>
<?php
$dorf1 = $dorf2 = '';
${'dorf'.$session->link}='active';
?>




<script>
 
    $(document).ready(function () {
 
        ConvertNumberToPersion();
    });
 
    function ConvertNumberToPersion() {
        persian = { 0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹' };
        function traverse(el) {
            if (el.nodeType == 3) {
                var list = el.data.match(/[0-9]/g);
                if (list != null && list.length != 0) {
                    for (var i = 0; i < list.length; i++)
                        el.data = el.data.replace(list[i], persian[list[i]]);
                }
            }
            for (var i = 0; i < el.childNodes.length; i++) {
                traverse(el.childNodes[i]);
            }
        }
        traverse(document.body);
    }
 
</script>



<style data-tippy-stylesheet="">.tippy-box[data-animation=fade][data-state=hidden]{opacity:0}[data-tippy-root]{max-width:calc(100vw - 10px)}.tippy-box{position:relative;background-color:#333;color:#fff;border-radius:4px;font-size:14px;line-height:1.4;white-space:normal;outline:0;transition-property:transform,visibility,opacity}.tippy-box[data-placement^=top]>.tippy-arrow{bottom:0}.tippy-box[data-placement^=top]>.tippy-arrow:before{bottom:-7px;left:0;border-width:8px 8px 0;border-top-color:initial;transform-origin:center top}.tippy-box[data-placement^=bottom]>.tippy-arrow{top:0}.tippy-box[data-placement^=bottom]>.tippy-arrow:before{top:-7px;left:0;border-width:0 8px 8px;border-bottom-color:initial;transform-origin:center bottom}.tippy-box[data-placement^=left]>.tippy-arrow{right:0}.tippy-box[data-placement^=left]>.tippy-arrow:before{border-width:8px 0 8px 8px;border-left-color:initial;right:-7px;transform-origin:center left}.tippy-box[data-placement^=right]>.tippy-arrow{left:0}.tippy-box[data-placement^=right]>.tippy-arrow:before{left:-7px;border-width:8px 8px 8px 0;border-right-color:initial;transform-origin:center right}.tippy-box[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(.54,1.5,.38,1.11)}.tippy-arrow{width:16px;height:16px;color:#333}.tippy-arrow:before{content:"";position:absolute;border-color:transparent;border-style:solid}.tippy-content{position:relative;padding:5px 9px;z-index:1}</style><link rel="manifest" href="/manifest.webmanifest">
<link rel="apple-touch-icon" href="//cdn.legends.travian.com/gpack/2459.8/apple-touch-icon.png">




			<div id="topBar">
    <a id="logo" href="#" target="_blank">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 172.7 60">
 
  <image width="238" height="86" style="width: 180px;height: 66px;" xlink:href="<?= GP_LOCATION ?>logo.png"></image>
</svg>
	</a>

			<div id="header" class="referAFriend">
            <input type="checkbox" id="mobileMenuState">

			<div id="navigation">
			<a class="village resourceView " class="<?php echo $_SESSION['page'] == "dorf1.php" || ($_SESSION['page'] != "dorf1.php" AND $_SESSION['page'] != "dorf2.php") ? 'active' : 'inactive';  ?> " href="dorf1.php" accesskey="1" title="<?php echo HEADER_DORF1; ?>||"></a>
			<a class="village buildingView " class="<?php echo $_SESSION['page'] == "dorf2.php" ? 'active' : 'inactive';  ?>" href="dorf2.php" accesskey="2" title="<?php echo HEADER_DORF2; ?>||"></a>

			<a class="map" href="karte.php" accesskey="3" title="<?php echo HEADER_MAP; ?>||"></a>
			<a class="statistics" href="statistiken.php" accesskey="4" title="<?php echo HEADER_STATS; ?>||"></a>

			<a id="n5"   class="reports" href="berichte.php" accesskey="5" title="<?php echo HEADER_NOTICES; ?>|| <?=newrpt?><?php echo " ".$session->unread['notice'];  ?>">
									<div id="n5"  class="reports" class="indicator" >      <?php
        if($session->unread['notice'] !=0){
            $not = $session->unread['notice'] >= 100 ? "100+" : $session->unread['notice'];
            echo "<div >
			<div class=\"speechBubbleBackground\">
				<div class=\"start\">
					<div class=\"end\">
						<div class=\"middle\"></div>
					</div>
				</div>
			</div>
			<div class=\"indicator speechBubbleContent\">".$not."</div>
		</div>";
        }
        ?></div>
							</a>
			<a id="n6" class="messages" href="nachrichten.php" accesskey="6" title="<?php echo HEADER_MESSAGES; ?>|| <?=newmsg?><?php echo " ".$session->unread['mes'];  ?>">
									<div id="n6" class="messages" class="indicator">        <?php
        if($session->unread['mes'] !=0) {
            $mes = $session->unread['mes'] >= 100 ? "100+" : $session->unread['mes'];
            echo "
<div class=\"speechBubbleContainerl \">
			<div class=\" speechBubbleBackgroundl\">
				<div class=\"start\">
					<div class=\"end\">
						<div class=\"middle\"></div>
					</div>
				</div>
			</div>
			<div class=\"indicator speechBubbleContentl\">".$mes."</div>
		</div>";
        }
        ?>
    </div>
							</a>

			<a class="dailyQuests" href="#" questbuttonoverviewachievements="1" id="button545dec96b3573" title=" <?=quest173?> " onclick="return false;">
							</a>


















  <div class="sidebarBoxInnerBox">
            <div class="innerBox header ">
                <div class="travianBirthdayRibbon">
                    <div class="headline">
                         </div>
                </div>

            <div class="innerBox content">
                <form>
                    <div class="questAchievementContainer">
                            <div class="button-container addHoverClick ">
                                <div class="button-background">
                                    <div class="buttonStart">
                                        <div class="buttonEnd">
                                            <div class="buttonMiddle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <script type="text/javascript">
                            window.addEvent('domready', function()
                            {
                                if($('button545dec96b3573'))
                                {
                                    $('button545dec96b3573').addEvent('click', function ()
                                    {
                                        window.fireEvent('buttonClicked', [this, {"type":"submit","value":"\u041f\u043e\u0434\u0440\u043e\u0431\u043d\u043e\u0441\u0442\u0438","name":"","id":"button545dec96b3573","class":"green questButtonOverviewAchievements","title":"","confirm":"","onclick":"","questButtonOverviewAchievements":true,"onClick":"return false;"}]);
                                    });
                                }
                            });
                        </script>
                    </div>
                </form>
				<script type="text/javascript">
				window.addEvent('domready', function () {
					Travian.Game.Quest.addListData(
						{"achievementquests":{"questsTotal":10,"questsCompleted":0,"name":"Achievement Quests"
						,"quests":{
						 "AchievementQuest_01":{"id":"AchievementQuest_01","name":"achievementQuests.achQuest_01_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":1,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_01_answer (en)%%#go2answer"}
						,"AchievementQuest_02":{"id":"AchievementQuest_02","name":"achievementQuests.achQuest_02_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":3,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null},{"stepId":1,"type":"achievementtask","stepDescription":null},{"stepId":2,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_02_answer (en)%%#go2answer"}
						,"AchievementQuest_03":{"id":"AchievementQuest_03","name":"achievementQuests.achQuest_03_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":3,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null},{"stepId":1,"type":"achievementtask","stepDescription":null},{"stepId":2,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_03_answer (en)%%#go2answer"}
						,"AchievementQuest_04":{"id":"AchievementQuest_04","name":"achievementQuests.achQuest_04_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":1,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_04_answer (en)%%#go2answer"}
						,"AchievementQuest_05":{"id":"AchievementQuest_05","name":"achievementQuests.achQuest_05_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":3,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null},{"stepId":1,"type":"achievementtask","stepDescription":null},{"stepId":2,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_05_answer (en)%%#go2answer"}
						,"AchievementQuest_06":{"id":"AchievementQuest_06","name":"achievementQuests.achQuest_06_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":3,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null},{"stepId":1,"type":"achievementtask","stepDescription":null},{"stepId":2,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_06_answer (en)%%#go2answer"}
						,"AchievementQuest_07":{"id":"AchievementQuest_07","name":"achievementQuests.achQuest_07_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":3,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null},{"stepId":1,"type":"achievementtask","stepDescription":null},{"stepId":2,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_07_answer (en)%%#go2answer"}
						,"AchievementQuest_08":{"id":"AchievementQuest_08","name":"achievementQuests.achQuest_08_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":3,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null},{"stepId":1,"type":"achievementtask","stepDescription":null},{"stepId":2,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_08_answer (en)%%#go2answer"}
						,"AchievementQuest_09":{"id":"AchievementQuest_09","name":"achievementQuests.achQuest_09_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":3,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null},{"stepId":1,"type":"achievementtask","stepDescription":null},{"stepId":2,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_09_answer (en)%%#go2answer"}
						,"AchievementQuest_10":{"id":"AchievementQuest_10","name":"achievementQuests.achQuest_10_name","category":"achievementquests","stepType":"achievementtask","currentStep":"0","stepCount":3,"steps":[{"stepId":0,"type":"achievementtask","stepDescription":null},{"stepId":1,"type":"achievementtask","stepDescription":null},{"stepId":2,"type":"achievementtask","stepDescription":null}],"answersLink":"http:\\\/\\\/t4.answers.travian.com\\\/index.php?aid=%%achievementQuests.achQuest_10_answer (en)%%#go2answer"}}}
						,"achievementrewards":{"questsTotal":4,"questsCompleted":0,"name":"Achievement Rewards"
						,"quests":{
							"AchievementQuestReward_01":{"id":"AchievementQuestReward_01","name":"achievementQuests.achQuestReward_01_name","category":"achievementrewards","stepType":"reward","currentStep":0,"stepCount":1,"steps":{"stepId":0,"type":"reward"},"answersLink":"http:\/\/t4.answers.travian.com\/index.php?aid=%%achievementQuests.achQuestReward_01_answer (en)%%#go2answer"},
							"AchievementQuestReward_02":{"id":"AchievementQuestReward_02","name":"achievementQuests.achQuestReward_02_name","category":"achievementrewards","stepType":"reward","currentStep":0,"stepCount":1,"steps":{"stepId":0,"type":"reward"},"answersLink":"http:\/\/t4.answers.travian.com\/index.php?aid=%%achievementQuests.achQuestReward_02_answer (en)%%#go2answer"},
							"AchievementQuestReward_03":{"id":"AchievementQuestReward_03","name":"achievementQuests.achQuestReward_03_name","category":"achievementrewards","stepType":"reward","currentStep":0,"stepCount":1,"steps":{"stepId":0,"type":"reward"},"answersLink":"http:\/\/t4.answers.travian.com\/index.php?aid=%%achievementQuests.achQuestReward_03_answer (en)%%#go2answer"},
							"AchievementQuestReward_04":{"id":"AchievementQuestReward_04","name":"achievementQuests.achQuestReward_04_name","category":"achievementrewards","stepType":"reward","currentStep":0,"stepCount":1,"steps":{"stepId":0,"type":"reward"},"answersLink":"http:\/\/t4.answers.travian.com\/index.php?aid=%%achievementQuests.achQuestReward_04_answer (en)%%#go2answer"}
							}}});
				});
			</script>
				</div>
            <div class="innerBox footer">
            </div>
		</div>
		</div>

























								<label class="mobileMenuButton" for="mobileMenuState">
											</label>
					<a class="mobileShopButton" href="#" accesskey="8" title="" onclick="jQuery(window).trigger('startPaymentWizard', {}); this.blur(); return false;"></a>
					</div>

		<div class="currency">
			<i class="goldCoin_medium" title="<?php echo HEADER_GOLD; ?>" onclick="window.fireEvent('startPaymentWizard', {}); this.blur(); return true;"></i>
			<div class="value ajaxReplaceableGoldAmount">
				<?php echo $session->gold; ?>	</div>
			<i class="silverCoin_medium" title="<?php echo HEADER_silver; ?>" href="hero_auction.php"></i>

			<div class="value ajaxReplaceableSilverAmount">
				<?php echo "$session->silver"; ?></div>
		</div>

			<a class="shop" href="#" accesskey="7" onclick="window.fireEvent('startPaymentWizard', {}); this.blur(); return true;"></a>






















					<a id="button660c5a111da68" class="layoutButton buttonFramed withIcon round referAFriend green    " href="referAFriend.php">
					<svg viewBox="0 0 18.08 20" class="referAFriend"><g class="outline">
  <path class="human" d="M5.86 9a1.26 1.26 0 01-1.14-1.31V6.36a.72.72 0 01.55-.75.67.67 0 000-.42 4.87 4.87 0 01.2-2.51 1.63 1.63 0 01.28-.52c.29-.38.63-.73.94-1.09A3.84 3.84 0 0111.4.58a4.16 4.16 0 011.86 4.2 5.2 5.2 0 000 1c.63.3.41.88.39 1.38 0 .2-.05.41 0 .63a1.76 1.76 0 01-.09.75c-.15.43-.17.45-.59.6a3.31 3.31 0 01-.71 1.6c-.24.28-.16.65-.24 1s-.13.61-.21.91a1.56 1.56 0 00.83 2 6.14 6.14 0 011.63 1.14 4.54 4.54 0 01.91 1.38c.19.42.06.61-.4.61H.5c-.46 0-.51 0-.5-.52a4.13 4.13 0 012-3.48A6.1 6.1 0 013.57 13a4.77 4.77 0 002.07-1.21 1.2 1.2 0 00.36-1c-.06-.56-.1-1.16-.14-1.79z"></path>
  <path class="plus" d="M8.38 16.43v-2.56a.71.71 0 01.77-.57h2.27v-2.32c0-.53.17-.68.69-.68h2.09c.7 0 .88.15.89.9v2.1h2.17c.62 0 .81.19.82.81v2c0 .71-.17.88-.87.88h-2.12v2.21c0 .72-.19.8-.81.81h-2c-.69 0-.85-.17-.85-.85v-2.17H9.25c-.42.01-.75-.1-.87-.56z"></path>
</g><g class="icon">
  <path class="human" d="M5.86 9a1.26 1.26 0 01-1.14-1.31V6.36a.72.72 0 01.55-.75.67.67 0 000-.42 4.87 4.87 0 01.2-2.51 1.63 1.63 0 01.28-.52c.29-.38.63-.73.94-1.09A3.84 3.84 0 0111.4.58a4.16 4.16 0 011.86 4.2 5.2 5.2 0 000 1c.63.3.41.88.39 1.38 0 .2-.05.41 0 .63a1.76 1.76 0 01-.09.75c-.15.43-.17.45-.59.6a3.31 3.31 0 01-.71 1.6c-.24.28-.16.65-.24 1s-.13.61-.21.91a1.56 1.56 0 00.83 2 6.14 6.14 0 011.63 1.14 4.54 4.54 0 01.91 1.38c.19.42.06.61-.4.61H.5c-.46 0-.51 0-.5-.52a4.13 4.13 0 012-3.48A6.1 6.1 0 013.57 13a4.77 4.77 0 002.07-1.21 1.2 1.2 0 00.36-1c-.06-.56-.1-1.16-.14-1.79z"></path>
  <path class="plus" d="M8.38 16.43v-2.56a.71.71 0 01.77-.57h2.27v-2.32c0-.53.17-.68.69-.68h2.09c.7 0 .88.15.89.9v2.1h2.17c.62 0 .81.19.82.81v2c0 .71-.17.88-.87.88h-2.12v2.21c0 .72-.19.8-.81.81h-2c-.69 0-.85-.17-.85-.85v-2.17H9.25c-.42.01-.75-.1-.87-.56z"></path>
</g></svg>
		</a>

<script type="text/javascript">
	jQuery('#button660c5a111da68').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":null,"boxId":"","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button660c5a111da68","redirectUrl":"\/referAFriend","redirectUrlExternal":"","svg":"topBar\/referAFriend.svg","content":""}]);
	});
</script>
		<?php include("application/views/res.php");?>


		    <nav id="mobileMenu">
        <ul>
                            <li>
                    <a class="dailyQuests" href="#" accesskey="7" onclick="Travian.Game.Quest.openTodoListDialog('', true); return false;">
                        <div class="inlineIcon " title=""><svg viewBox="0 0 40 130.22" class="dailyQuests ">
    <rect width="40" height="89.11" rx="10.33"></rect>
    <ellipse cx="19.67" cy="115.67" rx="17.22" ry="14.56"></ellipse>
</svg>
<span class="value ">Daily quests</span></div>                    </a>
                </li>
                <li>
                    <a class="statistics" href="/statistics">
                        <div class="inlineIcon " title=""><svg viewBox="0 0 120.56 137.33" class="statistics">
    <path d="M1.67 70.67h32.67V130H1.67zM43.56 35.56h32.67V130H43.56zM86.46 0h32.67v130H86.46zM0 133.56h120.56v3.78H0z"></path>
</svg>
<span class="value ">Statistics</span></div>                    </a>
                </li>
									<li>
						<a class="referAFriend" href="/referAFriend">
							<div class="inlineIcon " title=""><svg viewBox="0 0 18.08 20" class="referAFriend">
  <path class="human" d="M5.86 9a1.26 1.26 0 01-1.14-1.31V6.36a.72.72 0 01.55-.75.67.67 0 000-.42 4.87 4.87 0 01.2-2.51 1.63 1.63 0 01.28-.52c.29-.38.63-.73.94-1.09A3.84 3.84 0 0111.4.58a4.16 4.16 0 011.86 4.2 5.2 5.2 0 000 1c.63.3.41.88.39 1.38 0 .2-.05.41 0 .63a1.76 1.76 0 01-.09.75c-.15.43-.17.45-.59.6a3.31 3.31 0 01-.71 1.6c-.24.28-.16.65-.24 1s-.13.61-.21.91a1.56 1.56 0 00.83 2 6.14 6.14 0 011.63 1.14 4.54 4.54 0 01.91 1.38c.19.42.06.61-.4.61H.5c-.46 0-.51 0-.5-.52a4.13 4.13 0 012-3.48A6.1 6.1 0 013.57 13a4.77 4.77 0 002.07-1.21 1.2 1.2 0 00.36-1c-.06-.56-.1-1.16-.14-1.79z"></path>
  <path class="plus" d="M8.38 16.43v-2.56a.71.71 0 01.77-.57h2.27v-2.32c0-.53.17-.68.69-.68h2.09c.7 0 .88.15.89.9v2.1h2.17c.62 0 .81.19.82.81v2c0 .71-.17.88-.87.88h-2.12v2.21c0 .72-.19.8-.81.81h-2c-.69 0-.85-.17-.85-.85v-2.17H9.25c-.42.01-.75-.1-.87-.56z"></path>
</svg>
<span class="value ">Refer a friend</span></div>						</a>
					</li>
				                <li>

                    <a class="profile" href="spieler.php">
                        <div class="inlineIcon " title=""><svg viewBox="0 0 15.76 21" class="profile">
  <path d="M7.88 1.77c2.1 0 3.8 2.09 3.8 4.65s-1.7 4.65-3.8 4.65S4.08 9 4.08 6.42s1.71-4.65 3.8-4.65m0-1.77c-3 0-5.49 2.88-5.49 6.42s2.46 6.42 5.49 6.42 5.49-2.84 5.49-6.42S10.92 0 7.88 0zm7.88 21a11.81 11.81 0 0 0-2.51-7 7.17 7.17 0 0 1-5.37 2.46A7.17 7.17 0 0 1 2.52 14 11.82 11.82 0 0 0 0 21z"></path>
</svg>
<span class="value "><?php echo DIRECTION; ?></span></div>                    </a>
                </li>
                <li>
                                            <a class="options" href="/options">
                            <div class="inlineIcon " title=""><svg viewBox="0 0 20 20" class="settings">
  <path d="M9 20l-.24-3.26-.57-.16A7.21 7.21 0 0 1 6.66 16l-.52-.29-2.47 2.1-1.48-1.48 2.14-2.47-.33-.52a7.21 7.21 0 0 1-.62-1.49l-.16-.57L0 11V9l3.26-.24.16-.57A7.21 7.21 0 0 1 4 6.66l.29-.52-2.1-2.47 1.48-1.48 2.47 2.14.52-.33a7.21 7.21 0 0 1 1.49-.62l.57-.16L9 0h2l.24 3.26.57.16a7.21 7.21 0 0 1 1.53.58l.52.29 2.47-2.14 1.48 1.48-2.14 2.51.29.52a7.21 7.21 0 0 1 .62 1.49l.16.57L20 9v2l-3.26.24-.16.57a7.21 7.21 0 0 1-.58 1.53l-.29.52 2.14 2.47-1.48 1.48-2.47-2.14-.52.29a7.21 7.21 0 0 1-1.49.62l-.57.16L11 20zm1-15a5 5 0 1 0 5 5 5 5 0 0 0-5-5z"></path>
</svg>
<span class="value ">Options</span></div>                        </a>
                                    </li>
                <li>
	<li class="help">
		<a onclick="Travian.React.openHelpDialog()">
            <svg viewBox="0 0 12.24 20" class="answers"><g class="outline">
  <path d="M3.73 13.1v-.52c0-2.8 1.47-3.8 2.89-4.76 1-.72 2.14-1.46 2.14-2.9s-1.13-2.55-3-2.55A5.39 5.39 0 0 0 2 4.12L0 2.61A8.15 8.15 0 0 1 6.24 0c3 0 6 1.4 6 4.52 0 2.42-1.4 3.38-2.88 4.4-1.33.91-2.7 1.85-2.7 3.82v.36zm3.61 4.8a2.09 2.09 0 0 0-2.1-2.07 2.09 2.09 0 0 0 0 4.17 2.1 2.1 0 0 0 2.1-2.1z"></path>
</g><g class="icon">
  <path d="M3.73 13.1v-.52c0-2.8 1.47-3.8 2.89-4.76 1-.72 2.14-1.46 2.14-2.9s-1.13-2.55-3-2.55A5.39 5.39 0 0 0 2 4.12L0 2.61A8.15 8.15 0 0 1 6.24 0c3 0 6 1.4 6 4.52 0 2.42-1.4 3.38-2.88 4.4-1.33.91-2.7 1.85-2.7 3.82v.36zm3.61 4.8a2.09 2.09 0 0 0-2.1-2.07 2.09 2.09 0 0 0 0 4.17 2.1 2.1 0 0 0 2.1-2.1z"></path>
</g></svg>
		</a>
	</li>
                    <a class="discord" target="_blank" href="https://discord.gg/travianlegends">
                        <div class="inlineIcon " title=""><svg viewBox="0 0 20 18.71" class="discord">
  <path d="M0 2.91v10.18A2.92 2.92 0 002.91 16h12.71a.93.93 0 01.65.27l2.17 2.17a.91.91 0 001.56-.65V2.91A2.92 2.92 0 0017.09 0H2.91A2.92 2.92 0 000 2.91zm15.72 9.59H4.28a.78.78 0 01-.78-.78V4.28a.78.78 0 01.78-.78h11.44a.78.78 0 01.78.78v7.44a.78.78 0 01-.78.78z"></path>
</svg>
<span class="value ">Discord</span></div>                    </a>
                </li>
                        <li>
                <a class="logout" href="/logout" onclick="Travian.api('auth/logout'); return false;">
                    <div class="inlineIcon " title=""><svg viewBox="0 0 20 20" class="logout">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</svg>
<span class="value ">Logout</span></div>                </a>
            </li>
        </ul>

        <svg viewBox="0 0 200 10" class="divider">
    <path d="m200 5-78.7-2.5c.2.75.54 1.57.67 2.35h-2.49c-.08-1.31-1.16-2.35-2.48-2.35s-2.41 1.04-2.48 2.35h-9.67L100 0l-4.85 4.85h-9.67C85.4 3.54 84.32 2.5 83 2.5s-2.41 1.04-2.48 2.35h-2.49c.13-.78.47-1.6.67-2.35L0 5l78.7 2.5c-.22-.74-.55-1.58-.67-2.35h2.49C80.6 6.46 81.68 7.5 83 7.5s2.41-1.04 2.48-2.35h9.67L100 10l4.85-4.85h9.67c.08 1.31 1.16 2.35 2.48 2.35s2.41-1.04 2.48-2.35h2.49c-.12.77-.46 1.61-.67 2.35L200 5Z"></path>
</svg>


    </div>

    <ul id="outOfGame" class="LTR">
	
	
	
	
		<li class="profile" title="<?=$lang['Toolbar']['01'];?>">
		<a href="spieler.php">
			<svg viewBox="0 0 15.76 21" class="profile"><g class="outline">
  <path d="M7.88 1.77c2.1 0 3.8 2.09 3.8 4.65s-1.7 4.65-3.8 4.65S4.08 9 4.08 6.42s1.71-4.65 3.8-4.65m0-1.77c-3 0-5.49 2.88-5.49 6.42s2.46 6.42 5.49 6.42 5.49-2.84 5.49-6.42S10.92 0 7.88 0zm7.88 21a11.81 11.81 0 0 0-2.51-7 7.17 7.17 0 0 1-5.37 2.46A7.17 7.17 0 0 1 2.52 14 11.82 11.82 0 0 0 0 21z"></path>
</g><g class="icon">
  <path d="M7.88 1.77c2.1 0 3.8 2.09 3.8 4.65s-1.7 4.65-3.8 4.65S4.08 9 4.08 6.42s1.71-4.65 3.8-4.65m0-1.77c-3 0-5.49 2.88-5.49 6.42s2.46 6.42 5.49 6.42 5.49-2.84 5.49-6.42S10.92 0 7.88 0zm7.88 21a11.81 11.81 0 0 0-2.51-7 7.17 7.17 0 0 1-5.37 2.46A7.17 7.17 0 0 1 2.52 14 11.82 11.82 0 0 0 0 21z"></path>
</g></svg>
		</a>
	</li>
	
	
	


	
	
	
			<li class="profile" title="<?php echo $lang['Admin']['Panel']; ?> ">
				<?php if($session->uid == 6){ ?>
		<a  href="Admins.php" type="button" data-mapid="97312">
			<svg viewBox="0 0 15.76 21" class="profile"><g class="outline">
  <path d="M7.88 1.77c2.1 0 3.8 2.09 3.8 4.65s-1.7 4.65-3.8 4.65S4.08 9 4.08 6.42s1.71-4.65 3.8-4.65m0-1.77c-3 0-5.49 2.88-5.49 6.42s2.46 6.42 5.49 6.42 5.49-2.84 5.49-6.42S10.92 0 7.88 0zm7.88 21a11.81 11.81 0 0 0-2.51-7 7.17 7.17 0 0 1-5.37 2.46A7.17 7.17 0 0 1 2.52 14 11.82 11.82 0 0 0 0 21z"></path>
</g><g class="icon">
  <path d="M7.88 1.77c2.1 0 3.8 2.09 3.8 4.65s-1.7 4.65-3.8 4.65S4.08 9 4.08 6.42s1.71-4.65 3.8-4.65m0-1.77c-3 0-5.49 2.88-5.49 6.42s2.46 6.42 5.49 6.42 5.49-2.84 5.49-6.42S10.92 0 7.88 0zm7.88 21a11.81 11.81 0 0 0-2.51-7 7.17 7.17 0 0 1-5.37 2.46A7.17 7.17 0 0 1 2.52 14 11.82 11.82 0 0 0 0 21z"></path>
</g></svg>
		</a>
	</li>

	<?php } ?>




			<li class="profile" title="<?php echo $lang['Admin']['Panel']; ?> ">
				<?php if($session->uid == 6){ ?>
		<a  href="TdPaneLXP" type="button" data-mapid="97312">
			<svg viewBox="0 0 15.76 21" class="profile"><g class="outline">
  <path d="M7.88 1.77c2.1 0 3.8 2.09 3.8 4.65s-1.7 4.65-3.8 4.65S4.08 9 4.08 6.42s1.71-4.65 3.8-4.65m0-1.77c-3 0-5.49 2.88-5.49 6.42s2.46 6.42 5.49 6.42 5.49-2.84 5.49-6.42S10.92 0 7.88 0zm7.88 21a11.81 11.81 0 0 0-2.51-7 7.17 7.17 0 0 1-5.37 2.46A7.17 7.17 0 0 1 2.52 14 11.82 11.82 0 0 0 0 21z"></path>
</g><g class="icon">
  <path d="M7.88 1.77c2.1 0 3.8 2.09 3.8 4.65s-1.7 4.65-3.8 4.65S4.08 9 4.08 6.42s1.71-4.65 3.8-4.65m0-1.77c-3 0-5.49 2.88-5.49 6.42s2.46 6.42 5.49 6.42 5.49-2.84 5.49-6.42S10.92 0 7.88 0zm7.88 21a11.81 11.81 0 0 0-2.51-7 7.17 7.17 0 0 1-5.37 2.46A7.17 7.17 0 0 1 2.52 14 11.82 11.82 0 0 0 0 21z"></path>
</g></svg>
		</a>
	</li>

	<?php } ?>

		
	<li class="options" title="<?=$lang['Toolbar']['02'];?>">
					<a href="options.php">
                <svg viewBox="0 0 20 20" class="options"><g class="outline">
  <path d="M9 20l-.24-3.26-.57-.16A7.21 7.21 0 0 1 6.66 16l-.52-.29-2.47 2.1-1.48-1.48 2.14-2.47-.33-.52a7.21 7.21 0 0 1-.62-1.49l-.16-.57L0 11V9l3.26-.24.16-.57A7.21 7.21 0 0 1 4 6.66l.29-.52-2.1-2.47 1.48-1.48 2.47 2.14.52-.33a7.21 7.21 0 0 1 1.49-.62l.57-.16L9 0h2l.24 3.26.57.16a7.21 7.21 0 0 1 1.53.58l.52.29 2.47-2.14 1.48 1.48-2.14 2.51.29.52a7.21 7.21 0 0 1 .62 1.49l.16.57L20 9v2l-3.26.24-.16.57a7.21 7.21 0 0 1-.58 1.53l-.29.52 2.14 2.47-1.48 1.48-2.47-2.14-.52.29a7.21 7.21 0 0 1-1.49.62l-.57.16L11 20zm1-15a5 5 0 1 0 5 5 5 5 0 0 0-5-5z"></path>
</g><g class="icon">
  <path d="M9 20l-.24-3.26-.57-.16A7.21 7.21 0 0 1 6.66 16l-.52-.29-2.47 2.1-1.48-1.48 2.14-2.47-.33-.52a7.21 7.21 0 0 1-.62-1.49l-.16-.57L0 11V9l3.26-.24.16-.57A7.21 7.21 0 0 1 4 6.66l.29-.52-2.1-2.47 1.48-1.48 2.47 2.14.52-.33a7.21 7.21 0 0 1 1.49-.62l.57-.16L9 0h2l.24 3.26.57.16a7.21 7.21 0 0 1 1.53.58l.52.29 2.47-2.14 1.48 1.48-2.14 2.51.29.52a7.21 7.21 0 0 1 .62 1.49l.16.57L20 9v2l-3.26.24-.16.57a7.21 7.21 0 0 1-.58 1.53l-.29.52 2.14 2.47-1.48 1.48-2.47-2.14-.52.29a7.21 7.21 0 0 1-1.49.62l-.57.16L11 20zm1-15a5 5 0 1 0 5 5 5 5 0 0 0-5-5z"></path>
</g></svg>
			</a>
			</li>
	<li class="discord" title="<?=$lang['Toolbar']['03'];?>">
		<a target="_blank" href="https://discord.gg/travianlegends">
            <svg viewBox="0 0 20 18.71" class="discord"><g class="outline">
  <path d="M0 2.91v10.18A2.92 2.92 0 002.91 16h12.71a.93.93 0 01.65.27l2.17 2.17a.91.91 0 001.56-.65V2.91A2.92 2.92 0 0017.09 0H2.91A2.92 2.92 0 000 2.91zm15.72 9.59H4.28a.78.78 0 01-.78-.78V4.28a.78.78 0 01.78-.78h11.44a.78.78 0 01.78.78v7.44a.78.78 0 01-.78.78z"></path>
</g><g class="icon">
  <path d="M0 2.91v10.18A2.92 2.92 0 002.91 16h12.71a.93.93 0 01.65.27l2.17 2.17a.91.91 0 001.56-.65V2.91A2.92 2.92 0 0017.09 0H2.91A2.92 2.92 0 000 2.91zm15.72 9.59H4.28a.78.78 0 01-.78-.78V4.28a.78.78 0 01.78-.78h11.44a.78.78 0 01.78.78v7.44a.78.78 0 01-.78.78z"></path>
</g></svg>
		</a>
	</li>
	<li class="help">

		<a onclick="openPopup()">
            <svg viewBox="0 0 12.24 20" class="answers"><g class="outline">
  <path d="M3.73 13.1v-.52c0-2.8 1.47-3.8 2.89-4.76 1-.72 2.14-1.46 2.14-2.9s-1.13-2.55-3-2.55A5.39 5.39 0 0 0 2 4.12L0 2.61A8.15 8.15 0 0 1 6.24 0c3 0 6 1.4 6 4.52 0 2.42-1.4 3.38-2.88 4.4-1.33.91-2.7 1.85-2.7 3.82v.36zm3.61 4.8a2.09 2.09 0 0 0-2.1-2.07 2.09 2.09 0 0 0 0 4.17 2.1 2.1 0 0 0 2.1-2.1z"></path>
</g><g class="icon">
  <path d="M3.73 13.1v-.52c0-2.8 1.47-3.8 2.89-4.76 1-.72 2.14-1.46 2.14-2.9s-1.13-2.55-3-2.55A5.39 5.39 0 0 0 2 4.12L0 2.61A8.15 8.15 0 0 1 6.24 0c3 0 6 1.4 6 4.52 0 2.42-1.4 3.38-2.88 4.4-1.33.91-2.7 1.85-2.7 3.82v.36zm3.61 4.8a2.09 2.09 0 0 0-2.1-2.07 2.09 2.09 0 0 0 0 4.17 2.1 2.1 0 0 0 2.1-2.1z"></path>
</g></svg>
		</a>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</li>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<li class="logout " alt="<?=LOGOUT?>" title="<?=$lang['Toolbar']['05'];?>">
		<a href="logout.php" onclick="Travian.api('auth/logout'); return false;">
            <svg viewBox="0 0 20 20" class="logout"><g class="outline">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g><g class="icon">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g></svg>
		</a>
	</li>
</ul>
<script type="text/javascript">
jQuery('#outOfGame li.logout a').click(function() {
	var windows = Travian.WindowManager.getWindows();
	for (var i = 0; i < windows.length; i++) {
        Travian.WindowManager.unregister(windows[i]);
    }
});
</script>
</div>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: iransans;
        }

        /* The popup background */
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        /* The popup content */
        .popup-content {
            position: relative;
            margin: 10% auto;
            padding: 20px;
            background: #fff;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
            z-index: 1001;
        }

        /* The close button */
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        a.popup-link {
            color: #4CAF50;
            text-decoration: none;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
    <title>Popup Example</title>
</head>
<body>

<a class="popup-link" ></a>

<div class="popup-overlay" id="popup">
    <div >

        <div class="dialogOverlay dialogVisible enabled">
          <div class="dialogWrapper dialogV2" data-context="">
            <div class="dialog helpDialog">
              <div class="dialogContainer">
                <div class="dialogContents">
                  <form action="?" method="get" accept-charset="UTF-8">
                    <div class="dialogDragBar"></div>
					
                    <a id="closeContentButton" class="dialogCancelButton iconButton buttonFramed green withIcon rectangle cancel " href="dorf1.php"><svg viewBox="0 0 20 20">
                        <g class="outline">
                          <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                        </g>
                        <g class="icon">
                          <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                        </g>
                      </svg></a>
                    <div class="content" id="dialogContent">
                      <div class="contentV2 helpDialog">
                        <h1 class="titleInHeader">قائمة المساعدة</h1>
                        <div class="content">
                          <div class="supportCharacter"></div>
                          <div class="helpSections">
                            <div class="support">
                              <h3>مساعدة</h3>
                              <p> هل تبحث عن مساعدة؟ تحقق من جميع تفاصيل البناء والوحدات في اللعبة أو استخدم قاعدة المعرفة خاصتنا على بوابة الدعم للعثور على المعلومات. لا تتردد في التواصل معنا مباشرة من خلال بوابة خدمة العملاء.</p>
                              <ul>
                                <li><a><span class="listIcon"></span><span>المباني والقوات</span></a></li>
                                <li><a class="" target="_blank" href="https://support.travian.com/support/solutions/articles/7000068043-introduction"><span class="listIcon"></span><span>لاعبين جدد</span></a></li>
                                <li><a class="" target="_blank" href="https://support.travian.com/en/support/solutions/folders/7000044910"><span class="listIcon"></span><span>دعم المدفوعات</span></a></li>
                              </ul>
                            </div>
                            <div class="helpBox customerService">
                              <div>
                                <h3>خدمة العملاء وقاعدة المعرفة</h3><svg viewBox="0 0 20 20">
                                  <path d="M16.29 2.23a4.4 4.4 0 0 0-.41-.31A9.9 9.9 0 0 0 10 0a10 10 0 1 0 6.29 2.23zm-.53 14a8.37 8.37 0 0 1-3.55 2 7.14 7.14 0 0 0 1.06-1.71 11.16 11.16 0 0 0 .56-1.54c1.27.38 1.93.9 1.93 1.24zm-11.52 0c0-.32.6-.81 1.76-1.19a11.83 11.83 0 0 0 .55 1.49 6.94 6.94 0 0 0 1 1.64 8.44 8.44 0 0 1-3.31-1.91zm7.92-.2c-.63 1.4-1.45 2.2-2.25 2.2s-1.62-.8-2.26-2.2a9.31 9.31 0 0 1-.47-1.29A14.26 14.26 0 0 1 10 14.4a14.52 14.52 0 0 1 2.65.23 9.76 9.76 0 0 1-.49 1.37zM10 12.8a16.35 16.35 0 0 0-3.14.29 16.28 16.28 0 0 1-.3-2.7h6.7a16.15 16.15 0 0 1-.3 2.67A16.72 16.72 0 0 0 10 12.8zM6.56 9.39a17.66 17.66 0 0 1 .32-2.7A16.52 16.52 0 0 0 10 7a17.16 17.16 0 0 0 3-.27 17 17 0 0 1 .31 2.66zM10 5.52a15 15 0 0 1-2.8-.25 9.36 9.36 0 0 1 .45-1.2c.64-1.41 1.46-2.21 2.26-2.21s1.62.8 2.25 2.21a9.84 9.84 0 0 1 .47 1.23 14.44 14.44 0 0 1-2.63.22zM6 5c-1.1-.39-1.71-.86-1.76-1.18A8.42 8.42 0 0 1 7.57 1.9a7 7 0 0 0-1 1.67A12 12 0 0 0 6 5zm7.25-1.4a7.23 7.23 0 0 0-1.05-1.76 8.4 8.4 0 0 1 3.56 2c-.06.34-.72.83-1.95 1.2a13.66 13.66 0 0 0-.54-1.47zM5.7 6.4a16.77 16.77 0 0 0-.35 3H1.58A8.48 8.48 0 0 1 3.3 5a4.86 4.86 0 0 0 2.4 1.4zm-.36 4a18.84 18.84 0 0 0 .34 3l-.46.16a4.21 4.21 0 0 0-1.95 1.28 8.51 8.51 0 0 1-1.7-4.44zm8.81 2.95a19.57 19.57 0 0 0 .33-2.95h3.95a8.51 8.51 0 0 1-1.7 4.44 4.92 4.92 0 0 0-2.58-1.5zm.32-3.95a18.21 18.21 0 0 0-.34-2.94l.65-.21A4.24 4.24 0 0 0 16.7 5a8.4 8.4 0 0 1 1.72 4.4z"></path>
                                </svg><a class="textButtonV2 buttonFramed rectangle withText green" target="_blank" href="https://support.travian.com/login/sso/?name=hamidthcr&amp;hash=d186fc891625bce3eaac0bb21a6055d4&amp;email=hamidthcr%40gmail.com&amp;timestamp=1718053013&amp;redirect_to=https%3A%2F%2Fsupport.travian.com%2Far%2Fsupport%2Ftickets%2Fnew%3Ftoken%3Dc4a291c436df73b9b24f595bd950acaaee7a8ab31dba6f35d1922aa3d113c4129e1c92b42e817abf9148886a22576772f6c68b5e0081325fb02e68408378c29c">
                                  <div>إنشاء تذكرة</div>
                                </a>
                              </div>
                            </div>
                            <div class="information">
                              <h3>المعلومات</h3>
                              <p>اعثر على أحدث الأخبار والتغييرات على المدونة مباشرة. تأكد من البقاء على اطلاع بقواعد اللعبة.</p>
                              <ul>
                                <li><a class="" target="_blank" href="https://blog.travian.com"><span class="listIcon"></span><span>المدوّنة</span></a></li>
                                <li><a class="" target="_blank" href="https://blog.travian.com/category/news/changelogs-game-updates/"><span class="listIcon"></span><span>سجلات التغيير وتحديثات اللعبة</span></a></li>
                                <li><a class="" target="_blank" href="https://www.travian.com/ae/gamerules"><span class="listIcon"></span><span>قواعد اللعبة</span></a></li>
                              </ul>
                            </div>
                            <div class="helpBox discord">
                              <div>
                                <h3>كن جزءًا من مجتمعنا</h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127.14 96.36">
                                  <path fill="#fff" d="M107.7,8.07A105.15,105.15,0,0,0,81.47,0a72.06,72.06,0,0,0-3.36,6.83A97.68,97.68,0,0,0,49,6.83,72.37,72.37,0,0,0,45.64,0,105.89,105.89,0,0,0,19.39,8.09C2.79,32.65-1.71,56.6.54,80.21h0A105.73,105.73,0,0,0,32.71,96.36,77.7,77.7,0,0,0,39.6,85.25a68.42,68.42,0,0,1-10.85-5.18c.91-.66,1.8-1.34,2.66-2a75.57,75.57,0,0,0,64.32,0c.87.71,1.76,1.39,2.66,2a68.68,68.68,0,0,1-10.87,5.19,77,77,0,0,0,6.89,11.1A105.25,105.25,0,0,0,126.6,80.22h0C129.24,52.84,122.09,29.11,107.7,8.07ZM42.45,65.69C36.18,65.69,31,60,31,53s5-12.74,11.43-12.74S54,46,53.89,53,48.84,65.69,42.45,65.69Zm42.24,0C78.41,65.69,73.25,60,73.25,53s5-12.74,11.44-12.74S96.23,46,96.12,53,91.08,65.69,84.69,65.69Z"></path>
                                </svg><a class="textButtonV2 buttonFramed rectangle withText green" target="_blank" href="https://discord.gg/travianlegends">
                                  <div>افتح تطبيق ديسكورد</div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
</script>

</body>
</html>




<?php
$green=$session->plus?'green':'gold';
$hero = $herodata=$session->heroD;

$units = $database->getUnit($herodata['wref']);

$ttitle=constant("TRIBE".$session->tribe);
$aid = $session->alliance;
if($aid){
$allianceinfoMY = $database->getAlliance($aid);
}
if($herodata['dead']==1){
    $healtstat = '101';
    $status = SIDEINFO_HERO1;
}

/*
elseif($herodata['dead']==0 && $herodata['health']<100){
    $healtstat = '101Regenerate';
    $status = SIDEINFO_HERO1;
}*/
elseif($herodata['dead']==0){
    if($units['u11']!=0){
        $healtstat = '100';
    }else{
        $healtstat = '9';
    }
    $status = SIDEINFO_HERO2;
}
foreach($session->vvillages as $vi){
    if($herodata['wref']==$vi['wref']){
        $vname=$vi['name'];
        break;
    }
}

if($herodata['dead']==0){

    if($units['u11']!=0){
        $where2=SIDEINFO_HERO3.' <a onclick="document.location.href=\'karte.php?z='.$vi["wref"].'\'">'.$vname.'</a>.';
        $where=SIDEINFO_HERO4.' '.$vname.'.';
        $where2=SIDEINFO_HERO4.' <a onclick="document.location.href=\'karte.php?z='.$vi["wref"].'\'">'.$vname.'</a>.';
        $position = SIDEINFO_HERO5H;
    }
    elseif($units['u11']==0){
        $position = SIDEINFO_HERO5;
        $where=SIDEINFO_HERO6.' «'.$vname.'». '.SIDEINFO_HERO5;
        $where2=SIDEINFO_HERO6.' «<a onclick="document.location.href=\'karte.php?z='.$vi["wref"].'\'">'.$vname.'</a>» '.SIDEINFO_HERO7;
    }
}
else{
    $position = SIDEINFO_HERO1;
    $where=SIDEINFO_HERO6.' «'.$vname.'». '.SIDEINFO_HERO7;
	$where2=SIDEINFO_HERO4.' <a onclick="document.location.href=\'karte.php?z='.$vi["wref"].'\'">'.$vname.'</a>';
}



/*<div id="sidebarBoxHero" class="sidebarBox toggleable <?php if($_COOKIE['box']==1){echo 'expanded';}else{ echo 'collapsed';}?> ">*/

?>

    <div id="topBarHeroWrapper">
    <div id="topBarHero" class="heroV2">
	<?php
// Assume this value is dynamically calculated based on the user's current health.
if ($session->heroD['level'] != 100) {
  $width = round(100 * (($hero_levels[$session->heroD['level']] - $session->heroD['experience']) / ($hero_levels[$session->heroD['level']] - $hero_levels[$session->heroD['level'] + 1])), 1);
  if ($width <100 &&$width >= 0) {
    $healthPercentage1= $width;
  } elseif ($width >= 100) {
    $healthPercentage1= 100;
  } else {
    $healthPercentage1= 0;
  }

} else {
  $healthPercentage1= '100';
}
//var_dump($healthPercentage1);die();
$healthPercentage = $session->heroD['health']; // Example health percentage. Replace with actual calculation.
//$healthPercentage1 = 75;
if ($healthPercentage < 0) {
  $healthPercentage = 0;
} elseif ($healthPercentage > 100) {
  $healthPercentage = 100;
}


// Calculate the clip-path value based on the health percentage.
//$clipPathValue = 100 - $healthPercentage;
?>

<?php
//$healthPercentage = $healthPercentage; // Example health percentage
$experiencePercentage = $healthPercentage1; // Example experience percentage
?>

<svg class="experience" viewBox="0 0 120 120" width="120" height="120">
    <defs>
        <!-- Define clip paths for masking -->
        <clipPath id="healthMask">
            <path d="M55 55L47.35 109.46A 55 55 0 0 0 109.99 54.1" fill="white"></path>
        </clipPath>
        <clipPath id="experienceMask">
            <path d="M55 55L32.63 105.25A 55 55 0 0 1 0 54.72" fill="white"></path>
        </clipPath>
    </defs>

    <!-- Health Image with Mask -->
    <image xlink:href="<?=GP_LOCATION2;?>hud/topBar/hero/frame/health.png" x="0" y="0" width="120" height="120" style="clip-path: url(#healthMask);"></image>

    <!-- Experience Image with Mask -->
    
    <!-- Background Circle -->
    <circle class="transparent-element"  cx="60" cy="60" r="54" stroke="#ddd" stroke-width="10" fill="none"></circle>

    <!-- Green Progress Circle (health) -->
    <circle id="green-progress" cx="60" cy="60" r="54" stroke="#00FF00" stroke-width="10" fill="none" stroke-dasharray="0 440" stroke-dashoffset="0"></circle>

    <!-- Blue Progress Circle (experience) -->
    <circle id="blue-progress" cx="60" cy="60" r="54" stroke="#00BFFF" stroke-width="15" fill="none" stroke-dasharray="0 440" stroke-dashoffset="0" transform="rotate(-255, 60, 60)"></circle>
</svg>

<style>
    .experience {
        position: relative;
        width: 110px;
        height: 110px;
        /* Make the whole SVG container partially transparent if needed */
        opacity: 0.8; /* Adjust as needed */
    }

    #green-progress, #blue-progress {
        transition: stroke-dasharray 0.3s ease-in-out;
        fill: none; /* Ensure circles themselves are not filled */
        opacity: 0.5; /* Make the circles semi-transparent */
    }

    /* Other SVG or CSS elements that might be unrelated can have their opacity set */
    circle:not(#green-progress):not(#blue-progress) {
        opacity: 0; /* This will hide any circle that is not progress circles */
    }

    @keyframes shine {
        0% {
            opacity: 0.2;
            transform: translateX(-100%);
        }
        100% {
            opacity: 1;
            transform: translateX(100%);
        }
    }

    .green-progress::after, .blue-progress::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3));
        opacity: 0; /* Default opacity for shine effect */
        animation: shine 2s infinite linear;
    }

    /* Additional transparent areas if needed */
    .transparent-element {
        opacity: 0.5; /* Make this class apply transparency to targeted elements */
    }

    .green-progress:hover::after, .blue-progress:hover::after {
        opacity: 1; /* Shine effect on hover */
    }
</style>


<script type="text/javascript">
    function setSegmentedProgress(segments) {
        const radius = 54; // Radius of the circle
        const circumference = 2 * Math.PI * radius; // Full circumference of the circle

        segments.forEach(({ color, startAngle, endAngle }) => {
            const progressCircle = document.getElementById(`${color}-progress`);

            // Calculate the angle range for the segment
            const angleRange = endAngle - startAngle;
            
            // Calculate the length of the arc for the segment
            const arcLength = (angleRange / 360) * circumference;

            // Set the stroke-dasharray and stroke-dashoffset
            progressCircle.style.strokeDasharray = `${arcLength} ${circumference}`;
            const offset = (startAngle / 360) * circumference * -1;
            progressCircle.style.strokeDashoffset = offset;
        });
    }

    // Example usage for the segments
    setSegmentedProgress([
        { color: 'green', startAngle: 0, endAngle: <?php echo $healthPercentage; ?> },
        { color: 'blue', startAngle: 0, endAngle: <?php echo $experiencePercentage; ?> }
    ]);
</script>






	<div class="heroStatus">
        <a href="/build.php?newdid=19736&amp;id=39&amp;&amp;tt=2" title="" class=""><i class="heroHome"></i></a>
        <span class="hide"><i class="heroHome"></i></span>
	</div>
	<a id="button6632a41d844ae" class="layoutButton buttonFramed withIcon round auction green    " data-load-tooltip="hero" data-load-tooltip-data="{&quot;boxId&quot;:&quot;hero&quot;,&quot;buttonId&quot;:&quot;auction&quot;}" href="/hero/auction">
					<svg viewBox="0 0 20.18 19.44" class="auction"><g class="outline">
  <path d="M20 9.44l-6.14 6.16a.54.54 0 0 1-.78 0L11 13.5a.56.56 0 0 1 0-.78l1.64-1.64-.64-.64h-1.24l-7.38 8.7L0 15.76l8.67-7.41V7.13l-.57-.57-.74.75a.49.49 0 0 1-.69 0L4.19 4.83a.49.49 0 0 1 0-.69l4-4a.49.49 0 0 1 .69 0l2.45 2.45a.52.52 0 0 1 0 .74l-.45.46.65.65h3.14v3.14l.73.73 1.75-1.75a.54.54 0 0 1 .78 0L20 8.66a.54.54 0 0 1 0 .78zm-9.35 7v3h9v-3z"></path>
</g><g class="icon">
  <path d="M20 9.44l-6.14 6.16a.54.54 0 0 1-.78 0L11 13.5a.56.56 0 0 1 0-.78l1.64-1.64-.64-.64h-1.24l-7.38 8.7L0 15.76l8.67-7.41V7.13l-.57-.57-.74.75a.49.49 0 0 1-.69 0L4.19 4.83a.49.49 0 0 1 0-.69l4-4a.49.49 0 0 1 .69 0l2.45 2.45a.52.52 0 0 1 0 .74l-.45.46.65.65h3.14v3.14l.73.73 1.75-1.75a.54.54 0 0 1 .78 0L20 8.66a.54.54 0 0 1 0 .78zm-9.35 7v3h9v-3z"></path>
</g></svg>
		</a>











<script type="text/javascript">
	jQuery('#button6632a41d844ae').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":"hero","boxId":"hero","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button6632a41d844ae","redirectUrl":"\/hero\/auction","redirectUrlExternal":"","svg":"topBar\/auction.svg","content":"","title":"\u0645\u0632\u0627\u062f\u0627\u062a||\u062a\u062d\u0645\u064a\u0644 \u0623\u062f\u0627\u0629 \u0627\u0644\u0646\u0635\u064a\u062d\u0629..."}]);
	});
</script>
<a id="button6632a41d84534" class="layoutButton buttonFramed withIcon round adventure green    attention" data-load-tooltip="hero" data-load-tooltip-data="{&quot;boxId&quot;:&quot;hero&quot;,&quot;buttonId&quot;:&quot;adventure&quot;}" href="/hero/adventures">
		</a>

<script type="text/javascript">
	jQuery('#button6632a41d84534').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":"hero","boxId":"hero","disabled":false,"attention":true,"colorBlind":false,"class":"","id":"button6632a41d84534","redirectUrl":"\/hero\/adventures","redirectUrlExternal":"","svg":false,"content":"&nbsp;99+","title":"\u0645\u063a\u0627\u0645\u0631\u0629||\u062a\u062d\u0645\u064a\u0644 \u0623\u062f\u0627\u0629 \u0627\u0644\u0646\u0635\u064a\u062d\u0629..."}]);
	});
</script>

	<a id="heroImageButton" onclick="window.location.href='hero_inventory.php';" class="heroImageButton " type="button" title="<?=SIDEINFO_HERO8;?>||<?=$where?>">
                <img   class="heroImage" style="top: 7px; left: 15px;  position: absolute; width: 60px;" src="hero_image.php?uid=<?php echo $session->uid; ?>&size=sideinfo&<?php echo $heroF->heroHash(); ?>" alt="">
            </button>
            <?php
            $availiblepoint = $hero['level'] * 4;
            $freepoints = $availiblepoint - ($hero['power'] + $hero['offBonus'] + $hero['defBonus'] + $hero['product']+1);
            if($session->heroD['dead']==1){?>
            <div class="bigSpeechBubble dead">
            <img src="img/x.gif" alt="">
            </div>
            <?php }elseif($freepoints>0){?>
                <div class="bigSpeechBubble levelUp">
                <img src="img/x.gif" alt="">
                </div>
        <?php    } ?>
        <div class="heroImageHover">
            <img  class="heroImage" class="heroStatus<?php echo $heroF->getHeroStatus(); ?>">
        </div>
	</a>

	<div class="heroStatus">
 <div class="heroStatusMessage">
        <a title="<?php /*echo $position;*/ echo constant('herostatus'.$heroF->getHeroStatus()); ?>" onclick="window.location.href='heroskill.php';" src="img/x.gif" class="heroStatus<?php echo $heroF->getHeroStatus(); ?>"><img alt="<?php echo $status; ?>" src="img/x.gif" class="heroHome heroStatus<?php echo $heroF->getHeroStatus(); ?>"></i></a>
        <span class="hide"><i class="heroHome"></i></span>
	</div>
</div>
            <?php
            $availiblepoint = $hero['level'] * 4;
            $freepoints = $availiblepoint - ($hero['power'] + $hero['offBonus'] + $hero['defBonus'] + $hero['product']+1);
            if($session->heroD['dead']==1){?>
            <div>
            </div>
            <?php }elseif($freepoints>0){?>
                <div class="levelUp show levelUp">
                <img src="img/x.gif" alt="">
                </div>
        <?php    } ?>













	<a id="button660c5a111f225" class="layoutButton buttonFramed withIcon round auction green    " data-load-tooltip="hero" data-load-tooltip-data="{&quot;boxId&quot;:&quot;hero&quot;,&quot;buttonId&quot;:&quot;auction&quot;}"onclick="window.location.href='hero_auction.php';" class="heroImageButton " type="button" title="حراجی">
					<svg viewBox="0 0 20.18 19.44" class="auction"><g class="outline">
  <path d="M20 9.44l-6.14 6.16a.54.54 0 0 1-.78 0L11 13.5a.56.56 0 0 1 0-.78l1.64-1.64-.64-.64h-1.24l-7.38 8.7L0 15.76l8.67-7.41V7.13l-.57-.57-.74.75a.49.49 0 0 1-.69 0L4.19 4.83a.49.49 0 0 1 0-.69l4-4a.49.49 0 0 1 .69 0l2.45 2.45a.52.52 0 0 1 0 .74l-.45.46.65.65h3.14v3.14l.73.73 1.75-1.75a.54.54 0 0 1 .78 0L20 8.66a.54.54 0 0 1 0 .78zm-9.35 7v3h9v-3z"></path>
</g><g class="icon">
  <path d="M20 9.44l-6.14 6.16a.54.54 0 0 1-.78 0L11 13.5a.56.56 0 0 1 0-.78l1.64-1.64-.64-.64h-1.24l-7.38 8.7L0 15.76l8.67-7.41V7.13l-.57-.57-.74.75a.49.49 0 0 1-.69 0L4.19 4.83a.49.49 0 0 1 0-.69l4-4a.49.49 0 0 1 .69 0l2.45 2.45a.52.52 0 0 1 0 .74l-.45.46.65.65h3.14v3.14l.73.73 1.75-1.75a.54.54 0 0 1 .78 0L20 8.66a.54.54 0 0 1 0 .78zm-9.35 7v3h9v-3z"></path>
</g></svg>
		</a>



            <script type="text/javascript">

                if($('button5225ee283b28a'))
                {
                    $('button5225ee283b28a').addEvent('click', function ()
                    {
                        window.fireEvent('buttonClicked', [this, {"type":"green","onclick":"return false;","loadTitle":true,"boxId":"hero","disabled":false,"speechBubble":"<?php echo count($adventures); ?>","class":"","id":"button5225ee283b28a","redirectUrl":"hero_adventure.php","redirectUrlExternal":""}]);
                    });
                }
            </script>	




<script type="text/javascript">
	jQuery('#button660c5a111f225').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":"hero","boxId":"hero","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button660c5a111f225","redirectUrl":"\/hero\/auction","redirectUrlExternal":"","svg":"topBar\/auction.svg","content":"","title":"Auctions||Tooltip loading..."}]);
	});
</script>









     <?php
            $adventures = $database->query("SELECT end FROM adventure WHERE `uid`='".$session->uid."' AND `end` = 0 and `time` > '".time()."'");
            ?>
<a id="button6613fe2423794" class="layoutButton buttonFramed withIcon round adventure green    attention" data-load-tooltip="hero" data-load-tooltip-data="{&quot;boxId&quot;:&quot;hero&quot;,&quot;buttonId&quot;:&quot;adventure&quot;}" title="<?=SIDEINFO_HERO9;?>:||<?=SIDEINFO_HERO10;?>: <?php echo count($adventures); ?>" onclick="window.location.href='hero_adventure.php';">

					<div class="content"><?php echo count($adventures); ?></div>
		</a>













<script type="text/javascript">
	jQuery('#button660c5a111f2e6').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":"hero","boxId":"hero","disabled":false,"attention":true,"colorBlind":false,"class":"","id":"button660c5a111f2e6","redirectUrl":"\/hero\/adventures","redirectUrlExternal":"","svg":false,"content":80,"title":"Adventure||Tooltip loading..."}]);
	});
</script>
</div>
    </div>

</body></html>











































