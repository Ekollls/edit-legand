
<?php
if(isset($_GET['show'])){
    $artefact = $database->getArtefactDetails($database->FilterIntValue($_GET['show']));
    if($artefact['size'] ==1){
        $isSM = TRUE;
    }

    if($artefact['size'] ==3 || $artefact['size'] ==2){
        $isBG = TRUE;
    }
}
?>
<div class="contentNavi subNavi">
    <div class="contentNavi tabFavorWrapper">
        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">
            <div class="content">
                <a id="buttonc1" class="tabItem infrastructure <?php echo !isset($_GET['t']) && $_GET['id'] == $id && !$isSM && !$isBG ? 'active' : 'normal'; ?>" href="build.php?id=<?php echo $id; ?>" title="<?=PROFM1?>"><?=PROFM1?></a>
            </div>
            <div class="content">
                <a id="buttonc2" class="tabItem infrastructure <?php echo isset($_GET['t']) && $_GET['t'] == 5 ? 'active' : 'normal'; ?>" href="build.php?id=<?php echo $id; ?>&t=5" title="کتیبه های اطراف شما">کتیبه های اطراف شما</a>
            </div>
            <div class="content">
                <a id="buttonc3" class="tabItem infrastructure <?php echo (isset($_GET['t']) && $_GET['t'] == 2) || $isSM ? 'active' : 'normal'; ?>" href="build.php?id=<?php echo $id; ?>&t=2" title="<?=sokr18?>"><?=sokr18?></a>
            </div>
            <div class="content">
                <a id="buttonc4" class="tabItem infrastructure <?php echo (isset($_GET['t']) && $_GET['t'] == 3) || $isBG ? 'active' : 'normal'; ?>" href="build.php?id=<?php echo $id; ?>&t=3" title="<?=sokr20?>"><?=sokr20?></a>
            </div>
        </div>
        <button type="button" class="scrollTo" disabled="disabled"></button>
    </div>
</div>

<script type="text/javascript">
    jQuery(function() {
        jQuery('#buttonc1, #buttonc2, #buttonc3, #buttonc4').each(function() {
            jQuery(this).on('click', function() {
                jQuery(window).trigger('tabClicked', [this, {
                    "class": "infrastructure normal",
                    "title": false,
                    "target": false,
                    "id": jQuery(this).attr('id'),
                    "href": jQuery(this).attr('href'),
                    "onclick": false,
                    "enabled": true,
                    "text": jQuery(this).text(),
                    "dialog": false,
                    "plusDialog": false,
                    "goldclubDialog": false,
                    "containerId": "",
                    "buttonIdentifier": jQuery(this).attr('id')
                }]);
            });
        });
    });
</script>
