<?php
include("application/Account.php");

if($_POST){
    if($_POST['Random'] == "random"){
        $_POST['HeroFace'] = rand(0,4);
        $_POST['color'] = rand(0,4);
        $_POST['HeroHair'] = rand(0,5);
        $_POST['HeroEar'] = rand(0,4);
        $_POST['HeroEyebrow'] = rand(0,4);
        $_POST['HeroEye'] = rand(0,4);
        $_POST['HeroNose'] = rand(0,4);
        $_POST['HeroMouth'] = rand(0,3);
        $_POST['HeroBeard'] = rand(0,5);
    }
//print_r($_POST);die;
    $database->editTableField('heroface', 'gender', $_POST['HeroGender'], 'uid', $session->uid);
    $database->editEbaloHero($session->uid,$_POST['HeroBeard'],$_POST['HeroEar'],$_POST['HeroEye'],$_POST['HeroEyebrow'],$_POST['HeroFace'],$_POST['HeroHair'],$_POST['HeroMouth'],$_POST['HeroNose'],$_POST['color']);
    header("Location: hero.php");
}
?>


<?php include("application/views/html.php");?>
<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE hero <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> buildingsV3">
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
	<div id="contentOuterContainer" class=" contentPage">
                                            <div class="contentTitle ">
                            	<a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="/dorf1.php">
        <svg viewBox="0 0 20 20"><g class="outline">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g><g class="icon">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g></svg>
    </a>
<a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://support.travian.com/support/solutions/articles/7000064021-hero-item-overview-and-mounts" target="_blank">&nbsp;</a>
                        <a id="contextualHelpButton" class="contentTitleButton buttonFramed green withIcon rectangle">&nbsp;</a></div>
                        <div class="contentContainer">
                            <div id="content" class="heroV2 heroV2Inventory">

 
	
    
            
      

              <h1 class="titleInHeader"><?=$session->username?> - <?php echo U0; ?> <?=LVL."  ". $session->heroD['level']?></h1>

                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">
		
		
		
		
		
		
		

<div class="content favor favorKeyplayer active <?= ($_GET['id'] == 1 || $_GET['id'] == 31 || $_GET['id'] == 32 || $_GET['id'] == 7) ? 'favorActive active' : 'tabItem normal ' ?>">
											
          <a id="buttonW1" title="" class="tabItem active " href="hero_inventory.php">قهرمات   </a>
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
  
                                                                    <div class="content favor favorKeyvillage ">
                    <a id="buttonF3" title="" class="tabItem  normal" href="heroskill.php">
                      ویژگی ها               </a>
                </div>
				
                                                                    <div class="content favor favorKeyhero ">
                    <a id="buttonM4" title="" class="tabItem  normal" href="hero.php">
                 ظاهر قهرمان              </a>
                </div>

                                            </div>
        <button type="button" class="scrollTo" disabled="disabled"></button>
    </div>
						
						
						
                          
                      
    </div>

        <div class="navigationSpacer"></div>

    <script type="text/javascript">
        jQuery(function() {
            Travian.Game.TabScrollNavigation();
        });
    </script>
<script>
	function messagesFormSelectAll(checkbox) {
		jQuery('#messagesForm').find('input[type=checkbox]').each(function (index, element) {
			element.checked = checkbox.checked;
		}, checkbox);
	}
</script>


        <div id="content" class="heroV2 heroV2Appearance">



<div id="heroV2" class="contentV2">
				



<?php
$herodetail = $session->heroD;
$gender=$herodetail['gender'];
if($herodetail['color']==0){
	$color = "black";
}
if($herodetail['color']==1){
	$color = "brown";
}
if($herodetail['color']==2){
	$color = "darkbrown";
}
if($herodetail['color']==3){
	$color = "yellow";
}
if($herodetail['color']==4){
	$color = "red";
}
if($herodetail['gender']==0) {$gstr='male';} else {$gstr='female';}
$gender=$herodetail['gender'];
$geteye = $herodetail['eye'];if ($gender==0) $geteye%=5;
$geteyebrow = $herodetail['eyebrow'];if ($gender==0) $geteyebrow%=5;
$getnose = $herodetail['nose'];if ($gender==0) $getnose%=5;
$getear = $herodetail['ear'];if ($gender==0) $getear%=5;
$getmouth = $herodetail['mouth'];if ($gender==0) $getmouth%=4;
$getbeard = $herodetail['beard']; if ($gender==1) $getbeard=5;
$gethair = $herodetail['hair'];if ($gender==0) $gethair%=5;
$getface = $herodetail['face'];if ($gender==0) $getface%=5;
?>

         		

















	<div id="heroEditor" class="genderSwitch <?php echo $gstr; ?>">


    </div>
    <div class="categories">
	
        <div class="category jaw " type="hidden" name="uid" value="<?php echo $session->uid; ?>" /><i></i></div>
        <div class="category eyes"  src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/eye/eye<?php echo $geteye; ?>.png" alt="" /><i></i></div>
        <div class="category brows"  src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/eyebrow/eyebrow<?php echo $geteyebrow.(($gender==0)?'-'.$color:''); ?>.png" alt="" /><i></i></div>
        <div class="category nose"  src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/nose/nose<?php echo $getnose; ?>.png" alt="" /><i></i></div>
        <div class="category mouth" type="hidden" name="HeroMouth" value="<?php echo $herodetail['mouth']; ?>" /><i></i></div>
        <div class="category ears"  src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/ear/ear<?php echo $getear; ?>.png" alt="" /><i></i></div>
      <?php if(!($gender==0 && $gethair==5)){ ?>
    <div class="category hair"  src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/hair/hair<?php echo $gethair.'-'.$color; ?>.png" alt="" /><i></i></div>
	<?php } ?>
<?php if($getbeard!=5){ ?>
        <div class="category beard "  src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/beard/beard<?php echo $getbeard.'-'.$color; ?>.png" alt="" /><i></i></div>
         <?php } ?> 
		<div class="category scar" type="hidden" name="HeroGender" value="<?php echo $herodetail['gender']; ?>" />><i></i></div>
        <div class="category tattoo" type="hidden" name="Random" value="" /><i></i></div>
    </div>


		<div class="hero_head head">
    <div class="image">

    <div class="selectionWrapper">
        <div class="page page0 active">
            <div class="optionsWrapper">
                <div class="option option6" data-option="6">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
                <div class="option option4" data-option="4">
                    <div class="optionPreview  jaw"><canvas width="875" height="1574"></canvas></div>
                </div>

                <div class="option option3" data-option="3">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                </div>
	
                <div class="option option5 selected" data-option="5">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                    <div class="selectedIndicator"></div>
                </div>
                <div class="option option1" data-option="1">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                </div>
                <div class="option option2" data-option="2">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                </div>
                <div class="option option8" data-option="8">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                    <div >
                    </div>
                </div>
                <div class="option option9" data-option="9">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                    <div >
                    </div>
                </div>
                <div class="option option10" data-option="10">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                    <div>
                    </div>
                </div>
                <div class="option option11" data-option="11">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                    <div>
                    </div>
                </div>
                <div class="option option12" data-option="12">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                    <div >

                    </div>
                </div>
                <div class="option option7" data-option="7">
                    <div class="optionPreview female jaw"><canvas width="875" height="1574"></canvas></div>
                    <div>


                    </div>
                </div>
            </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

        <div class="previewWrapper">
            <div class="preview female zoomedIn">     <img style="width:254px; height:330px; position:absolute;left:0px;top:0px;" src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/face0.png" alt="" />
			
			        <img style="width:254px; height:330px; position:absolute;left:0px;top:0px;" src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/eye/eye<?php echo $geteye; ?>.png" alt="" />
        <img style="width:254px; height:330px; position:absolute;left:0px;top:0px;" src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/eyebrow/eyebrow<?php echo $geteyebrow.(($gender==0)?'-'.$color:''); ?>.png" alt="" />
        <?php if(!($gender==0 && $gethair==5)){ ?><img style="width:254px; height:330px; position:absolute;left:0px;top:0px;" src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/hair/hair<?php echo $gethair.'-'.$color; ?>.png" alt="" /><?php } ?>
        <img style="width:254px; height:330px; position:absolute;left:0px;top:0px;" src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/face/face<?php echo $getface; ?>.png" alt="" />
        <img style="width:254px; height:330px; position:absolute;left:0px;top:0px;" src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/mouth/mouth<?php echo $getmouth; ?>.png" alt="" />
        <img style="width:254px; height:330px; position:absolute;left:0px;top:0px;" src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/nose/nose<?php echo $getnose; ?>.png" alt="" />
        <img style="width:254px; height:330px; position:absolute;left:0px;top:0px;" src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/ear/ear<?php echo $getear; ?>.png" alt="" />
        <?php if($getbeard!=5){ ?><img style="width:254px; height:330px; position:absolute;left:0px;top:0px;" src="<?=GP_LOCATION2;?>hero/<?php echo $gstr; ?>/head/254x330/beard/beard<?php echo $getbeard.'-'.$color; ?>.png" alt="" /><?php } ?>
			
			
			
			
			</div>
			
            <div class="actions">
			
			
			
			
			
			
			
			
		
			
			
			
			
			
			
			
			


			
	

				   <div id="genderButtons">
				   
				 </div>
				    <form id="HeroEditorForm" method="post" action="hero.php">
					
                <button class="textButtonV2 buttonFramed toggleGender female rectangle withIcon green" <?php if($herodetail['gender']==0){ echo "class=\"icon iconActive disabled\"";} else { echo "class='icon' onclick=\"$('HeroEditorForm').HeroGender.value='0'; $('HeroEditorForm').submit(); return false;\" ";}?> id="heroEditorActivateMale" value="heroEditorActivateMale" type="button">

                    <svg>
                        <svg viewBox="0 0 21 21" class="outline" >
                            <path
                                class="female"
                                d="M21 .8v4.4a.8.8 0 0 1-.8.8h-.4a.8.8 0 0 1-.8-.8V3.42l-4 4a5.51 5.51 0 0 1-5.71 8.5 5.37 5.37 0 0 1-1.22-.43A6.46 6.46 0 0 0 10.2 14a3.36 3.36 0 0 0 1-.05A3.5 3.5 0 0 0 9.76 7.1a3.53 3.53 0 0 0-2.1 1.35 3.38 3.38 0 0 0-.59 1.36 3.41 3.41 0 0 0 0 1.49 2.44 2.44 0 0 1-1.07.58 2.62 2.62 0 0 1-.79 0l-.06-.21A5.52 5.52 0 0 1 9.37 5.1c.23 0 .46-.08.69-.1h.44a5.51 5.51 0 0 1 3.11 1l4-4H15.8a.8.8 0 0 1-.8-.8V.8a.8.8 0 0 1 .8-.8h4.4a.8.8 0 0 1 .8.8Z"
                            ></path>
                            <path
                                class="male"
                                d="M10.82 8.11a2.62 2.62 0 0 0-.79 0 2.46 2.46 0 0 0-1.13.59v.11a3.51 3.51 0 0 1-2.77 4.12 3.41 3.41 0 0 1-1.35 0 2.79 2.79 0 0 1-.39-.1A3.5 3.5 0 0 1 5.8 6a6.55 6.55 0 0 1 2.09-1.45A5.58 5.58 0 0 0 5.41 4 5.57 5.57 0 0 0 0 9.22a5.49 5.49 0 0 0 4.5 5.68V17H3.3a.8.8 0 0 0-.8.8v.4a.8.8 0 0 0 .8.8h1.2v1.2a.8.8 0 0 0 .8.8h.4a.8.8 0 0 0 .8-.8V19h1.2a.8.8 0 0 0 .8-.8v-.4a.8.8 0 0 0-.8-.8H6.5v-2.1A5.53 5.53 0 0 0 11 9.5a5.41 5.41 0 0 0-.18-1.39Z"
                            ></path>
                        </svg>
                        <svg viewBox="0 0 21 21" class="icon">
                            <path
                                class="female"
                                d="M21 .8v4.4a.8.8 0 0 1-.8.8h-.4a.8.8 0 0 1-.8-.8V3.42l-4 4a5.51 5.51 0 0 1-5.71 8.5 5.37 5.37 0 0 1-1.22-.43A6.46 6.46 0 0 0 10.2 14a3.36 3.36 0 0 0 1-.05A3.5 3.5 0 0 0 9.76 7.1a3.53 3.53 0 0 0-2.1 1.35 3.38 3.38 0 0 0-.59 1.36 3.41 3.41 0 0 0 0 1.49 2.44 2.44 0 0 1-1.07.58 2.62 2.62 0 0 1-.79 0l-.06-.21A5.52 5.52 0 0 1 9.37 5.1c.23 0 .46-.08.69-.1h.44a5.51 5.51 0 0 1 3.11 1l4-4H15.8a.8.8 0 0 1-.8-.8V.8a.8.8 0 0 1 .8-.8h4.4a.8.8 0 0 1 .8.8Z"
                            ></path>
                            <path
                                class="male"
                                d="M10.82 8.11a2.62 2.62 0 0 0-.79 0 2.46 2.46 0 0 0-1.13.59v.11a3.51 3.51 0 0 1-2.77 4.12 3.41 3.41 0 0 1-1.35 0 2.79 2.79 0 0 1-.39-.1A3.5 3.5 0 0 1 5.8 6a6.55 6.55 0 0 1 2.09-1.45A5.58 5.58 0 0 0 5.41 4 5.57 5.57 0 0 0 0 9.22a5.49 5.49 0 0 0 4.5 5.68V17H3.3a.8.8 0 0 0-.8.8v.4a.8.8 0 0 0 .8.8h1.2v1.2a.8.8 0 0 0 .8.8h.4a.8.8 0 0 0 .8-.8V19h1.2a.8.8 0 0 0 .8-.8v-.4a.8.8 0 0 0-.8-.8H6.5v-2.1A5.53 5.53 0 0 0 11 9.5a5.41 5.41 0 0 0-.18-1.39Z"
                            ></path>
                        </svg>
                    </svg>
                </button>
				   
			
				
				
				
				
				
                <button class="textButtonV2 buttonFramed shuffleConfig rectangle withIcon green" type="button" value="" name="" id="btn_login" style="float:right;" class="green " onclick="$('HeroEditorForm').Random.value='random'; $('HeroEditorForm').submit(); return false;">
                    <svg>
                        <svg viewBox="0 0 20 19" class="outline">
                            <path
                                d="M11.83 8.35A2.23 2.23 0 0 0 10.05 7l-4.6-.6a2.24 2.24 0 0 0-2 .8L.51 10.74A2.2 2.2 0 0 0 .16 13l1.59 4a2.25 2.25 0 0 0 1.79 1.39l4.59.61a2.24 2.24 0 0 0 2-.79l2.94-3.58a2.23 2.23 0 0 0 .35-2.23ZM5 8.67c.6-.28 1.22-.23 1.37.1s-.21.83-.82 1.11-1.21.23-1.36-.11S4.4 9 5 8.67Zm-3.37 5.21c-.31-.52-.3-1.1 0-1.28s.82.09 1.13.62.29 1.11 0 1.29-.82-.1-1.13-.63ZM4 17.54c-.32.18-.82-.1-1.13-.63s-.29-1.1 0-1.29.82.1 1.12.63.3 1.1 0 1.29Zm1-3.15c-.31-.53-.3-1.11 0-1.29s.82.1 1.12.63.3 1.1 0 1.28-.82-.09-1.12-.62Zm2.32 3.48c-.31.18-.82-.09-1.12-.62s-.3-1.11 0-1.29.82.09 1.13.62.29 1.11 0 1.29Zm1.75.59a.45.45 0 0 1-.58-.25l-2.1-5.3a.47.47 0 0 1-.17 0l-5.36-.7a.44.44 0 0 1-.39-.48.44.44 0 0 1 .45-.39H1l5.36.66.15.06 3.55-4.33a.44.44 0 0 1 .62-.06.43.43 0 0 1 .06.62l-3.5 4.31 2.09 5.29a.43.43 0 0 1-.24.57Zm1.29-1.91c-.36.07-.74-.41-.86-1.06s.08-1.23.44-1.3.75.42.87 1.07-.08 1.22-.44 1.29Zm.69-5.19c-.36.07-.75-.41-.86-1.06s.08-1.23.44-1.3.75.41.86 1.07-.08 1.22-.44 1.29Zm8.45-6.95L16.57.82a2.19 2.19 0 0 0-2-.8L10 .59A2.28 2.28 0 0 0 8.18 2L6.82 5.38l4 .52h.06A2.21 2.21 0 0 1 12.47 7l.3-.74a.47.47 0 0 1-.13-.11L9.22 1.93a.44.44 0 0 1 .64-.6l3.42 4.19a.55.55 0 0 1 .08.15L19 5a.44.44 0 0 1 .11.87l-5.51.7-.6 1.55 1.27 3.2a2.34 2.34 0 0 1 .15 1l2.02-.32a2.23 2.23 0 0 0 1.79-1.38l1.61-4a2.22 2.22 0 0 0-.34-2.21ZM9.3 3c.36.09.54.64.39 1.23s-.55 1-.9.92-.53-.63-.39-1.23.6-1.01.9-.92Zm3.91-.89c-.12.35-.72.45-1.34.24s-1-.67-.92-1 .72-.46 1.34-.24 1 .66.92 1Zm4.94 2.24c-.12.35-.72.46-1.34.24s-1-.66-.92-1 .72-.45 1.34-.24 1 .67.92 1Zm-2 4.8c-.42.51-1 .72-1.27.49s-.17-.84.26-1.35 1-.72 1.28-.49.16.84-.27 1.35Z"
                            ></path>
                        </svg>
                        <svg viewBox="0 0 20 19" class="icon">
                            <path
                                d="M11.83 8.35A2.23 2.23 0 0 0 10.05 7l-4.6-.6a2.24 2.24 0 0 0-2 .8L.51 10.74A2.2 2.2 0 0 0 .16 13l1.59 4a2.25 2.25 0 0 0 1.79 1.39l4.59.61a2.24 2.24 0 0 0 2-.79l2.94-3.58a2.23 2.23 0 0 0 .35-2.23ZM5 8.67c.6-.28 1.22-.23 1.37.1s-.21.83-.82 1.11-1.21.23-1.36-.11S4.4 9 5 8.67Zm-3.37 5.21c-.31-.52-.3-1.1 0-1.28s.82.09 1.13.62.29 1.11 0 1.29-.82-.1-1.13-.63ZM4 17.54c-.32.18-.82-.1-1.13-.63s-.29-1.1 0-1.29.82.1 1.12.63.3 1.1 0 1.29Zm1-3.15c-.31-.53-.3-1.11 0-1.29s.82.1 1.12.63.3 1.1 0 1.28-.82-.09-1.12-.62Zm2.32 3.48c-.31.18-.82-.09-1.12-.62s-.3-1.11 0-1.29.82.09 1.13.62.29 1.11 0 1.29Zm1.75.59a.45.45 0 0 1-.58-.25l-2.1-5.3a.47.47 0 0 1-.17 0l-5.36-.7a.44.44 0 0 1-.39-.48.44.44 0 0 1 .45-.39H1l5.36.66.15.06 3.55-4.33a.44.44 0 0 1 .62-.06.43.43 0 0 1 .06.62l-3.5 4.31 2.09 5.29a.43.43 0 0 1-.24.57Zm1.29-1.91c-.36.07-.74-.41-.86-1.06s.08-1.23.44-1.3.75.42.87 1.07-.08 1.22-.44 1.29Zm.69-5.19c-.36.07-.75-.41-.86-1.06s.08-1.23.44-1.3.75.41.86 1.07-.08 1.22-.44 1.29Zm8.45-6.95L16.57.82a2.19 2.19 0 0 0-2-.8L10 .59A2.28 2.28 0 0 0 8.18 2L6.82 5.38l4 .52h.06A2.21 2.21 0 0 1 12.47 7l.3-.74a.47.47 0 0 1-.13-.11L9.22 1.93a.44.44 0 0 1 .64-.6l3.42 4.19a.55.55 0 0 1 .08.15L19 5a.44.44 0 0 1 .11.87l-5.51.7-.6 1.55 1.27 3.2a2.34 2.34 0 0 1 .15 1l2.02-.32a2.23 2.23 0 0 0 1.79-1.38l1.61-4a2.22 2.22 0 0 0-.34-2.21ZM9.3 3c.36.09.54.64.39 1.23s-.55 1-.9.92-.53-.63-.39-1.23.6-1.01.9-.92Zm3.91-.89c-.12.35-.72.45-1.34.24s-1-.67-.92-1 .72-.46 1.34-.24 1 .66.92 1Zm4.94 2.24c-.12.35-.72.46-1.34.24s-1-.66-.92-1 .72-.45 1.34-.24 1 .67.92 1Zm-2 4.8c-.42.51-1 .72-1.27.49s-.17-.84.26-1.35 1-.72 1.28-.49.16.84-.27 1.35Z"
                            ></path>
                        </svg>
                    </svg>
                </button>
				
				
				
				
				
				
	
<button class="textButtonV2 buttonFramed toggleGender male rectangle withIcon green" <?php if($herodetail['gender']==1){ echo "class=\"icon iconActive disabled\"";} else { echo "class='icon' onclick=\"$('HeroEditorForm').HeroGender.value='1'; $('HeroEditorForm').submit(); return false;\" ";}?> id="heroEditorActivateFemale" value="heroEditorActivateFemale" type="button">
    <svg>
        <svg viewBox="0 0 21 21" class="outline">
            <path
                class="female"
                d="M21 .8v4.4a.8.8 0 0 1-.8.8h-.4a.8.8 0 0 1-.8-.8V3.42l-4 4a5.51 5.51 0 0 1-5.71 8.5 5.37 5.37 0 0 1-1.22-.43A6.46 6.46 0 0 0 10.2 14a3.36 3.36 0 0 0 1-.05A3.5 3.5 0 0 0 9.76 7.1a3.53 3.53 0 0 0-2.1 1.35 3.38 3.38 0 0 0-.59 1.36 3.41 3.41 0 0 0 0 1.49 2.44 2.44 0 0 1-1.07.58 2.62 2.62 0 0 1-.79 0l-.06-.21A5.52 5.52 0 0 1 9.37 5.1c.23 0 .46-.08.69-.1h.44a5.51 5.51 0 0 1 3.11 1l4-4H15.8a.8.8 0 0 1-.8-.8V.8a.8.8 0 0 1 .8-.8h4.4a.8.8 0 0 1 .8.8Z"
            ></path>
            <path
                class="male"
                d="M10.82 8.11a2.62 2.62 0 0 0-.79 0 2.46 2.46 0 0 0-1.13.59v.11a3.51 3.51 0 0 1-2.77 4.12 3.41 3.41 0 0 1-1.35 0 2.79 2.79 0 0 1-.39-.1A3.5 3.5 0 0 1 5.8 6a6.55 6.55 0 0 1 2.09-1.45A5.58 5.58 0 0 0 5.41 4 5.57 5.57 0 0 0 0 9.22a5.49 5.49 0 0 0 4.5 5.68V17H3.3a.8.8 0 0 0-.8.8v.4a.8.8 0 0 0 .8.8h1.2v1.2a.8.8 0 0 0 .8.8h.4a.8.8 0 0 0 .8-.8V19h1.2a.8.8 0 0 0 .8-.8v-.4a.8.8 0 0 0-.8-.8H6.5v-2.1A5.53 5.53 0 0 0 11 9.5a5.41 5.41 0 0 0-.18-1.39Z"
            ></path>
        </svg>
        <svg viewBox="0 0 21 21" class="icon">
            <path
                class="female"
                d="M21 .8v4.4a.8.8 0 0 1-.8.8h-.4a.8.8 0 0 1-.8-.8V3.42l-4 4a5.51 5.51 0 0 1-5.71 8.5 5.37 5.37 0 0 1-1.22-.43A6.46 6.46 0 0 0 10.2 14a3.36 3.36 0 0 0 1-.05A3.5 3.5 0 0 0 9.76 7.1a3.53 3.53 0 0 0-2.1 1.35 3.38 3.38 0 0 0-.59 1.36 3.41 3.41 0 0 0 0 1.49 2.44 2.44 0 0 1-1.07.58 2.62 2.62 0 0 1-.79 0l-.06-.21A5.52 5.52 0 0 1 9.37 5.1c.23 0 .46-.08.69-.1h.44a5.51 5.51 0 0 1 3.11 1l4-4H15.8a.8.8 0 0 1-.8-.8V.8a.8.8 0 0 1 .8-.8h4.4a.8.8 0 0 1 .8.8Z"
            ></path>
            <path
                class="male"
                d="M10.82 8.11a2.62 2.62 0 0 0-.79 0 2.46 2.46 0 0 0-1.13.59v.11a3.51 3.51 0 0 1-2.77 4.12 3.41 3.41 0 0 1-1.35 0 2.79 2.79 0 0 1-.39-.1A3.5 3.5 0 0 1 5.8 6a6.55 6.55 0 0 1 2.09-1.45A5.58 5.58 0 0 0 5.41 4 5.57 5.57 0 0 0 0 9.22a5.49 5.49 0 0 0 4.5 5.68V17H3.3a.8.8 0 0 0-.8.8v.4a.8.8 0 0 0 .8.8h1.2v1.2a.8.8 0 0 0 .8.8h.4a.8.8 0 0 0 .8-.8V19h1.2a.8.8 0 0 0 .8-.8v-.4a.8.8 0 0 0-.8-.8H6.5v-2.1A5.53 5.53 0 0 0 11 9.5a5.41 5.41 0 0 0-.18-1.39Z"
            ></path>
        </svg>
    </svg>
</button>
	
				
				
			
				
				
				
				
				
				
				
				
				
            </div>
        </div>
		
        <div class="colorsWrapper">
            <div class="colorPalette">لون البشرة</div>
            <div class="colors skinColor">
                <div class="color skin1 selected" data-color="skin1">
                    <div class="colorPreview skin1"></div>
                    <div class="selectedIndicator"></div>
                </div>
                <div class="color skin2" data-color="skin2"><div class="colorPreview skin2"></div></div>
                <div class="color skin3" data-color="skin3"><div class="colorPreview skin3"></div></div>
                <div class="color skin4" data-color="skin4"><div class="colorPreview skin4"></div></div>
            </div>
        </div>
    </div>
    <div class="buttonWrapper">
        <button class="textButtonV2 buttonFramed buyOptions  rectangle withText gold" type="button"><div>لم يتم تحديد خيار شراء</div></button>
        <button class="textButtonV2 buttonFramed resetChanges  rectangle withIcon green" type="button" value="" name="" id="btn_login" style="float:right;" class="green " onclick="$('HeroEditorForm').Random.value='random'; $('HeroEditorForm').submit(); return false;">
            <svg>
                <svg viewBox="0 0 16.02 16" class="outline"><path d="M2.35 2.35A8 8 0 1 1 .27 10h2.08A6 6 0 1 0 8 2a5.93 5.93 0 0 0-4.22 1.78L7 7H0V0Z" data-name="Path 78"></path></svg>
                <svg viewBox="0 0 16.02 16" class="icon"><path d="M2.35 2.35A8 8 0 1 1 .27 10h2.08A6 6 0 1 0 8 2a5.93 5.93 0 0 0-4.22 1.78L7 7H0V0Z" data-name="Path 78"></path></svg>
            </svg>
        </button>
        <button class="textButtonV2 buttonFramed saveChanges  rectangle withText green" type="submit" value="save" name="save" id="btn_login" style="float:left;" class="green "><div><?php echo JR_SAVE; ?></div></button>
    </div>
</div>



        <input type="hidden" name="uid" value="<?php echo $session->uid; ?>" />
        <input type="hidden" name="HeroFace" value="<?php echo $herodetail['face']; ?>" />
        <input type="hidden" name="color" value="<?php echo $herodetail['color']; ?>" />
        <input type="hidden" name="HeroHair" value="<?php echo $herodetail['hair']; ?>" />
        <input type="hidden" name="HeroEar" value="<?php echo $herodetail['ear']; ?>" />
        <input type="hidden" name="HeroEyebrow" value="<?php echo $herodetail['eyebrow']; ?>" />
        <input type="hidden" name="HeroEye" value="<?php echo $herodetail['eye']; ?>" />
        <input type="hidden" name="HeroNose" value="<?php echo $herodetail['nose']; ?>" />
        <input type="hidden" name="HeroMouth" value="<?php echo $herodetail['mouth']; ?>" />
        <input type="hidden" name="HeroBeard" value="<?php echo $herodetail['beard']; ?>" />
        <input type="hidden" name="HeroGender" value="<?php echo $herodetail['gender']; ?>" />
        <input type="hidden" name="Random" value="" />
    </form>
</div>

</div>
<div class="clear"></div>
</div>
<script type="text/javascript">
    new Travian.Game.Hero.Editor(
        {
            element: 'heroEditor',
            command: 'heroEditor',
           // urlHeroImage: 'hero_image.php?uid=<?php //echo $session->uid; ?>&amp;size=sideinfo&amp;{time}',
            attributes: {"headProfile":<?php echo $herodetail['face']; ?>,"hairColor":<?php echo $herodetail['color']; ?>,"hairStyle":<?php echo $herodetail['hair']; ?>,"ears":<?php echo $herodetail['ear']; ?>,"eyebrow":<?php echo $herodetail['eyebrow']; ?>,"eyes":<?php echo $herodetail['eye']; ?>,"nose":<?php echo $herodetail['nose']; ?>,"mouth":<?php echo $herodetail['mouth']; ?>,"beard":<?php echo $herodetail['beard']; ?>,"gender":"<?php echo $gstr; ?>"},
            elementHeroImage: 'heroImage'
        });
</script>

<script>
// جستجوی تمامی دیوهای با کلاس "option" و اضافه کردن آنها به جدول
const options = document.querySelectorAll('.option');
const table = document.createElement('table');

options.forEach((option) => {
    const row = document.createElement('tr');

    // جستجوی دیوی درونی با کلاس "optionPreview" و جدا کردن آن
    const optionPreview = option.querySelector('.optionPreview');
    optionPreview.remove();

    // افزودن دیوهای قبلی به جدول
    const columns = [...option.children];
    columns.forEach((column) => {
        const cell = document.createElement('td');
        cell.appendChild(column);
        row.appendChild(cell);
    });
    table.appendChild(row);
});

document.body.appendChild(table);

</script>

<div class="clear">&nbsp;</div>
</div>
<div class="clear"></div>


</div>
</div>


</div></div>


</div></div>


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