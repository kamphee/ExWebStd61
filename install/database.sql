-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_kamphee
-- -----------------------------------------------------
-- ฐานข้อมูลตัวอย่างในการสอน

-- -----------------------------------------------------
-- Schema db_kamphee
--
-- ฐานข้อมูลตัวอย่างในการสอน
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_kamphee` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `db_kamphee` ;

-- -----------------------------------------------------
-- Table `db_kamphee`.`{prefix}_work`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_kamphee`.`{prefix}_work` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `description` TEXT NOT NULL,
  `fname` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

--
-- dump ตาราง `{prefix}_01work`
--
INSERT INTO `{prefix}_work` (`id`, `title`, `description`, `fname`) VALUES
(1, 'การเขียนเว็บไซต์', 'ให้นักเรียนนักศึกษาดูจากตัวอย่างที่อาจารย์สอนให้เป็นแบบอย่างในการทำงานต่อไป', 'อ.คำภี');

-- -----------------------------------------------------
-- Table `db_kamphee`.`{prefix}_title`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_kamphee`.`{prefix}_title` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

--
-- Dumping data for table `{prefix}_title`
--

INSERT INTO `{prefix}_title` (`id`, `title`) VALUES
(1, 'นาย'),
(2, 'นาง'),
(3, 'นางสาว');

-- -----------------------------------------------------
-- Table `db_kamphee`.`{prefix}_dep`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_kamphee`.`{prefix}_dep` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `dep` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

--
-- Dumping data for table `{prefix}_dep`
--

INSERT INTO `{prefix}_dep` (`id`, `dep`) VALUES
(1, 'แผนกคอมพิวเตอร์ธุรกิจ');

-- -----------------------------------------------------
-- Table `db_kamphee`.`{prefix}_member`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_kamphee`.`{prefix}_member` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `title_id` INT(2) NOT NULL,
  `lname` VARCHAR(30) NOT NULL,
  `fname` VARCHAR(30) NOT NULL,
  `dep_id` INT(2) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `tel` VARCHAR(20) NOT NULL,
  `address` TEXT NOT NULL,
  `u_name` VARCHAR(20) NOT NULL,
  `u_pass` VARCHAR(45) NOT NULL,
  `u_type` ENUM('admin', 'user') NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_{prefix}_member_{prefix}_title_idx` (`title_id` ASC),
  INDEX `fk_{prefix}_member_{prefix}_dep1_idx` (`dep_id` ASC),
  CONSTRAINT `fk_{prefix}_member_{prefix}_title`
    FOREIGN KEY (`title_id`)
    REFERENCES `db_kamphee`.`{prefix}_title` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_{prefix}_member_{prefix}_dep1`
    FOREIGN KEY (`dep_id`)
    REFERENCES `db_kamphee`.`{prefix}_dep` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_kamphee`.`{prefix}_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_kamphee`.`{prefix}_type` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `typename` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_kamphee`.`{prefix}_product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_kamphee`.`{prefix}_product` (
  `id` INT(2) NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(5) NOT NULL,
  `proname` VARCHAR(50) NOT NULL,
  `detail` TEXT NOT NULL,
  `price` FLOAT NOT NULL,
  `bal` INT(10) NOT NULL,
  `type_id` INT(2) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_{prefix}_product_{prefix}_type1_idx` (`type_id` ASC),
  CONSTRAINT `fk_{prefix}_product_{prefix}_type1`
    FOREIGN KEY (`type_id`)
    REFERENCES `db_kamphee`.`{prefix}_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
