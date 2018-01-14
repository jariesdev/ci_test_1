<div class="container">
	<h3>Delete News</h3>
	<?php if (isset($delete_result) && $delete_result): ?>
		<p class="alert alert-success">Deleted</p>
	<?php else: ?>
		<p class="alert alert-danger">Error while deleting</p>
	<?php endif; ?>

	<a href="<?= site_url('news') ?>">Go back!</a>
</div>