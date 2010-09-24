<!-- credits : http://www.charles-reace.com  -->
<div id="xo-lorem-content" style="max-width: 600px; margin: 0 auto;">
<?php
$sentences = array(1 =>
   _MD_XOSTYLE_LOREM9,
   _MD_XOSTYLE_LOREM10,
   _MD_XOSTYLE_LOREM11,
   _MD_XOSTYLE_LOREM12
);
$nbr = (isset($_GET['nbr']) and 
         in_array($_GET['nbr'], range(1,10))) ?
         $_GET['nbr'] : 1;
$elem = (isset($_GET['elem']) and
         in_array($_GET['elem'], array('p', 'li', 'div'))) ?
         $_GET['elem'] : 'p';
$sent = (isset($_GET['sent']) and 
         in_array($_GET['sent'], range(1,10))) ?
         $_GET['sent'] : 1;
?>
<h1 class="center shadow"><?php echo _MI_XOSTYLE_SMNAME5; ?></h1>
<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='get'>
<fieldset>
<legend><?php echo _MD_XOSTYLE_LOREM1; ?></legend>
<p>
<label><?php echo _MD_XOSTYLE_LOREM2; ?>:
<select name='elem' title='<?php echo _MD_XOSTYLE_LOREM2; ?>?'>
<?php
$elements = array(
   'p' => _MD_XOSTYLE_LOREM3,
   'li' => _MD_XOSTYLE_LOREM4,
   'div' => _MD_XOSTYLE_LOREM5,
);
foreach($elements as $key => $val)
{
   echo "<option value='$key'";
   if(isset($_GET['elem']) and $_GET['elem'] == $key)
   {
      echo " selected='selected'";
   }
   echo ">$val</option>\n";
}
?>
</select>
</label>
</p>
<p>
<label><?php echo _MD_XOSTYLE_LOREM6; ?>:
<select name='nbr' title='<?php echo _MD_XOSTYLE_LOREM6; ?>?'>
<?php
for($ix = 1; $ix <= 10; $ix++)
{
   echo "<option value='$ix'";
   if(isset($_GET['nbr']) and $_GET['nbr'] == $ix)
   {
      echo " selected='selected'";
   }
   echo ">$ix</option>\n";
}
?>
</select>
</label>
</p>
<p>
<label><?php echo _MD_XOSTYLE_LOREM7; ?>:
<select name='sent' title='<?php echo _MD_XOSTYLE_LOREM7; ?>?'>
<?php for($ix = 1; $ix <= 10; $ix++)
{
   echo "<option value='$ix'";
   if(isset($_GET['sent']) and $_GET['sent'] == $ix)
   {
      echo " selected='selected'";
   }
   echo ">$ix</option>\n";
}
?>
</select>
</label>
</p>
<p><input type='submit' value='<?php echo _MD_XOSTYLE_LOREM8; ?>' title='<?php echo _MD_XOSTYLE_LOREM8; ?>'></p>
</fieldset>
</form>
<pre id='copytext'>
<?php
$count = 1;
$text = array();
for($i = 1; $i <= $nbr; $i++)
{
   $text[$i] = "<$elem>";
   for($j = 1; $j <= $sent; $j++)
   {
      $text[$i] .= $sentences[$count].' ';
      if(++$count > 4) { $count = 1; }
   }
   $text[$i] = trim($text[$i])."</$elem>";
   $text[$i] = wordwrap($text[$i]);
}
echo htmlspecialchars(implode("\n", $text));
?>
</pre>
</div>
</div>