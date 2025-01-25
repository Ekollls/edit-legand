<?php
include_once "application/Account.php";
/*if ($session->goldclub == 0) {
    header("Location:dorf" . $session->link . ".php");
}*/
$gggold = REF_GOLD;
$gggoldpop = $gggold * 10;
if (isset($_GET['earngold']) && isset($_GET['checker']) && $_GET['checker'] == $session->checker) {
    $colldata = $database->query("SELECT * from referals where invitedby = {$session->uid} and uid = {$_GET['earngold']} ");
    $colldata = $colldata[0];
    $varray = $database->getProfileVillages($_GET['earngold']);
    $totalpop = 0;
    $vccount = 0;

    foreach ($varray as $vil) {
        if ($vil['pop'] >= $gggoldpop) {
            $vccount++;
        }
        $totalpop += $vil['pop'];
    }
    if ($colldata['vilage'] < $vccount) {
        $earnable = $vccount - $colldata['vilage'];
        $earnable = $earnable * $gggold;
        $database->modifyGold($session->uid, $earnable, 1);
        $database->query("UPDATE referals SET vilage = {$vccount} where invitedby = {$session->uid} and uid = {$_GET['earngold']} ");
    
        echo $earnable;
    } else {
        echo 0;
    }
    $session->changeChecker();
}
?>




<?php include ("application/views/html.php"); ?>

<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE cropfinder <?php if ($dorf1 == '') {
       echo 'perspectiveBuildings';
   } else {
       echo 'perspectiveResources';
   } ?> <?php echo DIRECTION; ?> buildingsV3">
    <script type="text/javascript">
        window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
    </script>
    <div id="background">
        <div id="headerBar"></div>
        <div id="bodyWrapper">

            <div id="header">

                <?php
                include ("application/views/topheader.php");
            

                ?>

            </div>
            <div id="center">


                <?php include ("application/views/sideinfo.php"); ?>


 
 
 
 
 
 
 
 
 
 
          <?php
                include ("manurefer.php");
              $invite = $database->getInvitedUser($session->uid);
									$colgold=0;
									$refnumm=0;
                                    if (count($invite) > 0) {
                                        foreach ($invite as $invited) {
                                            $colldata = $database->query("SELECT * from referals where invitedby = {$session->uid} and uid = {$invited['id']} ");
                                            $colldata = $colldata[0];
											$colgold += $colldata['vilage']*  $gggold;
											$refnumm++;
										}
									}

                ?>
 
 
 
 
 
 
 
 
 
                    </div>
                    <div class="referralOverview">
                        <div class="referralSummary">
                            <div class="inviteeCount">
                                <div class="title">دوستان با موفقیت معرفی شدند</div>
                                <div class="amount">
                                    <i class="player"></i>
                                    <div class="content"><?=$refnumm?></div>
                                </div>
                            </div>
                            <div class="totalCollected">
                                <div class="title">کل طلای دریافتی</div>
                                <div class="amount">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 51" class="svgGoldCoin">
                                        <defs>
                                            <linearGradient id="a" x1="25.5" x2="25.5" y1="2" y2="49" gradientTransform="rotate(13.28 25.519 25.5)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#d8c383"></stop>
                                                <stop offset="0.47" stop-color="#bb904d"></stop>
                                                <stop offset="0.8" stop-color="#b78548"></stop>
                                                <stop offset="1" stop-color="#c09957"></stop>
                                            </linearGradient>
                                            <linearGradient id="b" x1="25.5" x2="25.5" y1="7.89" y2="43.19" gradientTransform="rotate(67.5 25.502 25.498)" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.06" stop-color="#81481b"></stop>
                                                <stop offset="1" stop-color="#fef6a9"></stop>
                                            </linearGradient>
                                        </defs>
                                        <circle cx="25.5" cy="25.5" r="25.5" fill="#522d1c"></circle>
                                        <circle cx="25.5" cy="25.5" r="23.5" fill="url(#a)" transform="rotate(-13.28 25.5 25.519)"></circle>
                                        <circle cx="25.5" cy="25.5" r="17.52" fill="url(#b)" transform="rotate(-67.5 25.498 25.502)"></circle>
                                        <path fill="#b47b34" d="M42.3 25.5c-.39-22.38-33.21-22.38-33.6 0 .39 22.38 33.21 22.38 33.6 0z"></path>
                                        <path
                                            fill="#c48d3a"
                                            d="M24.64 22.64c-5.05.09-11-3.16-13.78-5.59a16.12 16.12 0 011.44-2.15c12.35 10 13.61 10.06 26 .13a16.07 16.07 0 011.4 2.14c-2.9 2.43-8.7 5.55-13.65 5.47.51.09-1.93.09-1.41 0zm-9.39 1.58a65.65 65.65 0 00-6.05 5.24c.1.38.21.76.33 1.13a33.75 33.75 0 0110.34-6.37zm-3.71 0H8.78c0 .32 0 .64-.06 1v.45c0 .45 0 .88.08 1.31v.36zm2.9-1.22c-.39-.21-2.61-2.34-4.45-4.14-.17.41-.32.83-.46 1.25v.12c2.61 1.77 3.59 2.98 4.91 2.77zm9.14-2.34v-2.27L16.69 11c-.39.23-.77.48-1.14.74s-.6.44-.88.68zm-.41 5.18c-.69-.07-5.26 1.43-11.9 8.39v.1a15.94 15.94 0 001.32 1.82 58.92 58.92 0 0110.58-10.33zm.91 6.79l-.23-1.52a48 48 0 00-9.12 7.19 16 16 0 002.75 1.85c1.62-2.47 4.25-6.08 6.6-7.54zM21.75 9.12c-.42.09-.84.19-1.26.31 1.14 1.7 4.31 5.57 4.85 6.39zm9.07 15.1A33.5 33.5 0 0141 30.44c.12-.38.23-.77.32-1.17a67.28 67.28 0 00-5.87-5.05zm10.91 0h-2.59l2.54 2.88a18.45 18.45 0 00.05-2.88zM37.18 23s2.09-1.29 3.84-2.64c-.14-.46-.3-.9-.48-1.34-1.81 1.76-3.92 3.77-4.29 4a4.77 4.77 0 00.93-.02zm-3.24-11.91l-6.83 7.3v2.25l8.8-8.1a16.37 16.37 0 00-1.97-1.45zM28 25.82h-.49A58.72 58.72 0 0138 36a17.83 17.83 0 001.33-1.89C33.16 27.5 28 25.82 28 25.82zm-1.4 6.79c2.32 1.44 4.92 5 6.54 7.44a17.06 17.06 0 002.7-1.87 47.92 47.92 0 00-9-7.09zm-.32 2.67l.28-.24a7.74 7.74 0 01-2.45 0l.28.24h-.32l-4.21 4.45c1.64.6 3-1.95 5.47-3.68 2.45 1.73 3.83 4.28 5.48 3.68l-4.21-4.45zm1.18-22.21c.77-.92 2-2.56 2.77-3.71l-.44-.12c-.28-.07-.55-.13-.83-.18l-3.63 6.76s.87-1.23 2.14-2.75zm-.62-4.3a18.78 18.78 0 00-3 0l1.49 1.9z"
                                        ></path>
                                        <path fill="#703e19" d="M35.43 15.17h-1.76l-.38.55H18.43l-.37-.55h-1.77l-1 5.78L16 22l2.14-3.13h4.77v14.59c0 1.69-2.57 2.1-2.57 2.1v2.27h11v-2.27s-2.57-.41-2.57-2.1V18.88h4.77L35.7 22l.71-1z"></path>
                                        <path
                                            fill="#dbb561"
                                            d="M33.56 17.88L35.7 21l.71-1.07-1-5.78h-1.74l-.38.55H18.43l-.37-.55h-1.77l-1 5.78L16 21l2.14-3.13h5.26v14.59c0 1.68-3.06 2.1-3.06 2.1V36l.81.82h9.45l.74-.75v-1.51s-3.05-.42-3.05-2.1V17.88z"
                                        ></path>
                                        <path
                                            fill="#faf28a"
                                            d="M15.4 20.07l-.09-.13 1-5.78h1.77l.37.55h14.84l.38-.55h1.76l1 5.78-.08.13-.9-5.27h-1.78l-.38.55H18.43l-.37-.55h-1.77zm5 15.13c.25.07 3.67-.77 3.06-2.74 0 1.68-3.06 2.1-3.06 2.1zm8-2.74c-.62 2 2.82 2.82 3.05 2.74v-.64s-3.14-.42-3.14-2.1z"
                                        ></path>
                                        <path
                                            fill="#a87134"
                                            d="M25.56 4a1.14 1.14 0 010 2.27 1.14 1.14 0 010-2.27zm-3.31 2.58a1.13 1.13 0 00-.4-2.23 1.13 1.13 0 00.4 2.23zM19 7.44a1.13 1.13 0 00-.78-2.13A1.13 1.13 0 0019 7.44zm-3 1.4a1.13 1.13 0 00-1.14-2 1.13 1.13 0 001.14 2zm-2.72 1.91C14.45 9.82 13 8 11.85 9a1.14 1.14 0 001.46 1.75zM11 13.09a1.13 1.13 0 00-1.73-1.46A1.13 1.13 0 0011 13.09zm-1.9 2.73a1.14 1.14 0 00-2-1.14 1.14 1.14 0 001.95 1.14zm-1.41 3a1.13 1.13 0 00-2.13-.78 1.13 1.13 0 002.08.79zM6.78 22a1.14 1.14 0 00-2.24-.4 1.14 1.14 0 002.24.4zm-.29 3.31a1.14 1.14 0 00-2.27 0 1.14 1.14 0 002.27.04zm.28 3.31a1.13 1.13 0 00-2.23.39 1.13 1.13 0 002.23-.35zm.86 3.21a1.13 1.13 0 00-2.13.77 1.13 1.13 0 002.13-.73zm1.4 3a1.14 1.14 0 00-2 1.14A1.14 1.14 0 009 34.88zm1.9 2.73a1.14 1.14 0 00-1.74 1.46c.93 1.19 2.71-.3 1.74-1.41zM13.28 40c-1.11-1-2.6.81-1.46 1.74A1.14 1.14 0 0013.28 40zM16 41.87a1.13 1.13 0 00-1.14 2 1.13 1.13 0 001.14-2zm3 1.4a1.14 1.14 0 00-.78 2.14 1.14 1.14 0 00.78-2.14zm3.21.87a1.13 1.13 0 00-.4 2.23 1.13 1.13 0 00.41-2.23zm3.3.29a1.14 1.14 0 000 2.27 1.14 1.14 0 00.01-2.27zm3.31-.29a1.14 1.14 0 00.4 2.24 1.14 1.14 0 00-.39-2.24zm3.18-.85a1.13 1.13 0 00.78 2.13 1.13 1.13 0 00-.78-2.13zm3-1.41a1.14 1.14 0 001.14 2 1.14 1.14 0 00-1.09-2zM37.78 40a1.14 1.14 0 001.46 1.74A1.14 1.14 0 0037.78 40zm2.35-2.35a1.14 1.14 0 001.74 1.46 1.14 1.14 0 00-1.74-1.48zM42 34.91a1.13 1.13 0 002 1.14 1.13 1.13 0 00-2-1.14zm1.4-3a1.13 1.13 0 002.13.78 1.13 1.13 0 00-2.09-.79zm.86-3.21a1.14 1.14 0 002.24.39 1.14 1.14 0 00-2.2-.4zm.3-3.31a1.14 1.14 0 002.27 0 1.14 1.14 0 00-2.23-.01zm-.29-3.31a1.14 1.14 0 002.24-.4 1.14 1.14 0 00-2.2.39zm-.86-3.21a1.14 1.14 0 002.14-.78 1.14 1.14 0 00-2.1.77zm-1.4-3a1.14 1.14 0 002-1.13 1.14 1.14 0 00-1.96 1.1zm-1.9-2.72a1.14 1.14 0 001.74-1.46 1.14 1.14 0 00-1.7 1.43zm-2.31-2.38A1.14 1.14 0 0039.26 9c-1.11-.94-2.6.84-1.46 1.77zm-2.72-1.91a1.14 1.14 0 001.14-2 1.14 1.14 0 00-1.14 2zm-3-1.41a1.13 1.13 0 00.78-2.13 1.13 1.13 0 00-.79 2.13zm-3.2-.86a1.14 1.14 0 00.39-2.24 1.14 1.14 0 00-.4 2.24z"
                                        ></path>
                                    </svg>
                                    <div class="content"><?=$colgold?></div>
                                </div>
                            </div>
                        </div>
						
                        <div class="noInvitees">
						
						
						
						
					
                        
                                <tbody>
                                    <?php

                                    //echo $gggoldpop;
                                    $invite = $database->getInvitedUser($session->uid);
                                    if (count($invite) > 0) {
                                        foreach ($invite as $invited) {
                                            $colldata = $database->query("SELECT * from referals where invitedby = {$session->uid} and uid = {$invited['id']} ");
                                            $colldata = $colldata[0];
                                            $varray = $database->getProfileVillages($invited['id']);
                                            $totalpop = 0;
                                            $vccount = 0;

                                            foreach ($varray as $vil) {
                                                if ($vil['pop'] >= $gggoldpop) {
                                                    $vccount++;
                                                }
                                                $totalpop += $vil['pop'];
                                            }
                                            $vcount = count($varray);
                                            $uidg = $session->uid;
                                            $go = '<img src="img/x.gif" class="gold" alt="gold">';
                                            $gol = '<img src="' . GP_LOCATE . 'img/a/gold_g.gif">'; ?>




                                            <tr>
                                                <td><?php echo '<a href="spieler.php?uid=' . $database->getUserField($invited['id'], "id", 0) . '">' . $database->getUserField($invited['id'], "username", 0) . '</a>' ?>
                                                </td>

                                                <td><?php echo jdate("Y/m/d H:i:s", $invited['ptime']); ?></td>

                                                <td><?php echo $totalpop; ?></td>

                                                <td><?php echo count($varray); ?></td>

                                                <td>
                                                    <center><?php
                                                    if ($vccount > $colldata['vilage']) {
                                                        ?>
                                                            <a href="?earngold=<?php echo $invited['id']; ?>&checker=<?php echo $session->checker; ?>"
                                                                title="collect"><?php echo $go; ?>(<?php echo $colldata['vilage']; ?>
                                                                از <?php echo $vcount; ?>هنوز جایزه دریافت نکردید . )</a>
                                                        <?php } else {
                                                        echo $gol;
                                                    } ?>




                                                    </center>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td class="none" colspan="6"><?= mkg15 ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
						
						
						
						
						
						
						
						</div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
                        <div class="collectedRewardsTitle">پاداش هایی که جمع آوری کردید</div>
                        <div class="collectedRewardsDescription">ردیابی تعداد سکه های طلایی که بر اساس شماره دهکده (که دوست دعوت شده در آن مستقر شده است)</div>
                        <div class="villageSlots">
                            <div class="villageSlot">
                                <svg class="undefined icon svgVillageSlot" viewBox="0 0 86 86" overflow="visible">
                                    <path class="slot1 false" d="M55.9 2.4C52.6 1.3 49.3.7 45.8.5L45.1 11c5.4.3 10.6 2.1 15.2 5L66 7.2c-3.2-2-6.5-3.6-10.1-4.8z"></path>
                                    <path class="slot2 false" d="M70.2 10.2l-6.7 8.1c4.2 3.5 7.4 8 9.4 13l9.7-3.8c-2.6-6.7-6.9-12.7-12.4-17.3z"></path>
                                    <path class="slot3 false" d="M84.2 32.5L74 35c1.3 5.2 1.3 10.9 0 16l10.1 2.6c1.1-4.3 1.6-9 1.3-13.5-.2-2.5-.6-5.1-1.2-7.6z"></path>
                                    <path class="slot4 false" d="M72.8 54.8c-2 5-5.3 9.5-9.4 13l6.7 8.1c5.5-4.6 9.9-10.5 12.5-17.2l-9.8-3.9z"></path>
                                    <path class="slot5 false" d="M60.2 70.1C55.6 73 50.4 74.7 45 75l.6 10.5h.1c7.1-.5 14.1-2.7 20-6.5l-5.5-8.9z"></path>
                                    <path class="slot6 false" d="M25.8 70.1l-5.6 8.8c5.9 3.8 13 6.1 20.2 6.6L41 75c-5.4-.3-10.6-2-15.2-4.9z"></path>
                                    <path class="slot7 false" d="M13.2 54.8l-9.7 3.9c2.6 6.7 7 12.7 12.5 17.2l6.7-8.1c-4.3-3.5-7.5-8-9.5-13z"></path>
                                    <path class="slot8 false" d="M1.8 32.4C.7 36.7.3 41.3.6 45.7c.2 2.7.6 5.3 1.3 7.9L12 51.1c-1.3-5.2-1.4-10.9 0-16L1.8 32.4z"></path>
                                    <path class="slot9 false" d="M15.9 10.2C10.4 14.8 6 20.8 3.4 27.4l9.7 3.8c2-5 5.2-9.5 9.4-13l-6.6-8z"></path>
                                    <path class="slot10 false" d="M40.3.5C33.1.9 26 3.3 20.1 7.1l5.6 8.8c4.5-2.9 9.8-4.6 15.2-5L40.3.5z"></path>
                                </svg>
                                <i class="checkmark"></i>
                                <div class="content">2</div>
                            </div>
                            <div class="villageSlot">
                                <svg class="undefined icon svgVillageSlot" viewBox="0 0 86 86" overflow="visible">
                                    <path class="slot1 false" d="M55.9 2.4C52.6 1.3 49.3.7 45.8.5L45.1 11c5.4.3 10.6 2.1 15.2 5L66 7.2c-3.2-2-6.5-3.6-10.1-4.8z"></path>
                                    <path class="slot2 false" d="M70.2 10.2l-6.7 8.1c4.2 3.5 7.4 8 9.4 13l9.7-3.8c-2.6-6.7-6.9-12.7-12.4-17.3z"></path>
                                    <path class="slot3 false" d="M84.2 32.5L74 35c1.3 5.2 1.3 10.9 0 16l10.1 2.6c1.1-4.3 1.6-9 1.3-13.5-.2-2.5-.6-5.1-1.2-7.6z"></path>
                                    <path class="slot4 false" d="M72.8 54.8c-2 5-5.3 9.5-9.4 13l6.7 8.1c5.5-4.6 9.9-10.5 12.5-17.2l-9.8-3.9z"></path>
                                    <path class="slot5 false" d="M60.2 70.1C55.6 73 50.4 74.7 45 75l.6 10.5h.1c7.1-.5 14.1-2.7 20-6.5l-5.5-8.9z"></path>
                                    <path class="slot6 false" d="M25.8 70.1l-5.6 8.8c5.9 3.8 13 6.1 20.2 6.6L41 75c-5.4-.3-10.6-2-15.2-4.9z"></path>
                                    <path class="slot7 false" d="M13.2 54.8l-9.7 3.9c2.6 6.7 7 12.7 12.5 17.2l6.7-8.1c-4.3-3.5-7.5-8-9.5-13z"></path>
                                    <path class="slot8 false" d="M1.8 32.4C.7 36.7.3 41.3.6 45.7c.2 2.7.6 5.3 1.3 7.9L12 51.1c-1.3-5.2-1.4-10.9 0-16L1.8 32.4z"></path>
                                    <path class="slot9 false" d="M15.9 10.2C10.4 14.8 6 20.8 3.4 27.4l9.7 3.8c2-5 5.2-9.5 9.4-13l-6.6-8z"></path>
                                    <path class="slot10 false" d="M40.3.5C33.1.9 26 3.3 20.1 7.1l5.6 8.8c4.5-2.9 9.8-4.6 15.2-5L40.3.5z"></path>
                                </svg>
                                <i class="checkmark"></i>
                                <div class="content">3</div>
                            </div>
                            <div class="villageSlot">
                                <svg class="undefined icon svgVillageSlot" viewBox="0 0 86 86" overflow="visible">
                                    <path class="slot1 false" d="M55.9 2.4C52.6 1.3 49.3.7 45.8.5L45.1 11c5.4.3 10.6 2.1 15.2 5L66 7.2c-3.2-2-6.5-3.6-10.1-4.8z"></path>
                                    <path class="slot2 false" d="M70.2 10.2l-6.7 8.1c4.2 3.5 7.4 8 9.4 13l9.7-3.8c-2.6-6.7-6.9-12.7-12.4-17.3z"></path>
                                    <path class="slot3 false" d="M84.2 32.5L74 35c1.3 5.2 1.3 10.9 0 16l10.1 2.6c1.1-4.3 1.6-9 1.3-13.5-.2-2.5-.6-5.1-1.2-7.6z"></path>
                                    <path class="slot4 false" d="M72.8 54.8c-2 5-5.3 9.5-9.4 13l6.7 8.1c5.5-4.6 9.9-10.5 12.5-17.2l-9.8-3.9z"></path>
                                    <path class="slot5 false" d="M60.2 70.1C55.6 73 50.4 74.7 45 75l.6 10.5h.1c7.1-.5 14.1-2.7 20-6.5l-5.5-8.9z"></path>
                                    <path class="slot6 false" d="M25.8 70.1l-5.6 8.8c5.9 3.8 13 6.1 20.2 6.6L41 75c-5.4-.3-10.6-2-15.2-4.9z"></path>
                                    <path class="slot7 false" d="M13.2 54.8l-9.7 3.9c2.6 6.7 7 12.7 12.5 17.2l6.7-8.1c-4.3-3.5-7.5-8-9.5-13z"></path>
                                    <path class="slot8 false" d="M1.8 32.4C.7 36.7.3 41.3.6 45.7c.2 2.7.6 5.3 1.3 7.9L12 51.1c-1.3-5.2-1.4-10.9 0-16L1.8 32.4z"></path>
                                    <path class="slot9 false" d="M15.9 10.2C10.4 14.8 6 20.8 3.4 27.4l9.7 3.8c2-5 5.2-9.5 9.4-13l-6.6-8z"></path>
                                    <path class="slot10 false" d="M40.3.5C33.1.9 26 3.3 20.1 7.1l5.6 8.8c4.5-2.9 9.8-4.6 15.2-5L40.3.5z"></path>
                                </svg>
                                <i class="checkmark"></i>
                                <div class="content">4</div>
                            </div>
                            <div class="villageSlot">
                                <svg class="undefined icon svgVillageSlot" viewBox="0 0 86 86" overflow="visible">
                                    <path class="slot1 false" d="M55.9 2.4C52.6 1.3 49.3.7 45.8.5L45.1 11c5.4.3 10.6 2.1 15.2 5L66 7.2c-3.2-2-6.5-3.6-10.1-4.8z"></path>
                                    <path class="slot2 false" d="M70.2 10.2l-6.7 8.1c4.2 3.5 7.4 8 9.4 13l9.7-3.8c-2.6-6.7-6.9-12.7-12.4-17.3z"></path>
                                    <path class="slot3 false" d="M84.2 32.5L74 35c1.3 5.2 1.3 10.9 0 16l10.1 2.6c1.1-4.3 1.6-9 1.3-13.5-.2-2.5-.6-5.1-1.2-7.6z"></path>
                                    <path class="slot4 false" d="M72.8 54.8c-2 5-5.3 9.5-9.4 13l6.7 8.1c5.5-4.6 9.9-10.5 12.5-17.2l-9.8-3.9z"></path>
                                    <path class="slot5 false" d="M60.2 70.1C55.6 73 50.4 74.7 45 75l.6 10.5h.1c7.1-.5 14.1-2.7 20-6.5l-5.5-8.9z"></path>
                                    <path class="slot6 false" d="M25.8 70.1l-5.6 8.8c5.9 3.8 13 6.1 20.2 6.6L41 75c-5.4-.3-10.6-2-15.2-4.9z"></path>
                                    <path class="slot7 false" d="M13.2 54.8l-9.7 3.9c2.6 6.7 7 12.7 12.5 17.2l6.7-8.1c-4.3-3.5-7.5-8-9.5-13z"></path>
                                    <path class="slot8 false" d="M1.8 32.4C.7 36.7.3 41.3.6 45.7c.2 2.7.6 5.3 1.3 7.9L12 51.1c-1.3-5.2-1.4-10.9 0-16L1.8 32.4z"></path>
                                    <path class="slot9 false" d="M15.9 10.2C10.4 14.8 6 20.8 3.4 27.4l9.7 3.8c2-5 5.2-9.5 9.4-13l-6.6-8z"></path>
                                    <path class="slot10 false" d="M40.3.5C33.1.9 26 3.3 20.1 7.1l5.6 8.8c4.5-2.9 9.8-4.6 15.2-5L40.3.5z"></path>
                                </svg>
                                <i class="checkmark"></i>
                                <div class="content">5</div>
                            </div>
                            <div class="villageSlot">
                                <svg class="undefined icon svgVillageSlot" viewBox="0 0 86 86" overflow="visible">
                                    <path class="slot1 false" d="M55.9 2.4C52.6 1.3 49.3.7 45.8.5L45.1 11c5.4.3 10.6 2.1 15.2 5L66 7.2c-3.2-2-6.5-3.6-10.1-4.8z"></path>
                                    <path class="slot2 false" d="M70.2 10.2l-6.7 8.1c4.2 3.5 7.4 8 9.4 13l9.7-3.8c-2.6-6.7-6.9-12.7-12.4-17.3z"></path>
                                    <path class="slot3 false" d="M84.2 32.5L74 35c1.3 5.2 1.3 10.9 0 16l10.1 2.6c1.1-4.3 1.6-9 1.3-13.5-.2-2.5-.6-5.1-1.2-7.6z"></path>
                                    <path class="slot4 false" d="M72.8 54.8c-2 5-5.3 9.5-9.4 13l6.7 8.1c5.5-4.6 9.9-10.5 12.5-17.2l-9.8-3.9z"></path>
                                    <path class="slot5 false" d="M60.2 70.1C55.6 73 50.4 74.7 45 75l.6 10.5h.1c7.1-.5 14.1-2.7 20-6.5l-5.5-8.9z"></path>
                                    <path class="slot6 false" d="M25.8 70.1l-5.6 8.8c5.9 3.8 13 6.1 20.2 6.6L41 75c-5.4-.3-10.6-2-15.2-4.9z"></path>
                                    <path class="slot7 false" d="M13.2 54.8l-9.7 3.9c2.6 6.7 7 12.7 12.5 17.2l6.7-8.1c-4.3-3.5-7.5-8-9.5-13z"></path>
                                    <path class="slot8 false" d="M1.8 32.4C.7 36.7.3 41.3.6 45.7c.2 2.7.6 5.3 1.3 7.9L12 51.1c-1.3-5.2-1.4-10.9 0-16L1.8 32.4z"></path>
                                    <path class="slot9 false" d="M15.9 10.2C10.4 14.8 6 20.8 3.4 27.4l9.7 3.8c2-5 5.2-9.5 9.4-13l-6.6-8z"></path>
                                    <path class="slot10 false" d="M40.3.5C33.1.9 26 3.3 20.1 7.1l5.6 8.8c4.5-2.9 9.8-4.6 15.2-5L40.3.5z"></path>
                                </svg>
                                <i class="checkmark"></i>
                                <div class="content">6</div>
                            </div>
                            <div class="villageSlot">
                                <svg class="undefined icon svgVillageSlot" viewBox="0 0 86 86" overflow="visible">
                                    <path class="slot1 false" d="M55.9 2.4C52.6 1.3 49.3.7 45.8.5L45.1 11c5.4.3 10.6 2.1 15.2 5L66 7.2c-3.2-2-6.5-3.6-10.1-4.8z"></path>
                                    <path class="slot2 false" d="M70.2 10.2l-6.7 8.1c4.2 3.5 7.4 8 9.4 13l9.7-3.8c-2.6-6.7-6.9-12.7-12.4-17.3z"></path>
                                    <path class="slot3 false" d="M84.2 32.5L74 35c1.3 5.2 1.3 10.9 0 16l10.1 2.6c1.1-4.3 1.6-9 1.3-13.5-.2-2.5-.6-5.1-1.2-7.6z"></path>
                                    <path class="slot4 false" d="M72.8 54.8c-2 5-5.3 9.5-9.4 13l6.7 8.1c5.5-4.6 9.9-10.5 12.5-17.2l-9.8-3.9z"></path>
                                    <path class="slot5 false" d="M60.2 70.1C55.6 73 50.4 74.7 45 75l.6 10.5h.1c7.1-.5 14.1-2.7 20-6.5l-5.5-8.9z"></path>
                                    <path class="slot6 false" d="M25.8 70.1l-5.6 8.8c5.9 3.8 13 6.1 20.2 6.6L41 75c-5.4-.3-10.6-2-15.2-4.9z"></path>
                                    <path class="slot7 false" d="M13.2 54.8l-9.7 3.9c2.6 6.7 7 12.7 12.5 17.2l6.7-8.1c-4.3-3.5-7.5-8-9.5-13z"></path>
                                    <path class="slot8 false" d="M1.8 32.4C.7 36.7.3 41.3.6 45.7c.2 2.7.6 5.3 1.3 7.9L12 51.1c-1.3-5.2-1.4-10.9 0-16L1.8 32.4z"></path>
                                    <path class="slot9 false" d="M15.9 10.2C10.4 14.8 6 20.8 3.4 27.4l9.7 3.8c2-5 5.2-9.5 9.4-13l-6.6-8z"></path>
                                    <path class="slot10 false" d="M40.3.5C33.1.9 26 3.3 20.1 7.1l5.6 8.8c4.5-2.9 9.8-4.6 15.2-5L40.3.5z"></path>
                                </svg>
                                <i class="checkmark"></i>
                                <div class="content">7</div>
                            </div>
                            <div class="villageSlot">
                                <svg class="undefined icon svgVillageSlot" viewBox="0 0 86 86" overflow="visible">
                                    <path class="slot1 false" d="M55.9 2.4C52.6 1.3 49.3.7 45.8.5L45.1 11c5.4.3 10.6 2.1 15.2 5L66 7.2c-3.2-2-6.5-3.6-10.1-4.8z"></path>
                                    <path class="slot2 false" d="M70.2 10.2l-6.7 8.1c4.2 3.5 7.4 8 9.4 13l9.7-3.8c-2.6-6.7-6.9-12.7-12.4-17.3z"></path>
                                    <path class="slot3 false" d="M84.2 32.5L74 35c1.3 5.2 1.3 10.9 0 16l10.1 2.6c1.1-4.3 1.6-9 1.3-13.5-.2-2.5-.6-5.1-1.2-7.6z"></path>
                                    <path class="slot4 false" d="M72.8 54.8c-2 5-5.3 9.5-9.4 13l6.7 8.1c5.5-4.6 9.9-10.5 12.5-17.2l-9.8-3.9z"></path>
                                    <path class="slot5 false" d="M60.2 70.1C55.6 73 50.4 74.7 45 75l.6 10.5h.1c7.1-.5 14.1-2.7 20-6.5l-5.5-8.9z"></path>
                                    <path class="slot6 false" d="M25.8 70.1l-5.6 8.8c5.9 3.8 13 6.1 20.2 6.6L41 75c-5.4-.3-10.6-2-15.2-4.9z"></path>
                                    <path class="slot7 false" d="M13.2 54.8l-9.7 3.9c2.6 6.7 7 12.7 12.5 17.2l6.7-8.1c-4.3-3.5-7.5-8-9.5-13z"></path>
                                    <path class="slot8 false" d="M1.8 32.4C.7 36.7.3 41.3.6 45.7c.2 2.7.6 5.3 1.3 7.9L12 51.1c-1.3-5.2-1.4-10.9 0-16L1.8 32.4z"></path>
                                    <path class="slot9 false" d="M15.9 10.2C10.4 14.8 6 20.8 3.4 27.4l9.7 3.8c2-5 5.2-9.5 9.4-13l-6.6-8z"></path>
                                    <path class="slot10 false" d="M40.3.5C33.1.9 26 3.3 20.1 7.1l5.6 8.8c4.5-2.9 9.8-4.6 15.2-5L40.3.5z"></path>
                                </svg>
                                <i class="checkmark"></i>
                                <div class="content">8</div>
                            </div>
                            <div class="villageSlot">
                                <svg class="undefined icon svgVillageSlot" viewBox="0 0 86 86" overflow="visible">
                                    <path class="slot1 false" d="M55.9 2.4C52.6 1.3 49.3.7 45.8.5L45.1 11c5.4.3 10.6 2.1 15.2 5L66 7.2c-3.2-2-6.5-3.6-10.1-4.8z"></path>
                                    <path class="slot2 false" d="M70.2 10.2l-6.7 8.1c4.2 3.5 7.4 8 9.4 13l9.7-3.8c-2.6-6.7-6.9-12.7-12.4-17.3z"></path>
                                    <path class="slot3 false" d="M84.2 32.5L74 35c1.3 5.2 1.3 10.9 0 16l10.1 2.6c1.1-4.3 1.6-9 1.3-13.5-.2-2.5-.6-5.1-1.2-7.6z"></path>
                                    <path class="slot4 false" d="M72.8 54.8c-2 5-5.3 9.5-9.4 13l6.7 8.1c5.5-4.6 9.9-10.5 12.5-17.2l-9.8-3.9z"></path>
                                    <path class="slot5 false" d="M60.2 70.1C55.6 73 50.4 74.7 45 75l.6 10.5h.1c7.1-.5 14.1-2.7 20-6.5l-5.5-8.9z"></path>
                                    <path class="slot6 false" d="M25.8 70.1l-5.6 8.8c5.9 3.8 13 6.1 20.2 6.6L41 75c-5.4-.3-10.6-2-15.2-4.9z"></path>
                                    <path class="slot7 false" d="M13.2 54.8l-9.7 3.9c2.6 6.7 7 12.7 12.5 17.2l6.7-8.1c-4.3-3.5-7.5-8-9.5-13z"></path>
                                    <path class="slot8 false" d="M1.8 32.4C.7 36.7.3 41.3.6 45.7c.2 2.7.6 5.3 1.3 7.9L12 51.1c-1.3-5.2-1.4-10.9 0-16L1.8 32.4z"></path>
                                    <path class="slot9 false" d="M15.9 10.2C10.4 14.8 6 20.8 3.4 27.4l9.7 3.8c2-5 5.2-9.5 9.4-13l-6.6-8z"></path>
                                    <path class="slot10 false" d="M40.3.5C33.1.9 26 3.3 20.1 7.1l5.6 8.8c4.5-2.9 9.8-4.6 15.2-5L40.3.5z"></path>
                                </svg>
                                <i class="checkmark"></i>
                                <div class="content">9</div>
                            </div>
                            <div class="villageSlot">
                                <svg class="undefined icon svgVillageSlot" viewBox="0 0 86 86" overflow="visible">
                                    <path class="slot1 false" d="M55.9 2.4C52.6 1.3 49.3.7 45.8.5L45.1 11c5.4.3 10.6 2.1 15.2 5L66 7.2c-3.2-2-6.5-3.6-10.1-4.8z"></path>
                                    <path class="slot2 false" d="M70.2 10.2l-6.7 8.1c4.2 3.5 7.4 8 9.4 13l9.7-3.8c-2.6-6.7-6.9-12.7-12.4-17.3z"></path>
                                    <path class="slot3 false" d="M84.2 32.5L74 35c1.3 5.2 1.3 10.9 0 16l10.1 2.6c1.1-4.3 1.6-9 1.3-13.5-.2-2.5-.6-5.1-1.2-7.6z"></path>
                                    <path class="slot4 false" d="M72.8 54.8c-2 5-5.3 9.5-9.4 13l6.7 8.1c5.5-4.6 9.9-10.5 12.5-17.2l-9.8-3.9z"></path>
                                    <path class="slot5 false" d="M60.2 70.1C55.6 73 50.4 74.7 45 75l.6 10.5h.1c7.1-.5 14.1-2.7 20-6.5l-5.5-8.9z"></path>
                                    <path class="slot6 false" d="M25.8 70.1l-5.6 8.8c5.9 3.8 13 6.1 20.2 6.6L41 75c-5.4-.3-10.6-2-15.2-4.9z"></path>
                                    <path class="slot7 false" d="M13.2 54.8l-9.7 3.9c2.6 6.7 7 12.7 12.5 17.2l6.7-8.1c-4.3-3.5-7.5-8-9.5-13z"></path>
                                    <path class="slot8 false" d="M1.8 32.4C.7 36.7.3 41.3.6 45.7c.2 2.7.6 5.3 1.3 7.9L12 51.1c-1.3-5.2-1.4-10.9 0-16L1.8 32.4z"></path>
                                    <path class="slot9 false" d="M15.9 10.2C10.4 14.8 6 20.8 3.4 27.4l9.7 3.8c2-5 5.2-9.5 9.4-13l-6.6-8z"></path>
                                    <path class="slot10 false" d="M40.3.5C33.1.9 26 3.3 20.1 7.1l5.6 8.8c4.5-2.9 9.8-4.6 15.2-5L40.3.5z"></path>
                                </svg>
                                <i class="checkmark"></i>
                                <div class="content">10</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="application/javascript">
                jQuery(document).ready(function () {
                    window.Travian.React.ReferAFriend.render(
                        {
                            activeTab: 1,
                            viewData: {
                                info: {
                                    villageReward: 20,
                                    maxVillageReward: 40,
                                    maxReward: 200,
                                    referAFriendLink: "https:\/\/www.travian.com\/ae?uc=d633d800-f681-11ee-6403-010000002a42",
                                    isRegistrationOpen: true,
                                    maximumMessageLength: 2000,
                                },
                                overview: { invitees: [], inviteeCount: 0, totalCollectedReward: 0, villageSlots: { "2": 0, "3": 0, "4": 0, "5": 0, "6": 0, "7": 0, "8": 0, "9": 0, "10": 0 } },
                                isMobile: false,
                                knowledgeBaseLink: "https:\/\/support.travian.com\/support\/solutions\/articles\/7000064892-earn-gold-refer-a-friend",
                            },
                        },
                        {},
                        ["referAFriend", "allgemein"]
                    );
                });
            </script>


                            <div class="clear">&nbsp;</div>
                        </div>
                        </div>

   </div>
        
                <?php
                include ("application/views/rightsideinfor.php");
                ?>
                <div class="clear"></div>
            </div>
            <?php

            include ("application/views/header.php");
            ?>
        </div>
        <div id="ce"></div>
    </div>


</body>

</html>