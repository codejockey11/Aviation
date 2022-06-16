DEL _checkTile.log

CALL :sub >> _checkTile.log 2>&1

:sub

SET WEBSITE_ROOT=C:\Users\junk_\Documents\website\public_html\charts

TIME /T

checkTile.exe %WEBSITE_ROOT%\atlantaVfr
CALL atlantaVfrDeleter.bat
DEL atlantaVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\charlotteVfr
CALL charlotteVfrDeleter.bat
DEL charlotteVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\cincinnatiVfr
CALL cincinnatiVfrDeleter.bat
DEL cincinnatiVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\detroitVfr
CALL detroitVfrDeleter.bat
DEL detroitVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\halifaxVfr
CALL halifaxVfrDeleter.bat
DEL halifaxVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\jacksonvilleVfr
CALL jacksonvilleVfrDeleter.bat
DEL jacksonvilleVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\miamiVfr
CALL miamiVfrDeleter.bat
DEL miamiVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\montrealVfr
CALL montrealVfrDeleter.bat
DEL montrealVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\newOrleansVfr
CALL newOrleansVfrDeleter.bat
DEL newOrleansVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\newYorkVfr
CALL newYorkVfrDeleter.bat
DEL newYorkVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\washingtonVfr
CALL washingtonVfrDeleter.bat
DEL washingtonVfrDeleter.bat

checkTile.exe %WEBSITE_ROOT%\weather
CALL weatherDeleter.bat
DEL weatherDeleter.bat

TIME /T

)