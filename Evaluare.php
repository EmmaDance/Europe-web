<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Evaluare</title>
<?php include("includes/header.html");?>

  <script>
  var posElementDragged =-1;
  $( function() {
	
    $( ".draggable" ).draggable({
	 drag: function(){
		posElementDragged = $(this).attr('data-droppableTarget');
	}  
	});
    $( ".droppable" ).droppable({
      drop: function( event, ui ) {
        console.log($(this));
          if($(this).index()==posElementDragged) {
			  $( this ).addClass( "ui-state-highlight" );}
		  else {$( this ).addClass( "ui-state-error" )}
      },
    });
  } );
  </script>

   <script>

	drag: function(){
		posElementDragged = $(this).eq();
		console.log(posElementDragged);
	}
	
	</script>
 	
 
  </head>
<body>

	<?php include("includes/navigation.html");?>

	<div class="main container">
	<br>
	<h1 class="title">Evaluare finală</h1>



	<h3 class="ex-"  >I. Completaţi spaţiile libere cu informaţia istorică corespunzătoare:</h3>
	<ol class='ex-1'>
		<li>Uniunea Europeană s-a realizat după <input class='ex1'  type="text" name="username" size="25"></li>
		<li>Sistemul politic democratic reprezintă un element de <input   class='ex1'  type="text" name="username" size="25"> în Europa</li>
		<li>Statul care nu face parte din UE, dar care a depus deja  cerere de aderare este <input  class='ex1'   type="text" name="username" size="25"></li>
		<li>Sediul Parlamentului European este la  <input  class='ex1'   type="text" name="username" size="25"></li>
		<li>In 1973  a aderat la UE statul numit <input class='ex1'  type="text" name="username" size="25"></li>
	</ol>
	<p><strong>Termeni: Paris, Franţa, Primul Război Mondial, Turcia, Franţa, Al Doilea Război Mondial, diversitate, unitate, Strasbourg, Croaţia.</strong></p>
	
	<h3 class="ex-t">II.</h3>
	<blockquote>
              <p>A. Abatele de Saint-Pierre, in planul de pace perpetua, "Paix Perpetuelle" (1712), propune un Senat european cu puteri legislative si judiciare, compus din 40 de membri, care sa se reuneasca la Haga. Este formulat pentru prima data principiul garantiei teritoriale (care va aparea ulterior in Pactul Societatii Natiunilor, art. 10). Sunt consemnate drept conditii alianta suveranilor, respectarea deciziilor senatului si interventia colectiva impotriva statelor recalcitrante. Acest proiect este considerat de Th. Ruysseu in momentul publicarii, drept "un vis care nu va inceta sa staruie in constiinta umanitatii. - Viziuni despre unitatea Europei</p>
            </blockquote>

			<blockquote>
              <p>B. Daca privim Europa din ultimii 20 de ani, observam ca occidentul a avut o participare
				majora la stimularea europei culturale, asadar, Europa s-a trezit brusc nu numai in fata unei
				diversitati politice si economice ci si in fata unor provocari care se regasesc in relatiile
				interculturale. Desigur, ele au fost prezente si in trecut, dar acum au capatat o alta
				concretizare. Observam o adaptare economica la procesul intergrarii, iar in plan cultural se
				manifesta "un fel de rebeliune impotriva tendintei de nivelare a lumii. - Diversitatea europeana si integrarea, Lucian Emil Rosca</p>
            </blockquote>

			<blockquote>
              <p>C. Europa nu va fi făcut toate dintr-o dată sau în conformitate cu un plan unic. Aceasta va fi construită prin realizări concrete care vor genera mai intai o solidaritate de factori. Venirea impreuna a natiunilor europene necesita eliminarea opozitiei de veacuri a Frantei si Germanie. Orice actiune intreprinsa trebuie sa se refere in primul rand la aceste doua tari. - Declaratia Schuman, 9 mai 1950</p>
            </blockquote>



            <h3>Cerințe</h3>
            <ol>
				<li>Identificati, folosind sursa A, o instituție europeană propusă spre întemeiere.</li>
				<li>Mentionați, folosind sursa A, trei condiții propuse pentru funcționarea unei Europe unite.</li>
				<li>Descoperiți, folosind sursa B, un element de unitate și unul de diversitate în Europa.</li>
				<li>Interpretați, folosind sursa B, rolul economicului în dezvoltarea europeană. </li>
				<li>Analizați, folosind textul C, concepția privind dezvoltarea eurpeană propusă de Robert Schuman.</li>
			</ol>
			<br>
	<h3 class="ex-t">III. Ordonaţi cronologic:</h3> 
	 <div class="row col-md-12 drag" style="line-height: 1em;">
	<div  data-droppableTarget='2' class="ui-widget-content draggable">
		<p>a.Introducerea monedei unice Euro</p>
	</div>
	
	<div data-droppableTarget='4'  class="ui-widget-content draggable">
		<p>b.Aderarea Croaţiei la UE</p>
	</div>
	
	<div  data-droppableTarget='3' class="ui-widget-content draggable">
		<p>c.Aderarea României la UE</p>
	</div>
	
	<div data-droppableTarget='1' class="ui-widget-content draggable">
		<p>d.Tratatul de la Maastrich </p>
	</div>
	
	<div  data-droppableTarget='0' class="ui-widget-content draggable">
		<p>e.Tratatul de la Roma</p>
	</div>
	</div>
	
 <div class="row col-md-12 drop">
<div class="droppable ui-widget-header">
  <p>1957</p>
</div>

<div class="droppable ui-widget-header">
  <p>7 feb 1992</p>
</div>

<div class="droppable ui-widget-header">
  <p>1999</p>
</div>

<div class="droppable ui-widget-header">
  <p>Ianuarie 2007</p>
</div>

<div class="droppable ui-widget-header">
  <p>2013</p>
</div>
</div>
<br>
<h3 class="ex-t">IV. Alegeţi răspunsul corect pentru fiecare din afirmaţiile de mai jos:</h3> <!-- verify if correct -->
<ol>
<li>Fundamentele civilizaţiei europene sunt reprezentate de:</li>
<ol style="list-style-type:lower-alpha">
	<li><div class="verify">Uniunea Europeană, Consiliul Europei, Parlamentul European</div></li>
	<li><div class="verify">Carta Drepturilor Cetăţeanului, Tratatul de la Maastrich şi  Tratatul de la Lisabona</div></li>
	<li><div class="verify true">Cultura greacă, politica romană şi creştinismul</div></li>
</ol>
<li>Elementele etno-culturale şi lingvistice sunt dovadă de:</li>
<ol style="list-style-type:lower-alpha">
<li><div class="verify">Unitate europeană</div></li>
<li><div class="verify true">Divesitate europeană</div></li>
<li><div class="verify">Integrare europeană</div></li>
 </ol>
<li>La finele Celui De-al Doilea Război Mondial, ideea de unitate europeană este susţinută de oameni politici precum:</li>
<ol style="list-style-type:lower-alpha">
<li><div class="verify">Winston Churchill şi Margret Thatcher</div></li>
<li><div class="verify true">Jean Monnet şi Robert Schuman</div></li>
<li><div class="verify">Winston Churchill şi Robert Schuman</div></li>
</ol>
<li>Drapelul  Uniunii Europene este reprezentat de:</li>
<ol class="row" style="list-style-type:lower-alpha; ">

<li class="col-md-4"><div style="text-align:center; margin-right:20px;" class="verify true"><img style="max-width:90%;" src="images/euflag.png"></div></li>
<li class="col-md-4"><div style="text-align:center; margin-right:20px;" class="verify"><img style="max-width:90%;"  src="images/ukflag.png"></div></li>
<li class="col-md-4"><div style="text-align:center; margin-right:20px;"  class="verify"><img style="max-width:90%;"  src="images/usaflag.png"></div></li>
</ol>
</ol>




<style type="text/css">
	#rebus{
		font-size: 30px;
		margin-left:30px;
		
	}
	.square{
		height: 40px;
		width: 40px;
		text-align: center;
		text-transform: uppercase;
	}
	.hide {
		visibility: hidden;
		height: 40px;
		width: 40px;
	}
	.dark{
		background: #eee;
	}
	.desc{
		height: 40px;
		width: 40px;
		text-align: center;
		border-color: rgba(0, 0, 0, 0); 
		background-color: transparent;
	}
	</style>
<h3 class="ex-t">V. Rebus</h3>
<div id="container rebus">
<div ><input class="hide"><input class="hide"><input class="hide"><input class="hide"><input class="hide"><span><strong>&nbsp&nbspA</strong></span></div>

<div class="r"><input class="hide"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>

<div class="r"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>

<div class="r"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>

<div class="r"><input class="hide"><input class="hide"><input class="hide"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"></div>

<div class="r"><input class="hide"><input class="hide"><input class="hide"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>

<div class="r"><input class="hide"><input class="hide"><input class="hide"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"></div>

<div class="r"><input class="hide"><input class="hide"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>

<div class="r"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>


<div class="r"><input class="hide"><input class="hide"><input class="desc"><input class="square"><input class="square"><input class="square"><input class="square"><input class="square"></div>
<div ><input class="hide"><input class="hide"><input class="hide"><input class="hide"><input class="hide"><span><strong>&nbsp&nbspB</strong></span></div>
</div>
<ol>
		<li>Deviza UE este: "..... în diversitate" </li>
		<li>Stat european care a aderat alături de România în 2007.</li>
		<li>În anul 1987 a aderat la UE</li>
		<li>Moneda unică a UE</li>
		<li>În anul 1981 a aderat la UE</li>
		<li>Tratatul numit Piața Comună sau Comunitatea Economică Europeană s-a semnat la ........</li>
		<li>Tratatul semnat în 1992 de fromare UE s-a semnat la .......</li>
		<li>În 1995, la UE au aderat Finlanda, Suedia și .......</li>
		
		<li>Perfectiunea</li>
	</ol>
<p>Coloana A-B: Proes amplu economic, politic, social, prin care un stat aderă la UE</p>
<br>

</br>
</div>
<script type="text/javascript">

var KeyCodes = {KEY_PREVIOUS_ARROW: 37, KEY_NEXT_ARROW: 39, KEY_DOWN_ARROW: 40, KEY_UP_ARROW: 38, KEY_ENTER: 13};

var keypress = function(c,prev,next,up,down){
	c.onkeyup = function(event){
		if(event.keyCode == KeyCodes.KEY_PREVIOUS_ARROW && prev != null) {
			prev.focus();
			prev.select();
		}else if( event.keyCode == KeyCodes.KEY_NEXT_ARROW && next != null){
			next.focus();
			next.select();
		}else if(event.keyCode == KeyCodes.KEY_UP_ARROW && up != null){
			up.focus();
			up.select();
		}else if(event.keyCode == KeyCodes.KEY_DOWN_ARROW && down != null){
			down.focus();
			down.select();
		}else if(c.value.length == 0 && prev != null){
			prev.focus();
			prev.select();
		}else if (c.value.length == 1 && next != null) {
			next.focus();
			next.select();						
		}
	};
}
window.onload = function(){
	
	var t=document.getElementsByClassName("verify");
	for(var i=0;i<t.length;i++)
	{
		t[i].onclick=function(){
			if (this.classList.contains(true))  
			this.style.backgroundColor = "#5dfc30";
		else
			this.style.backgroundColor = "#ed2e2e";
		}
		
	}
	//Rebus - Exercitiul V
		var rs = document.getElementsByClassName('r');
		for (var i = 0; i < rs.length; i++) {
			var inputArray = rs[i].childNodes;
			/*
			Sunt selectate toate inputurile de pe fiecare rand (element div)
				celui de-al 6-lea element (al 5-lea cand numaratoarea incepe de la 0)
				i se atribui clasa 'dark', ce va marca linia A-B pe care se afla raspunsul
			*/
			for (var j = 0; j < inputArray.length; j++) {
				if (j == 5) {
					inputArray[j].setAttribute('class', 'square dark');
				}
				inputArray[j].setAttribute('data-pos',j);
			}
			/*
				Se selecteaza doar acele inputuri care au clasa 'square'
				fiecare e setat sa aiba lungimea maxima de caractere acceptate: 1;
				fiecare primeste un comportament la apasarea unei taste:
				astfel inputul urmator celui in care s-a tastat va intra in focus atunci cand lungimea textului e 1
				sau se va trece la inputul anterior cand lugimea textului e 0, adica a fost apasata tasta BACKSPACE sau DELETE pt stergere.
				Acest lucru e realizat de functia: keypress(c,prev,next); 
					c    - input curent in focus
					next - inputul urmator
					prev - inputul anterior

				Variabila next primeste valoarea obiect a urmatorului input din rand sau 
				daca focusul e pozitionat pe ultimul input din rand, variabila next va lua valoarea primului camp input de pe randul urmator
				(daca exista un rand urmator)

				Variabila prev primeste valoarea obiect a inputului anterior de pe acelasi rand, sau de pe randul urmator 
				(daca exista un rand anterior)
			*/
			inputArray = rs[i].getElementsByClassName('square');
			for (var j = 0; j < inputArray.length; j++) {
				inputArray[j].setAttribute('maxlength',1);
				if (j+1 >= inputArray.length) {
					if (i+1 < rs.length) {
						next = rs[i+1].getElementsByClassName('square')[0];
					}
				}else{
					var next = inputArray[j+1];
				}
				if (j-1 < 0 && i > 0) {
					if (i-1 >= 0) {
						var temp = rs[i-1].getElementsByClassName('square');
						prev = temp[temp.length-1];
					}
				}else{
					var prev = inputArray[j-1];
				}
				var cPos = inputArray[j].getAttribute('data-pos');
				if (i > 0) {
					var up = rs[i-1].childNodes[cPos];
				}
				if (i < rs.length -1) {
					var down = rs[i+1].childNodes[cPos];
				}
				keypress(inputArray[j],prev,next,up,down);
			}
		}
		/* 
			Se seteaza toate inputurile ce au clasa 'desc' ca disabled(adica se dezactiveaza) si se autogenereaza cate un numar
			Acest numar reprezinta numarul randului/intrebarii/ghicitorii

		*/
		var desc = document.getElementsByClassName('desc');
		for (var i = 0; i < desc.length; i++) {
			desc[i].setAttribute('disabled','disabled');
			desc[i].value = i+1;
		}
}

function verifyRebus(){
	var solution =["i","n","t","e","g","r","a","r","e"];
	var rows = $('.r');
	var correct = true;
	var eLength = true;
	for(var i = 0; i < rows.length; i++){
		var child = rows.eq(i).children('input').eq(5).val(); 
		if(child.length == 0){
			eLength = false;
		}else if(child.toLowerCase() != solution[i]){
			correct = false;
		}
	}
	if(correct && eLength){
		rows.find('.dark').css('background','#5dfc30');
	}else if(!correct && eLength){
		rows.find('.dark').css('background','#ed2e2e');
	}
}
var solutionsExI = ["al doilea război mondial","unitate","turcia","strasbourg","marea britanie"];
var solutionExtra = 'al doilea razboi mondial';
$(window).ready(function(){
	$('.square').keyup(function(){
		verifyRebus();
	});
	$('.ex1').keyup(function(event){
		var pos = $('.ex1').index(this);
		if (event.keyCode == KeyCodes.KEY_ENTER) {
				if($(this).val().toLowerCase() == solutionsExI[pos] || ($(this).val().toLowerCase() == solutionExtra && pos == 0)){
					$(this).css('background','#5dfc30');
				}else{
					$(this).css('background','#ed2e2e');
				}
		}
	});
});


	</script>
	
	
	
<?php include("includes/footer.html");?>
</body>
</html>