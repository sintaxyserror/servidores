<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h1>Lista de Tareas</h1>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha de Vencimiento</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($guardadoTarea as $tarea): ?>
            <tr>
                <td><?php echo $tarea['titulo']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
