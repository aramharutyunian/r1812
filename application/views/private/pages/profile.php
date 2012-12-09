<!-- MAIN -->
<div id="main">	
    <div class="wrapper clearfix">
        <h2 class="page-heading"><span><?php echo I18n::get('admin.profile'); ?></span></h2>	

        <!-- page content -->
        <div id="page-content" class="clearfix">

            <!-- form -->
            <?php echo HTML::script('media/private/js/form-validation.js'); ?>
            <!-- Display server side  validation messages(errors) -->	
            <?php if (isset($errors) && count($errors) > 0) { ?>
                <?php foreach ($errors as $error) { ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php } ?>
            <?php } ?>
            <!--  End -->	
            <form id="contactForm" action="<?php echo Kohana::$base_url; ?>private/dashboard/do_profile" method="post">
                <fieldset>
                    <div>
                        <input name="username" 
                               id="name" type="text" class="form-poshytip" value=" <?php echo $user['username']; ?>" title="<?php echo I18n::get('admin.username_info'); ?>" />
                        <label><?php echo I18n::get('admin.username'); ?></label>
                    </div>
                    <div>
                        <input name="password"  id="password" type="password" class="form-poshytip" title="<?php echo I18n::get('admin.password_info'); ?>" />
                        <label><?php echo I18n::get('admin.password'); ?></label>
                    </div>
                    <div>
                        <input name="confirm"  id="confirm" type="password" class="form-poshytip" title="<?php echo I18n::get('admin.confirm_info'); ?>" />
                        <label><?php echo I18n::get('admin.confirm'); ?></label>
                    </div>
                    <input  type="hidden"  name="id"  value="<?php echo $user['id']; ?>" />
                    <p><input type="submit" value="<?php echo I18n::get('admin.send'); ?>" name="submit" id="submit" /> <span id="error" class="warning">Message</span></p>
                </fieldset>

            </form>
            <p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
            <!-- ENDS form -->


        </div>	        	
        <!--  page content-->


    </div>
</div>
<!-- ENDS MAIN -->