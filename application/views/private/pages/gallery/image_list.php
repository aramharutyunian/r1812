<!-- MAIN -->
<div id="main">
    <div class="wrapper clearfix">

        <!-- page content -->
        <div id="page-content" class="clearfix">
            <!-- fullwidth content -->
            <div class="fullwidth-content">

                <p><a  href="<?php echo Kohana::$base_url ?>private/gallery/add_image/<?php echo $album_id; ?>"><?php echo I18n::get('admin.label.add_image'); ?></a></p>

                <table id="table-2">
                    <thead>
                    <th><?php echo I18n::get("admin.label.id"); ?></th>
                    <th><?php echo I18n::get("admin.label.name"); ?></th>
                    <th><?php echo I18n::get("admin.label.manage"); ?></th>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    if (isset($image)) {
                        foreach ($image as $value) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $value['title'] . "</td>";
                            echo "<td>"."<a href='" . Kohana::$base_url . "private/gallery/edit_image/$album_id/$value[id]'>" . I18n::get("admin.label.edit") . "</a>" . "/ " .
                                "<a href='" . Kohana::$base_url . "private/gallery/delete_image/$album_id/$value[id]'>" . I18n::get("admin.label.delete") . "</a>" ."</td>";
                            echo "</tr>";
                        }
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