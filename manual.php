<?php

include("application/Account.php");
include("application/Data/unitdata.php");
include("application/Data/buidata.php");
include("application/Manual.php");


if (isset($_GET['typ']) && isset($_GET['gid'])) {
    header('Location: manual.php?typ=' . $_GET['typ'] . '&s=' . $_GET['gid'] . '');
}
?>



<!DOCTYPE html>
<html>

<head>
    <title><?= SERVER_NAME ?></title>
    <meta http-equiv="cache-control" content="max-age=0"/>
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="content-language" content="<?php echo LANG_UR; ?>"/>
    <link href="<?= GP_LOCATION ?>lang/<?php echo LANG_UR; ?>/compact.css" rel="stylesheet" type="text/css"/>
    <link href="<?= GP_LOCATION ?>lang/<?php echo LANG_UR; ?>/lang.css" rel="stylesheet" type="text/css"/>
    <link href="<?= GP_LOCATION ?>css_rtl/cama.css" rel="stylesheet" type="text/css"/>
	<link href="<?= GP_LOCATION ?>lang/<?php echo LANG_UR; ?>/fixes.css?rev13" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="<?= GP_LOCATION1 ?>disable.js"></script>









	<script type="text/javascript">
		var j$ = $.noConflict();
	</script>
    <script type="text/javascript">
        window.TravianDefaults = {
            Map: { Size: { width: 201, height: 201, left: -100, right: 100, bottom: -100, top: 100 } }
        };
        function getMapSize() {return 100;}
        function getAutoReloadStatus(){return 1;}
    </script>

    <script type="text/javascript" src="crypt.js"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <script type="text/javascript">
        Travian.Translation.add({
            'allgemein.anleitung': '<?php echo $lang['Manual']['Instructions']; ?>',
            'allgemein.cancel': 'Cancel',
            'allgemein.ok': 'OK',
            'allgemein.close': '<?php echo $lang['Daily']['Close']; ?>',
            'cropfinder.keine_ergebnisse': 'There are no results'
        });
        Travian.applicationId = 'T4.4 Game';
        Travian.Game.version = '4.4';
        Travian.Game.worldId = 'vip7';
        Travian.Game.speed = <?php echo SPEED; ?>;
        Travian.Templates = {};
        Travian.Templates.ButtonTemplate = "<button >\n\t<div class=\"button-container addHoverClick\">\n\t\t<div class=\"button-background\">\n\t\t\t<div class=\"buttonStart\">\n\t\t\t\t<div class=\"buttonEnd\">\n\t\t\t\t\t<div class=\"buttonMiddle\"><\/div>\n\t\t\t\t<\/div>\n\t\t\t<\/div>\n\t\t<\/div>\n\t\t<div class=\"button-content\"><\/div>\n\t<\/div>\n<\/button>\n";
    </script>
    <script type="text/javascript">
        Travian.Game.eventJamHtml = '&lt;a href=&quot;http://t4.answers.travian.ir/index.php?aid=249#go2answer&quot; target=&quot;blank&quot; title=&quot;Response&zwnj;Travian&quot;&gt;&lt;span class=&quot;c0 t&quot;&gt;0:00:0&lt;/span&gt;?&lt;/a&gt;'.unescapeHtml();
                Travian.Game.eventJamHtml = '&lt;a href=&quot;javascript:void&quot; onclick=&quot;document.location.reload();&quot;&gt;&lt;img src=&quot;<?=GP_LOCATION2 ?>refresh.png&quot;&gt;&lt;/a&gt;'.unescapeHtml();
            </script>


</head>
<script type="text/javascript">
    window.ajaxToken = '765784eba4d5b4156277301c5674432faca910fc';
    window._player_uuid = '';
    Travian.Game.Preferences.initialize({"highlightsToggle":"true","travian_toggle_hero":"expanded","travian_toggle_infobox":"expanded","travian_toggle_villagelist":"collapsed","travian_toggle_alliance":"expanded","WMBlueprints":"[]","QuestDialogPosition":"{\"position\":null,\"preferenceKey\":\"QuestDialogPosition\"}"});
    Travian.Game.Quest.init();
</script>

<script type="application/javascript">
    Travian.Game.Preferences.initialize({"adSalesVideoSuccessDialogDisabled":"0","allianceReportsFilter":"{\"attackTypes\":[\"16\",\"5\",\"4\",\"3\",\"2\",\"1\",\"19\",\"18\",\"17\",\"15\",\"7\"],\"noOwnAllianceAttacks\":true}","buildingDescriptionCollapsed":"false","entriesPerPage":"10","flagAttributesBoxOpen":"1","lastUsedPaymentMethod":"PAYPAL","marketplaceOffersPerPage":"10","mobileUnitDisplay":"collapsed","shopCountry":"AAB","snowAnimation":"{}","travian_toggle_infobox":"expanded","travian_toggle_villagelist":"collapsed","troopMovementsPerPage":"10"});
    Travian.Game.PaymentWizardEventListener.defaultOptions = {"shopUIVersion":4,"cssClass":"paymentShopV4","data":{"activeTab":"buyGold"}};
</script>
        <script>window.cmp_minimaltracking=true;window.cmp_disable_spa=true;window.cmp_noscreen=true;</script><script>window.gdprAppliesGlobally=true;if(!("cmp_id" in window)||window.cmp_id<1){window.cmp_id=0}if(!("cmp_cdid" in window)){window.cmp_cdid="40dcf06677fd"}if(!("cmp_params" in window)){window.cmp_params=""}if(!("cmp_host" in window)){window.cmp_host="d.delivery.consentmanager.net"}if(!("cmp_cdn" in window)){window.cmp_cdn="cdn.consentmanager.net"}if(!("cmp_proto" in window)){window.cmp_proto="https:"}if(!("cmp_codesrc" in window)){window.cmp_codesrc="1"}window.cmp_getsupportedLangs=function(){var b=["DE","EN","FR","IT","NO","DA","FI","ES","PT","RO","BG","ET","EL","GA","HR","LV","LT","MT","NL","PL","SV","SK","SL","CS","HU","RU","SR","ZH","TR","UK","AR","BS"];if("cmp_customlanguages" in window){for(var a=0;a<window.cmp_customlanguages.length;a++){b.push(window.cmp_customlanguages[a].l.toUpperCase())}}return b};window.cmp_getRTLLangs=function(){var a=["AR"];if("cmp_customlanguages" in window){for(var b=0;b<window.cmp_customlanguages.length;b++){if("r" in window.cmp_customlanguages[b]&&window.cmp_customlanguages[b].r){a.push(window.cmp_customlanguages[b].l)}}}return a};window.cmp_getlang=function(j){if(typeof(j)!="boolean"){j=true}if(j&&typeof(cmp_getlang.usedlang)=="string"&&cmp_getlang.usedlang!==""){return cmp_getlang.usedlang}var g=window.cmp_getsupportedLangs();var c=[];var f=location.hash;var e=location.search;var a="languages" in navigator?navigator.languages:[];if(f.indexOf("cmplang=")!=-1){c.push(f.substr(f.indexOf("cmplang=")+8,2).toUpperCase())}else{if(e.indexOf("cmplang=")!=-1){c.push(e.substr(e.indexOf("cmplang=")+8,2).toUpperCase())}else{if("cmp_setlang" in window&&window.cmp_setlang!=""){c.push(window.cmp_setlang.toUpperCase())}else{if(a.length>0){for(var d=0;d<a.length;d++){c.push(a[d])}}}}}if("language" in navigator){c.push(navigator.language)}if("userLanguage" in navigator){c.push(navigator.userLanguage)}var h="";for(var d=0;d<c.length;d++){var b=c[d].toUpperCase();if(g.indexOf(b)!=-1){h=b;break}if(b.indexOf("-")!=-1){b=b.substr(0,2)}if(g.indexOf(b)!=-1){h=b;break}}if(h==""&&typeof(cmp_getlang.defaultlang)=="string"&&cmp_getlang.defaultlang!==""){return cmp_getlang.defaultlang}else{if(h==""){h="EN"}}h=h.toUpperCase();return h};(function(){var i=document;var b=window;var a="";var g="_en";if("cmp_getlang" in b){a=b.cmp_getlang().toLowerCase();g="_"+a}var f=("cmp_proto" in b)?b.cmp_proto:"https:";if(f!="http:"&&f!="https:"){f="https:"}var c=i.createElement("script");c.setAttribute("data-cmp-ab","1");c.src=f+"//"+b.cmp_cdn+"/delivery/autocdn/cmp-web."+("cmp_id" in b&&b.cmp_id>0?b.cmp_id:"")+("cmp_cdid" in b?"x"+b.cmp_cdid:"")+"."+a.replace("_","").toLowerCase()+".js";c.type="text/javascript";c.async=true;if(i.body){i.body.appendChild(c)}else{if(i.currentScript&&i.currentScript.parentElement){i.currentScript.parentElement.appendChild(c)}else{var h=i.getElementsByTagName("body");if(h.length==0){h=i.getElementsByTagName("div")}if(h.length==0){h=i.getElementsByTagName("span")}if(h.length==0){h=i.getElementsByTagName("ins")}if(h.length==0){h=i.getElementsByTagName("script")}if(h.length==0){h=i.getElementsByTagName("head")}if(h.length>0){h[0].appendChild(c)}}}var c=i.createElement("script");c.src=f+"//"+b.cmp_cdn+"/delivery/js/cmp"+g+".min.js";c.type="text/javascript";c.setAttribute("data-cmp-ab","1");c.async=true;if(i.body){i.body.appendChild(c)}else{if(i.currentScript&&i.currentScript.parentElement){i.currentScript.parentElement.appendChild(c)}else{var h=i.getElementsByTagName("body");if(h.length==0){h=i.getElementsByTagName("div")}if(h.length==0){h=i.getElementsByTagName("span")}if(h.length==0){h=i.getElementsByTagName("ins")}if(h.length==0){h=i.getElementsByTagName("script")}if(h.length==0){h=i.getElementsByTagName("head")}if(h.length>0){h[0].appendChild(c)}}}})();window.cmp_addFrame=function(b){if(!window.frames[b]){if(document.body){var a=document.createElement("iframe");a.style.cssText="display:none";if("cmp_cdn" in window&&"cmp_ultrablocking" in window&&window.cmp_ultrablocking>0){a.src="//"+window.cmp_cdn+"/delivery/empty.html"}a.name=b;document.body.appendChild(a)}else{window.setTimeout(window.cmp_addFrame,10,b)}}};window.cmp_rc=function(h){var b=document.cookie;var f="";var d=0;while(b!=""&&d<100){d++;while(b.substr(0,1)==" "){b=b.substr(1,b.length)}var g=b.substring(0,b.indexOf("="));if(b.indexOf(";")!=-1){var c=b.substring(b.indexOf("=")+1,b.indexOf(";"))}else{var c=b.substr(b.indexOf("=")+1,b.length)}if(h==g){f=c}var e=b.indexOf(";")+1;if(e==0){e=b.length}b=b.substring(e,b.length)}return(f)};window.cmp_stub=function(){var a=arguments;__cmp.a=__cmp.a||[];if(!a.length){return __cmp.a}else{if(a[0]==="ping"){if(a[1]===2){a[2]({gdprApplies:gdprAppliesGlobally,cmpLoaded:false,cmpStatus:"stub",displayStatus:"hidden",apiVersion:"2.0",cmpId:31},true)}else{a[2](false,true)}}else{if(a[0]==="getUSPData"){a[2]({version:1,uspString:window.cmp_rc("")},true)}else{if(a[0]==="getTCData"){__cmp.a.push([].slice.apply(a))}else{if(a[0]==="addEventListener"||a[0]==="removeEventListener"){__cmp.a.push([].slice.apply(a))}else{if(a.length==4&&a[3]===false){a[2]({},false)}else{__cmp.a.push([].slice.apply(a))}}}}}}};window.cmp_gpp_ping=function(){return{gppVersion:"1.0",cmpStatus:"stub",cmpDisplayStatus:"hidden",supportedAPIs:["tcfca","usnat","usca","usva","usco","usut","usct"],cmpId:31}};window.cmp_gppstub=function(){var a=arguments;__gpp.q=__gpp.q||[];if(!a.length){return __gpp.q}var g=a[0];var f=a.length>1?a[1]:null;var e=a.length>2?a[2]:null;if(g==="ping"){return window.cmp_gpp_ping()}else{if(g==="addEventListener"){__gpp.e=__gpp.e||[];if(!("lastId" in __gpp)){__gpp.lastId=0}__gpp.lastId++;var c=__gpp.lastId;__gpp.e.push({id:c,callback:f});return{eventName:"listenerRegistered",listenerId:c,data:true,pingData:window.cmp_gpp_ping()}}else{if(g==="removeEventListener"){var h=false;__gpp.e=__gpp.e||[];for(var d=0;d<__gpp.e.length;d++){if(__gpp.e[d].id==e){__gpp.e[d].splice(d,1);h=true;break}}return{eventName:"listenerRemoved",listenerId:e,data:h,pingData:window.cmp_gpp_ping()}}else{if(g==="getGPPData"){return{sectionId:3,gppVersion:1,sectionList:[],applicableSections:[0],gppString:"",pingData:window.cmp_gpp_ping()}}else{if(g==="hasSection"||g==="getSection"||g==="getField"){return null}else{__gpp.q.push([].slice.apply(a))}}}}}};window.cmp_msghandler=function(d){var a=typeof d.data==="string";try{var c=a?JSON.parse(d.data):d.data}catch(f){var c=null}if(typeof(c)==="object"&&c!==null&&"__cmpCall" in c){var b=c.__cmpCall;window.__cmp(b.command,b.parameter,function(h,g){var e={__cmpReturn:{returnValue:h,success:g,callId:b.callId}};d.source.postMessage(a?JSON.stringify(e):e,"*")})}if(typeof(c)==="object"&&c!==null&&"__uspapiCall" in c){var b=c.__uspapiCall;window.__uspapi(b.command,b.version,function(h,g){var e={__uspapiReturn:{returnValue:h,success:g,callId:b.callId}};d.source.postMessage(a?JSON.stringify(e):e,"*")})}if(typeof(c)==="object"&&c!==null&&"__tcfapiCall" in c){var b=c.__tcfapiCall;window.__tcfapi(b.command,b.version,function(h,g){var e={__tcfapiReturn:{returnValue:h,success:g,callId:b.callId}};d.source.postMessage(a?JSON.stringify(e):e,"*")},b.parameter)}if(typeof(c)==="object"&&c!==null&&"__gppCall" in c){var b=c.__gppCall;window.__gpp(b.command,function(h,g){var e={__gppReturn:{returnValue:h,success:g,callId:b.callId}};d.source.postMessage(a?JSON.stringify(e):e,"*")},"parameter" in b?b.parameter:null,"version" in b?b.version:1)}};window.cmp_setStub=function(a){if(!(a in window)||(typeof(window[a])!=="function"&&typeof(window[a])!=="object"&&(typeof(window[a])==="undefined"||window[a]!==null))){window[a]=window.cmp_stub;window[a].msgHandler=window.cmp_msghandler;window.addEventListener("message",window.cmp_msghandler,false)}};window.cmp_setGppStub=function(a){if(!(a in window)||(typeof(window[a])!=="function"&&typeof(window[a])!=="object"&&(typeof(window[a])==="undefined"||window[a]!==null))){window[a]=window.cmp_gppstub;window[a].msgHandler=window.cmp_msghandler;window.addEventListener("message",window.cmp_msghandler,false)}};window.cmp_addFrame("__cmpLocator");if(!("cmp_disableusp" in window)||!window.cmp_disableusp){window.cmp_addFrame("__uspapiLocator")}if(!("cmp_disabletcf" in window)||!window.cmp_disabletcf){window.cmp_addFrame("__tcfapiLocator")}if(!("cmp_disablegpp" in window)||!window.cmp_disablegpp){window.cmp_addFrame("__gppLocator")}window.cmp_setStub("__cmp");if(!("cmp_disabletcf" in window)||!window.cmp_disabletcf){window.cmp_setStub("__tcfapi")}if(!("cmp_disableusp" in window)||!window.cmp_disableusp){window.cmp_setStub("__uspapi")}if(!("cmp_disablegpp" in window)||!window.cmp_disablegpp){window.cmp_setGppStub("__gpp")};</script><script data-cmp-ab="1" src="https://cdn.consentmanager.net/delivery/autocdn/cmp-web.x40dcf06677fd.en.js" type="text/javascript" async=""></script><script src="https://cdn.consentmanager.net/delivery/js/cmp_en.min.js" type="text/javascript" data-cmp-ab="1" async=""></script><iframe name="__cmpLocator" style="display: none;"></iframe><iframe name="__uspapiLocator" style="display: none;"></iframe><iframe name="__tcfapiLocator" style="display: none;"></iframe><iframe name="__gppLocator" style="display: none;"></iframe>        <div id="reactDialogWrapper"></div>


<body class="manual ar-AE buildingsV1">
    <?php if (!isset($_GET['typ']) && !isset($_GET['s'])) { ?>
        <div id="troops">
            <h3>
                <img src="<?= GP_LOCATION2;?>x.gif" class="unit uunits"> <?php echo $lang['Manual']['Units']; ?>
            </h3>
            <div class="contentNavi tabNavi ">
                <div title="" class="container category1 active">
                    <div class="background-start">&nbsp;</div>
                    <div class="background-end">&nbsp;</div>
                    <div class="content"><a id="buttonN1" onclick="showTroops(1)"" class="
                            tabItem"><?php echo TRIBE1; ?></a></div>
                </div>
                <div title="" class="container category2 normal">
                    <div class="background-start">&nbsp;</div>
                    <div class="background-end">&nbsp;</div>
                    <div class="content"><a id="buttonC2" onclick="showTroops(2)"" class="
                            tabItem"><?php echo TRIBE2; ?></a></div>
                </div>
                <div title="" class="container category3 normal">
                    <div class="background-start">&nbsp;</div>
                    <div class="background-end">&nbsp;</div>
                    <div class="content"><a id="buttonQ3" onclick="showTroops(3)"" class="
                            tabItem"><?php echo TRIBE3; ?></a></div>

                </div>
                <div title="" class="container category6 normal">
                    <div class="background-start">&nbsp;</div>
                    <div class="background-end">&nbsp;</div>
                    <div class="content"><a id="buttonc4" onclick="showTroops(6)"" class="
                            tabItem"><?php echo TRIBE6; ?></a></div>
                </div>
                <div title="" class="container category7 normal">
                    <div class="background-start">&nbsp;</div>
                    <div class="background-end">&nbsp;</div>
                    <div class="content"><a id="buttonh5" onclick="showTroops(7)"" class="
                            tabItem"><?php echo TRIBE7; ?></a></div>
                </div>
                <div class="clear"></div>
            </div>
            <ul class="troops1">
                <?php for ($i = 1; $i <= 10; $i++) {
                    echo '<li><img src="' .GP_LOCATION2.'x.gif" class="unit u' . $i . '"><a href="manual.php?typ=1&amp;s=' . $i . '">' . constant('U' . $i) . '</a></li>';
                } ?>
            </ul>
            <ul class="troops2 hide">
                <?php for ($i = 11; $i <= 20; $i++) {
                    echo '<li><img src="' .GP_LOCATION2.'x.gif" class="unit u' . $i . '"><a href="manual.php?typ=1&amp;s=' . $i . '">' . constant('U' . $i) . '</a></li>';
                } ?>
            </ul>
            <ul class="troops3 hide">
                <?php for ($i = 21; $i <= 30; $i++) {
                    echo '<li><img src="' .GP_LOCATION2.'x.gif" class="unit u' . $i . '"><a href="manual.php?typ=1&amp;s=' . $i . '">' . constant('U' . $i) . '</a></li>';
                } ?>
            </ul>
            <ul class="troops6 hide">
                <?php for ($i = 51; $i <= 60; $i++) {
                    echo '<li><img src="' .GP_LOCATION2.'x.gif" class="unit u' . $i . '"><a href="manual.php?typ=1&amp;s=' . $i . '">' . constant('U' . $i) . '</a></li>';
                }
                ?>
            </ul>
            <ul class="troops7 hide">
                <?php for ($i = 61; $i <= 70; $i++) {
                    echo '<li><img src="' .GP_LOCATION2.'x.gif" class="unit u' . $i . '"><a href="manual.php?typ=1&amp;s=' . $i . '">' . constant('U' . $i) . '</a></li>';
                }
                ?>
            </ul>
        </div>

        <div id="buildings">
            <h3><img src="img/x.gif" class="gebIcon"> <?php echo $lang['Manual']['Building']; ?></h3>

            <div class="contentNavi tabNavi ">


                <div title="" class="container category1 active">
                    <div class="background-start">&nbsp;</div>
                    <div class="background-end">&nbsp;</div>
                    <div class="content"><a id="buttonu6" onclick="showBuildings(1)"" class="
                            tabItem"><?php echo $lang['Manual']['Building1']; ?></a></div>
                </div>
                <div title="" class="container category2 normal">
                    <div class="background-start">&nbsp;</div>
                    <div class="background-end">&nbsp;</div>
                    <div class="content"><a id="buttons7" onclick="showBuildings(2)"" class="
                            tabItem"><?php echo $lang['Manual']['Building2']; ?></a></div>
                </div>
                <div title="" class="container category3 normal">
                    <div class="background-start">&nbsp;</div>
                    <div class="background-end">&nbsp;</div>
                    <div class="content"><a id="buttonv8" onclick="showBuildings(3)"" class="
                            tabItem"><?php echo $lang['Manual']['Building3']; ?></a></div>
                </div>
            </div>

            <div class="clear"></div>

            <ul class="buildings1">
                <li>
                    <img src="img/x.gif" class="gebIcon g10Icon">
                    <a href="manual.php?typ=4&amp;s=10"><?php echo $lang['buildings'][10]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g11Icon">
                    <a href="manual.php?typ=4&amp;s=11"><?php echo $lang['buildings'][11]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g15Icon">
                    <a href="manual.php?typ=4&amp;s=15"><?php echo $lang['buildings'][15]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g17Icon">
                    <a href="manual.php?typ=4&amp;s=17"><?php echo $lang['buildings'][17]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g18Icon">
                    <a href="manual.php?typ=4&amp;s=18"><?php echo $lang['buildings'][18]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g23Icon">
                    <a href="manual.php?typ=4&amp;s=23"><?php echo $lang['buildings'][23]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g24Icon">
                    <a href="manual.php?typ=4&amp;s=24"><?php echo $lang['buildings'][24]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g25Icon">
                    <a href="manual.php?typ=4&amp;s=25"><?php echo $lang['buildings'][25]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g26Icon">
                    <a href="manual.php?typ=4&amp;s=26"><?php echo $lang['buildings'][26]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g27Icon">
                    <a href="manual.php?typ=4&amp;s=27"><?php echo $lang['buildings'][27]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g28Icon">
                    <a href="manual.php?typ=4&amp;s=28"><?php echo $lang['buildings'][28]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g34Icon">
                    <a href="manual.php?typ=4&amp;s=34"><?php echo $lang['buildings'][34]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g35Icon">
                    <a href="manual.php?typ=4&amp;s=35"><?php echo $lang['buildings'][35]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g38Icon">
                    <a href="manual.php?typ=4&amp;s=38"><?php echo $lang['buildings'][38]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g39Icon">
                    <a href="manual.php?typ=4&amp;s=39"><?php echo $lang['buildings'][39]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g40Icon">
                    <a href="manual.php?typ=4&amp;s=40"><?php echo $lang['buildings'][40]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g41Icon">
                    <a href="manual.php?typ=4&amp;s=41"><?php echo $lang['buildings'][41]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g44Icon">
                    <a href="manual.php?typ=4&amp;s=44"><?php echo $lang['buildings'][44]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g45Icon">
                    <a href="manual.php?typ=4&amp;s=45"><?php echo $lang['buildings'][45]; ?></a>
                </li>
                <li></li>
            </ul>
            <ul class="buildings2 hide">
                <li>
                    <img src="img/x.gif" class="gebIcon g13Icon">
                    <a href="manual.php?typ=4&amp;s=13"><?php echo $lang['buildings'][12]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g14Icon">
                    <a href="manual.php?typ=4&amp;s=14"><?php echo $lang['buildings'][14]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g16Icon">
                    <a href="manual.php?typ=4&amp;s=16"><?php echo $lang['buildings'][16]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g19Icon">
                    <a href="manual.php?typ=4&amp;s=19"><?php echo $lang['buildings'][19]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g20Icon">
                    <a href="manual.php?typ=4&amp;s=20"><?php echo $lang['buildings'][20]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g21Icon">
                    <a href="manual.php?typ=4&amp;s=21"><?php echo $lang['buildings'][21]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g22Icon">
                    <a href="manual.php?typ=4&amp;s=22"><?php echo $lang['buildings'][22]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g29Icon">
                    <a href="manual.php?typ=4&amp;s=29"><?php echo $lang['buildings'][29]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g30Icon">
                    <a href="manual.php?typ=4&amp;s=30"><?php echo $lang['buildings'][30]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g31Icon">
                    <a href="manual.php?typ=4&amp;s=31"><?php echo $lang['buildings'][31]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g32Icon">
                    <a href="manual.php?typ=4&amp;s=32"><?php echo $lang['buildings'][32]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g33Icon">
                    <a href="manual.php?typ=4&amp;s=33"><?php echo $lang['buildings'][33]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g42Icon">
                    <a href="manual.php?typ=4&amp;s=42"><?php echo $lang['buildings'][42]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g43Icon">
                    <a href="manual.php?typ=4&amp;s=43"><?php echo $lang['buildings'][43]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g36Icon">
                    <a href="manual.php?typ=4&amp;s=36"><?php echo $lang['buildings'][36]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g37Icon">
                    <a href="manual.php?typ=4&amp;s=37"><?php echo $lang['buildings'][37]; ?></a>
                </li>
                <li></li>
            </ul>
            <ul class="buildings3 hide">
                <li>
                    <img src="img/x.gif" class="gebIcon g1Icon">
                    <a href="manual.php?typ=4&amp;s=1"><?php echo $lang['buildings'][1]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g2Icon">
                    <a href="manual.php?typ=4&amp;s=2"><?php echo $lang['buildings'][2]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g3Icon">
                    <a href="manual.php?typ=4&amp;s=3"><?php echo $lang['buildings'][3]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g4Icon">
                    <a href="manual.php?typ=4&amp;s=4"><?php echo $lang['buildings'][4]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g5Icon">
                    <a href="manual.php?typ=4&amp;s=5"><?php echo $lang['buildings'][5]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g6Icon">
                    <a href="manual.php?typ=4&amp;s=6"><?php echo $lang['buildings'][6]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g7Icon">
                    <a href="manual.php?typ=4&amp;s=7"><?php echo $lang['buildings'][7]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g8Icon">
                    <a href="manual.php?typ=4&amp;s=8"><?php echo $lang['buildings'][8]; ?></a>
                </li>
                <li></li>
                <li>
                    <img src="img/x.gif" class="gebIcon g9Icon">
                    <a href="manual.php?typ=4&amp;s=9"><?php echo $lang['buildings'][9]; ?></a>
                </li>
                <li></li>
            </ul>
        </div>
        <script type="text/javascript">
            jQuery('#troops .troops1').removeClass('hide');
            jQuery('#buildings .buildings1').removeClass('hide');

            function resetContent(menu) {
                jQuery('#' + menu + ' ul').addClass('hide');

                jQuery('#' + menu + ' .container').removeClass('active');
                jQuery('#' + menu + ' .container').addClass('normal');
            }

            function showTroops(vid) {
                resetContent('troops');
                jQuery('#troops .troops' + vid).removeClass('hide');
                // iRedux - Fixed
                jQuery('#troops .contentNavi .category' + vid).removeClass('normal');
                jQuery('#troops .contentNavi .category' + vid).addClass('active');
            }

            function showBuildings(category) {
                resetContent('buildings');
                jQuery('#buildings .buildings' + category).removeClass('hide');
                jQuery('#buildings .contentNavi .category' + category).removeClass('normal');
                jQuery('#buildings .contentNavi .category' + category).addClass('active');
            }
        </script>
    <?php } else { ?>
        <?php if ($_GET['typ'] == 1) { ?>
            <?php include_once("application/views/Manual/Troop.php") ?>
        <?php } else {
            if ($_GET['s'] == 13) {
                header('Location: manual.php?typ=4&s=12');
            }
            if ($_GET['s'] > 45) {
                header('Location: manual.php');
                exit();
            }
            ?>
            <?php include_once("application/views/Manual/Building.php") ?>
        <?php } ?>
        <div class="answers">
            <a class="a arrow" href="https://answers.tramian.ir//copyable/public/index.php?aid=152#go2answer"
                target="_blank"
                title="<?php echo $lang['Manual']['TAnswers']; ?>"><?php echo $lang['Manual']['Answers']; ?></a>
        </div>
    <?php } ?>
    <div id="anwersQuestionMark">
        <a href="https://answers.tramian.ir/?lang=ae&amp;/copyable/public/index.php?aid=268#go2answer" target="_blank"
            title="">
            &nbsp;</a>
    </div>
    <div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 10000;">
        <div class="tip">
            <div class="tip-container">
                <div class="tl"></div>
                <div class="tr"></div>
                <div class="tc"></div>
                <div class="ml"></div>
                <div class="mr"></div>
                <div class="mc"></div>
                <div class="bl"></div>
                <div class="br"></div>
                <div class="bc"></div>
                <div class="tip-contents">
                    <div class="title elementTitle"></div>
                    <div class="text elementText"></div>
                </div>
            </div>
        </div>
    </div>
</body>