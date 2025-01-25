<?php
include_once "application/Account.php";
include ("application/Profile.php");
$profile->procProfile($_POST);
if(isset($_GET['uid']) && !is_numeric($_GET['uid'])) die('Hacking Attemp');


if(!isset($_GET['uid']) && !isset($_GET['s'])){
    $_GET['uid']=$session->uid;
}

if(isset($_GET['s'])){
$database->isWinner();
}
?>


<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE spieler <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> buildingsV3">
<div id="background">
    <div id="headerBar"></div>


        <div >

            <?php
            include("application/views/topheader.php");


            ?>

        </div>
        <div id="center">


            <?php include("application/views/sideinfo.php"); ?>
<div id="contentOuterContainer" class=" contentPage">
  <div class="contentTitle buttonCount1">
    <a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="dorf1.php">
      <svg viewBox="0 0 20 20">
        <g class="outline">
          <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
        </g>
        <g class="icon">
          <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
        </g>
      </svg>
    </a>
    <a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="" target="_blank">&nbsp;</a>
  </div>
  <div class="contentContainer">
    <div id="content" class="playerProfile playerProfileOverview">
  
      <div id="playerProfile" class="contentV2">
     




   <h1 class='titleInHeader'>Admin Panel</h1>

<div class="contentNavi tabNavi ">
    <div title='' <?php if ((isset($_GET['tid']) && ($_GET['tid'] == 1))) {
        echo 'class="container active"';
    } else {
        echo 'class="container normal"';
    } ?>>
                <div class="background-start">&nbsp;</div>
                <div class="background-end">&nbsp;</div>
                <div class="content favor favorKeyoverview">
            <a href='Admins.php?tid=1'>
                <span class='tabItem'>&#1575;&#1585;&#1587;&#1575;&#1604; &#1662;&#1740;&#1575;&#1605; &#1583;&#1575;&#1582;&#1604; &#1576;&#1575;&#1586;&#1740;</span>
            </a>
        </div>
    </div>
    <div title='' <?php if (!isset($_GET['tid']) || (isset($_GET['tid']) && $_GET['tid'] == 2)) {
        echo 'class="container active"';
    } else {
        echo 'class="container normal"';
    } ?>>
                <div class="background-start">&nbsp;</div>
                <div class="background-end">&nbsp;</div>
                <div class="content favor favorKeyoverview">
				
				                                   <a id="button6623e7bc53dd0" href="Admins.php?tid=2" class="tabItem">
					<?=PROFM1?> 

            </a>
        </div>
    </div>
    <div title='' <?php if (isset($_GET['tid']) && $_GET['tid'] == 3) {
        echo 'class="container active"';
    } else {
        echo 'class="container normal"';
    } ?>>
                <div class="background-start">&nbsp;</div>
                <div class="background-end">&nbsp;</div>
                <div class="content favor favorKeyoverview">
            <a href='Admins.php?tid=3'>
                <span class='tabItem'>&#1605;&#1583;&#1740;&#1585;&#1740;&#1578; &#1662;&#1740;&#1575;&#1605; &#1607;&#1575;</span>
            </a>
        </div>
    </div>
    <div title='' <?php if (isset($_GET['tid']) && $_GET['tid'] == 4) {
        echo 'class="container active"';
    } else {
        echo 'class="container normal"';
    } ?>>
                <div class="background-start">&nbsp;</div>
                <div class="background-end">&nbsp;</div>
                <div class="content favor favorKeyoverview">
            <a href='Admins.php?tid=4'>
                <span class='tabItem'>&#1662;&#1740;&#1575;&#1605; &#1580;&#1593;&#1576;&#1607; &#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578;</span>
            </a>
        </div>
    </div>
    <div title='' <?php if (isset($_GET['tid']) && $_GET['tid'] == 5) {
        echo 'class="container active"';
    } else {
        echo 'class="container normal"';
    } ?>>
                <div class="background-start">&nbsp;</div>
                <div class="background-end">&nbsp;</div>
                <div class="content favor favorKeyoverview">
            <a href='Admins.php?tid=5'>
                <span class='tabItem'>Auction's</span>
            </a>
        </div>
    </div>
    <div title='' <?php if (isset($_GET['tid']) && $_GET['tid'] == 6) {
        echo 'class="container active"';
    } else {
        echo 'class="container normal"';
    } ?>>
                <div class="background-start">&nbsp;</div>
                <div class="background-end">&nbsp;</div>
                <div class="content favor favorKeyoverview">
            <a href='Admins.php?tid=6'>
                <span class='tabItem'>Farm</span>
            </a>
        </div>
    </div>
    <div class='clear'></div>
</div>
<script type="text/javascript">
    window.addEvent('domready', function () {
        $$('.subNavi').each(function (element) {
            new Travian.Game.Menu(element);
        });
    });
</script>
<?php
if (isset($_GET["tid"])) {
    switch ($_GET["tid"]) {
        case 1:
            include("application/Admin/massmessage.php");
            break;
        case 2:
            include("application/Admin/SMssg.php");
            break;
        case 3:
            include("application/Admin/MMssg.php");
            break;
        case 4:
            include("application/Admin/Infobox_message.php");
            break;
        case 5:
            include("application/Admin/addauction.php");
            break;
        case 6:
            include("application/Admin/farm.php");
            break;
        default:
            include("application/Admin/SMssg.php");
            break;
    }
} else {
    include("application/Admin/SMssg.php");
}
?>
</div>
</div>

 
 



<div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear"></div>


                        <div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear"></div>

            <?php
            include("application/views/rightsideinfor.php");
            ?>
            <div class="clear"></div>
        </div>
        <?php

         include("application/views/header.php");
     
        include("application/views/footer.php");
     
        include("application/views/footer.php");
        
        ?>

    </div>
    <div id="ce"></div>
</div>
</body>
</html>