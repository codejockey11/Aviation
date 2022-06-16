USE aviation;

SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\aptAirport.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM aptAirport;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\aptAttended.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM aptAttended;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\aptRunway.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM aptRunway;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\aptArresting.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM aptArresting;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\aptRemarks.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM aptRemarks;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\awosStation.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM awosStation;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\awosRemarks.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM awosRemarks;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\airway.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM airway;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\cdrRoutes.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM cdrRoutes;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\cifp.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM cifp;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\cifpExcluded.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM cifpExcluded;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\comStation.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM comStation;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\chartSupplement.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM chartSupplement;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\dof.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM obstacle;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\dTPP.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM dTPP;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\compares.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM compares;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\fixLocation.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM fixLocation;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\fixNavaid.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM fixNavaid;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\fixIls.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM fixIls;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\fixRemarks.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM fixRemarks;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\fixCharting.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM fixCharting;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\ilsApproach.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM ilsApproach;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\ilsFrequency.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM ilsFrequency;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\ilsGlideslope.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM ilsGlideslope;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\ilsDme.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM ilsDme;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\ilsMarker.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM ilsMarker;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\ilsRemarks.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM ilsRemarks;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\maaBaseData.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM maaBaseData;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\maaPolyCoord.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM maaPolyCoord;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\maaTimes.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM maaTimes;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\maaUserGroup.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM maaUserGroup;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\maaContact.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM maaContact;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\maaNotams.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM maaNotams;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\maaRemarks.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM maaRemarks;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\navNavaid.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM navNavaid;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\navRemarks.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM navRemarks;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\pfrRoutes.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM pfrRoutes;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\pjaLocation.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM pjaLocation;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\pjaTimes.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM pjaTimes;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\pjaUserGroup.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM pjaUserGroup;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\pjaContact.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM pjaContact;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\pjaRemarks.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM pjaRemarks;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\starDp.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM starDp;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\twrTower.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM twrTower;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\twrHoursOfOp.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM twrHoursOfOp;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\twrFrequency.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM twrFrequency;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\twrServices.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM twrServices;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\twrRadars.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM twrRadars;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\twrRemarks.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM twrRemarks;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\twrSatellite.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM twrSatellite;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\twrAirspace.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM twrAirspace;


SELECT *
INTO OUTFILE 'C:\\Users\\junk_\\Documents\\LoadFlightPlanTables\\epizy\\twrAtis.txt'
	FIELDS TERMINATED BY '~'
	LINES TERMINATED BY '\r\n'
FROM twrAtis;
