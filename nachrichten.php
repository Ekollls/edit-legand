<?php
include_once "application/Account.php";
if(!$session->right['s5']){
    header("Location:dorf".$session->link.".php");
}

include ("application/Message.php");
if(isset($_GET['t']) && !is_numeric($_GET['t'])) die('Hacking Attempt');
if(isset($_GET['id']) && !is_numeric($_GET['id'])) die('Hacking Attempt');
$message->procMessage($_POST);
if($_GET['t'] == 1){
    $database->isWinner();
}

include("application/views/html.php");
?>

<?php include("application/views/html.php"); ?>

<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> ar-AE messages perspectiveBuildings <?php echo DIRECTION; ?> buildingsV3 ">
<script type="text/javascript">
    window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
</script>
<div id="background">
    <div id="headerBar"></div>
    <div id="bodyWrapper">

        <div id="header">
            <div id="mtop">
                <?php
                include("application/views/topheader.php");
                ?>
            </div>
        </div>
        <div id="center">
            <?php include("application/views/sideinfo.php"); ?>


                    <?php
                    include("application/views/Message/menu.php");
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
if(isset($_GET['id']) && !isset($_GET['t'])) {
	$message->loadMessage($_GET['id']);
	include("application/views/Message/read.php");
}
else if(isset($_GET['t'])) {
	switch($_GET['t']) {
		case 1:
		if(isset($_GET['id'])) {
		$id = $database->filterIntValue($database->filterVar($_GET['id']));
		}
		include("application/views/Message/write.php");
		break;
		case 2:
            include("application/views/Message/sent.php");
            break;
            case 3:
               $message->loadNotes();
               //var_dump($message->note);die();

                include("application/views/Message/notes.php");
                break;
                case 4:
                 
                    include("application/views/Message/archive.php");
                    break;
        
		case 5:
		include("application/views/Message/ignoreList.php");
		break;
    
		default:
		include("application/views/Message/inbox.php");
		break;
	}
}
else {
	include("application/views/Message/inbox.php");
}
			?>

                        <div id="map_details">


    <div class="clear"></div>
</div>
<div class="clear"></div>
</div>
		</div>
		</div>
		
<?php
include("application/views/rightsideinfor.php");
?>
<div class="clear"></div>
<?php
 include("application/views/header.php");
     
        include("application/views/footer.php");
?>
<div id="ce"></div>
</body>
</html>
