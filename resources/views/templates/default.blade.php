<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  @include('templates.partials._head')
  <!-- /head -->
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            @include('templates.partials._profile')
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            @include('templates.partials._sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('templates.partials._footer-menu')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('templates.partials._top-nav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    @include('templates.partials._js')
  </body>
</html>
