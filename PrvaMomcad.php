<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<!-- dohvaca sve objave  -->

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
		

<div class="row" >
    <div class="center spec2" style="background-color: #990000;"  >
                            <img src="prvamomcad/njih114.jpg"  style="height:420px; width:760px"  alt="" />
                    
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
        <div class="clearfix"></div>
        <div id="players_container" >
                                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/marinobulat.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">1</span>
                                    <span class="aright">Vratari</span>
                                </div>
                                <span class="staff-name">Marino Bulat</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>26.06.1999. </strong><br>
                                    Visina:  <strong>194 cm</strong><br>
                                    Težina:  <strong>85 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/tomislavadolf.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">12</span>
                                    <span class="aright">Vratari</span>
                                </div>
                                <span class="staff-name">Tomislav Adolf Tomić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>07.03.1997. </strong><br>
                                    Visina:  <strong>- cm</strong><br>
                                    Težina:  <strong>- kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                   
                    <div class="box-data third">
                        <img class="aleft" src="prvamomcad/igraci/filipcapin.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">87</span>
                                    <span class="aright">Vratari</span>
                                </div>
                                <span class="staff-name">Filip Ćapin</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>04.06.2004. </strong><br>
                                    Visina:  <strong>186 cm</strong><br>
                                    Težina:  <strong>75 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data fourth">
                        <img class="aleft" src="prvamomcad/igraci/vlahoskaramuca.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">41</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Vlaho Skaramuca</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>16.02.1998. </strong><br>
                                    Visina:  <strong>- cm</strong><br>
                                    Težina:  <strong>- kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data last">
                        <img class="aleft" src="prvamomcad/igraci/petarjovic.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">45</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Petar Jović</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>18.05.1997. </strong><br>
                                    Visina:  <strong>185 cm</strong><br>
                                    Težina:  <strong>78 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                   
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/ivandujmovic.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">33</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Ivan Dujmović</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>19.04.1998. </strong><br>
                                    Visina:  <strong>189 cm</strong><br>
                                    Težina:  <strong>82 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/domagojmarusic.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">2</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Domagoj Marušić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>14.10.2000. </strong><br>
                                    Visina:  <strong>- cm</strong><br>
                                    Težina:  <strong>- kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                   
                    <div class="box-data third">
                        <img class="aleft" src="prvamomcad/igraci/nikolasalinovic.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">4</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Nikola Šalinović</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>10.05.1995. </strong><br>
                                    Visina:  <strong>189 cm</strong><br>
                                    Težina:  <strong>85 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                   
                    <div class="box-data fourth">
                        <img class="aleft" src="prvamomcad/igraci/lukadadic.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">44</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Luka Dadić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>30.04.1998. </strong><br>
                                    Visina:  <strong>185 cm</strong><br>
                                    Težina:  <strong>82 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data last">
                        <img class="aleft" src="prvamomcad/igraci/markosuto.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">55</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Marko Šuto</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>24.12.2001. </strong><br>
                                    Visina:  <strong>192 cm</strong><br>
                                    Težina:  f<strong>79 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/ivantodoric.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">25</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Ivan Todorić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>20.04.1989. </strong><br>
                                    Visina:  <strong>- cm</strong><br>
                                    Težina:  <strong>- kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/josipbeslic.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">27</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Josip Bešlić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>13.09.2000. </strong><br>
                                    Visina:  <strong>176 cm</strong><br>
                                    Težina:  <strong>66 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                   
                    <div class="box-data third">
                        <img class="aleft" src="prvamomcad/igraci/matesuto.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">3</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Mate Šuto</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>02.10.1996. </strong><br>
                                    Visina:  <strong>188 cm</strong><br>
                                    Težina:  <strong>80 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                    
                    <div class="box-data fourth">
                        <img class="aleft" src="prvamomcad/igraci/antevrljicak.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">26</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Ante Vrljičak</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>26.04.1997. </strong><br>
                                    Visina:  <strong>185 cm</strong><br>
                                    Težina:  <strong>76 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data last">
                        <img class="aleft" src="prvamomcad/igraci/petarmikulic.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">5</span>
                                    <span class="aright">Obrambeni</span>
                                </div>
                                <span class="staff-name">Petar Mikulić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>14.07.2000. </strong><br>
                                    Visina:  <strong>181 cm</strong><br>
                                    Težina:  <strong>72 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                   
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/stozer/prazan1.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">16</span>
                                    <span class="aright">Vezni</span>
                                </div>
                                <span class="staff-name">Ivan Šabić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>01.12.1996. </strong><br>
                                    Visina:  <strong>- cm</strong><br>
                                    Težina:  <strong>- kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                   
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/petarbasicsisko.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">14</span>
                                    <span class="aright">Vezni</span>
                                </div>
                                <span class="staff-name">Petar Bašić-Šiško</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>23.01.1995. </strong><br>
                                    Visina:  <strong>184 cm</strong><br>
                                    Težina:  <strong>78 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data third">
                        <img class="aleft" src="prvamomcad/igraci/joaoerick.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">15</span>
                                    <span class="aright">Vezni</span>
                                </div>
                                <span class="staff-name">Joao Erick</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>15.03.1998. </strong><br>
                                    Visina:  <strong>180 cm</strong><br>
                                    Težina:  <strong>70 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data fourth">
                        <img class="aleft" src="prvamomcad/igraci/markbushaj.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">9</span>
                                    <span class="aright">Vezni</span>
                                </div>
                                <span class="staff-name">Mark Bushaj</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>19.03.2001. </strong><br>
                                    Visina:  <strong>174 cm</strong><br>
                                    Težina:  <strong>63 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                 
                    <div class="box-data last">
                        <img class="aleft" src="prvamomcad/igraci/mijosabic.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">23</span>
                                    <span class="aright">Vezni</span>
                                </div>
                                <span class="staff-name">Mijo Šabić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>08.10.1994. </strong><br>
                                    Visina:  <strong>175 cm</strong><br>
                                    Težina:  <strong>67 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                 
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/frankozaric.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">11</span>
                                    <span class="aright">Vezni</span>
                                </div>
                                <span class="staff-name">Fran Kožarić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>10.08.2001. </strong><br>
                                    Visina:  <strong>181 cm</strong><br>
                                    Težina:  <strong>75 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/antecapin1.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">19</span>
                                    <span class="aright">Napadač</span>
                                </div>
                                <span class="staff-name">Ante Ćapin</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>13.12.1985. </strong><br>
                                    Visina:  <strong>180 cm</strong><br>
                                    Težina:  <strong>74 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                 
                    <div class="box-data third">
                        <img class="aleft" src="prvamomcad/igraci/antecapin.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">28</span>
                                    <span class="aright">Napadač</span>
                                </div>
                                <span class="staff-name">Ante Ćapin</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>30.10.2002. </strong><br>
                                    Visina:  <strong>- cm</strong><br>
                                    Težina:  <strong>- kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                  
                    <div class="box-data fourth">
                        <img class="aleft" src="prvamomcad/igraci/tomislavgudelj.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">70</span>
                                    <span class="aright">Napadač</span>
                                </div>
                                <span class="staff-name">Tomislav Gudelj</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>01.05.1998. </strong><br>
                                    Visina:  <strong>- cm</strong><br>
                                    Težina:  <strong>- kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                 
                    <div class="box-data last">
                        <img class="aleft" src="prvamomcad/igraci/tomislavmrkonjic.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">10</span>
                                    <span class="aright">Napadač</span>
                                </div>
                                <span class="staff-name">Tomislav Mrkonjić</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>22.02.1994. </strong><br>
                                    Visina:  <strong>184 cm</strong><br>
                                    Težina:  <strong>77 kg</strong><br>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                                 
                    <div class="box-data ">
                        <img class="aleft" src="prvamomcad/igraci/antesuto.png" alt="" />
                            <div class="data">
                                <div class="number">
                                    <span class="aleft">7</span>
                                    <span class="aright">Napadač</span>
                                </div>
                                <span class="staff-name">Ante Šuto</span><br>
                                <div class="hidden-data">
                                                                            Datum rođenja: <strong>19.06.2000. </strong><br>
                                    Visina:  <strong>185 cm</strong><br>
                                    Težina:  <strong>80 kg</strong><br>
                                </div>
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