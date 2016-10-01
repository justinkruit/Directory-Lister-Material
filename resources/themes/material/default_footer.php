<?php if($supportdirectorylister || $supportjustinkruit) { ?>
<div class="container">
<div class="divider <?php echo $divider; ?>"></div>

<div class="center-align <?php echo $textcolor; ?>">
    <?php if ($supportdirectorylister) {?>Powered by, <a href="http://www.directorylister.com" class="<?php echo $color; ?>-text" target="_blank">Directory Lister</a>.<?php } ?>
	<br class="hide-on-med-and-up"><?php if ($supportjustinkruit) {?>Material theme made by <a href="http://justinkruit.com" class="<?php echo $color; ?>-text" target="_blank">Justin Kruit</a><?php } ?>
</div></div>
<?php } ?>
