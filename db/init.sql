
CREATE TABLE `country` (
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `printable_name` varchar(80) NOT NULL,
  `printable_name_cn` varchar(80) DEFAULT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `post_code_rule` text,
  `telephone_rule` text,
  PRIMARY KEY (`iso`),
  KEY `country_name_idx` (`name`),
  KEY `country_printable_name_idx` (`printable_name`),
  KEY `country_iso3_idx` (`iso3`),
  KEY `country_numcode_idx` (`numcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `country` (`iso`, `name`, `printable_name`, `printable_name_cn`, `iso3`, `numcode`, `post_code_rule`, `telephone_rule`)
VALUES
  ('AF', 'AFGHANISTAN', 'Afghanistan', NULL, 'AFG', 4, NULL, NULL),
  ('AL', 'ALBANIA', 'Albania', NULL, 'ALB', 8, NULL, NULL),
  ('DZ', 'ALGERIA', 'Algeria', NULL, 'DZA', 12, NULL, NULL),
  ('AS', 'AMERICAN SAMOA', 'American Samoa', NULL, 'ASM', 16, NULL, NULL),
  ('AD', 'ANDORRA', 'Andorra', NULL, 'AND', 20, NULL, NULL),
  ('AO', 'ANGOLA', 'Angola', NULL, 'AGO', 24, NULL, NULL),
  ('AI', 'ANGUILLA', 'Anguilla', NULL, 'AIA', 660, NULL, NULL);
