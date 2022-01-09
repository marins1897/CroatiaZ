<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
<?php $lastposts = getLastPublishedPosts()?>
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
<span class="title"><?php    echo html_entity_decode( substr($post['body'], 0 , 150) . '...' )?></span> 
</a>

</div>
<?php endforeach ?>

</div>


    <div class="clearfix"></div>
</div>


<!-- Rezultati i tablice-->



<div class="row">
	<div class="center">
		<div class="main">
					<table class="rezultati">
                <tr>
                    <td class="td-kolo">Kolo</td>
                    <td class="satnica-td">Sat</td>
                    <td class="domacin-td">Domaćin</td>
                    <td class="rez-td">Rezultat</td>
                    <td class="gost-td">Gost</td>
                </tr>
				                <tr>
                    <td class="td-kolo">1. kolo</td>
                    <td class="stanica-td">Ponedjeljak, <br>13.08.2021. 20:00</td>
                    <td class="domacin-td">NK Inter Zaprešić</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/inter.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">0 : 0</span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>
				                <tr>
                    <td class="td-kolo">2. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>22.08.2021. 17:30</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">2 : 1</span>
                        <img class="aright" src="rez/kustosija.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Kustošija</td>
                </tr>
				                <tr>
                    <td class="td-kolo">3. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>29.08.2021. 17:00</td>
                    <td class="domacin-td">NK BSK Bijelo Brdo</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/bsk.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">2 : 0</span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>
				                <tr>
                    <td class="td-kolo">4. kolo</td>
                    <td class="stanica-td">Ponedjeljak, <br>10.09.2021. 16:30</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">2 : 2</span>
                        <img class="aright" src="rez/dinamo.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">GNK Dinamo Zagreb II</td>
                </tr>
				                <tr>
                    <td class="td-kolo">5. kolo</td>
                    <td class="stanica-td">Srijeda, <br>15.09.2021. 16:30</td>
                    <td class="domacin-td">NK Solin</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/solin.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">3 : 0</span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>
				                <tr>
                    <td class="td-kolo">6. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>19.09.2021. 15:30</td>
                    <td class="domacin-td">NK Osijek II</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/osijek.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">1 : 2</span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>
				                <tr>
                    <td class="td-kolo">7. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>26.09.2021. 16:00</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">3 : 0</span>
                        <img class="aright" src="rez/opatija.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Opatija</td>
                </tr>
				                <tr>
                    <td class="td-kolo">8. kolo</td>
                    <td class="stanica-td">Subota, <br>02.10.2021. 18:00</td>
                    <td class="domacin-td">NK Varaždin</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/varazdin.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">5 : 1</span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>
				                <tr>
                    <td class="td-kolo">9. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>17.10.2021. 15:00</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">1 : 0</span>
                        <img class="aright" src="rez/rudes.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Rudeš</td>
                </tr>
				                <tr>
                    <td class="td-kolo">10. kolo</td>
                    <td class="stanica-td">Subota, <br>23.10.2021. 15:00</td>
                    <td class="domacin-td">NK Jarun</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/jarun.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">2 : 3</span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>
				                <tr>
                    <td class="td-kolo">11. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>31.10.2021. 15:00</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">1 : 0</span>
                        <img class="aright" src="rez/sesvete.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Sesvete</td>
                </tr>
				                <tr>
                    <td class="td-kolo">12. kolo</td>
                    <td class="stanica-td">Petak, <br>06.11.2021. 14:00</td>
                    <td class="domacin-td">NK Dugopolje</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/dugopolje.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">1 : 2</span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>
				                <tr>
                    <td class="td-kolo">13. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>21.11.2021. 13:30</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">0 : 1</span>
                        <img class="aright" src="rez/dubrava.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Dubrava Tim Kabel</td>
                </tr>
				                <tr>
                    <td class="td-kolo">14. kolo</td>
                    <td class="stanica-td">Ponedjeljak, <br>28.11.2021. 13:30</td>
                    <td class="domacin-td">NK Orijent 1919</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/orijent.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">3 : 2</span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>
				                <tr>
                    <td class="td-kolo">15. kolo</td>
                    <td class="stanica-td">Četvrtak, <br>05.12.2021. 13:30</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez">1 : 1</span>
                        <img class="aright" src="rez/cibalia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">HNK Cibalia Vinkovci</td>
                </tr>

                <tr>
                    <td class="td-kolo">16. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>13.02.2022. 15:30</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/inter.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Inter Zaprešić</td>
                </tr>

                <tr>
                    <td class="td-kolo">17. kolo</td>
                    <td class="stanica-td">Subota, <br>19.02.2022. 15:00</td>
                    <td class="domacin-td">NK Kustošija</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/kustosija.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>


                <tr>
                    <td class="td-kolo">18. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>27.02.2022. 15:00</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/bsk.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK BSK Bijelo Brdo</td>
                </tr>


                <tr>
                    <td class="td-kolo">19. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>06.03.2022. 15:30</td>
                    <td class="domacin-td">GNK Dinamo Zagreb II </td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/dinamo.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>


                <tr>
                    <td class="td-kolo">20. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>13.03.2022. 16:30</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/solin.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Solin</td>
                </tr>


                <tr>
                    <td class="td-kolo">21. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>20.03.2022. 15:30</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/osijek.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Osijek II</td>
                </tr>


                <tr>
                    <td class="td-kolo">22. kolo</td>
                    <td class="stanica-td">Subota, <br>02.04.2022. 16:30</td>
                    <td class="domacin-td">NK Opatija</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/opatija.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>

                <tr>
                    <td class="td-kolo">23. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>10.04.2022. 16:30</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/varazdin.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Varaždin</td>
                </tr>

                <tr>
                    <td class="td-kolo">24. kolo</td>
                    <td class="stanica-td">Subota, <br>16.04.2022. 16:30</td>
                    <td class="domacin-td">NK Rudeš</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/rudes.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>

                <tr>
                    <td class="td-kolo">25. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>24.04.2022. 17:00</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/jarun.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Jarun</td>
                </tr>

                <tr>
                    <td class="td-kolo">26. kolo</td>
                    <td class="stanica-td">Petak, <br>29.04.2022. 17:00</td>
                    <td class="domacin-td">NK Sesvete</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/sesvete.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>

                <tr>
                    <td class="td-kolo">27. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>08.05.2022. 17:00</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/dugopolje.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Dugopolje</td>
                </tr>

                <tr>
                    <td class="td-kolo">28. kolo</td>
                    <td class="stanica-td">Subota, <br>14.05.2022. 17:30</td>
                    <td class="domacin-td">NK Dubrava Tim Kabel</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/dubrava.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>


                <tr>
                    <td class="td-kolo">29. kolo</td>
                    <td class="stanica-td">Nedjelja, <br>22.05.2022. 17:30</td>
                    <td class="domacin-td">NK Croatia Zmijavci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/orijent.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">HNK Orijent 1919</td>
                </tr>

                <tr>
                    <td class="td-kolo">30. kolo</td>
                    <td class="stanica-td">Subota, <br>28.05.2022. 17:30</td>
                    <td class="domacin-td">HNK Cibalia Vinkvovci</td>
                    <td class="rez-td">
                        <img class="aleft" src="rez/cibalia.png" style="height:40px; width:40px" alt="" />
                        <span class="rez"> : </span>
                        <img class="aright" src="rez/croatia.png" style="height:40px; width:40px" alt="" />
                    </td>
                    <td class="gost-td">NK Croatia Zmijavci</td>
                </tr>






				            </table>     
		</div>

        <div class="right">
        <?php require_once( ROOT_PATH . '/sljedeca.php') ?>
      


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
        </div>
          
    
    </div>
        </div>
        <!--end header-container-->

        <!--Sponsorsfooter-->
             
<div class="clearfix"></div>
<!--sponzori-->

<?php include( ROOT_PATH . '/includes/footeri.php') ?>