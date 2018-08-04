<div id="content">
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>แก้ไขข้อมูลส่วนตัว</h5>
          </div>

            <?php echo form_open_multipart('user/renter/update'); ?>


          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">
              <input type="hidden" class="form-control" name="Re_Id" value="<?php echo $data[0]['Re_Id']  ?>" readonly>

              <div class="control-group">
                <label class="control-label">ชื่อเข้าใช้ :</label>
                <div class="controls">
                  <input type="text" name="Re_Username" class="span4" value="<?php echo $data[0]['Re_Username'] ?>"/readonly>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">รหัสผ่าน :</label>
                <div class="controls">
                  <input type="text" name="Re_Password" class="span4" value="<?php echo $data[0]['Re_Password']  ?>" / required>

                </div>
              </div>
              <div class="control-group">
                <label class="control-label">ชื่อ-สกุล :</label>
                <input type="text" name="Re_Name" id="Pro_Name" class="span4" value="<?php echo $data[0]['Re_Name']  ?>"/ required>

              </div>

            <div class="control-group">
              <label class="control-label">ที่อยู่ :</label>
              <div class="controls">
                <textarea type="text"  name="Re_Adress"  value=""  required> <?php echo $data[0]['Re_Adress']  ?> </textarea>
                <!-- <input type="text"  name="Re_Adress" id="Pro_Amount" class="span1" value="<?php echo $data[0]['Re_Adress']  ?>"  required><br> -->
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">เบอร์โทร :</label>
              <div class="controls">
                <input type="text"  name="Re_Phone" id="Pro_Price" class="span2" value="<?php echo $data[0]['Re_Phone']  ?>"  required>
                 </div>
              </div>

              <div class="control-group">
                <label class="control-label">รูป :</label>
                <div class="controls">
                <input type="file"   name="Re_Pic" class="btn btn-primary" required>


                </div>
              </div>
              <div class="form-actions">

                <input   value="บันทึก" type=submit class="btn btn-success "   class="form-control" />

              </div>
            </form>
            <?php echo form_close(); ?>

          </div>
        </div>
      </div>
    </div>






  </div>
