<?php require APPROOT . '/views/shared/header3.php'; ?>

<?php require APPROOT . '/views/shared/aside.php'; ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" data-toggle="modal"><i class="fas fa-user-plus"></i> Nuevo Cliente</button>
            </div>
        </div>

        <!-- Modal 2 - animado-Editar-->
        <?php require APPROOT . '/views/clientes/add.php'; ?>
        
        <!-- Modal 2 - animado-Editar-->
        <?php require APPROOT . '/views/clientes/edit.php'; ?>

        <div class="col-md-0 my-2">
            <form action="clientes.php" class="form-inline justify-content-end" method="POST">
                <label class="mr-2" for="">Buscar:</label><input class="form-control mr-sm-2" type="search" id="buscar" name="buscar" placeholder="Caracter a buscar...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div><br>
    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
                <?php if ( count($data['clients']) > 0) : ?>
                    <div class="tabla-responsive">
                        <table id="tablaClientes" class="table table-striped table-bordered table-condensen" style="width: 100%;">
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Localidad</th>
                                    <th>IP</th>
                                    <th>Contraseña IP</th>
                                    <th>Megas</th>
                                    <th>Precio</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <?php foreach ( $data['clients'] as $cliente) : ?>
                                    <tr>
                                        <td><?php echo $cliente->id; ?></td>
                                        <td><?php echo $cliente->nombre; ?></td>
                                        <td><?php echo $cliente->localidad; ?></td>
                                        <td><?php echo $cliente->ip; ?></td>
                                        <td><?php echo $cliente->ip_pass; ?></td>
                                        <td><?php echo $cliente->megas; ?></td>
                                        <td><?php echo $cliente->precio; ?></td>
                                        <td><?php echo $cliente->fecha; ?></td>
                                        <td>
                                            <button class="btnEditar" onclick="showCliente(<?php echo $cliente->id; ?>)"><i class="fas fa-edit"></i></button>
                                            <button class="btnEliminar" onclick="deleteCliente(<?php echo $cliente->id; ?>, '<?php echo $cliente->nombre; ?>')"><i class="fas fa-trash-alt"></i></button>
                                            <button class="btnBloquear"><i class="fas fa-ban"></i></button>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?> 
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>   
                
                <?php if ( count($data['clients']) == 0) : ?>
                    <div class="alert alert-danger" role="alert">
                        Sin clientes registrados
                    </div>
                <?php endif; ?>   
            </div>
        </div>
    </div>
</main>

<script src="<?php echo URLROOT; ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/popper.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo URLROOT; ?>/js/sweetalert2.js"></script>
<script src="<?php echo URLROOT; ?>/js/bootstrap-notify.js"></script>
<script src="<?php echo URLROOT; ?>/js/script.js"></script>
<script src="<?php echo URLROOT; ?>/js/clientes/index.js"></script>

</body>

</html>