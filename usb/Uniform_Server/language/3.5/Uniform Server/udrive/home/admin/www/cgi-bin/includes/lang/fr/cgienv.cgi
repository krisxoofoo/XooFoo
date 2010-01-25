#!/usr/bin/perl

sub urldecode{ 
	local($val)=@_; 
	$val=~s/\+/ /g; 
	$val=~s/%([0-9A-H]{2})/pack('C',hex($1))/ge; 
	return $val;
}

require header;

print "
<div id=\"main\">
<h2>&#187; Environnement CGI</h2>
<h3>Affichage de l\'environnement CGI</h3>"; 

foreach $env_var (keys %ENV){ 
	print "<p><b>$env_var</b> = <i>$ENV{$env_var}</i> <br /></p>\n"; 
} 

print "</div>";

require footer;
