<?php if($supportdirectorylister || $supportjustinkruit) { ?>
<div class="container">
<div class="divider <? echo $divider; ?>"></div>

<div class="center-align <? echo $textcolor; ?>">
    <? if ($supportdirectorylister) {?>Powered by, <a href="http://www.directorylister.com" class="<?php echo $color; ?>-text" target="_blank">Directory Lister</a>.<? } ?>
	<br class="hide-on-med-and-up"><? if ($supportjustinkruit) {?>Material theme made by <a href="http://justinkruit.com" class="<?php echo $color; ?>-text" target="_blank">Justin Kruit</a><? } ?>
</div></div>
<?php } ?>