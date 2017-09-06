<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<style>
			.row {
				padding: 5rem 0;
			}
			.panel img {
				transition: .5s all ease-in-out;
			}
			.panel img:hover {
				transform: rotate(25deg);
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body class="container-fluid" style="padding-right: 0; padding-left: 0;">
		<nav class="navbar navbar-inverse navbar-toggleable">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown">
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span> 
      				</button>
      				<a href="index.php" class="">
						<img src="notext-white.png" class="" height="50px" alt="">
					</a>
				</div>
				<div class="navbar-collapse collapse" id="dropdown">
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item"><a href="index.php">Home</a></li>
						<li class="nav-item"><a href="about.php">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Services</a>
							<ul class="dropdown-menu">
								<li>
									<a href="solutions.php" class="dropdown-item">Data Solutions</a>
								</li>
								<li>
									<a href="dynamic.php" class="dropdown-item">Dynamic Websites</a>
								</li>
								<li>
									<a href="seo.php" class="dropdown-item">SEO</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>