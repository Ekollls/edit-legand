
<?php
//die();
?>
		<div class="sidebarBoxInnerBox">
			<div class="innerBox header ">
			<div class="buttonsWrapper">
				<button type="buttonu13" id="button661bd494e11d5"	class="layoutButton buttonFramed withIcon round  workshop   <?php if($session->plus){echo 'White';}else{ echo 'Black';}?> <?=$green?> <?php echo $workshop; ?>" onclick="return false;" title="<?php
		if(!$session->plus){
			echo "". DIRECT_LINK ." || ". NO_PLUS_ESI ." ";
			if($workshop==""){ echo "<br /><span class=&quot;warning&quot;>".dorf1_activateplus." "; echo "</span>";	} else{ echo "<br /><span class=&quot;warning&quot;>". dorf1_villageNameBox_7 .". ". dorf1_villageNameBox_8 ."."; echo "</span>";	}
		}else{
		if($workshop=="" && $session->plus){ echo dorf1_villageNameBox_14." || ";
			$min = (($session->tribe - 1) * 10 ) + 7;
			$max = (($session->tribe - 1) * 10 ) + 9;
			$training = $database->query("SELECT * FROM training WHERE `unit` < '".$max."' AND `unit` >= '".$min."' AND `vref` = '".$village->wid."'");
            $tra=0;
            foreach($training as $t){ $tra++; }
            if($tra!=0){ echo dorf1_villageNameBox_11." : ".$tra; }else{ echo dorf1_villageNameBox_11n; }
			} else{ echo "". dorf1_villageNameBox_7 .".<br /><span class=&quot;warning&quot;> ". dorf1_villageNameBox_8 ."."; echo "</span>";	}}
		?>">
							<svg viewBox="0 0 20 18.8" class="workshop"><g class="outline">
  <path d="M19.73 6l-.45-.22-2.77-.8.49-.43a1.45 1.45 0 0 0 0-2 1.3 1.3 0 0 0-1.9.06l-.48.6-.48-3-3.93.15.12 4.05L13 5l-1.75 2a14.68 14.68 0 0 0-4.32-1.53 3.58 3.58 0 0 0 .17-4.06C6.26.19 4.87-.42 2.71.33A12.12 12.12 0 0 1 4 1a3.11 3.11 0 0 1 1.12 1.29 3.82 3.82 0 0 1-.39 3A16.83 16.83 0 0 1 3 4.64 3.15 3.15 0 0 1 1.56 3.3a5.86 5.86 0 0 1-.69-2 4.42 4.42 0 0 0-.38 4.62 3.56 3.56 0 0 0 3.84 1.32 12 12 0 0 0 .46 6.93l-1.31 1.49a1.29 1.29 0 0 0 .12 1.81l.12.11a1.28 1.28 0 0 0 1.81-.12l.84-.95A12.12 12.12 0 0 0 9 18.8l1.66-1.13A16.33 16.33 0 0 1 8 14.62l1.3-1.45 2.32-2.6a9.7 9.7 0 0 1 .83 1 16.44 16.44 0 0 1 1.87 3.57L16 14.05a12.44 12.44 0 0 0-2-4.72 7.09 7.09 0 0 0-.59-.74l1.75-2 .8 2.87.24.46c.56.55 1.82.11 2.8-1s1.29-2.4.73-2.92zM7.82 10.72l-.6.67-.45.51a13.24 13.24 0 0 1-.53-4.66 13.15 13.15 0 0 1 3.29 1.58z"></path>
</g><g class="icon">
  <path d="M19.73 6l-.45-.22-2.77-.8.49-.43a1.45 1.45 0 0 0 0-2 1.3 1.3 0 0 0-1.9.06l-.48.6-.48-3-3.93.15.12 4.05L13 5l-1.75 2a14.68 14.68 0 0 0-4.32-1.53 3.58 3.58 0 0 0 .17-4.06C6.26.19 4.87-.42 2.71.33A12.12 12.12 0 0 1 4 1a3.11 3.11 0 0 1 1.12 1.29 3.82 3.82 0 0 1-.39 3A16.83 16.83 0 0 1 3 4.64 3.15 3.15 0 0 1 1.56 3.3a5.86 5.86 0 0 1-.69-2 4.42 4.42 0 0 0-.38 4.62 3.56 3.56 0 0 0 3.84 1.32 12 12 0 0 0 .46 6.93l-1.31 1.49a1.29 1.29 0 0 0 .12 1.81l.12.11a1.28 1.28 0 0 0 1.81-.12l.84-.95A12.12 12.12 0 0 0 9 18.8l1.66-1.13A16.33 16.33 0 0 1 8 14.62l1.3-1.45 2.32-2.6a9.7 9.7 0 0 1 .83 1 16.44 16.44 0 0 1 1.87 3.57L16 14.05a12.44 12.44 0 0 0-2-4.72 7.09 7.09 0 0 0-.59-.74l1.75-2 .8 2.87.24.46c.56.55 1.82.11 2.8-1s1.29-2.4.73-2.92zM7.82 10.72l-.6.67-.45.51a13.24 13.24 0 0 1-.53-4.66 13.15 13.15 0 0 1 3.29 1.58z"></path>
</g></svg>
		</a>
		<div class="button-container addHoverClick">
						

			<i></i>
		</div>
		
		</button>
		<?php if($workshop=="" || !$session->plus){ ?>
	<script type="text/javascript">
		if($('button661bd494e11d5'))
		{
			$('button661bd494e11d5').addEvent('click', function ()
			{
				window.fireEvent('buttonClicked', [this, {"type":"<?=$green?>","onclick":"return false;","loadTitle":<?php if($workshop=="" && $session->plus){ echo "true"; } else{ echo "false"; } ?>,"boxId":"activeVillage","disabled":<?php if($workshop=="" && $session->plus){ echo "false"; } else{ echo "true"; } ?>,"speechBubble":"","class":"","id":"button5229e5254ffa5","redirectUrl":"<?php if($workshop=="" && $session->plus){ echo "build.php?id=" . $wid; } else{ echo ""; } ?>","redirectUrlExternal":""<?php if($workshop=="" && $session->plus){ echo ""; } else{ echo ",\"plusDialog\":{\"featureKey\":\"directLinks\",\"infoIcon\":\"http:/\/\t4.answers.travian.com.sa\/index.php?aid=\u062a\u0639\u0644\u0651\u0645 \u0627\u0644\u0645\u0632\u064a\u062f#go2answer\"}"; } ?>}]);
			});
		}
	</script>
	
	
	
	
	
	
	
	
	
	<?php } ?>
	<button type="button" id="button5229e5254fc5c"	class="layoutButton buttonFramed withIcon round stable  <?php if($session->plus){echo 'White';}else{ echo 'Black';}?> <?=$green?> <?php echo $stable; ?> " onclick="return false;" title="<?php
		if(!$session->plus){
			echo "". DIRECT_LINK ."||". NO_PLUS_ESI ."";
			if($stable==""){ echo "<br /><span class=&quot;warning&quot;> ".dorf1_activateplus.""; echo "</span>";	} else{ echo "<br /><span class=&quot;warning&quot;>". dorf1_villageNameBox_5 .". ". dorf1_villageNameBox_6 ."."; echo "</span>";	}
		}else{
		if($stable=="" && $session->plus){ echo dorf1_villageNameBox_12." || ";
			$extra = $session->tribe == 3 ? 2 : 3;
			$min = (($session->tribe - 1) * 10 ) + 1 + $extra;
            $max = (($session->tribe - 1) * 10 ) + 7;
            
            // iRedux - Fixed
			$training = $database->query("SELECT * FROM training WHERE `unit` < '".$max."' AND `unit` >= '".$min."' AND `vref` = '".$village->wid."' ");
            $tra=0;
            foreach($training as $t){ $tra++; }
            if($tra!=0){ echo dorf1_villageNameBox_11." : ".$tra; }else{ echo dorf1_villageNameBox_11n; }
			} else{ echo "". dorf1_villageNameBox_5 .".<br /><span class=&quot;warning&quot;> ". dorf1_villageNameBox_6 ."."; echo "</span>";	}}
		?>">
					<svg viewBox="0 0 19.07 20" class="stable"><g class="outline">
  <path d="M0 13.31a.79.79 0 0 0 .38.69 2.06 2.06 0 0 0 2 1.66h.33a2 2 0 0 0 1.67-1.68A8.12 8.12 0 0 0 6.76 13c.88-.51 1.87-1.23 2-2 .48-1.78-1.69-2.77-1.59-2.89 2.19.76 2.29 2 2.09 4.17 0 .35-2.42 6.68-2.57 7.11 1.37.81 2.36.71 5.15.31 1.55-.58 3.58-2.36 4.82-3a24.9 24.9 0 0 0 1.15-2.92 10.38 10.38 0 0 0-.24-3.46v-.05a7.48 7.48 0 0 1 1.52.77c0-.05-1.72-2.45-2.08-3a11.18 11.18 0 0 0-.79-.95 8.33 8.33 0 0 0-2.33-1.51 16 16 0 0 1 1.64-.05c-.92-.51-1.08-.88-5.64-2.45a12.52 12.52 0 0 1-1.61-.53A5 5 0 0 0 6.63.29 1.82 1.82 0 0 0 5.6 0a17.54 17.54 0 0 1 .17 1.75c.05.8.08 1.53.08 1.53l-.15.16-.49-.28-1.63-.94a5.07 5.07 0 0 0 .78 2.55c-.34.28-.62.7-.87.65s-.93.72-.93.72c-.25.51.14 1.23.06 1.9A7.47 7.47 0 0 0 2 9.27a5.85 5.85 0 0 0-.39 1.44l-1 1.82a.8.8 0 0 0-.61.78zm7.47-9.49c.49.05 5.82 1.87 7.72 5.31a9 9 0 0 1 .81 6.92s-.66-4.38-1.8-6.22c-1.29-2.07-1.22-2-4.42-4.19-1.18-.82-2.21-1.8-2.31-1.82zM3.55 8c0-.48.23-1.37.71-1.37h.48c.33 0 .61.1.61.42a1.16 1.16 0 0 1-.54.85.93.93 0 0 1-.55.2c-.48-.04-.71.35-.71-.1z"></path>
</g><g class="icon">
  <path d="M0 13.31a.79.79 0 0 0 .38.69 2.06 2.06 0 0 0 2 1.66h.33a2 2 0 0 0 1.67-1.68A8.12 8.12 0 0 0 6.76 13c.88-.51 1.87-1.23 2-2 .48-1.78-1.69-2.77-1.59-2.89 2.19.76 2.29 2 2.09 4.17 0 .35-2.42 6.68-2.57 7.11 1.37.81 2.36.71 5.15.31 1.55-.58 3.58-2.36 4.82-3a24.9 24.9 0 0 0 1.15-2.92 10.38 10.38 0 0 0-.24-3.46v-.05a7.48 7.48 0 0 1 1.52.77c0-.05-1.72-2.45-2.08-3a11.18 11.18 0 0 0-.79-.95 8.33 8.33 0 0 0-2.33-1.51 16 16 0 0 1 1.64-.05c-.92-.51-1.08-.88-5.64-2.45a12.52 12.52 0 0 1-1.61-.53A5 5 0 0 0 6.63.29 1.82 1.82 0 0 0 5.6 0a17.54 17.54 0 0 1 .17 1.75c.05.8.08 1.53.08 1.53l-.15.16-.49-.28-1.63-.94a5.07 5.07 0 0 0 .78 2.55c-.34.28-.62.7-.87.65s-.93.72-.93.72c-.25.51.14 1.23.06 1.9A7.47 7.47 0 0 0 2 9.27a5.85 5.85 0 0 0-.39 1.44l-1 1.82a.8.8 0 0 0-.61.78zm7.47-9.49c.49.05 5.82 1.87 7.72 5.31a9 9 0 0 1 .81 6.92s-.66-4.38-1.8-6.22c-1.29-2.07-1.22-2-4.42-4.19-1.18-.82-2.21-1.8-2.31-1.82zM3.55 8c0-.48.23-1.37.71-1.37h.48c.33 0 .61.1.61.42a1.16 1.16 0 0 1-.54.85.93.93 0 0 1-.55.2c-.48-.04-.71.35-.71-.1z"></path>
</g></svg>
		</a>
		<div class="button-container addHoverClick">

			<i></i>
		</div>
		</button>

	<?php if($stable=="" || !$session->plus){ ?>
	<script type="text/javascript">
		if($('button5229e5254fc5c'))
		{
			$('button5229e5254fc5c').addEvent('click', function ()
			{
				window.fireEvent('buttonClicked', [this, {"type":"<?=$green?>","onclick":"return false;","loadTitle":<?php if($stable=="" && $session->plus){ echo "true"; } else{ echo "false"; } ?>,"boxId":"activeVillage","disabled":<?php if($stable=="" && $session->plus){ echo "false"; } else{ echo "true"; } ?>,"speechBubble":"","class":"","id":"button5229e5254ffa5","redirectUrl":"<?php if($stable=="" && $session->plus){ echo "build.php?id=" . $sid; } else{ echo ""; } ?>","redirectUrlExternal":""<?php if($stable=="" && $session->plus){ echo ""; } else{ echo ",\"plusDialog\":{\"featureKey\":\"directLinks\",\"infoIcon\":\"http:/\/\t4.answers.travian.com.sa\/index.php?aid=\u062a\u0639\u0644\u0651\u0645 \u0627\u0644\u0645\u0632\u064a\u062f#go2answer\"}"; } ?>}]);
			});
		}
	</script>















	<?php } ?>
	<button type="button" id="button5229e5254fe6f"	class="layoutButton buttonFramed withIcon round barracks gold<?php if($session->plus){echo 'White';}else{ echo 'Black';}?> <?=$green?> <?php echo $baracks; ?> " onclick="return false;" title="
	<?php
		if(!$session->plus){
			echo "". DIRECT_LINK ."||". NO_PLUS_ESI ."";
			if($baracks==""){ 
                echo "<br /><span class=&quot;warning&quot;>".dorf1_activateplus.""; echo "</span>";	
            } else{
                 echo "<br /><span class=&quot;warning&quot;>". dorf1_villageNameBox_3 .". ". dorf1_villageNameBox_4 ."."; echo "</span>";	
            }
		}else{
            
		if($baracks=="" && $session->plus){ echo dorf1_villageNameBox_10." || ";
			$min = (($session->tribe - 1) * 10 ) + 1;
			$max = $session->tribe == 3 ? 2 : 3;
            $max += $min;
            
            // iRedux - Fixed
			$training = $database->query("SELECT * FROM training WHERE `unit` < '".$max."' AND `unit` >= '".$min."' AND `vref` = '".$village->wid."' ");
            $tra=0;
            foreach($training as $t){ $tra++; }
            if($tra!=0){ echo dorf1_villageNameBox_11." : ".$tra; }else{ echo dorf1_villageNameBox_11n; }
		} else{ echo "". dorf1_villageNameBox_3 .".<br /><span class=&quot;warning&quot;> ". dorf1_villageNameBox_4 ."."; echo "</span>";	}}
		?>">
		<div class="button-container addHoverClick">
							<svg viewBox="0 0 18.46 20" class="barracks"><g class="outline">
  <path d="M4.32 13.44l.88.56 3-2.51-1.88-1.42a7.16 7.16 0 0 0-2.81 1.25c-.21.48-1 2.74-1 2.74l-1.34.64 1.13-4.07.16-.63a5.27 5.27 0 0 1 10 3.29c-.17 1.14-.15 3 1.39 3.91l.39.32a3.79 3.79 0 0 1-2.05.71c-.82-.14-1.62-2.3-1.62-2.33a1.49 1.49 0 1 0-2.66 1 1.45 1.45 0 0 0 1.13.58A13.32 13.32 0 0 1 1.49 20zM0 1.14l3.93 4.51c1-.14 3.5-1 4.56-.76 4.63 1.2 6.51 5.46 5.41 10.51 1.37 1.17 0 0 3.12 3.15a24.7 24.7 0 0 0 1-3.15 13.83 13.83 0 0 0 .44-3.28L15.66 11l2.73-.34a12.59 12.59 0 0 0-1.8-5.36l-3.67 1.44 2.82-2.69A10.8 10.8 0 0 0 11.5.83l-2 3.43.75-3.86-.2-.06A10.61 10.61 0 0 0 6.14.07l.41 3.09L5.09.25A18.06 18.06 0 0 0 0 1.14z"></path>
</g><g class="icon">
  <path d="M4.32 13.44l.88.56 3-2.51-1.88-1.42a7.16 7.16 0 0 0-2.81 1.25c-.21.48-1 2.74-1 2.74l-1.34.64 1.13-4.07.16-.63a5.27 5.27 0 0 1 10 3.29c-.17 1.14-.15 3 1.39 3.91l.39.32a3.79 3.79 0 0 1-2.05.71c-.82-.14-1.62-2.3-1.62-2.33a1.49 1.49 0 1 0-2.66 1 1.45 1.45 0 0 0 1.13.58A13.32 13.32 0 0 1 1.49 20zM0 1.14l3.93 4.51c1-.14 3.5-1 4.56-.76 4.63 1.2 6.51 5.46 5.41 10.51 1.37 1.17 0 0 3.12 3.15a24.7 24.7 0 0 0 1-3.15 13.83 13.83 0 0 0 .44-3.28L15.66 11l2.73-.34a12.59 12.59 0 0 0-1.8-5.36l-3.67 1.44 2.82-2.69A10.8 10.8 0 0 0 11.5.83l-2 3.43.75-3.86-.2-.06A10.61 10.61 0 0 0 6.14.07l.41 3.09L5.09.25A18.06 18.06 0 0 0 0 1.14z"></path>
</g></svg>
		</a>
			<i></i>
		</div>
		</button>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<?php if($baracks=="" || !$session->plus){ ?>
	<script type="text/javascript">
		if($('button5229e5254fe6f'))
		{
			$('button5229e5254fe6f').addEvent('click', function ()
			{
				window.fireEvent('buttonClicked', [this, {"type":"<?=$green?>","onclick":"return false;","loadTitle":<?php if($baracks=="" && $session->plus){ echo "true"; } else{ echo "false"; } ?>,"boxId":"activeVillage","disabled":<?php if($baracks=="" && $session->plus){ echo "false"; } else{ echo "true"; } ?>,"speechBubble":"","class":"","id":"button5229e5254ffa5","redirectUrl":"<?php if($baracks=="" && $session->plus){ echo "build.php?id=" . $bid; } else{ echo ""; } ?>","redirectUrlExternal":""<?php if($baracks=="" && $session->plus){ echo ""; } else{ echo ",\"plusDialog\":{\"featureKey\":\"directLinks\",\"infoIcon\":\"http:/\/\t4.answers.travian.com.sa\/index.php?aid=\u062a\u0639\u0644\u0651\u0645 \u0627\u0644\u0645\u0632\u064a\u062f#go2answer\"}"; } ?>}]);
			});
		}
	</script><?php } ?>
	
	
	
	
	<button type="button" id="button5229e5254ffa5"	class="layoutButton buttonFramed withIcon round market gold<?php if($session->plus){echo 'White';}else{ echo 'Black';}?> <?=$green?> <?php echo $market_; ?> " onclick="return false;" title="<?php
		if(!$session->plus){
			echo "". DIRECT_LINK ."||". NO_PLUS_ESI ."";
            if($market_==""){
                echo "<br /><span class=&quot;warning&quot;>".dorf1_activateplus.""; echo "</span>";	
                 //echo NO_PLUS_ESI3." || ";
            } else{
                 echo "<br /><span class=&quot;warning&quot;>". dorf1_villageNameBox_1 .". ". dorf1_villageNameBox_2 ."."; echo "</span>";	
            }
		}else{
		if($market_=="" && $session->plus){
            echo dorf1_villageNameBox_9." || ";
            echo "Dealers: ".($lvlm-$database->totalMerchantUsed($village->wid))."/".($lvlm);
			} else{ 
                echo "". dorf1_villageNameBox_1 .".<br /><span class=&quot;warning&quot;> ". dorf1_villageNameBox_2 ."."; echo "</span>";	
            }
		}
		?>">
		
		<div class="button-container addHoverClick ">
							<svg viewBox="0 0 20.21 18" class="market"><g class="outline">
  <path d="M17.12 7L17 3.43h1V2h-6V1h-1V0H9v1H8v1H2v1.43h1L2.92 6.9C1.89 7.47 0 8.71 0 10.14a3.58 3.58 0 1 0 7.15 0c0-1.47-2-2.74-3-3.29L4 3.43h5V15H8v1H6v1H5v1h10v-1h-1v-1h-2v-1h-1V3.43h5L15.9 7c-1 .54-3 1.81-3 3.29a3.67 3.67 0 0 0 3.75 3.5 3.75 3.75 0 0 0 3.57-3.57c-.01-1.49-2.07-2.66-3.1-3.22zm-3.58 3.2c0-1 1.59-1.85 2.46-2.24.32-.15.55-.23.55-.23s.26.1.63.27c.87.4 2.36 1.24 2.36 2.2 0 1.37-6 1.37-6 0zm-13 0C.53 9.21 2.11 8.35 3 8c.33-.15.55-.23.55-.23s.26.1.63.27c.88.4 2.37 1.24 2.37 2.2-.02 1.33-6.02 1.33-6.02-.04z"></path>
</g><g class="icon">
  <path d="M17.12 7L17 3.43h1V2h-6V1h-1V0H9v1H8v1H2v1.43h1L2.92 6.9C1.89 7.47 0 8.71 0 10.14a3.58 3.58 0 1 0 7.15 0c0-1.47-2-2.74-3-3.29L4 3.43h5V15H8v1H6v1H5v1h10v-1h-1v-1h-2v-1h-1V3.43h5L15.9 7c-1 .54-3 1.81-3 3.29a3.67 3.67 0 0 0 3.75 3.5 3.75 3.75 0 0 0 3.57-3.57c-.01-1.49-2.07-2.66-3.1-3.22zm-3.58 3.2c0-1 1.59-1.85 2.46-2.24.32-.15.55-.23.55-.23s.26.1.63.27c.87.4 2.36 1.24 2.36 2.2 0 1.37-6 1.37-6 0zm-13 0C.53 9.21 2.11 8.35 3 8c.33-.15.55-.23.55-.23s.26.1.63.27c.88.4 2.37 1.24 2.37 2.2-.02 1.33-6.02 1.33-6.02-.04z"></path>
</g></svg>
		</a>
	
			<i></i>
		</div>
		</button>
		<?php if($market_=="" || !$session->plus){ ?>
	<script type="text/javascript">
		if($('button5229e5254ffa5'))
		{
			$('button5229e5254ffa5').addEvent('click', function ()
			{
				window.fireEvent('buttonClicked', [this, {"type":"<?=$green?>","onclick":"return false;","loadTitle":<?php if($market_=="" && $session->plus){ echo "true"; } else{ echo "false"; } ?>,"boxId":"activeVillage","disabled":<?php if($market_=="" && $session->plus){ echo "false"; } else{ echo "true"; } ?>,"speechBubble":"","class":"","id":"button5229e5254ffa5","redirectUrl":"<?php if($market_=="" && $session->plus){ echo "build.php?id=" . $mid; } else{ echo ""; } ?>","redirectUrlExternal":""<?php if($market_=="" && $session->plus){ echo ""; } else{ echo ",\"plusDialog\":{\"featureKey\":\"directLinks\",\"infoIcon\":\"http:/\/\t4.answers.travian.com.sa\/index.php?aid=\u062a\u0639\u0644\u0651\u0645 \u0627\u0644\u0645\u0632\u064a\u062f#go2answer\"}"; } ?>}]);
			});
		}
	</script>
	<script type="text/javascript">
	jQuery('#button660c7b5ca38b2').click(function (event) {
		jQuery(window).trigger('buttonClicked', [event.delegateTarget, {"type":"green","loadTooltip":null,"boxId":"","disabled":false,"attention":false,"colorBlind":false,"class":"","id":"button660c7b5ca38b2","redirectUrl":"\/alliance","redirectUrlExternal":"","svg":"sideBar\/alliance.svg","content":""}]);
	});
</script>
	<?php } ?>

	</div>
	
		</div>
	
	
	
	
	
	
	<div class="content">
		<div id="villageNameField"  class="playerName"  ><?php echo $session->username; ?></div>
		
		
			
<div id="villageName" class="boxTitle editable">

			<form action="ajax.php?cmd=changeVilName" method="post" >
			
                    <input type="hidden" name="did" value="<?php echo $village->wid ?>">
			 <input class="villageInput" type="text" maxlength="20" name="name" value="<?php echo $village->vname; ?>" id="villageNameInput">
				<svg  viewBox="0 0 12.8 18.8" class="rename" onclick="saveAndSubmit()">
  <path d="M5.5 16.6.8 18.8 0 13.6c0-.1.1-.1.1-.1l5.4 2.9c.1.1.1.2 0 .2zm6.7-14.4L8.4.1C7.9-.1 7.3 0 7 .5L1.2 11.2c-.3.5-.1 1.1.3 1.4h.1l3.9 2.1c.5.3 1.1.1 1.4-.4l5.8-10.7c.3-.4.1-1.1-.5-1.4.1 0 .1 0 0 0z"></path>
</svg>	
			
		</form>
	</div>


	
			
<div class="population" style="  font-family:IRANSans;">
	جمعیت: <span><?php echo $village->pop;?>


</div>

<div class="loyalty medium">

				<?php 
                if($village->loyalty < 30){
				    echo "<div style=\"  font-family:IRANSans;\" class=\"loyalty low\">".LOYALTY.": <span> $village->loyalty%</span></div>";
                }elseif($village->loyalty < 90){
				    echo "<div style=\"  font-family:IRANSans;\ class=\"loyalty medium\">".LOYALTY.": <span> $village->loyalty%</span></div>";
				}else{
				    echo "<div style=\"  font-family:IRANSans;\ class=\"loyalty high\">".LOYALTY.": <span> $village->loyalty%</span></div>";
				}
                ?>
</div>

	
	</div>
	

	
	
	</div>
	
	
	
		