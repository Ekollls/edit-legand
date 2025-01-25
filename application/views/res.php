					
<?php
$start_time = time();
$timelimit = 2;

$troopStarvesEvery = 1;
$ncrop = 0;

$wood = round(($village->awood * 100) / $village->maxstore);
$clay = round(($village->aclay * 100) / $village->maxstore);
$iron = round(($village->airon * 100) / $village->maxstore);
$crop = round(($village->acrop * 100) / $village->maxcrop);

?>
					<div id="stockBar">


    <div  class="warehouse">

        <div  class="capacity">
		
            <i  class="warehouse_medium" id="stockBarWarehouseWrapper" class="stock" title="<?=WAREHOUSE?>"></i>
			
            <div  class="value" ><?=$village->maxstore ?></div>
			
			<a  class="warehouse_medium" href="/dorf3.php?s=3">
			
        </div>
		
		
		
		
		

		
		
		

		                    <a class="stockBarButton" href="dorf3.php?s=3" title="<?=WOOD?>||<?=PROD_HEADER?> : <?php echo $village->getProd("wood"); ?>">
                <td class="ico">
                
                    <div><?php echo $session->bonus1 ? '<img src="img/x.gif" class="productionBoost">' : ''; ?><i  class="r1Big1"></i></div>
				              <span id="l1" class="value" style="font-size:<?php if(round($village->awood) > 9999999){echo '9px';}else{echo '11px;';}?>"><?php echo round($village->awood);?></span>
				<div class="barBox">
					<div id="lbar1" class="bar" title="<?=WOOD?>||<?=PROD_HEADER?> : <?php echo $village->getProd("wood"); ?>"></div>
				</div>
            </a>
			
			
			
			
			
			
			
<a id="stockBarResource1" class="stockBarButton" href="dorf3.php?s=3" title="<?=CLAY?>||<?=PROD_HEADER?> : <?php echo $village->getProd("clay"); ?>">

       <td class="ico">
                    <div><?php echo $session->bonus2 ? '<img src="img/x.gif" style="top:0px" class="productionBoost">' : ''; ?><i  class="r2Big2"></i></div>
		
   <span id="l2" class="value" <?php if($village->aclay > 10000000){ echo 'style="font-size:9px;"'; } ?>><?php echo round($village->aclay); ?></span>				<div class="barBox">
		      <div id="lbar2" class="bar" style="width:<?php echo $clay;?>%;"></div>
				</div>
            </a>














   <a class="stockBarButton" href="dorf3.php?s=3" title="<?=IRON?>||<?=PROD_HEADER?> : <?php echo $village->getProd("iron"); ?>">
		   
                <td class="ico">
                    <div><?php echo $session->bonus3 ? '<img src="img/x.gif" style="top:0px" class="productionBoost">' : ''; ?><i  class="r3Big3"></i></div>
				
				                <div id="l3" class="value"<?php if($village->airon > 10000000){ echo 'style="font-size:9px;"'; } ?>><?php echo round($village->airon); ?></div>
				<div class="barBox">
				<div id="lbar3" class="bar" style="width:100%;"></div>
					
				</div>
            </a>
     
    </div>









    <div class="granary">
        <div class="capacity">
            <i class="granary_medium"title="<?=CROP?>||<?=PROD_HEADER?> : <?php echo $village->getProd("crop"); ?>"><img src="img/x.gif" alt="" /></a></i>
            <div class="value"><?=$village->maxcrop ?></div>
        </div>
		
		
		

 <a class="stockBarButton" href="dorf3.php?s=3" title="<?=CROP?>||<?=PROD_HEADER?> : <?php echo $village->getProd("crop"); ?>">
     <td class="ico">
                    <div><?php echo $session->bonus4 ? '<img src="img/x.gif" style="top:0px" class="productionBoost">' : ''; ?><i  class="r4Big4"></i></div>

                  </tr>
            <tr>

                       <div id="l4"   class="value" <?php if($village->acrop > 10000000){ echo 'style="font-size:9px;"'; } ?>><?php echo round($village->acrop); ?></div>
					   
			<div  class="barBox">
				<div id="lbar4" class="bar"  style="width:100%;"></div>
			</div>
        </a>











        <a class="stockBarButton r5" href="dorf3.php?s=3" style="font-size: 8px;" title=" گندم ازاد || گندم ذخیره ای: <?php echo number_format($village->getProd("crop")); ?><br>برای اطلاعات بیشتر اینجا کلیک کنید"><img src="img/x.gif" alt="افزایش و منفی گندم" >
            <i style=" top:-20px" class="r5Big5"></i>
			<div id="stockBarFreeCrop"   class="value"><?php echo $village->getProd("crop"); ?></div>
        </a>

    </div>

</div>


<?php
$totalproduction = $village->allcrop; // all crops + bakery + grain mill
$crop = floor($village->acrop);
?>


<script type="text/javascript">
    var resources = new Object();

    resources.production = {
        "l1": <?php echo $village->getProd("wood"); ?>,"l2": <?php echo $village->getProd("clay"); ?>,"l3": <?php echo $village->getProd("iron"); ?>,"l4": <?php echo $village->getProd("crop"); ?>,"l5": <?php echo ($village->allcrop); ?>	};
    resources.storage = {
        "l1": <?php echo $village->awood; ?>,"l2": <?php echo $village->aclay; ?>,"l3": <?php echo $village->airon; ?>,"l4": <?php echo $village->acrop; ?>	};
    resources.maxStorage = {
        "l1": <?php echo $village->maxstore; ?>,"l2": <?php echo $village->maxstore; ?>,"l3": <?php echo $village->maxstore; ?>,"l4": <?php echo $village->maxcrop; ?>	};

    $$('li.stockBarButton').each(function(element)
    {
        Travian.addMouseEvents(element, element);
    });

    var stockBarWarehouse   = $('stockBarWarehouse');
    var stockBarGranary     = $('stockBarGranary');
    var stockBarFreeCrop = $('stockBarFreeCrop');
    var numberFormatter = new Travian.Formatter({forceDecimal:false});

	stockBarWarehouse.set('html', numberFormatter.getFormattedNumber(parseInt(stockBarWarehouse.get('html'))));
	stockBarGranary.set('html', numberFormatter.getFormattedNumber(parseInt(stockBarGranary.get('html'))));
	stockBarFreeCrop.set('html', numberFormatter.getFormattedNumber(parseInt(stockBarFreeCrop.get('html'))));

</script>