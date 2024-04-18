@echo off

set /p path0=请输入文件夹路径: 

cd "%path0%"

:Start
set /p str1=请输入要替换的文件类型（可替换空格）：

set /p str2=请输入替换后的文件类型（去除则直接回车）：

echo.

echo 正在修改文件类型中，请稍候……

for /f "delims=" %%a in ('dir /s /b ^|sort /+65535') do (

if "%%~nxa" neq "%~nx0" (

set "file=%%a"

set "name=%%~na"

set "extension=%%~xa"

call set "extension=%%extension:%str1%=%str2%%%"

setlocal enabledelayedexpansion

ren "!file!" "!name!!extension!" 2>nul

endlocal

)

)

set /p a=是否继续在该路径执行操作（y/n）: 
if /i "%a%"=="n" exit
if /i "%a%"=="y" goto :Start
exit;