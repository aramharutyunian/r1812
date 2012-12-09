<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Base_Admin extends Controller_Template {

    public $template ='private/layouts/v_layout';
    public static $lang;
    public static  $conf;

    function before() {
        parent::before();
        

        $session = SESSION::instance();
        //  load main configurations
        self::$conf = Kohana::$config->load('main');
         
         $default_lang = self::$conf->get('default_lang');
        //  Language manager
        if (isset($_POST['lang'])) {
            $lng = $_POST['lang'];
            $session->bind('lng', $lng);
            $uri = Request::detect_uri();
            self::redirect($uri);
        } else {
            $lng = $session->get('lng');
            if ($lng != NULL) {
               self::$lang = $lng;
            } else {
                $lng = $default_lang;
                $session->set('lng', $lng);
                self::$lang = $lng;
            }
        }
        
        I18n::lang($lng);
        
        //$this->template->lang = self::$lang;
        
        
        /**
         * include  view's  which same for  all admin pages 
         * 1.preheader
         * 2.header
         * 3.footer
         * 4. end  of html (html footer)
         */
        
        $this->template->html_header = View::factory('private/tiles/header');
        
        /**
         * Header
         * 1.language switcher
         * 2.menu
         * 3.top info  block
         */
        $top_info_block = View::factory('private/widgets/top_info_block');
        //  Get active languages  from database (lang_lcp table)
        $active_languages = Model::factory('Private_lang')->getAll();
        $language_switcher = View::factory('private/widgets/language_switcher')
        									->bind('languages',$active_languages)
        									->bind('current_lang',self::$lang);
        
        //   get  good's  menu
        $good_menu =Model::factory("Private_Menu")->all(self::$lang);
        //  get menu's  which has  content
        $menus = Model::factory('Private_Menus')->get_hes_content(self::$lang);
        $menu = View::factory('private/widgets/menu')
        ->bind('pages', $menus)
        ->bind("good_menu", $good_menu);
        
        
        
        $this->template->header =View::factory('private/widgets/header')
        				->bind('language_switcher', $language_switcher)
        				->bind('menu',$menu)
        			    ->bind('top_info_block',$top_info_block);
        
        $this->template->footer =View::factory('private/widgets/footer');
        $this->template->html_footer =View::factory('private/tiles/footer');

        /**
         * Init main page
         */ 
        $this->template->page =NULL;
        
        

    }

    public function action_index() {

    }

}

// End Welcome
