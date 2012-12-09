<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Private_News extends Model {

    /*
     *   1.getNews($lang)
     *   2.getNewsbyId() 
     *   3.add  
     *   4.edit
     *   5.delete
     */
    
    /*
     * Getting all news by language
     */
    function getNews($lang) {
        $sqlQuery = "SELECT * FROM `news`
                      WHERE `lang_id` = :lang 
                      ORDER BY date_of_creation DESC";

        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':lang', $lang);

        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return null;
        }
    }

    /*
     * Getting news by id and language
     */
    function getNewsById($id, $lang) {
        $sqlQuery = "SELECT * FROM `news`
                      WHERE `lang_id` = :lang AND id = :id;";

        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':lang', $lang)
                ->bind(':id', $id);

        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return null;
        }
    }

    /*
     * add news
     */
    function add($news, $news_image) {
        $db = Database::instance();
        
        $session =  session::instance();
    	$session_id = $session->id();
        
        $config = Kohana::$config->load('main');
        $news_dir = $config->get('news_resources_dir');
        try {
            $db->begin();
            $query = DB::insert('news', array_keys($news))->values(array_values($news));

            $result = $query->execute();
            $id = $result[0];

            if (!is_dir($news_dir . $id)) {
                    mkdir($news_dir . $id);
                    chmod($news_dir . $id, 0777);
                }
            
            if (isset($news['image']) && $news['image'] != NULL) {
                move_uploaded_file($_FILES['image']['tmp_name'], $news_dir . $id . '/' . $news['image']);
            }
            
            //  move images  to page individual dir
            if ($news_image != null) {
                foreach ($news_image as $image) {
                    rename("media/temp/$session_id/" . $image, $news_dir . $id . "/" . $image);
                }
            }
            
            $db->commit();
        } catch (Exception $e) {
            $db->rollback();
            throw new Exception($e);
//            throw new Exception('Can not insert article', $e->getCode(), $e->getTraceAsString());
        }
    }

    /*
     * edit news
     */
    function edit($news, $news_image) {
        try {
            $db = Database::instance();
            $config = Kohana::$config->load('main');
            $news_image_dir = $config->get('news_resources_dir');
            $session = session::instance();
            $session_id = $session->id();
            $id = $news['id'];
            $query = DB::update('news')->set($news)->where('id', '=', $news['id']);
            $status = $query->execute();

            if (!is_dir($news_image_dir . $id)) {
                    mkdir($news_image_dir . $id);
                    chmod($news_image_dir . $id, 0777);
                }
            
            if (isset($news['image']) && $news['image'] != NULL) {
                move_uploaded_file($_FILES['image']['tmp_name'], $news_image_dir . $id . "/" . $news['image']);
            }
            
            //  move images  to page individual dir
            if ($news_image != null) {
                foreach ($news_image as $image) {
                    rename("media/temp/$session_id/" . $image, $news_image_dir . $id . "/" . $image);
                    unlink("media/temp/$session_id/" . $image);
                }
            }
            
            $db->commit();
            return count($status);
        } catch (Exception $e) {
            $db->rollback();
        }
    }

    /*
     * Delete news by id
     */
    function delete($id) {
        try {
            $db = Database::instance();
            $config = Kohana::$config->load('main');
            $news_image_dir = $config->get('news_resources_dir');

            $db->begin();

            $sqlQuery = "DELETE FROM news WHERE `id` = :id";
            $query = DB::query(Database::DELETE, $sqlQuery)
                    ->bind(':id', $id);

            $status = $query->execute();

            if (is_dir($news_image_dir . $id)) {
                $fiels = Util::getFileList($news_image_dir . $id);
                foreach ($fiels as $value) {
                    unlink($news_image_dir . $id . '/' . $value);
                }
                Util::destroy($news_image_dir . $id);
            }

            $db->commit();
        } catch (Exception $e) {
            $db->rollback();
            throw new Exception($e);
        }
    }
}