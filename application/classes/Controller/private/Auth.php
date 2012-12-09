<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Private_Auth extends Controller_Base_Admin {

    function before() {
        parent::before();
        $top_info_block = View::factory('private/widgets/top_info_block');

        $active_languages = NULL;
        $menu = NULL;
        $language_switcher = View::factory('private/widgets/language_switcher')
                ->bind('languages', $active_languages)
                ->bind('current_lang', self::$lang);


        $this->template->header = View::factory('private/widgets/header')
                ->bind('language_switcher', $language_switcher)
                ->bind('menu', $menu)
                ->bind('top_info_block', $top_info_block);

        $this->template->footer = View::factory('private/widgets/footer');
        $this->template->html_footer = View::factory('private/tiles/footer');

        /**
         * Init main page
         */
        $this->template->page = NULL;
        // Libs__Util::user_filter();
    }

    //default action
    public function action_index() {
        $this->template->page = View::factory('private/pages/login');
    }

    public function action_login() {
        $this->template->page = View::factory('private/pages/login');
    }

    public function action_do_login() {
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


        if ($is_ok) {
            $result = Model::factory('Private_Auth')->login($user);
            if ($result != NULL) {
                $session = SESSION::instance();
                $session->set('user', $result[0]);
                // make  temp dir for user
                if (!file_exists('media/temp/' . $session->id())) {
                    mkdir('media/temp/' . $session->id());
                    chmod('media/temp/' . $session->id(), 0777);
                }
                self::redirect('private/dashboard');
            } else {
                $errors[] = I18n::get('admin.error.invalid_us_pass');
                $this->template->page = View::factory('private/pages/login')
                        ->bind('errors', $errors);
            }
        } else {
            $this->template->page = View::factory('private/pages/login')
                    ->bind('errors', $errors);
        }
    }

}

// End Dashboard
