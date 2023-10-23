-- 
-- STORY 1
-- 

CREATE DATABASE IF NOT EXISTS SpaceMemory CHARACTER SET 'utf8'


CREATE TABLE IF NOT EXISTS Utilisateur (
  Id int UNSIGNED NOT NULL AUTO_INCREMENT,
  Email varchar(100) NOT NULL,
  PasswordUser varchar(200) NOT NULL,
  Pseudo varchar(100) NOT NULL,
  InscriptionDate datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  LastConnexionDate datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
  ADD PRIMARY KEY (Id);
)

CREATE TABLE IF NOT EXISTS Score (
  Id int UNSIGNED NOT NULL AUTO_INCREMENT,
  IdPlayer int UNSIGNED,
  IdGame int UNSIGNED,
  GameDifficult enum('1','2','3'),
  GameScore int,
  DateGame datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
  ADD PRIMARY KEY (Id);
)

CREATE TABLE IF NOT EXISTS `Message` (
  Id int UNSIGNED NOT NULL AUTO_INCREMENT,
  IdGame int UNSIGNED DEFAULT NULL,
  ExpeditorId int UNSIGNED DEFAULT NULL,
  Chat TEXT,
  MessageDate datetime DEFAULT CURRENT_TIMESTAMP
  ADD PRIMARY KEY (Id);
)

CREATE TABLE IF NOT EXISTS Game (
  Id int UNSIGNED NOT NULL AUTO_INCREMENT,
  GameName varchar(100) NOT NULL
  ADD PRIMARY KEY (Id);
)

ALTER TABLE `Message`
  ADD CONSTRAINT FkMessageGame FOREIGN KEY (IdGame) REFERENCES Game(Id) ON UPDATE CASCADE ON DELETE SET NULL,
  ADD CONSTRAINT FkMessageUtilisateur FOREIGN KEY (ExpeditorId) REFERENCES Utilisateur(Id) ON UPDATE CASCADE ON DELETE SET NULL,

ALTER TABLE Score
  ADD CONSTRAINT FkScoreGame FOREIGN KEY (IdGame) REFERENCES Game(Id) ON UPDATE CASCADE ON DELETE SET NULL,
  ADD CONSTRAINT FkScoreUtilisateur FOREIGN KEY (IdPlayer) REFERENCES Utilisateur(Id) ON UPDATE CASCADE ON DELETE SET NULL,

ALTER TABLE Utilisateur
  ADD CONSTRAINT FkMessageGame FOREIGN KEY (IdGame) REFERENCES Game(Id) ON UPDATE CASCADE ON DELETE SET NULL,
  ADD CONSTRAINT FkMessageUtilisateur FOREIGN KEY (ExpeditorId) REFERENCES Utilisateur(Id) ON UPDATE CASCADE ON DELETE SET NULL,

--
-- STORY 2
--

INSERT INTO Game (GameName)
VALUES ('Memory');

INSERT INTO `Message` (IdGame, ExpeditorId, CHAT)
VALUES
    (1, 1, 'Pour Demacia'),
    (1, 1, 'Pour Noxus'),
    (1, 1, 'Pour Shurima'),
    (1, 1, 'Pour Freljord'),
    (1, 1, 'Pour Le néant'),
    (1, 2, 'Pour les iles obscurs'),
    (1, 2, 'Pour Ionia'),
    (1, 2, 'Pour Bundle'),
    (1, 2, 'Pour le mont targon'),
    (1, 2, 'Pour xtal'),
    (1, 3, 'Pour bilgewater'),
    (1, 3, 'Pour les darkins'),
    (1, 3, 'Pour Piltover'),
    (1, 3, 'Pour Zaun'),
    (1, 3, 'Pour Demacia'),
    (1, 4, 'Pour Noxus'),
    (1, 4, 'Pour Shurima'),
    (1, 4, 'Pour Freljord'),
    (1, 4, 'Pour Le néant'),
    (1, 4, 'Pour les iles obscurs'),
    (1, 5, 'Pour Ionia'),
    (1, 5, 'Pour Bundle'),
    (1, 5, 'Pour le mont targon'),
    (1, 5, 'Pour xtal'),
    (1, 5, 'Pour bilgewater');

INSERT INTO Score (IdPlayer, IdGame, GameDifficult, GameScore, DateGame)
VALUES
    (1, 1, '2', 500, '2023-10-05 10:00:00'),
    (2, 1, '2', 700, '2023-10-05 10:00:00'),
    (3, 1, '2', 300, '2023-10-05 10:00:00'),
    (4, 1, '2', 400, '2023-10-05 10:00:00'),
    (5, 1, '2', 950, '2023-10-05 10:00:00'),
    (1, 1, '2', 700, '2023-10-05 11:00:00'),
    (2, 1, '2', 200, '2023-10-05 11:00:00'),
    (3, 1, '2', 900, '2023-10-05 11:00:00'),
    (4, 1, '2', 400, '2023-10-05 11:00:00'),
    (5, 1, '2', 500, '2023-10-05 11:00:00'),
    (1, 1, '3', 550, '2023-10-05 12:00:00'),
    (2, 1, '3', 200, '2023-10-05 12:00:00'),
    (3, 1, '3', 1300, '2023-10-05 12:00:00'),
    (4, 1, '3', 420, '2023-10-05 12:00:00'),
    (5, 1, '3', 960, '2023-10-05 12:00:00'),
    (1, 1, '2', 100, '2023-10-05 13:00:00'),
    (2, 1, '2', 600, '2023-10-05 13:00:00'),
    (3, 1, '2', 200, '2023-10-05 13:00:00'),
    (4, 1, '2', 800, '2023-10-05 13:00:00'),
    (5, 1, '2', 115, '2023-10-05 13:00:00'),
    (1, 1, '2', 100, '2023-10-05 14:00:00'),
    (2, 1, '2', 900, '2023-10-05 14:00:00'),
    (3, 1, '2', 300, '2023-10-05 14:00:00'),
    (4, 1, '2', 600, '2023-10-05 14:00:00'),
    (5, 1, '2', 450, '2023-10-05 14:00:00');

INSERT INTO Utilisateur (Email, PasswordUser, Pseudo)
VALUES
    ('alexis.godet@esiee-it.fr', '1234', 'Alexlastique'),
    ('alexis.godet05@gmail.com', '2345', 'Alexlastique 2'),
    ('alexis.godet050@gmail.com', '3456', 'Alexlastique 3'),
    ('papatate2@gmail.com', '4567', 'Alexlastique 4'),
    ('alexlastique@gmail.com', '5678', 'Alexlastique 5');

--
-- Story 3
--

ALTER TABLE Utilisateur
  ADD UNIQUE (Pseudo),
  ADD UNIQUE (Email);

--
-- STORY 4
--

UPDATE Utilisateur
SET PasswordUser='modifier'
WHERE Id=1

UPDATE Utilisateur
SET Email='modifier@gmail.com'
WHERE Id=1

--
--STORT 5
--

SELECT * FROM Utilisateur
WHERE Email=papatate2@gmail.com
AND PasswordUser=4567

--
--STORY 6
--

--
--STORT 7
--

SELECT IdGame, IdPlayer, GameDifficult, GameScore FROM Score
ORDER BY IdGame, GameDifficult, GameScore ASC;

SELECT U.*, S.nom as nom_sport
FROM Utilisateur as u
left join sport_utilisateur