




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





                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">
<div class="content favor favorKeyplayer active <?= ($_GET['id'] == 1 || $_GET['id'] == 31 || $_GET['id'] == 32 || $_GET['id'] == 7) ? 'favorActive' : 'tabItem normal ' ?>">


											
          <a id="buttonW1" title="" class="tabItem normal" href="allianz.php?s=4" data-active-tab="1"><?=PROFM1?></a>
                </div>

				
      <div class="content favor favorKeyalliance <?= ($_GET['id'] == 4 || $_GET['id'] == 41 || $_GET['id'] == 42 || $_GET['id'] == 43) ? 'favorActive' : 'tabItem normal' ?>">
                    <a id="buttonF2" title="" class="tabItem  normal" href="allianz.php" data-active-tab="4">
                     رویداد ها              </a>
                </div>
    <div class="content favor favorKeyvillage <?= ($_GET['id'] == 8) ? 'favorActive' : 'tabItem  normal ' ?>">
                    <a id="buttonF3" title="" class="tabItem  normal" href="allianz.php?s=2" data-active-tab="8">
                     <?=ally8?>           </a>
                </div>
				
   <div class="content favor favorKeyhero <?= ($_GET['id'] == 0) ? 'favorActive' : 'tabItem  normal ' ?>">
                    <a id="buttonM4" title="" class="tabItem  normal" href="allianz.php?s=2" data-active-tab="0">
               <?=ally13?>               </a>
                </div>
     <div class="content favor favorKeygeneral <?= ($_GET['id'] == 99) ? 'favorActive' : 'tabItem  normal ' ?>">
                    <a id="buttonm5" title="" class="tabItem  normal" href="allianz.php?s=3"data-active-tab="99">
               <?=ally9?>               </a>
                </div>
                 <div class="content favor favorKeygeneral <?= ($_GET['id'] == 6) ? 'favorActive' : 'tabItem  normal ' ?>">
      <a id="buttonv6" title="" class="tabItem  normal" href="allianz.php?s=6" data-active-tab="6">
                   بونوس                </a>
                </div>
				                 <div class="content favor favorKeygeneral <?= ($_GET['id'] == 5) ? 'favorActive' : 'tabItem  normal ' ?>">
      <a id="buttonv6" title="" class="tabItem  normal" href="allianz.php?s=5" data-active-tab="5">
                     <?=ally10?>                </a>
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








