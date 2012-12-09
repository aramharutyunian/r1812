<script  type="text/javascript">
    function edit_confirm(){
        return confirm("<?php echo I18n::get("admin.message.confirm_edit"); ?>");
    };
    function  delete_confirm(){
        return confirm("<?php echo I18n::get("admin.message.confirm_delete"); ?>");
    }		
</script>
<!-- MAIN -->
<div id="main">	
    <div class="wrapper clearfix">

        <!-- page content -->
        <div id="page-content" class="clearfix">
            
            <!-- fullwidth content -->
            <div class="fullwidth-content">
                <p><a  href="<?php echo Kohana::$base_url ?>private/menu/add_cat/<?php echo $menu_id ?>"><?php echo I18n::get("admin.label.add_category"); ?></a>
                    <a id="space" href="<?php echo Kohana::$base_url ?>private/menu/add_image/<?php echo $menu_id ?>"><?php echo I18n::get("admin.label.change_image"); ?></a></p>


                <?php if ($categories != NULL) { ?>
                    <table id="table-2">
                        <thead>
                        <th><?php echo I18n::get("admin.label.id"); ?></th>
                        <th><?php echo I18n::get("admin.label.name"); ?></th>
                        <th><?php echo I18n::get("admin.label.manage"); ?></th>
                        </thead>
                        <tbody>
                            <?php $i = 0;
                            foreach ($categories as $item) {
                                ?>
                                <tr>
                                    <td><?php echo++$i; ?></td>
                                    <td><?php echo $item['name']; ?></td>
                                    <td> <a href="<?php echo Kohana::$base_url ?>private/menu/list/<?php echo $item['id']; ?>"  style="cursor: pointer;"><?php echo I18n::get("admin.label.list"); ?></a>/
                                        <a href="<?php echo Kohana::$base_url ?>private/menu/edit_cat/<?php echo $item['id']; ?>" onclick="edit_confirm();"  style="cursor: pointer;"><?php echo I18n::get("admin.label.edit"); ?></a>/
                                        <a href="<?php echo Kohana::$base_url ?>private/menu/delete_cat/<?php echo $item['id']; ?>" onclick="delete_confirm();" style="cursor: pointer;"><?php echo I18n::get("admin.label.delete"); ?></a>
                                    </td>
                                </tr>
                            <?php } ?> 
<?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- ends fullwidth content -->
        </div>	        	
        <!--  page content-->
    </div>
</div>
<!-- ENDS MAIN -->