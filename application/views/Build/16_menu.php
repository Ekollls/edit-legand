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
        <div class="content "> <a id="buttonc1" class="tabItem infrastructure active" href="/build.php?id=<?=$_GET['id'];?>"> تنظیمات و گریز</a> </div>
      <script type="text/javascript" data-cmp-info="6"> 
	  jQuery(function(){if (jQuery('#buttonc1').length > 0){jQuery('#buttonc1').on('click', function (){jQuery(window).trigger('tabClicked', [this,{"class":"infrastructure normal","title":false,"target":false,"id":"buttonc1","href":"\/build.php?id=<?=$_GET['id'];?>","onclick":false,"enabled":true,"text":"Infrastructure","dialog":false,"plusDialog":false,"goldclubDialog":false,"containerId":"","buttonIdentifier":"buttonc1"}]);});}}); </script> 
      <div class="content "> <a id="buttonn2" class="tabItem military normal" href="/build.php?id=<?=$_GET['id'];?>&amp;t=1"> نمای عمومی </a> </div>
      <script type="text/javascript" data-cmp-info="6"> 
	  jQuery(function(){if (jQuery('#buttonn2').length > 0){jQuery('#buttonn2').on('click', function (){jQuery(window).trigger('tabClicked', [this,{"class":"military active","title":false,"target":false,"id":"buttonn2","href":"\/build.php?id=<?=$_GET['id'];?>&amp;t=1","onclick":false,"enabled":true,"text":"Military","dialog":false,"plusDialog":false,"goldclubDialog":false,"containerId":"","buttonIdentifier":"buttonn2"}]);});}}); </script> 
      <div class="content "> <a id="buttonw3" class="tabItem resources normal" href="/build.php?id=<?=$_GET['id'];?>&amp;t=2"> ارسال نیرو ها </a> </div>
      <script type="text/javascript" data-cmp-info="6"> 
	  jQuery(function(){if (jQuery('#buttonw3').length > 0){jQuery('#buttonw3').on('click', function (){jQuery(window).trigger('tabClicked', [this,{"class":"resources normal","title":false,"target":false,"id":"buttonw3","href":"\/build.php?id=<?=$_GET['id'];?>&amp;t=2","onclick":false,"enabled":true,"text":"Resources","dialog":false,"plusDialog":false,"goldclubDialog":false,"containerId":"","buttonIdentifier":"buttonw3"}]);});}}); </script> 
  
	
					<?php if($session->goldclub){ 
            ?>
            
    <div class="content "> <a id="buttonw4" class="tabItem resources normal" href="/build.php?id=<?=$_GET['id'];?>&amp;t=99"> لیست فارم ها </a> </div>
    
  
            <script type="text/javascript" data-cmp-info="6"> 
	  jQuery(function(){if (jQuery('#buttonw4').length > 0){jQuery('#buttonw4').on('click', function (){jQuery(window).trigger('tabClicked', [this,{"class":"resources normal","title":false,"target":false,"id":"buttonw4","href":"\/build.php?id=<?=$_GET['id'];?>&amp;t=99","onclick":false,"enabled":true,"text":"Resources","dialog":false,"plusDialog":false,"goldclubDialog":false,"containerId":"","buttonIdentifier":"buttonw4"}]);});}}); </script> 
			<div class="content "> <a id="buttonw5" class="tabItem resources normal" href="/build.php?id=<?=$_GET['id'];?>&amp;t=100">تنظیمات گریز لشکریان</a> </div>
    
  
    <script type="text/javascript" data-cmp-info="6"> 
jQuery(function(){if (jQuery('#buttonw5').length > 0){jQuery('#buttonw5').on('click', function (){jQuery(window).trigger('tabClicked', [this,{"class":"resources normal","title":false,"target":false,"id":"buttonw5","href":"\/build.php?id=<?=$_GET['id'];?>&amp;t=99","onclick":false,"enabled":true,"text":"Resources","dialog":false,"plusDialog":false,"goldclubDialog":false,"containerId":"","buttonIdentifier":"buttonw5"}]);});}}); </script> 
<?php
       } 
       ?>			
			
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




