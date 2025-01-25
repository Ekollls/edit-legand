<?php

if (isset($_POST['id']) && !is_numeric($_POST['id']))
    die('Hacking Attemp');
if (isset($_POST['amount']) && !is_numeric($_POST['amount']))
    die('Hacking Attemp');
include("application/Account.php");
//$session->heroD['level']=100;

if ($session->heroD['gender'] == 0) {
    $gender = 'male';
} else {
    $gender = 'female';
}
$tribe = $session->tribe;
$hero_t = $GLOBALS["hero_t" . $tribe];
$heroid = $session->heroD['heroid'];
if ($session->heroD['dead'] && isset($_GET['revive']) == 1 && $village->awood > $hero_t[$session->heroD['level']]['wood'] && $village->aclay > $hero_t[$session->heroD['level']]['clay'] && $village->airon > $hero_t[$session->heroD['level']]['iron'] && $village->acrop > $hero_t[$session->heroD['level']]['crop']) {
    /*$heron=0;
    $vills=implode(",",$session->villages);
    $q1 = "SELECT SUM(u11) as sum1 from enforcement where `from` IN (".$vills.")";       // check if hero is send as reinforcement
    $he1 = $database->query($q1);
    $heron+=$he1[0]['sum1'];
    $q2 = "SELECT SUM(u11) as sum2 from units where `vref` IN (".$vills.")";   // checkf if hero is on my account (all villages)
    $he2 = $database->query($q2);
    $heron+=$he2[0]['sum2'];
    foreach($session->villages as $myvill){
        $heron+=$database->HeroNotInVil($myvill); // check if hero is not in village (come back from attack , raid , etc.)
    }
    */

    //if(!$heron && !$session->heroD['revivetime']){
    if (!$session->heroD['revivetime']) {
        $each = (time() + ($hero_t[$session->heroD['level']]['time'] / SPEED * 1.5));

        $database->query("UPDATE hero SET `revivetime` ='" . $each . "',`wref` = '" . $village->wid . "'  WHERE `uid` = '" . $session->uid . "'");
        $database->insertQueue($session->uid, 11, time(), $each, $village->wid);

        $database->modifyResource($village->wid, $hero_t[$session->heroD['level']]['wood'], $hero_t[$session->heroD['level']]['clay'], $hero_t[$session->heroD['level']]['iron'], $hero_t[$session->heroD['level']]['crop'], 0);
        $database->modifyHero2('wref', $village->wid, $session->uid, 0);
    }
    header("Location: hero_inventory.php");
    exit;
}


$gi = $database->getHeroInventory($session->uid);
include("application/Inventory.php");
if (!empty($_POST) || !empty($_GET)) {
    header("Location: hero_inventory.php");//exit;
}

?>



<?php
if ($heroF->getHeroStatus() != 100) {
    $dis = ' disabled';
    if ($heroF->getHeroStatus() == 101) {
        $deadTitle = "<span class='itemNotMoveable'>You cannot use this tool and your hero is dead.</span><br>";
    } else {
        $deadTitle = "<span class='itemNotMoveable'>Your hero is out.</span><br>";
    }

} else {
    $dis = '';
    $deadTitle = '';
}

if (isset($_GET['inventory']) && !$dis) {

    $uid = $session->uid;
    if (isset($_GET['helmet'])) {
        $database->setHeroInventory($uid, "helmet", 0);
        $database->editProcItem($gi['helmet'], 0, $uid);
        $database->modifyHeroFace($uid, "helmet", 0);

    } elseif (isset($_GET['leftHand'])) {
        $itemData2 = $database->getItemData($gi['rightHand']);
        if ($itemData2['type'] >= 76 && $itemData2['type'] <= 78) {
            switch ($itemData2['type']) {
                case 76:
                    $strong = 500;
                    break;
                case 77:
                    $strong = 1000;
                    break;
                case 78:
                    $strong = 1500;
                    break;

            }
            $database->modifyHero2("itempower", $strong, $uid, 2);
        }
        $database->setHeroInventory($uid, "leftHand", 0);
        $database->editProcItem($gi['leftHand'], 0, $uid);
        $database->modifyHeroFace($uid, "leftHand", 0);

    } elseif (isset($_GET['rightHand'])) {
        $itemData2 = $database->getItemData($gi['rightHand']);
        $database->modifyHero2("itempower", $sizes[$itemData2['type']], $uid, 2);
        $database->setHeroInventory($uid, "rightHand", 0);
        $database->editProcItem($gi['rightHand'], 0, $uid);
        $database->modifyHeroFace($uid, "rightHand", 0);

    } elseif (isset($_GET['body'])) {
        $itemData2 = $database->getItemData($gi['body']);
        $database->setHeroInventory($uid, "body", 0);
        $database->editProcItem($gi['body'], 0, $uid);
        $database->modifyHeroFace($uid, "body", 0);
        if ($itemData2['type'] >= 88 && $itemData2['type'] <= 93) {
            switch ($itemData2['type']) {
                case 88:
                case 92:
                    $strong = 500;
                    break;
                case 89:
                    $strong = 1000;
                    break;
                case 90:
                    $strong = 1500;
                    break;
                case 91:
                    $strong = 250;
                    break;
                case 93:
                    $strong = 750;
                    break;
            }
            $database->modifyHero2("itempower", $strong, $uid, 2);
        }

    } elseif (isset($_GET['horse'])) {
        $itemData2 = $database->getItemData($gi['horse']);
        if ($itemData2['type'] == 103) {
            $database->modifyHero2("speed", 7, $uid, 2);
        } elseif ($itemData2['type'] == 104) {
            $database->modifyHero2("speed", 10, $uid, 2);
        } elseif ($itemData2['type'] == 105) {
            $database->modifyHero2("speed", 13, $uid, 2);
        }
        $database->setHeroInventory($uid, "horse", 0);
        $database->editProcItem($gi['horse'], 0, $uid);
        $database->modifyHeroFace($uid, "horse", 0);

    } elseif (isset($_GET['bag'])) {
        $database->setHeroInventory($uid, "bag", 0);
        $database->editProcItem($gi['bag'], 0, $uid);
        $itemdata = $database->getItemData($gi['bag']);
        if ($itemdata['btype'] >= 7 && $itemdata['btype'] <= 9) {
            $database->editHeroType($itemdata['id'], 0, 2);
        }
    } elseif (isset($_GET['shoes'])) {
        $itemData2 = $database->getItemData($gi['shoes']);
        $database->setHeroInventory($uid, "shoes", 0);
        $database->editProcItem($gi['shoes'], 0, $uid);
        $database->modifyHeroFace($uid, "foot", 0);
        if ($itemData2['type'] >= 100 && $itemData2['type'] <= 102) {
            if ($itemData2['type'] == 100) {
                $value = 3;
            } elseif ($itemData2['type'] == 101) {
                $value = 4;
            } elseif ($itemData2['type'] == 102) {
                $value = 5;
            }
            $database->modifyHero2('speed', $value, $uid, 2);
        } elseif ($itemData2['type'] >= 94 && $itemData2['type'] <= 96) {

            if ($itemData2['type'] == 94) {
                $value = 10;
            } elseif ($itemData2['type'] == 95) {
                $value = 15;
            } elseif ($itemData2['type'] == 96) {
                $value = 20;
            }
            $database->modifyHero2('autoregen', $value, $uid, 2);
            //exit;
        }
    }
}

?>
<?php include("application/views/html.php"); ?>

<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE reports <?php if ($dorf1 == '') {
       echo 'perspectiveBuildings';
   } else {
       echo 'perspectiveResources';
   } ?> <?php echo DIRECTION; ?> season- buildingsV3">
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













                <?php
                include_once("application/views/Hero/heroMenu.php");


                ?>







                <?php
                if ($session->qData['quest'] == 6 && $session->qData['step1'] == 0) {
                    $database->query("UPDATE quests SET step1 = 1 WHERE userid = " . $session->uid . "");
                    header('Location: hero_inventory.php');
                }

                if ($session->qData['quest'] == 13 && $session->qData['step1'] == 0) {
                    $database->query("UPDATE quests SET step1 = 1 WHERE userid = " . $session->uid . "");
                    header('Location: hero_inventory.php');
                }

                if ($tribe == 1) {
                    $tp = 100;
                } else {
                    $tp = 80;
                }


                ob_start();
                $availiblepoint = $session->heroD['level'] * 4;

                $freepoints = $availiblepoint - ($session->heroD['power'] + $session->heroD['offBonus'] + $session->heroD['defBonus'] + $session->heroD['product']);
                $rp = 3 * SPEED * $session->heroD['product'];
                ?>















                <div id="content" class="heroV2 heroV2Attributes">

                    <div id="attributes" class="hero-<?php echo $session->heroD['dead'] == 1 ? 'dead' : 'alive'; ?>">
                        <?php if ($session->heroD['dead'] == 0) { ?>

                        <?php } ?>
                        <?php if ($session->heroD['dead'] == 1) { ?>






                            <div class="attributeBox heroDead">


                                <?php

                                $vRes = ($village->awood + $village->aclay + $village->airon + $village->acrop);
                                $hRes = ($hero_t[$session->heroD['level']]['wood'] + $hero_t[$session->heroD['level']]['clay'] + $hero_t[$session->heroD['level']]['iron'] + $hero_t[$session->heroD['level']]['crop']);
                                $checkT = $session->heroD['revivetime'] != 0;

                                if (!$checkT) {
                                    ?>


                                    <div class="status">

                                        <i class="statusDead_medium"></i>
                                        <div class="title"><?php echo $heroF->printHeroSt(); ?> </div>

                                    </div>
                                    <div class="attribute regenerate tooltip"
                                        title="<?= HEROI23 ?> <?php echo $session->heroD['autoregen'] * INCREASE_SPEED; ?>% <?= HEROI24 ?></font>">
                                        <div class="description">

                                            <span>
                                                <span> <?php echo $lang['Hero']['Revive01']; ?> <a
                                                        href="karte.php?d=<?php echo $session->heroD['wref']; ?>"><?php echo $database->getVillage($session->heroD['wref'])['name']; ?></a>.
                                                    <?php echo $lang['Hero']['Revive02']; ?> <a
                                                        href="karte.php?d=<?php echo $village->wid; ?>"><?php echo $village->vname; ?></a>.</span>
                                            </span>
                                            <span>
                                                <span><?php echo $lang['Hero']['Revive03']; ?></a>.</span>
                                            </span>
                                        </div>
                                        <div class="title"><?php echo $lang['Hero']['Revive04']; ?>:</div>
                                        <div class="reviveWrapper">
                                            <div class="reviveWithResources description">از منابع استفاده کنید تا قهرمان را زنده
                                                کنید. </div>
                                            <div class="reviveWithResources charges">
                                                <div>
                                                    <div class="inlineIconList resourceWrapper">
                                                        <div class="inlineIcon resource"><i class="r1Big"></i><span
                                                                class="value value"
                                                                style="margin-right: -40px !important;"><?php echo $hero_t[$session->heroD['level']]['wood']; ?></span>
                                                        </div>
                                                        <div class="inlineIcon resource"><i class="r2Big"></i><span
                                                                class="value value"
                                                                style="margin-right: -40px !important;"><?php echo $hero_t[$session->heroD['level']]['clay']; ?></span>
                                                        </div>
                                                        <div class="inlineIcon resource"><i class="r3Big"></i><span
                                                                class="value value"
                                                                style="margin-right: -40px !important;"><?php echo $hero_t[$session->heroD['level']]['iron']; ?></span>
                                                        </div>
                                                        <div class="inlineIcon resource"><i class="r4Big"></i><span
                                                                class="value value"
                                                                style="margin-right: -40px !important;"><?php echo $hero_t[$session->heroD['level']]['crop']; ?></span>
                                                        </div>
                                                        <div class="inlineIcon resource"><i class="cropConsumptionBig"></i><span
                                                                class="value value"
                                                                style="margin-right: -40px !important;">6</span></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="inlineIcon duration"><i class="clock_medium"></i><span
                                                            class="value"
                                                            style="margin-right: -40px !important;"><?php echo $generator->getTimeFormat(($hero_t[$session->heroD['level']]['time'] / SPEED * 1.5)); ?></span>
                                                    </div>
                                                </div>
                                            </div>















                                            <button
                                                class="textButtonV2 buttonFramed reviveWithResources rectangle withText green"
                                                type="button"
                                                onclick="window.location.href = 'hero_inventory.php?revive=1'; return false;">
                                                <div><?= HEROI28 ?></div>
                                            </button>


                                            <?php
                                            $sql2 = $database->query("SELECT * FROM heroitems WHERE proc = 0 AND uid = '" . $session->uid . "' AND btype= '12' LIMIT 1 ");
                                            $dare = count($sql2) > 0 ? 1 : 0;
                                            $outputList = '';

                                            if ($dare) {
                                                foreach ($sql2 as $row) {
                                                    //  var_dump($row);die();
                                                    $id = $row['id'];
                                                    $num = $row['num'];
                                                    $btype = $row['btype'];
                                                    $type = $row['type'];
                                                    $dis = ($heroF->getHeroStatus() != 101) ? ' disabled' : '';

                                                    $outputList .= "<div id=\"inventory_" . $id . "\" style=\"width: auto !important;height: auto !important;\" class=\"heroItem consumable inventory draggable empty\">";
                                                    $outputList .= "<div id=\"item_" . $id . "\" title=\"" . $num . " " . constant('ITEM107') . "||" . constant('IEFF107') . "\" class=\"item " . $gender . "_item_" . ($Travian->getItemData($btype, $type)['item']) . $dis . "\" style=\"position:relative;left:0;top:0;\">";
                                                    $outputList .= "<div class=\"amount\">" . $num . "</div>";
                                                    $outputList .= "</div>";
                                                    $outputList .= '</div>';
                                                }
                                            }


                                            ?>


                                            <?php
                                            if ($dare) { ?>
                                                <div id="inventory_<?php echo $id; ?> "
                                                    class="heroItem consumable inventory draggable  ">
                                                    <?php echo $outputList; ?>
                                                </div>
                                                <div class="reviveWithWaterBucket waterBucketWrapper" style="padding-top: 10px;">

                                                    <div class="reviveWithWaterBucket details">با سطل میتوانید قهرمان خود را فورا
                                                        زنده کنید.</div>

                                                </div>
                                                <form id="HeroInventory" method="post" action="hero_inventory.php<?= $igroup; ?>">
                                                    <input type="hidden" name="a" value="inventory">
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                    <input type="hidden" name="amount" value="<?php echo $num; ?>">
                                                    <input type="hidden" name="btype" value="<?php echo $btype; ?>">
                                                    <input type="hidden" name="type" value="<?php echo $type; ?>">
                                                </form>
                                                <script type="text/javascript">
                                                    Travian.Game.Hero.Inventory = new (new Class(
                                                        {


                                                            b15: '<table id="heroInventoryDataDialog" class="transparent" cellspacing="0" cellpadding="0"><tbody><tr class="rowBeforeUse"><th><?= heroh2 ?></th><td><?php echo $ucpn; ?></td></tr><tr class="rowUseValue"><th><?= heroh3 ?></th><td class="displayUseValue"><?php echo $ucp / 2; ?></td></tr><tr class="rowAfterUse"><th><?= heroh4 ?></th><td class="displayAfterUse"><?php echo ($ucpn + $ucp / 2); ?></td></tr></tbody></table>',

                                                            alreadyOpen: false,
                                                            textSingle: "<?= heroh1 ?>",
                                                            textMulti: 'تعداد مورد استفاده: &lt;input class=\"text\" id=\"amount\" type=\"text\" value=\"\" /&gt;'.unescapeHtml(),
                                                            initialize: function () {
                                                                var $this = this;

                                                                <?php
                                                                //$sql2 = $database->query("SELECT * FROM heroitems WHERE proc = 0 AND uid = '".$session->uid."'");
                                                    
                                                                foreach ($sql2 as $row2) {
                                                                    $id = $row2["id"];
                                                                    $num = $row2["num"];
                                                                    $btype = $row2["btype"];
                                                                    $type = $row2["type"];

                                                                    ?>
                                                                    $('item_<?php echo $id; ?>').addEvent('click', function () { $this.sellItem(<?php echo $id; ?>, <?php echo $num; ?>, <?php echo $btype; ?>, <?php echo $type; ?>); });
                                                                    <?php

                                                                }
                                                                ?>
                                                            },
                                                            showItem: function (id, amount, btype, type) {
                                                                var $this = this;
                                                                $('HeroInventory').id.value = id;
                                                                $('HeroInventory').amount.value = amount;
                                                                $('HeroInventory').btype.value = btype;
                                                                $('HeroInventory').type.value = type;
                                                                $('HeroInventory').submit();
                                                            },
                                                            sellItem: function (id, amount, btype, type) {
                                                                var html = '';
                                                                var $this = this;
                                                                if (this.alreadyOpen) {
                                                                    return;
                                                                }
                                                                this.alreadyOpen = true;
                                                                $('HeroInventory').id.value = id;
                                                                $('HeroInventory').amount.value = amount;
                                                                $('HeroInventory').btype.value = btype;
                                                                $('HeroInventory').type.value = type;
                                                                if (amount == 1) {

                                                                    html = $this.textSingle;

                                                                } else {

                                                                    html = $this.textMulti;

                                                                }
                                                                html.dialog({
                                                                    relativeTo: $('content'),
                                                                    elementFoucs: 'inventoryAmount',
                                                                    buttonTextOk: 'Ok',
                                                                    buttonTextCancel: 'Cancel',
                                                                    title: "<?= heroh0 ?>",
                                                                    onOpen: function (dialog, contentElement) {
                                                                        if ($('amount')) {
                                                                            $('amount').value = amount;
                                                                            $('amount').addEvent('change', function () {
                                                                                $('HeroInventory').amount.value = $('amount').value;
                                                                            });
                                                                        }
                                                                    },
                                                                    onOkay: function (dialog, contentElement) {
                                                                        if ($('amount')) {
                                                                            $('HeroInventory').amount.value = $('amount').value;
                                                                        }
                                                                        $('HeroInventory').submit();
                                                                    },
                                                                    onClose: function (dialog, contentElement) {
                                                                        $this.alreadyOpen = false;
                                                                    }
                                                                });
                                                            }
                                                        }));
                                                </script>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="reviveWithWaterBucket waterBucketWrapper">

                                                    <div class="reviveWithWaterBucket details">شما سطل برای احیای فوری قهرمان ندارید
                                                    </div>

                                                </div>
                                                <?php
                                            }
                                            ?>

                                            <button
                                                class="textButtonV2 buttonFramed reviveWithWaterBucket  rectangle withText gold"
                                                type="button" id="buttonm7">
                                                <div>تعدیل منابع</div>
                                            </button>

                                        </div>
                                    </div>
                                


                                <?php if (
                                    $hero_t[$session->heroD['level']]['wood'] > $village->awood ||
                                    $hero_t[$session->heroD['level']]['clay'] > $village->aclay ||
                                    $hero_t[$session->heroD['level']]['iron'] > $village->airon ||
                                    $hero_t[$session->heroD['level']]['crop'] > $village->acrop
                                ) { ?>




                                <?php } ?>



                            <?php } else { // hero is in revive
                                    ?>
                                <div class="heroStatusMessage header warning">
                                    <img alt="Held tot!" src="img/x.gif" class="heroStatus101Regenerate">
                                    <?php echo $lang['Hero']['Revive05']; ?> <a
                                        href="karte.php?d=<?php echo $session->heroD['wref']; ?>"><?php echo $database->getVillage($session->heroD['wref'])['name']; ?></a>
                                    : <?php echo $lang['Hero']['Revive06']; ?> <span class="timer " counting="down"
                                        value="<?php echo ($session->heroD['revivetime'] - time()); ?>"><?php echo $generator->getTimeFormat($session->heroD['revivetime'] - time()); ?></span>

                                </div>
                                <?php


                                }
                                ?>
                        </div>

                    <?php } ?>


                    <script type="text/javascript">
                        window.addEvent('domready', function () {
                            if ($('buttonm7')) {
                                $('buttonm7').addEvent('click', function () {
                                    window.fireEvent('buttonClicked', [this, { "type": "button", "value": "Exchange resources", "name": "", "id": "button5487115a9b649", "class": "gold ", "title": "Click here to exchange resources.", "confirm": "", "onclick": "", "dialog": { "cssClass": "white", "draggable": false, "overlayCancel": true, "buttonOk": false, "saveOnUnload": false, "data": { "cmd": "exchangeResources", "defaultValues": { "tid": "1", "nr": "1", "btyp": "1", "r1": 1, "r2": 1, "r3": 1, "r4": 1, "supply": "1", "pzeit": 0, "max1": 0, "max2": 0, "max3": 0, "max4": 0, "max": 0 }, "did": "<?= $village->wid; ?>" } } }]);
                                });
                            }
                        });
                    </script>
















































                </div>
                <div class="hero_inventory">



                    <div id="heroV2" class="contentV2"></a>
                        <div>




                            <div class=" attributeBox">



                                <div class="stats">
                                    <span class="heroAttributesFormMessage notice hide">
                                        <h4><?php echo $lang['Hero']['saveChanges']; ?></h4>
                                    </span>

                                    <div class="name" title="<?php echo HEROI25 ?>||<?php echo HEROI44; ?>"><i
                                            class="attributeHealth_medium"></i><span><?php echo HEROI25; ?></span>
                                    </div>
                                    <div class="progressBar preventMobileSwipeNavigation">
                                        <div class="bar">
                                            <div class="decoration"></div>
                                            <div class="filling primary green"
                                                style="width :<?php echo $session->heroD['health']; ?>%;"></div>


                                        </div>
                                    </div>
                                    <div class="value"><?php echo round($session->heroD['health']); ?>%</div>









                                    <div class="name" title="<?php if ($session->heroD['level'] != 100) { ?><?= HEROI33 ?>||<?php echo HEROI31 . ' ';
                                           echo ($hero_levels[$session->heroD['level'] + 1] - $session->heroD['experience']); ?> <?= HEROI32 ?> <?php echo ($session->heroD['level'] + 1); ?> <?php } else {
                                        echo 'Достигнут максимальный уроinень';
                                    } ?>.">
                                        <i class="attributeExperience_medium"></i><span><?php echo HEROI33; ?></span>
                                    </div>
                                    <div class="progressBar preventMobileSwipeNavigation">
                                        <div class="bar">
                                            <div class="decoration"></div>

                                            <div class="filling primary blue" style="width:<?php
                                            if ($session->heroD['level'] != 100) {
                                                $width = round(100 * (($hero_levels[$session->heroD['level']] - $session->heroD['experience']) / ($hero_levels[$session->heroD['level']] - $hero_levels[$session->heroD['level'] + 1])), 1);
                                                if ($width >= 0) {
                                                    echo $width;
                                                } else {
                                                    echo 0;
                                                }

                                            } else {
                                                echo '100';
                                            } ?>%;"></div>

                                        </div>
                                    </div>
                                    <div class="value"><?php echo $session->heroD['experience']; ?></div>












                                    <div class="name"><i
                                            class="attributeSpeed_medium"></i><span><?php echo $lang['Hero']['Speed']; ?>:<strong
                                                id="heroSpeedValueNumber"></span></div>
                                    <div class="value speedValue"><svg viewBox="0 0 10 7.75" class="arrowDouble">
                                            <path d="M0 0h3l3 3.88-3 3.87H0l3-3.87"></path>
                                            <path d="M4 0h3l3 3.88-3 3.87H4l3-3.87"></path>
                                        </svg><span><strong><?php echo $session->heroD['speed'] * INCREASE_SPEED; ?></strong>
                                            <?php echo HEROI38; ?></span></div>
                                </div>
                            </div>













                            <div class="attributeBox">
                                <div class="heroProduction">
                                    <div class="productionTotal" class="attribute productionPoints" title="<?php echo HEROI43 ?>||<?php echo HEROI47; ?>&lt;br /&gt;&lt;span class=&quot;
            heroAttributeInformation&quot;&gt;<?php echo HEROI43 ?>&lt;img title=&quot;inсе ресурсы&quot; alt=&quot;
            inсе ресурсы&quot; class=<?php if ($session->heroD['r0'] != 0) {
                echo 'r0';
            } elseif ($session->heroD['r1'] != 0) {
                echo 'r1';
            } elseif ($session->heroD['r2'] != 0) {
                echo 'r2';
            } elseif ($session->heroD['r3'] != 0) {
                echo 'r3';
            } elseif ($session->heroD['r4'] != 0) {
                echo 'r4';
            } ?> src=&quot;img/x.gif&quot; /&gt;<?php if ($session->heroD['r0'] != 0) {
                  echo number_format($rp);
              } else {
                  echo number_format($session->heroD['product'] * 10 * SPEED);
              } ?>
             &lrm;&amp;#x202d;&amp;#x202d;&amp;#x202c;&amp;#x202c;&lrm;&lt;/span&gt;"><strong></strong>


                                        <div>





                                        </div>

                                        <div class="productionTotal"><strong><?php echo HEROI43; ?></strong>

                                            <div class="productionItem"><span class="value">+
                                                    <?php if ($session->heroD['r0'] != 0) {
                                                        echo number_format($rp);
                                                    } else {
                                                        echo number_format($session->heroD['product'] * 10 * SPEED);
                                                    } ?></span>
                                                <?php
                                                $rr0 = $rr1 = $rr2 = $rr3 = $rr4 = 'grey';
                                                if ($session->heroD['r0'] != 0) {
                                                    $rr0 = 'orange';

                                                    echo ' <img alt="All" class="r0" src="img/x.gif">';
                                                } elseif ($session->heroD['r1'] != 0) {
                                                    $rr1 = 'orange';
                                                    echo '<i class="wood_small"></i>';
                                                } elseif ($session->heroD['r2'] != 0) {
                                                    $rr2 = 'orange';
                                                    echo '<i class="clay_small"></i>';
                                                } elseif ($session->heroD['r3'] != 0) {
                                                    $rr3 = 'orange';
                                                    echo '<i class="iron_small"></i>';
                                                } elseif ($session->heroD['r4'] != 0) {
                                                    $rr4 = 'orange';
                                                    echo '<i class="crop_small"></i>';
                                                } ?>
                                            </div>
                                            <div class="productionItem"><span class="value">-
                                                    6 </span><i class="crop_tiny"></i></div>
                                        </div>


                                    </div>
                                    <?php
                                    // $hero = $database->getHeroData($session->uid);
                                    ?>
                                    <div class="changeProduction">
                                        <div class="resource resources_medium">
                                            <input type="radio" name="resource" value="0" id="resourceHero0_input" <?php if ($session->heroD['r0'] != 0)
                                                echo 'checked'; ?>
                                                style="display: none;">
                                            <button
                                                class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable <?= $rr0; ?>"
                                                type="button" id="resourceHero0_button">
                                                <i class="resources_medium"></i>
                                            </button>
                                            <span class="value">
                                                <?php
                                                if ($rp > 10000) {
                                                    echo $rp / 1000 . 'k';
                                                } else {
                                                    echo $rp;
                                                }
                                                ?>
                                            </span>
                                        </div>

                                        <script type="text/javascript" id="resourceHero0_script">
                                            document.addEventListener('DOMContentLoaded', function () {
                                                const button = document.getElementById('resourceHero0_button');
                                                const input = document.getElementById('resourceHero0_input');

                                                if (button) {
                                                    button.addEventListener('click', function () {
                                                        // Make an AJAX GET request to ajax.php
                                                        fetch('ajax.php?cmd=resourceHero0')
                                                            .then(response => response.json())
                                                            .then(data => {
                                                                if (data.response.error === false) {
                                                                    input.checked = true;
                                                                    console.log(`Resource ${resource.cmd} selected successfully.`);

                                                                    // Check if the response asks for a page reload
                                                                    if (data.response.reload === true) {
                                                                        window.location.reload(); // Reload the page
                                                                    }
                                                                } else {
                                                                    console.error(`Error selecting ${resource.cmd}: ${data.response.errorMsg}`);
                                                                }
                                                            })
                                                            .catch(error => {
                                                                console.error('Error:', error);
                                                            });
                                                    });
                                                }
                                            });
                                        </script>

                                        <?php
                                        $resval = $session->heroD['product'] * 10 * SPEED;

                                        if ($resval > 10000) {
                                            if ($resval > 10000000) {
                                                $resval = $resval / 1000000;
                                                $resval = $resval . 'm';
                                            } else {
                                                $resval = $resval / 1000;
                                                $resval = $resval . 'k';
                                            }

                                        } else {
                                            // echo $rp;
                                        }

                                        ?>


                                        <div class="resource lumber_small">
                                            <input type="radio" name="resource" value="1" id="resourceHero1"
                                                style="display: none;" <?php if ($session->heroD['r1'] != 0)
                                                    echo 'checked'; ?>>
                                            <button
                                                class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable <?= $rr1; ?>"
                                                type="button" id="resourceHero1_button">
                                                <i class="lumber_small"></i>
                                            </button>
                                            <span class="value"><?php echo $resval; ?></span>
                                        </div>

                                        <div class="resource clay_small">
                                            <input type="radio" name="resource" value="2" id="resourceHero2"
                                                style="display: none;" <?php if ($session->heroD['r2'] != 0)
                                                    echo 'checked'; ?>>
                                            <button
                                                class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable <?= $rr2; ?>"
                                                type="button" id="resourceHero2_button">
                                                <i class="clay_small"></i>
                                            </button>
                                            <span class="value"><?php echo $resval; ?></span>
                                        </div>

                                        <div class="resource iron_small">
                                            <input type="radio" name="resource" value="3" id="resourceHero3"
                                                style="display: none;" <?php if ($session->heroD['r3'] != 0)
                                                    echo 'checked'; ?>>
                                            <button
                                                class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable <?= $rr3; ?>"
                                                type="button" id="resourceHero3_button">
                                                <i class="iron_small"></i>
                                            </button>
                                            <span class="value"><?php echo $resval; ?></span>
                                        </div>

                                        <div class="resource crop_small">
                                            <input type="radio" name="resource" value="4" id="resourceHero4"
                                                style="display: none;" <?php if ($session->heroD['r4'] != 0)
                                                    echo 'checked'; ?>>
                                            <button
                                                class="textButtonV2 buttonFramed pickProductionType rectangle withIcon toggle activeNotClickable <?= $rr4; ?>"
                                                type="button" id="resourceHero4_button">
                                                <i class="crop_small"></i>
                                            </button>
                                            <span class="value"><?php echo $resval; ?></span>
                                        </div>

                                        <script type="text/javascript">
                                            document.addEventListener('DOMContentLoaded', function () {
                                                // Array of resource IDs
                                                const resources = [
                                                    { buttonId: 'resourceHero1_button', inputId: 'resourceHero1', cmd: 'resourceHero1' },
                                                    { buttonId: 'resourceHero2_button', inputId: 'resourceHero2', cmd: 'resourceHero2' },
                                                    { buttonId: 'resourceHero3_button', inputId: 'resourceHero3', cmd: 'resourceHero3' },
                                                    { buttonId: 'resourceHero4_button', inputId: 'resourceHero4', cmd: 'resourceHero4' }
                                                ];

                                                // Loop through each resource and add event listeners
                                                resources.forEach(resource => {
                                                    const button = document.getElementById(resource.buttonId);
                                                    const input = document.getElementById(resource.inputId);

                                                    if (button) {
                                                        button.addEventListener('click', function () {
                                                            // Make an AJAX GET request to ajax.php
                                                            fetch(`ajax.php?cmd=${resource.cmd}`)
                                                                .then(response => response.json())
                                                                .then(data => {
                                                                    // Handle the response data
                                                                    if (data.response.error === false) {
                                                                        input.checked = true;
                                                                        console.log(`Resource ${resource.cmd} selected successfully.`);

                                                                        // Check if the response asks for a page reload
                                                                        if (data.response.reload === true) {
                                                                            window.location.reload(); // Reload the page
                                                                        }
                                                                    } else {
                                                                        console.error(`Error selecting ${resource.cmd}: ${data.response.errorMsg}`);
                                                                    }
                                                                })
                                                                .catch(error => {
                                                                    console.error('Error:', error);
                                                                });
                                                        });
                                                    }
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                            </div>

















                            <div class="attributeBox">
                                <div class="heroAttributes">
                                    <div class="attributes formV2">

                                        <div class="title"><?= HEROI0 ?></div>







                                        <div class="points_descr"> <?= HEROI50 ?></div>
                                        <div id="availablePoints" class="pointsAvailable">
                                            <?= $freepoints ?></span>/<?= $freepoints ?>
                                        </div>


                                    </div>
                                    <td>
                                        <p>

                                        <table id="attributesOfHero" class="transparent attributes">


                                            <tbody>

                                                <tr id="attributepower" class="attribute power"
                                                    title="<?= HEROI8 ?>||<?= HEROI7 ?><br><span class='heroAttributeInformation'><?php echo $lang['Hero']['FStrength']; ?>: ‎‭‭<?php echo (100 + $tp * $session->heroD['power'] + $session->heroD['itempower']); ?> <?php echo $lang['Hero']['FHero']; ?></span>">
                                                    <td>
                                                        <div class="name"><i
                                                                class="attributeStrength_medium"></i><span><?= HEROI8 ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    </td>
                                    </td>

                                    <td class="element progress tooltip">

                                        <div class="progressBar preventMobileSwipeNavigation">
                                            <div class="bar">
                                                <div class="decoration"></div>


                                                <div class="bar filling primary green setted"
                                                    style="width:<?php echo $session->heroD['power']; ?>%;">
                                                </div>
                                                <div class="clear"></div>
                                            </div>











                                            <?php if ($freepoints <= 0) { ?>
                                        <td class="element points">
                                            <input type="text" inputmode="numeric" name="defBonus" disabled=""
                                                autocomplete="off" value="<?php echo $session->heroD['power']; ?>" />
                                        </td>
                                    <?php } ?>

                                    </td>

                                    <?php if ($session->heroD['power'] < 100 and $freepoints > 0) {
                                        ?>

                                        <td class="element pointsValueSetter sub plussubhero">
                                            <a class="setPoint disabled textButtonha2 buttonFramed plus rectangle withIcon green"
                                                type="button" title="" href="#">
                                                <svg><svg viewBox="0 0 18 6" class="outline">

                                                        <path d="M16 4H2V2h14z"></path>
                                                    </svg><svg viewBox="0 0 18 6" class="icon">

                                                        <path d="M16 4H2V2h14z"></path>
                                                    </svg></svg>
                                            </a>
                                        </td>
                                        <td class="element points">
                                            <div class="inputRatio pointsRatio isRtl">

                                                <span class="nominator">
                                                    <label class="points">
                                                        <input class="customInput" type="text" class="text"
                                                            value="<?php echo $session->heroD['power']; ?>"
                                                            name="attributepower">
                                        </td>
                                        <div class="progressBar preventMobileSwipeNavigation">
                                            <td class=" pointsValueSetter add plussubhero">
                                                <a class="textButtonV2 buttonFramed plus rectangle withIcon green"
                                                    type="button" title="" href="#">
                                                    <svg><svg viewBox="0 0 18 18" class="outline">
                                                            <path d="M16 10h-6v6H8v-6H2V8h6V2h2v6h6z"></path>
                                                        </svg><svg viewBox="0 0 18 18" class="icon">
                                                            <path d="M16 10h-6v6H8v-6H2V8h6V2h2v6h6z"></path>

                                                </a>
                                            </td>
                                            <td>

                                            <td class="element current powervalue tooltip">

                                                <span
                                                    class="value">‎‭‭<?php echo (100 + $tp * $session->heroD['power'] + $session->heroD['itempower']); ?>‬‬‎</span>
                                            </td>
                                        <?php } ?>

                                        <tr id="attributeoffBonus" class="attribute offBonus"
                                            title="<?= HEROI14 ?>||<?= HEROI13 ?>">
                                            <td class="element attribName tooltip">
                                                <div class="name"><i class="attributeOffBonus_medium"></i><span>
                                                        <?= HEROI14 ?> </span></div>
                                            </td>
                                            <td>
                                            <td class="element progress tooltip">
                                                <div class="progressBar preventMobileSwipeNavigation">
                                                    <div class="bar">
                                                        <div class="decoration"></div>


                                                        <div class="bar filling primary green setted"
                                                            style="width:<?php echo $session->heroD['offBonus']; ?>%;">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>





                                                    <?php if ($freepoints <= 0) { ?>
                                                <td class="element points">
                                                    <label class="points">
                                                        <input type="text" inputmode="numeric" name="defBonus" disabled=""
                                                            autocomplete="off"
                                                            value="<?php echo $session->heroD['offBonus']; ?>" />
                                                    </label>
                                                </td>
                                            <?php } ?>



                                            </td>
                                            <?php if ($session->heroD['offBonus'] < 100 and $freepoints > 0) {
                                                ?>
                                                <td class="element pointsValueSetter sub plussubhero">
                                                    <a class="setPoint disabled textButtonha2 buttonFramed plus rectangle withIcon green"
                                                        type="button" title="" href="#">
                                                        <svg><svg viewBox="0 0 18 6" class="outline">

                                                                <path d="M16 4H2V2h14z"></path>
                                                            </svg><svg viewBox="0 0 18 6" class="icon">

                                                                <path d="M16 4H2V2h14z"></path>
                                                            </svg></svg>
                                                    </a>
                                                </td>
                                                <td class="element points">
                                                    <div class="inputRatio pointsRatio isRtl">

                                                        <span class="nominator">
                                                            <label class="points">


                                                                <input class="customInput" type="text" class="text"
                                                                    value="<?php echo $session->heroD['offBonus']; ?>"
                                                                    name="attributeoffBonus">



                                                </td>
                                                <td class="element pointsValueSetter add plussubhero">
                                                    <a class="textButtonV2 buttonFramed plus rectangle withIcon green"
                                                        type="button" title="" href="#">
                                                        <svg><svg viewBox="0 0 18 18" class="outline">
                                                                <path d="M16 10h-6v6H8v-6H2V8h6V2h2v6h6z"></path>
                                                            </svg><svg viewBox="0 0 18 18" class="icon">
                                                                <path d="M16 10h-6v6H8v-6H2V8h6V2h2v6h6z"></path>

                                                    </a>
                                                </td>
                                                <td>

                                                <td class="element current powervalue tooltip">
                                                    <span
                                                        class="value"><?php echo round($session->heroD['offBonus']) / 5; ?></span>%
                                                </td>
                                            <?php } ?>

                                        </tr>
                                        <tr id="attributedefBonus" class="attribute defBonus"
                                            title="<?= HEROI16 ?>||<?= HEROI15 ?>">

                                            <td class="element attribName tooltip">
                                                <div class="name"><i
                                                        class="attributeDefBonus_medium"></i><span><?= HEROI16 ?>
                                                    </span></div>

                                            </td>
                                            <td>
                                            </td>

                                            <td class="element progress tooltip">
                                                <div class="progressBar preventMobileSwipeNavigation">
                                                    <div class="bar">
                                                        <div class="decoration"></div>



                                                        <div class=" bar filling primary green setted"
                                                            style="width:<?php echo $session->heroD['defBonus']; ?>%;">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>




                                                    <?php if ($freepoints <= 0) { ?>
                                                <td class="element points">
                                                    <input type="text" inputmode="numeric" name="defBonus" disabled=""
                                                        autocomplete="off"
                                                        value="<?php echo $session->heroD['defBonus']; ?>" />
                                                </td>
                                            <?php } ?>








                                            <?php if ($session->heroD['defBonus'] < 100 and $freepoints > 0) {
                                                ?>
                                                <td class="element pointsValueSetter sub plussubhero">
                                                    <a class="setPoint disabled textButtonha2 buttonFramed plus rectangle withIcon green"
                                                        type="button" title="" href="#">
                                                        <svg><svg viewBox="0 0 18 6" class="outline">

                                                                <path d="M16 4H2V2h14z"></path>
                                                            </svg><svg viewBox="0 0 18 6" class="icon">

                                                                <path d="M16 4H2V2h14z"></path>
                                                            </svg></svg>
                                                    </a>
                                                </td>
                                                <td class="element points">
                                                    <div class="inputRatio pointsRatio isRtl">

                                                        <span class="nominator">
                                                            <label class="points">
                                                                <input class="customInput" type="text" class="text"
                                                                    value="<?php echo $session->heroD['defBonus']; ?>"
                                                                    name="attributedefBonus">
                                                </td>
                                                <td class="element pointsValueSetter add plussubhero">
                                                    <a class="textButtonV2 buttonFramed plus rectangle withIcon green"
                                                        type="button" title="" href="#">
                                                        <svg><svg viewBox="0 0 18 18" class="outline">
                                                                <path d="M16 10h-6v6H8v-6H2V8h6V2h2v6h6z"></path>
                                                            </svg><svg viewBox="0 0 18 18" class="icon">
                                                                <path d="M16 10h-6v6H8v-6H2V8h6V2h2v6h6z"></path>

                                                    </a>
                                                </td>
                                                <td>
                                                <td class="element current powervalue tooltip">
                                                    <span
                                                        class="value"><?php echo round($session->heroD['defBonus']) / 5; ?></span>%

                                                <?php } ?>

                                        </tr>

                                        <tr id="attributeproductionPoints" class="attribute productionPoints"
                                            title="<?= HEROI19 ?>||<?= HEROI17 ?>.">
                                            <td class="element attribName tooltip">

                                                <div class="name"><i
                                                        class="attributeRessourceBonus_medium"></i><span><?= HEROI19 ?></span>
                                                </div>
                                            </td>
                                            <td>

                                            </td>

                                            <td class="element progress tooltip">
                                                <div class="progressBar preventMobileSwipeNavigation">
                                                    <div class="bar">
                                                        <div class="decoration"></div>




                                                        <div class=" bar setted filling primary blue"
                                                            style="width:<?php echo $session->heroD['product']; ?>%;">
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>




                                                    <?php if ($freepoints <= 0) { ?>
                                                <td class="element points">
                                                    <input type="text" inputmode="numeric" name="defBonus" disabled=""
                                                        autocomplete="off"
                                                        value="<?php echo $session->heroD['product']; ?>" />
                                                </td>
                                            <?php } ?>









                                            <?php if ($session->heroD['product'] < 100 and $freepoints > 0) {
                                                ?>


                                                <td class="element pointsValueSetter sub plussubhero">
                                                    <a class="setPoint disabled textButtonha2 buttonFramed plus rectangle withIcon green"
                                                        type="button" title="" href="#">
                                                        <svg><svg viewBox="0 0 18 6" class="outline">
                                                                <path d="M16 4H2V2h14z"></path>
                                                            </svg><svg viewBox="0 0 18 6" class="icon">
                                                                <path d="M16 4H2V2h14z"></path>
                                                    </a>
                                                </td>

                                                <td class="element points">
                                                    <div class="inputRatio pointsRatio isRtl">
                                                        <span class="nominator">
                                                            <label class="points">
                                                                <input class="customInput" type="text" inputmode="numeric"
                                                                    name="offBonus" autocomplete="off"
                                                                    value="<?php echo $session->heroD['product']; ?>"
                                                                    name="attributeproductionPoints">
                                                        </span>
                                                        <span class="separator">/</span>
                                                        <span class="denominator">

                                                        </span>
                                                </td>
                                                <td id="myTdValue" class="element pointsValueSetter add plussubhero">
                                                    <a class="textButtonV2 buttonFramed plus rectangle withIcon green"
                                                        type="button" title="" href="#">
                                                        <svg><svg viewBox="0 0 18 18" class="outline">
                                                                <path d="M16 10h-6v6H8v-6H2V8h6V2h2v6h6z"></path>
                                                            </svg><svg viewBox="0 0 18 18" class="icon">
                                                                <path d="M16 10h-6v6H8v-6H2V8h6V2h2v6h6z"></path>
                                                    </a>
                                                </td>
                                                <td>
                                                <td class="current powervalue tooltip">
                                                    <span class="value"><?php echo $session->heroD['product']; ?></span>

                                                <?php } ?>

                                                </table>


                                                <script type="text/javascript">
                                                    window.addEvent('domready', function () {
                                                        if ($('saveHeroAttributes')) {
                                                            $('saveHeroAttributes').addEvent('click', function () {
                                                                window.fireEvent('buttonClicked', [this, { "type": "button", "value": "save changes", "name": "saveHeroAttributes", "id": "saveHeroAttributes", "class": "green disabled", "title": "", "confirm": "", "onclick": "" }]);
                                                            });
                                                        }
                                                    });
                                                </script>
                                    </div>

                                    <script type="text/javascript">
                                        document.addEventListener('DOMContentLoaded', function () {
                                            const hideSwitch = document.getElementById('attackBehaviourHideSwitch');
                                            const fightSwitch = document.getElementById('attackBehaviourFightSwitch');
                                            const switchElement = document.querySelector('.switch');
                                            const labelElement = document.querySelector('.label');

                                            function disableRadioButtons() {
                                                hideSwitch.disabled = true;
                                                fightSwitch.disabled = true;
                                            }

                                            function enableRadioButtons() {
                                                hideSwitch.disabled = false;
                                                fightSwitch.disabled = false;
                                            }

                                            function toggleRadioButtons() {
                                                if (hideSwitch.checked) {
                                                    fightSwitch.checked = true;
                                                } else {
                                                    hideSwitch.checked = true;
                                                }
                                            }

                                            switchElement.addEventListener('click', function (e) {
                                                enableRadioButtons();
                                                toggleRadioButtons();
                                            });

                                            labelElement.addEventListener('click', function (e) {
                                                disableRadioButtons();
                                            });
                                        });


                                        window.addEvent('domready', function () {
                                            // Function to submit the form
                                            function submitForm() {
                                                var form = $('heroAttributesForm');
                                                form.submit();
                                            }

                                            // Add event listeners to radio buttons
                                            $$('input[name="attackBehaviour"]').addEvent('change', function () {
                                                submitForm();
                                            });

                                            $$('input[name="attackBehaviourSwitch"]').addEvent('change', function () {
                                                var selectedValue = this.value;
                                                if (selectedValue === 'hide') {
                                                    $('attackBehaviourHide').checked = true;
                                                } else if (selectedValue === 'fight') {
                                                    $('attackBehaviourFight').checked = true;
                                                }
                                                submitForm();
                                            });

                                            // Event listener for save button, if still needed
                                            if ($('saveHeroAttributesBtn')) {
                                                $('saveHeroAttributesBtn').addEvent('click', function () {
                                                    submitForm();
                                                });
                                            }
                                        });
                                    </script>
                                    <script type="text/javascript">
                                        window.addEvent('domready', function () {
                                            $$('.hero_inventory #attributes .openCloseSwitchBar').addEvent('click', function (e) {
                                                Travian.toggleSwitch($$('.hero_inventory #attributes .heroPropertiesContent'), $$('.hero_inventory #attributes .openCloseSwitchBar .openedClosedSwitch'));
                                                $$('.hero_inventory #attributes .openCloseSwitchBar .availablePoints').toggleClass('hide');
                                            });

                                            var attributeForm = new Travian.Game.Hero.Properties.PropertyForm();
                                            attributeForm.addInputElementByName('saveHeroAttributes');
                                            attributeForm.addInputElementByName('resource');
                                            attributeForm.addInputElementByName('attackBehaviour');
                                            <?php if ($freepoints > 0) { ?>
                                                var propertySetterElement = new Travian.Game.Hero.PropertySetter(attributeForm,
                                                    {
                                                        element: 'attributesOfHero',
                                                        elementAvailablePoints: 'availablePoints',
                                                        availablePoints: <?= $freepoints ?>,
                                                        attributes:
                                                            [
                                                                <?php if ($session->heroD['power'] < 100) { ?>
                                                        new Travian.Game.Hero.PropertySetter.Attribute.Power(
                                                                        {
                                                                            id: 'power',
                                                                            element: 'attributepower',
                                                                            value: <?= $session->heroD['power'] * 100 ?>,
                                                                            usedPoints: <?= $session->heroD['power'] ?>,
                                                                            maxPoints: 100,
                                                                            valueOfItems: <?= $session->heroD['itempower'] ?>,
                                                                            valueBonus: 0
                                                                        })<?php }
                                                                if ($session->heroD['offBonus'] < 100) { ?>
                                                                    ,
                                                                    new Travian.Game.Hero.PropertySetter.Attribute.OffBonus(
                                                                        {
                                                                            id: 'offBonus',
                                                                            element: 'attributeoffBonus',
                                                                            value: <?= round($session->heroD['offBonus']) / 5 ?>,
                                                                            usedPoints: <?= $session->heroD['offBonus'] ?>,
                                                                            maxPoints: 100,
                                                                            valueOfItems: 0,
                                                                            valueBonus: 0
                                                                        })
                                        <?php }
                                                                if ($session->heroD['defBonus'] < 100) { ?>
                                                                    , new Travian.Game.Hero.PropertySetter.Attribute.DefBonus(
                                                                        {
                                                                            id: 'defBonus',
                                                                            element: 'attributedefBonus',
                                                                            value: <?= round($session->heroD['defBonus']) / 5 ?>,
                                                                            usedPoints: <?= $session->heroD['defBonus'] ?>,
                                                                            maxPoints: 100,
                                                                            valueOfItems: 0,
                                                                            valueBonus: 0
                                                                        })
                                        <?php }
                                                                if ($session->heroD['product'] < 100) { ?>
                                                                    ,
                                                                    new Travian.Game.Hero.PropertySetter.Attribute.ProductionPoints(
                                                                        {
                                                                            id: 'productionPoints',
                                                                            element: 'attributeproductionPoints',
                                                                            value: <?= $rp ?>,
                                                                            usedPoints: <?= $session->heroD['product'] ?>,
                                                                            maxPoints: 100,
                                                                            valueOfItems: 0,
                                                                            valueBonus: 0
                                                                        })  <?php } ?>]
                                                    });

                                                attributeForm.addElement('properties', propertySetterElement);
                                                attributeForm.onDirty(false);
                                            <?php } ?>
                                        });
                                    </script>

                                </div>

                            </div>
                        </div>
                        <?php
                        $itemData2 = $database->getItemData($gi['horse']);
                        $speedii = 0;
                        if ($itemData2['type'] == 103) {
                            $speedii += 7;

                        } elseif ($itemData2['type'] == 104) {
                            $speedii += 10;
                        } elseif ($itemData2['type'] == 105) {
                            $speedii += 13;
                        }
                        $itemData2 = $database->getItemData($gi['shoes']);

                        if ($itemData2['type'] >= 100 && $itemData2['type'] <= 102) {
                            if ($itemData2['type'] == 100) {
                                $value = 3;
                            } elseif ($itemData2['type'] == 101) {
                                $value = 4;
                            } elseif ($itemData2['type'] == 102) {
                                $value = 5;
                            }
                            $speedii += $value;
                        }
                        //  $speed=$session->heroD['speed']-SPEED*1.5);
                        if ($session->heroD['hide']) {
                            $check1 = 'checked="checked"';
                            $check2 = '';
                        } else {
                            $check2 = 'checked="checked"';
                            $check1 = '';
                        }
                        ?>







                        <div class="attributeBox">

                            <div class=" heroStatus">

                                <div class="heroStatusMessage ">
                                    <?php echo $heroF->printHeroSt(); ?>
                                </div>
                            </div>
                            <div class="attribute attackBehaviour">
                                <div class="changeResourcesHeadline">وضعیت قهرمان در دفاع :</div>
                                <div class="options">
                                    <br>
                                    <input type="radio" class="radio" name="attackBehaviour" id="attackBehaviourHide"
                                        value="hide" <?= $check1; ?>>
                                    <label for="attackBehaviourHide">در صورت هجوم به شما، قهرمان شما گریز میکند
                                        و محافظت می‌شود. </label>
                                    <br>
                                    <input type="radio" class="radio" name="attackBehaviour" id="attackBehaviourFight"
                                        value="fight" <?= $check2; ?>>
                                    <label for="attackBehaviourFight">قهرمان شما همیشه با نیروهای شما باقی خواهد
                                        ماندك.</label>
                                    <div class="clear">&nbsp;</div>
                                </div>

                                <div class="formV2 heroHideSwitch">

                                    <div class="saveHeroAttributes">
                                        <button id="saveHeroAttributesBtn" type="button" value="save changes"
                                            name="saveHeroAttributes"
                                            class="textButtonV2 buttonFramed rectangle withText green">
                                            <div class="button-content">ذخیره سازی تغییرات</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <script type="application/javascript">
                                jQuery(document).ready(function () {
                                    window.Travian.React.HeroV2.render(
                                        { screen: 'inventory', screenData: { "checksum": "b7ce59", "imageHash": "265783c3a7ffa8c2d9c195698071257b44113103.2644", "direction": "RTL", "gender": "male", "knowledgeBaseLink": "https:\/\/support.travian.com\/support\/solutions\/articles\/7000064021-hero-item-overview-and-mounts", "viewData": { "itemsInventory": [{ "id": 597771, "typeId": 110, "name": "\u0643\u062a\u0627\u0628 \u0627\u0644\u062a\u063a\u064a\u064a\u0631", "placeId": 1, "place": "inventory", "slot": "inventory", "amount": 1, "type": "consumable", "isUsableIfDead": false, "attributes": [{ "descriptionDetails": "\u062a\u064f\u0633\u062a\u062e\u062f\u0645 \u0644\u0627\u0633\u062a\u0639\u0627\u062f\u0629 \u062c\u0645\u064a\u0639 \u0646\u0642\u0627\u0637 \u0627\u0644\u062e\u0635\u0627\u0626\u0635 \u0627\u0644\u062a\u064a \u062a\u0645 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0639 \u0625\u0645\u0643\u0627\u0646\u064a\u0629 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0631\u0629 \u0623\u062e\u0631\u0649.", "effectDescription": "\u0625\u0639\u0627\u062f\u0629 \u062a\u0648\u0632\u064a\u0639 \u0646\u0642\u0627\u0637 \u0627\u0644\u0628\u0637\u0644. \u064a\u062a\u0645 \u062a\u0635\u0641\u064a\u0631 \u0647\u0630\u0647 \u0627\u0644\u0646\u0642\u0627\u0637 (\u0645\u0643\u0627\u0641\u0623\u0629 \u0627\u0644\u0647\u062c\u0648\u0645\u060c \u0645\u0643\u0627\u0641\u0623\u0629 \u0627\u0644\u062f\u0641\u0627\u0639 ...." }, { "descriptionDetails": null, "effectDescription": "\u064a\u062a\u0645 \u062a\u0641\u0639\u064a\u0644\u0647\u0627 \u062d\u064a\u0646 \u0646\u0642\u0644\u0647\u0627 \u0644\u0644\u0628\u0637\u0644" }, { "descriptionDetails": null, "effectDescription": "\u0642\u0627\u0628\u0644 \u0644\u0644\u062a\u0643\u0648\u064a\u0645" }], "tier": 0, "descriptionDetails": "\u062a\u064f\u0633\u062a\u062e\u062f\u0645 \u0644\u0627\u0633\u062a\u0639\u0627\u062f\u0629 \u062c\u0645\u064a\u0639 \u0646\u0642\u0627\u0637 \u0627\u0644\u062e\u0635\u0627\u0626\u0635 \u0627\u0644\u062a\u064a \u062a\u0645 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0639 \u0625\u0645\u0643\u0627\u0646\u064a\u0629 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0631\u0629 \u0623\u062e\u0631\u0649.", "canBeUsed": true, "errorMessage": null, "tooltipErrorMessage": null, "warningMessage": null, "maxInput": 1, "minInput": 0, "defaultInput": 1, "description": "\u062a\u064f\u0633\u062a\u062e\u062f\u0645 \u0644\u0627\u0633\u062a\u0639\u0627\u062f\u0629 \u062c\u0645\u064a\u0639 \u0646\u0642\u0627\u0637 \u0627\u0644\u062e\u0635\u0627\u0626\u0635 \u0627\u0644\u062a\u064a \u062a\u0645 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0639 \u0625\u0645\u0643\u0627\u0646\u064a\u0629 \u0625\u0646\u0641\u0627\u0642\u0647\u0627 \u0645\u0631\u0629 \u0623\u062e\u0631\u0649.", "alreadyEquipped": null, "isEquipped": false, "canBeClicked": true, "clickShortDescription": { "icon": "swap", "text": "\u0627\u0633\u062a\u062e\u062f\u0627\u0645" } }, { "id": 618990, "typeId": 145, "name": "\u0627\u0644\u062e\u0634\u0628", "placeId": 2, "place": "inventory", "slot": "inventory", "amount": 1403, "type": "consumable", "isUsableIfDead": true, "attributes": [{ "descriptionDetails": "\u0627\u0646\u0642\u0644 \u0627\u0644\u0623\u062e\u0634\u0627\u0628 \u0625\u0644\u0649 \u0645\u062e\u0632\u0646 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "effectDescription": "\u0627\u0644\u062e\u0634\u0628" }], "tier": 0, "descriptionDetails": "\u0627\u0646\u0642\u0644 \u0627\u0644\u0623\u062e\u0634\u0627\u0628 \u0625\u0644\u0649 \u0645\u062e\u0632\u0646 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "canBeUsed": true, "errorMessage": null, "tooltipErrorMessage": null, "warningMessage": null, "maxInput": 1403, "minInput": 0, "defaultInput": 1403, "description": "\u0627\u0646\u0642\u0644 \u0627\u0644\u0623\u062e\u0634\u0627\u0628 \u0625\u0644\u0649 \u0645\u062e\u0632\u0646 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "alreadyEquipped": 210, "isEquipped": false, "canBeClicked": true, "clickShortDescription": { "icon": "swap", "text": "\u0627\u0646\u062a\u0642\u0627\u0644" } }, { "id": 618991, "typeId": 146, "name": "\u0627\u0644\u0637\u064a\u0646", "placeId": 3, "place": "inventory", "slot": "inventory", "amount": 778, "type": "consumable", "isUsableIfDead": true, "attributes": [{ "descriptionDetails": "\u0627\u0646\u0642\u0644 \u0627\u0644\u0637\u064a\u0646 \u0625\u0644\u0649 \u0645\u062e\u0632\u0646 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "effectDescription": "\u0627\u0644\u0637\u064a\u0646" }], "tier": 0, "descriptionDetails": "\u0627\u0646\u0642\u0644 \u0627\u0644\u0637\u064a\u0646 \u0625\u0644\u0649 \u0645\u062e\u0632\u0646 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "canBeUsed": true, "errorMessage": null, "tooltipErrorMessage": null, "warningMessage": null, "maxInput": 778, "minInput": 0, "defaultInput": 778, "description": "\u0627\u0646\u0642\u0644 \u0627\u0644\u0637\u064a\u0646 \u0625\u0644\u0649 \u0645\u062e\u0632\u0646 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "alreadyEquipped": 201, "isEquipped": false, "canBeClicked": true, "clickShortDescription": { "icon": "swap", "text": "\u0627\u0646\u062a\u0642\u0627\u0644" } }, { "id": 618992, "typeId": 147, "name": "\u0627\u0644\u062d\u062f\u064a\u062f", "placeId": 4, "place": "inventory", "slot": "inventory", "amount": 778, "type": "consumable", "isUsableIfDead": true, "attributes": [{ "descriptionDetails": "\u0627\u0646\u0642\u0644 \u0627\u0644\u062d\u062f\u064a\u062f \u0625\u0644\u0649 \u0645\u062e\u0632\u0646 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "effectDescription": "\u0627\u0644\u062d\u062f\u064a\u062f" }], "tier": 0, "descriptionDetails": "\u0627\u0646\u0642\u0644 \u0627\u0644\u062d\u062f\u064a\u062f \u0625\u0644\u0649 \u0645\u062e\u0632\u0646 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "canBeUsed": true, "errorMessage": null, "tooltipErrorMessage": null, "warningMessage": null, "maxInput": 778, "minInput": 0, "defaultInput": 778, "description": "\u0627\u0646\u0642\u0644 \u0627\u0644\u062d\u062f\u064a\u062f \u0625\u0644\u0649 \u0645\u062e\u0632\u0646 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "alreadyEquipped": 201, "isEquipped": false, "canBeClicked": true, "clickShortDescription": { "icon": "swap", "text": "\u0627\u0646\u062a\u0642\u0627\u0644" } }, { "id": 618993, "typeId": 148, "name": "\u0627\u0644\u0642\u0645\u062d", "placeId": 5, "place": "inventory", "slot": "inventory", "amount": 778, "type": "consumable", "isUsableIfDead": true, "attributes": [{ "descriptionDetails": "\u0627\u0646\u0642\u0644 \u0627\u0644\u0642\u0645\u062d \u0625\u0644\u0649 \u0635\u0648\u0645\u0639\u0629 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "effectDescription": "\u0627\u0644\u0642\u0645\u062d" }], "tier": 0, "descriptionDetails": "\u0627\u0646\u0642\u0644 \u0627\u0644\u0642\u0645\u062d \u0625\u0644\u0649 \u0635\u0648\u0645\u0639\u0629 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "canBeUsed": true, "errorMessage": null, "tooltipErrorMessage": null, "warningMessage": null, "maxInput": 778, "minInput": 0, "defaultInput": 778, "description": "\u0627\u0646\u0642\u0644 \u0627\u0644\u0642\u0645\u062d \u0625\u0644\u0649 \u0635\u0648\u0645\u0639\u0629 \u0642\u0631\u064a\u062a\u0643 \u0627\u0644\u0646\u0634\u0637\u0629 \u062d\u0627\u0644\u064a\u064b\u0627.", "alreadyEquipped": 111, "isEquipped": false, "canBeClicked": true, "clickShortDescription": { "icon": "swap", "text": "\u0627\u0646\u062a\u0642\u0627\u0644" } }], "itemsEquipped": [{ "id": 74210, "typeId": 103, "name": "\u062d\u0635\u0627\u0646 \u0631\u0643\u0648\u0628\u060c \u062e\u0641\u064a\u0641", "placeId": -7, "place": "horse", "slot": "horse", "amount": 1, "type": "item", "isUsableIfDead": false, "attributes": [{ "descriptionDetails": null, "effectDescription": "&#x202e;&plus;&#x202d;7&#x202c;&#x202c; \u0633\u0631\u0639\u0629 \u0644\u0644\u0628\u0637\u0644 \u0627\u0644\u0641\u0627\u0631\u0633" }], "tier": 1, "descriptionDetails": null, "canBeUsed": true, "errorMessage": null, "tooltipErrorMessage": null, "warningMessage": null, "maxInput": 1, "minInput": 0, "defaultInput": 1, "description": null, "alreadyEquipped": null, "isEquipped": true, "canBeClicked": true, "clickShortDescription": { "icon": "swap", "text": "\u062a\u062c\u0631\u064a\u062f" } }], "heroState": { "isRegenerating": false, "status": { "status": 100 } }, "commonData": { "experiencePerScroll": 10, "experienceBonus": 0, "currentExperience": 191, "heroHomeVillageLoyalty": 100, "heroHomeVillageName": "hamidthcggfff", "loyaltyPerTablet": 1, "activeVillageID": 19736, "activeVillageName": "hamidthcggfff", "currentHealth": 100, "healthDelta": 0, "fullHealth": 100, "useArtworksOneByOneOnly": true } } }, favouriteTab: 'inventory', tabBarName: 'heroV2' },
                                        {},
                                        ["allgemein", "hero", "heroAppearance", "items", "build", "plus", "karte"]);
                                });
                            </script>




















                            <div class="clear">&nbsp;</div>
                        </div>
                        <div class="attributeBox">
                            <div class="heroEquipmentBenefits"><strong> فواید یا مزایای استفاده از ابزارهایی که
                                    پهلوان</strong>
                                <ul>
                                    <li><span class="listIcon"></span><span class="benefit">+<?php echo $speedii; ?>
                                            سرعت برای قهرمان</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div>
                            <div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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