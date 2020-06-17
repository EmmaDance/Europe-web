 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Institutii</title>
   <?php include("includes/header.html");?>
    <link rel="stylesheet" href="css/styleMap.css">
  </head>
<body>

<?php include("includes/navigation.html");?>

<div class="main home">
	<div class="container">
	<h1 class="title">Instituții</h1>

	<div class="distribution-map">

    <img src="images/eu-map.jpg">
    <!--In the original application, these points are injected with Javascript, but ideally, they'd be injected with a haml loop. Because I'm hardcoding content, I'm presenting this as prerendered HTML-->
     <button class="map-point" style="top:55.5%;left:33%;border: 4px solid #3ed830;">
        <div class="content">
            <div class="centered-y">
                <h3>Parlamentul European<br><span class="small">Bruxelles, Belgia</span></h3>
				<img src="images/parlament-bruxelles.jpg" style="max-width:80%;">
            </div>
        </div>
    </button>
    <button class="map-point" style="top: 61.5%;left: 36.5%;border: 4px solid #3ed830;">
        <div class="content">
            <div class="centered-y">
                <h3>Parlamentul European<br><span class="small">Strasbourg, Franța</span></h3>
               <img src="images/parlament.jpg" style="max-width:80%;">
            </div>
        </div>
    </button>
    <button class="map-point" style="top: 57.5%;left: 35.5%;border: 4px solid #3ed830;">
        <div class="content">
            <div class="centered-y">
                <h3>Parlamentul European<br><span class="small">Luxemburg, Luxemburg</span></h3>
            <img src="images/parlament-luxemburg.jpg" style="max-width:75%;">
            </div>
        </div>
    </button>
    <button class="map-point" style="top: 56%;left: 40.5%;border: 4px solid #f7f67f;">
        <div class="content">
            <div class="centered-y">
                <h3>Banca Centrală Europeană<br><span class="small">Frankfurt pe Main, Germania</span></h3>
                <img src="images/banca.jpg" style="max-width:80%;">
            </div>
        </div>
    </button>
    <button class="map-point" style="top:54%;left:34.5%;border: 4px solid #ff3434">
        <div class="content">
            <div class="centered-y">
               <h3>Comisia Europeană<br><span class="small">Bruxelles, Belgia</span></h3>
			   <img src="images/comisia.jpg" style="max-width:80%;">
            </div>
        </div>
    </button>
    <button class="map-point" style="top:54.5%;left:32.5%">
        <div class="content">
            <div class="centered-y">
                <h3>Consiliul European<br><span class="small">Bruxelles, Belgia</span></h3>
				<img src="images/consiliul.jpg" style="max-width:80%;">
            </div>
        </div>
    </button>
</div>

	<div class="row">
		<div class="col-md-3 col-sm-6">
		<a style="width:100%; padding:0.5rem; background-color:#3ed830; border-color:#3ed830;" class="btn btn-md btn-custom" role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1">Parlamentul European</a>
					<div class="collapse" id="collapse1">
						<div style="overflow-y:scroll; max-height:450px;" class="card">
							<div class="card-block">
								 <p>Parlamentul European (abreviat Europarl sau PE) este o institutie legislativa a Uniunii Europene (UE) aleasa prin scrutin direct odata la cinci ani. Desi Parlamentul European are puterea legislativa pe care Consiliul si Comisia nu o poseda, acesta nu are controlul formal asupra initiativei legislative, cum de altfel majoritatea parlamentelor nationale al membrilor Uniunii o au.</p>

							</div>
						</div>
					</div>
					<br></br>
		</div>

		<div class="col-md-3 col-sm-6">
		<a style="width:100%; padding:0.5rem;  background-color:#7fcff7; border-color:#7fcff7;" class="btn btn-md btn-custom" role="button" data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">Consiliul European</a>
					<div class="collapse" id="collapse3">
						<div style="overflow-y:scroll; max-height:450px;" class="card">
							<div class="card-block">
								 <p>Consiliul European este o institutie a Uniunii Europene. Este format din liderii de stat sau de guvern ai statelor membre ale Uniunii, Presedintele Comisiei Europene si Presedintele Consiliului European, actualmente Donald Tusk. Înaltul Reprezentant al Uniunii pentru Afaceri Externe si Politica de Securitate, actualmente Federica Mogherini, participa de asemenea la întruniri fara drept de vot.<br>  Desi Consiliul European nu are nici o putere legislativa oficiala, aceasta este învestit în temeiul Tratatului de la Lisabona, cu definirea "directiilor si prioritatilor politicilor generale" ale Uniunii. Este organismul strategic al Uniunii (cel care rezolva crizele), actionând ca o presedintie colectiva a UE.
Reuniunile Consiliului European sunt prezidate de catre presedintele sau si au loc cel putin de 4 ori pe an, de obicei, în cladirea Justus Lipsius, sediul central al Consiliului Uniunii Europene din Bruxelles.
Consiliul European a fost înfiintat ca un organism informal în 1961, a devenit o institutie oficiala a UE în 2009, când Tratatul de la Lisabona a intrat în vigoare.</p>

							</div>
						</div>
					</div>
					<br></br>
		</div>

		<div class="col-md-3 col-sm-6">
		<a style="width:100%; padding:0.5rem;background-color:#ff3434; border-color:#ff3434;" class="btn btn-md btn-custom" role="button" data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4">Comisia Europeana</a>
					<div class="collapse" id="collapse4">
						<div style="overflow-y:scroll; max-height:450px;" class="card">
							<div class="card-block">
								<p> Comisia Europeana este organul executiv al Uniunii Europene. Comisia este responsabila pentru întocmirea propunerilor legislative, implementarea deciziilor si apararea tratatelor Uniunii precum si coordonarea activitatilor curente ale Uniunii. Comisia functioneaza ca un cabinet de guvern, format din 28 de membri cunoscuti ca „comisari”. Fiecare stat membru al Uniunii Europene are un membru în Comisie, iar acestia au obligatia de a reprezenta interesele comune ale UE si nu interesele nationale ale statului din care face parte. Unul dintre cei 28 este Presedintele Comisiei.</p>

							</div>
						</div>
					</div>
					<br></br>
		</div>

		<div class="col-md-3 col-sm-6">
		<a style="width:100%; padding:0.5rem; background-color:#f7f67f; border-color:#f7f67f; color:#000" class="btn btn-md btn-custom " role="button" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">Banca Centrala Europeana</a>
					<div class="collapse" id="collapse2">
						<div style="overflow-y:scroll; max-height:450px;" class="card">
							<div class="card-block">
								<p> Banca Centrala Europeana (BCE) este banca centrala a Uniunii Europene, cu functia de administrare a politicii monetare în cele 19 tari care folosesc euro ca moneda. Isi are sediul în Frankfurt am Main.
Banca a fost înfiintata la 1 iunie 1998, ca urmare a Tratatului de la Amsterdam. Actualul presedinte al BCE este Mario Draghi. BCE colaboreaza cu bancile centrale din toate cele 28 de state membre ale Uniunii Europene. Impreuna, formeaza Sistemul European al Bancilor Centrale (SEBC).</p>

							</div>
						</div>
					</div>
					<br></br>
		</div>

	</div>
	</div><!-- container -->

	</div><!-- home -->


<?php include("includes/footer.html");?>


</body>
</html>
