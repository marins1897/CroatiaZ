<?php $topics1= getFirstTopics() ?>
<!--sponzori-->
<div class="row sponsors">
		        	Naši partneri:<br><br><br>
                    <div class="box-data3">
            <a target="_blank" href="http://www.posta.hr/">
				<img src="sponzori/hp1.png" alt="">
			</a>
            </div>

            <div class="box-data2">
            <a target="_blank" href="http://www.jako.hr/">
				<img src="sponzori/jakosport1.png" alt="">
			</a>
            </div>

            <div class="box-data2">
            <a target="_blank" href="http://www.otpbanka.hr/">
				<img src="sponzori/otp1.png" alt="">
			</a>
            </div>

            <div class="box-data2">
            <a target="_blank" href="http://www.psk.hr/">
				<img src="sponzori/psk1.png" alt="">
			</a>
            </div>

            <div class="box-data2">
            <a target="_blank" href="http://www.msc.com/">
				<img src="sponzori/msc1.png" alt="">
			</a>
</div>

            <div class="box-data2">
            <a target="_blank" href="http://www.google.hr/">
				<img src="sponzori/google1.png" alt="">
			</a>
        </div>		
	</div>

<!--krajsponzora-->
			
	<div class="footeri"  >
		<div class="center" >
			<img class="footer-logo" src="static/images/logo.svg">
			<p class="footer-contact">
				<strong>NK CROATIA</strong> ZMIJAVCI<br>
				Kujundžušin put 12<br>
				21266 Zmijavci<br><br>
		
				Telefon: +385 21 840 600<br>
				Fax: + 385 21 840 600<br>
			
				E-mail: <cite style="text-transform:none;background-color:#9a1f1f ;">zmijavci.nk.croatia@gmail.com</cite>
	

			
		<br><br>
                <a target="_blank" href="https://www.sofascore.com/team/football/nk-croatia-zmijavci/217772" class="dugout" ></a>

                <a target="_blank" href="https://www.youtube.com/channel/UCb_Fd3NxthzOxeJEdqeXGuQ" class="you" ></a>
		
                <a target="_blank" href="https://www.instagram.com/nk_croatiazmijavci/?hl=hr" class="inst" ></a>
	
                <a target="_blank" href="https://www.transfermarkt.com/nk-croatia-zmijavci/startseite/verein/22558" class="tw" ></a>
			
                <a target="_blank" href="https://www.facebook.com/croatia.zmijavci" class="fb" ></a>
			</p>

			
	
			<ul class="footer-nav" >
              <li>
                    <a href="index.php" id="sub3">Naslovna</a>
                </li>
            
                    
					<?php foreach ($topics1 as $topic): ?>
				<li>
                        <a 	href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a> 
                    </li>
					<?php endforeach ?>
                </li>   


                <li>
                    <a href="povijest.php">O Klubu</a>
                </li>
                <li>
                    <a href="PrvaMomcad.php">Prva momčad</a>
                </li>
                <li>
                    <a href="Uzrasti.php">Škola nogometa</a>
                </li>
                 <li>
                    <a href="Shop.php">Web shop</a>
                </li>
                <li>
                    <a href="Sponzori.php">Sponzori</a>
                </li>

				<li>
					<a href="navijaci.php">Navijači</a>
				</li>
				

                <li class="last">
                    <a href="kontakt.php">Kontakt</a>
                </li>
            </ul>
			<div class="clearfix"></div>
			</div>
	
    </div>


	    <style type="text/css">
    .cookie-container{position: fixed;bottom: 0;width: 100%;z-index: 100000;display: block;left: 0;background: rgba(0,0,0,0.7);padding:20px;}.cookie-container p{margin: 0;font-size: 13px;font-family: 'Lemon Milk',lemon-milk;font-weight: 400;}.cookie-container p a.b{background: #70BC44;display: inline-block;padding: 0 7px 0 4px;color: #fff;font-weight: 600;line-height: 17px;margin-left: 5px;}
    </style>
	<div class="footer-v" style="margin-top:0.4%;" >
		<div class="center" style="width:100%;"  >
		<p>NK CROATIA ZMIJAVCI &copy; <?php echo date('Y');  ?></p>
			
	       
                <div class="clearfix"></div>
            </div>
		</div>
          
	
	
	<!-- // container -->
</body>
</html>
