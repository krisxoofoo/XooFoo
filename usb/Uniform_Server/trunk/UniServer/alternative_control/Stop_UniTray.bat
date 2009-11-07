TITLE UNIFORM SERVER - Stop UniTray
@echo off

rem ###################################################
rem # Name: Stop_Unitray.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 28-6-2009
rem # Stops UniTray
rem ##################################################

rem ### working directory current folder 
pushd %~dp0

@echo off

..\usr\local\php\php-win.exe -n  ..\unicon\tray_menu\stop_unitray.php

rem pause

rem ### restore original working directory
popd
