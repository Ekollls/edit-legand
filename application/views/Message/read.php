<?php

$input = $message->reading['message'];

include("application/BBCode.php");
?>
<style>
.message{
overflow-y: scroll;
width: 540px;
height: 300px;
}
</style>
<div class="paper" "style=height:100px;">
	<div class="layout">
		<div class="paperTop">
			<div class="paperContent">




    <div id="sender">
        <div class="header label"><?php echo mesotkogo; ?></div>
        <div class="header text">
        <?php 
       // var_dump($message->reading['owner']);die();
            $dData = $database->queryFetch("SELECT uid,username FROM deleted WHERE uid = ".$message->reading['owner']."");
            if($dData['uid']){
                echo '<span class="none">'.$dData['username'].'</span>';
            }else{
                if(!$message->reading['owner']){
                    echo "in";
                }
        ?>
        <a href="spieler.php?uid=<?php echo $database->getUserField($message->reading['owner'],"id",0); ?>"><?php echo $database->RemoveXSS($database->getUserField($message->reading['owner'],"username",0)); ?></a>
            <?php } ?>
        </div>
        <div class="clear"></div>
    </div>
    <div id="subject">
        <div class="header label"><?php echo mestena; ?></div>
        <div class="header text"><?php 
        if($message->reading['topic'] == 'wMSGT'){
            echo $lang['Msgs']['wMSGT'];
        }else{
            echo $database->RemoveXSS($message->reading['topic']);
        }
         ?></div>
    <div class="clear"></div>
</div>


    <div id="time">
        <div class="header label">Sent:</div>
        <div class="header text"><?php $date = $generator->procMtime($message->reading['time']);echo $date[0]; ?> <?php echo $date[1]; ?></div>
		
			<div class="toolList">
						<div id="deleteMessage">
							<form method="post" action="nachrichten.php">

								<input type="hidden" name="n1" value="<?php $message->reading['id'];?>" id="n1">																	<input type="hidden" name="t" value="0" id="t">								                                																	<button type="submit" name="delmsg" id="delmsg" class="icon " onclick="return (function(){
				('Do you really want to delete this message?').dialog(
				{
					onOkay: function(dialog, contentElement)
					{
						$('delmsg').up('form').submit();},onShow: function() {
					var button = $('delmsg');
					button.disabled = true;
					button.disabled = false;
				}});
				return false;
			})()"><img src="img/x.gif" class="Delete delete" alt="Delete delete"></button>									<input type="hidden" name="delmsg" value="1">
															</form>
						</div>
					</div>
					
        <div class="clear"></div>
    </div>
    <div class="separator"></div>
    <div id="message"><?php 
            if($bbcoded == 'wMSGI'){
                echo $lang['Msgs']['wMSGI'];
            }else{
                echo stripslashes(nl2br($bbcoded));
            }
    
     ?></div>
	 
    <div id="answer">
    <form method="post" action="nachrichten.php?t=1">
        <input type="hidden" name="id" value="<?php echo $message->reading['id']; ?>" />
        <input type="hidden" name="ft" value="m1" />
        <input type="hidden" name="t" value="1" />
   <button class="textButtonV1 green " id="s1" name="s1" value="Отinетить" type="submit">
            <div class="button-container addHoverClick ">
                <div class="button-background">
                    <div class="buttonStart">
                        <div class="buttonEnd">
                            <div class="buttonMiddle"></div>
                        </div>
                    </div>
                </div>
                <div class="textButtonV1 green"><?=MSG10?></div></div></button>
<div id="answer">
</form>					<form method="post" action="nachrichten.php">
<input type="hidden" name="id" value="<?php echo $message->reading['id']; ?>" />
       
							<button type="submit" value="unread" name="mark" id="mark" class="textButtonV1 green " version="textButtonV1">
	 علامت زدن به عنوان خوانده نشده</button>
<script type="text/javascript" id="mark_script">
	jQuery(function() {
        jQuery('button#mark').click(function () {
            jQuery(window).trigger('buttonClicked', [this, {"type":"submit","value":"unread","name":"mark","id":"mark","class":"textButtonV1 green ","title":"","confirm":"","onclick":"","version":"textButtonV1"}]);
        });
	});
</script>
						</form>


				</div>
 </form>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="paperBottom"></div>
	</div>
</div>