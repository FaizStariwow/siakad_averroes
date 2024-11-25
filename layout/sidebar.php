<?php $page = basename($_SERVER['PHP_SELF'], '.php'); ?>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
        <img src="<?= $page == 'index' ? '../../assets/img/logoaverroes.png' : '../../../assets/img/logoaverroes.png'?>" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Siakad Averros</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <?php
        
        // Get the current page name without .php
        
        if($_SESSION['role'] == 1){?>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'index' ? 'active' : ''?>" href="<?php echo '/siakad_averroes/pages/admin/index.php' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home <?= $page == 'index' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">User pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'user' ? 'active' : ''?>" href="<?php echo '/siakad_averroes/pages/admin/user/user.php' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user <?= $page == 'user' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">User</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Kelas Pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'kelas' ? 'active' : ''?> " href="<?php echo '/siakad_averroes/pages/admin/kelas/kelas.php' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-chalkboard-teacher <?= $page == 'kelas' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">Kelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'mapel' ? 'active' : ''?> " href="<?php echo '/siakad_averroes/pages/admin/mapel/mapel.php' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-book <?= $page == 'mapel' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">Mata Pelajaran</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'jadwal' ? 'active' : ''?> " href="<?php echo '/siakad_averroes/pages/admin/jadwal/jadwal.php' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-book <?= $page == 'jadwal' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">Jadwal Kelas</span>
          </a>
        </li>
       <?php }elseif($_SESSION['role'] == 2) { ?>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'index' ? 'active' : ''?>" href="<?php echo '/siakad_averroes/pages/guru/index.php' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-home <?= $page == 'index' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Kelas pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'mapel' ? 'active' : ''?> " href="<?php echo '' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-book <?= $page == 'mapel' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">Mata Pelajaran</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'jadwal' ? 'active' : ''?> " href="<?php echo '' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-list <?= $page == 'jadwal' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">Jadwal Kelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'nilai' ? 'active' : ''?> " href="<?php echo '' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-100 <?= $page == 'nilai' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">Nilai Akademik</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $page == 'raport' ? 'active' : ''?> " href="<?php echo '' ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-graduation-cap <?= $page == 'raport' ? 'text-white' : 'text-dark'?>"></i>
            </div>
            <span class="nav-link-text ms-1">Raport</span>
          </a>
        </li>
        
        <?php }?>

      </ul>
    </div>
    
  </aside>