<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php include('includes/head_section.php'); ?>
<?php 
	// dohvati post od teme
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
	}
?>
	<title>NK Croatia Zmijavci </title>
</head>
<body>
<div class="row">

	<!-- banner -->
	<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->



<!-- Navbar -->
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
<!-- // Navbar -->

<!-- Naslovna -->

<div class="row">
        <div class="center spec">
                                <img class="aleft" src="vijesti/thumb.jpg" style="height:250px; width:760px" alt="">
                        <span class="upper spec hide">   VIJESTI   </span>
            <h1 class="title spec hide">  <?php echo getTopicNameById($topic_id); ?>   </h1>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
<!-- Sadrzaj s vijestima -->
<div class="row main-container">
	<div class="center">
		<div class="">
		
		<?php foreach ($posts as $post): ?>
			<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" class="w30">
			<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" alt="" style="width:100%;" >
			
		
		
		
			<span class="news-date"> 
			<?php  echo date("j.m. Y ", strtotime($post["created_at"])); ?>
			</span>

			<span class="news-title" style="height: 80px;"><?php echo $post['title'] ?></span>
			<span class="plus-left"></span>
                        <span class="plus-top"></span>
			</a>
		
			<?php endforeach ?>
			
		</div>
	</div>
</div>
<!-- KRAJ VIJESTI -->






</div>
<!-- // container -->

<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footeri.php'); ?>
<!-- // Footer -->