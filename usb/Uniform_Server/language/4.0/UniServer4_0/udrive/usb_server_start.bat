TITLE UNIFORM SERVER - Start
cls
rem ###################################################
rem # Name: usb_server_start.bat
rem # Location: uniform_sServer
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: MPG (ric)
rem # V 1.0 31-12-2008
rem ##################################################
rem @translation     kris_fr (http://www.xoofoo.org)
rem @specification   _LANGCODE: fr
rem @specification   _CHARSET: UTF-8
rem @version         $Id$
rem ##################################################
@echo off
COLOR 8F
mode con:cols=70 lines=20
echo.

rem working directory current folder 
pushd %~dp0

rem set current drive letter
set Disk=%~d0
set Disk=%Disk:~0,1%

rem  Command line parameters:
rem  Server_Start.bat %1 %2 %3
rem  %1 = Drive letter to use - Use a dummy drive letter
rem  %2 = mysql (run MySql server) or nomysql (do not run MySql server)
rem  %3 = console (Open a command prompt at folder MySQL Bin)
rem Note: If using %2 you must set a value for %1
rem Note: If using %3 you must set values for %1 and %2
rem Note: Default, uses drive currentdrive, runs the MySQL server and does not run a command prompt.

rem ## Has this Apache been started
if NOT exist %Disk%:\usr\local\apache2\logs\httpd.pid goto :NOTSTARTED

rem ## It was srarted is it running
SET /P pid=<%Disk%:\usr\local\apache2\logs\httpd.pid
netstat -anop tcp | FIND /I " %pid%" >NUL
IF ERRORLEVEL 1 goto :NOTRUNNING
IF ERRORLEVEL 0 goto :RUNNING

:NOTRUNNING
rem ## Not shutdown using server_stop.bat hence delete files
del %Disk%:\usr\local\apache2\logs\httpd.pid
if exist %Disk%:\usr\local\apache2\logs\drive.txt del %Disk%:\usr\local\apache2\logs\drive.txt

:NOTSTARTED
rem ## Set initial dummy values for port check

set pass1=found
set pass2=found
set pass3=found

rem ## Check for another server on this Apache port
netstat -anp tcp | FIND /I "0.0.0.0:80 " >NUL
IF ERRORLEVEL 1 set pass1=notfound

rem ## Check for another server on this Secure Apache port
netstat -anp tcp | FIND /I "0.0.0.0:443 " >NUL
IF ERRORLEVEL 1 set pass2=notfound

rem ## Check for another server on this MySQL port
netstat -anp tcp | FIND /I "0.0.0.0:3306 " >NUL
IF ERRORLEVEL 1 set pass3=notfound

if %pass1%==notfound if %pass2%==notfound if %pass3%==notfound goto NOTFOUND
echo.
echo  Les 3 ports doivent ˆtre libre pour lancer les serveurs.
echo.
if %pass1%==notfound echo  Port 80   est libre - OK pour lancer le serveur Apache
if %pass1%==found echo  Port 80   est pris  - STOP le serveur Apache ne peut pas d‚marrer
if %pass2%==notfound echo  Port 443  est libre - OK pour lancer le serveur s‚curis‚ Apache
if %pass2%==found echo  Port 443  est pris  - STOP le serveur s‚curis‚ Apache ne peut pas d‚marrer
if %pass3%==notfound echo  Port 3306 est libre - OK pour lancer le serveur MySQL
if %pass3%==found echo  Port 3306 est pris  - STOP le serveur MySQL ne peut pas d‚marrer
echo.
pause
goto END

:NOTFOUND
echo  Port 80   est libre - OK pour lancer le serveur Apache
echo  Port 443  est libre - OK pour lancer le serveur s‚curis‚ Apache
echo  Port 3306 est libre - OK pour lancer le serveur MySQL

rem ## Save drive letter to file for use by plugins.
(set /p dummy=%Disk%) >usr\local\apache2\logs\drive.txt <nul

rem ### Apache not running. Create variables for paths and programs 

set apachepath=\usr\local\apache2\
set apacheit=%Disk%:%apachepath%bin\Apache.exe -f %apachepath%conf\httpd.conf -d %apachepath%.
set programit=%Disk%:\home\admin\program\
set closeit=%programit%close.bat %Disk%

rem ### Provide feedback to user
echo.
echo  Le serveur travaille sur le disque %Disk%
echo  Pour aller sur Apanel, utilisez : http://127.0.0.1/apanel/
echo                OU
echo  Pour aller sur Apanel, utilisez http/localhost/apanel/
echo.

rem ### Start Apache server
start %programit%uniserv.exe "%apacheit%" "%closeit%"

rem ### Before starting Apanel wait for Apache to start 
rem ### Safety loop counter cnt give up after 60 seconds
echo  Lancement Apache ...............

echo.
set /a cnt=0
:next1
set /a cnt+=1
if "%cnt%"=="60" goto :TIMEDOUT
%Disk%:\home\admin\program\unidelay.exe
%Disk%:\home\admin\program\pskill.exe Apache.exe > nul
IF ERRORLEVEL 1 goto :next1

%Disk%:\home\admin\program\unidelay.exe 2
rem ### Start Apanel
start %Disk%:\home\admin\www\redirect.html

rem ### Start MySQL server - skip if requested not to start (%2)
if "%2"=="nomysql" goto :NOMYSQL
echo  Lancement MySQL ...............

start %Disk%:\usr\local\mysql\bin\mysqld-opt.exe --defaults-file=/usr/local/mysql/my.cnf


:NOMYSQL

rem ### Does user want to run a command prompt, if not END 
if "%3"=="console" goto :CONSOLE
goto :END

:CONSOLE
rem ### User wants to run a command prompt. Opens in MySQL bin
rem ### Allows command clients to be used (musql.exe and mysqladmin.exe ) 

cd %Disk%:\usr\local\mysql\bin
start "UNIFORM SERVER MySQL Command prompt" cmd.exe 
goto :END

:TIMEDOUT
rem ### Apache failed to start. Kill virtual drive. Inform user
subst %Disk%: /D
echo.
echo Impossible de lancer le serveur Apache
goto :PAUSE

:PROBLEM
echo.
echo Le disque %Disk% ne peut pas ˆtre cr‚‚ !
goto :PAUSE

:RUNNING
echo.
echo  Ce serveur Apache est d‚j… en cours d'ex‚cution.
echo  Vous pouvez arrˆter le serveur … l'aide de Stop.bat

:PAUSE
echo.
pause

:END

rem restore original working directory
popd
EXIT
