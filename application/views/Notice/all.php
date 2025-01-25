
    <button name="realAll" type="submit" value="realAll" id="realAll" class="textButtonV1 green markAsRead">
        <div class="button-container addHoverClick ">
            <div class="button-background">
                <div class="buttonStart">
                    <div class="buttonEnd">
                        <div class="buttonMiddle"></div>
                    </div>
                </div>
            </div>
            <div class="button-content">
            <?php echo markASRead; ?></div></div>
    </button>

    <?php if(!$session->sit && $session->right['s6']) { ?>
    <button name="del_x" type="submit" value="del" id="del" class="textButtonV1 green markAsRead">
        <div class="button-container addHoverClick ">
            <div class="button-background">
                <div class="buttonStart">
                    <div class="buttonEnd">
                        <div class="buttonMiddle"></div>
                    </div>
                </div>
            </div>
            <div class="button-content">
                <?=farmlist20?></div></div>
    </button>
<?php } ?>

</form>
<p>

        <?php //if($session->plus) { ?>
            <div id="markAll">
                <input class="check" type="checkbox" id="sAll" name="s10" onclick="
				$(this).up('form').getElements('input[type=checkbox]').each(function(element)
				{
					element.checked = this.checked;
				}, this);
			">
                <span><label for="sAll"><?=HEROAC28?></label></span>
            </div>
        <?php //} ?>
	
<?php 
    if($session->qData['quest'] == 12 && $session->qData['step1'] == 0){ // Quest
        $database->query("UPDATE quests SET step1 = 1 WHERE userid = ".$session->uid."");
        header('Location: berichte.php');
    }
    $linkooon11="";
    $y=0;
    foreach($_GET as $t=>$x){
       // die($t);
        if( $t != "s" ){
            if($y==0){
                 $linkooon11=$linkooon11."?";
            }
        $linkooon11=$linkooon11.$t."=".$x."&";
    }else{
        $y++;
    }
    
    }
    // die(var_dump($linkooon11));
   $linkooon11 =substr($linkooon11, 0, -1);
  if(!empty($linkooon11)) {
    $linkooon11=$linkooon11."&";
  }
  else {$linkooon11="?";}
 //var_dump($linkooon11);die();
?>

<form method="post" action="berichte.php" name="msg">
<input name="page" hidden value="<?php echo $_GET['s']; ?>">

<table cellpadding="1" cellspacing="1" id="overview" class="row_table_data">










	<p>



	<thead>
		<tr>
			<th colspan="2"><?=rpts6?>:</th>
			<th class="dat"><?=rpts8?></th>
		</tr>
	</thead>
    <tbody>


<?php
    if(isset($_GET['s'])) {
        $s = $_GET['s'];
    }
    else {
        $s = 0;
    }

    $filt="";
    if(!isset($_GET['t'])) {
        $_GET['t']=0;
    }
    if(isset($_GET['t'])) {
        if($_GET['t'] == 1) {
            if(!isset($_GET['tiid'])){
                $type = array(4, 5, 6, 7);
            }else{
                if($_GET['tiid']==1){
                    $type = array(4);
                }
                if($_GET['tiid']==2){
                    $type = array(5);
                }
                if($_GET['tiid']==3){
                    $type = array(6);
                }
                if($_GET['tiid']==4){
                    $type = array(7);
                }
               

            }
            

        }
        if($_GET['t'] == 0){
            if(!isset($_GET['tiid'])){
                $type = array();
            }else{
                if($_GET['tiid'] == 1) {
                    $type = array(1, 7);
                }
                if($_GET['tiid'] == 2) {
                    $type = array(4, 2, 3, 0,5,6);
                }
                if($_GET['tiid'] == 3) {
                    $type = array(4, 5, 6, 7, 5, 6, 7);
                }
                if($_GET['tiid'] == 4) {
                    $type = array(1, 2, 3, 0);
                }
                if($_GET['tiid'] == 5) {
                    $type = array(9,10, 11,12, 13,14,15,16,17,18,19,20,21,22,23,24,25);
                }
            }
           
    
        }
        if($_GET['t'] == 2) {
            $type = array(10, 11, 12, 13);
            
        }
        if($_GET['t'] == 3) {
            
            if(!isset($_GET['tiid'])){
                $type = array(1, 2, 3);
            }else{
                if($_GET['tiid']==1){
                    $type = array(1);
                }
                if($_GET['tiid']==2){
                    $type = array(2);
                }
                if($_GET['tiid']==3){
                    $type = array(3);
                }
                
               

            }
        }
        if($_GET['t'] == 4) {
            $type = array(0, 18, 19, 20, 21);
        }

        if(!empty($type)){
            $filt=" and ntype IN (".implode(",",$type).") ";
        }else{
            $filt="";
        }
        
    }
    //var_dump($filt);die();
    $nt = $database->getNotics($session->uid,$s,$s+10,$filt);
    $nnot=$database->getNoticn($session->uid,$filt);
   // var_dump($nnot);die();
      $name = 1;
	  $count = 0;
    for($i=1;$i<=10;$i++) {
        for($k=49;$k>=1;$k--){
            $nt[$i-1]['topic'] = preg_replace("/REP_С".$k."/",constant('REP_С'.$k),$nt[$i-1]['topic']);
        }

        if(is_numeric($nt[$i-1]['ntype'])){
            if($nnot >= $i) {
            echo "<tr>
            <td class=\"sel\">
                <input class=\"check\" type=\"checkbox\" name=\"n".$i."\" value=\"".$nt[$i-1]['id']."\" />
            </td>
            <td class=\"sub\">";
                $type =  $nt[$i-1]['ntype'];
                if($type==25 or $type==26 or $type==27){
                $type-=21;

            }

        $all=$database->getNotice5($nt[$i-1]['id']); // Report Data
        $dataarray = explode(",",$all['data']);
    echo '<img src="img/x.gif" class="messageStatus '.($nt[$i-1]['viewed'] == 0 ? 'messageStatusUnread' : 'messageStatusRead').' ">';
     
    
    echo "<img src=\"".GP_LOCATION2."x.gif\" class=\"iReport iReport$type\" alt=\"\" title=\"\" />";

    // NoBody - need to add code to this
    //echo '<a class="reportInfoIcon" style="padding:0 !important;" href="berichte.php?id=50"><img src="assets/img/x.gif" class="reportInfo carry half"></a>';
    echo '<a class="reportInfoIcon" style="padding:0 !important;" href="berichte.php?id='.$nt[$i-1]['id'].'">';
    if ($type == 21){ // Hero
      //  echo $type;die();
        if($dataarray[1]){
            if($dataarray[1] == 'dead'){
                echo '<div class="heroStatusMessage" style="padding:0 !important;"><img alt="" title="Hero status" src="img/x.gif" class="heroStatus101"></div>';
            }else{
                $btype = $dataarray[1];
                $type1 = $dataarray[2];
              //  echo $btype."<br>".$type;die();
                if($btype < 16){
                    
                    $typeArray = array("","helmet","body","leftHand","rightHand","shoes","horse","bandage25","bandage33","cage","scroll","ointment","bucketOfWater","bookOfWisdom","lawTables","artWork");
                    $ddd= '<img src="img/x.gif" class="reportInfo itemCategory itemCategory_'.$typeArray[$btype].'" title="'.$Travian->getItemData($btype, $type1)['name'].'" style="position: inherit;height: 25px;margin-left: -5px;">';
                    echo $ddd;
                    //var_dump($ddd) ;die();
                     //echo ' '.$name.' ('.$dataarray[3].'x)';
                }else if($btype == 16){ // Troops
                    $constantName = 'U' . (($session->tribe - 1) * 10 + $type1);
$value = constant($constantName);
                    echo '<img src="img/x.gif" class="unit u'.(($session->tribe-1)*10+$type1).'" title="x'.$dataarray[3].$value.'">';
                    //echo ' ('.$dataarray[3].'x)';
                $outputList .= "<img title=\"(".$dataarray[3]."x )\" src=\"".GP_LOCATION2."x.gif\" class=\"unit u".(($session->tribe-1)*10+$type1)."\"\">";
                }else{
                    echo '<img src="img/x.gif" class="silver" title="'.$dataarray[3].' silver">';
                }
            }
        }
    }elseif(in_array($type , array(1,2,4,5,6,7)) ){
    if ($dataarray[29]+$dataarray[30]+$dataarray[27]+$dataarray[28] == 0) {
        echo"<img title=\"";
        echo ($dataarray[29]+$dataarray[30]+$dataarray[27]+$dataarray[28])."/".$dataarray[31];
        echo"\" src=\"".GP_LOCATION2."x.gif\" class=\"reportInfo carry empty\">";
    } elseif ($dataarray[29]+$dataarray[30]+$dataarray[27]+$dataarray[28] != $dataarray[31]) {
        echo "<img title=\"";
        echo ($dataarray[29]+$dataarray[30]+$dataarray[27]+$dataarray[28])."/".$dataarray[31];
        echo"\" src=\"".GP_LOCATION2."x.gif\" class=\"reportInfo carry half\">";
    } else {
        echo"<img title=\"";
        echo ($dataarray[29]+$dataarray[30]+$dataarray[27]+$dataarray[28])."/".$dataarray[31];
        echo"\" src=\"".GP_LOCATION2."x.gif\" class=\"reportInfo carry full\">";
    }

    }
    echo '</a>';
    echo "<div><a href=\"berichte.php?id=".$nt[$i-1]['id']."\">".$nt[$i-1]['topic']."</a> ";

    $date = $generator->procMtime($nt[$i-1]['time']);
	echo "</div></td><td class=\"dat\">".$date[0]." ".$date[1]."</td></tr>";

        $name++;
        if($nnot <= $i){break;}
    }
    }else{$nnot--;}
    }
    if($nnot <= 0) {
     echo "<td colspan=\"3\" class=\"noData\">".rpts14."</td></tr>";
    }
    ?>
    </tbody>
</table>
    <div class="footer">
        <?php //if($session->plus) { ?>
            <div id="markAll">
                <input class="check" type="checkbox" id="sAll" name="s10" onclick="
				$(this).up('form').getElements('input[type=checkbox]').each(function(element)
				{
					element.checked = this.checked;
				}, this);
			">
                <span><label for="sAll"><?=HEROAC28?></label></span>
            </div>
        <?php //} ?>

        <div class="paginator">
        <?php
$t = isset($_GET['t'])?"&t=".$_GET['t']:'';
        if(!isset($_GET['s']) && $nnot < 10) {

            echo "&laquo;&raquo;";
        }
        else if (!isset($_GET['s']) && $nnot > 10) {

            echo "&laquo;".STATISTIC34." | <a href=\"".$linkooon11."s=10".$t."\">".STATISTIC35."&raquo;</a>";

        }
        else if(isset($_GET['s']) && $nnot > $_GET['s']) {

            if($nnot > ($_GET['s']+10) && $_GET['s']-10 < $nnot && $_GET['s'] != 0) {
                echo "<a href=\"".$linkooon11."s=".($_GET['s']-10).$t."\">&laquo;".STATISTIC34."</a> | <a href=\"".$linkooon11."s=".($_GET['s']+10).$t."\"> ".STATISTIC35."&raquo;</a>";
            }
            else if($nnot > $_GET['s']+10) {
                echo "&laquo;".STATISTIC34." | <a href=\"".$linkooon11."s=".($_GET['s']+10).$t."\"> ".STATISTIC35."&raquo;</a>";
            }
            else {

                echo "<a href=\"".$linkooon11."s=".($_GET['s']-10).$t."\">&laquo;".STATISTIC34."</a> | ".STATISTIC35."&raquo;";
            }
        }

        ?>
            </div>
        <div class="clear"></div>
    </div>
    <button name="realAll" type="submit" value="realAll" id="realAll" class="textButtonV1 green markAsRead">
        <div class="button-container addHoverClick ">
            <div class="button-background">
                <div class="buttonStart">
                    <div class="buttonEnd">
                        <div class="buttonMiddle"></div>
                    </div>
                </div>
            </div>
            <div class="button-content">
            <?php echo markASRead; ?></div></div>
    </button>

    <?php if(!$session->sit && $session->right['s6']) { ?>
        <button name="del_x" type="submit" value="del" id="del" class="textButtonV1 green markAsRead">
        <div class="button-container addHoverClick ">
            <div class="button-background">
                <div class="buttonStart">
                    <div class="buttonEnd">
                        <div class="buttonMiddle"></div>
                    </div>
                </div>
            </div>
            <div class="button-content">
                <?=farmlist20?></div></div>
    </button>
    <button name="delNAll" type="submit" value="delAll" id="delAll" style="float:left;" class="textButtonV1 green markAsRead">
        <div class="button-container addHoverClick ">
            <div class="button-background">
                <div class="buttonStart">
                    <div class="buttonEnd">
                        <div class="buttonMiddle"></div>
                    </div>
                </div>
            </div>
            <div class="button-content">
                حذف کلیه گزارشات</div></div>
    </button>
<?php } ?>

</form>

