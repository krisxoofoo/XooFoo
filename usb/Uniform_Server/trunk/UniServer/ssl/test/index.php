
<?
echo "<DIV ALIGN=CENTER>";
echo "<H1> Welcome ".getenv("SSL_CLIENT_S_DN_CN")."<H1>";
echo "<H2> O = ".getenv("SSL_CLIENT_S_DN_O")."<H2>";
echo "<H2> OU = ".getenv("SSL_CLIENT_S_DN_OU")."<H2>";
echo "</DIV>";

phpinfo();
?>