CREATE DATABASE mygallery;

CREATE TABLE gallery (
	idGallery int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    titleGallery longtext,
    descGallery longtext,
    imgFullNameGallery longtext,
    orderGallery int(11)
);

INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('advanture' ,'face and lips', 'face', 1);
INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('nature' ,'mountain', 'bluesky', 2);
INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('nature' ,'field', 'countryside', 3);
INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('flower' ,'tulip', 'blooming', 4);
INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('nature' ,'umbrella flying', 'flying', 5);
INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('tree' ,'hello', 'forest', 6);
INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('nail' ,'softly hand', 'hand', 7);
INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('advertisement' ,'coffe', 'life', 8);
INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('bicycle' ,'advanture', 'advanture', 9);
INSERT INTO `gallery`(`titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`)
	VALUES ('Team work' ,'working together', 'teamwork', 10);