COLOR B0
TITLE Uniform Server - Force Database Backup
@echo off
cls

rem ### working directory current folder 
pushd %~dp0

..\..\usr\local\php\php.exe  db_backup.php

rem ### restore original working directory
echo .
pause
popd
EXIT
