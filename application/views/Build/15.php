










<table cellpadding="1" cellspacing="1" id="build_value" class="transparent">

	
			<th ><b  style="left:10px; color:#f2f2f2;"><?php echo NGZ2; ?>:</th>
			
			<td><b style="left:10px; color:#f2f2f2;"><?php echo round($bid15[$village->resarray['f'.$id]]['attri']); ?></bstyle="left:10px; color:#f2f2f2;"> %</td>
		</tr>
		<tr>
		<?php 
        if(!$building->isMax($village->resarray['f'.$id.'t'],$id)) {

        ?>
			<th style="left:10px; color:#f2f2f2;"><?php echo NGZ3; ?> <?php echo $next; ?>:</th>
			<td><b><?php echo round($bid15[$next]['attri']); ?></b> %</td>
            <?php
            }
            ?>
		</tr>
	</table>
	<div>
	
<?php 
include("upgrade.php");
if($village->resarray['f'.$id] >= 10){
	include("15_1.php");
}

?>

</div>