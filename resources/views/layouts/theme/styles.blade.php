<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" />

<link href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/css/elements/avatar.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css" />

<style>
    aside {
        display: none !important;
    }

    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #3b3f5c;
        border-color: #3b3f5c;
    }

    @media (max-width: 480px) {
        .mtmobile {
            margin-bottom: 20px !important;
        }

        .mbmobile {
            margin-bottom: 10px !important;
        }

        .hideonsm {
            display: none !important;
        }

        .inblock {
            display: block;
        }
    }

    /**--------------------------------------------
     *                 Sidebar
     *---------------------------------------------**/
    .sidebar-theme #compactSidebar {
        background: #191e3a !important;
    }

    /**--------------------------------------------
     *         Sidebar collapse background
     *---------------------------------------------**/
    .header-container .sidebarCollapse {
        color: #3B3F5C !important;
    }

    .navbar .navbar-item .nav-item form.form-inline input.search-form-control {
        background-color: #3B3F5C !important;
        color: #fff !important;
    }

    @media (min-width: 768px) {
        .navbar .navbar-item .nav-item.search-animated svg {

            color: #fff !important;

        }
    }

    @media (max-width: 767px) {
        .navbar .navbar-item .nav-item.search-animated svg {

            color: #191e3a !important;

        }

        .navbar .navbar-item .nav-item.search-animated.show-search svg {
            color: #fff !important
        }
    }
</style>

@livewireStyles
