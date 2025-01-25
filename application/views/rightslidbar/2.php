<div id="sidebarBoxVillagelist" class="sidebarBox toggleable expanded">
    <div class="header">
		<div class="buttonsWrapper">
		
        <a id="button660c68934894f" class="layoutButton buttonFramed withIcon round overview green    " href="dorf3.php" accesskey="9">
					<svg viewBox="0 0 20 14.92" class="overview"><g class="outline">
  <path d="M10 1.41c4.61 0 8.34 6.05 8.34 6.05s-3.73 6.05-8.34 6.05-8.34-6-8.34-6 3.73-6 8.34-6M10 0C7.7 0 5.38 1.16 3.1 3.44A20.17 20.17 0 0 0 .46 6.72L0 7.46l.46.74a20.17 20.17 0 0 0 2.64 3.28c2.28 2.28 4.6 3.44 6.9 3.44s4.62-1.16 6.9-3.44a20.17 20.17 0 0 0 2.64-3.28l.46-.74-.46-.74a20.17 20.17 0 0 0-2.64-3.28C14.62 1.16 12.3 0 10 0zm.08 11.64a4.5 4.5 0 1 1 4.49-4.49 4.5 4.5 0 0 1-4.49 4.49zm0-7.88a3.39 3.39 0 1 0 3.38 3.39 3.39 3.39 0 0 0-3.38-3.39zm0 5.92a2.53 2.53 0 1 1 2.52-2.53 2.53 2.53 0 0 1-2.52 2.53z"></path>
</g><g class="icon">
  <path d="M10 1.41c4.61 0 8.34 6.05 8.34 6.05s-3.73 6.05-8.34 6.05-8.34-6-8.34-6 3.73-6 8.34-6M10 0C7.7 0 5.38 1.16 3.1 3.44A20.17 20.17 0 0 0 .46 6.72L0 7.46l.46.74a20.17 20.17 0 0 0 2.64 3.28c2.28 2.28 4.6 3.44 6.9 3.44s4.62-1.16 6.9-3.44a20.17 20.17 0 0 0 2.64-3.28l.46-.74-.46-.74a20.17 20.17 0 0 0-2.64-3.28C14.62 1.16 12.3 0 10 0zm.08 11.64a4.5 4.5 0 1 1 4.49-4.49 4.5 4.5 0 0 1-4.49 4.49zm0-7.88a3.39 3.39 0 1 0 3.38 3.39 3.39 3.39 0 0 0-3.38-3.39zm0 5.92a2.53 2.53 0 1 1 2.52-2.53 2.53 2.53 0 0 1-2.52 2.53z"></path>
</g></svg>
		</a>
       
                
                

	
	
	
	
	


    <script type="text/javascript">
	jQuery('#button660c68934894f').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":null,"boxId":"","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button660c68934894f","redirectUrl":"\/village\/statistics","redirectUrlExternal":"","svg":"sideBar\/overview.svg","content":"","accesskey":9}]);
	});
</script>
<?php if($session->goldclub != 0){  ?>
    <style type="text/css">
                    button.layoutButton.buildOff div.button-container i {
                        background-position: right -758px;
                    }

                    button.layoutButton.buildOn div.button-container i {
                        background-position: right -800px;
                    }
                </style>

    <button type="button" id="buttonBuild" class="layoutButton buttonFramed withIcon round  green  build  <?=$_COOKIE['builder']?>  green"
                        title="<?php echo $_COOKIE['builder'] == "On" ? 'ساخت سریع روشن است':'ساخت سریع خاموش است'; ?>" onclick="return false;" style="color: #fff !important;">
						
						
						  <svg class="layoutButton.buildOn w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
</svg>

                    <div class="button-container addHoverClick ">
					
                        <i></i>
                    </div>
                </button>   
	<script type="text/javascript">
		if($('button5229e52550762'))
		{
			$('button5229e52550762').addEvent('click', function ()
			{
				window.fireEvent('buttonClicked', [this, {"type":"green","onclick":"return false;","loadTitle":false,"boxId":"","disabled":false,"speechBubble":"","class":"","id":"button5229e52550762","redirectUrl":"dorf3.php","redirectUrlExternal":""}]);
			});
		}
	</script>   
    <?php
}
?> 
                <script type="text/javascript">
                    if($('buttonBuild'))
                    {
                        $('buttonBuild').addEvent('click', function ()
                        {
                            window.fireEvent('buttonClicked', [this, {"type":"green","onclick":"return false;","loadTitle":false,"boxId":"","disabled":false,"speechBubble":"","class":"","id":"buttonBuild","redirectUrl":"<?php echo (($dorf1=='')?'dorf2.php':'dorf1.php') . "?builder=" . $another; ?>","redirectUrlExternal":""}]);
                        });
                    }
                </script>
				</div>
   
	</div>
	<div class="clear"></div>
	<?php
    // var_dump($session->lang);die();
	$count = count($session->vvillages);
	$mode = CP;
    $c=1;
    $cou=0;
    while(${'cp'.$mode}[$c] < $session->cp){
        $c++;
        if($c>=127) break;
    }
  /*  $aq12 = $database->getUserField($session->uid, "cp", 0);
for($i=1;$i<=60;$i++){
$aq12 = $aq12 - (${'cp'.$mode}[$count+$i]) ;
if($aq12<0)
break;
}*/

    $c--;
	?>
	
	
	
	

	
	
	
	
	

	
	
	
	
	
	
	<div class="content">
		
<div  class="expansionSlotInfo"title="<?php echo dorf1_villageNameBox2_3; ?> :  <?=$count?>/<?php echo $c; ?> ‏<br /><?php echo dorf1_villageNameBox2_5;?>  <?php echo $session->cp;?> / <?php echo ${'cp'.$mode}[$c+1];?>">
	<div  class="boxTitle"><?=$count."/".$c?>
				<span class="slots"><?php echo dorf1_villageNameBox2_3; ?></span>
	</div>
	<div class="barWrapper">
			<div  class="bar" style="width:<?php echo (($session->cp / ${'cp'.$mode}[$c+1]) * 100);?>%">&nbsp;</div>
	</div>
</div>










	<?php
    $attt=array();
    if ($session->plus) {
        $att = $database->getMovement(88,$villmas, 1);
        foreach($att as $lol){
            $attt[$lol['to']]+=1;
        }
    }
	foreach($session->vvillages as $vil){
        $village_attack="";
        $village_title = $vil['name'];
        if ($session->plus) {
            if($attt[$vil['wref']]){
                $village_attack = "att1 ";
                $village_title = "attacks on this village: ".$attt[$vil['wref']];
            }
        }
        $newquery=explode("&",$_SERVER['QUERY_STRING']);
        if(isset($_GET['newdid']) || isset($_GET['id'])){unset($newquery[0]);}
        if(isset($_GET['newdid']) && isset($_GET['id'])){unset($newquery[1]); }
        $newquery = implode("&",$newquery);
        if ($_SERVER['PHP_SELF'] == "/build.php") {
            $build = true;
        } else {
            $build = false;
        }
        if ($build && $id > 18) {
            $buildvil = $fff[$vil['wref']];
            $newidbuild = $_GET['id'];
            $exist=0;
            for ($b = 19; $b <= 40; $b++) {
                if ($buildvil['f' . $b . 't'] == $village->resarray['f' . $_GET['id'] . 't'] && $buildvil['f' . $b] > 0) {
                    $newidbuild = $b;
                    $exist=1;
                }
            }
        }
        if(isset($_GET['id'])){
            $link = "?newdid=" . $vil['wref'] . "&id=".$_GET['id']."" . ($newquery ? '&'.$newquery : '');}else{
            $link = "?newdid=" . $vil['wref'] . "" . ($newquery ? '&'.$newquery : '');
        }
        if ($build && $id > 18) {
            if ($newidbuild != $_GET['id']) {
                $link = "?newdid=" . $vil['wref'] . "&id=" . $newidbuild."" . ($newquery ? '&'.$newquery : '');
            }elseif(!$exist){ $link = "?newdid=" . $vil['wref'] . "&id=" . $newidbuild;}
        }
	?>



	<div class="villageList">
		            <div class="dropContainer" data-sortindex="1">
                <div class="listEntry  active" data-did="<?=$vil['wref'];?>">
                    
                                            <div class="dragAndDrop preventMobileSwipeNavigation">
                                            <img src="img/x.gif" class="<?php echo $village_attack;?>"/>
                        </div>
                    
                       
                        		<a  href="<?=$_SERVER['PHP_SELF'] . $link;?>" accesskey="b" class="active">

                        <span class="iconAndNameWrapper">
                        
                            <span class="incomingTroops" data-id="<?=$vil['wref'];?>" data-load-tooltip="incomingTroops" data-load-tooltip-data="{&quot;villageId&quot;:<?=$vil['wref'];?>}">
                                <svg viewBox="0 0 20 19.06" class="attack">
  <path d="M16.22 13.08l2.14-2.14-1.37-1.36-1.63 1.63-2.15-2.15 4.74-4.73L19.06 0l-4.32 1.11L10 5.85 5.26 1.11.94 0l1.11 4.33 4.74 4.73-2.15 2.15-1.63-1.63-1.37 1.36 2.14 2.14L0 16.86l2.21 2.2 3.78-3.77 2.13 2.13 1.37-1.37-1.63-1.63L10 12.28l2.14 2.14-1.63 1.63 1.37 1.37 2.14-2.13 3.77 3.77 2.21-2.2-3.78-3.78z"></path>
</svg>
                            </span>
							
                            <span style="  font-family: IRANSans;"  id="vul_<?php echo $vil['name']; ?>" class="name"><?php echo $vil['name']; ?></span>
                        </span>
                        
												<div class=" <?php if($vil['wref'] == $village->wid){ echo "active"; } ?> <?=$village_attack?>" title="<?php echo $vil['name']; ?> (<?php echo $vil['vx']; ?>|<?php echo $vil['vy']; ?>)">
						</a>
						<a  href="<?=$_SERVER['PHP_SELF'] . $link;?>" accesskey="b" class="active">
                      
                    </a>
                    <span class="coordinatesGrid">
‏<span  class="coordinates coordinatesWrapper coordinatesAligned coordinates<?php echo DIRECTION; ?>"><span class="coordinateX">(<?php echo $vil['vx']; ?></span><span class="coordinatePipe">|</span><span class="coordinateY"><?php echo $vil['vy']; ?>)</span></span></a>
                </div>
            </div>
			</div>
<script type="text/javascript">
            Travian.Game.VillageList.enableDragAndDropSorting();
    </script>
	</div>
					<?php }
	?>
				</ul>
			</div>
			<div class="innerBox footer">
						
	</div>
	





















