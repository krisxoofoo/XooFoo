@echo off
cls

REM --------------------------------------------------------
REM installation service memcached Server
REM --------------------------------------------------------


if not "%os%"=="Windows_NT" goto NextStep
REM --- Section spécifique à Windows NT ---
title Installation Service Memcached Server
color 2F
:NextStep

REM ---- Entrez votre code ici ----
cmd /c memcached.exe -d install