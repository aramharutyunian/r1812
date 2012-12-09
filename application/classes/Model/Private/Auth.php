<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Private_Auth extends Model {

    /**
     * @desc  Login site admin
     * @return user | array
     * @param  user | array
     */
    function login($user) {
        $sqlQuery = "SELECT *  FROM users WHERE username =:email  and password = :passwd ";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->param(':email', $user['username'])
                ->param(':passwd',md5($user['password']));

        //  Debug query before executing
       //  echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return NULL;
        }
    }

   
 
    
	/**
	 * 
	 * @param assoc  array $user
	 * @return number
	 */
  function edit_profile($user){
      try {
          $db = Database::instance();
        $query = DB::update('users')->set($user)->where('id', '=', $user['id']);
          //  echo Debug::vars((string) $query);
          $status = $query->execute();
          $db->commit();
          return count($status);
     } catch (Exception $e) {
         $db->rollback();
     }
  }

   
}