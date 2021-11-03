<?php
  include("Conexion.php");

  if(isset($_POST['register'])){
    if(strlen($_POST['txtNombre']) >= 1 && 
      strlen($_POST['txtApellido']) >= 1 && 
      strlen($_POST['txtEdad']) >= 1 && 
      strlen($_POST['txtTipoIdentificacion']) >= 1 && 
      strlen($_POST['txtNumeroIdentificacion']) >= 1 && 
      strlen($_POST['txtCarrera']) >= 1 && 
      strlen($_POST['txtSede']) >= 1){

        $nombre = trim($_POST['txtNombre']);
        $apellido = trim($_POST['txtApellido']);
        $edad = trim($_POST['txtEdad']);
        $tipoIdenti = trim($_POST["txtTipoIdentificacion"]);
        $numeroIdenti = trim($_POST["txtNumeroIdentificacion"]);
        $carrera = trim($_POST["txtCarrera"]);
        $sede = trim($_POST["txtSede"]);
        $consulta = "INSERT INTO usuario(Nombre, Apellidos, Edad, Tipo_identificacion, Numero_identificacion, Carrera, Sede) VALUES ('$nombre','$apellido','$edad','$tipoIdenti','$numeroIdenti','$carrera','$sede')";
        $resultado = mysqli_query($conex, $consulta);

      }
  }

?>

<!DOCTYPE html>

<html>

  <head>

  <title>WEB</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600&display=swap" rel="stylesheet">

        <link href="Estilo.css" rel="stylesheet">

  </head>

  <body>
            
    <center>

      <div style="width: 80%;">

      <h1>DATOS INGRESADOS EXITOSAMENTE</h1>
      <br>
      <h1>BIENVENIDO A UNIMINUTO</h1>
      <a class = "navbar-brand" href="#"> </a><img src="../Imagenes/LogoUMD.png" class = "logo-brand" alt="logo"> 
      
      </div>

    </center>
    
    <br>
    <br>

    <div class = "container">

      <table border= "1" class = "table table-hover">
        <thead>
          <tr class="success"> 
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Tipo de identificacion</th>
            <th>Numero de identificacion</th>
            <th>Carrera</th>
            <th>Sede</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $nombre;?></td>
            <td><?php echo $apellido;?></td>
            <td><?php echo $edad;?></td>
            <td><?php echo $tipoIdenti;?></td>
            <td><?php echo $numeroIdenti;?></td>
            <td><?php echo $carrera;?></td>
            <td><?php echo $sede;?></td>
          </tr>
        </tbody>
      </table>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>


  </body>

</html>