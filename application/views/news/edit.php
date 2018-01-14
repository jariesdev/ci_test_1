<div class="container">
	<?php if (isset($result_result) && $result_result): ?>
		<div class="alert alert-success">
			<p>Successfully Save.</p>
		</div>
	<?php endif ?>
	<h3>New item</h3>
	<div class="">
		<?php echo form_open(); ?>
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" value="<?= $news_item['title'] ?>">
		</div>
		<div class="form-group">
			<label>Content</label>
			<textarea class="form-control" name="text"><?= $news_item['text'] ?></textarea>
		</div>
		<input type="submit" value="Save" class="form-control">
		<?php echo form_close(); ?>
	</div>
</div>