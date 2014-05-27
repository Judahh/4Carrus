SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema FourCarrusDatabase
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `FourCarrusDatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `FourCarrusDatabase` ;

-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableTag`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableTag` (
  `integerIdentificationTag` INT NOT NULL AUTO_INCREMENT,
  `stringName` VARCHAR(50) NOT NULL,
  `decimalValue` DECIMAL NULL,
  `stringEmail` VARCHAR(50) NULL,
  `stringWebAddress` VARCHAR(50) NULL,
  PRIMARY KEY (`integerIdentificationTag`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableAutomaker`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableAutomaker` (
  `integerIdentificationAutomaker` INT NOT NULL AUTO_INCREMENT,
  `integerForeignKeyEnterprice` INT NOT NULL,
  PRIMARY KEY (`integerIdentificationAutomaker`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableDealership`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableDealership` (
  `integerIdentificationDealership` INT NOT NULL AUTO_INCREMENT,
  `integerForeignKeyEnterprice` INT NOT NULL,
  PRIMARY KEY (`integerIdentificationDealership`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableStore`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableStore` (
  `integerIdentificationStore` INT NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationStore` INT NOT NULL,
  `integerForeignKeyDealership` INT NOT NULL,
  `stringStoreName` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`integerIdentificationStore`),
  INDEX `integerForeignKeyDealershipIndex` (`integerForeignKeyDealership` ASC),
  CONSTRAINT `integerForeignKeyDealership`
    FOREIGN KEY (`integerForeignKeyDealership`)
    REFERENCES `FourCarrusDatabase`.`TableDealership` (`integerIdentificationDealership`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableModel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableModel` (
  `integerIdentificationModel` INT NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationModel` INT NOT NULL,
  `stringModelName` VARCHAR(50) NOT NULL,
  `stringVehicleType` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`integerIdentificationModel`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableSubModel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableSubModel` (
  `integerIdentificationSubModel` INT NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationSubModel` INT NOT NULL,
  `integerForeignKeyModel` INT NOT NULL,
  `stringSubModelName` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`integerIdentificationSubModel`),
  INDEX `integerForeignKeyModelIndex` (`integerForeignKeyModel` ASC),
  CONSTRAINT `integerForeignKeyModel`
    FOREIGN KEY (`integerForeignKeyModel`)
    REFERENCES `FourCarrusDatabase`.`TableModel` (`integerIdentificationModel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableVehicle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableVehicle` (
  `integerIdentificationVehicle` INT NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationVehicle` INT NOT NULL,
  `integerForeignKeySubModel` INT NOT NULL,
  PRIMARY KEY (`integerIdentificationVehicle`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableVehicleInstace`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableVehicleInstace` (
  `integerIdentificationVehicleInstance` INT NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationVehicleInstance` INT NOT NULL,
  `integerForeignKeyStore` INT NOT NULL,
  `integerForeignKeyVehicle` INT NOT NULL,
  PRIMARY KEY (`integerIdentificationVehicleInstance`),
  INDEX `integerForeignKeyStoreIndex` (`integerForeignKeyStore` ASC),
  INDEX `integerForeignKeyVehicleIndex` (`integerForeignKeyVehicle` ASC),
  CONSTRAINT `integerForeignKeyStore`
    FOREIGN KEY (`integerForeignKeyStore`)
    REFERENCES `FourCarrusDatabase`.`TableStore` (`integerIdentificationStore`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `integerForeignKeyVehicle`
    FOREIGN KEY (`integerForeignKeyVehicle`)
    REFERENCES `FourCarrusDatabase`.`TableVehicle` (`integerIdentificationVehicle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableTagRelationType`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableTagRelationType` (
  `integerIdentificationTagRelationType` INT NOT NULL AUTO_INCREMENT,
  `stringTagRelationType` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`integerIdentificationTagRelationType`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableTagRelation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableTagRelation` (
  `integerForeignKeyTagFrom` INT NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagTo` INT NOT NULL,
  `integerForeignKeyTagRelationType` INT NOT NULL,
  PRIMARY KEY (`integerForeignKeyTagFrom`, `integerForeignKeyTagTo`, `integerForeignKeyTagRelationType`),
  INDEX `integerForeignKeyTagToIndex` (`integerForeignKeyTagTo` ASC),
  INDEX `integerForeignKeyTagRelationTypeIndex` (`integerForeignKeyTagRelationType` ASC),
  CONSTRAINT `integerForeignKeyTagFrom`
    FOREIGN KEY (`integerForeignKeyTagFrom`)
    REFERENCES `FourCarrusDatabase`.`TableTag` (`integerIdentificationTag`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `integerForeignKeyTagTo`
    FOREIGN KEY (`integerForeignKeyTagTo`)
    REFERENCES `FourCarrusDatabase`.`TableTag` (`integerIdentificationTag`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `integerForeignKeyTagRelationType`
    FOREIGN KEY (`integerForeignKeyTagRelationType`)
    REFERENCES `FourCarrusDatabase`.`TableTagRelationType` (`integerIdentificationTagRelationType`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FourCarrusDatabase`.`TableSubModelAutomakerRelation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FourCarrusDatabase`.`TableSubModelAutomakerRelation` (
  `integerForeignKeyAutomaker` INT NOT NULL,
  `integerForeignKeySubModel` INT NOT NULL,
  PRIMARY KEY (`integerForeignKeyAutomaker`, `integerForeignKeySubModel`),
  INDEX `integerForeignKeySubModelIndex` (`integerForeignKeySubModel` ASC),
  CONSTRAINT `integerForeignKeyAutomaker`
    FOREIGN KEY (`integerForeignKeyAutomaker`)
    REFERENCES `FourCarrusDatabase`.`TableAutomaker` (`integerIdentificationAutomaker`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `integerForeignKeySubModel`
    FOREIGN KEY (`integerForeignKeySubModel`)
    REFERENCES `FourCarrusDatabase`.`TableSubModel` (`integerIdentificationSubModel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
