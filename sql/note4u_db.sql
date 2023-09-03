-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema note4u
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema note4u
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `note4u` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `note4u` ;

-- -----------------------------------------------------
-- Table `note4u`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `note4u`.`users` (
  `id_users` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `phone_number` VARCHAR(25) NULL DEFAULT NULL UNIQUE,
  `email` VARCHAR(100) NOT NULL,
  `pass` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id_users`),
  UNIQUE INDEX `id_users_UNIQUE` (`id_users` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `note4u`.`notes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `note4u`.`notes` (
  `id_note` INT NOT NULL AUTO_INCREMENT,
  `title_note` VARCHAR(100) NOT NULL,
  `context_note` VARCHAR(10000) NOT NULL,
  `date_note` DATE NULL DEFAULT NULL,
  `id_users` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_note`),
  INDEX `id_users_idx` (`id_users` ASC) VISIBLE,
  CONSTRAINT `id_users`
    FOREIGN KEY (`id_users`)
    REFERENCES `note4u`.`users` (`id_users`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
