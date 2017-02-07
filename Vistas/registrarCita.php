<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beauty Salon</title>

    <link href="../css/app.css" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html">
                    Beauty Sal&oacute;n
                </a>
            </div>

            <div class="navbar-collapse collapse" id="app-navbar-collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="box box-default">
        <div class="box-header with-border">
            <center><h3 class="box-title">CITA</h3></center>
        </div>
        <div class="box-body">
            <form action="" method="POST">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">Ingresa los datos correctamente para tener una cita en BEAUTY SALON</div>
                        <div class="panel-body">
                            <div class="row">
                                <row class="col-md-12">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="nombres">Nombres:</label>
                                            <input type="text" name="nombres" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="apellidos">Apellidos:</label>
                                            <input type="text" name="apellidos" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label for="celular">Celular:</label>
                                            <input type="text" name="celular" class="form-control">
                                        </div>
                                    </div>
                                </row>

                                <div class="form-group col-md-offset-4 col-sm-4">
                                    <label for="personal_id" class="form-control-label">Estilista:</label>
                                    <select name="personal_id" id="medico" class="form-control">
                                        <option value="1"> Kay Garland</option>
                                        <option value="2"> Koky Belaunde</option>
                                        <option value="3"> Diana Pertersen</option>
                                    </select>
                                </div>
                                <div class="row col-md-12">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="fecha">Fecha:</label>
                                            <input type="date" name="fecha" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="hora">Hora:</label>
                                            <div class="input-group clockpicker">
                                                <input type="time" name="hora" class="form-control" value="09:30">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="detalles">Detalles De Atencion:</label>
                                    <textarea placeholder="&iquest;Qu&eacute; podemos hacer por T&iacute;?" name="detalles" class="form-control" rows="5" id="comment"></textarea>
                                </div>
                                <div class="text-center col-md-12">
                                    <button class="btn btn-primary">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../js/app.js"></script>
</body>
</html>