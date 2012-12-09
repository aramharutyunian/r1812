<!-- MAIN -->
<div id="main">	
    <div class="wrapper clearfix">


        <h2 class="page-heading"><span><?php echo I18n::get('admin.Login'); ?></span></h2>	

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
            <form id="loginform" action="<?php echo Kohana::$base_url ?>private/auth/do_login" method="post">
                <fieldset>
                    <div>
                        <input name="username" 
                               id="name" type="text" class="form-poshytip" title="<?php echo I18n::get('admin.login_info'); ?>" />
                        <label><?php echo I18n::get('admin.username'); ?></label>
                    </div>
                    <div>
                        <input name="password"  id="password" type="password" class="form-poshytip" title="<?php echo I18n::get('admin.password_login_info'); ?>" />
                        <label><?php echo I18n::get('admin.login_password'); ?></label>
                    </div>

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