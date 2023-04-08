<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-template="vertical-menu-template">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

        <title>REMIS</title>

        <meta name="description" content="Southern Philippines and Marine and Aquatic School of Technology REMIS" />
        <meta name="description" content="SPAMAST REMIS" />
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <link rel="icon" type="image/x-icon" href="{{ getFileShortLocation(sessionGet('favicon')) }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/boxicons.css') }}" />
        <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/core.css')  }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
        {{-- <link rel="stylesheet" href="{{ asset('/assets/vendor/css/core-primary.css')  }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('/assets/vendor/css/theme-default-primary.css') }}" class="template-customizer-theme-css" /> --}}
        <link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}" />
        <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        @yield('site-header')
        {{-- <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('/assets/js/config.js') }}"></script> --}}
        <script src="{{ asset('/assets/vendor/js/helpers-primary.js') }}"></script>
        <script src="{{ asset('/assets/vendor/js/template-customizer-primary.js') }}"></script>
        <script src="{{ asset('/assets/js/config-primary.js') }}"></script>
        @livewireStyles
        <style>
            .dash-icon{font-size: 2.75rem;}
            .dash-count{font-size: 2.5rem;}
            .filepond--credits{visibility: hidden;}
            .filepond--drop-label{min-height: 180px !important;}
        </style>
        <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/filepond/filepond.css') }}" />
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


        <script src="{{ asset('/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('/assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('/assets/vendor/js/menu-primary.js') }}"></script>
        <script src="{{ asset('/assets/vendor/libs/filepond/filepond.js') }}"></script>
        @yield('site-footer-0')
        <script src="{{ asset('/assets/js/main-primary.js') }}"></script>
        <script src="{{ asset('/assets/remis/helper.js') }}"></script>
        @livewireScripts
        @yield('site-footer-1')
        {{-- @stack('scripts') --}}
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
        <script>
            var pusher = new Pusher('b9a98d5d52ec6269f87b', {
                cluster: 'ap1'
            });
            var channel = pusher.subscribe('notification-channel');
            channel.bind('notification-event', function(data) {
                if(data)
                {
                    if(data.message == 'newNotificationEvent')
                    {
                        Livewire.emit('newNotificationEvent')
                    }

                    if(data.message == 'newUserOnline')
                    {
                        Livewire.emit('newUserOnline')
                    }
                }
            });

            const inputElement = document.querySelector('input[type="file"]');
            const pond = FilePond.create(inputElement);
            FilePond.setOptions({
                server: {
                    process: '/file/upload',
                    revert: '/file/undo',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                },
            });
        </script>
    </body>
</html>
