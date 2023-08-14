<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light ">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="<?php echo $path1;?>/view/category/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh muc 
         
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $path1;?>/view/product/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Sản phẩm 
             
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $path1;?>/view/bill/index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Đơn Hàng
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
