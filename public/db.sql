SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `donate` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `donate` ;

-- -----------------------------------------------------
-- Table `donate`.`donor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `donate`.`donor` (
  `id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(250) NULL,
  `address` VARCHAR(1500) NULL,
  `dob` DATE NULL,
  `gender` VARCHAR(45) NULL,
  `bloodgroup` VARCHAR(45) NULL,
  `email` VARCHAR(100) NULL,
  `mobile` VARCHAR(10) NULL,
  `hospitalname` VARCHAR(250) NULL,
  `hospitalcode` VARCHAR(10) NULL,
  `username` VARCHAR(50) NULL,
  `password` VARCHAR(50) NULL,
  `verificationcode` VARCHAR(10) NULL,
  `statuscode` INT(10) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `donate`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `donate`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usertype` VARCHAR(100) NULL,
  `username` VARCHAR(250) NULL,
  `password` VARCHAR(50) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `donate`.`opinion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `donate`.`opinion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(100) NULL,
  `description` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `donate`.`hospital`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `donate`.`hospital` (
  `id` INT NOT NULL,
  `doctors` VARCHAR(250) NULL,
  `donor_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_hospital_donor1_idx` (`donor_id` ASC),
  CONSTRAINT `fk_hospital_donor1`
    FOREIGN KEY (`donor_id`)
    REFERENCES `donate`.`donor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `donate`.`report`
-- -----------------------------------------------------
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
