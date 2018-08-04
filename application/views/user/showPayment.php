


<!DOCTYPE html>
<html lang="en">
<head>
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
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'> -->


</head>



<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>รายละเอียดการแจ้งชำระเงิน</h1>
  </div>
  <div class="container-fluid">
    <hr>


    <div class="widget-box">
      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>รายการสัญญาเช่า</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table  data-table">
          <thead>
            <tr>
              <th>เลขที่การชำระเงิน</th>
              <th>ชื่อผู้แจ้ง</th>
              <th>โอนเข้าบัญชี</th>
              <th>จำนวนเงิน</th>
              <th>วันที่แจ้งชำระ</th>
              <th>รูปภาพหลักฐานการโอนเงิน</th>


            </tr>
          </thead>
          <tbody>

            <?php foreach ($ShowPayment as $row ): ?>

              <tr>
                <td ><?php echo $row->Pay_Id;?></td>
                <td style="text-align: center"><?php echo $row->Re_Name;?> </td>

                <td style="text-align: center"><?php echo $row->Pay_Bank;?></td>
                <td style="text-align: center"><?php echo $row->Pay_Price;?> </td>
                <td style="text-align: center"><?php echo $row->Pay_Date;?> </td>
                <td  style="text-align: center">
                  <ul class="thumbnails">
                    <li class="span2"> <a> <img  src="<?php echo base_url() ?>assetAdmin/img/<?php echo $row->Pay_Pic ?>" ></a>
                      <div class="actions"> <a class="lightbox_trigger" href="<?php echo base_url() ?>assetAdmin/img/<?php echo $row->Pay_Pic ?>"><i class="icon-search"></i></a> </div>
                    </li>
                  </ul>

                </td>


              </tr>




            <?php endforeach; ?>


          </tbody>
        </table>

      </div>

    </div>
    <button class="btn btn-danger" onclick="window.history.back()"> < กลับ</button>

  </div>


</div>






</div>
</div>

</div>




<script src="<?php echo base_url('assetAdmin/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.ui.custom.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.uniform.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/select2.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/matrix.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/matrix.tables.js') ?>"></script>
