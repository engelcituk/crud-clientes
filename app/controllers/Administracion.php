<?php

class Administracion extends Controller {
   
    public function __construct()
    {       
        if (!isLoggedIn() ) {
            redirect('/');
        }
        
    }
    public function index(){
        
        $this->view('administracion/index');

    }

   
}

