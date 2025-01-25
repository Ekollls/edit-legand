<?php
if(!is_numeric($_POST['lid'])){ exit;}

$fastertroops = $database->checkArtefactsEffects($session->uid, $village->wid, 2);
    $lid = $_POST['lid'];
    $getFLData = $database->getFLData($lid);
    if(isset($_POST['anoone11'])){
        $slots = $_POST['slot'];
        unset($_SESSION['someslots']);
   $_SESSION['someslots']=$slots;
             header("Location: build.php?gid=16&t=99&action=editsome");
           die;
    }elseif(isset($_POST['anoone'])){
        $slots = $_POST['slot'];
        $lid = $_POST['lid'];
        $getFLData = $database->getFLData($lid);
        $tribe = $database->getUserField($getFLData["owner"], "tribe", 0);
        $start = ($tribe - 1) * 10;
        $end = ($tribe * 10);
        $q = "SELECT * FROM raidlist WHERE lid = " . $lid . "";
        $sql = $database->query($q) ;
       
        foreach ($sql as $row ) {
      // die(var_dump($row));
           $sid=$row['id'];
                if ($slots[$sid] == 'on') {
                    
                       $database->delSlotFarm($sid);

                
            }
        }
          header("Location: build.php?id=39&t=99");
        die;
    }elseif(($getFLData['laststart']<time()-farmList) ){
    $sql = "SELECT * FROM raidlist WHERE lid = '".$lid."' order by id asc";
	$array = $database->query($sql);
    $eigen = $database->getCoor($getFLData['wref']);
    $from = array('x'=>$eigen['x'], 'y'=>$eigen['y']);
    foreach($array as $row){
        $num = $database->getnummove($getFLData['wref']);
        // $ttt1 = $num + $ixx;
         if ($num >= 120) {
             break;

         }
	$sql1 = $database->query("SELECT * FROM units WHERE vref = '".$getFLData['wref']."'");
        $sql1=$sql1[0];
        $sid = $row['id'];
        $wref = $row['towref'];
        $allinf=$database->getUserInfoByfl($wref);

        $userAccess = $allinf['access'];
        
        
		if($userAccess != '0'  && $userAccess != '9' && (!$allinf['protect'] || $allinf['ptime']<time())){
            $uniok=true;

            for($i=1;$i<=10;$i++){
                if($row['t'.$i]>0){
                    if($sql1['u'.$i]<$row['t'.$i]){
                        $uniok=false;
                        //die(punktxuev14);
                    }
                }
            }

        if($allinf['protect'] || $userAccess == 9){
            $uniok=false;
        }
/* Array ( [access] => 2 [x] => 21 [y] => -13 [occupied] => 1 [regtime] => 1593178492 [protect] => 0 )
*/
        //echo $allinf['occupied'];
        //echo "<br>";

        // NoBody
        if($allinf['occupied'] == 1 
            && $session->protection > time()
            && $allinf['id'] != 3){
            $uniok=false;
        }

        //print_r($allinf); die();

        if($uniok && $_POST['slot'][$sid]=='on'){
            $database->query("UPDATE farmlist SET `laststart`='".time()."' WHERE `id`=:I",array('I'=>$_POST['lid']));
            $to = array('x'=>$allinf['x'], 'y'=>$allinf['y']);
            
            $speeds = array();

            //find slowest unit.            
            for ($i = 1; $i <= 10; $i++) {
                if ($row['t'.$i] > 0) {
                    global ${"u" . (($session->tribe - 1) * 10 + $i)};
                    $unitarray = ${"u" . (($session->tribe - 1) * 10 + $i)};
                    $speeds[] = $unitarray['speed'];

                }
            }

			$time = round($database->procDistanceTime($from,$to,min($speeds),1)/$fastertroops);

            $reference = $database->addAttack(($getFLData['wref']),$row['t1'], $row['t2'], $row['t3'], $row['t4'], $row['t5'], $row['t6'], $row['t7'], $row['t8'], $row['t9'], $row['t10'],0,4,0,0,0,0);
            if($database->addMovement(3, $getFLData['wref'], $wref, $reference, time(), ($time + time()))){

            $database->insertQueueBC($reference, 1, time(), ($time + time()));
            $database->modifyUnit(
                $getFLData['wref'],
                array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                array($row['t1'], $row['t2'], $row['t3'], $row['t4'], $row['t5'], $row['t6'], $row['t7'], $row['t8'], $row['t9'], $row['t10']),
                0
            );
            }

    }
	}
    }
    header("Location: build.php?id=39&t=99");
}else{
    //echo "aa";
    //header("Location: build.php?id=39&t=99&p");
}

