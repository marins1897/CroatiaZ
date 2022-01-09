<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Admin | Upravljačka ploča</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
			
			<h1 style="margin-top:14%;font-family:Verdana, Geneva, Tahoma, sans-serif">	NK Croatia Zmijavci - Admin</h1>
			
			</a>
		</div>
		<div>  <img src="../static/images/logo.svg" style="height:100px;width:100px;">  </div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">Odjavi se</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Dobrodošli</h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span></span> <br>
				<span>Novi korisnici</span>
			</a>
			<a href="posts.php">
				<span></span> <br>
				<span>Objavljene objave</span>
			</a>
			<a href="create_post.php">
				<span></span> <br>
				<span>Dodaj novu objavu</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Novi korisnik</a>
			<a href="posts.php">Nova objava</a>
		</div>
	</div>
</body>
</html>