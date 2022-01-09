<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php 
	// dohvaca sve korisnike iz baze
	$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];				
?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
	<title>Admin | Upravljaj korisnicima</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>
	<div class="container content">
		<!-- Lijevi izbornik -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>
		<!-- sredina za objavljivanje i uredivanje  -->
		<div class="action">
			<h1 class="page-title">Dodaj/uredi korisnika</h1>

			<form method="post" action="<?php echo BASE_URL . 'admin/users.php'; ?>" >

				<!-- validacija -->
				<?php include(ROOT_PATH . '/includes/errors.php') ?>

				<!-- uzmi id korisnika koji se ureduje -->
				<?php if ($isEditingUser === true): ?>
					<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
				<?php endif ?>

				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Korisničko ime">
				<input type="email" name="email" value="<?php echo $email ?>" placeholder="E mail">
				<input type="password" name="password" placeholder="Lozinka">
				<input type="password" name="passwordConfirmation" placeholder="Potvrda lozinka">
				<select name="role">
					<option value="" selected disabled>Dodijeli ulogu</option>
					<?php foreach ($roles as $key => $role): ?>
						<option value="<?php echo $role; ?>"><?php echo $role; ?></option>
					<?php endforeach ?>
				</select>

				<!-- ako ureduje korisnika prikazi update umjesto objavi ga -->
				<?php if ($isEditingUser === true): ?> 
					<button type="submit" class="btn" name="update_admin">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_admin">Save User</button>
				<?php endif ?>
			</form>
		</div>
		<!-- // sredina kraj -->

		<!-- prikaz rezultata iz baze-->
		<div class="table-div">
			<!-- obavijest -->
			<?php include(ROOT_PATH . '/includes/messages.php') ?>

			<?php if (empty($admins)): ?>
				<h1>No admins in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>No</th>
						<th>Admin</th>
						<th>Uloga</th>
						<th colspan="2">Uredi       |      Izbriši</th>
					</thead>
					<tbody>
					<?php foreach ($admins as $key => $admin): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td>
								<?php echo $admin['username']; ?>, &nbsp;
								<?php echo $admin['email']; ?>	
							</td>
							<td><?php echo $admin['role']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="users.php?edit-admin=<?php echo $admin['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete" 
								    href="users.php?delete-admin=<?php echo $admin['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // kraj prikaza iz baze -->
	</div>
</body>
</html>