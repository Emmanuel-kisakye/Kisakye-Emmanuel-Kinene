@echo off
set "PHP84=%LOCALAPPDATA%\Microsoft\WinGet\Packages\PHP.PHP.8.4_Microsoft.Winget.Source_8wekyb3d8bbwe\php.exe"
if not exist "%PHP84%" (
    echo PHP 8.4 not found. Install with: winget install PHP.PHP.8.4
    exit /b 1
)
"%PHP84%" "%~dp0artisan" %*
