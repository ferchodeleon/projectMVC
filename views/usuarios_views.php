<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto MVC</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="../assets/image/flavico.png">
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');
@import url('https://fonts.googleapis.com/css?family=Anton');

body {
  font-family: font-family: 'Lato', 'Helvetica Neue', sans-serif;
}

  header {
    width: 100%;
    min-height: calc(20vh - 130px);
    background: url('../assets/image/stars.svg'), #1B1B25;
    background-repeat: repeat;
    color: white;
    display: flex;
    align-items: center;
  }

  header h1 {
    font-family: 'Anton', sans-serif;
    font-size: 60px;
    color: #FFF;
    margin: 40px;
  }

  .container {
    margin-top: 80px;
  }

  h2 {
    color: brown;
    text-align: center;
    margin: 10px 0px;
    font-size: 50px;
    width: 80%;
  }

  .description {
    text-align: start;
    margin: 30px auto;
    width: 80%;
  }

  .description__bold {
    font-weight: 700;
  }

  .container__tarjet {
    margin: 4em 0 6em 0 ;
  }

  .container__tarjet-ul {
    width: 70%;
    margin: 0 auto;
    box-shadow: 0 0 15px -6px rgba(23,54,71,.5);
  }

  .container__tarjet-img {
    width: 8em;
    border-radius: 50%;
  }

  .container__tarjet-list {
    display: flex;
    margin: 10px 20px;
    align-items: center;
  }

  .container__twitter-img {
    width: 24px;
  }

  .container__twitter {
    color: #0c9efc;
  }

  .container__tarjet-list div {
    padding: 20px;
  }

  .container__tarjet-list div p {
    margin: 0;
  }

</style>

<body>

<header>
    <div>
      <h1>Ejemplo MVC</h1>
    </div>
</header>

  <div class="container">

    <h2>Ejemplo de modelo vista controlador</h2>

    <p class="description">
      Aquí se relaciona un ejemplo de modelo vista controlador, mostrando una lista de personas.
      <br/>En el codigo se encuentra un <span class="description__bold">"view"</span> con un foreach para cargar la cantidad de datos que se encuentra en <span class="description__bold">"models"</span>, llamando a la base de datos controlado por un <span class="description__bold">"controllers"</span>.
    </p>

    <div class="container__tarjet">
      <?php
        foreach ($datos as $dato) {
      ?>
      <ul class="container__tarjet-ul">
        <li class="container__tarjet-list">
          <div> <img class="container__tarjet-img" src=<?php echo $dato["avatar"];?> alt="Logo" /> </div>
          <div>
            <span class="description__bold"><p>Nombre: <?php echo $dato["nombre"]; ?></p></span>
            <p>Twitter: <img class="container__twitter-img" src="https://cdn.clipart.email/ecce653c7f94e479b64be83549d550b8_logo-twitter-icon-symbol-47448-free-icons-and-png-backgrounds_2500-2500.png"/><span class="container__twitter">@<?php echo $dato["twitter"]; ?></span></p>
            <p>Correo: <?php echo $dato["correo"]; ?></p>
          </div>
        </li>
      </ul>
      <?php } ?>
    </div>
  </div>



</body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>