<?php $topics= getAllTopics() ?>

<div class="nav row">
        <div class="center">
            <a href="index.php" class="home"></a>
            <a href="javascript:;" class="nav-toggle"></a>
            <ul class="main-nav">
           
         <li>
                    
                                            <a href="javascript:;" id="sub1" class="drop ">Vijesti</a>
                        <ul class="sub">
                    <li>
                    
					<?php foreach ($topics as $topic): ?>
				<li>
                        <a 	href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a> 
                    </li>
					<?php endforeach ?>
                </li>
                    </ul>
      </li>
                <li>
                    <a href="javascript:;" id="sub5" class="drop ">Klub</a>
                    <ul class="sub">
                        <li>
                        <a href="povijest.php">O klubu</a>
                       
                        </li>
                        <li>
                            <a href="Uprava.php">Uprava kluba</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" id="sub3" class="drop ">Prva momčad</a>
                    <ul class="sub">
                        <li>
                            <a href="PrvaMomcad.php">Igrači</a>
                        </li>
                        <li>
                            <a href="StrucniStozer.php">Stručni stožer</a>
                        </li>
                        <li>
                            <a href="Rezultati.php">Raspored</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" id="sub6" class="drop ">Škola nogometa</a>
                     <ul class="sub">
                        <li>
                            <a href="Oskoli.php">O školi</a>
                        </li>
                        <li>
                            <a href="Uzrasti.php">Uzrasti</a>
                        </li>
                        <li>
                            <a href="Tabliceskola.php">Tablice</a>
                        </li>
                        
                    </ul>
                </li>
                 <li>
                    <a href="Shop.php" id="sub3">Web shop</a>
                </li>
                <li>
                    <a href="Sponzori.php" id="sub3">Sponzori</a>
                </li>
                <li>
                    <a href="navijaci.php" id="sub4" >Navijači</a>
                    
                </li>
                <li class="last">
                    <a href="kontakt.php">Kontakt</a>
                </li>
            </ul>
            
        </div>
</div>

    <!--end nav-->


    <!-- napravi sublistu -->
	<div class="row">
    <div id="sub1-container" class="sub-container">
        <div class="center">

           <ul class="sub">
                               
                    <li>
                    
					<?php foreach ($topics as $topic): ?>
						<li><a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a> </li>
					<?php endforeach ?>



                                </li>
                            </ul>
        </div>
    </div>
    <div id="sub2-container" class="sub-container">
        <div class="center">
            <ul class="sub">
                                    <li>
                                    <a href="povijest.php" >O klubu</a>
                    </li>
                            </ul>
        </div>
    </div>
    <div id="sub6-container" class="sub-container">
        <div class="center">
            <ul class="sub">
                <li>
                            <a href="Oskoli.php">O školi</a>
                        </li>
                        <li>
                            <a href="Uzrasti.php">Uzrasti</a>
                        </li>
                        <li>
                            <a href="Tabliceskola.php">Tablice</a>
                        </li>
                       
            </ul>
        </div>
    </div>
    <div id="sub3-container" class="sub-container">
        <div class="center">
            <ul class="sub">
                <li>
                    <a href="PrvaMomcad.php">Igrači</a>
                </li>
                <li>
                    <a href="StrucniStozer.php">Stručni stožer</a>
                </li>
                <li>
                    <a href="Rezultati.php">Raspored</a>
                </li>
            </ul>
        </div>
    </div>
    
    <div id="sub5-container" class="sub-container">
        <div class="center">
            <ul class="sub">
                <li>
                    <a href="povijest.php" class="">O Klubu</a>
                </li>
                <li>
                    <a href="Uprava.php" class="">Uprava kluba</a>
                </li>
            </ul>
        </div>
    </div>
</div>