<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dairy DNA</title>
    <meta name="keywords" content="DairyDNA" />
    <meta name="description" content="Dairy DNA">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet"
        type="text/css">

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/morris.js/morris.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">

    <!-- Head Libs -->

    <script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="javascript::void()" class="logo">
                    <img src="{{ asset('images/clique.png') }}" width="67" height="65" alt="Porto Admin" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">


                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
						this.closest('form').submit();"><i
                                class="fa fa-power-off"></i>{{ trans('global.logout') }}</a>
                    </form>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                        data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">

                            <ul class="nav nav-main">

                                {{-- <li class="nav-parent nav-expanded nav-active">
				                        <a href="javascript::void()">
				                            <i class="fa fa-users" aria-hidden="true"></i>
				                            <span>{{trans('global.users')}}</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a href="{{route('users.create')}}">
                                                    {{trans('global.create_user')}}
				                                </a>
				                            </li>
				                            <li class="nav-active">
				                                <a href="{{route('users.index')}}">
												{{trans('global.view_users')}}
				                                </a>
				                            </li>
				                     
				                     
				                        </ul>
				                    </li> --}}
                                <li class="nav-parent nav-expanded nav-active">
                                    <a href="javascript::void()">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <span>{{ trans('global.users') }}</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li class="nav-active">
                                            <a href="{{ route('users.index') }}">
                                                {{ trans('global.view_users') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>


                </div>

            </aside>
            <!-- end: sidebar -->

            <!-- <section role="main" class="content-body">
     <header class="page-header">
     -->
            <!-- <div class="right-wrapper pull-right">
       <ol class="breadcrumbs">
        <li>
         <a href="index.html">
          <i class="fa fa-home"></i>
         </a>
        </li>
        <li><span>Layouts</span></li>
        <li><span>Default</span></li>
       </ol>
     
       <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
      </div> -->
            <!-- </header> -->

            <!-- start: page -->
            @yield('content')
            <!-- end: page -->
            <!-- </section> -->
        </div>


    </section>

    <!-- Vendor -->
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('vendor/common/common.js') }}"></script>
    <script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
    <script src="{{ asset('vendor/jquery-appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('vendor/raphael/raphael.js') }}"></script>
    <script src="{{ asset('vendor/morris/morris.js') }}"></script>
    <script src="{{ asset('vendor/gauge/gauge.js') }}"></script>
    <script src="{{ asset('vendor/snap.svg/snap.svg.js') }}"></script>
    <script src="{{ asset('vendor/liquid-meter/liquid.meter.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/jquery.vmap.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>
    <!-- Specific Page Vendor -->
    <script src="{{ asset('vendor/select2/js/select2.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('js/formvalidation.js') }}"></script>
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('vendor/pnotify/pnotify.custom.js') }}"></script>
    <script src="{{ asset('vendor/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('vendor/bootstrapv5-wizard/jquery.bootstrap.wizard.js') }}"></script>


    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('js/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ asset('js/examples/examples.dashboard.js') }}"></script>
    <!-- Tables -->
    <script src="{{ asset('js/examples/examples.datatables.default.js') }}"></script>
    <script src="{{ asset('js/examples/examples.datatables.row.with.details.js') }}"></script>
    <script src="{{ asset('js/examples/examples.datatables.tabletools.js') }}"></script>
    <script src="{{ asset('js/examples/examples.modals.js') }}"></script>
    <script src="{{ asset('js/examples/examples.header.menu.js') }}"></script>
    <script src="{{ asset('js/examples/examples.lightbox.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.js') }}"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        $(".nav-expanded").on("click", function() {
            $(this).removeClass("nav-expanded");
            $(this).addClass("nav-expanded");
        });
    </script>
    <script></script>
    @yield('scripts')
</body>

</html>
