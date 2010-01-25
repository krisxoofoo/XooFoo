#!/usr/bin/perl

print "Content-type: text/html\r\n\r\n";
print "<html>\n";
print "<head><title>Test Script !</title></head>\n";
print "<body>\n";
print "<h2>Bonjour le Monde !</h2>\n";
# print "$_ = '$ENV{ $_ }'<br>" for sort keys %ENV;
print "</body>\n";
print "</html>\n";

exit (0);
