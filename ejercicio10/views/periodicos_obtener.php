<html>
<head>
    <title>Catálogo periódico</title>
    <!-- Ejercicio 11 -->
</head>
    <body>
        <h1>Periódico dado de alta en nuestra libreria</h1>
        <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
        </tr>
            <tr>
                <td><?php echo $periodico['nombre']?></td>
                <td><?php echo $periodico['fecha'] ?></td>
            </tr>
    </table>
    </body>
</html>
