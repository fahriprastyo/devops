<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="@yield('dashboard')">
          <a href="{{route('dashboard')}}"
            ><i class="menu-icon fa fa-laptop"></i>Dashboard
          </a>
        </li>
        <li class="menu-title">User</li>
        <!-- /.menu-title -->
        <li class="@yield('view_user')">
          <a href="{{route('users.index')}}"> <i class="menu-icon fa fa-user"></i>Lihat User</a>
        </li>
        <li class="menu-title">Barang</li>
        <!-- /.menu-title -->
        <li class="@yield('view_product')">
          <a href="{{route('products.index')}}"> <i class="menu-icon fa fa-list"></i>Lihat Barang</a>
        </li>
        <li class="@yield('up_product')">
          <a href="{{route('products.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
        </li>

        <li class="menu-title">Foto Barang</li>
        <!-- /.menu-title -->
        <li class="@yield('view_img')">
          <a href="{{route('products-galleries.index')}}">
            <i class="menu-icon fa fa-list"></i>Lihat Foto Barang</a
          >
        </li>
        <li class="@yield('up_img')">
          <a href="{{route('products-galleries.create')}}">
            <i class="menu-icon fa fa-plus"></i>Tambah Foto Barang</a
          >
        </li>

        <li class="menu-title">Transaksi</li>
        <!-- /.menu-title -->
        <li class="@yield('view_transaction')">
          <a href="{{route('transactions.index')}}">
            <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a
          >
        </li>

        <li class="menu-title">Komentar</li>
        <!-- /.menu-title -->
        <li class="@yield('view_comment')">
          <a href="{{route('comments.index')}}">
            <i class="menu-icon fa fa-comment"></i>Lihat Komentar</a
          >
        </li>

        <li class="menu-title">Artikel</li>
        <!-- /.menu-title -->
        <li class="@yield('view_article')">
          <a href="{{route('blogs.index')}}">
            <i class="menu-icon fa fa-newspaper-o"></i>Lihat Artikel</a
          >
        </li>
        <li class="@yield('up_article')">
            <a href="{{route('blogs.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah Artikel</a>
          </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
</aside>
<!-- /#left-panel -->
