
<pre>
    <?php // var_dump($menu);?>
</pre>
<nav>
    <ul id="nav" class="sf-menu">
        <li class="current-menu-item"><a href="<?php echo Kohana::$base_url ?>private/dashboard"><?php echo I18n::get('label.home'); ?></a></li>

        <li><a href="<?php echo Kohana::$base_url ?>private/pages/get/<?php echo $pages[0]['link']; ?>"><?php echo I18n::get('label.pages'); ?></a>
            <?php if ($pages != NULL) { ?>
                <ul>
                    <?php foreach ($pages as $page) { ?>
                        <li><a href="<?php echo Kohana::$base_url ?>private/pages/get/<?php echo $page['link']; ?>"><?php echo $page['title']; ?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>

        </li>
        <li><a href="<?php echo Kohana::$base_url ?>private/news"><?php echo I18n::get('label.news'); ?></a></li>
        <li><a href="<?php echo Kohana::$base_url ?>private/menu/get/<?php echo $good_menu[0]['link']; ?>"><?php echo I18n::get('label.menu'); ?></a>
            <?php if ($good_menu != NULL) { ?>
                <ul>
                    <?php foreach ($good_menu as $item) { ?>
                        <li><a href="<?php echo Kohana::$base_url ?>private/menu/get/<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
        <li><a href="<?php echo Kohana::$base_url ?>private/gallery"><?php echo I18n::get('label.gallery'); ?></a></li>
        <li><a href="<?php echo Kohana::$base_url ?>private/settings"><?php echo I18n::get('label.settings'); ?></a></li>
        <li><a href="<?php echo Kohana::$base_url ?>private/pages/profile"><?php echo I18n::get('label.profile'); ?></a></li>
        <li><a href="#"><?php echo I18n::get('label.logout'); ?></a></li>
    </ul>
    <div id="combo-holder"></div>
</nav>

