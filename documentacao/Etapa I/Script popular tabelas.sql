SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


INSERT INTO tcidades (id, descricao, sigla, id_uf) VALUES
(1, 'Caxias do Sul', 'CS', 1),
(2, 'Bento Gonçalves', 'BG', 1),
(3, 'Porto Alegre', 'POA', 1);

INSERT INTO tinstituicoes (id, razao_social, nome_fan, id_cidade) VALUES
(1, 'Instituto Federal de Tecnologia', 'Instituto de Tecnologia', 2);

INSERT INTO tinst_usu (id, id_usuario, id_instituicao) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1);

INSERT INTO tpaises (id, descricao, sigla) VALUES
(1, 'Brasil', 'BR'),
(2, 'Estados Unidos', 'US'),
(3, 'Espanha', 'ES');

INSERT INTO tpessoas (id, nome, dt_nasc, tel_cel, tel_res, endereco, id_cidade) VALUES
(1, 'Rafael Klein', '1963-07-10', '54 - 91568725', NULL, 'São Roque, Rua Osvaldo Aranha, 342', 2),
(2, 'Leonardo Pedrotti', '1992-11-29', '54 - 91562411', NULL, 'Juventude, Rua das Tramandas, 345', 1),
(3, 'Maria Caineli', '1984-07-11', '54 - 91564585', '3451 25 63', 'Botafogo, rua Ernesto Maga, 765', 1),
(4, 'Tiago Pan', '1990-10-16', '51 - 19255645', NULL, 'Cidade Alta, Rua Noronha, 34', 1),
(5, 'Mauri Nunes', '1989-04-12', '54 - 12458542', '3452 6542', 'Imigrante, Rua Avelino Nordeste, 231', 1);

INSERT INTO tufs (id, descricao, uf, id_pais) VALUES
(1, 'Rio Grande do Sul', 'RS', 1),
(2, 'Rio Grande do Norte', 'RN', 1),
(3, 'Santa Catarina', 'SC', 1),
(4, 'São Paulo', 'SP', 1);

INSERT INTO tusuarios (id, login, senha, tipo, ativo, id_pessoa) VALUES
(1, 'tiago_pan', 'tiago_pan', '1', 1, 4),
(2, 'rafael_klein', 'rafael_klein', '1', 1, 1),
(3, 'mauri_nunes', 'mauri_nunes', '2', 1, 5),
(4, 'leonardo_pedrotti', 'leonardo_pedrotti', '2', 1, 2),
(5, 'maria_caineli', 'maria_caineli', '2', 1, 3);
