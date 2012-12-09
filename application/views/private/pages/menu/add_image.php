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

                <p><?php echo I18n::get('admin.label.change_image'); ?></p>
                <form method="post" class="form" action="<?php echo Kohana::$base_url . "private/menu/do_add_image"; ?>"  enctype="multipart/form-data">
                    <fieldset  > 		
                        <div>
                            <input  type="hidden"  name="menu_id"  value="<?php echo $menu_id; ?>"/>
                        </div>
                        <input name="image" type="file" id="imageUploadBrowse" style="position:absolute; top:-10000px;"/>

                        <div>
                            <input type="button" class="form-poshytip" value="<?php echo I18n::get('admin.label.browse') ?>" onclick="browse()">
                        </div>

                        <?php if ($image != NULL) { ?>
                            <img  src="<?php echo Kohana::$base_url ?>media/resources/menu/<?php echo $menu_id . "/" . $image; ?>"
                                  class="editor_thumb"/>
                              <?php } ?>
                    </fieldset>
                    <p><input type="submit" value="<?php echo I18n::get('admin.send'); ?>" name="submit" id="submit" /> </p>
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