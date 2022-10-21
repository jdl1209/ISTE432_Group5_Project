DROP DATABASE IF EXISTS election;
CREATE DATABASE election;

USE election;

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
