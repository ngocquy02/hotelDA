<?php
  $room_id = ($_GET['room_id']);
require_once('admin/include/config.php');
  require_once('admin/include/room_db.php');
  require_once('admin/include/get_list.php');
  require_once('admin/link.php');
  $rooms=get_room($room_id);
  $cities=get_city();
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
                    <input type="text" class="form-control" id="1" disabled>
                    </div><div class="col-md-6 form-group">
                    <label for="1">Ngày đặt</label>
                    <input type="text" class="form-control" id="1" disabled>
                    </div><div class="col-md-6 form-group">
                    <label for="1">Ngày đến</label>
                    <input type="text" class="form-control" id="1" disabled>
                    </div><div class="col-md-6 form-group">
                    <label for="1">Ngày đi</label>
                    <input type="text" class="form-control" id="1" disabled>
                    </div>
                    <div class="col-md-6 form-group">
                    <label for="1">Tên</label>
                    <input type="text" class="form-control" id="1" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="">Giới tính</label>
                      <input type="text" class="form-control" id="1" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="5">Ngày sinh</label>
                    <input type="date" class="form-control" id="5" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="6">Số chứng minh</label>
                    <input type="text" class="form-control" id="6" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="7">Điện thoại</label>
                    <input type="tel" class="form-control" id="7" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="8">Email</label>
                    <input type="email" class="form-control" id="8" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                    <label for="9">Địa chỉ</label>
                    <input type="text" class="form-control" id="9" disabled>
                    </div>

                    <div class="col-md-6 form-group">
                  
                  <label for="10">Thành phố</label>
                    <input type="text" class="form-control" id="1" disabled>
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