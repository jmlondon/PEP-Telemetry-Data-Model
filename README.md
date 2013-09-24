PEP Telemetry Data Model
------------------------

*This is a working document/repository. Thoughts are not fully formed and edits are not finalized*  

### Introduction


The NMML Polar Ecosystems Program (PEP) telemetry data model is mostly represented by the Oracle 11g database structure and objects used to store and process data from telemetry devices deployed on seals. All of the telemetry devices are produced by [Wildlife Computers](http://www.wildlifecomputers.com) (Redmond, Washington, USA). Thus, the current structure and fields within the database entities are closely tied to the strucutre of the csv files produced by the [WC-DAP](http://www.wildlifecomputers.com/downloads.aspx) software. 

The current data model and workflow can be roughly divided into four sections.

1. seal capture, morphometrics and sampling data
2. input and processing of WC-DAP files via external tables
3. tag deployments and tag inventory
4. geo-spatial data and processing (via PostgreSQL/PostGIS and in development) 

#### Repository Files

The files included in this repository are largely exports from [Oracle SQL Developer Data Modeler](http://www.oracle.com/technetwork/developer-tools/datamodeler/overview/index.html) which is freely available from Oracle for Windows, OS X and Linux. The `pep_telemetry` directory and `pep_telemetry.dmd` file contain all of the information for the PEP Telemetry data model. `pep_telemetry.ddl` is a DDL script to generate all of the database components (e.g. tables, materialized views, procedures, indexes). While the DDL is specific to Oracle, advanced database developers should be able to adapt the approach for other database platforms. The `pep_telemetry.pdf` file is a graphical representation of the data model.

Files and documentation related to the Argos program and, especially, Argos WebServices are found within the `argos` directory.

### Seal capture, morphometrics and sampling data

**Key Database Tables**
`pepcapturedata`,`pepmorphs`,`pepsamples`,`pepdrugs`

### Input and processing of WC-DAP files via external tables

#### Distribution of Data

Prior to ingestion of data into the Oracle database, the raw data distributed from CLS America/Argos must be obtained, archived and processed with the Wildlife Computers' [WC-DAP](http://www.wildlifecomputers.com/downloads.aspx) software. Currently, data are obtained via two methods: weekly sftp transfer and monthly CD distribution. Both of these methods cost additional money and could be replaced by implementing a data delivery method via the Argos WebServices platform (free). The platform relies on the SOAP protocol and documentation of the SOAP API and a PHP example are included in the `argos` directory. Initial testing of the PHP example has been completed and the install is complicated by the reliance on SOAP MTOM protocols and, thus, the need for the [WSO2 Web Services Framework for PHP](http://wso2.com/products/web-services-framework/php/). This project appears to be no longer fully supported, although the example provided by CLS/Argos demonstrates installation and use under Windows with a WAMP server installation.

#### Processing Data with WC-DAP and AMD.exe

#### Ingesting Oracle External Tables and Processing New Data

**Key Database Tables**
`extargos`,`exthistos`,`extlocations`,`extstatus`,`histos`,`locations`,  
`drytimes`,`drytimes_20`,`divedepth`,`tad`,`status`,`xtargos_reprocess`,`locations_repro`

**Stored Procedures to Update With New Data**
`updatehistos`,`updatelocations`,`updatestatus`

### Tag deployments and tag inventory

**Key Database Tables**
`pepdeployments`,`peptaginfo`

### Geo-spatial Data and Processing




----------------------------------------
Josh M. London  
Polar Ecosystem Program  
National Marine Mammal Laboratory, Alaska Fisheries Science Center  
National Marine Fisheries Service, NOAA, US Dept. of Commerce  
7600 Sand Point Way NE, Seattle, Washington, USA, 98115 
