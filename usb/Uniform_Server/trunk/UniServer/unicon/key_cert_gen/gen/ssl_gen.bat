:mode con:cols=65 lines=20
TITLE UNIFORM SERVER - SSL Gen
COLOR B0
@echo off
cls
rem ###################################################
rem # Name: ssl_gen.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 27-8-2009
rem # Inputs %1 if not supplied defaults are used
rem #        %2 parameter used as is 
rem # %2 O=UniServer OU=Secure demo CN=localhost
rem ##################################################

rem ### working directory current folder 
pushd %~dp0

rem #== Set environment variable
set OPENSSL_CONF=openssl.cnf

rem #== Set defaults
IF "%1" == ""     goto :NOTSET
IF NOT "%1" == "" goto :GENETATE

:NOTSET
rem #=== Use defauts 
rem #== Create a private key and signing request
openssl req -new -sha1 -newkey rsa:1024 -nodes -keyout server.key -out server.csr -subj "/O=UniServer/OU=Secure Demo/CN=localhost"
goto :SIGN

:GENETATE

rem #== Create a private key and signing request
openssl req -new -sha1 -newkey rsa:1024 -nodes -keyout server.key -out server.csr -subj %2

:SIGN
rem #== Self-sign Certificate 
openssl x509 -in server.csr -out server.crt -req -signkey server.key -days 3650

rem #== Copy files to server
copy server.crt   ..\..\..\usr\local\apache2\conf\ssl.crt\server.crt
copy server.key   ..\..\..\usr\local\apache2\conf\ssl.key\server.key

rem #== Clean folder "gen" by deleting files:
del server.key
del server.crt
move server.csr ..\server.csr

:pause

rem ### restore original working directory
popd
EXIT