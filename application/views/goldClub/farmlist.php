<?php
if(isset($_GET['prob'])&& $_GET['prob']=='delauto2'){
    $database->query("UPDATE   farmlist SET  `autoeach`='60', `auto` = 0 WHERE `owner` = ".$session->uid ." AND `wref`= ".$village->wid );
    header('Location: build.php?id=39&t=99'); 
    var_dump($_GET['prob']=='delauto2');die();
}
if(isset($_GET['prob'])&& $_GET['prob']=='delauto1'){
    $database->query("UPDATE   farmlist SET  `autoeach`='60', `auto` = 0 WHERE `owner` = ".$session->uid );
    header('Location: build.php?id=39&t=99'); 
}

if(isset($_GET['t'])==99 && isset($_GET['action'])==0) {
    if(isset($_GET['t'])==99 && isset($_POST['action']) && $_POST['action']=='addList'){
        $database->createFarmList($database->filterintvalue($_POST['did']), $session->uid, $database->filterstringvalue($_POST['name']));
    }
    if (isset($_GET['t']) == 99 && isset($_POST['action']) == 1) {
        if (isset($_GET['t']) == 99 && $_POST['action'] == 'autoFarm') {
         $database->autodarm1byowner($village->wid);
        // var_dump($_POST);
     // $database->autodarm1($village->wid)
        if($_POST['timer1'] == 0 ){
       $database->autodarm1($_POST['autoid1']);
    
        } elseif($_POST['timer1'] >= 3 ){
        
           $tttimer=time()+($_POST['timer1']*60);
    $sql = $database->query("UPDATE   farmlist SET `laststart`=".$tttimer." ,`autoeach`=".$_POST['timer1'].", `auto` = 1 WHERE `id` = ".$_POST['autoid1'] );
    //echo $_POST['timer2'];
        }
        if($_POST['timer2'] == 0 ){
       $database->autodarm1($_POST['autoid2']);
     
        }
        elseif($_POST['timer2'] >= 3  ){
        
           $tttimer=time()+($_POST['timer2']*60);
    $sql = $database->query("UPDATE   farmlist SET `laststart`=".$tttimer." ,`autoeach`=".$_POST['timer2'].", `auto` = 1 WHERE `id` = ".$_POST['autoid2'] );
    
        }
        
        
     
    
    
    
    }
         
        
        }

    if(!isset($timer)){
        $timer = 1;
    }
    $sql33 = $database->query("SELECT * FROM farmlist WHERE wref = ".$village->wid );
    $sql12=count($sql33);
    $dat11a=array(); 
   // $i=1;
   $ioo=1;
  foreach ($sql33 as $sql11){
  $dat11a[$ioo]=$sql11;
  $ioo++;
  }
 
   $MyGold = $database->query("SELECT * FROM users WHERE `username`='" . $session->username . "'") ;
      $golds = $MyGold;
$sql = $database->query("SELECT * FROM farmlist WHERE `owner` = '".$session->uid."' and wref = '".$village->wid."'");
$query = count($sql);

if($golds[0]["bfarm"]>time()){

          
    ?>
	
    <style>
        .gray-box {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            direction: rtl;
            text-align: right;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h4.round {
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.2em;
        }
        table.transparent {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #e9e9e9;
        }
        select {
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="gray-box">
 
        <form action="build.php?gid=16&t=99" method="post">
            <input type="hidden" name="action" value="autoFarm">
            <table cellpadding="1" cellspacing="1" class="transparent">
                <tbody>
                    <tr>
                        <th>غارت خودكار فارم ليست:</th>
                        <td>
                            no.1
                            <select id="autoid1" name="autoid1">
                                <?php
                                $hast = 0;
                                $hastid1 = 0;
                                $hastid2 = 0;
                                if ($sql12 > 0) {
                                    for ($i = 1; $i <= $sql12; $i++) {
                                        if ($dat11a[$i]['auto'] == 1) {
                                            $select = 'selected="selected"';
                                            $hast = 1;
                                            $hastid1 = $i;
                                        } else {
                                            $select = '';
                                        }
                                        echo "<option value=\"" . $dat11a[$i]['id'] . "\" " . $select . ">" . $dat11a[$i]['name'] . "(" . $dat11a[$i]['id'] . ") </option>";
                                    }
                                }
                                echo "<option value=\"0\" ";
                                if ($hast == 0) {
                                    echo 'selected="selected"';
                                }
                                echo ">none</option>";
                                ?>
                            </select>
                        </td>
                        <td>
                            no.2
                            <select id="autoid2" name="autoid2">
                                <?php
                                $hast = 0;
                                if ($sql12 > 0) {
                                    for ($i = 1; $i <= $sql12; $i++) {
                                        if ($dat11a[$i]['auto'] == 1 && $i != $hastid1) {
                                            $select = 'selected="selected"';
                                            $hast = 1;
                                            $hastid2 = $i;
                                        } else {
                                            $select = '';
                                        }
                                        echo "<option value=\"" . $dat11a[$i]['id'] . "\" " . $select . ">" . $dat11a[$i]['name'] . "(" . $dat11a[$i]['id'] . ") </option>";
                                    }
                                }
                                echo "<option value=\"0\" ";
                                if ($hast == 0) {
                                    echo 'selected="selected"';
                                }
                                echo ">none</option>";
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>هر: (بر حسب دقیقه و حداقل زمان ممکن برای فارم خودکار 3 دقیقه)</th>
                        <td colspan="2">            <?php 
                        $dat11a[0]['autoeach']=60;
            // die(var_dump($dat11a));?>
            no.1<input class="text" id="" name="timer1" value="<?php echo $dat11a[$hastid1]['autoeach']; ?>" type="number" style="width: 100px;">
                 <br><?php if($hastid1>0){
                    echo "ارسال بعدی در :".jdate('Y/m/d H:i:s', $dat11a[$hastid1]['laststart']);
                }
                ?> 
                           
                 
           
            no.2	<input class="text" id="" name="timer2" value="<?php echo $dat11a[$hastid2]['autoeach']; ?>" type="number"style="width: 100px;" >
            <br> <?php if($hastid2>0){
                    echo "ارسال بعدی در :".jdate('Y/m/d H:i:s', $dat11a[$hastid2]['laststart']);
                }?>
        </td>
    </tr>
                </tbody>
            </table>
       
    </div>

</html>


        </tbody>
    </table>

<style>
    .form-inline {
        display: inline-block;
        margin: 5px;
    }
    .button-container {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .button-background {
        display: flex;
    }
</style>


    <button type="submit" value="save" class="textButtonV1 green build" name="s1act" id="btn_save">
        <div class="button-container addHoverClick">
            <div class="button-background">
                <div class="buttonStart">
                    <div class="buttonEnd">
                        <div class="buttonMiddle"></div>
                    </div>
                </div>
            </div>
            <div class="button-content">ذخیره</div>
        </div>
    </button>
</form>

<form action="build.php?id=39&t=99&prob=delauto1" method="post" class="form-inline">
    <button type="submit" value="save" class="textButtonV1 green build" name="s1act" id="btn_save">
        <div class="button-container addHoverClick">
            <div class="button-background">
                <div class="buttonStart">
                    <div class="buttonEnd">
                        <div class="buttonMiddle"></div>
                    </div>
                </div>
            </div>
            <div class="button-content">غیرفعال کردن فارم خودکار در همه دهکده‌ها</div>
        </div>
    </button>
</form>

<form action="build.php?id=39&t=99&prob=delauto2" method="post" class="form-inline">
    <input type="hidden" name="prob" value="delauto2">
    <button type="submit" value="save" class="textButtonV1 green build" name="s1act" id="btn_save">
        <div class="button-container addHoverClick">
            <div class="button-background">
                <div class="buttonStart">
                    <div class="buttonEnd">
                        <div class="buttonMiddle"></div>
                    </div>
                </div>
            </div>
            <div class="button-content">غیرفعال کردن فارم خودکار در این دهکده</div>
        </div>
    </button>
</form>
  <style>
        .gray-box {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 15px;
            margin: 20px;
            border-radius: 5px;
        }
    </style>
  <div class="gray-box">
     شما از هرده میتوانید دو لیست فارم را به صورت خودکار غارت کنید
        <hr>
        فارم لیست حتی وقتی افلاین هم هستید فعال می باشد و غارت میفرستد
        <hr>
      برای غیرفعال کردن لیست فعال را روی None بگزارید
        <hr>
     حداکثر صف ارسالی قابل ایجاد توسط فارم خودکار ۱۲۰ حمله در هر دهکده می باشد
    </div>
<?php
}else{

?>

برای فعال سازی غارت خودکار فارم لیست به امکانات پلاس مراجعه کنید.<br>
با تهیه اشتراک فارم لیست خودکار حتی در زمان افلاین بودن هم میتوانید به غارت فارم لیست خود بپردازید.
<br>
<a href="#" onclick="window.fireEvent('startPaymentWizard', {
            data: {
                cmd: 'paymentWizard',
                goldProductId: '',
                goldProductLocation: '',
                location: '',
                activeTab: 'paymentFeatures',
                formData: {}
            }
        }); this.blur(); return true;">مراجعه به پلاس</a>

<?php
}    


foreach($sql as $row0){
    $lid = $row0["id"];
    $lname = $row0["name"];
    $lowner = $row0["owner"];
    $lwref = $row0["wref"];
    $lstart=$row0['laststart'];
    $lvname = $village->vname;
    if($lwref == $village->wid){

         
?>

<div id="list<?php echo $lid; ?>" class="listEntry">
				<form action="build.php?id=39&t=99&action=startRaid" method="post">
					<input type="hidden" name="action" value="startRaid">
					<input type="hidden" name="a" value="c35">
					<input type="hidden" name="sort" value="distance">
                    <input type="hidden" name="tribe" value="<?php echo $session->tribe; ?>">
					<input type="hidden" name="direction" value="asc">
					<input type="hidden" name="lid" value="<?php echo $lid; ?>">
				<div class="round spacer listTitle" >
						<div class="listTitleText">
							<img alt="del" class="del" src="img/x.gif" onclick="window.location = 'build.php?id=39&amp;t=99&amp;action=deleteList&amp;lid=<?php echo $lid; ?>';">
							<?php echo $lvname; ?> - <?php echo $lname; ?>

                            <div style="float:left;" class="openedClosedSwitch switchOpened" onclick="Travian.Game.RaidList.toggleList(<?php echo $lid; ?>);">
							</div>

						</div>
						<div class="clear"></div>
					</div>
					<div class="listContent ">
													<div class="detail">
	<table cellpadding="1" cellspacing="1" id="player" class="row_table_data borderGap">
		<thead>
			<tr>
				<td class="checkbox edit"></td>
				<td><?=farmlist0?></td>
                <td>Ew</td>
                <td><?=farmlist3?></td>
                <td><?=farmlist4?></td>
                <td><?=farmlist5?></td>
				<td class="action"></td>
			</tr>
		</thead>
		<tbody>

<?php

$sql2 = $database->query("SELECT * FROM raidlist WHERE lid = '".$lid."' ORDER BY distance ASC");
$query2 = count($sql2);
if($query2 == 0) {
    echo '<td class="noData" colspan="7">'.farmlist10.'</td>';
}else{
foreach($sql2 as $row){
$id= $row['id'];$lid = $row['lid'];$towref = $row['towref'];$x = $row['x'];$y = $row['y'];
if($village->wid == $towref){
	$distance = '0';
}else{
	$distance = $row['distance'];
}

$t1 = $row['t1'];$t2 = $row['t2'];$t3 = $row['t3'];$t4 = $row['t4'];$t5 = $row['t5'];$t6 = $row['t6'];$t7 = $row['t7'];
$t8 = $row['t8'];$t9 = $row['t9'];$t10 = $row['t10'];
$vdata = $database->getVillage($towref);

?>

<tr class="slotRow">
<td class="checkbox">
				<?php if($checked[$lid] == 0){ ?>
                <input id="slot<?php echo $id; ?>" name="slot[<?php echo $id; ?>]" type="checkbox" class="markSlot" onclick="Travian.Game.RaidList.markSlotForRaid(<?php echo $lid; ?>, <?php echo $id; ?>, this.checked);">
				<?php }else{ ?>
                <input id="slot<?php echo $id; ?>" name="slot[<?php echo $id; ?>]" type="checkbox" class="markSlot" checked>
				<?php } ?>
			</td>
			<td class="village">
            <?php

		$incoming_attacks = $database->getMovement(3,$towref,1);
		$att = '';

		if (count($incoming_attacks) > 0) {
			$inc_atts = count($incoming_attacks);
				if($incoming_attacks[$i]['attack_type'] == 2) {
					$inc_atts -= 1;
				}
			if($inc_atts > 0) {
                echo '<img class="att2" src="img/x.gif" title="Incoming Attacker" />';
			}
		}
        ?>
				<label for="slot<?php echo $id; ?>">
                <?php
                	$type = $database->getVillageType($towref);
					$oasistype = !$type;
                    if($oasistype != 0){
                        
                ?>
				
                <a href="karte.php?d=<?php echo $towref; ?>">oasis</a>
                <!--
                <span class="coordinates coordinatesWithText">
                <span class="coordText">Oasis</span>
                <span class="coordinatesWrapper">
				<span class="coordinateX">(<?php echo $database->getCoor($towref)['x']; ?></span>
                <span class="coordinatePipe">|</span>
				<span class="coordinateY"><?php echo $database->getCoor($towref)['y']; ?>)</span>
                </span></span>-->
                <?php }else{ ?>
                    <a href="karte.php?d=<?php echo $towref; ?>"><?php echo $vdata['name']; ?></a>
                <!--<span class="coordinates coordinatesWithText">
                <span class="coordText"><?php echo $vdata['name']; ?></span>
                </span>-->
                <?php } ?>

                <span class="clear">‎</span>
                </label>
			</td>
			<td class="ew"><?php echo $vdata['pop']; ?></td>
			<td class="distance"><?php echo $distance; ?></td>
			<td class="troops">

<?php
for($i=1;$i<=10;$i++){
    if(${'t'.$i} != 0){
        $u=($session->tribe-1)*10+$i;
        echo '<div class="troopIcon"><img class="unit u'.$u.'" title="" src="img/x.gif"><span class="troopIconAmount">'.${'t'.$i}.'</span></div>'; }
}
	?>



            </td>
			<td class="lastRaid">
<?php
$limits = "ntype<8";
$getnotice = $database->query("SELECT * FROM ndata WHERE $limits AND toWref = '".$towref."' AND uid = '".$session->uid."' ORDER BY id DESC Limit 1");

foreach($getnotice as $row2){
	$dataarray = explode(",",$row2['data']);
	$type2 = $row2['ntype'];
    echo "<img src=\"".GP_LOCATION2."x.gif\" class=\"iReport iReport".$row2['ntype']."\" title=\"\"> ";

    $allres = ($dataarray[30]+$dataarray[29]+$dataarray[27]+$dataarray[28]);
    $carry = $dataarray[31];
    if($row2['ntype']==3){$allres=$carry=0;}

    if ($allres == 0) {
    echo "<img title=\"bounty: ".$allres." resouces max carry: ".$carry." resouces.\" src=\"".GP_LOCATION2."x.gif\" class=\"carry empty\">";

    } elseif ($allres != $carry) {
    echo "<img title=\"bounty: ".$allres." resouces. max carry: ".$carry." resouces.\" src=\"".GP_LOCATION2."x.gif\" class=\"carry half\">";

    } else {
    echo "<img title=\"bounty: ".$allres." resouces. max carry: ".$carry." resouces.\" src=\"".GP_LOCATION2."x.gif\" class=\"carry full\">";
    }

    $date = $generator->procMtime($row2['time']);
    echo "<a href=\"berichte.php?id=".$row2['id']."\">".$date[0]." ".date('H:i',$row2['time'])."</a> ";
}
?>
				<div class="clear"></div>
			</td>
			<td class="action">
            
				<a class="arrow" href="#" onclick="window.location.href = 'build.php?gid=16&t=99&action=showSlot&eid=<?php echo $id; ?>&sort=distance&direction=asc'; return false;">Modification</a>
			</td>
            </tr>

<?php
}

}
?>

</tbody>
	</table>
    <div class="markAll">
		<?php if($checked[$lid] == 0){ ?>
		<input type="checkbox" id="raidListMarkAll<?php echo $lid; ?>" class="markAll" onclick="Travian.Game.RaidList.markAllSlotsOfAListForRaid(<?php echo $lid; ?>, this.checked);">
		<?php }else{ ?>
        <input type="checkbox" id="raidListMarkAll<?php echo $lid; ?>" class="markAll" onclick="window.location.href = '?id=39&t=99';" checked>
		<?php } ?>
        <label for="raidListMarkAll<?php echo $lid; ?>">Iron</label>
    </div>

	<div class="addSlot">
        <button type="button" onclick="window.location.href = 'build.php?id=39&t=99&action=showSlot&lid=<?php echo $lid; ?>'; return false;" class="textButtonV1 green build">
            <div class="button-container addHoverClick ">
                <div class="button-background">
                    <div class="buttonStart">
                        <div class="buttonEnd">
                            <div class="buttonMiddle"></div>
                        </div>
                    </div>
                </div>
				
                <div class="button-content"><?= farmlist6 ?></div>
            </div>
        </button>
        <br>
                            
                             <button type="submit" class="textButtonV1 green build " name ="anoone" value="deleteselected"  onclick="window.open('build.php?gid=16&t=99&action=addSlot&lid=<?php echo $lid;?>','_self');"
                                   >
                                <div class="button-container addHoverClick">
                                    <div class="button-background">
                                        <div class="buttonStart">
                                            <div class="buttonEnd">
                                                <div class="buttonMiddle"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-content">حذف فارم های انتخاب شده</div>
                                </div>
                            </button>
							
                            <br>
							
                               <button type="submit" class="textButtonV1 green build " name ="anoone11" value="deleteselected"  onclick="window.location.href('build.php?gid=16&t=99&action=addSlot&lid=<?php echo $lid;?>','_self');"
                                   >
                                <div class="button-container addHoverClick">
                                    <div class="button-background">
                                        <div class="buttonStart">
                                            <div class="buttonEnd">
                                                <div class="buttonMiddle"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-content">ویرایش فارم های انتخاب شده</div>
                                </div>
                            </button>
    </div>
                                                    </div>
<div class="clear"></div>

<div class="troopSelection">

<?php
$start = ($session->tribe-1)*10+1;
$end = ($session->tribe*10);
$un = 1;
for($i=$start;$i<=$end;$i++){
	echo '<span class="troopSelectionUnit">
			<img class="unit u'.$i.'" title="'.$technology->unarray[$i].'" src="img/x.gif">
            <span class="troopSelectionValue">0</span>
		</span>';
}

?>
		<div class="clear"></div>
</div>

                        <button type="submit" class="textButtonV1 green build <?=(($lstart<time()-farmList)?'':'disabled')?>" <?=(($lstart<time()-farmList)?'':'onclick="return false;"')?>>
                            <div class="button-container addHoverClick ">
                                <div class="button-background">
                                    <div class="buttonStart">
                                        <div class="buttonEnd">
                                            <div class="buttonMiddle"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-content"><?= farmlist7 ?>

                                    <?php if($lstart>time()-farmList){?><span id='timer<?=$timer?>'><?=$generator->getTimeFormat($lstart+farmList-time())?></span>
            <?php } ?>
            </div>
                            </div>
                        </button>
                    </div>
                </form>

</div>
<br>
<?php
            $timer++;

    }else{ ?>
<div id="list<?php echo $lid; ?>" class="listEntry">
<div class="round spacer listTitle" onclick="Travian.Game.RaidList.toggleList(<?php echo $lid; ?>);">
						<div class="listTitleText">
							<img alt="del" class="del" src="img/x.gif" onclick="
										window.location = 'build.php?id=39&amp;t=99&amp;action=deleteList&amp;lid=<?php echo $lid; ?>';
							">
							<?php echo $lvname; ?> - <?php echo $lname; ?>
						</div>
						<div class="openedClosedSwitch switchClosed"><?=farmlist1?></div>
						<div class="clear"></div>
					</div>
					<div class="listContent hide">
											</div>
			</div>
<?php } }?>
<div id="raidList"><div class="options"><a class="arrow" href="#" onclick="Travian.Game.RaidList.showCreateNewList()">افزودن لیست جدید</a></div></div>
<?php
}


//на сinорачиinание разinорачиinание
if(!$database->getVilFarmlist($village->wid)){

    ?>
    <script type="text/javascript">
        window.addEvent('domready', function()
        {
            Travian.Game.RaidList.setData([]);
        });
    </script>
<?php }else{ ?>
    <script type="text/javascript">
        window.addEvent('domready', function()
        {
            Travian.Game.RaidList.setData({
                <?php
                $result = $database->query("SELECT * FROM farmlist WHERE wref = '".$village->wid."'");
                $query1 = count($result);
                $NUM1 = 1;
                foreach($result as $row){
                $lid = $row['id'];

                ?>
                "<?php echo $lid; ?>":{
                    "troops":{"1":<?php echo $village->unitarray['u1']; ?>,"2":<?php echo $village->unitarray['u2']; ?>,"3":<?php echo $village->unitarray['u3']; ?>,"4":<?php echo $village->unitarray['u4']; ?>,"5":<?php echo $village->unitarray['u5']; ?>,"6":<?php echo $village->unitarray['u6']; ?>,"7":<?php echo $village->unitarray['u7']; ?>,"8":<?php echo $village->unitarray['u8']; ?>,"9":<?php echo $village->unitarray['u9']; ?>,"10":<?php echo $village->unitarray['u10']; ?>,"11":<?php echo $village->unitarray['u11']; ?>},
                    "directions":{"village":"none","ew":"none","distance":"asc","troops":"none","lastRaid":"none"},
                    "slots":{<?php
$result3 = $database->query("SELECT * FROM raidlist WHERE lid = '".$lid."'");
$query2 = count($result3);
$NUM2 = 1;
foreach($result3 as $row3){
$id = $row3['id'];
$t1 = $row3['t1'];$t2 = $row3['t2'];$t3 = $row3['t3'];$t4 = $row3['t4'];$t5 = $row3['t5'];$t6 = $row3['t6'];$t7 = $row3['t7'];
$t8 = $row3['t8'];$t9 = $row3['t9'];$t10 = $row3['t10'];

echo '
						"'.$id.'":{"troops":{"1":'.$t1.',"2":'.$t2.',"3":'.$t3.',"4":'.$t4.',"5":'.$t5.',"6":'.$t6.',"7":'.$t7.',"8":'.$t8.',"9":'.$t9.',"10":'.$t10.',"11":0}}';
if($NUM2 != $query2){
	echo ',';
}
$NUM2++;
}
echo '
					}
				}';
if($NUM1 != $query1){
echo ',
';
}
$NUM1++;
}
?>

                    });

        });
    </script>
    <?php if(isset($_GET['p'])){
        echo '<br><span style="color:red;">You are still under beginner protectors</span>';
    }
 } ?>
