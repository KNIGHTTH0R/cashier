<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/img/users/avatar.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="header">MAIN NAVIGATION</li>

      <li class="{{ request()->is('home') ? 'active': ''}}">
        <a href="{{ url('home') }}">
          <i class="fa fa-dashboard"></i>
          <span>Home</span>
        </a>
      </li>

      <li class="{{ request()->is('cashier') ? 'active': ''}}">
        <a href="{{ route('cashier') }}">
          <i class="fa fa-calculator"></i>
          <span>Cashier</span>
        </a>
      </li>

      <li class="treeview {{ request()->is('product*') ? 'active': ''}}">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>Product</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ request()->is('product') ? 'active': ''}}">
            <a href="{{ route('product.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>List products</span>
            </a>
          </li>
          <li class="{{ request()->is('product/create') ? 'active': ''}}">
            <a href="{{ route('product.create') }}">
              <i class="fa fa-circle-o"></i>
              <span>Add Product</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ request()->is('purchase*') ? 'active': ''}}">
        <a href="#">
          <i class="fa fa-shopping-cart"></i>
          <span>Purchase</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ request()->is('purchase') ? 'active': ''}}">
            <a href="{{ route('purchase.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>List purchase</span>
            </a>
          </li>
          <li class="{{ request()->is('purchase/create') ? 'active': ''}}">
            <a href="{{ route('purchase.create') }}">
              <i class="fa fa-circle-o"></i>
              <span>Add purchase</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ request()->is('purchase*') ? 'active': ''}}">
        <a href="#">
          <i class="fa fa-file"></i>
          <span>Report</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ request()->is('purchase') ? 'active': ''}}">
            <a href="{{ route('purchase.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>Sales</span>
            </a>
          </li>
          <li class="{{ request()->is('purchase/create') ? 'active': ''}}">
            <a href="{{ route('purchase.create') }}">
              <i class="fa fa-circle-o"></i>
              <span>Purchase</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="header">SETTING</li>

      <li class="treeview {{ request()->is('unit*') ? 'active': ''}}">
        <a href="#">
          <i class="fa fa-balance-scale"></i>
          <span>Unit</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ request()->is('unit') ? 'active': ''}}">
            <a href="{{ route('unit.index') }}">
              <i class="fa fa-circle-o"></i>
              <span>List units</span>
            </a>
          </li>
          <li class="{{ request()->is('unit/create') ? 'active': ''}}">
            <a href="{{ route('unit.create') }}">
              <i class="fa fa-circle-o"></i>
              <span>Add Unit</span>
            </a>
          </li>
        </ul>
      </li>

      @can('manage_user')
        <li class="{{ request()->is('user') ? 'active': ''}}">
          <a href="{{ route('user.index') }}">
            <i class="fa fa-users"></i>
            <span>Users</span>
          </a>
        </li>
      @endcan
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>