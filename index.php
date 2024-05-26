<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once './fuente/conexion_bd.php';
        $query = "select nombre from clientes;";
        $consulta_clientes = mysqli_query($conexion,$query);
        $query = "select p.nombre as producto ,p.precio as precio,c.nombre as categoria from productos p inner join categorias c on c.id = p.categoria_id;";
        $consulta_productos = mysqli_query($conexion,$query);
    ?>
    <h1>Bienvenido a su Tiendita de tecnologia Paquito</h1>
    <img src="recursos/hola.jpg" alt="">
    <h3>CLIENTES CONTENTOS</h3>
    <table>
        <tr>
            <th>Nombre</th>
        </tr>
        <?php
          
          while($fila = mysqli_fetch_assoc($consulta_clientes)){
            echo "<tr>";
            echo "<td>".$fila["nombre"]."</td>";
            echo "</tr>";
        }
         
        ?>
</table>
<h3>Productos</h3>
<table>
    <tr>
        <th>nombre</th>
        <th>precio</th>
        <th>categotia</th>
    </tr>
    <?php
          
          while($fila = mysqli_fetch_assoc($consulta_productos)){
            echo "<tr>";
            echo "<td>".$fila["producto"]."</td>";
            echo "<td>$".$fila["precio"]."</td>";
            echo "<td>".$fila["categoria"]."</td>";
            echo "</tr>";
        }
         
        ?>echo "<td>".$fila["nombre"]."</td>";
</table>
    
</body>
</html>