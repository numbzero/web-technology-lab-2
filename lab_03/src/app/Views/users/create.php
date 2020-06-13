
<div class="container-fluid">
	<h1>Add user</h1>
	<div class="alert alert-warning card-body">
		<?= \Config\Services::validation()->listErrors(); ?>
	</div>
	<br/>
	<form action="/users/create" method="post">
		<?= csrf_field() ?>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="input" name="username" class="form-control" placeholder="Enter username" >
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="input" name="password" class="form-control" placeholder="Enter password" >
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" placeholder="Enter email" >
		</div>
			<input type="submit" name="submit" value="Create new user" class="btn btn-primary">
	</form>
	<br>
	<a href="/users" class="btn btn-outline-secondary">Back to home</a>
</div>