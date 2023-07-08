<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/da0be9d5ad.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="barraNavegacion">
            <div class="nav-wrapper blue darken-4 z-depth-4">
                <a href="camion.jpeg" class="brand-logo left">LOGO</a>
                <ul id="nav-mobile" class="right hide-on-small-only">
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Acerca De Nosotros</a></li>
                    <li><a href="">Otro</a></li>
                 </ul>
            </div>
        </nav>
    </header>

    <main>
        
        <p>¡Explora las selecciones de otros aficionados al cine y descubre nuevas joyas del entretenimiento! En nuestra plataforma, puedes sumergirte en las recomendaciones de películas, series y documentales realizadas por usuarios apasionados como tú. ¡Comparte tus propias sugerencias y favoritos con la comunidad! Encuentra contenido emocionante y descubre recomendaciones de personas con gustos similares. ¡Únete ahora y forma parte de nuestra comunidad de descubrimiento cinematográfico!</p>
        <h5>A continuacion puedes Enviar tu recomendacion</h5>
        
        <?php
        include("peliculas.php")
        ?>
        
        <div class="archivos">
            <a href="mostrarLista.php"><i class="material-icons">list</i>Listado de recomendaciones</a>
        </div>
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

