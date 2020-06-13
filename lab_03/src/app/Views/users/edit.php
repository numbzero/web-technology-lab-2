
<div class="container-fluid">
	<h1>Update</h1>
	<?= \Config\Services::validation()->listErrors(); ?>
	<br/>
	<form action="/users/update" method="post">
		<?= csrf_field() ?>
		
		<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $user['id'] ?>">

		<div class="form-group">
			<label for="username">Username</label>
			<input type="input" name="username" class="form-control" value="<?= esc($user['username']); ?>"><br/>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="input" name="password" class="form-control" value="<?= esc($user['password']); ?>"><br/>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" value="<?= esc($user['email']); ?>"><br/>
		</div>
			<input type="submit" name="submit" value="Update user" class="btn btn-primary"/>
	</form>
	<br>
	<a href="/users" class="btn btn-outline-secondary">Back to home</a>
</div>