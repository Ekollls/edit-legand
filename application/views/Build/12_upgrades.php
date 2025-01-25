<div class="clear"></div>
<h4 class="round">بهبود سلاح ها و زره ها</h4>
<div class="build_details researches">
    <?php
    if ((isset($_GET['Sword']) )||(!isset($_GET['Sword'])&& !isset($_GET['Armor']))){
        include("12_upgrades_s.tpl");

    }elseif(isset($_GET['Armor'])){
        include("12_upgrades_a.tpl");

    }
?>