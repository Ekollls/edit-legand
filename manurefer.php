	
	
	
	
	
	
	
	
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

            <div id="contentOuterContainer" class="contentPage">
    <div class="contentTitle buttonCount2">
        <a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="/dorf2.php">
            <svg viewBox="0 0 20 20">
                <g class="outline">
                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                </g>
                <g class="icon">
                    <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                </g>
            </svg>
        </a>
        <a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://support.travian.com/support/solutions/articles/7000064892-earn-gold-refer-a-friend" target="_blank">&nbsp;</a>
    </div>
    <div class="contentContainer">
        <div id="content" class="referAFriend referAFriendOverview">
            <div id="referAFriend" class="contentV2">
                <div>
                    <h1 class="titleInHeader">دوستانتان را دعوت کنید</h1>
                    <div>
 
 

                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">

<div class="content favor favorKeyplayer <?= ($_GET['id'] == 1 || $_GET['id'] == 31 || $_GET['id'] == 32 || $_GET['id'] == 7) ? 'favorActive' : 'tabItem normal' ?>">
											
          <a id="buttonW1" title="" class="tabItem normal" href="invite.php" data-active-tab="1">دعوت شده ها</a>
                </div>

				
                <div class="content favor favorKeyalliance <?= ($_GET['id'] == 4 || $_GET['id'] == 41 || $_GET['id'] == 42 || $_GET['id'] == 43) ? 'favorActive' : 'tabItem normal' ?>">
                    <a id="buttonF2" title="" class="tabItem  normal" href="referAFriend.php" data-active-tab="4">
                     کد معرفی شما                </a>
                </div>
                <div class="content favor favorKeyalliance <?= ($_GET['id'] == 2) ? 'favorActive' : 'tabItem normal' ?>">
                    <a id="buttonF2" title="" class="tabItem  normal" href="loyalGold.php" data-active-tab="4">
                         طلای وفاداری              </a>
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