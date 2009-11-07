mode con:cols=65 lines=20
TITLE UNIFORM SERVER - Stop and Uninstall Service
COLOR B0
@echo off
cls
rem ###################################################
rem # Name: Service_Stop_Uninstall.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 28-6-2009
rem ##################################################

rem ### working directory current folder 
pushd %~dp0

..\usr\local\php\php.exe -n  ..\unicon\main\service_stop_uninstall.php

rem ..\unicon\program\unidelay.exe 6
pause

rem ### restore original working directory
popd

