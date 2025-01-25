<div class="contentNavi subNavi">
    <div class="contentNavi tabFavorWrapper">
        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">
            <div class="content">
                <a id="buttonc1" class="tabItem infrastructure <?php echo !isset($_GET['t']) ? 'active' : 'normal'; ?>" href="build.php?id=<?php echo $id; ?>"><?php echo RE4; ?></a>
            </div>
            <div class="content">
                <a id="buttonc2" class="tabItem infrastructure <?php echo isset($_GET['t']) && $_GET['t'] == 2 ? 'active' : 'normal'; ?>" href="build.php?id=<?php echo $id; ?>&amp;t=2"><?php echo RE5; ?></a>
            </div>
            <div class="content">
                <a id="buttonc3" class="tabItem infrastructure <?php echo isset($_GET['t']) && $_GET['t'] == 3 ? 'active' : 'normal'; ?>" href="build.php?id=<?php echo $id; ?>&amp;t=3"><?php echo RE6; ?></a>
            </div>
            <div class="content">
                <a id="buttonc4" class="tabItem infrastructure <?php echo isset($_GET['t']) && $_GET['t'] == 4 ? 'active' : 'normal'; ?>" href="build.php?id=<?php echo $id; ?>&amp;t=4"><?php echo RE7; ?></a>
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
