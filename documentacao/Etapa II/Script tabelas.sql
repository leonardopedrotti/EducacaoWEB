-- -----------------------------------------------------
-- Table `desenvDb`.`tcursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tcursos` (
  `id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `id_instituicao` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tcursos_tinstituicoes1_idx` (`id_instituicao` ASC),
  CONSTRAINT `fk_tcursos_tinstituicoes1`
    FOREIGN KEY (`id_instituicao`)
    REFERENCES `desenvDb`.`tinstituicoes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desenvDb`.`tdisciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tdisciplina` (
  `id` INT NOT NULL,
  `disciplina` VARCHAR(45) NOT NULL,
  `ementa` VARCHAR(45) NULL,
  `bibliografia` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desenvDb`.`tcur_disc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tcur_disc` (
  `id` INT NOT NULL,
  `id_curso` INT NOT NULL,
  `id_disciplina` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tcur_disc_tcursos1_idx` (`id_curso` ASC),
  INDEX `fk_tcur_disc_tdisciplina1_idx` (`id_disciplina` ASC),
  CONSTRAINT `fk_tcur_disc_tcursos1`
    FOREIGN KEY (`id_curso`)
    REFERENCES `desenvDb`.`tcursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tcur_disc_tdisciplina1`
    FOREIGN KEY (`id_disciplina`)
    REFERENCES `desenvDb`.`tdisciplina` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE tcursos CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT; 

ALTER TABLE tdisciplina CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT;

ALTER TABLE tcur_disc CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT; 


-- -----------------------------------------------------
-- Table `desenvDb`.`tturma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`tturma` (
  `id` INT NOT NULL,
  `ano` INT NOT NULL,
  `semestre` INT NOT NULL,
  `carga_horaria` INT NOT NULL,
  `nome` VARCHAR(200) NOT NULL,
  `id_tcur_disc` INT NOT NULL,
  `id_professor` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tturma_tcur_disc1_idx` (`id_tcur_disc` ASC),
  INDEX `fk_tturma_tusuarios1_idx` (`id_professor` ASC),
  CONSTRAINT `fk_tturma_tcur_disc1`
    FOREIGN KEY (`id_tcur_disc`)
    REFERENCES `desenvDb`.`tcur_disc` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tturma_tusuarios1`
    FOREIGN KEY (`id_professor`)
    REFERENCES `desenvDb`.`tusuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `desenvDb`.`ttur_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desenvDb`.`ttur_aluno` (
  `id` INT NOT NULL,
  `id_turma` INT NOT NULL,
  `id_aluno` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ttur_aluno_tturma1_idx` (`id_turma` ASC),
  INDEX `fk_ttur_aluno_tusuarios1_idx` (`id_aluno` ASC),
  CONSTRAINT `fk_ttur_aluno_tturma1`
    FOREIGN KEY (`id_turma`)
    REFERENCES `desenvDb`.`tturma` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ttur_aluno_tusuarios1`
    FOREIGN KEY (`id_aluno`)
    REFERENCES `desenvDb`.`tusuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE tturma CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT; 

ALTER TABLE ttur_aluno CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT;

ALTER TABLE tturma add `ativo` INT NOT NULL;
