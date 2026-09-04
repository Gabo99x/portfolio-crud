<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear materias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a class="enlaces" href="index.php?action=index">Volver a la lista</a>
    </header>
    
    <main>
        <section id="materias">
            <h2>Crear Materias</h2>
            <form action="index.php?action=store" method="POST" id="formulario">
                <fieldset>
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre">
            </div>

            <div class="campo">
                <label for="anio">Año</label>
                <select name="anio" id="anio">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="campo">
                <label for="cuatrimestre">Cuatrimestre</label>
                <select name="cuatrimestre" id="cuatrimestre">
                    <option value="primero">Primero</option>
                    <option value="segundo">Segundo</option>
                    <option value="anual">Anual</option>
                </select>

            </div>

            <div class="campo">
                <label for="estado">Estado</label>
                <select name="estado_id" id="estado">
                    <option value="1">Finalizada</option>
                    <option value="2">Regular</option>
                    <option value="3">Libre</option>
                    <option value="4">Cursando</option>
                </select>
            </div>
            </fieldset>
            <p id="mensaje-salida"></p>
            <button type="submit" id="boton-form">Crear</button>
            </form>
        </section>

    </main>
    <script src="validacion.js"></script>
</body>
</html>