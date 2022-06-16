USE aviation;

SELECT ICAO,latitude,longitude INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\classD.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM aptairport WHERE facilityId IN (SELECT facilityId FROM twrairspace WHERE classD='Y') ORDER BY ICAO;

SELECT ICAO,latitude,longitude INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\classC.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM aptairport WHERE facilityId IN (SELECT facilityId FROM twrairspace WHERE classC='Y') ORDER BY ICAO;
