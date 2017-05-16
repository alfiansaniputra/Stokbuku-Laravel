<!DOCTYPE html>
<html>
  <head>
    <title>Stok Toko Buku</title>
    <link href="{{ url('assets/css/index.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/production/css/custom.css')}}" rel="stylesheet">
   <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">


  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
              <img src="{{ url('assets/production/images/logo.png')}}" width="25%" style="margin:0px 0px 0px -10px; "> <span>
              	Admin Tokobuku
              </span></a>
            </div>

            <div class="clearfix"></div>
  			<!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic" >
               <img  src='img/admin.jpg' class='img-circle profile_img' >
              </div>
              <div class="profile_info" >
                <span>Welcome</span>
                <h2>ADMIN</h2>
              </div>
            </div>
             <div class="clearfix"></div>
            <!-- /menu profile quick info -->

				
     

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">

                  <li class="{{ Request::is('tokobuku') ? 'active' : '' }}">
                  	<a href="{{ ('tokobuku') }}"><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li class="{{ Request::is('stok-buku') ? 'active' : '' }}">
                  	<a href="{{ ('stok-buku') }}"><i class="fa fa-home"></i> STOCK BUKU </a>
                  </li>
                  <li class="{{ Request::is('stok-toko-buku') ? 'active' : '' }}">
                  	<a href="{{ ('list-buku') }}"><i class="fa fa-edit"></i> LIST BUKU</span></a>
                  </li>
                  <li class="{{ Request::is('penerbit') ? 'active' : '' }}">
                  	<a href="{{ ('penerbit') }}"><i class="fa fa-desktop"></i> LIST PENERBIT </a>
                  </li>

                 </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">  Profile</a>
                    </li>
                    <li>
                       <a href="javascript:;">Settings</a>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">Help</a>
                    </li>
                    <li><a href="../proses/login.php?op=out"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->
                <!-- page content -->
        <div class="right_col" role="main">
          <div class="lalala">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:auto;">
                  <div class="x_title">




                    <h2> Database Admin Toko Buku</h2>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
					@yield('content')
                  </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             Koperasi Smkn 13 Bandung  <a href="#">alfiansaniputra</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script src="{{ url('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/vendors/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{ url('assets/vendors/nprogress/nprogress.js')}}"></script>
    <script src="{{ url('assets/production/js/custom.js')}}"></script>




    <script src="{{ url('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
      </body>
</html>

