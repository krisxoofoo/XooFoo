<h3><a href="javascript:unhide('01');"><?php echo  $US['title']?> <?php include('.version') ?></a></h3>
<div id="01" class="hidden"><a target="content" onClick="h(this);" href="start.php"><?php echo  $US['nav-home']?></a>
<a target="content" onclick="h(this);" href="security.php"><?php echo  $US['nav-secure']?></a>
<a target="content" onclick="h(this);" href="phpinfo.php"><?php echo  $US['nav-phpinfo']?></a>
<?php if (is_file($usf_perl)){ ?>
<a target="content" onclick="h(this);" href="perl_envirnonment.php"><?php echo $US['nav-cgienv']?></a>
<?php }?>
<a target="_status" onclick="h(this);" href="/server-status"><?php echo  $US['nav-status']?></a>
<a target="_info"   onclick="h(this);" href="/server-info"><?php echo  $US['nav-info']?></a>
<a target="content" onclick="h(this);" href="update.php"><?php echo  $US['nav-update']?></a></div>