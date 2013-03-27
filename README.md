PEP Telemetry Data Model
=================

*This is a working document/repository. Thoughts are not fully formed and edits are not finalized* 

Josh M. London  
Polar Ecosystem Program  
National Marine Mammal Laboratory, Alaska Fisheries Science Center  
National Marine Fisheries Service, NOAA, US Dept. of Commerce  
7600 Sand Point Way NE, Seattle, Washington, USA, 98115  

*26 March 2013*

Introduction
----------------------

The NMML Polar Ecosystems Program (PEP) telemetry data model represents the Oracle 11g database structure and objects used to store and process data from telemetry devices deployed on seals. All of the telemetry devices are produced by [Wildlife Computers](http://www.wildlifecomputers.com) (Redmond, Washington, USA). Thus, the current structure and fields within the database entities is closely tied to the strucutre of the csv files produced by the WC-DAP software. The database design can be roughly divided into three sections.

1. seal capture, morphometrics and sampling data
2. input and processing of WC-DAP files via external tables
3. tag deployments and tag inventory

Seal capture, morphometrics and sampling data
---------------------------------------------

`pepcapturedata`,`pepmorphs`,`pepsamples`,`pepdrugs`


Input and processing of WC-DAP files via external tables
--------------------------------------------------------

`extargos`,`exthistos`,`extlocations`,`extstatus`,`histos`,`locations`,  
`drytimes`,`drytimes_20`,`divedepth`,`tad`,`status`,`xtargos_reprocess`,`locations_repro`

Tag deployments and tag inventory
---------------------------------

`pepdeployments`,`peptaginfo`

Stored Procedures to Update With New Data
------------------------------------------

`updatehistos`,`updatelocations`,`updatestatus`

Planned Additions and Improvements
----------------------------------
