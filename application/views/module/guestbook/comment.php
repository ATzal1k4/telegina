<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<fieldset>
	<legend>Оставьте Ваш комментарий к отзыву</legend>
	<form action="/guestbook/comment/<?=$comment->comment_id ?>" method="post">

		<div class="col_2">
			<label for="nick" class="col_12 right">Ваше имя</label>
		</div>
		<div class="col_10">
			<input type="text" name="nick" placeholder="Пушкин А. С." value="<?= Arr::get($data, 'nick', NULL); ?>" class="col_12 left" required="required" />
			<p class="error"><?= Arr::get($errors, 'nick', NULL); ?></p>
		</div>


		<div class="col_2">
			<label for="email" class="col_12 right">E-Mail</label>
		</div>
		<div class="col_10">
			<input type="email" name="email" placeholder="email@email.com" value="<?= Arr::get($data, 'email', NULL); ?>" class="col_12 left" required="required" />
			<p class="error"><?= Arr::get($errors, 'email', NULL); ?></p>
		</div>

		<div class="col_2">
			<label for="site" class="col_12 right">Ваш сайт</label>
		</div>
		<div class="col_10">
			<input type="url" name="site" placeholder="http://yoursite.ru" value="<?= Arr::get($data, 'site', NULL); ?>" class="col_12 left" />
			<p class="error"><?= Arr::get($errors, 'site', NULL); ?></p>
		</div>

		<div class="col_2">
			<label for="captcha" class="col_12 right">Введите текст с картинки</label>
		</div>
		<div class="col_10">
			<div class="col_4">
				<input type="text" name="captcha" class="col_12 left" />
				<p class="error"><?= Arr::get($errors, 'captcha', NULL); ?></p>
			</div>
			<div class="col_4">
				<span class="col_2"><?= $captcha ?></span>
			</div>

		</div>
		<div class="clear"></div>
		<div class="col_2">
			<label for="text" class="right col_12" required="required">Текст отзыва</label>
		</div>
		<div class="col_10">
			<textarea name="text" placeholder="Текст отзыва" class="left col_12"><?= Arr::get($data, 'text', NULL); ?></textarea>
			<p class="error"><?= Arr::get($errors, 'text', NULL); ?></p>
		</div>

		<div class="col_2"></div>
		<div class="col_10">
			<input type="submit" name="submit" value="Отправить" class="blue" />
		</div>
	</form>
</fieldset>
<div class="clear"></div>