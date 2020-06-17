<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Aplicații - Diversitate</title>
<?php include("includes/header.html");?>
 <link href="css/styleWh.css" rel="stylesheet">
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
	<h1 class="title">Aplicații - Diversitate</h1>
	<h3>1. Discutați temele propuse:</h3>
	<div class="row">
	<div class="col-md-6">
		<div id="wrapper">
            
        <div id="wheel">
            <div id="inner-wheel">
                <div class="sec"><span class="fa fa-comments"></span></div>
                <div class="sec"><span class="fa fa-flag"></span></div>
                <div class="sec"><span class="fa fa-group"></span></div>
                <div class="sec"><span class="fa fa-picture-o"></span></div>
                <div class="sec"><span class="fa fa-euro"></span></div>
                <div class="sec"><span class="fa fa-pencil"></span></div>
            </div>       
           
            <div id="spin">
                <div id="inner-spin"></div>
            </div>
            
            <div id="shine"></div>
        </div>
        
        
        <div id="txt"></div>
  </div>
	</div>
	<div class="col-md-6" >
	 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="font-weight:bold;">
	 
  <div class="panel panel-default" style="color:#16a085;">
    <div class="panel-heading" role="tab" id="headingTwoa">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwoa" aria-expanded="false" aria-controls="collapseTwoa">
        <i  style="color:#16a085; font-size:2em;" class="fa fa-comments" aria-hidden="true"></i>
        </a>
      </h4>
    </div>
    <div id="collapseTwoa" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoa">
      <div class="panel-body" style="color:#16a085">
        Diversitatea lingvistică este o sursă de conflicte; ar trebui să existe o singura limbă, universală, sau cel puțin o limbă de comunicare auxiliara utilizată pe întregul glob?
      </div>
    </div>
  </div>

  <div class="panel panel-default"  style="color:#c0392b;">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i  style="color:#c0392b; font-size:2em;" class="fa fa-pencil" aria-hidden="true"></i>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body" style="color:#c0392b">
       Este educația suport sau limită a diversității europene?
      </div>
    </div>
  </div>

  <div class="panel panel-default"  style="color:#d35400;">
    <div class="panel-heading" role="tab" id="headingTwob">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwob" aria-expanded="false" aria-controls="collapseTwob">
           <i   style="color:#d35400; font-size:2em;" class="fa fa-euro" aria-hidden="true"></i>
        </a>
      </h4>
    </div>
    <div id="collapseTwob" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwob">
      <div class="panel-body" style="color:#d35400;">
       Ce impact a avut antagonismul sistemelor politice postbelice (democrație/comunism) asupra evoluției economiei europene?
      </div>
    </div>
  </div>

  <div class="panel panel-default " style="color:#f39c12;">
    <div class="panel-heading" role="tab" id="headingTwoc">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwoc" aria-expanded="false" aria-controls="collapseTwoc">
          <i style="color:#f39c12; font-size:2em;" class="fa fa-photo" aria-hidden="true"></i> 
        </a>
      </h4>
    </div>
    <div id="collapseTwoc" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoc">
      <div class="panel-body">
      Poate globalizarea să genereze o uniformizare sau o diversificare a culturilor naționale?
      </div>
    </div>
  </div>


  <div class="panel panel-default " style="color:#34495e;">
    <div class="panel-heading" role="tab" id="headingTwo2">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
          <i style="color:#34495e; font-size:2em;" class="fa fa-group" aria-hidden="true"></i>
        </a>
      </h4>
    </div>
    <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
      <div class="panel-body">
     De ce sistemul ideologic socialist a fost o limită a diversității sociale?
      </div>
    </div>
  </div>

   <div class="panel panel-default" style="color:#2980b9;" >

    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <i style="color:#2980b9; font-size:2em;"  class="fa fa-flag" aria-hidden="true"></i>
        </a>
      </h4>
    </div>

    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
      Care va fi viitorul unității europene după Brexit?
      </div>
    </div>

  </div>

</div>
</div>
</div> <!-- row -->

 

	<h3>2. Răspundeți la următoarele întrebări/probleme:</h3>
<ul>
	
	<li>Care sunt diferențele între monarhie și republică? Dar asemănările? Aduceți argumente.</li>
	<li>Există o formă de organizare politică statală "perfectă"/cea mai bună?</li>
	<li>Care credeți că ar fi impactul aderării Turciei la UE? Ar trebui Europa să rămână creștină?</li>
</ul>
	<br>

	
    <script src="js/index.js"></script>
<?php include("includes/footer.html");?>
</body>
</html>