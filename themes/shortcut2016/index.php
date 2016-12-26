<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	</head>
	<!--TODO: create functions to get all informations for the themes-->
	<body>
		<div class="body">

			<div class="outer">

				<div class="middle">
					<?php include 'includes/nav.php';
						include 'includes/header.php' ?>
					<div class="inner">
						<?php include 'includes/form.php' ?>
					</div>
					<?php include 'includes/footer.php' ?>
				</div>


			</div>

			<div id="menu" class="menu">
				<a href="javascript:void(0)" class="closeBtn" onclick="closeNav()"><i class="fa fa-times-circle"
				                                                                      aria-hidden="true"></i>
				</a>
				<div class="sideMenuButtons">
					<a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>
						&nbsp;Sign up</a>
					<a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>
						&nbsp;Sign in</a>
				</div>

			</div>

		</div>
	</body>
</html>