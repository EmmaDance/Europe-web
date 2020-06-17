 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
  
    <title>Diversitate lingvistică</title>
   <?php include("includes/header.html");?>
   <link href="dist/jqvmap.css" media="screen" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="dist/jquery.vmap.js"></script>
    <script type="text/javascript" src="dist/maps/jquery.vmap.europe.js" charset="utf-8"></script>

  <script type="text/javascript">
  var trackSelection = [false,false,false,false,false,false,false];
      jQuery(document).ready(function () {
        jQuery('#vmap').vectorMap({
          map: 'europe_en',
          enableZoom: true,
          showTooltip: true,
          multiSelectRegion: true,
          isSelectable: false
        });
		
		jQuery('.language-list li').click(function(){
		var i = $(this).index();
		console.log(i);
		switch(i){ 
		case 0: 
		jQuery('#vmap').vectorMap('setSelected',["FR","ES","PT","BE","IT","RO","MD","LU"],'#a01414',trackSelection[i]);
		trackSelection[i] = trackSelection[i] ? false : true;
		break;
		case 1:
		jQuery('#vmap').vectorMap('setSelected',['IS','IE','GB','SE','NO','DE','NL','CH','AT','DK',],'#052bb4',trackSelection[i]);
		trackSelection[i] = trackSelection[i] ? false : true;
		break;
		case 2:
		jQuery('#vmap').vectorMap('setSelected',['EE','LV','LT',],'#059f0a',trackSelection[i]);
		trackSelection[i] = trackSelection[i] ? false : true;
		break;
		case 3:
		jQuery('#vmap').vectorMap('setSelected',['FI','HU',],'#dd8400',trackSelection[i]);
		trackSelection[i] = trackSelection[i] ? false : true;
		break;
		case 4:
		jQuery('#vmap').vectorMap('setSelected',['RU','BY','UA','PL','SK','CZ','BG','RS','BA','MK','ME','HR','SI'],'#8162b0',trackSelection[i]);
		trackSelection[i] = trackSelection[i] ? false : true;
		break;
		case 5:
		jQuery('#vmap').vectorMap('setSelected',['GR','TR',],'#474747',trackSelection[i]);
		trackSelection[i] = trackSelection[i] ? false : true;
		break;
		case 6:
		jQuery('#vmap').vectorMap('setSelected',['AL'],'#918710',trackSelection[i]);
		trackSelection[i] = trackSelection[i] ? false : true;
		break;
		}
		
		});
      });
	  
	  
    </script>
	
	
  </head>
  <body>
  
  <?php include("includes/navigation.html");?>

<div class="main home">
	<div class="container">
	<br>
	<h1 class="title">Diversitatea lingvistică <i style="color:#f28e00;" class="fa fa-question-circle" aria-hidden="true" bubble-text='În prezent, UE numără 500 de milioane de cetățeni, 28 de state membre, 3 alfabete și 24 de limbi oficiale, din care unele sunt utilizate la nivel mondial. Din patrimoniul UE fac parte alte 60 de limbi, vorbite în anumite regiuni sau de anumite grupuri. La acestea se adaugă numeroasele limbi aduse de imigranți: se estimează că, în momentul de față, pe teritoriul UE conviețuiesc cel puțin 175 de naționalități.'></i></h1>
	<br>
	<p>Coexistența armonioasă a numeroase limbi în Europa este un simbol puternic al aspirației Uniunii Europene de a fi unită în diversitate, care constituie unul dintre fundamentele proiectului european.
Limbile definesc identități personale, dar fac parte în egală măsură dintr-un patrimoniu comun. Ele pot servi drept punte de legătură cu alți oameni și pot deschide calea către alte țări și culturi, promovând înțelegerea reciprocă.
</p>
<br>
<div class="row">
<div class="col-md-8">
	<div  id="vmap" style="width: 680px; height: 520px;"></div>
	</div>
	<div class="col-md-4">
	  <ul class="language-list">
		<li id="l-ro">Limbi romanice</li>
		<li id="l-ge">Limbi germanice</li>
		<li id="l-ba">Limbi baltice</li>
		<li id="l-fi">Limbi fino-ugrice</li>
		<li id="l-sl">Limbi slave</li>
		<li id="l-gr">Greaca</li>
		<li id="l-al">Albaneza</li>
		
	</ul>
	</div>
    
<br>

	
		
	</div><!-- container -->
	<br>
	</div><!-- home -->


<?php include("includes/footer.html");?>

	
</body>
</html>
 
 
 
