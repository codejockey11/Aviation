CD epizy

DEL airway.txt
DEL aptAirport.txt
DEL aptArresting.txt
DEL aptAttended.txt
DEL aptRemarks.txt
DEL aptRunway.txt
DEL awosRemarks.txt
DEL awosStation.txt
DEL cdrRoutes.txt
DEL chartSupplement.txt
DEL cifp.txt
DEL cifpExcluded.txt
DEL compares.txt
DEL comStation.txt
DEL dTPP.txt
DEL dof.txt
DEL fixCharting.txt
DEL fixIls.txt
DEL fixLocation.txt
DEL fixNavaid.txt
DEL fixRemarks.txt
DEL ilsApproach.txt
DEL ilsDme.txt
DEL ilsFrequency.txt
DEL ilsGlideslope.txt
DEL ilsMarker.txt
DEL ilsRemarks.txt
DEL maaBaseData.txt
DEL maaContact.txt
DEL maaNotams.txt
DEL maaPolyCoord.txt
DEL maaRemarks.txt
DEL maaTimes.txt
DEL maaUserGroup.txt
DEL navNavaid.txt
DEL navRemarks.txt
DEL pfrRoutes.txt
DEL pjaContact.txt
DEL pjaLocation.txt
DEL pjaRemarks.txt
DEL pjaTimes.txt
DEL pjaUserGroup.txt
DEL starDp.txt
DEL twrAirspace.txt
DEL twrAtis.txt
DEL twrFrequency.txt
DEL twrHoursOfOp.txt
DEL twrRadars.txt
DEL twrRemarks.txt
DEL twrSatellite.txt
DEL twrServices.txt
DEL twrTower.txt

CD..

mysql.exe --login-path=batch --table < _epizyDump.sql

PAUSE