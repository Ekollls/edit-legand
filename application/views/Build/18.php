<div class="navigationSpacer"></div>


<div class="contentNavi tabNavi ">

    <?php
    if ($session->alliance > 0) {
        ?>
        <div title="" class="container  tabItem active">
            <div class="background-start">&nbsp;</div>
            <div class="background-end">&nbsp;</div>
            <div class="content favor favorKeyinfo">

                <button class=" tabItem  "
                    onclick="openMyTab(event, 'Description')">&nbsp;&nbsp;&nbsp;&nbsp;اتحاد&nbsp;&nbsp;&nbsp;&nbsp;</button>

            </div>
        </div>
        <script type="text/javascript">
            jQuery(function () {
                if (jQuery('#button66586e519a691').length > 0) {
                    jQuery('#button66586e519a691').on('click', function () {
                        jQuery(window).trigger('tabClicked', [this, { "class": " normal", "title": false, "target": false, "id": "button66586e519a691", "href": "\/build.php?gid=18&tt=info", "onclick": false, "enabled": true, "text": "\u0627\u0644\u062a\u062d\u0627\u0644\u0641", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "button66586e519a691" }]);

                    });
                }
            });
        </script>
        <div title="" class="container  normal">
            <div class="background-start">&nbsp;</div>
            <div class="background-end">&nbsp;</div>
            <div class="content favor favorKeyleave"> <button class="tabItem" onclick="openMyTab(event, 'Support')">&nbsp;&nbsp;&nbsp;&nbsp;خروج از
                اتحاد&nbsp;&nbsp;&nbsp;&nbsp;</button></div>
           
        </div>
        <script type="text/javascript">
            jQuery(function () {
                if (jQuery('#button66586e519a696').length > 0) {
                    jQuery('#button66586e519a696').on('click', function () {
                        jQuery(window).trigger('tabClicked', [this, { "class": " normal", "title": false, "target": false, "id": "button66586e519a696", "href": "\/build.php?gid=18&tt=leave", "onclick": false, "enabled": true, "text": "\u063a\u0627\u062f\u0631 \u0627\u0644\u062a\u062d\u0627\u0644\u0641", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "button66586e519a696" }]);

                    });
                }
            });
        </script>







        <?php
    } else {
        ?>
        <div title="" class="container  tabItem active">
            <div class="background-start">&nbsp;</div>
            <div class="background-end">&nbsp;</div>
            <div class="content favor favorKeyinfo">

                <button class=" tabItem  "
                    onclick="openMyTab(event, 'Description')">&nbsp;&nbsp;&nbsp;&nbsp;اتحاد&nbsp;&nbsp;&nbsp;&nbsp;</button>

            </div>
        </div>
        <script type="text/javascript">
            jQuery(function () {
                if (jQuery('#button66586e519a691').length > 0) {
                    jQuery('#button66586e519a691').on('click', function () {
                        jQuery(window).trigger('tabClicked', [this, { "class": " normal", "title": false, "target": false, "id": "button66586e519a691", "href": "\/build.php?gid=18&tt=info", "onclick": false, "enabled": true, "text": "\u0627\u0644\u062a\u062d\u0627\u0644\u0641", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "button66586e519a691" }]);

                    });
                }
            });
        </script>
        <div title="" class="container   active">
            <div class="background-start">&nbsp;</div>
            <div class="background-end">&nbsp;</div>
            <div class="content favor favorKeyjoin">

                <button class="tabItem" onclick="openMyTab(event, 'Technical')">&nbsp;&nbsp;&nbsp;&nbsp;دعوت
                    نامه&nbsp;&nbsp;&nbsp;&nbsp;</button>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(function () {
                if (jQuery('#button66586e519a694').length > 0) {
                    jQuery('#button66586e519a694').on('click', function () {
                        jQuery(window).trigger('tabClicked', [this, { "class": " active", "title": false, "target": false, "id": "button66586e519a694", "href": "\/build.php?gid=18&tt=join", "onclick": false, "enabled": true, "text": "\u0627\u0644\u062f\u0639\u0648\u0627\u062a", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "button66586e519a694" }]);

                    });
                }
            });
        </script>
        <?php
    }
    ?>

</div>




<a type="submit" id="nestedTabFavorButton" class="icon nestedTabRowButton " الدعوات"="" كمفضّلة"=""
    onclick="Travian.api('favourite-tab', {data: {name: 'embassyBuildingSubTabs',key: 'join'},success: function(data) {jQuery('.tabNavi .favor').removeClass('favorActive');jQuery('.favor.favorKeyjoin').addClass('favorActive');}});return false;"
    useicon=""><img src="/img/x.gif" class="&nbsp;" alt=""></a>
<div class="clear"></div>
</div>















<div id="Description" class="tabcontent ">

    <?php
    if ($village->resarray['f' . $id] >= 3 && $session->alliance == 0) {
        include ("18_create.php");
    } else {

    }
    if ($session->alliance != 0) {
        echo "
<table cellpadding=\"1\" cellspacing=\"1\" id=\"ally_info\" class=\"transparent\"><div class=\"clear\"></div>

	<tbody><tr>
		<th>" . posl1 . ":</th>
		<td>" . $alliance->allianceArray['tag'] . "</td>
	</tr>
	<tr>
		<th>" . posl2 . "</th>
		<td>" . $alliance->allianceArray['name'] . "</td>

	</tr>
	<tr>
	 
		<td  colspan=\"2\"><a href=\"allianz.php\" class=\"arrow\">" . posl3 . "</a></td>
	</tr></tbody>
	</table>";
    } else {
        ?>
        <div class="clear"></div>

        <?php
        if ($alliance->gotInvite) {
            echo "<p class=\"error2\" style=\"color: #DD0000\">" . $form->getError("ally_accept") . "</p>";
        }
    }
    ?>
</div>








<div id="Technical" class="tabcontent">


    <table cellpadding="1" cellspacing="1" id="join" class="transparent">
        <form method="post" action="build.php">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="a" value="2">

            <thead></thead>
            <tbody>
                <tr>
                    <?php
                    if ($alliance->gotInvite) {
                        foreach ($alliance->inviteArray as $invite) {
                            echo "
             <div>
             <button type=\"button\" value=\"npc\" class=\"icon\" onclick=\"window.location.href = 'build.php?id=" . $id . "&a=2&d=" . $invite['id'] . "'; return false;\"><img class=\"del\" src=\"".GP_LOCATION2."x.gif\" alt=\"Törlés\" title=\"Törlés\" /></button>
        <a href=\"allianz.php?aid=" . $invite['alliance'] . "\">&nbsp;" . $database->getAllianceName($invite['alliance']) . "</a>
       <button type=\"button\"  class=\"green\" onclick=\"window.location.href = 'build.php?id=" . $id . "&a=3&d=" . $invite['id'] . "'; return false;\">
 <div class=\"button-container addHoverClick\">
  <div class=\"button-background\">
   <div class=\"buttonStart\">
    <div class=\"buttonEnd\">
     <div class=\"buttonMiddle\"></div>
    </div>
   </div>
  </div>
  <div class=\"button-content\">" . posl5 . "</div></div></button></div>";
                        }
                    } else {
                        echo "<td colspan=\"3\" class=\"none\">" . posl6 . "</td>";
                    }
                    ?>
                </tr>
            </tbody>
    </table>
</div>












<div id="Support" class="tabcontent">
    <?php
    if (!isset($aid)) {
        $aid = $session->alliance;
    }
    $allianceinfo = $database->getAlliance($aid);
    //echo "<h1>".$database->RemoveXSS($allianceinfo['tag'])." - ".$database->RemoveXSS($allianceinfo['name'])."</h1>";
    include ("alli_menu.php");
    ?>


















    <div id="leave">
        <p>
            <span class="alert bold">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">در صورت خروج از اتحاد، آمار مشارکت شما بازنشانی خواهد شد.
                    </font>
                </font>
            </span>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> این فقط بر رتبه بندی کلی مشارکت ها تأثیر می گذارد. اما این سهم
                    برای اتحاد فعلی باقی خواهد ماند. در صورت بازگشت، مشارکت شما در مجموع صفر خواهد شد.</font>
            </font>
        </p>

        <button type="button" class="icon allianceLeaveLink disabled"
            onclick="if(jQuery(this).hasClass('disabled')){event.stopPropagation(); return false;} else {}"
            onfocus="jQuery('button', 'input[type!=hidden]', 'select').focus(); event.stopPropagation(); return false;"
            useicon="" type="button" id="buttonm7">
            <img src="/img/x.gif" class="del" />
        </button>
        <span class="button-content">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">او از اتحاد خارج شد</font>
            </font>





            <script type="text/javascript">
                window.addEvent('domready', function () {
                    if ($('buttonm7')) {
                        $('buttonm7').addEvent('click', function () {
                            window.fireEvent('buttonClicked', [this, { "type": "button", "value": "Exchange resources", "name": "", "id": "button5487115a9b649", "class": "gold ", "title": "Click here to exchange resources.", "confirm": "", "onclick": "", "dialog": { "cssClass": "white", "draggable": false, "overlayCancel": true, "buttonOk": false, "saveOnUnload": false, "data": { "cmd": "hamidapi", "defaultValues": {}, "did": "<?= $village->wid; ?>" } } }]);
                        });
                    }
                });
            </script>











        </span>
    </div>





















    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>



    <script>

        function openMyTab(evt, myTabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(myTabName).style.display = "block";
            evt.currentTarget.className += " active";
        }


    </script>










    <script type="text/javascript">
        jQuery(function () {
            if (jQuery('a[href="statistiken.php?id=42"]').length > 0) {
                jQuery('a[href="statistiken.php?id=42"]').on('click', function () {
                    jQuery(window).trigger('tabClicked', [this, { "class": "normal", "title": false, "target": false, "href": "\/statistics\/player\/defenders", "onclick": false, "enabled": true, "text": "المدافع", "dialog": false, "plusDialog": false, "goldclubDialog": false, "containerId": "", "buttonIdentifier": "button6623e7bc53dd3" }]);
                });
            }
        });
    </script>

    <a type="submit" class="icon nestedTabRowButton" نظرة="" عامة="" كمفضّلة=""
        onclick="Travian.api('favourite-tab', {data: {name: 'statisticsTablePlayer',key: 'overview'},success: function(data) {jQuery('.tabNavi .favor').removeClass('favorActive');jQuery('.favor.favorKeyoverview').addClass('favorActive');}});return false;"
        useicon="">
        <img src="/img/x.gif" class="&nbsp;" alt="">
    </a>