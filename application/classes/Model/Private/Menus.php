<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Private_Menus extends Model {

    /**
     * @desc  get  All   Menus 
     * @return array of menus
     * @param type $lngId 
     */
    function get_all_menus() {
        $sqlQuery = "SELECT *  FROM menu  ORDER BY position";
        $query = DB::query(Database::SELECT, $sqlQuery);
      
        //  Debug query before executing
        //  echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
            }
          else {
            return NULL;
        }
    }
    
   
    /**
     * Get the menus which has a  content 
     * @param type $lng 
     */
    function get_hes_content($lng){
        $sqlQuery = "SELECT *  FROM menu  WHERE lang_id =:lang and hasContent =1 ORDER BY position";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':lang',$lng);
      
        //  Debug query befox executing
        //  echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
            }
          else {
            return NULL;
        }
        
    }
    
    /**
     * @desc  get All menus  
     * @param type $lang
     * @return null 
     */
    function getMenus($lang){
        $sqlQuery = "SELECT *  
                   FROM menu  WHERE lang_id =:lang 
                   ORDER BY position";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':lang',$lang);
      
        //  Debug query befox executing
        //  echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
            }
          else {
            return NULL;
        }
    }

    
}