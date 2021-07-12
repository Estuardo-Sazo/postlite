<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/js/loader.js') }}"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet" type="text/css" />


<!-- END GLOBAL MANDATORY STYLES -->


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

    .page-item:active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #3b3f5c;
        border-color: #3b3f5c;
    }

    @media (max-width: 400px) {
        .mtmobile {
            margin-bottom: 20 !important;
        }

        .mbmobile {
            margin-bottom: 10 !important;
        }

        .hideonsm {
            display: none !important;
        }

        .inblock {
            display: block;
        }


    }

</style>

@livewireStyles
