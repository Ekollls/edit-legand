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


<div id="sidebarBeforeContent" class="sidebar beforeContent">
     

                                            <div id="servertime" class="stime">
	Server time:&nbsp;
	<span format="24h" class="timer" counting="up" value="<?=time();?>"><?= date('H:i:s', time());?></span></div>

<script type="text/javascript">
    Travian.Game.timezoneOffsetToUTC = -3600;
</script>
                    
                    <div id="sidebarBoxAlliance" class="sidebarBox   ">


            <?php include("application/views/sidebarleft/1.php");?>
  <?php include("application/views/sidebarleft/2.php");?>

  <?php include("application/views/sidebarleft/3.php");?>





                    </div>
				</div>