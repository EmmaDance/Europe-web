 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cetățean european</title>
   <?php include("includes/header.html");?>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */


.hourglass {
margin:20px auto;
  height: 200px;
  width: 100px;
  animation: flip 6s ease infinite;
}

.t, .bottom {
  background-color: rgba(94, 91, 66, 0.15);
  background-image: linear-gradient(#e6de83, #ac843f);
  background-size: 100px 100px;
  background-repeat: no-repeat;
  width: 100px;
  height: 100px;
}

.t {
  background-position: 0 0;
  animation: t-do 6s ease infinite;
  -webkit-clip-path: polygon(0% 0%, 100% 0%, 50% 100%);
}

.bottom {
  background-position: 0 100px;
  animation: bottom-do 6s ease infinite;
  -webkit-clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
}
.bottom:after {
  content: "";
  position: absolute;
  width: 2px;
  height: 100px;
  left: 49px;
  background-image: linear-gradient(#EFECCA, transparent);
}

@keyframes t-do {
  95%, 100% {
    background-position: 0 100px;
  }
}
@keyframes bottom-do {
  95%, 100% {
    background-position: 0 0;
  }
}
@keyframes flip {
  0%, 95% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(180deg);
  }
}

    </style>
  </head>
<body>
<?php include("includes/navigation.html");?>

<div class="main home">
	<div class="container">
	<h1 class="title">Cetățean european</h1>
	<br>
	<div class="row">
	<h3>Ce înseamnă să fii cetăţean european? </h3>

	<p class="lead">A fi cetăţean european înseamnă a avea cetăţenia Uniunii Europene. </p>
	<div class="col-md-6">

	<p>Cetăţenia europeană <i style="color:#b5502e;" class="fa fa-question-circle" aria-hidden="true" bubble-text='Iniţial a fost introdus termenul de « Europa Cetăţenilor'></i> a fost instituită în 1992 prin Tratatul Uniunii Europene (Tratatul de la Maastrich). Ca şi cetăţenia unui stat, cetăţenia europeană conferă un anumit număr de drepturi deţinătorilor ei: </p>
	<ul>
		<li>libera circulaţie a persoanelor pe teritoriul tuturor statelor care fac parte din Uniunea Europeană; </li>
		<li>dreptul de a vota şi de a candida la alegerile Parlamentului European şi la alegerile municipale în statul de rezidenţă atunci când acesta nu este cel al naţionalităţii; </li>
		<li>a putea beneficia, în caz de nevoie, de o protecţie diplomatică şi consulară din partea unui alt stat membru al Uniunii în state terţe; </li>
		<li>a exercita dreptul la petiţie şi a apela la mediatorul european.</li>
		<li>Dreptul la nedsicriminare, egalitatea de sex, religie, etnie, etc.</li>
		<li>Dreptul la informare  <i style="color:#b5502e;" class="fa fa-question-circle" aria-hidden="true" bubble-text='« Europa Direct » - serviciu lansat de Comisia Europeană în scopul informării cetăţenilor asupra drepturilor lor'></i></li>
	</ul>
	</div>
	<div class="col-md-6">
	<img style="max-width:100%;" src="images/cetatean.jpg">
	</div>
	<br>
	<h3>Cum devii cetăţean european ?</h3>
	<p>Cetăţenia europeană este direct legată de deţinerea unei naţionalităţi a unui stat al Uniunii. Astfel, faptul de a fi cetăţean german, ceh, polonez, francez sau român conferă în mod acestora, cetăţenia Uniunii şi drepturile şi îndatoririle care îi sunt anexate. În alţi termeni, faptul de a fi european nu elimină cetăţenia unui stat.</p>
	<br>


	 <h3 style="text-align:center; width:100%">Evoluția ideii de cetățean în antichiate</h3><br>


  <div  style="cursor:pointer; margin-top:100px;"  class='hourglass'>
  <div  data-toggle="popover" data-placement="right"  data-content="Cetățenia în Roma antică reprezenta un statut social privilegiat în raport cu legea, dreptul la proprietate și guvernare, acordat doar unor persoane. Un cetățean roman se bucura de toate beneficiile ce derivau din statutul său, inclusiv de protecția statului. El putea fi privat de cetățenie doar în situații excepționale. Titlul de cetățean se acorda bărbaților; femeile, deși aveau un statut social respectat, nu aveau drept de vot și de a deține funcții publice.
"  class='t'><i style="color:#b5502e; position:relative; top:30px;left:40%;" class="fa fa-question-circle" aria-hidden="true" bubble-text='După secolul al II-lea î.Hr., toga a fost un articol de îmbrăcăminte purtat exclusiv de bărbați, și numai cetățenilor romani li sa permitea să poarte toga. '></i></div>
  <div  data-toggle="popover" data-placement="left"  data-content="Noţiunea de cetăţean în Grecia Antică, nu se defineşte în raport cu apartenenţa unui om la cetate, unde participă la viaţa economică şi socială, ci prin modul în care se implică în problemele corpului politic, în „participarea la justiţie şi putere”, cum spunea Aristotel." class='bottom'></div>
<i style="color:#b5502e; position:relative; top:-50px;left:40%;" class="fa fa-question-circle" aria-hidden="true" bubble-text='În greceşte, zoon politikon = animal social (şi nu animal politic! - care deci ar face politică; expresia "politikon" vine de la cuvântul "polis" care înseamnă cetate'></i></div>
<div style="height:450px;"></div>
	</div><!-- container -->

	</div><!-- home -->


<?php include("includes/footer.html");?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</body>
</html>
