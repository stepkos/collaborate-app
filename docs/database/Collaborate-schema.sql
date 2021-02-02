DROP DATABASE IF EXISTS Collaborate;
CREATE DATABASE Collaborate;
SET NAMES utf8mb4;
USE Collaborate;

CREATE TABLE Users (
  id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name varchar(20) NOT NULL,
  surname varchar(70) NOT NULL,
  password varchar(30) NOT NULL,
  profile_picture blob,
  active boolean DEFAULT false,
  premium boolean DEFAULT false,
  email varchar(50) UNIQUE NOT NULL,
  description TEXT,
  companies TEXT
);

CREATE TABLE Offert (
  id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name varchar(60) NOT NULL,
  owner_id int,
  description TEXT NOT NULL,
  picture blob
);

CREATE TABLE Media (
  id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL UNIQUE
);

CREATE TABLE User_Media (
  id_user int NOT NULL,
  id_media int NOT NULL,
  link VARCHAR(50) NOT NULL
);


CREATE TABLE Technology (
  id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name varchar(30) UNIQUE NOT NULL,
  color varchar(7) UNIQUE
);

CREATE TABLE Project_category (
  id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  name varchar(20) UNIQUE NOT NULL,
  color varchar(7) UNIQUE
);

CREATE TABLE Users_Technology (
  id_user int NOT NULL,
  id_technology int NOT NULL
);

CREATE TABLE liked_Offert (
  id_user int NOT NULL,
  id_offert int NOT NULL
);

CREATE TABLE collabolators_Offert (
  id_user int NOT NULL,
  id_offert int NOT NULL
);

CREATE TABLE Offert_Category (
  id_offert int NOT NULL,
  id_category int NOT NULL
);

CREATE TABLE Technology_Offert (
  id_technology int NOT NULL,
  id_offert int NOT NULL
);

CREATE TABLE Chat (
  id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  id_recipent int NOT NULL,
  id_sender int NOT NULL,
  message varchar(255) NOT NULL,
  time_sended datetime NOT NULL
);



-- pododawaj on delete cascady OSTROŻNIE!!!!!!
--
--
ALTER TABLE Users_Technology ADD FOREIGN KEY(id_user) REFERENCES Users(id);

ALTER TABLE Users_Technology ADD FOREIGN KEY (id_technology) REFERENCES Technology (id);

ALTER TABLE liked_Offert ADD FOREIGN KEY (id_user) REFERENCES Users (id);

ALTER TABLE liked_Offert ADD FOREIGN KEY (id_offert) REFERENCES Offert (id);

ALTER TABLE collabolators_Offert ADD FOREIGN KEY (id_user) REFERENCES  Users(id);

ALTER TABLE collabolators_Offert ADD FOREIGN KEY (id_offert) REFERENCES  Offert(id);

ALTER TABLE Technology_Offert ADD FOREIGN KEY (id_technology) REFERENCES Technology(id);

ALTER TABLE Technology_Offert ADD FOREIGN KEY (id_offert) REFERENCES Offert(id);

ALTER TABLE Offert ADD FOREIGN KEY (owner_id) REFERENCES Users(id);

ALTER TABLE Offert_Category ADD FOREIGN KEY (id_offert) REFERENCES Offert (id);

ALTER TABLE Offert_category ADD FOREIGN KEY (id_category) REFERENCES Project_category (id);

ALTER TABLE User_Media ADD FOREIGN KEY (id_user) REFERENCES Users (id);

ALTER TABLE User_Media ADD FOREIGN KEY (id_media) REFERENCES Media (id);














