<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Private_Menu extends Controller_Base_Admin {

    function before() {
        parent::before();
        // Libs__Util::user_filter();
    }

    //default action
    public function action_get() {
        $menu_link = $this->request->param('id');
        if ($menu_link == NULL) {
            self::redirect('private/Error/404');
        }
        $menu = Model::factory('Private_Menu')->getMenuByLink($menu_link);
        if ($menu == NULL) {
            self::redirect('private/Error/404');
        }
        $categories = Model::factory('Private_Menu')->categories($menu_link);
        $menu_id = $menu['id'];

        //  load  edir page view
        $this->template->page = View::factory('private/pages/menu/list')
                ->bind('menu_id', $menu_id)
                ->bind("categories", $categories);
    }

    public function action_list() {
        $cat_id = $this->request->param('id');
        if ($cat_id == NULL) {
            self::redirect('private/Error/404');
        }
        $cat = Model::factory('Private_Menu')->getCategoryById($cat_id);
        if ($cat == NULL) {
            self::redirect('private/Error/404');
        }
        $goods = Model::factory('Private_Menu')->goods($cat_id);

        //  load  edir page view
        $this->template->page = View::factory('private/pages/menu/good_list')
                ->bind('cat_id', $cat_id)
                ->bind("goods", $goods);
    }

    public function action_add_cat() {
        $menu_id = $this->request->param('id');
        //  todo validate incomming menu_id
        if ($menu_id == NULL) {
            self::redirect("private/dashboard");
        }
        $this->template->page = View::factory('private/pages/menu/add_cat')
                ->bind('menu_id', $menu_id);
    }
    
    /*
     * Open add image page
     */
    public function action_add_image() {
        $menu_id = $this->request->param('id');
        //  todo validate incomming menu_id
        if ($menu_id == NULL) {
            self::redirect("private/dashboard");
        }
        
        $Menu = Model::factory('Private_Menu')->getMenuById($menu_id);
        
        $this->template->page = View::factory('private/pages/menu/add_image')
                ->bind('menu_id', $menu_id)
                ->bind('image', $Menu['image']);
    }
    
    /*
     * Add or change image
     */
    public function action_do_add_image (){
        $session = Session::instance();
        $lng = $session->get('lng');

        $is_ok = true;
        $error = array();
        $has_image = false;
        $max_siz = self::$conf->get('max_image_size_page');

        /*
         *   Image Upload
         * * */
        if (isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];
            //if it is not empty
            if ($image) {
                //get the original name of the file from the clients machine
                $filename = stripslashes($_FILES['image']['name']);
                //get the extension of the file in a lower case format
                $path_info = pathinfo($filename);

                $extension = $path_info['extension'];
                $extension = strtolower($extension);
                //if it is not a known extension, we will suppose it is an error and will not  upload the file,
                //otherwise we will do more tests
                if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
                    //print error message
                    $error[] = I18n::get('admin.error.image_type');
                    $is_ok = false;
                }
                //get the size of the image in bytes
                //$_FILES['image']['tmp_name'] is the temporary filename of the file
                //in which the uploaded file was stored on the server
                $size = filesize($_FILES['image']['tmp_name']);

                //compare the size with the maxim size we defined and print error if bigger
                if ($size > $max_siz) {
                    $error[] = I18n::get('admin.error.image_size');
                    $is_ok = false;
                }
                if ($is_ok) {
                    $has_image = true;
                }
            }
        }
        if ($is_ok) {
            $menu = array();
            $menu['id'] = $_POST['menu_id'];
            if ($has_image) {
                $menu['image'] = $_FILES['image']['name'];
                $result = Model::factory('Private_Menu')->edit_menu($menu);
            }
            
            $current_menu = Model::factory('Private_Menu')->getMenuById($menu['id']);
            
            self::redirect('private/menu/get/'.$current_menu['link']);
        } else {
            $menu = array();
            $menu['id'] = $_POST['menu_id'];

            $result = Model::factory('Private_Menu')->getMenuById($menu['id']);
			
            $this->template->page = View::factory('private/pages/menu/add_image')
                    ->bind('menu', $menu['id'])
                    ->bind('image', $result[0]['image'])
                    ->bind('errors', $error);
        }
    }

    public function action_do_add_cat() {
        $is_ok = true;
        $error = array();
        # Validate category  name
        if (isset($_POST['name']) && strlen(trim($_POST['name'])) > 0) {
            
        } else {
            $is_ok = false;
            $error[] = I18n::get('admin.error.required_name');
        }
        if ($is_ok) {
            $menu = array();
            $menu['menu_id'] = $_POST['menu_id'];
            $menu['name'] = Libs_Validation::clean(($_POST['name']));
            $current_menu = Model::factory('Private_Menu')->getMenuById($menu['menu_id']);
            //*var_dump($current_menu);
            ############  SEO  block  ########################
            if(isset($_POST['meta_title'])){
            	$menu['meta_title'] =Libs_Validation::clean($_POST['meta_title']);
            }
            if(isset($_POST['meta_keywords'])){
            	$menu['meta_keywords'] =Libs_Validation::clean($_POST['meta_keywords']);
            }
            if(isset($_POST['meta_description'])){
            	$menu['meta_description'] =Libs_Validation::clean($_POST['meta_description']);
            }
            ############ END  SEO  block  ########################
            $result = Model::factory('Private_Menu')->add_cat($menu);
            self::redirect("private/menu/get/" . $current_menu['link']);
        } else {
            $menu_id = $_POST['menu_id'];
            //  todo validate incomming menu_id
            if ($menu_id == NULL) {
                self::redirect("private/dashboard");
            }
            $this->template->page = View::factory('private/pages/menu/add_cat')
                    ->bind('menu_id', $menu_id)
                    ->bind('errors', $error);
        }
    }

    public function action_edit_cat() {
        $cat_id = $this->request->param('id');
        //  todo validate incomming menu_id
        if ($cat_id == NULL) {
            self::redirect("private/dashboard");
        }
        $cat = Model::factory('Private_Menu')->getCategoryById($cat_id);
        $this->template->page = View::factory('private/pages/menu/edit_cat')
                ->bind('category', $cat);
    }

    public function action_do_edit_cat() {
        $is_ok = true;
        $error = array();
        # Validate category  name
        if (isset($_POST['name']) && strlen(trim($_POST['name'])) > 0) {
            
        } else {
            $is_ok = false;
            $error[] = I18n::get('admin.error.required_name');
        }
        if ($is_ok) {
            $menu = array();
            $menu['id'] = $_POST['id'];
            $menu['name'] = Libs_Validation::clean(($_POST['name']));
            $current_menu = Model::factory('Private_Menu')->getMenuById($_POST['menu_id']);
            //*var_dump($current_menu);
            ############  SEO  block  ########################
            if(isset($_POST['meta_title'])){
            	$menu['meta_title'] =Libs_Validation::clean($_POST['meta_title']);
            }
            if(isset($_POST['meta_keywords'])){
            	$menu['meta_keywords'] =Libs_Validation::clean($_POST['meta_keywords']);
            }
            if(isset($_POST['meta_description'])){
            	$menu['meta_description'] =Libs_Validation::clean($_POST['meta_description']);
            }
            ############ END  SEO  block  ########################
            $result = Model::factory('Private_Menu')->edit_cat($menu);
            self::redirect("private/menu/get/" . $current_menu['link']);
        } else {
            $cat_id = $_POST['id'];
            //  todo validate incomming menu_id
            if ($cat_id == NULL) {
                self::redirect("private/dashboard");
            }
            $cat = Model::factory('Private_Menu')->getCategoryById($cat_id);
            $this->template->page = View::factory('private/pages/menu/edit_cat')
                    ->bind('category', $cat)
                    ->bind('errors', $error);
        }
    }

    public function action_delete_cat() {
        $id = $this->request->param('id');
        $result = Model::factory('Private_Menu')->getCategoryById($id);
        if ($result != NULL) {
            Model::factory('Private_Menu')->delete_cat($id);
            $current_menu = Model::factory('Private_Menu')->getMenuById($result['menu_id']);
            self::redirect("private/menu/get/" . $current_menu['link']);
        } else {
            self::redirect("private/dashboard");
        }
    }

    public function action_edit() {
        $goods_id = $this->request->param('id');
        //  todo validate incomming menu_id
        if ($goods_id == NULL) {
            self::redirect("private/dashboard");
        }
        $goods = Model::factory('Private_Menu')->getgoodsById($goods_id);
        $this->template->page = View::factory('private/pages/menu/edit')
                ->bind('goods', $goods);
    }
    
    public function action_do_edit() {
       $is_ok = true;
        $error = array();
        # Validate category  name
//        if (isset($_POST['name']) && strlen(trim($_POST['name'])) > 0) {
//            
//        } else {
//            $is_ok = false;
//            $error[] = I18n::get('admin.error.required_name');
//        }
        
        if(empty($_POST['name'])){
            $is_ok = false;
            $error[] = I18n::get('admin.error.required_name');
        }
        
        if(empty($_POST['price'])){
            $is_ok = false;
            $error[] = I18n::get('admin.error.required_price');
        }
        
        if ($is_ok) {
            $cat_id = $_POST['cat_id'];
            $goods = array();
            $goods['id'] = $_POST['id'];
            $goods['name'] = Libs_Validation::clean(($_POST['name']));
            $goods['price'] = Libs_Validation::clean(($_POST['price']));
//            $current_menu = Model::factory('Private_Menu')->getMenuById($goods['menu_id']);
            //*var_dump($current_menu);
            $result = Model::factory('Private_Menu')->edit($goods);
            
            self::redirect("private/menu/list/".$cat_id);
        } else {
            $goods['id'] = $_POST['id'];
            $goods['name'] = Libs_Validation::clean(($_POST['name']));
            $goods['price'] = Libs_Validation::clean(($_POST['price']));
            //  todo validate incomming menu_id
            if ($id == NULL) {
                self::redirect("private/dashboard");
            }
            $this->template->page = View::factory('private/pages/menu/edit')
                    ->bind('goods', $goods)
                    ->bind('errors', $error);
        }
    }

    public function action_add() {
        $cat_id = $this->request->param('id');
        //  todo validate incomming menu_id
        if ($cat_id == NULL) {
            self::redirect("private/dashboard");
        }
        $this->template->page = View::factory('private/pages/menu/add')
                ->bind('cat_id', $cat_id);
    }

    public function action_do_add() {
        $is_ok = true;
        $error = array();
        # Validate category  name
        if (isset($_POST['name']) && strlen(trim($_POST['name'])) > 0) {
            
        } else {
            $is_ok = false;
            $error[] = I18n::get('admin.error.required_name');
        }
        # Validate category  name
        if (isset($_POST['price']) && strlen(trim($_POST['price'])) > 0) {
            
        } else {
            $is_ok = false;
            $error[] = I18n::get('admin.error.required_price');
        }
        if ($is_ok) {
            $menu = array();
            $menu['category_id'] = $_POST['cat_id'];
            $menu['name'] = Libs_Validation::clean(($_POST['name']));
            $menu['price'] = Libs_Validation::clean(($_POST['price']));
            //*var_dump($current_menu);
            $result = Model::factory('Private_Menu')->add($menu);
            self::redirect("private/menu/list/" . $menu['category_id']);
        } else {
            $cat_id = $_POST['cat_id'];
            //  todo validate incomming menu_id
            if ($cat_id == NULL) {
                self::redirect("private/dashboard");
            }
            $this->template->page = View::factory('private/pages/menu/add')
                    ->bind('cat_id', $cat_id)
                    ->bind('errors', $error);
        }
    }

    public function action_delete() {
        $goods_id = $this->request->param('id');
        //  todo validate incomming menu_id
        if ($goods_id == NULL) {
            self::redirect("private/dashboard");
        }
        $cat = Model::factory('Private_Menu')->getgoodsById($goods_id);
        
        Model::factory('Private_Menu')->delete($goods_id);
        
        self::redirect("private/menu/list/".$cat['category_id']);
    } 
}

// End Dashboard
