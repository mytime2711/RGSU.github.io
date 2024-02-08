<?php 
  $route_name = request()->route()->getName();
  $route_name = explode('.', $route_name);
  $route_prefix = $route_name[0];
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo e(asset('assets/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">News Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if(auth()->user()->photo): ?>
          <img src="<?php echo e(asset(auth()->user()->photo)); ?>" class="img-circle elevation-2" alt="User Image">
          <?php else: ?>
          <img src="<?php echo e(asset('assets/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
          <?php endif; ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(auth()->user()->name); ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link <?php if($route_prefix == 'dashboard'): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('order.index')); ?>" class="nav-link <?php if($route_prefix == 'order'): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-tv"></i>
              <p>
                POS/Order
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('invoice.index')); ?>" class="nav-link <?php if($route_prefix == 'invoice'): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Invoices
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo e(route('product.index')); ?>" class="nav-link <?php if($route_prefix == 'article'): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Products
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <!-- <?php if(auth()->user()->user_type_id == 1): ?> -->
          <!-- // -->
          <!-- <?php endif; ?> -->

          <li class="nav-item">
            <a href="<?php echo e(route('category.index')); ?>" class="nav-link <?php if($route_prefix == 'category'): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Category
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('user.index')); ?>" class="nav-link <?php if($route_prefix == 'user'): ?> active <?php endif; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/mini-pos/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>