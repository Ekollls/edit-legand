			<div id="villageNameField" class="boxTitle"><?php echo $village->vname; ?></div>
			</div>
			<div class="innerBox content">
	
                
			</div>
			<div class="innerBox footer">
				<button type="button" id="button5229e5255021d"	class="layoutButton editWhite green  " onclick="return false;" title="<?php echo dorf1_villageNameBox_16; ?>">
					<div class="button-container addHoverClick">
						<i></i>
					</div>
				</button>
			<script type="text/javascript">
				if($('button5229e5255021d'))
				{
					$('button5229e5255021d').addEvent('click', function ()
					{
						window.fireEvent('buttonClicked', [this, {"type":"green","onclick":"return false;","loadTitle":false,"boxId":"","disabled":false,"speechBubble":"","class":"","id":"button5229e5255021d","redirectUrl":"","redirectUrlExternal":"","title":"\u0627\u0646\u0642\u0631 \u0647\u0646\u0627 \u0645\u0631\u062a\u064a\u0646 \u0644\u062a\u063a\u064a\u0651\u0631 \u0627\u0633\u0645 \u0642\u0631\u064a\u062a\u0643","villageDialog":{"title":"<?=CHANGING_YOUR_VILLAGE_NAME?>:","description":"<?=NEW_NAME?>:","saveText":"<?=SAVE?>","villageId":"<?php echo $village->wid;?>"}}]);
					});
				}
			</script>