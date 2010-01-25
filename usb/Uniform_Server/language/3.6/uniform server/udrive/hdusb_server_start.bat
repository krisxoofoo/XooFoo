echo off
cls
rem ###################################################
rem # Name: hdusb_server_start.bat
rem # Location: uniform_sServer
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: MPG (ric)
rem # V 1.0 21-11-2008
rem ##################################################

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


rem ### Is Apache running if it is jump to STARTED 
rem ### First check for system error jump to Pause allows error message to be displayed.
%Disk%:\home\admin\program\pskill.exe Apache.exe
if errorlevel 2 goto :PAUSE
if not errorlevel 1 goto :STARTED


rem ### Drive was created. Create variables for paths and programs 
set apachepath=\usr\local\apache2\
set apacheit=%Disk%:%apachepath%bin\Apache.exe -f %apachepath%conf\httpd.conf -d %apachepath%.
set programit=%Disk%:\home\admin\program\
set closeit=%programit%close.bat %Disk%

rem ### Provide feedback to user
CLS
echo Le serveur travaille sur le disque %Disk%:\ [http/127.0.0.1/apanel/]

rem ### Start Apache server
start %programit%uniserv.exe "%apacheit%" "%closeit%"

rem ### Before starting Apanel wait for Apache to start 
rem ### Safety loop counter cnt give up after 60 seconds
echo lancement Apache ...............
set /a cnt=0
:next
set /a cnt+=1
if "%cnt%"=="60" goto :TIMEDOUT
%Disk%:\home\admin\program\unidelay.exe
%Disk%:\home\admin\program\pskill.exe Apache.exe > nul
IF ERRORLEVEL 1 goto :next

rem ### Start Apanel
start %Disk%:\home\admin\www\redirect.html

rem ### Start MySQL server - skip if requested not to start (%2)
if "%2"=="nomysql" goto :NOMYSQL
start %Disk%:\usr\local\mysql\bin\mysqld-opt.exe --defaults-file=/usr/local/mysql/my.cnf
:NOMYSQL

rem ### Does user want to run a command prompt, if not END 
if "%3"=="console" goto :CONSOLE
goto :END

:CONSOLE
rem ### User wants to run a command prompt. Opens in MySQL bin
rem ### Allows command clients to be used (musql.exe and mysqladmin.exe ) 

cd %Disk%:\usr\local\mysql\bin
start cmd.exe
goto :END

:TIMEDOUT
rem ### Apache failed to start. Kill virtual drive. Inform user
subst %Disk%: /D
CLS
echo Impossible de lancer le serveur Apache
goto :PAUSE

:HINT
CLS
echo Le disque %Disk% est plein. Utilisez start.bat [lettre du disque]
goto :PAUSE

:STARTED
CLS
echo ERREUR!!! 
echo Une des instances du serveur Apache est active. Utilisez stop.bat

:PAUSE
echo .
pause

:END

rem restore original working directory
popd
