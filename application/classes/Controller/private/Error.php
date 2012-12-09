<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Private_Error extends Controller {

     

    function before() {
        parent::before();
    }
    
    
	//default action
    public function action_404(){
    	$error = View::factory('private/error/404');
    	$this->response->body($error);
    }
   
       
    
  
    
   

   
    

}

// End Dashboard
