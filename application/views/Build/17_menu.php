<div class="contentNavi subNavi">
    <div class="contentNavi tabFavorWrapper">
        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">
            <div class="content">
                <a id="buttonc1" class="tabItem infrastructure <?php echo !isset($_GET['t']) ? 'active' : 'normal'; ?>" href="/build.php?id=<?php echo $id; ?>"><?php echo $lang['Build']['Overview']; ?></a>
            </div>
            <div class="content">
                <a id="buttonc2" class="tabItem infrastructure <?php echo isset($_GET['t']) && $_GET['t'] == 5 ? 'active' : 'normal'; ?>" href="/build.php?id=<?php echo $id; ?>&amp;t=5"><?php echo SendResouces; ?></a>
            </div>
            <div class="content">
                <a id="buttonc3" class="tabItem infrastructure <?php echo isset($_GET['t']) && $_GET['t'] == 1 ? 'active' : 'normal'; ?>" href="/build.php?id=<?php echo $id; ?>&amp;t=1"><?php echo Buyma; ?></a>
            </div>
            <div class="content">
                <a id="buttonc4" class="tabItem infrastructure <?php echo isset($_GET['t']) && $_GET['t'] == 2 ? 'active' : 'normal'; ?>" href="/build.php?id=<?php echo $id; ?>&amp;t=2"><?php echo Offerma; ?></a>
            </div>
            <?php if($test != 1 && $session->gold >= 3) { ?>
            <div class="content">
                <a id="buttonc5" class="tabItem infrastructure <?php echo isset($_GET['t']) && $_GET['t'] == 3 ? 'active' : 'normal'; ?>" href="#"><?php echo ONPCtrading; ?></a>
            </div>
            <script type="text/javascript">
                                    window.addEvent('domready', function()
                                        {
                                            <?php if(!$isDisabled){ ?>
                                            if($('buttonc5'))
                                            {
                                                $('buttonc5').addEvent('click', function ()
                                                {
                                                    window.fireEvent('buttonClicked', [this, {"type":"button","value":"Exchange resources","name":"","id":"button5487115a9b649","class":"gold ","title":"Click here to exchange resources.","confirm":"","onclick":"","dialog":{"cssClass":"white","draggable":false,"overlayCancel":true,"buttonOk":false,"saveOnUnload":false,"data":{"cmd":"exchangeResources","defaultValues":{"tid":"1","nr":"1","btyp":"1","r1":0,"r2":0,"r3":0,"r4":0,"supply":"1","pzeit":0,"max1":0,"max2":0,"max3":0,"max4":0,"max":0},"did":"<?=$village->wid;?>"}}}]);
                                                });
                                            }
                                            <?php } ?>
                                        });
                                    </script>
            <?php } ?>
            <?php if($test != 1 && $session->goldclub == 1 && count($database->getProfileVillages($session->uid)) > 1) { ?>
            <div class="content">
                <a id="buttonc6" class="tabItem infrastructure <?php echo isset($_GET['t']) && $_GET['t'] == 4 ? 'active' : 'normal'; ?>" href="/build.php?id=<?php echo $id; ?>&amp;t=4"><?php echo rinok0; ?></a>
            </div>
            <?php } ?>
        </div>
        <button type="button" class="scrollTo" disabled="disabled"></button>
    </div>
</div>

<script type="text/javascript" data-cmp-info="6">
    jQuery(function() {
        jQuery('#buttonc1, #buttonc2, #buttonc3, #buttonc4, #buttonc5, #buttonc6').each(function() {
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
