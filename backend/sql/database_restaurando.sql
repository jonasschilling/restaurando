-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema restaurando
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema restaurando
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `restaurando` DEFAULT CHARACTER SET utf8mb4 ;
USE `restaurando` ;

-- -----------------------------------------------------
-- Table `restaurando`.`request`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurando`.`request` (
  `reqNumber` INT(11) NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(30) NOT NULL,
  `reqname` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `restaurant` VARCHAR(50) NOT NULL,
  `adress` VARCHAR(50) NOT NULL,
  `request` TEXT NOT NULL,
  PRIMARY KEY (`reqNumber`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `restaurando`.`reservation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurando`.`reservation` (
  `resNumber` INT(11) NOT NULL AUTO_INCREMENT,
  `restaurant` VARCHAR(50) NOT NULL,
  `resName` VARCHAR(50) NOT NULL,
  `resDate` DATE NOT NULL,
  `resTime` TIME NOT NULL,
  `amountPers` INT(11) NOT NULL,
  PRIMARY KEY (`resNumber`))
ENGINE = InnoDB
AUTO_INCREMENT = 31
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `restaurando`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `restaurando`.`user` (
  `username` VARCHAR(50) NOT NULL,
  `userpassword` VARCHAR(30) NULL DEFAULT NULL,
  PRIMARY KEY (`username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
