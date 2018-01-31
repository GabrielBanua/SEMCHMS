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
  `MONTH` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`ADULT_ID`),
  KEY `PMI_ID` (`PMI_ID`),
  CONSTRAINT `adult_ibfk_1` FOREIGN KEY (`PMI_ID`) REFERENCES `patient_medical_issue` (`PMI_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

INSERT INTO adult VALUES("2","Good","Good","Alson","Alson","Alson","Alson","Alson","15","Left","Fever","Fever","2","0","0"); 
INSERT INTO adult VALUES("3","Good","--Select--","Yes","No","Yes","Yes","undefined","16","Left","fever","fever","3","0","0"); 
INSERT INTO adult VALUES("4","Good","Good","No","No","No","No","No","15","Left","Fever","Back Injury","4","0","0"); 
INSERT INTO adult VALUES("5","Poor","Poor","Yes","Yes","Yes","Yes","Yes","15","Left","Fever","Dengue","5","0","0"); 
INSERT INTO adult VALUES("6","Good","Good","Broken Ankle","No information given!","Moderately, Once or Twice a year","No information given!","No information given!","15","Left","Intense Headache","No information given!","6","0","0"); 
INSERT INTO adult VALUES("7","Good","Good","No","twice a year sometimes none","4 to 6 times a month","No","No","15","Left","Broken Ankle","Dengue Fever","7","0","0"); 
INSERT INTO adult VALUES("8","Good","Good","No information given!","No information given!","No information given!","No information given!","No information given!","12","Left","No information given!","No information given!","8","1","2018"); 
INSERT INTO adult VALUES("9","Good","Very Good","No","No","No","Wheel Chair","No","4","Right","gdg","No","9","1","2018"); 
INSERT INTO adult VALUES("10","Good","Good","fsd","No","No","No","Mother","5","Right","No","No","10","1","2018"); 
INSERT INTO adult VALUES("11","Very Good","Very Good","No","No","No","No","No","4","Left","No","No","11","1","2018"); 
INSERT INTO adult VALUES("12","Good","Good","No","No","Marijuana","No","Mother","3","Right","No","No","12","1","2018"); 
INSERT INTO adult VALUES("13","Good","Good","No","No","No","No","No","1","Right","No","No","13","1","2018"); 
INSERT INTO adult VALUES("14","Good","Good","No","No","No","No","No","4","Left","Noh","ghh","14","1","2018"); 
INSERT INTO adult VALUES("15","Good","Good","No","No","No","No","No","4","Left","No","No","15","1","2018"); 
INSERT INTO adult VALUES("16","Good","Good","No","No information given!","No","No","No","4","Right","No","No","16","1","2018"); 
INSERT INTO adult VALUES("17","Good","Good","No","No","Cocaine","No","No","4","Right","gfdg","No","17","1","2018"); 
INSERT INTO adult VALUES("18","Good","Good","No","No","No","No","No","4","Left","No","No","18","1","2018"); 
INSERT INTO adult VALUES("19","Good","Good","No","No","No","No","No","5","Right","No","No","19","1","2018"); 
INSERT INTO adult VALUES("20","Good","Poor","Broken bones :( ","2 times a day","3 times a day :0","No","No","5","Right","No","No","20","1","2018"); 
INSERT INTO adult VALUES("21","Good","Good","No","No","No","No","No","2","Right","No","No","21","1","2018"); 
INSERT INTO adult VALUES("22","Very Good","Very Good","aww yiz","No","Soom weed ;)","No","No","4","Right","No","No","22","1","2018"); 
INSERT INTO adult VALUES("23","Very Good","Poor","No","No","No","No","No","6","Left","No","No","23","1","2018"); 
INSERT INTO adult VALUES("24","Poor","Good","No","No","No","No","No","4","Left","No","Slight","24","1","2018"); 
INSERT INTO adult VALUES("25","Good","Good","No","No","No","No","No","4","Left","No","No","25","1","2018"); 
INSERT INTO adult VALUES("26","Good","Good","No","No","No","No","No","4","Right","No","No","26","1","2018"); 
INSERT INTO adult VALUES("27","Good","Good","Yes","No","No","No","g","4","Right","No","No","27","1","2018"); 
INSERT INTO adult VALUES("28","Good","Good","No","No","No","No","No","4","Right","No","No","28","1","2018"); 
INSERT INTO adult VALUES("29","Good","Good","No","No","No","No","No","4","Left","No","No","29","1","2018"); 
INSERT INTO adult VALUES("30","Good","Poor","No","No","No","No","No","4","Left","No","No","30","1","2018"); 
INSERT INTO adult VALUES("31","Poor","Poor","No","No","No","No","No","4","Left","rt","tr","31","1","2018"); 
INSERT INTO adult VALUES("32","Poor","Good","Cannot play well","Smoke weed","No","No","Mother","4","Left","uyiz","No","32","1","2018"); 
INSERT INTO adult VALUES("33","Poor","Good","No","No","No","No","No","4","Right","No","No","33","1","2018"); 
INSERT INTO adult VALUES("34","Very Good","Very Good","No","No","No","Hearing Aid","Mother","1","Right","No","No","34","1","2018"); 
INSERT INTO adult VALUES("35","Good","Good","No","No","No","Glasses","No","2","Left","No","No","35","1","2018"); 
INSERT INTO adult VALUES("36","Good","Good","No","No","No","No","No","4","Right","Yes","No","36","1","2018"); 
INSERT INTO adult VALUES("37","Good","Good","Bones","No","Vodka","No","No","2","Right","No","No","37","1","2018"); 
INSERT INTO adult VALUES("38","Good","Very Good","No","No","No","No","No","2","Right","g","g","38","1","2018"); 
INSERT INTO adult VALUES("39","Good","Good","No","No","No","No","Father","1","Right","Sports","No","39","1","2018"); 
INSERT INTO adult VALUES("40","Good","Good","No","No","No","Glasses","No","1","Right","No","Cannot run well","40","1","2018"); 
INSERT INTO adult VALUES("41","Good","Good","Broken bones","No","No","No","Father","5","Right","yiz","No","41","1","2018"); 
INSERT INTO adult VALUES("42","Poor","Good","No","No","No","No","No","4","Left","No","No","42","1","2018"); 
INSERT INTO adult VALUES("43","Good","Good","No","No","No","No","No","4","Right","No","No","43","1","2018"); 
INSERT INTO adult VALUES("44","Good","Good","No","No","No","No","No","5","Left","N","No","44","1","2018"); 
INSERT INTO adult VALUES("45","Good","Good","No","No","Cocaine","Glasses","No","4","Left","No","No information given!","45","1","2018"); 
INSERT INTO adult VALUES("46","Good","Good","No","No information given!","No","No","Father","4","Right","Bones broke","Yes","46","1","2018"); 
INSERT INTO adult VALUES("47","Good","Good","So hot","Everyday 24/7","Cocaine","No","No","4","Left","No","Yes due to some mental breakdown status","47","1","2018"); 
INSERT INTO adult VALUES("48","Good","Good","No","Yiz","No","No","Yiz","4","Left","No","No","48","1","2018"); 
INSERT INTO adult VALUES("49","Good","Good","No","3 times a day","Amphetamine ","Glasses","Uyaban","4","Right","No","No","49","1","2018"); 
INSERT INTO adult VALUES("50","Poor","Poor","yes","24 times a day","No","No","No","4","Left","No","No","50","1","2018"); 
INSERT INTO adult VALUES("51","Good","Good","No","No","No","Hearing aid","Mother","4","Right","No","No","51","1","2018"); 
INSERT INTO adult VALUES("52","Good","Good","No","No","No","Glasses","No","5","Right","No","No","52","1","2018"); 
INSERT INTO adult VALUES("53","Good","Very Good","No","Twice a day","No","Wheel chair","Brother","4","Left","No","No","53","1","2018"); 
INSERT INTO adult VALUES("54","Good","Good","Arm broken","No","No","Wheel chair","Sister","4","Right","No","No","54","1","2018"); 
INSERT INTO adult VALUES("55","Good","Good","Leg","No","No","No","No","4","Left","No","No","55","1","2018"); 
INSERT INTO adult VALUES("56","Good","Good","Leg","24 times a day","No","Pacemaker","No","4","Right","No","No","56","1","2018"); 
INSERT INTO adult VALUES("57","Good","Good","No","No","Cocaine","No","No","4","Left","No","No","57","1","2018"); 
INSERT INTO adult VALUES("58","Good","Good","Leg injury","24 times a day","Mary Jane","Glasses","Brother","3","Right","No","No","58","1","2018"); 
INSERT INTO adult VALUES("59","Poor","Poor","Injury","No","No","No","No","4","Right","No","No","59","1","2018"); 
INSERT INTO adult VALUES("60","Good","Good","No","No","No","No","No","3","Left","No","No","60","1","2018"); 
INSERT INTO adult VALUES("61","Good","Good","No","dsa","No","No","Ako","4","Right","No","No","61","1","2018"); 
INSERT INTO adult VALUES("62","Good","Good","Bone injury","No","yes","Ues","No","4","Right","No","No","62","1","2018"); 
INSERT INTO adult VALUES("63","Good","Good","No","Permi","Permi","No","Mama","3","Left","No","No","63","1","2018"); 
INSERT INTO adult VALUES("64","Very Good","Very Good","No","25 times a day","Drugs","No","Mother","4","Right","No","No","64","1","2018"); 
INSERT INTO adult VALUES("65","Poor","Good","No","No","No","No","No","4","Right","No","No","65","1","2018"); 



DROP TABLE inventory;

CREATE TABLE `inventory` (
  `INV_ID` int(5) NOT NULL AUTO_INCREMENT,
  `MEDICINE_ID` int(5) NOT NULL,
  `INV_QTY` int(5) NOT NULL,
  `INV_SUPPLIER` text NOT NULL,
  `INV_EXPD` date NOT NULL,
  `INV_DATE_ARV` date NOT NULL,
  `INV_QTY_HIST` int(5) NOT NULL,
  `MONTH` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`INV_ID`),
  KEY `MEDICINE_ID` (`MEDICINE_ID`),
  CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`MEDICINE_ID`) REFERENCES `medicine` (`MEDICINE_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO inventory VALUES("2","14","100","PhilippineDrug","2018-01-20","2018-01-11","100","0","0"); 
INSERT INTO inventory VALUES("4","18","100","AlecDrugNation","2018-01-17","2018-01-17","100","0","0"); 



DROP TABLE lab_request;

CREATE TABLE `lab_request` (
  `LBR_ID` int(5) NOT NULL AUTO_INCREMENT,
  `LBR_TYPE` text NOT NULL,
  `LBR_REQ` text NOT NULL,
  `LBR_DATE` date NOT NULL,
  `TRMNT_ID` int(5) NOT NULL,
  `MONTH` int(11) NOT NULL,
  `YEAR` int(4) NOT NULL,
  PRIMARY KEY (`LBR_ID`),
  KEY `TRMNT_ID` (`TRMNT_ID`),
  CONSTRAINT `lab_request_ibfk_1` FOREIGN KEY (`TRMNT_ID`) REFERENCES `treatment` (`TRMT_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

<<<<<<< HEAD
INSERT INTO lab_request VALUES("1","Fecalisys","asdasd","2018-01-28","1","1","2018"); 
=======
INSERT INTO inventory VALUES("2","14","100","PhilippineDrug","2018-01-20","2018-01-11","100","0","0"); 
INSERT INTO inventory VALUES("4","18","100","AlecDrugNation","2018-01-17","2018-01-17","100","0","0"); 
INSERT INTO inventory VALUES("5","17","300","hjgjhbkjb","2018-05-31","2018-01-29","300","1","2018"); 



DROP TABLE lab_request;

CREATE TABLE `lab_request` (
  `LBR_ID` int(5) NOT NULL AUTO_INCREMENT,
  `LBR_TYPE` text NOT NULL,
  `LBR_REQ` text NOT NULL,
  `LBR_DATE` date NOT NULL,
  `TRMNT_ID` int(5) NOT NULL,
  `MONTH` int(11) NOT NULL,
  `YEAR` int(4) NOT NULL,
  PRIMARY KEY (`LBR_ID`),
  KEY `TRMNT_ID` (`TRMNT_ID`),
  CONSTRAINT `lab_request_ibfk_1` FOREIGN KEY (`TRMNT_ID`) REFERENCES `treatment` (`TRMT_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

>>>>>>> 74820e457ed9feb1d24e7f541cc71cbf4563fec2



DROP TABLE medical_record;

CREATE TABLE `medical_record` (
  `MR_ID` int(5) NOT NULL AUTO_INCREMENT,
  `MR_ILL` text NOT NULL,
  `MR_BP` varchar(8) NOT NULL,
  `MR_WEIGHT` decimal(10,2) NOT NULL,
  `MR_TEMP` decimal(10,2) NOT NULL,
  `DATE` datetime NOT NULL,
  `MONTH` int(2) NOT NULL,
  `YEAR` int(4) NOT NULL,
  `SCHED_ID` int(5) NOT NULL,
  `MR_STATUS` text NOT NULL,
  PRIMARY KEY (`MR_ID`),
  KEY `SCHED_ID` (`SCHED_ID`),
  CONSTRAINT `medical_record_ibfk_1` FOREIGN KEY (`SCHED_ID`) REFERENCES `schedule` (`SCHEDULE_ID`) ON UPDATE CASCADE
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO medical_record VALUES("2","palupok","111/11","111.00","111.00","2018-01-28 23:21:59","1","2018","1","Completed"); 
INSERT INTO medical_record VALUES("4","Agitoy","1111/11","1111.00","11111.00","2018-01-29 18:27:04","1","2018","1","Pending"); 
=======
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO medical_record VALUES("1","hypertension","110/80","64.50","37.80","2018-01-29 13:58:51","1","2018","1","Completed"); 
INSERT INTO medical_record VALUES("2","hypertension","110/80","64.50","37.80","2018-01-29 14:46:07","1","2018","2","Pending"); 
>>>>>>> 74820e457ed9feb1d24e7f541cc71cbf4563fec2



DROP TABLE medicine;

CREATE TABLE `medicine` (
  `MEDICINE_ID` int(5) NOT NULL AUTO_INCREMENT,
  `MEDICINE_CAT` text NOT NULL,
  `MEDICINE_TYPE` text NOT NULL,
  `MEDICINE_GNAME` text NOT NULL,
  `MEDICINE_BNAME` text NOT NULL,
  `MEDICINE_DFORM` text NOT NULL,
  `MEDICINE_DOSE` varchar(10) NOT NULL,
  `Month` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  PRIMARY KEY (`MEDICINE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO medicine VALUES("11","Adult","Antibiotics","Paracetamol","Biogesic","Tablet","500 mg","1","2018"); 
INSERT INTO medicine VALUES("12","Adult","Antibiotics","Paracetamol","Dolan","Tablet","500 mg","1","2018"); 
INSERT INTO medicine VALUES("14","Adult","Antibiotics","Ambroxol","Neobloc","Tablet","300 mg","1","2018"); 
INSERT INTO medicine VALUES("15","Adult","Antibiotics","Ambroxol","Amoxiciline","Tablet","500 mg","1","2018"); 
INSERT INTO medicine VALUES("17","Adult","Antibiotics","Paracetamol","Tempra","Tablet","100 mg","1","2018"); 
INSERT INTO medicine VALUES("18","Adult","Antibiotics","Paracetamol","Tempra","Tablet","600 mg","1","2018"); 
INSERT INTO medicine VALUES("19","Adult","Antibiotics","Paracetamol","Tempra_Forte","Tablet","50 mg","1","2018"); 
INSERT INTO medicine VALUES("20","Adult","Antibiotics","Paracetamol","Tempra_Forte","Tablet","100 mg","1","2018"); 
INSERT INTO medicine VALUES("21","Adult","Antibiotics","Paracetamol","Calpol","Tablet","1000mg","1","2018"); 



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
  `MONTH` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("2","Bayon-on","Alson John","R","Male","1997-07-12","20","36.00","180.00","179","Adult","Banago Bacolod City","091230298","Student","Catholic","Single","2018-01-14","Self-Employment","0","0"); 
INSERT INTO patient VALUES("3","Molabin","Daniel","V","Male","1997-11-11","20","38.00","82.00","163","Adult","La carlota City","091242265","Student","Catholic","Single","2017-12-31","Self-Employment","0","0"); 
INSERT INTO patient VALUES("4","Betio","Carl Louie","G.","Male","1997-09-17","20","37.00","65.00","162","Adult","Sum-ag, Bacolod City","091254423","Student","Catholic","Single","2017-12-31","Self-Employment","0","0"); 
INSERT INTO patient VALUES("5","Entes","Leonel","C.","Male","1997-08-12","20","37.00","160.00","60","Adult","Singcang, Bacolod City","123412287","Senior Citizen","Catholic","Single","2017-12-05","","0","0"); 
INSERT INTO patient VALUES("6","Garilao","Crosser","T","Male","1996-05-22","12","36.70","84.50","168","Adult","Brgy. Masulog Canlaon City","09091231475","Unemployed","Catholic","Single","2017-12-31","Self-Employment","0","0"); 
INSERT INTO patient VALUES("7","Marinay","Ryan Jefferson","A.","Male","1997-12-26","20","36.70","65.60","165","Adult","Canlaon City Negros Oriental","09092344522","Paid Employment","Catholic","Single","2017-12-31","--Select--","0","0"); 
INSERT INTO patient VALUES("8","asdasd","asdad","adsasd","Male","2014-10-14","3","12.00","12.00","12","MINOR","asdad","124125","Self-Employment","Catholic","Single","2018-01-14","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("9","Rosalia","Jethro","Manapla","Male","1998-01-02","20","34.00","70.00","170","Adult","Banago Bacolod City","53334231","Unemployed","Catholic","Single","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("10","Tacey","Aleksandr","Mohammad","Male","1997-01-01","21","35.00","74.00","171","Adult","Handumanan","21314352","Paid Employment","Catholic","Single","2018-01-21","House-maker(Own House)","1","2018"); 
INSERT INTO patient VALUES("11","Olga","Rheanna ","Villaridad","Female","1982-01-01","36","33.00","67.00","150","Adult","Taculing","4352413","House-maker(Own House)","Catholic","Married","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("12","Amilcar","Gwyneth","Renz","Male","2000-02-02","17","34.00","70.00","169","Adult","Mansilingan","854464246","Non-paid work(Volunteer/Charity)","Muslim","Single","2018-01-21","Keeping house(for others)","1","2018"); 
INSERT INTO patient VALUES("13","Sy","Fritz","Ola","Male","2010-02-02","7","35.00","50.00","140","Minor","Banago Bacolod City","9543532342","Student","Catholic","Single","2018-01-21","Student","1","2018"); 
INSERT INTO patient VALUES("14","Nereida","Pirkko","Hoh","Male","1998-02-02","19","34.00","69.00","187","Adult","Bacolod City","796455434","Student","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","1","2018"); 
INSERT INTO patient VALUES("15","Pineapple","Ion","Del Monte","Male","1982-01-01","36","35.00","60.00","188","Adult","Manila","5676575674","Student","Muslim","Married","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("16","Erico","Satomi","Legaspi","Female","1997-02-02","20","35.00","57.00","167","Adult","Mansilingan","6674524246","Student","Catholic","Single","2018-01-21","Student","1","2018"); 
INSERT INTO patient VALUES("17","Ubas","Erul","John ","Male","1997-08-19","20","35.00","68.00","169","Adult","Sum-ag, Bacolod City","7746345345","Student","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","1","2018"); 
INSERT INTO patient VALUES("18","Chlothar","Shailaja","Hehe","Female","1997-02-03","20","35.00","67.00","167","Adult","Banago Bacolod City","9444431342","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("19","Torete","Gunder","Dela Rojas","Male","1997-02-03","20","34.50","69.00","168","Adult","Banago Bacolod City","67856444235","Student","Muslim","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("20","Cake","Top","Keke","Female","1997-02-03","20","34.00","69.00","169","Adult","Banago Bacolod City","96765634544","Paid Employment","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","1","2018"); 
INSERT INTO patient VALUES("21","Abrams","Joland","Em Juan","Male","2000-01-01","18","34.00","67.00","170","Adult","Cleveland","65356535432","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("22","Ramon","Gen","Neral","Male","1996-02-02","21","34.00","68.00","180","Adult","Banago Bacolod City","65465654564","Student","Muslim","Married","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("23","Bahay","Gawain","Na ang","Male","1977-02-21","40","34.00","80.00","170","Adult","Mansilingan","56456598796","Paid Employment","Catholic","Divorced","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("24","Konich","Cayetano","Alvarez","Male","1997-02-02","20","34.00","70.00","69","Adult","Banago Bacolod City","89765489765","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("25","Azad","Swapnil","Agapito","Male","1999-04-04","18","34.00","68.00","170","Adult","Banago Bacolod City","94573436575","Student","Born Again","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("26","Aydan","Gayathri","Pedsro","Male","1994-04-04","23","30.00","67.00","150","Adult","Banago Bacolod City","98765434567","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("27","Pearce","Aidan","Smith","Male","1996-02-02","21","34.00","69.00","169","Adult","Granada","99564365463","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("28","Naman","Sayen","Na","Male","1999-01-01","19","34.00","69.00","169","Adult","New Vegas","99878677564","Self-Employment","Born Again","Single","2018-01-21","Keeping house(for others)","1","2018"); 
INSERT INTO patient VALUES("29","Daniel","Ofelia","Dece","Male","1997-02-02","20","34.00","60.00","170","Adult","Banago Bacolod City","89876437654","Paid Employment","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","1","2018"); 
INSERT INTO patient VALUES("30","Shrinivas","Bistra","Bistro","Female","1997-02-02","20","36.00","67.00","170","Adult","Banago Bacolod City","98765432345","Paid Employment","Catholic","Single","2018-01-21","House-maker(Own House)","1","2018"); 
INSERT INTO patient VALUES("31","Junipero","Akiba","Alz","Male","1995-05-05","22","34.00","70.00","170","Adult","Banago Bacolod City","87654876543","Self-Employment","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("32","Virgil","Sinikka","Down","Male","1996-04-07","21","50.00","69.00","170","Adult","Handumanan","98943657454","Paid Employment","Catholic","Married","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("33","Cruz","Crystal","Thelka","Female","1997-06-06","20","36.00","69.00","169","Adult","Banago Bacolod City","97754345352","Student","Catholic","Single","2018-01-21","Keeping house(for others)","1","2018"); 
INSERT INTO patient VALUES("34","Dela Cruz","Anna Maria","Villasis","Female","2004-02-02","13","34.00","45.00","150","Minor","Banago Bacolod City","97654343243","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("35","Bronislav","Zorka","Slav","Female","2005-04-07","12","34.00","69.00","169","Minor","Handumanan","99853456545","Student","Catholic","Single","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("36","Chua","Philaldelphia","Villaridad","Female","2001-04-04","16","34.50","60.00","161","Adult","Handumanan","98765432345","Student","Muslim","Single","2018-01-21","Keeping house(for others)","1","2018"); 
INSERT INTO patient VALUES("37","Gerundio","Jyth ","L","Male","1997-07-17","20","35.00","70.00","171","Adult","Handumanan","99675463423","Paid Employment","Catholic","Single","2018-01-21","Keeping house(for others)","1","2018"); 
INSERT INTO patient VALUES("38","Elof","Surinder","Mamamayan","Female","2004-06-06","13","35.00","50.00","140","Minor","Banago Bacolod City","99765534567","Student","Muslim","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("39","Ahed","Mohammad","Abdullah","Male","2005-05-08","12","35.00","60.00","171","Minor","Syria","89575665432","Paid Employment","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","1","2018"); 
INSERT INTO patient VALUES("40","Soltero","Sidonie","Kaja","Female","2005-08-07","12","35.00","69.00","169","Minor","Handumanan","94435323143","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("41","Quintina","Amelia","Quince","Male","1999-07-07","18","36.00","69.00","170","Adult","Handumanan","21345678765","Paid Employment","Catholic","Single","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("42","Suyo","Jakob","Arnbor","Male","1997-04-05","20","37.00","70.00","170","Adult","Handumanan","89744521243","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("43","Bai","Alby","Botra","Female","1996-06-06","21","36.00","69.00","170","Adult","Handumanan","99754213456","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("44","Ledy","Loan","Mercy","Male","2010-06-06","7","36.00","70.00","160","Minor","Banago Bacolod City","99875465465","Student","Muslim","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("45","Madria","Vulcan","Mabelle ","Male","1998-01-01","20","34.00","60.00","160","Adult","Handumanan","99876564342","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("46","Lumpia","Chorizo","Hotdog","Male","2010-02-03","7","35.00","60.00","160","Minor","Food store","0977587654","Paid Employment","Catholic","Single","2018-01-21","Non-paid work(Volunteer/Charity)","1","2018"); 
INSERT INTO patient VALUES("47","Canton","Pancit","Lucime","Male","2011-04-05","6","60.00","60.00","160","Minor","Hotdog","93665421678","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("48","Sidonia","Naveen","Dean","Male","2016-06-06","1","36.00","70.00","20","Minor","Handumanan","89543534231","Unemployed","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("49","Sombilia","Mark","L.","Male","1997-05-05","20","36.00","70.00","169","Adult","Handumanan","89743324334","Student","Catholic","Single","2018-01-21","Retired","1","2018"); 
INSERT INTO patient VALUES("50","Saludares","Steven","H.","Male","1996-06-06","21","57.00","200.00","12","Adult","Sum-ag, Bacolod City","99656365432","Self-Employment","Catholic","Single","2018-01-21","Keeping house(for others)","1","2018"); 
INSERT INTO patient VALUES("51","Phoibos","Fabricio","Luneta","Male","2010-03-08","7","36.00","67.00","160","Minor","Sum-ag, Bacolod City","92643853636","Student","Catholic","Single","2018-01-21","House-maker(Own House)","1","2018"); 
INSERT INTO patient VALUES("52","Roksan","Lars","Ros","Male","1998-06-06","19","36.00","70.00","170","Adult","Sum-ag, Bacolod City","99553454342","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("53","Abdul","Mohammad","Rashid","Male","1982-05-05","35","37.00","70.00","168","Adult","Syria","98845654353","Paid Employment","Muslim","Single","2018-01-21","House-maker(Own House)","1","2018"); 
INSERT INTO patient VALUES("54","Karecs","Halim","Rusiko","Male","1998-06-05","19","50.00","70.00","170","Adult","Banago Bacolod City","99643424324","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("55","Santiago","Andrea","Martin","Female","1998-06-07","19","36.00","60.00","170","Adult","Mansilingan, Bacolod","99986545352","Student","Catholic","Single","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("56","Consuelo","Mordred","Dalisay","Male","1989-05-05","28","56.00","70.00","180","Adult","Food store","99876334342","Student","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("57","Steiner","Kjell","John ","Male","1992-05-05","25","39.00","60.00","189","Adult","Granada, Bacolod","99543243432","Paid Employment","Born Again","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("58","Yanson","Alvin ","Michael ","Male","1997-05-05","20","67.00","70.00","165","Adult","Sa balay nya","98765456789","Retired","Catholic","Widowed","2018-01-21","Non-paid work(Volunteer/Charity)","1","2018"); 
INSERT INTO patient VALUES("59","Roxas","Juan","Dela Cruz","Male","1995-05-05","22","56.00","46.00","176","Adult","Rojas","98765458796","Non-paid work(Volunteer/Charity)","Catholic","Single","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("60","Kontrabida","Son ","Goku","Male","1990-04-02","27","67.00","67.00","180","Adult","Planet Earth","9565463422","Paid Employment","Born Again","Single","2018-01-21","Retired","1","2018"); 
INSERT INTO patient VALUES("61","Ramsay","Michael","Gordon","Male","1999-08-08","18","36.00","69.00","170","Adult","Granada, Bacolod","99453253523","Paid Employment","Catholic","Single","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("62","Child","Julia","Medo","Female","1998-05-05","19","34.00","76.00","180","Adult","Bacolod City","89867543245","Student","Born Again","Single","2018-01-21","House-maker(Own House)","1","2018"); 
INSERT INTO patient VALUES("63","China Man","Confucius","The","Male","1992-06-02","25","34.00","70.00","170","Adult","China","95344641231","Student","Catholic","Married","2018-01-21","Paid Employment","1","2018"); 
INSERT INTO patient VALUES("64","Geduriagao","Decebel","Am","Female","1997-06-06","20","45.00","72.00","174","Adult","Sa Balay","98756453245","Self-Employment","Catholic","Single","2018-01-21","Self-Employment","1","2018"); 
INSERT INTO patient VALUES("65","Dimon","Leki","Lad","Male","1997-05-11","20","20.00","67.00","169","Adult","Dimon Land","99545432432","Student","Born Again","Single","2018-01-21","Non-paid work(Volunteer/Charity)","1","2018"); 



DROP TABLE patient_medical_issue;

CREATE TABLE `patient_medical_issue` (
  `PMI_ID` int(5) NOT NULL AUTO_INCREMENT,
  `PP_HEATH` text NOT NULL,
  `TRMT` text NOT NULL,
  `MEDCT` text NOT NULL,
  `DISE_DISO` text NOT NULL,
  `HPTL` text NOT NULL,
  `P_ID` int(5) NOT NULL,
  `MONTH` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`PMI_ID`),
  KEY `P_ID` (`P_ID`),
  CONSTRAINT `patient_medical_issue_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

INSERT INTO patient_medical_issue VALUES("2","Back Pain","No","No","No","No","2","0","0"); 
INSERT INTO patient_medical_issue VALUES("3","none","Yes","No","No","Yes","3","0","0"); 
INSERT INTO patient_medical_issue VALUES("4","none","No","No","No","No","4","0","0"); 
INSERT INTO patient_medical_issue VALUES("5","Back pain","No","Yes","No","Yes","5","0","0"); 
INSERT INTO patient_medical_issue VALUES("6","Tonsillitis","No information given!","No information given!","No information given!","Dengue Fever","6","0","0"); 
INSERT INTO patient_medical_issue VALUES("7","Fever","No","No","Poor Eyesight","Last 2 years, medicine overdose","7","0","0"); 
INSERT INTO patient_medical_issue VALUES("8","asdasdad","No information given!","No information given!","asdasd","No information given!","8","1","2018"); 
INSERT INTO patient_medical_issue VALUES("9","GG","No","Drugs","Asthma","No","9","1","2018"); 
INSERT INTO patient_medical_issue VALUES("10","N/A","No","No","Asthma","No","10","1","2018"); 
INSERT INTO patient_medical_issue VALUES("11","rwe","No","No","No","No","11","1","2018"); 
INSERT INTO patient_medical_issue VALUES("12","NA","No","No","No","No","12","1","2018"); 
INSERT INTO patient_medical_issue VALUES("13","No","No","No","No","No","13","1","2018"); 
INSERT INTO patient_medical_issue VALUES("14","Hehehe","No","No","No","No","14","1","2018"); 
INSERT INTO patient_medical_issue VALUES("15","yiz","No","No","No","No","15","1","2018"); 
INSERT INTO patient_medical_issue VALUES("16","Good","No","No","Heart","Accident","16","1","2018"); 
INSERT INTO patient_medical_issue VALUES("17","gd","No","No","No","No","17","1","2018"); 
INSERT INTO patient_medical_issue VALUES("18","No","No","No","No","No","18","1","2018"); 
INSERT INTO patient_medical_issue VALUES("19","ghh","No","No","No","No","19","1","2018"); 
INSERT INTO patient_medical_issue VALUES("20","yiz","No","No","Asthma","No","20","1","2018"); 
INSERT INTO patient_medical_issue VALUES("21","Hell","No","No","No","No","21","1","2018"); 
INSERT INTO patient_medical_issue VALUES("22","Hell and purgatory","No","noh","yiz","yiz yiz","22","1","2018"); 
INSERT INTO patient_medical_issue VALUES("23","h","No","No","No","No","23","1","2018"); 
INSERT INTO patient_medical_issue VALUES("24","ghfh","No","No","No","No","24","1","2018"); 
INSERT INTO patient_medical_issue VALUES("25","xd","No","No","No","No","25","1","2018"); 
INSERT INTO patient_medical_issue VALUES("26","No","No","No","No","No","26","1","2018"); 
INSERT INTO patient_medical_issue VALUES("27","No","No","No","Y4es","No","27","1","2018"); 
INSERT INTO patient_medical_issue VALUES("28","gf","No","No","bvb","No","28","1","2018"); 
INSERT INTO patient_medical_issue VALUES("29","d","No","No","No","No","29","1","2018"); 
INSERT INTO patient_medical_issue VALUES("30","cx","No","No","No","No","30","1","2018"); 
INSERT INTO patient_medical_issue VALUES("31","f","No","No","No","No","31","1","2018"); 
INSERT INTO patient_medical_issue VALUES("32","yiz","No","No","Down syndrome","Accident","32","1","2018"); 
INSERT INTO patient_medical_issue VALUES("33","s","No","No","No","No","33","1","2018"); 
INSERT INTO patient_medical_issue VALUES("34","Nothing","No","Drugs","No","No","34","1","2018"); 
INSERT INTO patient_medical_issue VALUES("35","f","No","Biogesic","No","Accident","35","1","2018"); 
INSERT INTO patient_medical_issue VALUES("36","no","No","No","No","No","36","1","2018"); 
INSERT INTO patient_medical_issue VALUES("37","None","No","Biogesic","No","No","37","1","2018"); 
INSERT INTO patient_medical_issue VALUES("38","None","No","No","Heart","No","38","1","2018"); 
INSERT INTO patient_medical_issue VALUES("39","None","No","No","No","No","39","1","2018"); 
INSERT INTO patient_medical_issue VALUES("40","None","No","No","No","No","40","1","2018"); 
INSERT INTO patient_medical_issue VALUES("41","None","No","No","Sinus","Car accident","41","1","2018"); 
INSERT INTO patient_medical_issue VALUES("42","gh","No","Biogesic","Sinus","Vaccine","42","1","2018"); 
INSERT INTO patient_medical_issue VALUES("43","None","No","Drugs","No","No","43","1","2018"); 
INSERT INTO patient_medical_issue VALUES("44","None","No","No","No","No","44","1","2018"); 
INSERT INTO patient_medical_issue VALUES("45","None","No","No","No","FDSF","45","1","2018"); 
INSERT INTO patient_medical_issue VALUES("46","Pancit Canton","No","No information given!","No","No","46","1","2018"); 
INSERT INTO patient_medical_issue VALUES("47","Yiz","Yiz","No","No","No","47","1","2018"); 
INSERT INTO patient_medical_issue VALUES("48","Yiz","No","No","No","No","48","1","2018"); 
INSERT INTO patient_medical_issue VALUES("49","None","No","No","No","Yiz","49","1","2018"); 
INSERT INTO patient_medical_issue VALUES("50","None","No","No","Eyes","No","50","1","2018"); 
INSERT INTO patient_medical_issue VALUES("51","None","No","Vitamin C, Tempra","Mental","Na ungad ko","51","1","2018"); 
INSERT INTO patient_medical_issue VALUES("52","None","No","No","Heart","Arm cast","52","1","2018"); 
INSERT INTO patient_medical_issue VALUES("53","None","Yes","Tempra","Infidels","Broken arm","53","1","2018"); 
INSERT INTO patient_medical_issue VALUES("54","None","No","Vitamin C","Asthma","Arm cast","54","1","2018"); 
INSERT INTO patient_medical_issue VALUES("55","None","No","No","No","No","55","1","2018"); 
INSERT INTO patient_medical_issue VALUES("56","None","No","No","No","Yiz","56","1","2018"); 
INSERT INTO patient_medical_issue VALUES("57","None atm","No","No","No","No","57","1","2018"); 
INSERT INTO patient_medical_issue VALUES("58","None","No","No","May sakit","Hyes","58","1","2018"); 
INSERT INTO patient_medical_issue VALUES("59","Yes","No","Vitamin C","Sakit","No","59","1","2018"); 
INSERT INTO patient_medical_issue VALUES("60","dsad","No","Salt","dasd","medyo","60","1","2018"); 
INSERT INTO patient_medical_issue VALUES("61","None","No","No","Heart disease","No","61","1","2018"); 
INSERT INTO patient_medical_issue VALUES("62","Yiz","No","No","No","No","62","1","2018"); 
INSERT INTO patient_medical_issue VALUES("63","None","Ako","No","Yiz","No","63","1","2018"); 
INSERT INTO patient_medical_issue VALUES("64","None","No","No","Heart :( ","sang ligad","64","1","2018"); 
INSERT INTO patient_medical_issue VALUES("65","None","No","No","YIZ","No","65","1","2018"); 



DROP TABLE referral;

CREATE TABLE `referral` (
  `RF_ID` int(5) NOT NULL AUTO_INCREMENT,
  `RF_DOCNAME` text NOT NULL,
  `RF_CN` text NOT NULL,
  `RF_ADD` text NOT NULL,
  `TRMTMNT_ID` int(5) NOT NULL,
  `MONTH` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`RF_ID`),
  KEY `TRMTMNT_ID` (`TRMTMNT_ID`),
  CONSTRAINT `referral_ibfk_1` FOREIGN KEY (`TRMTMNT_ID`) REFERENCES `treatment` (`TRMT_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE schedule;

CREATE TABLE `schedule` (
  `SCHEDULE_ID` int(5) NOT NULL AUTO_INCREMENT,
  `P_ID` int(5) NOT NULL,
  `SCHEDULE_DATE` date NOT NULL,
  `SCHEDULE_TIME` time NOT NULL,
  `SCHEDULE_PURPOSE` text NOT NULL,
  `MONTH` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`SCHEDULE_ID`),
  KEY `P_ID` (`P_ID`),
  CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`) ON UPDATE CASCADE
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO schedule VALUES("1","17","2018-01-28","23:30:00","X-ray","1","2018"); 
=======
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO schedule VALUES("1","10","2018-01-29","14:07:00","Check Up","1","2018"); 
INSERT INTO schedule VALUES("2","10","2018-01-29","14:53:00","Check Up","1","2018"); 
>>>>>>> 74820e457ed9feb1d24e7f541cc71cbf4563fec2



DROP TABLE treatment;

CREATE TABLE `treatment` (
  `TRMT_ID` int(5) NOT NULL AUTO_INCREMENT,
  `MR_ID` int(5) NOT NULL,
  `DIAG_DTLS` text NOT NULL,
  `TREATMENT` text NOT NULL,
  `REMARKS` text NOT NULL,
  `F_CHECKUP` date NOT NULL,
  `User_id` int(5) NOT NULL,
  `MONTH` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`TRMT_ID`),
  KEY `MR_ID` (`MR_ID`),
  KEY `User_id` (`User_id`),
  CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`MR_ID`) REFERENCES `medical_record` (`MR_ID`) ON UPDATE CASCADE,
  CONSTRAINT `treatment_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

<<<<<<< HEAD
INSERT INTO treatment VALUES("1","2","fsdfsd","sdfds","sdfsd","2017-12-31","3","1","2018"); 
INSERT INTO treatment VALUES("2","4","","","","2018-01-29","3","1","2018"); 
=======
INSERT INTO treatment VALUES("1","1","hgvjhbkhgkh","mhbkjgjbkj","kkjhjkbljblj","2018-01-31","11","1","2018"); 
INSERT INTO treatment VALUES("2","2","","","","2018-01-29","3","1","2018"); 
>>>>>>> 74820e457ed9feb1d24e7f541cc71cbf4563fec2



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
  `DATE_END` date NOT NULL,
  `STATUS` text NOT NULL,
  `MONTH` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `User_id` (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","Admin","$2y$12$Cbzw6Sp1xiJlVPB01TXBB.zLGr4VaHmNjGqXLvOC82PEM4xNOB1UG","ADMIN","ADMIN","ADMIN","-None-","Admin","ADMIN","2018-01-26","1970-01-01","Active","1","2018"); 
INSERT INTO users VALUES("2","Gabriel1011","$2y$12$47jkt5YXJ2EnZfjXBC5wbeAswQP.l3tWlgsAmhTBydnpoWpHB6EQy","Gabriel Francis","M.","Banua","Male","Admin","#LCN542682A","2018-01-27","1970-01-16","Active","1","2018"); 
<<<<<<< HEAD
INSERT INTO users VALUES("3","Alec","$2y$12$lroka61URHhwj87VLeDDI.h5vPbLoNwbLilShhgVpFiEeyb9jQUNq","Alec","Legaspi","Rubz","Male","Doctor","#LCN123516HA","0000-00-00","2018-03-27","Active","1","2018"); 
=======
INSERT INTO users VALUES("3","Alec","$2y$12$0SJSrf0YeDwGd5TY4Jd7V.3uRUu2MY1fIxXaAT5fweuxIfblIY4jm","Alec","Legaspi","Rubz","Male","Doctor","#LCN123516HA","0000-00-00","2018-03-27","Active","1","2018"); 
>>>>>>> 74820e457ed9feb1d24e7f541cc71cbf4563fec2
INSERT INTO users VALUES("11","Alson","$2y$12$Xn79XxGcsrtI3BsfBdu2gevx4PcynjXWn9mMyawZSzhfRvmhfQxSy","Alson John","R.","Bayon-on","Male","Doctor","#LCN1234ASD4","2018-01-28","2018-12-31","Active","1","2018"); 



