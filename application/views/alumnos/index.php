<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Lista CI3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h2>Estudiantes Registrados (CI3)</h2>
            <!-- Botón que envía a la función 'nuevo' del controlador -->
            <a href="<?= site_url('Alumnos/nuevo') ?>" class="btn btn-primary">+ Nuevo Alumno</a>
        </div>

        <div class="card shadow-sm">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr><th>CI</th><th>Nombre</th><th>Paterno</th><th>Materno</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $f): ?>
                    <tr>
                        <td><?= $f->ci ?></td>
                        <td><?= $f->nombre ?></td>
                        <td><?= $f->paterno ?></td>
                        <td><?= $f->materno ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>