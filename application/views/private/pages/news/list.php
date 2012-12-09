<!-- MAIN -->
<div id="main">	
    <div class="wrapper clearfix">

        <!-- page content -->
        <div id="page-content" class="clearfix">
            <!-- fullwidth content -->
            <div class="fullwidth-content">	

                <p><a  href="<?php echo Kohana::$base_url?>private/news/add"><?php  echo I18n::get('admin.label.add_news'); ?></a></p>
                
            <table id="table-2">
                    <thead>
                    <th><?php echo I18n::get("admin.label.id");?></th>
                    <th><?php echo I18n::get("admin.label.name");?></th>
                    <th><?php echo I18n::get("admin.label.date");?></th>
                    <th><?php echo I18n::get("admin.label.manage");?></th>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($list as $value){
                            echo "<tr>";
                            echo "<td>".$i++."</td>";
                            echo "<td>".$value['name']."</td>";
                            echo "<td>".$value['date_of_creation']."</td>";
                            echo "<td>"."<a href='".Kohana::$base_url."private/news/edit/$value[id]'>".I18n::get("admin.label.edit")."</a>"."/".
                                 "<a href='".Kohana::$base_url."private/news/delete/$value[id]'>".I18n::get("admin.label.delete")."</a>"."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- ends fullwidth content -->

        </div>	        	
        <!--  page content-->
    </div>
</div>