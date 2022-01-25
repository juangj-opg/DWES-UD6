<html>
<head>
    <title>Catálogo libro</title>
    <!-- Ejercicio 11 -->
</head>
    <body>
        <h1>Libros dados de alta en nuestra libreria</h1>
        <table border="1">
        <tr>
            <th>TITULO</th>
            <th>PRECIO</th>
        </tr>
            <tr>
                <td><?php echo $libro['titulo']?></td>
                <td><?php echo number_format($libro['precio'],2)?></td>
            </tr>
    </table>
    </body>
</html>
