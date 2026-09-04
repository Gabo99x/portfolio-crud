<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Materias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a class="enlaces" href="/crud-materias">Pagina principal</a>
    </header>
    <main>
        <section id="listado">
            <h2>Estado de materias</h2>
            <a class="enlaces" href="index.php?action=create">Agregar materia</a>
            <table id="tabla" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Materia</th>
                        <th>Año</th>
                        <th>Cuatrimestre</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                        <?php while($materia=$materias->fetch_assoc()): ?>
                    <tr>
                        <td><?=htmlspecialchars($materia["materia_id"])?> </td>
                        <td><?=htmlspecialchars($materia["nombre"])?> </td>
                        <td><?=htmlspecialchars($materia["anio"])?></td>
                        <td><?=htmlspecialchars($materia["cuatrimestre"])?> </td>
                        <td><?=htmlspecialchars($materia["nombre_estado"])?> </td>
                        <td> <a class="enlaces" href="index.php?action=edit&id=<?=$materia["materia_id"]?>">Editar</a> </td>
                        <td> <a class="enlaces" href="index.php?action=delete&id=<?=$materia["materia_id"]?>" onclick="return confirm('¿Eliminar este usuario?')">Eliminar</a> </td>
                    </tr>
                         <?php endwhile; ?>
                </tbody>
            </table>

        </section>
    </main>
 
</body>
</html>