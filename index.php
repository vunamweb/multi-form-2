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
 
            
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
    // Change character set to utf8
    mysqli_set_charset($conn,"utf8");
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
          						<div class="left" page="1">
                                    <img class="img" src="images/erdgas.png" />
                                    <p class="text">Erdgas</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="1">
                                    <img class="img" src="images/flussiggas.png" />
                                    <p class="text">Flüssiggas</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="1">
                                    <img class="img" src="images/heizol.png" />
                                    <p class="text">Heizöl</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="1">
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
    			<div class="sp-slide page0">
    			  <section class="section_welcome">
          			<div class="container">
          				<div class="row">
          					<div class="col col-12">
          						<h2 class="headline">Mit welchem Brennstoff heizen Sie aktuell?</h2>
          						<div class="left" page="2">
                                    <img class="img" src="images/erdgas.png" />
                                    <p class="text">Erdgas</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
                                    <img class="img" src="images/flussiggas.png" />
                                    <p class="text">Flüssiggas</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
                                    <img class="img" src="images/heizol.png" />
                                    <p class="text">Heizöl</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
                                    <img class="img" src="images/sonstiges.png" />
                                    <p class="text">Sonstiges</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
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
    			<a class="back" href="javascript:void(0)"><img src="images/back-icon.png" /></a>
                </div>
    		  <!-- end page 1 -->		  
			</div>
		  </div>
		</main>
	</div>
    <div id="layer">    
      <a class="layer_close" href="javascript:void(0)"><img src="images/1x/i_close.png" alt=""></a>
    </div> 
    <?php require 'js-footer.php'; ?>
    
</body>

</html>
