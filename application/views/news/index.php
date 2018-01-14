<div class="container">
	<ul class="button-group">
		<li class="button-group-item"><a href="<?= site_url('news/add-news'); ?>">Add</a></li>
	</ul>
	<h3>News Arhive</h3>

	<div class="table-responsive">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>Title</th>
					<th>Link</th>
				</tr>
			</thead>
			<tbody>
				<?php if($news): ?>
					<?php foreach ($news as $n): ?>
						<tr>
							<td><?= $n['title'] ?></td>							
							<td><a href="<?= site_url('news/'.$n['slug']) ?>">View</a> <a href="<?= site_url('news/'.$n['slug'].'/edit') ?>">Edit</a></td>							
						</tr>
					<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td colspan="2">
							<p class="">No available news yet.</div>
						</td>
					</tr>
				<?php endif; ?>
			</tbody>
			<tfoot></tfoot>
		</table>
	</div>
</div>