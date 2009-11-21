TITLE UNIFORM SERVER - Service stop test
COLOR B0
@echo off
cls
rem ###################################################
rem # Name: z_service_stop.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 20-11-2009
rem ###################################################

rem ### working directory current folder 
pushd %~dp0

echo.
echo == z_service_stop.bat ==

echo.
echo ======= MYSQL SERVICE ===============
echo.


net stop MySQLS1
..\usr\local\mysql\bin\mysqld-opt.exe --remove MySQLS1

echo.
echo ======= APACHE SERVICE ==============
echo.


net stop ApacheS1
..\usr\local\apache2\bin\Apache.exe -k uninstall -n "ApacheS1"

echo.
pause

rem ### restore original working directory
popd
