DEL _makeTiles.log

CALL :sub >> _makeTiles.log 2>&1

EXIT /B

:sub

SET GDAL_DRIVER_PATH=C:\Program Files\QGIS 3.22.1\bin\gdalplugins
SET OSGEO4W_ROOT=C:\Program Files\QGIS 3.22.1
SET PATH=%OSGEO4W_ROOT%\bin;%PATH%
SET PYTHONHOME=%OSGEO4W_ROOT%\apps\Python39
SET PYTHONPATH=%OSGEO4W_ROOT%\apps\Python39
SET WEBSITE_ROOT=C:\Users\junk_\Documents\website\public_html\charts

TIME /T

CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw Atlanta.vrt %WEBSITE_ROOT%\atlantaVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\atlantaVfr 
CALL atlantaVfrRename.bat
DEL atlantaVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw Charlotte.vrt %WEBSITE_ROOT%\charlotteVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\charlotteVfr
CALL charlotteVfrRename.bat
DEL charlotteVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw Cincinnati.vrt %WEBSITE_ROOT%\cincinnatiVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\cincinnatiVfr
CALL cincinnatiVfrRename.bat
DEL cincinnatiVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw Detroit.vrt %WEBSITE_ROOT%\detroitVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\detroitVfr
CALL detroitVfrRename.bat
DEL detroitVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw Halifax.vrt %WEBSITE_ROOT%\halifaxVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\halifaxVfr
CALL halifaxVfrRename.bat
DEL halifaxVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw Jacksonville.vrt %WEBSITE_ROOT%\jacksonvilleVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\jacksonvilleVfr
CALL jacksonvilleVfrRename.bat
DEL jacksonvilleVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw Miami.vrt %WEBSITE_ROOT%\miamiVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\miamiVfr
CALL miamiVfrRename.bat
DEL miamiVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw Montreal.vrt %WEBSITE_ROOT%\montrealVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\montrealVfr
CALL montrealVfrRename.bat
DEL montrealVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw NewOrleans.vrt %WEBSITE_ROOT%\newOrleansVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\newOrleansVfr
CALL newOrleansVfrRename.bat
DEL newOrleansVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw NewYork.vrt %WEBSITE_ROOT%\newYorkVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\newYorkVfr
CALL newYorkVfrRename.bat
DEL newYorkVfrRename.bat


CALL "%PYTHONHOME%\Scripts\gdal2tiles.bat" -z 7-10 -w google -r average -g AIzaSyCnoazHa0WEibhtQZmBqlMtXcr9LOjN5Dw Washington.vrt %WEBSITE_ROOT%\washingtonVfr
ECHO ON
pngTile.exe %WEBSITE_ROOT%\washingtonVfr
CALL washingtonVfrRename.bat
DEL washingtonVfrRename.bat

TIME /T

)