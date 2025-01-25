<?php

include_once "application/Account.php";


require_once ("application/Ranking.php");
$ranking->PlayerClimber();
if(!isset($_GET['id'])){$_GET['id']=1;}
$id=$database->filterIntValue($database->filterVar($_GET['id']));
$_GET['id']=$id;
if(isset($id) && !is_numeric($id)) die('Hacking Attemp');
if(isset($_GET['rank'])){$_GET['rank']=$database->filterIntValue($database->filterVar($_GET['rank']));}
if(isset($_GET['rank']) && !is_numeric($_GET['rank'])) die('Hacking Attemp');
if(isset($_POST['rank'])){$_POST['rank']=$database->filterIntValue($database->filterVar($_POST['rank']));}
if(isset($_POST['rank']) && !is_numeric($_POST['rank'])) die('Hacking Attemp');
$ranking->procRankReq($_GET);
$ranking->procRank($_POST);

?>


<?php include("application/views/html.php");?>





<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE statistics <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> season- buildingsV3">
	
	<script type="text/javascript">
function selectTab(tabID) {
  const tabs = document.querySelectorAll('.tabItem');
  const activeTab = document.querySelector('.tabItem.active');
  
  // Remove active class from the current active tab
  if (activeTab) {
    activeTab.classList.remove('active');
  }

  // Add active class to the selected tab
  document.querySelector(`[data-active-tab="${tabID}"]`).classList.add('active');

  // Store the active tab ID in localStorage
  localStorage.setItem('activeTab', tabID);
}

window.addEventListener('load', () => {
  const activeTab = localStorage.getItem('activeTab');
  
  if (activeTab) {
    selectTab(activeTab);
  } else {
    selectTab(1);
  }
});

jQuery(document).ready(function($) {
  $('.tabItem').click(function() {
    selectTab($(this).data('activeTab'));
  });
});
</script>

<script type="text/javascript">
    window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
</script>
<div id="background">
    <div id="headerBar"></div>
    <div id="bodyWrapper">

        <div id="header">

                <?php
                include("application/views/topheader.php"); // mehdi jan injaro man edit kardam bordam tu hamin file ke berim baghie ja ha ham include konim!


                ?>

        </div>
        <div id="center">

            <?php include("application/views/sideinfo.php"); ?>






<div id="contentOuterContainer" class=" contentPage">
<div class="contentTitle buttonCount1">
                                  <a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="dorf1.php">
                            <svg viewBox="0 0 20 20"><g class="outline">
                                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                                </g><g class="icon">
                                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                                </g></svg>
             </a>
   
<a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="" target="_blank">&nbsp;</a>
                        </div>
                        <div class="contentContainer">
                      <div id="content" class="statistics statisticsVillage">
      
                                <h1 class="titleInHeader"><?=HEADER_STATS?></h1>
								<a type="button" id="tabFavorButton" class="icon contentTitleButton  buttonFramed green withIcon rectangle"  onclick="Travian.api('favourite-tab', {data: {name: 'statistics',key: 'village'},success: function(data) {jQuery('.subNavi .favor').removeClass('favorActive');jQuery('.favor.favorKeyvillage').addClass('favorActive');}});return false;" useicon=""><img src="<?=GP_LOCATION2 ?>x.gif" class="&nbsp;" alt=""></a>
                                

   <div class="contentNavi subNavi">
    <div class="contentNavi tabFavorWrapper">
        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">
            <div class="content favor favorKeyplayer <?= ($_GET['id'] == 1 || $_GET['id'] == 31 || $_GET['id'] == 32 || $_GET['id'] == 7) ? 'favorActive' : 'tabItem normal' ?>">
                <a id="buttonW1" title="" class="tabItem normal" href="statistiken.php?id=1" data-active-tab="1" onclick="setActiveTab(1)">
                    <?= STATISTIC28 ?>
                </a>
            </div>
            <div class="content favor favorKeyalliance <?= ($_GET['id'] == 4 || $_GET['id'] == 41 || $_GET['id'] == 42 || $_GET['id'] == 43) ? 'favorActive' : 'tabItem normal' ?>">
                <a id="buttonF2" title="" class="tabItem normal" href="statistiken.php?id=4" data-active-tab="4" onclick="setActiveTab(4)">
                    <?= STATISTIC29 ?>
                </a>
            </div>
            <div class="content favor favorKeyvillage <?= ($_GET['id'] == 8) ? 'favorActive' : 'tabItem normal' ?>">
                <a id="buttonF3" title="" class="tabItem normal" href="statistiken.php?id=8" data-active-tab="8" onclick="setActiveTab(8)">
                    <?= STATISTIC30 ?>
                </a>
            </div>
            <div class="content favor favorKeyhero <?= ($_GET['id'] == 0) ? 'favorActive' : 'tabItem normal' ?>">
                <a id="buttonM4" title="" class="tabItem normal" href="statistiken.php?id=0" data-active-tab="0" onclick="setActiveTab(0)">
                    <?= STATISTIC31 ?>
                </a>
            </div>
            <div class="content favor favorKeygeneral <?= ($_GET['id'] == 99) ? 'favorActive' : 'tabItem normal' ?>">
            <a id="buttonm5" title="" class="tabItem normal" href="statistiken.php?id=99" data-active-tab="99" onclick="setActiveTab(99)">
                    <?= (ENDLESS)?STATISTIC277:STATISTIC27 ?> و جوایز
                </a>
            </div>
           <?php /* <div class="content favor favorKeybonus">
                <a id="buttonv6" title="" class="tabItem normal" href="#" data-active-tab="test" onclick="setActiveTab('test')">
                    تست شسیس
                </a>
            </div>
            <div class="content favor favorKeyfarms">
                <a id="buttonf7" title="" class="tabItem normal" href="#" data-active-tab="test2" onclick="setActiveTab('test2')">
                    تستشسیشسی
                </a>
            </div>
            <div class="content favor favorKeywonderoftheworld">
                <a id="buttonl8" title="" class="tabItem normal" href="#" data-active-tab="test3" onclick="setActiveTab('test3')">
                    تست یسبیس
                </a>
            </div>
            */?>
        </div>
        <button type="button" class="scrollTo" disabled="disabled"></button>
    </div>
</div>

<script type="text/javascript">
    function setActiveTab(tabID) {
        const tabs = document.querySelectorAll('.tabItem');
        
        // Remove active class from all tabs
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        // Add active class to the clicked tab
        document.querySelector(`[data-active-tab="${tabID}"]`).classList.add('active');

        // Update localStorage with the active tab ID
        localStorage.setItem('activeTab', tabID);
    }

    window.addEventListener('load', () => {
        const activeTab = localStorage.getItem('activeTab');

        if (activeTab) {
            setActiveTab(activeTab);
        } else {
            setActiveTab(1); // تب پیش‌فرض
        }
    });
</script>

        <div class="navigationSpacer"></div>

 <script type="text/javascript">
        jQuery(function() {
            Travian.Game.TabScrollNavigation();
        });
    </script>
<script>
	function messagesFormSelectAll(checkbox) {
		jQuery('#messagesForm').find('input[type=checkbox]').each(function (index, element) {
			element.checked = checkbox.checked;
		}, checkbox);
	}
</script>
					
						
<script>
	function messagesFormSelectAll(checkbox) {
		jQuery('#messagesForm').find('input[type=checkbox]').each(function (index, element) {
			element.checked = checkbox.checked;
		}, checkbox);
	}
</script>



<script type="text/javascript">
    function setActiveTab(tabID) {
        const tabs = document.querySelectorAll('.tabItem');
        
        // Remove active class from all tabs
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        // Add active class to the clicked tab
        document.querySelector(`[data-active-tab="${tabID}"]`).classList.add('active');

        // Update localStorage with the active tab ID
        localStorage.setItem('activeTab', tabID); // ذخیره کردن تب فعال در localStorage
    }

    window.addEventListener('load', () => {
        let activeTab = localStorage.getItem('activeTab'); // بازیابی تب فعال از localStorage

        if (!activeTab) {
            activeTab = 1; // تنظیم تب پیش‌فرض اگر هیچ گزینه‌ای در localStorage نبود
        }

        setActiveTab(activeTab); // فراخوانی تابع برای تنظیم تب فعال
    });
</script>









<?php
if(isset($id)) {
    switch($id) {
        case 31:
            include("application/views/Ranking/player_attack.php");
            break;
        case 32:
            include("application/views/Ranking/player_defend.php");
            break;
        case 7:
            include("application/views/Ranking/player_top10.php");
            break;
        case 4:
            include("application/views/Ranking/alliance.php");
            break;
        case 8:
            include("application/views/Ranking/heroes.php");
            break;
        case 11:
            include("application/views/Ranking/player_1.php");
            break;
        case 12:
            include("application/views/Ranking/player_2.php");
            break;
        case 13:
            include("application/views/Ranking/player_3.php");
            break;
        case 41:
            include("application/views/Ranking/alliance_attack.php");
            break;
        case 42:
            include("application/views/Ranking/alliance_defend.php");
            break;
        case 43:
            include("application/views/Ranking/ally_top10.php");
            break;
        case 0:
            include("application/views/Ranking/newGeneral.php");
            break;
        case 1:
        default:
            include("application/views/Ranking/overview.php");
            break;
        case 99:
            include("application/views/Ranking/ww.php");
            break;
        case 100:
            include("application/views/Ranking/new_tab_1.php"); // محتوای تب جدید 1
            break;
        case 101:
            include("application/views/Ranking/new_tab_2.php"); // محتوای تب جدید 2
            break;
        case 102:
            include("application/views/Ranking/new_tab_3.php"); // محتوای تب جدید 3
            break;
    }
} else {
    include("application/views/Ranking/overview.php");
}
?>
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
        <div id="ce"></div>
    </div>
</body>
</html>
