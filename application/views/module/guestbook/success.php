<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<? if($nick != NULL): ?>
<fieldset>
	<legend>Отчет о добавлении отзыва</legend>
	<p>Спасибо, <?=$nick ?>. Ваш отзыв добавлен</p>
	<a href="/guestbook/" class="transition">Вернуться к отзывам</a>
</fieldset>
<? else: ?>
Такой страницы не существует.
<? endif; ?>