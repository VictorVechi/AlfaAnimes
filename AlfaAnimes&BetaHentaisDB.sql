-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema animes_victor
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema animes_victor
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `animes_victor` DEFAULT CHARACTER SET utf8 ;
USE `animes_victor` ;

-- -----------------------------------------------------
-- Table `animes_victor`.`animes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animes_victor`.`animes` (
  `idanime` INT NOT NULL AUTO_INCREMENT,
  `nomeanime` VARCHAR(100) NOT NULL,
  `generoanime` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idanime`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `animes_victor`.`hentais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animes_victor`.`hentais` (
  `idhentai` INT NOT NULL AUTO_INCREMENT,
  `nomehentai` VARCHAR(100) NOT NULL,
  `generohentai` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idhentai`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `animes_victor`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `animes_victor`.`users` (
  `idusers` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idusers`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
