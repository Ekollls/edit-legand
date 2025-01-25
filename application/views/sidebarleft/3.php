

<div id="sidebarBoxLinklist" class="sidebarBox   ">
    <div class="sidebarBoxBaseBox">
        <div class="baseBox baseBoxTop">
            <div class="baseBox baseBoxBottom">
                <div class="baseBox baseBoxCenter"></div>
            </div>
        </div>
    </div>
    <div class="sidebarBoxInnerBox">
        <div class="innerBox header ">
		<div class="buttonsWrapper">
        <button type="button" id="buttonSbCOS5JTM2euX" title="لیست لینک‌ها || ویرایش لیست لینک‌ها" class="layoutButton buttonFramed withIcon round  workshop   <?php if($session->plus){echo 'White';}else{ echo 'Black';}?> <?=$green?> <?php echo $workshop; ?>"  onclick="return false;">
							<svg viewBox="0 0 15.59 20" class="edit">
                    <g class="outline">
                        <path d="M15.59 18.55V20H0v-1.45zM11.52 0L1.05 13.47.92 17.4l3.65-1.21L15 2.73zm.25 7L8.16 4.33 9 3.2l3.6 2.62z"></path>
                    </g>
                    <g class="icon">
                        <path d="M15.59 18.55V20H0v-1.45zM11.52 0L1.05 13.47.92 17.4l3.65-1.21L15 2.73zm.25 7L8.16 4.33 9 3.2l3.6 2.62z"></path>
                    </g>
                </svg>
		</a>
                <div class="button-container addHoverClick">
                    <i></i>
                </div>
			
            </button>
 </div>
            <script type="text/javascript">
                <?php if($session->plus){ ?>
                    if ($('buttonSbCOS5JTM2euX')) {
                    $('buttonSbCOS5JTM2euX').addEvent('click', function () {
                        window.fireEvent('buttonClicked', [this, {
                            "type": "green",
                            "onclick": "return false;",
                            "loadTitle": false,
                            "boxId": "",
                            "disabled": false,
                            "speechBubble": "",
                            "class": "",
                            "id": "buttonSbCOS5JTM2euX",
                            "redirectUrl": "spieler.php?s=2",
                            "redirectUrlExternal": "",
                            "title": "لیست لینک‌ها|| ویرایش لیست لینک‌ها"
                        }]);
                    });
                }

                <?php }else{ ?>


                if ($('buttonSbCOS5JTM2euX')) {
                    $('buttonSbCOS5JTM2euX').addEvent('click', function () {
                        window.fireEvent('buttonClicked', [this, {
                            "type": "gold",
                            "onclick": "return false;",
                            "loadTitle": false,
                            "boxId": "",
                            "disabled": false,
                            "speechBubble": "",
                            "class": "",
                            "id": "buttonSbCOS5JTM2euX",
                            "redirectUrl": "",
                            "redirectUrlExternal": "",
                            "plusDialog":{"featureKey":"linkList","infoIcon":"http:\/\/t4.answers.travian.us\/index.php?aid=Help#go2answer"},"title": "لیست لینک‌ها|| پلاس به شما امکان افزودن لینک به لیست را می دهد"
                        }]);
                    });
                }
            <?php } ?>
            </script>
			</div>

	
	
        <div class="clear"></div>
            
        <div class="innerBox content">
			<div class="boxTitle"><?php echo dorf1_links; ?></div>
            <div class="linklistNotice">
 
				</div>	
				
                <?php
                if($session->plus) {
                    $links = $database->getLinks($session->uid);
                    $query = count($links);
                    if($query>0){
                        echo '<div id="linkList" class="listing"><div class="list none">';
                        foreach($links as $link) {
                            echo '<ul><li class="n">';
                            echo '<a style="color:#4f4e4e;  font-family: IRANSans;" href="'.$link['url'].'" title="'.$link['name'].'">'.$link['name'].'</a></li></ul>';
                        }
                        echo '<div class="pager"><a style="color:#4f4e4e;  font-family: IRANSans;" href="#" class="back" style="display: none; "></a><a href="#" class="next" style="display: none; "></a></div></div></div>';
                    }
                }else{
                    echo Link_desc_text_1;
                }
                ?>
				
            </div>
        </div>
           </div>
       
<script type="text/javascript">
	jQuery('#button664a7bf468d64').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":null,"boxId":"","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button664a7bf468d64","redirectUrl":"\/linklist.php","redirectUrlExternal":"","svg":"sideBar\/editUnderlined.svg","content":"","title":"\u062a\u062d\u0631\u064a\u0631 \u0642\u0627\u0626\u0645\u0629 \u0627\u0644\u0631\u0648\u0627\u0628\u0637"}]);
	});
</script>
