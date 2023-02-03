<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <title>Agregar Productos</title>
    <meta name="viewport"
          content="width=device-width,user-scalable=yes, initial-scale1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-sm-6 offset-3 mt-5">
        <form method="POST"  enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="SKU" class="form-label">SKU *</label>
                        <input type="text"  id="sku" name="sku" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion *</label>
                        <input type="text"  id="descripcion" name="descripcion" class="form-control" required >
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca *</label>
                        <input type="text"  id="marca" name="marca" class="form-control" required >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="color" class="form-label">Color *</label>
                        <input type="text"  id="color" name="color" class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio *</label>
                        <input type="number"  id="precio" name="precio" class="form-control" required>
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <input type="hidden" name="accion" value="insertar_productos">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>