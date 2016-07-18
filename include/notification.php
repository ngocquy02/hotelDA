<?php
  require_once('admin/include/config.php');
  require_once('admin/include/room_db.php');
  require_once('admin/include/get_list.php');
  require_once('admin/include/customer_db.php');
  require_once('admin/link.php');
  $max_id= get_room_order_max_id();
  $room=get_room($max_id['room_id']);
  $customer=get_customer_id($max_id['customer_id']);
  $city=get_city_id($customer['city_id']);
?>
<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
<?php
  include('include/menu.php');
?>
  <div class="container" style="background: #fff; padding: 0; padding-top : 50px;  padding-bottom : 80px; width:100%;">
    <div class="row" style="width:90%; margin:auto;">

      <div class="col col-md-12 col-xs-12">
        <form method="POST" action ="model/add_room_order.php?room_id=<?php echo $_GET['room_id']?>" id="form">
          <div class="row col-md-12" style="padding: 0px; margin:0px;">
            <section class="panel">
                  <header class="panel-heading" style="text-align:center">
                     THÔNG TIN ĐẶT PHÒNG
                  </header>
                  <div class="col-md-12" style="padding: 0px; margin:0px;">
                    <div class="col-md-6 form-group">
                    <label for="1">Phòng</label>
                    <input type="text" class="form-control" id="1" value="<?php echo $room['name'] ;?>" disabled>
                    </div><div class="col-md-6 form-group">
                    <label for="1">Ngày đặt</label>
                    <input type="text" class="form-control" id="1" value="<?php echo date('d/m/Y',strtotime($max_id['date_order'] ));?>" disabled>
                    </div><div class="col-md-6 form-group">
                    <label for="1">Ngày đến</label>
                    <input type="text" class="form-control" id="1" value="<?php echo date('d/m/Y',strtotime($max_id['date_check_in']))  ;?>" disabled>
                    </div><div class="col-md-6 form-group">
                    <label for="1">Ngày đi</label>
                    <input type="text" class="form-control" id="1" value="<?php echo date('d/m/Y',strtotime($max_id['date_checkout'])) ;?>" disabled>
                    </div>
                    <div class="col-md-6 form-group">
                    <label for="1">Tên</label>
                    <input type="text" class="form-control" id="1" value="<?php echo $customer['name'] ;?>" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="">Giới tính</label>
                      <input type="text" class="form-control" id="1" value="<?php echo $customer['gender'];?>" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="5">Ngày sinh</label>
                    <input type="text" class="form-control" id="5" value="<?php echo date('d/m/Y',strtotime( $customer['birth_day'])) ;?>" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="6">Số chứng minh</label>
                    <input type="text" class="form-control" id="6" value="<?php echo $customer['passport'] ;?>" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="7">Điện thoại</label>
                    <input type="tel" class="form-control" id="7" value="<?php echo $customer['phone']  ;?>" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="8">Email</label>
                    <input type="email" class="form-control" id="8" value="<?php echo $customer['email'] ;?>" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="9">Địa chỉ</label>
                    <input type="text" class="form-control" id="9" value="<?php echo $customer['adress']  ;?>" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                  
                  <label for="10">Thành phố</label>
                    <input type="text" class="form-control" id="1" value="<?php echo $city['name'] ;?>" disabled>
                  </div>
                </div>
              </section>          
          </div>
        </form>

      </div>                
    </div>
  </div>
  <?php include('include/footer.php'); ?>
</body>
</html>