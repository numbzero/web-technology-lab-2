<div class="container">
	<h1>CRUD MVC</h1>
	<br/>
	<table class="table table-striped table-bordered table-responsive-sm">
		<caption><?= esc($title); ?></caption>
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">username</th>
				<th scope="col">password</th>
				<th scope="col">email</th>
				<th scope="col">action</th>
			</tr>
		</thead>
		<tbody>

			<?php if (!empty($users) && is_array($users)) : ?>
				<?php foreach ($users as $users_item) : ?>
					<tr>
						<th scope="row"><?= esc($users_item['id']) ?></th>
						<td><?= esc($users_item['username']) ?></td>
						<td><?= esc($users_item['password']) ?></td>
						<td><?= esc($users_item['email']) ?></td>
						<td>
							<a href="/users/edit/<?= esc($users_item['id'], 'url'); ?>"  class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
							<a href="/users/delete/<?= esc($users_item['id'], 'url'); ?>"  class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a> |
							<a href="/users/view/<?= esc($users_item['username'], 'url'); ?>" class="text-primary">
								<i class="fa fa-fw fa-edit"></i>
								 View
							</a> 
						</td>
					</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
			<?php else : ?>
				<h3>Users not found!</h3>
			<?php endif; ?>
	<a href="/users/create" class="btn btn-primary" role="button">Add user</a>
</div>
