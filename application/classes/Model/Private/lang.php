<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Private_Lang extends Model {

    /**
     * Get all languages 
     * @return languages list
     */
    public function getAll() {
        $sqlQuery = "SELECT * FROM `lang_lcp`
                      WHERE  is_active = 1
            		ORDER BY `sort_index`;";
        $query = DB::query(Database::SELECT, $sqlQuery);

        //  Debug query before executing
        // echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return NULL;
        }
    }

}