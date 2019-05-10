CREATE DATABASE yeticave
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE yeticave;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name CHAR(128),
  email CHAR(128),
  password CHAR(64),
  avatar TEXT,
  contact TEXT,
  lots_id INT,
  rates_id INT
);

CREATE TABLE rates (
  id INT AUTO_INCREMENT PRIMARY KEY,
  dt_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  price INT
);

CREATE TABLE lots (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name CHAR(128),
  description TEXT,
  picture TEXT,
  start_price INT,
  dt_start TIMESTAMP,
  dt_over TIMESTAMP,
  author_id INT,
  category_id INT
);

CREATE TABLE category (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name CHAR(128),
  code CHAR(64)
);
