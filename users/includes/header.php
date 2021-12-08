<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="dashboardbsp.php" class=" d-flex align-items-center">
      <img src="assets2/img/balispeakup.png" alt="" style="width: 10rem; margin-right: 3rem;margin-top: 1rem;margin-left: 2rem;">
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->
  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets2/img/default_profile.jpg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">
          <?php $query=mysqli_query($bd, "select nama_lengkap from users where email='".$_SESSION['login']."'");
          while($row=mysqli_fetch_array($query)) 
          {
          ?> 
          <?php echo htmlentities($row['nama_lengkap']);?>
          <?php } ?>
          </span>
        </a><!-- End Profile Image Icon -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?php $query=mysqli_query($bd, "select nama_lengkap from users where email='".$_SESSION['login']."'");
            while($row=mysqli_fetch_array($query)) 
            {?> 
            <?php echo htmlentities($row['nama_lengkap']);?>
            <?php } ?></h6>
            <span>User Bali Speak Up!</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="profile_userbsp.php">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->
    </ul>
  </nav><!-- End Icons Navigation -->
</header><!-- End Header -->