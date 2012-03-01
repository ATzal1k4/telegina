<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<? if (Module::$fullPage == false): ?>
	<!DOCTYPE html>
	<html>
		<head>
			<title><?= $title ?></title>
			<meta charset="UTF-8">
			<? foreach ($styles as $style): ?>
				<?= HTML::style($style[0], $style[1]); ?>
			<? endforeach; ?>
			<? foreach ($scripts as $script): ?>
				<?= HTML::script($script[0], $script[1]); ?>
			<? endforeach; ?>
			<?= $specialHead; ?>
		</head>
		<body>
			<a id="top-of-page"></a>
			<div id="wrap" class="clearfix">
				<!-- === END HEADER === -->

				<div class="col_3">
					<? if (isset($menu)): ?>
						<?= $menu ?>
					<? endif; ?>


					<? if (isset($new)): ?>
						<?= $new ?>
					<? endif; ?>


					<? if (isset($weather)): ?>
						<?= $weather; ?>
					<? endif; ?>


					<? if (isset($visitor)): ?>
						<?= $visitor ?>
					<? endif; ?>

				</div>
				<div class="col_7">
					<div id="content" class="col_12">
						<?= $content ?>
					</div>
				</div>

				<div class="col_2">					
					
					<? if (isset($ulogin)): ?>
						<?= $ulogin ?>
					<? endif; ?>
					
					<? if (isset($search)): ?>
						<?= $search ?>
					<? endif; ?>
					
					<? if (isset($vote)): ?>
						<?= $vote ?>
					<? endif; ?>
					
					<? if (isset($calendar)): ?>
						<?= $calendar; ?>
					<? endif; ?>

					<? if (isset($links)): ?>
						<?= $links ?>
					<? endif; ?>


				</div>

				<!--
					ADD YOU HTML ELEMENTS HERE
					Example: 2 Columns
				-->
				<?= $pluginContent ?>
				<!-- === START FOOTER === -->
			</div>
			<? foreach ($scriptTexts as $text): ?>
			<?= $text ?>
			<? endforeach; ?>
		</body>
	</html>
	<?//=View::factory("profiler/stats"); ?>
	<?// ProfilerToolbar::render(TRUE); ?>

<? else: ?>
	<?= $content ?>
<? endif; ?>
