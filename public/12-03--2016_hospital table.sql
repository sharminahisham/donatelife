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
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
