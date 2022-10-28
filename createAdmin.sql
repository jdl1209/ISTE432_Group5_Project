DROP DATABASE IF EXISTS admin;
CREATE DATABASE admin;

USE admin;

CREATE TABLE admin (
    admin_id INT NOT NULL,
    user_id INT NOT NULL,
    username VARCHAR(30),
    password VARCHAR(30),
    PRIMARY KEY (admin_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id) 

) ENGINE = InnoDB DEFAULT CHARSET=utf8;
