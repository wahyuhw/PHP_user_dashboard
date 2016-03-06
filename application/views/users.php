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
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="/Users/sign_in"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class='row-fluid'>
		<div class="col-md-10 col-md-offset-1 jumbotron">
			<h2>Welcome to the Test</h2>
			<p>We're going to build a cool application using a MVC framework! This application was built with the coding dojo folks!</p>
			<a class="btn btn-primary" href="#" role="button">Start</a>
		</div>
	</div>
	<div class='row-fluid'>
		<div class="col-md-10 col-md-offset-1">
			<div class='col-md-4'>
				<h2>Manage Users</h2>
				<p>Using this application, you'll learn how to add, remove, and edit users for the application.</p>
			</div>
			<div class='col-md-4'>
				<h2>Leave Messages</h2>
				<p>Users will be able to leave a message to another user usin this application.</p>
			</div>
			<div class='col-md-4'>
				<h2>Edit Users Information</h2>
				<p>Admins will be able to edit another user's information (email adress, first name, last name, ect).</p>
			</div>
		</div>
	</div>
</div>
	<div class='row-fluid'>
	<?php if($this->session->flashdata('errors') != NULL){
		echo $this->session->flashdata('errors');
	} ?>
	</div>
</body>
</html>