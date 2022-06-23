SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--Creating tables 
--user

CREATE TABLE IF NOT EXISTS 'user' (
    'username' varchar(100) NOT NULL,
    'email' varchar(100) NOT NULL,
    'password' varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;;

--Dumping data
 INSERT INTO 'user'('username', 'email', 'password') VALUES
 ('Eddy', 'eddy@gmail.com', 'eddy');

--registration
 CREATE TABLE IF NOT EXISTS 'registration'('username' varchar(100) NOT NULL,
 'userid' varchar(100) NOT NULL, 'Idserialnumber' varchar(100) NOT NULL,
 'address' varchar(100) NOT NULL, 'emailaddress' varchar(100) NOT NULL,
 'county' varchar(100) NOT NULL, 'country' varchar(100) NOT NULL,
 'constituency' varchar(100) NOT NULL, 'birthdate' varchar(100) NOT NULL,
 'ward' varchar(100) NOT NULL) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

 --Dumping data

 INSERT INTO 'registration'('username','userid', 'Idserialnumber', 'address',
 'emailaddress', 'county', 'country', 'constituency', 'birthdate', 'ward') VALUES(
     'eddy', 1, 55555, 205, 'eddy@gmail.com', 'Kwale', 'Kenya', 'Kwale', 2,'Kwale'
 );

ALTER TABLE 'registration'
  MODIFY 'userid' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--

