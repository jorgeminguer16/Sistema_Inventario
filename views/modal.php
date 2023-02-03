<div class="modal fade" id="FisicoModal" tabindex="-1" aria-labelledby="FisicoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="FisicoModalLabel">Existencias Fisicas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                    foreach ($existencias as $existencia) {
                        echo $existencia['existencias'];
                    }
                ?>
            </div>
            <div class="modal-footer">
                <a href="agregar_producto.php"><input  class="btn btn-primary" type="button" value="Agregar producto"></a>
                <a href="editar_producto.php?id=<?php echo $row['id']?>"><input  class="btn btn-secondary" type="button" value="Editar producto">
            </div>
        </div>
    </div>
</div>