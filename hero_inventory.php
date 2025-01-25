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
    $database->insertQueue($session->uid,11,time(),$each,$village->wid);

    $database->modifyResource($village->wid,$hero_t[$session->heroD['level']]['wood'],$hero_t[$session->heroD['level']]['clay'],$hero_t[$session->heroD['level']]['iron'],$hero_t[$session->heroD['level']]['crop'],0);
    $database->modifyHero2('wref', $village->wid, $session->uid, 0);
}
    header("Location: hero_inventory.php"); exit;
}


$gi = $database->getHeroInventory($session->uid);
include("application/Inventory.php");
if((!empty($_POST) || !empty($_GET))&&(!isset($_GET['igroup']))){
  $iii='';
  if(isset($_GET['helmet'])){
    $iii='?igroup=3';
  }
  if(isset($_GET['body'])){
    $iii='?igroup=4';
  }
  if(isset($_GET['shoes'])){
    $iii='?igroup=5';
  }
  if(isset($_GET['leftHand'])){
    $iii='?igroup=1';
  }
  if(isset($_GET['rightHand'])){
    $iii='?igroup=2';
  }
  if(isset($_GET['horse'])){
    $iii='?igroup=0';
  }
  if(isset($_GET['bag'])){
    $iii='?igroup=6';
  }
header("Location: hero_inventory.php".$iii);//exit;
}
$gi = $database->getHeroInventory($session->uid);
?>


<?php include("application/views/html.php");?>
<?php
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
<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE hero hero_inventory <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> season- buildingsV3">
<script type="text/javascript">
    window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
</script>
<div id="background">
<div id="headerBar"></div>
<div id="bodyWrapper">

<div id="header">

    <?php
    include("application/views/topheader.php");


    ?>

</div>
<div id="center">


<?php include("application/views/sideinfo.php"); ?>

<div>




<div id="content" class="hero_inventory">

<?php 
include_once("application/views/Hero/heroMenu.php"); 


?>














<div id="bodyOptions">
	<div id="hero_body_container">
		<div id="hero_body">

    <?php
// Read the image file content
$imagePath = $database->heroBody($session->uid); // The image path you get from the database
$imageData = file_get_contents($imagePath);
//var_dump($imageData);die();
// Convert the image data to base64
$base64Image = base64_encode($imageData);

// Get the mime type of the image (e.g., image/png, image/jpeg)

// Embed the image inline using base64 encoding
?>
<img style="height: auto; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges; filter: contrast(1.2);" class="heroBodyImage-<?php echo strtoupper(DIRECTION); ?>" src="data:<?php echo $imageMimeType; ?>;base64,<?php echo $base64Image; ?>" />
	<div class="clear"></div>
		</div>

		<div id="hero_body_content">
			<div class="content gender_<?=$gender?>">

<?php
if($heroF->getHeroStatus()!=100){
	$dis = ' disabled';
}
	$id = $row["id"];$uid = $row["uid"];$btype = $row["btype"];$type = $row["type"];$num = $row["num"];$proc = $row["proc"];
	

if($gi['helmet']!=0){

	$data = $database->getItemData($gi['helmet']);
    $btype=$data['btype'];
    $type=$data['type'];
	$item = '';
	if(!$dis){$item = '<a href="?inventory&helmet">';}
	$item .= '<div id="item_'.$gi['helmet'].'" title="'.$Travian->getItemData($btype, $type)['name'].'||'.$deadTitle.$Travian->getItemData($btype, $type)['title'].'" class="item item_'.$data['type'].' onHero'.$dis.'" style="position: relative; left: 0px; top: 0px; "><div class="amount">'.$data['num'].'</div></div>';
	if(!$dis){$item .= '</a>';}
	if($btype >= 7 && $btype <= 9){

	$amount = '('.$num.') ';
	$outputList .= "<div id=\"inventory_".$inv."\" class=\"heroItem consumable inventory draggable empty  \">";
	$outputList .= "<div id=\"item_".$id."\" title=\"".$amount."".$Travian->getItemData($btype, $type)['name']."||".$deadTitle.($num*SPEED/10).$Travian->getItemData($btype, $type)['title']."\" class=\"item ".$gender."_item_".($btype+105)."".$dis."\" style=\"position:relative;left:0;top:0;\">";
	$outputList .= "<div class=\"amount\">".($num-$type)."</div>";
	$outputList .= "</div>";
	$outputList .= '</div>';
	}else{
	if($num==1){$amount = '';}else{$amount = '('.$num.') ';}
	//if($type != 0){
		$outputList .= "<div id=\"inventory_".$inv."\" class=\"heroItem consumable inventory draggable empty \">";
		$outputList .= "<div id=\"item_".$id."\" title=\"".$amount."".($Travian->getItemData($btype, $type)['name'] ? $Travian->getItemData($btype, $type)['name'] : constant('ITEM'.$type).'')."||".$deadTitle."".($Travian->getItemData($btype, $type)['title'] ? $Travian->getItemData($btype, $type)['title'] : constant('IEFF'.$type).'')."\" class=\"item ".$gender."_item_".($Travian->getItemData($btype, $type)['item'])."".$dis."\" ' style=\"position:relative;left:0;top:0;\">";
		$outputList .= "<div class=\"amount\">".$num."</div>";
		$outputList .= "</div>";
		$outputList .= '</div>';
	//}
	$inv++;	
	}
	echo '<div id="helmet" class="draggable">'.$item.'</div>';
}else{
	echo '<div id="helmet" class="draggable"></div>';
}

if($gi['leftHand']!=0){
	$data = $database->getItemData($gi['leftHand']);
    $btype=$data['btype'];
    $type=$data['type'];
	$item = '';
	if(!$dis){$item = '<a href="?inventory&leftHand">';}
	$item .= '<div id="item_'.$gi['leftHand'].'" title="'.$Travian->getItemData($btype, $type)['name'].'||'.$deadTitle.$Travian->getItemData($btype, $type)['title'].'" class="item item_'.$data['type'].' onHero'.$dis.'" style="position: relative; left: 0px; top: 0px; "><div class="amount">'.$data['num'].'</div></div>';
	if(!$dis){$item .= '</a>';}
	echo '<div id="leftHand" class="draggable">'.$item.'</div>';
}else{
	echo '<div id="leftHand" class="draggable"></div>';
}

if($gi['rightHand']!=0){
	$data = $database->getItemData($gi['rightHand']);
    $btype=$data['btype'];
    $type=$data['type'];
	$item = '';
	if(!$dis){$item = '<a href="?inventory&rightHand">';}
	$item .= '<div id="item_'.$gi['rightHand'].'" title="'.($Travian->getItemData($btype, $type)['name'] ? $Travian->getItemData($btype, $type)['name'] : constant('ITEM'.$type).'').'||'.($Travian->getItemData($btype, $type)['title'] ? $Travian->getItemData($btype, $type)['title'] : constant('IEFF'.$type).'').'" class="item item_'.$data['type'].' onHero'.$dis.'" style="position: relative; left: 0px; top: 0px; "><div class="amount">'.$data['num'].'</div></div>';
	if(!$dis){$item .= '</a>';}
	echo '<div id="rightHand" class="draggable">'.$item.'</div>';
}else{
	echo '<div id="rightHand" class="draggable"></div>';
}

if($gi['body']!=0){
	$data = $database->getItemData($gi['body']);
    $btype=$data['btype'];
    $type=$data['type'];
	$item = '';
	if(!$dis){$item = '<a href="?inventory&body">';}
	$item .= '<div id="item_'.$gi['body'].'" title="'.$Travian->getItemData($btype, $type)['name'].'||'.$deadTitle.$Travian->getItemData($btype, $type)['title'].'" class="item item_'.$data['type'].' onHero'.$dis.'" style="position: relative; left: 0px; top: 0px; "><div class="amount">'.$data['num'].'</div></div>';
	if(!$dis){$item .= '</a>';}
	echo '<div id="body" class="draggable">'.$item.'</div>';
}else{
	echo '<div id="body" class="draggable"></div>';
}

if($gi['horse']!=0){
	$data = $database->getItemData($gi['horse']);
    $btype=$data['btype'];
    $type=$data['type'];
	$item = '';
	if(!$dis){$item = '<a href="?inventory&horse">';}
	$item .= '<div id="item_'.$gi['horse'].'" title="'.$Travian->getItemData($btype, $type)['name'].'||'.$deadTitle.$Travian->getItemData($btype, $type)['title'].'" class="item item_'.$data['type'].' onHero'.$dis.'" style="position: relative; left: 0px; top: 0px; "><div class="amount">'.$data['num'].'</div></div>';
	if(!$dis){$item .= '</a>';}
	echo '<div id="horse" class="draggable">'.$item.'</div>';
}else{

}
if($gi['shoes']!=0){
    $data = $database->getItemData($gi['shoes']);
    $btype=$data['btype'];
    $type=$data['type'];
	$item = '';
	if(!$dis){$item = '<a href="?inventory&shoes">';}
    $item .= '<div id="item_'.$gi['shoes'].'" title="'.$Travian->getItemData($btype, $type)['name'].'||'.$deadTitle.$Travian->getItemData($btype, $type)['title'].'" class="item item_'.$data['type'].' onHero'.$dis.'" style="position: relative; left: 0px; top: 0px; "><div class="amount">'.$data['num'].'</div></div>';
	if(!$dis){$item .= '</a>';}
	echo '<div id="shoes" class="draggable">'.$item.'</div>';
}else{
    echo '<div id="shoes" class="draggable"></div>';
}

if($gi['bag']!=0){
	//$data = $database->getItemData($gi['bag']);
//	if($data['btype'] < 7 && $data['btype'] > 9){
//	$item = '<a href="?inventory&bag"><div id="item_'.$gi['bag'].'" class="item item_'.$data['type'].' onHero" style="position: relative; left: 0px; top: 0px; "><div class="amount">'.$data['num'].'</div></div></a>';
	//echo '<div id="bag" class="draggable">'.$item.'</div>';
	//}else{
	$data = $database->getItemData($gi['bag']);
	$item = '';
	if(!$dis){$item = '<a href="?inventory&bag">';}
	$item .= '<a href="?inventory&bag"><div id="item_'.$gi['bag'].'" class="item '.$gender.'_item_'.($data['btype']+105).' onHero" style="   text-shadow: -1px 0 0 rgba(0, 0, 0, .8), -1px -1px 0 rgba(0, 0, 0, .8), 0 -1px 0 rgba(0, 0, 0, .8);  "><div style="       position: absolute;
    top: 2px;
    left: 17px;
	font-size: 11px;
    z-index: 5;
    color: #f2f2f2;
    padding: 0 3px;
    border: 1px solid rgba(0, 0, 0, .25);
    background-color: rgba(67, 57, 41, .5);
    text-shadow: -1px 0 0 rgba(0, 0, 0, .8), -1px -1px 0 rgba(0, 0, 0, .8), 0 -1px 0 rgba(0, 0, 0, .8);  class=" count">'.$data['type'].'</div></div></a>';
	if(!$dis){$item .= '</a>';}
	echo '<div id="bag" class="draggable">'.$item.'</div>';
	//}
}else{
	echo '<div id="bag" class="draggable"></div>';
}
?>

			</div>
		</div>
	</div>

</div>


















<div class="inventoryPageWrapper  "><div class="currentHeroEquipment ">
<div class="equipmentSlots">






<button style="left: -290px;" class="textButtonV2 buttonFramed download rectangle withIcon green" type="button" onclick="openDialog()">
  <svg>
    <svg viewBox="0 0 16 16" class="outline">
      <path d="M14 11v3H2v-3H0v3c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2v-3h-2zm-1-4-1.4-1.4L9 8.2V0H7v8.2L4.4 5.6 3 7l5 5 5-5z"></path>
    </svg>
    <svg viewBox="0 0 16 16" class="icon">
      <path d="M14 11v3H2v-3H0v3c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2v-3h-2zm-1-4-1.4-1.4L9 8.2V0H7v8.2L4.4 5.6 3 7l5 5 5-5z"></path>
    </svg>
  </svg>
</button>



<?php

 include("dialogV2.php");

 ?>


































  <?php
  $gii=array();
  	

  foreach ($gi as $r=>$k){
	  
	  $data = $database->getItemData($gi[$r]);
	  $gii[$r]=$data['type'];
  }
  if($gi['helmet']!=0){
	  
	  ?>
	  
  <div class="heroItem  helmet      " data-placeid="-1" data-slot="helmet">

  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
  
  
  
  
  
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>

	
	
	
    <div class="item  male_item_<?php echo $gii['helmet'];?>"></div>
  </div>
  	<?php
	
  }else{
	  
?>

  <div class="heroItem empty helmet      " data-placeid="-1" data-slot="helmet">

  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
  
  
  
  
  
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>

	
	
	
    <div class="item  "></div>
  </div>
<?php
  }

  if($gi['body']!=0){
	  ?>
  <div class="heroItem  body      " data-placeid="-4" data-slot="body">
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
	

	
    <div class="item  male_item_<?php echo $gii['body'];?>"></div>
  </div>
    	<?php
	
  }else{
	  
?>

 <div class="heroItem empty body      " data-placeid="-4" data-slot="body">
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
	

	
    <div class="item "></div>
  </div>
<?php
  }

  if($gi['shoes']!=0){
	  ?>
  <div class="heroItem  shoes      " data-placeid="-5" data-slot="shoes">
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
    <div class="item  male_item_<?php echo $gii['shoes'];?>"></div>
  </div>
    	<?php
	
  }else{
	  
?>
  <div class="heroItem empty shoes      " data-placeid="-5" data-slot="shoes">
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
    <div class="item "></div>
  </div>

<?php
  }

  if($gi['leftHand']!=0){
	  ?>
  <div class="heroItem  leftHand      " data-placeid="-2" data-slot="leftHand">
  
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
	

    <div class="item  male_item_<?php echo $gii['leftHand'];?>"></div>
  </div>
    	<?php
	
  }else{
	  
?>
  <div class="heroItem empty leftHand      " data-placeid="-2" data-slot="leftHand">
  
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
	

    <div class="item "></div>
  </div>

<?php
  }

  if($gi['rightHand']!=0){
	  ?>
  <div class="heroItem  rightHand      " data-placeid="-3" data-slot="rightHand">
  
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
    <div class="item  male_item_<?php echo $gii['rightHand'];?>"></div>
  </div>
    	<?php
	
  }else{
	  
?>

 <div class="heroItem empty rightHand      " data-placeid="-3" data-slot="rightHand">
  
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
    <div class="item "></div>
  </div>
<?php
  }

  if($gi['horse']!=0){
	  ?>
  <div class="heroItem  horse      " data-placeid="-7" data-slot="horse">
  
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
	
	
	
    <div class="item male_item_<?php echo $gii['horse'];?> "></div>
  </div>
    	<?php
	
  }else{
	  
?>

  <div class="heroItem empty horse      " data-placeid="-7" data-slot="horse">
  
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	i
	
	
	
	
	
    <div class="item "></div>
  </div>
<?php
  }

  if($gi['bag']!=0){
	  ?>
  <div class="heroItem  bag      " data-placeid="-6" data-slot="bag">
  
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
	
	
    <div class="item  male_item "></div>
  </div>
    	<?php
	
  }else{
	  
?>
 <div class="heroItem empty bag      " data-placeid="-6" data-slot="bag">
  
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
	
	
	
    <div class="item "></div>
  </div>

<?php
  }

	  ?>
</div></div></div>



























<div id="hero_inventory">
<div class="inventoryWrapper">
<div class="inventoryFilters">

<a class="tradeItems lightColor" href="hero_auction.php"><svg viewBox="0 0 20 20">
    <defs>
      <linearGradient id="arrowColored_goldGradient" x1="26.81" y1="42.42" x2="26.81" y2="41.31" gradientTransform="matrix(0 16.23 13.53 0 -556.56 -425.35)" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#cba467"></stop>
        <stop offset="0.05" stop-color="#cba467"></stop>
        <stop offset="0.13" stop-color="#f3e2ae"></stop>
        <stop offset="0.32" stop-color="#efbf7b"></stop>
        <stop offset="0.48" stop-color="#aa8050"></stop>
        <stop offset="0.72" stop-color="#835e35"></stop>
        <stop offset="0.93" stop-color="#ad8a54"></stop>
        <stop offset="1" stop-color="#d7b672"></stop>
      </linearGradient>
      <linearGradient id="arrowColored_greenGradi
	  ent" x1="50.52" y1="58.77" x2="51.23" y2="59.18" gradientTransform="matrix(0 8.3 7.47 0 -433.41 -413.45)" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#bdff83"></stop>
        <stop offset="0.53" stop-color="#60a124"></stop>
        <stop offset="0.84" stop-color="#5c9722"></stop>
        <stop offset="1" stop-color="#496818"></stop>
      </linearGradient>
    </defs>
    <path class="goldBorder" d="M3 18V1.78L16.57 9.9Z" fill="url(#arrowColored_goldGradient)" stroke="#000000"></path>
    <path class="greenInner" d="M5 14.05v-8.3l7.51 4.15Z" fill="url(#arrowColored_greenGradient)" stroke="#000000"></path>
  </svg>رفتن به حراجی</a>
  <a href="hero_inventory.php?igroup=0" class="filterSlot all <?=(isset($_GET['igroup'])&&$_GET['igroup']==0)?'active':'';?>" data-key="all"><div><i></i></div></a>

  <a href="hero_inventory.php?igroup=1" class="filterSlot leftHand <?=(isset($_GET['igroup'])&&$_GET['igroup']==1)?'active':'';?>" data-key="leftHand"><div><i></i></div></a>
<a href="hero_inventory.php?igroup=2" class="filterSlot rightHand  <?=(isset($_GET['igroup'])&&$_GET['igroup']==2)?'active':'';?>" data-key="rightHand"><div><i></i></div></a>
<a href="hero_inventory.php?igroup=3" class="filterSlot helmet  <?=(isset($_GET['igroup'])&&$_GET['igroup']==3)?'active':'';?>" data-key="helmet"><div><i></i></div></a>
<a href="hero_inventory.php?igroup=4" class="filterSlot body  <?=(isset($_GET['igroup'])&&$_GET['igroup']==4)?'active':'';?>" data-key="body"><div><i></i></div></a>
<a href="hero_inventory.php?igroup=5" class="filterSlot shoes  <?=(isset($_GET['igroup'])&&$_GET['igroup']==5)?'active':'';?>" data-key="shoes"><div><i></i></div></a>
<a href="hero_inventory.php?igroup=6" class="filterSlot bag  <?=(isset($_GET['igroup'])&&$_GET['igroup']==6)?'active':'';?>" data-key="bag"><div><i></i></div></a>

</div>

        <div class="boxes-contents">
		

    <div id="itemsToSale"><?php
$prefix = "heroitems";
$ii=isset($_GET['igroup'])?$_GET['igroup']:0;
switch($ii){
  case 0:
    default:
    $mmm = " btype != 0 ";
      $sql = $database->query("SELECT * FROM heroitems WHERE (proc = 0 AND ( ".$mmm ." )) AND uid = '".$session->uid."'");

      break;
      case 1:
        $mmm = " btype='3'  ";
        $sql = $database->query("SELECT * FROM heroitems WHERE (proc = 0 AND ( ".$mmm ." )) AND uid = '".$session->uid."'");
  
        break;
        case 2:
          $mmm = " btype='4'  ";
          $sql = $database->query("SELECT * FROM heroitems WHERE (proc = 0 AND ( ".$mmm ." )) AND uid = '".$session->uid."'");
    
          break;
          case 3:
            $mmm = " btype='1'  ";
            $sql = $database->query("SELECT * FROM heroitems WHERE (proc = 0 AND ( ".$mmm ." )) AND uid = '".$session->uid."'");
      
            break;
            case 4:
              $mmm = " btype='2'  ";
              $sql = $database->query("SELECT * FROM heroitems WHERE (proc = 0 AND ( ".$mmm ." )) AND uid = '".$session->uid."'");
        
              break;
              case 5:
                $mmm = " btype='5'  ";
                $sql = $database->query("SELECT * FROM heroitems WHERE (proc = 0 AND ( ".$mmm ." )) AND uid = '".$session->uid."'");
          
                break;
                case 6:
                  $mmm = " btype='8' or btype='7' or btype='9' or btype='10' or btype='11' or btype='14' or btype='15' ";
                  $sql = $database->query("SELECT * FROM heroitems WHERE (proc = 0 AND ( ".$mmm ." )) AND uid = '".$session->uid."'");
            
                  break;
}
$outputList = '';

$inv = 1;
foreach($sql as $row){
$id = $row["id"];$uid = $row["uid"];$btype = $row["btype"];$type = $row["type"];$num = $row["num"];$proc = $row["proc"];
include_once "application/views/Auction/alt.php";
	if($btype<=10 or $btype==11 or $btype==13){
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
	}else{
		$dis = '';
		$deadTitle = '';
	}
	if($btype >= 7 && $btype <= 9){

	$amount = '('.$num.') ';
	$outputList .= "<div id=\"inventory_".$inv."\" class=\"heroItem consumable inventory   draggable empty  \">";
	$outputList .= "<div id=\"item_".$id."\" title=\"".$amount."".$Travian->getItemData($btype, $type)['name']."||".$deadTitle.($num*SPEED/10).$Travian->getItemData($btype, $type)['title']."\" class=\"item ".$gender."_item_".($btype+105)."".$dis."\" style=\"position:relative;left:0;top:0;\">";
	$outputList .= "<div class=\"count\">".$num."</div>";
	$outputList .= "</div>";
	$outputList .= '</div>';
	}else{
	if($num==1){$amount = '';}else{$amount = '('.$num.') ';}
	//if($type != 0){
		$outputList .= "<div id=\"inventory_".$inv."\" class=\"heroItem consumable inventory   draggable empty \">";
		$outputList .= "<div id=\"item_".$id."\" title=\"".$amount."".($Travian->getItemData($btype, $type)['name'] ? $Travian->getItemData($btype, $type)['name'] : constant('ITEM'.$type).'')."||".$deadTitle."".($Travian->getItemData($btype, $type)['title'] ? $Travian->getItemData($btype, $type)['title'] : constant('IEFF'.$type).'')."\" class=\"item ".$gender."_item_".($Travian->getItemData($btype, $type)['item'])."".$dis."\" ' style=\"position:relative;left:0;top:0;\">";
		$outputList .= "<div class=\"count\">".$num."</div>";
		$outputList .= "</div>";
		$outputList .= '</div>';
	//}
	$inv++;	
	}
}
	echo $outputList;
	
if($inv <= 12){
	for($i=$inv;$i<=((12+$inv)-$inv);$i++){
		echo '<div id="inventory_'.$i.'" class="heroItem consumable inventory draggable    "></div>';
	}
}else{
	echo '<div id="inventory_'.$i.'" class="heroItem consumable inventory draggable  "></div>';
}
?>
<div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<div class="clear"></div>
<div id="placeHolder"></div>
<?php
$igroup=isset($_GET['igroup'])?'?igroup='.$_GET['igroup']:'';
?>
<form id="HeroInventory" method="post" action="hero_inventory.php<?=$igroup;?>">
	<input type="hidden" name="a" value="inventory">
	<input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
	<input type="hidden" name="amount" value="<?php echo $_POST['amount']; ?>">
    <input type="hidden" name="btype" value="<?php echo $_POST['btype']; ?>">
    <input type="hidden" name="type" value="<?php echo $_POST['type']; ?>">
</form>
                                <?php $ucp= round($database->getVSumField($session->uid, 'cp'));
                                $ucpn=round($database->getUserField($session->uid, 'cp',0));?>
<script type="text/javascript">
	Travian.Game.Hero.Inventory = new (new Class(
	{

		
		b15: '<table id="heroInventoryDataDialog" class="transparent" cellspacing="0" cellpadding="0"><tbody><tr class="rowBeforeUse"><th><?=heroh2?></th><td><?php echo $ucpn; ?></td></tr><tr class="rowUseValue"><th><?=heroh3?></th><td class="displayUseValue"><?php echo $ucp/2; ?></td></tr><tr class="rowAfterUse"><th><?=heroh4?></th><td class="displayAfterUse"><?php echo ($ucpn+$ucp/2); ?></td></tr></tbody></table>',
		
		alreadyOpen: false,
        textSingle: "<?=heroh1?>" ,
		textMulti: '&lt;div style=\"padding:15px;\" &gt; تعداد مورد استفاده: &lt;input class=\"text\" id=\"amount\" type=\"text\" value=\"\" /&gt; &lt;/div &gt'.unescapeHtml(),
		initialize: function() {
			var $this = this;
			
<?php
//$sql2 = $database->query("SELECT * FROM heroitems WHERE proc = 0 AND uid = '".$session->uid."'");

foreach($sql as $row2){
$id = $row2["id"];$num = $row2["num"];$btype = $row2["btype"];$type = $row2["type"];
	if($btype<=10 or $btype==11 or $btype==13){
		if($heroF->getHeroStatus()==100){
			if($num==1){
?>
$('item_<?php echo $id; ?>').addEvent('click', function() { $this.showItem(<?php echo $id; ?>,<?php echo $num; ?>,<?php echo $btype; ?>,<?php echo $type; ?>);});															   
<?php		}else{ ?>
$('item_<?php echo $id; ?>').addEvent('click', function() { $this.sellItem(<?php echo $id; ?>,<?php echo $num; ?>,<?php echo $btype; ?>,<?php echo $type; ?>);});
<?php
			}
		}
	}else{
?>
$('item_<?php echo $id; ?>').addEvent('click', function() { $this.sellItem(<?php echo $id; ?>,<?php echo $num; ?>,<?php echo $btype; ?>,<?php echo $type; ?>);});
<?php
	}
}
?>
							},
		showItem: function (id, amount, btype, type){
			var $this = this;
			$('HeroInventory').id.value = id;
			$('HeroInventory').amount.value = amount;
			$('HeroInventory').btype.value = btype;
			$('HeroInventory').type.value = type;
			$('HeroInventory').submit();
		},
		sellItem: function (id, amount, btype, type){
			var html = '';
			var $this = this;
			if (this.alreadyOpen){
				return;
			}
			this.alreadyOpen = true;
			$('HeroInventory').id.value = id;
			$('HeroInventory').amount.value = amount;
			$('HeroInventory').btype.value = btype;
			$('HeroInventory').type.value = type;
			if (amount == 1){
				if(btype == 10){
					html = $this.textSingle;
					html += this.b10;
				}else
				if(btype == 15){
					html = $this.textSingle;
					html += this.b15;
				}else{
					html = $this.textSingle;
				}
			}else{
				if(btype == 15){
                    cp_now = '<?=round($ucpn)?>';
					cp = '<?php echo round($ucp/2); ?>';
					cp_b = (cp*amount);
					cp_total = <?php echo round($ucpn); ?>+cp_b;
					html = $this.textMulti;
					html += '<table id="heroInventoryDataDialog" class="transparent" cellspacing="0" cellpadding="0"><tbody><tr class="rowBeforeUse"><th>Очкоin Культуры:</th><td>'+cp_now+'</td></tr><tr class="rowUseValue"><th>Бонус:</th><td class="displayUseValue">'+cp_b+'</td></tr><tr class="rowAfterUse"><th>Очкоin Культуры Станет: </th><td class="displayAfterUse">'+cp_total+'</td></tr></tbody></table>';
					
				}else{
					html = $this.textMulti;
				}
			}
			html.dialog({
				relativeTo:			$('content'),
				elementFoucs:		'inventoryAmount',
				buttonTextOk:		'Ok',
				buttonTextCancel:	'Cancel',
				title:				"<?=heroh0?>" ,
				onOpen: function(dialog, contentElement){
					if ($('amount')){
						$('amount').value = amount;
						$('amount').addEvent('change', function(){
							$('HeroInventory').amount.value = $('amount').value;
						});
					}
				},
				onOkay: function(dialog, contentElement){
					if ($('amount')){
						$('HeroInventory').amount.value = $('amount').value;
					}
					$('HeroInventory').submit();
				},
				onClose: function(dialog, contentElement){
					$this.alreadyOpen = false;
				}
			});
		}
	}));
</script>

<div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>
<div>
<div>
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




