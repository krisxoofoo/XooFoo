mode con:cols=80 lines=39
TITLE UNIFORM SERVER - Certificate and Key generator 
COLOR B0
@echo off
cls
rem ###################################################
rem # Name: Run.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 14-6-2009
rem ##################################################

rem ### working directory current folder 
pushd %~dp0

..\..\usr\local\php\php.exe -n  ssl_gen.php

rem ### restore original working directory
pause
popd
EXIT

