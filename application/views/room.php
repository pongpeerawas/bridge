<!-- <head>
<title>หลังร้าน</title>


<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo base_url('assetAdmin/css/bootstrap.min.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/bootstrap-responsive.min.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/uniform.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/select2.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/matrix-style.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/css/matrix-media.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assetAdmin/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />

</head> -->
<link href="<?php echo base_url('assetAdmin/css/bootstrap-wysihtml5.css') ?>" rel="stylesheet" />


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>จัดการห้องพัก</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span6">
        <?php echo form_open('room/insert'); ?>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>เพิ่มห้องพัก</h5>
          </div>
          <div class="widget-content nopadding ">
            <form id="form-wizard" class="form-horizontal" method="post">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">เลขที่ห้องพัก :</label>
                  <div class="controls">
                    <input class="form-control" type="text"  name="Room_Number" id="Room_Number"/ required>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">รายละเอียดห้องพัก :</label>
                  <div class="controls">
                    <textarea rows="4" cols="50"class="form-control" type="text"  name="Room_Detail" id="Room_Detail"/></textarea>

                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">สถานะห้องพัก :</label>
                  <div class="controls">
                    <input type="checkbox" name="Room_Status" value="ว่าง" checked>ว่าง<br>
                    <input type="checkbox" name="Room_Status" value="ไม่ว่าง">ไม่ว่าง<br>
                  </div>
                </div>

              </div>
              <br>
              <input  value=เพิ่ม type=submit class="btn btn-success update">

            </form>
          </div>
        </div>
        <?php echo form_close(); ?>


        <div class="widget-content nopadding">

          <table class="table data-table">
            <tr>
              <th>รหัส</th>
              <th>เลขที่ห้องพัก</th>
              <th>รายละเอียดห้องพัก</th>
              <th>สถานะห้องพัก</th>
              <th>แก้ไข</th>
              <th>ลบ</th>
            </tr>

            <tbody>
              <?php foreach ($data as $key ): ?>

                <tr>
                  <td><?php echo $key['Room_Id']; ?></td>
                  <td><?php echo $key['Room_Number'];?></td>
                  <td><?php echo $key['Room_Detail'];?></td>
                  <td><?php echo $key['Room_Status'];?></td>

                  <td><a href="<?php echo site_url('room/updateform/'.$key['Room_Id'])?>"><button name="button" class="btn btn-warning">  แก้ไข</button></a></td>
                  <td><a href="<?php echo site_url('room/del/'.$key['Room_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><button name="button" class="btn btn-danger">ลบ</button></a></td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
          <!-- <button class="btn btn-danger" onclick="window.history.back()"> < กลับ</button> -->

        </div>


      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>
  // the selector will match all input controls of type :checkbox
// and attach a click event handler
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
  </script>

  <!--

  <script src="<?php echo base_url('assetAdmin/js/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assetAdmin/js/jquery.ui.custom.js') ?>"></script>
  <script src="<?php echo base_url('assetAdmin/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assetAdmin/js/jquery.uniform.js') ?>"></script>
  <script src="<?php echo base_url('assetAdmin/js/select2.min.js') ?>"></script>
  <script src="<?php echo base_url('assetAdmin/js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assetAdmin/js/matrix.js') ?>"></script>
  <script src="<?php echo base_url('assetAdmin/js/matrix.tables.js') ?>"></script> -->
