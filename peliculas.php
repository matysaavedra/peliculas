<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("db.php");
    ?>
    <form method="post">
        <label for="">Tipo: </label>
        <input class="controls" type="text" name="tipo"> <br>
        <label for="">Titulo: </label>
        <input class="controls" type="text" name="titulo"> <br>
        <label for="">Recomendada</label>
        <input class="controls" type="text" name="recomendada">
        <input class="controls" type="submit" name="register" value="Agregar Recomendacion">
        
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
                    <p class="ok">Se Ingresaron Los datos</p>
                    <?php
                } else{
                    ?>
                    <p class="bad">Ups ha ocurrido un error</p>
                    <?php
                }
            }else{
                ?>
                <p class="bad">Por favor complete los campos</p>
                <?php
                }
            }
    ?>
</body>
</html>


