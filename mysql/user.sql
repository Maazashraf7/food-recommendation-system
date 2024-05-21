CREATE TABLE patient (
id int AUTO_INCREMENT,
pname varchar(50),
age int(3) ,
gender varchar(10) ,
healthcondition varchar(20)  NOT NULL,
subcondition varchar(20), 
PRIMARY KEY (id)
);