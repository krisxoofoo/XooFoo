<?php
/*
#############################################################################
# Name: The Uniform Server Admin Panel
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) Mike Gleaves (Ric) 
# Web: http://www.uniformserver.com
# Notes: Apache configuration
#############################################################################
*/


// Includes
include_once "includes/config.inc.php";
include_once "$us_apanel/includes/lang/".file_get_contents("includes/.lang").".php";
include_once "includes/header.php";
include_once "includes/secure.php";

?>

<div id="main">
<h2>&#187 <?php echo  $US['aconfig-head']?></h2>
<h3><?php echo  $US['aconfig-conf']?></h3>
<?php
# -- Determines Apache version.
if (preg_match("/Apache\/2/i", $_SERVER["SERVER_SOFTWARE"])) {
        $Apache2 = True;
}
else {
        $Apache2 = False;
}
# --

# -- Determines PHP mode
if (!preg_match("/^cgi/",php_sapi_name())) {
        $PHPmod = True;
}
else {
        $PHPmod = False;
}
# --

@$apache = new Config ($us_usr."/local/apache2/conf/httpd.conf","#");
$apache->Var_Name =array ("ServerName","ServerAdmin","DirectoryIndex","AddHandler server-parsed","ServerSignature","Listen");
$apache->Var_Text =array (
"".$US['aconfig-sname']."","".$US['aconfig-wemail']."","".$US['aconfig-difiles']."",
"".$US['aconfig-ssi']."","".$US['aconfig-ssig']."","".$US['aconfig-listen']."");
$apache->Var_Help =array (
"http://httpd.apache.org/docs/mod/core.html#servername",
"http://httpd.apache.org/docs/mod/core.html#serveradmin",
"http://httpd.apache.org/docs/mod/mod_dir.html#directoryindex",
"http://httpd.apache.org/docs/mod/mod_include.html",
"http://httpd.apache.org/docs/mod/core.html#serversignature",
"http://httpd.apache.org/docs/2.0/bind.html");


// import_request_variables("gP", "st");

if(@$_POST['Submit']){
  $step=$_POST['Submit'];
}
else{
  $step='dummay';
}

if ($step == "next") {
        echo "<p>".$US['aconfig-text-0']."</p>";
}

else {
        if ($step == "Save") {
mpgUpdateRedirectFile();
                $apache->replace_values ($_POST);

                echo "<p><font color=\"red\">".$US['aconfig-text-1']."</font><p>";
        }
?>

        <form action="
<?php
        echo $_SERVER["PHP_SELF"]."\" name=\"f\" method=\"post\">";
        @$apache->echo_values ();
?>
        <br />
        <input type="submit" value="<?php echo  $US['aconfig-save']?>" name="Submit" />
        </form>
        <br />
<?php
        if ($PHPmod==True) {
                echo "<p><font color=\"red\">".$US['aconfig-module']."</font></p>";
        }

        else {
                echo "<p><font color=\"red\">".$US['aconfig-cgi']."</font></p>";
        }
}

//--------------------------------------------------------------------
//Update file redirect.html to new port number

function mpgUpdateRedirectFile(){

$portnum = $_POST['C1i5'];       // get new port number
$file = './redirect.html';       // Path to redirect file

$str=file_get_contents($file);   //read entire file

$str1=preg_replace("/localhost:?[\d]*/","localhost:".$portnum, $str );
file_put_contents($file,$str1); //rewrite entire file

}//end function

//---------------------------------------------------------------------

class Config
{
var $contents;
var $name;
var $comments;
var $Var_Name;
var $Var_Text;
var $Var_Help;
var $classnum;

function Config ($file_name, $comments)
{
      $this->comments=$comments;
      $this->name=$file_name;
      $fd = fopen ($this->name, "r");
      $this->contents = fread ($fd, filesize ($file_name));
      fclose ($fd);
      $this->classnumber=$GLOBALS["$Configclassnumber"]=$GLOBALS["$Configclassnumber"]+1;
}

function f_write ()
{
      $fd = fopen ($this->name, "w");
      $ok = fwrite ($fd, $this->contents);
      fclose ($fd);
}

function echo_values ()
{
      include_once "includes/lang/".file_get_contents("includes/.lang").".php";
      echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
      $item=0;

      foreach ($this->Var_Name as $loop){
            $Var_ID="C".$this->classnumber."i".$item;
            $Var_Name=$this->Var_Name[$item];
            $Var_Text=$this->Var_Text[$item];
            $Var_Help=$this->Var_Help[$item];
            $comments=$this->comments;
            preg_match("/\n\s*$Var_Name\s+([^$comments^\n]+)/i", $this->contents, $tag);
            echo "
                <tr>
                <td width=\"150\"><p>$Var_Text:</p></td>
                <td>
                <p><input type=\"text\" name=\"$Var_ID\" size=\"31\" maxlength=\"2048\" value='$tag[1]' /> ";
            if ($Var_Help != "") {echo "<a href=\"$Var_Help\" target=\"_help\">".$US['aconfig-help']."</a>";};
                echo "</p>";
            echo "</td>";
                echo "</tr>";
            $item=$item+1;
        }

      echo "</table>";
}

function replace_values ($_POST)
{
      $item=0;

      foreach ($this->Var_Name as $loop){
            $Var_ID="C".$this->classnumber."i".$item;
            $data=$_POST[$Var_ID];
            $comments=$this->comments;
            $this->contents=preg_replace("/\n(\s*$loop)\s+([^$comments]+)/i", "\n\\1 $data\n\n", $this->contents, 1);
            $item=$item+1;
      }

      $this->f_write ();
}
}
?>
</div>

<?php
// Footer
include_once "includes/footer.php";
?>