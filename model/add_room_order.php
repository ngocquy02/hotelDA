<?php
    require_once('../admin/include/config.php');
    require_once('../admin/link.php');
    require_once('../admin/include/room_db.php');
    require_once('../admin/include/customer_db.php');
    require_once('../admin/include/get_list.php');
    session_start();
  
    add_customer_order($_POST['name'],$_POST['adress'],$_POST['birth_day'],$_POST['city'],$_POST['email'],$_POST['gender'],$_POST['passport'],$_POST['phone']); 
    $get_customer=get_customer($_POST['email']);
    $get_list_room=get_list_room();
    $date_order=date("Y/m/d");
    $get_room=get_room($_GET['room_id']);
      $date_check_in = strtotime($_SESSION['date_check_in']);
      $date_checkout = strtotime($_SESSION['date_checkout']);
      $date = abs($date_checkout - $date_check_in)/ (60*60*24);
      $price= $date * $get_room['price'];
    add_room_order_search($_GET['room_id'],$_SESSION['date_check_in'],$_SESSION['date_checkout'],$date_order,$get_customer['id'],$price,$date);

    header ("Location: ../include/notification.php?room_id=$_GET['room_id']");
  ?>

