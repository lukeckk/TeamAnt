DROP TABLE IF EXISTS `User`;

CREATE TABLE IF NOT EXISTS `User` (
                                      `name` varchar(100),
    `email` varchar(100),
    `cohort` int(3),
    `status` varchar(100),
    `roles` varchar(255),
    `visibility` boolean
    );

INSERT INTO `User` (`name`,`email`,`cohort`,`status`,`roles`,`visibility`)
VALUES
    ('Brenden Haskins','thesituation@greenriver.edu','19','Seeking Job','Janitor, Sign Flipper, Mailman', TRUE),
    ('Johnaton Doeseph','doeseph.johnaton@greenriver.edu','18','Seeking Internship','Front-end Designer, Web Developer', TRUE),
    ('Baron Trump','trumpbaron@greenriver.edu','18','Seeking Internship','Systems Programmer', TRUE),
    ('John Cena','cenajohn@greenriver.edu','18','Seeking Internship','Stealth Operations Specialist', TRUE),
    ('Jeremy Spoken','spokenjeremy@greenriver.edu','20','Not Actively Searching','Principal Software Engineer',TRUE);
