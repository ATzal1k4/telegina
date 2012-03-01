// Код JavaScript
function ThumbnailScroller(id,tsType,tsMargin,scrollEasing,scrollEasingType,thumbnailOpacity,thumbnailFadeSpeed){
	/* 
	Параметры: 
	id: id контейнера (div id)  
	tsType: тип прокрутки (значения: "horizontal", "vertical")
	tsMargin: поля для первой и последней миниатюр (для лучшего лействия курсора) 
	scrollEasing: величина сглаживания прокрутки (0 - нет сглаживания) 
	scrollEasingType: тип сглаживания прокрутки 
	thumbnailOpacity: прозрачность миниатюр по умолчанию 
	thumbnailFadeSpeed: скорость затухания миниатюр под курсором мыши (в миллисекундах) 
	*/

	//Пременные для кэширования
	var $outer_container=$("#"+id);
	var $thumbScroller=$("#"+id+" .thumbScroller");
	var $thumbScroller_container=$("#"+id+" .thumbScroller .container");
	var $thumbScroller_content=$("#"+id+" .thumbScroller .content");
	var $thumbScroller_thumb=$("#"+id+" .thumbScroller .thumb");

	if(tsType=="horizontal"){
		$thumbScroller_container.css("marginLeft",tsMargin+"px"); //Добавляем поле
		var tsWidth=$outer_container.width();
		var itemWidth=$thumbScroller_content.width();
	} else {
		$thumbScroller_container.css("marginTop",tsMargin+"px"); //Добавляем поле
		var tsHeight=$outer_container.height();
		var itemHeight=$thumbScroller_content.height();
	}
	
	var $the_outer_container=document.getElementById(id);
	var $placement=findPos($the_outer_container);

	$thumbScroller_content.each(function (i) {
		if(tsType=="horizontal"){
			var totalContent=i*itemWidth;
			$outer_container.data("totalContent",totalContent);
			$thumbScroller_container.css("width",totalContent+itemWidth);
		} else {
			var totalContent=i*itemHeight;
			$outer_container.data("totalContent",totalContent);
			$thumbScroller_container.css("height",totalContent+itemHeight);
		}
	});

	function MouseMove(e){
		if(tsType=="horizontal"){
			if($thumbScroller_container.outerWidth()>$thumbScroller.width()){ //Проверяем, нужно ли прокручивать контент
				var mouseCoords=(e.pageX - $placement[1]);
	  			var mousePercentX=mouseCoords/tsWidth;
	  			var destX=-(((($outer_container.data("totalContent")+(tsMargin*2))-(tsWidth-itemWidth))-tsWidth)*(mousePercentX));
	  			var thePosA=mouseCoords-destX;
	  			var thePosB=destX-mouseCoords;
	  			if(mouseCoords>destX){
					$thumbScroller_container.stop().animate({left: -thePosA}, scrollEasing,scrollEasingType); 
	  			} else if(mouseCoords<destX){
					$thumbScroller_container.stop().animate({left: thePosB}, scrollEasing,scrollEasingType); 
	  			}
			} else {
				$thumbScroller_container.css("left",0);
			}
		} else {
			if($thumbScroller_container.outerHeight()>$thumbScroller.height()){ //Проверяем, нужно ли прокручивать контент
				var mouseCoords=(e.pageY - $placement[0]);
	  			var mousePercentY=mouseCoords/tsHeight;
	  			var destY=-(((($outer_container.data("totalContent")+(tsMargin*2))-(tsHeight-itemHeight))-tsHeight)*(mousePercentY));
	  			var thePosA=mouseCoords-destY;
	  			var thePosB=destY-mouseCoords;
	  			if(mouseCoords>destY){
					$thumbScroller_container.stop().animate({top: -thePosA}, scrollEasing,scrollEasingType); 
	  			} else if(mouseCoords<destY){
					$thumbScroller_container.stop().animate({top: thePosB}, scrollEasing,scrollEasingType); 
	  			}
			} else {
				$thumbScroller_container.css("top",0);
			}
		}
	}
	
	$thumbScroller.bind("mousemove", function(event){
		MouseMove(event);									  
	});
	
	//Функция для нахождения позиции элемента
	function findPos(obj) {
		var curleft = curtop = 0;
		if (obj.offsetParent) {
			curleft = obj.offsetLeft
			curtop = obj.offsetTop
			while (obj = obj.offsetParent) {
				curleft += obj.offsetLeft
				curtop += obj.offsetTop
			}
		}
		return [curtop, curleft];
	}
	
	$(window).resize(function() {
		if(tsType=="horizontal"){
			tsWidth=$outer_container.width();
			$thumbScroller_container.stop().animate({left: '0px'}, scrollEasing,scrollEasingType); 
		} else {
			tsHeight=$outer_container.height();
			$thumbScroller_container.stop().animate({left: '0px'}, scrollEasing,scrollEasingType); 
		}
		$placement=findPos($the_outer_container);
	});
}