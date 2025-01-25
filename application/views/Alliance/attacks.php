<?php
$aid = $session->alliance;

$allianceinfo = $database->getAlliance($aid);
//echo "<h1>".$database->RemoveXSS($allianceinfo['tag'])." - ".$database->RemoveXSS($allianceinfo['name'])."</h1>";
include("alli_menu.php");
?>
    <div class="boxes boxesColor gray reportFilter offDef">
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
            <button type="button" class="iconFilter " title="Attaker"
                    onclick="window.location.href = 'allianz.php?s=3&amp;f=31&amp;fn=0'; return false;"><img
                    src="img/x.gif" class="att_all" alt="att_all"/></button>
            <button type="button" class="iconFilter " title="Defender"
                    onclick="window.location.href = 'allianz.php?s=3&amp;f=32&amp;fn=0'; return false;"><img
                    src="img/x.gif" class="def_all" alt="def_all"/></button>
        </div>
    </div>
    <div class="boxes boxesColor gray reportFilter unimportant">
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
            <button type="button" class="iconFilter "
                    title="Don´t show attacks of own alliance (under 100 units, no losses)."
                    onclick="window.location.href = 'allianz.php?s=3&amp;f=-1&amp;fn=1'; return false;"><img
                    src="img/x.gif" class="filterNews" alt="filterNews"/></button>
        </div>
    </div>
    <div class="clear"></div>
<?php
	if($_GET['f']==31){
		include_once "application/views/Alliance/attack-attacker.php";
    }elseif($_GET['f']==32){
		include_once "application/views/Alliance/attack-defender.php";
    }else{
$limit = "ntype!=21 and ntype!=20 and ntype!=8 AND ntype!=9 AND ntype!=10 AND ntype!=11 AND ntype!=12 AND ntype!=13 AND ntype!=14 AND ntype!=15 and ntype!=25 and ntype!=26 and ntype!=27";
$sql = $database->GetAllyNoticeforAlly($limit,$session->alliance);
$query = count($sql);
$outputList = '';
$name = 1;
if($query == 0) {
    $outputList .= "<td colspan=\"4\" class=\"none\">".REPORT_NO."</td>";
}else{
foreach($sql as $row){
    for($i=49;$i>=1;$i--){
        $row['topic'] = preg_replace("/REP_С".$i."/",constant('REP_С'.$i),$row['topic']);
        $row['data'] = preg_replace("/REP_С".$i."/",constant('REP_С'.$i),$row['data']);
        $row['data']= preg_replace("/Bd_".$i."_Bd/",$database->procResType($i),$row['data']);
    }
	$dataarray = explode(",",$row['data']);
    $id = $row["id"];
    $uid = $row["uid"];
	$toWref = $row["toWref"];
    $ally = $row["ally"];
    $ntype = $row["ntype"];
    $time = $row["time"];



    $outputList .= "<tr>";
	$outputList .= "<td class=\"sub\">";
if($ntype==4 || $ntype==5 || $ntype==6 || $ntype==7){
    $type2 = '32';
}else{
    $type2 = '31';
}
    $userid=$dataarray[37]; //1.php
       if($ntype==3){$userid=$dataarray[23];}
	$outputList .= "<a href=\"allianz.php?s=3&f=".$type2."\">";
    $type =  $ntype;
    $outputList .= "<img src=\"".GP_LOCATION2."x.gif\" class=\"iReport iReport$type\" title=\"icon\">";
    $outputList .= "</a>";
    $outputList .= "<div><a href=\"berichte.php?id=".$id."\">";
    $outputList .= $row['topic'];
if($ntype==1 or $ntype==2 or $ntype==3 or $ntype==18 or $ntype==19){
    	$getUserAlly = $database->getUserField($userid,'alliance',0);
    }else{
    	$getUserAlly = $database->getUserField($dataarray[0],'alliance',0);
    }
    $getAllyName = $database->RemoveXSS($database->getAllianceName($getUserAlly));

    if($getUserAlly==$session->alliance || !$getUserAlly){
    	$allyName = "-";
    }else{
    	$allyName = "<a href=\"allianz.php?aid=".$getUserAlly."\">".$getAllyName."</a>";
    }

    $outputList .= "<td class=\"al\">".$allyName."</td>";
    $date = $generator->procMtime($time);
    $outputList .= "<td class=\"dat\">".$date[0]." ".date('H:i',$time)."</td>";
	$outputList .= "</tr>";

	$name++;
}
}
?>
<table cellpadding="1" cellspacing="1" id="offs">
<thead>
<tr>
<td><?php echo OVERVIEW1; ?></td>
<td><?php echo OVERVIEW6; ?></td>
<td><?php echo ALLIANCE11; ?></td>
</tr>
</thead>

<tbody>
<?php echo $outputList; ?>
</tbody>
</table>
<?php } ?>