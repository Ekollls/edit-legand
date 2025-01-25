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
<?php if(!$session->sit){ ?>

                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">

<div class="content favor favorKeyplayer <?= ($_GET['id'] == 1 || $_GET['id'] == 31 || $_GET['id'] == 32 || $_GET['id'] == 7) ? 'favorActive' : 'tabItem normal' ?>">
											
          <a id="buttonW1" title="" class="tabItem normal" href="spieler.php" data-active-tab="1">پروفایل</a>
                </div>

				
      <div class="content favor favorKeyalliance <?= ($_GET['id'] == 4 || $_GET['id'] == 41 || $_GET['id'] == 42 || $_GET['id'] == 43) ? 'favorActive' : 'tabItem normal' ?>">
                    <a id="buttonF2" title="" class="tabItem  normal" href="spieler.php?s=1" data-active-tab="4">
                     تنظیمات              </a>
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
</script><?php } ?>