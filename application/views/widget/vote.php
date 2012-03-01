<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<? if (!$voterExists): ?>
	<?
	$items = $vote->items
			->and_where('is_deleted', '=', 0)
			->and_where('is_hide', '=', 0)
			->order_by('position', 'desc')
			->find_all();
	?>
	<div id="output">
		<div class="col_12">
			<form id="form_vote">
				<fieldset>
					<legend><?= $vote->question ?></legend>
					<? foreach ($items as $item): ?>
						<input type="radio" name="item" value="<?= $item->pk() ?>" /><label for="radio<?= $item->pk(); ?>" class="inline"><?= $item->text ?></label><br/>
					<? endforeach; ?>
					<br/>
					<input type="submit" id="submit_vote" value="Ответить" />

				</fieldset>
			</form>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				var block = $("#output");
				var form = $("#form_vote");
				form.submit(function(e){
					e.preventDefault();
					$.ajax({
						async:true,
						dataType:'html',
						url:'/ajax/votes/add',
						type:'POST',
						data:'item=' + $(":radio[name=item]").filter(":checked").val(),
						success:function(data) {
							if (data != 'error') {
								block.html(data);
							}
						},
						error:function(){
							
						}
					});
							
					return false;
				});	
			});
		</script>
	</div>


<? else: ?>
	<?
	$items = $vote->items
			->and_where('is_deleted', '=', 0)
			->and_where('is_hide', '=', 0)
			->order_by('count_answer', 'desc')
			->find_all();
	$count = 0;
	?>
	<div class="col_12" id="vote">
		<fieldset>
			<legend><?= $vote->question ?></legend>
			<ul class="checks">
				<? foreach ($items as $item): ?>
					<li><?= $item->text ?> - <?= $item->count_answer ?></li>
					<? $count += $item->count_answer ?>
				<? endforeach; ?>
			</ul>
			<p>Всего ответов: <?= $count ?></p>
		</fieldset>
	</div>
<? endif; ?>
