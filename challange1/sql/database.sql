CREATE DATABASE challange;

CREATE TABLE nick(
 id int(20) NOT NULL AUTO_INCREMENT,
 username varchar(100) NOT NULL,
 password varchar(100) NOT NULL,
 PRIMARY KEY(id)
);


CREATE TABLE aspirasi(
 id int(20) NOT NULL AUTO_INCREMENT,
 nama varchar(100) NOT NULL,
 bagus varchar(90) NOT NULL,
 sekolah varchar(75) NOT NULL,
 PRIMARY KEY(id)
);



CREATE TABLE `admin`(
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY(`id`)
);


CREATE TABLE masukan(
  id int(20) NOT NULL AUTO_INCREMENT,
  nama varchar(100) NOT NULL,
  saran varchar(10000) NOT NULL,
  PRIMARY KEY(id)

);

CREATE TABLE totalview(

 totalvisit text NOT NULL

);
