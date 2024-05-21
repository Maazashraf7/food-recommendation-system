CREATE TABLE patient (
id int AUTO_INCREMENT,
pname varchar(50),
age int(3) ,
gender varchar(10) ,
healthcondition varchar(20)  NOT NULL,
subcondition varchar(20), 
PRIMARY KEY (id)
);

CREATE TABLE dietchartdetails (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chart_id  int,
    timing VARCHAR(50) ,
    food VARCHAR(200) ,
    amount VARCHAR(200) ,
    FOREIGN KEY (chart_id) REFERENCES dietchart (id)
);

CREATE TABLE admin (
id int AUTO_INCREMENT PRIMARY KEY,
gmail VARCHAR(75) ,
password VARCHAR(100)

);

CREATE TABLE diabetes (
    id INT PRIMARY KEY,
    meal VARCHAR(200),
    time VARCHAR(100) ,
    foodstuffs VARCHAR(500) 
    
);
INSERT INTO diabetes(id,meal,time,foodstuffs)
VALUES (1,'Breakfast', '8-9 am', 'A bowl of vegetable upma and a beverge of rice');
CREATE TABLE heart (
    meal VARCHAR(200) PRIMARY KEY,
    time VARCHAR(100) ,
    foodstuffs VARCHAR(500) 
    
);
ALTER TABLE heart
ADD COLUMN id INT AUTO_INCREMENT FIRST,
ADD UNIQUE KEY (id);
CREATE TABLE appointment ( 
    name VARCHAR(100) PRIMARY KEY,
    date date ,
    time time ,
    notes VARCHAR(500) 
    
);