                        <h1 class="titleInHeader"><?=HEADER_STATS?></h1>

                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">

                                            <div class="content favor favorKeyplayer favorActive">
											
                    <a id="buttonW1" title="" class="tabItem  active" href="statistiken.php">

                        <?=STATISTIC28?>                   </a>
                </div>
                                                                    <div class="content favor favorKeyalliance">
                    <a id="buttonF2" title="" class="tabItem  normal" href="statistiken.php?id=4">
                       <?=STATISTIC28?>                  </a>
                </div>
                                                                    <div class="content favor favorKeyvillage">
                    <a id="buttonF3" title="" class="tabItem  normal" href="statistiken.php?id=8">
                        <?=STATISTIC29?>                 </a>
                </div>
				
                                                                    <div class="content favor favorKeyhero">
                    <a id="buttonM4" title="" class="tabItem  normal" href="statistiken.php?id=0">
                        <?=STATISTIC30?>                  </a>
                </div>
                                                                    <div class="content favor favorKeygeneral">
																	
                    <a id="buttonm5" title="" class="tabItem  normal" href="statistiken.php?id=99">
                     <?=STATISTIC31?>                 </a>
                </div>
                                                                    <div class="content favor favorKeybonus">
                    <a id="buttonv6" title="" class="tabItem  normal" href="/statistics/bonus">
                       <?=STATISTIC27?>                    </a>
                </div>
                                                                    <div class="content favor favorKeyfarms">
                    <a id="buttonf7" title="" class="tabItem  normal" href="/statistics/farms">
                        فارم ها                    </a>
                </div>
                                                                    <div class="content favor favorKeywonderoftheworld">
                    <a id="buttonl8" title="" class="tabItem  normal" href="/statistics/wonderoftheworld">
                        شگفتی جهان                    </a>
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
				
				
				
				