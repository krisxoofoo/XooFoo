@echo off
TITLE UNIFORM SERVER - Start UniTray

rem ###################################################
rem # Name: Start_UniTray.bat
rem # Created By: The Uniform Server Development Team
rem # Edited Last By: Mike Gleaves (ric)
rem # V 1.0 28-6-2009
rem # Starts UniTray
rem ##################################################

rem ### working directory current folder 
pushd %~dp0

..\usr\local\php\php-win.exe -n  ..\unicon\tray_menu\start_unitray.php

rem pause

rem ### restore original working directory
popd
