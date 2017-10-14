<?php

session_start();

$arrival_date = $_SESSION['arriveField'];
$depart_date = $_SESSION['departField'];
$adult_number = $_SESSION['adultField'];
$children_number = $_SESSION['childrenField'];
$room_number = $_SESSION['roomField'];
$payment_method  = $_SESSION['paymentField'];
$card_number = $_SESSION['cardField'];



$arrivalDateEmpty;
$departDateEmpty;
$card_numberEmpty;
$invalidDate;

if ($arrival_date=="") {$arrivalDateEmpty=true;} else {$arrivalDateEmpty=false;}
if ($depart_date=="") {$departDateEmpty=true;} else {$departDateEmpty=false;}
if (strlen($card_number)<16) {$card_numberEmpty=true;} else {$card_numberEmpty=false;}
if (strtotime($arrival_date) > strtotime($depart_date)) {$invalidDate=true;} else {$invalidDate=false;}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Visit Norway</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="hotelsStyle.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
  $(function() {
    $( "#depart" ).datepicker();
  });
  </script>
	<script>
  $(function() {
    $( "#arrive" ).datepicker();
  });
  </script>
</head>
<body>

  <div class="nav">

	  <div class="banner">
	    <img id="imgBanner" src="images/banner.jpg">
	  </div>


	  <div class="menu">
			<div class="menu-wrap">
				<nav class="menu">
		        <ul class="clearfix">
		            <li><a href="home.html">Home</a></li>

								<li><a href="#"> Places to Visit <span class="arrow">&#9660;</span></a>
									<ul class="sub-menu">
										<li><a href="fjords.html"> Fjords </a></li>
											<li><a href="aurora.html"> Aurora Lights</a></li>
										</ul>
								</li>
								  <li><a href="museums.html">Museums</a></li>
										<li>
		            <a href="#">About Norway <span class="arrow">&#9660;</span></a>
		            <ul class="sub-menu">
		                <li><a href="history.html">History</a></li>
										<li><a href="art.html"> Art & Culture </a></li>
										<li><a href="cultural.html">Cultural Events</a></li>
		            </ul>
		            </li>

								<li>
		            <a href="#">Relax <span class="arrow">&#9660;</span></a>
		            <ul class="sub-menu">
		                <li><a href="hotels.html">Hotels</a></li>
		                <li><a href="restaurants.html">Restaurants</a></li>
		            </ul>
		            </li>
								<li><a href="contact.html">Contact</a></li>

		        </ul>
		    </nav>
			</div>
	</div>
	</div>


  <div class="container">
    <div class="content">

	<div class="heading">
	<span class="city-name">Bergen</span>
<span itemprop="name">
  <h1>Grand Terminus</h1>
</span>
</div>
<img id="pictures" src="images/hotels/grand-hotel-terminus1.jpg">
	<div class="col">
	<?php

	if ($arrivalDateEmpty==true)
		echo "<label id='emptyField' >Please enter an arrival date.</label><br>";
	if ($departDateEmpty==true)
		echo "<label id='emptyField' >Please enter a departure date.</label><br>";
	if ($card_numberEmpty==true)
		echo "<label id='emptyField' >Please enter a valid card number.</label><br>";
	if ($invalidDate==true)
		echo "<label id='emptyField' >Your Departure Date should be after your Arrival Date.</label><br>";

		?>
 </div>
	<div class="form-box book-form-box">
					<div class="form-holder">
						<div class="form-frame">
							<form method="post" action="booking.php" class="book-form">
								<fieldset>
									<div class="row">
										<div class="col-1">
											<h3 class="title">Book room now:</h3>
											<div class="content-box">
												<	<p>Grand Terminus is a classic yet modern hotel, located in peaceful surroundings in the heart of Bergen, close to the railway station, car park, bus station,
  		airport bus stop and city tram.</p>

  												<p>When it opened in 1928, it was the city’s most luxurious and exclusive hotel. Grand Terminus became Norway’s first listed city hotel, and is a unique example of elegant Bergen classicism.</p>

  												<p>The hotel has been renovated but still retains its classic, elegant style. It is widely known for its cuisine, and the Grand Whiskybar serves light meals and main courses in an atmospheric setting with a ceiling almost six metres high. The bar is the only one in the Nordic region to have achieved gold status in the official list of ‘Great Whisky Bars of the World’. .</p>
  											<input id="chooseHotels" name="chooseHotels" value="grand-terminus">


										</div>
										<div class="parameters-row booking-row">
																					<div class="col">
                                            <?php
                                            if ($arrivalDateEmpty==true || $invalidDate==true)
                                              echo "<label id='emptyField' for='arrival'>Arrival:*</label>";
                                            else
																				      echo "<label for='arrival'>Arrival:</label>";
                                              ?>
																						<div class="row">
																							<div class="text">
																								<input type="text" name="arrive" id="arrive" />
																							</div>
																					<div class="col">
                                              <?php
                                              if ($departDateEmpty==true || $invalidDate==true)
                                                echo "<label id='emptyField' for='departure'>Departure:*</label>";
                                              else
                                                echo "<label for='departure'>Departure:</label>";
                                             ?>
																						<div class="row">
																							<div class="text">
																								<input type="text" name="depart" id="depart" />

																					</div>
																					<div class="parameters-box">
																						<div class="col">
																							<label class="choices">Adults:</label>
																							<select class="select-02" name="adult" id="adult">
																								<option value="1">1</option>
																											<option selected="selected" value="2">2</option>
																											<option value="3">3</option>
																											<option value="4">4</option>
																											<option value="5">5</option>
																											<option value="6">6</option>
																							</select>
																						</div>
																						<div class="col">
																							<label class="choices">Children:</label>
																							<select class="select-02" name="child" id="child">
																								<option selected="selected" value="0">0</option>
																											<option value="1">1</option>
																											<option value="2">2</option>
																											<option value="3">3</option>
																							</select>
																						</div>
																						<div class="col">
																							<label class="choices">Rooms:</label>
																							<select class="select-02" name="rooms" id="rooms">
																								<option value="1" selected="selected">1</option>
																											<option value="2">2</option>
																											<option value="3">3</option>
																											<option value="4">4</option>
																											<option value="5">5</option>
																											<option value="6">6</option>
																											<option value="7">7</option>
																							</select>
																						</div>
																						<div class="col">
																							<label class="choices">Payment:</label>
																							<select class="select-02" name="payment1" id="payment1">
																								<option value="Visa" selected="selected">Visa</option>
																											<option value="MasterCard">MasterCard</option>
																											<option value="Maestro">Maestro</option>
																							</select>
																						</div>
																							<div class="col">
																							<?php

																							if ($card_numberEmpty==true)
																								echo "<label id='emptyField'>Card Number:*</label>";
																							else
																								echo '<label>Card Number:</label>'
																						 ?>

																							<div class="text">

																							 <input type='text' name='payment' id="payment" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='16'></input>
																							</div>
																						</div>
																					</div>
																					<div class="submit-box">
																						<input type="submit" value="Book now!" onclick="checkInput(form.arrive.value,form.depart.value,form.payment.value);">
																					</div>
																					<div class="submit-box">
																						<input type="button" id="cancelButton" value="Cancel" onclick="returnValues()">
																					</div>
																				</div>
																			</div>
																		</fieldset>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<script>
							function checkInput(arrive, depart, payment)
							{
									var arriveValidation;
									var departValidation;
									var paymentValidation;

								if (arrive == "" && depart == "" && payment== "")
									document.getElementById("fail").innerHTML = ("Please, enter an arrive date and depart date and a valid payment method.");
								else if (arrive == "" && depart == "")
									document.getElementById("fail").innerHTML = ("Please enter an arrive and depart date");
								else if (arrive == "")
									document.getElementById("fail").innerHTML = ("Please enter an arrive date.");
								else if (depart == "")
									document.getElementById("fail").innerHTML = ("Please enter a depart date");
								else
								{
										arriveValidation = true;
										departValidation = true;
										paymentValidation = true;
										document.getElementById("fail").innerHTML = ("");
								}

								if(arriveValidation==true && departValidation==true && paymentValidation==true)
								{
								 document.getElementById("fail").innerHTML = ("Success!");
								}
							}
							</script>


							<script>
							function returnValues()
							{
								var var1 = document.getElementById("arrive");
								var var2 = document.getElementById("depart");
								var var3 = document.getElementById("adult");
								var var4 = document.getElementById("child");
								var var5 = document.getElementById("rooms");
								var var6 = document.getElementById("payment1");
								var var7 = document.getElementById("payment");

								var1.value = "";
								var2.value = "";
								var3.value = "2";
								var4.value = "0";
								var5.value = "1";
								var6.value = "1";
								var7.value = "";
							}


							</script>

</body>
</html>
