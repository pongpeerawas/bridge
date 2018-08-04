<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>หน้าหลัก</a>
  <ul>
    <li class=""><a href="<?php echo base_url()?>index.php/user/home/single_renter?id=<?$this->session->userdata('id')?>"><i class="icon icon-home"></i> <span>หน้าหลัก</span></a> </li>
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>การจัดการสินค้าและโปรโมชั่น</span></a>  -->
    <!-- <ul> -->
        <li> <a href="<?php echo base_url()?>index.php/user/renter/single_renter?id=<?$this->session->userdata('id')?>"><i class="icon icon-inbox"></i> <span>แก้ไขข้อมูลส่วนตัว</span></a> </li>
      <li> <a href="<?php echo base_url()?>index.php/user/payment/single_payment?id=<?$this->session->userdata('id')?>"><i class="icon icon-th"></i> <span>ชำระเงิน</span></a> </li>
      <li> <a href="<?php echo base_url()?>index.php/user/contract/single_contract?id=<?$this->session->userdata('id')?>"><i class="icon icon-inbox"></i> <span>สัญญาเช่าและดูการชำระเงิน</span></a> </li>

  <!-- </ul> -->
<!-- </li> -->
    <!-- <li><a href="<?php echo site_url('user/report'); ?>"><i class="icon icon-user"></i> <span>พิมพ์รายงาน</span></a></li> -->
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>รายการสั่งซื้อและการจัดส่ง</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="<?php echo site_url('backEnd/Order'); ?>">รายการสั่งซื้อและการจัดส่ง</a></li>
        <li><a href="<?php echo site_url('backEnd/PaymentConfirm'); ?>">รายการการแจ้งชำระเงิน</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li> -->
    <!-- <li><a href="managetransport.php"><i class="icon icon-tint"></i> <span>AR;</span></a></li>
    <li><a href="managepay.php"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li> -->
  </ul>
</div>
<!--sidebar-menu-->
