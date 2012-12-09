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

                <p><?php echo I18n::get('admin.label.edit_goods'); ?></p>
                <form method="post" class="form" action="<?php echo Kohana::$base_url . "private/menu/do_edit"; ?>"  enctype="multipart/form-data">
                    <fieldset  > 		
                        <div>
                            <input  type="hidden"  name="id"  value="<?php echo $goods['id']; ?>"/>
                            <input  type="hidden"  name="cat_id"  value="<?php echo $goods['category_id']; ?>"/>
                        </div>
                        <div>
                            <input name="name" 
                                   id="name" type="text" class="form-poshytip" 
                                   value="<?php if (!empty($goods['name'])) echo $goods['name']; ?>"
                                   title="<?php echo I18n::get('admin.add_goods_info'); ?>" />
                            <label><?php echo I18n::get('admin.label.goods_name'); ?></label>
                        </div>	

                        <div>
                            <input name="price" 
                                   id="price" type="number" min="1" max="10000000" class="form-poshytip"
                                   value="<?php if (!empty($goods['price'])) echo $goods['price']; ?>"
                                   title="<?php echo I18n::get('admin.add_price_info'); ?>" />
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