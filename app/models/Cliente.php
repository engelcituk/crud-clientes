<?php
class Cliente {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getClientes(){
        $this->db->query('SELECT * FROM clientes');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addCliente($data){
        $this->db->query('INSERT INTO clientes (nombre, localidad, ip, ip_pass, megas, precio, fecha) VALUES (:nombre, :localidad, :ip, :ip_pass, :megas, :precio, :fecha)');
        // enlazamos parametros
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':localidad', $data['localidad']);
        $this->db->bind(':ip', $data['ip']);
        $this->db->bind(':ip_pass', $data['ip_pass']);
        $this->db->bind(':megas', $data['megas']);
        $this->db->bind(':precio', $data['precio']);
        $this->db->bind(':fecha', $data['fecha']);
    
        //ejecución
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getClienteById($id)
    {
        $this->db->query('SELECT * FROM clientes WHERE id = :id');
        //enlazo parametro
        $this->db->bind(':id', $id);
        $Cliente = $this->db->single();
        // retornamos a Cliente       
        return $Cliente;
        
    }

    public function updateCliente($data)
    {
        $this->db->query('UPDATE clientes SET nombre = :nombre, localidad = :localidad, ip = :ip, ip_pass = :ip_pass, megas = :megas, precio = :precio, fecha = :fecha WHERE id = :id');
        // enlazamos parametros
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':localidad', $data['localidad']);
        $this->db->bind(':ip', $data['ip']);
        $this->db->bind(':ip_pass', $data['ip_pass']);
        $this->db->bind(':megas', $data['megas']);
        $this->db->bind(':precio', $data['precio']);
        $this->db->bind(':fecha', $data['fecha']);

        //ejecución
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCliente($id)
    {
        $this->db->query('DELETE FROM clientes WHERE id = :id');
        // enlazamos parametros
        $this->db->bind(':id', $id);        
        //ejecución
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
