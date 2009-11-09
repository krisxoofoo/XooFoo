COLOR B0
TITLE Uniform Server - Force Database Backup
@echo off
cls

rem ### working directory current folder 
pushd %~dp0

..\..\usr\local\php\php.exe -c ..\..\usr\local\php\php-cli.ini db_backup.php

rem ### restore original working directory
echo .
pause
popd
EXIT
