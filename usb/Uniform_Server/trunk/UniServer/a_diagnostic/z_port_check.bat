TITLE UNIFORM SERVER - Service start test
COLOR B0
@echo off
cls
rem ###################################################
rem # Name: z_port_check.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 20-11-2009
rem ###################################################

rem ### working directory current folder 
pushd %~dp0

echo.
echo == z_port_check.bat ==

echo.
netstat -anp tcp
echo.


echo.
pause

rem ### restore original working directory
pop

