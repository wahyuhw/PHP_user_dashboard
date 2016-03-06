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
	        <li><a href="/users/dashboard">Dashboard</a></li>
	        <li class='active'><a href="#">Profile</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="/Users/destroy"><span class="glyphicon glyphicon-log-off"></span> Log Off</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class='row-fluid'>
		<h2>Edit Profile</h2>
		<div class="col-md-5 col-md-offset-1">
			<form role="form" action='/users_logic/edit_profile/<?= $id ?>' method='post'>
			<h3>Edit Information</h3>
			<div class="form-group">
				<label for="email">Email address:</label>
			    <input type="email" class="form-control" id="email" name='email' value='<?= $email ?>'>
			</div>
			<div class="form-group">
			    <label for="first_name">First Name:</label>
			    <input type="text" class="form-control" id="first_name" name='first_name' value='<?= $first_name ?>'>
			</div>
			<div class="form-group">
			    <label for="last_name">Last Name:</label>
			    <input type="text" class="form-control" id="last_name" name='last_name' value='<?= $last_name ?>'>
			</div>
			<button type="submit" class="btn btn-success">Save</button>
			</form>
		</div>
			<div class="col-md-5">
			<h3>Change Password</h3>
			<?php  if($this->session->flashdata('errors')){
				echo $this->session->flashdata('errors');
			}?>
			<form role="form" action='/users_logic/edit_password/<?= $id ?>' method='post'>
			  <div class="form-group">
			    <label for="psw">Pasword:</label>
			    <input type="password" class="form-control" id="pwd" name='pwd'>
			  </div>
			  <div class="form-group">
			    <label for="pwd_confirmation">Password Confirmation:</label>
			    <input type="password" class="form-control" id="pwd_confirmation" name='pwd_confirm'>
			  </div>
			  <button type="submit" class="btn btn-success">Update Password</button>
			</form>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<form role="form" action='/users_logic/edit_description/<?= $id ?>' method='post'>
			  	<div class="form-group">
					<h3>Edit Description</h3>
					<textarea class="form-control" rows="5" id="comment" name='description'><?= $description ?></textarea>
			  	</div>
			  <button type="submit" class="btn btn-success">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>