<div class="container">
	<?php if (isset($add_result) && $add_result): ?>
		<div class="alert alert-success">
			<p>Successfully Added.</p>
		</div>
	<?php endif ?>
	<h3>New item</h3>
	<div class="">
		<?php echo form_open(); ?>
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label>Content</label>
			<textarea class="form-control" name="text"></textarea>
		</div>
		<input type="submit" value="Add" class="form-control">
		<?php echo form_close(); ?>
	</div>
</div>