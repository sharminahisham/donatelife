SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `donate` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `donate` ;

-- -----------------------------------------------------
-- Table `donate`.`hospital`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `donate`.`hospital` ;

CREATE TABLE IF NOT EXISTS `donate`.`hospital` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `doctors` VARCHAR(250) NULL,
  `name` VARCHAR(100) NULL,
  `code` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `contact` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `donate`.`opinion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `donate`.`opinion` ;

CREATE TABLE IF NOT EXISTS `donate`.`opinion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(100) NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `donate`.`donor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `donate`.`donor` ;

CREATE TABLE IF NOT EXISTS `donate`.`donor` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(250) NULL,
  `address` VARCHAR(1500) NULL,
  `dob` DATE NULL,
  `gender` VARCHAR(45) NULL,
  `bloodgroup` VARCHAR(45) NULL,
  `email` VARCHAR(100) NULL,
  `mobile` VARCHAR(10) NULL,
  `username` VARCHAR(50) NULL,
  `password` VARCHAR(50) NULL,
  `verificationcode` VARCHAR(10) NULL,
  `statuscode` INT(10) NULL,
  `hospital_id` INT NULL,
  `opinion_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_donor_hospital1_idx` (`hospital_id` ASC),
  INDEX `fk_donor_opinion1_idx` (`opinion_id` ASC),
  CONSTRAINT `fk_donor_hospital1`
    FOREIGN KEY (`hospital_id`)
    REFERENCES `donate`.`hospital` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_donor_opinion1`
    FOREIGN KEY (`opinion_id`)
    REFERENCES `donate`.`opinion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `donate`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `donate`.`users` ;

CREATE TABLE IF NOT EXISTS `donate`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usertype` VARCHAR(100) NULL,
  `username` VARCHAR(250) NULL,
  `password` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `donate`.`report`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `donate`.`report` ;

CREATE TABLE IF NOT EXISTS `donate`.`report` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `testdate` DATE NULL,
  `testtime` TIME NULL,
  `tokenno` INT NULL,
  `forwadedby` VARCHAR(150) NULL,
  `fowardedto` VARCHAR(250) NULL,
  `medicalreport` VARCHAR(1500) NULL,
  `verifiedby` VARCHAR(45) NULL,
  `donor_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_report_donor_idx` (`donor_id` ASC),
  CONSTRAINT `fk_report_donor`
    FOREIGN KEY (`donor_id`)
    REFERENCES `donate`.`donor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
