<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>
<?php  include('includes/head_section.php'); ?>
	<title>Prijavi se | NK Croatia Zmijavci </title>
</head>
<body>
<div class="container">
	

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Prijavi se</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Korisničko ime">
			<input type="password" name="password" placeholder="Lozinka">
			<button type="submit" class="btn" name="login_btn">Prijavi se</button>
			<p>
				Još nisi član? <a href="register.php">Registriraj se</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->

