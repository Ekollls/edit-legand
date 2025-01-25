<div class="clear"></div>
<h4 class="round">بهبود سلاح ها و زره ها</h4>
<style>
.container {
    cursor: pointer;
    position: relative;
    border: none; /* حذف حاشیه برای تب‌های غیر فعال */
height:24px;
top:38px;

}

.container.active {
    background-color: white; /* پس‌زمینه سفید برای تب فعال */
    border-top: 2px solid #383838;
    border-left: 1px solid #383838;
    border-right: 1px solid #383838;
    border-bottom: none; /* بدون حاشیه پایین */
	border-radius: 4px;
	
	
  
   


}

.container.normal {
    background-color: transparent; /* پس‌زمینه شفاف برای تب‌های غیر فعال */


}

.container.favorite .star {
    display: block;
}

.star {
    display: none;
    position: absolute;
    top: 0px;
    right: 0px;
    width: 12px;
    height: 12px;


}

.favor {
    cursor: pointer;
	
}

.favor.favorited {
    color: gold;
}

.favor.active {
    border: 2px solid gold;

}

.notification {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border-radius: 5px;
    z-index: 1000;
}

@media (max-width: 768px) {
    .notification {
        width: 90%;
        left: 50%;
        transform: translateX(-50%);
    }
}

    </style>
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


<div class="subTabs">
    <div class="subTabs_tabs">
	
        <div id="tab1" class="container <?php if(!isset($_GET) || $_GET['Sword']) {echo "active favourite";} else {echo "normal";} ?>">
           
       
            <div class="content favor favorKeyoverview ">
                <a id="button6623e7bc53dd0" href="build.php?gid=12&Sword" class="tabItem <?php if(!isset($_GET) || $_GET['Sword']) {echo "active ";} else {echo "normal";} ?>" data-tab-id="4" data-active-tab="1">
                   اسلحه سازی
                </a>
            </div>
            <svg class="star" viewBox="0 0 24 24" fill="white">
                <path d="M12 .587l3.668 7.435L24 9.173l-6 5.847L19.336 24 12 20.021 4.664 24 6 15.02 0 9.173l8.332-1.151z"/>
            </svg>
        </div>
        <div id="tab2" class="container <?php if($_GET['Armor']) {echo "active favourite";} else {echo "normal";} ?>">
  
            <div class="content favor favorKeyattackers ">
                <a id="button6623e7bc53dd2" href="build.php?gid=12&Armor" class="tabItem <?php if( $_GET['Armor']) {echo "active ";} else {echo "normal";} ?>" data-tab-id="41" data-active-tab="4">
                  زره سازی
                </a>
            </div>
            <svg class="star" viewBox="0 0 24 24" fill="white">
                <path d="M12 .587l3.668 7.435L24 9.173l-6 5.847L19.336 24 12 20.021 4.664 24 6 15.02 0 9.173l8.332-1.151z"/>
            </svg>
        </div>
        
        
   
 
   
</div>


</div>
<div class="build_details researches">
    <?php
    if ((isset($_GET['Sword']) )||(!isset($_GET['Sword'])&& !isset($_GET['Armor']))){
        include("12_upgrades_s.php");

    }elseif(isset($_GET['Armor'])){
        include("12_upgrades_a.php");

    }
?>