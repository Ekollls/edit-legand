
      



   <?php
    $vote = $database->query("SELECT dgold FROM `users` WHERE `id`='".$session->uid."'"); //проinерка голосоinал ли уже игрок

?> 


	<?php 
	$disable = false;
	
	 if ($session->access != 9 && ($session->uid && !$disable && $session->qData['quest'] != 16)  ||
	($session->qData['quest'] == 16 
	&& ($session->qArrayB1[0] != 0 || $session->qArrayB2[0] != 0
	|| $session->qArrayE1[0] != 0 || $session->qArrayE2[0] != 0
	|| $session->qArrayW1[0] != 0 || $session->qArrayW2[0] != 0))){
		?>
<div id="sidebarBoxQuestmaster" class="sidebarBox   ">
	<div class="header ">
			<button id="questmasterButton"  title="راهنما" class="claimable vid_<?php echo $session->tribe; ?> highlighted on" type="button">
				
				<img class="animation" alt="" src="img/x.gif">
				<img class="mentor" alt="" src="img/x.gif">
				<?php if($session->qData['isFinished'] || ($session->qData['skipped'] 
				&& !$session->qData['battle1'] 
				&& !$session->qData['battle2'] 
				&& !$session->qData['economy1'] 
				&& !$session->qData['economy2']
				&& !$session->qData['world1']
				&& !$session->qData['world2'] ) ){ ?>
				<div class="bigSpeechBubble newQuestSpeechBubble" title="">
                        <img src="img/x.gif" alt="">
                    </div>
				<?php } ?>
							</button>
							<div class="buttonsWrapper">
		
























<script type="text/javascript">
	jQuery('#button660c68934894f').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"gold","loadTooltip":null,"boxId":"","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button660c68934894f","redirectUrl":"\/village\/statistics","redirectUrlExternal":"","svg":"sideBar\/overview.svg","content":"","accesskey":9}]);
	});
</script>
				<div  class="button-container addHoverClick">
					<i></i>
				</div>
			</button>
			</div>

			<script type="text/javascript">

				if ($('buttong6PCZTDC7HwhS')) {
					$('buttong6PCZTDC7HwhS').addEvent('click', function () {
						window.fireEvent('buttonClicked', [this, {
							"type": "gold",
							"onclick": "return false;",
							"loadTitle": false,
							"boxId": "",
							"disabled": false,
							"speechBubble": "",
							"class": "",
							"id": "buttong6PCZTDC7HwhS",
							"redirectUrl": "",
							"redirectUrlExternal": "",
							"overlay": []
						}]);
					});
				}
			</script>
			<?php if(DIRECTION != "rtl"){ ?>
			<div class="clear"></div>
			<?php } ?>
		

			<script type="text/javascript">
				window.addEvent('domready', function () {
					Travian.Game.Quest.setOptions({isTutorial: <?php echo $quest->userProgress() == 16 ? 'false' : 'true'; ?>});
					// Dialog an den Questmaster binden
					$('questmasterButton').addEvent('click', function () {
						<?php if( $quest->userProgress() == 16){ ?>
							Travian.Game.Quest.mentorClick('');
						<?php }else{ ?>
							Travian.Game.Quest.mentorClick('Tutorial_<?php	echo $quest->userProgress(); ?>');
						<?php } ?>
					});
				});
			</script>
			<div>
			
				<script type="text/javascript">
					Travian.Game.Quest.createHighlights();
					Travian.Game.Quest.toggleHighlights(true);
					$$('.questInformation .iconButton.small.cancel').addEvent('click', function () {
						setTimeout(function () {
							Travian.Game.Quest.createHighlights();
							Travian.Game.Quest.toggleHighlights(true);
						}, 500);
					});

				</script>
			</div>
		</div>
		
		<div style="color:#4f4e4e;  font-family: IRANSans;" class="innerBox content">
		<div  class="boxTitle" ><?php echo $lang['quests']['Main']['QuestsList']; ?></div>
			<ul id="mentorTaskList" class="notClickable">
				<?php echo $quest->getQuestMonitor($quest->userProgress()); ?>
				<script type="text/javascript">
					Travian.Translation.add('answers.tutorial_<?php	echo $quest->userProgress(); ?>_title', "Travian Answers");
				</script>
							</ul>
			<script type="text/javascript">
				window.addEvent('domready', function () {
					Travian.Game.Quest.setOptions(<?php echo $quest->getQuestJS($quest->userProgress()); ?>);
					Travian.Game.Quest.addListData([]);

					Travian.Game.Quest.bindListDelegationDeg(jQuery('ul#mentorTaskList li'));
					Travian.Game.Quest.createHighlights();
					Travian.Game.Quest.initializeQuests();
					
				});
			</script>
			</div>
		<div class="innerBox footer">
		</div>
	</div>
</div>    <?php } ?>

</div>