TITLE UNIFORM SERVER - Service start test
COLOR B0
@echo off
cls
rem ###################################################
rem # Name: z_service_start.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 20-11-2009
rem ###################################################

rem ### working directory current folder 
pushd %~dp0

echo.
echo == z_service_start.bat ==

echo.
echo ======= MYSQL SERVICE ===============
echo.

..\usr\local\mysql\bin\mysqld-opt.exe --install MySQLS1
net start MySQLS1

echo.
echo ======= APACHE SERVICE ==============
echo.

..\usr\local\apache2\bin\Apache.exe -k install -n "ApacheS1"
net start  ApacheS1

echo.
pause

rem ### restore original working directory
pop

