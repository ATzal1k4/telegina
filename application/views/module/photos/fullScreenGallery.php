<!DOCTYPE html>
<html>
    <head>
        <title><?= $album->title ?></title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="/media/galleries/fullScreenGallery/css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css' />
    </head>
    <body>
		<div>
			<a href="/albums/">Назад к списку альбомов</a>
		</div>
		<div id="tf_loading" class="tf_loading"></div>
		<div id="tf_bg" class="tf_bg">

			<? foreach ($photos as $photo): ?>
				<img src="<?= Entity::$uploadDirectory ?><?= $photo->src ?>" alt="<?= $photo->title ?>" longdesc="<?= Entity::$uploadDirectory ?>small_<?= $photo->src ?>" />
			<? endforeach; ?>
			<div class="tf_pattern"></div>
		</div>
		<div id="tf_content_wrapper" class="tf_content_wrapper">
			<?
			$count = 0;
			?>
			<? foreach ($photos as $photo): ?>
				<div class="tf_content" id="content<?= $photo->pk(); ?>" <? if ($count == 0): ?>style="display:block;"<? endif; ?>>
					<h2><?= $photo->title ?></h2>
					<p><?= $photo->description ?></p>
				</div>
				<? $count++; ?>
			<? endforeach; ?>
			<? unset($count); ?>
		</div>

		<div id="tf_thumbs" class="tf_thumbs">
			<span id="tf_zoom" class="tf_zoom"></span>
			<img src="/media/uploads/small_<?= $photos[0]->src ?>" alt="<?= $photos[0]->title ?>"/>
		</div>

		<div id="tf_next" class="tf_next"></div>
		<div id="tf_prev" class="tf_prev"></div>


		<!-- The JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/media/galleries/fullScreenGallery/js/jquery.flip.js"></script>
		<script type="text/javascript" src="/media/galleries/fullScreenGallery/js/jquery-mousewheel-3.0.4/jquery.mousewheel.min.js"></script>
        <script type="text/javascript">
			/*
			the images preload plugin
			 */
			(function($) {
				$.fn.preload = function(options) {
					var opts 	= $.extend({}, $.fn.preload.defaults, options);
					o			= $.meta ? $.extend({}, opts, this.data()) : opts;
					var c		= this.length,
					l		= 0;
					return this.each(function() {
						var $i	= $(this);
						$('<img/>').load(function(i){
							++l;
							if(l == c) o.onComplete();
						}).attr('src',$i.attr('src'));	
					});
				};
				$.fn.preload.defaults = {
					onComplete	: function(){return false;}
				};
			})(jQuery);
		</script>
		<script type="text/javascript">
			$(function() {
				var $tf_bg			= $('#tf_bg'),
				$tf_bg_images		= $tf_bg.find('img'),
				$tf_bg_img			= $tf_bg_images.eq(0),
				$tf_thumbs			= $('#tf_thumbs'),
				total				= $tf_bg_images.length,
				current				= 0,
				$tf_content_wrapper	= $('#tf_content_wrapper'),
				$tf_next			= $('#tf_next'),
				$tf_prev			= $('#tf_prev'),
				$tf_loading			= $('#tf_loading');
				
				//preload the images				
				$tf_bg_images.preload({
					onComplete	: function(){
						$tf_loading.hide();
						init();
					}
				});
				
				//shows the first image and initializes events
				function init(){
					//get dimentions for the image, based on the windows size
					var dim	= getImageDim($tf_bg_img);
					//set the returned values and show the image
					$tf_bg_img.css({
						width	: dim.width,
						height	: dim.height,
						left	: dim.left,
						top		: dim.top
					}).fadeIn();
				
					//resizing the window resizes the $tf_bg_img
					$(window).bind('resize',function(){
						var dim	= getImageDim($tf_bg_img);
						$tf_bg_img.css({
							width	: dim.width,
							height	: dim.height,
							left	: dim.left,
							top		: dim.top
						});
					});
				
					//expand and fit the image to the screen
					$('#tf_zoom').live('click',
					function(){
						if($tf_bg_img.is(':animated'))
							return false;
				
						var $this	= $(this);
						if($this.hasClass('tf_zoom')){
							resize($tf_bg_img);
							$this.addClass('tf_fullscreen')
							.removeClass('tf_zoom');
						}
						else{
							var dim	= getImageDim($tf_bg_img);
							$tf_bg_img.animate({
								width	: dim.width,
								height	: dim.height,
								top		: dim.top,
								left	: dim.left
							},350);
							$this.addClass('tf_zoom')
							.removeClass('tf_fullscreen');	
						}
					}
				);
					
					//click the arrow down, scrolls down
					$tf_next.bind('click',function(){
						if($tf_bg_img.is(':animated'))
							return false;
						scroll('tb');
					});
					
					//click the arrow up, scrolls up
					$tf_prev.bind('click',function(){
						if($tf_bg_img.is(':animated'))
							return false;
						scroll('bt');
					});
					
					//mousewheel events - down / up button trigger the scroll down / up
					$(document).mousewheel(function(e, delta) {
						if($tf_bg_img.is(':animated'))
							return false;
							
						if(delta > 0)
							scroll('bt');
						else
							scroll('tb');
						return false;
					});
					
					//key events - down / up button trigger the scroll down / up
					$(document).keydown(function(e){
						if($tf_bg_img.is(':animated'))
							return false;
						
						switch(e.which){
							case 38:	
								scroll('bt');
								break;	

							case 40:	
								scroll('tb');
								break;
						}
					});
				}
				
				//show next / prev image
				function scroll(dir){
					//if dir is "tb" (top -> bottom) increment current, 
					//else if "bt" decrement it
					current	= (dir == 'tb')?current + 1:current - 1;
					
					//we want a circular slideshow, 
					//so we need to check the limits of current
					if(current == total) current = 0;
					else if(current < 0) current = total - 1;
					
					//flip the thumb
					$tf_thumbs.flip({
						direction	: dir,
						speed		: 400,
						onBefore	: function(){
							//the new thumb is set here
							var content	= '<span id="tf_zoom" class="tf_zoom"></span>';
							content		+='<img src="' + $tf_bg_images.eq(current).attr('longdesc') + '" alt="Thumb' + (current+1) + '"/>';
							$tf_thumbs.html(content);
						}
					});

					//we get the next image
					var $tf_bg_img_next	= $tf_bg_images.eq(current),
					//its dimentions
					dim				= getImageDim($tf_bg_img_next),
					//the top should be one that makes the image out of the viewport
					//the image should be positioned up or down depending on the direction
					top	= (dir == 'tb')?$(window).height() + 'px':-parseFloat(dim.height,10) + 'px';
							
					//set the returned values and show the next image	
					$tf_bg_img_next.css({
						width	: dim.width,
						height	: dim.height,
						left	: dim.left,
						top		: top
					}).show();
						
					//now slide it to the viewport
					$tf_bg_img_next.stop().animate({
						top 	: dim.top
					},1000);
						
					//we want the old image to slide in the same direction, out of the viewport
					var slideTo	= (dir == 'tb')?-$tf_bg_img.height() + 'px':$(window).height() + 'px';
					$tf_bg_img.stop().animate({
						top 	: slideTo
					},1000,function(){
						//hide it
						$(this).hide();
						//the $tf_bg_img is now the shown image
						$tf_bg_img	= $tf_bg_img_next;
						//show the description for the new image
						$tf_content_wrapper.children()
						.eq(current)
						.show();
					});
					//hide the current description	
					$tf_content_wrapper.children(':visible')
					.hide()
				
				}
				
				//animate the image to fit in the viewport
				function resize($img){
					var w_w	= $(window).width(),
					w_h	= $(window).height(),
					i_w	= $img.width(),
					i_h	= $img.height(),
					r_i	= i_h / i_w,
					new_w,new_h;
					
					if(i_w > i_h){
						new_w	= w_w;
						new_h	= w_w * r_i;
						
						if(new_h > w_h){
							new_h	= w_h;
							new_w	= w_h / r_i;
						}
					}	
					else{
						new_h	= w_w * r_i;
						new_w	= w_w;
					}
					
					$img.animate({
						width	: new_w + 'px',
						height	: new_h + 'px',
						top		: '0px',
						left	: '0px'
					},350);
				}
				
				//get dimentions of the image, 
				//in order to make it full size and centered
				function getImageDim($img){
					var w_w	= $(window).width(),
					w_h	= $(window).height(),
					r_w	= w_h / w_w,
					i_w	= $img.width(),
					i_h	= $img.height(),
					r_i	= i_h / i_w,
					new_w,new_h,
					new_left,new_top;
					
					if(r_w > r_i){
						new_h	= w_h;
						new_w	= w_h / r_i;
					}
					else{
						new_h	= w_w * r_i;
						new_w	= w_w;
					}


					return {
						width	: new_w + 'px',
						height	: new_h + 'px',
						left	: (w_w - new_w) / 2 + 'px',
						top		: (w_h - new_h) / 2 + 'px'
					};
				}
			});
        </script>
    </body>
</html>