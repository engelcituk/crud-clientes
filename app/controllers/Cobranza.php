<?php

class Cobranza extends Controller {
   
    public function __construct()
    {       
        if (!isLoggedIn() ) {
            redirect('/');
        }
        
    }
    public function index(){
        
        $this->view('cobranza/index');

    }

   
}

