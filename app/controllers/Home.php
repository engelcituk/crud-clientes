<?php

class Home extends Controller {
   
    public function __construct()
    {       
        if (!isLoggedIn() ) {
            redirect('/');
        }
        
    }
    public function index(){
        
        $this->view('home/index', $data);

    }

   
}

