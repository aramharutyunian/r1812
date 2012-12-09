<?php

defined('SYSPATH') or die('No direct script access.');

class Libs__Util {

    //return date format by country 
    static function dateFormat($lang, $date) {
        switch ($lang) {
            case 'ru':
                $date = Date::formatted_time($date, 'd.m.Y');
                break;

            case 'en':
                $date = Date::formatted_time($date, 'd/m/Y');
                break;

            case 'am':
                $date = Date::formatted_time($date, 'd.m.Y');
                break;

            case 'de':
                $date = Date::formatted_time($date, 'd.m.Y');
                break;

            case 'es':
                $date = Date::formatted_time($date, 'd/m/Y');
                break;

            case 'fr':
                $date = Date::formatted_time($date, 'd/m/Y');
                break;

            case 'it':
                $date = Date::formatted_time($date, 'd/m/Y');
                break;

            default :
                break;
        }
        return $date;
    }

    /**
     * @desc  Validate incomming image 
     * @param type $path
     * @return type 
     */
    static function isValidImage($path) {
        try {
            $file = file_get_contents($path, true);
            if (!@imagecreatefromstring($file)) {
                unlink($path);
                unset($file);
                return FALSE;
            } else {
                unset($file);
                return TRUE;
            }
        } catch (Exception $e) {
            unset($file);
        }
    }

    /**
     * @desc sort  images for garbage and usefull images
     * @param type $content
     * @param type $images
     * @return type asos array
     */
    static function sort_images($content, $images) {
        $garbages = array();
        $usefull_images = array();
        foreach ($images as $image) {
            $pos = strpos($content, $image);
            if ($pos === false) {
                $garbages [] = $image;
            } else {
                $usefull_images [] = $image;
            }
        }
        $result = array('garbage' => $garbages, 'usefull' => $usefull_images);
        return $result;
    }

    /**
     *
     * @param type $images
     * @param type $articleId 
     * @return type void
     */
    static function move_articles_images($images, $articleId) {
        $CI = get_instance();
        $article_images_dir = $CI->config->item('article_images_dir');
        foreach ($images as $image) {
            rename('media/temp/images/' . $image, $article_images_dir . $image);
        }
    }

    /**
     * @Desc   move all attachments form temp directory to article home directory
     * @param type $attachments
     * @param type $articleId 
     * @return type void
     */
    static function move_attachments($attachments, $articleId) {
        $CI = get_instance();
        $article_attachment_dir = $CI->config->item('article_attachments_dir');
        foreach ($attachments as $attachment) {
            rename('media/temp/attachments/' . $attachment->getTitle(), $article_attachment_dir . $attachment->getTitle());
        }
    }

    static function getFileList($directory) {
        // create an array to hold directory list
        $results = array();
        // create a handler for the directory
        $handler = opendir($directory);
        // open directory and walk through the filenames
        while ($file = readdir($handler)) {
            // if file isn't this directory or its parent, add it to the results
            if ($file != "." && $file != ".." && $file != ".svn") {
                $results [] = $file;
            }
        }
        // tidy up: close the handler
        closedir($handler);
        return $results;
    }

    static function destroy($dir) {
        $d = dir($dir);
        while ($entry = $d->read()) {
            if ($entry != "." && $entry != "..") {
                unlink($dir . "/" . $entry);
            }
        }
        $d->close();
        rmdir($dir);
    }

    static function empty_folder($dir) {
        $d = dir($dir);
        while ($entry = $d->read()) {
            if ($entry != "." && $entry != "..") {
                unlink($dir . "/" . $entry);
            }
        }
        $d->close();
    }

    static function getTable($tables, $id) {
        if ($tables != null) {
            foreach ($tables as $current) {
                if ($current['id'] == $id) {
                    return $current['status'];
                }
            }
        }
        return NULL;
    }

    static function user_filter() {
        $session = SESSION::instance();
        $user = $session->get('user');
        if ($user == NULL) {
            $request = Request::factory();
            $request->redirect('private/auth/logout');
        }
    }

}