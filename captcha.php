<?php
include_once "application/Account.php";
/*if ($session->goldclub == 0) {
    header("Location:dorf" . $session->link . ".php");
}*/



$captcha_expiry_time = 1800; // 30 minutes



if (isset($_POST['selected_index'], $_SESSION['correctindex'], $_SESSION['captime']) && $_SESSION['captime'] < time()) {
    $selectedIndex = $_POST['selected_index'];
    $correctIndex = $_SESSION['correctindex'];

    // Check if the selected image is correct
    if ($selectedIndex == $correctIndex) {
       // echo "Captcha correct!";
        // Clear the session variables after successful verification
        unset($_SESSION['correctindex']);
        //unset($_SESSION['captime']);
        $_SESSION['captime'] = time() + $captcha_expiry_time;
        //$_SESSION['captime'] = 'TRUE';
        // Set `cappage` if not already set to prevent redirect issues
        if (!isset($_SESSION['cappage'])) {
            $_SESSION['cappage'] = basename($_SERVER['PHP_SELF']);
        }
       // var_dump($_SESSION['captime']<time());die();
        // Redirect to the set page
        header('Location: ' . $_SESSION['cappage']);
        die();
    } else {
        $pm = "کپچا اشتباه است";
    }
} elseif (isset($_SESSION['captime']) && $_SESSION['captime'] <= time()) {
    $pm = "سشن منقضی شده لطفا صفحه را رفرش کنید.";
}
//var_dump($_SESSION['cappage']);
?>








<?php include ("application/views/html.php"); ?>

<body class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE cropfinder <?php if ($dorf1 == '') {
       echo 'perspectiveBuildings';
   } else {
       echo 'perspectiveResources';
   } ?> <?php echo DIRECTION; ?> buildingsV3">
    <script type="text/javascript">
        window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
    </script>
    <div id="background">
        <div id="headerBar"></div>
        <div id="bodyWrapper">

            <div id="header">

                <?php
                include ("application/views/topheader.php");
            

                ?>

            </div>
            <div id="center">


                <?php include ("application/views/sideinfo.php"); ?>


 
 


	
	
	
	
	
	
	
	
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
                    <h1 class="titleInHeader">بررسی امنیتی</h1>
                    <div>
 
 

                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

       
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
	  <?php
              
            
$var1='<div class="maxReward"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 51" class="svgGoldCoin">
<defs>
  <linearGradient id="a" x1="25.5" x2="25.5" y1="2" y2="49" gradientTransform="rotate(13.28 25.519 25.5)" gradientUnits="userSpaceOnUse">
    <stop offset="0" stop-color="#d8c383"></stop>
    <stop offset="0.47" stop-color="#bb904d"></stop>
    <stop offset="0.8" stop-color="#b78548"></stop>
    <stop offset="1" stop-color="#c09957"></stop>
  </linearGradient>
  <linearGradient id="b" x1="25.5" x2="25.5" y1="7.89" y2="43.19" gradientTransform="rotate(67.5 25.502 25.498)" gradientUnits="userSpaceOnUse">
    <stop offset="0.06" stop-color="#81481b"></stop>
    <stop offset="1" stop-color="#fef6a9"></stop>
  </linearGradient>
</defs>
<circle cx="25.5" cy="25.5" r="25.5" fill="#522d1c"></circle>
<circle cx="25.5" cy="25.5" r="23.5" fill="url(#a)" transform="rotate(-13.28 25.5 25.519)"></circle>
<circle cx="25.5" cy="25.5" r="17.52" fill="url(#b)" transform="rotate(-67.5 25.498 25.502)"></circle>
<path fill="#b47b34" d="M42.3 25.5c-.39-22.38-33.21-22.38-33.6 0 .39 22.38 33.21 22.38 33.6 0z"></path>
<path fill="#c48d3a" d="M24.64 22.64c-5.05.09-11-3.16-13.78-5.59a16.12 16.12 0 011.44-2.15c12.35 10 13.61 10.06 26 .13a16.07 16.07 0 011.4 2.14c-2.9 2.43-8.7 5.55-13.65 5.47.51.09-1.93.09-1.41 0zm-9.39 1.58a65.65 65.65 0 00-6.05 5.24c.1.38.21.76.33 1.13a33.75 33.75 0 0110.34-6.37zm-3.71 0H8.78c0 .32 0 .64-.06 1v.45c0 .45 0 .88.08 1.31v.36zm2.9-1.22c-.39-.21-2.61-2.34-4.45-4.14-.17.41-.32.83-.46 1.25v.12c2.61 1.77 3.59 2.98 4.91 2.77zm9.14-2.34v-2.27L16.69 11c-.39.23-.77.48-1.14.74s-.6.44-.88.68zm-.41 5.18c-.69-.07-5.26 1.43-11.9 8.39v.1a15.94 15.94 0 001.32 1.82 58.92 58.92 0 0110.58-10.33zm.91 6.79l-.23-1.52a48 48 0 00-9.12 7.19 16 16 0 002.75 1.85c1.62-2.47 4.25-6.08 6.6-7.54zM21.75 9.12c-.42.09-.84.19-1.26.31 1.14 1.7 4.31 5.57 4.85 6.39zm9.07 15.1A33.5 33.5 0 0141 30.44c.12-.38.23-.77.32-1.17a67.28 67.28 0 00-5.87-5.05zm10.91 0h-2.59l2.54 2.88a18.45 18.45 0 00.05-2.88zM37.18 23s2.09-1.29 3.84-2.64c-.14-.46-.3-.9-.48-1.34-1.81 1.76-3.92 3.77-4.29 4a4.77 4.77 0 00.93-.02zm-3.24-11.91l-6.83 7.3v2.25l8.8-8.1a16.37 16.37 0 00-1.97-1.45zM28 25.82h-.49A58.72 58.72 0 0138 36a17.83 17.83 0 001.33-1.89C33.16 27.5 28 25.82 28 25.82zm-1.4 6.79c2.32 1.44 4.92 5 6.54 7.44a17.06 17.06 0 002.7-1.87 47.92 47.92 0 00-9-7.09zm-.32 2.67l.28-.24a7.74 7.74 0 01-2.45 0l.28.24h-.32l-4.21 4.45c1.64.6 3-1.95 5.47-3.68 2.45 1.73 3.83 4.28 5.48 3.68l-4.21-4.45zm1.18-22.21c.77-.92 2-2.56 2.77-3.71l-.44-.12c-.28-.07-.55-.13-.83-.18l-3.63 6.76s.87-1.23 2.14-2.75zm-.62-4.3a18.78 18.78 0 00-3 0l1.49 1.9z"></path>
<path fill="#703e19" d="M35.43 15.17h-1.76l-.38.55H18.43l-.37-.55h-1.77l-1 5.78L16 22l2.14-3.13h4.77v14.59c0 1.69-2.57 2.1-2.57 2.1v2.27h11v-2.27s-2.57-.41-2.57-2.1V18.88h4.77L35.7 22l.71-1z"></path>
<path fill="#dbb561" d="M33.56 17.88L35.7 21l.71-1.07-1-5.78h-1.74l-.38.55H18.43l-.37-.55h-1.77l-1 5.78L16 21l2.14-3.13h5.26v14.59c0 1.68-3.06 2.1-3.06 2.1V36l.81.82h9.45l.74-.75v-1.51s-3.05-.42-3.05-2.1V17.88z"></path>
<path fill="#faf28a" d="M15.4 20.07l-.09-.13 1-5.78h1.77l.37.55h14.84l.38-.55h1.76l1 5.78-.08.13-.9-5.27h-1.78l-.38.55H18.43l-.37-.55h-1.77zm5 15.13c.25.07 3.67-.77 3.06-2.74 0 1.68-3.06 2.1-3.06 2.1zm8-2.74c-.62 2 2.82 2.82 3.05 2.74v-.64s-3.14-.42-3.14-2.1z"></path>
<path fill="#a87134" d="M25.56 4a1.14 1.14 0 010 2.27 1.14 1.14 0 010-2.27zm-3.31 2.58a1.13 1.13 0 00-.4-2.23 1.13 1.13 0 00.4 2.23zM19 7.44a1.13 1.13 0 00-.78-2.13A1.13 1.13 0 0019 7.44zm-3 1.4a1.13 1.13 0 00-1.14-2 1.13 1.13 0 001.14 2zm-2.72 1.91C14.45 9.82 13 8 11.85 9a1.14 1.14 0 001.46 1.75zM11 13.09a1.13 1.13 0 00-1.73-1.46A1.13 1.13 0 0011 13.09zm-1.9 2.73a1.14 1.14 0 00-2-1.14 1.14 1.14 0 001.95 1.14zm-1.41 3a1.13 1.13 0 00-2.13-.78 1.13 1.13 0 002.08.79zM6.78 22a1.14 1.14 0 00-2.24-.4 1.14 1.14 0 002.24.4zm-.29 3.31a1.14 1.14 0 00-2.27 0 1.14 1.14 0 002.27.04zm.28 3.31a1.13 1.13 0 00-2.23.39 1.13 1.13 0 002.23-.35zm.86 3.21a1.13 1.13 0 00-2.13.77 1.13 1.13 0 002.13-.73zm1.4 3a1.14 1.14 0 00-2 1.14A1.14 1.14 0 009 34.88zm1.9 2.73a1.14 1.14 0 00-1.74 1.46c.93 1.19 2.71-.3 1.74-1.41zM13.28 40c-1.11-1-2.6.81-1.46 1.74A1.14 1.14 0 0013.28 40zM16 41.87a1.13 1.13 0 00-1.14 2 1.13 1.13 0 001.14-2zm3 1.4a1.14 1.14 0 00-.78 2.14 1.14 1.14 0 00.78-2.14zm3.21.87a1.13 1.13 0 00-.4 2.23 1.13 1.13 0 00.41-2.23zm3.3.29a1.14 1.14 0 000 2.27 1.14 1.14 0 00.01-2.27zm3.31-.29a1.14 1.14 0 00.4 2.24 1.14 1.14 0 00-.39-2.24zm3.18-.85a1.13 1.13 0 00.78 2.13 1.13 1.13 0 00-.78-2.13zm3-1.41a1.14 1.14 0 001.14 2 1.14 1.14 0 00-1.09-2zM37.78 40a1.14 1.14 0 001.46 1.74A1.14 1.14 0 0037.78 40zm2.35-2.35a1.14 1.14 0 001.74 1.46 1.14 1.14 0 00-1.74-1.48zM42 34.91a1.13 1.13 0 002 1.14 1.13 1.13 0 00-2-1.14zm1.4-3a1.13 1.13 0 002.13.78 1.13 1.13 0 00-2.09-.79zm.86-3.21a1.14 1.14 0 002.24.39 1.14 1.14 0 00-2.2-.4zm.3-3.31a1.14 1.14 0 002.27 0 1.14 1.14 0 00-2.23-.01zm-.29-3.31a1.14 1.14 0 002.24-.4 1.14 1.14 0 00-2.2.39zm-.86-3.21a1.14 1.14 0 002.14-.78 1.14 1.14 0 00-2.1.77zm-1.4-3a1.14 1.14 0 002-1.13 1.14 1.14 0 00-1.96 1.1zm-1.9-2.72a1.14 1.14 0 001.74-1.46 1.14 1.14 0 00-1.7 1.43zm-2.31-2.38A1.14 1.14 0 0039.26 9c-1.11-.94-2.6.84-1.46 1.77zm-2.72-1.91a1.14 1.14 0 001.14-2 1.14 1.14 0 00-1.14 2zm-3-1.41a1.13 1.13 0 00.78-2.13 1.13 1.13 0 00-.79 2.13zm-3.2-.86a1.14 1.14 0 00.39-2.24 1.14 1.14 0 00-.4 2.24z"></path>
</svg><?= REF_GOLD ?></div>';

                ?>
<style>
    /* Style for the image container */
    .img-magnifier-container {
        position: relative;
        display: inline-block;
    }

    /* Style for the magnifier glass */
    .img-magnifier-glass {
        position: absolute;
        border: 3px solid #000;
        border-radius: 50%;
        cursor: none;
        /* Size of magnifying glass */
        width: 100px;
        height: 100px;
        /* Zoom factor */
        background-size: 200%;
        display: none; /* Hidden initially */
    }
</style>
      
<script>
    // Function to add the magnifying glass effect
    function magnify(imgID, zoom) {
        var img, glass;
        img = document.getElementById(imgID);

        // Create magnifier glass
        glass = document.createElement("DIV");
        glass.setAttribute("class", "img-magnifier-glass");

        // Insert magnifier glass
        img.parentElement.insertBefore(glass, img);

        // Set background properties for magnifier glass
        glass.style.backgroundImage = "url('" + img.src + "')";
        glass.style.backgroundRepeat = "no-repeat";
        glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";

        // Event listeners for mousemove and mouseleave
        img.addEventListener("mousemove", moveMagnifier);
        glass.addEventListener("mousemove", moveMagnifier);
        img.addEventListener("mouseleave", () => { glass.style.display = "none"; });
        img.addEventListener("mouseenter", () => { glass.style.display = "block"; });

        function moveMagnifier(e) {
            var pos, x, y;
            pos = getCursorPos(e);
            x = pos.x;
            y = pos.y;

            // Move magnifier glass
            glass.style.left = (x - glass.offsetWidth / 2) + "px";
            glass.style.top = (y - glass.offsetHeight / 2) + "px";

            // Display what the glass "sees"
            glass.style.backgroundPosition = "-" + ((x * zoom) - glass.offsetWidth / 2) + "px -" + ((y * zoom) - glass.offsetHeight / 2) + "px";
        }

        function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            // Get the x and y positions of the image
            a = img.getBoundingClientRect();
            // Calculate the cursor's x and y coordinates, relative to the image
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            return {x: x, y: y};
        }
    }

    // Call the magnify function with your desired zoom level
    document.querySelectorAll(".captchaButton img").forEach((img, idx) => {
        img.id = "captchaImg" + idx;  // Assign an ID to each image
        magnify(img.id, 2);  // 2x zoom level
    });
</script>  

<?php
$imageUrls = [
    "captcha/forest1.png",
    "captcha/forest2.png",
    "captcha/forest3.png",
    "captcha/forest4.png",
    "captcha/forest5.png",
    "captcha/forest6.png"
];


$correctImageIndex = rand(0, count($imageUrls) - 1);
$_SESSION['captime'] = time() -1;

$correctImageUrl = $imageUrls[$correctImageIndex];

// Shuffle the images array and ensure correct image is included
$imageUrlss=$imageUrls;
shuffle($imageUrls);

$correctImageIndex = array_search($correctImageUrl, $imageUrls);
$_SESSION['correctindex']=$correctImageIndex;
//var_dump(in_array($correctImageUrl, $imageUrls));die();
?>

<div class="referAFriendInfo">
    <div class="header">
        <div class="badgeBigDecoration">
            <div class="caption"></div>
        </div>
    </div>

    <div class="descriptionHeader">معمای انسان و ربات!</div>
    <?php if (isset($pm)) echo "<p>$pm</p>"; ?>
    <h2>لطفا عکس زیر را در پایین پیدا کنید:</h2>

    <form action="captcha.php" method="POST">
        <div id="captchaButtonsContainer">
            <!-- Display correct image to find -->
                <img src="<?php echo $correctImageUrl; ?>" alt="captcha target" />
          </div>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="5">عکس‌ها:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    // Display images in a 5-column table
                    foreach ($imageUrls as $index => $imageUrl) {
                        echo "<td>";
                        echo "<button type='submit' name='selected_index' value='$index' class='captchaButton'>";
                        echo "<img src='$imageUrl' alt='captcha image $index' width='100' height='100' />";
                        echo "</button>";
                        echo "</td>";

                        // New row every 4 images
                        if (($index + 1) % 4 == 0) {
                            echo "</tr><tr>";
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </form>
</div>


  





                 

                </div>                </div>
                 

                </div>                </div>
                 

                </div>                </div>
                 

             

                <?php
                include ("application/views/rightsideinfor.php");
                ?>
                <div class="clear"></div>
            </div>
            <?php

            include ("application/views/header.php");
            ?>
        </div>
        <div id="ce"></div>
    </div>


</body>

</html>