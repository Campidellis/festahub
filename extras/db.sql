CREATE DATABASE IF NOT EXISTS festahub DEFAULT CHARACTER SET utf8 ;
USE festahub ;

-- -----------------------------------------------------
-- Table morador
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS morador (
  id_morador INT NOT NULL,
  nome VARCHAR(255) NOT NULL,
  telefone_1 VARCHAR(45) NOT NULL,
  telefone_2 VARCHAR(45) NULL,
  email_1 VARCHAR(45) NOT NULL,
  email_2 VARCHAR(45) NULL,
  ativo TINYINT NULL,
  PRIMARY KEY (id_morador))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table apartamento
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS apartamento (
  id_apartamento INT NOT NULL AUTO_INCREMENT,
  descricao VARCHAR(10) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  id_morador INT NOT NULL,
  PRIMARY KEY (id_apartamento),
  CONSTRAINT fk_apartamento_morador
    FOREIGN KEY (id_morador)
    REFERENCES morador (id_morador)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table areas_lazer
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS areas_lazer (
  id_area INT NOT NULL,
  descricao_area VARCHAR(255) NOT NULL,
  ativo TINYINT NULL,
  PRIMARY KEY (id_area))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table configuracoes
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS configuracoes (
  id_configuracao INT NOT NULL,
  minimo_dias INT NULL,
  maximo_dias INT NULL,
  qtde_reservas INT NULL,
  cancela_reserva INT NULL,
  PRIMARY KEY (id_configuracao))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table reserva
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS reserva (
  id_reserva INT NOT NULL,
  data DATETIME NOT NULL,
  valor DECIMAL(9,2) NULL,
  pago TINYINT NULL,
  id_apartamento INT NOT NULL,
  id_area_lazer INT NOT NULL,
  PRIMARY KEY (id_reserva),
  CONSTRAINT fk_apartamento_has_areas_lazer_apartamento1
    FOREIGN KEY (id_apartamento)
    REFERENCES apartamento (id_apartamento)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_apartamento_has_areas_lazer_areas_lazer1
    FOREIGN KEY (id_area_lazer)
    REFERENCES areas_lazer (id_area)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table administrador
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS administrador (
  id_admin INT NOT NULL,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  PRIMARY KEY (id_admin))
ENGINE = InnoDB;


insert into morador(id_morador, nome, telefone_1, email_1, ativo) values (1,'João Victor', '(14) 9 9919-5415', 'joaovictor@teste.com', 1);
insert into apartamento(id_apartamento, descricao, senha, id_morador) values (1, 'A-01', '0cc175b9c0f1b6a831c399e269772661', 1);
update apartamento set senha = '$2y$10$i8DZFlqzQzD9b71OjxM9Ku3pzRxexQXInBQflANSnacH55m1Yt2ey' where id_apartamento = 1;