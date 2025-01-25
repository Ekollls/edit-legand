<?php
$confdata = $database->queryFetch('SELECT endless, endless_checker, endless_rester, endless_expire, endless_lifer FROM config');

 if($_POST['endless']){
   // $panel->emptyO();
   if($_POST['endless']==1 && $confdata['endless']==0){
    if($_POST['endless_lifer']>0 && $_POST['endless_rester'] > 0){
        $panel->activeendless($_POST['endless_lifer'],$_POST['endless_rester']);
        echo '<div class="alert alert-success">EndLess mode activated.</div>';
    }else{
        echo '<div class="alert alert-warning">EndLess mode  not activated. data not satisfied.</div>';
    }
   
    
   }elseif($_POST['endless']==2 && $confdata['endless']==1){
    $panel->deactiveendless();
    echo '<div class="alert alert-success">EndLess mode deactivated.please <a href ="index.php?p=reset3" > reinstall </a> game .</div>';
   }
  
}

?>

<?php
$confdata = $database->queryFetch('SELECT endless, endless_checker, endless_rester, endless_expire, endless_lifer FROM config');
var_dump($confdata['endless_checker']);
?>

<div class="card">
    <div class="card-header"> تغییر مود بازی <font color="red"> در انتخابتان دقت کنید ممکن است منجر به از دست رفتن داده های شما شود</font><br><font color="red">همچنین این تنظیمات را بهتر است قبل از ثبت نام بازیکنان انجام دهید</font></div>
    <div class="card-body table-responsive">
        مود بازی شما برای بازی عادی تراوین تنظیم شده است
        <br>
        برای تبدیل بازی به مود بی پایان فرم زیر را تکمیل کنید
        <br>
        ***مود بی پایان:***
        <br>
        در این مود زمان تسخیر دهکده شگفتی مهم بوده و با ارتقا شگفتی به سطح های بالاتر سرعت جمع آوری امتیاز تا ۲۵ درصد افزایش می یابد.
        <br> <br> <br>
        <form action="" method="post">
            <input type="hidden" name="update" value="endless">

            <div class="row">
                <div class="form-group col-md-6">
                    <label>لطفا فعال سازی مود را تایید کنید</label>
                    <select name="endless" class="form-control">
                        <option value="1" <?php if($confdata['endless'] == 1) echo 'selected'; ?>>فعال شه</option>
                        <option value="2" <?php if($confdata['endless'] == 0) echo 'selected'; ?>>غیر فعال شه</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>زمان ریست ساختمان ها و نیرو ها و بازپس گیری دهکده های امتیازی</label>
                    <select name="endless_lifer" class="form-control">
                        <?php
                        $endlessLiferOptions = [
                            43200 => '12 hours',
                            86400 => '24 hours',
                            172800 => '2 days',
                            259200 => '3 days',
                            345600 => '4 days',
                            432000 => '5 days',
                            518400 => '6 days',
                            604800 => '7 days',
                            1209600 => '14 days (2 weeks)',
                            1814400 => '21 days (3 weeks)',
                            2419200 => '28 days (4 weeks)',
                            2592000 => '1 month',
                            5184000 => '2 months',
                            7776000 => '3 months',
                            10368000 => '4 months',
                            12960000 => '5 months',
                            15552000 => '6 months',
                            18144000 => '7 months',
                            20736000 => '8 months',
                            23328000 => '9 months',
                            25920000 => '10 months',
                            28512000 => '11 months',
                            31104000 => '12 months'
                        ];
                        foreach ($endlessLiferOptions as $value => $label) {
                            echo "<option value=\"$value\"";
                            if ($confdata['endless_lifer'] == $value) echo ' selected';
                            echo ">$label</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-md-12">
                    <label>زمان استراجت بین هر راند ریست و شروع راند چدید</label>
                    <select name="endless_rester" class="form-control">
                        <?php
                        $endlessResterOptions = [
                            0 => 'immidiatly',
                            60 => '1 minute',
                            300 => '5 minutes',
                            600 => '10 minutes',
                            900 => '15 minutes',
                            1800 => '30 minutes',
                            2700 => '45 minutes',
                            3600 => '1 hour',
                            7200 => '2 hours',
                            10800 => '3 hours',
                            21600 => '6 hours',
                            43200 => '12 hours',
                            64800 => '18 hours',
                            86400 => '24 hours (1 day)',
                            129600 => '36 hours (1.5 days)',
                            172800 => '48 hours (2 days)'
                        ];
                        foreach ($endlessResterOptions as $value => $label) {
                            echo "<option value=\"$value\"";
                            if ($confdata['endless_rester'] == $value) echo ' selected';
                            echo ">$label</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <button class="btn btn-primary">save</button>
            </div>
        </form>
    </div>
</div>

    <?php
if (!ENDLESS) {
    ?>

    <?php
} else {

    //var_dump(wwneedalli);
    $active = $database->query('SELECT * FROM users WHERE id > 5 ORDER BY endless_point DESC');
    ?>

    <style>
        .del {
            width: 12px;
            height: 12px;
            background-image: url(img/admin/icon/del.gif);
        }
    </style>


    <div class="card">
        <div class="card-header"><?php echo $lang['Admin']['players01']; ?> (<?php echo count($active); ?>)-- last check
            <?= date("d.m.y H:i:s", $confdata['endless_checker']); ?></div>
        <div class="card-body table-responsive">
            <table class="table">
                <tr>
                    <td><?php echo $lang['Admin']['players02']; ?></td>
                    <td>زمان نگه داری شگفتی</td>
                    <td><?php echo $lang['Admin']['players04']; ?></td>
                    <td><?php echo $lang['Admin']['players05']; ?></td>
                    <td><?php echo $lang['Admin']['players06']; ?></td>
                    <td>امتیاز نگه داری شگفتی (Points)</td>

                </tr>

                <?php



                if ($active) {

                    for ($i = 0; $i <= count($active) - 1; $i++) {

                        $uid = $database->getUserField($active[$i]['username'], 'id', 1);

                        $varray = $database->getProfileVillages($uid);

                        $totalpop = 0;

                        foreach ($varray as $vil) {

                            $totalpop += $vil['pop'];

                        }
                        $days = intval($active[$i]['endless_time'] / 86400);

                        $hours = intval(($active[$i]['endless_time'] - ($days * 86400)) / 3600);

                        $minutes = intval(($active[$i]['endless_time'] - (($days * 86400) + ($hours * 3600))) / 60);

                        // Construct the text output
                        $text = ($days > 0) ? $days . ' day <br>' . $hours . ' hours <br>' . $minutes . ' minutes ' : $hours . ' hours <br>' . $minutes . ' minutes ';
                        echo '
	<tr>
		<td><a href="?p=player&uid=' . $uid . '">' . $active[$i]['username'] . ' [' . $active[$i]['access'] . ']</a></td>
		<td>' . $text . '</td>
		<td>' . constant('TRIBE' . $active[$i]['tribe'] . '') . '</td>
		<td>' . $totalpop . '</td>
		<td>' . count($varray) . '</td>
		<td> ' . $active[$i]['endless_point'] . '</td>
	</tr>
';

                    }

                }



                ?>



            </table>
        </div>
    </div>
    <?php
}
?>