<?php

session_start();

    $arrival_date = $_POST["arrive"];
    $depart_date = $_POST["depart"];
    $adult_number = $_POST["adult"];
    $children_number = $_POST["child"];
    $room_number = $_POST["rooms"];
    $payment_method = $_POST["payment1"];
    $card_number = $_POST["payment"];

    $hotelName = $_POST["chooseHotels"];



    if (empty($arrival_date) || empty($depart_date)  || strlen($card_number) < 16 || strtotime($arrival_date) > strtotime($depart_date) )
      if ($hotelName == "brosundet")
        header('Location: fail-hotel-brosundet.php');
      elseif ($hotelName == "grand-terminus")
        header('Location: fail-grand-terminus.php');
      elseif ($hotelName == "kviknes-hotel")
        header('Location: fail-kviknes-hotel.php');
      else
        header('Location: fail-hotel-park.php');
    else
      header('Location: success.php');


      $_SESSION['arriveField'] =  $arrival_date;
      $_SESSION['departField'] =  $depart_date;
      $_SESSION['adultField'] =  $adult_number;
      $_SESSION['childrenField'] =  $children_number;
      $_SESSION['roomField'] =  $room_number;
      $_SESSION['paymentField'] =  $payment_method;
      $_SESSION['cardField'] =  $card_number;

  ?>
