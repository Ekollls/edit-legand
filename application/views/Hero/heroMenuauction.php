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
                            <div id="content" class="heroV2Inventory">

 
	
    
            
      

              <h1 class="titleInHeader"><?=$session->username?> - <?php echo U0; ?> <?=LVL."  ". $session->heroD['level']?></h1>

                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">
		
		
		
		
		
		
		

<div class="content favor favorKeyplayer active <?= ($_GET['id'] == 1 || $_GET['id'] == 31 || $_GET['id'] == 32 || $_GET['id'] == 7) ? 'favorActive active' : 'tabItem normal ' ?>">
											
          <a id="buttonW1" title="" class="tabItem active " href="hero_auction.php?action=buy">خرید</a>
                </div>
				

				
                                                                  <div class="content favor favorKeyalliance ">
                    <a id="buttonF2" title="" class="tabItem normal " href="hero_auction.php?action=sell">
                   فروش             </a>
                </div>
                                                                    <div class="content favor favorKeyvillage ">
                    <a id="buttonF3" title="" class="tabItem  normal" href="hero_auction.php?action=bids">
                   پیشنهادات          </a>
                </div>
				
                                                                    <div class="content favor favorKeyhero ">
                    <a id="buttonM4" title="" class="tabItem  normal" href="hero_auction.php?action=bids">
                فعلا که هیچی            </a>
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
