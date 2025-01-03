<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    @stack('css-libs')

    <!-- Layout config Js -->
    <script src="{{ asset('assets/velzon/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/velzon/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/velzon/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/velzon/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/velzon/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Tagify -->
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <!-- Viewer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.1/viewer.min.css"
        integrity="sha512-XHhuZDcgyu28Fsd75blrhZKbqqWCXaUCOuy2McB4doeSDu34BgydakOK71TH/QEhr0nhiieBNhF8yWS8thOGUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{ asset('assets/velzon/libs/sweetalert2/sweetalert2.min.css') }}">

    <!-- Application -->
    <link rel="stylesheet" href="{{ asset('assets/loi/css/app.css') }}">

    @stack('css')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        {{--<x-template::layout.topbar />
        <!-- ========== App Menu ========== -->
        <x-template::layout.sidebar /> --}}
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div>
                        <!-- start page title -->
                        @yield('breadcrumb')
                        <!-- end page title -->
                    </div>

                    {{--<!-- <x-template::component.alert /> -->--}}

                    <div>
                        @yield('content')
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    {{--<x-template::layout.theme-setting />--}}

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/velzon/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/velzon/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/velzon/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/velzon/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/velzon/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/velzon/js/plugins.js') }}"></script>

    <!-- Cleave -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/cleave.min.js"
        integrity="sha512-SvgzybymTn9KvnNGu0HxXiGoNeOi0TTK7viiG0EGn2Qbeu/NFi3JdWrJs2JHiGA1Lph+dxiDv5F9gDlcgBzjfA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Tagify -->
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>

    <!-- Viewer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.1/viewer.min.js"
        integrity="sha512-UzpQxIWgLbHvbVd4+8fcRWqFLi1pQ6qO6yXm+Hiig76VhnhW/gvfvnacdPanleB2ak+VwiI5BUqrPovGDPsKWQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Sweetalert2 -->
    <script src="{{ asset('assets/velzon/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    @stack('script-libs')

    <!-- App js -->
    <script src="{{ asset('assets/velzon/js/app.js') }}"></script>
    <script src="{{ asset('assets/loi/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>

    @stack('script')

</body>

</html>