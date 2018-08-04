


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
    <h1>ข้อมูลสัญญาเช่า</h1>
  </div>
  <div class="container-fluid">
    <hr>


    <div class="widget-box">
      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>สัญญาเช่า</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table  data-table">
          <thead>
            <tr>
              <th>รหัส</th>
              <th>วันที่ทำสัญญา</th>
              <th>เงินมัดจำ</th>
              <th>ห้อง</th>
              <th>ชื่อผู้ทำสัญญา</th>
              <th>รูป</th>
              <th>ดูชำระเงินรายเดือน</th>
              <th>ดูสัญญา</th>
              <!-- <th>จัดการ</th> -->

            </tr>
          </thead>
          <tbody>

            <?php foreach ($ShowContract as $key ): ?>

              <tr>
                <td style="text-align: center"><?php echo $key['Con_Id']; ?></td>
                <td style="text-align: center"><?php echo $key['Con_Date'];?></td>
                <td style="text-align: center"><?php echo $key['Con_Cash'];?></td>
                <?php endforeach; ?>
                  <?php foreach ($renter as $key ): ?>
                <td style="text-align: center">
                  <?php echo $key['Room_Number'];?>
                </td>

                <td style="text-align: center"><?php echo $key['Re_Name'];?></td>
                <td style="text-align: center"><img src="<?php echo base_url('assetAdmin/img/'.$key['Re_Pic']); ?>" style="width:150px;"></td>
                <?php endforeach; ?>

                <?php foreach ($ShowContract as $key ): ?>

                <td style="text-align: center">
                  <a href="<?php echo site_url('user/contract/ShowPayment/'.$key['Con_Id'])?>"><button class="btn btn-success"><span class="glyphicon icon-search">  ดูการชำระเงิน</span></button> </a>

                </td>
                <td style="text-align: center">
                  <a href="<?php echo site_url('report/singgle_contract/'.$key['Con_Id'])?>"><button class="btn btn-warning"><span class="glyphicon icon-reorder">   พิมพ์สัญญา</span></button> </a>

                </td>

                <td >

                  <!-- <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">จัดการ  <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="<?php echo site_url('contract/updateform/'.$key['Con_Id'])?>"><span class="glyphicon icon-pencil">  แก้ไข</span></a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('contract/del/'.$key['Con_Id'])?>" onclick="return confirm('ยืนยันการลบ !')"><span class="glyphicon icon-trash"> ลบ</span> </a>
                      </li>

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
