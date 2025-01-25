<?php
include("application/Account.php");

?>


<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE logout <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> buildingsV3">
<div id="background">
    
    <div id="bodyWrapper">
        <img style="filter:chroma();" src="<?=GP_LOCATION2; ?>x.gif" id="msfilter" alt=""/>
        <div id="header">
            <div id="mtop">
                <a id="logo" href="<?php echo HOMEPAGE; ?>" target="_blank" title="<?php echo SERVER_NAME; ?>"></a>
                <div class="clear"></div>
            </div>
        </div>
        <div id="center">
            <?php include('application/views/menu.php');?>
           
        
<div id="contentOuterContainer" class=" contentPage">
                                            <div class="contentTitle buttonCount0">
                            <a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="" target="_blank">&nbsp;</a>
                        </div>
                        <div class="contentContainer">
                            <div id="content" class="logout">
                            
<div class="bannerAdvertisingTop">


    <p>
<p><p><p><p>
                        <h1 class="titleInHeader"><?php echo LOGOUT_TITLE; ?></h1>
						<p><p><p><p><p>
                        <h4><?php echo LOGOUT_H4; ?></h4>
					<p><p><p><p><p>
                        <p><?php echo LOGOUT_DESC; ?>            </p>

                 

	<div >
		<h5><?php echo $lang['Logout']['01']; ?></h5>

		<form name="snd" method="post" action="login.php">
        <input type="hidden" name="ft" value="a4" />
			<table class="transparent reloginTable">
				<tbody><tr class="account">
					<th class="accountName">
                    <?php echo $lang['Logout']['02']; ?> :
					</th>
					<td>
						<input type="text" name="user" value="<?php echo $_SESSION['logoutU']; ?>" class="text"><br>
					</td>
				</tr>
				<tr class="pass">
					<th>
                    <?php echo $lang['Logout']['03']; ?> :                    </th>
					<td>
					
						<input type="password" maxlength="20" name="pw" value="" class="text"><br>
					</td>
				</tr>
			</tbody></table>
	 <p><p>
                    <button type="submit" value="<?php echo $lang['Logout']['04']; ?>" name="s1" id="reloginButton" class="textButtonV1 green  " onclick="document.login.w.value=screen.width+':'+screen.height;">
                        <div class="button-container addHoverClick ">
                            <div class="button-background">
                                <div class="buttonStart">
                                    <div class="buttonEnd">
                                        <div class="buttonMiddle"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-content"><?php echo $lang['Logout']['04']; ?></div>
                        </div>
                    </button>
					
                </div>
                <input type="hidden" name="w" value="">
                <input type="hidden" name="login" value="1593801796">
                        </form>
						
						<td>
            <a class="arrow" href="login.php?del_cookie" class="arrow passwordForgottenLink">
                <?php echo LOGOUT_LINK;?>?            </a>
        </td>
						
        </div>

    </div>

                    </div>
                    <div class="clear">&nbsp;</div>
                </div>
                <div class="clear"></div>

      
            </div>
        </div>
<?php include('application/views/footer.php');?>

    </div>

    <div id="ce"></div>

</body>
</html>