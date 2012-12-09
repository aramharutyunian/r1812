<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of libs_validation
 *
 * @author Aramjan
 */
class Libs_Validation {


    //  Validate mysql srtandart date format yyyy-mm-dd
    static function valid_date($date) {
        if (preg_match('/^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$/', $date)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    //  Validate mysql standart time format hh:mi
    static function valid_time($date) {
        if (preg_match('/^[0-9]{2}[:][0-9]{2}$/', $date)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    //  validate custom regexp  
    static function valid_regexp($regexp, $data) {
        if (preg_match($regexp, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    //  required field
    static function is_empty($data){
        if(strlen(trim($data))>0){
            return false;
        }else{
            return true;
        }
    }
    
    /**
     * @desc  trim and clean xss 
     * @param type $data
     *  @return string
     */
    static function clean($data){
        return(htmlspecialchars(trim($data)));
    }
    
    

}

?>
