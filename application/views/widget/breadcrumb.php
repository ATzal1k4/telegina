<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ul class="breadcrumbs alt1">
	<? foreach ($items as $k => $item):  ?>
	<li>
		<a 
		<? if($item['href'] != ''):  ?>
			href="<?= $item['href'] ?>"
			<?  endif;  ?>><?= $item['title']  ?>
		</a>
	</li>
	<?  endforeach;  ?>
</ul>