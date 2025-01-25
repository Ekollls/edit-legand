<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dialog Box</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .dialogOverlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .dialogVisible {
      display: flex;
    }



    .dialogDragBar, .content {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="dialogOverlay" id="dialogOverlay">
    <div class="dialogWrapper dialogV2" data-context="">
      <div class="dialog plain heroDownloadDialog heroV2 contentV2">
        <div class="dialogContainer">
          <div class="dialogContents">
            <form action="?" method="get" accept-charset="UTF-8">
              <div class="dialogDragBar"></div>
              <div class="content" id="dialogContent">
                <h3>تنزيل صورة البطل</h3>
                <p>قم بتنزيل صورة لبطلك الحالي لاستخدامها كصورة رمزية لوسائل التواصل الاجتماعي.</p>
                <div class="imageComposer">
                  <div class="backgroundSelection">
                    <div class="label">اختر خلفية</div>
                    <label class="option heroBackground" data-checked="checked">
                      <input type="radio" name="background" id="background_heroBackground" value="heroBackground" checked="">
                    </label>
                    <label class="option oasisCrop" data-checked="">
                      <input type="radio" name="background" id="background_oasisCrop" value="oasisCrop">
                    </label>
                    <label class="option volcano" data-checked="">
                      <input type="radio" name="background" id="background_volcano" value="volcano">
                    </label>
                    <label class="option none" data-checked="">
                      <input type="radio" name="background" id="background_none" value="none">
                      <svg viewBox="0 0 14 14">
                        <path d="M14 1.4 12.6 0 7 5.6 1.4 0 0 1.4 5.6 7 0 12.6 1.4 14 7 8.4l5.6 5.6 1.4-1.4L8.4 7 14 1.4z"></path>
                      </svg>
                    </label>
                  </div>
                  <div class="preview">
                    <div class="label">استعراض</div>
                    <div class="heroImageWrapper">
                      <canvas id="downloadHeroImagePreview" width="400" height="400" style="touch-action: none; cursor: inherit;"></canvas>
                    </div>
                  </div>
                </div>
                <div class="buttonsWrapper">
                  <button class="textButtonV2 buttonFramed rectangle withText grey" type="button" onclick="closeDialog()">
                    <div>إلغاء</div>
                  </button>
                  <a class="textButtonV2 buttonFramed download rectangle withText green" href="blob:https://ts3.x1.international.travian.com/941069e9-2920-4b09-ba69-974d529ffb76" download="hero.png">
                    <div>تنزيل</div>
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function openDialog() {
      const dialogOverlay = document.getElementById('dialogOverlay');
      dialogOverlay.classList.add('dialogVisible');
      resizeDialog();
    }

    function closeDialog() {
      const dialogOverlay = document.getElementById('dialogOverlay');
      dialogOverlay.classList.remove('dialogVisible');
    }

    function resizeDialog() {
      const dialogWrapper = document.querySelector('.dialogWrapper');
      const maxWidth = window.innerWidth * 0.9;
      const maxHeight = window.innerHeight * 0.9;
      dialogWrapper.style.maxWidth = maxWidth + 'px';
      dialogWrapper.style.maxHeight = maxHeight + 'px';
    }

    window.addEventListener('resize', resizeDialog);
  </script>
</body>
</html>
