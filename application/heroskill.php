<?php

if(isset($_POST['id']) && !is_numeric($_POST['id'])) die('Hacking Attemp');
if(isset($_POST['amount']) && !is_numeric($_POST['amount'])) die('Hacking Attemp');
include("application/Account.php");
//$session->heroD['level']=100;

if($session->heroD['gender']==0){$gender='male';}else{
    $gender='female';}
$tribe = $session->tribe;
$hero_t = $GLOBALS["hero_t".$tribe];
$heroid = $session->heroD['heroid'];
if($session->heroD['dead'] && isset($_GET['revive'])==1 && $village->awood > $hero_t[$session->heroD['level']]['wood'] && $village->aclay > $hero_t[$session->heroD['level']]['clay'] && $village->airon > $hero_t[$session->heroD['level']]['iron'] && $village->acrop > $hero_t[$session->heroD['level']]['crop']){
/*$heron=0;
$vills=implode(",",$session->villages);
$q1 = "SELECT SUM(u11) as sum1 from enforcement where `from` IN (".$vills.")";       // check if hero is send as reinforcement
$he1 = $database->query($q1);
$heron+=$he1[0]['sum1'];
$q2 = "SELECT SUM(u11) as sum2 from units where `vref` IN (".$vills.")";   // checkf if hero is on my account (all villages)
$he2 = $database->query($q2);
$heron+=$he2[0]['sum2'];
foreach($session->villages as $myvill){
    $heron+=$database->HeroNotInVil($myvill); // check if hero is not in village (come back from attack , raid , etc.)
}
*/

//if(!$heron && !$session->heroD['revivetime']){
    if(!$session->heroD['revivetime']){
        $each = (time() + ($hero_t[$session->heroD['level']]['time']/SPEED*1.5));

    $database->query("UPDATE hero SET `revivetime` ='".$each."',`wref` = '" . $village->wid . "'  WHERE `uid` = '" . $session->uid . "'");
    $database->insertQueueBC($session->uid,11,time(),$each,$village->wid);

    $database->modifyResource($village->wid,$hero_t[$session->heroD['level']]['wood'],$hero_t[$session->heroD['level']]['clay'],$hero_t[$session->heroD['level']]['iron'],$hero_t[$session->heroD['level']]['crop'],0);
    $database->modifyHero2('wref', $village->wid, $session->uid, 0);
}
    header("Location: hero_inventory.php"); exit;
}


$gi = $database->getHeroInventory($session->uid);
include("application/Inventory.php");
if(!empty($_POST) || !empty($_GET)){
header("Location: hero_inventory.php");//exit;
}

?>


<?php include("application/views/html.php");?>
<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE hero hero_inventory <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> season- buildingsV1">
<script type="text/javascript">
    window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
</script>
<div id="background">
<div></div>
<div id="bodyWrapper">

<div id="header">

    <?php
    include("application/views/topheader.php");
    include("application/views/toolbar.php");

    ?>

</div>
<div id="center">


<?php include("application/views/sideinfo.php"); ?>

<div  class="size1">

</div>

<div class="contentTitle buttonCount2">

                        </div>

<div id="contentOuterContainer" class=" contentPage">
                                            <div class="contentTitle buttonCount2">
                            	<a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="dorf<?=$session->link?>.php">
</g><g class="icon">

</g></svg>
    </a>
<a id="answersButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="http://t4.answers.travian.com/index.php?aid=106#go2answer" target="_blank">&nbsp;</a>
                        <a id="contextualHelpButton" class="contentTitleButton buttonFramed green withIcon rectangle">&nbsp;</a></div>
                        <div class="contentContainer">
                            <div id="content" class="heroV2 heroV2Attributes">

							                                <h1 class="titleInHeader"><?php echo U0; ?></h1>

<div id="heroV2" class="contentV2"><a id="tabFavorButton" class="icon contentTitleButton buttonFramed green withIcon rectangle undefined"></a>

<div>
<div class="contentNavi">
<div class="contentNavi subNavi tabFavorWrapper"><button type="button" class="scrollFrom" disabled=""></button>

<div class="scrollingContainer">


<div class="content "><a href="hero_inventory.php" class="tabItem "><?=herohero0?></a>
</div>
<div class="content favorActive"><a href="hero_inventory.php" class="tabItem  active   ">مهارتها</a>
</div>
<div class="content "><a href="hero.php" class="tabItem   "><?=herohero1?></a>
</div>

<div class="content "><a href="hero_adventure.php" class="tabItem    "><?=herohero2?></a>
</div>

<div class="content "><a href="hero_auction.php" class="tabItem    "><?=herohero3?></a>
</div>
</div><button type="button" class="scrollTo" disabled=""></button>
</div>

<div class="navigationSpacer">


		</div>



<?php 
include_once("application/views/hero.php");


?>


































	  
	  
	  
	  
	  
	  
	  
	  
	  
      <div class=" attributeBox">
	          <div class="attribute heroStatus">
            <?php if($session->heroD['hide']==0){ echo HEROI39;}else{ echo HEROI40;}?></div>
<p>

        <div class="stats">
          <div class="name"><i class="attributeHealth_medium"></i><span><?php echo HEROI25; ?></span></div>
          <div class="progressBar preventMobileSwipeNavigation">
            <div class="bar">
              <div class="decoration"></div>
              <div class="filling primary green" style="width:<?php echo $session->heroD['health']; ?>%;"></div>
              <div class="filling secondary green" style="width:<?php echo $session->heroD['health']; ?>%;"></div>
            </div>
          </div>

              <span class="value" style="font-size: 11px;"><?php echo round($session->heroD['health']); ?>%</span>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
          <div class="name"><i class="attributeExperience_medium"></i><span><?php echo HEROI33; ?></span></div>
		               
          <div class="progressBar preventMobileSwipeNavigation">
            <div class="bar">
			
              <div class="decoration"></div>
			  
              <div class="filling primary blue" style="width:<?php
                                if($session->heroD['level']!=100){
                                    $width = round(100 * (($hero_levels[$session->heroD['level']] - $session->heroD['experience']) /($hero_levels[$session->heroD['level']] - $hero_levels[$session->heroD['level'] + 1])), 1);
                                    if($width >= 0){
                                        echo $width;
                                    }else{
                                        echo 0;
                                    }
                                
                                }else { echo '100';} ?>%;"></div>
								                  <div class="clear"></div>
                    
            </div>
          </div>
        <span class="value" style="font-size: 11px;"><?php echo $session->heroD['experience']; ?></span>
		                      <tr class="attribute experience tooltip" title="<?php if($session->heroD['level']!=100){  ?><?=HEROI33?>||<?php echo HEROI31.' '; echo($hero_levels[$session->heroD['level'] + 1] - $session->heroD['experience']); ?> <?=HEROI32?> <?php echo($session->heroD['level'] + 1); ?> <?php  }else{ echo 'Достигнут максимальный уроinень'; } ?>.">

		  
		  
		  
		  
		  
		  
		  
		  
		  
          <div class="name"><i class="attributeSpeed_medium"></i><span><?php echo $lang['Hero']['Speed']; ?></span></div>
          <div class="value speedValue"><svg viewBox="0 0 10 7.75" class="arrowDouble">
              <path d="M0 0h3l3 3.88-3 3.87H0l3-3.87"></path>
        		<path d="M4 0h3l3 3.88-3 3.87H4l3-3.87"></path>
				<div>
	<strong id="heroSpeedValueNumber"><?php echo $session->heroD['speed'] * INCREASE_SPEED; ?></strong> <?php echo HEROI38;?>
			 		
			
		
		
        </div>
      </div>
	      </div>
      </div>
	      </div>
  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	
                    
      <div class="attributeBox">
	  
        <div class="heroProduction">
		
        
                    
						  
    
 




            <table cellspacing="0" cellpadding="0" class="transparent attributes noPointsToSet">



               
                      
                
            
						
						
						
						
						

    

     
                        <td class="pointsText" colspan="4">
                            <div class="production tooltip" title="<?php echo HEROI43?>||<?php echo HEROI47;?>&lt;br /&gt;&lt;span class=&quot;
            heroAttributeInformation&quot;&gt;<?php echo HEROI43?>&lt;img title=&quot;inсе ресурсы&quot; alt=&quot;
            inсе ресурсы&quot; class=<?php if($session->heroD['r0'] != 0)
            { echo 'r0';} elseif($session->heroD['r1'] != 0)
            { echo 'r1';} elseif($session->heroD['r2'] != 0)
            { echo 'r2';} elseif($session->heroD['r3'] != 0)
            { echo 'r3';} else {echo 'r4';}?> src=&quot;img/x.gif&quot; /&gt;<?php if ($session->heroD['r0'] != 0) { echo number_format($rp);} else{ echo number_format($session->heroD['product']* 10 * SPEED);}?>
             &lrm;&amp;#x202d;&amp;#x202d;&amp;#x202c;&amp;#x202c;&lrm;&lt;/span&gt;">
							<span class="productionTotal"><strong><?php echo HEROI43;?></span>
														<img alt="All" class="<?php if($session->heroD['r0'] != 0)
                { echo 'r0';} elseif($session->heroD['r1'] != 0)
                { echo 'r1';} elseif($session->heroD['r2'] != 0)
                { echo 'r2';} elseif($session->heroD['r3'] != 0)
                { echo 'r3';} else {echo 'r4';}?>" src="img/x.gif"> 
							<span class="value" style="font-size: 11px;"><?php if ($session->heroD['r0'] != 0) { echo number_format($rp);} else{ echo number_format($session->heroD['product']* 10 * SPEED);}?></span>
														

							+ <img alt="Crop" class="r4" src="img/x.gif"> <span  class="current">6</span></span></span>        
                          
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>


</div>


             
	  
        <div class="heroProduction">
		           


		  
          <div class="changeProduction">
            <div class="resource resources_medium"><button class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable grey" type="button"><i class="resources_medium"></i></button><span class="value"><?php if($rp > 10000){echo $rp/1000;echo 'k'; }else {echo $rp;}  ?></span></div>
            <div class="resource lumber_small"><button class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable grey" type="button"><i class="lumber_small"></i></button><span class="value"><?php if(($session->heroD['product']*10*SPEED) > 10000){echo ($session->heroD['product']* 10
                            * SPEED)/1000;echo 'k'; }else {echo $session->heroD['product']* 10 * SPEED;}  ?></span></span></div>
            <div class="resource clay_small"><button class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable orange" type="button"><i class="clay_small"></i></button><span class="value"><?php if(($session->heroD['product']*10*SPEED) > 10000){echo ($session->heroD['product']* 10
                            * SPEED)/1000;echo 'k'; }else {echo $session->heroD['product']* 10 * SPEED;}  ?></span></div>
            <div class="resource iron_small"><button class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable grey" type="button"><i class="iron_small"></i></button><span class="value"><?php if(($session->heroD['product']*10*SPEED) > 10000){echo ($session->heroD['product']* 10
                            * SPEED)/1000;echo 'k'; }else {echo $session->heroD['product']* 10 * SPEED;}  ?></span></div>
            <div class="resource crop_small"><button class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable grey" type="button"><i class="crop_small"></i></button><span class="value"><?php if(($session->heroD['product']*10*SPEED) > 10000){echo ($session->heroD['product']* 10
                            * SPEED)/1000;echo 'k'; }else {echo $session->heroD['product']* 10 * SPEED;}  ?></span></div>
							
          </div>
        </div>
      </div>
      <div class="attributeBox">
        <div class="heroAttributes">
          <div class="attributes formV2">
            <div class="title"><?=HEROI0?></div>
							
    
  
            <?php if($freepoints>0){?>
          <div class="points_descr">    <?=HEROI50?>	</div>
         
    
			 <div class="pointsAvailable"><?=$freepoints?></span>/<?=$freepoints?>		</div>
       
            <th></th>
            <?php } ?>
   
			
			
			
			
			
			
			
			
			
			
			
            <div class="name" ><i class="attributeStrength_medium" title="<?=HEROI8?>||<?=HEROI7?><br><span class='heroAttributeInformation'><?php echo $lang['Hero']['FStrength']; ?>: ‎‭‭<?php echo (100 + $tp * $session->heroD['power'] + $session->heroD['itempower']); ?> <?php echo $lang['Hero']['FHero']; ?></span>"></i><span><?=HEROI8?></span></div>
            <div class="progressBar preventMobileSwipeNavigation">

              <div class="bar">
                <div class="decoration"></div>
				
                <div class="filling primary blue" style="width:<?php echo $session->heroD['power']; ?>%;"></div>
                <div class="filling secondary blue" style="width: 0%;"></div>
              </div>
            </div>
			
			

			
			
            <div class="inputRatio pointsRatio isRtl"><span class="nominator"><label class="points"> <input type="text" class="text" value="<?php echo $session->heroD['power'];?>" name="attributepower"></span><span class="denominator">
			    <?php if ($session->heroD['power'] < 100 AND $freepoints > 0) {
        ?>
        <td class="element pointsValueSetter sub">
            <a class="setPoint disabled" href="#"></a>
        </td>
        <td class="element points">
    
        </td>
        <td class="element pointsValueSetter add">
            <a class="setPoint" href="#"></a>
        </td>
    <?php } ?>
                <div class="value"><?php echo (100 + $tp * $session->heroD['power'] + $session->heroD['itempower']); ?>‬‬‎</div>

              </span></div>
			  
			  
			  
			  
			  
			  

			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
            <div class="name"><i class="attributeOffBonus_medium" title="<?=HEROI14?>||<?=HEROI13?>"></i><span>  <?=HEROI14?>	</span></div>
            <div class="progressBar preventMobileSwipeNavigation">
              <div class="bar">
                <div class="decoration"></div>
                <div class="filling primary blue" style="width:<?php echo $session->heroD['offBonus']; ?>%;"></div>
                <div class="filling secondary blue" style="width: 0%;"></div>
              </div>
            </div>
            <div class="inputRatio pointsRatio isRtl"><span class="nominator"><label class="points"><input type="text" class="text" value="<?php echo $session->heroD['offBonus'];?>" name="attributeoffBonus"></label></span><span class="separator"></span><span class="denominator">
				
        </td>
        <?php if ($session->heroD['offBonus'] < 100 AND $freepoints > 0) {
            ?>
            <td class="element pointsValueSetter sub">
                <a class="setPoint disabled" href="#"></a>
            </td>
            <td class="element points">
                
            </td>
            <td class="element pointsValueSetter add">
                <a class="setPoint" href="#"></a>
            </td>
        <?php } ?>
                <div class="value"><?php echo round($session->heroD['offBonus'])/5; ?></span>%</div>
              </span></div>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  

		
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
            <div class="name"><i class="attributeDefBonus_medium" title="<?=HEROI19?>||<?=HEROI17?>."></i><span> <?=HEROI19?></span></div>
            <div class="progressBar preventMobileSwipeNavigation">
              <div class="bar">
                <div class="decoration"></div>
                <div class="filling primary blue" style="width:<?php echo $session->heroD['product']; ?>%;"></div>
                <div class="filling secondary blue" style="width: 0%;"></div>
              </div>
            </div>
            <div class="inputRatio pointsRatio isRtl"><span class="nominator"><label class="points"><input type="text" class="text" value="<?php echo $session->heroD['product'];?>" name="attributeproductionPoints"></label></span><span class="separator"></span><span class="denominator">
			
                <div class="value"><?php if($freepoints <= 0) { ?> <td class="element points"><?php echo $session->heroD['product']; }?>  </div>
							  	
      
        <?php if ($session->heroD['product'] < 100 AND $freepoints > 0) {
            ?>
            <td class="element pointsValueSetter sub">
                <a class="setPoint disabled" href="#"></a>
            </td>
            <td class="element points">
  
            </td>
            <td class="element pointsValueSetter add">
                <a class="setPoint" href="#"></a>
            </td>
        <?php } ?>
              </span></div>
			  
			  
			  
			  
			  
			  
			  
			  


			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
            <div class="name"><i class="attributeRessourceBonus_medium"></i><span><?=HEROI19?></span></div>
            <div class="progressBar preventMobileSwipeNavigation">
              <div class="bar">
                <div class="decoration"></div>
                <div class="filling primary blue" style="width:<?php echo $session->heroD['product']; ?>%;"></div>
                <div class="filling secondary blue" style="width: 0%;"></div>
              </div>
            </div>

            <div class="inputRatio pointsRatio isRtl"><span class="nominator"><label class="points"><input type="text" class="text" value="<?php echo $session->heroD['product'];?>" name="attributeproductionPoints"></label></span><span class="separator">\</span><span class="denominator">
			
                <div class="value"><?php if($freepoints <= 0) { ?> <td class="element points"><?php echo $session->heroD['product']; }?> </div>
				
				
				
				
				
				
				
				
				
				
				
				
              </span></div><button  class="textButtonV2 buttonFramed rectangle withText green" type="button" id="savePoints" disabled="">
              <div><?=HEROI51?></div>
            </button>
          </div>
        </div>
      </div>
	  
	  
	  
	      <script type="text/javascript">
        window.addEvent('domready', function()
        {
            if($('saveHeroAttributes'))
            {
                $('saveHeroAttributes').addEvent('click', function ()
                {
                    window.fireEvent('buttonClicked', [this, {"type":"button","value":"save changes","name":"saveHeroAttributes","id":"saveHeroAttributes","class":"green disabled","title":"","confirm":"","onclick":""}]);
                });
            }
        });
    </script>
</div>
<script type="text/javascript">
    window.addEvent('domready', function()
    {
        $$('.hero_inventory #attributes .openCloseSwitchBar').addEvent('click', function(e)
        {
            Travian.toggleSwitch($$('.hero_inventory #attributes .heroPropertiesContent'), $$('.hero_inventory #attributes .openCloseSwitchBar .openedClosedSwitch'));
            $$('.hero_inventory #attributes .openCloseSwitchBar .availablePoints').toggleClass('hide');
        });

        var attributeForm = new Travian.Game.Hero.Properties.PropertyForm();
        attributeForm.addInputElementByName('saveHeroAttributes');
        attributeForm.addInputElementByName('resource');
        attributeForm.addInputElementByName('attackBehaviour');
<?php if($freepoints>0){?>
        var propertySetterElement = new Travian.Game.Hero.PropertySetter(attributeForm,
            {
                element: 'attributesOfHero',
                elementAvailablePoints: 'availablePoints',
                availablePoints: <?=$freepoints?>,
                attributes:
                    [
                     <?php   if($session->heroD['power']<100){ ?>
                        new Travian.Game.Hero.PropertySetter.Attribute.Power(
                            {
                                id: 'power',
                                element: 'attributepower',
                                value: <?=$session->heroD['power']*100?>,
                                usedPoints: <?=$session->heroD['power']?>,
                                maxPoints: 100,
                                valueOfItems: <?=$session->heroD['itempower']?>,
                                valueBonus: 0    					})<?php  } if($session->heroD['offBonus']<100){ ?>
                        ,
                        new Travian.Game.Hero.PropertySetter.Attribute.OffBonus(
                        {
                            id: 'offBonus',
                            element: 'attributeoffBonus',
                            value: <?=round($session->heroD['offBonus'])/5?>,
                            usedPoints: <?=$session->heroD['offBonus']?>,
                            maxPoints: 100,
                            valueOfItems: 0,
                            valueBonus: 0    					})
                        <?php  } if($session->heroD['defBonus']<100){ ?>
                        ,    				    					new Travian.Game.Hero.PropertySetter.Attribute.DefBonus(
                        {
                            id: 'defBonus',
                            element: 'attributedefBonus',
                            value: <?=round($session->heroD['defBonus'])/5?>,
                            usedPoints: <?=$session->heroD['defBonus']?>,
                            maxPoints: 100,
                            valueOfItems: 0,
                            valueBonus: 0    					})
                        <?php  } if($session->heroD['product']<100){ ?>
                        ,
                        new Travian.Game.Hero.PropertySetter.Attribute.ProductionPoints(
                        {
                            id: 'productionPoints',
                            element: 'attributeproductionPoints',
                            value: <?=$rp?>,
                            usedPoints: <?=$session->heroD['product']?>,
                            maxPoints: 100,
                            valueOfItems: 0,
                            valueBonus: 0    					})  <?php }?>  				    			]
            });

        attributeForm.addElement('properties', propertySetterElement);
        attributeForm.onDirty(false);
        <?php } ?>
    });
</script>




	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <div class="attributeBox">
        <div class="heroEquipmentBenefits"><strong>فوائد أدوات البطل</strong>
          <ul>
            <li><span class="listIcon"></span><span class="benefit">&#x202E;+&#x202D;7&#x202C;&#x202C; سرعة للبطل الفارس</span></li>
          </ul>
        </div>
      </div>
      <div class="attributeBox">
<div>
 
        </div>
		
		
		
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

<?php if ($session->heroD['dead'] == 1) { ?>

    <div class="attribute heroStatus">
<?php 

    $vRes = ($village->awood + $village->aclay + $village->airon + $village->acrop);
    $hRes = ($hero_t[$session->heroD['level']]['wood'] + $hero_t[$session->heroD['level']]['clay'] + $hero_t[$session->heroD['level']]['iron'] + $hero_t[$session->heroD['level']]['crop']);
    $checkT = $session->heroD['revivetime'] != 0;

    if (!$checkT) {
    ?>
		
	    <div class="heroStatusMessage header error">
        <?php echo $heroF->printHeroSt(); ?>  
             </div>
        </div>
        <div class="attribute regenerate tooltip"
             title="<?=HEROI23?> <?php echo $session->heroD['autoregen'] * INCREASE_SPEED; ?>% <?=HEROI24?></font>">

             <div class="element attributesHeadline">
                            <?php echo $lang['Hero']['Revive01']; ?> <a href="karte.php?d=<?php echo $session->heroD['wref']; ?>"><?php echo $database->getVillage($session->heroD['wref'])['name']; ?></a>. <?php echo $lang['Hero']['Revive02']; ?> <a href="karte.php?d=<?php echo $village->wid; ?>"><?php echo $village->vname; ?></a>.
                            </div>
                        <div class="element attributesHeadline"><?php echo $lang['Hero']['Revive03']; ?></div>
                        <div class="element attributesHeadline"></div>
                        <div class="roundedCornersBox white">
                            <div class="element resourceDemandCaption"><?php echo $lang['Hero']['Revive04']; ?>:
                            </div>      
				
                <div class="clear"></div>

					
        <div class="inlineIconList resourceWrapper">
        <div class="inlineIcon resource"><i class="r1Big"></i><span class="value value"><?php echo $hero_t[$session->heroD['level']]['wood']; ?></span></div>
        <div class="inlineIcon resource"><i class="r2Big"></i><span class="value value"><?php echo $hero_t[$session->heroD['level']]['clay']; ?></span></div>
        <div class="inlineIcon resource"><i class="r3Big"></i><span class="value value"><?php echo $hero_t[$session->heroD['level']]['iron']; ?></span></div>
        <div class="inlineIcon resource"><i class="r4Big"></i><span class="value value"><?php echo $hero_t[$session->heroD['level']]['crop']; ?></span></div>
        <div class="inlineIcon resource"><i class="cropConsumptionBig"></i><span class="value value">6</span></div>
					
        </div>
        <div class="lineWrapper">
        <div class="inlineIcon duration"><i class="clock_medium"></i><span class="value "><?php echo $generator->getTimeFormat(($hero_t[$session->heroD['level']]['time'] / SPEED * 1.5)); ?></span></div>             
                  
				<button type="submit"  value="Revive" name="save" id="save" class="green startTraining" onclick="window.location.href = 'hero_inventory.php?revive=1'; return false;">
                                            <div class="button-container addHoverClick ">
                                                <div class="button-background">
                                                    <div class="buttonStart">
                                                        <div class="buttonEnd">
                                                            <div class="buttonMiddle"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-content"><?=HEROI28?></div>
                                            </div>
                                        </button>
										<?php if ($hero_t[$session->heroD['level']]['wood'] > $village->awood ||
												  $hero_t[$session->heroD['level']]['clay'] > $village->aclay ||
												  $hero_t[$session->heroD['level']]['iron'] > $village->airon ||
												  $hero_t[$session->heroD['level']]['crop'] > $village->acrop) { ?>
										
                            <button type="button" value="" class="icon"
                                    onclick="window.location.href = 'build.php?s=17&amp;t=3&amp;r1=<?php echo $hero_t[$session->heroD['level']]['wood']; ?>&amp;r2=<?php echo $hero_t[$session->heroD['level']]['clay']; ?>&amp;r3=<?php echo $hero_t[$session->heroD['level']]['iron']; ?>&amp;r4=<?php echo $hero_t[$session->heroD['level']]['crop']; ?>'; return false;">
                                <img src="img/x.gif" class="npc" alt="npc"></button>
                                </div>
                            <div class="clear"></div>
							<?php }?>
                  
                
                    <div class="clear"></div>
                <?php }else{ // hero is in revive
                    ?>
                    <div class="heroStatusMessage header warning">
                        <img alt="Held tot!" src="img/x.gif" class="heroStatus101Regenerate">
                        <?php echo $lang['Hero']['Revive05']; ?> <a href="karte.php?d=<?php echo $session->heroD['wref']; ?>"><?php echo $database->getVillage($session->heroD['wref'])['name']; ?></a> : <?php echo $lang['Hero']['Revive06']; ?> <span class="timer " counting="down" value="<?php echo ($session->heroD['revivetime'] - time()); ?>"><?php echo $generator->getTimeFormat($session->heroD['revivetime'] - time()); ?></span>
                    
                    <?php
                    
                    echo '</div>'; }
            ?>
        </div>
</div>
        <div class="clear"></div>

<?php } ?>	


		
	
		<p>
		
		<p>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<script type="application/javascript">
    jQuery(document).ready(function() {
        window.Travian.React.HeroV2.render(
            {screen: 'inventory', screenData: {"checksum":"5ad223","imageHash":"265783c3a7ffa8c2d9c195698071257b44113103.2644","direction":"RTL","gender":"male","knowledgeBaseLink":"https:\/\/support.travian.com\/support\/solutions\/articles\/7000064021-hero-item-overview-and-mounts","viewData":{"itemsInventory":[{"id":597771,"typeId":110,"name":"\u0643\u062a\u0627\u0628 \u0627\u0644\u062a\u063a\u064a\u064a\u0631","placeId":1,"place":"inventory","slot":"inventory","amount":1,"type":"consumable","isUsableIfDead":false,"attributes":[{"descriptionDetails":"\u062a\u064f\u0633\u062a\u062e\u062f\u0645 \u0644\u0627\u0633\u062a\u0639\u0627\u062f\u0629 \u062c\u0645\u064a\u0639 \u0646\u0642\u0627\u0637 \u0627\u0644\u062e\u0635\u0627\u0626\u0635 \u0627\u0644\u062a\u064a \u062a\u0645 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0639 \u0625\u0645\u0643\u0627\u0646\u064a\u0629 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0631\u0629 \u0623\u062e\u0631\u0649.","effectDescription":"\u0625\u0639\u0627\u062f\u0629 \u062a\u0648\u0632\u064a\u0639 \u0646\u0642\u0627\u0637 \u0627\u0644\u0628\u0637\u0644. \u064a\u062a\u0645 \u062a\u0635\u0641\u064a\u0631 \u0647\u0630\u0647 \u0627\u0644\u0646\u0642\u0627\u0637 (\u0645\u0643\u0627\u0641\u0623\u0629 \u0627\u0644\u0647\u062c\u0648\u0645\u060c \u0645\u0643\u0627\u0641\u0623\u0629 \u0627\u0644\u062f\u0641\u0627\u0639 ...."},{"descriptionDetails":null,"effectDescription":"\u064a\u062a\u0645 \u062a\u0641\u0639\u064a\u0644\u0647\u0627 \u062d\u064a\u0646 \u0646\u0642\u0644\u0647\u0627 \u0644\u0644\u0628\u0637\u0644"},{"descriptionDetails":null,"effectDescription":"\u0642\u0627\u0628\u0644 \u0644\u0644\u062a\u0643\u0648\u064a\u0645"}],"tier":0,"descriptionDetails":"\u062a\u064f\u0633\u062a\u062e\u062f\u0645 \u0644\u0627\u0633\u062a\u0639\u0627\u062f\u0629 \u062c\u0645\u064a\u0639 \u0646\u0642\u0627\u0637 \u0627\u0644\u062e\u0635\u0627\u0626\u0635 \u0627\u0644\u062a\u064a \u062a\u0645 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0639 \u0625\u0645\u0643\u0627\u0646\u064a\u0629 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0631\u0629 \u0623\u062e\u0631\u0649.","canBeUsed":true,"errorMessage":null,"tooltipErrorMessage":null,"warningMessage":null,"maxInput":1,"minInput":0,"defaultInput":1,"description":"\u062a\u064f\u0633\u062a\u062e\u062f\u0645 \u0644\u0627\u0633\u062a\u0639\u0627\u062f\u0629 \u062c\u0645\u064a\u0639 \u0646\u0642\u0627\u0637 \u0627\u0644\u062e\u0635\u0627\u0626\u0635 \u0627\u0644\u062a\u064a \u062a\u0645 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0639 \u0625\u0645\u0643\u0627\u0646\u064a\u0629 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0631\u0629 \u0623\u062e\u0631\u0649.","alreadyEquipped":null,"isEquipped":false,"canBeClicked":true,"clickShortDescription":{"icon":"swap","text":"\u0627\u0633\u062a\u062e\u062f\u0627\u0645"}}],"itemsEquipped":[{"id":74210,"typeId":103,"name":"\u062d\u0635\u0627\u0646 \u0631\u0643\u0648\u0628\u060c \u062e\u0641\u064a\u0641","placeId":-7,"place":"horse","slot":"horse","amount":1,"type":"item","isUsableIfDead":false,"attributes":[{"descriptionDetails":null,"effectDescription":"&#x202e;&plus;&#x202d;7&#x202c;&#x202c; \u0633\u0631\u0639\u0629 \u0644\u0644\u0628\u0637\u0644 \u0627\u0644\u0641\u0627\u0631\u0633"}],"tier":1,"descriptionDetails":null,"canBeUsed":true,"errorMessage":null,"tooltipErrorMessage":null,"warningMessage":null,"maxInput":1,"minInput":0,"defaultInput":1,"description":null,"alreadyEquipped":null,"isEquipped":true,"canBeClicked":true,"clickShortDescription":{"icon":"swap","text":"\u062a\u062c\u0631\u064a\u062f"}},{"id":522462,"typeId":106,"name":"\u062f\u0647\u0646 \u0634\u0641\u0627\u0621","placeId":-6,"place":"bag","slot":"bag","amount":6,"type":"consumable","isUsableIfDead":false,"attributes":[{"descriptionDetails":"\u0633\u064a\u0639\u064a\u062f \u0643\u0644 \u062f\u0647\u0646 \u0634\u0641\u0627\u0621 \u0645\u064f\u0633\u062a\u062e\u062f\u0645 &#x202e;&#x202d;1&#x202c;&#37;&#x202c; \u0645\u0646 \u0627\u0644\u0635\u062d\u0629. \u062a\u062c\u0647\u064a\u0632 \u062f\u0647\u0646 \u0634\u0641\u0627\u0621 \u0644\u0639\u0644\u0627\u062c \u0627\u0644\u0625\u0635\u0627\u0628\u0627\u062a \u063a\u064a\u0631 \u0627\u0644\u0645\u0645\u064a\u062a\u0629 \u0628\u0639\u062f \u0627\u0644\u0645\u0639\u0631\u0643\u0629 \u0645\u0628\u0627\u0634\u0631\u0629\u064b.","effectDescription":"\u0623\u0639\u062f \u0644\u0628\u0637\u0644\u0643 \u0639\u0627\u0641\u064a\u062a\u0647 \u0641\u0648\u0631\u0627\u064b. \u0639\u062f\u062f \u0627\u0644\u0645\u0631\u0627\u0647\u0645 \u0627\u0644\u0645\u0633\u062a\u0647\u0644\u0651\u0643\u0629 \u064a\u062d\u062f\u0651\u062f \u0639\u062f\u062f \u0646\u0642\u0627\u0637 \u0627\u0644\u0635\u062d\u0629 \u0627\u0644\u062a\u064a \u064a\u0633\u062a\u0639\u064a\u062f\u0647\u0627 \u0627\u0644\u0628\u0637\u0644 (\u0628\u062d\u062f \u0623\u0642\u0635\u0649 &#x202e;&#x202d;100&#x202c;&#37;&#x202c;)."},{"descriptionDetails":null,"effectDescription":"\u064a\u062a\u0645 \u062a\u0641\u0639\u064a\u0644\u0647\u0627 \u062d\u064a\u0646 \u0646\u0642\u0644\u0647\u0627 \u0644\u0644\u0628\u0637\u0644"},{"descriptionDetails":null,"effectDescription":"\u0642\u0627\u0628\u0644 \u0644\u0644\u062a\u0643\u0648\u064a\u0645"},{"descriptionDetails":null,"effectDescription":"\u064a\u062a\u0645 \u062a\u0641\u0639\u064a\u0644\u0647\u0627 \u0628\u0639\u062f \u0627\u0644\u0645\u0639\u0627\u0631\u0643."}],"tier":0,"descriptionDetails":"\u0633\u064a\u0639\u064a\u062f \u0643\u0644 \u062f\u0647\u0646 \u0634\u0641\u0627\u0621 \u0645\u064f\u0633\u062a\u062e\u062f\u0645 &#x202e;&#x202d;1&#x202c;&#37;&#x202c; \u0645\u0646 \u0627\u0644\u0635\u062d\u0629. \u062a\u062c\u0647\u064a\u0632 \u062f\u0647\u0646 \u0634\u0641\u0627\u0621 \u0644\u0639\u0644\u0627\u062c \u0627\u0644\u0625\u0635\u0627\u0628\u0627\u062a \u063a\u064a\u0631 \u0627\u0644\u0645\u0645\u064a\u062a\u0629 \u0628\u0639\u062f \u0627\u0644\u0645\u0639\u0631\u0643\u0629 \u0645\u0628\u0627\u0634\u0631\u0629\u064b.","canBeUsed":true,"errorMessage":null,"tooltipErrorMessage":null,"warningMessage":null,"maxInput":6,"minInput":0,"defaultInput":6,"description":"\u0633\u064a\u0639\u064a\u062f \u0643\u0644 \u062f\u0647\u0646 \u0634\u0641\u0627\u0621 \u0645\u064f\u0633\u062a\u062e\u062f\u0645 &#x202e;&#x202d;1&#x202c;&#37;&#x202c; \u0645\u0646 \u0627\u0644\u0635\u062d\u0629. \u062a\u062c\u0647\u064a\u0632 \u062f\u0647\u0646 \u0634\u0641\u0627\u0621 \u0644\u0639\u0644\u0627\u062c \u0627\u0644\u0625\u0635\u0627\u0628\u0627\u062a \u063a\u064a\u0631 \u0627\u0644\u0645\u0645\u064a\u062a\u0629 \u0628\u0639\u062f \u0627\u0644\u0645\u0639\u0631\u0643\u0629 \u0645\u0628\u0627\u0634\u0631\u0629\u064b.","alreadyEquipped":6,"isEquipped":true,"canBeClicked":true,"clickShortDescription":{"icon":"swap","text":"\u0646\u0642\u0644"}}],"heroState":{"isRegenerating":false,"status":{"status":100}},"commonData":{"experiencePerScroll":10,"experienceBonus":0,"currentExperience":169,"heroHomeVillageLoyalty":100,"heroHomeVillageName":"hamidthcggfff","loyaltyPerTablet":1,"activeVillageID":19736,"activeVillageName":"hamidthcggfff","currentHealth":100,"healthDelta":0,"fullHealth":100,"useArtworksOneByOneOnly":true}}}, favouriteTab: 'inventory', tabBarName: 'heroV2'},
            {},
            ["allgemein","hero","heroAppearance","items","build","plus","karte"]        );
    });
</script>
                  



            <div class="attribute attackBehaviour">
                <div class="changeResourcesHeadline"><strong><?=HEROI41?></strong></div>
				<p>
                <div class="options">
		<input type="radio" class="radio" name="attackBehaviour" id="attackBehaviour" value="hide"  <?php if($session->heroD['hide']==1){ echo 'checked="checked"'; }?>> <label for="attackBehaviourHide"><?=HEROI40?> </label><br />
		<input type="radio" class="radio" name="attackBehaviour" id="attackBehaviour" value="fight"  <?php if($session->heroD['hide']==0){ echo 'checked="checked"'; }?>> <label for="attackBehaviourFight"><?=HEROI39?></label>
</div>
		
		
		
		
		
		
		
		
		
		
        <div>

            <div class="switch"></div>
			
      
          </label></div>

      </div>
    </div>




































































<div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>


</div>
</div>

</div>
</div>
</div>
</div>
<?php
include("application/views/rightsideinfor.php");
?>
<div class="clear"></div>
</div>
<?php

 include("application/views/header.php");
     
        include("application/views/footer.php");
?>
</div>
<div id="ce"></div>
</div>
</body>
</html>