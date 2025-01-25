<div class="card mb-2">
    <div class="card-header">Dates server</div>
    <div class="card-body">
    <?php 
        if(isset($_POST['update'])){
            if(is_numeric($_POST['OPENING']) 
            && is_numeric($_POST['ARTEFACTS']) 
            && is_numeric($_POST['WW_PLAN'])
            && is_numeric($_POST['MEDALS'])){
                foreach($_POST as $key => $value){
                    if($key!='update'){
                        $panel->sUpdate($key, $value);
                    }
                }
                header('Location: index.php?p=natars&m');
            }else{ header('Location: index.php?p=natars&d'); }
        }

        if(isset($_GET['m'])){
            echo '<div class="alert alert-success">Settings Modification was successful</div>';
        }elseif(isset($_GET['d'])){
            echo '<div class="alert alert-danger">All entries must be numbers.</div>';
        }
    ?>
        <form action="" method="post">
        <input type="hidden" name="update" value="setting">
            <div class="form-group">
                <label>date Opening server</label>
                <input class="form-control" name="OPENING" type="text" value="<?php echo OPENING; ?>">
                <?php echo date('Y/m/d h:s', OPENING); ?>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label>date spawn artefacts</label>
                    <input class="form-control" name="ARTEFACTS" type="text" value="<?php echo ARTEFACTS; ?>">
                  <?php 
                    
                                         $A=ARTEFACTS-Time();
                    
                     
                                                  $m3 =$A;
echo '<script type="text/javascript">';
    echo 'var countDownDate3 = new Date().getTime() + ' . $m3 * 1000 . ';';
    echo 'var x3 = setInterval(function() {';
    echo 'var now = new Date().getTime();';
    echo 'var distance3 = countDownDate3 - now;';
    echo 'var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));';
    echo 'var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));';
    echo 'var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));';
    echo 'var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);';
    echo 'document.getElementById("timer3").innerHTML = "<p>" + days3 + "d " + hours3 + "h " + minutes3 + "m " + seconds3 + "s" + "</p>";';
    echo 'if (distance2 < 0) {';
    echo 'clearInterval(x3);';
    echo 'document.getElementById("timer3").innerHTML = "EXPIRED";';
    echo '}';
    echo '}, 1000);';
    echo '</script>';
                  
                   ?>
                   <div id="timer3"><p>Remaining Time</p></div>
                    
                </div>
                <div class="col-md-6">
                    <label>date plan Building</label>
                    <input class="form-control" name="WW_PLAN" type="text" value="<?php echo WW_PLAN; ?>">
                  <?php
                     $W=WW_PLAN-Time();
                    
                                                                     $m2 =$W;
echo '<script type="text/javascript">';
    echo 'var countDownDate2 = new Date().getTime() + ' . $m2 * 1000 . ';';
    echo 'var x2 = setInterval(function() {';
    echo 'var now = new Date().getTime();';
    echo 'var distance2 = countDownDate2 - now;';
    echo 'var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));';
    echo 'var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));';
    echo 'var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));';
    echo 'var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);';
    echo 'document.getElementById("timer2").innerHTML = "<p>" + days2 + "d " + hours2 + "h " + minutes2 + "m " + seconds2 + "s" + "</p>";';
    echo 'if (distance2 < 0) {';
    echo 'clearInterval(x2);';
    echo 'document.getElementById("timer2").innerHTML = "EXPIRED";';
    echo '}';
    echo '}, 1000);';
    echo '</script>';
                  
                   ?>
                   <div id="timer2"><p>Remaining Time</p></div>
                    
                 
                </div>
                <div class="col-md-4">
                    <label>Set Time Medals (Seconds) </label>
                    <input class="form-control" name="MEDALS" type="text" value="<?php echo MEDALS; ?>">
                    <?php $LM = $sData['lastmedal'];
                    
                              $ME = time()-$LM; 
                              $m =MEDALS-$ME;
echo '<script type="text/javascript">';
    echo 'var countDownDate = new Date().getTime() + ' . $m * 1000 . ';';
    echo 'var x = setInterval(function() {';
    echo 'var now = new Date().getTime();';
    echo 'var distance = countDownDate - now;';
    echo 'var days = Math.floor(distance / (1000 * 60 * 60 * 24));';
    echo 'var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));';
    echo 'var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));';
    echo 'var seconds = Math.floor((distance % (1000 * 60)) / 1000);';
    echo 'document.getElementById("timer").innerHTML = "<p>" + days + "d " + hours + "h " + minutes + "m " + seconds + "s" + "</p>";';
    echo 'if (distance < 0) {';
    echo 'clearInterval(x);';
    echo 'document.getElementById("timer").innerHTML = "EXPIRED";';
    echo '}';
    echo '}, 1000);';
    echo '</script>';
                  
                   ?>
                   <div id="timer"><p>Remaining Time</p></div>
                   
                </div>
            </div>
        <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Modification</button>
        </div>
        
              </form>
    </div>
</div>





<div class="card">
    <div class="card-header">Important</div>
    <div class="card-body">
        history time server: <?php echo date('Y/m/d h:s', time()); ?><br>
        history time second: <?php echo time(); ?>
        <br>
        <br>
    The format used for dates is <b>Timestamp</b>.<br>
        To get the timing format used, you can use one of these sites.
    <br>
    <a href="https://www.unixtimestamp.com/index.php">https://www.unixtimestamp.com/index.php</a><br>
    <a href="https://www.timestampconvert.com/">https://www.timestampconvert.com/</a><br>
    </div>
</div>

  $T = time(); 
 $M=MEDALS;                        
 
 $TM = $T-$LM;
 $TMM=($M-$TM);
 $TMD = ($TMM/60/60/24);
 echo "Remaining Time: ".intval($TMD) ." day " . $TMM = date("H:i:s");