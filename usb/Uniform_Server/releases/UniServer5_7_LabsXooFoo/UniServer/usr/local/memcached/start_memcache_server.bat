@echo off
cls

REM --------------------------------------------------------
REM lancement service memcached Server
REM --------------------------------------------------------


if not "%os%"=="Windows_NT" goto NextStep
REM --- Section spécifique à Windows NT ---
title Lancement Memcached Server
color 80
:NextStep

REM ---- Entrez votre code ici ----

net start "memcached Server"