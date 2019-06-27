CREATE DATABASE Portfolio;
USE Portfolio;

CREATE TABLE Eleve (
  nom varchar(50);
  prenom varchar(50);
  annee_en_cours varchar(50);
  numero_telephone int;
  mail varchar(50);
  profil_linkedin varchar(75);
  situation_perso varchar(500);
)

INSERT INTO Eleve (nom, prenom, annee_en_cours numero_telephone, mail, profil_linkedin, situation_perso) VALUES('Cervantes', 'Fabien', 'Bachelor 1 Informatique', 0786142133, 'fabien.cervantes.1@gmail.com', 'https://www.linkedin.com/in/fabien-cervantes-965343171/', 'Etant en cursus scolaire durant cinq années je souhaite en parallèle de mes études obtenir un emploi me permettant d’enrichir mon expérience professionnelle.');

CREATE TABLE Experiences (
  id_exp serial PRIMARY KEY;
  nom_exp varchar(50);
  nom_entreprise varchar(50);
  date_debut datetime;
  date_fin datetime;
  ville varchar(50);
);

INSERT INTO Experiences (nom_exp, nom_entreprise, date_debut, date_fin, ville) VALUES ('Manutentionnaire', 'Maison Béchard', '03/10/2018', '27/04/2019', 'Aix en Provence');
INSERT INTO Experiences (nom_exp, nom_entreprise, date_debut, date_fin, ville) VALUES ('Eboueur saisonnier', 'Métropole AMP', 'Juillet 2017', 'Juillet 2018', 'Aubagne');
INSERT INTO Experiences (nom_exp, nom_entreprise, date_debut, date_fin, ville) VALUES ('Animateur centre aéré', 'Mairie de Roquevaire', 'Janvier 2018', 'Mars 2018', 'Roquevaire');
INSERT INTO Experiences (nom_exp, nom_entreprise, date_debut, date_fin, ville) VALUES ('Service Civique', 'Collège Joseph Lakanal', '08/01/2018', '07/07/2018', 'Aubagne');
INSERT INTO Experiences (nom_exp, nom_entreprise, date_debut, date_fin, ville) VALUES ("Assistant d'éducation", 'Collège Joseph Lakanal', '16/10/2017', '31/12/2017', 'Aubagne');

CREATE TABLE Formations (
  id_form serial PRIMARY KEY;
  nom_form varchar(50);
  nom_etablissement varchar(50);
  date_debut datetime;
  date_fin datetime;
  ville varchar(50);
);

INSERT INTO Formations (nom_form, nom_etablissement, date_debut, ville) VALUES ('Certification CCNA 1', 'Ynov Campus', 'Mars 2019', 'Aix en Provence');
INSERT INTO Formations (nom_form, nom_etablissement, date_debut, date_fin, ville) VALUES ('Bachelor Informatique Première année', 'Ynov Campus', 'Septembre 2018', 'Août 2019', 'Aix en Provence');
INSERT INTO Formations (nom_form, nom_etablissement, date_debut, ville) VALUES ('Prévention et Secours Civiques de niveau 1(PSC1)', 'Hôtel du Departement', 'Avril 2018', 'Marseille');
INSERT INTO Formations (nom_form, nom_etablissement, date_debut, ville) VALUES ('Baccalauréat Scientifique', 'Lycée Joliot-Curie', 'Juin 2017', 'Aubagne' );

CREATE TABLE Competences (
	id_competence serial PRIMARY KEY;
	nom_compet varchar(50) UNIQUE;
	logo varchar(250);
  niveau_compet int;
);

INSERT INTO Competences (nom_compet, logo, niveau_compet) VALUES ('Python', '', '3');
INSERT INTO Competences (nom_compet, logo, niveau_compet) VALUES ('HTML CSS', '', '3');
INSERT INTO Competences (nom_compet, logo, niveau_compet) VALUES ('SQL', '', '3');
INSERT INTO Competences (nom_compet, logo, niveau_compet) VALUES ('CCNA 1', '', '5');
INSERT INTO Competences (nom_compet, logo, niveau_compet) VALUES ('Windows Server', '', '4');
INSERT INTO Competences (nom_compet, logo, niveau_compet) VALUES ('PHP', '', '2');
INSERT INTO Competences (nom_compet, logo, niveau_compet) VALUES ('JavaScript', '', '2');

CREATE TABLE Projets (
  id_projet serial PRIMARY KEY;
  nom_projet varchar(50);
  ville varchar(50);
  descriptif_projet varchar(1000);
)

CREATE TABLE Voyages (
  id_voyage serial PRIMARY KEY;
  ville varchar(50);
  pays varchar(50);
  annee datetime;
  annee datetime;
  annee datetime;
)

INSERT INTO Voyages (ville, pays, annee, annee, annee) VALUES ('Londres', 'Angleterre', '2013', '2017', '2019');
INSERT INTO Voyages (ville, pays, annee, annee, annee) VALUES ('Barcelone', 'Espagne', '2016', '2017', '2018');
INSERT INTO Voyages (ville, pays, annee) VALUES ('Edimbourg', 'Ecosse', '2018');


CREATE TABLE Langues (
  id_langue serial PRIMARY KEY;
  nom_langue varchar(50);
  niveau varchar(50);
)

INSERT INTO Langues (nom_langue, niveau) VALUES ('Français', 'Courant');
INSERT INTO Langues (nom_langue, niveau) VALUES ('Anglais', 'intermédiaire');
INSERT INTO Langues (nom_langue, niveau) VALUES ('Anglais', 'intermédiaire');

CREATE TABLE Divers (
  id_div serial PRIMARY KEY;
  nom_div varchar(50);
  type varchar(50);
)

INSERT INTO Divers (nom_div, type) VALUES ('Cuisine', 'Pâtisserie et autres');
INSERT INTO Divers (nom_div, type) Values ('Lecture', 'Science fiction, Romans autobiographiques');
INSERT INTO Divers (nom_div, type) VALUES ('Art', 'Musique, Cinéma, Bodmod');
