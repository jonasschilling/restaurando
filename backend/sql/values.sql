INSERT INTO `reservation` (`resNumber`, `restaurant`, `resName`, `resDate`, `resTime`, `amountPers`) VALUES
(1, 'QMUH Ravensburg', 'Schilling', '2019-12-26', '11:30:00', 4),
(2, 'QMUH Ravensburg', 'Müller', '2019-11-13', '09:10:00', 15),
(3, 'Wirtshaus Mohren', 'Hanssen', '2019-12-25', '15:00:00', 4),
(4, 'Wirtshaus Mohren', 'Schilling', '2020-01-05', '18:00:00', 6),
(5, 'QMUH Ravensburg', 'Schilling', '2020-01-12', '19:00:00', 4);

-----------------------------------------------------------

INSERT INTO `user` (`username`, `userpassword`, `admin`) VALUES
('admin', 'webpr2019', 'X'),
('Asia World', 'asiaworld123', ''),
('Asien Palast', 'asienpalast123', ''),
('Bellavista', 'bellavista123', ''),
('Einstein', 'einstein123', ''),
('Forelle', 'forelle123', ''),
('Gleis 9', 'gleis9123', ''),
('Il Podio', 'ilpodio123', ''),
('joti', 'webpr2019', 'X'),
('Konyasushi', 'konyasushi123', ''),
('Losteria', 'losteria123', ''),
('Lukullum', 'lukullum123', ''),
('QMUH Ravensburg', 'qmuhrv123', ''),
('QMUH Ulm', 'qmuhulm123', ''),
('Spicy Grill', 'spicygrill123', ''),
('sWirtshaus', 'swirtshaus123', ''),
('Wirtshaus Mohren', 'mohren123', '');

-----------------------------------------------------------

INSERT INTO `request` (`reqNumber`, `role`, `reqname`, `email`, `restaurant`, `adress`, `request`) VALUES
(1, 'Kunde', 'Jonas Schilling', 'jonas.schilling@sap.com', '-', '-', 'Test-Kundenanliegen 01'),
(2, 'Restaurantbesitzer', 'Thomas Kötzer', 'office@riggs-burger.com', 'Riggs Burger', 'Gottlieb-Daimler-Straße 2, 88214 Ravensburg', 'Bitte fügen Sie das Restaurant bei restaurando hinzu.\r\n\r\nDanke!'),
(3, 'Kunde', 'Schmidt', 'schmidt@gmx.de', '-', '-', 'Test-Kundenanliegen 02'),
(4, 'Restaurantbesitzer', 'Wolfgang Kimpfler', 'info@ochsen-rv.de', 'Gasthof Ochsen', 'Burgstrasse 1-3, 88212 Ravensburg', 'Bitte nehmen Sie mein Restaurant in Ihrer Website auf.'),
(5, 'Kunde', 'Wolfgang Kimpfler', 'info@ochsen-rv.de', '-', '-', 'Ich bin nicht zufrieden mit der Seite meines Restaurants.\r\nBitte überarbeiten Sie diese.'),
(6, 'Kunde', 'Schmidt', 'schmidt@gmx.de', '-', '-', 'Wann wird der McDonalds Ravensburg hinzugefügt?'),
(7, 'Kunde', 'Wolfgang Kimpfler', 'info@ochsen-rv.de', '-', '-', 'balafioewnfüo');