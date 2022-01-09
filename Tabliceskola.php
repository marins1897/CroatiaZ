 <?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<!-- dohvaca sve objave -->

<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>

	<title>NK Croatia Zmijavci </title>

</head>
<body>
	<!-- wraps whole page -->
	<div class="row">

    
	<!-- banner -->
	<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->

		<!-- navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->

		<div class="clearfix"></div>
	

<div class="row">
    <div class="center spec" style="background-color: #990000;" >
                            <img class="aleft" src="skola/mladi.JPG" style="height:300px; width:760px"  alt="" />
                     <span class="upper spec hide">&nbsp;</span>
        <h1 class="title spec hide">Tablice  </h1>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
</div>

<div class="row">
    <div class="center">
        <div class="main all hide-images">
            




<table border="1" cellpadding="1" cellspacing="1" >
	<tbody>
		<tr>
			<td><br><br>
			<p><h7 class="title spec hide">II. NL SREDIŠTE SPLIT JUNIORI</h7></p>
            <img src="skola/Juniori-tablica.jpg" alt="">
			<p></p>
			</td>
			<td></td>
		</tr>
    
		<tr>
			<td><br><br>
			<p><h7 class="title spec hide">II. NL SREDIŠTE SPLIT KADETI</h7></p>
            <img src="skola/kadeti-tablica.jpg" alt="">
			<p></p>
			</td>
			<td>&nbsp;</td>
		</tr>
     
		<tr>
			<td><br><br>
			<p><h7 class="title spec hide" >II. NL SREDIŠTE SPLIT STARIJI PIONIRI</h7></p>
            <img src="skola/StarijiPioniri-tablica.jpg" alt="">
			<p></p>
			</td>
			<td>&nbsp;</td>
		</tr>
       
		<tr>
			<td><br><br>
			<p><h7 class="title spec hide" >II. NL SREDIŠTE SPLIT MLAĐI PIONIRI</h7></p>
            <img src="skola/MladiPioniri-tablica.jpg" alt="">
			<p></p>
			</td>
			<td>&nbsp;</td>
		</tr>
      
		<tr>
			<td><br><br>
			<p><h7 class="title spec hide" >LIGA POČETINKA IMOTSKE KRAJINE I MAKARSKOG PRIMORJA</h7></p>
            <img src="skola/StarijiPocetnici-tablica.jpg" alt="">
			<p></p>

			
			</td>
			<td>&nbsp;</td>
		</tr>

		<tr>
			<td><br><br>
			<p><h7 class="title spec hide" >LIGA MLAĐIH POČETNIKA IMOTSKE KRAJINE I MAKARSKOG PIRMORJA</h7></p>
            <img src="skola/MladiPocetnici-tablica.jpg" alt="">
			
	
			<p></p>
			</td>
		</tr>
	</tbody>
</table>


        </div>


        <div class="right">
		<?php require_once( ROOT_PATH . '/sljedeca.php') ?>


            <a href="Rezultati.php" class="btn-dark">Raspored i rezultati</a>
            <div class="table-container">
                    <h3>DRUGA HRVATSKA NOGOMETNA LIGA &nbsp;<strong>2021./2022.</strong> </h3>
        
                
                    <iframe id="sofa-standings-embed-4772-37353" width="100%" height="605" background-color: #cc0000;
                       src="https://www.sofascore.com/tournament/4772/37353/standings/tables/embed" frameborder="0" scrolling="no" 
                       style="height:605px!important">  </iframe>
                         <script>    (function (el) {      window.addEventListener("message", (event) => { 
                                  if (event.origin.startsWith("https://www.sofascore")) {          if (el.id === event.data.id) {         
                                         el.style.height = event.data.height + "px";          }        }      });  
                                          })(document.getElementById("sofa-standings-embed-4772-37353"));    </script> 
                                           
                                            <script type="text/javascript" src="https://www.sofascore.com/bundles/sofascoreweb/js/bin/util/embed.min.js">
        
                         </script>
                        
            </div>
        </div>	</div>
        </div>
        <!--end header-container-->
                    <!--sponsors-->

<div class="clearfix"></div>
<!--sponzori-->
<?php include( ROOT_PATH . '/includes/footeri.php') ?>