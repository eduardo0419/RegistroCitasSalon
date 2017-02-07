<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Beauty Sal&oacute;n</title>

    <!-- Styles -->
    <link href="../css/app.css" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                    include '../conexion/conexion.php';
                    conectar();
                     session_start();
                    $usu=$_SESSION['name'];
                    $res= consultar("SELECT f.fecha,f.hora,concat(e.nombres,' ',e.apellidos),concat(f.nombres,' ',f.apellidos),f.celular,f.detalles,f.id FROM citas f inner join personals e on e.id=f.personal_id");
                ?>
                <!-- Branding Image -->
                <a class="navbar-brand" href="menu.php">
                    Beauty Sal&oacute;n
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php //$usu;?>Administrador<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="../controladores/logout.php">
                                    Salir
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="row">

                            <div class="col-xs-12">
                                <label for="request_date">Fecha: </label>
                                <input type="text" name="request_date" id="request_date" value="07/02/2017" class="form-control" readonly="">
                                <div id="datepicker" data-date="07/02/2017"></div>
                            </div>

                            <div class="col-xs-12">
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">CITAS</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-hover text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>FECHA</th>
                                                        <th>HORA</th>
                                                        <th>ESPECIALISTA</th>
                                                        <th>CLIENTE</th>
                                                        <th>CELULAR</th>
                                                        <th>DETALLE</th>
                                                        <th>ACCI&Oacute;N</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    while(@$pers=mysqli_fetch_row($res))
                                                    {
                                                        echo "<tr>";
                                                        echo "<td>".$pers[0]."</td>";
                                                        echo "<td>".$pers[1]."</td>";
                                                        echo "<td>".$pers[2]."</td>";
                                                        echo "<td>".$pers[3]."</td>";
                                                        echo "<td>".$pers[4]."</td>";
                                                        echo "<td>".$pers[5]."</td>";
                                                        echo "<td><a class='btn btn-success' href='../controladores/atender.php?id=".$pers[6]."'>Atender</a></td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="../js/app.js"></script>


</body>
</html>
