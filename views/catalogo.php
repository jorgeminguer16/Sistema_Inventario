<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos</title>
    <meta name="viewport"
        content="width=device-width,user-scalable=yes, initial-scale1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div id="content">
        <section>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div style="text-align: center;">
                            <h1>Lista de Productos</h1>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="table-responsive">

                            <table class="table table-striped table-hover">
                                <thead>

                                    <tr>
                                        <th>SKU</th>
                                        <th>Descripción</th>
                                        <th>Marca</th>
                                        <th>Color</th>
                                        <th>Precio</th>
                                        <th>Almacen</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <tr>
                                        <td>
                                            <?php
                                            foreach ($datos as $dato){
                                                echo $dato['sku'];
                                            }
                                        ?>
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($datos as $dato){
                                                echo $dato['descripcion'];
                                            }
                                        ?>
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($datos as $dato){
                                                echo $dato['marca'];
                                            }
                                        ?>
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($datos as $dato){
                                                echo $dato['color'];
                                            }
                                        ?>
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($datos as $dato){
                                                echo $dato['precio'];
                                            }
                                        ?>
                                        </td>
                                        <td>
                                            <button id="btn" type="submit" onclick="mandar()" class="btn btn-secondary"
                                                data-bs-toggle="modal" data-bs-target="#FisicoModal" name="id_producto"
                                                value="<?php foreach ($datos as $dato) {
                                                    echo $dato['id_producto'];
                                                }?>">Fisico</button>
                                            <button id="btn" type="submit" onclick="mandar()" class="btn btn-info"
                                                data-bs-toggle="modal" data-bs-target="#VirtualModal" name="id_producto"
                                                value="<?php foreach ($datos as $dato) {
                                                    echo $dato['id_producto'];
                                                }?>">Virtual</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                    </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>
</body>

<script>
function mandar() {
    let id_producto = document.getElementById("btn").value;
    console.log(id_producto);

    let ruta = `controllers/FisicoController.php?id_producto=${id_producto}`;

    // Enviamos nuestra petición al servidor 
    // con JavaScript:
    fetch(ruta)
        .then(respuesta => respuesta.text())
        .then(data => {
            console.log(data);
        })
}
</script>

</html>