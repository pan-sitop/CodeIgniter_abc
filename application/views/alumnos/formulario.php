<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Nuevo Alumno CI3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Registrar Alumno</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('Alumnos/adicionar') ?>" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Carnet de Identidad</label>
                                <input type="number" name="ci" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Paterno</label>
                                <input type="text" name="paterno" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Apellido Materno</label>
                                <input type="text" name="materno" class="form-control">
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="<?= site_url('Alumnos') ?>" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success">Guardar Datos</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>