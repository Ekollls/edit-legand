<?php
include_once "application/Account.php";
include ("application/Profile.php");
$profile->procProfile($_POST);
if(isset($_GET['uid']) && !is_numeric($_GET['uid'])) die('Hacking Attemp');


if(!isset($_GET['uid']) && !isset($_GET['s'])){
    $_GET['uid']=$session->uid;
}

if(isset($_GET['s'])){
$database->isWinner();
}
?>


<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE spieler <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> buildingsV3">
<div id="background">
    <div id="headerBar"></div>


        <div >

            <?php
            include("application/views/topheader.php");


            ?>

        </div>
        <div id="center">


            <?php include("application/views/sideinfo.php"); ?>
<div>
  <div>
<p>

    <a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="" target="_blank">&nbsp;</a>
  </div>
  <div class="contentContainer">
    <div id="content" class="playerProfile playerProfileOverview">
  
      <div id="playerProfile" class="contentV2">
     
<p>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* The popup background */
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        /* The popup content */
        .popup-content {
            position: relative;
            margin: 10% auto;
            padding: 20px;
            background: #fff;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
            z-index: 1001;
        }

        /* The close button */
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        a.popup-link {
            color: #4CAF50;
            text-decoration: none;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
    <title>Popup Example</title>
</head>
<body>

<a class="popup-link" onclick="openPopup()">افتح القائمة المساعدة</a>

<div class="popup-overlay" id="popup">
    <div class="popup-content">
        <button class="popup-close" onclick="closePopup()">&times;</button>
        <div class="dialogOverlay dialogVisible enabled">
          <div class="dialogWrapper dialogV2" data-context="">
            <div class="dialog helpDialog">
              <div class="dialogContainer">
                <div class="dialogContents">
                  <form action="?" method="get" accept-charset="UTF-8">
                    <div class="dialogDragBar"></div>
                    <div class="dialogCancelButton iconButton buttonFramed green withIcon rectangle cancel"><svg viewBox="0 0 20 20">
                        <g class="outline">
                          <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                        </g>
                        <g class="icon">
                          <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
                        </g>
                      </svg></div>
                    <div class="content" id="dialogContent">
                      <div class="contentV2 helpDialog">
                        <h1 class="titleInHeader">قائمة المساعدة</h1>
                        <div class="content">
                          <div class="supportCharacter"></div>
                          <div class="helpSections">
                            <div class="support">
                              <h3>مساعدة</h3>
                              <p> هل تبحث عن مساعدة؟ تحقق من جميع تفاصيل البناء والوحدات في اللعبة أو استخدم قاعدة المعرفة خاصتنا على بوابة الدعم للعثور على المعلومات. لا تتردد في التواصل معنا مباشرة من خلال بوابة خدمة العملاء.</p>
                              <ul>
                                <li><a><span class="listIcon"></span><span>المباني والقوات</span></a></li>
                                <li><a class="" target="_blank" href="https://support.travian.com/support/solutions/articles/7000068043-introduction"><span class="listIcon"></span><span>لاعبين جدد</span></a></li>
                                <li><a class="" target="_blank" href="https://support.travian.com/en/support/solutions/folders/7000044910"><span class="listIcon"></span><span>دعم المدفوعات</span></a></li>
                              </ul>
                            </div>
                            <div class="helpBox customerService">
                              <div>
                                <h3>خدمة العملاء وقاعدة المعرفة</h3><svg viewBox="0 0 20 20">
                                  <path d="M16.29 2.23a4.4 4.4 0 0 0-.41-.31A9.9 9.9 0 0 0 10 0a10 10 0 1 0 6.29 2.23zm-.53 14a8.37 8.37 0 0 1-3.55 2 7.14 7.14 0 0 0 1.06-1.71 11.16 11.16 0 0 0 .56-1.54c1.27.38 1.93.9 1.93 1.24zm-11.52 0c0-.32.6-.81 1.76-1.19a11.83 11.83 0 0 0 .55 1.49 6.94 6.94 0 0 0 1 1.64 8.44 8.44 0 0 1-3.31-1.91zm7.92-.2c-.63 1.4-1.45 2.2-2.25 2.2s-1.62-.8-2.26-2.2a9.31 9.31 0 0 1-.47-1.29A14.26 14.26 0 0 1 10 14.4a14.52 14.52 0 0 1 2.65.23 9.76 9.76 0 0 1-.49 1.37zM10 12.8a16.35 16.35 0 0 0-3.14.29 16.28 16.28 0 0 1-.3-2.7h6.7a16.15 16.15 0 0 1-.3 2.67A16.72 16.72 0 0 0 10 12.8zM6.56 9.39a17.66 17.66 0 0 1 .32-2.7A16.52 16.52 0 0 0 10 7a17.16 17.16 0 0 0 3-.27 17 17 0 0 1 .31 2.66zM10 5.52a15 15 0 0 1-2.8-.25 9.36 9.36 0 0 1 .45-1.2c.64-1.41 1.46-2.21 2.26-2.21s1.62.8 2.25 2.21a9.84 9.84 0 0 1 .47 1.23 14.44 14.44 0 0 1-2.63.22zM6 5c-1.1-.39-1.71-.86-1.76-1.18A8.42 8.42 0 0 1 7.57 1.9a7 7 0 0 0-1 1.67A12 12 0 0 0 6 5zm7.25-1.4a7.23 7.23 0 0 0-1.05-1.76 8.4 8.4 0 0 1 3.56 2c-.06.34-.72.83-1.95 1.2a13.66 13.66 0 0 0-.54-1.47zM5.7 6.4a16.77 16.77 0 0 0-.35 3H1.58A8.48 8.48 0 0 1 3.3 5a4.86 4.86 0 0 0 2.4 1.4zm-.36 4a18.84 18.84 0 0 0 .34 3l-.46.16a4.21 4.21 0 0 0-1.95 1.28 8.51 8.51 0 0 1-1.7-4.44zm8.81 2.95a19.57 19.57 0 0 0 .33-2.95h3.95a8.51 8.51 0 0 1-1.7 4.44 4.92 4.92 0 0 0-2.58-1.5zm.32-3.95a18.21 18.21 0 0 0-.34-2.94l.65-.21A4.24 4.24 0 0 0 16.7 5a8.4 8.4 0 0 1 1.72 4.4z"></path>
                                </svg><a class="textButtonV2 buttonFramed rectangle withText green" target="_blank" href="https://support.travian.com/login/sso/?name=hamidthcr&amp;hash=d186fc891625bce3eaac0bb21a6055d4&amp;email=hamidthcr%40gmail.com&amp;timestamp=1718053013&amp;redirect_to=https%3A%2F%2Fsupport.travian.com%2Far%2Fsupport%2Ftickets%2Fnew%3Ftoken%3Dc4a291c436df73b9b24f595bd950acaaee7a8ab31dba6f35d1922aa3d113c4129e1c92b42e817abf9148886a22576772f6c68b5e0081325fb02e68408378c29c">
                                  <div>إنشاء تذكرة</div>
                                </a>
                              </div>
                            </div>
                            <div class="information">
                              <h3>المعلومات</h3>
                              <p>اعثر على أحدث الأخبار والتغييرات على المدونة مباشرة. تأكد من البقاء على اطلاع بقواعد اللعبة.</p>
                              <ul>
                                <li><a class="" target="_blank" href="https://blog.travian.com"><span class="listIcon"></span><span>المدوّنة</span></a></li>
                                <li><a class="" target="_blank" href="https://blog.travian.com/category/news/changelogs-game-updates/"><span class="listIcon"></span><span>سجلات التغيير وتحديثات اللعبة</span></a></li>
                                <li><a class="" target="_blank" href="https://www.travian.com/ae/gamerules"><span class="listIcon"></span><span>قواعد اللعبة</span></a></li>
                              </ul>
                            </div>
                            <div class="helpBox discord">
                              <div>
                                <h3>كن جزءًا من مجتمعنا</h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127.14 96.36">
                                  <path fill="#fff" d="M107.7,8.07A105.15,105.15,0,0,0,81.47,0a72.06,72.06,0,0,0-3.36,6.83A97.68,97.68,0,0,0,49,6.83,72.37,72.37,0,0,0,45.64,0,105.89,105.89,0,0,0,19.39,8.09C2.79,32.65-1.71,56.6.54,80.21h0A105.73,105.73,0,0,0,32.71,96.36,77.7,77.7,0,0,0,39.6,85.25a68.42,68.42,0,0,1-10.85-5.18c.91-.66,1.8-1.34,2.66-2a75.57,75.57,0,0,0,64.32,0c.87.71,1.76,1.39,2.66,2a68.68,68.68,0,0,1-10.87,5.19,77,77,0,0,0,6.89,11.1A105.25,105.25,0,0,0,126.6,80.22h0C129.24,52.84,122.09,29.11,107.7,8.07ZM42.45,65.69C36.18,65.69,31,60,31,53s5-12.74,11.43-12.74S54,46,53.89,53,48.84,65.69,42.45,65.69Zm42.24,0C78.41,65.69,73.25,60,73.25,53s5-12.74,11.44-12.74S96.23,46,96.12,53,91.08,65.69,84.69,65.69Z"></path>
                                </svg><a class="textButtonV2 buttonFramed rectangle withText green" target="_blank" href="https://discord.gg/travianlegends">
                                  <div>افتح تطبيق ديسكورد</div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }
</script>

</body>
</html>














</div>
</div>

 
 



<div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear"></div>


                        <div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear"></div>

            <?php
            include("application/views/rightsideinfor.php");
            ?>
            <div class="clear"></div>
        </div>
        <?php

         include("application/views/header.php");
     
        include("application/views/footer.php");
        ?>

    </div>
    <div id="ce"></div>
</div>
</body>
</html>