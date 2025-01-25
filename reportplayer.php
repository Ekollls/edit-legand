<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>گزارش بازیکن</title>
  <style>


 

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
      z-index: 9000;
    }

    .dialogVisible {
      display: flex;
    }



    .dialogDragBar, .content {
      margin-bottom: 10px;
    }

    .buttonsWrapper {
      display: flex;
      justify-content: space-between;
    }

    .textButtonV2 {
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    .buttonFramed {
      border: 1px solid #ccc;
    }

    .rectangle {
      border-radius: 5px;
    }

    .withText {
      display: flex;
      align-items: center;
    }

    .grey {
      background-color: grey;
      color: white;
    }

    .green {
      background-color: green;
      color: white;
    }

    .textarea {
      display: block;
      margin-bottom: 10px;
    }

    .characterLimit {
      font-size: 12px;
      color: grey;
    }
  </style>
</head>
<body>

  <div id="reactDialogWrapper">
    <div style="z-index: 10000;" class="dialogOverlay" id="dialogOverlay">
      <div class="dialogWrapper dialogV2" data-context="">
        <div class="dialog plain contentV2 playerProfile">
          <div class="dialogContainer">
            <div class="dialogContents">
              <form action="?" method="get" accept-charset="UTF-8">
                <div class="dialogDragBar"></div>
                <div class="content" id="dialogContent">
                  <div class="playerNoteDialog formV2">
                    <strong>ملاحظة شخصية</strong>
                    <p>اكتب ملاحظة عن هذا اللاعب. مرئي لك ولوكلائك فقط.</p>
                    <label class="textarea fixed">
                      <textarea name="playerNote" maxlength="500" tabindex="6" placeholder="اكتب ملاحظة شخصية..."></textarea>
                    </label>
                    <div class="characterLimit">
                      <span>الحد الاقصى للطول: </span>
                      <span>&#x202E;&#x202D;0&#x202C;\&#x202D;500&#x202C;&#x202C;</span>
                    </div>
                    <div class="buttonsWrapper">
                      <button class="textButtonV2 buttonFramed rectangle withText grey" type="button" onclick="closeDialog()">
                        <div>  $ns24$ns24  لغو    </div>
                      </button>
                      <button class="textButtonV2 buttonFramed rectangle withText green" type="button">
                        <div>    ذخیره    </div>
                      </button>
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


  <script>
    function openDialog() {
      const dialogOverlay = document.getElementById('dialogOverlay');
      dialogOverlay.classList.add('dialogVisible');
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
    document.addEventListener('DOMContentLoaded', resizeDialog);
  </script>

</body>
</html>
