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
	        <li><a href="/Users/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="/Users/sign_in"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class='row-fluid'>
		<h2>Edit User #id</h2>
		<a class="btn btn-primary" href="/Users/dashboard" role="button">Return to Dashboard</a>
		<div class="col-md-5 col-md-offset-1">
			<form role="form">
			<h3>Edit Information</h3>
			<div class="form-group">
				<label for="email">Email address:</label>
			    <input type="email" class="form-control" id="email" name='email' value='#id'>
			</div>
			<div class="form-group">
			    <label for="first_name">First Name:</label>
			    <input type="text" class="form-control" id="first_name" name="first_name" value="#id">
			</div>
			<div class="form-group">
			    <label for="last_name">Last Name:</label>
			    <input type="text" class="form-control" id="last_name" name="last_name" value="#id">
			</div>
			<div class="form-group">
			  <label for="user_level">User level:</label>
			  <select class="form-control" id="user_level">
			    <option>Normal</option>
			    <option>Admin</option>
			  </select>
			</div>
			<button type="submit" class="btn btn-success">Save</button>
			</form>
		</div>
		<div class="col-md-5">
			<h3>Change Password</h3>
			<form role="form">
			  <div class="form-group">
			    <label for="psw">Pasword:</label>
			    <input type="password" class="form-control" id="pwd">
			  </div>
			  <div class="form-group">
			    <label for="pwd_confirmation">Password Confirmation:</label>
			    <input type="password" class="form-control" id="pwd_confirmation">
			  </div>
			  <button type="submit" class="btn btn-success">Update Password</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>