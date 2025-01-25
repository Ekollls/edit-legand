<div id="contentOuterContainer" class=" contentPage">
                                            <div class="contentTitle buttonCount2">
                            	<a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="dorf2.php">
        <svg viewBox="0 0 20 20"><g class="outline">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g><g class="icon">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g></svg>
    </a>
<a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://support.travian.com/support/solutions/articles/7000066441-messages" target="_blank">&nbsp;</a>
                        </div>
                        <div class="contentContainer">
                            <div id="content" class="messages messagesInbox">
                                <h1 class="titleInHeader"><?php echo HEADER_MESSAGES; ?></h1><a type="button" id="tabFavorButton" class="icon contentTitleButton  buttonFramed green withIcon rectangle" صندوق="" الواردات"="" كمفضّلة"="" onclick="Travian.api('favourite-tab', {data: {name: 'messages',key: 'inbox'},success: function(data) {jQuery('.subNavi .favor').removeClass('favorActive');jQuery('.favor.favorKeyinbox').addClass('favorActive');}});return false;" useicon="">
								<img src="/img/x.gif" class="&nbsp;" alt=""></a>   
								
								
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
								
								
                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">

<div class="content favor favorKeyplayer <?php if(!isset($_GET['t'])) { echo "favorActive"; }else{ echo "tabItem normal"; } ?>">
											
          <a id="buttonW1" title="" class="tabItem normal" href="nachrichten.php" data-active-tab="1">پیام ها</a>
                </div>

				
      <div class="content favor favorKeyalliance <?php if(isset($_GET['t']) && $_GET['t'] == 1) { echo "favorActive"; }else{ echo "tabItem normal"; } ?>">
                    <a id="buttonF2" title="" class="tabItem  normal" href="nachrichten.php?t=1" data-active-tab="4">
                  نوشتن            </a>
                </div>
    <div class="content favor favorKeyvillage <?php if(isset($_GET['t']) && $_GET['t'] == 2) { echo "favorActive"; }else{ echo "tabItem normal"; } ?>">
                    <a id="buttonF3" title="" class="tabItem  normal" href="nachrichten.php?t=2" data-active-tab="8">
                     ارسال شده        </a>
                </div>
				
   <div class="content favor favorKeyhero <?php if(isset($_GET['t']) && $_GET['t'] == 3) { echo "favorActive"; }else{ echo "tabItem normal"; } ?>">
                    <a id="buttonM4" title="" class="tabItem  normal" href="nachrichten.php?t=3" data-active-tab="0">
            یادداشت        </a>
                </div>
     <div class="content favor favorKeygeneral <?php if(isset($_GET['t']) && $_GET['t'] == 5) { echo "favorActive"; }else{ echo "tabItem normal"; } ?>">
                    <a id="buttonm5" title="" class="tabItem  normal" href="nachrichten.php?t=5"data-active-tab="99">
         <?=Ignored;?>               </a>
                </div>
				     <div class="content favor favorKeygeneral <?php if(isset($_GET['t']) && $_GET['t'] == 4) { echo "favorActive"; }else{ echo "tabItem normal"; } ?>">

      <a id="buttonv6" title="" class="tabItem  normal" href="nachrichten.php?t=4" data-active-tab="test">
                    ارشیو ها                 </a>
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
