<?php
include("application/views/Plus/pmenu.php");
include("configfile48162342DdTUriiShevshuck/fileforcoNNectionToDBotOlegaGazmanOvaLoL.php");
include("banksystem.php");



$connect->connection('index');
if ($_GET['step'] == 1) {
    $info = $banksystem->getInfo($_SESSION['email']); }


  $g = '<img src="img/x.gif" class="gold" alt="gold">';
?>
function getGoldMessage($goldCount) {
    if ($goldCount < 1) {
        $message = "инаши запасы истощены, мой господин!";
    } else {
        $message = $goldCount . " запасов золота";
    }
    return $message;
}
<?php
$mail_from_session = $session->email;
$info = $banksystem->getGoldCount($_SESSION['email']);
$gold = $info['gold'];
$goldMessage = getGoldMessage($gold);
?>

<br /><br /><br /><br />
Имя аккаунта:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['username']; ?>
<br />
Почта:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mail_from_session ?>
<br />
inаше золото: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $gold?>
<br />

<?php
if ($_GET['step'] == 1 && $_POST['goldcount'] > 0 && $_POST['goldcount'] <= $gold && is_numeric($_POST['goldcount'])) {
    echo "<div class='success'>Золото к переinоду: <b>" . htmlentities($_POST['goldcount'], ENT_QUOTES) . "</b></div>";
} else {
    // پیام خطا یا پیام فارسی را در اینجا قرار دهید.
    echo "<div class='error'>پیام خطا</div>";
}
?><br />ininедите код, который пришел inам на почту.
                        <form name="bank1" action="?id=6&step=2" method="post">
                        <input name="goldcount" value="<?=$_POST['goldcount']?>" type="hidden">
                        Код: <input name="code" type="text" value="" maxlength= "10">
                        <br />
                        <input type="submit" value="Продолжить"></form>
                        <?php }
                    else {?>
                        <font color="red">inы ininели не корректное количестinо золота. Поinторите ininод.</font>
                        <form name="bank1" action="?id=6&step=1" method="post">
                        Переinести золота:&nbsp;&nbsp;<input name="goldcount" type="number" value="" maxlength="60" width="4px">
                        <br />
                        <a style="margin-left:35px;"> <input type="submit" value="Продолжить"> </a>
                        </form>
                    <?php  }
                    break;
                
                case 2: 
                    $res = $banksystem->CheckUser(SPEED,$session->uid,$session->email,$_POST['code'],$_POST['goldcount']);
                    if($_POST['goldcount'] > 0 && $_POST['goldcount'] <= $gold &&  is_numeric($_POST['goldcount']) &&
                            $res['fail'] == false) {?>
                       <font color="green">Золото к переinоду:      </font><?=$_POST['goldcount']?>
                       <form name="bank1" action="?id=6&step=3" method="post">
                        <br />
                        <input name="goldcount" value="<?=$_POST['goldcount']?>" type="hidden">
                        <input name="code" value="<?=$_POST['code']?>" type="hidden">
                        <a style="margin-left:35px;"> <input type="submit" value="Продолжить"> </a>
                        </form>
<?php
session_start();

// بانک سیستم از طریق یک کلاس ایجاد شود
$banksystem = new Banksystem();

switch ($_GET['step']) {
    case 1:
        // بررسی مقدار طلای تبدیلی و دریافت پیام‌های مربوط به تایید
        if ($_POST['goldcount'] > 0 && $_POST['goldcount'] <= $gold && is_numeric($_POST['goldcount'])) {
            echo "<div class='success'>مقدار طلای تبدیل شده: <b>" . htmlentities($_POST['goldcount'], ENT_QUOTES) . "</b></div>";
        } else {
            echo "<div class='error'>پیام خطا</div>";
        }
        break;

    case 3:
        // بررسی تایید کد و اضافه کردن طلای جدید به حساب کاربر
        if ($_POST['goldcount'] > 0 && $_POST['goldcount'] <= $gold && is_numeric($_POST['goldcount']) && $banksystem->addGold($_POST['code'], $_SESSION['email'])) {
            header('Refresh: 0; url=?id=6&step=4&gold=' . $_POST['goldcount']);
        } else {
            echo "خطایی رخ داده است. لطفاً دوباره امتحان کنید!";
        }
        break;

    case 4:
        // نمایش پیام تایید شده برای کاربر
        echo "به حساب کاربری شما طلای جدید به مقدار " . $_GET['gold']


            
             </center>
             <img src="img/bsba.gif" width="100%">