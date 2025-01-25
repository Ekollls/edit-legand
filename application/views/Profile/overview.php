<?php
$uid=$user['id'];

$displayarray = $user;
$ranking->procRankArray();
$varmedal = $database->getProfileMedal($uid);

$profiel="".$displayarray['desc1']."".md5('skJkev3')."".$displayarray['desc2']."";
require("medal.php");
$profiel=explode("".md5("skJkev3")."", $profiel);

$varray = $database->getProfileVillages($uid);

$totalpop = 0;
foreach($varray as $vil) {
	$totalpop += $vil['pop'];
}
?>




<div >


          </div>
		  
          <div class="playerDetails heroV2 ">

            <table>
              <tbody>
                <tr>
				
                  <th colspan="3"  style="width: 250px;  font-size: 16px;" class="header">اطلاعاتم</th>
                </tr>
                <tr>
                  <th> <h5 style="  font-size: 13px;"><?php echo OVERVIEW4; ?>:</th>
                  <td colspan="2"><h5 style="  font-size: 13px;"><?php echo $ranking->getUserRank($displayarray['id']); ?></td>
				  
                </tr>
          
                  <th><h5 style="  font-size: 13px;"><?php echo OVERVIEW5; ?>:</th>
                  <td colspan="2"><a class="lightColor" ><h5 style="  font-size: 14px;"><?=constant('TRIBE'.$displayarray['tribe'])?></a></td>
                </tr>
                <tr>
                  <th><h5><?php echo OVERVIEW6; ?>:</th>
                  <td colspan="2"><h5 style="  font-size: 13px;"><?php if($displayarray['alliance'] == 0) {
                echo "-";
                }
                else {
                $displayalliance = $database->RemoveXSS($database->getAllianceName($displayarray['alliance']));
                echo "<a href=\"allianz.php?aid=".$displayarray['alliance']."\">".$database->RemoveXSS($displayalliance)."</a>";
                } ?></td>
                </tr>
                <tr>
                  <th><h5 style="  font-size: 13px;"><?php echo OVERVIEW7; ?>:</th>
                  <td colspan="2"><?php echo count($varray);?></td>
                </tr>
                <tr>
                  <th style="  font-size: 13px;">روز های حضور در بازی:</th>
                  <td colspan="2"><?=ROUND((time()-$displayarray['regtime'])/86400 );?></td>
                </tr>
                <tr>
				
                  <th style="  font-size: 13px;"><?php echo OVERVIEW13; ?></th>
                  <td style="  font-size: 13px;" colspan="2" class="value"><?php echo $database->RemoveXSS($generator->generateCountryName($displayarray['location']));?></td>
                </tr>
                <tr class="multiLanguage">
                  <td colspan="0"><td class="pop flags"><img src="img/x.gif" alt="<?php echo $displayarray['location'];?>" class="flag_<?php echo $displayarray['location'];?>"></td>
                </tr>
                <tr>
				
				</style>
				<?php
        //var_dump();
			//Date of Birth
            if(isset($displayarray['birthday']) && $displayarray['birthday'] != 0) {
			$age = date('Y') - substr($displayarray['birthday'],0,4);
				if ((date('m') - substr($displayarray['birthday'],5,2)) < 0){$age --;}
				elseif ((date('m') - substr($displayarray['birthday'],5,2)) == 0){
					if(date('d') < substr($displayarray['birthday'],8,2)){$age --;}
				}
            ?><tr><th><?php echo OVERVIEW9; ?></th><td><?php echo $age; ?></td></tr><?php
            }
			//Gender
            if(isset($displayarray['gender']) && $displayarray['gender'] != 0) {
            if($displayarray['gender']== 1){ $gender = OVERVIEW10; }else{ $gender=OVERVIEW11;}
            ?><tr><th><?php echo OVERVIEW12; ?></th><td><?php echo $gender; ?></td></tr><?php
            }
			//Location
            if($displayarray['location'] != "") {
            ?>
           <?php }
            ?>
                        <tr>
                <th><?php echo $lang['profile'][2]; ?></th>
                <td><?php echo $ranking->getUserRank($displayarray['id']); ?> <span class="greyInfo">(<?php echo $totalpop; ?> <?php echo $lang['profile'][3]; ?>)</span></td>
            </tr>
            <tr>
                <th><?php echo $lang['profile'][4]; ?></th>
                <td><?php echo $ranking->getUserRankIn($displayarray['id'],1); ?> <span class="greyInfo">(<?php echo $user['apall']; ?>  <?php echo $lang['profile'][5]; ?>)</span></td>
            </tr>
            <tr>
                <th><?php echo $lang['profile'][6]; ?></th>
                <td><?php echo $ranking->getUserRankIn($displayarray['id'],2); ?> <span class="greyInfo">(<?php echo $user['dpall']; ?>  <?php echo $lang['profile'][5]; ?>)</span></td>
            </tr>
            <tr>
                <th><?php echo $lang['profile'][7]; ?></th>
                <td><?php echo $database->getHeroData($displayarray['id'])['level']; ?> <span class="greyInfo">(<?php echo $database->getHeroData($displayarray['id'])['experience']; ?>  <?php echo $lang['profile'][8]; ?>)</span></td>
            </tr>

            <tr>
                <td colspan="2" class="empty"></td>
            </tr>
            
            <tr>

			
			
		
			

			   <?php
				
                if($uid == $session->uid) {
                    if($session->sit){
                        echo "<td colspan=\"2\"> <span style=\"top:80px\" class=\"textButtonV2 buttonFramed editProfile rectangle withText green disabled\">".OVERVIEW14."</span></td>";
                    }else{
                        echo "<td colspan=\"1\"> <a style=\"top:80px\" class=\" textButtonV2 buttonFramed editProfile rectangle withText green\" href=\"spieler.php?s=1\">OVERVIEW14</a></td>";


                    }
                } else {
					?>
					 <tr>
              
                <td>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		
                </tr>
  <div class="actionButtons">
    <button class="textButtonV2 buttonFramed notes rectangle withIcon green" type="button" onclick="openDialog()">
      <svg>
        <svg viewBox="0 0 20 18.54" class="outline">
          <path d="M3.31 4.7h8.5l-1.3 1.37h-7.2zm0 4.85h3.91l1.3-1.37H3.31zm0 3.47h3.45l.06-1.37H3.31zM17.16 1.29l-.94 1-1.43 1.5L13 5.66l-.49.51-2 2.11-1.26 1.37-.81.86-.06 1.24-.07 1.37v.51l3-.44 3.25-3.43.16-.17L20 4zm-.59 12l-.19-3.44L15 11.26a.61.61 0 0 0-.16.45l.07 1a.57.57 0 0 1-.15.43l-3.26 3.58a.57.57 0 0 1-.43.19H2.54a.58.58 0 0 1-.54-.58V2.53a.58.58 0 0 1 .58-.59h11a.59.59 0 0 0 .42-.17L15.7 0H.58A.58.58 0 0 0 0 .58V18a.58.58 0 0 0 .58.58H11.8a.57.57 0 0 0 .43-.19l4.19-4.66a.53.53 0 0 0 .15-.46z"></path>
        </svg>
        <svg viewBox="0 0 20 18.54" class="icon">
          <path d="M3.31 4.7h8.5l-1.3 1.37h-7.2zm0 4.85h3.91l1.3-1.37H3.31zm0 3.47h3.45l.06-1.37H3.31zM17.16 1.29l-.94 1-1.43 1.5L13 5.66l-.49.51-2 2.11-1.26 1.37-.81.86-.06 1.24-.07 1.37v.51l3-.44 3.25-3.43.16-.17L20 4zm-.59 12l-.19-3.44L15 11.26a.61.61 0 0 0-.16.45l.07 1a.57.57 0 0 1-.15.43l-3.26 3.58a.57.57 0 0 1-.43.19H2.54a.58.58 0 0 1-.54-.58V2.53a.58.58 0 0 1 .58-.59h11a.59.59 0 0 0 .42-.17L15.7 0H.58A.58.58 0 0 0 0 .58V18a.58.58 0 0 0 .58.58H11.8a.57.57 0 0 0 .43-.19l4.19-4.66a.53.53 0 0 0 .15-.46z"></path>
        </svg>
      </svg>
    </button>
	
	<?php include_once "reportplayer.php"; ?>
	
    
	
	
    <a class="textButtonV2 buttonFramed message rectangle withIcon green"  href="nachrichten.php?t=1&id=<?=$_GET['uid'];?>">
        <svg>
            <svg viewBox="0 0 128.01 89.4" class="outline">
                <path
                    d="M6.2 5.3a9.82 9.82 0 0 1-2.1-4.08L5.22 0h103.31a9 9 0 0 1 .89 1.15 9.78 9.78 0 0 1-2.12 4.15L68.13 49.82a14.77 14.77 0 0 1-20.78 2 15.43 15.43 0 0 1-2-2zM120 52h-10.57V41.52a8 8 0 0 0-8-8h-3a8 8 0 0 0-8 8V52H80a8 8 0 0 0-8 8v3a8 8 0 0 0 8 8h10.53v10.4a8 8 0 0 0 8 8h3a8 8 0 0 0 8-8V70.91H120a8 8 0 0 0 8-8V60a8 8 0 0 0-8-8zm-6.72-17.6V16L103 27.68a13.68 13.68 0 0 1 10.29 6.72zM84.82 76.67h-5A13.69 13.69 0 0 1 66.44 66a23.57 23.57 0 0 1-26.2-4.69l-27.71 6.21 20-14.82L0 15.7v54c0 5.23 3.75 9.49 8.35 9.49h76.47z"
                ></path>
            </svg>
            <svg viewBox="0 0 128.01 89.4" class="icon">
                <path
                    d="M6.2 5.3a9.82 9.82 0 0 1-2.1-4.08L5.22 0h103.31a9 9 0 0 1 .89 1.15 9.78 9.78 0 0 1-2.12 4.15L68.13 49.82a14.77 14.77 0 0 1-20.78 2 15.43 15.43 0 0 1-2-2zM120 52h-10.57V41.52a8 8 0 0 0-8-8h-3a8 8 0 0 0-8 8V52H80a8 8 0 0 0-8 8v3a8 8 0 0 0 8 8h10.53v10.4a8 8 0 0 0 8 8h3a8 8 0 0 0 8-8V70.91H120a8 8 0 0 0 8-8V60a8 8 0 0 0-8-8zm-6.72-17.6V16L103 27.68a13.68 13.68 0 0 1 10.29 6.72zM84.82 76.67h-5A13.69 13.69 0 0 1 66.44 66a23.57 23.57 0 0 1-26.2-4.69l-27.71 6.21 20-14.82L0 15.7v54c0 5.23 3.75 9.49 8.35 9.49h76.47z"
                ></path>
            </svg>
        </svg>
    </a>
	
	
	
	
	
    <button class="textButtonV2 buttonFramed rectangle withIcon toggle grey" type="button">
        <svg>
            <svg viewBox="0 0 93.75 104.17" class="outline">
                <path
                    d="M93.75 104.17H0C0 86.5 6.73 70.74 17.27 60.39a37.74 37.74 0 0 0 59.2 0C87 70.74 93.75 86.5 93.75 104.17zM74.61 13.51a33.5 33.5 0 0 0-7.51-7.19A35.07 35.07 0 0 0 46.88 0c-19 0-34.34 14.73-34.34 32.89a31.85 31.85 0 0 0 6.59 19.39 33.76 33.76 0 0 0 7.52 7.19 35.17 35.17 0 0 0 20.23 6.32c19 0 34.33-14.72 34.33-32.9a31.89 31.89 0 0 0-6.6-19.38zM23.16 32.89c0-12.53 10.64-22.71 23.72-22.71a24.28 24.28 0 0 1 12.57 3.47L26.79 44.94a21.78 21.78 0 0 1-3.63-12.05zm23.72 22.73a24.35 24.35 0 0 1-12.58-3.47L67 20.84a21.78 21.78 0 0 1 3.63 12.05C70.59 45.42 60 55.62 46.88 55.62z"
                ></path>
            </svg>
            <svg viewBox="0 0 93.75 104.17" class="icon">
                <path
                    d="M93.75 104.17H0C0 86.5 6.73 70.74 17.27 60.39a37.74 37.74 0 0 0 59.2 0C87 70.74 93.75 86.5 93.75 104.17zM74.61 13.51a33.5 33.5 0 0 0-7.51-7.19A35.07 35.07 0 0 0 46.88 0c-19 0-34.34 14.73-34.34 32.89a31.85 31.85 0 0 0 6.59 19.39 33.76 33.76 0 0 0 7.52 7.19 35.17 35.17 0 0 0 20.23 6.32c19 0 34.33-14.72 34.33-32.9a31.89 31.89 0 0 0-6.6-19.38zM23.16 32.89c0-12.53 10.64-22.71 23.72-22.71a24.28 24.28 0 0 1 12.57 3.47L26.79 44.94a21.78 21.78 0 0 1-3.63-12.05zm23.72 22.73a24.35 24.35 0 0 1-12.58-3.47L67 20.84a21.78 21.78 0 0 1 3.63 12.05C70.59 45.42 60 55.62 46.88 55.62z"
                ></path>
            </svg>
        </svg>
    </button>
	
	
	
	
	
	
    <button class="textButtonV2 buttonFramed accusation rectangle withIcon green" type="button">
        <svg>
            <svg viewBox="0 0 121.68 98.77" class="outline">
                <path
                    d="M119.54 76.74L72.11 8.7C66.74 1 54.39 1 49.07 8.75l-47 68c-5.7 8.28.82 19 11.55 19H108c10.78.09 17.3-10.75 11.54-19.01zm-67-45.2a6.93 6.93 0 0 1 6.93-6.94h2.78a6.94 6.94 0 0 1 6.94 6.94v26.12a6.94 6.94 0 0 1-6.94 6.94h-2.8a6.93 6.93 0 0 1-6.93-6.94zm8.32 55.89A8.41 8.41 0 1 1 69.25 79a8.41 8.41 0 0 1-8.41 8.43z"
                ></path>
            </svg>
            <svg viewBox="0 0 121.68 98.77" class="icon">
                <path
                    d="M119.54 76.74L72.11 8.7C66.74 1 54.39 1 49.07 8.75l-47 68c-5.7 8.28.82 19 11.55 19H108c10.78.09 17.3-10.75 11.54-19.01zm-67-45.2a6.93 6.93 0 0 1 6.93-6.94h2.78a6.94 6.94 0 0 1 6.94 6.94v26.12a6.94 6.94 0 0 1-6.94 6.94h-2.8a6.93 6.93 0 0 1-6.93-6.94zm8.32 55.89A8.41 8.41 0 1 1 69.25 79a8.41 8.41 0 0 1-8.41 8.43z"
                ></path>
            </svg>
        </svg>
    </button>
	
	
	
	
	
    <button class="textButtonV2 buttonFramed invite rectangle withIcon green" type="button">
        <svg>
            <svg viewBox="0 0 20 14.5" class="outline">
                <path
                    d="M14.12 4.16a1.69 1.69 0 0 1-1.69 1.18A3.08 3.08 0 0 1 10.87 5c-.16-.07-1.1-.65-1.1-.65a2.88 2.88 0 0 1-.83.76l-.62.38a3.82 3.82 0 0 0-.15.67l-4.34 3a.49.49 0 0 0-.21.41.47.47 0 0 0 .09.28.48.48 0 0 0 .55.19l3.9-2.69a4 4 0 0 0 .15.7l-3.63 2.53-.09.06a.47.47 0 0 0-.12.32.49.49 0 0 0 .09.28.51.51 0 0 0 .7.12l.1-.06a.77.77 0 0 1 .19-.17l3.17-2.19V9a6.61 6.61 0 0 0 .37.55l-3.19 2.2a.49.49 0 0 0 0 .58.5.5 0 0 0 .69.13l3-2.05.44.71-1.91 1.36a.49.49 0 0 0-.22.41.51.51 0 0 0 .09.28.51.51 0 0 0 .7.12l1.8-1.29c.25.42.42.74.33.69L8.89 14a1.12 1.12 0 0 1-.67.22 1.19 1.19 0 0 1-1-.51A1.21 1.21 0 0 1 7 13l-.11.07a1.12 1.12 0 0 1-.67.22A1.18 1.18 0 0 1 5 12.14a1.19 1.19 0 0 1-1-.51 1.14 1.14 0 0 1-.2-.87 1.17 1.17 0 0 1-.46-2.13l1.91-1.32a3 3 0 0 1-1.25.3c-.35 0-.76 0-1-.18a4.54 4.54 0 0 1-.62-1.19l2.18-4.86a4.32 4.32 0 0 0 1.93.44C7.77 1.82 8.2.64 9.23.61a1.1 1.1 0 0 1 .69.39 7.59 7.59 0 0 0 1.91 1.5 5.82 5.82 0 0 0 1.17.17 1.32 1.32 0 0 1 1.12 1.49ZM16.91 0l-1.08.51a.49.49 0 0 0-.25.66L18 6.62a.51.51 0 0 0 .66.26l1.08-.47a.51.51 0 0 0 .26-.66L17.57.3a.51.51 0 0 0-.66-.3ZM0 5.61 2.32.53A.51.51 0 0 1 3 .28l.82.37a.5.5 0 0 1 .25.66L1.78 6.39a.49.49 0 0 1-.66.25L.3 6.27a.5.5 0 0 1-.3-.66Zm15.11-4.5.36.84-3.09.22-1.06-.9ZM19.47 9h-2.92V6.23H14.1V9h-2.91v2.44h2.91v3h2.45v-3h2.92Z"
                ></path>
            </svg>
            <svg viewBox="0 0 20 14.5" class="icon">
                <path
                    d="M14.12 4.16a1.69 1.69 0 0 1-1.69 1.18A3.08 3.08 0 0 1 10.87 5c-.16-.07-1.1-.65-1.1-.65a2.88 2.88 0 0 1-.83.76l-.62.38a3.82 3.82 0 0 0-.15.67l-4.34 3a.49.49 0 0 0-.21.41.47.47 0 0 0 .09.28.48.48 0 0 0 .55.19l3.9-2.69a4 4 0 0 0 .15.7l-3.63 2.53-.09.06a.47.47 0 0 0-.12.32.49.49 0 0 0 .09.28.51.51 0 0 0 .7.12l.1-.06a.77.77 0 0 1 .19-.17l3.17-2.19V9a6.61 6.61 0 0 0 .37.55l-3.19 2.2a.49.49 0 0 0 0 .58.5.5 0 0 0 .69.13l3-2.05.44.71-1.91 1.36a.49.49 0 0 0-.22.41.51.51 0 0 0 .09.28.51.51 0 0 0 .7.12l1.8-1.29c.25.42.42.74.33.69L8.89 14a1.12 1.12 0 0 1-.67.22 1.19 1.19 0 0 1-1-.51A1.21 1.21 0 0 1 7 13l-.11.07a1.12 1.12 0 0 1-.67.22A1.18 1.18 0 0 1 5 12.14a1.19 1.19 0 0 1-1-.51 1.14 1.14 0 0 1-.2-.87 1.17 1.17 0 0 1-.46-2.13l1.91-1.32a3 3 0 0 1-1.25.3c-.35 0-.76 0-1-.18a4.54 4.54 0 0 1-.62-1.19l2.18-4.86a4.32 4.32 0 0 0 1.93.44C7.77 1.82 8.2.64 9.23.61a1.1 1.1 0 0 1 .69.39 7.59 7.59 0 0 0 1.91 1.5 5.82 5.82 0 0 0 1.17.17 1.32 1.32 0 0 1 1.12 1.49ZM16.91 0l-1.08.51a.49.49 0 0 0-.25.66L18 6.62a.51.51 0 0 0 .66.26l1.08-.47a.51.51 0 0 0 .26-.66L17.57.3a.51.51 0 0 0-.66-.3ZM0 5.61 2.32.53A.51.51 0 0 1 3 .28l.82.37a.5.5 0 0 1 .25.66L1.78 6.39a.49.49 0 0 1-.66.25L.3 6.27a.5.5 0 0 1-.3-.66Zm15.11-4.5.36.84-3.09.22-1.06-.9ZM19.47 9h-2.92V6.23H14.1V9h-2.91v2.44h2.91v3h2.45v-3h2.92Z"
                ></path>
            </svg>
        </svg>
    </button>
</div>

					<?php
                    if($database->queryFetch('SELECT COUNT(*) AS num FROM `ignore` WHERE `uid` = '.$session->uid.' AND `uignored` = '.$uid.'')['num'] == 0){
                        echo "<td colspan=\"2\" id=\"player_message-ignore-buttons-block\"> <a class=\"message messageStatus messageStatusUnread\" href=\"nachrichten.php?t=1&id=".$_GET['uid']."\">".sendmsg."</a>";
                        echo '<br><br>';
                        echo '<a href id="ignore-player-button" data-player-ignored="false" data-uid="'.$uid.'">'.Ignored02.'.</a>';    
                        echo '</td>';
                    }else{
                        ?>
                        <td colspan="2" id="player_message-ignore-buttons-block"><span class="notice"><?php echo Ignored03; ?></span><br><a href="" id="ignore-player-button" data-player-ignored="true" data-uid="<?php echo $uid; ?>">Stop ignoring this player.</a></td>
                        <?php
                    }
                }
                ?>

				
            </tr>
            
            </table>

              </tbody>

			
			
			<div   class="hero female horse item103">
		<?php

if ($_GET['uid'] != 2) {
    // Get the image path from the database
    $imagePath = $database->heroBody($uid);

    // Read the image file content
    $imageData = file_get_contents($imagePath);

    // Convert the image data to base64
    $base64Image = base64_encode($imageData);

    // Get the mime type of the image

    // Output the <img> tag with inline base64-encoded image
    echo '<img class="heroBodyImage" style="width:60%;height: auto; left: 70px; top: 55px; image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges; filter: contrast(1.2);" src="data:' . $imageMimeType . ';base64,' . $base64Image . '" alt="hero">';
}



?>

              <div class="equipmentSlots">
			  
			  
			  
			  
			  

  <?php
  $gii=array();
  $gi = $database->getHeroInventory($_GET['uid']);

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

 /* if($gi['bag']!=0){
	  ?>
  <div class="heroItem  bag      " data-placeid="-6" data-slot="bag">
  
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
      <path class="top" d="M31 4l2-4h-4l2 4z"></path>
      <path class="bottom" d="M29 62h4l-2-4-2 4z"></path>
      <path class="from" d="M0 33l4-2-4-2v4z"></path>
      <path class="to" d="M58 31l4 2v-4l-4 2z"></path>
    </svg>
	
	
	
	
	
    <div class="item  male_item_<?php echo $gii['bag'];?> "></div>
  </div>
    	<?php
	
  }else{
	  
?>


<?php
  }*/

	  ?>
</div></div></div>
		  
		  
		  
		  
		  
		  
            <div class="clear"></div>
          

      


     
	
	
	
			  
          <div class="playerDescription">
            <div class="description1"><?php echo nl2br($profiel[1]); ?></div>
            <div class="description2"><?php echo nl2br($profiel[0]); ?></div>
          </div>
          <?php
       $host = $_SERVER['HTTP_HOST'];

       $hostParts = explode('.', $host);
       $baseDomain = implode('.', array_slice($hostParts, -2));
       $baseDomain="central.".$baseDomain;
       //var_dump(array_slice($hostParts, -2));die();
$data1=file_get_contents("https://".$baseDomain."/home/fetcher/?user=".$displayarray['email']."&hashcodetru=".HASHASHIAN);
$sql1 = $database->queryFetch("SELECT pointtable FROM users WHERE id = $session->uid ");
//$sql1=mysqli_fetch_assoc($sql);
//var_dump("https://".$baseDomain."/home/fetcher/?user=".$displayarray['email']."&hashcodetru=".HASHASHIAN);
//die();
$key=explode("NULL",$data1);
//var_dump($data1);die();
$data=json_decode($data1,true);
// var_dump($data1);
if($sql1["pointtable"]==1&&empty($key[1]) && !empty($data1)){
    
  
//  echo $data["rank"]; 
   ?>
<h4 class="round">جدول افتخارات</h4>

<div style="width: 100%;">
    <div style="width: 90%; margin: auto; text-align: center;">
        <table style="width: 100%; border-collapse: collapse; margin: auto;">
            <tr>
                <td style="text-align: center;">
                    <div style="display: flex; text-align: center;">
                        <img title="رتبه کاربر در بین پلیرهای کلیه سرورها"
                             src="https://<?php echo $baseDomain; ?>/retry/ranker.php?type=default&amp;num=<?php echo $data['rank']; ?>">
                    </div>
                </td>
                <td style="text-align: center;">
                    <div style="display: flex; text-align: center;">
                        <img title="تعداد ۱۰۰ کردن واندر توسط بازیکن"
                             src="https://<?php echo $baseDomain; ?>/retry/ranker.php?type=winner&amp;num=<?php echo $data['total_winner']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <div style="display: flex; text-align: center;">
                        <img title="تعداد مدال های برترین مهاجم سرور"
                             src="https://<?php echo $baseDomain; ?>/retry/ranker.php?type=attacker&amp;num=<?php echo $data['total_bestattacker']; ?>">
                    </div>
                </td>
                <td style="text-align: center;">
                    <div style="display: flex; text-align: center;">
                        <img title="تعداد مدال های برترین مدافع سرور"
                             src="https://<?php echo $baseDomain; ?>/retry/ranker.php?type=defender&amp;num=<?php echo $data['total_bestdefender']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    <div style="display: flex; text-align: center;">
                        <img title="تعداد مدال بابت بزرگترین امپراطوری سرور"
                             src="https://<?php echo $baseDomain; ?>/retry/ranker.php?type=greatempire&amp;num=<?php echo $data['total_greatempire']; ?>">
                    </div>
                </td>
                <td style="text-align: center;">
                    <div style="display: flex; text-align: center;">
                        <img title="تعداد مدال بابت واندر دوم سرور"
                             src="https://<?php echo $baseDomain; ?>/retry/ranker.php?type=2ndwonder&amp;num=<?php echo $data['total_2ndwonder']; ?>">
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <div style="text-align: center;">
            <a target="_blank" href="https://<?php echo $baseDomain; ?>/?user=<?php echo $data['uid']; ?>">
                مشاهده پروفایل کاربر در باشگاه کاربران
            </a>
        </div>
    </div>
</div>




<div class="clear"></div>
<?php
}
?>
          <table class="villages borderGap">
            <thead>
              <tr>
			  
       <th class="name"><?php echo OVERVIEW17; ?></th>
        <th><?=FINDER12?></th>
	
<th class="inhabitants"><i class="population_medium"title="<?php echo OVERVIEW18; ?>"></i></th>

        <th class="coords">Crods</th>
        <th class="buttons"><?php echo OVERVIEW19; ?></th>
    </tr>
    </thead><tbody>
    <?php
    $name = 0;
    foreach($varray as $vil) {        
        $oasis=$database->getOasis($vil['wref']);

        $imgs="";
        foreach($oasis as $o){
        switch($o['type']) {
            case 1:
                $tt =  '<i class="r1"></i>';
                break;
            case 2:
                $tt =  '<i class="r1"></i>';
                break;
            case 3:
                $tt =  '<i class="r1"></i><i class="r4"></i>';
                break;
            case 4:
                $tt =  '<i class="r2"></i>';
                break;
            case 5:
                $tt =  '<i class="r2"></i>';
                break;
            case 6:
                $tt =  '<i class="r2"></i><i class="r4"></i>';
                break;
            case 7:
                $tt =  '<i class="r3"></i>';
                break;
            case 8:
                $tt =  '<i class="r3"></i>';
                break;
            case 9:
                $tt =  '<i class="r3"></i><i class="r4"></i>';
                break;
            case 10:
            case 11:
                $tt =  '<i class="r4"></i>';
                break;
            case 12:
                $tt =  '<i class="r4"></i>';
                break;
        }
            $imgs.=$tt;
        }
    $capital= OVERVIEW20;
    	echo "<tr><td class=\"name\"><a href='karte.php?d=".$vil['wref']."'>".$vil['name']."</a>";

        if($vil['capital'] == 1) {
        echo "<span class=\"mainVillage\"> (".$capital.")</span>";
        }
        echo "</td><td class=\"oases\">";
        echo $imgs;
        echo "</td>";
        echo "<td class=\"inhabitants\">".$vil['pop']."</td><td class=\"coords\"><a href=\"karte.php?x=".$vil['vx']."&y=".$vil['vy']."\"><span class=\"coordinates coordinatesWrapper coordinatesAligned coordinatesrtl\"><span class=\"coordinatesWrapper\">";
        echo "<span class=\"coordinates coordinatesWrapper coordinatesAligned coordinatesrtl\"><span class=\"coordinateX\">(".$vil['vx']."</span><span class=\"coordinatePipe\">|</span><span class=\"coordinateY\">".$vil['vy'].")</span><span class=\"clear\">‎</span>
        </td><td class=\"buttons\">";
        if($vil['owner']!=$session->uid){
           // echo "";
           ?>
<a href="/build.php?id=39&amp;t=2&amp;z=<?=$vil['wref'];?>&amp;c=4"><button type="button" class="icon"><img title="حمله" class="reportButton" style="margin-right: 3px;" src="<?=GP_LOCATION2;?>simulate_small.png"></button></a>
           <?php
        }
        $ddd=$database->query("SELECT * FROM `farmlist` where owner = '".$session->uid."' and wref = '".$village->wid."' ");
        //var_dump($ddd);die();
        ?>
        <a href="/build.php?z=<?=$vil['wref'];?>&amp;gid=17&amp;t=5"><button type="button" class="icon"><img title="ارسال منابع" src="/img/x.gif" style="margin-right: 3px;" class="reportButton iReport iReport11"></button></a>
        <?php
       if($session->goldclub && $vil['owner']!=$session->uid && count($ddd)>0){
        // echo "";
        ?>
        
<a href="/build.php?id=39&t=99&action=showSlot&lid=<?=$ddd[0]['id'];?>&vid=<?=$vil['wref'];?>&sort=distance&direction=asc"><button type="button" class="icon"><img title="افزودن به لیست فازم" class="reportButton" style="margin-right: 3px;" src="<?=GP_LOCATION2;?>raidList_small.png"></button></a>
        <?php
     }
     
        echo "</td> </tr>";
    $name++;
    }
    ?>
        </tbody></table>

    <script type="text/javascript">
    window.addEvent('domready', function () {
        "use strict";
        var renderPlayerMessageIgnoreButtons = function () {
            var targetPlayer = '<?php echo $uid; ?>';
            Travian.ajax({
                data: {
                    cmd: 'ignoreList',
                    method: 'render_player_message_ignore_buttons',
                    params: {
                        targetPlayer: targetPlayer
                    }
                },

                onSuccess: function (response) {
                    if (response.result !== undefined) {
                        $$('#player_message-ignore-buttons-block').set('html', response.result);
                    }
                }
            });
        };
        $$('#player_message-ignore-buttons-block').addEvent("click:relay('a#ignore-player-button')", function (event) {
            var targetPlayer = $(this).get('data-uid'),
                isIgnored = $(this).get('data-player-ignored') === "false" ? false : true,
                method = isIgnored ? 'stop_ignore_target_player' : 'ignore_target_player';

            event.stop();

            Travian.ajax({
                data: {
                    cmd: 'ignoreList',
                    method: method,
                    renderPlayerMessageIgnoreButtons: true,
                    params: {
                        targetPlayer: targetPlayer
                    }
                },

                onSuccess: function (response) {
                    if (response.result !== undefined) {
                        $$('#player_message-ignore-buttons-block').set('html', response.result);
                    }
                }
            });
        });

        renderPlayerMessageIgnoreButtons();
    });
</script>    
		  
		  
		 <?php /* 
	      <script type="application/javascript">
        jQuery(document).ready(function() {
            window.Travian.React.PlayerProfile.render(
                {
                    gql: 'query($uid: Int!, $subTabBarName: String!){player(id: $uid){id, name, tribeId, alliance{id, tag }, hero{gender, horse, imageHash, level, xp equipment{helmet{... inventoryItemFields}leftHand{... inventoryItemFields}rightHand{... inventoryItemFields}body{... inventoryItemFields}horse{... inventoryItemFields}shoes{... inventoryItemFields}} }, ranks{populationRank, population, attackerRank, attackerPoints, defenderRank, defenderPoints }, villages{id, name, tribeId, mapId, population, victoryPoints, victoryPointsPerDay, x, y, occupiedOases{ bonus{amount, resourceType{id, code}} }, region{id, name }, typeText, typeTitle }, profile{ownProfile, isNPC, allowEdit, interactionPossible, ignoredListIsFull, allowedToIgnore, isPlayerIgnoring, isPlayerInvited, isAllianceMember, gender, location, personalNote, additionalLanguages, showCountryFlag, countryFlag{language, languageName }, descriptionPlain{description1, description2 }, descriptionHtml{description1, description2 }, medalsGameworld{id, name, desc, code, type, rank }, medalsLifetime{id, name, desc, code, imgUrl, width }, daysPlaying }, }, ownPlayer{isSitter, isLocked, accusingOthersLeft, hasRightToSentInvitation, messagesBan{isActive, details, tooltip }, accessRights{readWriteMessages}villages{id, sortIndex}}, bootstrapData{serverSupportedFeatures{territory, multiLanguage, keepVidOnConquer, victoryPoints2021 }, languages{id, flag, langNative, langEnglish, countryNative, countryEnglish, direction}}, overviewPageFavouriteSubTabKey: favouriteTab(name: $subTabBarName){key}} fragment inventoryItemFields on InventoryItem{typeId name attributes{descriptionDetails effectDescription}tier: quality }',
                    viewData: {"data":{"player":{"id":10818,"name":"hamidthcr","tribeId":3,"alliance":{"id":285,"tag":"hamid"},"hero":{"gender":"female","imageHash":"29f874baa826f898eb3845b4ddba3b20960bfb0f.10818","level":0,"xp":24,"equipment":{"helmet":null,"leftHand":null,"rightHand":null,"body":null,"horse":{"typeId":103,"name":"\u062d\u0635\u0627\u0646 \u0631\u0643\u0648\u0628\u060c \u062e\u0641\u064a\u0641","attributes":[{"descriptionDetails":null,"effectDescription":"&#x202e;&plus;&#x202d;7&#x202c;&#x202c; \u0633\u0631\u0639\u0629 \u0644\u0644\u0628\u0637\u0644 \u0627\u0644\u0641\u0627\u0631\u0633"}],"tier":1},"shoes":null}},"ranks":{"populationRank":3995,"population":16,"attackerRank":1368,"attackerPoints":0,"defenderRank":2493,"defenderPoints":2},"villages":[{"id":27971,"name":"hamidthcr`s village","tribeId":3,"mapId":82135,"population":16,"victoryPoints":0,"victoryPointsPerDay":0,"x":130,"y":-4,"occupiedOases":[],"region":null,"typeText":"(\u0639\u0627\u0635\u0645\u0629)","typeTitle":""}],"profile":{"ownProfile":true,"isNPC":false,"allowEdit":true,"interactionPossible":true,"ignoredListIsFull":false,"allowedToIgnore":false,"isPlayerIgnoring":false,"isPlayerInvited":false,"isAllianceMember":true,"gender":"NotSpecified","location":"hjhbjhj","personalNote":"","additionalLanguages":["international"],"showCountryFlag":false,"countryFlag":{"language":"ar-AE","languageName":"\u0627\u0644\u0639\u0631\u0628\u064a\u0629"},"descriptionPlain":{"description1":"","description2":""},"descriptionHtml":{"description1":"","description2":""},"medalsGameworld":[],"medalsLifetime":[],"daysPlaying":11}},"ownPlayer":{"isSitter":false,"isLocked":false,"accusingOthersLeft":2,"hasRightToSentInvitation":true,"messagesBan":{"isActive":false,"details":"","tooltip":""},"accessRights":{"readWriteMessages":true},"villages":[{"id":27971,"sortIndex":1}]},"bootstrapData":{"serverSupportedFeatures":{"territory":false,"multiLanguage":true,"keepVidOnConquer":false,"victoryPoints2021":false},"languages":[{"id":"international","flag":"international","langNative":"English","langEnglish":"English","countryNative":"International","countryEnglish":"International","direction":"ltr"},{"id":"ar-AE","flag":"ae","langNative":"\u0627\u0644\u0639\u0631\u0628\u064a\u0629","langEnglish":"Arabic","countryNative":"\u0627\u0644\u0625\u0645\u0627\u0631\u0627\u062a \u0627\u0644\u0639\u0631\u0628\u064a\u0629","countryEnglish":"United Arab Emirates","direction":"rtl"},{"id":"es-AR","flag":"ar","langNative":"Espa\u00f1ol","langEnglish":"Spanish","countryNative":"Argentina","countryEnglish":"Argentina","direction":"ltr"},{"id":"en-AU","flag":"au","langNative":"English","langEnglish":"English","countryNative":"Australia","countryEnglish":"Australia","direction":"ltr"},{"id":"bs-BA","flag":"ba","langNative":"Bosanski","langEnglish":"Bosnian","countryNative":"Bosna i Hercegovina","countryEnglish":"Bosnia and Herzegovina","direction":"ltr"},{"id":"bg-BG","flag":"bg","langNative":"\u0411\u044a\u043b\u0433\u0430\u0440\u0441\u043a\u0438","langEnglish":"Bulgarian","countryNative":"\u0411\u044a\u043b\u0433\u0430\u0440\u0438\u044f","countryEnglish":"Bulgaria","direction":"ltr"},{"id":"pt-BR","flag":"br","langNative":"Portugu\u00eas","langEnglish":"Portuguese","countryNative":"Brasil","countryEnglish":"Brazil","direction":"ltr"},{"id":"zh-CN","flag":"china","langNative":"\u4e2d\u6587","langEnglish":"Chinese","countryNative":"\u4e2d\u56fd","countryEnglish":"China","direction":"ltr"},{"id":"es-CL","flag":"cl","langNative":"Espa\u00f1ol","langEnglish":"Spanish","countryNative":"Chile","countryEnglish":"Chile","direction":"ltr"},{"id":"cs-CZ","flag":"cz","langNative":"\u010ce\u0161tina","langEnglish":"Czech","countryNative":"\u010cesk\u00e1 republika","countryEnglish":"Czech Republic","direction":"ltr"},{"id":"de-DE","flag":"de","langNative":"Deutsch","langEnglish":"German","countryNative":"Deutschland","countryEnglish":"Germany","direction":"ltr"},{"id":"da-DK","flag":"dk","langNative":"Dansk","langEnglish":"Danish","countryNative":"Danmark","countryEnglish":"Denmark","direction":"ltr"},{"id":"et-EE","flag":"ee","langNative":"Eesti","langEnglish":"Estonian","countryNative":"Eesti","countryEnglish":"Estonia","direction":"ltr"},{"id":"ar-EG","flag":"eg","langNative":"\u0627\u0644\u0639\u0631\u0628\u064a\u0629","langEnglish":"Arabic","countryNative":"\u0645\u0635\u0631","countryEnglish":"Egypt","direction":"rtl"},{"id":"es-ES","flag":"es","langNative":"Espa\u00f1ol","langEnglish":"Spanish","countryNative":"Espa\u00f1a","countryEnglish":"Spain","direction":"ltr"},{"id":"fi-FI","flag":"fi","langNative":"Suomi","langEnglish":"Finnish","countryNative":"Suomi","countryEnglish":"Finland","direction":"ltr"},{"id":"fr-FR","flag":"fr","langNative":"Fran\u00e7ais","langEnglish":"French","countryNative":"France","countryEnglish":"France","direction":"ltr"},{"id":"fr-BE","flag":"be","langNative":"Fran\u00e7ais","langEnglish":"French","countryNative":"la Belgique","countryEnglish":"Belgium","direction":"ltr"},{"id":"el-GR","flag":"gr","langNative":"\u0395\u03bb\u03bb\u03b7\u03bd\u03b9\u03ba\u03ac","langEnglish":"Greek","countryNative":"\u0395\u03bb\u03bb\u03ac\u03b4\u03b1","countryEnglish":"Greece","direction":"ltr"},{"id":"zh-HK","flag":"hk","langNative":"\u4e2d\u6587","langEnglish":"Chinese","countryNative":"\u9999\u6e2f","countryEnglish":"Hong Kong","direction":"ltr"},{"id":"hr-HR","flag":"hr","langNative":"Hrvatski","langEnglish":"Croatian","countryNative":"Hrvatska","countryEnglish":"Croatia","direction":"ltr"},{"id":"hu-HU","flag":"hu","langNative":"Magyar","langEnglish":"Hungarian","countryNative":"Magyarorsz\u00e1g","countryEnglish":"Hungary","direction":"ltr"},{"id":"id-ID","flag":"id","langNative":"Bahasa Indonesia","langEnglish":"Indonesian","countryNative":"Indonesia","countryEnglish":"Indonesia","direction":"ltr"},{"id":"he-IL","flag":"il","langNative":"\u05e2\u05d1\u05e8\u05d9\u05ea","langEnglish":"Hebrew","countryNative":"\u05d9\u05e9\u05e8\u05d0\u05dc","countryEnglish":"Israel","direction":"rtl"},{"id":"it-IT","flag":"it","langNative":"Italiano","langEnglish":"Italian","countryNative":"Italia","countryEnglish":"Italy","direction":"ltr"},{"id":"ja-JP","flag":"jp","langNative":"\u65e5\u672c\u8a9e","langEnglish":"Japanese","countryNative":"\u65e5\u672c","countryEnglish":"Japan","direction":"ltr"},{"id":"lt-LT","flag":"lt","langNative":"Lietuvi\u0173","langEnglish":"Lithuanian","countryNative":"Lietuva","countryEnglish":"Lithuania","direction":"ltr"},{"id":"lv-LV","flag":"lv","langNative":"Latvie\u0161u","langEnglish":"Latvian","countryNative":"Latvija","countryEnglish":"Latvia","direction":"ltr"},{"id":"es-MX","flag":"mx","langNative":"Espa\u00f1ol","langEnglish":"Spanish","countryNative":"M\u00e9xico","countryEnglish":"Mexico","direction":"ltr"},{"id":"ms-MY","flag":"my","langNative":"Bahasa Melayu","langEnglish":"Malay","countryNative":"Malaysia","countryEnglish":"Malaysia","direction":"ltr"},{"id":"nl-NL","flag":"nl","langNative":"Nederlands","langEnglish":"Dutch","countryNative":"Nederland","countryEnglish":"Netherlands","direction":"ltr"},{"id":"nl-BE","flag":"be","langNative":"Nederlands","langEnglish":"Dutch","countryNative":"Belgi\u00eb","countryEnglish":"Belgium","direction":"ltr"},{"id":"no-NO","flag":"no","langNative":"Norsk","langEnglish":"Norwegian","countryNative":"Norge","countryEnglish":"Norway","direction":"ltr"},{"id":"en-NZ","flag":"nz","langNative":"English","langEnglish":"English","countryNative":"New Zealand","countryEnglish":"New Zealand","direction":"ltr"},{"id":"pl-PL","flag":"pl","langNative":"Polski","langEnglish":"Polish","countryNative":"Polska","countryEnglish":"Poland","direction":"ltr"},{"id":"pt-PT","flag":"pt","langNative":"Portugu\u00eas","langEnglish":"Portuguese","countryNative":"Portugal","countryEnglish":"Portugal","direction":"ltr"},{"id":"ro-RO","flag":"ro","langNative":"Rom\u00e2n\u0103","langEnglish":"Romanian","countryNative":"Rom\u00e2nia","countryEnglish":"Romania","direction":"ltr"},{"id":"sr-RS","flag":"rs","langNative":"\u0421\u0440\u043f\u0441\u043a\u0438","langEnglish":"Serbian","countryNative":"\u0421\u0440\u0431\u0438\u0458\u0430","countryEnglish":"Serbia","direction":"ltr"},{"id":"ru-RU","flag":"ru","langNative":"\u0420\u0443\u0441\u0441\u043a\u0438\u0439","langEnglish":"Russian","countryNative":"\u0420\u043e\u0441\u0441\u0438\u044f","countryEnglish":"Russia","direction":"ltr"},{"id":"ar-SA","flag":"sa","langNative":"\u0627\u0644\u0639\u0631\u0628\u064a\u0629","langEnglish":"Arabic","countryNative":"\u0627\u0644\u0633\u0639\u0648\u062f\u064a\u0629","countryEnglish":"Saudi Arabia","direction":"rtl"},{"id":"sv-SE","flag":"se","langNative":"Svenska","langEnglish":"Swedish","countryNative":"Sverige","countryEnglish":"Sweden","direction":"ltr"},{"id":"sl-SI","flag":"si","langNative":"Sloven\u0161\u010dina","langEnglish":"Slovenian","countryNative":"Slovenija","countryEnglish":"Slovenia","direction":"ltr"},{"id":"sk-SK","flag":"sk","langNative":"Sloven\u010dina","langEnglish":"Slovak","countryNative":"Slovensk\u00e1 republika","countryEnglish":"Slovakia","direction":"ltr"},{"id":"ar-SY","flag":"arabia","langNative":"\u0627\u0644\u0639\u0631\u0628\u064a\u0629","langEnglish":"Arabic","countryNative":"\u0639\u0627\u0644\u0645\u064a","countryEnglish":"International","direction":"rtl"},{"id":"th-TH","flag":"th","langNative":"\u0e20\u0e32\u0e29\u0e32\u0e44\u0e17\u0e22","langEnglish":"Thai","countryNative":"\u0e1b\u0e23\u0e30\u0e40\u0e17\u0e28\u0e44\u0e17\u0e22","countryEnglish":"Thailand","direction":"ltr"},{"id":"tr-TR","flag":"tr","langNative":"T\u00fcrk\u00e7e","langEnglish":"Turkish","countryNative":"T\u00fcrkiye","countryEnglish":"Turkey","direction":"ltr"},{"id":"uk-UA","flag":"ua","langNative":"\u0423\u043a\u0440\u0430\u0457\u043d\u0441\u044c\u043a\u0430","langEnglish":"Ukrainian","countryNative":"\u0423\u043a\u0440\u0430\u0457\u043d\u0430","countryEnglish":"Ukraine","direction":"ltr"},{"id":"zh-TW","flag":"tw","langNative":"\u4e2d\u6587","langEnglish":"Chinese (Traditional)","countryNative":"\u53f0\u7063","countryEnglish":"China","direction":"ltr"},{"id":"en-GB","flag":"uk","langNative":"English","langEnglish":"English","countryNative":"United Kingdom","countryEnglish":"United Kingdom","direction":"ltr"},{"id":"en-US","flag":"us","langNative":"English","langEnglish":"English","countryNative":"United States","countryEnglish":"United States","direction":"ltr"},{"id":"vi-VN","flag":"vn","langNative":"Ti\u1ebfng Vi\u1ec7t","langEnglish":"Vietnamese","countryNative":"Vi\u1ec7t Nam","countryEnglish":"Vietnam","direction":"ltr"}]},"overviewPageFavouriteSubTabKey":{"key":null}}},
                    playerId: 10818,
                    activeTab: "overview",
                    subTabBarName: "profileVillages"
                },
                {},
                ["spieler","allgemein","statistiken","hero","region","admin","allianz","bbcode","truppen","layout","karte"]        );
        });
      </script>
      */ ?>
  
