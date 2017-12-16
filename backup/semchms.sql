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
  `MARITAL_STAT` text NOT NULL,
  `YEARS_FE` int(2) NOT NULL,
  `DOM_HAND` text NOT NULL,
  `CB_HEALTH_COND` text NOT NULL,
  `TU_HEALTH_COND` text NOT NULL,
  `PMI_ID` int(5) NOT NULL,
  PRIMARY KEY (`ADULT_ID`),
  KEY `PMI_ID` (`PMI_ID`),
  CONSTRAINT `adult_ibfk_1` FOREIGN KEY (`PMI_ID`) REFERENCES `patient_medical_issue` (`PMI_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO adult VALUES("1","Good","undefined","Yes","No","No","No","undefined","undefined","15","Left","Fever","Tonsil","1"); 
INSERT INTO adult VALUES("2","Good","undefined","No","No","No","No","undefined","undefined","15","Left","Fever","Fever","2"); 
INSERT INTO adult VALUES("3","Good","undefined","Yes","No","Yes","Yes","undefined","undefined","16","Left","fever","fever","3"); 
INSERT INTO adult VALUES("4","Good","undefined","No","No","No","No","No","none","15","Left","Fever","Back Injury","4"); 
INSERT INTO adult VALUES("5","Poor","Poor","Yes","Yes","Yes","Yes","Yes","single","15","Left","Fever","Dengue","5"); 
INSERT INTO adult VALUES("6","Poor","undefined","Yes","Yes","No","Yes","No","","0","Left","","","6"); 



DROP TABLE consultation;

CREATE TABLE `consultation` (
  `CO_ID` int(5) NOT NULL AUTO_INCREMENT,
  `SCHEDULE_ID` int(5) NOT NULL,
  `PHYSICIAN_ID` int(5) NOT NULL,
  `CO_REMARKS` int(20) NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`CO_ID`),
  KEY `SCHEDULE_ID` (`SCHEDULE_ID`,`PHYSICIAN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE patient;

CREATE TABLE `patient` (
  `P_ID` int(5) NOT NULL AUTO_INCREMENT,
  `P_LNAME` text NOT NULL,
  `P_FNAME` text NOT NULL,
  `P_MNAME` text NOT NULL,
  `P_GNDR` text NOT NULL,
  `P_BDATE` date NOT NULL,
  `P_AGE` int(2) NOT NULL,
  `P_TEMP` decimal(4,0) NOT NULL,
  `P_WGHT` decimal(4,0) NOT NULL,
  `P_HGHT` varchar(4) NOT NULL,
  `P_TYPE` text NOT NULL,
  `P_ADD` text NOT NULL,
  `P_CN` varchar(13) NOT NULL,
  `P_OCCU` text NOT NULL,
  `P_REL` text NOT NULL,
  `P_CVL_STAT` text NOT NULL,
  `DATE_REG` date NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("1","Banua","Gabriel Francis","Madrista","Male","1997-10-11","20","37","84","178","Adult","Samaka Village Canlaon City","096771375","Student","Catholic","Single","2017-11-26"); 
INSERT INTO patient VALUES("2","Bayon-on","Alson John","R","Male","1997-07-12","20","36","180","179","Adult","Banago Bacolod City","091230298","Student","Catholic","Single","2017-11-26"); 
INSERT INTO patient VALUES("3","Molabin","Daniel","V","Male","1997-11-11","20","38","82","163","Adult","La carlota City","091242265","Student","Catholic","Single","2017-11-28"); 
INSERT INTO patient VALUES("4","Betio","Carl Louie","G.","Male","1997-09-17","20","37","65","162","Adult","Sum-ag, Bacolod City","091254423","Student","Catholic","Single","2017-11-28"); 
INSERT INTO patient VALUES("5","Entes","Leonel","C.","Male","1997-08-12","20","37","160","60","Adult","Singcang, Bacolod City","123412287","Senior Citizen","Catholic","Single","2017-12-05"); 
INSERT INTO patient VALUES("6","vvbb","asdad`s","dhhhh","Male","2000-07-11","19","36","84","184","Adult","nnnnnnnn","090901234","Student","Catholic","Single","2017-12-13"); 



DROP TABLE patient_medical_issue;

CREATE TABLE `patient_medical_issue` (
  `PMI_ID` int(5) NOT NULL AUTO_INCREMENT,
  `PP_HEATH` text NOT NULL,
  `TRMT` text NOT NULL,
  `MEDCT` text NOT NULL,
  `DISE_DISO` text NOT NULL,
  `HPTL` text NOT NULL,
  `P_ID` int(5) NOT NULL,
  PRIMARY KEY (`PMI_ID`),
  KEY `P_ID` (`P_ID`),
  CONSTRAINT `patient_medical_issue_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO patient_medical_issue VALUES("1","Back Pain","No","No","No","No","1"); 
INSERT INTO patient_medical_issue VALUES("2","Back Pain","No","No","No","No","2"); 
INSERT INTO patient_medical_issue VALUES("3","none","Yes","No","No","Yes","3"); 
INSERT INTO patient_medical_issue VALUES("4","none","No","No","No","No","4"); 
INSERT INTO patient_medical_issue VALUES("5","Back pain","No","Yes","No","Yes","5"); 
INSERT INTO patient_medical_issue VALUES("6","wsdwf","Yes","Yes","Yes","Yes","6"); 



DROP TABLE physician;

CREATE TABLE `physician` (
  `PHYSICIAN_ID` int(5) NOT NULL AUTO_INCREMENT,
  `PHYSICIAN_NAME` text NOT NULL,
  `SPECIALTY` text NOT NULL,
  `LICENSE_NO` varchar(20) NOT NULL,
  PRIMARY KEY (`PHYSICIAN_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE schedule;

CREATE TABLE `schedule` (
  `SCHEDULE_ID` int(5) NOT NULL AUTO_INCREMENT,
  `P_ID` int(5) NOT NULL,
  `SCHEDULE_DATE` date NOT NULL,
  `SCHEDULE_PURPOSE` text NOT NULL,
  PRIMARY KEY (`SCHEDULE_ID`),
  KEY `P_ID` (`P_ID`),
  CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO schedule VALUES("5","3","2017-12-29","Dental"); 
INSERT INTO schedule VALUES("6","4","2017-12-21","Laboratory Test"); 
INSERT INTO schedule VALUES("7","1","1970-01-01","Dental"); 
INSERT INTO schedule VALUES("9","1","2017-12-20","X-ray"); 
INSERT INTO schedule VALUES("10","1","2017-12-14","Laboratory Test"); 



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
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `User_id` (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","Gabriel1011","$2y$12$EXhmw8JZyVEHUltuANpxR.k6gLIP1dryL9AhAiSdAZTbrb7L.vGOy","Gabriel Francis","M","Banua","Male","Admin"); 
INSERT INTO users VALUES("2","Alexander","$2y$12$kP1BHsibIlX.EQvVX9xybu82QXM4YLLbypvi8XbGBTvEND0eKqDQy","Alec","L.","Rubiato","Male","Admin"); 
INSERT INTO users VALUES("3","Alson123","$2y$12$NvS6cCMc4gvBrg.V7F2PpuyI/M/MACqm4smQgHsgXVStML1kp4TP2","Alson John","R.","Bayon-on","Male","Doctor"); 
INSERT INTO users VALUES("4","Carl1234","$2y$12$BGgUUdUGpuujwsquNjxDluwJTnryC9fFmf0RF6NllbYIMrfRjxuru","Carl louie","G","Betio","Male","Doctor"); 
INSERT INTO users VALUES("5","Alvin09","$2y$12$thmQKlyErQqmp0JLURQ6qOUF7wNMRPis33e34QKK4pAJRqdPglUcG","Alvin","T.","Yanson","Male","Admin"); 



