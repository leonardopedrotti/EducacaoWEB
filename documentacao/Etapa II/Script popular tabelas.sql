INSERT INTO tcidades (id, descricao, sigla, id_uf) VALUES
(1, 'Caxias do Sul', 'CS', 1),
(2, 'Bento Gonçalves', 'BG', 1),
(3, 'Porto Alegre', 'POA', 1);

INSERT INTO tcursos (id, descricao, id_instituicao) VALUES
(3, 'Analise e Desenvolvimento de Sistemas', 1),
(5, 'Licenciatura em Matematica', 1);

INSERT INTO tcur_disc (id, id_curso, id_disciplina) VALUES
(1, 3, 4),
(2, 3, 7),
(3, 3, 8),
(4, 3, 9),
(5, 5, 6),
(6, 3, 10),
(7, 5, 4);

INSERT INTO tdisciplina (id, disciplina, ementa, bibliografia) VALUES
(4, 'Portugues Instrumental', '', ''),
(5, 'Logica para a Computacao', '', ''),
(6, 'Matematica Discreta', '', ''),
(7, 'Desenvolvimento de Sistemas I', '', ''),
(8, 'Desenvolvimento de Sistemas II', '', ''),
(9, 'Desenvolvimento de Sistemas III', '', ''),
(10, 'Banco de Dados II', '', '');

INSERT INTO tinstituicoes (id, razao_social, nome_fan, id_cidade) VALUES
(1, 'Instituto Federal de Tecnologia', 'Instituto de Tecnologia', 2),
(3, 'Instituto de Livre Julgamento Penal', 'Instituto Penal', 3);

INSERT INTO tpaises (id, descricao, sigla) VALUES
(1, 'Brasil', 'BR'),
(2, 'Estados Unidos', 'US'),
(3, 'Espanha', 'ES'),
(4, 'teste', 'rer');

INSERT INTO tpessoas (id, nome, dt_nasc, tel_cel, tel_res, endereco, id_cidade) VALUES
(1, 'Rafael Klein', '1963-07-10', '54 - 91568725', '', 'São Roque, Rua Osvaldo Aranha, 342', 2),
(2, 'Leonardo Pedrotti', '1992-11-29', '54 - 91562411', NULL, 'Juventude, Rua das Tramandas, 345', 1),
(3, 'Maria Caineli', '1984-07-11', '54 - 91564585', '3451 25 63', 'Botafogo, rua Ernesto Maga, 765', 1),
(4, 'Tiago Pan', '1990-10-16', '51 - 19255645', NULL, 'Cidade Alta, Rua Noronha, 34', 1),
(5, 'Mauri Nunes', '1989-04-12', '54 - 12458542', '3452 6542', 'Imigrante, Rua Avelino Nordeste, 231', 1),
(6, 'Nicolas Da Silva', '1985-05-13', '54 - 12584563', NULL, 'Rua do Rio, 321', 1),
(7, 'Wiliam Souza', '1990-08-22', '54 - 91563275', NULL, 'Rua das Saldanhas', 1),
(8, 'Lucas Matinelo', '1975-12-12', '54 - 91565875', '', 'Rua das Canelas,34', 2);

INSERT INTO tturma (id, ano, semestre, carga_horaria, nome, id_tcur_disc, id_professor, ativo) VALUES
(1, 2013, 2, 90, 'Desenv 1', 2, 1, 0),
(2, 2014, 1, 90, 'Portugues', 1, 2, 1),
(3, 2014, 1, 90, 'Desenv 2', 3, 1, 1),
(4, 2013, 2, 60, 'Banco 2', 6, 1, 0),
(5, 2014, 1, 90, 'Portugues', 7, 2, 1);

INSERT INTO ttur_aluno (id, id_turma, id_aluno) VALUES
(1, 1, 3),
(2, 1, 4),
(3, 1, 5),
(4, 3, 5),
(5, 3, 4),
(6, 4, 5),
(7, 4, 6),
(8, 5, 7),
(9, 5, 8),
(10, 2, 9);

INSERT INTO tufs (id, descricao, uf, id_pais) VALUES
(1, 'Rio Grande do Sul', 'RS', 1),
(2, 'Rio Grande do Norte', 'RN', 1),
(3, 'Santa Catarina', 'SC', 1),
(4, 'São Paulo', 'SP', 1);

INSERT INTO tusuarios (id, login, senha, tipo, ativo, id_pessoa, id_instituicao) VALUES
(1, 'tiago_pan', 'tiago', '1', 1, 4, 1),
(2, 'rafael_klein', 'rafael', '1', 1, 1, 1),
(3, 'mauri_nunes', 'mauri', '2', 1, 5, 1),
(4, 'leonardo_pedrotti', 'leonardo', '2', 1, 2, 1),
(5, 'maria_caineli', 'maria', '2', 1, 3, 1),
(6, 'administrador', 'administrador', '0', 1, 2, 1),
(7, 'nicolas_silva', 'nicolas', '2', 1, 6, 1),
(8, 'wiliam_souza', 'wiliam', '2', 1, 7, 1),
(9, 'lucas_matinelo', 'lucas', '2', 1, 8, 1);
