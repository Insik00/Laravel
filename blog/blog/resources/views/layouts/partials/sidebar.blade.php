<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/Profile.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Christhopper James Po</p>
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
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Blog</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('blogs.index') }}"><i class="fa fa-circle-o"></i> Lists</a></li>
          <li><a href="{{ route('blogs.create') }}"><i class="fa fa-circle-o"></i> Create</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>
        