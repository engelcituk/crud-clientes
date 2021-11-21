<?php

class Clientes extends Controller {
   
    public function __construct()
    {       
        if (!isLoggedIn()) {
            redirect('');
        }
        $this->clientModel = $this->model('Cliente');
    }
    public function index(){
        //obtengo los clients

        $clients = $this->clientModel->getClientes();

        $data =[
            'clients' => $clients
        ];
        
        $this->view('clientes/index', $data);

    }

    public function add(){
        if ( isset( $_POST['cliente'] ) && $_POST['cliente'] ) {
            $cliente =  $_POST['cliente'] ;
            $data = [
                'nombre' => trim($cliente['nombre']),
                'localidad' => trim($cliente['localidad']),
                'ip'=> trim($cliente['ip']),
                'ip_pass' => trim($cliente['ip_pass']),
                'megas' => $cliente['megas'],
                'precio' => $cliente['precio'],
                'fecha' => $cliente['fecha'],
            ];

            if( $this->clientModel->addCliente($data) ){
                $respuesta = array ('ok' => true, 'message' => 'Se ha guardado el cliente');
            } else {
                $respuesta = array ('ok' => true, 'message' => 'Error al guardar el cliente');
            }
            echo json_encode($respuesta);
        }
    }

    public function show(){

        if ( isset($_POST['id']) && $_POST['id'] ) {
            
            $id = $_POST['id'];
            $cliente = $this->clientModel->getClienteById($id); 

            if( $cliente ){
                $respuesta = array ('ok' => true, 'cliente' => $cliente, 'message'=> 'Cliente encontrado');
            } else {
                $respuesta = array ('ok' => false, 'cliente' => null, 'message'=> 'Cliente no encontrado' );
            }
            echo json_encode($respuesta);
        }        
    }

    public function update(){

        if ( isset($_POST['cliente']) && $_POST['cliente'] ) {
            $cliente =  $_POST['cliente'] ;
            $data = [
                'id' => $cliente['id'],
                'nombre' => trim($cliente['nombre']),
                'localidad' => trim($cliente['localidad']),
                'ip'=> trim($cliente['ip']),
                'ip_pass' => trim($cliente['ip_pass']),
                'megas' => $cliente['megas'],
                'precio' => $cliente['precio'],
                'fecha' => $cliente['fecha'],
            ];

            $respuesta = array ('ok' => true, 'message'=> 'Cliente actualizado');

            if ( $this->clientModel->updateCliente($data) ) {
                $respuesta = array ('ok' => true, 'message'=> 'Cliente actualizado');
            } else {
                $respuesta = array ('ok' => false, 'message'=> 'El cliente no se pudo actualizar' );
            }
            
            echo json_encode($respuesta);
        }        
    }

    public function delete(){
        
        if ( isset($_POST['id']) && $_POST['id'] ) {
            
            $id = $_POST['id'];
            // $cliente =$this->clientModel->getClienteById($id);
            if( $this->clientModel->deleteCliente($id) ){
                $respuesta = array ('ok' => true, 'message' => 'Se ha borrado exitosamente al cliente');
            } else {
                $respuesta = array ('ok' => false, 'message' => 'No se ha podido borrar al cliente');
            }

            echo json_encode($respuesta);
        }        
    }
}

