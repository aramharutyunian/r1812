<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Private_Gallery extends Model {
    /*
     * @desc  Getting album title
     * @return array
     * @param type $lang 
     */

    public function getAlbumTitle($lang) {
        $sqlQuery = "SELECT *
                      FROM album_types
                       WHERE `lang_id` = :lang";

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
     * @desc  Getting album list
     * @return array
     * @param type $lang 
     */

    public function getAlbumList($lang) {
        $sqlQuery = "SELECT *
                      FROM albums
                       WHERE `lang_id` = :lang";

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
     * @desc  Getting album by id
     * @return array
     * @param type $id 
     */

    public function getAlbumById($id) {
        $sqlQuery = "SELECT *  
                      FROM albums
                       WHERE  id=:id;";

        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(':id', $id);

        $result = $query->execute()->as_array();

        if (count($result) > 0) {
            return $result;
        } else {
            return null;
        }
    }

    /*
     * @desc  Add album
     * @param type array 
     */

    public function addAlbum($gallery) {
        $db = Database::instance();
        $config = Kohana::$config->load('main');
        $gallery_dir = $config->get('gallery_resources_dir');

        try {
            $db->begin();
            $query = DB::insert('albums', array_keys($gallery))->values(array_values($gallery));

            $result = $query->execute();

            $id = $result[0];
            if (!is_dir($gallery_dir . $id)) {
                mkdir($gallery_dir . $id);
                chmod($gallery_dir . $id, 0777);
            }

            $db->commit();
        } catch (Exception $e) {
            $db->rollback();
        }
    }

    /*
     * @desc Edit album
     * @param type array
     */

    public function edit_album($gallery) {
        $db = Database::instance();

        try {
            $id = $gallery['id'];
            $query = DB::update('albums')->set($gallery)->where('id', '=', $id);
            $status = $query->execute();

            $db->commit();
            return count($status);
        } catch (Exception $e) {
            $db->rollback();
            throw new Exception($e);
        }
    }

    /*
     * @desc  Delete album by id
     * @param type $id 
     */

    public function delete_albums($id) {
        $config = Kohana::$config->load('main');
        $gallery_dir = $config->get('gallery_resources_dir');

        try {
            $db = Database::instance();
            $db->begin();
            $sqlQuery = "DELETE FROM albums  WHERE id =:id ";
            $sqlDeleteImages = "DELETE FROM images  WHERE album_id =:id ";

            $query = DB::query(Database::DELETE, $sqlQuery);
            $query->param(":id", $id);

            $deleteImages = DB::query(Database::DELETE, $sqlDeleteImages);
            $deleteImages->param(":id", $id);

            $result = $deleteImages->execute();
            $status = $query->execute();

            if (is_dir($gallery_dir . $id)) {
                # get gallery dir's list
                $fiels = Util::getFileList($gallery_dir . $id);
                foreach ($fiels as $value) {
                    if (is_dir($gallery_dir . $id . '/' . $value)) {
                        # get thumb dir's list
                        $thumbs_files = Util::getFileList($gallery_dir . $id . '/' . $value);
                        foreach ($thumbs_files as $thumbs_files_value) {
                            # delete thumb dir's files
                            unlink($gallery_dir . $id . "/" . $value . "/" . $thumbs_files_value);
                        }
                        # delete thumb dir
                        Util::destroy($gallery_dir . $id . "/" . $value);
                    } else {
                        #delete gallery dir's files
                        unlink($gallery_dir . $id . '/' . $value);
                    }
                }
                #delete gallery dir
                Util::destroy($gallery_dir . $id);
            }

            $db->commit();
            return count($status);
        } catch (Exception $e) {
            $db->rollback();
            throw new Exception($e);
        }
    }

    /**
     * getting image list by album id
     */
    public function getImageList($lang, $id) {
        $sqlQuery = "SELECT im.*,al.lang_id FROM images AS im
                      INNER JOIN albums AS al
                      ON im.album_id = al.id
                       WHERE im.album_id = :id
                       AND al.lang_id = :lang;";
        $query = DB::query(Database::SELECT, $sqlQuery)
                        ->bind(":id", $id)->bind(":lang", $lang);
        $result = $query->execute()->as_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * adding image
     */
    public function addImage($images) {
        $session = Session::instance();
        $session_id = $session->id();
        $db = Database::instance();

//        $imageSrc = $images['src'];
//        $pathInfo = pathinfo($images['src']);
//        $extension = $pathInfo['extension'];
//        $randomImageName = Text::random();
//        $images['src'] = $randomImageName.".".$extension;

        $config = Kohana::$config->load('main');
        $gallery_dir = $config->get('gallery_resources_dir');
        $temp_dir = $config->get("temp_image_dir") . $session_id . "/";

        try {
            $db->begin();
            $query = DB::insert('images', array_keys($images))->values(array_values($images));

            $result = $query->execute();

            $id = $images['album_id'];
            if (!is_dir($gallery_dir . $id)) {
                mkdir($gallery_dir . $id);
                chmod($gallery_dir . $id, 0777);
            }


//            rename($temp_dir . $imageSrc, $gallery_dir . $id . '/' . $images['src']);
            rename($temp_dir . $images['src'], $gallery_dir . $id . '/' . $images['src']);


            if (!is_dir($gallery_dir . $id . "/thumbs")) {
                mkdir($gallery_dir . $id . "/thumbs");
                chmod($gallery_dir . $id . "/thumbs", 0777);
            }

//            rename($temp_dir . "thumb_" . $imageSrc, $gallery_dir . $id . '/' . "thumbs/thumb_" . $images['src']);
            rename($temp_dir . "thumb_" . $images['src'], $gallery_dir . $id . '/' . "thumbs/thumb_" . $images['src']);

            $db->commit();
        } catch (Exception $e) {
            $db->rollback();
            throw new Exception($e);
        }
    }

    /*
     * @desc Edit image  by id
     */

    public function getImageById($id) {
        $sqlQuery = "SELECT * FROM images
                      WHERE id = :id;";
        $query = DB::query(Database::SELECT, $sqlQuery)
                ->bind(":id", $id);
        $result = $query->execute()->as_array();

        if (count($result) > 0) {
            return $result;
        } else {
            return null;
        }
    }

    /*
     * Update image by id
     */

    public function editImage($images, $oldImageSrc) {
        $session = Session::instance();
        $session_id = $session->id();
        $db = Database::instance();

        if ($oldImageSrc == null || $oldImageSrc != $images['src']) {
            $imageSrc = $images['src'];
            $pathInfo = pathinfo($images['src']);
            $extension = $pathInfo['extension'];
            $randomImageName = Text::random();
            $images['src'] = $randomImageName.".".$extension;
        }

        $config = Kohana::$config->load('main');
        $gallery_dir = $config->get('gallery_resources_dir');
        $temp_dir = $config->get("temp_image_dir") . $session_id . "/";

        try {
            $db->begin();
            $query = DB::update('images')->set($images)->where('id', '=', $images['id']);

            $result = $query->execute();

            $id = $images['album_id'];
            
            if (!is_file($gallery_dir . $id . "/" . $images['src'])) {

                if ($oldImageSrc != null) {
                    #remove old image and thumb_image
                    unlink($gallery_dir . $id . "/" . $oldImageSrc);
                    unlink($gallery_dir . $id . "/thumbs/thumb_" . $oldImageSrc);
                }

                if (!is_dir($gallery_dir . $id)) {
                    mkdir($gallery_dir . $id);
                    chmod($gallery_dir . $id, 0777);
                }
                
                # move image by temp dir to gallery dir
                rename($temp_dir . $imageSrc, $gallery_dir . $id . '/' . $images['src']);
//                rename($temp_dir . $images['src'], $gallery_dir . $id . '/' . $images['src']);

                if (!is_dir($gallery_dir . $id . "/thumbs")) {
                    mkdir($gallery_dir . $id . "/thumbs");
                    chmod($gallery_dir . $id . "/thumbs", 0777);
                }
                
                # move thumb_image by temp dir to gallery dir
                rename($temp_dir . "thumb_" . $imageSrc, $gallery_dir . $id . '/' . "thumbs/thumb_" . $images['src']);
//                rename($temp_dir . "thumb_" . $images['src'], $gallery_dir . $id . '/' . "thumbs/thumb_" . $images['src']);
            }

            $db->commit();
        } catch (Exception $e) {
            $db->rollback();
            throw new Exception($e);
        }
    }

    /*
     * @desc  Delete image by id
     * @param type $id
     */

    public function delete_image($image, $album_id) {
        $config = Kohana::$config->load('main');
        $gallery_dir = $config->get('gallery_resources_dir');

        try {
            $db = Database::instance();
            $db->begin();

            $sqlQuery = "DELETE FROM images  WHERE id =:id ";

            $query = DB::query(Database::DELETE, $sqlQuery);
            $query->param(":id", $image['id']);

            $status = $query->execute();

            if (is_dir($gallery_dir . $album_id)) {
                unlink($gallery_dir . $album_id . '/' . $image['src']);
                unlink($gallery_dir . $album_id . '/thumbs/thumb_' . $image['src']);
            }

            $db->commit();
            return count($status);
        } catch (Exception $e) {
            $db->rollback();
            throw new Exception($e);
        }
    }

}
