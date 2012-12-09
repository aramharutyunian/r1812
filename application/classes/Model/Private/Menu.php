<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Private_Menu extends Model {

    /**
     * @desc  get  All   Menus
     * @return array of Menus
     * @param type $lngId 
     */
    function all($lang) {
        $sqlQuery = "SELECT menus.* 
        		        From menus
                        WHERE menus.lang_id = :lang 
        		         ORDER BY position";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':lang', $lang);

        //  Debug query befox executing
        //  echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return NULL;
        }
    }

    /**
     * @desc  get  Menu by Id
     * @return menu
     * @param type $Id
     */
    function getMenuById($id) {
        $sqlQuery = "SELECT *  FROM menus
				Where  id=:id
    			ORDER BY position";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->param(':id', $id);

        //  Debug query before executing
        //  echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result[0];
        } else {
            return NULL;
        }
    }

    /**
     * @desc  get  category by Id
     * @return menu
     * @param type $Id
     */
    function getCategoryById($id) {
        $sqlQuery = "SELECT *  FROM good_categories
				Where  id=:id";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->param(':id', $id);

        //  Debug query before executing
        //echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result[0];
        } else {
            return NULL;
        }
    }
    
    /**
     * @desc  get  category by Id
     * @return menu
     * @param type $Id
     */
    function getgoodsById($id) {
        $sqlQuery = "SELECT *  FROM goods
				Where  id=:id";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->param(':id', $id);

        //  Debug query before executing
        //echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result[0];
        } else {
            return NULL;
        }
    }
    

    /**
     * @desc  get  Menu by link
     * @return menu
     * @param type link
     */
    function getMenuByLink($param) {
        $sqlQuery = "SELECT *
    			  FROM menus
				  Where  menus.link = :val";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':val', $param);

        //  Debug query before executing
        // echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result[0];
        } else {
            return NULL;
        }
    }

    /**
     * @desc  get  All   Menus
     * @return array of Menus
     * @param type $lngId
     */
    function categories($menu) {
        $sqlQuery = "SELECT `good_categories`.`id`, `good_categories`.`name`,`menus`.`link`
  						FROM `good_categories`
  						INNER  JOIN `menus`
  						ON `menus`.`id` = `good_categories`.`menu_id`
    					WHERE menus.link =:link ";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':link', $menu);

        //  Debug query befox executing
        //  echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return NULL;
        }
    }

    /**
     * @desc  get  all goods
     * @return array of goods
     * @param type $cat
     */
    function goods($cat) {
        $sqlQuery = "SELECT *
  						FROM `goods`
  						WHERE category_id =:cat ";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':cat', $cat);

        //  Debug query befox executing
        //  echo Debug::vars((string) $query);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return NULL;
        }
    }

    public function add_cat($category) {
        $db = Database::instance();
        try {
            $db->begin();
            $query = DB::insert('good_categories', array_keys($category))->values(array_values($category));
            //   echo Debug::vars((string) $query);
            $result = $query->execute();
            $id = $result[0];
            $db->commit();
        } catch (Exception $e) {
            $db->rollback();
            //   throw new Exception('Can not insert article', $e->getCode(), $e->getTraceAsString());
        }
    }

    public function edit_cat($category) {
        try {
            $db = Database::instance();
            $query = DB::update('good_categories')->set($category)->where('id', '=', $category['id']);
            //echo Debug::vars((string) $query);
            $status = $query->execute();
            $db->commit();
            return count($status);
        } catch (Exception $e) {
            $db->rollback();
        }
    }

    public function delete_cat($id) {
        try {
            $db = Database::instance();
            $db->begin();
            $sqlQuery = "DELETE FROM good_categories  WHERE id =:id ";
            $query = DB::query(Database::DELETE, $sqlQuery);
            $query->param(":id", $id);
            //   echo Debug::vars((string) $query);
            $status = $query->execute();
            $db->commit();
            return count($status);
        } catch (Exception $e) {
            $db->rollback();
            //   throwException($e);
        }
    }

    public function add($goods) {
        $db = Database::instance();
        try {
            $db->begin();
            $query = DB::insert('goods', array_keys($goods))->values(array_values($goods));
            //   echo Debug::vars((string) $query);
            $result = $query->execute();
            $id = $result[0];
            $db->commit();
        } catch (Exception $e) {
            $db->rollback();
            //   throw new Exception('Can not insert article', $e->getCode(), $e->getTraceAsString());
        }
    }

    public function edit_menu($menu) {
        $db = Database::instance();
        $config = Kohana::$config->load('main');
        $menu_resources_dir = $config->get('menu_resources_dir');
        $id = $menu['id'];
        try {
            $query = DB::update('menus')->set($menu)->where('id', '=', $id);
            //echo Debug::vars((string) $query);
            $status = $query->execute();

            if (!is_dir($menu_resources_dir . $id)) {
                mkdir($menu_resources_dir . $id);
                chmod($menu_resources_dir . $id, 0777);
            } else {
                $fiels = Util::getFileList($menu_resources_dir . $id);
                foreach ($fiels as $value) {
                    unlink($menu_resources_dir . $id . '/' . $value);
                }
            }

            if (isset($menu['image']) && $menu['image'] != NULL) {
                move_uploaded_file($_FILES['image']['tmp_name'], $menu_resources_dir . $id . "/" . $menu['image']);
            }

            $db->commit();
            return count($status);
        } catch (Exception $e) {
            throw new Exception($e);
            $db->rollback();
        }
    }

    public function edit($good) {
        try {
            $db = Database::instance();
            $query = DB::update('goods')->set($good)->where('id', '=', $good['id']);
            //echo Debug::vars((string) $query);
            $status = $query->execute();
            $db->commit();
            return count($status);
        } catch (Exception $e) {
            throw new Exception($e);
            $db->rollback();
        }
    }

    public function delete($id) {
        try {
            $db = Database::instance();
            $db->begin();
            $sqlQuery = "DELETE FROM goods  WHERE id =:id ";
            $query = DB::query(Database::DELETE, $sqlQuery);
            $query->param(":id", $id);
            //   echo Debug::vars((string) $query);
            $status = $query->execute();
            $db->commit();
            return count($status);
        } catch (Exception $e) {
            $db->rollback();
            //   throwException($e);
        }
    }

}