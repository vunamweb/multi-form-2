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
          			<div class="container">
          				<div class="row">
          					<div class="col col-12">
          						<h2 class="headline">Für welchen Gebäudetyp benötigen Sie eine neue Heizung?</h2>
          						<div class="left" part="1">
                                    <img class="img" src="images/einzelhaus.png" />
                                    <p class="text">Einzelhaus</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="1">
                                    <img class="img" src="images/doppelhaushaalfte.png" />
                                    <p class="text">Doppelhaushälfte</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="1">
                                    <img class="img" src="images/mehrfamilienhaus.png" />
                                    <p class="text">Mehrfamilienhaus</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="1">
                                    <img class="img" src="images/wohnung-mit-eigener-heizung.png" />
                                    <p class="text">Wohnung mit eigener Heizung</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                            </div>
          				</div>
          			</div>
          		</section>
                <section class="section_welcome" part="2">
          			<div class="container">
          				<div class="row">
          					<div class="col col-12">
          						<h2 class="headline">Liegt in Ihrem Haus eine komplette Heizungsverrohrung vor?</h2>
          						<div class="left" part="2">
                                    <img class="img" src="images/ja.png" />
                                    <p class="text">Ja</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="2">
                                    <img class="img" src="images/nein.png" />
                                    <p class="text">Nein</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" part="2">
                                    <img class="img" src="images/nochnichts.png" />
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
    			  <section class="section_welcome">
          			<div class="container">
          				<div class="row">
          					<div class="col col-12">
          						<h2 class="headline">Wann wurde Ihre Immobilie gebaut?</h2>
          						<div class="left" page="4">
                                    <img class="img" src="images/1960.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
                                    <img class="img" src="images/1961.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
                                    <img class="img" src="images/1978.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="">
                                    <img class="img" src="images/1995.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
								<div class="left" page="">
                                    <img class="img" src="images/2002.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
								<div class="left" page="">
                                    <img class="img" src="images/noch-im-bau.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                            </div>
          				</div>
          			</div>
          		</section>
    			</div>
    		  <!-- end page 3 -->

              <!-- page 4 -->
    			<div class="sp-slide page2">
    			  <section class="section_welcome">
          			<div class="container">
          				<div class="row">
          					<div class="col col-12">
          						<h2 class="headline">Wie groß ist die zu beheizende Wohnfläche?</h2>
          						<div class="left" page="5">
                                    <p class="text"> 0 bis 50 qm</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
                                    <p class="text">51 bis 100 qm</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
                                    <p class="text">101 bis 150 qm</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="">
                                    <p class="text">151 bis 200 qm</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
								<div class="left" page="">
                                    <p class="text"> 201 bis 399 qm</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
								<div class="left" page="">
                                    <p class="text">400 qm oder mehr</p>
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                            </div>
          				</div>
          			</div>
          		</section>
    			</div>
    		  <!-- end page 4 -->

              <!-- page 5 -->
    			<div class="sp-slide page3">
    			  <section class="section_welcome">
          			<div class="container">
          				<div class="row">
          					<div class="col col-12">
          						<h2 class="headline">Wie viele Personen leben im Haushalt?</h2>
          						<div class="left" page="6">
                                    <img class="img" src="images/1bis.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
                                    <img class="img" src="images/3bis.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="2">
                                    <img class="img" src="images/5bis.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                                <div class="left" page="">
                                    <img class="img" src="images/7bis.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
								<div class="left" page="">
                                    <img class="img" src="images/8bis.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
								<div class="left" page="">
                                    <img class="img" src="images/noch-im-bau.png" />
                                    <div class="check">
                                      <img src="images/check_icon.png" />
                                    </div>
                                </div>
                            </div>
          				</div>
          			</div>
          		</section>
    			</div>
    		  <!-- end page 5 -->			  
			</div>
		  </div>
          <a id="back" href="javascript:void(0)"><img src="images/back-icon.png" /></a>
		</main>
	</div>
    <div id="layer">    
      <a class="layer_close" href="javascript:void(0)"><img src="images/1x/i_close.png" alt=""></a>
    </div> 
    <?php require 'js-footer.php'; ?>
    
</body>

</html>
