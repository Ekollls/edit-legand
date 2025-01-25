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
	<div id="contentOuterContainer" class=" contentPage">
                                            <div class="contentTitle ">
                            	<a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="/dorf1.php">
        <svg viewBox="0 0 20 20"><g class="outline">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g><g class="icon">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g></svg>
    </a>
<a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://support.travian.com/support/solutions/articles/7000064021-hero-item-overview-and-mounts" target="_blank">&nbsp;</a>
                        <a id="contextualHelpButton" class="contentTitleButton buttonFramed green withIcon rectangle">&nbsp;</a></div>
                        <div class="contentContainer">
                            <div id="content" class="heroV2 heroV2Inventory">
              <h1 class="titleInHeader"><?=$session->username?> - <?php echo U0; ?> <?=LVL."  ". $session->heroD['level']?></h1>

                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">

<div class="content favor favorKeyplayer <?= ($_GET['id'] == 1 || $_GET['id'] == 31 || $_GET['id'] == 32 || $_GET['id'] == 7) ? 'favorActive' : 'tabItem normal' ?>">
											
<a id="buttonW1" title="" class="tabItem normal" href="hero_inventory.php" data-active-tab="1">لوازم قهرمان</a>
                </div>

				
      <div class="content favor favorKeyalliance <?= ($_GET['id'] == 4 || $_GET['id'] == 41 || $_GET['id'] == 42 || $_GET['id'] == 43) ? 'favorActive' : 'tabItem normal' ?>">
                    <a id="buttonF2" title="" class="tabItem  normal" href="heroskill.php" data-active-tab="4">
                    ویژگیهای قهرمان                </a>
                </div>
    <div class="content favor favorKeyvillage <?= ($_GET['id'] == 8) ? 'favorActive' : 'tabItem  normal ' ?>">
                    <a id="buttonF3" title="" class="tabItem  normal" href="hero.php" data-active-tab="8">
                      صورت قهرمان           </a>
                </div>
				
   <div class="content favor favorKeyhero <?= ($_GET['id'] == 0) ? 'favorActive' : 'tabItem  normal ' ?>">
                    <a id="buttonM4" title="" class="tabItem  normal" href="hero_adventure.php" data-active-tab="0">
                 ماجراجویی            </a>
                </div>

                                            </div>
        <button type="button" class="scrollTo" disabled="disabled"></button>
    </div>
						
                         
                      
    </div>

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




        <div class="navigationSpacer"></div>

<script>
  // اضافه کردن گوشگر رخداد کلیک بر روی لینک‌های تب
  document.getElementById('buttonW1').addEventListener('click', function(event) {
    showTab(1);
  });

  document.getElementById('buttonF3').addEventListener('click', function(event) {
    showTab(2);
  });

  document.getElementById('buttonM4').addEventListener('click', function(event) {
    showTab(3);
  });

  // به روز رسانی تب انتخاب شده
  function showTab(tabId) {
    // حذف کلاس "active" از همه تب‌ها
    jQuery('.tabItem').removeClass('active');

    // اضافه کردن کلاس "active" به تب انتخاب شده
    jQuery('#buttonW' + tabId).addClass('active');
  }

  // تابع برای انتخاب همه پیام‌ها
  function messagesFormSelectAll(checkbox) {
    jQuery('#messagesForm').find('input[type=checkbox]').each(function(index, element) {
      element.checked = checkbox.checked;
    }, checkbox);
  }
</script>