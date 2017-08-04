<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php echo base_url('img/user/u.jpg') ?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Muhammad Fajri</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Front Laptop</a>
    </div>
  </div>

  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
      <a href="<?php echo base_url('backend') ?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-user-secret"></i>
        <span>Admin Options</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right">7</span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('backend/member') ?>"><i class="fa fa-users"></i> Members</a></li>
        <li><a href=""><i class="fa fa-star"></i> Social Media</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="<?php echo base_url('backend/tour') ?>">
        <i class="fa fa-map"></i> <span>Tour</span>
        <span class="label label-warning pull-right">5</span>
        <span class="label label-danger pull-right">15</span>
        <span class="label label-success pull-right">29</span>
      </a>
    </li>
    <li class="treeview">
      <a href="<?php echo base_url('backend/culture') ?>">
        <i class="fa fa-institution"></i> <span>Culture</span>
        <span class="label label-warning pull-right">4</span>
        <span class="label label-danger pull-right">12</span>
        <span class="label label-success pull-right">39</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-bitcoin"></i> <span>About Us</span>
      </a>
    </li>
  </ul>
</section>
<!-- /.sidebar -->
