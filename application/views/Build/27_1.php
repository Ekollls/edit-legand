<?php

        $artefact = $database->getOwnArtefactInfo2($village->wid);
        $result = count($artefact);


?>
<h4 class="round">کتیبه های تسخیر شده در دهکده</h4>
<div class="gid27">
<body>
    <table id="own" cellpadding="1" cellspacing="1">
        <thead>
            <tr>
                <td></td>
                <td><?=sokr11?></td>
                <td><?=sokr1?></td>
                <td><?=sokr9?></td>
            </tr>
        </thead>

        <tbody>
            <tr>
            <?php

        if($result == 0) {
        	echo '<td colspan="4" class="none">'.sokr12.'</td>';
        } else {
        foreach($artefact as $artefac){
          $te = $artefac['type'];
                   $se = $artefac['size'];
                    if($te== 1 AND $se == 1){
                    $name = ART1;
                    $desc = ART16;
                    $bonus= "(4x) " ;
                    $image =  '<img class="artefact_icon_2" src="img/x.gif">';
                    }
                     if($te== 1 AND $se == 2){
                    $name = ART2;
                    $desc =ART16;
                    $bonus= "(3x) " ;
                    $image =  '<img class="artefact_icon_2" src="img/x.gif">';
                    }
                     if($te== 1 AND $se == 3){
                    $name = ART3;
                    $desc =  ART16;
                    $bonus= "(5x) " ;
                         $image =  '<img class="artefact_icon_2" src="img/x.gif">';
                    }
                     if($te== 2 AND $se == 1){
                    $name = ART4;
                    $desc = ART17;
                    $bonus= "(2x) " ;
                         $image =  '<img class="artefact_icon_4" src="img/x.gif">';
                    }
                     if($te== 2 AND $se == 2){
                    $name = ART5;
                    $desc =  ART17;
                    $bonus= "(1.5x) " ;
                         $image =  '<img class="artefact_icon_4" src="img/x.gif">';
                    }
                     if($te== 2 AND $se == 3){
                    $name = ART6;
                    $desc =  ART17;
                    $bonus= "(3x) " ;
                         $image =  '<img class="artefact_icon_4" src="img/x.gif">';
                    }
                     if($te== 3 AND $se == 1){
                    $name = ART7;
                     $desc = ART18;
                    $bonus= "(5x) " ;
                         $image =  '<img class="artefact_icon_5" src="img/x.gif">';
                    }
                     if($te== 3 AND $se == 2){
                    $name = ART8;
                     $desc = ART18  ;
                    $bonus= "(3x) " ;
                         $image =  '<img class="artefact_icon_5" src="img/x.gif">';
                    }
                     if($te== 3 AND $se == 3){
                    $name = ART9;
                     $desc =  ART18   ;
                    $bonus= "(10x) " ;
                         $image =  '<img class="artefact_icon_5" src="img/x.gif">';
                   }
                     if($te== 4 AND $se == 1){
                    $name = ART22;
                     $desc = ART25   ;
                    $bonus= "(50%) " ;
                         $image =  '<img class="artefact_icon_6" src="img/x.gif">';
                   }
                     if($te== 4 AND $se == 2){
                    $name = ART23;
                     $desc =   ART25    ;
                    $bonus= "(25%) " ;
                         $image =  '<img class="artefact_icon_6" src="img/x.gif">';
                   }
                     if($te== 4 AND $se == 3){
                    $name = ART24;
                     $desc =      ART25   ;
                    $bonus= "(50%) " ;
                         $image =  '<img class="artefact_icon_6" src="img/x.gif">';
                   }
                     if($te== 5 AND $se == 1){
                    $name = ART10;
                     $desc =       ART19   ;
                    $bonus= "(50%) " ;
                         $image =  '<img class="artefact_icon_8" src="img/x.gif">';
                   }
                     if($te== 5 AND $se == 2){
                    $name = ART11;
                     $desc =       ART19     ;
                    $bonus= "(25%) " ;
                         $image =  '<img class="artefact_icon_8" src="img/x.gif">';
                   }
                     if($te== 5 AND $se == 3){
                    $name = ART12;
                     $desc =        ART19   ;
                    $bonus= "(50%) " ;
                         $image =  '<img class="artefact_icon_8" src="img/x.gif">';
                   }
                     if($te== 6){
                    $name = ART13;
                    $desc = ART20;
                    $bonus= ART16 ;
                         $image =  '<img class="artefact_icon_9" src="img/x.gif">';
                     }
                    if($te== 7 AND $se == 1){
                    $name = ART26;
                     $desc = ART27;
                    $bonus= "(200) " ;
                        $image =  '<img class="artefact_icon_10" src="img/x.gif">';
                   }
                     if($te== 7 AND $se == 2){
                    $name = ART28;
                     $desc = ART29  ;
                    $bonus= "(100) " ;
                         $image =  '<img class="artefact_icon_10" src="img/x.gif">';
                   }
                     if($te== 7 AND $se == 3){
                    $name = ART30;
                     $desc =  ART31;
                    $bonus= "(500) " ;
                         $image =  '<img class="artefact_icon_10" src="img/x.gif">';
                   }
                     if($te== 8 AND $se == 1){
                    $name = "Book of Dark Secrets";
                     $desc =            "The effect of this artifact changes both upon capture and every 24 hours. Thus, the effect of an artifact can be both positive and negative, that is, the bonuses of any other artifacts can have a negative indicator. For example, troops can build up more slowly or consume more grain.";
                    $bonus= "By chance" ;
                         $image =  '<img class="artefact_icon_" src="img/x.gif">';
                   }
                     if($te== 8 AND $se == 3){
                    $name = "Burnt manuscript";
                     $desc =           "The effect of this artifact changes both upon capture and every 24 hours. Thus, the effect of an artifact can be both positive and negative, that is, the bonuses of any other artifacts can have a negative indicator. For example, troops can build up more slowly or consume more grain.";
                    $bonus= "By chance" ;
                         $image =  '<img class="artefact_icon_" src="img/x.gif">';
                   }
                     if($te== 11 ){
                    $name = ART14;
                     $desc =    ART21;
                    $bonus= ART21  ;
                         $image =  '<img class="artefact_icon_1" src="img/x.gif">';
                   }
        	if($artefac['size'] == 1) {
        		$reqlvl = 10;
        		$effect = sokr1;
        	} elseif($artefac['size'] == 2 or 3) {
        		$reqlvl = 20;
        		$effect = pluss11;
        	}
        	echo '<td class="icon">'.$image.'</td>';

        	echo '<td class="nam">
                            <a href="build.php?id=' . $id . '&show='.$artefac['id'].'">' . $name . '</a> <span class="bon">' . $bonus . '</span>
                            <div class="info">
                                '.sokr17.' <b>' . $reqlvl . '</b>, '.sokr3.' <b>' . $effect . '</b>
                            </div>
                        </td>';
        	echo '<td class="pla"><a href="karte.php?d=' . $artefac['vref'] . '&c=' . $generator->getMapCheck($artefac['vref']) . '">' . $database->getVillageField($artefac['vref'], "name") . '</a></td>';
        	echo '<td class="dist">' . date("d/m/Y H:i", $artefac['conquered']) . '</td>';
       echo' </tr>';

        }
              }
?>

        </tbody>
    </table>

</div>
