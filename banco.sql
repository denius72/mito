-- MySQL Script generated by MySQL Workbench
-- Tue 07 Nov 2017 03:56:46 AM BRST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lpg2
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `lpg2` ;

-- -----------------------------------------------------
-- Schema lpg2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lpg2` DEFAULT CHARACTER SET utf8 ;
USE `lpg2` ;

-- -----------------------------------------------------
-- Table `lpg2`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lpg2`.`categories` ;

CREATE TABLE IF NOT EXISTS `lpg2`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lpg2`.`products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lpg2`.`products` ;

CREATE TABLE IF NOT EXISTS `lpg2`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NULL,
  `valor` DECIMAL(10,2) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `idcategories` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_products_categories_idx` (`idcategories` ASC),
  CONSTRAINT `fk_products_categories`
    FOREIGN KEY (`idcategories`)
    REFERENCES `lpg2`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lpg2`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lpg2`.`users` ;

CREATE TABLE IF NOT EXISTS `lpg2`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `email` VARCHAR(150) NULL,
  `password` VARCHAR(128) NULL,
  `updated_at` DATETIME NULL,
  `created_at` DATETIME NULL,
  `remember_token` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
