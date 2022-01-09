<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<!-- dohvati sve teme iz baze -->
<?php $topics = getAllTopics();	?>
	<title>Admin | Upravljaj temama</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>
	<div class="container content">
		<!-- Lijevi izbornik-->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

		<!-- sredina- za objavljivanje i uredivanje -->
		<div class="action">
			<h1 class="page-title">Kreiraj/uredi temu</h1>
			<form method="post" action="<?php echo BASE_URL . 'admin/topics.php'; ?>" >
				<!-- validacija -->
				<?php include(ROOT_PATH . '/includes/errors.php') ?>
				<!-- ako se tema ureduje potreban je id te teme -->
				<?php if ($isEditingTopic === true): ?>
					<input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
				<?php endif ?>
				<input type="text" name="topic_name" value="<?php echo $topic_name; ?>" placeholder="Tema">
				<!-- ako se tema ureduje prikaze update -->
				<?php if ($isEditingTopic === true): ?> 
					<button type="submit" class="btn" name="update_topic">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_topic">Spremi temu</button>
				<?php endif ?>
			</form>
		</div>
		<!-- // sredina uredivanje i objavljivanje kraj -->

		<!-- prikazi podatke iz baze-->
		<div class="table-div">
			<!-- obavijest -->
			<?php include(ROOT_PATH . '/includes/messages.php') ?>
			<?php if (empty($topics)): ?>
				<h1>No topics in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>No</th>
						<th>Ime teme</th>
						<th colspan="2">Uredi        |                  Izbriši</th>
					</thead>
					<tbody>
					<?php foreach ($topics as $key => $topic): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $topic['name']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="topics.php?edit-topic=<?php echo $topic['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete"								
									href="topics.php?delete-topic=<?php echo $topic['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // kraj prikazivanja tema iz baze -->
	</div>
</body>
</html>