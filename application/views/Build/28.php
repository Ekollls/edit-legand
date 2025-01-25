<div>
<table cellpadding="1" cellspacing="1" id="build_value" class="transparent">
	<tbody><tr>
<div id="build" class="gid28">

			<th>Current merchant load:</th>
			<td><b><?php echo $bid28[$village->resarray['f'.$id]]['attri']; ?></b> <?=PERC?>
		</tr>
		<tr>
		<?php 
        if(!$building->isMax($village->resarray['f'.$id.'t'],$id)) {

		if($next<=20){
        ?>
			<th>Merchant load at level <?php echo $next; ?>:</th>
			<td><b><?php echo $bid28[$next]['attri']; ?></b> <?=PERC?>
            <?php
            }else{
        ?>
			<th>Merchant load at level 20:</th>
			<td><b><?php echo $bid28[20]['attri']; ?></b> <?=PERC?>
            <?php
			}}
            ?>
		</tr>
	</table>

