


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
    <h1>รายชื่อลูกจ้าง</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <a href="<?php echo site_url('employee/insertform'); ?>"><button name="button" class="btn btn-info" style="text-align:center">ลงทะเบียนลูกจ้างชั่วคราว</button></a>


    <div class="widget-box">
      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>รายชื่อลูกจ้าง</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table  data-table">
          <thead>
            <tr>
              <th>รหัส</th>

              <!-- <th>รหัสผ่าน	</th> -->
              <th>ชื่อ-สกุล</th>
              <th>หน่วยงาน</th>
              <th>ตำแหน่ง</th>
              <th>รูปถ่าย</th>
              <th>สถานะ</th>
              <th>จัดการ</th>

            </tr>
          </thead>
          <tbody>

            <?php foreach ($data as $key ): ?>

              <tr>
                <td><?php echo $key['Em_Id']; ?></td>
                <td><?php echo $key['Em_Name'];?>    <?php echo $key['Em_Lastname'];?></td>
                <!-- <td>**********</td> -->
                <td><?php echo $key['De_Name'];?></td>

                <td><?php echo $key['Em_Position'];?></td>
                <td><img src="<?php echo base_url('assetAdmin/img/'.$key['Em_Pic']); ?>" style="width:150px;"></td>
                <!-- <td>
                <?php if ($key['Room_Id'] == null): ?>
                <?php echo"ยังไม่ทำสัญญาเช่า"?>

              <?php else: ?>
              <?php echo $key['Room_Number'];?>

            <?php endif; ?>


          </td> -->
          <td>
            <?php if ($key['Em_Status'] == "เลิกจ้าง"): ?>
              <span class="label label-important">  <?php echo $key['Em_Status'];?></span>
            <?php else: ?>
              <?php if ($key['Em_Status'] == "ลูกจ้าง"): ?>
                <span class="label label-success">  <?php echo $key['Em_Status'];?></span>

              <?php else: ?>
                <span class="label label-warning">  <?php echo $key['Em_Status'];?></span>

              <?php endif; ?>
            <?php endif; ?>




          </td>
          <td>
            <div class="fr">
              <a href="<?php echo site_url('employee/history/'.$key['Em_Id'])?>" class="btn btn-primary btn-mini">ดูประวัติ</a>
              <a href="<?php echo site_url('employee/updateform/'.$key['Em_Id'])?>" class="btn btn-success btn-mini">แก้ไขประวัติ</a>
              <a href="<?php echo site_url('employee/del/'.$key['Em_Id'])?>" onclick="return confirm('คุณต้องการที่จะลบรายการใช่หรือไม่?')" class="btn btn-danger btn-mini">ลบ</a>
            </div>
            <!-- <a href="<?php echo site_url('employee/del/'.$key['Em_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><span class="glyphicon icon-trash"> ลบ</span> </a> -->

            <!-- <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">จัดการ      <span class="caret"></span></button>

            <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('employee/history/'.$key['Em_Id'])?>"><span class="glyphicon icon-pencil">  ดูประวัติ</span></a></li>
            <li><a href="<?php echo site_url('employee/updateform/'.$key['Em_Id'])?>"><span class="glyphicon icon-pencil">  แก้ไขประวัติ</span></a></li>
            <li>  <a href="<?php echo site_url('employee/del/'.$key['Em_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><span class="glyphicon icon-trash"> ลบ</span> </a></li>
          </ul>
        </div> -->
      </td>


    </tr>




  <?php endforeach; ?>


</tbody>
</table>
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
