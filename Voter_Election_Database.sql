-- Database for voter 

DROP DATABASE IF EXISTS voter_election;

CREATE DATABASE voter_election; 
USE voter_election;

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








