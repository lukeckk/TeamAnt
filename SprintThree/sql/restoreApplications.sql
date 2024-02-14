DROP TABLE IF EXISTS `Application`;

CREATE TABLE IF NOT EXISTS `Application` (
                                             `date` DATE,
                                             `title` varchar(100),
    `status` varchar(100),
    `visibility` boolean
    );

INSERT INTO `Application` (`date`,`title`,`status`,`visibility`)
VALUES
    ('2024-02-14','Amazon','Pending',TRUE),
    ('2024-02-10','Netflix','Pending',TRUE),
    ('2024-02-10','Consumer Softproducts','Pending',TRUE),
    ('2024-02-05','Umbrella Corp','Pending',TRUE),
    ('2024-02-01','Meta','Rejected',TRUE);
