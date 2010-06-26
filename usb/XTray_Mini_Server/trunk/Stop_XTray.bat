:###############################################
:### Uniform Server - ucUniTray Stop BAT     ###
:###############################################
:# File Name: Stop_ucUniTray.bat
:# Created By: UniCenter MPG
:# Edited Last By: Mike Gleaves (ric)
:# Modified By: Kris (XooFoo.org)
:# Comment: Stops tray icon 
:# Unofficial plugin for MiniServer 21 Xoops
:# 10-14-08 V0.1
:################################################


@echo off
rem ## Kill Xtray Menu
udrive\home\admin\program\pskill.exe XTray.exe c
echo.
rem ## Save return path
pushd %~dp0

rem ## Check to see if already stopped
if NOT exist udrive\usr\local\apache2\logs\httpd.pid goto :ALREADYKILLED

rem ## It exists is it running
SET /P pid=<udrive\usr\local\apache2\logs\httpd.pid
netstat -anop tcp | FIND /I " %pid%" >NUL
IF ERRORLEVEL 1 goto :NOTRUNNING
IF ERRORLEVEL 0 goto :RUNNING

:NOTRUNNING
rem ## Not shutdown using server_stop.bat hence delete files
del udrive\usr\local\apache2\logs\httpd.pid
del udrive\usr\local\mysql\data\mysql_mini.pid 
        
goto :ALREADYKILLED

rem ## It is running hence shut server down
:RUNNING
rem ## Get drive letter
SET /P Disk=<udrive\usr\local\apache2\logs\drive.txt

rem ## Remove pid file server was closed
del udrive\usr\local\mysql\data\mysql_mini.pid

rem ## Kill MySQL server
udrive\usr\local\mysql\bin\mysqladmin.exe --port=3318 --user=root --password=root shutdown

rem ## Kill Apache process and all it's sub-processes
SET killstring= -t "%pid%"
udrive\home\admin\program\pskill.exe  Apache_18.exe c

echo  MySQL Stopped
echo  Apache Stopped

rem ## Remove pid file
del udrive\usr\local\apache2\logs\httpd.pid

rem ## Remove disk file
del udrive\usr\local\apache2\logs\drive.txt

rem ## Kill drive
subst %Disk%: /D

goto :END

:ALREADYKILLED
echo  MySQL already stopped
echo  Apache already stopped
:END
echo.

:pause

rem ## Return to caller
popd
