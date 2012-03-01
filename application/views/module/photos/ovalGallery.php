<!DOCTYPE html>
<html>
    <head>
        <title><?= $album->title ?></title>
        <meta charset=UTF-8"/>
        <link rel="stylesheet" href="/media/galleries/ovalGallery/css/style.css" type="text/css" media="screen"/>
		<script src="/media/galleries/ovalGallery/js/cufon-yui.js" type="text/javascript"></script>
		<script src="/media/galleries/ovalGallery/js/RodeoExtraBold_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1', {textShadow: '1px 1px #feec87'})('.footer');
		</script>
    </head>
    <body>
		<div id="goToAlbums">
		<a href="/albums/">Назад к списку альбомов</a>
		</div>
		<div class="top_menu" id="top_menu">
			<span id="description" class="description"></span>
			<a id="back" href="#" class="back"><span></span>Назад</a>
			<div class="info">
				<span class="album_info">Альбом 1</span>
				<span class="image_info"> / Снимок 1</span>
			</div>
		</div>
		<div id="loader" class="loader"></div>
		<div class="header" id="header" style="top:-90px;"><!--верхние 30 px для вывода-->
			<h1><?=$album->title ?><span><?= $album->description ?></span></h1>
		</div>

		<div id="thumbnails_wrapper" class="thumbnails_wrapper" style="top:-255px;"><!--верхние 110 px для вывода-->

			<div id="tshf_container1"  class="tshf_container">
				<div class="thumbScroller">
					<div class="container">
						<? foreach ($photos as $photo): ?>
						<div class="content">
							<div><a href="#"><img src="<?= Entity::$uploadDirectory ?>small_<?= $photo->src ?>" alt="<?=$photo->description ?>" class="thumb" /></a><span></span></div>
						</div>
						<? endforeach; ?>
					</div>
				</div>
			</div>

		</div>
		<div class="bubble">
			<img id="bubble" src="/media/galleries/ovalGallery/images/bubble.png" alt=""/>
		</div>

		<div id="preview" class="preview">
			<a id="prev_image" href="#" class="prev_image"></a>
			<a id="next_image" href="#" class="next_image"></a>
		</div>

        <!-- JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script type="text/javascript" src="/media/galleries/ovalGallery/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="/media/galleries/ovalGallery/js/jquery.thumbnailScroller.js"></script>
        <script type="text/javascript">
			$(window).load(function() {
				//кэшируем некоторые элементы
				var $thumbnails_wrapper 	= $('#thumbnails_wrapper'),
				$thumbs					= $thumbnails_wrapper.find('.tshf_container').find('.content'),
				$top_menu				= $('#top_menu'),
				$header					= $('#header'),
				$bubble                 = $('#bubble'),
				$loader					= $('#loader'),
				$preview				= $('#preview'),
				$thumb_images			= $thumbnails_wrapper.find('img'),
				total_thumbs			= $thumb_images.length,
				$next_img				= $('#next_image'),
				$prev_img				= $('#prev_image'),
				$back					= $('#back'),
				$description			= $('#description'),
				//Текущий альбом и фотография
				//(индексы tshf_container и элементов содержания)					
				currentAlbum			= -1,
				currentPhoto			= -1;
				
				//Показываем индикатор загрузки в процессе
				//загрузки всех изображений
				$loader.show();
				//Показываем основное меню и меню миниатюр
				openPhotoAlbums();
				
				function openPhotoAlbums(){
					//Предварительная загрузка всех миниатюр
					var cnt_loaded = 0;
					$thumb_images.each(function(){
						var $thumb 		= $(this);
						var image_src 	= $thumb.attr('src');
						$('<img/>').load(function(){
							++cnt_loaded;
							if(cnt_loaded == total_thumbs){
								$loader.hide();
								createThumbnailScroller();
								//Показываем основное меню и меню миниатюр
								$header.stop()
								.animate({'top':'30px'},700,'easeOutBack');
								$thumbnails_wrapper.stop()
								.animate({'top':'110px'},700,'easeOutBack');
							}
						}).attr('src',image_src);
					});
				}
				
				//Событие click для миниатюры
				$thumbs.bind('click',function(e){
					//Выводим индикатор загрузки
					$loader.show();
					var $thumb	= $(this),
					//Соответствующее полноразмерное изображение
					img_src = $thumb.find('img.thumb')
					.attr('src')
					.replace('small_','');
					
					//Отслеживаем текущий альбом / фотоuрафию
					currentPhoto= $thumb.index(),
					currentAlbum= $thumb.closest('.tshf_container')
					.index();
					//Выводим текущий альбом и фотографию
					updateInfo(currentAlbum,currentPhoto);
					//Предварительная загрузка полноразмерного изображения
					$('<img/>').load(function(){
						var $this = $(this);
						//Записываем размер, который полноразмерное изображение
						//должно иметь при выводе
						saveFinalPositions($this);
						//margin_circle - диаметр для изображения круга
						var w_w				= $(window).width(),
						w_h				= $(window).height(),
						margin_circle	= w_w + w_w/3;
						if(w_h>w_w)
							margin_circle	= w_h + w_h/3;
						
						//Изображение будет позиционироваться в центре
						//с шириной и высотой 0px
						$this.css({
							'width'		: '0px',
							'height'	: '0px',
							'marginTop'	: w_h/2 +'px',
							'marginLeft': w_w/2 +'px'
						});
						$preview.append($this);
						
						//Скрываем заголовок
						$header.stop().animate({'top':'-90px'},400, function(){
							$loader.hide();
							//Показываем верхнее меню с кнопкой "Назад",
							//а также информацию о текущем альбоме/фотографии
							$top_menu.stop()
							.animate({'top':'0px'},400,'easeOutBack');
							//Анимируем изображение круга
							$bubble.stop().animate({
								'width'		:	margin_circle + 'px',
								'height'	:	margin_circle + 'px',
								'marginTop'	:	-margin_circle/2+'px',
								'marginLeft':	-margin_circle/2+'px'
							},700,function(){
								//Решаем проблему изменения размера
								$('BODY').css('background','#FFD800');
							});
							//По истечении 200ms анимируем полноразмерное изображение
							//и вывдоим кнопки навигации
							setTimeout(function(){
								var final_w	= $this.data('width'),
								final_h	= $this.data('height');
								$this.stop().animate({
									'width'		: final_w + 'px',
									'height'	: final_h + 'px',
									'marginTop'	: w_h/2 - final_h/2 + 'px',
									'marginLeft': w_w/2 - final_w/2 + 'px'
								},700,showNav);
								//Выводим описание
								$description.html($thumb.find('img.thumb').attr('alt'));
							},200);
							
						});
						//скрываеv миниатюры
						$thumbnails_wrapper.stop()
						.animate({
							'top' : w_h+'px'
						},400,function(){
							//Решаем проблему изменения размера
							$(this).hide();
						});
						
					}).attr('src',img_src);
				});
				
				//Событие click для кнопки "следующий"
				$next_img.bind('click',function(){
					//Увеличиваем currentPhoto
					++currentPhoto;
					//Текущий альбом:
					var $album		= $thumbnails_wrapper.find('.tshf_container')
					.eq(currentAlbum),
					//Следующий элемент, миниатюра для вывода
					$next		= $album.find('.content').eq(currentPhoto),
					$current 	= $preview.find('img');
					if($next.length == 0 || $current.is(':animated')){
						--currentPhoto;
						return false;
					}
					else{
						$loader.show();
						updateInfo(currentAlbum,currentPhoto);
						//Предварительная загрузка изображения
						var img_src = $next.find('img.thumb')
						.attr('src')
						.replace('small_',''),
						w_w		= $(window).width(),
						w_h		= $(window).height();				   
					
						$('<img/>').load(function(){
							var $this = $(this);
							//Записываем размер, который полноразмерное изображение должно иметь
							//при выводе
							saveFinalPositions($this);
							$loader.hide();
							$current.stop()
							.animate({'marginLeft':'-'+($current.width()+20)+'px'},500,function(){
								//Текущее изображение удаляем
								$(this).remove();	
							});
							//Новое изображение будет позиционироваться в центре
							//с шириной и высотой 0px
							$this.css({
								'width'		: '0px',
								'height'	: '0px',
								'marginTop'	: w_h/2 +'px',
								'marginLeft': w_w/2 +'px'
							});
							$preview.prepend($this);
							var final_w	= $this.data('width'),
							final_h	= $this.data('height');
							$this.stop().animate({
								'width'		: final_w + 'px',
								'height'	: final_h + 'px',
								'marginTop'	: w_h/2 - final_h/2 + 'px',
								'marginLeft': w_w/2 - final_w/2 + 'px'
							},700);
							//Выводим описание
							$description.html($next.find('img.thumb').attr('alt'));
						}).attr('src',img_src);	
					}
				});
				
				//Событие click для кнопки "Предыдущее"
				$prev_img.bind('click',function(){
					--currentPhoto;
					//Текущий альбом
					var $album		= $thumbnails_wrapper.find('.tshf_container')
					.eq(currentAlbum),
					$prev		= $album.find('.content').eq(currentPhoto),
					$current 	= $preview.find('img');
					if($prev.length == 0 || $current.is(':animated') || currentPhoto < 0){
						++currentPhoto;
						return false;
					}
					else{
						$loader.show();
						updateInfo(currentAlbum,currentPhoto);
						//Предварительная загрузка изображения
						var img_src = $prev.find('img.thumb')
						.attr('src')
						.replace('small_',''),
						w_w				= $(window).width(),
						w_h				= $(window).height();				   
					
						$('<img/>').load(function(){
							var $this = $(this);
							//Записываем размер, который должно иметь большое изображение при выводе
							saveFinalPositions($this);
							
							$loader.hide();
							$current.stop()
							.animate({'marginLeft':(w_w+20)+'px'},500,function(){
								//Текущее изображение удаляем
								$(this).remove();
							});
							//Новое изображение будет выводиться в центре
							//с шириной и высотой 0px
							$this.css({
								'width'		: '0px',
								'height'	: '0px',
								'marginTop'	: w_h/2 +'px',
								'marginLeft': w_w/2 +'px'
							});
							$preview.append($this);
							var final_w	= $this.data('width'),
							final_h	= $this.data('height');
							$this.stop().animate({
								'width'		: final_w + 'px',
								'height'	: final_h + 'px',
								'marginTop'	: w_h/2 - final_h/2 + 'px',
								'marginLeft': w_w/2 - final_w/2 + 'px'
							},700);
							//Выводим описание
							$description.html($prev.find('img.thumb').attr('alt'));							
						}).attr('src',img_src);	
					}
				});
				
				//При изменении размеров окна вычисляем размеры текущего изображения
				$(window).resize(function(){
					var $current = $preview.find('img'),
					w_w		 = $(window).width(),
					w_h		 = $(window).height();		
					if($current.length > 0){
						saveFinalPositions($current);
						var final_w	= $current.data('width'),
						final_h	= $current.data('height');
						$current.css({
							'width'		: final_w + 'px',
							'height'	: final_h + 'px',
							'marginTop'	: w_h/2 - final_h/2 + 'px',
							'marginLeft': w_w/2 - final_w/2 + 'px'
						});
					}
				});
				
				//Событие click для кнопки "Назад"
				$back.bind('click',closePreview)
				
				//Выводим кнопки навигации
				function showNav(){
					$next_img.stop().animate({
						'right'	: '10px'
					},300);
					$prev_img.stop().animate({
						'left'	: '10px'
					},300);
				}
				
				//Скрываем кнопки навигации
				function hideNav(){
					$next_img.stop().animate({
						'right'	: '-50px'
					},300);
					$prev_img.stop().animate({
						'left'	: '-50px'
					},300);
				}
				
				//Обновляем текущий альбом и информацию о текущей фотографии
				function updateInfo(album,photo){
					$top_menu.find('.album_info')
					.html('Альбом ' + (album+1))
					.end()
					.find('.image_info')
					.html(' / Фото ' + (photo+1))
				}
				
				//Вычисляем окончательные значения высоты и ширины
				//для изображения на основе размеров окна
				function saveFinalPositions($image){
					var theImage 	= new Image();
					theImage.src 	= $image.attr("src");
					var imgwidth 	= theImage.width;
					var imgheight 	= theImage.height;
					
					//140 = 2*60 кнопок следующий/предыдущий + 20 поля
					var containerwidth 	= $(window).width() - 140;
					//150 = 30 заголовка + 30 нижнего колонтитула + дополнительные 90 
					var containerheight = $(window).height() - 150;
					
					if(imgwidth	> containerwidth){
						var newwidth = containerwidth;
						var ratio = imgwidth / containerwidth;
						var newheight = imgheight / ratio;
						if(newheight > containerheight){
							var newnewheight = containerheight;
							var newratio = newheight/containerheight;
							var newnewwidth =newwidth/newratio;
							theImage.width = newnewwidth;
							theImage.height= newnewheight;	
						}
						else{
							theImage.width = newwidth;
							theImage.height= newheight;	
						}
					}
					else if(imgheight > containerheight){
						var newheight = containerheight;
						var ratio = imgheight / containerheight;
						var newwidth = imgwidth / ratio;
						if(newwidth > containerwidth){
							var newnewwidth = containerwidth;
							var newratio = newwidth/containerwidth;
							var newnewheight =newheight/newratio;
							theImage.height = newnewheight;
							theImage.width= newnewwidth;	
						}
						else{
							theImage.width = newwidth;
							theImage.height= newheight;	
						}
					}
					$image.data({'width':theImage.width,'height':theImage.height});		
				}
				
				//Запускается, когда пользователь нажмет на кнопке "Назад".
				//Скрывает текущее изображение и круг,
				//затем выводит основное меню и миниатюры
				function closePreview(){
					var $current = $preview.find('img'),
					w_w		 = $(window).width(),
					w_h		 = $(window).height(),
					margin_circle	= w_w + w_w/3;
						
					if(w_h>w_w)
						margin_circle	= w_h + w_h/3;
					
					if($current.is(':animated'))
						return false;
					//Скрываем навигацию
					hideNav();
					//Скрываем верхнее меню
					$top_menu.stop()
					.animate({'top':'-30px'},400,'easeOutBack');
					//Скрываем изображения
					$current.stop().animate({
						'width'		: '0px',
						'height'	: '0px',
						'marginTop'	: w_h/2 +'px',
						'marginLeft': w_w/2 +'px'
					},700,function(){
						$(this).remove();
					});
					//Анимируем изображение круга.
					//Первый набор позиционирован правильно - 
					//его нужно изменить при изменении размеров окна
					setTimeout(function(){
						$bubble.css({
							'width'		 :	margin_circle + 'px',
							'height'	 :	margin_circle + 'px',
							'margin-top' :	-margin_circle/2+'px',
							'margin-left':	-margin_circle/2+'px'
						});
						$('BODY').css('background','url("bg.jpg") repeat scroll left top #222222');
						$bubble.animate({
							'width'		:	'0px',
							'height'	:	'0px',
							'marginTop'	:	'0px',
							'marginLeft':	'0px'
						},500);
					},200);
					setTimeout(function(){
						$header.stop()
						.animate({'top':'30px'},700,'easeOutBack');
						$thumbnails_wrapper.stop()
						.show()	
						.animate({'top':'110px'},700,'easeOutBack');
					},600);
				}
				
				//Строим прокрутчик миниатюр
				//(http://manos.malihu.gr/jquery-thumbnail-scroller)
				function createThumbnailScroller(){
					/*
					Параметры функции ThumbnailScroller:
					1) id контейнера (div id)
					2) Тип прокручивания миниатюр. Значения: "horizontal", "vertical"
					3) Поля для первой и последней миниатюры (для лучшей работы курсора)
					4) Величина сглаживания прокрутки (0 - сглаживания нет)
					5) Тип сглаживания прокрутки
					6) Прозрачность миниатюр по умолчанию
					7) Скррость затухания миниатюр под курсором мыши (в миллисекундах)
					 */
					ThumbnailScroller("tshf_container1","horizontal",10,800,"easeOutCirc",0.5,300);
					//ThumbnailScroller("tshf_container2","horizontal",10,800,"easeOutCirc",0.5,300);
					//ThumbnailScroller("tshf_container3","horizontal",10,800,"easeOutCirc",0.5,300);
				}
					
			});
        </script>
    </body>
</html>