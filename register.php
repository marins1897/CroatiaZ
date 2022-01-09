<?php  include('config.php'); ?>

<?php  include('includes/registration_login.php'); ?>

<?php include('includes/head_section.php'); ?>

<title>Registriraj se | NK Croatia Zmijavci </title>
</head>
<body>
<div class="container">


	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2 class="title">NK CROATIA ZMIJAVCI</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Korisničko ime">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="E mail">
			<input type="password" name="password_1" placeholder="Lozinka">
			<input type="password" name="password_2" placeholder="Potvrda lozinke">
			<button type="submit" class="btn" name="reg_user">Registriraj se</button>
			<p>
				Imaš račun? <a href="login.php">Prijavi se</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->
