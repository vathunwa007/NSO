<nav class="navbar navbar-expand navbar-light bg-light static-top">

<a class="navbar-brand mr-1" href="index.php"><img src="./images/logo.png" class="img-fluid top-logo" alt="Responsive image"></a>

<button class="btn btn-link btn-sm text-dark order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>

<!-- Navbar Search -->
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
  <div class="input-group"></div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <button class="btn btn-outline-secondary" type="button">สำนักงานสถิต</button>
      </div>
      <select class="custom-select" id="inputGroupSelect03">
        <option selected>ส่วนกลาง</option>
        <option value="1">จังหวัดกรุงเทพ</option>
        <option value="2">จังหวัดกระบี่</option>
        <option value="3">จังหวัดเชียงใหม่</option>
      </select>
    </div>
  </div>
</form>

<!-- Navbar -->
<ul class="navbar-nav ml-auto ml-md-0">


  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="badge badge-danger">7</span>
      <i class="fas fa-user-circle fa-2x"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="#">Settings</a>
      <a class="dropdown-item" href="#">Activity Log</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </div>
  </li>
</ul>

</nav>