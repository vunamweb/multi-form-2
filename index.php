<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <?php
    
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "multi_form";
  
  $titles = array("Situation","Vernetzung","Offenheit","Partizipation","Agilität");

    
   
//   $servername = "localhost";
//   $username = "d01c8fdb";
//   $password = "xhTgWp3yVFFwTuzU";
//   $dbname = "d01c8fdb";
      
   $countPage = 5;
 
            
    /* // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
    // Change character set to utf8
    mysqli_set_charset($conn,"utf8"); */
   ?>
	<div id="page">
		<?php require 'header.php'; ?>

      	<main>
		  
          <div class="slider-pro">
		    <div class="sp-slides">
    		  <!-- page 0 -->
    			<div class="sp-slide page0">
    			  <section class="section_welcome">
          			<div class="container">
          				<div class="row">
          					<div class="col col-12">
          						<h2 class="headline">Mit welchem Brennstoff möchten Sie in Zukunft heizen?</h2>
          						<div class="left">
                                    <img class="img" src="images/erdgas.png" />
                                    <p class="text">Erdgas</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left">
                                    <img class="img" src="images/flussiggas.png" />
                                    <p class="text">Flüssiggas</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left">
                                    <img class="img" src="images/heizol.png" />
                                    <p class="text">Heizöl</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left">
                                    <img class="img" src="images/unsicher.png" />
                                    <p class="text">Unsicher</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
          					</div>
          				</div>
          			</div>
          		</section>
    			</div>
    		  <!-- end page 0 -->
              
              <!-- page 1 -->
    			<div class="sp-slide page1">
    			  <section class="section_welcome">
          			<div class="container">
          				<div class="row">
          					<div class="col col-12">
          						<h2 class="headline">Mit welchem Brennstoff heizen Sie aktuell?</h2>
          						<div class="left" part="1">
                                    <img class="img" src="images/erdgas.png" />
                                    <p class="text">Erdgas</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="1">
                                    <img class="img" src="images/flussiggas.png" />
                                    <p class="text">Flüssiggas</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="1">
                                    <img class="img" src="images/heizol.png" />
                                    <p class="text">Heizöl</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="2">
                                    <img class="img" src="images/sonstiges.png" />
                                    <p class="text">Sonstiges</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="2">
                                    <img class="img" src="images/nochnichts.png" />
                                    <p class="text">Noch nichts</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
          					</div>
          				</div>
          			</div>
          		</section>
    			</div>
    		  <!-- end page 1 -->

              <!-- page 2 -->
    			<div class="sp-slide page2">
    			  <section class="section_welcome" part="1">
          			<?php require 'sie_eine_neue_heizung.php'; ?>
          		</section>
                <section class="section_welcome" part="2">
          			<div class="container">
          				<div class="row">
          					<div class="col col-12">
          						<h2 class="headline">Liegt in Ihrem Haus eine komplette Heizungsverrohrung vor?</h2>
          						<div class="left" part="2">
                                    <img class="img" src="images/ja2.png" />
                                    <p class="text">Ja</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="2">
                                    <img class="img" src="images/nein2.png" />
                                    <p class="text">Nein</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="2">
                                    <img class="img" src="images/unsicher.png" />
                                    <p class="text">Unsicher</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                            </div>
          				</div>
          			</div>
          		</section>
    			</div>
    		  <!-- end page 2 -->	

              <!-- page 3 -->
    			<div class="sp-slide page3">
    			  <section class="section_welcome" part="1">
          			<?php require 'bit_year.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'sie_eine_neue_heizung.php'; ?>
          		  </section>
				
    			</div>
    		  <!-- end page 3 -->

              <!-- page 4 -->
    			<div class="sp-slide page4">
    			  <section class="section_welcome" part="1">
          			<?php require 'bit_qm.php'; ?>
          		</section>
				<section class="section_welcome" part="2">
          			<?php require 'bit_year.php'; ?>
          		</section>
    			</div>
    		  <!-- end page 4 -->

              <!-- page 5 -->
    			<div class="sp-slide page5">
    			  <section class="section_welcome" part="1">
          			<?php require 'bit_number.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'bit_qm.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 5 -->

              <!-- page 6 -->
    			<div class="sp-slide page6">
    			  <section class="section_welcome" part="1">
          			<?php require 'wird_trinkwasser_mit.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'bit_number.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 6 -->	

              <!-- page 7 -->
    			<div class="sp-slide page7">
    			  <section class="section_welcome" part="1">
          			<?php require 'wie_werden.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'wird_trinkwasser_mit.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 7 -->	

              <!-- page 8 -->
    			<div class="sp-slide page8">
    			  <section class="section_welcome" part="1">
          			<?php require 'wann_soll_die_neue.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'wie_werden.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 8 -->	

              <!-- page 9 -->
    			<div class="sp-slide page9">
    			  <section class="section_welcome" part="1">
          			<?php require 'last.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'wann_soll_die_neue.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 9 -->	

              <!-- page 10 -->
    			<div class="sp-slide page10">
    			  <section class="section_welcome" part="1">
          			<?php require 'anmerkungen_zur_heizung.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'haben_sie_probleme.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 10 -->

              <!-- page 11 -->
    			<div class="sp-slide page11">
    			  <section class="section_welcome" part="1">
          			<?php require 'postleitzahl.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'last.php'; ?>
          		  </section>
				  <section class="section_welcome" part="3">
          			<?php require 'um_welches_problem.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 11 -->	

              <!-- page 12 -->
    			<div class="sp-slide page12">
    			  <section class="section_welcome" part="1">
          			<?php require 'angaben_zur_person.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'anmerkungen_zur_heizung.php'; ?>
          		  </section>
				  <section class="section_welcome" part="3">
          			<?php require 'last.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 12 -->	

              <!-- page 13 -->
    			<div class="sp-slide page13">
    			  <section class="section_welcome" part="1">
          			<?php require 'success.php'; ?>
          		  </section>
				  <section class="section_welcome" part="2">
          			<?php require 'postleitzahl.php'; ?>
          		  </section>
				  <section class="section_welcome" part="3">
          			<?php require 'anmerkungen_zur_heizung.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 13 -->

             <!-- page 14 -->
    			<div class="sp-slide page14">
    			  <section class="section_welcome" part="2">
          			<?php require 'angaben_zur_person.php'; ?>
          		  </section>
				  <section class="section_welcome" part="3">
          			<?php require 'postleitzahl.php'; ?>
          		  </section>
    			</div>
    		  <!-- end page 14 -->	

             <!-- page 15 -->
    			<div class="sp-slide page15">
    			  <section class="section_welcome" part="2">
          			<?php require 'success.php'; ?>
          		  </section>
				  <section class="section_welcome" part="3">
          			<?php require 'angaben_zur_person.php'; ?>
          		  </section>
    			</div>
    		<!-- end page 15 -->	

            <!-- page 16 -->
    			<div class="sp-slide page16">
    			  <section class="section_welcome" part="3">
          			<?php require 'success.php'; ?>
          		  </section>
    			</div>
    		<!-- end page 16 -->			
			</div>
		  </div>
          <a id="back" href="javascript:void(0)"><img src="images/back-icon.png" /></a>
		</main>
	</div>
    <?php require 'js-footer.php'; ?>
    
</body>

</html>
