<!-- Load TinyMCE -->
<?php echo HTML::script('media/private/js/tinymce/jscripts/tiny_mce/jquery.tinymce.js'); ?>
<?php echo HTML::script('media/private/js/form.js'); ?>



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
            theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,fontsizeselect,insertlayer,moveforward,movebackward,absolute,|,styleprops,fullscreen, del,ins",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,cleanup,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,iespell,advhr,|,ltr,rtl,cite,abbr,acronym",
            // theme_advanced_buttons4 : "",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true

            // Example content CSS (should be your site CSS)
            //content_css : "css/content.css",

            // Drop lists for link/image/media/template dialogs

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

                <p><?php echo I18n::get('admin.label.add_image'); ?></p>
                <form method="post" class="form" action="<?php echo Kohana::$base_url . "private/gallery/do_add_image"; ?>"  enctype="multipart/form-data">
                    <fieldset>

                        <input name="image" type="file" id="imageUploadBrowse" style="position:absolute; top:-10000px;"/>

                        <div>
                            <input  type="hidden"  name="album_id"  value="<?php if(!empty($album_id)) echo $album_id ?>"/>
                            <input type="button" value="<?php echo I18n::get('admin.label.browse') ?>" onclick="browse()">
                        </div>
                        <div>
                            <label><?php echo I18n::get('admin.label.name');?></label>
                            <input name="title" type="text" class="form-poshytip" value="<?php if(!empty($image['title'])) echo $image['title']; ?>" title="<?php echo I18n::get('admin.label.name'); ?>" />
                        </div>
                        <fieldset class="radios  inner">
                            <label class="label_radio label" for="radio-01"><input name="published" id="radio-01" value="1" type="radio" <?php if(!isset($image['status'])) echo "checked"; else if($image['status'] == 1) echo "checked"; ?> /><?php echo I18n::get('admin.label.published'); ?></label>
                            <label class="label_radio label" for="radio-02"><input name="published" id="radio-02" value="0" type="radio" <?php if(isset($image['status']) && $image['status'] == 0) echo "checked"; ?> /><?php echo I18n::get('admin.label.not_published'); ?></label>
                        </fieldset>
                        <div>
                            <textarea id="content" name="elm1" rows="15" cols="80" style="width: 80%" class="tinymce">
                                <?php if(!empty($image['description'])) echo $image['description']; ?>
                            </textarea>
                        </div>


                        <table class="attachments">
                            <tr>
                                <td id="form_elements"></td>
                            </tr>
                        </table>
                        <p><input type="submit" value="<?php echo I18n::get('admin.send'); ?>" name="submit" id="submit" /> </p>
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
<?php echo HTML::script('media/private/js/image_upload_news.js'); ?>

<script>
    function browse(){
        $('#imageUploadBrowse').trigger('click');
    }
</script>
