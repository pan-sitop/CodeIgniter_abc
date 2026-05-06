<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CRUD Alumnos - CI3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h2 class="mb-0">Gestión de Alumnos (CodeIgniter 3)</h2>
            </div>
            <div class="card-body">
                <!-- Formulario -->
                <form action="<?= site_url('Alumnos/adicionar') ?>" method="POST" class="row g-3 mb-4">
                    <div class="col-md-3">
                        <input type="number" name="ci" class="form-control" placeholder="CI" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="paterno" class="form-control" placeholder="Paterno">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="materno" class="form-control" placeholder="Materno">
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Adicionar Alumno</button>
                    </div>
                </form>

                <!-- Tabla -->
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr><th>CI</th><th>Nombre</th><th>Paterno</th><th>Materno</th></tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $alumno): ?>
                        <tr>
                            <td><?= $alumno->ci ?></td>
                            <td><?= $alumno->nombre ?></td>
                            <td><?= $alumno->paterno ?></td>
                            <td><?= $alumno->materno ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>