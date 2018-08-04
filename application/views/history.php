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

            <div class="widget-content nopadding">

              <form class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">รูปถ่าย :</label>
                  <div class="controls">
                    <img src="<?php echo base_url('assetAdmin/img/'.$data[0]['Em_Pic']); ?>" style="width:150px;">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">ชื่อ :</label>
                  <div class="controls">
                    <input type="text" name="Em_Name" value="<?php echo $data[0]['Em_Name']  ?>" class="span4"  / readonly>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">นามสกุล :</label>
                  <div class="controls">
                    <input type="text" name="Em_Lastname" class="span4" value="<?php echo $data[0]['Em_Lastname']  ?>" / readonly>

                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">สัญชาติ :</label>
                  <div class="controls">
                    <input type="text" name="Em_Nation"  class="span2" value="<?php echo $data[0]['Em_Nation']  ?>" / readonly>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">เชื้อชาติ :</label>
                  <div class="controls">
                    <input type="text" name="Em_Nation2" class="span2" value="<?php echo $data[0]['Em_Nation2']  ?>" / readonly>
                  </div>
                </div>
                <!-- <div class="control-group">
                <label class="control-label">ศาสนา :</label>
                <div class="controls">
                <input type="text" name="Em_Religion"  class="span2" / readonly>
              </div>
            </div> -->
            <div class="control-group">
              <label class="control-label">ศาสนา :</label>
              <div class="controls">
                <input type="text" name="Em_Religion" class="span2" value="<?php echo $data[0]['Em_Religion']  ?>" / readonly>

              </div>
            </div>

            <div class="control-group">
              <label class="control-label">เกิดวันที่ :</label>
              <div class="controls">
                <input type="date" name="Em_Birthday"   value="<?php echo $data[0]['Em_Birthday']  ?>" data-date-format="dd-mm-yyyy"   class="span3" / readonly>
                <!-- <div  data-date="12-02-2012"   class="input-append date datepicker">
                <input type="text" value=""   name="Em_Birthday"  class="span4" readonly>
                <span class="add-on"><i class="icon-th"></i></span> </div> -->
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">อายุ :</label>
              <div class="controls">
                <input type="number" name="Em_Age" value="<?php echo $data[0]['Em_Age']  ?>"  class="span1" / readonly> ปี

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สถานที่เกิด :</label>
              <div class="controls">
                <input type="text" name="Em_Place_Birth"  class="span6"   value="<?php echo $data[0]['Em_Place_Birth']  ?>"  readonly>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">เลขที่บัตรประจำตัวประชาชน :</label>
              <div class="controls">
                <input type="number" name="Em_Idcard"  class="span3"  value="<?php echo $data[0]['Em_Idcard']  ?>"readonly>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ที่อยู่ปัจจุบัน :</label>
              <div class="controls">
                <textarea type="text"  name="Em_Adress" class="span6" value="" readonly> <?php echo $data[0]['Em_Adress']  ?></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">เบอร์โทรศัพท์ :</label>
              <div class="controls">
                <input type="number" name="Em_Phone"  class="span2"  value="<?php echo $data[0]['Em_Phone']  ?>" maxlength="10" readonly>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สำเร็จการศึกษาสูงสุดจาก :</label>
              <div class="controls">
                <input type="text"  name="Em_Place_Edu"  class="span4"    value="<?php echo $data[0]['Em_Place_Edu']  ?>"  readonly>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">วุฒิการศึกษา :</label>
              <div class="controls">
                <input type="text"  name="Em_Education"  class="span3"  value="<?php echo $data[0]['Em_Education']  ?>" readonly >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ความรู้หรือความสามารถพิเศษ :</label>
              <div class="controls">
                <input type="text"  name="Em_Talent"  class="span4"  value="<?php echo $data[0]['Em_Talent']  ?>" readonly >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ประเภทลูกจ้าง :</label>
              <div class="controls">

                  <input type="text"  name="Em_Type"  class="span3"  value="<?php echo $data[0]['Em_Type']  ?>" readonly >

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ตำแหน่ง :</label>
              <div class="controls">
                <input type="text"  name="Em_Position"  class="span3" value="<?php echo $data[0]['Em_Position']  ?>" readonly>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">สังกัดหน่วยงาน :</label>
              <div class="controls">

                  <input type="text"  name="Em_Position"  class="span3" value="<?php echo $data[0]['De_Name']  ?>" readonly>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">อัตราค่าจ้าง :</label>
              <div class="controls">
                <input type="number"  name="Em_Salary"  class="span2"  value="<?php echo $data[0]['Em_Salary']  ?>" readonly> บาท
              </div>
            </div>

            <button class="btn btn-danger" onclick="window.history.back()"> < กลับ</button>

          </form>


        </div>
      </div>
    </div>
  </div>






</div>


</div>
