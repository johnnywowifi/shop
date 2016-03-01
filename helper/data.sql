USE `esletzbichler_shop`;
START TRANSACTION;
INSERT INTO `esletzbichler_shop`.`user` (`id`, `username`, `email`, `password`) VALUES (DEFAULT, 'susi', 'susi@example.com', '1234');
INSERT INTO `esletzbichler_shop`.`category` (`id`, `categoryname`, `description`) VALUES (DEFAULT, 'Holz', 'Ein schönes Holzeldorado für Sie!');
INSERT INTO `esletzbichler_shop`.`category` (`id`, `categoryname`, `description`) VALUES (DEFAULT, 'Eisen', 'Die schöne harte Glitzerwelt');
INSERT INTO `esletzbichler_shop`.`product` (`id`, `productname`, `description`, `price`, `category_id`) VALUES (DEFAULT, 'Tisch', 'Ein schönes Vierbein', 300.23, 1);
INSERT INTO `esletzbichler_shop`.`product` (`id`, `productname`, `description`, `price`, `category_id`) VALUES (DEFAULT, 'Sessel', 'Mit schöner hoher Lehne', 100.18, 1);
INSERT INTO `esletzbichler_shop`.`product` (`id`, `productname`, `description`, `price`, `category_id`) VALUES (DEFAULT, 'Skulptur', 'Schön, glitzernd Formvollendet', 2345.23, 2);
COMMIT;