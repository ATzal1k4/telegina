<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col_12">
	<fieldset>
		<legend>Погода в Томске</legend>
		<div style="width:220px; height:150px;">
			<object type="application/x-shockwave-flash" data="http://swf.yowindow.com/yowidget3.swf" width="220" height="150">
				<param name="movie" value="http://swf.yowindow.com/yowidget3.swf"/>
				<param name="allowfullscreen" value="true"/>
				<param name="wmode" value="opaque"/>
				<param name="bgcolor" value="#FFFFFF"/>
				<param name="flashvars" 
					   value="location_id=1489425&amp;location_name=%D0%A2%D0%BE%D0%BC%D1%81%D0%BA&amp;time_format=24&amp;unit_system=metric&amp;lang=ru&amp;background=#FFFFFF&amp;mini_temperature=true&amp;mini_time=false&amp;mini_locationBar=true&amp;mini_momentBar=false&amp;copyright_bar=false"
					   />
				<a href="http://yowindow.com/weatherwidget.php"
				   style="width:220px;height:150px;display: block;text-indent: -50000px;font-size: 0px;background:#DDF url(http://yowindow.com/img/logo.png) no-repeat scroll 50% 50%;"
				   >Weather Widget</a>
			</object>
		</div>
		<div style="width: 220px; height: 15px; font-size: 14px; font-family: Arial,Helvetica,sans-serif;">
			<span style="float:left;"><a target="_top" href="http://yowindow.com?client=widget&amp;link=copyright" style="color: #2fa900; font-weight:bold; text-decoration:none;" title="Free Weather Widget">YoWindow.com</a></span>
			<span style="float:right; color:#888888;"><a href="http://yr.no" style="color: #2fa900; text-decoration:none;">yr.no</a></span>
		</div>
	</fieldset>
</div>