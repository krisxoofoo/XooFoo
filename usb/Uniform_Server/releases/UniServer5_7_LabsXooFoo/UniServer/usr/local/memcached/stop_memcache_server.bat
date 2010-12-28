@echo off
cls

REM --------------------------------------------------------
REM cloture service memcached Server
REM --------------------------------------------------------


if not "%os%"=="Windows_NT" goto NextStep
REM --- Section spécifique à Windows NT ---
title Fermeture Memcached Server
color C9
:NextStep

REM ---- Entrez votre code ici ----

net stop "memcached Server"