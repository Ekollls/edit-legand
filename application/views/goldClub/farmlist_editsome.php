<?php
//var_dump($_SESSION['someslots']);
$slots = $_SESSION['someslots'];
//var_dump($slots);die();
        foreach($slots as $k=>$v){
        $ddd=$k;
        break;
        }
        $_GET['eid']=$ddd;
        //echo $_GET['eid'];
    if (isset($_GET['action']) == 'editSlot' && $_GET['eid']) {
        $eiddata = $database->getRaidList($_GET['eid']);
      
        
        $x = $eiddata['x'];
        $y = $eiddata['y'];
        $t1 = $eiddata['t1'];
        $t2 = $eiddata['t2'];
        $t3 = $eiddata['t3'];
        $t4 = $eiddata['t4'];
        $t5 = $eiddata['t5'];
        $t6 = $eiddata['t6'];
        $t7 = $eiddata['t7'];
        $t8 = $eiddata['t8'];
        $t9 = $eiddata['t9'];
        $t10 = $eiddata['t10'];
    }

    if (isset($_POST['action']) &&  $_POST['action']== 'editSlot' && $_SESSION['someslots']) {

        
        //echo $ddd;
         $q = "SELECT * FROM `raidlist` WHERE `id` = '" . $ddd . "' ";
       
        $sql = $database->query($q) ;
        //$sql=mysqli_fetch_assoc($sql);
       // 
        $lid = $sql[0]['lid'];
       // var_dump( $sql[0]); 
 //die();
        $q = "SELECT * FROM raidlist WHERE lid = " . $lid . "";
        $sql = $database->query($q) ;
      
        foreach ($sql as $row ) {
            $sid = $row['id'];
            $wref = $row['towref'];
 //die(var_dump($row));
            
                if ($slots[$sid] == 'on') {
                
                      $database->editSlotFarmTropps($sid, $_POST['t1'], $_POST['t2'], $_POST['t3'], $_POST['t4'], $_POST['t5'], $_POST['t6'], $_POST['t7'], $_POST['t8'], $_POST['t9'], $_POST['t10']);

                   
                }
            
        }
        //var_dump( $_POST);
     
         header("Location: build.php?id=39&t=99");
         die;         
        
                  
                
}

?>


<div id="raidListSlot">
    <h4>ویرایش فارم ها</h4>
    <font color="#FF0000"><b>
            <?php echo $errormsg; ?>
        </b></font>

    <form id="edit_form" action="build.php?gid=16&t=99&action=editsome" method="post">
      
            <div class="boxes-tl"></div>
            <div class="boxes-tr"></div>
            <div class="boxes-tc"></div>
            <div class="boxes-ml"></div>
            <div class="boxes-mr"></div>
            <div class="boxes-mc"></div>
            <div class="boxes-bl"></div>
            <div class="boxes-br"></div>
            <div class="boxes-bc"></div>
            <div class="boxes-contents cf">

                <?php
                    $getlid = $database->getRaidList($_GET["eid"]);
                    $lid2 = $getlid['lid'];
                ?>
                <input type="hidden" name="action" value="editSlot">
                <input type="hidden" name="eid" value="<?php echo $_GET['eid']; ?>">
                <input type="hidden" name="lid" value="<?php echo $lid2; ?>">

               
         
        </div>
        <?php 
        include ("application/views/goldClub/trooplist.php");
       ?>
        <button type="submit" value="save" class="green build" name="s1" id="btn_save">
            <div class="button-container addHoverClick">
                <div class="button-background">
                    <div class="buttonStart">
                        <div class="buttonEnd">
                            <div class="buttonMiddle"></div>
                        </div>
                    </div>
                </div>
                <div class="button-content"><?php echo SAVE; ?></div>
            </div>
        </button>
        &nbsp;
       
    </form>
</div>
