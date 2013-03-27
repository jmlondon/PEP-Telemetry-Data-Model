PEP Telemetry Data Model
=================

*This is a working document/repository. Thoughts are not fully formed and edits are not finalized ... but forks are welcome*  

Introduction
----------------------

The NMML Polar Ecosystems Program (PEP) telemetry data model represents the Oracle 11g database structure and objects used to store and process data from telemetry devices deployed on seals. All of the telemetry devices are produced by [Wildlife Computers](http://www.wildlifecomputers.com) (Redmond, Washington, USA). Thus, the current structure and fields within the database entities is closely tied to the strucutre of the csv files produced by the WC-DAP software. The database design can be roughly divided into three sections.

1. seal capture, morphometrics and sampling data
2. input and processing of WC-DAP files via external tables
3. tag deployments and tag inventory

Repository Files
-----------------

The files included in this repository are largely exports from [Oracle SQL Developer Data Modeler](http://www.oracle.com/technetwork/developer-tools/datamodeler/overview/index.html) which is freely available from Oracle for Windows, OS X and Linux. The `pep_telemetry` directory and `pep_telemetry.dmd` file contain all of the information for the pep_telemetry data model. `pep_telemetry.ddl` is a DDL script to generate all of the database components (e.g. tables, materialized views, procedures, indexes). While the DDL is specific to Oracle, advanced database developers should be able to adapt the approach for other database platforms. The `pep_telemetry.pdf` file is a graphical representation of the data model.

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

----------------------------------------
Josh M. London  
Polar Ecosystem Program  
National Marine Mammal Laboratory, Alaska Fisheries Science Center  
National Marine Fisheries Service, NOAA, US Dept. of Commerce  
7600 Sand Point Way NE, Seattle, Washington, USA, 98115 
