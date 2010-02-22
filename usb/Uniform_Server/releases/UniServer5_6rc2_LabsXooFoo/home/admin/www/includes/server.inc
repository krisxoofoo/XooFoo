<?php
  include_once "includes/config.inc.php";
  include_once USF_CON_FUNCTIONS;
?>
<h3><a href="javascript:unhide('07');"><?php echo  $US['nav-start']?></a></h3>
<div id="07" class="hidden">
<? //=== SERVICE LINKS ===?>

<?php if(get_apache_tracker()=='service'){ //=== Apache  ?>
  <a target="content" onclick="h(this);" href="services_control.php?sel=Apache"><?php echo  $US['nav-rapaches']?></a>
<?php } ?>

<?php if(get_mysql_tracker()=='service'){ //=== MySQL  ?>
  <a target="content" onclick="h(this);" href="services_control.php?sel=MySQL"><?php echo  $US['nav-rmysqls']?></a>
<?php } ?>

<? //=== STANDARD PROGRAM LINKS ===?>

<?php if(get_apache_tracker()=='program' || get_mysql_tracker()=='program'){ //=== Common  ?>
 <a target="content" onclick="h(this);" href="server_control.php?sel=stop_servers"?><?php echo  $US['nav-sserver']?></a>
<?php } ?>

<?php if(get_apache_tracker()=='program'){ //=== Apache  ?>

  
<?php } ?>

<?php if(get_mysql_tracker()=='program'){ //=== MySQL  ?>
  <a target="content" onclick="h(this);" href="server_control.php?sel=start_mysql"?><?php echo  $US['nav-rmysql']?></a>
  <a target="content" onclick="h(this);" href="server_control.php?sel=stop_mysql"?><?php echo  $US['nav-smysql']?></a>
<?php } ?>
</div>



