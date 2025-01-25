

<?php
$baracks = "disabled";
$workshop = "disabled";
$stable = "disabled";
$market_ = "disabled";
$builds = $village->resarray;
for($i=19;$i<=40;$i++){
	if($builds['f'.$i.'t']==19){
		$baracks = "";
		$bid = $i;
	}
	if($builds['f'.$i.'t']==21){
		$workshop = "";
		$wid = $i;
	}
	if($builds['f'.$i.'t']==20){
		$stable = "";
		$sid = $i;
	}
	if($builds['f'.$i.'t']==17){
		$market_ = "";
		$mid = $i;
        $lvlm=$builds['f'.$i];
	}
}
?>

<div id="sidebarAfterContent" class="sidebar afterContent">
                    <div class="sidebarBoxWrapper">
                        <div id="sidebarBoxActiveVillage" class="sidebarBox   ">
	<div class="header ">
            <?php 
			// var_dump($session->lang);die();
			 include("application/views/rightslidbar/1.php");
			?>
  <?php include("application/views/rightslidbar/2.php");
  ?>

  <?php include("application/views/rightslidbar/3.php");?>



