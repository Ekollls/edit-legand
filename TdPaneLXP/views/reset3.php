<?php

#################################################################################

##              -= YOU .phpNOT REMOVE OR CHANGE THIS NOTICE =-                 ##

## --------------------------------------------------------------------------- ##

##  Filename       gold.tpl                                                    ##

##  Developed by:  aggenkeech                                                  ##

##  License:       TravianX Project                                            ##

##  Copyright:     TravianX (c) 2010-2012. All rights reserved.                ##

##                                                                             ##

#################################################################################
error_reporting(E_ALL);

// Display errors on the screen
ini_set('display_errors', 1);


if ($_SESSION['access'] < ADMIN)
	die("Access Denied: You are not Admin!");

//$id = $_SESSION['id']; 
$ssData = $database->queryFetch('SELECT * FROM config ');
/*$lic=$ssData['licenseid'];	

   if($ssData['reinstalltime']==0){
	   $pppath="../"."installer_".$lic;
   }else{
	   $pppath="../"."reorder_".$lic."_".$ssData['reinstalltime'];
   }	*/
if (isset($_POST['nowpassword'])) {
	set_time_limit(0);
	if (!defined("NATARS_MAX"))
		define("NATARS_MAX", 22);
	ResetMap();


}
?>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		// Initialize flatpickr for each input
		flatpickr("input[name='startdate'], input[name='farmdate'], input[name='artdate'], input[name='wwdate']", {
			enableTime: true, // Enable time selection
			dateFormat: "Y-m-d H:i:S", // Date and time format
			time_24hr: true, // Use 24-hour format
			altInput: true, // Show input field for better mobile experience
			altFormat: "Y-m-d H:i:S", // Alternate input format
			// You can add more options here as needed
		});
	});
</script>




<form action="" method="POST">

	<input type="hidden" name="admid" id="admid" value="<?php echo $_SESSION['id']; ?>">
	<table class="table" style="width:300px;">

		<thead>

			<tr>

				<th colspan="2">ReInstall Server with now configs</th>

			</tr>

		</thead>

		<tbody>

			<tr>
				<td colspan="2">stardate:</td>
				<td colspan="2">
					<input type="text" name="startdate" id="admid" value="">
				</td>
			</tr>
			<tr>
				<td colspan="2">farmdate:</td>
				<td colspan="2">
					<input type="text" name="farmdate" id="admid" value="">
				</td>
			</tr>
			<tr>
				<td colspan="2">artefact release date:</td>
				<td colspan="2">
					<input type="text" name="artdate" id="admid" value="">
				</td>
			</tr>
			<tr>
				<td colspan="2">ww plan release date:</td>
				<td colspan="2">
					<input type="text" name="wwdate" id="admid" value="">
				</td>
			</tr>
			<tr>
				<td colspan="2">Multihunter nowpassword:</td>
				<td colspan="2">
					<input type="text" name="nowpassword" id="admid" value="">
				</td>
			</tr>
			<tr>

				<td colspan="2">

					<center>

						<input type="image" src="../img/Admin/b/ok1.gif" name="confirm" value="submit">

					</center>

				</td>

			</tr>

		</tbody>

	</table>

</form>



<?php

if (isset($_GET['g'])) {

	echo '<br /><br /><font color="Red"><b>The Server Has Been Reset</font></b>';

}
function getWref($x, $y)
{
	global $database;
	$q = "SELECT * FROM wdata where x = $x and y = $y";
	$result = $database->query($q);
	$r = mysqli_fetch_assoc($result);
	return $r['id'];
}
function generateBase($kid, $uid, $username)
{
	global $database;
	if ($kid == '') {
		$kid = rand(1, 4);
	}
	if ($kid == 'nw') {
		$kid = 2;
	} elseif ($kid == 'no') {
		$kid = 3;
	} elseif ($kid == 'sw') {
		$kid = 1;
	} elseif ($kid == 'so') {
		$kid = 4;
	}

	$wid = $database->generateBase($kid);

	$database->setFieldTaken($wid);
	$database->addVillage($wid, $uid, $username, 1);
	$database->addResourceFields($wid, $database->getVillageType($wid));
	$database->addUnits($wid);
	$database->addTech($wid);
	$database->addABTech($wid);
	$database->updateUserField($uid, "location", "", 1);

}
function ResetMap()
{ // Reinstall the whole thing
	global $database, $account, $session;
	set_time_limit(0);

	$database->query("TRUNCATE TABLE a2b");
	$database->query("TRUNCATE TABLE abdata");
	$database->query("TRUNCATE TABLE achiev");
	$database->query("TRUNCATE TABLE activate");
	$database->query("TRUNCATE TABLE adventure");
	$database->query("TRUNCATE TABLE alibounuses");
	$database->query("TRUNCATE TABLE alidata");
	$database->query("TRUNCATE TABLE ali_invite");
	$database->query("TRUNCATE TABLE ali_log");
	$database->query("TRUNCATE TABLE ali_permission");
	$database->query("TRUNCATE TABLE antimult");
	$database->query("TRUNCATE TABLE artefacts");
	$database->query("TRUNCATE TABLE attacks");
	$database->query("TRUNCATE TABLE auction");
	$database->query("TRUNCATE TABLE autoauction");
	$database->query("TRUNCATE TABLE autorenewals");
	$database->query("TRUNCATE TABLE banlist");
	$database->query("TRUNCATE TABLE bdata");
	$database->query("TRUNCATE TABLE bounuses");
	$database->query("TRUNCATE TABLE buygold");
	$database->query("TRUNCATE TABLE codes");
	$database->query("TRUNCATE TABLE critical_log");
	$database->query("TRUNCATE TABLE deleted");
	$database->query("TRUNCATE TABLE demolition");
	$database->query("TRUNCATE TABLE diplomacy");
	$database->query("TRUNCATE TABLE enforcement");
	$database->query("TRUNCATE TABLE farmlist");
	$database->query("TRUNCATE TABLE fdata");
	$database->query("TRUNCATE TABLE forum_cat");
	$database->query("TRUNCATE TABLE forum_edit");
	$database->query("TRUNCATE TABLE forum_poll");
	$database->query("TRUNCATE TABLE forum_post");
	$database->query("TRUNCATE TABLE forum_topic");
	$database->query("TRUNCATE TABLE fpost_rules");
	$database->query("TRUNCATE TABLE hero");
	$database->query("TRUNCATE TABLE heroface");
	$database->query("TRUNCATE TABLE heroinventory");
	$database->query("TRUNCATE TABLE heroitems");
	$database->query("TRUNCATE TABLE ignore");
	$database->query("TRUNCATE TABLE links");
	$database->query("TRUNCATE TABLE log");
	$database->query("TRUNCATE TABLE login_handshake");
	$database->query("TRUNCATE TABLE map_control");
	$database->query("TRUNCATE TABLE map_marks");
	$database->query("TRUNCATE TABLE market");
	$database->query("TRUNCATE TABLE mdata");
	$database->query("TRUNCATE TABLE medal");
	$database->query("TRUNCATE TABLE messages");
	$database->query("TRUNCATE TABLE movement");
	$database->query("TRUNCATE TABLE ndata");
	$database->query("TRUNCATE TABLE newproc");
	$database->query("TRUNCATE TABLE odata");
	$database->query("TRUNCATE TABLE online");
	$database->query("TRUNCATE TABLE palevo");
	$database->query("TRUNCATE TABLE password");
	$database->query("TRUNCATE TABLE payments");
	$database->query("TRUNCATE TABLE plusaddons");
	$database->query("TRUNCATE TABLE pnews");
	$database->query("TRUNCATE TABLE prisoners");
	$database->query("TRUNCATE TABLE quests");
	$database->query("TRUNCATE TABLE queue");
	$database->query("TRUNCATE TABLE raidlist");
	$database->query("TRUNCATE TABLE referals");
	$database->query("TRUNCATE TABLE research");
	$database->query("TRUNCATE TABLE route");
	$database->query("TRUNCATE TABLE sitters");
	$database->query("TRUNCATE TABLE spravka");
	$database->query("TRUNCATE TABLE storage");
	$database->query("TRUNCATE TABLE superpoint");
	$database->query("TRUNCATE TABLE support");
	$database->query("TRUNCATE TABLE tdata");
	$database->query("TRUNCATE TABLE training");
	$database->query("TRUNCATE TABLE units");
	//$database->query("TRUNCATE TABLE users");
	$database->query("TRUNCATE TABLE user_deleted_messages");
	$database->query("TRUNCATE TABLE user_messages");
	$database->query("TRUNCATE TABLE vdata");
	$database->query("TRUNCATE TABLE wdata");


	//$database->query("INSERT INTO natarsprogress VALUES(0, 0, 0, 0, ".$post['artefactreleasedat'].", 0, ".$post['wwbpreleasedat'].")");

	// Delete the accounts
	//$database->query("DELETE FROM users WHERE id>6");

	// Update the config 
	//stats_time
	$database->query("UPDATE config SET commence=" . (time() + 300) . "");
	$database->query("UPDATE config SET regstatus=1");

	// Wdata 

	// Define the size of the grid dynamically
	$world_size = WORLD_MAX; // Set $world_size dynamically as needed
	$xyas = 2 * $world_size + 1; // The total range for x and y coordinates

	// Loop through the y-axis (positive and negative)
	for ($i = 0; $i < $xyas; $i++) {
		$y = $world_size - $i;
		for ($j = 0; $j < $xyas; $j++) {
			$x = (-$world_size) + $j;
	
			// Example logic for fieldtype and other attributes based on x and y
			if ($x >= -2 && $x <= 2 && $y >= -2 && $y <= 1) {
				$fieldtype = 1; // Central point (0,0)
				$oasistype = 0;
			} else {
				// Randomly generate field type and oasis type
				$rand = rand(1, 1000);
				if ($rand <= 900) {
					$fieldtype = rand(1, 12);
					$oasistype = rand(0, 12);
				} else {
					$fieldtype = 0; // Empty field
					$oasistype = 0;
				}
			}
	
			// Random image selection
			$image = (rand(0, 4)*60). "_" . (rand(0, 4)*60);
	
			// Insert into wdata table using the calculated x, y, fieldtype, oasistype, and image
			$query = "INSERT INTO wdata (id, fieldtype, oasistype, x, y, occupied, image, oasisimg, partimg, adv, type_of) 
					  VALUES (0, '$fieldtype', '$oasistype', '$x', '$y', 0, '$image', '', '', 0, '')";
	
			$database->query($query);
		}
	}
	



	// Tiles
	$list = array('lake', 'clay', 'hill', 'forest', );
	$xt = 60;
	for ($rand1 = 0; $rand1 <= 198; $rand1++) {
		$xtile[$rand1] = $xt;
		$xt += 60;
	}

	$Volcanolist = 'vulcano';

	$vol_location = array(
		'-2 1 0',
		'-1 1 4',
		'0 1 8',
		'1 1 12',
		'2 1 16',
		'-2 0 1',
		'-1 0 5',
		'0 0 9',
		'1 0 13',
		'2 0 17',
		'-2 -1 2',
		'-1 -1 6',
		'0 -1 10',
		'1 -1 14',
		'2 -1 18',
		'-2 -2 3',
		'-1 -2 7',
		'0 -2 11',
		'1 -2 15',
		'2 -2 19',
	);

	$counter = $totalz = $maxcounter = 0;

	foreach ($vol_location as $loc) {
		$locs = explode(' ', $loc);
		$x = $locs[0];
		$y = $locs[1];
		$pos = (abs($x)*60)."_".(abs($y)*60);
		$image = $pos;
		//if ($pos == 10) {
		//    $image = 'grassland1';
		//}
		if ($pos == 13) {
			$fieldtyp = 3;
		} else {
			$fieldtyp = 0;
		}
		$q = "UPDATE wdata set `fieldtype` = $fieldtyp , `image` = '$image'  WHERE x = '$x' AND y = '$y'";
		$database->query($q);
	}

	$max[] = "5880 6060";
	$max[] = "5940 6060";
	$max[] = "6000 6060";
	$max[] = "6060 6060";
	$max[] = "6120 6060";

	$max[] = "5880 6000";
	$max[] = "5940 6000";
	$max[] = "6000 6000";
	$max[] = "6060 6000";
	$max[] = "6120 6000";

	$max[] = "5880 5940";
	$max[] = "5940 5940";
	$max[] = "6000 5940";
	$max[] = "6060 5940";
	$max[] = "6120 5940";

	$max[] = "5880 5880";
	$max[] = "5940 5880";
	$max[] = "6000 5880";
	$max[] = "6060 5880";
	$max[] = "6120 5880";

	for ($i = 0; $i <= 198; $i += $rand_i) {
		unset($temp, $tile_counter);
		for ($z = 0; $z <= 198; $z += $rand_z) {
			unset($temp, $tile_counter);
			$lists = $list[random_int(0, 4)];
			if (isset($lists)) {
				$imgloc = "img/m/". $lists .".gif";
				//$img = imagecreatefromgif($imgloc);
				list($width, $height) = getimagesize($imgloc);
				$width2 = $width - 60;
				$height2 = $height - 60;
				$pic_x_max = ($width) / 60;
				$pic_y_max = ($height) / 60;
				$maxwidth = round((540 - $width) / 60);
				$maxheight = round((540 - $height) / 60);
				$start_x = $xtile[$i];
				$start_y = $start_y_org = $xtile[$z];
				$temp = array();
				if ($start_x < 11820 && $start_y < 11820) {
					$tile_counter[] = $lists;
					for ($iii = 0; $iii <= $width2 / 60; $iii++) {
						if ($start_x >= 11820 && $start_y >= 11820) {
							unset($temp);
							break;
						}
						for ($zzz = 0; $zzz <= $height2 / 60; $zzz++) {
							$temp[] = "$start_x $start_y";
							$start_y += 60;
						}
						$start_x += 60;
						$start_y = $start_y_org;

					}
					$notallow = $tiles = 0;
					foreach ($temp as $temporary) {
						//foreach ($max as $max2) {
						if (in_array($temporary, $max) != false) {
							$notallow = 1;
							break;
						}
						// }
					}

					if ($notallow == 1) {
						unset($temp);
						continue;
					}

					$maxcounter = 0;
					if ($notallow == 0) {
						foreach ($temp as $temporary) {
							$max[] = $temporary;
							$tile_split = preg_split('#(?=\d)(?<=[a-z])#i', $tile_counter[0]);
							$xtp = 0;
							for ($rand3 = -99; $rand3 <= 99; $rand3++) {
								$maptile[$xtp] = $rand3;
								$xtp += 60;
							}
							$xtp2 = 0;
							for ($rand4 = 99; $rand4 > -99; $rand4--) {
								$maptile2[$xtp2] = $rand4;
								$xtp2 += 60;
							}

							$res = explode(' ', $temporary);
							$x = $maptile[$res[0]];
							$y = $maptile2[$res[1]];

							$t = $tiles;
							$notil = $tile_split[0] . '_' . $tile_split[1];
							$text = $notil . "_" . $t;
							$rander = rand(0, 10);

							$advance = '';

							if ($rander < 5) {
								if ($tile_split[0] == 'lake') {
									$advance = "`oasistype` = " . rand(10, 12) . " , `fieldtype` = 0 , ";
								} elseif ($tile_split[0] == 'hill') {
									$advance = "`oasistype` = " . rand(7, 9) . " , `fieldtype` = 0 , ";
								} elseif ($tile_split[0] == 'clay') {
									$advance = "`oasistype` = " . rand(4, 6) . " , `fieldtype` = 0 , ";
								} elseif ($tile_split[0] == 'forest') {
									$advance = "`oasistype` = " . rand(1, 3) . " , `fieldtype` = 0 , ";
								}
							} else {
								$advance = "`oasistype` = 0 , `fieldtype` = 0 , ";
							}

							$q = "UPDATE wdata set $advance `image` = '$notil' , `type_of` ='$t' WHERE x = '$x' AND y = '$y'";
							$database->query($q);
							$tiles++;
						}
					}
					//$maxcounter++;
				}
			}
			$rand_z = rand(1, 4);
		}
		$rand_i = rand(1, 4);
	}

	// Natars
	$wid = getWref(0, 0);
	$uid = 2;
	$status = $database->getVillageState($wid);
	if ($status == 0) {
		$database->setFieldTaken($wid);
		$database->addVillage($wid, $uid, 'Natars', '1');
		$database->addResourceFields($wid, $database->getVillageType($wid));
		$database->addUnits($wid);
		$database->addTech($wid);
		$database->addABTech($wid);
	}
	$database->query("UPDATE vdata SET pop = '781' WHERE owner = $uid");
	$database->query("UPDATE units SET u41 = " . (274700 * SPEED) . ", u42 = " . (995231 * SPEED) . ", u43 = 10000, u44 = " . (3048 * SPEED) . ", u45 = " . (964401 * SPEED) . ", u46 = " . (617602 * SPEED) . ", u47 = " . (6034 * SPEED) . ", u48 = " . (3040 * SPEED) . " , u49 = 1, u50 = 9 WHERE vref = " . $wid . "");
	$status = 0;
	for ($i = 1; $i <= 13; $i++) {
		$nareadis = NATARS_MAX;
		do {
			$x = rand(3, intval(floor(NATARS_MAX)));
			if (rand(1, 10) > 5)
				$x = $x * -1;
			$y = rand(3, intval(floor(NATARS_MAX)));
			if (rand(1, 10) > 5)
				$y = $y * -1;
			$dis = sqrt(($x * $x) + ($y * $y));
			$wid = getWref($x, $y);
			$status = $database->getVillageState($wid);
		} while (($dis > $nareadis) || $status != 0);
		if ($status == 0) {
			$database->setFieldTaken($wid);
			$database->addVillage($wid, $uid, 'Natars', '1');
			$database->addResourceFields($wid, $database->getVillageType($wid));
			$database->addUnits($wid);
			$database->addTech($wid);
			$database->addABTech($wid);
			$database->query("UPDATE vdata SET pop = '238' WHERE wref = '$wid'");
			$database->query("UPDATE vdata SET name = 'WW Village' WHERE wref = '$wid'");
			$database->query("UPDATE vdata SET capital = 0 WHERE wref = '$wid'");
			$database->query("UPDATE vdata SET natar = 1 WHERE wref = '$wid'");
			$database->query("UPDATE units SET u41 = " . (rand(3000, 6000) * SPEED) . ", u42 = " . (rand(4500, 6000) * SPEED) . ", u43 = 10000, u44 = " . (rand(635, 1575) * SPEED) . ", u45 = " . (rand(3600, 5700) * SPEED) . ", u46 = " . (rand(4500, 6000) * SPEED) . ", u47 = " . (rand(1500, 2700) * SPEED) . ", u48 = " . (rand(300, 900) * SPEED) . " , u49 = 0, u50 = 9 WHERE vref = " . $wid . "");
			$database->query("UPDATE fdata SET f22t = 27, f22 = 10, f28t = 25, f28 = 10, f19t = 23, f19 = 10, f99t = 40, f26 = 0, f26t = 0, f21 = 1, f21t = 15, f39 = 1, f39t = 16 WHERE vref = " . $wid . "");
		}
	}

	// Oasis
	//$database->poulateOasisdata();
	//$database->populateOasis();
	//$database->populateOasisUnitsLow();

	// Install Villages for support and multihunter
	$frandom0 = rand(0, 3);
	$frandom1 = rand(0, 3);
	$frandom2 = rand(0, 4);
	$frandom3 = rand(0, 3);
	$database->addHeroFace(1, $frandom0, $frandom1, $frandom2, $frandom3, $frandom3, $frandom2, $frandom1, $frandom0, $frandom2);
	$database->addHero(1);
	//$database->updateUserField(1, "act", "", 1);
	generateBase('', 1, 'Support');
	$database->modifyUnit($database->getVFH(1), 'hero', 1, 1);
	$database->modifyHero(1, 0, 'wref', $database->getVFH(1), 0);
	for ($s = 1; $s <= 3; $s++) {
		$database->addAdventure($database->getVFH(1), 1);
	}
	$database->modifyGold($uid, 1000, 1);
	$database->query("INSERT INTO users_setting (`id`) values ('1')");

	$frandom0 = rand(0, 3);
	$frandom1 = rand(0, 3);
	$frandom2 = rand(0, 4);
	$frandom3 = rand(0, 3);
	$database->addHeroFace(4, $frandom0, $frandom1, $frandom2, $frandom3, $frandom3, $frandom2, $frandom1, $frandom0, $frandom2);
	$database->addHero(4);
	//$database->updateUserField(4, "act", "", 1);
	generateBase('', 4, 'Multihunter');
	$database->modifyUnit($database->getVFH(4), 'hero', 1, 1);
	$database->modifyHero(4, 0, 'wref', $database->getVFH(4), 0);
	for ($s = 1; $s <= 3; $s++) {
		$database->addAdventure($database->getVFH(4), 1);
	}
	$database->modifyGold($uid, 1000, 1);
	$database->query("INSERT INTO users_setting (`id`) values ('4')");

	header('Location: panel.php?p=2&done');
}
?>