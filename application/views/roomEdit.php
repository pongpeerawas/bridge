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
        <?php echo form_open_multipart('room/update'); ?>

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>แก้ไขข้อมูลห้องพัก</h5>
          </div>
          <div class="widget-content nopadding ">
            <form id="form-wizard" class="form-horizontal" method="post">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <input type="hidden" class="form-control" name="Room_Id" value="<?php echo $data[0]['Room_Id']  ?>" readonly>

                  <label class="control-label">เลขที่ห้องพัก :</label>
                  <div class="controls">
                    <input class="form-control" type="text"  name="Room_Number" value="<?php echo $data[0]['Room_Number'] ?>" / required>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">รายละเอียดห้องพัก :</label>
                  <div class="controls">
                    <textarea class="span6" type="text" name="Room_Detail"  ><?php echo $data[0]['Room_Detail'] ?></textarea>

                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">สถานะห้องพัก :</label>
                  <div class="controls">
                    <?php if ($data[0]['Room_Status'] == "ไม่ว่าง"): ?>
                      <input type="checkbox" name="Room_Status" value="ว่าง">ว่าง<br>
                      <input type="checkbox" name="Room_Status" value="ไม่ว่าง" checked>ไม่ว่าง<br>
                    <?php else: ?>
                      <input type="checkbox" name="Room_Status" value="ว่าง" checked>ว่าง<br>
                      <input type="checkbox" name="Room_Status" value="ไม่ว่าง">ไม่ว่าง<br>
                    <?php endif; ?>

                  </div>
                </div>

              </div>
              <br>
              <!-- <button class="btn btn-danger" > < กลับ</button> -->
              <input  value=บันทึก type=submit class="btn btn-success update" onclick="return confirm('ยืนยันการแก้ไข !')" >

            </form>
          </div>
        </div>
        <?php echo form_close(); ?>


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
