<html>
<head>
<title>Catálogo periódicos</title>
    </head>
    <body>
        <h1>Periódicos dados de alta en nuestra libreria</h1>
        <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
        </tr>
        <?php foreach ($periodicos as $periodico): ?>
            <tr>
                <td><?php echo $periodico['nombre']?></td>
                <td><?php echo $periodico['fecha']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </body>
</html>
