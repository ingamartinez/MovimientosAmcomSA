<!DOCTYPE html>
<html>
<head>
    <title>Movimientos AmcomSA | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/flat-admin.css')}}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/blue-sky.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/blue.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/red.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/yellow.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

</head>
<body>
<div class="app app-blue-sky">

    <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="{{url('reportes')}}"><span class="highlight2"></span><h2>Amcom S.A</h2></a>
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-nav">
                <li class="active">
                    <a href="{{url('reportes')}}">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">Reportes</div>
                    </a>
                </li>
                <li class="active">
                    <a href="{{url('colombiamovil')}}">
                        <div class="icon">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <div class="title">Colombia Móvil</div>
                    </a>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-history" aria-hidden="true"></i>
                        </div>
                        <div class="title">Historico</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="section"><i class="fa fa-line-chart" aria-hidden="true"></i>Como Vamos Diario</li>
                            <li><a href="#">Buscar por fecha</a></li>

                            <li class="line"></li>
                            <li class="section"><i class="fa fa-area-chart" aria-hidden="true"></i> Impactos diarios</li>
                            <li><a href="#">Buscar por fecha</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div class="app-container">
        <nav class="navbar navbar-default" id="navbar">
            <div class="container-fluid">
                <div class="navbar-collapse collapse in">
                    <ul class="nav navbar-nav navbar-mobile">
                        <li>
                            <button type="button" class="sidebar-toggle">
                                <i class="fa fa-bars"></i>
                            </button>
                        </li>
                        <li class="logo">
                            <a class="navbar-brand" href="{{url('reportes')}}">Amcom S.A</a>
                        </li>
                        <li>
                            <button type="button" class="navbar-toggle">
                                <img class="profile-img" src="http://www.freeiconspng.com/uploads/account-icon-33.png">
                            </button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        {{--<li class="dropdown notification">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                {{--<div class="icon"><i class="fa fa-power-off" aria-hidden="true"></i></div>--}}
                                {{--<div class="title">Cerrar Sesión</div>--}}
                                {{----}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu">--}}
                                {{--<ul>--}}
                                    {{--<li class="dropdown-header">Ordering</li>--}}
                                    {{--<li class="dropdown-empty">No New Ordered</li>--}}
                                    {{--<li class="dropdown-footer">--}}
                                        {{--<a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}


                        <li class="dropdown profile">
                            <a href="{{url('logout')}}" class="dropdown-toggle"  data-toggle="dropdown-menu">
                                <img class="profile-img" src="http://www.freeiconspng.com/uploads/account-icon-33.png">
                                <div class="title">Cerrar Sesión</div>
                            </a>

                            <div class="dropdown-menu">
                                <div class="profile-info">
                                    <h4 class="username">{{ucfirst(auth()->user()->name)}}</h4>
                                </div>
                                <ul class="action">
                                    <li><a href="{{url('logout')}}">Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('container')

        <footer class="app-footer">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-copyright">
                        <a href="http://desarrolloexperto.com">

                            <img src="{{asset('images/logoDE.png')}}" alt="Desarrollo Experto"> Creado Por Desarrollo Experto
                            <b>© </b> 2017					</a>

                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<script type="text/javascript" src="{{asset('js/vendor.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

@stack('script')

</body>
</html>