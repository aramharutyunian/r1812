<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Private_Pages extends Model {

    /**
     * @desc  get  All   Pages 
     * @return array of pages
     * @param type $lngId 
     */
    function pages($lang) {
        $sqlQuery = "SELECT pages.*, menu.title as menu 
                        FROM  pages
                        INNER JOIN menu
                        ON pages.menu_id = menu.id
                        WHERE menu.lang_id = :lang  and menu.hasContent = 1";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':lang', $lang);
      
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
     * @desc  get  pages  per menu
     * @return array of pages
     * @param type link
     */
    function pagePerMenu($link, $lang) {
        $sqlQuery = "SELECT pages.* ,m.`title` as title
                        FROM pages
                        INNER JOIN `menu` m
                       ON pages.`menu_id` = m.`id`
                      WHERE m.`link` =:link  and  m.lang_id = :lang ";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':link', $link)
                ->bind(':lang',$lang);
      
        //  Debug query befox executing
        //  echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result[0];
            }
          else {
            return NULL;
        }
    }
    
    
    /**
     * @desc  get  pages  per menu
     * @return array of pages
     * @param type id
     */
    function pageByMenuId($menu_id, $lang) {
    	$sqlQuery = "SELECT pages.* ,m.`title` as title
                        FROM pages
                        INNER JOIN `menu` m
                       ON pages.`menu_id` = m.`id`
                      WHERE m.`id` =:id  and  m.lang_id = :lang ";
    	$query = DB::query(Database::SELECT, $sqlQuery)
    	->bind(':id', $menu_id)
    	->bind(':lang',$lang);
    
    	//  Debug query befox executing
    	//  echo Debug::vars((string) $query);
    	$result = $query->execute()->as_array();
    	if (count($result) > 0) {
    		return $result[0];
    	}
    	else {
    		return NULL;
    	}
    }
    
    /**
     * @desc edit  page  content
     * @param type $page
     * @param type $images
     * @return type  message  or  exception
     */
    function edit($page, $images) {
    	try {
    		$db = Database::instance();
    		$config = Kohana::$config->load('main');
    		$page_image_dir = $config->get('page_resources_dir');
    		$session =  session::instance();
    		$session_id = $session->id();
    		$id = $page['id'];
    		$query = DB::update('pages')->set($page)->where('id', '=', $page['id']);
    		//    echo Debug::vars((string) $query);
    		$status = $query->execute();
    		//  create  page dir if not exist
    		if (!is_dir($page_image_dir . $id)) {
    			mkdir($page_image_dir . $id);
    			chmod($page_image_dir . $id, 0777);
    		}
                if(isset($page['image']) && $page['image']  != NULL){
                   move_uploaded_file($_FILES['image']['tmp_name'], $page_image_dir . $id . "/" . $page['image']);
                }        
    		//  move images  to page individual dir
    		if ($images != null) {
    			foreach ($images as $image) {
    				rename("media/temp/$session_id/" . $image, $page_image_dir . $id . "/" . $image);
    			}
    		}
    		$db->commit();
    		return count($status);
    	} catch (Exception $e) {
    		$db->rollback();
    	}
    }
   
    
    
    
    
 // --------------------------- to  delete  ------------------------------------------  //
    
    
    function getPageById($id){
         $sqlQuery = "SELECT *  FROM pages WHERE id=:id  ";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':id', $id);
      
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
    function get($id, $lang){
        $sqlQuery = "SELECT id,month(date_of_publish)  as m,
                            year(date_of_publish) as y,
                            day(date_of_publish) as d ,
                            name, content  FROM events WHERE id=:id and   lang_id = :lang";
        $query = DB::query(Database::SELECT, $sqlQuery)
            ->bind(':id', $id)
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


    
    
    function delete($id) {
       try {
            $db = Database::instance();
            $db->begin();
            $config = Kohana::$config->load('main');
            $sqlQuery = "DELETE FROM events  WHERE id =:id ";
            $query = DB::query(Database::DELETE, $sqlQuery);
            $query->param(":id", $id);
            //   echo Debug::vars((string) $query);
            $status = $query->execute();
            $dir =  $config->get('news_dir').$id;           
            Util::destroy($dir);
            $db->commit();
            return count($status);
       } catch (Exception $e) {
            $db->rollback();
         //   throwException($e);
       }
    }

    
}