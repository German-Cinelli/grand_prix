<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/dist/css/bootstrap.min.css">
    <title>Grand Prix | Inscripción</title>
</head>
<body>
    

<h1 class="display-4 text-center text-muted mt-3">INSCRIPCIÓN GRAND PRIX 2</h1>

<div class="container mt-5">

    <form action="class/register.php" method="POST" enctype='multipart/form-data'>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Nombre piloto</label>
                    <input type="text" name="name_piloto" class="form-control" placeholder="Ingrese nombre piloto" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nombre navegante</label>
                    <input type="text" name="name_navegante" class="form-control" placeholder="Ingrese nombre navegante" required>
                </div>
            </div>
        </div><!-- ./row -->

        <div class="form-group">
            <label for="exampleFormControlSelect1">Correo</label>
            <input type="email" name="email" class="form-control" placeholder="Ingrese dirección de correo" required>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlSelect2">Tipo de vehículo</label>
            <select name="car_type" class="form-control" required>
                <option value="0" disabled>Seleccione tipo de vehículo</option>
                <option value="Auto">Auto</option>
                <option value="Auto">Camioneta</option>
                <option value="Auto">UTV</option>
            </select>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Marca</label>
                <input type="text" name="marca" class="form-control" placeholder="Ingrese marca" required>
            </div>
            <div class="col">
            <label for="">Modelo</label>
                <input type="text" name="modelo" class="form-control" placeholder="Ingrese modelo" required>
            </div>
            <div class="col">
                <label for="">Dominio</label>
                <input type="text" name="dominio" class="form-control" placeholder="Ingrese dominio" required>
            </div>
        </div>

        <div class="custom-file mt-4">
            <input type="file" name="file" class="custom-file-input" lang="es" required>
            <label class="custom-file-label" for="customFileLang">Sube foto de tu licencia</label>
        </div>

        <button type="submit" class="btn btn-block btn-outline-primary mt-5">Inscribirme</button>

    </form>

</div>

</body>
</html>

