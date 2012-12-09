<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Private_Dashboard extends Controller_Base_Admin {

    

    function before() {
        parent::before();
      // Libs__Util::user_filter();;
        


    }
    
    
	//default action
    public function action_index(){
    	$this->template->page = View::factory('private/pages/main');
    }
   
    public function action_home() {
        $this->template->page = View::factory('private/pages/main');
       
    }
    public function action_list() {
    	$this->template->page = View::factory('private/pages/list');
    	 
    }
    public function action_form() {
    	$this->template->page = View::factory('private/pages/form');
    
    }
    
    public function action_profile() {
   		$session = SESSION::instance();
   		$current_user = $session->get('user');	 	
    	$this->template->page = View::factory('private/pages/profile')
    							->bind('user', $current_user);
    	 
    }
    
    public function action_do_profile() {    	
    	$is_ok = true;
    	$errors = array();
    	$user = array();
    	if(isset($_POST['username']) &&  !Libs_Validation::is_empty($_POST['username'])){
    		$user['username']=trim($_POST['username']);
    	}else{
    		$is_ok = false;
    		$errors[] = I18n::get('admin.error.required_username');
    	}
    	
    	if(isset($_POST['password']) &&  !Libs_Validation::is_empty($_POST['password'])){
    		$user['password']=trim($_POST['password']);
    	}else{
    		$is_ok = false;
    		$errors[] = I18n::get('admin.error.required_password');
    	}
    	
    	if(isset($_POST['confirm']) &&  !Libs_Validation::is_empty($_POST['confirm'])){
    		//$user['confirm']=trim($_POST['confirm']);
    	}else{
    		$is_ok = false;
    		$errors[] = I18n::get('admin.error.required_confirm');
    	}
    	if($is_ok){
    		if($user['password'] != trim($_POST['confirm'])){
    			$is_ok = false;
    			$errors[] = I18n::get('admin.error.pass_conf_matching');
    		}
    	}
    	
    	if($is_ok){
    		$user['id']= $_POST['id'];
    		$user['password'] = md5($user['password']);
    		$result = Model::factory('Private_Auth')->edit_profile($user);
    		self::redirect('private/auth');
    	}else{
    		$session = SESSION::instance();
    		$current_user = $session->get('user');
    		$this->template->page = View::factory('private/pages/profile')
    		->bind('user', $current_user)
    		->bind('errors', $errors);
    	}
    	
    	
    	
    }
    
    
    
  
    
   

   
    

}

// End Dashboard
