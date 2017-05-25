<?php include('head.html') ?>
<?php include('header.html') ?>

<section class="headerblog" >
	<div class="container">
		<h1>Nombre artículo</h1>
		<div class="">	
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="inicio.php"> Inicio </a></li>
				<li class="breadcrumb-item"><a href="blog.php"> Blog </a></li>
				<li class="breadcrumb-item">Artículo</li>
			</ul>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<article class="articulo">
					<h2 class="articulo__titulo">Drop and Drug Your Blog Title Name Here</h2>
					<span>23 de Mayo del 2017</span>
					<img src="img/blog/post.jpg" class="articulo__imagen" alt="Drop and Drug Your Blog Title Name Here" title="Drop and Drug Your Blog Title Name Here">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on looks reasonable. The generated Lorem Ipsum is therefore always free from words etc.</p>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on looks reasonable. The generated Lorem Ipsum is therefore always free from words etc.</p>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on looks reasonable. The generated Lorem Ipsum is therefore always free from words etc.</p>
				</article>
				<div>
					<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>	
					<div class="g-plus" data-action="share"></div>
					<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-size="large">Twittear</a> 

				</div>
				<div>
			
					<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="2"></div>		

				</div>				
			</div>
			<div class="col-xs-12 col-md-4">
				<aside>
					<div class="panel">
						<h3 class="panel__titulo panel__titulo--borde">Categorías</h3>
						<ul class="panel__lista">
							<li><a href="#">Estrategias</a></li>
							<li><a href="#">Administración de redes sociales</a></li>
							<li><a href="#">Campaña de redes sociales</a></li>
							<li><a href="#">Diseño y Branding</a></li>
							<li><a href="#">Campaña de redes sociales</a></li>
							<li><a href="#">Campaña de redes sociales</a></li>
							<li><a href="#">Campaña de redes sociales</a></li>
							<li><a href="#">Campaña de redes sociales</a></li>
						</ul>
					</div>	
					<div class="panel">
						<h3 class="panel__titulo panel__titulo--borde">Últimas noticias</h3>

						<div class="lista-noticia">
							<a href="blog-detalle.php" class="lista-noticia__item">
								<img src="img/blog/tumb.jpg">
								<h4>Título de noticia</h4>
								<span>23 de Mayo del 2017</span>
							</a>
						</div>
						<div class="lista-noticia">
							<a href="blog-detalle.php" class="lista-noticia__item">
								<img src="img/blog/tumb.jpg">
								<h4>Título de noticia</h4>
								<span>23 de Mayo del 2017</span>
							</a>
						</div>
						<div class="lista-noticia">
							<a href="blog-detalle.php" class="lista-noticia__item">
								<img src="img/blog/tumb.jpg">
								<h4>Título de noticia</h4>
								<span>23 de Mayo del 2017</span>
							</a>
						</div>
						<div class="lista-noticia">
							<a href="#" class="lista-noticia__item">
								<img src="img/blog/tumb.jpg">
								<h4>Título de noticia</h4>
								<span>23 de Mayo del 2017</span>
							</a>
						</div>
					</div>

					<div class="fb-follow" data-href="https://www.facebook.com/zuck" data-layout="button" data-size="large" data-show-faces="true"></div>	

				</aside>
			</div>
		</div>	
	</div>
</section>




<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'es'}
</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
