                <div class="contentContainer">
                    <div id="content" class="universal">
                        <script type="text/javascript">
                            window.addEvent('domready', function () {
                                $$('.subNavi').each(function (element) {
                                    new Travian.Game.Menu(element);
                                });
                            });
                        </script>
					<div id="content"  class="warsim">
						<h1><?php echo REPORT_WARSIM;?></h1>
						<form action="warsim.php" method="post">
							<?php
							if(isset($_POST['result'])) {
								echo '<h4 class="round">'.JR_ATTACK_COMBAT_MODEL.': '
									.($form->getValue('attack_type')==1?JR_ATTACK_SCOUT:($form->getValue('attack_type')==4?JR_ATTACK_RAID:JR_ATTACK_NORMAL)).'</h4>';
								include("Templates/Simulator/res_a.tpl");
								include("Templates/Simulator/res_d.tpl");
								echo '<h4 class="round">'.JR_WARSIM_ATTACKCONFIG.'</h4>';
								if (isset($_POST['result'][3])&&isset($_POST['result'][4])){
									if ($_POST['result'][4]>$_POST['result'][3]){
										echo "";
									}elseif ($_POST['result'][4]==0){
										echo "";
									}else{
										$demolish=$_POST['result'][4]/$_POST['result'][3];
										//$Katalife=round($_POST['result'][4]-($_POST['result'][4]*$_POST['result'][1]));
										//$totallvl = round($form->getValue('kata')-($form->getValue('kata') * $demolish));
										$totallvl = round(sqrt(pow(($form->getValue('kata')+0.5),2)-($_POST['result'][4]*8)));
										echo "<p>Építése <b>".$form->getValue('kata')."</b> ".LEVEL." <b>".$totallvl."</b> Sérült.</p>";
									}
								}
							}
							include("Templates/Simulator/att.tpl");
							include("Templates/Simulator/def.tpl");
							$attackertribe = isset($_POST['attackertribe'])? $_POST['attackertribe'] : 0;
							$defendertribe = isset($_POST['defendertribe'])? $_POST['defendertribe'] : 0;
							$enforcestribes = isset($_POST['enforcestribes'])?$_POST['enforcestribes']:array();
							//$participantstribes = isset($_POST['participantstribes'])?$_POST['participantstribes']:array();
							?>
							<table id="select" cellpadding="1" cellspacing="1">
								<tbody>
									<tr>
										<td>
											<div class="fighterType">
												<div class="boxes boxesColor red">
													<div class="boxes-tl"></div><div class="boxes-tr"></div><div class="boxes-tc"></div><div class="boxes-ml"></div>
													<div class="boxes-mr"></div><div class="boxes-mc"></div><div class="boxes-bl"></div><div class="boxes-br"></div>
													<div class="boxes-bc"></div><div class="boxes-contents"><?php echo JR_WARSIM_ATTACKER;?></div>
												</div>
											</div>
											<div class="clear"></div>
											<div class="choice">
												<?php
													for($i=1;$i<=5;$i++){
														echo '<label><input class="radio" type="radio" name="attackertribe" value="'.$i.'" '
															.(($attackertribe == $i)?"checked":'').'> '.constant('TRIBE'.$i).'</label><br/>';
													}
												?>
											</div>
										</td>
										<td>
											<div class="fighterType">
												<div class="boxes boxesColor green">
													<div class="boxes-tl"></div><div class="boxes-tr"></div><div class="boxes-tc"></div>
													<div class="boxes-ml"></div><div class="boxes-mr"></div><div class="boxes-mc"></div>
													<div class="boxes-bl"></div><div class="boxes-br"></div><div class="boxes-bc"></div>
													<div class="boxes-contents"><?php echo REPORT_DEFENDER;?></div>
												</div>
											</div>
											<div class="clear"></div>
											<div class="choice">
												<?php
													for($i=1;$i<=5;$i++){
														echo '<label><input class="radio" type="radio" name="defendertribe" value="'.$i.'" '
															.(($defendertribe == $i)?"checked":'').'> '.constant('TRIBE'.$i).'</label><br/>';
													}
												?>
											</div>
										</td>
										<td>
											<div class="fighterType">
												<div class="boxes boxesColor green">
													<div class="boxes-tl"></div><div class="boxes-tr"></div><div class="boxes-tc"></div>
													<div class="boxes-ml"></div><div class="boxes-mr"></div><div class="boxes-mc"></div>
													<div class="boxes-bl"></div><div class="boxes-br"></div><div class="boxes-bc"></div>
													<div class="boxes-contents"><?php echo REPORT_REINFS;?></div>
												</div>
											</div>
											<div class="clear"></div>
											<div class="choice">
												<?php
													for($i=1;$i<=5;$i++){
														echo '<label><input class="check" type="checkbox" name="reinf_'.$i.'" value="1" '
															.(((in_array($i,$enforcestribes)))?"checked":'').'> '.constant('TRIBE'.$i).'</label><br/>';
													}
												?>
											</div>
										</td>
										<td>
											<div class="fighterType">
												<div class="boxes boxesColor darkgray">
												<div class="boxes-tl"></div><div class="boxes-tr"></div><div class="boxes-tc"></div>
												<div class="boxes-ml"></div><div class="boxes-mr"></div><div class="boxes-mc"></div>
												<div class="boxes-bl"></div><div class="boxes-br"></div><div class="boxes-bc"></div>
												<div class="boxes-contents"><?php echo JR_ATTACK_COMBAT_MODEL;?></div>
											</div>
											</div>
											<div class="clear"></div>
											<div class="choice">
												<label>
													<input class="radio" type="radio" name="attack_type" value="3" <?php if($form->getValue('attack_type') == 3 || $form->getValue('attack_type') == "") { echo "checked"; } ?>> <?php echo JR_ATTACK_NORMAL;?>
												</label><br/>
												<label>
													<input class="radio" type="radio" name="attack_type" value="4" <?php if($form->getValue('attack_type') == 4) { echo "checked"; } ?>> <?php echo JR_ATTACK_RAID;?>
												</label><br/>
												<label>
													<input class="radio" type="radio" name="attack_type" value="1" <?php if($form->getValue('attack_type') == 1) { echo "checked"; } ?>> <?php echo JR_ATTACK_SCOUT;?>
												</label><br/>
												<input type="hidden" name="uid" value="<?php echo $session->uid; ?>">
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<p class="btn">
								<button type="submit" value="Támadás szimulálása" name="s1" id="btn_ok">
									<div class="button-container">
										<div class="button-position">
											<div class="btl"><div class="btr"><div class="btc"></div></div></div>
											<div class="bml"><div class="bmr"><div class="bmc"></div></div></div>
											<div class="bbl"><div class="bbr"><div class="bbc"></div></div></div>
										</div>
										<div class="button-contents"><?php echo JR_WARSIM_SIMULATE;?></div>
									</div>
								</button>
							</p>
						</form>

</div></div>
                    <div class="clear"></div>
                </div>
                <div class='contentFooter'>&nbsp;</div>
            </div>
            <div id="sidebarAfterContent" class="sidebar afterContent">
                <div id="sidebarBoxActiveVillage" class="sidebarBox ">
                    <div class="sidebarBoxBaseBox">
                        <div class="baseBox baseBoxTop">
                            <div class="baseBox baseBoxBottom">
                                <div class="baseBox baseBoxCenter"></div>
				</div>
			</div>
		</div>
		<div class="button-content">simulation</div></div></button>
    <script type="text/javascript" id="buttona1kt4ZPNUeF61_script">
    window.addEvent('domready', function()
        {
        if($('buttona1kt4ZPNUeF61'))
        {
          $('buttona1kt4ZPNUeF61').addEvent('click', function ()
          {
            window.fireEvent('buttonClicked', [this, {"type":"submit","value":"\u0645\u062d\u0627\u0643\u0627\u0629","id":"buttona1kt4ZPNUeF61"}]);
          });
        }
        });
    </script>    </form>
</div>