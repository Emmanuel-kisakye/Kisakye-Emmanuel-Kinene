# Use PHP 8.4 for this project (Laravel 13). Run once per terminal:  . .\activate.ps1
$phpDir = Join-Path $env:LOCALAPPDATA 'Microsoft\WinGet\Packages\PHP.PHP.8.4_Microsoft.Winget.Source_8wekyb3d8bbwe'
$phpExe = Join-Path $phpDir 'php.exe'

if (-not (Test-Path $phpExe)) {
    Write-Error 'PHP 8.4 not found. Install with: winget install PHP.PHP.8.4'
    return
}

$env:Path = "$phpDir;$env:Path"
Write-Host "Using $(php -v | Select-Object -First 1)"
