TITLE UNIFORM SERVER - Start
COLOR B0
@echo off
cls
rem ###################################################
rem # Name: Start_Server.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 21-11-2009
rem ###################################################

rem ### working directory current folder 
pushd %~dp0

echo.
echo == Start_Server.bat ==

..\usr\local\php\php.exe -n  ..\unicon\main\start_servers.php

pause
rem ### restore original working directory
popd

