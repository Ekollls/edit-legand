<?php

    if(ENDLESS){
        $result=$database->Chekwwlvl();
    $wid0=$database->query("SELECT wref FROM vdata WHERE `owner`= 3 and `capital`='1'");
    $wid=$wid0[0]['wref'];
?>
    <h4 class="round"><?php echo STATISTIC27; ?></h4>
<table cellpadding="1" cellspacing="1" id="player" class="row_table_data borderGap">
        <thead>
		<tr>
            <td></td>
            <td><?php echo OVERVIEW1; ?></td>
            <td><?php echo OVERVIEW17; ?></td>
           <?php /* <td style="disply:none;"><?php echo OVERVIEW6; ?></td>  */ ?>
            <td><?php echo LEVEL; ?></td>
            
            <td>زمان نگه داری از شگفتی</td>
            <td>امتیاز نگه داری از شگفتی</td>
            <td><?=ATTACK?></td>

        </T>
    </thead>
    <tbody>
        <?php
        $cont = 1;
        foreach ($result as $row)
        {
            $days = intval($row['endless_time'] / 86400);

            $hours = intval(($row['endless_time'] - ($days * 86400)) / 3600);

            $minutes = intval(($row['endless_time'] - (($days * 86400) + ($hours * 3600))) / 60);

            // Construct the text output
            $text = ($days > 0) ? $days . ' روز <br>' : '  ';
           
            $ally = $database->getAlliance($row['alliance']);
$att0=$database->query("SELECT endtime FROM movement WHERE `to`='".$row['vref']."'  and `proc`='0' ORDER BY endtime ASC ");

        ?>
            <tr class="hover">
                <td class="ra"><?php echo $cont; $cont++; ?>.</td>
                <td class="pla"><?php echo "<a href=\"karte.php?d=" . $row['vref'] . "&amp;c=" . $generator->getMapCheck($row['vref']) . "\">"; ?><?php echo $row['username']; ?></a></td>
                <td class="nam"><?php echo $row['wwname']; ?></td>
                <?php /* <td class="al" style="disply:none;" ><a href="allianz.php?aid=<?php echo $ally['id']; ?>"><?php echo $ally['tag']; ?></a></td>   */?>
                <td class="lev"><?php echo $row['f99']; ?></td>
                
                    <td ><?php echo $text.$generator->getTimeFormat($row['endless_time']-($days*86400)); ?></td>

                    <td><?php
                    if(count($att0)>0){
echo '<img src="img/x.gif" class="att1"  title="'.$generator->getTimeFormat($att0[0]["endtime"]-time()).'" />('.count($att0).')';
                    }
                ?>
                    </td>
           </tr>
        <?php
        }?>
    </tbody>
    </table>
        <?php
    }else{
        $result=$database->Chekwwlvl();
        $wid0=$database->query("SELECT wref FROM vdata WHERE `owner`= 3 and `capital`='1'");
        $wid=$wid0[0]['wref'];
    ?>
    <h4 class="round">جوایز سرور</h4>
<table cellpadding="1" cellspacing="1" id="world_player" class="transparent">
    <table cellpadding="1" cellspacing="1" id="world_tribes" class="world">
        <thead>
        <tr class="hover">
            <td><b>جوایز</td>
            <td><b>مقدار</td>
        </tr>
        <tr>
            <th>برنده بازی (واندر 100)</th>
            <td><?php echo WINNERGOLD_ADD;?> طلا<br></td>
        </tr>
        <tr>
            <th>نفر دوم (واندر زیر 100)</th>
            <td>   <?php echo ND2GOLD_ADD;?> طلا 
            </td>
        </tr>
        <tr>
            <th>اعضای اتحاد برنده</th>
            <td> هر عضو <?php echo WAGOLD_ADD;?> طلا 
            </td>
        </tr>
        <tr>
            <th>مهاجم برتر</th>
           <td>   <?php echo BAGOLD_ADD;?> طلا </td>
        </tr>
        <tr>
            <th>مدافع برتر</th>
            <td>  <?php echo BDGOLD_ADD;?> طلا</td>
        </tr>
         <tr>
            <th> بزرگترین امپراطوری</th>
            <td>  <?php echo GEGOLD_ADD;?> طلا</td>
        </tr>
        </thead>
    </table>
    <br>
    <font color="red"><b>مولتی اکانت ها هیچ جایزه ای دریافت نخواهند کرد</font>
        <h4 class="round"><?php echo STATISTIC27; ?></h4>
    <table class="borderGap" id="wonder">
        <thead>
            <tr>
                <td></td>
                <td><?php echo OVERVIEW1; ?></td>
                <td><?php echo OVERVIEW17; ?></td>
                <td><?php echo OVERVIEW6; ?></td>
                <td><?php echo LEVEL; ?></td>
                <td><?=ATTACK?></td>
    
            </tr>
        </thead>
        <tbody>
            <?php
            $cont = 1;
            foreach ($result as $row)
            {
               
                $ally = $database->getAlliance($row['alliance']);
    $att0=$database->query("SELECT endtime FROM movement WHERE `to`='".$row['vref']."'  and `proc`='0' ORDER BY endtime ASC ");
    
            ?>
                <tr class="hover">
                    <td class="ra"><?php echo $cont; $cont++; ?>.</td>
                    <td class="pla"><?php echo "<a href=\"karte.php?d=" . $row['vref'] . "&amp;c=" . $generator->getMapCheck($row['vref']) . "\">"; ?><?php echo $row['username']; ?></a></td>
                    <td class="nam"><?php echo $row['wwname']; ?></td>
                    <td class="al"><a href="allianz.php?aid=<?php echo $ally['id']; ?>"><?php echo $ally['tag']; ?></a></td>
                    <td class="lev"><?php echo $row['f99']; ?></td>
                    <td><?php
                        if(count($att0)>0){
    echo '<img src="img/x.gif" class="att1"  title="'.$generator->getTimeFormat($att0[0]["endtime"]-time()).'" />('.count($att0).')';
                        }
                    ?>
                        </td>
               </tr>
            <?php
            }?>
        </tbody>
        </table>
            <?php   
    }


?>