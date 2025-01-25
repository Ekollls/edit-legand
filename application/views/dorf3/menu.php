<?php 
if(!$session->plus){
?>

<div class="contentNavi subNavi ">
	<div title="" class="container active">
		<div class="background-start">&nbsp;</div>
		<div class="background-end">&nbsp;</div>
		<div class="content favor favorActive favorKey0">

			<a id="villageOverViewTab1" href="dorf3.php?s=0" class="tabItem">
			<?=dorf0?> <img src="img/x.gif" class="favorIcon" alt="This tab has been marked as a favorite">
			</a>
		</div>
	</div>

	<script type="text/javascript">
		if ($('villageOverViewTab1')) {
			$('villageOverViewTab1').addEvent('click', function () {
				window.fireEvent('tabClicked', [this, {
					"class": "active",
					"title": false,
					"target": false,
					"id": "villageOverViewTab1",
					"href": "dorf3.php?s=0",
					"onclick": false,
					"enabled": true,
					"text": "<?=dorf0?>",
					"dialog": false,
					"plusDialog": false,
					"goldclubDialog": false,
					"containerId": "",
					"buttonIdentifier": "villageOverViewTab1"
				}]);

			});
		}
	</script>
	<div class="container gold normal">
		<div class="background-start">&nbsp;</div>
		<div class="background-end">&nbsp;</div>
		<div class="content favor  favorKey2">

			<a id="villageOverViewTab2" href="#" class="tabItem">
			<?=dorf1?><img src="img/x.gif" class="favorIcon" alt="This tab has been marked as a favorite">
			</a>
		</div>
	</div>

	<script type="text/javascript">
		if ($('villageOverViewTab2')) {
			$('villageOverViewTab2').addEvent('click', function () {
				window.fireEvent('tabClicked', [this, {
					"class": "gold normal",
					"title": "Village Statistics | For this meze, you need a liter in a n Plus",
					"target": false,
					"id": "villageOverViewTab2",
					"href": "#",
					"onclick": false,
					"enabled": true,
					"text": "<?=dorf1?>",
					"dialog": false,
					"plusDialog": {
						"featureKey": "villageStatistics",
						"infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer"
					},
					"goldclubDialog": false,
					"containerId": "",
					"buttonIdentifier": "villageOverViewTab2"
				}]);

			});
		}
	</script>

	<div class="container gold normal">
		<div class="background-start">&nbsp;</div>
		<div class="background-end">&nbsp;</div>
		<div class="content favor  favorKey3">

			<a id="villageOverViewTab3" href="#" class="tabItem">
				<?=dorf2?><img src="img/x.gif" class="favorIcon" alt="This tab has been marked as a favorite">
			</a>
		</div>
	</div>

	<script type="text/javascript">
		if ($('villageOverViewTab3')) {
			$('villageOverViewTab3').addEvent('click', function () {
				window.fireEvent('tabClicked', [this, {
					"class": "gold normal",
					"title": "Village Statistics | For this meze, you need a liter in a n Plus",
					"target": false,
					"id": "villageOverViewTab3",
					"href": "#",
					"onclick": false,
					"enabled": true,
					"text": "<?=dorf2?>",
					"dialog": false,
					"plusDialog": {
						"featureKey": "villageStatistics",
						"infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer"
					},
					"goldclubDialog": false,
					"containerId": "",
					"buttonIdentifier": "villageOverViewTab3"
				}]);

			});
		}
	</script>

	<div class="container gold normal">
		<div class="background-start">&nbsp;</div>
		<div class="background-end">&nbsp;</div>
		<div class="content favor favorKey4">

			<a id="villageOverViewTab4" href="#" class="tabItem">
			<?=dorf3?><img src="img/x.gif" class="favorIcon" alt="This tab has been marked as a favorite">
			</a>
		</div>
	</div>

	<script type="text/javascript">
		if ($('villageOverViewTab4')) {
			$('villageOverViewTab4').addEvent('click', function () {
				window.fireEvent('tabClicked', [this, {
					"class": "gold normal",
					"title": "Village Statistics | For this meze, you need a liter in a n Plus",
					"target": false,
					"id": "villageOverViewTab4",
					"href": "#",
					"onclick": false,
					"enabled": true,
					"text": "<?=dorf3?>",
					"dialog": false,
					"plusDialog": {
						"featureKey": "villageStatistics",
						"infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer"
					},
					"goldclubDialog": false,
					"containerId": "",
					"buttonIdentifier": "villageOverViewTab4"
				}]);

			});
		}
	</script>

	<div class="container gold normal">
		<div class="background-start">&nbsp;</div>
		<div class="background-end">&nbsp;</div>
		<div class="content favor  favorKey5">

			<a id="villageOverViewTab5" href="#" class="tabItem">
			<?=dorf4?> <img src="img/x.gif" class="favorIcon" alt="This tab has been marked as a favorite">
			</a>
		</div>
	</div>

	<script type="text/javascript">
		if ($('villageOverViewTab5')) {
			$('villageOverViewTab5').addEvent('click', function () {
				window.fireEvent('tabClicked', [this, {
					"class": "gold normal",
					"title": "Village statistics | For this feature you need liters in a N Plus",
					"target": false,
					"id": "villageOverViewTab5",
					"href": "#",
					"onclick": false,
					"enabled": true,
					"text": "<?=dorf4?>",
					"dialog": false,
					"plusDialog": {
						"featureKey": "villageStatistics",
						"infoIcon": "http:\/\/t4.answers.travian.com\/index.php?aid=Travian Answers#go2answer"
					},
					"goldclubDialog": false,
					"containerId": "",
					"buttonIdentifier": "villageOverViewTab5"
				}]);

			});
		}
	</script>

	<div class="clear"></div>
</div>

<?php
}else{
	$s = isset($_GET['s']) ? $_GET['s'] : 1;
?>
<div class="contentNavi subNavi tabWrapper">
   <button type="button" class="scrollFrom" disabled="disabled"></button> 
   <div class="scrollingContainer">
      <div class="content">
         <a id="buttonc1" class="tabItem infrastructure <?php echo $s == 1 ? 'active' : 'normal'; ?>" href="/dorf3.php?s=1"> نمای کلی </a>
      </div>
      <script type="text/javascript" data-cmp-info="6">
         jQuery(function () { if (jQuery('#buttonc1').length > 0) { jQuery('#buttonc1').on('click', function () { jQuery(window).trigger('tabClicked', [this, { "class": "infrastructure <?php echo $s == 1 ? 'active' : 'normal'; ?>", "title": false, "target": false, "id": "buttonc1", "href": "\/dorf3.php?s=1", "onclick": false, "enabled": true, "text": "Infrastructure", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "buttonc1" }]); }); } });
      </script>
      <div class="content">
         <a id="buttonn2" class="tabItem military <?php echo $s == 2 ? 'active' : 'normal'; ?>" href="/dorf3.php?s=2"> منابع </a>
      </div>
      <script type="text/javascript" data-cmp-info="6">
         jQuery(function () { if (jQuery('#buttonn2').length > 0) { jQuery('#buttonn2').on('click', function () { jQuery(window).trigger('tabClicked', [this, { "class": "military <?php echo $s == 2 ? 'active' : 'normal'; ?>", "title": false, "target": false, "id": "buttonn2", "href": "\/dorf3.php?s=2", "onclick": false, "enabled": true, "text": "Military", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "buttonn2" }]); }); } });
      </script>
      <div class="content">
         <a id="buttonw3" class="tabItem resources <?php echo $s == 3 ? 'active' : 'normal'; ?>" href="/dorf3.php?s=3"> انبارها </a>
      </div>
      <script type="text/javascript" data-cmp-info="6">
         jQuery(function () { if (jQuery('#buttonw3').length > 0) { jQuery('#buttonw3').on('click', function () { jQuery(window).trigger('tabClicked', [this, { "class": "resources <?php echo $s == 3 ? 'active' : 'normal'; ?>", "title": false, "target": false, "id": "buttonw3", "href": "\/dorf3.php?s=3", "onclick": false, "enabled": true, "text": "Resources", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "buttonw3" }]); }); } });
      </script>
      <div class="content">
         <a id="buttonw4" class="tabItem resources <?php echo $s == 4 ? 'active' : 'normal'; ?>" href="/dorf3.php?s=4"> امتیاز فرهنگی </a>
      </div>
      <script type="text/javascript" data-cmp-info="6">
         jQuery(function () { if (jQuery('#buttonw4').length > 0) { jQuery('#buttonw4').on('click', function () { jQuery(window).trigger('tabClicked', [this, { "class": "resources <?php echo $s == 4 ? 'active' : 'normal'; ?>", "title": false, "target": false, "id": "buttonw4", "href": "\/dorf3.php?s=4", "onclick": false, "enabled": true, "text": "Resources", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "buttonw4" }]); }); } });
      </script>
      <div class="content">
         <a id="buttonw5" class="tabItem resources <?php echo $s == 5 ? 'active' : 'normal'; ?>" href="/dorf3.php?s=5"> نیروها </a>
      </div>
      <script type="text/javascript" data-cmp-info="6">
         jQuery(function () { if (jQuery('#buttonw5').length > 0) { jQuery('#buttonw5').on('click', function () { jQuery(window).trigger('tabClicked', [this, { "class": "resources <?php echo $s == 5 ? 'active' : 'normal'; ?>", "title": false, "target": false, "id": "buttonw5", "href": "\/dorf3.php?s=5", "onclick": false, "enabled": true, "text": "Resources", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "buttonw5" }]); }); } });
      </script>
   </div>
   <button type="button" class="scrollTo" disabled="disabled"></button> 
</div>

<?php } ?>