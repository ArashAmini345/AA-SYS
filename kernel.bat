@echo off
title kernel
:start
if exist boot.cfg (goto :s) else (goto :a)
:s
cls
color 890
echo.
echo.
echo.
echo hi! and welcome to the setup install "AA system" ! 
echo.
echo for start, I ask you a quation. ok?
pause > nul
cls
echo.
echo.
set /p q1=What your PC name ?
set /p q2=What your User name ? 
if %q1%==DRAMINI echo oh!
if %q2%==%q1% echo error.
cls
pause > nul
cls
echo.
echo.
echo well, done!
pause > nul
echo SYSTEM.BOOT = 1 ; && IF.JUMB.HANG = 0; > boot.cfg
echo ECHO SYSTEM IS CRASHED. PLEASE WAIT TO REPORT. && CRASH2 >   crash1.bat
echo CLS && ECHO HURY! YOUR PC IS NOW REPORTED AND IS GOOD. > CRASH2.bat
echo ECHO PLS WAIT FOR START UP YOUR SYSTEM. > startup.bat
echo SET /P PASSWORD= && IF %PASSWORD%==%pass% goto :a_start > password.bat
DEL APP.BAT
cls
echo.
echo.
echo ok.. hury! you pc is now created! thank you!
start echo thanks !
cls
pause > nul
goto :a
:a
cls
../startup.bat
set SYSTEM=10
SET SYSTEM=100
goto :start_UP
:start_UP
cls
echo.
echo.
echo welcome ! just commenting ! 
set C=C\\
set /p C=
if %C%==Crash ../Crash1.bat
%C%
cls
goto :start_UP
