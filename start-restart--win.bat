@echo off
cls

:: Main
for /f "tokens=2 delims=:." %%x in ('chcp') do set cp=%%x
chcp 65001>nul

    echo.
    echo [101;93m ┌──────────────────────────────────────────────────────────────────────────┐ [0m
    echo [101;93m │                   PHP Robot Framework Remote Server                      │ [0m
    echo [101;93m └──────────────────────────────────────────────────────────────────────────┘ [0m
    echo.

    set DIR_NAME=lib
    set LIBRARY=%DIR_NAME%/ExampleLibrary.php
    set PORT=11996

    call php src/StartRobotRemoteServer.php %LIBRARY% %PORT%

chcp %cp%>nul