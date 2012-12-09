<?php if ($languages != NULL  && count($languages)>1) { ?>

    <div id="polyglotLanguageSwitcher"  style="padding-bottom: 15px;">
        <form action="#">					
            <select id="polyglot-language-options">
                <?php foreach ($languages as $lang) { ?>

                    <option id="<?php echo $lang['id']; ?>" value="<?php echo $lang['id']; ?>" 
                    <?php if ($lang['id'] == $current_lang) {
                        echo "SELECTED='SELECTED'";
                    } ?>
                            >
                    <?php echo $lang['title']; ?>
                    </option>

    <?php } ?>	
            </select>
        </form>
    </div>
<?php } ?>		