<h3><a href="javascript:unhide('08');"><?php echo  $US['nav-tools']?></a></h3>
<div id="08" class="hidden">
<?php
  include_once "includes/config.inc.php";
  include_once USF_CON_FUNCTIONS;
  if (mysql_running() ){ ?>
<a target="_phpmyadmin" onclick="h(this);" href="phpMyAdmin/"><?php echo  $US['nav-pma']?></a>
<?php }?>

<a target="content" onclick="h(this);" href="error_log_viewer.php"><?php echo $US['nav-elog']?></a>
<?php if (is_file(USF_PERL_EXE)){ ?>
<a target="content" onclick="h(this);" href="win_to_unix_converter.php"><?php echo $US['nav-u2w']?></a>
<?php }?>
<a target="content" onclick="h(this);" href="certificate_and_key_gen.php"><?php echo  $US['nav-key']?></a>
<a target="content" onclick="h(this);" href="mysql_password_restore.php"><?php echo  $US['nav-mysqlrestore']?></a>
</div>
