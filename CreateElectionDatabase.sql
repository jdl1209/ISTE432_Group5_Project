DROP DATABASE IF EXISTS election;
CREATE DATABASE election;

USE election;

DROP TABLE IF EXISTS election_info;
CREATE TABLE election_info (

    'society_name' VARCHAR(200) NOT NULL,
    'society_contact' VARCHAR(50),
    'election_name' VARCHAR(200) NOT NULL,
    'election_start_time' DATE,
    'election_end_time' DATE,
    'society_logo' VARCHAR(21844),
    'society_color' VARCHAR(20),
    'society_phone_number' VARCHAR(12)

)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `votes` ;

CREATE  TABLE IF NOT EXISTS `votes` (
  `vote_id` INT NOT NULL AUTO_INCREMENT ,
  `office_id` DATE NULL ,
  `candidate_id` INT NULL ,
  PRIMARY KEY (`vote_id`) )
ENGINE = InnoDB;

DROP TABLE IF EXISTS `offices` ;

CREATE  TABLE IF NOT EXISTS `offices` (
  `office_id` INT NOT NULL AUTO_INCREMENT ,
  `office_position` VARCHAR(15) , ## might want to change this varchar amount
  `office_description` VARCHAR(50) , ## might want to change this varchar amount
  PRIMARY KEY (`office_id`) )
ENGINE = InnoDB;

DROP TABLE IF EXISTS `candidate` ;

CREATE  TABLE IF NOT EXISTS `candidate` (
  `candidate_id` INT NOT NULL AUTO_INCREMENT ,
  `candidate_name` VARCHAR(25) ,
  `office_position` VARCHAR(25) ,
  `candidate_description` VARCHAR(255) ,
  `candidate_picture` VARCHAR(50) ,
  PRIMARY KEY (`candidate_id`) )
ENGINE = InnoDB;

DROP TABLE IF EXISTS voter;

CREATE TABLE voter (
    member_id INT NOT NULL,
    voter_id INT NOT NULL,
    fname VARCHAR(35) NOT NULL,
    lname VARCHAR(35) NOT NULL,
    user_id INT NOT NULL,
    PRIMARY KEY (member_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id)
) ENGINE = InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE user (
    user_id INT NOT NULL,
    user_type_id INT NOT NULL,
    email VARCHAR(40),
    username VARCHAR(30),
    password VARCHAR(30),
    PRIMARY KEY (user_id)
) ENGINE = InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE voter_status (
    member_id INT NOT NULL,
    status SMALLINT NOT NULL, 
    FOREIGN KEY (member_id) REFERENCES voter(member_id)
)   ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE status (
    yesNo VARCHAR(5) NOT NULL,
    status SMALLINT NOT NULL,
    PRIMARY KEY (yesNo)
    FOREIGN KEY (status) REFERENCES voter_status(status)    
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE admin (
    admin_id INT NOT NULL,
    user_id INT NOT NULL,
    username VARCHAR(30),
    password VARCHAR(30),
    PRIMARY KEY (admin_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id) 

) ENGINE = InnoDB DEFAULT CHARSET=utf8;
