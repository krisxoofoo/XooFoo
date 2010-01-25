#!/usr/bin/perl

$skip = (" gif jpg bmp pcx tif zip gz rar tar cab ha exe com bat dll hlp xls doc pdf ps dbf htaccess old ");
$wwwdocs = (" html htm shtml php shtm phtm phtml ");

require header;
require secure;

parseform();

if ($FORM{'act'}eq''){
 	&showwelcome;
}

elsif($FORM{'act'}eq'Convert'){
 	convert ("/cgi-bin","/cgi-bin");
 	print "
 	<div id=\"main\">
 	<h2>&#187; Convertisseur Windows &agrave; Unix</h2>
 	<h3>Convertir des fichiers Windows Perl</h3>
 	<p>Convertis !</p>
 	</div>";

require footer;
	}

exit;

# usege convert (path,path1);
sub convert {
 	my @names;
 	my $name;
 	my ($path)=$_[0] ;
 	my ($path1)=$_[1] ;
 	opendir DIR,"$path";
 	$name=readdir DIR;
 	$name=readdir DIR;

 	@names=readdir DIR;
 	closedir DIR;
 	foreach $name (@names){
  		if (-d "$path/$name"){mkdir ("$path1/$name"); convert ("$path/$name","$path1/$name")};

  		@namess=split(/\./, $name);

  		if (!(-d "$path/$name")&&(!($skip=~ /@namess[$namess+1]/)||(@namess[$namess+1]eq''))){
   			open (FILE,"$path/$name");
   			binmode FILE;
   			@lines=<FILE>;
   			close (FILE);

   			if (@lines[0]=~ /\#\!.+perl/i) {@lines[0]="\#\!/usr/bin/perl\n";};

    			foreach(@lines){
     				s/\r//g;
    			}

   			open (FILE,">$path1/$name");
   			binmode FILE;
   			print FILE @lines;
   			close (FILE);
   			print "$path/$name - converted.<br>";
   		}
 
		else {
   			open (FILE,"$path/$name");
   			binmode FILE;
   			@lines=<FILE>;
   			close (FILE);
   			open (FILE,">$path1/$name");
   			binmode FILE;
   			print FILE @lines;
   			close (FILE);
   			print "$path/$name - transferred.<br>";
   		}
  	}
 }

sub showwelcome {

require header;

	print <<ENDDD;
	<div id=\"main\">
	<h2>&#187; Convertisseur Windows &agrave; Unix</h2>
	<h3>Convertir des fichiers Windows Perl</h3>
	<p>Si vous rencontrez des probl&egrave;mes en ex&eacute;cutant ces scripts cgi sur Unix, ce programme convertira les scripts cgi depuis Windows au format Unix (#10#13=>#13).<br /><br />Instruction :<br />Apr&egrave;s ex&eacute;cution, vous pouvez coller les scripts pr&ecirc;t &agrave; ex&eacute;cution sur une machine Unix depuis le dossier \\cgi-bin\\.<br /><br /><form name="form" action="$ENV{SCRIPT_NAME}" method="post"><input type="submit" name="act" value="Convertir"></font></form></p>
	</div>
ENDDD

require footer;
}

sub parseform() {
	if($ENV{'REQUEST_METHOD'} eq 'GET'){
		$buffer=$ENV{'QUERY_STRING'}; 
	}

	elsif($ENV{'REQUEST_METHOD'} eq 'POST'){ 
		read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
	} 

	@pairs = split(/&/, $buffer);

	foreach $pair (@pairs) {
		($name, $value) = split(/=/, $pair);
		$value =~ tr/+/ /;
		$value =~s/%([a-fA-F0-9][a-fA-F0-9])/pack("c",hex($1))/eg; 
		$FORM{$name} = $value;
	}
}

