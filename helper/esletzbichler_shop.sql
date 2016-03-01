-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema esletzbichler_shop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema esletzbichler_shop
-- -----------------------------------------------------
DROP DATABASE IF EXISTS `esletzbichler_shop`;
CREATE SCHEMA IF NOT EXISTS `esletzbichler_shop` DEFAULT CHARACTER SET utf8 ;
USE `esletzbichler_shop` ;

-- -----------------------------------------------------
-- Table `esletzbichler_shop`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `esletzbichler_shop`.`user` ;

CREATE TABLE IF NOT EXISTS `esletzbichler_shop`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `esletzbichler_shop`.`category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `esletzbichler_shop`.`category` ;

CREATE TABLE IF NOT EXISTS `esletzbichler_shop`.`category` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoryname` VARCHAR(45) NOT NULL,
  `description` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `esletzbichler_shop`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `esletzbichler_shop`.`product` ;

CREATE TABLE IF NOT EXISTS `esletzbichler_shop`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `productname` VARCHAR(100) NOT NULL,
  `description` VARCHAR(200) NULL,
  `price` DECIMAL(12,4) NOT NULL DEFAULT 0.00,
  `category_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_product_category_idx` (`category_id` ASC),
  CONSTRAINT `fk_product_category`
    FOREIGN KEY (`category_id`)
    REFERENCES `esletzbichler_shop`.`category` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `esletzbichler_shop`.`invoice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `esletzbichler_shop`.`invoice` ;

CREATE TABLE IF NOT EXISTS `esletzbichler_shop`.`invoice` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `esletzbichler_shop`.`invoiceitem`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `esletzbichler_shop`.`invoiceitem` ;

CREATE TABLE IF NOT EXISTS `esletzbichler_shop`.`invoiceitem` (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `esletzbichler_shop`.`user`
-- -----------------------------------------------------
START TRANSACTION;
USE `esletzbichler_shop`;
INSERT INTO `esletzbichler_shop`.`user` (`id`, `username`, `email`, `password`) VALUES (DEFAULT, 'susi', 'susi@example.com', '1234');

COMMIT;


-- -----------------------------------------------------
-- Data for table `esletzbichler_shop`.`category`
-- -----------------------------------------------------
START TRANSACTION;
USE `esletzbichler_shop`;
INSERT INTO `esletzbichler_shop`.`category` (`id`, `categoryname`, `description`) VALUES (DEFAULT, 'Holz', 'Ein schönes Holzeldorado für Sie!');
INSERT INTO `esletzbichler_shop`.`category` (`id`, `categoryname`, `description`) VALUES (DEFAULT, 'Eisen', 'Die schöne harte Glitzerwelt');

COMMIT;


-- -----------------------------------------------------
-- Data for table `esletzbichler_shop`.`product`
-- -----------------------------------------------------
START TRANSACTION;
USE `esletzbichler_shop`;
INSERT INTO `esletzbichler_shop`.`product` (`id`, `productname`, `description`, `price`, `category_id`) VALUES (DEFAULT, 'Tisch', 'Ein schönes Vierbein', 300.23, 1);
INSERT INTO `esletzbichler_shop`.`product` (`id`, `productname`, `description`, `price`, `category_id`) VALUES (DEFAULT, 'Sessel', 'Mit schöner hoher Lehne', 100.18, 1);
INSERT INTO `esletzbichler_shop`.`product` (`id`, `productname`, `description`, `price`, `category_id`) VALUES (DEFAULT, 'Skulptur', 'Schön, glitzernd Formvollendet', 2345.23, 2);

COMMIT;

