<ul class="sidebar-menu">

    <li class="dropdown @yield('dashboard')">
      <a href="/admin/home" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
    </li>
    <li class="dropdown @yield('categories')">
      <a href="{{ route('categories.index') }}" ><i
          data-feather="briefcase"></i><span>Categories</span></a>
    </li>

    <li class="dropdown @yield('products')">
      <a href="{{ route('products.index') }}" ><i
          data-feather="briefcase"></i><span>Products</span></a>
    </li>

    <li class="dropdown">
      <a href="#" ><span></span></a>
    </li>

    <li class="dropdown @yield('orders')">
        <a href="#" ><i
            data-feather="briefcase"></i><span>Orders</span></a>
    </li>
    <li class="dropdown @yield('messages')">
        <a href="#" ><i
            data-feather="briefcase"></i><span>Messages</span></a>
    </li>

  </ul>
