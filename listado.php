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
    $inc = include("db.php");
    if($inc){
        $consulta = "SELECT * FROM recomendacion"; // agarramos todos los datos
        $resultado = mysqli_query($conex, $consulta); //primer parametro es la conexion, y el segundo la consulta
        if($resultado) {
            ?>
            <table class="centered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Titulo</th>
                        <th>Recomendada</th>
                    </tr>
                </thead>
                <?php
                while($row = $resultado->fetch_array()){
                    $id = $row['id'];
                    $tipo = $row['tipo'];
                    $titulo = $row['titulo'];
                    $recomendada = $row['recomendada'];
                    ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $tipo; ?></td>
                        <td><?php echo $titulo; ?></td>
                        <td><?php echo $recomendada; ?></td>
                    </tr>
                    <?php
                    }
                }
                }
                ?>
            </table>
</body>
</html>


