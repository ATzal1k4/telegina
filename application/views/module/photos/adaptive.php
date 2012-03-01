<!DOCTYPE html>
<html lang="ru">
    <head>
        <title><?= $album->title; ?></title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <link rel="stylesheet" type="text/css" href="/media/galleries/adaptive/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/media/galleries/adaptive/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/media/galleries/adaptive/css/elastislide.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
		<noscript>
		<style>
			.es-carousel ul{
				display:block;
			}
		</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
		<div class="rg-image-wrapper">
			{{if itemsCount > 1}}
			<div class="rg-image-nav">
				<a href="#" class="rg-image-nav-prev">Предыдущее изображение</a>
				<a href="#" class="rg-image-nav-next">Следующее изображение</a>
			</div>
			{{/if}}
			<div class="rg-image"></div>
			<div class="rg-loading"></div>
			<div class="rg-caption-wrapper">
				<div class="rg-caption" style="display:none;">
					<p></p>
				</div>
			</div>
		</div>
	</script>
</head>
<body>
	<div class="container">

		<div class="content">
			<h1><?=$album->title ?> <span><?=$album->description ?></span></h1>
			<div id="rg-gallery" class="rg-gallery">
				<div class="rg-thumbs">
					<!-- Elastislide Carousel Thumbnail Viewer -->
					<div class="es-carousel-wrapper">
						<div class="es-nav">
							<span class="es-nav-prev">Предыдущее</span>
							<span class="es-nav-next">Следующее</span>
						</div>
						<div class="es-carousel">
							<ul>

								<? foreach ($photos as $photo): ?>
									<li><a href="#"><img src="<?= Entity::$uploadDirectory ?>small_<?= $photo->src ?>" data-large="<?= Entity::$uploadDirectory ?>full_<?= $photo->src ?>" alt="<?=$photo->title ?>" data-description="<?= $photo->description ?>" /></a></li>
								<? endforeach; ?>

							</ul>
						</div>
					</div>
					<!-- End Elastislide Carousel Thumbnail Viewer -->
				</div><!-- rg-thumbs -->
			</div><!-- rg-gallery -->
		</div><!-- content -->
	</div><!-- container -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="/media/galleries/adaptive/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="/media/galleries/adaptive/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/media/galleries/adaptive/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="/media/galleries/adaptive/js/gallery.js"></script>
</body>
</html>