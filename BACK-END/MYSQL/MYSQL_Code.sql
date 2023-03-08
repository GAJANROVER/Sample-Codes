-- SP -------
USE mint_neogroup;



SELECT VERSION();

SELECT * FROM  hr_allattendance  WHERE DATE(checktime) =  '2022-01-28';  


DELIMITER $$
DROP PROCEDURE IF EXISTS mint_demo_sl.SP_ATT_DAILY_PRE_INSERT$$
DROP PROCEDURE IF EXISTS mint_demo_sl.SP_ATT_DAILY_PRE_INSERT$$
DROP PROCEDURE IF EXISTS mint_demo_sl.SP_ATT_NOPAY_OT_PROCESS_FOR_DATE_PERIOD$$
DROP PROCEDURE IF EXISTS mint_demo_sl.SP_ATT_SPLIT_FLEXI_ADJEST$$
DROP PROCEDURE IF EXISTS mint_demo_sl.SP_BEN_APPROVAL_SIYAPATHA$$


DELIMITER ;
SHOW PROCEDURE STATUS WHERE db = 'mint_cdb';

// create table as another table mysql
CREATE TABLE new_table AS SELECT * FROM original_table  


SHOW TABLES;
SHOW FUNCTION STATUS WHERE db = 'mint_cdb';
SHOW PROCEDURE STATUS WHERE db = 'mint_cdb';
show triggers;
SHOW EVENTS;


-- show views
SHOW FULL TABLES IN mint_brescia WHERE TABLE_TYPE LIKE 'VIEW';

SHOW FULL TABLES 
WHERE table_type = 'VIEW';

SHOW FULL TABLES 
LIKE 'VW_MINT_RPT_HIE_ALL';



	desc hr_pm_superiors;
	 SHOW FULL COLUMNS  FROM hr_empbasic;
	 show INDEX from hr_pm_superiors;
	 SHOW CREATE TABLE hr_empbasic;
	 SHOW TABLE STATUS where name ='hr_empbasic';
	 	 SHOW TABLE STATUS where name ='hr_employment';

		  show variables like "max_connections";
SHOW VARIABLES LIKE "max_used_connections";

show status where `variable_name` = 'Threads_connected';


show open tables where in_use>0;
show processlist;
  SHOW FULL PROCESSLIST;
SHOW ENGINE INNODB STATUS;
SHOW GLOBAL VARIABLES LIKE 'innodb_rollback_on_timeout';

SELECT * FROM  main_sp_logs msl order by sp_log_id  DESC ;
SELECT * FROM main_sp_config;
SELECT * FROM main_config;
  SHOW EVENTS;
  SHOW OPEN TABLES; // find table is locked or not
  SHOW OPEN TABLES in mint_siyapatha_new where in_use > 1; // find table is locked or not with db name


  SELECT * FROM tax_rate_for_tier_tax trftt WHERE trftt.ref_tax_id = 1 AND 164446 BETWEEN min_amount AND max_amount