<?php
$start = microtime(true);
include_once "application/Account.php";
$_SESSION['dorf']=$session->link=1;
//echo  $_SESSION['CAPTCHATIME'];die();
if(isset($_GET['visit'])){
    //$database->UpdateAchievU($session->uid,"`a7`=1"); //ачиinка за группу
    header("Location:dorf1.php");
    exit;
}
$building->procBuild($_GET);

?>


<?php

 include("application/views/html.php");
 /*if($session->uid==18){
    $wwe1 = '22996';
    $num = $database->getnummove($wwe1);
    echo $num ;
    die();
 }*/
 
 ?>



<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE  village1  perspectiveResources <?php echo DIRECTION; ?> season- buildingsV3">
<script type="text/javascript">
    window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
</script>
<div id="background">
    <div id="headerBar"></div>
    <div id="bodyWrapper">

        <div id="header">
            <?php
            include("application/views/topheader.php");
            
            ?>
        </div>
        <div id="center">

            <?php
            include("application/views/sideinfo.php");
            
            ?>



                
     

            <div id="contentOuterContainer" class="size1">
        
                <div class="contentTitle">
                    &nbsp;
                    <a id="answersButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://forumtravian.ir/" target="_blank">&nbsp;</a>
                </div>
                <div class="contentContainer">
                    <div id="content" class="village1">













				
					
					
					
<?php

             include("application/views/field.php");
if(!isset($timer)){
                        $timer = 1;
}

                        if ($building->NewBuilding) {
                            include("application/views/Building.php");
                        }
                        
                        ?>
						
						
                        <div id="map_details">
                            <div class="movements">
                                <?php
                                include("application/views/movement.php");
                                
                                ?></div>
                                <div>
                            <?php
                            include("application/views/production.php");
                             echo '</div>';
                            include("application/views/troops.php");
                           
                            echo '<div class="clear"></div>';
                            echo '</div>';
                            ?>
   </div>   </div>   </div>
                       
                </div>
				
                <?php
                
                include("application/views/rightsideinfor.php");
                //var_dump($session->lang);die();
                //var_dump($session->lang);die();
                ?>
                <div class="clear"></div>
                </div>
            <?php
             include("application/views/header.php");
             include("application/views/footer.php");
        
            ?>
            </div>
            <div id="ce"></div>
        </div>
       </body>
       <?php
       
        ?>
		
<center>

      
      <script type = "text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
      </script>
      
   
   <body onload = "JavaScript:AutoRefresh(595000);">
 
   </body>


</html>
