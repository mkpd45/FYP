CREATE TABLE Inviters(
inviterId INT(10) Unsigned AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
address VARCHAR(80) NULL,
homeState VARCHAR(20) NULL,
city VARCHAR(30) NULL,
phoneNum VARCHAR(12) NULL,
profileImage VARCHAR(40) NULL,
username VARCHAR(30) NOT NULL,
email VARCHAR(60) NOT NULL,
password VARCHAR(50) NOT NULL
);

CREATE TABLE Troupes(
troupeId INT(10) Unsigned AUTO_INCREMENT PRIMARY KEY,
troupeName VARCHAR(30) NOT NULL,
description TEXT NOT NULL,
address VARCHAR(80) NULL,
troupeState VARCHAR(20) NULL,
city VARCHAR(20) NULL,
coverImage VARCHAR(40) NULL,
troupeImage VARCHAR(40) NULL,
reserveMode VARCHAR(3) NOT NULL,
contactNum VARCHAR(12) NULL,
username VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
);

CREATE TABLE Users AS
(Select 'Inviters' AS 'Character', inviterId AS 'userId', username, password from Inviters)
Union
(Select 'Troupes' As 'Character', troupeId As 'userId', username, password from Troupes);

CREATE TABLE Reservations (
reservationID INT(10) Unsigned AUTO_INCREMENT PRIMARY KEY,
reserveDetails TEXT NOT NULL,
dateCreated DATE NOT NULL,
status VARCHAR(10) NOT NULL,
inviterId INT,
troupeId INT,
CONSTRAINT FK_inviter FOREIGN KEY (inviterId) REFERENCES Inviters(inviterId),
CONSTRAINT FK_InvitedTroupe FOREIGN KEY (troupeId) REFERENCES Troupes(troupeId)
);

CREATE TABLE Notifications(
notifyId INT(10) Unsigned AUTO_INCREMENT PRIMARY KEY,
body VARCHAR(20) NOT NULL,
dateSent DATE NOT NULL,
status VARCHAR(6) NOT NULL,
purpose CHAR NOT NULL,
userId INT(10) Unsigned,
CONSTRAINT FK_receiver FOREIGN KEY (userId) REFERENCES Users(userId)
);

CREATE TABLE Performances(
performId INT(10) Unsigned AUTO_INCREMENT PRIMARY KEY,
performType VARCHAR(40) NOT NULL,
description VARCHAR(1000) NULL,
price FLOAT(5,2) NOT NULL,
troupeId INT(10) Unsigned,
CONSTRAINT FK_owner FOREIGN KEY (troupeId) REFERENCES Troupes(troupeId)
);

CREATE TABLE UnavailableDate(
unDateId INT(10) Unsigned AUTO_INCREMENT PRIMARY KEY,
dateSet date NOT NULL,
reason VARCHAR(200) NULL,
specificDay Boolean DEFAULT 0
);

CREATE TABLE Images(
imageId INT(10) Unsigned AUTO_INCREMENT PRIMARY KEY,
imageGroup VARCHAR(20) NOT NULL,
location VARCHAR(40) NOT NULL,
troupeId INT(10) Unsigned,
CONSTRAINT FK_Iuploader FOREIGN KEY (troupeId) REFERENCES Troupes(troupeId)
);

CREATE TABLE Videos(
videoId INT(10) Unsigned AUTO_INCREMENT PRIMARY KEY,
videoGroup VARCHAR(20) NOT NULL,
location VARCHAR(40) NOT NULL,
troupeId INT(10) Unsigned,
CONSTRAINT FK_Vploader FOREIGN KEY (troupeId) REFERENCES Troupes(troupeId)
);

CREATE TABLE Admins(
adminId INT(100) Unsigned AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(20) NOT NULL,
password VARCHAR(40) NOT NULL
);
