<?php 

    $villmas=implode(',',$session->villages);
    $fff = array();
    $posolstvo=0;
    $fdata=$database->query("SELECT * FROM `fdata` WHERE vref IN (".$villmas.")");
    $link='';
    foreach($fdata as $f){
        $fff[$f['vref']]=$f;
        for($i=19;$i<40;$i++){
            if($f['f'.$i.'t']==18){
                $new=$database->getTypeLevel(18,$f['vref'],$f);
                $posolstvo=$posolstvo<$new?$new:$posolstvo;
                if($session->alliance != 0){ 
                    $link="window.location.href='build.php?id=".$i."&newdid=".$f['vref']."';";
                }
                break;
            }
        }


    }
//if($session->alliance != 0){ 
    ?>
	
<div id="sidebarBoxAlliance" class="sidebarBox   ">
	<div class="header ">
		<div class="buttonsWrapper">
    <a type="button" id="button5225ee283d8f8"  <?php if($posolstvo>0){echo "title='Alliance'";} ?>  class="layoutButton buttonFramed withIcon round alliance green   <?php if(!$session->alliance) echo "disabled"; ?> " onclick="return false;">
               	<svg viewBox="0 0 20 14.2" class="alliance"><g class="outline">
			
              
              
          
        <?php if($session->alliance != 0){  ?>
            <script type="text/javascript">

                if($('button5225ee283d8f8'))
                {
                    $('button5225ee283d8f8').addEvent('click', function ()
                    {
                        window.fireEvent('buttonClicked', [this, {"type":"green","onclick":"return false;","loadTitle":false,"boxId":"alliance","disabled":true,"speechBubble":"","class":"","id":"button5225ee283d8f8","redirectUrl":"allianz.php","redirectUrlExternal":""}]);
                    });
                }
            </script>
            <?php } ?>
		
  <path d="M4.42 1.17L2 6.62a.51.51 0 0 1-.66.26L.3 6.41a.51.51 0 0 1-.3-.66L2.43.3a.51.51 0 0 1 .66-.3l1.08.51a.49.49 0 0 1 .25.66zM20 5.61L17.68.53A.51.51 0 0 0 17 .28l-.82.37a.5.5 0 0 0-.25.66l2.28 5.08a.49.49 0 0 0 .66.25l.82-.37a.5.5 0 0 0 .31-.66zM4.85 1.11L4.49 2l3.09.22 1.06-.9zM2.69 5.86l-.46.87 1.11 1.61.52-.82zm2.16 1.66a.84.84 0 0 0-1.1.48l-.63 1.39a.84.84 0 1 0 1.53.67l.63-1.43a.84.84 0 0 0-.43-1.11zm1.44 1.35a.84.84 0 0 0-1.1.43l-.63 1.44a.84.84 0 0 0 .44 1.1.85.85 0 0 0 1.11-.43L6.72 10a.84.84 0 0 0-.43-1.13zM17 10.29a1.18 1.18 0 0 1-.76.48 1.14 1.14 0 0 1-.2.87 1.19 1.19 0 0 1-1 .51H15a1.18 1.18 0 0 1-1.2 1.14 1.12 1.12 0 0 1-.67-.22L13 13a1.21 1.21 0 0 1-.22.7 1.19 1.19 0 0 1-1 .51 1.12 1.12 0 0 1-.67-.22l-1.93-1.34a.81.81 0 0 1-.77 0 .84.84 0 0 1-.49-.93l-.16.37a.84.84 0 1 1-1.53-.67L6.85 10A.86.86 0 0 1 8 9.6a.85.85 0 0 1 .48.94l.16-.37a.84.84 0 0 1 1.11-.43.81.81 0 0 1 .45.49l3.24 2.24a.5.5 0 0 0 .69-.13.49.49 0 0 0 0-.58l-3.25-2.24a6.61 6.61 0 0 0 .39-.52l3.17 2.19a.77.77 0 0 1 .19.17l.1.06a.51.51 0 0 0 .7-.12.49.49 0 0 0 .09-.28.47.47 0 0 0-.12-.32l-.09-.06-3.64-2.58V8a4 4 0 0 0 .15-.7l3.91 2.7a.48.48 0 0 0 .55-.19.47.47 0 0 0 .09-.28.49.49 0 0 0-.21-.41l-4.34-3a3.82 3.82 0 0 0-.15-.67l-.62-.38a2.88 2.88 0 0 1-.83-.76s-.94.58-1.1.65a3.08 3.08 0 0 1-1.55.43 1.69 1.69 0 0 1-1.68-1.18A1.32 1.32 0 0 1 7 2.67a5.82 5.82 0 0 0 1.17-.17A7.59 7.59 0 0 0 10.08 1a1.1 1.1 0 0 1 .69-.37c1 0 1.46 1.21 2.74 1.21a4.32 4.32 0 0 0 1.93-.44l2.23 4.86a4.54 4.54 0 0 1-.62 1.19c-.25.23-.66.18-1 .18a3 3 0 0 1-1.29-.3l1.93 1.33a1.19 1.19 0 0 1 .31 1.63zm-4.88 2.6a.49.49 0 0 0-.22-.41L10 11.17l-.4.93 1.72 1.19a.51.51 0 0 0 .7-.12.51.51 0 0 0 .08-.28z"></path>
</g><g class="icon">
  <path d="M4.42 1.17L2 6.62a.51.51 0 0 1-.66.26L.3 6.41a.51.51 0 0 1-.3-.66L2.43.3a.51.51 0 0 1 .66-.3l1.08.51a.49.49 0 0 1 .25.66zM20 5.61L17.68.53A.51.51 0 0 0 17 .28l-.82.37a.5.5 0 0 0-.25.66l2.28 5.08a.49.49 0 0 0 .66.25l.82-.37a.5.5 0 0 0 .31-.66zM4.85 1.11L4.49 2l3.09.22 1.06-.9zM2.69 5.86l-.46.87 1.11 1.61.52-.82zm2.16 1.66a.84.84 0 0 0-1.1.48l-.63 1.39a.84.84 0 1 0 1.53.67l.63-1.43a.84.84 0 0 0-.43-1.11zm1.44 1.35a.84.84 0 0 0-1.1.43l-.63 1.44a.84.84 0 0 0 .44 1.1.85.85 0 0 0 1.11-.43L6.72 10a.84.84 0 0 0-.43-1.13zM17 10.29a1.18 1.18 0 0 1-.76.48 1.14 1.14 0 0 1-.2.87 1.19 1.19 0 0 1-1 .51H15a1.18 1.18 0 0 1-1.2 1.14 1.12 1.12 0 0 1-.67-.22L13 13a1.21 1.21 0 0 1-.22.7 1.19 1.19 0 0 1-1 .51 1.12 1.12 0 0 1-.67-.22l-1.93-1.34a.81.81 0 0 1-.77 0 .84.84 0 0 1-.49-.93l-.16.37a.84.84 0 1 1-1.53-.67L6.85 10A.86.86 0 0 1 8 9.6a.85.85 0 0 1 .48.94l.16-.37a.84.84 0 0 1 1.11-.43.81.81 0 0 1 .45.49l3.24 2.24a.5.5 0 0 0 .69-.13.49.49 0 0 0 0-.58l-3.25-2.24a6.61 6.61 0 0 0 .39-.52l3.17 2.19a.77.77 0 0 1 .19.17l.1.06a.51.51 0 0 0 .7-.12.49.49 0 0 0 .09-.28.47.47 0 0 0-.12-.32l-.09-.06-3.64-2.58V8a4 4 0 0 0 .15-.7l3.91 2.7a.48.48 0 0 0 .55-.19.47.47 0 0 0 .09-.28.49.49 0 0 0-.21-.41l-4.34-3a3.82 3.82 0 0 0-.15-.67l-.62-.38a2.88 2.88 0 0 1-.83-.76s-.94.58-1.1.65a3.08 3.08 0 0 1-1.55.43 1.69 1.69 0 0 1-1.68-1.18A1.32 1.32 0 0 1 7 2.67a5.82 5.82 0 0 0 1.17-.17A7.59 7.59 0 0 0 10.08 1a1.1 1.1 0 0 1 .69-.37c1 0 1.46 1.21 2.74 1.21a4.32 4.32 0 0 0 1.93-.44l2.23 4.86a4.54 4.54 0 0 1-.62 1.19c-.25.23-.66.18-1 .18a3 3 0 0 1-1.29-.3l1.93 1.33a1.19 1.19 0 0 1 .31 1.63zm-4.88 2.6a.49.49 0 0 0-.22-.41L10 11.17l-.4.93 1.72 1.19a.51.51 0 0 0 .7-.12.51.51 0 0 0 .08-.28z"></path>
</g></svg>
		</a>

<script type="text/javascript">
	jQuery('#button660c7b5ca38b2').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":null,"boxId":"","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button660c7b5ca38b2","redirectUrl":"\/alliance","redirectUrlExternal":"","svg":"sideBar\/alliance.svg","content":""}]);
	});
</script>
    <a id="button660c7b5ca3951" class="layoutButton buttonFramed withIcon round forum green  <?php if(!$session->alliance) echo "disabled"; ?>  " href="allianz.php?s=2">
					<svg viewBox="0 0 20 18.54" class="forum"><g class="outline">
  <path d="M3.31 4.7h8.5l-1.3 1.37h-7.2zm0 4.85h3.91l1.3-1.37H3.31zm0 3.47h3.45l.06-1.37H3.31zM17.16 1.29l-.94 1-1.43 1.5L13 5.66l-.49.51-2 2.11-1.26 1.37-.81.86-.06 1.24-.07 1.37v.51l3-.44 3.25-3.43.16-.17L20 4zm-.59 12l-.19-3.44L15 11.26a.61.61 0 0 0-.16.45l.07 1a.57.57 0 0 1-.15.43l-3.26 3.58a.57.57 0 0 1-.43.19H2.54a.58.58 0 0 1-.54-.58V2.53a.58.58 0 0 1 .58-.59h11a.59.59 0 0 0 .42-.17L15.7 0H.58A.58.58 0 0 0 0 .58V18a.58.58 0 0 0 .58.58H11.8a.57.57 0 0 0 .43-.19l4.19-4.66a.53.53 0 0 0 .15-.46z"></path>
</g><g class="icon">
  <path d="M3.31 4.7h8.5l-1.3 1.37h-7.2zm0 4.85h3.91l1.3-1.37H3.31zm0 3.47h3.45l.06-1.37H3.31zM17.16 1.29l-.94 1-1.43 1.5L13 5.66l-.49.51-2 2.11-1.26 1.37-.81.86-.06 1.24-.07 1.37v.51l3-.44 3.25-3.43.16-.17L20 4zm-.59 12l-.19-3.44L15 11.26a.61.61 0 0 0-.16.45l.07 1a.57.57 0 0 1-.15.43l-3.26 3.58a.57.57 0 0 1-.43.19H2.54a.58.58 0 0 1-.54-.58V2.53a.58.58 0 0 1 .58-.59h11a.59.59 0 0 0 .42-.17L15.7 0H.58A.58.58 0 0 0 0 .58V18a.58.58 0 0 0 .58.58H11.8a.57.57 0 0 0 .43-.19l4.19-4.66a.53.53 0 0 0 .15-.46z"></path>
</g></svg>
		</a>

<script type="text/javascript">
	jQuery('#button660c7b5ca3951').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":null,"boxId":"","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button660c7b5ca3951","redirectUrl":"\/alliance\/forum","redirectUrlExternal":"","svg":"general\/forum.svg","content":""}]);
	});
</script>
    <a id="button660c7b5ca39b0" class="layoutButton buttonFramed withIcon round embassy green     <?php if(!$posolstvo || !$session->alliance){ echo "disabled";}?>"  title="Embassy" onclick="<?php echo $link;?> return false;">
					<svg viewBox="0 0 17.63 20" class="embassy"><g class="outline">
  <path d="M16.15 2.21l-.23 1.66h-1.45v-.4A2.28 2.28 0 0 0 11 2.15l-.34.28h-.05a2.77 2.77 0 0 1-1.82.45 2.78 2.78 0 0 1-2.06-1.22c-.06-.13-.12-.25-.19-.37V1.2A2.68 2.68 0 0 0 3 .31c-.48.25-1.86 1.11-1.86 1.11.53-.31 3.46-.2 3.63 1.33C1 .92 0 4.37 0 4.37s2.42-1.48 4.19 1.48A3 3 0 0 0 .88 8c.55-.34 1.79-.07 2.48 0a3 3 0 0 1 2.39 1.62A2.5 2.5 0 0 0 9.63 11a1.67 1.67 0 0 1 .23-.23 1.56 1.56 0 0 1 .2-.16 2.46 2.46 0 0 1 1.65-.43c.32 0 .39.29.41.55a.89.89 0 0 0 1.59.55v-.31H15l-1.27 8.83 1.48.2 2.42-17.58zM13.6 10a17.28 17.28 0 0 1-.06-2.72 10.63 10.63 0 0 1 .54-1.81h1.62L15.08 10z"></path>
</g><g class="icon">
  <path d="M16.15 2.21l-.23 1.66h-1.45v-.4A2.28 2.28 0 0 0 11 2.15l-.34.28h-.05a2.77 2.77 0 0 1-1.82.45 2.78 2.78 0 0 1-2.06-1.22c-.06-.13-.12-.25-.19-.37V1.2A2.68 2.68 0 0 0 3 .31c-.48.25-1.86 1.11-1.86 1.11.53-.31 3.46-.2 3.63 1.33C1 .92 0 4.37 0 4.37s2.42-1.48 4.19 1.48A3 3 0 0 0 .88 8c.55-.34 1.79-.07 2.48 0a3 3 0 0 1 2.39 1.62A2.5 2.5 0 0 0 9.63 11a1.67 1.67 0 0 1 .23-.23 1.56 1.56 0 0 1 .2-.16 2.46 2.46 0 0 1 1.65-.43c.32 0 .39.29.41.55a.89.89 0 0 0 1.59.55v-.31H15l-1.27 8.83 1.48.2 2.42-17.58zM13.6 10a17.28 17.28 0 0 1-.06-2.72 10.63 10.63 0 0 1 .54-1.81h1.62L15.08 10z"></path>
</g></svg>
		</a>

<script type="text/javascript">
	jQuery('#button660c7b5ca39b0').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":null,"boxId":"alliance","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button660c7b5ca39b0","redirectUrl":"\/build.php?gid=18&newdid=19736","redirectUrlExternal":"","svg":"sideBar\/embassy.svg","content":""}]);
	});
</script>
</div>
	</div>
	<div class="content">
		<div class="boxTitle withBanner">
    
    	<div class="name"></div>
		
		
		      
                <?php
                if($session->alliance == 0){
                    echo '<span>'.$lang['Alliance']['00'].'</span>';
                }
                else{
                    echo "<div class='sideInfoAlly'><a class='signLink' href='allianz.php' title='".SIDEINFO_ALLIANCE."'><span class='wrap'>".$allianceinfoMY['tag']."</span></a><a href='allianz.php?s=2' class='crest' title='".SIDEINFO_ALLY_FORUM."'><img src='img/x.gif'></a></div>";
                }
                ?>

  

		
		
		
		
		
		
		
		
		
		
		
		
</div>

	</div>
	</div>