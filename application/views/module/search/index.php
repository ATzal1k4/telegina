<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<fieldset>
	<legend>Поиск по сайту</legend>
	<div id="page" class="col_12">
		<form id="searchForm" method="post">
			<fieldset>

				<input id="s" type="text" />

				<input type="submit" value="Submit" id="submitButton" />

				<div id="searchInContainer">
					<input type="radio" name="check" value="site" id="searchSite" checked />
					<label for="searchSite" id="siteNameLabel">Поиск по</label>

					<input type="radio" name="check" value="web" id="searchWeb" />
					<label for="searchWeb">Поиск в Интернет</label>
				</div>

				<ul class="icons">
					<li class="web" title="Страницы" data-searchType="web">Страницы</li>
					<li class="images" title="Изображения" data-searchType="images">Изображения</li>
					<li class="news" title="Новости" data-searchType="news">Новости</li>
					<li class="videos" title="Видео" data-searchType="video">Видео</li>
				</ul>

			</fieldset>
		</form>

		<div id="resultsDiv"></div>

	</div>
</fieldset>
<div style="display: none;" id="searchPost"><?= $searchPost ?></div>
