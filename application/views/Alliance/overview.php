<?php

$ranking->procARankArray();
if(isset($_GET['aid'])) {
$aid = $database->FilterIntValue($database->FilterVar($_GET['aid']));
}
else {
$aid = $session->alliance;
}
$varmedal = $database->getProfileMedalAlly($aid);


$members = $database->getAllMemO($aid);
$totalpop = $members['pop'];
$memberlist = $database->getAllMember($aid);



$profiel="".$allianceinfo['notice']."".md5("skJkev3")."".$allianceinfo['desc']."";
require("medal.php");
$profiel=explode("".md5("skJkev3")."", $profiel);

include("alli_menu.php");

?>
<div id="details">
    <h4 class="round small"><?=ally4?>:</h4>
    <table cellpadding="1" cellspacing="1" class="transparent">
        <tbody>
        <tr>
                <th>TAG:</th>
                <td><?php echo $tag; ?></td>
            </tr>
            <tr>
                <th><?php echo OVERVIEW17; ?>:</th>
                <td><?php echo $aname; ?></td>
            </tr>
                <tr>
                <td colspan="2" class="empty"></td>
            </tr>
            <tr>
                <th><?php echo OVERVIEW4; ?></th>
                <td><?php echo $ranking->getAllianceRank($aid); ?></td>
            </tr>
            <tr>
                <th>Points</th>
                <td><?php echo $totalpop; ?></td>
            </tr>
            <tr>
                <th><?php echo STATISTIC28; ?></th>
                <td><?php echo $members['user']; ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div id="memberTitles">
    <h4 class="round small"><?=ally5?></h4>
    <table cellpadding="1" cellspacing="1" class="transparent">
        <tbody>
                <?php
                foreach($memberlist as $member) {

           //rank name
            $rank = $database->getAlliancePermission($member['id'],"rank",0);

            //username
            $name = $member['username'];

            if(!empty($rank)){
            echo "<tr>";
            echo "<th>".stripslashes($database->RemoveXSS($rank))."</th>";
            echo "<td><a href='spieler.php?uid=".$member['id']."'>".$database->RemoveXSS($name)."</td>";
            echo "</tr>";
            }
        }

			?>
        </tbody>
    </table>
</div>





<div class="contentNavi tabNavi ">
                    <div title="" class="container  <?php echo ($_GET['action']  == 'description' || !$_GET['action']) ? 'active' : 'normal'; ?>">
                <div class="background-start">&nbsp;</div>
                <div class="background-end">&nbsp;</div>
                <div class="content favor favorActive scrollingContainer">

                                        <a id="button66242be9379b7" href="allianz.php?<?php echo ($_GET['aid'] ? 'aid='.$_GET['aid'].'&' : ''); ?>action=description" class="tabItem">
					توضیحات                        					</a>
				                </div>
            </div>

                            <script type="text/javascript">
                    jQuery(function() {
                        if (jQuery('#button66242be9379b7').length > 0) {
                            jQuery('#button66242be9379b7').on('click', function () {
                                jQuery(window).trigger('tabClicked', [this, {"class":" normal","title":false,"target":false,"id":"button66242be9379b7","href":"\/alliance\/profile\/description","onclick":false,"enabled":true,"text":"\u0627\u0644\u0648\u0635\u0641","dialog":false,"plusDialog":false,"goldclubDialog":false,"containerId":"","buttonIdentifier":"button66242be9379b7"}]);

                            });
                        }
                    });
                </script>
            
                    <div title="" class="container  <?php echo $_GET['action']  == 'members' ? 'active' : 'normal'; ?>">
                <div class="background-start">&nbsp;</div>
                <div class="background-end">&nbsp;</div>
                <div id="button66242be9379bb" class="content favor favorKeymembers">

                                        <a id="button66242be9379bb" href="allianz.php?<?php echo ($_GET['aid'] ? 'aid='.$_GET['aid'].'&' : ''); ?>action=members" class="tabItem ">
					بازیکنان       <img src="img/x.gif" class="favorIcon" alt="Iron This tab is set as your favorite">
				                </div>
            </div>

                            <script type="text/javascript">
                    jQuery(function() {
                        if (jQuery('#button66242be9379bb').length > 0) {
                            jQuery('#button66242be9379bb').on('click', function () {
                                jQuery(window).trigger('tabClicked', [this, {"class":" active","title":false,"target":false,"id":"button66242be9379bb","href":"\/alliance\/profile\/members","onclick":false,"enabled":true,"text":"\u0639\u0636\u0648","dialog":false,"plusDialog":false,"goldclubDialog":false,"containerId":"","buttonIdentifier":"button66242be9379bb"}]);

                            });
                        }
                    });
                </script>
            
			

			


			
			
			
                <a type="submit" id="nestedTabFavorButton" class="icon nestedTabRowButton " عضو"="" كمفضّلة"="" onclick="Travian.api('favourite-tab', {data: {name: 'allyPageProfile',key: 'members'},success: function(data) {jQuery('.tabNavi .favor').removeClass('favorActive');jQuery('.favor.favorKeymembers').addClass('favorActive');}});return false;" useicon=""><img src="/img/x.gif" class="&nbsp;" alt=""></a>
        <div class="clear"></div>
    </div>

























<div class="clear"></div>
<?php if($_GET['action']  == 'description' || !$_GET['action']){ ?>
<div class="description description1">
    <?php echo nl2br($profiel[1]); ?>
</div>
<div class="description description2">
    <?php echo nl2br($profiel[0]); ?>
</div>
<?php }else{ ?>









<table cellpadding="2" cellspacing="1"  class="allianceMembers">
	<thead>

	<div class="playerName">
			
    <td class="counter">N</td>
    <td class="tribe">نزاد</td>

    <td class="player"><i class="player_medium"title="<?php echo OVERVIEW1; ?>"></i></td>

    <td class="population"><i class="population_medium"title="<?php echo OVERVIEW8; ?>"></i></td>
    <td class="villages"><i class="village_medium"title="<?php echo Villages; ?>"></i></td>


	
	</thead>

					
					
<?php
// Alliance Member list loop
$rank=0;
foreach($memberlist as $member) {

    $rank = $rank+1;
    $TotalUserPop = $database->getVSumField($member['id'],"pop");
    $TotalVillages = $database->getProfileVillages($member['id']);

    echo "<tr>";
    echo '<td class="counter">'.$rank.'.</td>';
    echo '<td class="tribe"><i class="tribe'.$database->getUserInfo($member['id'])['tribe'].'_medium"></i></td>';
	


echo "<td class=\"player\"><a  href=\"spieler.php?uid=".$member['id']."\">".$database->RemoveXSS($member['username'])."</a></td>";
    if($aid == $session->alliance){
        if ((time()-600) < $member['timestamp']){ // 0 Min - 10 Min
            echo "<img class=' online1' src=img/x.gif  title='".oweronline0."' alt='".oweronline0."' />";
        }elseif ((time()-86400) < $member['timestamp'] && (time()-600) > $member['timestamp']){ // 10 Min - 1 Days
            echo "<img class='online2' src=img/x.gif title='".oweronline1."' alt='".oweronline1."' />";
            }elseif ((time()-259200) < $member['timestamp'] && (time()-86400) > $member['timestamp']){ // 1-3 Days
            echo "<img class='online3' src=img/x.gif title='".oweronline2."' alt='".oweronline2."' />";
        }elseif ((time()-604800) < $member['timestamp'] && (time()-259200) > $member['timestamp']){
            echo "<img class='online4' src=img/x.gif title='".oweronline3."' alt='".oweronline3."' />";
        }else{
             echo "<img class='online online5' src=img/x.gif title=now online alt=now online />";
        }
    }

echo "<td class=\"hab\">".$TotalUserPop."</td>";
echo "<td class=\"vil\">".count($TotalVillages)."</td>";

}

?>





<script type="text/javascript">
    AllianceMembersButtonsDoubleClickPreventer = new Travian.DoubleClickPreventer();
    AllianceMembersButtonsDoubleClickPreventer.timeout = 1000;
    jQuery(function () {

        jQuery('button.editNote').on("click", function(e) {
            e.preventDefault();

            if (!AllianceMembersButtonsDoubleClickPreventer.check()) {
                return false;
            }
            new Travian.Game.AllianceMembers(
                {
                    data: {
                        affectedPlayerID: this.value,
                        action: 'edit'
                    },
                    context: 'playerNote',
                    buttonOk: false,
                    darkOverlay: true
                }
            );

        });
    });
</script>
              
</tbody>
</table>
<?php } ?>
<div class="clear"></div>
<div class="clear"></div>
