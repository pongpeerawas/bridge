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
            <h5>แก้ไขสัญญา</h5>
          </div>
            <?php echo form_open('hire/update'); ?>
          <div class="widget-content nopadding">
            <form action="#" method="get" class="form-horizontal">

              <div class="control-group">
                <label class="control-label">วันที่ทำสัญญา :</label>
                <div class="controls">
                  <input type="hidden" class="form-control" name="Con_Id" value="<?php echo $data[0]['Con_Id']  ?>" readonly>

                  <input type="date" name="Con_Date" value="<?php echo $data[0]['Con_Date']  ?>"/ required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">ผู้เช่า :</label>
                <div class="controls">
                  <select name="Re_Id" required>
                    <option value="<?php echo $data[0]['Re_Id']  ?>" selected><?php echo $data[0]['Re_Name']  ?></option>
                    <?php if ($data[0]['Re_Id']): ?>
                      <?php foreach ($renter as $key ): ?>
                        <?php if ($data[0]['Re_Id']==$key['Re_Id']): ?>

                          <option selected value="<?php echo $key['Re_Id']?>" ><?php echo $key['Re_Name'] ?></option>

                        <?php else: ?>
                          <option value="<?php echo $key['Re_Id']?>" ><?php echo $key['Re_Name'] ?></option>

                        <?php endif; ?>
                      <?php endforeach; ?>
                    <?php else: ?>

                    <?php endif; ?>



                </select>

              </div>
              <div class="control-group">
                <label class="control-label">เลือกห้อง :</label>
                <input type="hidden" class="form-control" name="Room_Id2" value="<?php echo $data[0]['Room_Id']?>" readonly>

                  <select name="Room_Id" required>
                    <option value="<?php echo $data[0]['Room_Id']  ?>" selected><?php echo $data[0]['Room_Number']  ?></option>

                    <?php if ($data[0]['Room_Number']): ?>
                      <?php foreach ($room as $key ): ?>
                        <?php if ($data[0]['Room_Id']==$key['Room_Id']): ?>

                          <option selected value="<?php echo $key['Room_Id']?>" ><?php echo $key['Room_Number'] ?> </option>

                        <?php else: ?>
                          <option value="<?php echo $key['Room_Id']?>" ><?php echo $key['Room_Number'] ?> </option>

                        <?php endif; ?>
                      <?php endforeach; ?>
                    <?php else: ?>

                    <?php endif; ?>

                <div class="controls">

                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">จำนวนเงินมัดจำ :</label>
              <div class="controls">
                <input type="number"  name="Con_Cash" value="<?php echo $data[0]['Con_Cash']  ?>" class="span2" onkeypress="return noNumbers(event)" required> บาท<br>
              </div>
            </div>

              <div class="form-actions">

                <input   value=แก้ไข type=submit class="btn btn-success "   class="form-control" />

              </div>
            </form>
            <?php echo form_close(); ?>

          </div>
        </div>
      </div>
    </div>






  </div>


</div>
