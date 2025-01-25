               


			   <?php
				
                if($uid == $session->uid) {
                    if($session->sit){
                        echo "<td colspan=\"2\"> <span class=\"a arrow disabled\">".OVERVIEW14."</span></td>";
                    }else{
                        echo "<td colspan=\"2\"> <a class=\"arrow\" href=\"spieler.php?s=1\">".OVERVIEW14."</a></td>";
                    }
                } else {
                    if($database->queryFetch('SELECT COUNT(*) AS num FROM `ignore` WHERE `uid` = '.$session->uid.' AND `uignored` = '.$uid.'')['num'] == 0){
                        echo "<td colspan=\"2\" id=\"player_message-ignore-buttons-block\"> <a class=\"message messageStatus messageStatusUnread\" href=\"nachrichten.php?t=1&id=".$_GET['uid']."\">".sendmsg."</a>";
                        echo '<br><br>';
                        echo '<a href id="ignore-player-button" data-player-ignored="false" data-uid="'.$uid.'">'.Ignored02.'.</a>';    
                        echo '</td>';
                    }else{
                        ?>
						
						
						
						
                        <td colspan="2" id="player_message-ignore-buttons-block"><span class="textButtonV2 buttonFramed notes rectangle withIcon green"><?php echo Ignored03; ?></span><br><a href="" id="ignore-player-button" data-player-ignored="true" data-uid="<?php echo $uid; ?>">Stop ignoring this player.</a></td>
                        <?php
                    }
                }
                ?>