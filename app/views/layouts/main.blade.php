<!DOCTYPE html>
<html lang="en">

<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Servicio Social - Viculación</title>

    <!-- Bootstrap Core CSS -->
    {{HTML::style('assets/css/bootstrap.min.css')}}

    <!-- Custom CSS -->
    {{HTML::style('assets/css/simple-sidebar.css')}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <img src="/assets/image/logo_utim.png" width="250px" height="150" border="4" align="center" />
        <br><br><br><br></br>
            <ul class="sidebar-nav">
                <li>
                <br><br><br><br><br><br>
                </li>
                <li height="100">
                    <a href="#"><strong>PERFIL</strong></a>
                </li>
                <li>
                    <a href="#"><strong>DEPENDENCIA</strong></a>
                </li>
                <li>
                    <a href="#"><strong>REPORTES</strong></a>
                </li>
                 <li>
                    <a href="#"><strong>AVANCES</strong></a>
                </li>
                 <li>
                    <a href="#"><strong>GRUPOS</strong></a>
                </li>
                 <li>
                    <a href="#"><strong>TUTORES</strong></a>
                </li>
                 <li>
                    <a href="#"><strong>PROGRAMAS EDUCATIVOS</strong></a>
                </li>
                <li>
                    @if (Auth::check())
                    {{Auth::user()->nombre}} | <a href="{{URL::to('logout')}}">Salir
                    @endif 
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    @yield('main')
                    
                    
                    </div>
                </div>
            </div>
            <br><br><br>
            <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" >OCULTAR</a> -->
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    {{HTML::script('assets/js/jquery-1.11.0.js')}}

    <!-- Bootstrap Core JavaScript -->
    {{HTML::script('assets/js/bootstrap.min.js')}}
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
