<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEXTILE - Admin</title>
    <script src="{{url('assets/js/html5shiv.js')}}"></script>
    <script src="{{url('assets/js/respond.min.js')}}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content=""/>
    <meta name="description" content=""/>
    <meta name="keywords" content="">
    <meta name="author" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('assets/css/styling.css')}}">
    <link rel="stylesheet" href="{{url('css/styling.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/plugins/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/select2.min.css')}}">

    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="{{url('assets/css/plugins/notifier.css')}}">

    @if(Route::currentRouteName()=='chat.index')
        <link rel="stylesheet" href="{{url('css/chat.css')}}">
    @endif
    @if(Route::currentRouteName()=='home')
        @can('daily-attendance-dashboard')
            <script src="{{url('js/jschart.min.js')}}"></script>
        @endcan
    @endif
    <link href="{{url('assets/css/plugins/notifier.css')}}" rel="stylesheet">
</head>
@if(Route::currentRouteName()!='login' and Route::currentRouteName()!='password.reset' and Route::currentRouteName()!='password.request')
    <body class="">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <style>
        #overlay{
            position:fixed;
            z-index:99999;
            top:0;
            left:0;
            bottom:0;
            right:0;
            background:rgba(0,0,0,0.9);
            transition: 1s 0.4s;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
            display: none;
        }
        table#example thead tr th{
            background: #2487ce!important;
            color: white;
        }
        select#status,select#rows{
            font-size:11px!important;
        }

        .modal.fade.zoom:not(.show) .modal-dialog {
            transform: scale(0.8);
        }
    </style>

    @include('admin.layout.menu-list')
    @include('admin.layout.head')
    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <img src="{{url('/assets/images/loading-anim.gif')}}" alt="" id="overlay" class="loader-gif">
            @yield('content')
            <div class="r-s" style="display: none">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>
    @else

        @yield('content')


    @endif





    
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <script src="{{url('assets/js/vendor-all.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/pcoded.min.js')}}"></script>
    <script src="{{url('assets/js/menu-setting.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/plugins/sweetalert.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{url('css/datatables.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('css/responsive.dataTables.min.css')}}">
    <script type="text/javascript" src="{{url('js/datatables.min.js')}}"></script>
    <script src="{{url('js/dataTables.responsive.min.js')}}"></script>


    @if(Route::currentRouteName()=='home')
        <link rel="stylesheet" href="{{url('css/fullcalendar.min.css')}}"/>
        <script src="{{url('js/moment.min.js')}}"></script>
        <script src="{{url('js/fullcalendar.min.js')}}"></script>
    @endif
    <script src="{{url('assets/js/plugins/select2.full.min.js')}}"></script>
    <script src="{{url('assets/js/pages/form-select-custom.js')}}"></script>

    <link rel="stylesheet" href="{{url('assets/css/select2.min.css')}}">
    <script type="text/javascript" src="{{url('assets/js/jquery.toast.js')}}"></script>

    <script src="{{url('assets/js/plugins/bootstrap-notify.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('assets/js/plugins/notifier.js')}}">

        <script src="{{url('js/custom.js')}}"></script>
        <script src="{{url('js/pusher.min.js')}}"></script>
    <script>



        $("#searchTheKey").on('keyup', function(){
        var value = $(this).val().toLowerCase();
        $("#matchKey li").each(function () {
            if ($(this).text().toLowerCase().search(value) > -1) {
                $(this).show();
                $(this).prev('.subjectName').last().show();
            } else {
                $(this).hide();
            }
        });
    });
    </script>
    <script src="{{url('/assets/js/plugins/notifier.js')}}" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</body>
</html>
