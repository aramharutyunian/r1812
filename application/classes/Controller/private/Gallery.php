<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Private_Gallery extends Controller_Base_Admin {

    function before() {
        parent::before();
    }

    function action_index() {
        self::redirect("private/gallery/album_list");
    }

    /*
     * Album list by language
     */

    function action_album_list() {
        $session = Session::instance();
        $lang = $session->get('lng');
        $album_list = Model::factory('Private_Gallery')
                ->getAlbumList($lang);
        $this->template->page = View::factory('private/pages/gallery/album_list')
                ->bind('album_list', $album_list);
    }

    /*
     * Open add album page
     */

    function action_add_album() {
        $session = Session::instance();
        $lang = $session->get('lng');
        //getting album type title
        $album_title = Model::factory('Private_Gallery')
                ->getAlbumTitle($lang);
        $this->template->page = View::factory('private/pages/gallery/add_album')
                ->bind('album_title', $album_title);
    }

    /*
     * Add album
     */

    function action_do_add_album() {
        $session = Session::instance();
        $lang = $session->get('lng');
        $is_ok = true;
        $error = array();
        $gallery = array();

        # Validate album title
        if (empty($_POST['title'])) {
            $is_ok = false;
            $error[] = I18n::get('admin.error.required_title');
        }

        if ($is_ok) {
            ############  SEO  block  ########################
            if (isset($_POST['meta_title'])) {
                $gallery['meta_title'] = Libs_Validation::clean($_POST['meta_title']);
            }
            if (isset($_POST['meta_keywords'])) {
                $gallery['meta_keywords'] = Libs_Validation::clean($_POST['meta_keywords']);
            }
            if (isset($_POST['meta_description'])) {
                $gallery['meta_description'] = Libs_Validation::clean($_POST['meta_description']);
            }
            ############ END  SEO  block  ########################
            if (isset($_POST['title'])) {
                $gallery['title'] = Libs_Validation::clean($_POST['title']);
            }
            if (isset($_POST['elm1'])) {
                $gallery['description'] = Libs_Validation::clean($_POST['elm1']);
            }
            if (isset($_POST['album_type'])) {
                $gallery['type_id'] = Libs_Validation::clean($_POST['album_type']);
            }
            $gallery['lang_id'] = $lang;

            $result = Model::factory('Private_Gallery')->addAlbum($gallery);
            self::redirect("private/gallery/album_list");
        } else {
            $gallery['meta_title'] = $_POST['meta_title'];
            $gallery['meta_keywords'] = $_POST['meta_keywords'];
            $gallery['meta_description'] = $_POST['meta_description'];
            $gallery['title'] = $_POST['title'];
            $gallery['description'] = $_POST['elm1'];
            $gallery['type_id'] = $_POST['album_type'];

            $album_title = Model::factory('Private_Gallery')
                    ->getAlbumTitle($lang);

            $this->template->page = View::factory('private/pages/gallery/add_album')
                    ->bind('errors', $error)
                    ->bind('album_title', $album_title)
                    ->bind('album', $gallery);
        }
    }

    /*
     * Open Edit album page
     */

    function action_edit_album() {
        $album_id = $this->request->param('id');
        $session = Session::instance();
        $lang = $session->get('lng');

        // validate incomming album_id
        if ($album_id == null) {
            self::redirect("private/dashboard");
        }

        // Getting album by id
        $album = Model::factory('Private_Gallery')->getAlbumById($album_id);

        // Getting album type title
        $album_title = Model::factory('Private_Gallery')
                ->getAlbumTitle($lang);

        $this->template->page = View::factory('private/pages/gallery/edit_album')
                ->bind('album_title', $album_title)
                ->bind('album', $album[0]);
    }

    /*
     * Edit album
     */

    function action_do_edit_album() {
        $session = Session::instance();
        $lang = $session->get('lng');
        $is_ok = true;
        $error = array();
        $gallery = array();

        # Validate album title
        if (empty($_POST['title'])) {
            $is_ok = false;
            $error[] = I18n::get('admin.error.required_title');
        }

        if ($is_ok) {
            ############  SEO  block  ########################
            if (isset($_POST['meta_title'])) {
                $gallery['meta_title'] = Libs_Validation::clean($_POST['meta_title']);
            }
            if (isset($_POST['meta_keywords'])) {
                $gallery['meta_keywords'] = Libs_Validation::clean($_POST['meta_keywords']);
            }
            if (isset($_POST['meta_description'])) {
                $gallery['meta_description'] = Libs_Validation::clean($_POST['meta_description']);
            }
            ############ END  SEO  block  ########################
            if (isset($_POST['title'])) {
                $gallery['title'] = Libs_Validation::clean($_POST['title']);
            }
            if (isset($_POST['elm1'])) {
                $gallery['description'] = Libs_Validation::clean($_POST['elm1']);
            }
            if (isset($_POST['album_type'])) {
                $gallery['type_id'] = Libs_Validation::clean($_POST['album_type']);
            }
            $gallery['id'] = $_POST['id'];
            $gallery['lang_id'] = $lang;

            $result = Model::factory('Private_Gallery')->edit_album($gallery);
            self::redirect("private/gallery/album_list");
        } else {
            $gallery['id'] = $_POST['id'];
            $gallery['meta_title'] = $_POST['meta_title'];
            $gallery['meta_keywords'] = $_POST['meta_keywords'];
            $gallery['meta_description'] = $_POST['meta_description'];
            $gallery['title'] = $_POST['title'];
            $gallery['description'] = $_POST['elm1'];
            $gallery['type_id'] = $_POST['album_type'];

            $album_title = Model::factory('Private_Gallery')
                    ->getAlbumTitle($lang);

            $this->template->page = View::factory('private/pages/gallery/edit_album')
                    ->bind('errors', $error)
                    ->bind('album_title', $album_title)
                    ->bind('album', $gallery);
        }
    }

    /*
     * Delete album by id
     */

    function action_delete_album() {
        $album_id = $this->request->param('id');
        //  todo validate incomming album_id
        if ($album_id == NULL) {
            self::redirect("private/dashboard");
        }
        Model::factory('Private_Gallery')->delete_albums($album_id);

        self::redirect("private/gallery/album_list");
    }

    function action_image_list() {
        $session = Session::instance();
        $lang = $session->get('lng');
        $id = $this->request->param("id");
        $image_list = Model::factory('Private_Gallery')
                ->getImageList($lang, $id);
        $this->template->page = View::factory('private/pages/gallery/image_list')
                ->bind('image', $image_list)
                ->bind('album_id', $id);
    }

    function action_add_image() {
        $album_id = $this->request->param('id');
        $this->template->page = View::factory('private/pages/gallery/add_image')
                ->bind('album_id', $album_id);
    }

    /*
     * Add image
     */

    public function action_do_add_image() {
        $session = Session::instance();
        $lang = $session->get('lng');
        $session_id = $session->id();
        $is_ok = true;
        $error = array();
        $has_image = false;
        $max_siz = self::$conf->get('max_image_size_page');

        /*
         * Validate image Name
         */
        if (empty($_POST['title'])) {
            $is_ok = false;
            $error[] = I18n::get('admin.error.name_required');
        }

        /*
         * Validate image src
         */
        if (empty($_FILES['image']['name'])) {
            $is_ok = false;
            $error[] = I18n::get('admin.error.image_required');
        }

        /*
         * Validate image description
         */
        if (empty($_POST['elm1'])) {
            $is_ok = false;
            $error[] = I18n::get('admin.error.description_required');
        }

        /*
         * Image Upload
         */
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
            $lng = $session->get('lng');
            $session_id = $session->id();
            $gallery_resources_dir = self::$conf->get('gallery_resources_dir');
            $id = $_POST['album_id'];
            $title = $_POST['title'];
            $status = $_POST['published'];
            $desc = trim($_POST['elm1']);

//            $src = $_FILES['image']['name'];

            # Get image Random name
            $pathInfo = pathinfo($_FILES['image']['name']);
            $extension = $pathInfo['extension'];
            $randomImageName = Text::random();
            $src = $randomImageName.".".$extension;


            $conf = Kohana::$config->load('main');
            $temp_dir = $conf->get("temp_image_dir") . $session_id . "/";
            move_uploaded_file($_FILES['image']['tmp_name'], $temp_dir . $src);
            $image = Image::factory($temp_dir . $src);
            // resize thumb image
            $width = $conf->get('thumb_w');
            $height = $conf->get('thumb_h');
            $image->resize($width, $height, Image::AUTO);
            $image->save($temp_dir . "thumb_" . $src);
            $image = Image::factory($temp_dir . $src);
            $width = $conf->get('image_w');
            $height = $conf->get('image_h');
            $image->resize($width, $height, Image::AUTO);
            $image->save($temp_dir . $src);
            
            $images = array();
            $images['src'] = $src;
            $images['album_id'] = $id;
            $images['title'] = $title;
            $images['description'] = $desc;
            $images['status'] = $status;


            $result = Model::factory('Private_Gallery')->addImage($images);
            self::redirect('private/gallery/image_list/' . $id);
        } else {
            $images = array();
            $images['album_id'] = $_POST['album_id'];
            $images['title'] = $_POST['title'];
            $images['description'] = trim($_POST['elm1']);
            $images['status'] = $_POST['published'];

            $this->template->page = View::factory('private/pages/gallery/add_image')
                    ->bind('image', $images)
                    ->bind('errors', $error);
        }
    }

    /*
     * Open edit image page
     */

    public function action_edit_image() {
        $id = $this->request->param('param');
        $album_id = $this->request->param('id');

        $image = Model::factory('Private_Gallery')->getImageById($id);
        $this->template->page = View::factory('private/pages/gallery/edit_image')
                ->bind('image', $image[0])
                ->bind('album_id', $album_id);
    }

    /*
     * Edit image
     */

    public function action_do_edit_image() {
        $session = Session::instance();
        $lang = $session->get('lng');
        $session_id = $session->id();
        $is_ok = true;
        $error = array();
        $has_image = false;
        $max_siz = self::$conf->get('max_image_size_page');

        /*
         * Validate image Name
         */
        if (empty($_POST['title'])) {
            $is_ok = false;
            $error[] = I18n::get('admin.error.name_required');
        }

        /*
         * Validate image description
         */
        if (empty($_POST['elm1'])) {
            $is_ok = false;
            $error[] = I18n::get('admin.error.description_required');
        }

        /*
         * Image Upload
         */
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
            $lng = $session->get('lng');
            $session_id = $session->id();
            $id = $_POST['id'];
            $album_id = $_POST['album_id'];
            $title = $_POST['title'];
            $status = $_POST['published'];
            $desc = trim($_POST['elm1']);


            if (!empty($_FILES['image']['name'])) {
//                $src = $_FILES['image']['name'];

                # Get image Random name
                $pathInfo = pathinfo($_FILES['image']['name']);
                $extension = $pathInfo['extension'];
                $randomImageName = Text::random();
                $src = $randomImageName.".".$extension;

                $conf = Kohana::$config->load('main');
                $temp_dir = $conf->get("temp_image_dir") . $session_id . "/";
                move_uploaded_file($_FILES['image']['tmp_name'], $temp_dir . $src);
                $image = Image::factory($temp_dir . $src);
                // resize thumb image
                $width = $conf->get('thumb_w');
                $height = $conf->get('thumb_h');
                $image->resize($width, $height, Image::AUTO);
                $image->save($temp_dir . "thumb_" . $src);
                $image = Image::factory($temp_dir . $src);
                $width = $conf->get('image_w');
                $height = $conf->get('image_h');
                $image->resize($width, $height, Image::AUTO);
                $image->save($temp_dir . $src);
            } else {
                $src = $_POST['src'];
            }

            $images = array();
            $images['id'] = $id;
            $images['album_id'] = $album_id;
            $images['src'] = $src;
            $images['title'] = $title;
            $images['description'] = $desc;
            $images['status'] = $status;

            # get old image src
            $image_src = Model::factory("Private_Gallery")->getImageById($id);

            # call edit image Model
            $result = Model::factory('Private_Gallery')->editImage($images, $image_src[0]['src']);

            self::redirect('private/gallery/image_list/' . $album_id);
        } else {
            $images = array();
            $images['id'] = $_POST['id'];
            $images['album_id'] = $_POST['album_id'];
            $images['title'] = $_POST['title'];
            $images['description'] = trim($_POST['elm1']);
            $images['status'] = $_POST['published'];

            $this->template->page = View::factory('private/pages/gallery/add_image')
                    ->bind('image', $images)
                    ->bind('errors', $error);
        }
    }

    /*
     * delete Image
     */

    public function action_delete_image() {
        $image_id = $this->request->param('param');
        $album_id = $this->request->param('id');
        //  todo validate incomming album_id
        if ($image_id == NULL) {
            self::redirect("private/dashboard");
        }
        $value = Model::factory('Private_Gallery')->getImageById($image_id);

        Model::factory('Private_Gallery')->delete_image($value[0], $album_id);

        self::redirect("private/gallery/image_list/" . $album_id);
    }

}
