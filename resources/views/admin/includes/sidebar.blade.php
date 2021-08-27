<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('public/') }}/assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'AFFLIATE PRODUCT') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/') }}/assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{-- {{ Auth::user()->firstname }} --}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ request()->is('admin-dashboard') ? 'menu-open' : '' }}">
            <a href="{{ route('admin.home') }}" class="nav-link {{ request()->is('admin-dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!----------------------------------- Admin menu start------------------------------------->
          <li class="nav-item">
            <a href="{{ route('admin.shop') }}" class="nav-link {{ request()->is('admin-shop') ? 'active' : '' }}">
              <i class="nav-icon fas fa-store"></i>
              <p>Add a Shop</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.criteria') }}" class="nav-link {{ request()->is('admin-criteria') ? 'active' : '' }}">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>Add / Edit a Criteria</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.product') }}" class="nav-link {{ request()->is('admin-product') ? 'active' : '' }}">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>Add a new Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.assign.criteria') }}" class="nav-link {{ request()->is('admin-assign-criteria') ? 'active' : '' }}">
              <i class="nav-icon fab fa-adn"></i>
              <p>Assign Criterias</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.group.product') }}" class="nav-link {{ request()->is('admin-group-product') ? 'active' : '' }}">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>Group Products</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.changebackground' )}} " class="nav-link {{ request()->is('change-background') ? 'active' : '' }}">
              <i class="nav-icon far fa-images"></i>
              <p>Change Background</p>
            </a>
          </li>
          <!----------------------------------- Admin menu end------------------------------------->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
