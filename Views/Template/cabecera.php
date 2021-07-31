<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link href="<?= url ?>Resources/Imagenes/acme.jpg" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.12.1.js" integrity="sha256-VuhDpmsr9xiKwvTIHfYWCIQ84US9WqZsLfR4P7qF6O8=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= url ?>Resources/Css/iniciar.css" />

    <title>ACME</title>

</head>

<?php if (isset($_SESSION['usuario']) && isset($_SESSION['nombre'])) { ?>
<div class="container-fluid">
<div class="col-sm-12">
        <center>
            <?php if (isset($_SESSION['usuario']) && isset($_SESSION['nombre'])) { ?>
                
                    <div class="col-sm-6">
                        <p>
                            <h3>Bienvenido: <strong><?= $_SESSION['nombre'] ?></strong></h3>.
                        </p>

                    </div>
                    <div class="col-sm-6">
                        <form action="<?= url ?>usuario/cerrarSesion">
                        <input type="submit" value="Cerrar sesión" id="cerrar" class="btn btn-danger" style="cursor: pointer" />
                        </form>
                    </div>
                <?php } ?>
                
        </center>
    </div>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a style="font-size :3em" class="navbar-brand" href="<?= url ?>vehiculo/vw_Vehiculo"><b> Acme</b> </a>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= url ?>vehiculo/vw_Vehiculo">
                        &nbsp; &nbsp; <h3>Vehículos </h3>&nbsp; &nbsp;<span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= url ?>conductor/vw_Conductor">
                        &nbsp; &nbsp; <h3>Conductores </h3> &nbsp; &nbsp;
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= url ?>propietario/vw_Propietario">
                        &nbsp; &nbsp;<h3>Propietarios </h3>&nbsp; &nbsp;
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= url ?>tipoVehiculo/vw_Tipo">
                        &nbsp; &nbsp; <h3>Tipo De Vehículos </h3>&nbsp; &nbsp;
                    </a>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        &nbsp; &nbsp;<h3>Informes</h3>&nbsp; &nbsp;
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= url ?>Reportes/pdf.php">Informe Vehiculos (PDF)</a>
                        <a class="dropdown-item" target="_blank" href="<?= url ?>Reportes/reporteExcel.php?id=<?= url ?>">Informe Vehiculos (Excel)</a>
                        <a class="dropdown-item"  href="<?= url ?>reporte/ReporteGeneral">Informe General</a>
                    </div>
                    
                </li>
            </ul>
        </div>
    </nav>
   
</div>

<?php }?>