/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
  $('#file_upload').uploadify({
    'uploader'  : '/uploadify/uploadify.swf',
    'script'    : '/uploadify.php',
    'cancelImg' : '/uploadify/cancel.png',
    'folder'    : '/media/uploads',
    'auto'      : true,
	'multi'		: false,
	'queueSizeLimit' : 5,
	'method'      : 'POST',
	'fileExt'     : '*.jpg;*.gif;*.png;*.jpeg;*.bmp',
	'fileDesc'    : 'Image Files'
  });
});