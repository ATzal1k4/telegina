<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
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

			<ul class="menu">
				<li class="current"><a href="/admin/systempages/">Страницы</a></li>
				<li><a href="/admin/menus/">Меню</a></li>
				<li><a href="/admin/modules/"><span class="icon" data-icon="R"></span>Модули</a>
					<ul>
						<li><a href="/admin/news/list/"><span class="icon" data-icon="G"></span>Новости</a></li>
						<li><a href="/admin/pages/list/"><span class="icon" data-icon="G"></span>Текстовые страницы</a></li>
						<li><a href="/admin/albums/list/"><span class="icon" data-icon="G"></span>Альбомы</a></li>
						<li><a href="/admin/guestbook/list/"><span class="icon" data-icon="G"></span>Гостевая книга</a></li>
						<li><a href=""><span class="icon" data-icon="A"></span>Тест</a>
							<ul>
								<li><a href=""><span class="icon" data-icon="Z"></span>Sub Item</a></li>
								<li><a href=""><span class="icon" data-icon="k"></span>Sub Item</a></li>
								<li><a href=""><span class="icon" data-icon="J"></span>Sub Item</a></li>
								<li><a href=""><span class="icon" data-icon="="></span>Sub Item</a></li>
							</ul>
						</li>
						<li class="divider"><a href=""><span class="icon" data-icon="T"></span>li.divider</a></li>
					</ul>
				</li>
				<li><a href="/admin/widgets/"><span class="icon" data-icon="R"></span>Виджеты</a>
					<ul>
						<li><a href="/admin/links/list/"><span class="icon" data-icon="G"></span>Ссылки</a></li>
						<li><a href="/admin/votes/list/"><span class="icon" data-icon="G"></span>Опросы</a></li>
					</ul>
				</li>
				<li><a href="/admin/plugins/"><span class="icon" data-icon="R"></span>Плагины</a>
					<ul>
						<li><a href="/admin/links/list/"><span class="icon" data-icon="G"></span>Кнопка "Вверх"</a></li>
						<li><a href="/admin/votes/list/"><span class="icon" data-icon="G"></span>Красивые переходы</a></li>
					</ul>
				</li>
				<li><a href="/admin/configs/general">Настройки</a>
					<ul>
						<li><a href="/admin/configs/list/general"><span class="icon" data-icon="="></span>Общие</a></li>
						<li><a href="/admin/configs/list/module"><span class="icon" data-icon="Z"></span>Модули</a></li>
						<li><a href="/admin/configs/list/widget"><span class="icon" data-icon="k"></span>Виджеты</a></li>
						<li><a href="/admin/configs/list/plugin"><span class="icon" data-icon="J"></span>Плагины</a></li>
					</ul>
				</li>
				<li><a href="/admin/logout/">Выйти</a></li>
			</ul>

			<div class="col_12">
				<?= $breadcrumb ?>
			</div>

			
			<div class="col_12">
				<?= $content ?>
			</div>

			<!--
				ADD YOU HTML ELEMENTS HERE
				Example: 2 Columns
			-->



			<!-- === START FOOTER === -->
		</div>
		<? foreach ($scriptTexts as $text): ?>
			<?= $text ?>
		<? endforeach; ?>
	</body>
</html>
<?// ProfilerToolbar::render(TRUE); ?>
<?
//= View::factory("profiler/stats"); ?>
<?= $errors; ?>