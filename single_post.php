<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php include('includes/head_section.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	
	}
	$topics = getAllTopics();
?>
<?php $posts = getPublishedPosts()?>
<?php $lastpost=getLastPublishedPost()?>
<title> <?php echo $post['title'] ?> | NK Croatia Zmijavci</title>
</head>
<body>
<div class="row">
<!-- banner -->
<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->


	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->
	
	<div class="row">
        <div class="center spec">
                                <img class="aleft" src="vijesti/thumb.jpg" style="height:250px; width:760px" alt="">
                        <span class="upper spec hide">   VIJESTI   </span>
            
            <div class="clearfix"></div>
        </div>
    </div>
   <!-- Vijest -->
   <div class="row main-container">
<div class="center">
		<?php if ($post['published'] == false): ?>
				<h1 class="main-right">Sorry... This post has not been published</h1>
			<?php else: ?>
				
				
				<div class="main txt hide-images">
                <h1 class="main-right"><?php echo $post['title']; ?></h1>
					<?php echo html_entity_decode($post['body']); ?>
				</div>
			<?php endif ?>
			
			<!-- // full post div -->
<!-- post sidebar -->
<div class="right aleft">
			
		
					<h2 class="title">Najnovije objave:</h2>
		
				<ul class="left-nav">
				<li > <strong>	<?php foreach ($lastpost as $post): ?>
						<a 	href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
							<?php echo $post['title']; ?>
						</a> </strong>
					<?php endforeach ?></li>
					</ul>
			
		</div>
		<!-- // post sidebar -->
	




		<!-- post sidebar -->
		<div class="right aleft">
			
				
					<h2 class="title">Kategorije:</h2>
				<ul class="left-nav">
				
				<li>	<strong>	<?php foreach ($topics as $topic): ?>
				 <a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a> </strong>
					<?php endforeach ?></li>
                    </ul>
	
		
		</div>
		<!-- // post sidebar -->
	</div>
</div>
<!-- // content -->

<!-- // content -->
</div>

</div>
</div>
<?php include( ROOT_PATH . '/includes/footeri.php'); ?>