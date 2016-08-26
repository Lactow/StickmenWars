-- MySQL Script generated by MySQL Workbench
-- 08/25/16 09:48:51
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema stickman
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema stickman
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `stickman` DEFAULT CHARACTER SET utf8 ;
USE `stickman` ;

-- -----------------------------------------------------
-- Table `stickman`.`account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stickman`.`account` (
  `idaccount` INT NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `stickname` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NULL,
  `firstname` VARCHAR(45) NULL,
  `dateinscription` DATETIME NOT NULL,
  `datelastconnection` DATETIME NOT NULL,
  `isban` TINYINT(1) NOT NULL DEFAULT 0,
  `avertissement` INT NOT NULL DEFAULT 0,
  `script` VARCHAR(45) NULL,
  `isvalide` TINYINT(1) NOT NULL DEFAULT 1,
  `countround` INT(11) NULL DEFAULT 0,
  PRIMARY KEY (`idaccount`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `stickman`.`account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stickman`.`account` (
  `idaccount` INT NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `stickname` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NULL,
  `firstname` VARCHAR(45) NULL,
  `dateinscription` DATETIME NOT NULL,
  `datelastconnection` DATETIME NOT NULL,
  `isban` TINYINT(1) NOT NULL DEFAULT 0,
  `avertissement` INT NOT NULL DEFAULT 0,
  `script` VARCHAR(45) NULL,
  `isvalide` TINYINT(1) NOT NULL DEFAULT 1,
  `countround` INT(11) NULL DEFAULT 0,
  PRIMARY KEY (`idaccount`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `stickman`.`item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stickman`.`item` (
  `iditem` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  `boost` INT NOT NULL,
  `price` FLOAT NOT NULL,
  PRIMARY KEY (`iditem`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `stickman`.`item_has_stickman`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stickman`.`item_has_stickman` (
  `idaccount` INT NOT NULL,
  `iditem` INT NOT NULL,
  `datebuild` DATETIME NOT NULL,
  PRIMARY KEY (`idaccount`, `iditem`),
  INDEX `fk_item_has_stickman_item1_idx` (`iditem` ASC),
  INDEX `fk_item_has_stickman_account1_idx` (`idaccount` ASC),
  CONSTRAINT `fk_item_has_stickman_item1`
    FOREIGN KEY (`iditem`)
    REFERENCES `stickman`.`item` (`iditem`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_has_stickman_account1`
    FOREIGN KEY (`idaccount`)
    REFERENCES `stickman`.`account` (`idaccount`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `stickman`.`information`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stickman`.`information` (
  `idinformation` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `date` VARCHAR(45) NOT NULL,
  `texte` TEXT(250) NOT NULL,
  PRIMARY KEY (`idinformation`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `stickman`.`arena`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `stickman`.`arena` (
  `idarena` INT NOT NULL AUTO_INCREMENT,
  `idaccountwinner` INT NOT NULL,
  `datecreate` DATETIME NOT NULL,
  PRIMARY KEY (`idarena`, `idaccountwinner`),
  INDEX `fk_arena_account1_idx` (`idaccountwinner` ASC),
  CONSTRAINT `fk_arena_account1`
    FOREIGN KEY (`idaccountwinner`)
    REFERENCES `stickman`.`account` (`idaccount`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
