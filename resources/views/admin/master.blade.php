<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>WeddingCard-Admin</title>

  <meta name="description" content="overview &amp; stats" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--basic styles-->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />

 <link rel="stylesheet" href="/css/parsley.css" />
 <link rel="stylesheet" href="/css/sweetalert2.css" />
 <link rel="stylesheet" href="/assets/css/jquery.dataTables.min.css" />

  <link rel="stylesheet" href="/assets/css/jquery-ui-1.10.3.custom.min.css" />
  <link rel="stylesheet" href="/assets/css/chosen.css" />

      <!--page specific plugin styles-->
       @yield('styles')

      <!--fonts-->
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

      <!--ace styles-->

      <link rel="stylesheet" href="/assets/css/ace.min.css" />
      <link rel="stylesheet" href="/assets/css/ace-responsive.min.css" />
      <link rel="stylesheet" href="/assets/css/ace-skins.min.css" />


    <!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
      <![endif]-->

      <!--inline styles related to this page-->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
      <body>
       <!--nav bar-->
       @include('admin.partials._navbar')
       <!--end nav bar-->

       <div class="main-container container-fluid">
        <a class="menu-toggler" id="menu-toggler" href="#">
          <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
          <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
              <button class="btn btn-small btn-success">
                <i class="icon-signal"></i>
              </button>

              <button class="btn btn-small btn-info">
                <i class="icon-pencil"></i>
              </button>

              <button class="btn btn-small btn-warning">
                <i class="icon-group"></i>
              </button>

              <button class="btn btn-small btn-danger">
                <i class="icon-cogs"></i>
              </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
              <span class="btn btn-success"></span>

              <span class="btn btn-info"></span>

              <span class="btn btn-warning"></span>

              <span class="btn btn-danger"></span>
            </div>
          </div><!--#sidebar-shortcuts-->

          <!--navbar list-->
          @include('admin.partials._nav-list')
          <!--endnavbar list-->

          <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left"></i>
          </div>
        </div>

        <div class="main-content">
          <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumb">
              <li>
                <i class="icon-home home-icon"></i>
                <a href="#">Home</a>

                <span class="divider">
                  <i class="icon-angle-right arrow-icon"></i>
                </span>
              </li>
              <li class="active">Dashboard</li>
            </ul><!--.breadcrumb-->

            <div class="nav-search" id="nav-search">
              <form class="form-search" />
              <span class="input-icon">
                <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="icon-search nav-search-icon"></i>
              </span>
            </form>
          </div><!--#nav-search-->
        </div>

        <!--page content web admin-->
        @yield('content')
        <!--end pages content-->

        <div class="ace-settings-container" id="ace-settings-container">
          <div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="icon-cog bigger-150"></i>
          </div>

          <div class="ace-settings-box" id="ace-settings-box">
            <div>
              <div class="pull-left">
                <select id="skin-colorpicker" class="hide">
                  <option data-class="default" value="#438EB9" />#438EB9
                  <option data-class="skin-1" value="#222A2D" />#222A2D
                  <option data-class="skin-2" value="#C6487E" />#C6487E
                  <option data-class="skin-3" value="#D0D0D0" />#D0D0D0
                </select>
              </div>
              <span>&nbsp; Choose Skin</span>
            </div>

            <div>
              <input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
              <label class="lbl" for="ace-settings-header"> Fixed Header</label>
            </div>

            <div>
              <input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
              <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
            </div>

            <div>
              <input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
              <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
            </div>

            <div>
              <input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
              <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
            </div>
          </div>
        </div><!--/#ace-settings-container-->
      </div><!--/.main-content-->
    </div><!--/.main-container-->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
      <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>

    <!--basic scripts-->

    <!--[if !IE]>-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <!--<![endif]-->

    <!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
  window.jQuery || document.write("<script src='/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

    <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
  if("ontouchend" in document) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/assets/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

    <!--[if lte IE 8]>
      <script src="assets/js/excanvas.min.js"></script>
      <![endif]-->
      <script src="/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
      <script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
      <script src="/assets/js/chosen.jquery.min.js"></script>
      <script src="/assets/js/jquery.slimscroll.min.js"></script>
      <script src="/assets/js/jquery.easy-pie-chart.min.js"></script>
      <script src="/assets/js/jquery.sparkline.min.js"></script>
      <script src="/assets/js/flot/jquery.flot.min.js"></script>
      <script src="/assets/js/flot/jquery.flot.pie.min.js"></script>
      <script src="/assets/js/flot/jquery.flot.resize.min.js"></script>
      <script src="/js/parsley.min.js"></script>
      <script src="/js/sweetalert2.min.js"></script>

      <!--ace scripts-->
      <script src="/assets/js/ace-elements.min.js"></script>
      <script src="/assets/js/ace.min.js"></script>

      
      <!--inline scripts related to this page-->
      @yield('script')
</body>
</html>
