-- MySQL Script generated by MySQL Workbench
-- 04/27/14 10:25:12
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema desenvDb
-- -----------------------------------------------------
-- 
-- 
CREATE SCHEMA IF NOT EXISTS `desenvDb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
USE `desenvDb` ;

-- -----------------------------------------------------
-- Table `desenvDb`.`tpaises`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tpaises` (
  `id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `sigla` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1;


-- -----------------------------------------------------
-- Table `desenvDb`.`tufs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tufs` (
  `id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `uf` VARCHAR(45) NOT NULL,
  `id_pais` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `pais_fk_idx` (`id_pais` ASC),
  CONSTRAINT `pais_fk`
    FOREIGN KEY (`id_pais`)
    REFERENCES `desenvDb`.`tpaises` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1;


-- -----------------------------------------------------
-- Table `desenvDb`.`tcidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tcidades` (
  `id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `sigla` VARCHAR(45) NOT NULL,
  `id_uf` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `uf_fk_idx` (`id_uf` ASC),
  CONSTRAINT `uf_fk`
    FOREIGN KEY (`id_uf`)
    REFERENCES `desenvDb`.`tufs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1;


-- -----------------------------------------------------
-- Table `desenvDb`.`tpessoas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tpessoas` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `dt_nasc` DATE NULL,
  `tel_cel` VARCHAR(45) NOT NULL,
  `tel_res` VARCHAR(45) NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `id_cidade` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `cidade_fk_idx` (`id_cidade` ASC),
  CONSTRAINT `cidade_fk`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `desenvDb`.`tcidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1;


-- -----------------------------------------------------
-- Table `desenvDb`.`tusuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tusuarios` (
  `id` INT NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(1) NOT NULL,
  `ativo` INT NOT NULL,
  `id_pessoa` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `pessoa_fk_idx` (`id_pessoa` ASC),
  CONSTRAINT `pessoa_fk`
    FOREIGN KEY (`id_pessoa`)
    REFERENCES `desenvDb`.`tpessoas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1;


-- -----------------------------------------------------
-- Table `desenvDb`.`tinstituicoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tinstituicoes` (
  `id` INT NOT NULL,
  `razao_social` VARCHAR(45) NOT NULL,
  `nome_fan` VARCHAR(45) NOT NULL,
  `id_cidade` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `cidade_inst_fk` (`id_cidade` ASC),
  CONSTRAINT `cidade_inst_fk`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `desenvDb`.`tcidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1;


-- -----------------------------------------------------
-- Table `desenvDb`.`tinst_usu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tinst_usu` (
  `id` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  `id_instituicao` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `usuario_fk_idx` (`id_usuario` ASC),
  INDEX `instituicao_fk_idx` (`id_instituicao` ASC),
  CONSTRAINT `usuario_fk`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `desenvDb`.`tusuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `instituicao_fk`
    FOREIGN KEY (`id_instituicao`)
    REFERENCES `desenvDb`.`tinstituicoes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;