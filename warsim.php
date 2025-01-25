<?php

include_once "application/Account.php";

include_once "application/Simulator.php";
//var_dump($simulator->slm());

$simulators->procSim($_POST);

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
    
    
 
   
    <div class="warsim">
   <div id="content"  class="warsim">
						<h1><?php echo REPORT_WARSIM;?></h1>
						<form action="warsim.php" method="post">
						<?php
                        /*if(isset($_POST['s1']) && isset($_POST['au_1'])){
                            $resuu=$simulator->init($_POST);
                            echo '<h4 class="round">' . JR_ATTACK_COMBAT_MODEL . ': ' . getAttackType(getValue('attack_type')) . '</h4>';
    
    include("application/views/Simulator/res_a.php");
    include("application/views/Simulator/res_d.php");
    
    echo '<h4 class="round">' . JR_WARSIM_ATTACKCONFIG . '</h4>';
                        
                        
                        }*/
if (isset($_POST['result'])) {
   
   // echo '<h4 class="round">' . JR_ATTACK_COMBAT_MODEL . ': ' . getAttackType(getValue('attack_type')) . '</h4>';
    // var_dump( $_POST);die();
    include("application/views/Simulator/res_a.php");
    include("application/views/Simulator/res_d.php");
    
    echo '<h4 class="round">' . JR_WARSIM_ATTACKCONFIG . '</h4>';
    
    handleDemolition($_POST['result'], $form);
}

include("application/views/Simulator/att.php");
include("application/views/Simulator/def.php");

$attackertribe = $_POST['attackertribe'] ?? 0;
$defendertribe = $_POST['defendertribe'] ?? 0;
$enforcestribes =  array();
foreach ($_POST as $key => $value) {
    // Check if the key starts with 'reinf_'
    if (strpos($key, 'reinf_') === 0) {
        // Add the value to the $enforcestribes array
        $enforcestribes[] = $value;
    }
}
?>

<table id="select" cellpadding="1" cellspacing="1">
    <tbody>
        <tr>
            <td><?php echo getFighterTypeHTML('red', JR_WARSIM_ATTACKER, 'attackertribe', $attackertribe); ?></td>
            <td><?php echo getFighterTypeHTML('green', REPORT_DEFENDER, 'defendertribe', $defendertribe); ?></td>
            <td><?php echo getAttackTypeHTML($form); ?></td>
        </tr>
    </tbody>
</table>

<p class="btn">
    <button type="submit" value="Támadás szimulálása" name="s1" id="btn_ok">
        <div class="button-container">
            <div class="button-position">
                <div class="btl"><div class="btr"><div class="btc"></div></div></div>
                <div class="bml"><div class="bmr"><div class="bmc"></div></div></div>
                <div class="bbl"><div class="bbr"><div class="bbc"></div></div></div>
            </div>
            <div class="button-contents"><?php echo JR_WARSIM_SIMULATE; ?></div>
        </div>
    </button>
</p>
</form>
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



</div>
</div>

 
 



<div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear"></div>

                    Account
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
        ?>

    </div>
    <div id="ce"></div>
</div>
</body>
</html>



<?php

function getAttackType($attackType)
{
    switch ($attackType) {
        case 1:
            return JR_ATTACK_SCOUT;
        case 4:
            return JR_ATTACK_RAID;
        default:
            return JR_ATTACK_NORMAL;
    }
}

function handleDemolition($result, $form)
{
    if (isset($result[3], $result[4])) {
        if ($result[4] <= $result[3] && $result[4] != 0) {
            $demolish = $result[4] / $result[3];
            $totallvl = round(sqrt(pow((getValue('kata') + 0.5), 2) - ($result[4] * 8)));
            echo "<p>Építése <b>" . getValue('kata') . "</b> " . LEVEL . " <b>" . $totallvl . "</b> Sérült.</p>";
        }
    }
}

function getFighterTypeHTML($color, $label, $name, $selectedValue)
{
    $html = '<div class="fighterType">';
    $html .= '<div class="boxes boxesColor ' . $color . '">';
    $html .= '<div class="boxes-tl"></div><div class="boxes-tr"></div><div class="boxes-tc"></div>';
    $html .= '<div class="boxes-ml"></div><div class="boxes-mr"></div><div class="boxes-mc"></div>';
    $html .= '<div class="boxes-bl"></div><div class="boxes-br"></div><div class="boxes-bc"></div>';
    $html .= '<div class="boxes-contents">' . $label . '</div></div></div><div class="clear"></div>';
    $html .= '<div class="choice">';
    for ($i = 1; $i <= 7; $i++) {
        $checked = ($selectedValue == $i) ? "checked" : '';
        $html .= '<label><input class="radio" type="radio" name="' . $name . '" value="' . $i . '" ' . $checked . '> ' . constant('TRIBE' . $i) . '</label><br/>';
    }
    $html .= '</div>';

    return $html;
}

function getReinforcementsHTML($enforcestribes)
{
    $html = '<div class="fighterType">';
    $html .= '<div class="boxes boxesColor green">';
    $html .= '<div class="boxes-tl"></div><div class="boxes-tr"></div><div class="boxes-tc"></div>';
    $html .= '<div class="boxes-ml"></div><div class="boxes-mr"></div><div class="boxes-mc"></div>';
    $html .= '<div class="boxes-bl"></div><div class="boxes-br"></div><div class="boxes-bc"></div>';
    $html .= '<div class="boxes-contents">' . REPORT_REINFS . '</div></div></div><div class="clear"></div>';
    $html .= '<div class="choice">';
    for ($i = 1; $i <= 7; $i++) {
        $checked = (in_array($i, $enforcestribes)) ? "checked" : '';
        $html .= '<label><input class="check" type="checkbox" name="reinf_' . $i . '" value="1" ' . $checked . '> ' . constant('TRIBE' . $i) . '</label><br/>';
    }
    $html .= '</div>';

    return $html;
}

function getAttackTypeHTML($form)
{
    $html = '<div class="fighterType">';
    $html .= '<div class="boxes boxesColor darkgray">';
    $html .= '<div class="boxes-tl"></div><div class="boxes-tr"></div><div class="boxes-tc"></div>';
    $html .= '<div class="boxes-ml"></div><div class="boxes-mr"></div><div class="boxes-mc"></div>';
    $html .= '<div class="boxes-bl"></div><div class="boxes-br"></div><div class="boxes-bc"></div>';
    $html .= '<div class="boxes-contents">' . JR_ATTACK_COMBAT_MODEL . '</div></div></div><div class="clear"></div>';
    $html .= '<div class="choice">';
    $html .= '<label><input class="radio" type="radio" name="attack_type" value="3" ' . isChecked($form, 3) . '> ' . JR_ATTACK_NORMAL . '</label><br/>';
    $html .= '<label><input class="radio" type="radio" name="attack_type" value="4" ' . isChecked($form, 4) . '> ' . JR_ATTACK_RAID . '</label><br/>';
    $html .= '<label><input class="radio" type="radio" name="attack_type" value="1" ' . isChecked($form, 1) . '> ' . JR_ATTACK_SCOUT . '</label><br/>';
    $html .= '<input type="hidden" name="uid" value="' . $session->uid . '">';
    $html .= '</div>';

    return $html;
}

function isChecked($form, $value)
{
    return (getValue('attack_type') == $value || getValue('attack_type') == "") ? "checked" : '';
}

?>
