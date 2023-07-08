<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/table2.css">
    <script src="https://kit.fontawesome.com/da0be9d5ad.js" crossorigin="anonymous"></script>

</head>
<body>
    <main>
        <a href="index.php">Volver al Inicio</a>
        <h2>Listado de recomendaciones ingresadas</h2>
        <?php
        include("listado.php");
        ?>
        
    </main>
    <footer class="page-footer blue darken-3">
        <div class="footer-copyright">
          <div class="container">
          © 2023 Cineflix
          <a class="grey-text text-lighten-4 right" href="https://github.com/matysaavedra/"> <i class="fa-brands fa-github"></i> Mi github</a>
          </div>
        </div>
      </footer>
</body>
</html>