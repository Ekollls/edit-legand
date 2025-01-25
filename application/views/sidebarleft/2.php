
<div id="sidebarBoxInfobox" class="sidebarBox toggleable expanded ">
	<div class="header ">
			</div>
	<div class="content">
		<div class="boxTitle"><?php echo infobox_desc_text_1; ?></div>
<div>



				<span class="messageShortInfo">
                    <?php echo $news->nSum(); ?>
					
                    ‎‭‭‬×‬‎<img class="inlineIcon messageShortInfo" src="img/x.gif" alt="Total messages: <?php echo $news->nSum(); ?>"><svg viewBox="0 0 20 14.28" class="messageNew">
					  <path d="M.72.93A1.69 1.69 0 0 1 .33.21L.54 0h19a1.56 1.56 0 0 1 .16.2 1.73 1.73 0 0 1-.39.73l-7.2 7.78a2.79 2.79 0 0 1-4.18 0zm13.59 7.89l3.55 2.5-4.92-1.06a4.31 4.31 0 0 1-5.84 0l-4.89 1.06 3.53-2.49L0 2.62v10.06a1.54 1.54 0 0 0 1.47 1.6h17.06a1.54 1.54 0 0 0 1.47-1.6v-10z"></path>
</svg>
				</span>
				
            </div>
            <div>
                <ul>
                    <?php 
                    echo $news->getNews(); 
                    $timestamp=$database->isDeleting($session->uid);
                    $k = 0;
                if($session->protection-time()>0  && $session->protect==1){
                        $k++;
                       
                        $uurover=$generator->getTimeFormat($session->protection-time());
                        ?>
                        <li id="infoID_<?php echo $i; ?>"<?php if($first == 'protect'){ echo "  class=\"firstElement\""; }?>><?php echo sprintf(PROTECTION_TIME,$session->protection-time(),$uurover);?></li>
                    <?php
                    }
                    elseif($timestamp) {
                        $k++;
                        $time=$generator->getTimeFormat(($timestamp-time()));
                        ?>
                        <style>
                        .buttonQ{
                            width: 24px;height: 24px;background-image: url(<?= GP_LOCATION ?>img_rtl/round/button/buttonSmall-rtl.png);padding: 0;border: none;border-radius: 2px;
                        }
                        </style>
                        <li id="infoID_<?php echo $i; ?>"<?php if($first == 'delete'){ echo "  class=\"firstElement\""; }?>>
                        <button type="button" class="icon" onclick="window.location.href = 'options.php?s=3&delcancel=1'; return false;"><img src="img/x.gif" class="del" alt="del"></button>
                         <?php  echo sprintf(ACCOUNT_DELETION,($timestamp-time()),$time);?>
                        </li>
					
                    <?php
                    }
                    
                    
                    
                   //var_dump($golds['plus']< ($_SERVER['REQUEST_TIME'] + 3600 * 31*24)); 
                   /* if ($session->plus) {
                        if ($golds['plus'] < ($_SERVER['REQUEST_TIME'] + 3600 * 31*24)) {
                            $output .= "<li id=\"infoID_1\" class=\"\">";
                            $exp = $generator->getTimeFormat($golds['plus'] - $_SERVER['REQUEST_TIME']);
                            $output .= IM_PLUSDEACTIVE . ' <span id="timer' . $timer . '">' . $exp . '</span>';
                            $output .= "<br><button type=\"button\" value=\"extend\" id=\"button5288d485c0f4f\" class=\"textButtonV1 gold  \" coins=\"" . g_plus . "\">
                                <div class=\"button-container addHoverClick \">
                                    <div class=\"button-background\">
                                        <div class=\"buttonStart\">
                                            <div class=\"buttonEnd\">
                                                <div class=\"buttonMiddle\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div  class=\"button-content\">" . IM_EXTEND . " <img src=\"".GP_LOCATION2."x.gif\" class=\"goldIcon\" alt=\"\"><span class=\"goldValue\">" . g_plus . "</span></div>
                                </div>
                            </button>
                            <script type=\"text/javascript\">
                                window.addEvent('domready', function()
                                {
                                if($('button5288d485c0f4f'))
                                {
                                    $('button5288d485c0f4f').addEvent('click', function ()
                                    {
                                        window.fireEvent('buttonClicked', [this, {\"type\":\"button\",\"value\":\"extend\",\"name\":\"\",\"id\":\"button5288d485c0f4f\",\"class\":\"gold \",\"title\":\"\",\"confirm\":\"\",\"onclick\":\"\",\"coins\":10,\"wayOfPayment\":{\"featureKey\":\"plus\",\"context\":\"infobox\"}}]);
                                    });
                                }
                                });
                            </script>";
                            $timer++;
                        }
                    }
                   
                    if ($golds['b1']) {
                        if ($golds['b1'] < ($_SERVER['REQUEST_TIME'] + 3600 *31 * 24)) {
                            $output .= "<li id=\"infoID_2\" class=\"\">";
                            $exp = $generator->getTimeFormat($golds['b1'] - $_SERVER['REQUEST_TIME']);
                            $output .= IM_WOODDEACTIVE . ' <span id="timer' . $timer . '">' . $exp . '</span>';
                            $output .= "<br><button type=\"button\" value=\"extend\" id=\"button652W890f4f\" class=\"textButtonV1 gold  \" coins=\"" . g_wood . "\">
                                <div class=\"button-container addHoverClick \">
                                    <div class=\"button-background\">
                                        <div class=\"buttonStart\">
                                            <div class=\"buttonEnd\">
                                                <div class=\"buttonMiddle\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"button-content\">" . IM_EXTEND . " <img src=\"".GP_LOCATION2."x.gif\" class=\"goldIcon\" alt=\"\"><span class=\"goldValue\">" . g_wood . "</span></div>
                                </div>
                            </button>
                            <script type=\"text/javascript\">
                                window.addEvent('domready', function()
                                {
                                if($('button652W890f4f'))
                                {
                                    $('button652W890f4f').addEvent('click', function ()
                                    {
                                        window.fireEvent('buttonClicked', [this, {\"type\":\"button\",\"value\":\"extend\",\"name\":\"\",\"id\":\"button652W890f4f\",\"class\":\"gold \",\"title\":\"\",\"confirm\":\"\",\"onclick\":\"\",\"coins\":" . g_wood . ",\"wayOfPayment\":{\"featureKey\":\"productionboostWood\",\"context\":\"infobox\"}}]);
                                    });
                                }
                                });
                            </script>";
                            $timer++;
                            if ($golds['b1'] <= time()) {
                                $database->query("UPDATE users set b1 = '0' where `username`='" . $session->username . "'") ;
                            }
                        }
                    }
                   // var_dump($golds['b1']);die();
                    if ($golds['b2']) {
                        if ($golds['b2'] < ($_SERVER['REQUEST_TIME'] + 3600 *31 * 24)) {
                            $output .= "<li id=\"infoID_3\" class=\"\">";
                            $exp = $generator->getTimeFormat($golds['b2'] - $_SERVER['REQUEST_TIME']);
                            $output .= IM_CLAYDEACTIVE . ' <span id="timer' . $timer . '">' . $exp . '</span>';
                            $output .= "<br><button type=\"button\" value=\"extend\" id=\"button652C890Lf4f\" class=\"textButtonV1 gold  \" coins=\"" . g_clay . "\">
                                <div class=\"button-container addHoverClick \">
                                    <div class=\"button-background\">
                                        <div class=\"buttonStart\">
                                            <div class=\"buttonEnd\">
                                                <div class=\"buttonMiddle\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"button-content\">" . IM_EXTEND . " <img src=\"".GP_LOCATION2."x.gif\" class=\"goldIcon\" alt=\"\"><span class=\"goldValue\">" . g_clay . "</span></div>
                                </div>
                            </button>
                            <script type=\"text/javascript\">
                                window.addEvent('domready', function()
                                {
                                if($('button652C890Lf4f'))
                                {
                                    $('button652C890Lf4f').addEvent('click', function ()
                                    {
                                        window.fireEvent('buttonClicked', [this, {\"type\":\"button\",\"value\":\"extend\",\"name\":\"\",\"id\":\"button652C890Lf4f\",\"class\":\"gold \",\"title\":\"\",\"confirm\":\"\",\"onclick\":\"\",\"coins\":" . g_clay . ",\"wayOfPayment\":{\"featureKey\":\"productionboostClay\",\"context\":\"infobox\"}}]);
                                    });
                                }
                                });
                            </script>";
                            $timer++;
                            if ($golds['b2'] <= time()) {
                                $database->query("UPDATE users set b2 = '0' where `username`='" . $session->username . "'") ;
                            }
                        }
                    }
                    if ($golds['b3']) {
                        if ($golds['b3'] < ($_SERVER['REQUEST_TIME'] + 3600 *31  * 24)) {
                            $output .= "<li id=\"infoID_4\" class=\"\">";
                            $exp = $generator->getTimeFormat($golds['b3'] - $_SERVER['REQUEST_TIME']);
                            $output .= IM_IRONDEACTIVE . '<span id="timer' . $timer . '">' . $exp . '</span>';
                            $output .= "<br><button type=\"button\" value=\"extend\" id=\"button652I8900f4f\" class=\"textButtonV1 gold  \" coins=\"" . g_iron . "\">
                                <div class=\"button-container addHoverClick \">
                                    <div class=\"button-background\">
                                        <div class=\"buttonStart\">
                                            <div class=\"buttonEnd\">
                                                <div class=\"buttonMiddle\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"button-content\">" . IM_EXTEND . " <img src=\"".GP_LOCATION2."x.gif\" class=\"goldIcon\" alt=\"\"><span class=\"goldValue\">" . g_iron . "</span></div>
                                </div>
                            </button>
                            <script type=\"text/javascript\">
                                window.addEvent('domready', function()
                                {
                                if($('button652I8900f4f'))
                                {
                                    $('button652I8900f4f').addEvent('click', function ()
                                    {
                                        window.fireEvent('buttonClicked', [this, {\"type\":\"button\",\"value\":\"extend\",\"name\":\"\",\"id\":\"button652I8900f4f\",\"class\":\"gold \",\"title\":\"\",\"confirm\":\"\",\"onclick\":\"\",\"coins\":" . g_iron . ",\"wayOfPayment\":{\"featureKey\":\"productionboostIron\",\"context\":\"infobox\"}}]);
                                    });
                                }
                                });
                            </script>";
                            $timer++;
                            if ($golds['b3'] <= time()) {
                                $database->query("UPDATE users set b3 = '0' where `username`='" . $session->username . "'") ;
                            }
                        }
                    }
                    if ($golds['b4']) {
                        if ($golds['b4'] < ($_SERVER['REQUEST_TIME'] + 3600*31 * 24)) {
                            $output .= "<li id=\"infoID_5\" class=\"\">";
                            $exp = $generator->getTimeFormat($golds['b4'] - $_SERVER['REQUEST_TIME']);
                            $output .= IM_CROPDEACTIVE . '<span id="timer' . $timer . '">' . $exp . '</span>';
                            $output .= "<br><button type=\"button\" value=\"extend\" id=\"button652C890Rf4f\" class=\"textButtonV1 gold  \" coins=\"" . g_crop . "\">
                                <div class=\"button-container addHoverClick \">
                                    <div class=\"button-background\">
                                        <div class=\"buttonStart\">
                                            <div class=\"buttonEnd\">
                                                <div class=\"buttonMiddle\"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"button-content\">" . IM_EXTEND . " <img src=\"".GP_LOCATION2."x.gif\" class=\"goldIcon\" alt=\"\"><span class=\"goldValue\">" . g_crop . "</span></div>
                                </div>
                            </button>
                            <script type=\"text/javascript\">
                                window.addEvent('domready', function()
                                {
                                if($('button652C890Rf4f'))
                                {
                                    $('button652C890Rf4f').addEvent('click', function ()
                                    {
                                        window.fireEvent('buttonClicked', [this, {\"type\":\"button\",\"value\":\"extend\",\"name\":\"\",\"id\":\"button652C890Rf4f\",\"class\":\"gold \",\"title\":\"\",\"confirm\":\"\",\"onclick\":\"\",\"coins\":" . g_crop . ",\"wayOfPayment\":{\"featureKey\":\"productionboostCrop\",\"context\":\"infobox\"}}]);
                                    });
                                }
                                });
                            </script>";
                            $timer++;
                            if ($golds['b4'] <= time()) {
                                $database->query("UPDATE users set b4 = '0' where `username`='" . $session->username . "'") ;
                            }
                        }
                    }*/
                    
                    if(isset( $output )&&!empty( $output )){
                        echo  $output ;
                    }
					$LM = $sData['lastmedal'];
                              $ME = time()-$LM; 
                              $m =MEDALS-$ME;
      
                    echo "<li style=\"font-family: IRANSans;\">مدال ها تا <span class=\"timer\" counting=\"down\" value=\"".($m)."\">".$m."</span> اهدا می شوند.</li>";
                    if(OPENING+7200>time()) {
                        echo "<li style=\"font-family: IRANSans;\">تا آزادسازی فارم ها <span class=\"timer\" counting=\"down\" value=\"".(OPENING+7200-time())."\">".$generator->getTimeFormat((OPENING+7200-time()))."</span> ساعت مانده است.</li> <br>";
                     }
                     if(ARTEFACTS-86400>time()) {
                        echo "<li style=\"font-family: IRANSans;\">تا آزادسازی منجنیق ها <span class=\"timer\" counting=\"down\" value=\"".(ARTEFACTS-time()-86400)."\">".$generator->getTimeFormat((ARTEFACTS-time()))."</span> ساعت مانده است.</li> <br>";
                     }
                    if(ARTEFACTS>time()) {
                        echo "<li style=\"font-family: IRANSans;\">تا آزادسازی کتیبه ها <span class=\"timer\" counting=\"down\" value=\"".(ARTEFACTS-time())."\">".$generator->getTimeFormat((ARTEFACTS-time()))."</span> ساعت مانده است.</li> <br>";
                     }
                     if(WW_PLAN>time()) {
                        echo "<li style=\"font-family: IRANSans;\">تا آزادسازی نقشه ها <span class=\"timer\" counting=\"down\" value=\"".(WW_PLAN-time())."\">".$generator->getTimeFormat((WW_PLAN-time()))."</span> ساعت مانده است.</li> <br>";
                     }
                    ?>
                </ul>
            </div>
	</div>
				<div class="toggle">
		<button type="button" class="toggle" onclick="">
			<svg class="toggleArrow" viewBox="0 0 18 11">
				<filter id="insetShadow">
				
					<feFlood flood-color="#a2e25e"></feFlood>
					<feComposite in2="SourceAlpha" operator="out"></feComposite>
					<feGaussianBlur stdDeviation="2" result="blur"></feGaussianBlur>
					<feComposite operator="atop" in2="SourceGraphic"></feComposite>
				</filter>
				<path class="caret" d="M1 10H17L9 1z"></path>
				<path class="glow" d="M1 10H17L9 1z"></path>
			</svg>
		</button>
	</div>
<script type="text/javascript">
    window.addEvent('domready', function() {
        Travian.Translation.add({
            'infobox_collapsed': 'Show Messages',
            'infobox_expanded': 'Hide Messages'
        });

        var box = $('sidebarBoxInfobox');
        box.down('button.toggle').addEvent('click', function(e) {
            Travian.Game.Layout.toggleBox(box, 'travian_toggle', 'infobox');
        });

        Travian.Game.Layout.setInfoboxItemsRead();

        // New code to delete the message using the `setupInfoboxItemsDeletionWithMessage` function
        const newsMessage = 'پیام نمایش داده شده دیگر نمایش داده نشود؟'; // Assuming the message is available in a PHP variable
        const deleteButtonLabel = 'حذف نوتیفیکیشن'; // Assuming the button label is available in a PHP variable

        // Call the `setupInfoboxItemsDeletionWithMessage` function to handle message deletion
        Travian.Game.Layout.setupInfoboxItemsDeletionWithMessage(newsMessage, deleteButtonLabel);
    });
</script>
            </div>
