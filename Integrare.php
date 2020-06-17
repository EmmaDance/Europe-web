<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Aplicatii - Integrare</title>
<?php include("includes/header.html");?>
     <link rel="stylesheet" href="css/styleW.css">

  </head>
<body>

	<?php include("includes/navigation.html");?>

	<div class="main container">
	<br>
	<h1 class="title">Aplicații - Integrare</h1>


	<h4>I. Extrageţi, din panoul de litere de mai jos, cinci cuvinte sau sintagme care derivă din calitatea de cetăţean european:</h4>
	<div class="puzzleWrap">
	 
	  <ul>
	  <li>Dreptul la protecție ..................</li>
	  <li>Dreptul la ..................</li>
	  <li>Dreptul la liberă ..................</li>
	  <li>Dreptul la ..................</li>
	  <li>Dreptul de a adresa ..................</li>
	  </ul>
	  <div id='puzzle'></div>

	</div>
	
<br><br><br><br><br><br><br><br><br><br>
<h4>II. Analiza SWOT - Integrarea României în UE</h4>
<div id="img-container">
<img id="Image-Maps-Com-image-maps-2017-03-03-012311" src="images/analizaswot.png" border="0" width="359" height="368" orgWidth="359" orgHeight="368" usemap="#image-maps-2017-03-03-012311" alt="" />
<map name="image-maps-2017-03-03-012311" id="ImageMapsCom-image-maps-2017-03-03-012311">
<area class="swot-c" id="strengths" alt="" title="" shape="rect" coords="28,29,164,173" style="outline:none;"  />
<area class="swot-c" id="weaknesses" alt="" title=""  shape="rect" coords="178,29,328,172" style="outline:none;"  />
<area class="swot-c"  id="opportunities" alt="" title=""  shape="rect" coords="29,189,165,334" style="outline:none;"  />
<area class="swot-c" id="threats" alt="" title=""  shape="rect" coords="180,188,328,336" style="outline:none;" />
</map>
</div>
<script>

	var swot = [
	'PUNCTE TARI: Ce avantaje avem?',
	'PUNCTE SLABE: Ce dezavantaje avem?',
	'OPORTUNITĂȚI: Care sunt direcțiile strategice pe care trebuie să le urmăm?',
	'AMENINȚĂRI: Care sunt amenințările?'
	];

	 $(".swot-c").click(function (){
	var p = document.createElement("div");
	var n = document.createTextNode(swot[$('.swot-c').index(this)]);
	var e = p.appendChild(n);
	document.getElementById("img-container").appendChild(p);
	$(p).addClass("exp");
    $(".swot-c").click(function(){
    p.remove();
	
});
	
	});
	
</script>

<br>
	<h4>III. Dezbatere</h4>
	<ul>
		<li>Ce sentiment au strainii fata de romani?</li>
		<li> Europa cetatenilor sau Europa popoarelor?</li>
	</ul>
	
		<h4>IV. Studiu de caz</h4>
		<span>Consultați presa. Extrageți știri pozitive/negative despre românii din străinătate.</span>
		
	
	 <br><br>
 <script src="js/indexW.js"></script>
<?php include("includes/footer.html");?>
</body>
</html>