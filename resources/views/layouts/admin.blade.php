<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clínica Magallanes</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" >

</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logoClinica.png')}}" class="logoClinica" alt="">
            </a>
        </div>
        <!-- /.navbar-header -->



        <ul class="nav navbar-top-links navbar-right">


            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw us-admin"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Desconectarse
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->


        </ul>


        {{--<ul class="nav navbar-nav navbar-right">--}}
        {{--@if(auth()->guest())--}}
        {{--@if(!Request::is('auth/login'))--}}
        {{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
        {{--@endif--}}
        {{--@if(!Request::is('auth/register'))--}}
        {{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
        {{--@endif--}}
        {{--@else--}}
        {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}

        {{--<li><a href="{{ url('/admin/profile') }}/{{auth()->user()->id}}">Profile</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--@endif--}}
        {{--</ul>--}}





        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    

                    <!--  ****** USUARIOS ******  -->
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Usuarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('staffUsuariosAgregar') }}">Agregar Usuario</a></li>
                            <li><a href="{{ route('staffUsuarios') }}">Mostrar Usuarios</a></li>
                        </ul>
                    </li>
                    

                    <!--  ****** EQUIPOS ******  -->
                    <li>
                        <a href="#"><i class="fa fa-desktop fa-fw" aria-hidden="true"></i> Equipos <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('equiposCrear') }}">Agregar Equipo</a></li>
                            <li><a href="{{ route('equiposMostrar') }}">Mostrar Equipos</a></li>

                        </ul>
                    </li>

                    
                    <!--  ****** IMPRESORAS ******  -->
                    <li>
                        <a href="#"><i class="fa fa-print fa-fw" aria-hidden="true"></i>Impresoras <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('impresorasCrear') }}">Agregar Impresora</a></li>
                            <li><a href="{{ route('impresorasMostrar') }}">Mostrar Impresoras</a></li>

                        </ul>
                    </li>


                    <!--  ****** LECTURAS ******  -->
                    <li>
                        <a href="#"><i class="fa fa-print fa-fw" aria-hidden="true"></i>Lecturas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('lectureCrear') }}">Agregar Lectura</a></li>
                            <li><a href="{{ route('lectureMostrar') }}">Mostrar Lecturas</a></li>
                            <li><a href="{{ route('lectureMonth') }}">Lecturas por Mes</a></li>

                        </ul>
                    </li>
                    


                    <!--  ****** SECTORES ******  -->
                    <li>
                        <a href="#"><i class="fa fa-minus-square-o fa-fw" aria-hidden="true"></i>Sectores<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('sectorMostrar') }}">Mostrar Sectores</a></li>

                        </ul>
                    </li>
                    
                    <!--  ****** REQUERIMIENTOS ******  -->
                    <li>
                        <a href="#"><i class="fa fa-link fa-fw" aria-hidden="true"></i>Requerimientos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href=" {{ route('requestCrear') }}">Ingresar Requerimiento</a></li>
                            <li><a href=" {{ route('requestMostrar') }}">Mostrar Requerimientos</a></li>
                        </ul>
                    </li>


                    <!--  ****** IPS ******  -->
                    <li>
                        <a href="#"><i class="fa fa-link fa-fw" aria-hidden="true"></i>Ip<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('ipMostrar') }}">Mostrar Ips</a></li>

                        </ul>
                    </li>

                    <!--  ****** ESTADISTICAS ******  -->
                    <li>
                        <a href="#"><i class="fa fa-bar-chart fa-fw" aria-hidden="true"></i> Estadísticas <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="flot.html">Est. Lecturas</a></li>
                            <li><a href="morris.html">Morris.js Charts</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="panels-wells.html">Panels and Wells</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="notifications.html">Notifications</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html"> Icons</a></li>
                            <li><a href="grid.html">Grid</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#">Second Level Item</a></li>
                            <li><a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="#">Third Level Item</a></li>
                                    <li><a href="#">Third Level Item</a></li>
                                    <li><a href="#">Third Level Item</a></li>
                                    <li><a href="#">Third Level Item</a></li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active" href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>


            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>





    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/profile"><i class="fa fa-dashboard fa-fw"></i>Profile</a>
                </li>




                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Posts<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="">All Posts</a></li>

                        <li><a href="">Create Post</a></li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>





            </ul>

        </div>

    </div>

</div>






<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h2>@yield('titulo')</h2>
            </div>
            <div class="col-lg-6">
                <div class="statics">
                    @yield('statics')
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"></h4>

                @yield('contenido')
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<!-- /#wrapper -->






<!-- jQuery -->
<script type="text/javascript" src=" {{ asset('js/jquery.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src=" {{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src=" {{ asset('js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('js/locales/bootstrap-datetimepicker.es.js') }}" charset="UTF-8"></script>
<script src="{{asset('js/metisMenu.js')}}"></script>
<script src="{{asset('js/sb-admin-2.js')}}"></script>
<script src="{{asset('js/moment.js')}}"></script>


@yield('scripts');


<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0,
        format: 'yyyy-mm-dd',
    });
    $('.form_time').datetimepicker({
        language:  'es',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>


@yield('footer')





</body>

</html>
