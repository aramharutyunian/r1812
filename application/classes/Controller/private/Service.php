<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Private_Service extends Controller {

    function before() {
        parent::before();
        // Libs__Util::user_filter();
    }

    /**
     * @desc Load  image from ajax request, resize and  save in temp directory
     * @return  json  object (status, message)
     */
    public function action_page() {
        # flag variable  if  0  all Ok, if  not  it's  error
        $state = 0;
        $message = '';
        #  create  a  instance of session object
        $session = Session::instance();
        $session_id = $session->id();
        # load  main configuration  
        $conf = Kohana::$config->load('main');

        $max_allowed_image_size = $conf->get('max_image_size_page');
        # generate  random name  for image 
        $random_name = text::random($type = 'alnum', $length = 10);

        $new_image_name = "Image" . $random_name . ".jpg";
        #  get image  from  ajax post request
        if ($_FILES ['uploadfile'] ['error'] == 0) {
            #  validate image
            if (Util:: isValidImage($_FILES ['uploadfile'] ['tmp_name'])) {
                if (filesize($_FILES ['uploadfile'] ['tmp_name']) > $max_allowed_image_size) { //Image size max 3 MB
                    $message = I18n::get('admin.error.image_size');
                    unlink($_FILES ['uploadfile'] ['tmp_name']);
                    $state = 1;
                } else {
                    #  get image demisions and  resize if nesesuary 
                    list ( $width, $height, $type, $attr ) = getimagesize($_FILES ['uploadfile'] ['tmp_name']);
                    move_uploaded_file($_FILES ['uploadfile'] ['tmp_name'], "media/temp/$session_id/$new_image_name");
                    $image = Image::factory("media/temp/$session_id/$new_image_name");
                    $scaleWidth = $width;
                    $scaleHeight = $height;
                    if ($width > 400) {
                        $scaleWidth = 400;
                        $scaleHeight = ceil(($scaleWidth * $height) / $width);
                    }
                    $image->resize($scaleWidth, $scaleHeight, Image::AUTO);
                    $image->save();
                    $message = $new_image_name;
                }
            } else {
                #  error is occurred
                $state = 1;
                $message = I18n::get('admin.error.image_type');
            }
        } else {
            # error is occurred
            $state = 1;
            $message = $_FILES ['uploadfile'] ['error'];
        }

        $result = array('state' => $state, 'message' => $message, 'session_id' => $session_id);
        #  responce  json object
        echo json_encode($result);
    }

    /**
     * @desc Load  image from ajax request, resize and  save in temp directory
     * @return  json  object (status, message)
     */
    public function action_news() {
        # flag variable  if  0  all Ok, if  not  it's  error
        $state = 0;
        $message = '';
        #  create  a  instance of session object
        $session = Session::instance();
        $session_id = $session->id();
        # load  main configuration  
        $conf = Kohana::$config->load('main');

        $max_allowed_image_size = $conf->get('max_image_size_page');
        # generate  random name  for image 
        $random_name = text::random($type = 'alnum', $length = 10);

        $new_image_name = "Image" . $random_name . ".jpg";
        #  get image  from  ajax post request
        if ($_FILES ['uploadfile'] ['error'] == 0) {
            #  validate image
            if (Util:: isValidImage($_FILES ['uploadfile'] ['tmp_name'])) {
                if (filesize($_FILES ['uploadfile'] ['tmp_name']) > $max_allowed_image_size) { //Image size max 3 MB
                    $message = I18n::get('admin.error.image_size');
                    unlink($_FILES ['uploadfile'] ['tmp_name']);
                    $state = 1;
                } else {
                    #  get image demisions and  resize if nesesuary 
                    list ( $width, $height, $type, $attr ) = getimagesize($_FILES ['uploadfile'] ['tmp_name']);
                    move_uploaded_file($_FILES ['uploadfile'] ['tmp_name'], "media/temp/$session_id/$new_image_name");
                    $image = Image::factory("media/temp/$session_id/$new_image_name");
                    $scaleWidth = $width;
                    $scaleHeight = $height;
                    if ($width > 400) {
                        $scaleWidth = 400;
                        $scaleHeight = ceil(($scaleWidth * $height) / $width);
                    }
                    $image->resize($scaleWidth, $scaleHeight, Image::AUTO);
                    $image->save();
                    $message = $new_image_name;
                }
            } else {
                #  error is occurred
                $state = 1;
                $message = I18n::get('admin.error.image_type');
            }
        } else {
            # error is occurred
            $state = 1;
            $message = $_FILES ['uploadfile'] ['error'];
        }

        $result = array('state' => $state, 'message' => $message, 'session_id' => $session_id);
        #  responce  json object
        echo json_encode($result);
    }

}

// End Service
