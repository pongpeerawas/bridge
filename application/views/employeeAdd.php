<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>

  <meta charset="UTF-8" />

  <div id="content">
    <div class="container-fluid">



      <div class="row-fluid">
        <div class="span10">
          <div class="widget-box">

            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>ลงทะเบียนลูกจ้างชั่วคราว</h5>
            </div>
            <!-- <?= validation_errors() ?>
            <?= $this->session->flashdata('error') ?> -->
            <?php echo form_open_multipart('employee/insert'); ?>

            <div class="widget-content nopadding">
              <form class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">ชื่อ :</label>
                  <div class="controls">
                    <input type="text" name="Em_Name" class="span4"  / required>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">นามสกุล :</label>
                  <div class="controls">
                    <input type="text" name="Em_Lastname" class="span4" / required>

                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">สัญชาติ :</label>
                  <div class="controls">
                    <input type="text" name="Em_Nation"  class="span2" / required>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">เชื้อชาติ :</label>
                  <div class="controls">
                    <input type="text" name="Em_Nation2" class="span2" / required>
                  </div>
                </div>

            <div class="control-group">
              <label class="control-label">ศาสนา :</label>
              <div class="controls">
                <select  name="Em_Religion" class="span2" required>
                  <option value="" selected>------- เลือกศาสนา -------</option>
                  <option value="ศาสนาคริสต์">ศาสนาคริสต์</option>
                  <option value="ศาสนาอิสลาม">ศาสนาอิสลาม</option>
                  <option value="ศาสนาพราหมณ์">ศาสนาพราหมณ์-ฮินดู</option>
                  <option value="ศาสนาพุทธนิกายมหายาน">ศาสนาพุทธนิกายมหายาน</option>
                  <option value="ศาสนาพุทธ">ศาสนาพุทธ</option>
                  <option value="ไม่มีศาสนา">ไม่มีศาสนา</option>

                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">เกิดวันที่ :</label>
              <div class="controls">
                <input type="date" name="Em_Birthday"  data-date-format="dd-mm-yyyy"   class="span3" / required>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">อายุ :</label>
              <div class="controls">
                <input type="number" name="Em_Age"  data-date-format="dd-mm-yyyy"   class="span1" / required> ปี

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สถานที่เกิด :</label>
              <div class="controls">
                <input type="text" name="Em_Place_Birth"  class="span6"  placeholder="ตำบล/อำเภอ/จังหวัด" required>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">เลขที่บัตรประจำตัวประชาชน :</label>
              <div class="controls">
                <input type="number" name="Em_Idcard"  class="span3"  required>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ที่อยู่ปัจจุบัน :</label>
              <div class="controls">
                <textarea type="text"  name="Em_Adress" class="span6" > </textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">เบอร์โทรศัพท์ :</label>
              <div class="controls">
                <input type="number" name="Em_Phone"  class="span2"  maxlength="10" required>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สำเร็จการศึกษาสูงสุดจาก :</label>
              <div class="controls">
                <input type="text"  name="Em_Place_Edu"  class="span5" required>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">วุฒิการศึกษา :</label>
              <div class="controls">
                <input type="text"  name="Em_Education"  class="span3" required >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ความรู้หรือความสามารถพิเศษ :</label>
              <div class="controls">
                <input type="text"  name="Em_Talent"  class="span5"   >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ประเภทลูกจ้าง :</label>
              <div class="controls">
                <select  name="Em_Type" class="span3" required>
                  <option value="" selected>------ เลือกประเภทลูกจ้าง ------</option>
                  <option value="รายเดือน">รายเดือน</option>
                  <option value="รายวัน">รายวัน</option>
                  <option value="รายชั่วโมง">รายชั่วโมง</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ตำแหน่ง :</label>
              <div class="controls">
                <input type="text"  name="Em_Position"  class="span5" required>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สังกัดหน่วยงาน :</label>
              <div class="controls">
                <select name="De_Id" required>
                  <option value="" selected>--------- เลือกสังกัดหน่วยงาน ---------</option>
                  <?php foreach ($department as $key ): ?>
                    <?php if ($data[0]['De_Id']==$key['De_Id']): ?>
                      <option selected value="<?php echo $key['De_Id']?>" ><?php echo $key['De_Name'] ?></option>

                    <?php else: ?>
                      <option value="<?php echo $key['De_Id']?>" ><?php echo $key['De_Name'] ?></option>

                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">อัตราค่าจ้าง :</label>
              <div class="controls">
                <input type="number"  name="Em_Salary"  class="span2" required> บาท
              </div>
            </div>
            <input type="hidden"  name="Em_Status" value="รออนุมัติ"  class="span2" > 

            <div class="control-group">
              <label class="control-label">รูปถ่าย :</label>
              <div class="controls">
                <input type="file"   name="Em_Pic" class="btn btn-primary" >*รูปถ่ายหน้าตรง 2 นิ้ว
              </div>
            </div>
            <div class="form-actions">

              <input   value="บันทึก" type=submit class="btn btn-success "   class="form-control" onclick="return confirm('กรุณาตรวจสอบข้อมูลอีกครั้งเพื่อความถูกต้อง !')"/>

            </div>

          </form>
          <?php echo form_close(); ?>

        </div>
      </div>
    </div>
  </div>






</div>


</div>
