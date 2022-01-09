<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<!-- Dohvati sve teme -->
<?php $topics = getAllTopics();	?>
	<title>Admin | Kreiraj objavu</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

	<div class="container content">
		<!-- Lijevi menu -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

		<!-- Sredina- objavljivanje i uredivanje  -->
		<div class="action create-post-div">
			<h1 class="page-title">Kreiraj/uredi objavu</h1>
			<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'admin/create_post.php'; ?>" >
				<!-- validacija -->
				<?php include(ROOT_PATH . '/includes/errors.php') ?>

				<!-- id potreban za identifikaciju objave koja se ureduje-->
				<?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?>

				<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Naslov">
				<label style="float: left; margin: 5px auto 5px;">Naslovna slika</label> <p>Slika mora biti veličine 1080x1080 px </p>
				<input type="file" name="featured_image" >
				<textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea>
				<select name="topic_id">
					<option value="" selected disabled>Odaberi temu*</option>
					<?php foreach ($topics as $topic): ?>
						<option value="<?php echo $topic['id']; ?>">
							<?php echo $topic['name']; ?>
						</option>
					<?php endforeach ?>
				</select>
				
				<!-- samo admin moze vidjeti publish -->
				<?php if ($_SESSION['user']['role'] == "Admin"): ?>
		
					<?php if ($published == true): ?>
						<label for="publish">
							Publish
							<input type="checkbox" value="1" name="publish" checked="checked">&nbsp;
						</label>
					<?php else: ?>
						<label for="publish">
							Objavi (*mora biti označeno*)
							<input type="checkbox" value="1" name="publish">&nbsp;
						</label>
					<?php endif ?>
				<?php endif ?>
				
				<!-- ako se objava ureduje prikazi update umjesto objavi -->
				<?php if ($isEditingPost === true): ?> 
					<button type="submit" class="btn" name="update_post">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_post">Spremi!</button>
				<?php endif ?>

			</form>
		</div>
		<!-- kraj sredine za objavljivanje i uredivanje-->
	</div>




</body>
</html>

<script>

	CKEDITOR.replace('body')
</script>

