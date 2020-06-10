 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cat"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> SIPAKING </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
     
      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
          <i class="fas fa-fw fa-tachometer-alt "></i>
          <span>Dashboard</span></a>
      </li>
      

      <!-- Divider -->
      <hr class="sidebar-divider mt-3">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu SIPAKING
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-pencil-alt"></i>
          <span>Menu</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">MENU SIPAKING :</h6>
            <a class="collapse-item" href="<?= base_url('datalatih') ?>">Data Latih</a>
            <a class="collapse-item" href="<?= base_url('datamedispengujian') ?>">Data Record Pengujian</a>
           
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom</h6>
            <a class="collapse-item" href="<?= base_url('menu/myprofile'); ?>">My Profile</a>
            <a class="collapse-item" href="<?= base_url('menu/editprofile') ?>">Edit Profile</a>
            <a class="collapse-item" href="<?= base_url('menu/changepassword') ?>">Change Password</a>
            <a class="collapse-item" href="<?= base_url('datalatih/inputdatalatih') ?>">Input Data Latih</a>

          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

       <!-- Nav Item - Registration -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('menu/registration'); ?>">
         <i class="fas fa-fw fa-plus-square"></i>
          <span>Create Account</span></a>
      </li>
      
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
        </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
