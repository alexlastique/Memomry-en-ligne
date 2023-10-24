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
  LastConnexionDate datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Score (
  Id int UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser int UNSIGNED,
  IdGame int UNSIGNED,
  GameDifficult enum('1','2','3'),
  GameScore int,
  DateGame datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS `Message` (
  Id int UNSIGNED NOT NULL AUTO_INCREMENT,
  IdGame int UNSIGNED DEFAULT NULL,
  IdUser int UNSIGNED DEFAULT NULL,
  Chat TEXT,
  MessageDate datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Game (
  Id int UNSIGNED NOT NULL AUTO_INCREMENT,
  GameName varchar(100) NOT NULL,
  PRIMARY KEY (Id)
);

ALTER TABLE `Message`
  ADD CONSTRAINT FkMessageGame FOREIGN KEY (IdGame) REFERENCES Game(Id) ON UPDATE CASCADE ON DELETE SET NULL,
  ADD CONSTRAINT FkMessageUtilisateur FOREIGN KEY (IdUser) REFERENCES Utilisateur(Id) ON UPDATE CASCADE ON DELETE SET NULL;

ALTER TABLE Score
  ADD CONSTRAINT FkScoreGame FOREIGN KEY (IdGame) REFERENCES Game(Id) ON UPDATE CASCADE ON DELETE SET NULL,
  ADD CONSTRAINT FkScoreUtilisateur FOREIGN KEY (IdUser) REFERENCES Utilisateur(Id) ON UPDATE CASCADE ON DELETE SET NULL;

ALTER TABLE Utilisateur
  ADD CONSTRAINT FkMessageGame FOREIGN KEY (IdGame) REFERENCES Game(Id) ON UPDATE CASCADE ON DELETE SET NULL,
  ADD CONSTRAINT FkMessageUtilisateur FOREIGN KEY (IdUser) REFERENCES Utilisateur(Id) ON UPDATE CASCADE ON DELETE SET NULL;

--
-- STORY 2
--

INSERT INTO Game (GameName)
VALUES ('Memory');

INSERT INTO `Message` (IdGame, IdUser, Chat)
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

INSERT INTO Score (IdUser, IdGame, GameDifficult, GameScore, DateGame)
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
WHERE Id=1;

UPDATE Utilisateur
SET Email='modifier@gmail.com'
WHERE Id=1;

--
--STORY 5
--

SELECT * FROM Utilisateur
WHERE Email=papatate2@gmail.com
AND PasswordUser=4567;

--
--STORY 6
--

--
--STORY 7
--

SELECT Game.GameName, Utilisateur.Pseudo, GameDifficult, GameScore FROM Score
LEFT JOIN Game ON Score.IdGame = Game.Id
LEFT JOIN Utilisateur On Score.IdUser = Utilisateur.Id
ORDER BY IdGame, GameDifficult, GameScore ASC;

--
--STORY 8
--

SELECT Game.GameName, Utilisateur.Pseudo, GameDifficult, GameScore FROM Score
LEFT JOIN Game ON Score.IdGame = Game.Id
LEFT JOIN Utilisateur On Score.IdUser = Utilisateur.Id
WHERE Game.GameName = 'Memory'
OR Utilisateur.Pseudo = 'Alexlastique'
OR GameDifficult = 2
ORDER BY IdGame, GameDifficult, GameScore ASC;

--
--STORY 9
--

UPDATE Score
SET GameScore = 9000
WHERE IdUser = 1
AND IdGame = 1
AND GameDifficult = 1
AND GameScore < 9000;

--
--STORY 10
--

INSERT INTO 'Message' (IdGame, IdUser, Chat)
VALUES (1,4,'STORY 8');

--
--STORY 11
--

SELECT Chat, Utilisateur.Pseudo, MessageDate,
  CASE WHEN IdUser = 1 THEN TRUE ELSE FALSE END AS IsSender
FROM Message
LEFT JOIN Utilisateur ON Message.IdUser = Utilisateur.Id
WHERE MessageDate + INTERVAL 24 HOUR >= CURRENT_TIMESTAMP;


--
--STORY 12
--

SELECT Score.* FROM Score
LEFT JOIN Utilisateur ON Score.IdUser = Utilisateur.Id
WHERE Utilisateur.Pseudo LIKE '% %';


--
--BACKLOG 2
--

--
--STORY 13
--

CREATE TABLE IF NOT EXISTS PrivedMessage (
  Id int UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser1 INT UNSIGNED,
  IdUser2 INT UNSIGNED,
  MessageContente TEXT,
  WathRead BOOLEAN DEFAULT FALSE,
  PublichDate datetime DEFAULT CURRENT_TIMESTAMP,
  ReadDate datetime DEFAULT CURRENT_TIMESTAMP,
  ADD PRIMARY KEY (Id)
);

--
--STORY 14
--

CREATE TABLE IF NOT EXISTS PrivedMessage (
  Id int UNSIGNED NOT NULL AUTO_INCREMENT,
  IdUser1 INT UNSIGNED,
  IdUser2 INT UNSIGNED,
  MessageContente TEXT,
  WathRead BOOLEAN DEFAULT FALSE,
  PublichDate datetime DEFAULT CURRENT_TIMESTAMP,
  ReadDate datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (Id)
)
INSERT INTO PrivedMessage(IdUser1, IdUser2, MessageContente, PublichDate, ReadDate)VALUES
(1,2,'Salut!','2023-10-24 10:00:00.000','2023-10-24 10:05:00.000'),
(2,1,'Salut, ça va?','2023-10-24 10:10:00.000','2023-10-24 10:15:00.000'),
(1,2,'Ca va et toi?','2023-10-24 10:20:00.000','2023-10-24 10:25:00.000'),
(2,1,'Ca va!','2023-10-24 10:30:00.000','2023-10-24 10:35:00.000'),
(1,2,'Bon bah tant mieux.','2023-10-24 10:40:00.000','2023-10-24 10:45:00.000'),
(3,1,'Salut!','2023-10-24 10:11:00.000','2023-10-24 10:16:00.000'),
(1,3,'Salut, ça va?','2023-10-24 10:01:00.000','2023-10-24 10:06:00.000'),
(3,1,'Ca va et toi?','2023-10-24 10:21:00.000','2023-10-24 10:26:00.000'),
(1,3,'Ca va!','2023-10-24 10:31:00.000','2023-10-24 10:36:00.000'),
(3,1,'Bon bah tant mieux.','2023-10-24 10:41:00.000','2023-10-24 10:46:00.000'),
(2,4,'Salut!','2023-10-24 10:01:00.000','2023-10-24 10:06:00.000'),
(4,2,'Salut, ça va?','2023-10-24 10:11:00.000','2023-10-24 10:16:00.000'),
(2,4,'Ca va et toi?','2023-10-24 10:21:00.000','2023-10-24 10:26:00.000'),
(4,2,'Ca va!','2023-10-24 10:31:00.000','2023-10-24 10:36:00.000'),
(2,4,'Bon bah tant mieux.','2023-10-24 10:41:00.000','2023-10-24 10:46:00.000'),
(1,4,'Salut!','2023-10-24 10:02:00.000','2023-10-24 10:07:00.000'),
(4,1,'Salut, ça va?','2023-10-24 10:12:00.000','2023-10-24 10:17:00.000'),
(1,4,'Ca va et toi?','2023-10-24 10:22:00.000','2023-10-24 10:27:00.000'),
(4,1,'Ca va!','2023-10-24 10:32:00.000','2023-10-24 10:37:00.000'),
(1,4,'Bon bah tant mieux.','2023-10-24 10:42:00.000','2023-10-24 10:47:00.000')

DELETE FROM PrivedMessage
WHERE Id = 2

UPDATE PrivedMessage
SET MessageContente = 'J ai modifier ce message'
WHERE Id = 1

