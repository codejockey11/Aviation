saaToKml.exe

SORT /M 500000 < saaLocation.txt > saaLocationSorted.txt
SORT /M 500000 < saaGeometry.txt > saaGeometrySorted.txt
SORT /M 500000 < saaTimes.txt > saaTimesSorted.txt
SORT /M 500000 /REC 65535 < saaNote.txt > saaNoteSorted.txt

mysql.exe --login-path=batch --table < saa.sql

DEL moa.kml
DEL controlled.kml
DEL prohibited.kml
DEL restricted.kml
DEL alert.kml
DEL warning.kml
DEL national.kml

DEL temp.xml

DEL saaLocation.txt
DEL saaGeometry.txt
DEL saaTimes.txt
DEL saaNote.txt

REM DEL saaLocationSorted.txt
REM DEL saaGeometrySorted.txt
REM DEL saaTimesSorted.txt
REM DEL saaNoteSorted.txt

PAUSE