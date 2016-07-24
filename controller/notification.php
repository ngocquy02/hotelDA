<?php
	require_once('../admin/include/config.php');
  require_once('../admin/include/room_db.php');
  require_once('../admin/include/get_list.php');
  require_once('../admin/include/customer_db.php');
  require_once('../admin/link.php');
  $max_id= get_room_order_max_id();
  $room=get_room($max_id['room_id']);
  $customer=get_customer_id($max_id['customer_id']);
  $city=get_city_id($customer['city_id']);

	require_once('../include/notification.php');

?>