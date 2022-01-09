<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<!-- dohvaca sve objave  -->

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
    <div class="center spec"  style="background-color: #990000;">
                            <img class="aleft" src="skola/mladi.JPG" style="height:300px; width:760px"  alt="" />
                     <span class="upper spec hide">&nbsp;</span>
        <h1 class="title spec hide">Uzrasti </h1>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
</div>
<div class="row">
<div class="center">
    <div class="main all hide-images">
        <p>&nbsp;</p>

<table border="1" cellpadding="0" cellspacing="0" >
<tbody>
    <tr>
        <td style="width:170px">
        <p><strong>KATEGORIJA</strong></p>
        </td>
        <td style="width:208px">
        <p><strong>NATJECANJE</strong></p>
        </td>
        <td style="width:227px">
        <p><strong>TRENERI</strong></p>
        </td>
    </tr>
    <tr>
        <td style="width:170px">
        <p>Juniori </p>
        </td>
        <td style="width:208px">
        <p>II. NL Nogometnog središta Split </p>
        </td>
        <td style="width:227px">
        <p>Mario Todorić</p>
        </td>
    </tr>
    
    <tr>
        <td style="width:170px">
        <p>Kadeti </p>
        </td>
        <td style="width:208px">
        <p>II. NL Nogometnog središta Split</p>
        </td>
        <td style="width:227px">
            <p>Ivica Znaor</p>
        </td>
    </tr>
   
    <tr>
        <td style="width:170px">
        <p>Stariji Pioniri </p>
        </td>
        <td style="width:208px">
        <p>II. NL Nogometnog središta Split</p>
        </td>
        <td style="width:227px">
        <p>Marijo Šuto</p>
        </td>
    </tr>
    <tr>
        <td style="width:170px">
        <p>Mlađi Pioniri  </p>
        </td>
        <td style="width:208px">
        <p>II. NL Nogometnog središta Split</p>
        </td>
        <td style="width:227px">
        <p>Ivan Klarić-Dračar</p>
        </td>
    </tr>
  
    
    <tr>
        <td style="width:170px">
        <p>Stariji početnici </p>
        </td>
        <td style="width:208px">
        <p>Liga Imotske krajine i Makarskoj primorja</p>
        </td>
        <td style="width:227px">
        <p>unesi ime</p>
        </td>
    </tr>
    <tr>
        <td style="width:170px">
        <p>Mlađi početnici </p>
        </td>
        <td style="width:208px">
        <p>Liga Imotske krajine i Makarskog primorja</p>
        </td>
        <td style="width:227px">
        <p>unesi ime</p>
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