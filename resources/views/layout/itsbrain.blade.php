<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>

  <link href="{{ asset('itsbrain') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('itsbrain') }}/css/brain-theme.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('itsbrain') }}/css/styles.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('itsbrain') }}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>

  <link href="{{ asset('dropzone/style.css') }}" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="{{ asset('itsbrain') }}/ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
  </script>
  <script type="text/javascript"
    src="{{ asset('itsbrain') }}/ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/charts/flot.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/charts/flot.orderbars.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/charts/flot.pie.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/charts/flot.time.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/charts/flot.animator.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/charts/excanvas.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/charts/flot.resize.min.js"></script>

  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/uniform.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/select2.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/inputmask.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/autosize.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/inputlimit.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/listbox.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/multiselect.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/validate.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/tags.min.js"></script>

  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/uploader/plupload.full.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/uploader/plupload.queue.min.js"></script>

  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/forms/wysihtml5/toolbar.js"></script>

  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/interface/jgrowl.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/interface/datatables.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/interface/prettify.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/interface/fancybox.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/interface/colorpicker.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/interface/timepicker.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/interface/fullcalendar.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/plugins/interface/collapsible.min.js"></script>

  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/application.js"></script>

  <script type="text/javascript" src="{{ asset('itsbrain') }}/js/charts/simple_graph.js"></script>

</head>

<body>

  <!-- Navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <div class="hidden-lg pull-right">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-right">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-chevron-down"></i>
          </button>

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <ul class="nav navbar-nav navbar-left-custom">
          <li class="user dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('itsbrain') }}/images/demo/users/face6.png" alt="">
              <span>Eugene Kopyov</span>
              <i class="caret"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-tasks"></i> Tasks</a></li>
              <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
              <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>
          <li><a class="nav-icon sidebar-toggle"><i class="fa fa-bars"></i></a></li>
        </ul>
      </div>

      <ul class="nav navbar-nav navbar-right collapse" id="navbar-right">
        <li>
          <a href="#">
            <i class="fa fa-rotate-right"></i>
            <span>Updates</span>
            <strong class="label label-danger">15</strong>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-comments"></i>
            <span>Messages</span>
            <strong class="label label-danger">7</strong>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>Notifications</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /navbar -->


  <!-- Switches -->
  {{-- <div class="color-switch">
    <a href="https://demo.interface.club/itsbrain/fixed/dark/index.html" title="Switch to dark verion"></a>
  </div>

  <div class="layout-switch">
    <a href="https://demo.interface.club/itsbrain/liquid/light/index.html" title="Switch to liquid verion"></a>
  </div> --}}
  <!-- /switches -->


  <!-- Page header -->
  <div class="container">
    <div class="page-header">
      <div class="logo">
        <a href="/" title=""><img src="{{ asset('itsbrain') }}/images/logo_kramad.png" alt=""
            width="215px"></a>
      </div>
      <ul class="middle-nav">
        <li><a href="#" class="btn btn-default"><i class="fa fa-comments-o"></i> <span>Support
              tickets</span></a>
          <div class="label label-info">9</div>
        </li>
        <li><a href="#" class="btn btn-default"><i class="fa fa-bars"></i> <span>Statistics</span></a>
        </li>
        <li><a href="#" class="btn btn-default"><i class="fa fa-male"></i> <span>User list</span></a></li>
        <li><a href="#" class="btn btn-default"><i class="fa fa-money"></i> <span>Billing panel</span></a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /page header -->


  <!-- Page container -->
  <div class="page-container container">

    <!-- Sidebar -->
    <div class="sidebar collapse" {{-- style="
            position: fixed;
            top: 14.5rem;
            left: 10rem;
        " --}}>
      <ul class="navigation">
        <li class=""><a href="/"><i class="fa fa-laptop"></i> Dashboard</a></li>
        <li><a href="/produk"><i class="fa fa-coffee"></i> Produk</a></li>
        <li><a href="/team_info"><i class="fa fa-users"></i> Struktur</a></li>
        <li class="">
          <a href="/setting" class="expand"><i class="fa fa-gears"></i> Settings </i></a>
          <ul>
            <li><a href="/"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="/"><i class="fa fa-users"></i> Admin</a></li>
            <li><a href="/"><i class="fa fa-sign-out "></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /sidebar -->

    <div class="page-content">
      <!-- Page title -->
      <div class="page-title">
        <h5><i class="fa fa-bars"></i> Dashboard <small>Welcome, Eugene!</small></h5>
        <div class="btn-group">
          <a href="#" class="btn btn-link btn-lg btn-icon dropdown-toggle" data-toggle="dropdown"><i
              class="fa fa-cogs"></i><span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">One more line</a></li>
          </ul>
        </div>
      </div>
      <!-- /page title -->
    </div>


    <!-- Page content -->
    @yield('content')
  </div>

  <!-- Footer -->
  <div class="footer" style="text-align: center;">
    &copy; Copyright 2024. All rights reserved, by <a href="#" title="">
      Abd. Rahman Siddik</a>
  </div>
  <!-- /footer -->

  <script type="text/javascript" src="{{ asset('dropzone/script.js') }}"></script>

</body>

</html>
