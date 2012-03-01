<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col_12">
<? if (isset($content)) { ?>
	<?=$content; ?>
<? } ?>

<? if (isset($errors)) { ?>
	<? Zend_Debug::dump($errors); ?>
<? } ?>
</div>