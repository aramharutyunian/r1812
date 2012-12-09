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

                <p><?php echo I18n::get('admin.label.edit_album'); ?></p>
                <form method="post" class="form" action="<?php echo Kohana::$base_url . "private/gallery/do_edit_album" ?>"  >
                    <fieldset>
                        <div>
                            <input  type="hidden"  name="id"  value="<?php if (!empty($album['id'])) echo $album['id']; ?>"/>
                        </div>
                        
                        <div>
                            <input name="title" type="text" class="form-poshytip" value="<?php if (!empty($album['title'])) echo $album['title']; ?>"
                                   title="<?php echo I18n::get('admin.label.title'); ?>" />
                            <label><?php echo I18n::get('admin.label.title'); ?></label>
                        </div>
                        <div class="customselect"  style="padding-bottom: 15px;">
                            <select id="polyglot-language-options" name = "album_type">
                                <?php
                                if (isset($album_title)) {
                                    foreach ($album_title as $title):
                                        echo"<option value = '$title[id]'>" . $title['title'] . "</option>";
                                    endforeach;
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <textarea id="content" name="elm1" rows="5" cols="40" style="width: 40%" class="tinymce">
                                <?php if (!empty($album['description'])) echo $album['description']; ?>
                            </textarea>
                        </div>
                        <hr>
                        <div>
                            <input name="meta_title"
                                   id="name" type="text" class="form-poshytip" value="<?php if (!empty($album['meta_title'])) echo $album['meta_title']; ?>" title="<?php echo I18n::get('site.title_info'); ?>" />
                            <label><?php echo I18n::get('site.title'); ?></label>
                        </div>
                        <div>
                            <textarea name="meta_keywords" id="keywords" class="form-poshytip"  title="<?php echo I18n::get('site.keyword_info'); ?>">
                                <?php if (!empty($album['meta_keywords'])) echo $album['meta_keywords']; ?>
                            </textarea>
                            <label><?php echo I18n::get('site.keywords'); ?></label>
                        </div>
                        <div>
                            <textarea name="meta_description" id="description" class="form-poshytip"  title="<?php echo I18n::get('site.description_info'); ?>">
                                <?php if (!empty($album['meta_description'])) echo $album['meta_description']; ?>
                            </textarea>
                            <label><?php echo I18n::get('site.description'); ?></label>
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