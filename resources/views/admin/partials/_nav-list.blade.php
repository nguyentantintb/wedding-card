 <ul class="nav nav-list">
  <li class="active">
    <a href="#">
      <i class="icon-dashboard"></i>
      <span class="menu-text"> Dashboard </span>
    </a>
  </li>

  <li>
    <a href="#" class="dropdown-toggle">
      <i class="icon-desktop"></i>
      <span class="menu-text"> Category </span>
      <b class="arrow icon-angle-down"></b>
    </a>
    <ul class="submenu">
      <li>
        <a href="{{ route('admin.category.index') }}">
          <i class="icon-double-angle-right"></i>
          List Category
        </a>
      </li>

      <li>
        <a href="{{ route('admin.category.create') }}">
          <i class="icon-double-angle-right"></i>
          Add Category
        </a>
      </li>
    </ul>
  </li>

  <li>
    <a href="#" class="dropdown-toggle">
      <i class="icon-list"></i>
      <span class="menu-text"> Product </span>
      <b class="arrow icon-angle-down"></b>
    </a>
    <ul class="submenu">
      <li>
        <a href="{{ route('admin.product.index') }}">
          <i class="icon-double-angle-right"></i>
          List Product
        </a>
      </li>

      <li>
        <a href="{{ route('admin.product.create') }}">
          <i class="icon-double-angle-right"></i>
          Add Product
        </a>
      </li>
    </ul>
  </li>

  <li>
    <a href="#" class="dropdown-toggle">
      <i class="icon-camera-retro"></i>
      <span class="menu-text"> Product Images </span>

      <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
      <li>
        <a href="#">
          <i class="icon-double-angle-right"></i>
          Form Elements
        </a>
      </li>
    </ul>
  </li>


  <li>
    <a href="#" class="dropdown-toggle">
      <i class="icon-group"></i>
      <span class="menu-text"> User management</span>
      <b class="arrow icon-angle-down"></b>
    </a>
    <ul class="submenu">
      <li>
        <a href="{{ route('admin.user.index') }}">
          <i class="icon-double-angle-right"></i>
          List User
        </a>
      </li>

      <li>
        <a href="{{ route('admin.user.create') }}">
          <i class="icon-double-angle-right"></i>
          Add User
        </a>
      </li>
    </ul>
  </li>



  <li>
    <a href="{{ url('admin/gallery') }}">
      <i class="icon-picture"></i>
      <span class="menu-text"> Gallery </span>
    </a>
  </li>

  <li>
    <a href="#">
      <i class="icon-calendar"></i>

      <span class="menu-text">
        Calendar
        <span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
          <!--<i class="icon-warning-sign red bigger-130"></i>-->
        </span>
      </span>
    </a>
  </li>
</ul><!--/.nav-list-->