<!-- MAIN -->
<div id="main">	
    <div class="wrapper clearfix">

        <!-- page content -->
        <div id="page-content" class="clearfix">
            <!-- fullwidth content -->
            <div class="fullwidth-content">
            <form method="post" class="form" action="<?php  echo  Kohana::$base_url ?>private/settings/seo">
			<fieldset  >						
            <div>
			  <input name="meta_title" 
				 id="name" type="text" class="form-poshytip" value="<?php echo $settings['meta_title']?>" title="<?php echo I18n::get('site.title_info');?>" />
				<label><?php echo I18n::get('site.title');?></label>
			</div>
			<div>
			<textarea name="meta_keywords" 
				 id="keywords" class="form-poshytip"  title="<?php echo I18n::get('site.keyword_info');?>">
				<?php echo $settings['meta_keywords'] ; ?>
			</textarea>
				<label><?php echo I18n::get('site.keywords');?></label>
			</div>
			<div>
			<textarea name="meta_description" 
				 id="description" class="form-poshytip"  title="<?php echo I18n::get('site.description_info');?>">
				<?php echo $settings['meta_description']?>
			</textarea>
				<label><?php echo I18n::get('site.description');?></label>
			</div>
             <p><input type="submit" value="<?php echo I18n::get('admin.send');?>" name="submit" id="submit" /></p>
						
						</fieldset>   
               </form> 
      
            </div>
            <!-- ends fullwidth content -->

        </div>	        	
        <!--  page content-->
    </div>
</div>