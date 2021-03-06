DROP TABLE adult;

CREATE TABLE `adult` (
  `ADULT_ID` int(5) NOT NULL AUTO_INCREMENT,
  `PHY_HEALTH` text NOT NULL,
  `MENT_EMO_HEAl` text NOT NULL,
  `SIG_INJ` text NOT NULL,
  `SMOKE` text NOT NULL,
  `ALCO_DRUGS` text NOT NULL,
  `ASSIST_DEV` text NOT NULL,
  `PERS_ASSIST` text NOT NULL,
  `YEARS_FE` int(2) NOT NULL,
  `DOM_HAND` text NOT NULL,
  `CB_HEALTH_COND` text NOT NULL,
  `TU_HEALTH_COND` text NOT NULL,
  `PMI_ID` int(5) NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`ADULT_ID`),
  KEY `PMI_ID` (`PMI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

INSERT INTO adult VALUES("2","Good","Good","Alson","Alson","Alson","Alson","Alson","15","Left","Fever","Fever","2","Jan","0"); 
INSERT INTO adult VALUES("3","Good","--Select--","Yes","No","Yes","Yes","undefined","16","Left","fever","fever","3","Jan","0"); 
INSERT INTO adult VALUES("4","Good","Good","No","No","No","No","No","15","Left","Fever","Back Injury","4","Jan","0"); 
INSERT INTO adult VALUES("5","Poor","Poor","Yes","Yes","Yes","Yes","Yes","15","Left","Fever","Dengue","5","Jan","0"); 
INSERT INTO adult VALUES("6","Good","Good","Broken Ankle","No information given!","Moderately, Once or Twice a year","No information given!","No information given!","15","Left","Intense Headache","No information given!","6","Jan","0"); 
INSERT INTO adult VALUES("7","Good","Good","No","twice a year sometimes none","4 to 6 times a month","No","No","15","Left","Broken Ankle","Dengue Fever","7","Jan","0"); 
INSERT INTO adult VALUES("8","Good","Good","No information given!","No information given!","No information given!","No information given!","No information given!","12","Left","No information given!","No information given!","8","Jan","2018"); 
INSERT INTO adult VALUES("9","Good","Very Good","No","No","No","Wheel Chair","No","4","Right","gdg","No","9","Jan","2018"); 
INSERT INTO adult VALUES("10","Good","Good","fsd","No","No","No","Mother","5","Right","No","No","10","Jan","2018"); 
INSERT INTO adult VALUES("11","Very Good","Very Good","No","No","No","No","No","4","Left","No","No","11","Jan","2018"); 
INSERT INTO adult VALUES("12","Good","Good","No","No","Marijuana","No","Mother","3","Right","No","No","12","Jan","2018"); 
INSERT INTO adult VALUES("13","Good","Good","No","No","No","No","No","1","Right","No","No","13","Jan","2018"); 
INSERT INTO adult VALUES("14","Good","Good","No","No","No","No","No","4","Left","Noh","ghh","14","Jan","2018"); 
INSERT INTO adult VALUES("15","Good","Good","No","No","No","No","No","4","Left","No","No","15","Jan","2018"); 
INSERT INTO adult VALUES("16","Good","Good","No","No information given!","No","No","No","4","Right","No","No","16","Jan","2018"); 
INSERT INTO adult VALUES("17","Good","Good","No","No","Cocaine","No","No","4","Right","gfdg","No","17","Jan","2018"); 
INSERT INTO adult VALUES("18","Good","Good","No","No","No","No","No","4","Left","No","No","18","Jan","2018"); 
INSERT INTO adult VALUES("19","Good","Good","No","No","No","No","No","5","Right","No","No","19","Jan","2018"); 
INSERT INTO adult VALUES("20","Good","Poor","Broken bones :( ","2 times a day","3 times a day :0","No","No","5","Right","No","No","20","Jan","2018"); 
INSERT INTO adult VALUES("21","Good","Good","No","No","No","No","No","2","Right","No","No","21","Jan","2018"); 
INSERT INTO adult VALUES("23","Very Good","Poor","No","No","No","No","No","6","Left","No","No","23","Feb","2018"); 
INSERT INTO adult VALUES("24","Poor","Good","No","No","No","No","No","4","Left","No","Slight","24","Feb","2018"); 
INSERT INTO adult VALUES("25","Good","Good","No","No","No","No","No","4","Left","No","No","25","Feb","2018"); 
INSERT INTO adult VALUES("26","Good","Good","No","No","No","No","No","4","Right","No","No","26","Feb","2018"); 
INSERT INTO adult VALUES("27","Good","Good","Yes","No","No","No","g","4","Right","No","No","27","Feb","2018"); 
INSERT INTO adult VALUES("28","Good","Good","No","No","No","No","No","4","Right","No","No","28","Feb","2018"); 
INSERT INTO adult VALUES("29","Good","Good","No","No","No","No","No","4","Left","No","No","29","Feb","2018"); 
INSERT INTO adult VALUES("30","Good","Poor","No","No","No","No","No","4","Left","No","No","30","Feb","2018"); 
INSERT INTO adult VALUES("31","Poor","Poor","No","No","No","No","No","4","Left","rt","tr","31","Feb","2018"); 
INSERT INTO adult VALUES("32","Poor","Good","Cannot play well","Smoke weed","No","No","Mother","4","Left","uyiz","No","32","Feb","2018"); 
INSERT INTO adult VALUES("33","Poor","Good","No","No","No","No","No","4","Right","No","No","33","Feb","2018"); 
INSERT INTO adult VALUES("34","Very Good","Very Good","No","No","No","Hearing Aid","Mother","1","Right","No","No","34","Feb","2018"); 
INSERT INTO adult VALUES("35","Good","Good","No","No","No","Glasses","No","2","Left","No","No","35","Feb","2018"); 
INSERT INTO adult VALUES("36","Good","Good","No","No","No","No","No","4","Right","Yes","No","36","Feb","2018"); 
INSERT INTO adult VALUES("37","Good","Good","Bones","No","Vodka","No","No","2","Right","No","No","37","Feb","2018"); 
INSERT INTO adult VALUES("38","Good","Very Good","No","No","No","No","No","2","Right","g","g","38","Feb","2018"); 
INSERT INTO adult VALUES("39","Good","Good","No","No","No","No","Father","1","Right","Sports","No","39","Feb","2018"); 
INSERT INTO adult VALUES("40","Good","Good","No","No","No","Glasses","No","1","Right","No","Cannot run well","40","Feb","2018"); 
INSERT INTO adult VALUES("41","Good","Good","Broken bones","No","No","No","Father","5","Right","yiz","No","41","Feb","2018"); 
INSERT INTO adult VALUES("42","Poor","Good","No","No","No","No","No","4","Left","No","No","42","Feb","2018"); 
INSERT INTO adult VALUES("43","Good","Good","No","No","No","No","No","4","Right","No","No","43","Feb","2018"); 
INSERT INTO adult VALUES("44","Good","Good","No","No","No","No","No","5","Left","N","No","44","Feb","2018"); 
INSERT INTO adult VALUES("45","Good","Good","No","No","Cocaine","Glasses","No","4","Left","No","No information given!","45","Feb","2018"); 
INSERT INTO adult VALUES("46","Good","Good","No","No information given!","No","No","Father","4","Right","Bones broke","Yes","46","Feb","2018"); 
INSERT INTO adult VALUES("47","Good","Good","So hot","Everyday 24/7","Cocaine","No","No","4","Left","No","Yes due to some mental breakdown status","47","Feb","2018"); 
INSERT INTO adult VALUES("48","Good","Good","No","Yiz","No","No","Yiz","4","Left","No","No","48","Feb","2018"); 
INSERT INTO adult VALUES("49","Good","Good","No","3 times a day","Amphetamine ","Glasses","Uyaban","4","Right","No","No","49","Feb","2018"); 
INSERT INTO adult VALUES("50","Poor","Poor","yes","24 times a day","No","No","No","4","Left","No","No","50","Feb","2018"); 
INSERT INTO adult VALUES("51","Good","Good","No","No","No","Hearing aid","Mother","4","Right","No","No","51","Feb","2018"); 
INSERT INTO adult VALUES("52","Good","Good","No","No","No","Glasses","No","5","Right","No","No","52","Feb","2018"); 
INSERT INTO adult VALUES("53","Good","Very Good","No","Twice a day","No","Wheel chair","Brother","4","Left","No","No","53","Feb","2018"); 
INSERT INTO adult VALUES("54","Good","Good","Arm broken","No","No","Wheel chair","Sister","4","Right","No","No","54","Feb","2018"); 
INSERT INTO adult VALUES("55","Good","Good","Leg","No","No","No","No","4","Left","No","No","55","Feb","2018"); 
INSERT INTO adult VALUES("56","Good","Good","Leg","24 times a day","No","Pacemaker","No","4","Right","No","No","56","Feb","2018"); 
INSERT INTO adult VALUES("57","Good","Good","No","No","Cocaine","No","No","4","Left","No","No","57","Feb","2018"); 
INSERT INTO adult VALUES("58","Good","Good","Leg injury","24 times a day","Mary Jane","Glasses","Brother","3","Right","No","No","58","Feb","2018"); 
INSERT INTO adult VALUES("59","Poor","Poor","Injury","No","No","No","No","4","Right","No","No","59","Feb","2018"); 
INSERT INTO adult VALUES("60","Good","Good","No","No","No","No","No","3","Left","No","No","60","Feb","2018"); 
INSERT INTO adult VALUES("61","Good","Good","No","dsa","No","No","Ako","4","Right","No","No","61","Feb","2018"); 
INSERT INTO adult VALUES("62","Good","Good","Bone injury","No","yes","Ues","No","4","Right","No","No","62","Feb","2018"); 
INSERT INTO adult VALUES("63","Good","Good","No","Permi","Permi","No","Mama","3","Left","No","No","63","Feb","2018"); 
INSERT INTO adult VALUES("64","Very Good","Very Good","No","25 times a day","Drugs","No","Mother","4","Right","No","No","64","Feb","2018"); 
INSERT INTO adult VALUES("65","Poor","Good","No","No","No","No","No","4","Right","No","No","65","Feb","2018"); 
INSERT INTO adult VALUES("66","Good","Poor","No","sadda","No","No","AERA","16","Left","No","we","66","Feb","2018"); 
INSERT INTO adult VALUES("67","Good","Good","No","Twice a week","No","Correction glasses","No","4","Right","No","No","67","Feb","2018"); 
INSERT INTO adult VALUES("68","Good","Good","No","No","No","No","No","4","Right","No","No","68","Oct","2016"); 
INSERT INTO adult VALUES("69","Good","Good","No","No","No","No","No","1","Right","No","No","69","May","2016"); 
INSERT INTO adult VALUES("70","Good","Good","No","No","No","No","No","4","Left","No","No","70","Jul","2016"); 
INSERT INTO adult VALUES("71","Good","Good","No","No","No","No","No","4","Right","No","No","71","Feb","2016"); 
INSERT INTO adult VALUES("72","Very Good","Good","No","No","No","No","No","4","Left","No","No","72","Dec","2016"); 
INSERT INTO adult VALUES("73","Good","Good","No","No","No","No","No","4","Right","No","No","73","Jan","1970"); 
INSERT INTO adult VALUES("74","Good","Good","No","Twice a day","No","No","No","2","Right","No","No","74","Feb","2016"); 
INSERT INTO adult VALUES("75","Good","Good","No","No","No","No","No","3","Right","No","No","75","Jan","1970"); 
INSERT INTO adult VALUES("76","Good","Good","No","No","No","No","No","3","Right","No","No","76","Dec","2016"); 
INSERT INTO adult VALUES("77","Very Good","Very Good","No","No","No","No","No","4","Right","No","No","77","Dec","2016"); 
INSERT INTO adult VALUES("78","Good","Good","No","No","No","No","No","3","Right","No","No","78","Aug","2016"); 
INSERT INTO adult VALUES("79","Very Good","Very Good","No","No","No","No","No","4","Right","No","No","79","Dec","2016"); 
INSERT INTO adult VALUES("80","Very Good","Very Good","No","No","No","No","No","4","Right","No","No","80","Nov","2016"); 
INSERT INTO adult VALUES("81","Good","Good","No","No","No","No","No","4","Right","No","No","81","Apr","2016"); 
INSERT INTO adult VALUES("82","Good","Good","No","No","No","No","No","4","Left","No","No","82","Jan","1970"); 
INSERT INTO adult VALUES("83","Good","Good","No","No","No","No","Mother","4","Right","No","No","83","Jul","2016"); 
INSERT INTO adult VALUES("84","Good","Good","No","No","No","Correction glasses","Father","3","Right","No","No","84","Jan","2016"); 
INSERT INTO adult VALUES("85","Good","Poor","No","No","No","No","Nanny","4","Right","No","No","85","Feb","2018"); 
DROP TABLE blood_examination;

CREATE TABLE `blood_examination` (
  `BLD_CHEM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BUN_ETYPE_INT` text NOT NULL,
  `CRTN_ETYPE_INT` text NOT NULL,
  `FBS_ETYPE_INT` text NOT NULL,
  `HDL_M_ETYPE_INT` text NOT NULL,
  `HDL_F_ETYPE_INT` text NOT NULL,
  `LDL_ETYPE_INT` text NOT NULL,
  `PO_PR_ETYPE_INT` text NOT NULL,
  `RBS_ETYPE_INT` text NOT NULL,
  `SGOT_M_ETYPE_INT` text NOT NULL,
  `SGOT_F_ETYPE_INT` text NOT NULL,
  `SGPT_M_ETYPE_INT` text NOT NULL,
  `SGPT_F_ETYPE_INT` text NOT NULL,
  `TRYLYDE_ETYPE_INT` text NOT NULL,
  `URIC_M_ETYPE_INT` text NOT NULL,
  `URIC_F_ETYPE_INT` text NOT NULL,
  `BUN_ETYPE_CON` text NOT NULL,
  `CRTN_ETYPE_CON` text NOT NULL,
  `FBS_ETYPE_CON` text NOT NULL,
  `HDL_M_ETYPE_CON` text NOT NULL,
  `HDL_F_ETYPE_CON` text NOT NULL,
  `LDL_ETYPE_CON` text NOT NULL,
  `PO_PR_ETYPE_CON` text NOT NULL,
  `RBS_ETYPE_CON` text NOT NULL,
  `TRYLYDE_ETYPE_CON` text NOT NULL,
  `URIC_M_ETYPE_CON` text NOT NULL,
  `URIC_F_ETYPE_CON` text NOT NULL,
  `CHSTRL_INT` text NOT NULL,
  `CHSTRL_CON` text NOT NULL,
  `LBR_ID` int(11) NOT NULL,
  `MONTH` varchar(4) NOT NULL,
  `YEAR` int(4) NOT NULL,
  PRIMARY KEY (`BLD_CHEM_ID`),
  KEY `BLD_CHEM_ID` (`BLD_CHEM_ID`),
  KEY `LBR_ID` (`LBR_ID`),
  KEY `LBR_ID_2` (`LBR_ID`),
  CONSTRAINT `blood_examination_ibfk_1` FOREIGN KEY (`LBR_ID`) REFERENCES `laboratory_record` (`LAB_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO blood_examination VALUES("1","1.4","117.1","4","1","1.12","","","","","","","","","","","","","","","","","","","","","","3.89","","1","Feb","2018"); 
DROP TABLE dispense;

CREATE TABLE `dispense` (
  `DISP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `INV_ID` int(5) NOT NULL,
  `DISP_QTY` int(11) NOT NULL,
  `DIS_DATE` date NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`DISP_ID`),
  KEY `INV_ID` (`INV_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO dispense VALUES("1","2","23","2018-02-09","Feb","2018"); 
INSERT INTO dispense VALUES("2","2","23","2018-02-09","Feb","2018"); 
INSERT INTO dispense VALUES("3","2","14","2018-02-09","Feb","2018"); 
DROP TABLE ended_user;

CREATE TABLE `ended_user` (
  `End_user_id` int(5) NOT NULL AUTO_INCREMENT,
  `User_end_id` int(5) NOT NULL,
  `END_DATE` date NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`End_user_id`),
  KEY `User_id` (`User_end_id`),
  KEY `User_end_id` (`User_end_id`),
  CONSTRAINT `ended_user_ibfk_1` FOREIGN KEY (`User_end_id`) REFERENCES `users` (`User_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO ended_user VALUES("1","1","2018-03-17","1","2018"); 
INSERT INTO ended_user VALUES("3","14","2018-02-01","2","2018"); 
INSERT INTO ended_user VALUES("4","3","2018-02-01","2","2018"); 
DROP TABLE fecalysis;

CREATE TABLE `fecalysis` (
  `FECAL_ID` int(5) NOT NULL AUTO_INCREMENT,
  `LAB_ID` int(5) NOT NULL,
  `CLR_MCRO_EXM` text NOT NULL,
  `CONS_MCRO_EXM` text NOT NULL,
  `HLMT_MCRO_EXM` text NOT NULL,
  `PARA_ASCARIS` text NOT NULL,
  `PARA_HKWORM` text NOT NULL,
  `PARA_TRHRIS` text NOT NULL,
  `PARA_STRGLOIDES` text NOT NULL,
  `CT_OB` text NOT NULL,
  `PCELLS_MICRO_EXM` text NOT NULL,
  `RBC_MCRO_EXM` text NOT NULL,
  `E_AMOEBA_HISTOL` text NOT NULL,
  `E_HISTOL_CYST` text NOT NULL,
  `E_HISTOL_TROPH` text NOT NULL,
  `E_AMOEBA_COLI` text NOT NULL,
  `COLI_CYST` text NOT NULL,
  `COLI_TROPH` text NOT NULL,
  `FLAG_G_LAMBIA` text NOT NULL,
  `FLAG_T_HOMINIS` text NOT NULL,
  `REMARKS` text NOT NULL,
  `MONTH` varchar(4) NOT NULL,
  `YEAR` int(4) NOT NULL,
  PRIMARY KEY (`FECAL_ID`),
  KEY `LAB_ID` (`LAB_ID`),
  CONSTRAINT `fecalysis_ibfk_1` FOREIGN KEY (`LAB_ID`) REFERENCES `laboratory_record` (`LAB_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO fecalysis VALUES("1","2","Black","Transparent","","124","","","","","","","","","","","","","332","","Good","Feb","2018"); 
DROP TABLE hematology;

CREATE TABLE `hematology` (
  `HEMA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LAB_ID` int(11) NOT NULL,
  `HEMA_M_ETYPE_CBC` text NOT NULL,
  `HEMA_F_ETYPE_CBC` text NOT NULL,
  `HEMO_M_ETYPE_CBC` text NOT NULL,
  `HEMO_F_ETYPE_CBC` text NOT NULL,
  `WBC_ETYPE_CBC` text NOT NULL,
  `RBC_ETYPE_CBC` text NOT NULL,
  `SEG_DIFF_COUNT` text NOT NULL,
  `STAB_DCOUNT` text NOT NULL,
  `EOSI_DCOUNT` text NOT NULL,
  `LYMP_DCOUNT` text NOT NULL,
  `MONO_DCOUNT` text NOT NULL,
  `BASO_DCOUNT` text NOT NULL,
  `MYELO_DCOUNT` text NOT NULL,
  `PLA_CT_DCOUNT` text NOT NULL,
  `BLD_TYP_DCOUNT` text NOT NULL,
  `JUVEN_DCOUNT` text NOT NULL,
  `REMARKS` text NOT NULL,
  `MONTH` varchar(4) NOT NULL,
  `YEAR` int(4) NOT NULL,
  PRIMARY KEY (`HEMA_ID`),
  KEY `LAB_ID` (`LAB_ID`),
  CONSTRAINT `hematology_ibfk_1` FOREIGN KEY (`LAB_ID`) REFERENCES `laboratory_record` (`LAB_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hematology VALUES("1","3","36","0.38","150","","","","","",".2",".25","","","","","undefined","","","Feb","2018"); 
INSERT INTO hematology VALUES("2","4","0.60","","150","","5","","0.40","0.03","","","","","","","undefined","","","Feb","2018"); 
DROP TABLE inventory;

CREATE TABLE `inventory` (
  `INV_ID` int(5) NOT NULL AUTO_INCREMENT,
  `MEDICINE_ID` int(5) NOT NULL,
  `INV_QTY` int(5) NOT NULL,
  `INV_SUPPLIER` text NOT NULL,
  `INV_EXPD` date NOT NULL,
  `INV_DATE_ARV` date NOT NULL,
  `INV_QTY_HIST` int(5) NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`INV_ID`),
  KEY `MEDICINE_ID` (`MEDICINE_ID`),
  CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`MEDICINE_ID`) REFERENCES `medicine` (`MEDICINE_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO inventory VALUES("1","15","9","Unilab Drugstore","2018-02-09","2018-02-07","9","Feb","2018"); 
INSERT INTO inventory VALUES("2","22","10","Goodwill Drugstore","2018-02-10","2018-02-09","100","Feb","2018"); 
DROP TABLE lab_request;

CREATE TABLE `lab_request` (
  `LBR_ID` int(5) NOT NULL AUTO_INCREMENT,
  `LBR_TYPE` text NOT NULL,
  `LBR_DATE` date NOT NULL,
  `TRMNT_ID` int(5) NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(4) NOT NULL,
  `STATUS` text NOT NULL,
  PRIMARY KEY (`LBR_ID`),
  KEY `TRMNT_ID` (`TRMNT_ID`),
  CONSTRAINT `lab_request_ibfk_1` FOREIGN KEY (`TRMNT_ID`) REFERENCES `treatment` (`TRMT_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

INSERT INTO lab_request VALUES("32","Blood Chemistry","2018-02-09","8","Feb","2018","Completed"); 
INSERT INTO lab_request VALUES("33","Fecalysis","2018-02-10","8","Feb","2018","Completed"); 
INSERT INTO lab_request VALUES("34","Hematology","2018-02-10","8","Feb","2018","Completed"); 
INSERT INTO lab_request VALUES("35","Hematology","2018-02-10","9","Feb","2018","Completed"); 
INSERT INTO lab_request VALUES("36","Urinalysis","2018-02-10","9","Feb","2018","Pending"); 
DROP TABLE laboratory_record;

CREATE TABLE `laboratory_record` (
  `LAB_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LBR_ID` int(11) NOT NULL,
  `MT_ID` int(5) NOT NULL,
  `PTLGST_ID` int(5) NOT NULL,
  `DATE_TAKEN` date NOT NULL,
  `LAST_MEAL` text NOT NULL,
  `SPECIMEN` text NOT NULL,
  `MONTH` varchar(4) NOT NULL,
  `YEAR` int(4) NOT NULL,
  PRIMARY KEY (`LAB_ID`),
  KEY `LBR_ID` (`LBR_ID`,`MT_ID`,`PTLGST_ID`),
  KEY `MT_ID` (`MT_ID`),
  KEY `PTLGST_ID` (`PTLGST_ID`),
  CONSTRAINT `laboratory_record_ibfk_1` FOREIGN KEY (`LBR_ID`) REFERENCES `lab_request` (`LBR_ID`) ON UPDATE CASCADE,
  CONSTRAINT `laboratory_record_ibfk_2` FOREIGN KEY (`MT_ID`) REFERENCES `users` (`User_id`) ON UPDATE CASCADE,
  CONSTRAINT `laboratory_record_ibfk_3` FOREIGN KEY (`PTLGST_ID`) REFERENCES `users` (`User_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO laboratory_record VALUES("1","32","15","14","2018-02-09","afternoon","Stool","Feb","2018"); 
INSERT INTO laboratory_record VALUES("2","33","15","14","2018-02-10","8:00 AM","Stool","Feb","2018"); 
INSERT INTO laboratory_record VALUES("3","34","15","14","2018-02-10","12:00PM","Smears","Feb","2018"); 
INSERT INTO laboratory_record VALUES("4","35","15","14","2018-02-10","8:00 AM","Blood","Feb","2018"); 
DROP TABLE medical_record;

CREATE TABLE `medical_record` (
  `MR_ID` int(5) NOT NULL AUTO_INCREMENT,
  `MR_ILL` text NOT NULL,
  `MR_BP` varchar(8) NOT NULL,
  `MR_WEIGHT` decimal(10,2) NOT NULL,
  `MR_TEMP` decimal(10,2) NOT NULL,
  `DATE` datetime NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(4) NOT NULL,
  `SCHED_ID` int(5) NOT NULL,
  `MR_STATUS` text NOT NULL,
  PRIMARY KEY (`MR_ID`),
  KEY `SCHED_ID` (`SCHED_ID`),
  CONSTRAINT `medical_record_ibfk_1` FOREIGN KEY (`SCHED_ID`) REFERENCES `schedule` (`SCHEDULE_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO medical_record VALUES("1","Allergy","100/80","64.50","37.50","2018-02-07 07:55:54","Feb","2018","1","Completed"); 
INSERT INTO medical_record VALUES("2","Hypertension","100/80","67.50","37.50","2018-02-07 08:57:46","Feb","2018","2","Completed"); 
INSERT INTO medical_record VALUES("3","Hypertention","100/80","60.00","37.50","2018-02-08 14:48:59","Feb","2018","1","Pending"); 
INSERT INTO medical_record VALUES("4","Cough","110/70","60.00","34.00","2018-02-09 01:49:16","Feb","2018","3","Completed"); 
INSERT INTO medical_record VALUES("5","Hypertension","100/80","60.00","37.50","2018-02-09 07:30:25","Feb","2018","4","Completed"); 
INSERT INTO medical_record VALUES("6","Cough","100/90","56.70","36.90","2018-02-10 00:37:09","Feb","2018","4","Completed"); 
INSERT INTO medical_record VALUES("7","Headache","100/90","61.20","37.20","2018-02-10 00:38:56","Feb","2018","4","Completed"); 
INSERT INTO medical_record VALUES("8","Hypertension","100/80","84.00","37.50","2018-02-10 03:21:08","Feb","2018","14","Completed"); 
INSERT INTO medical_record VALUES("9","Allergies","110/70","60.00","34.00","2018-02-10 14:09:00","Feb","2018","17","Completed"); 
DROP TABLE medicine;

CREATE TABLE `medicine` (
  `MEDICINE_ID` int(5) NOT NULL AUTO_INCREMENT,
  `MEDICINE_CAT` text NOT NULL,
  `MEDICINE_TYPE` text NOT NULL,
  `MEDICINE_GNAME` text NOT NULL,
  `MEDICINE_BNAME` text NOT NULL,
  `MEDICINE_DFORM` text NOT NULL,
  `MEDICINE_DOSE` varchar(10) NOT NULL,
  `Month` char(3) NOT NULL,
  `Year` int(11) NOT NULL,
  PRIMARY KEY (`MEDICINE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("12","Adult","Antibiotics","Paracetamol Caps","Dolan","Tablet","500 mg","1","2018"); 
INSERT INTO medicine VALUES("14","Adult","Antibiotics","Ambroxol","Neobloc","Tablet","300 mg","1","2018"); 
INSERT INTO medicine VALUES("15","Adult","Antibiotics","Ambroxol","Amoxiciline","Tablet","500 mg","1","2018"); 
INSERT INTO medicine VALUES("17","Adult","Antibiotics","Paracetamol","Tempra","Tablet","100 mg","1","2018"); 
INSERT INTO medicine VALUES("18","Adult","Antibiotics","Paracetamol","Tempra","Tablet","600 mg","1","2018"); 
INSERT INTO medicine VALUES("19","Adult","Antibiotics","Paracetamol","Tempra_Forte","Tablet","50 mg","1","2018"); 
INSERT INTO medicine VALUES("20","Adult","Antibiotics","Paracetamol","Tempra_Forte","Tablet","100 mg","1","2018"); 
INSERT INTO medicine VALUES("21","Adult","Antibiotics","Paracetamol","Calpol","Tablet","1000mg","1","2018"); 
INSERT INTO medicine VALUES("22","Adult","Antibiotics","paracetamol","neozep","Tablet","300 mg","1","2018"); 
INSERT INTO medicine VALUES("23","Adult","Analgesic","Paracetamol","Calpol","Syrup","200 mL","2","2018"); 
INSERT INTO medicine VALUES("24","Children","Antibiotics","Paracetamol","calpol","Syrup","250 mL","Feb","2018"); 
INSERT INTO medicine VALUES("25","Children","Antibiotics","asdasd","asdasd","Syrup","100mg","Feb","2018"); 
INSERT INTO medicine VALUES("26","Children","Antibiotics","asdasdad","asdasd","Tablet","123","Feb","2018"); 
DROP TABLE patient;

CREATE TABLE `patient` (
  `P_ID` int(5) NOT NULL AUTO_INCREMENT,
  `P_LNAME` text NOT NULL,
  `P_FNAME` text NOT NULL,
  `P_MNAME` text NOT NULL,
  `P_GNDR` text NOT NULL,
  `P_BDATE` date NOT NULL,
  `P_AGE` int(2) NOT NULL,
  `P_TEMP` decimal(10,2) NOT NULL,
  `P_WGHT` decimal(10,2) NOT NULL,
  `P_HGHT` varchar(4) NOT NULL,
  `P_TYPE` text NOT NULL,
  `P_ADD` text NOT NULL,
  `P_CN` varchar(13) NOT NULL,
  `P_OCCU` text NOT NULL,
  `P_REL` text NOT NULL,
  `P_CVL_STAT` text NOT NULL,
  `DATE_REG` date NOT NULL,
  `P_OCCU_FBW` text NOT NULL,
  `MONTH` char(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  `P_BRGY` text NOT NULL,
  `P_PUROK` text NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("2","Bayon-on","Alson John","R","Male","1997-07-12","20","36.00","180.00","179","Adult","Banago Bacolod City","091230298","Student","Catholic","Single","2018-01-14","Self-Employment","Jan","2018","Handumanan","Zone 4"); 
INSERT INTO patient VALUES("3","Molabin","Daniel","V","Male","1997-11-11","20","38.00","82.00","163","Adult","La carlota City","091242265","Student","Catholic","Single","2017-12-31","Self-Employment","Jan","2018","Handumanan","Zone 4"); 
INSERT INTO patient VALUES("4","Betio","Carl Louie","G.","Male","1997-09-17","20","37.00","65.00","162","Adult","Sum-ag, Bacolod City","091254423","Student","Catholic","Single","2017-12-31","Self-Employment","Jan","2018","Handumanan","Zone 4"); 
INSERT INTO patient VALUES("5","Entes","Leonel","C.","Male","1997-08-12","20","37.00","160.00","60","Adult","Singcang, Bacolod City","123412287","Senior Citizen","Catholic","Single","2017-12-05","","Jan","2018","Handumanan","Zone 4"); 
INSERT INTO patient VALUES("6","Garilao","Crosser","T","Male","1996-05-22","12","36.70","84.50","168","Adult","Brgy. Masulog Canlaon City","09091231475","Unemployed","Catholic","Single","2017-12-31","Self-Employment","Jan","2018","Handumanan","Zone 5"); 
INSERT INTO patient VALUES("7","Marinay","Ryan Jefferson","A.","Male","1997-12-26","20","36.70","65.60","165","Adult","Canlaon City Negros Oriental","09092344522","Paid Employment","Catholic","Single","2017-12-31","--Select--","Jan","2018","Handumanan","Zone 3"); 
INSERT INTO patient VALUES("8","asdasd","asdad","adsasd","Male","2014-10-14","3","12.00","12.00","12","MINOR","asdad","124125","Self-Employment","Catholic","Single","2018-01-14","Self-Employment","Jan","2018","Handumanan","Zone 4"); 
INSERT INTO patient VALUES("9","Rosalia","Jethro","Manapla","Male","1998-01-02","20","34.00","70.00","170","Adult","Banago Bacolod City","53334231","Unemployed","Catholic","Single","2018-01-21","Self-Employment","Jan","2018","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("10","Tacey","Aleksandr","Mohammad","Male","1997-01-01","21","35.00","74.00","171","Adult","Bacolod City, Brgy.  Handumanan Zone 4 ","21314352564","Paid Employment","Catholic","Single","2018-02-09","House-maker(Own House)","Jan","2018","Handumanan","Zone 4."); 
INSERT INTO patient VALUES("11","Olga","Rheanna ","Villaridad","Female","1982-01-01","36","33.00","67.00","150","Adult","Taculing","54553242424","House-maker(Own House)","Catholic","Married","2018-02-08","Self-Employment","Jan","2018","Handumanan","Zone 5"); 
INSERT INTO patient VALUES("12","Amilcar","Gwyneth","Renz","Male","2000-02-02","17","34.00","70.00","169","Adult","Mansilingan","85446424634","Non-paid work(Volunteer/Charity)","Muslim","Single","2018-02-08","Keeping house(for others)","Jan","2018","Handumanan","Zone 6"); 
INSERT INTO patient VALUES("13","Sy","Fritz","Ola","Male","2010-02-02","7","35.00","50.00","140","Minor","Banago Bacolod City","9543532342","Student","Catholic","Single","2018-01-21","Student","Jan","2018","Handumanan","Zone 7"); 
INSERT INTO patient VALUES("14","Nereida","Pirkko","Hoh","Male","1998-02-02","19","34.00","69.00","187","Adult","Bacolod City","79645543443","Student","Catholic","Single","2018-02-08","Non-paid work(Volunteer/Charity)","Jan","2018","Handumanan","Zone 8"); 
INSERT INTO patient VALUES("15","Pineapple","Ion","Del Monte","Male","1982-01-01","36","35.00","60.00","188","Adult","Manila","5676575674","Student","Muslim","Married","2018-01-21","Self-Employment","Jan","2018","Handumanan","Zone 3"); 
INSERT INTO patient VALUES("16","Erico","Satomi","Legaspi","Female","1997-02-02","20","35.00","57.00","167","Adult","Mansilingan","6674524246","Student","Catholic","Single","2018-01-21","Student","Jan","2018","Handumanan","Zone 1"); 
INSERT INTO patient VALUES("17","Ubas","Erul","John ","Male","1997-08-19","20","35.00","68.00","169","Adult","Sum-ag, Bacolod City","7746345345","Student","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","Jan","2018","Handumanan","Zone 12"); 
INSERT INTO patient VALUES("18","Chlothar","Shailaja","Hehe","Female","1997-02-03","20","35.00","67.00","167","Adult","Banago Bacolod City","9444431342","Student","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 5"); 
INSERT INTO patient VALUES("19","Torete","Gunder","Dela Rojas","Male","1997-02-03","20","34.50","69.00","168","Adult","Banago Bacolod City","67856444235","Student","Muslim","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 3"); 
INSERT INTO patient VALUES("20","Cake","Top","Keke","Female","1997-02-03","20","34.00","69.00","169","Adult","Banago Bacolod City","96765634544","Paid Employment","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","Jan","2018","Handumanan","Zone 3"); 
INSERT INTO patient VALUES("21","Abrams","Joland","Em Juan","Male","2000-01-01","18","34.00","67.00","170","Adult","Cleveland","65356535432","Student","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("22","Ramon","Gen","Neral","Male","1996-02-02","21","34.00","68.00","180","Adult","Banago Bacolod City","65465654564","Student","Muslim","Married","2018-01-21","Self-Employment","Feb","2018","Handumanan","Zone 5"); 
INSERT INTO patient VALUES("23","Bahay","Gawain","Na ang","Male","1977-02-21","40","34.00","80.00","170","Adult","Mansilingan","56456598796","Paid Employment","Catholic","Divorced","2018-01-21","Self-Employment","Feb","2018","Handumanan","Zone 6"); 
INSERT INTO patient VALUES("24","Konich","Cayetano","Alvarez","Male","1997-02-02","20","34.00","70.00","69","Adult","Banago Bacolod City","89765489765","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","Feb","2018","Handumanan","Zone 7"); 
INSERT INTO patient VALUES("25","Azad","Swapnil","Agapito","Male","1999-04-04","18","34.00","68.00","170","Adult","Banago Bacolod City","94573436575","Student","Born Again","Single","2018-01-21","Paid Employment","Feb","2018","Handumanan","Zone 9"); 
INSERT INTO patient VALUES("26","Aydan","Gayathri","Pedsro","Male","1994-04-04","23","30.00","67.00","150","Adult","Banago Bacolod City","98765434567","Student","Catholic","Single","2018-01-21","Paid Employment","Feb","2018","Handumanan","Zone 10"); 
INSERT INTO patient VALUES("27","Pearce","Aidan","Smith","Male","1996-02-02","21","34.00","69.00","169","Adult","Granada","99564365463","Student","Catholic","Single","2018-01-21","Paid Employment","Feb","2018","Handumanan","Zone 11"); 
INSERT INTO patient VALUES("28","Naman","Sayen","Na","Male","1999-01-01","19","34.00","69.00","169","Adult","New Vegas","99878677564","Self-Employment","Born Again","Single","2018-01-21","Keeping house(for others)","Feb","2018","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("29","Daniel","Ofelia","Dece","Male","1997-02-02","20","34.00","60.00","170","Adult","Banago Bacolod City","89876437654","Paid Employment","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","Feb","2018","Handumanan","Zone 12"); 
INSERT INTO patient VALUES("30","Shrinivas","Bistra","Bistro","Female","1997-02-02","20","36.00","67.00","170","Adult","Banago Bacolod City","98765432345","Paid Employment","Catholic","Single","2018-01-21","House-maker(Own House)","Feb","2018","Handumanan","Zone 11"); 
INSERT INTO patient VALUES("31","Junipero","Akiba","Alz","Male","1995-05-05","22","34.00","70.00","170","Adult","Banago Bacolod City","87654876543","Self-Employment","Catholic","Single","2018-01-21","Paid Employment","Feb","2018","Handumanan","Zone 5"); 
INSERT INTO patient VALUES("32","Virgil","Sinikka","Down","Male","1996-04-07","21","50.00","69.00","170","Adult","Handumanan","98943657454","Paid Employment","Catholic","Married","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("33","Cruz","Crystal","Thelka","Female","1997-06-06","20","36.00","69.00","169","Adult","Banago Bacolod City","97754345352","Student","Catholic","Single","2018-01-21","Keeping house(for others)","Jan","2018","Handumanan","Zone 1"); 
INSERT INTO patient VALUES("34","Dela Cruz","Anna Maria","Villasis","Female","2004-02-02","13","34.00","45.00","150","Minor","Banago Bacolod City","97654343243","Student","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 1"); 
INSERT INTO patient VALUES("35","Bronislav","Zorka","Slav","Female","2005-04-07","12","34.00","69.00","169","Minor","Handumanan","99853456545","Student","Catholic","Single","2018-01-21","Self-Employment","Jan","2018","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("36","Chua","Philaldelphia","Villaridad","Female","2001-04-04","16","34.50","60.00","161","Adult","Handumanan","98765432345","Student","Muslim","Single","2018-01-21","Keeping house(for others)","Jan","2018","Handumanan","Zone 9"); 
INSERT INTO patient VALUES("37","Gerundio","Jyth ","L","Male","1997-07-17","20","35.00","70.00","171","Adult","Handumanan","99675463423","Paid Employment","Catholic","Single","2018-01-21","Keeping house(for others)","Jan","2018","Handumanan","Zone 8"); 
INSERT INTO patient VALUES("38","Elof","Surinder","Mamamayan","Female","2004-06-06","13","35.00","50.00","140","Minor","Banago Bacolod City","99765534567","Student","Muslim","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 8"); 
INSERT INTO patient VALUES("39","Ahed","Mohammad","Abdullah","Male","2005-05-08","12","35.00","60.00","171","Minor","Syria","89575665432","Paid Employment","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","Jan","2018","Handumanan","Zone 8"); 
INSERT INTO patient VALUES("40","Soltero","Sidonie","Kaja","Female","2005-08-07","12","35.00","69.00","169","Minor","Handumanan","94435323143","Student","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 10"); 
INSERT INTO patient VALUES("41","Quintina","Amelia","Quince","Male","1999-07-07","18","36.00","69.00","170","Adult","Handumanan","21345678765","Paid Employment","Catholic","Single","2018-01-21","Self-Employment","Jan","2018","Handumanan","Zone 9"); 
INSERT INTO patient VALUES("42","Suyo","Jakob","Arnbor","Male","1997-04-05","20","37.00","70.00","170","Adult","Handumanan","89744521243","Student","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 7"); 
INSERT INTO patient VALUES("43","Bai","Alby","Botra","Female","1996-06-06","21","36.00","69.00","170","Adult","Handumanan","99754213456","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 6"); 
INSERT INTO patient VALUES("44","Ledy","Loan","Mercy","Male","2010-06-06","7","36.00","70.00","160","Minor","Banago Bacolod City","99875465465","Student","Muslim","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 3"); 
INSERT INTO patient VALUES("45","Madria","Vulcan","Mabelle ","Male","1998-01-01","20","34.00","60.00","160","Adult","Handumanan","99876564342","Student","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 11"); 
INSERT INTO patient VALUES("46","Lumpia","Chorizo","Hotdog","Male","2010-02-03","7","35.00","60.00","160","Minor","Food store","0977587654","Paid Employment","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","Jan","2018","Handumanan","Zone 11"); 
INSERT INTO patient VALUES("47","Canton","Pancit","Lucime","Male","2011-04-05","6","60.00","60.00","160","Minor","Hotdog","93665421678","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 12"); 
INSERT INTO patient VALUES("48","Sidonia","Naveen","Dean","Male","2016-06-06","1","36.00","70.00","20","Minor","Handumanan","89543534231","Unemployed","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","Handumanan","Zone 11"); 
INSERT INTO patient VALUES("49","Sombilia","Mark","L.","Male","1997-05-05","20","36.00","70.00","169","Adult","Handumanan","89743324334","Student","Catholic","Single","2018-01-21","Retired","Jan","2018","Handumanan","Zone 12"); 
INSERT INTO patient VALUES("50","Saludares","Steven","H.","Male","1996-06-06","21","57.00","200.00","12","Adult","Sum-ag, Bacolod City","99656365432","Self-Employment","Catholic","Single","2018-01-21","Keeping house(for others)","Feb1","2018","Handumanan","Zone 4"); 
INSERT INTO patient VALUES("51","Phoibos","Fabricio","Luneta","Male","2010-03-08","7","36.00","67.00","160","Minor","Sum-ag, Bacolod City","92643853636","Student","Catholic","Single","2018-01-21","House-maker(Own House)","Feb","2018","",""); 
INSERT INTO patient VALUES("52","Roksan","Lars","Ros","Male","1998-06-06","19","36.00","70.00","170","Adult","Sum-ag, Bacolod City","99553454342","Student","Catholic","Single","2018-01-21","Paid Employment","Feb","2018","",""); 
INSERT INTO patient VALUES("53","Abdul","Mohammad","Rashid","Male","1982-05-05","35","37.00","70.00","168","Adult","Syria","98845654353","Paid Employment","Muslim","Single","2018-01-21","House-maker(Own House)","Feb","2018","",""); 
INSERT INTO patient VALUES("54","Karecs","Halim","Rusiko","Male","1998-06-05","19","50.00","70.00","170","Adult","Banago Bacolod City","99643424324","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","Feb","2018","",""); 
INSERT INTO patient VALUES("55","Santiago","Andrea","Martin","Female","1998-06-07","19","36.00","60.00","170","Adult","Mansilingan, Bacolod","99986545352","Student","Catholic","Single","2018-01-21","Self-Employment","Feb","2018","",""); 
INSERT INTO patient VALUES("56","Consuelo","Mordred","Dalisay","Male","1989-05-05","28","56.00","70.00","180","Adult","Food store","99876334342","Student","Catholic","Single","2018-01-21","Paid Employment","Feb","2018","",""); 
INSERT INTO patient VALUES("57","Steiner","Kjell","John ","Male","1992-05-05","25","39.00","60.00","189","Adult","Granada, Bacolod","99543243432","Paid Employment","Born Again","Single","2018-01-21","Paid Employment","Jan","2018","",""); 
INSERT INTO patient VALUES("58","Yanson","Alvin ","Michael ","Male","1997-05-05","20","67.00","70.00","165","Adult","Sa balay nya","98765456789","Retired","Catholic","Widowed","2018-01-21","Non-paid work(Volunteer/Charity)","Jan","2018","",""); 
INSERT INTO patient VALUES("59","Roxas","Juan","Dela Cruz","Male","1995-05-05","22","56.00","46.00","176","Adult","Rojas","98765458796","Non-paid work(Volunteer/Charity)","Catholic","Single","2018-01-21","Self-Employment","Jan","2018","",""); 
INSERT INTO patient VALUES("60","Kontrabida","Son ","Goku","Male","1990-04-02","27","67.00","67.00","180","Adult","Planet Earth","9565463422","Paid Employment","Born Again","Single","2018-01-21","Retired","Feb","2018","",""); 
INSERT INTO patient VALUES("61","Ramsay","Michael","Gordon","Male","1999-08-08","18","36.00","69.00","170","Adult","Granada, Bacolod","99453253523","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","Jan","2018","",""); 
INSERT INTO patient VALUES("62","Child","Julia","Medo","Female","1998-05-05","19","34.00","76.00","180","Adult","Bacolod City","89867543245","Student","Born Again","Single","2018-01-21","House-maker(Own House)","Jan","2018","",""); 
INSERT INTO patient VALUES("63","China Man","Confucius","The","Male","1992-06-02","25","34.00","70.00","170","Adult","China","95344641231","Student","Catholic","Married","2018-01-21","Paid Employment","Jan","2018","",""); 
INSERT INTO patient VALUES("64","Geduriagao","Decebel","Am","Female","1997-06-06","20","45.00","72.00","174","Adult","Sa Balay","98756453245","Self-Employment","Catholic","Single","2018-01-21","Self-Employment","Jan","2018","",""); 
INSERT INTO patient VALUES("65","Dimon","Leki","Lad","Male","1997-05-11","20","20.00","67.00","169","Adult","Dimon Land","99545432432","Student","Born Again","Single","2018-01-21","Non-paid work(Volunteer/Charity)","Jan","2018","",""); 
INSERT INTO patient VALUES("66","Banua","Gab","M","Male","1997-10-11","20","37.80","56.00","168","Adult","Kanlaon","09096771375","Paid Employment","Catholic","Single","2018-01-31","Paid Employment","Feb","2018","",""); 
INSERT INTO patient VALUES("67","Rashi","Mohammad","Abdull","Male","2004-09-27","13","34.00","69.00","140","Minor","Bacolod City","99654356787","Student","Catholic","Single","2018-02-06","Non-paid work(Volunteer/Charity)","Feb","2018","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("68","Nayn","Loki","Pest","Male","2010-01-31","8","34.00","69.00","170","Minor","Bacolod City","98765435675","Student","Catholic","Single","2016-10-29","Self-Employment","Oct","2016","Banago","Zone 2"); 
INSERT INTO patient VALUES("69","Burangos","Alzy","Ekek","Male","2016-12-30","1","34.00","35.00","70","Minor","Bacolod City","87653643254","Non-paid work(Volunteer/Charity)","Catholic","Single","2016-05-04","Paid Employment","May","2016","Banago","Zone 12"); 
INSERT INTO patient VALUES("70","Springs","Oishi","Del Monte","Male","2005-10-30","12","35.00","60.00","150","Minor","Bacolod City","99675467865","Student","Catholic","Single","2016-07-27","Paid Employment","Jul","2016","Banago","Banago"); 
INSERT INTO patient VALUES("71","Spring","Enes","Oman","Male","2003-02-27","14","34.00","69.00","169","Minor","Bacolod City","9876545674","Student","Catholic","Single","2016-02-27","Keeping house(for others)","Feb","2016","Handumanan","Zone 12"); 
INSERT INTO patient VALUES("72","Meyers","John","Michael","Male","2009-03-29","8","34.00","67.00","170","Minor","Bacolod City","8987654321","Student","Catholic","Single","2016-12-04","Paid Employment","Dec","2016","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("73","Miller","Nazer","Mike","Male","2006-02-28","11","34.00","69.00","150","Minor","Bacolod City","66687643213","Student","Protestant","Single","1970-01-01","Paid Employment","Jan","1970","Handumanan","Zone 12"); 
INSERT INTO patient VALUES("74","Smith","Will","Yu","Male","2005-08-24","12","34.00","69.00","160","Minor","Bacolod City","99967546534","Student","Catholic","Single","2016-02-23","Keeping house(for others)","Feb","2016","Banago","Zone 1"); 
INSERT INTO patient VALUES("75","Abdullah","Gabriel","Mohammad","Male","2011-02-02","7","34.00","50.00","150","Minor","Bacolod City","78798978965","Student","Catholic","Single","1970-01-01","House-maker(Own House)","Jan","1970","Banago","Zone 2"); 
INSERT INTO patient VALUES("76","Springfield","Daniel","Springs","Male","2001-08-28","16","45.00","70.00","170","Adult","Bacolod City","99967543214","Student","Catholic","Single","2016-12-27","Self-Employment","Dec","2016","Banago","Zone 1"); 
INSERT INTO patient VALUES("77","Green","Alexander","Thee","Male","2011-10-29","6","34.00","60.00","170","Minor","Bacolod City","89976634533","Student","Protestant","Single","2016-12-28","Paid Employment","Dec","2016","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("78","Eey","Glenn","One","Male","2010-09-26","7","34.00","60.00","179","Minor","Bacolod City","99982221212","Student","Catholic","Single","2016-08-25","Paid Employment","Aug","2016","Handumanan","Zone 6"); 
INSERT INTO patient VALUES("79","Smith","Haley","Filter","Male","2002-10-31","15","34.00","68.00","170","Adult","Bacolod City","99976867856","Student","Catholic","Single","2016-12-28","Keeping house(for others)","Dec","2016","Handumanan","Zone 3"); 
INSERT INTO patient VALUES("80","Cong","Nam","Viet","Male","2013-03-24","4","34.00","68.00","166","Minor","Bacolod City","99987564675","Student","Catholic","Single","2016-11-28","Paid Employment","Nov","2016","Handumanan","Zone 1"); 
INSERT INTO patient VALUES("81","Israel","Edward","Micth","Male","2012-11-30","5","34.00","54.00","170","Minor","Bacolod City","88384138418","Student","Catholic","Single","2016-04-02","Non-paid work(Volunteer/Charity)","Apr","2016","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("82","Sovl","Sonny","Javire","Male","2014-07-29","3","34.00","180.00","170","Minor","Bacolod City","99986543525","Paid Employment","Catholic","Single","1970-01-01","Student","Jan","1970","Handumanan","Zone 1"); 
INSERT INTO patient VALUES("83","Dela Cruz","Sharon","Maribelle","Female","2001-09-29","16","34.00","60.00","169","Adult","Bacolod City","88976543214","Student","Catholic","Single","2016-07-27","Paid Employment","Jul","2016","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("84","Bailey","Hannah","Sharon","Female","2014-11-27","3","34.00","50.00","150","Minor","Bacolod City","99954354354","Student","Catholic","Single","2016-01-29","Paid Employment","Jan","2016","Handumanan","Zone 5"); 
INSERT INTO patient VALUES("85","Johnson","Leki","Carl","Male","2002-01-30","16","34.00","60.00","160","Adult","Bacolod City","99875346543","Student","Catholic","Single","2018-02-07","Non-paid work(Volunteer/Charity)","Feb","2018","Banago","Zone 12"); 
INSERT INTO patient VALUES("86","Monteverde","Jenny","Ace","Female","1997-08-30","20","34.00","60.00","170","Adult","Bacolod City","99856543543","Student","Protestant","Single","2016-08-27","Self-Employment","Aug","2016","Handumanan","Zone 5"); 
INSERT INTO patient VALUES("87","Yelo","Mais","Con","Female","1995-02-28","22","35.00","67.00","170","Adult","Bacolod City","99864325643","Paid Employment","Protestant","Single","2016-06-25","Paid Employment","Jun","2016","Handumanan","Zone 8"); 
INSERT INTO patient VALUES("88","Miller","Artyom","Privyet","Male","1991-04-28","26","34.00","67.00","169","Adult","Bacolod City","45774326434","Paid Employment","Catholic","Single","1970-01-01","Paid Employment","Jan","1970","Handumanan","Zone 8"); 
INSERT INTO patient VALUES("89","Polan","Ottoman","Germ","Male","2000-01-30","18","34.00","50.00","160","Adult","Bacolod City","98544354355","Student","Catholic","Single","2016-10-29","Paid Employment","Oct","2016","Handumanan","Zone 3"); 
INSERT INTO patient VALUES("90","Cyrene","Maxence ","Mitch","Male","2001-04-04","16","34.00","60.00","160","Adult","Bacolod City","88656432214","Student","Catholic","Single","2016-05-28","Paid Employment","May","2016","Handumanan","Zone 4"); 
INSERT INTO patient VALUES("91","Kings","Derek","Vill","Male","1992-05-28","25","34.00","67.00","169","Adult","Bacolod City","88543533245","Student","Catholic","Single","1970-01-01","Paid Employment","Jan","1970","Handumanan","Zone 1"); 
INSERT INTO patient VALUES("92","Pinto","Bianca","Carvalho","Female","2009-02-27","8","35.00","50.00","160","Minor","Bacolod City","99545342325","Student","Catholic","Single","1970-01-01","Self-Employment","Jan","1970","Handumanan","Zone 12"); 
INSERT INTO patient VALUES("93","Corriea","Yasmin","Riberio","Female","2003-01-26","15","34.00","60.00","167","Adult","Bacolod City","87436576543","Student","Protestant","Single","2017-09-26","Paid Employment","Sep","2017","Handumanan","Zone 4"); 
INSERT INTO patient VALUES("94","Cardoso","Luana","Silva","Female","1998-10-31","19","34.23","50.00","150","Adult","Bacolod City","84325254232","Student","Born Again","Single","2017-11-23","Keeping house(for others)","Nov","2017","Handumanan","Zone 1"); 
INSERT INTO patient VALUES("95","Barbosa","Leonor","Cavalcanti","Female","1974-08-28","43","35.00","64.00","160","Adult","Bacolod City","54432542335","Student","Catholic","Single","2017-07-26","Paid Employment","Jul","2017","Handumanan","Zone 1"); 
INSERT INTO patient VALUES("96","Mohammad","Michael","Abullah","Male","1987-09-27","30","34.00","35.00","168","Adult","Bacolod City","87645654532","Paid Employment","Catholic","Single","1970-01-01","Self-Employment","Jan","1970","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("97","Castel","Victor","Coriea","Male","2005-11-29","12","34.32","67.00","169","Minor","Bacolod City","99856443532","Student","Protestant","Single","1970-01-01","Paid Employment","Jan","1970","Handumanan","Zone 12"); 
INSERT INTO patient VALUES("98","Gretel","Hansel","End","Male","1996-02-05","22","34.00","65.00","169","Adult","Bacolod City","99854353542","Paid Employment","Catholic","Single","1970-01-01","Self-Employment","Jan","1970","Handumanan","Zone 2"); 
INSERT INTO patient VALUES("99","Villacuve","Joy","Erma","Female","1997-11-30","20","34.00","69.00","169","Adult","Bacolod City","99854353254","Student","Catholic","Single","2017-09-27","Paid Employment","Sep","2017","Handumanan","Zone 1"); 
INSERT INTO patient VALUES("100","Lawrence","Mike","John","Male","1996-11-28","21","34.00","69.00","169","Adult","Bacolod City","99765454253","Student","Catholic","Single","2017-03-28","Paid Employment","Mar","2017","Handumanan","Zone 3"); 
DROP TABLE patient_medical_issue;

CREATE TABLE `patient_medical_issue` (
  `PMI_ID` int(5) NOT NULL AUTO_INCREMENT,
  `PP_HEATH` text NOT NULL,
  `TRMT` text NOT NULL,
  `MEDCT` text NOT NULL,
  `DISE_DISO` text NOT NULL,
  `HPTL` text NOT NULL,
  `P_ID` int(5) NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`PMI_ID`),
  KEY `P_ID` (`P_ID`),
  CONSTRAINT `patient_medical_issue_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

INSERT INTO patient_medical_issue VALUES("2","AIDS","No","No","No","No","2","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("3","AIDS","Yes","No","No","Yes","3","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("4","AIDS","No","No","No","No","4","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("5","AIDS","No","Yes","No","Yes","5","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("6","AIDS","No information given!","No information given!","No information given!","Dengue Fever","6","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("7","AIDS","No","No","Poor Eyesight","Last 2 years, medicine overdose","7","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("8","AIDS","No information given!","No information given!","asdasd","No information given!","8","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("9","AIDS","No","Drugs","Asthma","No","9","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("10","AIDS","No","No","Asthma","No","10","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("11","Allergies","No","No","No","No","11","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("12","Allergies","No","No","No","No","12","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("13","Allergies","No","No","No","No","13","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("14","Allergies","No","No","No","No","14","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("15","Allergies","No","No","No","No","15","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("16","Allergies","No","No","Heart","Accident","16","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("17","Allergies","No","No","No","No","17","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("18","Allergies","No","No","No","No","18","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("19","Asthma","No","No","No","No","19","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("20","Asthma","No","No","Asthma","No","20","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("21","Asthma","No","No","No","No","21","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("22","Asthma","No","noh","yiz","yiz yiz","22","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("23","Asthma","No","No","No","No","23","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("24","Asthma","No","No","No","No","24","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("25","Asthma","No","No","No","No","25","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("26","Asthma","No","No","No","No","26","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("27","No","No","No","Y4es","No","27","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("28","Asthma","No","No","bvb","No","28","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("29","Asthma","No","No","No","No","29","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("30","Asthma","No","No","No","No","30","Jan","2018"); 
INSERT INTO patient_medical_issue VALUES("31","f","No","No","No","No","31","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("32","yiz","No","No","Down syndrome","Accident","32","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("33","s","No","No","No","No","33","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("34","Nothing","No","Drugs","No","No","34","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("35","f","No","Biogesic","No","Accident","35","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("36","no","No","No","No","No","36","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("37","None","No","Biogesic","No","No","37","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("38","None","No","No","Heart","No","38","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("39","None","No","No","No","No","39","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("40","None","No","No","No","No","40","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("41","None","No","No","Sinus","Car accident","41","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("42","gh","No","Biogesic","Sinus","Vaccine","42","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("43","None","No","Drugs","No","No","43","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("44","None","No","No","No","No","44","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("45","None","No","No","No","FDSF","45","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("46","Pancit Canton","No","No information given!","No","No","46","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("47","Yiz","Yiz","No","No","No","47","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("48","Yiz","No","No","No","No","48","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("49","None","No","No","No","Yiz","49","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("50","None","No","No","Eyes","No","50","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("51","None","No","Vitamin C, Tempra","Mental","Na ungad ko","51","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("52","None","No","No","Heart","Arm cast","52","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("53","None","Yes","Tempra","Infidels","Broken arm","53","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("54","None","No","Vitamin C","Asthma","Arm cast","54","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("55","None","No","No","No","No","55","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("56","None","No","No","No","Yiz","56","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("57","None atm","No","No","No","No","57","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("58","None","No","No","May sakit","Hyes","58","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("59","Yes","No","Vitamin C","Sakit","No","59","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("60","dsad","No","Salt","dasd","medyo","60","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("61","None","No","No","Heart disease","No","61","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("62","Yiz","No","No","No","No","62","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("63","None","Ako","No","Yiz","No","63","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("64","None","No","No","Heart :( ","sang ligad","64","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("65","None","No","No","YIZ","No","65","","2018"); 
INSERT INTO patient_medical_issue VALUES("66","wer","sad","No","asdnlaknsd","sada","66","1","2018"); 
INSERT INTO patient_medical_issue VALUES("67","None","No","No","No","Vaccination","67","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("68","None","No","No","No","No","68","Oct","2016"); 
INSERT INTO patient_medical_issue VALUES("69","None","No","No","No","Vaccination","69","May","2016"); 
INSERT INTO patient_medical_issue VALUES("70","None","No","No","No","No","70","Jul","2016"); 
INSERT INTO patient_medical_issue VALUES("71","None","No","No","No","No","71","Feb","2016"); 
INSERT INTO patient_medical_issue VALUES("72","None","No","No","No","No","72","Dec","2016"); 
INSERT INTO patient_medical_issue VALUES("73","none","No","No","No","No","73","Jan","1970"); 
INSERT INTO patient_medical_issue VALUES("74","None","No","No","No","No","74","Feb","2016"); 
INSERT INTO patient_medical_issue VALUES("75","None","No","No","No","No","75","Jan","1970"); 
INSERT INTO patient_medical_issue VALUES("76","None","No","No","No","No","76","Dec","2016"); 
INSERT INTO patient_medical_issue VALUES("77","None","No","No","No","No","77","Dec","2016"); 
INSERT INTO patient_medical_issue VALUES("78","None","No","No","No","No","78","Aug","2016"); 
INSERT INTO patient_medical_issue VALUES("79","None","No","No","No","No","79","Dec","2016"); 
INSERT INTO patient_medical_issue VALUES("80","n","No","No","No","No","80","Nov","2016"); 
INSERT INTO patient_medical_issue VALUES("81","None","No","No","No","No","81","Apr","2016"); 
INSERT INTO patient_medical_issue VALUES("82","None","Anti rabies","Biogesic","No","Vaccination","82","Jan","1970"); 
INSERT INTO patient_medical_issue VALUES("83","None","No","No","No","No","83","Jul","2016"); 
INSERT INTO patient_medical_issue VALUES("84","None","No","Neozep","No","Vaccination","84","Jan","2016"); 
INSERT INTO patient_medical_issue VALUES("85","None","Vaccination","Biogesic","Asthma","No","85","Feb","2018"); 
INSERT INTO patient_medical_issue VALUES("86","None","No","Biogesic","No","Surgeons fixed my broken bones","86","Aug","2016"); 
INSERT INTO patient_medical_issue VALUES("87","None","No","No","No","No","87","Jun","2016"); 
INSERT INTO patient_medical_issue VALUES("88","None","No","No","No","No","88","Jan","1970"); 
INSERT INTO patient_medical_issue VALUES("89","None","No","Neozep","Adenovirus","No","89","Oct","2016"); 
INSERT INTO patient_medical_issue VALUES("90","None","No","No","ADHD","No","90","May","2016"); 
INSERT INTO patient_medical_issue VALUES("91","None","Home based medical service","No","No","No","91","Jan","1970"); 
INSERT INTO patient_medical_issue VALUES("92","None","No","No","No","two weeks of admittance ","92","Jan","1970"); 
INSERT INTO patient_medical_issue VALUES("93","None","No","Biogesic","ADHD","for two weeks","93","Sep","2017"); 
INSERT INTO patient_medical_issue VALUES("94","None","No","Biogesic","ADHD","1 week","94","Nov","2017"); 
INSERT INTO patient_medical_issue VALUES("95","None","No","Biogesic for kids","adhd","No","95","Jul","2017"); 
INSERT INTO patient_medical_issue VALUES("96","None","No","No","No","for two weeks","96","Jan","1970"); 
INSERT INTO patient_medical_issue VALUES("97","None","No","Neozep","ADHD","No","97","Jan","1970"); 
INSERT INTO patient_medical_issue VALUES("98","None","No","No","adhd","2 weeks","98","Jan","1970"); 
INSERT INTO patient_medical_issue VALUES("99","None","No","No","No","1 week","99","Sep","2017"); 
INSERT INTO patient_medical_issue VALUES("100","None at the moment","No","Neozep","No","One week","100","Mar","2017"); 
DROP TABLE referral;

CREATE TABLE `referral` (
  `RF_ID` int(5) NOT NULL AUTO_INCREMENT,
  `RF_DOCNAME` text NOT NULL,
  `RF_CN` text NOT NULL,
  `RF_ADD` text NOT NULL,
  `TRMTMNT_ID` int(5) NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`RF_ID`),
  KEY `TRMTMNT_ID` (`TRMTMNT_ID`),
  CONSTRAINT `referral_ibfk_1` FOREIGN KEY (`TRMTMNT_ID`) REFERENCES `treatment` (`TRMT_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO referral VALUES("1","","","","5","Feb","2018"); 
INSERT INTO referral VALUES("2","asdasd","asdasd","asdasd","8","Feb","2018"); 
DROP TABLE schedule;

CREATE TABLE `schedule` (
  `SCHEDULE_ID` int(5) NOT NULL AUTO_INCREMENT,
  `P_ID` int(5) NOT NULL,
  `SCHEDULE_DATE` date NOT NULL,
  `SCHEDULE_TIME` time NOT NULL,
  `SCHEDULE_PURPOSE` text NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`SCHEDULE_ID`),
  KEY `P_ID` (`P_ID`),
  CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO schedule VALUES("1","19","2018-02-07","07:18:00","Check Up","Feb","2018"); 
INSERT INTO schedule VALUES("2","16","2018-02-07","07:19:00","Check Up","Feb","2018"); 
INSERT INTO schedule VALUES("3","33","2018-02-09","01:49:00","Check Up","Feb","2018"); 
INSERT INTO schedule VALUES("4","14","2018-02-09","07:28:00","Check Up","Feb","2018"); 
INSERT INTO schedule VALUES("12","10","2018-02-03","18:02:00","Check Up","Feb","2018"); 
INSERT INTO schedule VALUES("13","11","2018-02-16","18:15:00","Check Up","Feb","2018"); 
INSERT INTO schedule VALUES("14","10","2018-02-05","02:14:00","Check Up","Feb","2018"); 
INSERT INTO schedule VALUES("15","10","2018-02-10","03:20:00","Check Up","Feb","2018"); 
INSERT INTO schedule VALUES("16","10","2018-02-10","14:08:00","Laboratory Test","Feb","2018"); 
INSERT INTO schedule VALUES("17","12","2018-02-10","14:08:00","Check Up","Feb","2018"); 
DROP TABLE treatment;

CREATE TABLE `treatment` (
  `TRMT_ID` int(5) NOT NULL AUTO_INCREMENT,
  `MR_ID` int(5) NOT NULL,
  `DIAG_DTLS` longtext NOT NULL,
  `TREATMENT` text NOT NULL,
  `REMARKS` text NOT NULL,
  `F_CHECKUP` date NOT NULL,
  `User_id` int(5) NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`TRMT_ID`),
  KEY `MR_ID` (`MR_ID`),
  KEY `User_id` (`User_id`),
  CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`MR_ID`) REFERENCES `medical_record` (`MR_ID`) ON UPDATE CASCADE,
  CONSTRAINT `treatment_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO treatment VALUES("1","1","You have a Family History of high cholesterol, depression. Allergies: Allergies noted: dust, food - gluten. Illnesses: chicken pox, migraine. Operations: No operations were identified. Prosthesis: No Prosthetic Devices were noted. Blood Transfusions: No history of Blood Transfusion(s). Bones Broken: You have broken your left middle femur.","Health Supplements: You are taking vitamin B, vitamin D, multivitamins, calcium, celery and juniper.","Please keep your vaccinations up to date and ask your doctor if they are current.","2018-02-10","3","Feb","2018"); 
INSERT INTO treatment VALUES("2","2","ako ni sa","ako ni sa","ako ni sa","2018-02-15","11","Feb","2018"); 
INSERT INTO treatment VALUES("3","3","","","","2018-02-08","3","Feb","2018"); 
INSERT INTO treatment VALUES("4","4","You have a family history of sever cough","Drink water 8 times a day ","Come back for a follow up checkup","2018-02-11","3","Feb","2018"); 
INSERT INTO treatment VALUES("5","5","asdasd","asdasd","asdasdas","2018-02-09","3","Feb","2018"); 
INSERT INTO treatment VALUES("6","6","aasdasd","asdasd","asdasd","2018-02-13","11","Feb","2018"); 
INSERT INTO treatment VALUES("7","7","asda","asd","asd","2018-02-10","11","Feb","2018"); 
INSERT INTO treatment VALUES("8","8","Tonsil due to eating of sweet foods","Antibiotic","to come  back next week for follow up checkup","2018-02-10","11","Feb","2018"); 
INSERT INTO treatment VALUES("9","9","You have a family history of asthma","Inhaler","Go back","2018-02-13","3","Feb","2018"); 
DROP TABLE urinalysis;

CREATE TABLE `urinalysis` (
  `URINE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LAB_ID` int(11) NOT NULL,
  `COLOR_PHY_PRO` text NOT NULL,
  `TRANS_PHY_PRO` text NOT NULL,
  `PH_PHY_PRO` text NOT NULL,
  `SPEC_GRAV_PHY_PRO` text NOT NULL,
  `RED_SUG_CT` text NOT NULL,
  `PRO_CT` text NOT NULL,
  `PUS_CELL` text NOT NULL,
  `RBC_CELL` text NOT NULL,
  `YEAST_CELL` text NOT NULL,
  `SQUAMOS_CELL` text NOT NULL,
  `RENAL_CELL` text NOT NULL,
  `BACTERIA_CELL` text NOT NULL,
  `DESA_CASTS` text NOT NULL,
  `CO_GRAN_CASTS` text NOT NULL,
  `FIN_GRAN_CASTS` text NOT NULL,
  `PUS_CASTS` text NOT NULL,
  `RBC_CASTS` text NOT NULL,
  `WAXY_CASTS` text NOT NULL,
  `AU_CRYSTALS` text NOT NULL,
  `APO_CRYSTALS` text NOT NULL,
  `URIC_ACID_CRYSTALS` text NOT NULL,
  `CAL_OX_CRYSTALS` text NOT NULL,
  `TRI_PO_CRYSTALS` text NOT NULL,
  `MUC_TH` text NOT NULL,
  `REMARKS` text NOT NULL,
  `MONTH` varchar(4) NOT NULL,
  `YEAR` int(4) NOT NULL,
  PRIMARY KEY (`URINE_ID`),
  KEY `LAB_ID` (`LAB_ID`),
  CONSTRAINT `urinalysis_ibfk_1` FOREIGN KEY (`LAB_ID`) REFERENCES `laboratory_record` (`LAB_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE users;

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Firstname` text NOT NULL,
  `Middlename` text NOT NULL,
  `Lastname` text NOT NULL,
  `Gender` text NOT NULL,
  `Position` text NOT NULL,
  `License_No` varchar(15) NOT NULL,
  `DATE_START` date NOT NULL,
  `STATUS` text NOT NULL,
  `MONTH` char(3) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `User_id` (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","Admin","$2y$12$b6DGFGqHj5ewX7iYpivHe.yW6zhZETzEneOWMjw6vJheMO8Sy73W6","ADMIN","ADMIN","ADMIN","-None-","Admin","ADMIN","2018-01-26","Active","1","2018"); 
INSERT INTO users VALUES("2","Gabriel1011","$2y$12$47jkt5YXJ2EnZfjXBC5wbeAswQP.l3tWlgsAmhTBydnpoWpHB6EQy","Gabriel Francis","M.","Banua","Male","Admin","#LCN542682A","2018-01-27","Active","1","2018"); 
INSERT INTO users VALUES("3","Alec","$2y$12$MIATcGhWeAYlp8B/OBrMQuWjrvm5/4E3yecldzsJKFga0mqcmru5e","Alec","Legaspi","Rubz","Male","Doctor","#LCN123516HA","0000-00-00","Active","1","2018"); 
INSERT INTO users VALUES("11","Alson","$2y$12$YB1QNux2eYH2jHyup86OY.3HvPuyILpwGSrhk.7uqk/PbThhwTMrG","Alson John","R.","Bayon-on","Male","Doctor","#LCN1234ASD4","2018-01-28","Active","1","2018"); 
INSERT INTO users VALUES("12","Carl","$2y$12$XbYd6n5cGRnC.ii9jRhlnODbD4iXJNRb0HEe9aTEfFX5UW8bBpCmG","Carl","B","Betio","Male","Admin","LCN12312515","2018-01-29","Active","1","2018"); 
INSERT INTO users VALUES("13","Carl1","$2y$12$pB/L7qFz0/v0OOKXWS0eZu7bvj2PjzZJrpdz/QWBOrOPVjZ5IBBxq","carl","l","betio","Male","Pharmacist","#lcn1234567890","2018-01-31","Active","1","2018"); 
INSERT INTO users VALUES("14","John123","$2y$12$YfYQK4HvyWYCbfXybNWmP.cmxWLGuMlyNASlmpHCZ4dyzJ.TAOp3y","John Vergel","L.","Sitones","Male","Pathologist","Q8684252","2018-02-01","Active","2","2018"); 
INSERT INTO users VALUES("15","Lester29","$2y$12$AJnmMpKm9nKmP3maXV1p4eQpdZwpPeWUTwAySdGazkyLwKCj.J9WC","Lester","Pearce","Outterridge","Male","Medtech","E8301955","2018-02-08","Active","Feb","2018"); 
INSERT INTO users VALUES("16","Hollie16","$2y$12$sGDlGd9G3KgAh9DrA8v3VeAfhZouhe9PY4vkS3sLxPbu3IsWHvv1G","Hollie","Arden","Mitchell","Female","Pharmacist","X2103654","2018-02-08","Active","Feb","2018"); 



