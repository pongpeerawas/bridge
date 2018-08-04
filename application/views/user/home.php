<!--main-container-part-->
<div id="content">
<!-- breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
        <h1> ยินดีต้อนรับ : คุณ<?php echo ($this->session->userdata('name')); ?></h1>
      <!-- <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> ภาพรวมของระบบ</a> -->
    </div>
  </div>
<!--End-breadcrumbs-->
<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">

      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>ข้อมูลส่วนตัว</h5>
      </div>




      <div class="widget-content nopadding">
        <form action="#" method="get" class="form-horizontal">
          <!-- <?php echo $data[0]['Re_Id']  ?> -->
          <div class="control-group">
            <label class="control-label">ชื่อเข้าใช้ :</label>
            <div class="controls">
            <?php echo $data[0]['Re_Username'] ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">รหัสผ่าน :</label>
            <div class="controls">
              <?php echo $data[0]['Re_Password']  ?>

            </div>
          </div>
          <div class="control-group">
            <label class="control-label">ชื่อ-สกุล :</label>
              <div class="controls">
            <?php echo $data[0]['Re_Name']  ?>
</div>
          </div>

        <div class="control-group">
          <label class="control-label">ที่อยู่ :</label>
          <div class="controls">
            <?php echo $data[0]['Re_Adress']  ?>

          </div>
        </div>
        <div class="control-group">
          <label class="control-label">เบอร์โทร :</label>

          <div class="controls">
              <?php echo $data[0]['Re_Phone']  ?>
             </div>
          </div>

          <div class="control-group">
            <label class="control-label">รูป :</label>
            <div class="controls">
            <img src="<?php echo base_url('assetAdmin/img/'.$data[0]['Re_Pic'] ); ?>" style="width:150px;">


            </div>
          </div>
          <div class="form-actions">



          </div>
        </form>


      </div>
    </div>
  </div>
</div>
      </div>
      </div>
<!--End-Chart-box-->
    <hr/>


<!--end-main-container-part-->
