<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Private_Settings extends Controller_Base_Admin {
   
    function before() {
        parent::before();
    }

    function action_index() {
    	$settings = Model::factory('Private_Settings')->get(self::$lang);
    	$this->template->page = View::factory('private/pages/settings/list')
    										->bind('settings', $settings);
    	
    }

    

    /*
     * Add news
     */

    public function action_seo() {
        $is_ok = true;
       
        $settings = array();
        $settings['lang_id']=self::$lang;
        if(isset($_POST['meta_title'])){
        	$settings['meta_title'] =Libs_Validation::clean($_POST['meta_title']);
        }
        if(isset($_POST['meta_keywords'])){
        	$settings['meta_keywords'] =Libs_Validation::clean($_POST['meta_keywords']);
        }
        if(isset($_POST['meta_description'])){
        	$settings['meta_description'] =Libs_Validation::clean($_POST['meta_description']);
        }
           
            $result = Model::factory('Private_Settings')->seo($settings);

        self::redirect('private/settings');
        
    }

    /*
     * Open edit page
     */

    public function action_edit() {
        $session = Session::instance();
        $lng = $session->get('lng');
        $id = $this->request->param('id');

        $news = Model::factory('Private_News')->getNewsById($id, $lng);
        
        $news[0]['date_of_creation'] = Libs__Util::dateFormat($lng, $news[0]['date_of_creation']);

        $news[0]['content'] = str_replace('src="', 'src="' . Kohana::$base_url . "media/resources/news/" . $id . "/", $news[0]['content']);

        $this->template->page = View::factory('private/pages/news/edit')
                ->bind('news', $news[0])
                ->bind('lang', $lng);
    }

    /*
     * Edit news
     */

    public function action_do_edit() {
        $session = Session::instance();
        $lng = $session->get('lng');

        $is_ok = true;
        $error = array();
        $has_image = false;
        $max_siz = self::$conf->get('max_image_size_page');

        /*
         * Validate News Name
         */
        if (empty($_POST['title'])) {
            $is_ok = false;
            $error[] = I18n::get('admin.error.name_required');
        }

        /*
         * Validate News Date
         */
        if (empty($_POST['datePicker'])) {
            $is_ok = false;
            $error[] = I18n::get('admin.error.date_required');
        }

        /*
         * Validate News Content
         */
        if (empty($_POST['elm1'])) {
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
            $session_id = $session->id();
            $news_resources_dir = self::$conf->get('news_resources_dir');
            $images = array();
            $id = $_POST['id'];
            $title = $_POST['title'];
            $published = $_POST['published'];
            $datePicker = $_POST['datePicker'];
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
            $content = str_replace("../../../" . $news_resources_dir . $id . "/", "", $content);

            $content = str_replace("../../media/temp/$session_id/", "", $content);
            $content = str_replace("../../" . $news_resources_dir . $id . "/", "", $content);

            $page = array();
            $page['id'] = $id;
            $page['name'] = $title;
            $page['content'] = $content;
            $page['lang_id'] = $lng;
            $page['date_of_creation'] = Date::formatted_time($datePicker, 'Y-m-d');
            $page['isPublished'] = $published;

            if ($has_image) {
                $page['image'] = $_FILES['image']['name'];
            }
            $result = Model::factory('Private_News')->edit($page, $images);

            self::redirect('private/News/list');
        } else {
            $news = array();
            $news['id'] = $_POST['id'];
            $news['name'] = $_POST['title'];
            $news['content'] = trim($_POST['elm1']);
            $news['date_of_creation'] = $_POST['datePicker'];
            $news['isPublished'] = $_POST['published'];
            $news['image'] = $_FILES['image']['name'];

            $result = Model::factory('Private_News')->getNewsById($_POST['id'], $lng);

            if ($news['image'] == null) {
                $news['image'] = $result[0]['image'];
            }

            $news['content'] = str_replace('../../../', Kohana::$base_url, $news['content']);

            $this->template->page = View::factory('private/pages/news/edit')
                    ->bind('news', $news)
                    ->bind('lang', $lng)
                    ->bind('errors', $error);
        }
    }

    /*
     * Delete news
     */

    public function action_delete() {
        $id = $this->request->param('id');
        $detete = Model::factory('Private_News')->delete($id);

        self::redirect("private/news/list");
    }

}
