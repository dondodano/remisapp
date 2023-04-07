<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-template="vertical-menu-template">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

        <title>REMIS</title>

        <meta name="description" content="Southern Philippines and Marine and Aquatic School of Technology REMIS" />
        <meta name="description" content="SPAMAST REMIS" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ getFileShortLocation(sessionGet('favicon')) }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/boxicons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/core.css')  }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
        {{-- <link rel="stylesheet" href="{{ asset('/assets/vendor/css/core-primary.css')  }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('/assets/vendor/css/theme-default-primary.css') }}" class="template-customizer-theme-css" /> --}}
        <link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

        @yield('site-header')

        <!-- Page CSS -->
        <!-- Helpers -->
        {{-- <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('/assets/js/config.js') }}"></script> --}}

        <script src="{{ asset('/assets/vendor/js/helpers-primary.js') }}"></script>
        <script src="{{ asset('/assets/vendor/js/template-customizer-primary.js') }}"></script>
        <script src="{{ asset('/assets/js/config-primary.js') }}"></script>

        @livewireStyles

        <style>
            .dash-icon{
                font-size: 2.75rem;
            }

            .dash-count{
                font-size: 2.5rem;
            }
        </style>
    </head>

    <body>

        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">

                @include('layouts.menu')

                <!-- Layout container -->
                <div class="layout-page">

                    @include('layouts.nav')

                    <div class="content-wrapper">

                        <div class="container-xxl flex-grow-1 container-p-y">

                            @include('layouts.breadcrumb')


                            @yield('site-content')


                        </div>

                        @include('layouts.footer')

                        <div class="content-backdrop fade"></div>

                    </div>
                </div>
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('/assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

        <script src="{{ asset('/assets/vendor/js/menu-primary.js') }}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        @yield('site-footer-0')

        <script src="{{ asset('/assets/js/main-primary.js') }}"></script>
        <script src="{{ asset('/assets/remis/helper.js') }}"></script>


        @livewireScripts

        @yield('site-footer-1')

        @stack('scripts')

        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
        <script>
        var pusher = new Pusher('b9a98d5d52ec6269f87b', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('notification-channel');
        channel.bind('notification-event', function(data) {
            if(data.includes('newNotificationEvent'))
            {
                Livewire.emit('newNotificationEvent')
            }

            if(data.includes('newUserOnline'))
            {
                Livewire.emit('newUserOnline')
            }
        });

        </script>

    </body>
</html>
