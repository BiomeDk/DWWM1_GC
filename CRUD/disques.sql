DROP DATABASE IF EXISTS disque;

CREATE DATABASE IF NOT EXISTS disque DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE disque;


#------------------------------------------------------------
# Table: Labels
#------------------------------------------------------------

CREATE TABLE Labels(
        idLabel  Int  Auto_increment  NOT NULL ,
        nomLabel Varchar (15) NOT NULL
	,CONSTRAINT Labels_PK PRIMARY KEY (idLabel)
)ENGINE=INNODB DEFAULT CHARSET=utf8mb4;


#------------------------------------------------------------
# Table: Artistes
#------------------------------------------------------------

CREATE TABLE Artistes(
        idArtiste     Int  Auto_increment  NOT NULL ,
        nomArtiste    Varchar (25) NOT NULL ,
        prenomArtiste Varchar (25) NOT NULL
	,CONSTRAINT Artistes_PK PRIMARY KEY (idArtiste)
)ENGINE=INNODB DEFAULT CHARSET=utf8mb4;


#------------------------------------------------------------
# Table: Disques
#------------------------------------------------------------

CREATE TABLE Disques(
        idDisque  Int  Auto_increment  NOT NULL ,
        titre     Varchar (50) NOT NULL ,
        annee     Date NOT NULL ,
        idLabel   Int NOT NULL ,
        idArtiste Int NOT NULL
	,CONSTRAINT Disques_PK PRIMARY KEY (idDisque)

	,CONSTRAINT Disques_Labels_FK FOREIGN KEY (idLabel) REFERENCES Labels(idLabel)
	,CONSTRAINT Disques_Artistes0_FK FOREIGN KEY (idArtiste) REFERENCES Artistes(idArtiste)
)ENGINE=INNODB DEFAULT CHARSET=utf8mb4;