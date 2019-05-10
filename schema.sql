CREATE DATABASE yeticave
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE yeticave;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name CHAR(128),
  email CHAR(128) UNIQUE,
  password CHAR(64),
  avatar VARCHAR(300),
  contact TEXT NOT NULL,
  rates_id INT
);

CREATE INDEX users_email
  ON users (email);

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
  user_id INT,
  category_id INT
);

CREATE INDEX lots_name
  ON lots (name);

CREATE INDEX lots_users_id
  ON lots (user_id);

CREATE INDEX lots_category_id
  ON lots (category_id);

CREATE TABLE category (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name CHAR(128) UNIQUE NOT NULL,
  code CHAR(64) UNIQUE
);
