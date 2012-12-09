<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Private_Settings  extends Model {

   
    function get($lang) {
        $sqlQuery = "SELECT * FROM `metadata`
                      WHERE `lang_id` = :lang ";

        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':lang', $lang);

        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result[0];
        } else {
            return null;
        }
    }

 
    function seo($settings) {
        try {
            $db = Database::instance();           

            $query = DB::update('metadata')->set($settings)->where('lang_id', '=', $settings['lang_id']);
            //echo Debug::vars((string) $query);
            $status = $query->execute(); 
            $db->commit();
            return count($status);
       } catch (Exception $e) {
            $db->rollback();
        }
    }

   
}