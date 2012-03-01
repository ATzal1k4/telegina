<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
	<head>
		<title><?= $title ?></title>
	</head>
	<body>

		<? if (isset($local) and ($local == TRUE)): ?>
			<p>Ошибка приложения</p>
		<? endif; ?>

		<? if (isset($message)): ?>
			<?= $message; ?>
		<? endif; ?>
			
		<? if (isset($page)): ?>
			<?= $page; ?>
		<? endif; ?>

	</body>
</html>