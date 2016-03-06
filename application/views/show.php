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
	        <li><a href="/users/edit">Profile</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="/Users/sign_in"><span class="glyphicon glyphicon-log-out"></span> Log off</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class='row-fluid'>
		<div class="col-md-6 col-md-offset-1">
			<h1><?= $user['first_name'] . ' ' . $user['last_name']?></h1>
			<p>Registered at: <?= $user['created_at']?></p>
			<p>User ID: <?= $user['id']?></p>
			<p>Email Address: <?= $user['email']?></p>
			<p>Description: <?= $user['description']?></p>
		</div>
	</div>
	<div class='row-fluid'>
		<div class="col-md-10 col-md-offset-1">
			<form role="form">
			  	<div class="form-group">
					<h3>Leave a message for <?= $user['first_name']?></h3>
					<textarea class="form-control" rows="5" id="comment"></textarea>
			  	</div>
			  <button type="submit" class="btn btn-success">Post</button>
			</form>
		</div>
	</div>

</div>
</body>
</html>