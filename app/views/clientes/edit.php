<div id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">        <!--      Para centrado-->
    <div class="modal-dialog modal-dialog-centered" role="document">

        <!--  <div class="modal-dialog" role="document">-->
        <div class="modal-content">
            <div class="encabezado modal-header">
                <h5 class="titulo modal-title" id="exampleModalLabel">Editar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCliente" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control d-none" name="id" id="idEdit" placeholder="  Nombre:" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" id="nombreEdit" placeholder="  Nombre:" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="localidad" id="localidadEdit" placeholder="  Localidad:" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="ip_antena" id="ipEdit" placeholder="  Dirección IP:" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="ip_pass" id="ip_passEdit" placeholder="  Contraseña de IP:" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="megas" id="megasEdit" placeholder="  MB en Consumo:" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="precio" id="precioEdit" placeholder="  Precio a pagar:" required>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="fecha" id="fechaEdit" placeholder="  Fecha de Pago:" required>
                        </div>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGuardar" class="btnGuardar">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>