<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>
			<!--TODO: create function to get website name-->
		</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<script src="script.js"></script>

	</head>
	<body>
		<div class="body">

			<div class="outer">

				<div class="middle">
					<!--Navbar Start-->
					<div class="navBar">
						<div class="navContainer">
							<!-- TODO: it will convert to user photo when user is signed in . -->
							<img class='logo' src="images/logo.png"/>
							<div class="line"></div>

							<!-- TODO: it will convert to user name when user is signed in . -->
							<span class="name"><h4>WebSite Name</h4></span>

							<div class="navOtherSide">
								<button type="button" class="inButton"><i class="fa fa-sign-in" aria-hidden="true"></i>
									&nbsp;Sign in
								</button>
								<button type="button" class="UpButton"><i class="fa fa-user-plus"
								                                          aria-hidden="true"></i>
									&nbsp;Sign up
								</button>


								<div class="menuBtn" onclick="openNav()">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</div>


							</div>


						</div>
					</div>
					<!--Navbar End-->
					<div class="header">
						<div class="wsname">
							<h1>WebSite Name</h1>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
					</div>
					<div class="inner">
						<?php if (!isset($_GET['url'])): ?>
							<form method="get">
								<input type="text" name="url" placeholder="Insert your URL">
								<input type="submit" value="Get short URL">
							</form>
						<?php else:
							$url = str_replace(' ', '', $_GET['url']);
							if (!empty($url)):
								?>


								<input type="text" value="<?= 'Hello ' . $url ?>" readonly>

								<?php
							else: ?>
								<input type="text" value="Not a valid url !" readonly>
								<input type="button" value="Return to home">
						<?php
							endif;
						endif; ?>
					</div>
					<div class="footer">
						<p>Copyright (c) 2016 Copyright Holder All Rights Reserved.</p>
					</div>


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