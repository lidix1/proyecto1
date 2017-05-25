<?php include('head.html') ?>
<?php include('header.html') ?>

<section class="headerblog" >
	<div class="container">
		<h1>Galería</h1>
		<div class="">	
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="inicio.php"> Inicio </a></li>
				<li class="breadcrumb-item">Galería</li>
			</ul>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="galeria">
			<a href="img/galeria/imagen1.jpg" title="Nombre de la imagen" class="galeria__item">
				<img src="img/galeria/imagen1.jpg" title="Nombre de la imagen" alt="Nombre de la imagen">
			</a>
			<a href="img/galeria/imagen2.jpg" class="galeria__item">
				<img src="img/galeria/imagen1.jpg" title="Nombre de la imagen" alt="Nombre de la imagen">
			</a>
			<a href="img/galeria/imagen3.jpg" class="galeria__item">
				<img src="img/galeria/imagen1.jpg" title="Nombre de la imagen" alt="Nombre de la imagen">
			</a>
			<a href="img/galeria/imagen1.jpg" class="galeria__item">
				<img src="img/galeria/imagen1.jpg" title="Nombre de la imagen" alt="Nombre de la imagen">
			</a>
			<a href="img/galeria/imagen2.jpg" class="galeria__item">
				<img src="img/galeria/imagen1.jpg" title="Nombre de la imagen" alt="Nombre de la imagen">
			</a>
			<a href="img/galeria/imagen3.jpg" class="galeria__item">
				<img src="img/galeria/imagen1.jpg" title="Nombre de la imagen" alt="Nombre de la imagen">
			</a>
		</div>
		
	</div>
</section>

<?php include('footer.html') ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.galeria').each(function() { // the containers for all your galleries
		    $(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		          enabled:true
		        }
		    });
		});			 
	});
</script>

  </body>
</html>