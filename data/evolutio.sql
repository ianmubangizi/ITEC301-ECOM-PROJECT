-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema evolutio
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema evolutio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `evolutio` DEFAULT CHARACTER SET utf8 ;
USE `evolutio` ;

-- -----------------------------------------------------
-- Table `evolutio`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evolutio`.`User` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `role` CHAR(1) NOT NULL DEFAULT 'C',
  `email` VARCHAR(60) NOT NULL,
  `image` TINYTEXT NULL,
  `phone` VARCHAR(15) NULL,
  `currency` VARCHAR(3) NOT NULL DEFAULT 'ZAR',
  `firstname` VARCHAR(60) NULL,
  `lastname` VARCHAR(60) NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evolutio`.`Order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evolutio`.`Order` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(60) NULL DEFAULT 'PENDING',
  `balance` DOUBLE NOT NULL,
  `customer` VARCHAR(60) NULL,
  `created_at` TIMESTAMP NULL DEFAULT current_timestamp(),
  `updated_at` TIMESTAMP NOT NULL,
  `shipping_details` TINYTEXT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `customer_order_idx` (`customer` ASC),
  CONSTRAINT `customer_order`
    FOREIGN KEY (`customer`)
    REFERENCES `evolutio`.`User` (`email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evolutio`.`Post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evolutio`.`Post` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user` INT NOT NULL,
  `type` VARCHAR(20) NULL DEFAULT 'PAGE',
  `title` VARCHAR(60) NULL,
  `slag` VARCHAR(120) NULL,
  `content` LONGTEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `user_post_idx` (`user` ASC),
  CONSTRAINT `user_post`
    FOREIGN KEY (`user`)
    REFERENCES `evolutio`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evolutio`.`Basket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evolutio`.`Basket` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(10) NULL DEFAULT 'WISHLIST',
  `customer` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `customer_basket_idx` (`customer` ASC),
  CONSTRAINT `customer_basket`
    FOREIGN KEY (`customer`)
    REFERENCES `evolutio`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evolutio`.`Category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evolutio`.`Category` (
  `sale` DOUBLE NULL,
  `name` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evolutio`.`Inventory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evolutio`.`Inventory` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(120) NULL,
  `stock` INT NULL,
  `image` TINYTEXT NULL,
  `category` VARCHAR(60) NULL,
  PRIMARY KEY (`id`),
  INDEX `inventory_category_idx` (`category` ASC),
  CONSTRAINT `inventory_category`
    FOREIGN KEY (`category`)
    REFERENCES `evolutio`.`Category` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evolutio`.`Product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evolutio`.`Product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sale` DOUBLE NULL,
  `price` DOUBLE NULL,
  `name` VARCHAR(60) NULL,
  `image` TINYTEXT NULL,
  `details` TINYTEXT NULL,
  `inventory` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `product_inventory_idx` (`inventory` ASC),
  CONSTRAINT `product_inventory`
    FOREIGN KEY (`inventory`)
    REFERENCES `evolutio`.`Inventory` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `evolutio`.`Product List`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `evolutio`.`Product List` (
  `order` INT NULL,
  `basket` INT NULL,
  `product` INT NULL,
  INDEX `product_list_order_idx` (`order` ASC),
  INDEX `product_list_basket_idx` (`basket` ASC),
  INDEX `product_list_product_idx` (`product` ASC),
  CONSTRAINT `product_list_order`
    FOREIGN KEY (`order`)
    REFERENCES `evolutio`.`Order` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `product_list_basket`
    FOREIGN KEY (`basket`)
    REFERENCES `evolutio`.`Basket` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `product_list_product`
    FOREIGN KEY (`product`)
    REFERENCES `evolutio`.`Product` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;