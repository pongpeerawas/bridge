<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>จัดการข้อมูลสัญญา</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">

          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>บันทึกการจ้างงาน</h5>
          </div>
          <?php echo form_open_multipart('hire/insert'); ?>
          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">
              <table  border="0" >
                <tr>
                  <td style="text-align: right">
                    <label class="control-label">จ้างครั้งที่ :  </label>
                  </td>
                  <td>
                    <h1> 1 </h1>
                  </td>
                </tr>
                <tr>
                  <td style="text-align: right">
                    <label class="control-label">วันที่ทำการจ้าง :</label>
                  </td>
                  <td>
                    <div class="controls">
                      <input type="date" name="Hire_1st" / required>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td style="text-align: right">
                    <label class="control-label">เลือกลูกจ้าง  :</label>
                  </td>
                  <td>

                    <select name="Em_Id" required>
                      <option value="" selected>--------- เลือกลูกจ้าง ---------</option>

                      <<?php foreach ($employee as $key ): ?>
                        <?php if ($data[0]['Em_Id']==$key['Em_Id']): ?>
                          <option selected value="<?php echo $key['Em_Id']?>" >เลขที่:<?php echo $key['Em_Id'] ?> / <?php echo $key['Em_Name'] ?>  <?php echo $key['Em_Lastname'] ?></option>

                        <?php else: ?>
                          <option value="<?php echo $key['Em_Id']?>" >เลขที่:<?php echo $key['Em_Id'] ?>  / <?php echo $key['Em_Name'] ?>  <?php echo $key['Em_Lastname'] ?></option>

                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>

                  </td>
                </tr>
                <tr>
                  <td style="text-align: right">
                    <label class="control-label">รูปคำสั่งจ้างงาน :  </label>
                  </td>
                  <td>
                    <div class="controls">
                      <input type="file" name="Hire_Pic"/>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td style="text-align: right">
                    <label class="control-label">รูปคำสั่งจ้างงาน :  </label>
                  </td>
                  <td>
                    <div class="controls">
                      <input type="file" name="Hire_Card_Pic"/>
                    </div>
                  </td>
                </tr>
              </table>


              <!-- <div class="control-group">
              <label class="control-label">จำนวนเงินมัดจำ :</label>
              <div class="controls">
              <input type="number"  name="Con_Cash" id="Pro_Amount" class="span2"  required> บาท<br>
            </div>
          </div> -->

          <div class="form-actions">

            <input   value=บันทึก type=submit class="btn btn-success "   class="form-control"/>

          </div>
        </form>
        <?php echo form_close(); ?>

      </div>
    </div>
  </div>
</div>






</div>


</div>
<!-- <div class="controls">
<select  name="hire_time" class="span2" required>
<option value="" selected>------- เลือกครั้งที่จ้าง -------</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="อื่นๆ">ครั้งอื่นๆ</option>


</select>
</div> -->
