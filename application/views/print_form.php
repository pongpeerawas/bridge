<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> ภาพรวมของระบบ</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="<?php echo site_url('report'); ?>"> <i class="icon-th"></i>พิมพ์รายงานห้องพัก </a> </li>
        <li class="bg_ly"> <a href="<?php echo site_url('report/renter'); ?>"> <i class="icon-user"></i>พิมพ์รายงานข้อมูลผู้เช่า </a> </li>
        <li class="bg_lo"> <a href="<?php echo site_url('report/contract'); ?>"> <i class="icon-inbox"></i>พิมพ์รายงานการสัญญา</a> </li>
        <!-- <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i>พิมพ์รายงานรายการชำระเงิน</a> </li> -->


      </ul>
    </div>
    <div class="btn-group">
          <button data-toggle="dropdown" class="btn dropdown-toggle">พิมพ์รายงานรายการชำระเงิน <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <?php foreach ($renter as $key ): ?>
            <a href="<?php echo base_url() ?>index.php/report/payment/<?php echo $key->Con_Id ?>">  <li>คุณ <?php echo $key->Re_Name;?></li></a>
            <li class="divider"></li>


            <?php endforeach; ?>

          </ul>
        </div>
<!--End-Action boxes-->
<!--Chart-box-->

      </div>
      </div>
<!--End-Chart-box-->
    <hr/>


<!--end-main-container-part-->
