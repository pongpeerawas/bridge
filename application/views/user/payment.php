<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>เพิ่มข้อมูลการชำระเงิน</h1>
  </div>
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>เพิ่มข้อมูลหลักฐานการชำระเงิน</h5>
          </div>
            <?php echo form_open_multipart('user/payment/insert'); ?>
          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">


              <div class="control-group">
                <label class="control-label">เลขที่สัญญา :</label>
                <?php foreach ($ShowContract as $row ): ?>
                <input type="number"  name="Con_Id" class="span2"  value="<?php echo $row['Con_Id']; ?>"  readonly> <br>
                <?php endforeach; ?>
              </div>

              <div class="control-group">
                <label class="control-label">ชื่อ :</label>
                <input type="text"  name="Re_Name" class="span5" value="<?php echo ($this->session->userdata('name')); ?>"  > <br>

              </div>
              <div class="control-group">
                <label class="control-label">ธนาคาร :</label>
                <div class="controls">
                  <input type="radio" name="Pay_Bank" value="ธนาคารกรุงไทย 443-0-474330" required>ธนาคารกรุงไทย 443-0-474330 <br>
                  <input type="radio" name="Pay_Bank" value="ธนาคารกสิกรไทย 441-3-105201"required>ธนาคารกสิกรไทย 441-3-105201
                </div>
              </div>

            <div class="control-group">
              <label class="control-label">จำนวนเงิน :</label>
              <div class="controls">
                <input type="number"  name="Pay_Price"  class="span2" value="3000" required> บาท<br>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">อัพรูปหลักฐานการโอน :</label>
              <div class="controls">
                <input type="file" name="Pay_Pic" required >
              </div>
            </div>

              <div class="form-actions">

                <input   value=เพิ่ม type=submit class="btn btn-success "   class="form-control" onclick="return confirm('กรุณาตรวจสอบควมถูกต้องอีกครั้งก่อนกดบันทึก !')" />

              </div>
            </form>
            <?php echo form_close(); ?>

          </div>
        </div>
      </div>
    </div>






  </div>


</div>
