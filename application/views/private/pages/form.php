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
                <p>form</p>
                <form method="post" class="form" action="http://tinymce.moxiecode.com/dump.php?example=true">
                    <fieldset  >
                        <div>
                            <input name="username" 
                                   id="name" type="text" class="form-poshytip" value="" title="<?php echo I18n::get('admin.username_info'); ?>" />
                            <label><?php echo I18n::get('admin.username'); ?></label>
                        </div>
                        <fieldset class="checkboxes inner">
                            <label class="label_check label" for="checkbox-01"><input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked /> I agree to the terms &#38; conditions.</label>
                            <label class="label_check label" for="checkbox-02"><input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox" /> Please send me regular updates.</label>
                        </fieldset>
                        <fieldset class="radios inner">
                            <label class="label_radio label" for="radio-01"><input name="sample-radio" id="radio-01" value="1" type="radio" checked /> This is option A...</label>
                            <label class="label_radio label" for="radio-02"><input name="sample-radio" id="radio-02" value="1" type="radio" /> and this is option B...</label>
                            <label class="label_radio label" for="radio-03"><input name="sample-radio" id="radio-03" value="1" type="radio" /> or simply choose option C</label>
                        </fieldset>
                        <div>
                            <textarea id="content" name="elm1" rows="15" cols="80" style="width: 80%" class="tinymce">
										
                            </textarea>
                            <p>
                                <a  href="#" title="Upload Image" ><img  src="<?php echo Kohana::$base_url; ?>media/private/img/image.png"  class="s32"   id="upload" alt="Upload Image"/></a>
                            </p>
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