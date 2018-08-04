


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
    <h1> ประวัติการจ้าง ลูกจ้างชั่วคราว</h1>

  </div>
  <div class="container-fluid">
    <hr>
    <a href="<?php echo site_url('hire/insertform'); ?>"><button name="button" class="btn btn-info" style="text-align:center">จ้างงานครั้งแรก</button></a>


    <div class="widget-box">
      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>ประวัติการจ้าง ลูกจ้างชั่วคราว</h5>

      </div>
      <div class="widget-content nopadding">
        <table class="table  data-table">
          <thead>
            <tr>
              <th>ลำดับ</th>
              <th>ชื่อ-สกุล</th>
              <th>ประจำหน่วย</th>
              <th>ผู้ควบคุมงาน</th>
              <th>จ้างครั้งที่1</th>
              <th>จ้างครั้งที่2</th>
              <th>จ้างครั้งที่3</th>
              <th>จ้างครั้งที่4</th>
              <th>จ้างครั้งอื่นๆ</th>
              <th>หมายเหตุ</th>
              <th>คำสั่งจ้าง</th>

              <th>จัดการ</th>

            </tr>
          </thead>
          <tbody>

            <?php foreach ($data as $key ): ?>
<?php if ($key['Em_Status'] == "เลิกจ้าง"): ?>

<?php else: ?>

  <tr>
    <td style="text-align: center"><?php echo $key['Hire_Id']; ?></td>
    <td style="text-align: Left"><?php echo $key['Em_Name'];?> <?php echo $key['Em_Lastname'];?></td>
    <td style="text-align: center"> <?php echo $key['De_Name'];?> </td>
    <td style="text-align: center"> <?php echo $key['De_Leader'];?> </td>
    <td style="text-align: center"><?php echo $key['Hire_1st'];?></td>
    <td style="text-align: center"><?php echo $key['Hire_2st'];?></td>
    <td style="text-align: center"><?php echo $key['Hire_3st'];?></td>
    <td style="text-align: center"><?php echo $key['Hire_4st'];?></td>
    <td style="text-align: center"><?php echo $key['Hire'];?></td>
    <td style="text-align: center"><?php echo $key['Hire_Note'];?>  </td>


    <td style="text-align: center">
      <a href="<?php echo site_url('report/singgle_hire/'.$key['Hire_Id'])?>"><button class="btn btn-warning"><span class="glyphicon icon-reorder">ดูคำสั่งจ้าง</span></button> </a>
    </td>

    <td >

      <div class="btn-group">
        <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">จัดการ  <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li>
            <a href="<?php echo site_url('hire/updateform/'.$key['Hire_Id'])?>"><span class="glyphicon icon-pencil">  แก้ไข</span></a>
          </li>
          <li>
            <a href="<?php echo site_url('hire/del/'.$key['Hire_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><span class="glyphicon icon-trash"> ลบ</span> </a>
          </li>

        </ul>
      </div>
    </td>


  </tr>
<?php endif; ?>




            <?php endforeach; ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- <td style="text-align: center"><img src="<?php echo base_url('assetAdmin/img/'.$key['Re_Pic']); ?>" style="width:150px;"></td>
  <td style="text-align: center">
    <a href="<?php echo site_url('hire/ShowPayment/'.$key['Con_Id'])?>"><button class="btn btn-success"><span class="glyphicon icon-search">  ดูการชำระเงิน</span></button> </a>

  </td> -->

</div>


<script src="<?php echo base_url('assetAdmin/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.ui.custom.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.uniform.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/select2.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/matrix.js') ?>"></script>
<script src="<?php echo base_url('assetAdmin/js/matrix.tables.js') ?>"></script>
