<?php include('head.html') ?>
<?php include('header.html') ?>

<section class="headerblog" >
	<div class="container">
		<h1>Contacto</h1>
		<div class="">	
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="inicio.php"> Inicio </a></li>
				<li class="breadcrumb-item">Contacto</li>
			</ul>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<div class="infoempresa">
					<h3 class="infoempresa__titulo">Datos de la empresa</h3>
					<p>Comunícate con nosotros mediante los diferentes canales.</p>
					<ul class="infoempresa__lista">
						<li><span class="glyphicon glyphicon-home "></span> Av. República de Panamá 1250</li>
						<li><span class="glyphicon glyphicon-envelope"></span> empresa@gmail.com</li>
						<li><span class="glyphicon glyphicon-earphone "></span> (01) - 235689</li>
					</ul>
					<div class="social">
					  <p>Encuéntranos en nuestras redes sociales.</p>
					  <a href="#" class="link facebook" target="_blank"><span class="fa fa-facebook-square"></span></a>
					  <a href="#" class="link twitter" target="_blank"><span class="fa fa-twitter"></span></a>
					  <a href="#" class="link google-plus" target="_blank"><span class="fa fa-google-plus-square"></span></a>
					</div>					
				</div>			
			</div>
			<div class="col-sm-12 col-md-8">
				<div class="">
					<h3 class="infoempresa__titulo">Escríbenos tu consulta</h3>
					<form id="miformulario">
						<div class="row">
							<div class="col-sm-12 col-md-6" >
							  <div class="form-group">
							    <label>Nombres y apellidos</label>
							    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres completos">
							  </div>
							</div>
							<div class="col-sm-12 col-md-6" > 
							  <div class="form-group">
							    <label>Teléfono</label>
							    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono celular">
							  </div>
							</div>
							<div class="col-sm-12 col-md-6" >   
							  <div class="form-group">
							    <label>Correo</label>
							    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico">
							  </div>
							</div>  
							<div class="col-sm-12 col-md-6" > 
							  <div class="form-group">
							    <label>Asunto</label>
							    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto">
							  </div>
							</div>  
							<div class="col-sm-12" >   
							  <div class="form-group">
							  	<label>Mensaje</label>
							  	<textarea class="form-control" placeholder="Deja aquí tu mensaje" rows="5"></textarea>
							  </div>
							</div>  
							<div class="col-sm-12" > 
							  <div class="checkbox">
							    <label>
							      <input type="checkbox"> Acepto las políticas 
							    </label>
							  </div>
							</div>
							<div class="col-sm-12 boton-formulario" >   
							  <button class="btn btn-primary">Enviar mi consulta</button>
							</div>
						</div>	  
					</form>			
				</div>
			</div>
		</div>
	</div>	
</section>

<section id="map" class="mapa"></section>

<?php include('footer.html') ?>

<script src="js/jquery.validate.min.js"></script>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyDoIcfK6UNd26QjpPHVOrU0SVSR0ZRH3Zg&callback=initMap"></script>

<script type="text/javascript">
	$("#miformulario").validate({
		rules: {
			nombre: "required",


			telefono: {
				required: true,
				number: true
			},
			
			correo: {
				required: true,
				email: true
			},

			asunto: {
				required: true,
				minlength: 8	
			}
		},
		messages: {
			nombre: "Ingresa tu nombre",


			telefono: {
				required: "Ingrese su telefono",
				number: "ingresar sólo números"
			},

			correo: {
				required: "Ingresa tu correo",
				email: "Correo incorrecto"
			},

			asunto: {
				required: "Campo obligatorio",
				minlength: "Escribir mínimo 5 caracteres"
			}
		}
	});	

//Script para mapa

function initialize() {
    var loc, map, marker, infobox;
    
    loc = new google.maps.LatLng(-12.0977105,-77.0307775);
    
    map = new google.maps.Map(document.getElementById("map"), {
         zoom: 15,
         scrollwheel: false,
         center: loc,
         
         mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    
    marker = new google.maps.Marker({
        map: map,
        position: loc,
        visible: true,
        //icon: '< ?php bloginfo( 'template_url' ); ?>/img/icomap.png', 
        icon: './img/icomap.png', 
        animation: google.maps.Animation.DROP
    });
    var styles = [
    {
    stylers: [
    { saturation: 10 },
    { hue: "#3B5998" },
    { lightness: 10 },
    { gamma: 1.51 }
    ]
    },
    {
    featureType: "poi.business",
    elementType: "all",
    stylers: [
    { visibility: "off" }
    ]
    },
    {
    featureType: "road",
    elementType: "labels",
    stylers: [
    { visibility: "simplified" }
    ]
    }
    
    ]; 
    map.setOptions({styles: styles});
       
    google.maps.event.addListener(marker, 'click', function() {
        infobox.open(map, this);
        map.panTo(loc);
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
 
</script>
  </body>
</html>