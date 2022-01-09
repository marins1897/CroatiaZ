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
    <div class="center spec2" style="background-color: #990000;" >
                            <img src="prvamomcad/njih114.jpg" style="height:420px; width:760px"  alt="" />
                            
                    
    </div>
    <div class="center">
    <h1 class="title spec auto">Prva momčad</h1>
        <div class="select-container">    
            <label>Sezona</label>
            <select id="team_sezon" onchange="sjx('getTeamSeason','players',this.options[this.selectedIndex].value); return false;">
                                        <option value="10">2021./2022.</option>
                                        
                                </select>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
</div>


<div class="row">
	<div class="center">
        <div class="main-container">     
			<div id="staff_container" >
                                                  <div class="box-data ">
						<img class="aleft" src="prvamomcad/stozer/juresrzic.png" alt="" />
					
						<div class="data">
							<span class="staff-name">Jure Srzić</span><br>
							<span class="hidden-data">
								<span class="funkcija">Glavni trener</span><br>
																Datum rođenja: <strong>20.09.1984. </strong><br>
								
							</span>
							 
						</div>
                        <div class="clearfix"></div>
                    </div>

                                    <div class="box-data ">
						<img class="aleft" src="prvamomcad/stozer/gorankaroglan.png" alt="" />
					
						<div class="data">
							<span class="staff-name">Goran Karoglan</span><br>
							<span class="hidden-data">
								<span class="funkcija">Pomoćni trener</span><br>
																Datum rođenja: <strong>24.02.1988. </strong><br>
								
							</span>
							 
						</div>
                        <div class="clearfix"></div>
                    </div>


                                    <div class="box-data third">
						<img class="aleft" src="prvamomcad/stozer/petarmrkonjic.png" alt="" />
					
						<div class="data">
							<span class="staff-name">Petar Mrkonjić </span><br>
							<span class="hidden-data">
								<span class="funkcija">Tehnički direktor</span><br>
																Datum rođenja: <strong>28.05.1958. </strong><br>
								
							</span>
							 
						</div>
                        <div class="clearfix"></div>
                    </div>

                                    <div class="box-data fourth">
						<img class="aleft" src="prvamomcad/stozer/kristijankrajinovic.png" alt="" />
					
						<div class="data">
							<span class="staff-name"> Kristijan Krajinović </span><br>
							<span class="hidden-data">
								<span class="funkcija">Kondicijski trener</span><br>
																Datum rođenja: <strong>30.11.1995. </strong><br>
								
							</span>
							 
						</div>
                        <div class="clearfix"></div>
                    </div>

                                    <div class="box-data fourth ">
						<img class="aleft" src="prvamomcad/stozer/prazan1.png" alt="" />
					
						<div class="data">
							<span class="staff-name">Darija Brečić  </span><br>
							<span class="hidden-data">
								<span class="funkcija">Doktor</span><br>
																Datum rođenja: <strong>12.09.1966. </strong><br>
								
							</span>
							 
						</div>
                        <div class="clearfix"></div>
                    </div>

                                    <div class="box-data ">
						<img class="aleft" src="prvamomcad/stozer/matekasalo.png" alt="" />
					
						<div class="data">
							<span class="staff-name">Mate Kasalo  </span><br>
							<span class="hidden-data">
								<span class="funkcija">Doktor</span><br>
																Datum rođenja: <strong>06.01.1971. </strong><br>
							
							</span>
							 
						</div>
                        <div class="clearfix"></div>
                    </div>

                                    <div class="box-data ">
						<img class="aleft" src="prvamomcad/stozer/josipjukic.png" alt="" />
					
						<div class="data">
							<span class="staff-name">Josip Jukić  </span><br>
							<span class="hidden-data">
								<span class="funkcija">Fizioterapeut</span><br>
																Datum rođenja: <strong>03.07.1994.</strong><br>
								
							</span>
							 
						</div>
                        <div class="clearfix"></div>
                    </div>

                                    <div class="box-data third">
						<img class="aleft" src="prvamomcad/stozer/prazan1.png" alt="" />
					
						<div class="data">
							<span class="staff-name">Željko Garac </span><br>
							<span class="hidden-data">
								<span class="funkcija">Predstavnik za sigurnost</span><br>
																Datum rođenja: <strong>18.01.1961. </strong><br>
								
							</span>
							 
						</div>
                        <div class="clearfix"></div>
                    </div>


                                    <div class="box-data fourth ">
						<img class="aleft" src="prvamomcad/stozer/prazan1.png" alt="" />
					
						<div class="data">
							<span class="staff-name"> "Unesi ime" </span><br>
							<span class="hidden-data">
								<span class="funkcija">Ekonom</span><br>
																Datum rođenja: <strong>30.11.0000. </strong><br>
								
							</span>
							 
						</div>
                        <div class="clearfix"></div>
                    </div>

                			</div>
        </div>
	</div>
</div>

<!--end header-container-->
<!--sponsors-->

<div class="clearfix"></div>
<?php include( ROOT_PATH . '/includes/footeri.php') ?>

