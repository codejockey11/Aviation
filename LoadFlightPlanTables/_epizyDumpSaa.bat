CD epizy

DEL saaGeometry.txt
DEL saaLocation.txt
DEL saaNote.txt
DEL saaTimes.txt

CD..

mysql.exe --login-path=batch --table < _epizyDumpSaa.sql

PAUSE