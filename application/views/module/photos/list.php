<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- Slideshow -->
<ul class="slideshow" width="440" height="300">
	<? foreach ($photos as $photo): ?>
		<li><img src="<?= Entity::$uploadDirectory ?>full_<?= $photo->src ?>" /></li>
	<? endforeach; ?>
</ul>

<div class="gallery">
	<? foreach ($photos as $photo): ?>
	<a href="<?= Entity::$uploadDirectory ?>full_<?= $photo->src ?>"><img src="/media/uploads/small_<?= $photo->src ?>" alt="<?=$photo->title ?>" title="<?=$photo->title ?>" /></a>
	<? endforeach; ?>
</div>