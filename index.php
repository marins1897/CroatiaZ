<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<!-- dogvati sve objave iz baze podataka  -->
<?php $posts = getPublishedPosts()?>
<?php $lastposts = getLastPublishedPosts()?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>NK Croatia Zmijavci </title>

</head>
<body>
	<!--wraps whole page -->
	<div class="row">

    
	<!-- banner -->
	<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->

		<!-- navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->

		<div class="clearfix"></div>
		
<!-- Zadnja objava-->
<div class="row" style="background-color: #990000;height:420px;">
        <div class="center spec">
          

        <?php foreach ((array)$lastposts as $post): ?>

            <a href= "single_post.php?post-slug=<?php echo $post['slug']; ?>"   class="img-link">
                <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>"  style="width:760px;height:420px;  " alt="">
            </a>
       <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" class="upper"  >
            <span class="upper" >	<?php echo $post['title'] ?></span>	
        
        </a>
 <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>"      class="title">
        <span class="title"><?php    echo html_entity_decode( substr($post['body'], 0 , 110) . '...' )?></span> 
 </a>
    
     </div>
           <?php endforeach ?>
        
</div>

<!-- Kraj zadnje objave -->
<div class="clearfix"></div>
<!-- Najnovije objave -->
		<div class="row">
	<div class="center">
		<div class="main">
			<h2>Najnovije vijesti</h2>


            <?php foreach ($posts as $post): ?>

<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>"  class="news w50"  >
<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>"  alt=""  > 
    

          <span class="news-date">  <?php    echo date("j.m. Y ", strtotime($post["created_at"])); ?></span>
            <span class="news-title" style="height: 66px;">	<?php echo $post['title'] ?></span>	
        <?php if (isset($post['topic']['name'])): ?>
            <span class="plus-left"></span>
                <span class="plus-top"></span> 

<?php endif ?>
</a>

<?php endforeach ?>
		</div>
        <!-- Kraj najnovijih objava -->


<!-- Sljdeca utakmica -->
		<div class="right">
        <?php require_once( ROOT_PATH . '/sljedeca.php') ?>


	<a href="Rezultati.php" class="btn-dark">Raspored i rezultati</a>
	<div class="table-container">
			<h3>DRUGA HRVATSKA NOGOMETNA LIGA &nbsp;<strong>2021./2022.</strong> </h3>

          
            <iframe id="sofa-standings-embed-4772-37353" width="100%" height="605" ;
               src="https://www.sofascore.com/tournament/4772/37353/standings/tables/embed" frameborder="0" scrolling="no" 
               style="height:605px!important"  > </iframe>
                 <script>    (function (el) {      window.addEventListener("message", (event) => { 
                          if (event.origin.startsWith("https://www.sofascore")) {          if (el.id === event.data.id) {         
                                 el.style.height = event.data.height + "px";          }        }      });  
                                  })(document.getElementById("sofa-standings-embed-4772-37353"));    </script> 
            

                     <script type="text/javascript" src="https://www.sofascore.com/bundles/sofascoreweb/js/bin/util/embed.min.js" >

                 </script>
   
	</div>
</div>	</div>
</div>
<!--end header-container-->
<!-- Kraj sljedece utakmice i tablice -->
<div class="clearfix"></div>
		
<!-- NOVO-->
<div class="center1" >

<?php require_once( ROOT_PATH . '/igraci.php') ?>


</div>




<!--KRAJ -->
<div class="clearfix"></div>



<!-- HIMNA-->
<div class="center2">

    <iframe width="100%" height="420" src="https://www.youtube.com/embed/QW3-zNgLVJc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<!--KRAJ HIMNE-->
<div class="clearfix"></div>
<!--WebShop-->
<div class="center3">
    

        <a target="" href="Shop.php" class="upper1"  >
            Posjeti naš Webshop</a>


        <div class="box-data1  " style="margin-left:15px;" >
            <a target="_blank" href="https://jako.hr/proizvod/nk-croatia-zmijavci-dres-premium-20/?v=fd4c638da5f8" >
            <img class="aleft" src="shop/slike/premiumdres.png" style="height:300px" alt="PREMIUM dres 20/21">
           
        </a>
            <div class="data">
                <span class="number price-frame">280.00 kn </span>
                <a target="_blank" href="https://jako.hr/proizvod/nk-croatia-zmijavci-dres-premium-20/?v=fd4c638da5f8" >PREMIUM dres 20/21</a>
                <div class="hidden-data velicine"> Veličine:  S, M, L, XL<div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>


        <div class="box-data1  " >
            <a target="_blank" href="https://jako.hr/proizvod/nk-croatia-zmijavci-gostujuci-dres/?v=fd4c638da5f8" >
            <img class="aleft" src="shop/slike/gostujucidres.png" style="height:300px" alt="Gostujuci dres 20/21"></a>
            <div class="data">
                <span class="number price-frame">200.00 kn </span>
                <a target="_blank" href="https://jako.hr/proizvod/nk-croatia-zmijavci-gostujuci-dres/?v=fd4c638da5f8" >Gostujući dres 20/21</a>
                <div class="hidden-data velicine"> Veličine:  S, M, L, XL<div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="box-data1  " >
            <a target="_blank" href="https://jako.hr/proizvod/nk-croatia-zmijavci-zimska-jakna/?v=fd4c638da5f8" >
            <img class="aleft" src="shop/slike/zimskajakna2.png" style="height:300px" alt="Zimska jakna"></a>
            <div class="data">
                <span class="number price-frame">540.00 kn </span>
                <a target="_blank" href="https://jako.hr/proizvod/nk-croatia-zmijavci-zimska-jakna/?v=fd4c638da5f8 " >
               Zimska jakna crvena</a>
                <div class="hidden-data velicine"> Veličine:  S, M, L, XL<div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="box-data1  " >
            <a target="_blank" href="https://jako.hr/proizvod/nk-croatia-zmijavci-suskavac/?v=fd4c638da5f8 " >
            <img class="aleft" src="shop/slike/suskavacmodri.png" style="height:300px" alt="Suskavac"></a>
            <div class="data">
                <span class="number price-frame">240.00 kn </span>
                <a target="_blank" href=" https://jako.hr/proizvod/nk-croatia-zmijavci-suskavac/?v=fd4c638da5f8" >
               Šuškavac modri</a>
                <div class="hidden-data velicine"> Veličine:  S, M, L, XL<div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>


        <div class="box-data1  " >
            <a target="_blank" href=" https://jako.hr/proizvod/trening-hlace-nk-croatia-zmijavci/?v=fd4c638da5f8" >
            <img class="aleft" src="shop/slike/treninghlace.png" style="height:300px" alt="Trening hlace"></a>
            <div class="data">
                <span class="number price-frame">210.00 kn </span>
                <a target="_blank" href="https://jako.hr/proizvod/trening-hlace-nk-croatia-zmijavci/?v=fd4c638da5f8 " >
                Trening hlače</a>
                <div class="hidden-data velicine"> Veličine:  S, M, L, XL<div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>


</div>

<!--KrajWEBshopa-->

<!-- instagram account -->
<div data-mc-src="6cca4712-50f0-4c0d-acfe-2732519c8da3#instagram"></div>
        
<script 
  src="https://cdn2.woxo.tech/a.js#61da283fdfde5f00167d1c1b" 
  async data-usrc>
</script>


<div class="clearfix"></div>
<!--sponzori-->

		<!-- footer -->
		<?php include( ROOT_PATH . '/includes/footer.php') ?>
		<!-- // footer -->