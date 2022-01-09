<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<!-- dohvaca sve objave iz baze podataka -->

<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>

	<title>NK Croatia Zmijavci </title>

</head>
<body>
	<!--  wraps whole page -->
	<div class="row">

    
	<!-- banner -->
	<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->

		<!-- navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->

		<div class="clearfix"></div>
	

<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
    var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : ''
        });
    };
</script>




<div class="row">
    <div class="center spec">
                            <img class="aleft" src="klub/pov/naslov.jpg" style="height:250px; width:760px"  alt="" />
                     <span class="upper spec hide">&nbsp;</span>
        <h1 class="title spec hide">Kontaktirajte nas!</h1>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
</div>



<div class="row">
	<div class="center">
		<div class="main all" style="font-size:22px; margin-top:3%;">
            <img class="footer-logo" src="static/images/logo.svg" style="height:300px; margin-top:0px;">
            <strong>NK CROATIA</strong> ZMIJAVCI<br>
            Kujundžušin put 12<br>
            21266 Zmijavci<br><br>

            Telefon: +385 21 840 600<br>
            Fax: + 385 21 840 600<br>
            E-mail: <a href="mailto:zmijavci.nk.croatia@gmail.com">zmijavci.nk.croatia@gmail.com</a>
        </p>

<p>OIB: 84152025849<br />
</p>
		</div>
        <div class="right">
            <div class="kontakt_forma">
       
                                <form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" >
                                <?php include(ROOT_PATH . '/includes/errors.php') ?>
                    <div class="pregrada">
                        <label for="ime_i_prezime">Ime i prezime: *</label>
                        <input type="text" value=""  id="ime_i_prezime" class="" name="ime_i_prezime"> 
                        <div class="clearfix"></div>
                    </div>
                    <div class="pregrada">
                        <label for="email">E-mail: *</label>
                        <input type="text" value="" id="email" class="" name="email"> 
                        <div class="clearfix"></div>
                    </div>
                    <div class="pregrada">
                        <label for="poruka">Poruka: *</label>
                        <textarea rows="10" cols="" id="poruka_slanje" class="" name="poruka"></textarea>  
                        <div class="clearfix"></div>
                    </div>
                  
                    <div class="pregrada" style="display:none;"  id="pp">
                        <div class="chck">
                            <input id="ok_input" type="checkbox" value="ok" name="ok">
                            <label for="ok_input">
                                <span>
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="8.886px" height="6.607px" viewBox="57.953 14.778 8.886 6.607" enable-background="new 57.953 14.778 8.886 6.607" xml:space="preserve">
                                        <polyline fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-miterlimit="10" points="58.501,17.833 60.834,20.333 
                                         66.334,15.333 "/>
                                    </svg>
                                </span>
                                * Suglasan sam sa dolje navedenim, te se svjesno dajem osobne podatke za izvršenje usluge 
                            </label>
                        </div>
                    </div>  
				
                    <div class="button_align">
                         <a href="register.php" ><button class="btn">Pošalji</button></a>
                    
                     
                    </div>

                    <div class="clearfix"></div>
                </form>
                 <p style="font-size:16px;">Kontaktni podaci prikupljeni ovim obrascem neće biti javno objavljeni niti će koristiti za bilo što drugo, osim za slanje odgovora na Vaš upit!</p>
                 <p>Naša pravila privatnosti pregledajte <a target="_blank" href="static\images\PRAVILA_PRIVATNOSTI.pdf">ovdje</a></p>
            </div><!--end kontakt_forma-->
        </div>
		        
	</div>
</div>

<!--end header-container-->



<style type="text/css">.pregrada{display:block;float:left;width:100%}</style>	

 <!--sponzori-->
 <div class="clearfix"></div>



<?php include( ROOT_PATH . '/includes/footeri.php') ?>