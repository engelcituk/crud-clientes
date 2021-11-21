<?php

class Paginas extends Controller {

    public function __construct()
    {

    }

    public function index(){

        if( isLoggedIn() ){
            redirect('clientes');
        }

        $data =[
            'titulo'=>'Bienvenido'
        ];
        $this->view('paginas/index', $data);

    }

    public function about(){

        $this->view('paginas/about');        
    }

}

