<?php defined('SYSPATH') or die('No direct script access.');

class Util {
   
    
  
/**
 * @desc  Validate incomming image 
 * @param type $path
 * @return type 
 */
static  function isValidImage($path) {
	try {
		$file = file_get_contents ( $path, true );
		if (! @imagecreatefromstring ( $file )) {
			unlink ( $path );
			unset ( $file );
			return FALSE;
		} else {
			unset ( $file );
			return TRUE;
		}
	} catch ( Exception $e ) {
		unset ( $file );
	}
}

/**
 * @desc sort  images for garbage uand usefull images
 * @param type $content
 * @param type $images
 * @return type asos array
 */
static  function sort_images($content, $images) {
	$garbages = array ();
	$usefull_images = array ();
	foreach ( $images as $image ) {
		$pos = strpos ( $content, $image );
		if ($pos === false) {
			$garbages [] = $image;
		} else {
			$usefull_images [] = $image;
		}
	
	}
	$result = array ('garbage' => $garbages, 'usefull' => $usefull_images );
	return $result;
}

/**
 *
 * @param type $images
 * @param type $articleId 
 * @return type void
 */
static  function move_articles_images($images, $articleId) {
	$CI = get_instance ();
	$article_images_dir = $CI->config->item ( 'article_images_dir' );
	foreach ( $images as $image ) {
		rename ( 'media/temp/images/' . $image, $article_images_dir . $image );
	}
}

/**
 * @Desc   move all attachments form temp directory to article home directory
 * @param type $attachments
 * @param type $articleId 
 * @return type void
 */
static  function move_attachments($attachments, $articleId) {
	$CI = get_instance ();
	$article_attachment_dir = $CI->config->item ( 'article_attachments_dir' );
	foreach ( $attachments as $attachment ) {
		rename ( 'media/temp/attachments/' . $attachment->getTitle (), $article_attachment_dir . $attachment->getTitle () );
	}
}

static  function remove_base_url_from_images($content) {
	$content = str_replace ( "../../media/images/temp/", "", $content );
	return $content;
}

static  function getFileList($directory) {
	// create an array to hold directory list
	$results = array ();
	// create a handler for the directory
	$handler = opendir ( $directory );
	// open directory and walk through the filenames
	while ( $file = readdir ( $handler ) ) {
		// if file isn't this directory or its parent, add it to the results
		if ($file != "." && $file != ".." && $file != ".svn") {
			$results [] = $file;
		}
	}
	// tidy up: close the handler
	closedir ( $handler );
	return $results;
}

static  function sendContactMail($email, $name, $companyname, $phone, $message, $apply) {
	$ci = & get_instance ();
	$ci->load->library ( 'email' );
	$ci->email->set_newline ( "\r\n" );
	$ci->email->from ( "gedf@info.am", "gedf" );
	$ci->email->to ( $apply );
	$ci->email->subject ( "Contact message" );
	$ci->email->message ( "<div style='color: gray;font-size: 14px;font-style: italic'>Name:  " . $name . "<br>" . "Company Name:  " . $companyname . "<br>" . "Email:  " . $email . "<br>" . "Contact:  " . $phone . "</div><br><hr/>" . $message );
	if (! $ci->email->send ()) {
		throw new Exception ();
	} else {
		return true;
	}
}
/**
 * 
 * Remove the specific  directories for article
 * @param unknown_type $articleId
 * @throws Exception
 */
static  function remove_article_dir($articleId) {
	$ci = get_instance ();
	// get Article's images and attachments directories
	$article_attachments_dir = $ci->config->item ( "article_attachments_dir" );
	$article_images_dir = $ci->config->item ( "article_images_dir" );
	//  remove Article image and atatchment dirs
	destroy ( $article_attachments_dir . $articleId );
	destroy ( $article_images_dir . $articleId );

}

static  function destroy($dir) {
	$d = dir ( $dir );
	while ( $entry = $d->read () ) {
		if ($entry != "." && $entry != "..") {
			unlink ( $dir . "/" . $entry );
		}
	}
	$d->close ();
	rmdir ( $dir );
}

static  function remove_news_dir($newsId) {
	$ci = get_instance ();
	// get news images and thumb directories
	$news_image_dir = $ci->config->item ( "news_images_dir" );
	$news_thumb_dir = $ci->config->item ( "news_images_dir" ) . $newsId . "/thumb/";
	//  remove News image and thumb dirs
	destroy ( $news_thumb_dir );
	destroy ( $news_image_dir . $newsId );

}

static function empty_folder($dir) {
	$d = dir ( $dir );
	while ( $entry = $d->read () ) {
		if ($entry != "." && $entry != "..") {
			unlink ( $dir . "/" . $entry );
		}
	}
	$d->close ();
}

static function getTable($tables, $id){
    if($tables !=  null){
    foreach ($tables as $current) {
        if($current['id'] == $id){
            return $current['status'];
        } 
    }
    
    }
    return NULL;
}


static  function user_filter(){
    $session = SESSION::instance();
    $user = $session->get('user');
    if ($user == NULL) {
       $request = Request::factory();
        $request->redirect('private/auth/logout');
   } 
}



static function html_cut($text, $max_length)
{
    $tags   = array();
    $result = "";

    $is_open   = false;
    $grab_open = false;
    $is_close  = false;
    $in_double_quotes = false;
    $in_single_quotes = false;
    $tag = "";

    $i = 0;
    $stripped = 0;

    $stripped_text = strip_tags($text);

    while ($i < strlen($text) && $stripped < strlen($stripped_text) && $stripped < $max_length)
    {
        $symbol  = $text{$i};
        $result .= $symbol;

        switch ($symbol)
        {
           case '<':
                $is_open   = true;
                $grab_open = true;
                break;

           case '"':
               if ($in_double_quotes)
                   $in_double_quotes = false;
               else
                   $in_double_quotes = true;

            break;

            case "'":
              if ($in_single_quotes)
                  $in_single_quotes = false;
              else
                  $in_single_quotes = true;

            break;

            case '/':
                if ($is_open && !$in_double_quotes && !$in_single_quotes)
                {
                    $is_close  = true;
                    $is_open   = false;
                    $grab_open = false;
                }

                break;

            case ' ':
                if ($is_open)
                    $grab_open = false;
                else
                    $stripped++;

                break;

            case '>':
                if ($is_open)
                {
                    $is_open   = false;
                    $grab_open = false;
                    array_push($tags, $tag);
                    $tag = "";
                }
                else if ($is_close)
                {
                    $is_close = false;
                    array_pop($tags);
                    $tag = "";
                }

                break;

            default:
                if ($grab_open || $is_close)
                    $tag .= $symbol;

                if (!$is_open && !$is_close)
                    $stripped++;
        }

        $i++;
    }

    while ($tags)
        $result .= "</".array_pop($tags).">";

    return $result;
}



   
    

}