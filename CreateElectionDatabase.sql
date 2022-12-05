DROP DATABASE IF EXISTS election;
CREATE DATABASE election;

USE election;

DROP TABLE IF EXISTS election_info;
CREATE TABLE election_info (

    society_name VARCHAR(200) NOT NULL,
    society_contact VARCHAR(50),
    election_name VARCHAR(200) NOT NULL,
    election_start_time DATE,
    election_end_time DATE,
    society_logo VARCHAR(2000),
    society_color VARCHAR(20),
    society_phone_number VARCHAR(12)

)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `offices` ;
CREATE  TABLE IF NOT EXISTS `offices` (
  `office_id` INT NOT NULL AUTO_INCREMENT ,
  `office_position` VARCHAR(50) ,
  `office_description` VARCHAR(300) ,
  PRIMARY KEY (`office_id`)
)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `candidate` ;

CREATE  TABLE IF NOT EXISTS `candidate` (
  `candidate_id` INT NOT NULL AUTO_INCREMENT ,
  `candidate_name` VARCHAR(25) ,
  `office_position` VARCHAR(25) ,
  `candidate_description` VARCHAR(255) ,
  `candidate_picture` VARCHAR(50) ,
  PRIMARY KEY (`candidate_id`) 
)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `votes` ;
CREATE  TABLE IF NOT EXISTS `votes` (
  `vote_id` INT NOT NULL AUTO_INCREMENT ,
  `office_id` INT NULL ,
  `candidate_id` INT NULL ,
  PRIMARY KEY (`vote_id`),
  FOREIGN KEY (`office_id`) REFERENCES `offices`(`office_id`),
  FOREIGN KEY (`candidate_id`) REFERENCES `candidate`(`candidate_id`)
)
ENGINE = InnoDB;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    user_id INT NOT NULL,
    user_type_id INT NOT NULL,
    email VARCHAR(40),
    username VARCHAR(30),
    password VARCHAR(30),
    PRIMARY KEY (user_id)
) ENGINE = InnoDB DEFAULT CHARSET=utf8; 

DROP TABLE IF EXISTS voter;
CREATE TABLE voter (
    member_id INT NOT NULL,
    voter_id INT NOT NULL,
    fname VARCHAR(35) NOT NULL,
    lname VARCHAR(35) NOT NULL,
    user_id INT NOT NULL,
    PRIMARY KEY (member_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
) ENGINE = InnoDB DEFAULT CHARSET=utf8; 

DROP TABLE IF EXISTS voter_status;
CREATE TABLE voter_status (
    member_id INT NOT NULL,
    stat SMALLINT NOT NULL, 
    PRIMARY KEY (member_id)
)   ENGINE = InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS admin;
CREATE TABLE admin (
    admin_id INT NOT NULL,
    user_id INT NOT NULL,
    username VARCHAR(30),
    password VARCHAR(30),
    PRIMARY KEY (admin_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id) 

) ENGINE = InnoDB DEFAULT CHARSET=utf8;
