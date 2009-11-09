mode con:cols=65 lines=20
TITLE UNIFORM SERVER - Stop Cron
COLOR B0
@echo off
cls
rem ###################################################
rem # Name: Stop_Cron.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 27-9-2009
rem ##################################################

rem ### working directory current folder 
pushd %~dp0

..\usr\local\php\php.exe -c ..\usr\local\php\php-cli.ini ..\unicon\main\stop_servers.php 16

rem ..\unicon\program\unidelay.exe 3
pause

rem ### restore original working directory
popd

