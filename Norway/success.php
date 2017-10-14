<?php

session_start();

$arrival_date = $_SESSION['arriveField'];
$depart_date = $_SESSION['departField'];
$adult_number = $_SESSION['adultField'];
$children_number = $_SESSION['childrenField'];
$room_number = $_SESSION['roomField'];
$payment_method  = $_SESSION['paymentField'];
$card_number = $_SESSION['cardField'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Visit Norway</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="hotelsStyle.css">

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

<div class="center">
 <table id="dining">
 	<tr>
 		<th>Arrival Date</th>
 		<th style="padding: 0 7px;">Departure Date</th>
  </tr>
  <tr class="alt">
    <td><?php echo $arrival_date; ?>
    <td><?php echo $depart_date; ?>
</tr>
  <tr>
 		<th id="tel"=>Adults</th>
 		<th style="padding: 0 7px;">Children</th>
 		<th>Rooms</th>
  </tr>
  <tr class="alt">
    <td><?php echo $adult_number ?> </td>
    <td><?php echo $children_number ?> </td>
    <td><?php echo $room_number ?> </td>
  </td>
  <tr>
    <th>Payment Method</th>
    <th>Card Number</th>
 	</tr>
  <tr class="alt">
    <td><?php echo $payment_method ?> </td>
    <td><?php echo $card_number ?> </td>
  </tr>
  <tr>
    <td><input id="buttons" type="button" value="Submit" onclick="success()"></td>
    <td><input id="buttons" type="button" value="Change" onclick="goBack()"></td>
  </tr>
</table>
</div>
<h1 id="goodJob!" style="color:green"></h1>

<script>
function success()
{
  document.getElementById("goodJob!").innerHTML = "Thank you for choosing our hotel for your next visit to Norway. We are pleased to inform you that your reservation request has been received and confirmed.";
  var elem = document.getElementById('dining');
  elem.parentNode.removeChild(elem);
  return false;
}
</script>

<script>
function goBack() {
		window.history.back();
}
</script>


</div>
</div>




</body>
</html>
