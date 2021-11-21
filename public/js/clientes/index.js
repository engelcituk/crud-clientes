
$('#formClientes').submit( function(e) {
    e.preventDefault()
    const cliente = {
        nombre: document.getElementById('nombre').value,
        localidad: document.getElementById('localidad').value,
        ip: document.getElementById('ip').value,
        ip_pass: document.getElementById('ip_pass').value,
        megas: document.getElementById('megas').value,
        precio: document.getElementById('precio').value,
        fecha: document.getElementById('fecha').value,
    }
    $.ajax({
        url: "clientes/add", 
        type: "POST",
        dataType:"json",
        data: { cliente },
        success: function(respuesta) { //respuesta es un json
            const { ok, message } = respuesta
            if( ok  ){
                // console.log(cliente)
                $('#modalN').modal('hide')
                showMessageNotify( message, 'success', 2000); //muestro alerta
                setTimeout(() => {
                    location.reload();
                }, 2500);
            }              
        },
        error: function(respuesta) {
            console.log('error')
        }
    })
})

function showCliente(id) {
    $('#modalEdit').modal('show')
    $.ajax({
        url: "clientes/show", 
        type: "POST",
        dataType:"json",
        data: { id },
        success: function(respuesta) { //respuesta es un json
            const { ok, message, cliente } = respuesta
            if( ok  ){
                document.getElementById('idEdit').value = cliente.id
                document.getElementById('nombreEdit').value = cliente.nombre
                document.getElementById('localidadEdit').value = cliente.localidad
                document.getElementById('ipEdit').value = cliente.ip
                document.getElementById('ip_passEdit').value = cliente.ip_pass
                document.getElementById('megasEdit').value = cliente.megas
                document.getElementById('precioEdit').value = cliente.precio
                document.getElementById('fechaEdit').value = cliente.fecha.substr(0,10)
            }              
        },
        error: function(respuesta) {
            console.log('error')
        }
    })
}

$('#editCliente').submit( function(e) {
    e.preventDefault()
    const cliente = {
        id: document.getElementById('idEdit').value,
        nombre: document.getElementById('nombreEdit').value,
        localidad: document.getElementById('localidadEdit').value,
        ip: document.getElementById('ipEdit').value,
        ip_pass: document.getElementById('ip_passEdit').value,
        megas: document.getElementById('megasEdit').value,
        precio: document.getElementById('precioEdit').value,
        fecha: document.getElementById('fechaEdit').value,
    }
    $.ajax({
        url: "clientes/update", 
        type: "POST",
        dataType:"json",
        data: { cliente },
        success: function(respuesta) { //respuesta es un json
            const { ok, message } = respuesta
            if( ok  ){
                // console.log(cliente)
                $('#modalEdit').modal('hide')
                showMessageNotify( message, 'success', 2000); //muestro alerta
                setTimeout(() => {
                    location.reload();
                }, 2500);
            }              
        },
        error: function(respuesta) {
            console.log('error', respuesta) 
        }
    })
})

function deleteCliente( id, nombre) {
    Swal.fire({
        title: `¿Estás seguro de eliminar a  ${ nombre }?`,
        text: "¡No podrás revertir esto!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: '¡Cancelar!',
        confirmButtonText: 'Sí, borrarlo!'
        }).then((result) => {
        if (result.value) {
            $.ajax({
                url: "clientes/delete", 
                type: "POST",
                dataType:"json",
                data: {
                    id,
                },
                success: function(respuesta) { //respuesta es un json
                    const { ok, message } = respuesta
                    if( ok  ){
                        showMessageNotify(message, 'success', 2000); //muestro alerta
                        setTimeout(() => {
                            location.reload();
                        }, 2500);
                    }              
                },
                error: function(respuesta) {
                    console.log('error')
                }
            })
        }
    })
}

function showMessageNotify(mensaje, tipo, duracion) {
    $.notify({							
      message: `<i class="fa fa-sun"></i><strong> ${mensaje}</strong>`
      },{								
          type: tipo,
          delay: duracion,
          z_index: 3000,
    });
} 