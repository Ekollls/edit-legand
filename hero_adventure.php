<?php
include("application/Account.php");


  if(HERO_ADV>0){
        if( isset($_GET['active']) AND $session->gold >= HERO_ADV){
            $sData = $database->query('SELECT * FROM `odata` WHERE `owner` = 4 ORDER BY RAND() LIMIT 1');
 foreach($sData as $row){
	 $uid = $session->uid;
		     $coor = $row['wref'];
					$database->addAdventure($coor, $uid,1);
}
               $database->query('UPDATE `users` SET `gold` = gold - '.HERO_ADV.' WHERE `id` = '.$uid.' ');

           
        }
      }

    
?>


<?php include("application/views/html.php");?>
<body class="v35 webkit <?=$database->bodyClass($_SERVER['HTTP_USER_AGENT']); ?> en hero_adventure <?php if($dorf1==''){echo 'perspectiveBuildings';}else{ echo 'perspectiveResources';} ?> <?php echo DIRECTION; ?> buildingsV3">
<script type="text/javascript">
    window.ajaxToken = 'de3768730d5610742b5245daa67b12cd';
</script>
<div id="background">
    <div id="headerBar"></div>
    <div id="bodyWrapper">

        <div id="header">

            <?php
            include("application/views/topheader.php");
            include("application/views/toolbar.php");

            ?>

        </div>
        <div id="center">


            <?php include("application/views/sideinfo.php"); ?>

 
















<div  id="contentOuterContainer" class=" contentPage">
  <div  class="contentTitle buttonCount2">
  
    <a id="closeContentButton" class="contentTitleButton buttonFramed green withIcon rectangle" href="/dorf1.php">
      <svg viewBox="0 0 20 20">
        <g class="outline">
          <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
        </g>
        <g class="icon">
          <path d="M0 17.01L7.01 10 .14 3.13 3.13.14 10 7.01 17.01 0 20 2.99 12.99 10l6.87 6.87-2.99 2.99L10 12.99 2.99 20 0 17.01z"></path>
        </g>
      </svg>
    </a>
    <a id="knowledgeBaseButton" class="contentTitleButton buttonFramed withIcon rectangle green" href="https://support.travian.com/support/solutions/articles/7000060172-adventures" target="_blank">&nbsp;</a>

  </div>
  <div  class="contentContainer">
    <div  id="content" class="heroAdventure heroAdventureAdventures">
      <h1 class="titleInHeader">ماجراجویی</h1>
      <div id="heroAdventure" class="contentV2">
	  <div class="heroStatusMessage header">

            </div>

			



			
	
<div class="walkingCalculationWrapper " id="walkingCalculationWrapper">
<div  class="title">موقعیت قهرمان شما<svg viewBox="0 0 12 7.41" >
<path d="M1.41 0L6 4.58 10.59 0 12 1.41l-6 6-6-6z"onclick="toggleWalkingCalculationWrapper ()" ></path>
</svg></div>
<div class="content">
<div class="formV2 walkingCalculationVillage" id="walkingCalculationVillage  "><label class="select"><select name="village">
<option value="96103"><span><a href="/position_details.php?mapId=111739"><span>   <img alt ="In the native village" src="<?=GP_LOCATION2 ?>x.gif" class="heroStatus100" />  </span></a></span></span> <span><span><?=$vname?>  </span>  </option>
</select>
<div class="label pinned">سکونت</div>
</label>
<?php
if(HERO_ADV>0){
  ?>
<a href="hero_adventure.php?active">
    <button type="button" class="textButtonV2 gold prosButton plus buttonFramed withText rectangle " title="" coins="100" id="buttonbuyadventure" onclick="javascript:window.location='hero_adventure.php?buy'" style="margin-left: 20px;">
        <div class="button-content">جستجوی ماجراجویی
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 51" class="goldCoin">
  <defs>
    <linearGradient id="a" x1="25.5" x2="25.5" y1="2" y2="49" gradientTransform="rotate(13.28 25.519 25.5)" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#d8c383"></stop>
      <stop offset=".47" stop-color="#bb904d"></stop>
      <stop offset=".8" stop-color="#b78548"></stop>
      <stop offset="1" stop-color="#c09957"></stop>
    </linearGradient>
    <linearGradient id="b" x1="25.5" x2="25.5" y1="7.89" y2="43.19" gradientTransform="rotate(67.5 25.502 25.498)" gradientUnits="userSpaceOnUse">
      <stop offset=".06" stop-color="#81481b"></stop>
      <stop offset="1" stop-color="#fef6a9"></stop>
    </linearGradient>
  </defs>
  <circle cx="25.5" cy="25.5" r="25.5" fill="#522d1c"></circle>
  <circle cx="25.5" cy="25.5" r="23.5" fill="url(#a)" transform="rotate(-13.28 25.5 25.519)"></circle>
  <circle cx="25.5" cy="25.5" r="17.52" fill="url(#b)" transform="rotate(-67.5 25.498 25.502)"></circle>
  <path fill="#b47b34" d="M42.3 25.5c-.39-22.38-33.21-22.38-33.6 0 .39 22.38 33.21 22.38 33.6 0z"></path>
  <path fill="#c48d3a" d="M24.64 22.64c-5.05.09-11-3.16-13.78-5.59a16.12 16.12 0 011.44-2.15c12.35 10 13.61 10.06 26 .13a16.07 16.07 0 011.4 2.14c-2.9 2.43-8.7 5.55-13.65 5.47.51.09-1.93.09-1.41 0zm-9.39 1.58a65.65 65.65 0 00-6.05 5.24c.1.38.21.76.33 1.13a33.75 33.75 0 0110.34-6.37zm-3.71 0H8.78c0 .32 0 .64-.06 1v.45c0 .45 0 .88.08 1.31v.36zm2.9-1.22c-.39-.21-2.61-2.34-4.45-4.14-.17.41-.32.83-.46 1.25v.12c2.61 1.77 3.59 2.98 4.91 2.77zm9.14-2.34v-2.27L16.69 11c-.39.23-.77.48-1.14.74s-.6.44-.88.68zm-.41 5.18c-.69-.07-5.26 1.43-11.9 8.39v.1a15.94 15.94 0 001.32 1.82 58.92 58.92 0 0110.58-10.33zm.91 6.79l-.23-1.52a48 48 0 00-9.12 7.19 16 16 0 002.75 1.85c1.62-2.47 4.25-6.08 6.6-7.54zM21.75 9.12c-.42.09-.84.19-1.26.31 1.14 1.7 4.31 5.57 4.85 6.39zm9.07 15.1A33.5 33.5 0 0141 30.44c.12-.38.23-.77.32-1.17a67.28 67.28 0 00-5.87-5.05zm10.91 0h-2.59l2.54 2.88a18.45 18.45 0 00.05-2.88zM37.18 23s2.09-1.29 3.84-2.64c-.14-.46-.3-.9-.48-1.34-1.81 1.76-3.92 3.77-4.29 4a4.77 4.77 0 00.93-.02zm-3.24-11.91l-6.83 7.3v2.25l8.8-8.1a16.37 16.37 0 00-1.97-1.45zM28 25.82h-.49A58.72 58.72 0 0138 36a17.83 17.83 0 001.33-1.89C33.16 27.5 28 25.82 28 25.82zm-1.4 6.79c2.32 1.44 4.92 5 6.54 7.44a17.06 17.06 0 002.7-1.87 47.92 47.92 0 00-9-7.09zm-.32 2.67l.28-.24a7.74 7.74 0 01-2.45 0l.28.24h-.32l-4.21 4.45c1.64.6 3-1.95 5.47-3.68 2.45 1.73 3.83 4.28 5.48 3.68l-4.21-4.45zm1.18-22.21c.77-.92 2-2.56 2.77-3.71l-.44-.12c-.28-.07-.55-.13-.83-.18l-3.63 6.76s.87-1.23 2.14-2.75zm-.62-4.3a18.78 18.78 0 00-3 0l1.49 1.9z"></path>
  <path fill="#703e19" d="M35.43 15.17h-1.76l-.38.55H18.43l-.37-.55h-1.77l-1 5.78L16 22l2.14-3.13h4.77v14.59c0 1.69-2.57 2.1-2.57 2.1v2.27h11v-2.27s-2.57-.41-2.57-2.1V18.88h4.77L35.7 22l.71-1z"></path>
  <path fill="#dbb561" d="M33.56 17.88L35.7 21l.71-1.07-1-5.78h-1.74l-.38.55H18.43l-.37-.55h-1.77l-1 5.78L16 21l2.14-3.13h5.26v14.59c0 1.68-3.06 2.1-3.06 2.1V36l.81.82h9.45l.74-.75v-1.51s-3.05-.42-3.05-2.1V17.88z"></path>
  <path fill="#faf28a" d="M15.4 20.07l-.09-.13 1-5.78h1.77l.37.55h14.84l.38-.55h1.76l1 5.78-.08.13-.9-5.27h-1.78l-.38.55H18.43l-.37-.55h-1.77zm5 15.13c.25.07 3.67-.77 3.06-2.74 0 1.68-3.06 2.1-3.06 2.1zm8-2.74c-.62 2 2.82 2.82 3.05 2.74v-.64s-3.14-.42-3.14-2.1z"></path>
  <path fill="#a87134" d="M25.56 4a1.14 1.14 0 010 2.27 1.14 1.14 0 010-2.27zm-3.31 2.58a1.13 1.13 0 00-.4-2.23 1.13 1.13 0 00.4 2.23zM19 7.44a1.13 1.13 0 00-.78-2.13A1.13 1.13 0 0019 7.44zm-3 1.4a1.13 1.13 0 00-1.14-2 1.13 1.13 0 001.14 2zm-2.72 1.91C14.45 9.82 13 8 11.85 9a1.14 1.14 0 001.46 1.75zM11 13.09a1.13 1.13 0 00-1.73-1.46A1.13 1.13 0 0011 13.09zm-1.9 2.73a1.14 1.14 0 00-2-1.14 1.14 1.14 0 001.95 1.14zm-1.41 3a1.13 1.13 0 00-2.13-.78 1.13 1.13 0 002.08.79zM6.78 22a1.14 1.14 0 00-2.24-.4 1.14 1.14 0 002.24.4zm-.29 3.31a1.14 1.14 0 00-2.27 0 1.14 1.14 0 002.27.04zm.28 3.31a1.13 1.13 0 00-2.23.39 1.13 1.13 0 002.23-.35zm.86 3.21a1.13 1.13 0 00-2.13.77 1.13 1.13 0 002.13-.73zm1.4 3a1.14 1.14 0 00-2 1.14A1.14 1.14 0 009 34.88zm1.9 2.73a1.14 1.14 0 00-1.74 1.46c.93 1.19 2.71-.3 1.74-1.41zM13.28 40c-1.11-1-2.6.81-1.46 1.74A1.14 1.14 0 0013.28 40zM16 41.87a1.13 1.13 0 00-1.14 2 1.13 1.13 0 001.14-2zm3 1.4a1.14 1.14 0 00-.78 2.14 1.14 1.14 0 00.78-2.14zm3.21.87a1.13 1.13 0 00-.4 2.23 1.13 1.13 0 00.41-2.23zm3.3.29a1.14 1.14 0 000 2.27 1.14 1.14 0 00.01-2.27zm3.31-.29a1.14 1.14 0 00.4 2.24 1.14 1.14 0 00-.39-2.24zm3.18-.85a1.13 1.13 0 00.78 2.13 1.13 1.13 0 00-.78-2.13zm3-1.41a1.14 1.14 0 001.14 2 1.14 1.14 0 00-1.09-2zM37.78 40a1.14 1.14 0 001.46 1.74A1.14 1.14 0 0037.78 40zm2.35-2.35a1.14 1.14 0 001.74 1.46 1.14 1.14 0 00-1.74-1.48zM42 34.91a1.13 1.13 0 002 1.14 1.13 1.13 0 00-2-1.14zm1.4-3a1.13 1.13 0 002.13.78 1.13 1.13 0 00-2.09-.79zm.86-3.21a1.14 1.14 0 002.24.39 1.14 1.14 0 00-2.2-.4zm.3-3.31a1.14 1.14 0 002.27 0 1.14 1.14 0 00-2.23-.01zm-.29-3.31a1.14 1.14 0 002.24-.4 1.14 1.14 0 00-2.2.39zm-.86-3.21a1.14 1.14 0 002.14-.78 1.14 1.14 0 00-2.1.77zm-1.4-3a1.14 1.14 0 002-1.13 1.14 1.14 0 00-1.96 1.1zm-1.9-2.72a1.14 1.14 0 001.74-1.46 1.14 1.14 0 00-1.7 1.43zm-2.31-2.38A1.14 1.14 0 0039.26 9c-1.11-.94-2.6.84-1.46 1.77zm-2.72-1.91a1.14 1.14 0 001.14-2 1.14 1.14 0 00-1.14 2zm-3-1.41a1.13 1.13 0 00.78-2.13 1.13 1.13 0 00-.79 2.13zm-3.2-.86a1.14 1.14 0 00.39-2.24 1.14 1.14 0 00-.4 2.24z"></path>
</svg>
            <span class="goldValue">10  &nbsp;  </span>
        </div>
    </button>
</a>
<?php 
}
?>
		
<?php
//<div class="heroNotAvailable">البطل غير موجود</div>
?>
</div>
</div>
</div>


<script>
function toggleWalkingCalculationWrapper(
) {
    var wrapper = document.getElementById("walkingCalculationWrapper");
    wrapper.classList.toggle("collapsed");
    wrapper.classList.toggle("disabled");
    toggleContentVisibility(wrapper);
}

function toggleContentVisibility(wrapper) {
    var content = document.querySelector("#walkingCalculationWrapper .content"); // استفاده از ID برای دیو
if (wrapper.classList.contains("disabled")) {
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
}

</script>

												
										

												
												
												

        <table class="borderGap adventureList">
		
          <thead>
		  
            <tr>
						<th class="location" colspan="2"><?=HEROA0?></th>
						<th class="coordinates">موقعیت</th>
			<th class="moveTime"><?=HEROA1?></th>
			<th class="difficulty"><?=HEROA2?></th>
			<th class="timeLeft"><?=HEROA3?></th>
			<th class="goTo"><?=HEROA4?></th>
			

            </tr>
          </thead>
          <tbody>
   
<?php
$database->query("DELETE FROM adventure WHERE `time`<= '".time()."' and `end`='0'");
$sql = $database->query("SELECT * FROM adventure WHERE `end` = '0' and `uid` = '".$session->uid."' ORDER BY time ASC");
$query = count($sql);

$outputList = '';
if(!isset($timer)){
$timer = 1;
}
if($query == 0) {
    $outputList .= "<td colspan=\"6\" class=\"none\"><center>".HEROA5."</center></td>";
}else{
	$hVillCoor = $database->getCoor($session->heroD['wref']);
    $from = array('x'=>$hVillCoor['x'], 'y'=>$hVillCoor['y']);
	foreach($sql as $row){



$to = array('x'=>$row['x'], 'y'=>$row['y']);
$speed = $session->heroD['speed'];
$time = $database->procDistanceTime2($from,$to,$speed,1);

//echo $row['type'];
switch($row['type']) {
case 1:
$tname = '<td class="place"><img src="'. GP_LOCATION2.'x.gif" class="forest" title="جنگل"></td>';
break;
case 2:
$tname =  '<td class="place"><img src="'. GP_LOCATION2.'x.gif" class="clay" title="ماسه زار"></td>';
break;
case 3:
$tname =  '<td class="place"><img src="'. GP_LOCATION2.'x.gif" class="hill" title=" دره"></td>';
break;
case 4:
  default:
$tname = '<td class="place"><img src="'. GP_LOCATION2.'x.gif" class="grassland" title="چمن زار"></td>';
break;
}

	$outputList .= "<tr><td class=\"location\">".$tname."</td>";

	$outputList .= '<td class="coords"><a href="karte.php?x='.$row['x'].'&y='.$row['y'].'">
        <span class="coordinates coordinatesWrapper coordinatesAligned coordinates<?php echo DIRECTION; ?>">
        <span class="coordinateHeroX">('.$row['x'].'</span>
        <span class="coordinatePipe">|</span>
        <span class="coordinateHeroY">'.$row['y'].')</span>
        </span><span class="clear"></span>
        </a></td>';
    $outputList .= "<td class=\"moveTime\"> ".$generator->getTimeFormat($time)." </td>";
	if(!$row['dif']){
		$outputList .= "<td class='difficulty'><img src='". GP_LOCATION2."x.gif' class='difficulty_normal' title='Normális' /></td>";
	}else{
		$outputList .= "<td class='difficulty'><img src='". GP_LOCATION2."x.gif' class='difficulty_hard' title='Veszélyes' /></td>";
	}
	$outputList .= "<td class=\"duration\"><span class=\"timer\" counting=\"down\" value=\"".($row['time']-time())."\">".$generator->getTimeFormat($row['time']-time())."</span></td>";
	$outputList .= "<td class=\"gold\" >"
."<button  class=\" textButtonV1  rectangle withText green  \" onclick=\"location.href='start_adventure.php?kid=" . $row['wref'] . "&h=1'\"><span>" . HEROA6 . "</button></td></tr>";    $timer++;
	}
}
echo $outputList;
?>


    </tbody>
</table>
      </div>
      <script type="application/javascript">
        jQuery(document).ready(function() {
            window.Travian.React.HeroAdventure.render(
                {gql: "query{ownPlayer{hero{isRegenerating regenerationTimeLeft homeVillage{mapId id name}status{status inOasis{belongsTo{mapId name}} inVillage{id mapId name type}arrivalAt arrivalIn onWayTo{id x y type village{mapId name}}}adventures{mapId x y place difficulty travelingDuration}} villages{id mapId name hasRallyPoint x y}} }", viewData: {"data":{"ownPlayer":{"hero":{"isRegenerating":false,"regenerationTimeLeft":null,"homeVillage":{"mapId":96103,"id":19736,"name":"hamidthcggfff"},"status":{"status":3,"inOasis":null,"inVillage":null,"arrivalAt":1714693879,"arrivalIn":6123,"onWayTo":{"id":111739,"x":60,"y":-78,"type":1,"village":{"mapId":111739,"name":"banana split"}}},"adventures":[{"mapId":96498,"x":57,"y":-40,"place":"grassland","difficulty":1,"travelingDuration":1564},{"mapId":98105,"x":60,"y":-44,"place":"forest","difficulty":2,"travelingDuration":1499},{"mapId":93700,"x":66,"y":-33,"place":"clay","difficulty":3,"travelingDuration":1725},{"mapId":94907,"x":70,"y":-36,"place":"grassland","difficulty":0,"travelingDuration":1958},{"mapId":98905,"x":58,"y":-46,"place":"clay","difficulty":1,"travelingDuration":2212},{"mapId":100503,"x":52,"y":-50,"place":"natar_village","difficulty":2,"travelingDuration":4000},{"mapId":97313,"x":70,"y":-42,"place":"lake","difficulty":3,"travelingDuration":1958},{"mapId":98917,"x":70,"y":-46,"place":"hill","difficulty":0,"travelingDuration":2546},{"mapId":97716,"x":72,"y":-43,"place":"natar_village","difficulty":1,"travelingDuration":2533},{"mapId":97299,"x":56,"y":-42,"place":"hill","difficulty":2,"travelingDuration":1958},{"mapId":94491,"x":55,"y":-35,"place":"clay","difficulty":3,"travelingDuration":2300},{"mapId":100126,"x":76,"y":-49,"place":"natar_village","difficulty":0,"travelingDuration":4217},{"mapId":92091,"x":61,"y":-29,"place":"forest","difficulty":1,"travelingDuration":2622},{"mapId":99306,"x":58,"y":-47,"place":"forest","difficulty":2,"travelingDuration":2426},{"mapId":100101,"x":51,"y":-49,"place":"natar_village","difficulty":3,"travelingDuration":4017},{"mapId":99305,"x":57,"y":-47,"place":"grassland","difficulty":0,"travelingDuration":2571},{"mapId":101313,"x":60,"y":-52,"place":"hill","difficulty":1,"travelingDuration":3431},{"mapId":98512,"x":66,"y":-45,"place":"lake","difficulty":2,"travelingDuration":1725},{"mapId":94908,"x":71,"y":-36,"place":"forest","difficulty":3,"travelingDuration":2197},{"mapId":96912,"x":70,"y":-41,"place":"forest","difficulty":0,"travelingDuration":1872},{"mapId":93703,"x":69,"y":-33,"place":"forest","difficulty":1,"travelingDuration":2182},{"mapId":94890,"x":53,"y":-36,"place":"forest","difficulty":2,"travelingDuration":2685},{"mapId":94091,"x":56,"y":-34,"place":"hill","difficulty":3,"travelingDuration":2212},{"mapId":94088,"x":53,"y":-34,"place":"lake","difficulty":0,"travelingDuration":2875},{"mapId":94494,"x":58,"y":-35,"place":"forest","difficulty":1,"travelingDuration":1647},{"mapId":99307,"x":59,"y":-47,"place":"grassland","difficulty":2,"travelingDuration":2300},{"mapId":94090,"x":55,"y":-34,"place":"grassland","difficulty":3,"travelingDuration":2426},{"mapId":93689,"x":55,"y":-33,"place":"grassland","difficulty":0,"travelingDuration":2571},{"mapId":98912,"x":65,"y":-46,"place":"clay","difficulty":2,"travelingDuration":1872},{"mapId":92084,"x":54,"y":-29,"place":"grassland","difficulty":3,"travelingDuration":3460},{"mapId":93705,"x":71,"y":-33,"place":"hill","difficulty":0,"travelingDuration":2571},{"mapId":98504,"x":58,"y":-45,"place":"grassland","difficulty":1,"travelingDuration":2008},{"mapId":91677,"x":48,"y":-28,"place":"lake","difficulty":2,"travelingDuration":4783},{"mapId":90494,"x":68,"y":-25,"place":"natar_village","difficulty":3,"travelingDuration":3823},{"mapId":98918,"x":71,"y":-46,"place":"clay","difficulty":0,"travelingDuration":2733},{"mapId":96494,"x":53,"y":-40,"place":"forest","difficulty":1,"travelingDuration":2584},{"mapId":96913,"x":71,"y":-41,"place":"grassland","difficulty":2,"travelingDuration":2120},{"mapId":94909,"x":72,"y":-36,"place":"forest","difficulty":3,"travelingDuration":2439},{"mapId":96094,"x":54,"y":-39,"place":"hill","difficulty":0,"travelingDuration":2314},{"mapId":95695,"x":56,"y":-38,"place":"forest","difficulty":1,"travelingDuration":1818},{"mapId":91281,"x":53,"y":-27,"place":"natar_village","difficulty":2,"travelingDuration":4017},{"mapId":96888,"x":46,"y":-41,"place":"lake","difficulty":3,"travelingDuration":4402},{"mapId":100929,"x":77,"y":-51,"place":"natar_village","difficulty":0,"travelingDuration":4741},{"mapId":98916,"x":69,"y":-46,"place":"grassland","difficulty":1,"travelingDuration":2371},{"mapId":96497,"x":56,"y":-40,"place":"forest","difficulty":2,"travelingDuration":1818},{"mapId":91298,"x":70,"y":-27,"place":"natar_village","difficulty":3,"travelingDuration":3572},{"mapId":97316,"x":73,"y":-42,"place":"grassland","difficulty":0,"travelingDuration":2685},{"mapId":97300,"x":57,"y":-42,"place":"hill","difficulty":1,"travelingDuration":1725},{"mapId":100910,"x":58,"y":-51,"place":"lake","difficulty":2,"travelingDuration":3343},{"mapId":96911,"x":69,"y":-41,"place":"lake","difficulty":3,"travelingDuration":1626},{"mapId":98101,"x":56,"y":-44,"place":"grassland","difficulty":0,"travelingDuration":2212},{"mapId":99714,"x":65,"y":-48,"place":"grassland","difficulty":1,"travelingDuration":2371},{"mapId":97297,"x":54,"y":-42,"place":"grassland","difficulty":2,"travelingDuration":2439},{"mapId":92093,"x":63,"y":-29,"place":"forest","difficulty":3,"travelingDuration":2571},{"mapId":101319,"x":66,"y":-52,"place":"clay","difficulty":0,"travelingDuration":3431},{"mapId":98106,"x":61,"y":-44,"place":"clay","difficulty":1,"travelingDuration":1385},{"mapId":99312,"x":64,"y":-47,"place":"grassland","difficulty":2,"travelingDuration":2073},{"mapId":88091,"x":71,"y":-19,"place":"natar_village","difficulty":3,"travelingDuration":5539},{"mapId":99710,"x":61,"y":-48,"place":"grassland","difficulty":0,"travelingDuration":2371},{"mapId":95711,"x":72,"y":-38,"place":"grassland","difficulty":1,"travelingDuration":2329},{"mapId":98099,"x":54,"y":-44,"place":"natar_village","difficulty":2,"travelingDuration":2647},{"mapId":97314,"x":71,"y":-42,"place":"hill","difficulty":3,"travelingDuration":2197},{"mapId":98118,"x":73,"y":-44,"place":"clay","difficulty":0,"travelingDuration":2875},{"mapId":91676,"x":47,"y":-28,"place":"lake","difficulty":1,"travelingDuration":4993},{"mapId":101311,"x":58,"y":-52,"place":"lake","difficulty":2,"travelingDuration":3582},{"mapId":94509,"x":73,"y":-35,"place":"forest","difficulty":3,"travelingDuration":2770},{"mapId":99712,"x":63,"y":-48,"place":"grassland","difficulty":0,"travelingDuration":2314},{"mapId":93701,"x":67,"y":-33,"place":"forest","difficulty":1,"travelingDuration":1854},{"mapId":99713,"x":64,"y":-48,"place":"forest","difficulty":2,"travelingDuration":2329},{"mapId":94892,"x":55,"y":-36,"place":"grassland","difficulty":3,"travelingDuration":2197},{"mapId":93301,"x":68,"y":-32,"place":"grassland","difficulty":0,"travelingDuration":2212},{"mapId":92092,"x":62,"y":-29,"place":"normal_village","difficulty":1,"travelingDuration":2584},{"mapId":101725,"x":71,"y":-53,"place":"lake","difficulty":2,"travelingDuration":4146},{"mapId":93704,"x":70,"y":-33,"place":"grassland","difficulty":3,"travelingDuration":2371},{"mapId":95698,"x":59,"y":-38,"place":"clay","difficulty":0,"travelingDuration":1060},{"mapId":96896,"x":54,"y":-41,"place":"forest","difficulty":1,"travelingDuration":2371},{"mapId":94108,"x":73,"y":-34,"place":"clay","difficulty":2,"travelingDuration":2875},{"mapId":92890,"x":58,"y":-31,"place":"hill","difficulty":3,"travelingDuration":2426},{"mapId":92097,"x":67,"y":-29,"place":"clay","difficulty":0,"travelingDuration":2770},{"mapId":97315,"x":72,"y":-42,"place":"hill","difficulty":2,"travelingDuration":2439},{"mapId":100925,"x":73,"y":-51,"place":"hill","difficulty":3,"travelingDuration":4017},{"mapId":99324,"x":76,"y":-47,"place":"natar_village","difficulty":0,"travelingDuration":3925},{"mapId":102116,"x":61,"y":-54,"place":"hill","difficulty":1,"travelingDuration":3891},{"mapId":97715,"x":71,"y":-43,"place":"grassland","difficulty":2,"travelingDuration":2300},{"mapId":100501,"x":50,"y":-50,"place":"natar_village","difficulty":3,"travelingDuration":4379},{"mapId":92493,"x":62,"y":-30,"place":"clay","difficulty":0,"travelingDuration":2329},{"mapId":95693,"x":54,"y":-38,"place":"hill","difficulty":1,"travelingDuration":2329},{"mapId":94087,"x":52,"y":-34,"place":"forest","difficulty":2,"travelingDuration":3107},{"mapId":102115,"x":60,"y":-54,"place":"hill","difficulty":3,"travelingDuration":3934},{"mapId":98509,"x":63,"y":-45,"place":"lake","difficulty":0,"travelingDuration":1543},{"mapId":98108,"x":63,"y":-44,"place":"lake","difficulty":1,"travelingDuration":1286},{"mapId":97700,"x":56,"y":-43,"place":"forest","difficulty":2,"travelingDuration":2073},{"mapId":94911,"x":74,"y":-36,"place":"clay","difficulty":3,"travelingDuration":2932},{"mapId":95713,"x":74,"y":-38,"place":"natar_village","difficulty":0,"travelingDuration":2840},{"mapId":92490,"x":59,"y":-30,"place":"forest","difficulty":1,"travelingDuration":2533},{"mapId":95295,"x":57,"y":-37,"place":"forest","difficulty":2,"travelingDuration":1626},{"mapId":92891,"x":59,"y":-31,"place":"natar_village","difficulty":3,"travelingDuration":2300},{"mapId":92081,"x":51,"y":-29,"place":"natar_village","difficulty":0,"travelingDuration":4017},{"mapId":101310,"x":57,"y":-52,"place":"lake","difficulty":1,"travelingDuration":3682},{"mapId":93678,"x":44,"y":-33,"place":"natar_village","difficulty":2,"travelingDuration":5124},{"mapId":93296,"x":63,"y":-32,"place":"hill","difficulty":0,"travelingDuration":1800},{"mapId":96510,"x":69,"y":-40,"place":"natar_village","difficulty":1,"travelingDuration":1564},{"mapId":93690,"x":56,"y":-33,"place":"hill","difficulty":2,"travelingDuration":2371},{"mapId":93697,"x":63,"y":-33,"place":"hill","difficulty":3,"travelingDuration":1543},{"mapId":92901,"x":69,"y":-31,"place":"grassland","difficulty":0,"travelingDuration":2571},{"mapId":101713,"x":59,"y":-53,"place":"lake","difficulty":1,"travelingDuration":3744},{"mapId":92874,"x":42,"y":-31,"place":"lake","difficulty":2,"travelingDuration":5779},{"mapId":97312,"x":69,"y":-42,"place":"lake","difficulty":3,"travelingDuration":1725},{"mapId":93292,"x":59,"y":-32,"place":"hill","difficulty":2,"travelingDuration":2073},{"mapId":99295,"x":47,"y":-47,"place":"natar_village","difficulty":3,"travelingDuration":4600},{"mapId":96126,"x":86,"y":-39,"place":"natar_village","difficulty":0,"travelingDuration":5914}]},"villages":[{"id":19736,"mapId":96103,"name":"hamidthcggfff","hasRallyPoint":true,"x":63,"y":-39}]}}}, activePerspective: "perspectiveResources"},
                {},
                ["allgemein","adventure","hero","layout","karte"]        );
        });
      </script>
    </div>
  </div>
</div>



































            <?php
            include("application/views/rightsideinfor.php");
            ?>

