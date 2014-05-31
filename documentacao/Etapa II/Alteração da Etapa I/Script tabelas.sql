ALTER TABLE TPAISES CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT 

ALTER TABLE TUFS CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT 

ALTER TABLE TCIDADES CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT 

ALTER TABLE TINSTITUICOES CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT 

ALTER TABLE TINST_USU CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT 

ALTER TABLE TPESSOAS CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT 

ALTER TABLE TUFS CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT 

ALTER TABLE TUSUARIOS CHANGE id  id INT( 11 ) NOT NULL AUTO_INCREMENT 

DROP TABLE TINST_USU

ALTER TABLE TUSUARIOS ADD `ID_INSTITUICAO` INT NOT NULL

ALTER TABLE TUSUARIOS ADD INDEX `USER_INSTITUICAO_FK` (`ID_INSTITUICAO` ASC)

ALTER TABLE TUSUARIOS ADD CONSTRAINT `USER_INSTITUICAO_FK`
    FOREIGN KEY (`ID_INSTITUICAO`)
    REFERENCES `DESENVDB`.`TINSTITUICOES` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION