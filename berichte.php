<?php

include_once "application/Account.php";

if(isset($_GET['id']) && !is_numeric($_GET['id'])) die('Hacking Attemp');
if(isset($_GET['vill']) && !is_numeric($_GET['vill'])) die('Hacking Attemp');
if(isset($_GET['t']) && !is_numeric($_GET['t'])) die('Hacking Attemp');
if(isset($_GET['s']) && !is_numeric($_GET['s'])) die('Hacking Attemp');
if(isset($_GET['id'])){$id=$_GET['id']=$database->filterIntValue($database->filterVar($_GET['id']));}

if(isset($_POST["del_x"])  && $session->right['s6']) {

    for($i = 1; $i <= 10; $i++) {
        if(isset($_POST['n' . $i]) && is_numeric($_POST['n'.$i])) {
            $database->removeNotice($_POST['n' . $i]);
        }
    }
}
if(isset($_POST["delNAll"])  && $session->right['s6']) {
  //  var_dump($session->uid);die();
      $database->removeAllNotice($session->uid);
       
}
if(isset($_POST['realAll'])){
    for($i = 1; $i <= 10; $i++) {
        if(isset($_POST['n' . $i]) && is_numeric($_POST['n'.$i])) {
            $database->readNotice($_POST['n' . $i]);
        }
    }

    header("Location: berichte.php".($_POST['page'] ? '?s='.$_POST['page'].'' : '')."");
}

if(isset($_GET['t']) && ($_GET['t']>4 || $_GET['t']<1)){ unset($_GET['t']); }

// op op op
?>


<?php include("application/views/html.php");?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE reports <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> season- buildingsV3">
<script type="text/javascript">
    window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
</script>
<div id="background">
    <div id="headerBar"></div>
    <div id="bodyWrapper">

        <div id="header">

            <?php
            include("application/views/topheader.php");
            $linkooon="";
            $y=0;
            foreach($_GET as $t=>$x){
               // die($t);
                if($t != "tiid" && $t != "s" ){
                    if($y==0){
                         $linkooon=$linkooon."?";
                    }
                $linkooon=$linkooon.$t."=".$x."&";
            }else{
                $y++;
            }
            
            }
            // die(var_dump($linkooon));
           $linkooon =substr($linkooon, 0, -1);
          if(!empty($linkooon)) {
            $linkooon=$linkooon."&";
          }
          else {$linkooon="?";}
         

            ?>

        </div>
        <div id="center">

            <?php include("application/views/sideinfo.php"); ?>

  


		 
		 
		 <div id="contentOuterContainer" class=" contentPage">
                                            <div class="contentTitle buttonCount2">
                            	<a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="dorf1.php">
        <svg viewBox="0 0 20 20"><g class="outline">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g><g class="icon">
  <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
</g></svg>
    </a>
<a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://support.travian.com/support/solutions/articles/7000066609-reports" target="_blank">&nbsp;</a>
                        </div>
                        <div class="contentContainer">
                            <div id="content" class="reports reportsOverview">
      
  
      
		                                 

		 <div>

                        <script type="text/javascript">
                            window.addEvent('domready', function()
                            {
                                $$('.subNavi').each(function(element)
                                {
                                    new Travian.Game.Menu(element);
                                });
                            });
                        </script>

                        <h1 class="titleInHeader"><?=XUYXUYXUY?></h1>

                        <div class="contentNavi subNavi">

						<div class="contentNavi  tabFavorWrapper">

        <button type="button" class="scrollFrom" disabled="disabled"></button>
        <div class="scrollingContainer">

<div class="content favor favorKeyplayer <?php if (!isset($_GET['t'])) { echo "active"; }else{ echo "normal"; } ?>">
											
          <a id="buttonW1" title="" class="tabItem normal" href="berichte.php" data-active-tab="1"><?=ot4m0?></a>
                </div>

				
      <div class="content favor favorKeyalliance <?php if (isset($_GET['t']) && $_GET['t'] == 3) { echo "active"; }else{ echo "normal"; } ?>">
                    <a id="buttonF2" title="" class="tabItem  normal" href="berichte.php?t=3" data-active-tab="4">
                     <?=ot4m1?>             </a>
                </div>
    <div class="content favor favorKeyvillage <?php if (isset($_GET['t']) && $_GET['t'] == 1) { echo "active"; }else{ echo "normal"; } ?>">
                    <a id="buttonF3" title="" class="tabItem  normal" href="berichte.php?t=1" data-active-tab="8">
                     <?=ot4m2?>              </a>
                </div>
				
   <div class="content favor favorKeyhero <?php if (isset($_GET['t']) && $_GET['t'] == 4) { echo "active"; }else{ echo "normal"; } ?>">
                    <a id="buttonM4" title="" class="tabItem  normal" href="berichte.php?t=4" data-active-tab="0">
                <?=ot4m3?>            </a>
                </div>
     <div class="content favor favorKeygeneral <?php if (isset($_GET['t']) && $_GET['t'] == 2) { echo "active"; }else{ echo "normal"; } ?>">
                    <a id="buttonm5" title="" class="tabItem  normal" href="berichte.php?t=2"data-active-tab="99">
              <?=ot4m4?>            </a>
                </div>
                  <div class="content favor favorKeybonus <?php if (isset($_GET['t']) && $_GET['t'] == 5) { echo "active"; }else{ echo "normal"; } ?>">
      <a id="buttonv6" title="" class="tabItem  normal" href="berichte.php?t=5" data-active-tab="test">
      اطراف             </a>
                </div>
   <!----
    <div class="content favor favorKeyfarms">
                    <a id="buttonf7" title="" class="tabItem  normal" href="#" data-active-tab="test2">
                     تستشسیشسی                  </a>
                </div>
    <div class="content favor favorKeywonderoftheworld">
                    <a id="buttonl8" title="" class="tabItem  normal" href="#" data-active-tab="test3">
                  sss               </a>
                </div>
                  ---->
                                            </div>
                                           
        <button type="button" class="scrollTo" disabled="disabled"></button>
    </div>
   
						
                         
                      
    </div>

        <div class="navigationSpacer"></div>

 <script type="text/javascript">
        jQuery(function() {
            Travian.Game.TabScrollNavigation();
        });
    </script>
<script>
	function messagesFormSelectAll(checkbox) {
		jQuery('#messagesForm').find('input[type=checkbox]').each(function (index, element) {
			element.checked = checkbox.checked;
		}, checkbox);
	}
</script>
					
						
<script>
	function messagesFormSelectAll(checkbox) {
		jQuery('#messagesForm').find('input[type=checkbox]').each(function (index, element) {
			element.checked = checkbox.checked;
		}, checkbox);
	}
</script>



				
				
				
				
				

				
				
				
				
				
				
				
				
			
				

                    <div class="clear"></div>
                </div>
				
				
				
				
				
                <?php
               // var_dump($linkooon);die();
            if(!isset($id)) {
                if(!isset($_GET['t'])||(isset($_GET['t'])&&$_GET['t']==0)){
                    
                    ?>
                    <div class="contentNavi tabNavi">
    <div class="container <?php if($_GET['tiid']==1 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=1"><span class="tabItem"> بدون تلفات</span></a>
        </div>
    </div>
    <div class="container <?php if($_GET['tiid']== 2 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=2"><span class="tabItem"> با تلفات</span></a></div>
    </div>
    <div class="container <?php if($_GET['tiid']==3 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=3"><span class="tabItem">دفاع ها</span></a></div>
    </div>
    <div class="container <?php if($_GET['tiid']==4 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=4"><span class="tabItem">حملات </span></a></div>
    </div>
     <div class="container <?php if($_GET['tiid']==5 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=5"><span class="tabItem">دیگر گزارشات </span></a></div>
    </div>
    <div class="clear"></div>
    
</div>
<?php
                }elseif(isset($_GET['t'])&&$_GET['t']==3){
                    ?>
                   <div class="contentNavi tabNavi">
    <div class="container <?php if($_GET['tiid']==1 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=1"><span class="tabItem"><img src="<?= GP_LOCATION2 ?>x.gif" class="iReport iReport1"></span></a>
        </div>
    </div>
    <div class="container <?php if($_GET['tiid']== 2 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=2"><span class="tabItem"><img src="<?= GP_LOCATION2 ?>x.gif" class="iReport iReport2"></span></a></div>
    </div>
    <div class="container <?php if($_GET['tiid']==3 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=3"><span class="tabItem"><img src="<?= GP_LOCATION2 ?>x.gif" class="iReport iReport3"></span></a></div>
    </div>
    
    <div class="clear"></div>
    
</div>
                  <?php
                    }elseif(isset($_GET['t'])&&$_GET['t']==1){
?>
 <div class="contentNavi tabNavi">
    <div class="container <?php if($_GET['tiid']==1 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=1"><span class="tabItem"><img src="<?= GP_LOCATION2 ?>x.gif" class="iReport iReport4"></span></a>
        </div>
    </div>
    <div class="container <?php if($_GET['tiid']== 2 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=2"><span class="tabItem"> <img src="<?= GP_LOCATION2 ?>x.gif" class="iReport iReport5"></span></a></div>
    </div>
    <div class="container <?php if($_GET['tiid']==3 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=3"><span class="tabItem"><img src="<?= GP_LOCATION2 ?>x.gif" class="iReport iReport6"></span></a></div>
    </div>
    <div class="container <?php if($_GET['tiid']==4 ) echo "active"; else echo "normal";?> ">
        <div class="background-start">&nbsp;</div>
        <div class="background-end">&nbsp;</div>
        <div class="content"><a href="berichte.php<?php echo $linkooon;?>tiid=4"><span class="tabItem"><img src="<?= GP_LOCATION2 ?>x.gif" class="iReport iReport7"> </span></a></div>
    </div>
     
    <div class="clear"></div>
    
</div>
<?php

                    }
                    

                    }
                    ?>
                <script type="text/javascript">
                    window.addEvent('domready', function()
                    {
                        $$('.subNavi').each(function(element)
                        {
                            new Travian.Game.Menu(element);
                        });
                    });
                </script>
				
				
				
				
<?php

 if(isset($id)) {
 $all=$database->getNotice5($id);

		$ally = $all['ally'];
		if($all['uid'] == $session->uid or ($session->alliance==$ally and $ally!=0 and $session->alliance!=0) or $session->access==9){
            $dataarray = explode(",",$all['data']);
            if(!$all['viewed'] && $session->uid==$all['uid'] && !$_SESSION['adminLogin']){
                $database->noticeViewed($all['id']);}
		$type = $all['ntype'];
            //    echo $type;
		switch($type){
case 2: $type=1; break;
case 4: $type=1; break;
case 5: $type=1; break;
case 6: $type =1; break;
case 7: $type =1; break;
case 11: $type =10; break;
case 12: $type =10; break;
case 13: $type =10; break;
case 14: $type =10; break;
case 16: $type =18; break;
case 17: $type =3; break;
case 18: $type =18; break;
case 19: $type =18; break;
case 20: $type =30; break;
case 21: $type =9; break;
case 25:$type =15; break;
case 26:$type =15;break;
case 27:$type =15;break;


}

		include("application/views/Notice/".$type.".php");

		}
	} else {
		include("application/views/Notice/all.php");
	}
?>

                        <div class="clear">&nbsp;</div>
                    </div>
                    <div class="clear"></div>
                </div>
</div>
            <?php
            include("application/views/rightsideinfor.php");

            ?>
            <div class="clear"></div>
        </div>
        <?php
         include("application/views/header.php");
     
        include("application/views/footer.php");
        ?>
        <div id="ce"></div>
    </div>
</body>
</html>