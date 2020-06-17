<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Etape</title>
   <?php include("includes/header.html");?>
  </head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Cairo'>

      <link rel="stylesheet" href="css/styleE.css">
<body>

<?php include("includes/navigation.html");?>


<div class="main container politica">
<br>
	<h1 class="title">Etape</h1>
	 <main>
  <ul class='menu'>
    <li class='menu-item'>
      <a href='' id='ceco'>CECO (1951-1957)</a>
    </li>
    <li class='active menu-item'>
      <a href='' id='cee'>CEE (1957-1967)</a>
    </li>
    <li class='menu-item'>
      <a href='' id='ce'>CE (1967-1993)</a>
    </li>
    <li class='menu-item'>
      <a href='' id='ue'>UE (din 1993)</a>
    </li>
  </ul>
  <div class="text-etape" id="ceco-text" style="background-color:#5b7f98;">
  <p class="etape-title">Comunitatea Europeană a Carbunelui si Otelului</p>
<ul>
<li>A fost fondată de Franța, Germania de Vest, Italia, Belgia, Luxemburg și Olanda pentru a partaja resursele de oțel și cărbune ale statelor membre, prevenind astfel un nou război european.</li>
<li>A reprezentat aplicarea unui plan dezvoltat de economistul francez Jean Monnet, făcut public de ministrul de externe francez Robert Schuman.</li>
<li>A fost promovată intens de către Statele Unite.</li>
</ul>
</div>
<div class="text-etape" id="cee-text" style="background-color:rgb(56, 100, 130);">
<p class="etape-title">Comunitatea Economică Europeană</p>
<p>Comunitatea Economică Europeană a fost inființată la data de 25 martie 1957, de catre cele șase state membre (Belgia, Germania, Franța, Italia, Luxemburg, Olanda) ale Comunitații Europene a Carbunelui și Oțelului (CECO).</p></div>
<div class="text-etape" id="ce-text" style="background-color:#104367;">
<p class="etape-title">Comunitatea Europeană</p>
<p>Constituirea CE a avut la baza Tratatul de la Roma. Clauzele tratatului au fost elaborate în cea mai mare parte în cadrul Conferințelor de la Bilderberg.</p></div>
<div class="text-etape" id="ue-text" style="background-color:#0d3049;">
<p class="etape-title">Uniunea Europeana</p>
<p>UE este o uniune economică și politică, dezvoltată în Europa, ce este compusă din 28 de state. Tratatul de la Maastricht a înființat Uniunea Europeană sub prezenta denumire în 1993. Ultima amendare a bazelor constituționale ale UE a fost Tratatul de la Lisabona, care a intrat în vigoare la 1 decembrie 2009.</p></div>
</main>



	<script>
		document.getElementById("ceco").onclick = function() {
			document.getElementById('ceco-text').style.display = 'block';
			document.getElementById('cee-text').style.display = 'none';
			document.getElementById('ce-text').style.display = 'none';
			document.getElementById('ue-text').style.display = 'none';
		};
		document.getElementById("cee").onclick = function() {
			document.getElementById('cee-text').style.display = 'block';
			document.getElementById('ceco-text').style.display = 'none';
			document.getElementById('ce-text').style.display = 'none';
			document.getElementById('ue-text').style.display = 'none';

		};
		document.getElementById("ce").onclick = function() {
			document.getElementById('ce-text').style.display = 'block';
			document.getElementById('cee-text').style.display = 'none';
			document.getElementById('ceco-text').style.display = 'none';
			document.getElementById('ue-text').style.display = 'none';
		};
		document.getElementById("ue").onclick = function() {
			document.getElementById('ue-text').style.display = 'block';
			document.getElementById('cee-text').style.display = 'none';
			document.getElementById('ceco-text').style.display = 'none';
			document.getElementById('ce-text').style.display = 'none';
		};
	</script>
	
	
	
</div><!-- main -->
 
    <script src="js/indexE.js"></script>
<?php include("includes/footer.html");?>

</body>
</html>