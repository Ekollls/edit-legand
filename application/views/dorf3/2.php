
<table id="ressources" cellpadding="1" cellspacing="1">
<thead><tr><th colspan="5"><?=dorf1?></th></tr>
<tr>
<td><?=dorf5?></td><td><i class="r1"></i></td><td><i class="r2"></i></td><td><i class="r3"></i></td><td><i class="r4"></i></td>
</tr></thead><tbody>
<?php
foreach($session->villages as $vid){
	$vdata = $database->getVillage($vid);
	$availmerchants = $totalmerchants - $database->totalMerchantUsed($vid);
	if($vdata['wood'] > $vdata['maxstore']) { $wood = $vdata['maxstore']; } else { $wood = $vdata['wood']; }
	if($vdata['clay'] > $vdata['maxstore']) { $clay = $vdata['maxstore']; } else { $clay = $vdata['clay']; }
	if($vdata['iron'] > $vdata['maxstore']) { $iron = $vdata['maxstore']; } else { $iron = $vdata['iron']; }
	if($vdata['crop'] > $vdata['maxcrop'] ) { $crop = $vdata['maxcrop'];  } else { $crop = $vdata['crop']; }
	if($vdata['capital'] == 1){$class = 'hl';}else{$class = '';}
	echo '
	<tr class="'.$class.'"> 
		<td class="vil fc" ><a href="dorf1.php?newdid='.$vid.'">'.$vdata['name'].'</a></td>
		<td class="lum" style="text-align: center;">'.number_format(round($wood)).'</td>
		<td class="clay" style="text-align: center;">'.number_format(round($clay)).'</td>
		<td class="iron" style="text-align: center;">'.number_format(round($iron)).'</td>
		<td class="crop" style="text-align: center;">'.number_format(round($crop)).'</td>
	</tr>
	';
	$woodSUM += $wood;  
	$claySUM += $clay;
	$ironSUM += $iron;
	$cropSUM += $crop;
}
?>

<tr><td colspan="6" class="empty"></td></tr>
<tr class="sum"><th><?=dorf10?>
</th><td class="lum" style="text-align: center;"><?php echo number_format(round($woodSUM));?></td>
<td class="clay" style="text-align: center;"><?php echo number_format(round($claySUM));?></td>
<td class="iron" style="text-align: center;"><?php echo number_format(round($ironSUM));?></td>
<td class="crop" style="text-align: center;"><?php echo number_format(round($cropSUM));?></td>
</tr></tbody></table>
