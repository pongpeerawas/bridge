<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>

  <meta charset="UTF-8" />

  <div id="content">
    <div class="container-fluid">



      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">

            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>ลงทะเบียนลูกจ้างชั่วคราว</h5>
            </div>
            <?php echo form_open_multipart('employee/update'); ?>

            <div class="widget-content nopadding">

              <form action="#" method="get" class="form-horizontal">

                <div class="control-group">
                  <label class="control-label">รูปถ่าย :</label>
                  <div class="controls">
                    <img src="<?php echo base_url('assetAdmin/img/'.$data[0]['Em_Pic']); ?>" style="width:150px;">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">ชื่อ :</label>
                  <div class="controls">
                    <input type="hidden" name="Em_Id" value="<?php echo $data[0]['Em_Id']  ?>" class="span4"  / >

                    <input type="text" name="Em_Name" value="<?php echo $data[0]['Em_Name']  ?>" class="span4"  / >
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">นามสกุล :</label>
                  <div class="controls">
                    <input type="text" name="Em_Lastname" class="span4" value="<?php echo $data[0]['Em_Lastname']  ?>" / >

                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">สัญชาติ :</label>
                  <div class="controls">
                    <input type="text" name="Em_Nation"  class="span2" value="<?php echo $data[0]['Em_Nation']  ?>" / >
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">เชื้อชาติ :</label>
                  <div class="controls">
                    <input type="text" name="Em_Nation2" class="span2" value="<?php echo $data[0]['Em_Nation2']  ?>" / >
                  </div>
                </div>
                <!-- <div class="control-group">
                <label class="control-label">ศาสนา :</label>
                <div class="controls">
                <input type="text" name="Em_Religion"  class="span2" / >
              </div>
            </div> -->
            <div class="control-group">
              <label class="control-label">ศาสนา :</label>
              <div class="controls">
                <select  name="Em_Religion" class="span2" required>
                  <option value="<?php echo $data[0]['Em_Religion']  ?>" selected><?php echo $data[0]['Em_Religion']  ?></option>
                  <option value="ศาสนาคริสต์">ศาสนาคริสต์</option>
                  <option value="ศาสนาอิสลาม">ศาสนาอิสลาม</option>
                  <option value="ศาสนาพราหมณ์">ศาสนาพราหมณ์-ฮินดู</option>
                  <option value="ศาสนาพุทธนิกายมหายาน">ศาสนาพุทธนิกายมหายาน</option>
                  <option value="ศาสนาพุทธ">ศาสนาพุทธ</option>
                  <option value="ไม่มีศาสนา">ไม่มีศาสนา</option>

                </select>


                <!-- <input type="text" name="Em_Religion" class="span2" value="<?php echo $data[0]['Em_Religion']  ?>" / > -->

              </div>
            </div>

            <div class="control-group">
              <label class="control-label">เกิดวันที่ :</label>
              <div class="controls">
                <input type="date" name="Em_Birthday"   value="<?php echo $data[0]['Em_Birthday']  ?>" data-date-format="dd-mm-yyyy"   class="span3" / >
                <!-- <div  data-date="12-02-2012"   class="input-append date datepicker">
                <input type="text" value=""   name="Em_Birthday"  class="span4" >
                <span class="add-on"><i class="icon-th"></i></span> </div> -->
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">อายุ :</label>
              <div class="controls">
                <input type="number" name="Em_Age" value="<?php echo $data[0]['Em_Age']  ?>"  class="span1" / > ปี

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สถานที่เกิด :</label>
              <div class="controls">
                <input type="text" name="Em_Place_Birth"  class="span6"   value="<?php echo $data[0]['Em_Place_Birth']  ?>"  >

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">เลขที่บัตรประจำตัวประชาชน :</label>
              <div class="controls">
                <input type="number" name="Em_Idcard"  class="span3"  value="<?php echo $data[0]['Em_Idcard']  ?>">

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ที่อยู่ปัจจุบัน :</label>
              <div class="controls">
                <textarea type="text"  name="Em_Adress" class="span6" value="" > <?php echo $data[0]['Em_Adress']  ?></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">เบอร์โทรศัพท์ :</label>
              <div class="controls">
                <input type="number" name="Em_Phone"  class="span2"  value="<?php echo $data[0]['Em_Phone']  ?>" maxlength="10" >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สำเร็จการศึกษาสูงสุดจาก :</label>
              <div class="controls">
                <input type="text"  name="Em_Place_Edu"  class="span4"    value="<?php echo $data[0]['Em_Place_Edu']  ?>"  >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">วุฒิการศึกษา :</label>
              <div class="controls">
                <input type="text"  name="Em_Education"  class="span3"  value="<?php echo $data[0]['Em_Education']  ?>"  >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ความรู้หรือความสามารถพิเศษ :</label>
              <div class="controls">
                <input type="text"  name="Em_Talent"  class="span4"  value="<?php echo $data[0]['Em_Talent']  ?>"  >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ประเภทลูกจ้าง :</label>
              <div class="controls">
                <select  name="Em_Type" class="span2" required>
                  <option value="<?php echo $data[0]['Em_Type']  ?>" selected><?php echo $data[0]['Em_Type']  ?></option>
                  <option value="รายเดือน">รายเดือน</option>
                  <option value="รายวัน">รายวัน</option>
                  <option value="รายชั่วโมง">รายชั่วโมง</option>
                </select>
                <!-- <input type="text"  name="Em_Type"  class="span3"  value="<?php echo $data[0]['Em_Type']  ?>"  > -->

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ตำแหน่ง :</label>
              <div class="controls">
                <input type="text"  name="Em_Position"  class="span3" value="<?php echo $data[0]['Em_Position']  ?>" >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สังกัดหน่วยงาน :</label>
              <div class="controls">
                <select name="De_Id" required>
                  <option value="<?php echo $data[0]['De_Id']  ?>" selected></option>
                  <!-- <?php echo $data[0]['De_Name']  ?> -->
                  <?php if ($data[0]['De_Id']): ?>
                    <?php foreach ($department as $key ): ?>
                      <?php if ($data[0]['De_Id']==$key['De_Id']): ?>
                        <option selected value="<?php echo $key['De_Id']?>" ><?php echo $key['De_Name'] ?> </option>
                      <?php else: ?>
                        <option value="<?php echo $key['De_Id']?>" ><?php echo $key['De_Name'] ?> </option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php else: ?>
                  <?php endif; ?>
                </select>
                <!-- <input type="text"  name="Em_Position"  class="span3" value="<?php echo $data[0]['De_Name']  ?>" > -->

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">อัตราค่าจ้าง :</label>
              <div class="controls">
                <input type="number"  name="Em_Salary"  class="span2"  value="<?php echo $data[0]['Em_Salary']  ?>" > บาท
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">รูป :</label>
              <div class="controls">
                <input type="file"   name="Em_Pic" class="btn btn-primary" >

              </div>
            </div>
            <div class="form-actions">
              <button class="btn btn-danger" onclick="window.history.back()"> < กลับ</button>
              <input   value=แก้ไข type=submit class="btn btn-success" class="form-control  onclick="return confirm('ยืนยันการแก้ไข !')" "  />

            </div>

          </form>
          <?php echo form_close(); ?>


        </div>
      </div>
    </div>
  </div>






</div>


</div>
