
<div style="color:#4f4e4e;  font-family: IRANSans;" class="boxes villageInfobox production">
    <div class="boxes-tl"></div>
    <div class="boxes-tr"></div>
    <div class="boxes-tc"></div>
    <div class="boxes-ml"></div>
    <div class="boxes-mr"></div>
    <div class="boxes-mc"></div>
    <div class="boxes-bl"></div>
    <div class="boxes-br"></div>
    <div class="boxes-bc"></div>
    <div class="boxes-contents cf">

		
    <table id="production" cellpadding="1" cellspacing="1">
            <thead>
            <tr>
			


                <th colspan="4"> <?php echo PROD_HEADER; ?> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="ico">
                
                    <div><?php echo $session->bonus1 ? '<img src="img/x.gif" class="productionBoost">' : ''; ?><i class="r1"></i></div>
                </td>

                <td class="res"><?php echo LUMBER; ?>:</td>
                <td class="num"><?php echo number_format($village->getProd("wood")); ?></td>
            </tr>
            <tr>
                <td class="ico">
                    <div><?php echo $session->bonus2 ? '<img src="img/x.gif" class="productionBoost">' : ''; ?><i class="r2"></i></div>
                </td>
                <td class="res"><?php echo CLAY; ?>:</td>
                <td class="num"><?php echo number_format($village->getProd("clay")); ?></td>
            </tr>
            <tr>
                <td class="ico">
                    <div><?php echo $session->bonus3 ? '<img src="img/x.gif" class="productionBoost">' : ''; ?><i class="r3"></i></div>
                </td>
                <td class="res"><?php echo IRON; ?>:</td>
                <td class="num"><?php echo number_format($village->getProd("iron")); ?></td>
            </tr>
            <tr>
                <td class="ico">
                    <div><?php echo $session->bonus4 ? '<img src="img/x.gif" class="productionBoost">' : ''; ?><i class="r4"></i></div>
                </td>
                <td class="res"><?php echo CROP; ?>:			</td>
                <td class="num"><?php echo number_format($village->getProd("crop")); ?>‏</td>
            </tr>
            </tbody>
        </table>
		<button class="textButtonV1 gold productionBoostButton" id="openPopupBtn">25% v2</button>
<button type="button" class="textButtonV1 gold productionBoostButton" id="buttonP2gQFPKZoe3Fm"><div class="button-container addHoverClick">
		<div class="button-background">
			<div class="buttonStart">
				<div class="buttonEnd">
					<div class="buttonMiddle"></div>
				</div>
			</div>
		</div>
		<div class="button-content">+25%</div></div></button>
   </div>
</div>


<script type="text/javascript" id="buttonP2gQFPKZoe3Fm_script">
    window.addEvent('domready', function()
        {
        if($('buttonP2gQFPKZoe3Fm'))
        {
          $('buttonP2gQFPKZoe3Fm').addEvent('click', function ()
          {
            window.fireEvent('buttonClicked', [this, {"name":"","onclick":"","confirm":"","productionBoostDialog":{"infoIcon":"http:\/\/t4.answers.travian.ir\/index.php?aid=0#go2answer"},"title":"\u0645\u0632\u064a\u062f \u0645\u0646 \u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a \u0639\u0646 \u0632\u064a\u0627\u062f\u0629 \u0627\u0644\u0625\u0646\u062a\u0627\u062c","id":"buttonP2gQFPKZoe3Fm"}]);
          });
        }
        });
    </script> 

<!-- دکمه باز کردن پاپ‌آپ -->

<style>
/* ساختار پاپ‌آپ */
.popup-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 9999; /* بالاترین لایه */
}

.popup-wrapper {
  background: #222;
  padding: 30px;
  border-radius: 10px;
  max-width: 500px;
  width: 90%;
  text-align: center;
  position: relative;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
  z-index: 10000; /* اطمینان از بالاتر بودن از لایه‌ها */
}

/* ساختار پاپ‌آپ */
.popup-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 9999; /* بالاترین لایه */
}

/* انیمیشن پاپ‌آپ از پایین به بالا */
.popup-wrapper {
  background: #222;
  padding: 30px;
  border-radius: 10px;
  max-width: 900px; /* تنظیم عرض حداکثر */
  width: 560px; /* از عرض ثابت خودداری می‌کنیم */
  max-height: 600px; /* حداکثر ارتفاع */
  height: 420px; /* ارتفاع خودکار */
  text-align: center;
  position: relative;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
  z-index: 10000; /* بالاترین لایه */
  transform: translateY(100%); /* شروع از پایین صفحه */
  transition: transform 0.5s ease-out; /* انیمیشن حرکت */
}

/* زمانی که پاپ‌آپ نمایش داده می‌شود */
.popup-overlay.show .popup-wrapper {
  transform: translateY(0); /* به جایگاه اصلی می‌رسد */
}

/* برای تغییرات مربوط به پاپ‌آپ در دستگاه‌های مختلف */
@media (max-width: 768px) {
  .popup-wrapper {
      max-width: 90%; /* محدودیت عرض برای صفحه‌های کوچک‌تر */
      padding: 20px;
  }
}

</style>
<!-- ساختار پاپ‌آپ -->
<div  class="popup-overlay"  id="popupOverlay">
  <div class="popup-wrapper" >





<div class="dialogOverlay doNotCoverHeader stickToHeader dialogVisible  "  style="z-index: 10000;">

  <div class="dialogWrapper dialogV2" data-context="productionBoost" style="z-index: 10000;">
      <div class="dialog premiumFeaturePackage premiumFeatureProductionBoost paymentShopV4">
          <div class="dialogContainer">
              <div class="dialogContents">
                  <form action="?" method="get" accept-charset="UTF-8">
                      <div class="dialogDragBar"></div>
                      <div class="iconButton buttonFramed green withIcon rectangle info"></div>
                      <div class="dialogCancelButton iconButton buttonFramed green withIcon rectangle cancel" id="closePopupBtn">
                          <svg viewBox="0 0 20 20"><g class="outline">
<path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g><g class="icon">
<path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g></svg>
                      </div>
                      <div class="title" style="display: none;"></div>
                      <div class="content" id="dialogContent"><h1 class="titleInHeader">افزایش تولید</h1>

<div class="accountBalance">
<div class="inlineIcon " title=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 51" class="goldCoin">
<defs>
  <linearGradient id="a" x1="25.5" x2="25.5" y1="2" y2="49" gradientTransform="rotate(13.28 25.519 25.5)" gradientUnits="userSpaceOnUse">
    <stop offset="0" stop-color="#d8c383"></stop>
    <stop offset=".47" stop-color="#bb904d"></stop>
    <stop offset=".8" stop-color="#b78548"></stop>
    <stop offset="1" stop-color="#c09957"></stop>
  </linearGradient>
  <linearGradient id="b" x1="25.5" x2="25.5" y1="7.89" y2="43.19" gradientTransform="rotate(67.5 25.502 25.498)" gradientUnits="userSpaceOnUse">
    <stop offset=".06" stop-color="#81481b"></stop>
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
</svg>
<span class="value "><?php echo $session->gold; ?></span></div></div>

<div class="featureCollection" id="featureCollectionWrapper">
<div class="activation">
  <div class="title">لطفاً منابعی را که می خواهید برای افزایش تولید انتخاب کنید:</div>
</div>

    <div class="feature packageFeatures">
    <div class="featureContent productionboostLumber">
      <div class="featureImage productionboostLumber">
        <svg class="productionBoost" viewBox="0 0 20 20">
          <path d="M7 2L7 7L2 7L2 12L7 12L7 17L12 17L12 12L17 12L17 7L12 7L12 2Z"></path>
        </svg>
      </div>
      
      
      
      
  
      
      
      
      
      <div class="featureTitle"><?= $lang['Plus']['Plus03'] ?><?php if ($session->bonus1): ?></div>
                <div class="featureDuration">
          <span class="bonusEndsSoon"><?= $lang['Plus']['Plus16'] ?> <span class="bold">: <?= gmdate("H:i:s", $session->bonus1 - time()) ?></span></span>
        </div>
          <?php endif; ?>
              <div class="featureButton">
              
              
        <button type="button" value="<?= $session->bonus1 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13'] ?>" id="button6738f7ca28112" class="textButtonV2 gold prosButton productionboostLumber buttonFramed withText rectangle" coins="5" version="textButtonV2" id="buttonQZR4F6fpB8qGm" >
<div>
  <?= $session->bonus1 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13'] ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 51" class="goldCoin">
<defs>
  <linearGradient id="a" x1="25.5" x2="25.5" y1="2" y2="49" gradientTransform="rotate(13.28 25.519 25.5)" gradientUnits="userSpaceOnUse">
    <stop offset="0" stop-color="#d8c383"></stop>
    <stop offset=".47" stop-color="#bb904d"></stop>
    <stop offset=".8" stop-color="#b78548"></stop>
    <stop offset="1" stop-color="#c09957"></stop>
  </linearGradient>
  <linearGradient id="b" x1="25.5" x2="25.5" y1="7.89" y2="43.19" gradientTransform="rotate(67.5 25.502 25.498)" gradientUnits="userSpaceOnUse">
    <stop offset=".06" stop-color="#81481b"></stop>
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
</svg>
<span class="goldValue"><?php echo $config['addonProduction']; ?></span>	</div>
</button>


<script type="text/javascript" id="button6738f7ca28112_script">
jQuery(function() {
      jQuery('button#button6738f7ca28112').click(function () {
          jQuery(window).trigger('buttonClicked', [this, {"type":"button","value":"\u062a\u0641\u0639\u064a\u0644","name":"","id":"button6738f7ca28112","class":"textButtonV2 gold prosButton productionboostLumber buttonFramed withText rectangle","title":"\u0627\u0634\u062a\u0631\u0643 \u0627\u0644\u0622\u0646\u0026lt;br \/\u0026gt;\u0632\u0645\u0646 \u0627\u0644\u0632\u064a\u0627\u062f\u0629 \u0628\u0627\u0644\u0623\u064a\u0627\u0645: \u0026lt;span class=\u0026quot;bold\u0026quot;\u0026gt;7\u0026lt;\/span\u0026gt;","confirm":"","onclick":"","coins":5,"version":"textButtonV2","wayOfPayment":{"featureKey":"productionboostLumber","context":"productionBoost"}}]);
      });
});
</script>
      </div>
      <div class="featureRenewal">
                </div>
    </div>
  </div>
    <div class="feature packageFeatures">
    <div class="featureContent productionboostClay">
      <div class="featureImage productionboostClay">
        <svg class="productionBoost" viewBox="0 0 20 20">
          <path d="M7 2L7 7L2 7L2 12L7 12L7 17L12 17L12 12L17 12L17 7L12 7L12 2Z"></path>
        </svg>
      </div>
      <div class="featureTitle"><?= $lang['Plus']['Plus04']; ?> </div><?php if ($session->bonus2): ?>
                <div class="featureDuration">
          <span class="bonusEndsSoon"><?= $lang['Plus']['Plus16']; ?>: <span class="bold"> <?= $generator->getTimeFormat($session->bonus2 - time()); ?></span></span>
        </div>
         <?php endif; ?>
              <div class="featureButton">
        <button type="button" value="<?= $session->bonus2 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']; ?>" id="button6738f7ca28457" class="textButtonV2 gold prosButton productionboostClay buttonFramed withText rectangle" coins="5" version="textButtonV2">
<div>
  <?= $session->bonus2 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']; ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 51" class="goldCoin">
<defs>
  <linearGradient id="a" x1="25.5" x2="25.5" y1="2" y2="49" gradientTransform="rotate(13.28 25.519 25.5)" gradientUnits="userSpaceOnUse">
    <stop offset="0" stop-color="#d8c383"></stop>
    <stop offset=".47" stop-color="#bb904d"></stop>
    <stop offset=".8" stop-color="#b78548"></stop>
    <stop offset="1" stop-color="#c09957"></stop>
  </linearGradient>
  <linearGradient id="b" x1="25.5" x2="25.5" y1="7.89" y2="43.19" gradientTransform="rotate(67.5 25.502 25.498)" gradientUnits="userSpaceOnUse">
    <stop offset=".06" stop-color="#81481b"></stop>
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
</svg>
<span class="goldValue" ><?php echo $config['addonProduction']; ?></span>	</div>
</button>
    <script type="text/javascript" id="buttons3QB0zqhU67l4_script">
     window.addEvent('domready', function()
         {
         if($('buttons3QB0zqhU67l4'))
         {
           $('buttons3QB0zqhU67l4').addEvent('click', function ()
           {
             window.fireEvent('buttonClicked', [this, {"type":"button","value":"\u0641\u0639\u0644","confirm":"","onclick":"","title":"\u062a\u0641\u0639\u064a\u0644 \u0627\u0644\u0622\u0646 &lt;br&gt; \u0645\u062f\u0629 \u0627\u0644\u0632\u064a\u0627\u062f\u0629 \u0623\u064a\u0627\u0645 &lt;span class=&quot;bold&quot;&gt;15&lt;\/span&gt; \u0633\u0627\u0639\u0647","coins":5,"id":"buttons3QB0zqhU67l4"}]);
           });
         }
         });
     </script>
<script type="text/javascript" id="button6738f7ca28457_script">
jQuery(function() {
      jQuery('button#button6738f7ca28457').click(function () {
          jQuery(window).trigger('buttonClicked', [this, {"type":"button","value":"\u062a\u0641\u0639\u064a\u0644","name":"","id":"button6738f7ca28457","class":"textButtonV2 gold prosButton productionboostClay buttonFramed withText rectangle","title":"\u0627\u0634\u062a\u0631\u0643 \u0627\u0644\u0622\u0646\u0026lt;br \/\u0026gt;\u0632\u0645\u0646 \u0627\u0644\u0632\u064a\u0627\u062f\u0629 \u0628\u0627\u0644\u0623\u064a\u0627\u0645: \u0026lt;span class=\u0026quot;bold\u0026quot;\u0026gt;7\u0026lt;\/span\u0026gt;","confirm":"","onclick":"","coins":5,"version":"textButtonV2","wayOfPayment":{"featureKey":"productionboostClay","context":"productionBoost"}}]);
      });
});
</script>

      </div>
      <div class="featureRenewal">
                </div>
    </div>
  </div>
    <div class="feature packageFeatures">
    <div class="featureContent productionboostIron">
      <div class="featureImage productionboostIron">
        <svg class="productionBoost" viewBox="0 0 20 20">
          <path d="M7 2L7 7L2 7L2 12L7 12L7 17L12 17L12 12L17 12L17 7L12 7L12 2Z"></path>
        </svg>
      </div>
      <div class="featureTitle"><?php echo $lang['Plus']['Plus05']; ?> <?php if ($session->bonus3): ?></div>
                <div class="featureDuration">
          <span class="bonusEndsSoon">  <?php echo $lang['Plus']['Plus16']; ?><span class="bold">: <?= $generator->getTimeFormat($session->bonus3 - time()) . '.'; ?></span></span>
        </div>
         <?php endif; ?>
              <div class="featureButton">
        <button type="button" value="<?php echo $session->bonus3 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']; ?>" id="buttonWq0JYwPbp42mU" class="textButtonV2 gold prosButton productionboostIron buttonFramed withText rectangle" coins="5" version="textButtonV2">
<div>
  <?php echo $session->bonus3 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']; ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 51" class="goldCoin">
<defs>
  <linearGradient id="a" x1="25.5" x2="25.5" y1="2" y2="49" gradientTransform="rotate(13.28 25.519 25.5)" gradientUnits="userSpaceOnUse">
    <stop offset="0" stop-color="#d8c383"></stop>
    <stop offset=".47" stop-color="#bb904d"></stop>
    <stop offset=".8" stop-color="#b78548"></stop>
    <stop offset="1" stop-color="#c09957"></stop>
  </linearGradient>
  <linearGradient id="b" x1="25.5" x2="25.5" y1="7.89" y2="43.19" gradientTransform="rotate(67.5 25.502 25.498)" gradientUnits="userSpaceOnUse">
    <stop offset=".06" stop-color="#81481b"></stop>
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
</svg>
<span class="goldValue"><?php echo $config['addonProduction']; ?></span>	</div>
</button>
<script type="text/javascript" id="button6738f7ca28769_script">
jQuery(function() {
      jQuery('button#button6738f7ca28769').click(function () {
          jQuery(window).trigger('buttonClicked', [this, {"type":"button","value":"\u062a\u0641\u0639\u064a\u0644","name":"","id":"button6738f7ca28769","class":"textButtonV2 gold prosButton productionboostIron buttonFramed withText rectangle","title":"\u0627\u0634\u062a\u0631\u0643 \u0627\u0644\u0622\u0646\u0026lt;br \/\u0026gt;\u0632\u0645\u0646 \u0627\u0644\u0632\u064a\u0627\u062f\u0629 \u0628\u0627\u0644\u0623\u064a\u0627\u0645: \u0026lt;span class=\u0026quot;bold\u0026quot;\u0026gt;7\u0026lt;\/span\u0026gt;","confirm":"","onclick":"","coins":5,"version":"textButtonV2","wayOfPayment":{"featureKey":"productionboostIron","context":"productionBoost"}}]);
      });
});
</script>
      </div>
      <div class="featureRenewal">
                </div>
    </div>
  </div>
    <div class="feature packageFeatures">
    <div class="featureContent productionboostCrop">
      <div class="featureImage productionboostCrop">
        <svg class="productionBoost" viewBox="0 0 20 20">
          <path d="M7 2L7 7L2 7L2 12L7 12L7 17L12 17L12 12L17 12L17 7L12 7L12 2Z"></path>
        </svg>
      </div>
      <div class="featureTitle"><?php echo $lang['Plus']['Plus06']; ?><?php if ($session->bonus4): ?></div>
                <div class="featureDuration">
          <span class="bonusEndsSoon"><?php echo $lang['Plus']['Plus16']; ?><span class="bold"> : <?= $generator->getTimeFormat($session->bonus4 - time()); ?></span></span>
        </div>
          <?php endif; ?>
              <div class="featureButton">
        <button type="button" value="<?php echo $session->bonus4 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']; ?>" id="button6738f7ca28a45" class="textButtonV2 gold prosButton productionboostCrop buttonFramed withText rectangle" coins="5" version="textButtonV2">
<div>
  <?php echo $session->bonus4 ? $lang['Plus']['Plus14'] : $lang['Plus']['Plus13']; ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 51" class="goldCoin">
<defs>
  <linearGradient id="a" x1="25.5" x2="25.5" y1="2" y2="49" gradientTransform="rotate(13.28 25.519 25.5)" gradientUnits="userSpaceOnUse">
    <stop offset="0" stop-color="#d8c383"></stop>
    <stop offset=".47" stop-color="#bb904d"></stop>
    <stop offset=".8" stop-color="#b78548"></stop>
    <stop offset="1" stop-color="#c09957"></stop>
  </linearGradient>
  <linearGradient id="b" x1="25.5" x2="25.5" y1="7.89" y2="43.19" gradientTransform="rotate(67.5 25.502 25.498)" gradientUnits="userSpaceOnUse">
    <stop offset=".06" stop-color="#81481b"></stop>
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
</svg>
<span class="goldValue"><?php echo $config['addonProduction']; ?></span>	</div>
</button>
<script type="text/javascript" id="button6738f7ca28a45_script">
jQuery(function() {
      jQuery('button#button6738f7ca28a45').click(function () {
          jQuery(window).trigger('buttonClicked', [this, {"type":"button","value":"\u062a\u0641\u0639\u064a\u0644","name":"","id":"button6738f7ca28a45","class":"textButtonV2 gold prosButton productionboostCrop buttonFramed withText rectangle","title":"\u0627\u0634\u062a\u0631\u0643 \u0627\u0644\u0622\u0646\u0026lt;br \/\u0026gt;\u0632\u0645\u0646 \u0627\u0644\u0632\u064a\u0627\u062f\u0629 \u0628\u0627\u0644\u0623\u064a\u0627\u0645: \u0026lt;span class=\u0026quot;bold\u0026quot;\u0026gt;7\u0026lt;\/span\u0026gt;","confirm":"","onclick":"","coins":5,"version":"textButtonV2","wayOfPayment":{"featureKey":"productionboostCrop","context":"productionBoost"}}]);
      });
});
</script>
      </div>
      <div class="featureRenewal">
                </div>
    </div>
  </div>

<div class="furtherInformation">با افزایش تولید از پلاس، می توانید به مدت 7 روز تولید را در هر روستا 25 درصد افزایش دهید. اگر «افزودن خودکار» را انتخاب کنید، افزایش تولید به‌طور خودکار با نزدیک شدن به پایان آن افزایش می‌یابد.</div>
</div>
</div>
                      <div class="buttons" style="display: none;"><button class="green dialogButtonOk ok textButtonV2 buttonFramed withText rectangle" type="submit">
<div>
    </div>
</button></div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

      <!-- محتوای اصلی -->
      <div class="popup-content" id="popupContent">


      </div>
  </div>

  </div></div>
<script>
// انتخاب عناصر
const openPopupButton = document.getElementById('openPopupBtn'); // دکمه باز کردن پاپ‌آپ
const closePopupButton = document.getElementById('closePopupBtn'); // دکمه بستن
const popupOverlay = document.getElementById('popupOverlay');
const loader = document.getElementById('loader');
const popupContent = document.getElementById('popupContent');

// باز کردن پاپ‌آپ
openPopupButton.addEventListener('click', () => {
  popupOverlay.style.display = 'flex'; // نمایش پاپ‌آپ
  setTimeout(() => {
      popupOverlay.classList.add('show'); // اضافه کردن کلاس show برای انیمیشن
      loader.style.display = 'block'; // نمایش اسپینر
      popupContent.classList.remove('visible'); // پنهان کردن محتوا

      // شبیه‌سازی لود (مدت زمان: 2.5 ثانیه)
      setTimeout(() => {
          loader.style.display = 'none'; // پنهان کردن اسپینر
          popupContent.classList.add('visible'); // نمایش محتوا
      }, 2500);
  }, 0);
});

// بستن پاپ‌آپ
closePopupButton.addEventListener('click', () => {
  popupOverlay.classList.remove('show'); // حذف کلاس show
  setTimeout(() => {
      popupOverlay.style.display = 'none'; // پنهان کردن پاپ‌آپ
  }, 500); // مدت زمان انیمیشن
});

// بستن با کلیک بیرون از پاپ‌آپ
popupOverlay.addEventListener('click', (e) => {
  if (e.target === popupOverlay) {
      popupOverlay.classList.remove('show');
      setTimeout(() => {
          popupOverlay.style.display = 'none'; // پنهان کردن پاپ‌آپ بعد از انیمیشن
      }, 500);
  }
});

</script>

*/
?>
<div style="color:#4f4e4e;  font-family: IRANSans;" class="boxes villageInfobox production">
    <div class="boxes-tl"></div>
    <div class="boxes-tr"></div>
    <div class="boxes-tc"></div>
    <div class="boxes-ml"></div>
    <div class="boxes-mr"></div>
    <div class="boxes-mc"></div>
    <div class="boxes-bl"></div>
    <div class="boxes-br"></div>
    <div class="boxes-bc"></div>
    <div class="boxes-contents cf">

		
    <table id="production" cellpadding="1" cellspacing="1">
            <thead>
            <tr>
                <th colspan="4"> <?php echo PROD_HEADER; ?> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="ico">
                
                    <div><?php echo $session->bonus1 ? '<img src="img/x.gif" class="productionBoost">' : ''; ?><i class="r1"></i></div>
                </td>
                <td class="res"><?php echo LUMBER; ?>:</td>
                <td class="num"><?php echo number_format($village->getProd("wood")); ?></td>
            </tr>
            <tr>
                <td class="ico">
                    <div><?php echo $session->bonus2 ? '<img src="img/x.gif" class="productionBoost">' : ''; ?><i class="r2"></i></div>
                </td>
                <td class="res"><?php echo CLAY; ?>:</td>
                <td class="num"><?php echo number_format($village->getProd("clay")); ?></td>
            </tr>
            <tr>
                <td class="ico">
                    <div><?php echo $session->bonus3 ? '<img src="img/x.gif" class="productionBoost">' : ''; ?><i class="r3"></i></div>
                </td>
                <td class="res"><?php echo IRON; ?>:</td>
                <td class="num"><?php echo number_format($village->getProd("iron")); ?></td>
            </tr>
            <tr>
                <td class="ico">
                    <div><?php echo $session->bonus4 ? '<img src="img/x.gif" class="productionBoost">' : ''; ?><i class="r4"></i></div>
                </td>
                <td class="res"><?php echo CROP; ?>:			</td>
                <td class="num"><?php echo number_format($village->getProd("crop")); ?>‏</td>
            </tr>
            </tbody>
        </table>
<button type="button" class="textButtonV1 gold productionBoostButton" id="buttonP2gQFPKZoe3Fm"><div class="button-container addHoverClick">
		<div class="button-background">
			<div class="buttonStart">
				<div class="buttonEnd">
					<div class="buttonMiddle"></div>
				</div>
			</div>
		</div>
		<div class="button-content">+25%</div></div></button>
<script type="text/javascript" id="buttonP2gQFPKZoe3Fm_script">
    window.addEvent('domready', function()
        {
        if($('buttonP2gQFPKZoe3Fm'))
        {
          $('buttonP2gQFPKZoe3Fm').addEvent('click', function ()
          {
            window.fireEvent('buttonClicked', [this, {"name":"","onclick":"","confirm":"","productionBoostDialog":{"infoIcon":"http:\/\/t4.answers.travian.ir\/index.php?aid=0#go2answer"},"title":"\u0645\u0632\u064a\u062f \u0645\u0646 \u0627\u0644\u0645\u0639\u0644\u0648\u0645\u0627\u062a \u0639\u0646 \u0632\u064a\u0627\u062f\u0629 \u0627\u0644\u0625\u0646\u062a\u0627\u062c","id":"buttonP2gQFPKZoe3Fm"}]);
          });
        }
        });
    </script>    </div>
</div> -->