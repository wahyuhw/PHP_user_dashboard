<?php
// var_dump($this->session->userdata('user_level'));
if($this->session->userdata('user_level') != '1'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Courses</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
	</style>
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/">Test App</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="/">Home</a></li>
	        <li><a href="/Users/dashboard">Dashboard</a></li> 
	        <li><a href="/Users/edit/<?= $this->session->userdata('user_id') ?>">Profile</a></li> 
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="/Users/destroy"><span class="glyphicon glyphicon-log-out"></span> Logoff</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class='row-fluid'>
		<div class="col-md-10 col-md-offset-1">
			<h2>All Users</h2>
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Email</th>
			        <th>Created_at</th>
			        <th>User_level</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php ?>
			    <?php foreach ($test as $value) { ?>
			      <tr>
			        <td> <?= $value['id'] ?></td>
			        <td><a href="/users/show/<?= $value['id'] ?>"><?= $value['first_name'].' '.$value['last_name'] ?></a></td>
			        <td><?= $value['email'] ?></td>
			        <td><?= $value['created_at'] ?></td>
			        <td><?= $value['user_level'] ?></td>
			      </tr>
			  	<?php }?>
			    </tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>


<?php }
else{
?>

<!-- This is the admin dashboard -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Courses</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
	</style>
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/">Test App</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="/">Home</a></li>
	        <li><a href="#">blank</a></li>
	        <li><a href="/Users/add_new_user">Add New User</a></li> 
	        <li><a href="/Users/manage">Manage Users</a></li> 
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="/Users/destroy"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class='row-fluid'>
		<div class="col-md-10 col-md-offset-1">
			<h2>Manage Users</h2>
			<form role="form">
			  <button type="submit" class="btn btn-primary">Add new</button>
			</form>
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Email</th>
			        <th>Created_at</th>
			        <th>User_level</th>
			        <th>Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php foreach ($test as $value) { ?>
			      <tr>
			        <td> <?= $value['id'] ?></td>
			        <td><a href="/users/show/<?= $value['id'] ?>"><?= $value['first_name'].' '.$value['last_name'] ?></a></td>
			        <td><?= $value['email'] ?></td>
			        <td><?= $value['created_at'] ?></td>
			        <td><?= $value['user_level'] ?></td>
			        <td><a href="#">edit</a> | <a href="/users_logic/delete/$value['id']">remove</a></td>
			      </tr>
			  	<?php }?>
			    </tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php } ?>