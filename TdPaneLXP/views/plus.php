<div class="card">
    <div class="card-header">Plus Settings</div>
    <div class="card-body">
        <?php
        $conffdata = $database->query("select * from buyfeature ");
        $confing = $conffdata[0];
       

       // var_dump($sagdata);
        if (isset($_POST['update'])) {
            if (
                is_numeric($_POST['goldClub']) &&
                is_numeric($_POST['Plus']) &&
                is_numeric($_POST['PLUS_TIME']) &&
                is_numeric($_POST['addonProduction']) &&
                is_numeric($_POST['PLUS_PRODUCTION'])
            ) {
                $datap = array('goldClub' => $_POST['goldClub'], 'Plus' => $_POST['Plus'], 'PLUS_TIME' => $_POST['PLUS_TIME'], 'addonProduction' => $_POST['addonProduction'], 'PLUS_PRODUCTION' => $_POST['PLUS_PRODUCTION']);
                foreach ($datap as $key => $value) {

                    $panel->sUpdate($key, $datap[$key]);

                }

                //  header('Location: index.php?p=plus&m');
            }
            if (
                is_array($_POST['resourcesnums']) &&
                is_array($_POST['resourcescoins']) &&
                is_array($_POST['phil']) &&
                is_array($_POST['wildsnums']) &&
                is_array($_POST['wildscoins']) &&
                is_array($_POST['cata']) &&
                is_array($_POST['troopsnums']) &&
                is_array($_POST['troopscoins']) &&
                is_array($_POST['buyprotection']) &&
                is_array($_POST['protectionscoins']) &&
                is_array($_POST['buypacks']) &&
                is_array($_POST['buypacksprice']) &&              
                is_array($_POST['plusfeatures'])
            ) {
                $plusfeatures = array();
                $buyfeatures = array();
                $buyothers = array();
                $buypacks=array();
                $i = 0;
                foreach ($_POST['resourcesnums'] as $v) {
                    if (!empty($_POST['resourcescoins'][$i])) {
                        $buyfeatures["buyres" . $i] = array("num" => $_POST['resourcesnums'][$i], "cost" => $_POST['resourcescoins'][$i]);
                    } else {
                        break;
                    }
                    $i++;

                }
                $i = 0;
                foreach ($_POST['troopsnums'] as $v) {
                    if (!empty($_POST['troopscoins'][$i])) {
                        $buyfeatures["buytro" . $i] = array("num" => $_POST['troopsnums'][$i], "cost" => $_POST['troopscoins'][$i], "cata" => $_POST['cata'][$i]);
                    } else {
                        break;
                    }
                    $i++;

                }
                $i = 0;
                foreach ($_POST['wildsnums'] as $v) {
                    if (!empty($_POST['wildscoins'][$i])) {
                        $buyfeatures["buywil" . $i] = array("num" => $_POST['wildsnums'][$i], "cost" => $_POST['wildscoins'][$i], "phil" => $_POST['phil'][$i]);
                    } else {
                        break;
                    }
                    $i++;

                }
                $i = 0;
                foreach ($_POST['buyprotection'] as $v) {
                    if (!empty($_POST['buyprotection'][$i])) {
                        $buyothers["buyprotection" . $i] = array("time" => $_POST['buyprotection'][$i], "cost" => $_POST['protectionscoins'][$i]);
                    } else {
                        break;
                    }
                    $i++;

                }
                $i = 0;
                foreach ($_POST['buypacks'] as $v) {
                    if (!empty($_POST['buypacks'][$i])) {
                        $buypacks["buypacks" . $i] = array("gold" => $_POST['buypacks'][$i], "price" => $_POST['buypacksprice'][$i]);
                    } else {
                        break;
                    }
                    $i++;

                }
               /* foreach ($_POST['buyprotection'] as $v) {
                    if (!empty($_POST['buyprotection'][$i])) {
                        $buyothers["buyprotection" . $i] = array("time" => $_POST['buyprotection'][$i], "cost" => $_POST['protectionscoins'][$i]);
                    } else {
                        break;
                    }
                    $i++;

                }*/
                $i = 0; // 0 features of Plus 1 resources 2 troops 3 wilds 4 protection
                $plusfeatures = array(); // Initialize the array
                
                foreach ($_POST['plusfeatures'] as $v) {
                    switch ($i) {
                        case 0:
                            $plusfeatures['generals'] = $v;
                            break;
                        case 1:
                           // var_dump($v);
                            $plusfeatures['buyresources'] = $v;
                            break;
                        case 2:
                            $plusfeatures['buytroops'] = $v;
                            break;
                        case 3:
                            $plusfeatures['buywilds'] = $v;
                            break;
                        case 4:
                            $plusfeatures['buyprotection'] = $v;
                            break;
                        /* case 5:
                            $plusfeatures["buyresources"] = $v == 'true' ? 1 : 0;
                            break;*/
                        default:
                            break;
                    }
                    $i++;
                }
                
               // var_dump($plusfeatures); // Correct variable name
              //  die();
                
               
                $genss = array('25pFaster' => $_POST['25pFaster'],'storageUpgrade' => $_POST['storageUpgrade'], 'allSmithy' => $_POST['allSmithy'], 'searchAll' => $_POST['searchAll']);
               // $genss = json_encode($genss);
                $datap = array('generals' => json_encode($genss), 'buyfeatures' => json_encode($buyfeatures), 'buyothers' => json_encode($buyothers), 'menus' => json_encode($plusfeatures),'buypacks'=>json_encode($buypacks));
                foreach ($datap as $key => $value) {
                    if (!empty($value)) {
                        $panel->pUpdate($key, $value);
                    }




                }
              
                header('Location: index.php?p=plus&m');
                exit;
            }
            header('Location: index.php?p=plus&d');
        }
        if (isset($_GET['m'])) {
            echo '<div class="alert alert-success">Modification has been completed </div>';
        } elseif (isset($_GET['d'])) {
            echo '<div class="alert alert-danger">All entries must be numbers.</div>';
        }
        $sagdata=array();
        foreach($confing as $k=>$v){
            $sagdata[$k]=json_decode($v,true);
        }
        //menus
        $men=array();
        $men['generals']=isset($sagdata['menus']['generals'])?$sagdata['menus']['generals']:0;
        $men['buyresources']=isset($sagdata['menus']['buyresources'])?$sagdata['menus']['buyresources']:0;
        $men['buytroops']=isset($sagdata['menus']['buytroops'])?$sagdata['menus']['buytroops']:0;
        $men['buywilds']=isset($sagdata['menus']['buywilds'])?$sagdata['menus']['buywilds']:0;
        $men['buyprotection']=isset($sagdata['menus']['buyprotection'])?$sagdata['menus']['buyprotection']:0;
      //var_dump($men);die();
        ?>
        <form action="" method="post">
            <input type="hidden" name="update" value="setting">
            <div class="form-group">
                <label>club gold</label>
                <input class="form-control" name="goldClub" value="<?php echo $config['goldClub']; ?>">
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label>Plus account price</label>
                    <input class="form-control" name="Plus" value="<?php echo $config['Plus']; ?>">
                </div>
                <div class="col-md-6">
                    <label>duration plus</label>
                    <select name="PLUS_TIME" class="form-control">
                        <option <?php if (PLUS_TIME == 43200) {
                            echo "selected";
                        } ?> value="43200">12 hour</option>
                        <option <?php if (PLUS_TIME == 86400) {
                            echo "selected";
                        } ?> value="86400">24 hour</option>
                        <option <?php if (PLUS_TIME == 172800) {
                            echo "selected";
                        } ?> value="172800">2 days</option>
                        <option <?php if (PLUS_TIME == 259200) {
                            echo "selected";
                        } ?> value="259200">3 days</option>
                        <option <?php if (PLUS_TIME == 345600) {
                            echo "selected";
                        } ?> value="345600">4 days</option>
                        <option <?php if (PLUS_TIME == 432000) {
                            echo "selected";
                        } ?> value="432000">5 days</option>
                        <option <?php if (PLUS_TIME == 518400) {
                            echo "selected";
                        } ?> value="518400">6 days</option>
                        <option <?php if (PLUS_TIME == 604800) {
                            echo "selected";
                        } ?> value="604800">7 days</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label>Plus Resources price</label>
                    <input class="form-control" name="addonProduction"
                        value="<?php echo $config['addonProduction']; ?>">
                </div>
                <div class="col-md-6">
                    <label>duration Resources</label>
                    <select name="PLUS_PRODUCTION" class="form-control">
                        <option <?php if (PLUS_PRODUCTION == 43200) {
                            echo "selected";
                        } ?> value="43200">12 hour</option>
                        <option <?php if (PLUS_PRODUCTION == 86400) {
                            echo "selected";
                        } ?> value="86400">24 hour</option>
                        <option <?php if (PLUS_PRODUCTION == 172800) {
                            echo "selected";
                        } ?> value="172800">2 days</option>
                        <option <?php if (PLUS_PRODUCTION == 259200) {
                            echo "selected";
                        } ?> value="259200">3 days</option>
                        <option <?php if (PLUS_PRODUCTION == 345600) {
                            echo "selected";
                        } ?> value="345600">4 days</option>
                        <option <?php if (PLUS_PRODUCTION == 432000) {
                            echo "selected";
                        } ?> value="432000">5 days</option>
                        <option <?php if (PLUS_PRODUCTION == 518400) {
                            echo "selected";
                        } ?> value="518400">6 days</option>
                        <option <?php if (PLUS_PRODUCTION == 604800) {
                            echo "selected";
                        } ?> value="604800">7 days</option>
                    </select>
                </div>
            </div>
            <hr>



<?php 
$config=$sagdata['generals'];
?>



            <h6>Plus Settings in a<small class="alert-danger">* Set a rate of 0 for private downtime</small></h6>
            <br>
            <div class="form-group">
                <label>Turn on / disable features of Plus</label>
                <select name="plusfeatures[]" class="form-control">
                    <option <?php if ($men['generals'] == 0) {
                        echo "selected";
                    } ?> value="0">disable</option>
                    <option <?php if ($men['generals'] == 1) {
                        echo "selected";
                    } ?> value="1">enable</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label>storage upgrade</label>
                    <input name="storageUpgrade" class="form-control" value="<?php echo $config['storageUpgrade']; ?>">
                </div>
                <div class="col-md-6">
                    <label>training 25% faster</label>
                    <input name="25pFaster" class="form-control" value="<?php echo $config['25pFaster']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label>Full smithy</label>
                    <input name="allSmithy" class="form-control" value="<?php echo $config['allSmithy']; ?>">
                </div>
                <div class="col-md-6">
                    <label>Search all units</label>
                    <input name="searchAll" class="form-control" value="<?php echo $config['searchAll']; ?>">
                </div>
            </div>
            
            <hr>
            <hr>
            <?php 
$config=$sagdata['buyfeatures'];?>
            <hr>
            <div class="form-group row">
                <div class="col-md-4">
                    <label>Turn on / disable sell resource of Plus</label>
                    <select name="plusfeatures[]" class="form-control">
                        <option <?php if ($men['buyresources'] == 0) {
                            echo "selected";
                        } ?> value="0">disable</option>
                        <option <?php if ($men['buyresources'] == 1) {
                            echo "selected";
                        } ?> value="1">enable</option>
                    </select>
                    <br><hr><?php
                    for($ees=0;$ees<3;$ees++){
                        ?>
                    <label>Resources in package <?=$ees+1?> price</label>
                    <input name="resourcescoins[]" class="form-control" value="<?php echo $config["buyres".$ees]['cost']; ?>">
                    <label>Resources in package <?=$ees+1?> quantity</label>
                    <input name="resourcesnums[]" class="form-control" value="<?php echo $config["buyres".$ees]['num']; ?>">
                     <br><hr><?php
                    }
                        ?>
                </div>
                <div class="col-md-4">
                    <label>Turn on / disable sell troops of Plus</label>
                    <select name="plusfeatures[]" class="form-control">
                        <option <?php if ($men['buytroops'] == 0) {
                            echo "selected";
                        } ?> value="0">disable</option>
                        <option <?php if ($men['buytroops'] == 1) {
                            echo "selected";
                        } ?> value="1">enable</option>
                    </select>
                    <br><hr><?php
                    for($ees=0;$ees<3;$ees++){
                        ?>
                    <label>troops in package <?=$ees+1?>  price</label>
                    <input name="troopscoins[]" class="form-control" value="<?php echo $config["buytro".$ees]['cost']; ?>">
                    <label>troops in package <?=$ees+1?>  quantity</label>
                    <input name="troopsnums[]" class="form-control" value="<?php echo $config["buytro".$ees]['num']; ?>">
                    <label>with cata</label>|<select name="cata[]">
                    <option value="0">false</option>
                        <option value="1" <?php if ($config["buytro".$ees]['cata']=='1') {
                            echo "selected";
                        }?>>true</option>
                       
                    </select>
                    <br><hr><?php
                    }
                        ?>

                </div>
                <div class="col-md-4">
                    <label>Turn on / disable sell wilds of Plus</label>
                    <select name="plusfeatures[]" class="form-control">
                        <option <?php if ($men['buywilds'] == 0) {
                            echo "selected";
                        } ?> value="0">disable</option>
                        <option <?php if ($men['buywilds'] == 1) {
                            echo "selected";
                        } ?> value="1">enable</option>
                    </select>
                    <br><hr><?php
                    for($ees=0;$ees<3;$ees++){
                        ?>
                       
                    <label>wilds in package <?=$ees+1?>  price</label>
                    <input name="wildscoins[]" class="form-control" value="<?php echo $config["buywil".$ees]['cost']; ?>">
                    <label>wilds in package <?=$ees+1?>  quantity</label>
                    <input name="wildsnums[]" class="form-control" value="<?php echo $config["buywil".$ees]['num']; ?>">
                    <label>with alphanet</label>|<select name="phil[]">
                    <option value="0">false</option>
                        <option value="1" <?php if ($config["buywil".$ees]["phil"]=='1') {
                            echo "selected";
                        }?>>true</option>
                       
                    </select>
                    <br><hr><?php
                    }
                        ?>
                </div>
            </div>

            <hr>
            <hr>
            <hr>

            <?php 
$config=$sagdata['buyothers'];?>
            <div class="form-group row">
                <div class="col-md-4">
                
                    <label>Turn on / disable sell protection of Plus</label>
                    <select name="plusfeatures[]" class="form-control">
                        <option <?php if ($men['buyprotection'] == 0) {
                            echo "selected";
                        } ?> value="0">disable</option>
                        <option <?php if ($men['buyprotection'] == 1) {
                            echo "selected";
                        } ?> value="1">enable</option>
                    </select>
                    <br><hr><?php
                    for($ees=0;$ees<3;$ees++){
                        ?>
                    <label>protection in package <?=$ees+1?>  price</label>
                    <input name="protectionscoins[]" class="form-control" value="<?php echo $config["buyprotection".$ees]['cost']; ?>">
                    <label>protection in package <?=$ees+1?>  time</label>
                    <input name="buyprotection[]" class="form-control" value="<?php echo $config["buyprotection".$ees]['time']; ?>">
                    <br><hr>
                    <?php
                    }
                    ?>
                   
               
                </div>
                <?php 
$config=$sagdata['buypacks'];?>
            <div class="col-md-7">
                
                <?php
                for($ees=0;$ees<6;$ees++){
                    ?>
                <label>price of package <?=$ees+1?>  </label>
                <input name="buypacks[]" class="form-control" value="<?php echo $config["buypacks".$ees]['gold']; ?>">
                <label>gold of package  <?=$ees+1?> </label>
                <input name="buypacksprice[]" class="form-control" value="<?php echo $config["buypacks".$ees]['price']; ?>">
                <br> <hr>
                <?php
                }
                ?>
               
           
            </div>
            </div>
           



            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Modification</button>
            </div>
        </form>
    </div>
</div>