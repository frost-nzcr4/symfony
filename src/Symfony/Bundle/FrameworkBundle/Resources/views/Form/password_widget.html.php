<input type="password"
    <?php echo $view['form']->attributes() ?>
    name="<?php echo $view->escape($full_name) ?>"
    value="<?php echo $view->escape($value) ?>"
    <?php if ($read_only): ?>disabled="disabled"<?php endif ?>
    <?php if ($required): ?>required="required"<?php endif ?>
    <?php if ($max_length): ?>maxlength="<?php echo $max_length ?>"<?php endif ?>
    <?php if ($pattern): ?>pattern="<?php echo $pattern ?>"<?php endif ?>
/>
