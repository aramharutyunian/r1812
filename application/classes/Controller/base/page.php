<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Base_Page extends Controller_Template {

    public $template = 'layouts/base';
    public $_lang;

    function before() {
        parent::before();
          $session = SESSION::instance();
        //  Language manager
        if (isset($_POST['lang'])) {
            $lng = $_POST['lang'];

            I18n::lang($lng);
            $session->bind('lng', $lng);
            $uri = Request::detect_uri();
            $this->request->redirect($uri);
        } else {
            $lng = $session->get('lng');
            if ($lng != NULL) {
                I18n::lang($lng);
            } else {
                $lng = I18n::lang();
                $session->set('lng', $lng);
            }
        }
        $this->_lang = $lng;
        
        
        # init  static  contents
        $this->template->header = View::factory("tiles/header");
        $this->template->footer = View::factory("tiles/footer");
        
        # init layout components
        $this->template->header_nav  = NULL;
        $this->template->footer_nav  = NULL;
        $this->template->home_banner = NULL;
        $this->template->top_banner  = NULL;
        $this->template->content     = NULL;
     }

    public function action_index() {
        
    }

}

// End Welcome
