<?php
include_once "application/Account.php";


include ("application/Alliance.php");

if (isset($_GET['aid']) && !is_numeric($_GET['aid']) || $_GET['aid'] == '0')
	die('Hacking Attemp');
if (isset($_GET['s'])) {
	$_GET['s'] = $database->FilterIntValue($database->filterVar($_GET['s']));
}
if (isset($_GET['aid'])) {
	$_GET['aid'] = $database->FilterIntValue($database->filterVar($_GET['aid']));
}


$alliance->procAlliance($_GET);


//echo $session->alliance;
if (!empty($_GET['aid']) or $session->alliance != 0) {
	if (!isset($_GET['aid']) || $_GET['aid'] != $session->alliance) {
		$myaid = 0;
	}
	if (isset($_GET['aid'])) {
		$aid = $database->FilterIntValue($database->FilterVar($_GET['aid']));
	} else {
		$aid = $session->alliance;
	}
	$allianceinfo = $database->getAlliance($aid);
	$tag = $database->RemoveXSS($allianceinfo['tag']);
	$aname = $database->RemoveXSS($allianceinfo['name']);
	?>


	<?php include ("application/views/html.php"); 
	if (isset($_GET['fid'])) {
		$fid = preg_replace('/[^0-9]/', '', $_GET['fid']);
		$forum = $database->query('SELECT `forum_name`,`forum_area`,`alliance` FROM forum_cat WHERE id = ' . $fid . '');
		$forum_type = $forum[0];
		if ($forum_type['forum_name'] != '' && $forum_type['forum_area'] != 1) {
			if ($forum_type['forum_area'] == 0) {
				if ($forum_type['alliance'] != $session->alliance) {
					header('Location: ' . $_SERVER['PHP_SELF']);
					exit;
				}
			} else if ($forum_type['forum_area'] == 2) {
				if (count($database->diplomacyExistingRelationships($session->alliance))) {
					foreach ($database->diplomacyExistingRelationships($session->alliance) as $key => $row) {
						$type = $row['type'];
						switch ($type) {
							case 1:
								$type = AL_CONFWITH;
								break;
							case 2:
								$type = AL_NAPWITH;
								break;
							case 3:
								$type = AL_WARWITH;
								break;
						}
					}
				} elseif (count($database->diplomacyExistingRelationships2($session->alliance))) {
					foreach ($database->diplomacyExistingRelationships2($session->alliance) as $key => $row) {
						switch ($type) {
							case 1:
								$type = AL_CONFWITH;
								break;
							case 2:
								$type = AL_NAPWITH;
								break;
							case 3:
								$type = AL_WARWITH;
								break;
						}
					}
				}
				if (isset($type) && $type != AL_CONFWITH) {
					header('Location: ' . $_SERVER['PHP_SELF']);
					exit;
				}
			} else if ($forum_type['forum_area'] == 3) {
				if ($forum_type['alliance'] != $session->alliance) {
					header('Location: ' . $_SERVER['PHP_SELF']);
					exit;
				}
			} else {
				header('Location: ' . $_SERVER['PHP_SELF']);
				exit;
			}
		}
	}
	if (isset($_POST['tid']) && $_POST['tid'] == 4) {
		$q = $database->query("SELECT `voters`,`p1`,`p2`,`p3`,`p4` FROM forum_poll where id = '" . $_GET['tid'] . "'");
		$q = $q[0];
	
		$votr = explode(',', $q['voters']);
		foreach ($votr as $voter) {
			if ($voter == $session->uid) {
				$yes = 1;
			}
		}
		if ($yes != 1) {
			if ($_POST['vote_option'] == 306) {
				$poll = 1;
			} elseif ($_POST['vote_option'] == 307) {
				$poll = 2;
			} elseif ($_POST['vote_option'] == 308) {
				$poll = 3;
			} elseif ($_POST['vote_option'] == 309) {
				$poll = 4;
			}
			$p = ($q['p' . $poll] + 1);
			$z = $database->query("UPDATE forum_poll set `p" . $poll . "` = " . $p . " where id = '" . $_GET['tid'] . "'") ;
			if ($q['voters'] == 0) {
				$votcode = $session->uid;
			} else {
				$votcode = $q['voters'] . ',' . $session->uid;
			}
			$database->query("UPDATE forum_poll set `voters` = '" . $votcode . "' where id = '" . $_GET['tid'] . "'") ;
		}
	}
	?>




	<body
		class="v35 webkit <?= $database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE alliance <?php if ($dorf1 == '') {
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

	


				
				
				
				
				
				<div id="contentOuterContainer" class=" contentPage">
                                            <div class="contentTitle buttonCount2">
                            	<a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="/dorf2.php">
        <svg viewBox="0 0 20 20"><g class="outline">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g><g class="icon">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g></svg>
    </a>
<a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://support.travian.com/support/solutions/articles/7000060449-creating-joining-and-leaving-an-alliance" target="_blank">&nbsp;</a>
                        </div>
                        <div class="contentContainer">
                            <div id="content" class="alliance allianceProfile">

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
						
								<h1 class="titleInHeader"><?php

								echo "<h1 class=\"titleInHeader\">" . $tag . " - " . $aname . "</h1>"; ?></h1>
								<?php
								$invite_permission = $database->getAlliancePermission($session->uid, "opt4", 0);


								$myaid = 1;

								if (!isset($_GET['aid']) || $_GET['aid'] != $session->alliance) {
									$myaid = 0;
								}

								if (isset($_GET['s'])) {
									if ($_GET['s'] != 5 or $session->sit == 0) {
										switch ($_GET['s']) {

											case 3:
												include ("application/views/Alliance/attacks.php");
												break;
											case 4:
												include ("application/views/Alliance/news.php");
												break;
												case 5:
													include ("application/views/Alliance/option.php");
													break;
													case 6:
														include ("application/views/Alliance/bounses.php");
														break;
											case 2:
												include ("application/views/Alliance/forum.php");
												break;

											case 1:
											default:
												include ("application/views/Alliance/overview.php");
												break;
										}
										// Options
									} else {
										header("Location: " . $_SERVER['PHP_SELF']);
										exit();
									}
								} else if (isset($_GET['delinvite']) && $invite_permission == 1) {
									include ("application/views/Alliance/invite.php");
								} elseif (isset($_POST['o'])) {
									switch ($_POST['o']) {
										case 1:
											if (isset($_POST['s']) == 5 && isset($_POST['a_user'])) {
												$alliance->procAlliForm($_POST);
												//echo "Funcion para el cambio de nombre de la alianza";
												include ("application/views/Alliance/changepos.php");
											} else {
												include ("application/views/Alliance/assignpos.php");
											}
											break;
										case 2:
											if (isset($_POST['s']) == 5 && isset($_POST['a']) == 2) {
												$alliance->procAlliForm($_POST);
												include ("application/views/Alliance/kick.php");
											} else {
												include ("application/views/Alliance/kick.php");
											}
											break;
										case 3:
											if (isset($_POST['s']) == 5 && isset($_POST['a']) == 3) {
												$alliance->procAlliForm($_POST);
												//echo "Funcion para el cambio de nombre de la alianza";
												include ("application/views/Alliance/allidesc.php");
											} else {
												include ("application/views/Alliance/allidesc.php");
											}
											break;
										case 4:
											if (isset($_POST['s']) == 5 && isset($_POST['a']) == 4) {
												$alliance->procAlliForm($_POST);
												//echo "Funcion para el cambio de nombre de la alianza";
												include ("application/views/Alliance/invite.php");
											} else {
												include ("application/views/Alliance/invite.php");
											}
											break;

										case 6:
											if (isset($_POST['dipl']) and isset($_POST['a_name'])) {
												$alliance->procAlliForm($_POST);
												include ("application/views/Alliance/chgdiplo.php");
											} else {
												include ("application/views/Alliance/chgdiplo.php");
											}
											break;
										case 11:
											if (isset($_POST['s']) == 5 && isset($_POST['a']) == 11) {
												$alliance->procAlliForm($_POST);
												//echo "Funcion para el cambio de nombre de la alianza";
												include ("application/views/Alliance/quitalli.php");
											} else {
												include ("application/views/Alliance/quitalli.php");
											}
											break;
										default:
											include ("application/views/Alliance/option.php");
											break;
										case 100:
											if (isset($_POST['s']) == 5 && isset($_POST['a']) == 100) {
												$alliance->procAlliForm($_POST);
												//echo "Funcion para el cambio de nombre de la alianza";
												include ("application/views/Alliance/changename.php");
											} else {
												include ("application/views/Alliance/changename.php");
											}
											break;
										case 101:
											$id = $database->filterIntValue($database->filterVar($_POST['id']));
											$database->diplomacyCancelOffer($id);
											include ("application/views/Alliance/chgdiplo.php");
											break;
										case 102:
											$id = $database->filterIntValue($database->filterVar($_POST['id']));
											$database->diplomacyInviteDenied($id, $database->filterIntValue($database->filterVar($_POST['alli2'])));
											include ("application/views/Alliance/chgdiplo.php");
											break;
										case 103:
											$type = $database->filterIntValue($database->filterVar($_POST['type']));
											if ($database->checkDiplomacyInviteAccept($session->alliance, $type)) {
												$id = $database->filterIntValue($database->filterVar($_POST['id']));
												$database->diplomacyInviteAccept($id, $database->filterIntValue($database->filterVar($_POST['alli2'])));
											}
											include ("application/views/Alliance/chgdiplo.php");
											break;
										case 104:
											$id = $database->filterIntValue($database->filterVar($_POST['id']));
											$database->diplomacyCancelExistingRelationship($id, $database->filterIntValue($database->filterVar($_POST['alli2'])));
											include ("application/views/Alliance/chgdiplo.php");
									}
								} else {
									include ("application/views/Alliance/overview.php");
								}

								?>

								<div class="clear">&nbsp;</div>
							</div>
							<div class="clear"></div>


						</div>
					

					</div>
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


	<?php
} else{
	header('Location: dorf2.php' );
	exit;
}

?>