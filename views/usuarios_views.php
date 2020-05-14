<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

  <style>

    .container {
      margin-top: 150px;
    }

    h1 {
      color: brown;
      text-align: center;
      margin: 60px 0px;
    }

    .description {
      text-align: center;
      margin: 30px 0;
    }

  </style>

<body>

  <div class="container">

    <h1>Ejemplo de modelo vista controlador</h1>

    <p class="description">
      Aquí se relaciona un ejemplo de modelo vista controlador, <br/> mostrando una lista de personas
    </p>

    <?php
      foreach($datos as $dato) { //Imprime la consulta todo mediante un foreach
        $dato["nombre"]."<br />";
        // @$dato["nombre"] = @$nombre;
        // echo $nombre;
      }
    ?>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Correo</th>
        </tr>
      </thead>

      <tbody>
        <?php
          @$contador = 0;
          foreach ($datos as $dato) {
            $contador ++;
            ?><tr>
              <th scope="row"> <?php echo $contador; ?> </th>
              <td> <?php echo $dato["nombre"]; ?> </td>
              <td> <?php echo $dato["apellido"]; ?> </td>
              <td> <?php echo $dato["correo"]; ?> </td>
            </tr>

          <?php } ?>
      </tbody>

    </table>

  </div>



</body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>