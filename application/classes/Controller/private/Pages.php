<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Private_Pages extends Controller_Base_Admin {

    function before() {
        parent::before();
        // Libs__Util::user_filter();
    }

    //default action
    public function action_get() {
        $menu = $this->request->param('id');
        if ($menu == NULL) {
            self::redirect('private/Error/404');
        }

        $page = Model::factory('Private_Pages')->pagePerMenu($menu, self::$lang);
        if ($page == NULL) {
           // self::redirect('private/Error/404');
        }
        
        //replace paths 
        $page_resources_dir = self::$conf->get('page_resources_dir');
        $content = str_replace('src="', 'src="' . Kohana::$base_url . $page_resources_dir . $page['id'] . "/", $page ['content']);
        $page['content'] = $content;

        //  load  edir page view
        $this->template->page = View::factory('private/pages/pages/edit_page')
                ->bind('page', $page);
    }

    public function action_do_edit() {
        $is_ok = true;
        $error = array();
        $has_image = false;
        $max_siz = self::$conf->get('max_image_size_page');

        # Validate content
        if (isset($_POST['elm1']) && strlen(trim($_POST['elm1'])) > 0) {
            
        } else {
            $is_ok = false;
            $error[] = I18n::get('admin.error.content_required');
        }
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
            $session_id = SESSION::instance()->id();
            $page_resources_dir = self::$conf->get('page_resources_dir');
            $images = array();
            $id = $_POST['id'];

            $content = trim($_POST['elm1']);


            if (isset($_POST ['images'])) {
                $images = $_POST ['images'];
            } else {
                $images = NULL;
            }
            # Sort images
            $all_images = array();
            if ($images != NULL) {
                $all_images = Util::sort_images($content, $images);
            }
            //  Remove unused  images
            if (isset($all_images ['garbage']) && count($all_images ['garbage']) > 0) {
                foreach ($all_images ['garbage'] as $item) {
                    unlink("media/temp/$session_id/" . $item);
                }
            }
            if (isset($all_images ['usefull']) && count($all_images ['usefull']) > 0) {
                $images = $all_images ['usefull'];
            }

            $content = str_replace("../../../media/temp/$session_id/", "", $content);
            $content = str_replace("../../../" . $page_resources_dir . $id . "/", "", $content);


            $page = array();
            $page['content'] = $content;
            $page['id'] = $id;
            if ($has_image) {
                $page['image'] = $_FILES['image']['name'];
            }
            ############  SEO  block  ########################
            if(isset($_POST['meta_title'])){
            	$page['meta_title'] =Libs_Validation::clean($_POST['meta_title']);
            }
            if(isset($_POST['meta_keywords'])){
            	$page['meta_keywords'] =Libs_Validation::clean($_POST['meta_keywords']);
            }
            if(isset($_POST['meta_description'])){
            	$page['meta_description'] =Libs_Validation::clean($_POST['meta_description']);
            }
            ############ END  SEO  block  ########################
            
            $result = Model::factory('Private_Pages')->edit($page, $images);
            //  todo message  
            self::redirect('private/dashboard');
        } else {
        $id = $_POST['id'];
            $result = Model::factory('Pages')->getPageById($id);
            if ($result != NULL) {
                $page = $result[0];
                $content = str_replace('src="', 'src="' . Kohana::$base_url . $page_resources_dir . $page['id'] . "/", $page ['content']);
                $page['content'] = $content;
                $this->template->conteiner = View::factory('admin/pages/w_edit_page')
                        ->bind('page', $page)
                        ->bind('error', $error);
            } else {
                $this->template->conteiner = View::factory('error/404');
            }
        }
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
        if (isset($_POST['username']) && !Libs_Validation::is_empty($_POST['username'])) {
            $user['username'] = trim($_POST['username']);
        } else {
            $is_ok = false;
            $errors[] = I18n::get('admin.error.required_username');
        }

        if (isset($_POST['password']) && !Libs_Validation::is_empty($_POST['password'])) {
            $user['password'] = trim($_POST['password']);
        } else {
            $is_ok = false;
            $errors[] = I18n::get('admin.error.required_password');
        }

        if (isset($_POST['confirm']) && !Libs_Validation::is_empty($_POST['confirm'])) {
            //$user['confirm']=trim($_POST['confirm']);
        } else {
            $is_ok = false;
            $errors[] = I18n::get('admin.error.required_confirm');
        }
        if ($is_ok) {
            if ($user['password'] != trim($_POST['confirm'])) {
                $is_ok = false;
                $errors[] = I18n::get('admin.error.pass_conf_matching');
            }
        }

        if ($is_ok) {
            $user['id'] = $_POST['id'];
            $user['password'] = md5($user['password']);
            $result = Model::factory('Private_Auth')->edit_profile($user);
            self::redirect('private/auth');
        } else {
            $session = SESSION::instance();
            $current_user = $session->get('user');
            $this->template->page = View::factory('private/pages/profile')
                    ->bind('user', $current_user)
                    ->bind('errors', $errors);
        }
    }

}

// End Dashboard
