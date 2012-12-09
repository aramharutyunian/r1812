<!-- Load TinyMCE -->
<?php echo HTML::script('media/private/js/tinymce/jscripts/tiny_mce/jquery.tinymce.js'); ?>
<?php echo HTML::script('media/private/js/form.js'); ?>>
<!-- /TinyMCE -->
<script type="text/javascript">
    $().ready(function() {
        $('textarea.tinymce').tinymce({
            // Location of TinyMCE script
            script_url : '<?php echo Kohana::$base_url; ?>media/private/js/tinymce/jscripts/tiny_mce/tiny_mce.js',

            // General options
            theme : "advanced",
            plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

            // Theme options
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true,

            // Example content CSS (should be your site CSS)
            //content_css : "css/content.css",

            // Drop lists for link/image/media/template dialogs
            template_external_list_url : "lists/template_list.js",
            external_link_list_url : "lists/link_list.js",
            external_image_list_url : "lists/image_list.js",
            media_external_list_url : "lists/media_list.js",

            // Replace values for the template plugin
            template_replace_values : {
                username : "Some User",
                staffid : "991234"
            }
        });
    });
</script>
<!-- /TinyMCE -->



<!-- MAIN -->
<div id="main">	
    <div class="wrapper clearfix">

        <!-- page content -->
        <div id="page-content" class="clearfix">
            <!-- fullwidth content -->
            <div class="fullwidth-content">
                <!-- Display server side  validation messages(errors) -->	
                <?php if (isset($errors) && count($errors) > 0) { ?>
                    <?php foreach ($errors as $error) { ?>
                        <div class="error"><?php echo $error; ?></div>
                    <?php } ?>
                <?php } ?>
                <!--  End -->	

                <p><?php echo I18n::get('admin.label.edit_page'); ?></p>
                <form method="post" class="form" action="<?php echo Kohana::$base_url . "private/pages/do_edit"; ?>"  enctype="multipart/form-data">
                    <fieldset  >
                        <?php if (isset($page['image']) && $page['image'] != NULL) { ?>
                            <img  src="<?php echo Kohana::$base_url ?>media/resources/pages/<?php echo $page['id'] . "/" . $page['image']; ?>"
                                  class="editor_thumb"/>
                              <?php } ?>

                        <input name="image" type="file" id="imageUploadBrowse" style="position:absolute; top:-10000px;">
                        <div>
                            <input  type="hidden"  name="id"  value="<?php if (isset($page['id'])) echo $page['id'] ?>"/>
                            <input type="button" value="<?php echo I18n::get('admin.label.browse') ?>" onclick="browse()">
                        </div>
                        <div>
                            <textarea id="content" name="elm1" rows="15" cols="80" style="width: 80%" class="tinymce">
                                <?php echo $page['content']; ?>
                            </textarea>
                            <p>
                                <a  href="#" title="Upload Image" ><img  src="<?php echo Kohana::$base_url; ?>media/private/img/image.png"  class="s32"   id="upload" alt="Upload Image"/></a>
                            </p>
                        </div>
                        <hr>
                        <div>
                            <input name="meta_title" 
                                   id="name" type="text" class="form-poshytip" value="<?php if (isset($page['meta_title'])) echo $page['meta_title'] ?>" title="<?php echo I18n::get('site.title_info'); ?>" />
                            <label><?php echo I18n::get('site.title'); ?></label>
                        </div>
                        <div>
                            <textarea name="meta_keywords" 
                                      id="keywords" class="form-poshytip"  title="<?php echo I18n::get('site.keyword_info'); ?>">
                                          <?php if (isset($page['meta_keywords'])) echo $page['meta_keywords']; ?>
                            </textarea>
                            <label><?php echo I18n::get('site.keywords'); ?></label>
                        </div>
                        <div>
                            <textarea name="meta_description" 
                                      id="description" class="form-poshytip"  title="<?php echo I18n::get('site.description_info'); ?>">
                                          <?php if (isset($page['meta_description'])) echo $page['meta_description'] ?>
                            </textarea>
                            <label><?php echo I18n::get('site.description'); ?></label>
                        </div>


                        <table class="attachments">
                            <tr>
                                <td id="form_elements"></td>
                            </tr>
                        </table>
                        <p><input type="submit" value="<?php echo I18n::get('admin.send'); ?>" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
                    </fieldset>


                </form>

            </div>
            <!-- ends fullwidth content -->

        </div>	        	
        <!--  page content-->


    </div>
</div>
<!-- ENDS MAIN -->
<?php echo HTML::script('media/private/js/ajaxupload.js'); ?>
<?php echo HTML::script('media/private/js/image_upload_page.js'); ?>

<script>
    function browse(){
        $('#imageUploadBrowse').trigger('click');
    }
</script>