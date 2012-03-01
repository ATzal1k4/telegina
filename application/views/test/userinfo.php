<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$uinfo = new \User_Info();

Zend_Debug::dump($uinfo->get());

?>Hello!<br />
Here a few info about you
<ul>
	<li>IP: <?= $uinfo->IP(); ?></li>
	<li>OS: <?= $uinfo->os(); ?>
		<ul>
			<li>name: <?= $uinfo->os('name'); ?></li>
			<li>version: <?= $uinfo->os('version'); ?></li>
		</ul>
	</li>
	<li>Are you a spider/robot: <?= $uinfo->is_crawler() ? 'Yes' : 'No' ?></li>
	<li>Browser: <?= $uinfo->browser(); ?>
		<ul>
			<li>name: <?= $uinfo->browser('name'); ?></li>
			<li>version: <?= $uinfo->browser('version'); ?></li>
			<li>Is Crawler: <?= $uinfo->browser('is_crawler') ? 'Yes' : 'No' ?></li>
		</ul>
	</li>
	<li>Bits: <?= $uinfo->bits(); ?></li>
	<li>Security: <?= $uinfo->security(); ?></li>
	<li>Languages:
		<ul><?php
$tmps = $uinfo->language();
foreach ($tmps as $k => $v) {
	?><li>code: <?= $v['code'] ?></li>
				<li>name: <?= $v['name'] ?></li>
				<li>QValue: <?= $v['QValue'] ?></li><?php
		}
?></ul>
	</li>
	<li>Accept:
		<ul><?php
			$tmps = $uinfo->accept();
			foreach ($tmps as $k => $v) {
	?><li>code: <?= $v['code'] ?></li>
				<li>QValue: <?= $v['QValue'] ?></li><?php
		}
?></ul>
	</li>
	<li>Encodings:
		<ul><?php
			$tmps = $uinfo->encoding();
			foreach ($tmps as $k => $v) {
	?><li>code: <?= $v['code'] ?></li>
				<li>QValue: <?= $v['QValue'] ?></li><?php
		}
?></ul>
	</li>
	<li>Charsets:
		<ul><?php
			$tmps = $uinfo->charset();
			foreach ($tmps as $k => $v) {
	?><li>code: <?= $v['code'] ?></li>
				<li>QValue: <?= $v['QValue'] ?></li><?php
		}
?></ul>
	</li>
	<li>Your User Agent: <?= $uinfo->user_agent() ?></li>
	<li>Requested Page: <?= $uinfo->request_page() ?></li>
	<li>Request Method: <?= $uinfo->request_method() ?></li>
	<li>This URL: <?= $uinfo->url() ?></li>
</ul>