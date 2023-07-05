<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/peliculas.css">
</head>
<body>
    <?php
    include("db.php");
    ?>
    <a href="index.html">Regresar al Inicio</a>
    <form method="post">
        <label for="">Tipo: </label>
        <input class="controls" type="text" name="tipo"> <br>
        <label for="">Titulo: </label>
        <input class="controls" type="text" name="titulo"> <br>
        <label for="">Recomendada</label>
        <input class="controls" type="text" name="recomendada">
        <input class="controls" type="submit" name="register">
    </form>
    
    <?php
        if(isset($_POST['register'])){
            if(strlen($_POST['tipo'])>=1 && strlen($_POST['titulo']) >=1 && strlen($_POST['recomendada']) >=1){
                $tipo = trim($_POST['tipo']);
                $titulo = trim($_POST['titulo']);
                $recomendada = trim($_POST['recomendada']);
                
                $consulta = "INSERT INTO recomendacion(tipo, titulo, recomendada) VALUES ('$tipo','$titulo','$recomendada')";
                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    ?>
                    <h3 class="ok">Se Ingresaron Los datos</h3>
                    <?php
                } else{
                    ?>
                    <h3 class="bad">Ups ha ocurrido un error</h3>
                    <?php
                }
            }else{
                ?>
                <h3 class="bad">Por favor complete los campos</h3>
                <?php
                }
            }
    ?>
</body>
</html>


