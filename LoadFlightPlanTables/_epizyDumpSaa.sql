USE aviation;

SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\saaGeometry.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM saaGeometry;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\saaLocation.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM saaLocation;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\saaNote.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM saaNote;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\saaTimes.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM saaTimes;
