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

                <p><?php echo I18n::get('admin.label.add_goods'); ?></p>
                <form method="post" class="form" action="<?php echo Kohana::$base_url . "private/menu/do_add"; ?>"  >
                    <fieldset  > 		
                        <div>
                            <input  type="hidden"  name="cat_id"  value="<?php echo $cat_id; ?>"/>
                        </div>
                        <div>
                            <input name="name" 
                                   id="name" type="text" class="form-poshytip" title="<?php echo I18n::get('admin.add_category_info'); ?>" />
                            <label><?php echo I18n::get('admin.label.category_name'); ?></label>
                        </div>
                        <div>
                            <input name="price" 
                                   id="price" type="number" min="1" max="10000000" class="form-poshytip" title="<?php echo I18n::get('admin.add_price_info'); ?>" />
                            <label><?php echo I18n::get('admin.label.price'); ?></label>
                        </div>								 

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
<?php echo HTML::script('media/private/js/image_upload_page.js'); ?>

<script>
    function browse(){
        $('#imageUploadBrowse').trigger('click');
    }
</script>