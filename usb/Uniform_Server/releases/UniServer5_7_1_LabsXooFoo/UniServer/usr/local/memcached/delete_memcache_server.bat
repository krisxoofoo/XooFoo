@echo off
cls

REM --------------------------------------------------------
REM retrait service memcached Server
REM --------------------------------------------------------


if not "%os%"=="Windows_NT" goto NextStep
REM --- Section spécifique à Windows NT ---
title Retrait Service Memcached Server
color C9
:NextStep

REM ---- Entrez votre code ici ----

sc delete "memcached Server"