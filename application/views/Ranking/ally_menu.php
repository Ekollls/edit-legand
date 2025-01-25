<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سیستم تب</title>
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
</head>
<body>

<div class="subTabs">
    <div class="subTabs_tabs">
	
        <div id="tab1" class="container <?php if(!isset($_GET) || $_GET['id']==1) {echo "active favourite";} else {echo "normal";} ?>">
           
       
            <div class="content favor favorKeyoverview ">
                <a id="button6623e7bc53dd0" href="statistiken.php?id=4" class="tabItem normal" data-tab-id="4" data-active-tab="1">
                    <?=PROFM1?>
                </a>
            </div>
            <svg class="star" viewBox="0 0 24 24" fill="white">
                <path d="M12 .587l3.668 7.435L24 9.173l-6 5.847L19.336 24 12 20.021 4.664 24 6 15.02 0 9.173l8.332-1.151z"/>
            </svg>
        </div>
        <div id="tab2" class="container <?php if($_GET['id']==41) {echo "active favourite";} else {echo "normal";} ?>">
  
            <div class="content favor favorKeyattackers ">
                <a id="button6623e7bc53dd2" href="statistiken.php?id=41" class="tabItem normal" data-tab-id="41" data-active-tab="4">
                    <?=OTPRAV3?>
                </a>
            </div>
            <svg class="star" viewBox="0 0 24 24" fill="white">
                <path d="M12 .587l3.668 7.435L24 9.173l-6 5.847L19.336 24 12 20.021 4.664 24 6 15.02 0 9.173l8.332-1.151z"/>
            </svg>
        </div>
        <div id="tab3" class="container <?php if($_GET['id']==42) {echo "active favourite";} else {echo "normal";} ?>">
   
            <div class="content favor favorKeydefenders">
                <a id="button6623e7bc53dd3" href="statistiken.php?id=42" class="tabItem normal" data-tab-id="42" data-active-tab="8">
                    <?=STATISTIC37?>
                </a>
            </div>
            <svg class="star" viewBox="0 0 24 24" fill="white">
                <path d="M12 .587l3.668 7.435L24 9.173l-6 5.847L19.336 24 12 20.021 4.664 24 6 15.02 0 9.173l8.332-1.151z"/>
            </svg>
        </div>
        <div id="tab4" class="container <?php if($_GET['id']==43) {echo "active favourite";} else {echo "normal";} ?>">
  
            <div class="content favor favorKeytop10">
                <a id="button6623e7bc53dd4" href="statistiken.php?id=43" class="tabItem normal" data-tab-id="43" data-active-tab="0">
                   10 نفر <?=STATISTIC9?> 
                </a>
            </div>
            <svg class="star" viewBox="0 0 24 24" fill="white">
                <path d="M12 .587l3.668 7.435L24 9.173l-6 5.847L19.336 24 12 20.021 4.664 24 6 15.02 0 9.173l8.332-1.151z"/>
            </svg>
        </div>
   
 
    <a type="submit" id="nestedTabFavorButton" class="favor" title="كمفضّلة">
        <svg viewBox="0 0 48 48" fill="gold">
            <path d="m11.7 44 4.6-15.2L4 20h15.2L24 4l4.8 16H44l-12.3 8.8L36.4 44 24 34.6Z"></path>
        </svg>
    </a>
</div>

<div id="notification" class="notification">
    تب پیش‌فرض انتخاب شد
</div>
</div>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.container');
    const favorButton = document.getElementById('nestedTabFavorButton');
    const notification = document.getElementById('notification');

    // تنظیم تب فعال در بارگذاری اولیه
    const activeTabId = localStorage.getItem('activeTabId') || 'tab1';
    setActiveTab(activeTabId);

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const tabId = tab.id;
            setActiveTab(tabId);
            localStorage.setItem('activeTabId', tabId);
        });
    });

    // وضعیت اولیه دکمه مورد علاقه را تنظیم می‌کند
    const isFavorited = localStorage.getItem('isFavorited') === 'true';
    updateFavorButton(isFavorited);

    favorButton.addEventListener('click', () => {
        const currentState = localStorage.getItem('isFavorited') === 'true';
        const newState = !currentState;
        localStorage.setItem('isFavorited', newState);
        updateFavorButton(newState);

        if (newState) {
            const activeTabId = localStorage.getItem('activeTabId');
            localStorage.setItem('favoriteTabId', activeTabId);
            setFavoriteTab(activeTabId);
            showNotification("تب پیش‌فرض انتخاب شد");
        } else {
            const favoriteTabId = localStorage.getItem('favoriteTabId');
            removeFavoriteTab(favoriteTabId);
            localStorage.removeItem('favoriteTabId');
            showNotification("تب پیش‌فرض غیر فعال شد");
        }
    });

    const favoriteTabId = localStorage.getItem('favoriteTabId');
    if (favoriteTabId) {
        setFavoriteTab(favoriteTabId);
    }

    function setActiveTab(tabId) {
        tabs.forEach(tab => {
            if (tab.id === tabId) {
                tab.classList.add('active', 'favourite');
                tab.classList.remove('normal');
            } else {
                tab.classList.remove('active', 'favourite');
                tab.classList.add('normal');
            }
        });
    }

    function setFavoriteTab(tabId) {
        tabs.forEach(tab => {
            if (tab.id === tabId) {
                tab.classList.add('favorite');
            } else {
                tab.classList.remove('favorite');
            }
        });
    }

    function removeFavoriteTab(tabId) {
        tabs.forEach(tab => {
            if (tab.id === tabId) {
                tab.classList.remove('favorite');
            }
        });
    }

    function updateFavorButton(isFavorited) {
        if (isFavorited) {
            favorButton.classList.add('favorited');
            favorButton.classList.add('active');
        } else {
            favorButton.classList.remove('favorited');
            favorButton.classList.remove('active');
        }
    }

    function showNotification(message) {
        notification.innerText = message;
        notification.style.display = 'block';
        setTimeout(() => {
            notification.style.display = 'none';
        }, 3000);
    }
});
</script>

</body>
</html>
