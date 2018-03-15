@echo off
:loop

echo Reloading srcs ...
del "parse.php"
wget "http://localhost/action/parse.php"
timeout 5

goto loop