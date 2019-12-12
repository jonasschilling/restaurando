INSERT INTO `request` (`reqNumber`, `role`, `reqname`, `email`, `restaurant`, `adress`, `request`) VALUES
(1, 'Kunde', 'Jonas Schilling', 'jonas.schilling@sap.com', '-', '-', 'Test-Kundenanliegen 01'),
(2, 'Restaurantbesitzer', 'Thomas Kötzer', 'office@riggs-burger.com', 'Riggs Burger', 'Gottlieb-Daimler-Straße 2, 88214 Ravensburg', 'Bitte fügen Sie das Restaurant bei restaurando hinzu.\r\n\r\nDanke!'),
(3, 'Kunde', 'Schmidt', 'schmidt@gmx.de', '-', '-', 'Test-Kundenanliegen 02'),
(4, 'Restaurantbesitzer', 'Wolfgang Kimpfler', 'info@ochsen-rv.de', 'Gasthof Ochsen', 'Burgstrasse 1-3, 88212 Ravensburg', 'Bitte nehmen Sie mein Restaurant in Ihrer Website auf.'),
(5, 'Kunde', 'Wolfgang Kimpfler', 'info@ochsen-rv.de', '-', '-', 'Ich bin nicht zufrieden mit der Seite meines Restaurants.\r\nBitte überarbeiten Sie diese.'),
(6, 'Kunde', 'Schmidt', 'schmidt@gmx.de', '-', '-', 'Wann wird der McDonalds Ravensburg hinzugefügt?'),
(7, 'Kunde', 'Wolfgang Kimpfler', 'info@ochsen-rv.de', '-', '-', 'balafioewnfüo');

-----------------------------------------------------------

INSERT INTO `reservation` (`resNumber`, `restaurant`, `resName`, `resDate`, `resTime`, `amountPers`) VALUES
(1, 'QMUH Ravensburg', 'Schilling', '2019-12-26', '11:30:00', 4),
(2, 'QMUH Ravensburg', 'Müller', '2019-11-13', '09:10:00', 15),
(3, 'Wirtshaus Mohren', 'Hanssen', '2019-12-25', '15:00:00', 4),
(4, 'Wirtshaus Mohren', 'Schilling', '2020-01-05', '18:00:00', 6),
(5, 'QMUH Ravensburg', 'Schilling', '2020-01-12', '19:00:00', 4),
(6, 'QMUH Ravensburg', 'Maier', '2020-01-12', '15:30:00', 6),
(7, 'QMUH Ravensburg', 'Schmidt', '2020-02-02', '20:00:00', 5),
(8, 'QMUH Ravensburg', 'Koch', '2020-02-02', '19:30:00', 6),
(9, 'Wirtshaus Mohren', 'Wolf', '2020-01-24', '17:30:00', 8),
(10, 'Wirtshaus Mohren', 'Klein', '2020-02-16', '16:30:00', 3),
(11, 'QMUH Ravensburg', 'Schmitt', '2020-02-15', '20:00:00', 2),
(12, 'Wirtshaus Mohren', 'Bauer', '2020-02-21', '20:30:00', 4),
(13, 'Wirtshaus Mohren', 'Schneider', '2020-03-15', '16:15:00', 6),
(14, 'Wirtshaus Mohren', 'Zimmermann', '2020-01-31', '18:00:00', 7),
(15, 'Wirtshaus Mohren', 'Schwarz', '2020-01-31', '18:30:00', 7),
(16, 'QMUH Ravensburg', 'Braun', '2020-01-15', '18:15:00', 4),
(17, 'Wirtshaus Mohren', 'Richter', '2020-01-15', '19:30:00', 2),
(18, 'Wirtshaus Mohren', 'Richter', '2020-03-19', '19:30:00', 2),
(19, 'QMUH Ravensburg', 'Hofmann', '2020-03-05', '18:00:00', 6),
(20, 'QMUH Ravensburg', 'Koch', '2020-02-09', '11:30:00', 4),
(21, 'Wirtshaus Mohren', 'Koch', '2020-02-16', '11:30:00', 5),
(22, 'QMUH Ravensburg', 'Schilling', '2020-02-16', '18:30:00', 4),
(23, 'QMUH Ravensburg', 'Klein', '2020-04-12', '20:00:00', 6),
(24, 'Wirtshaus Mohren', 'Schilling', '2019-12-11', '20:30:00', 2),
(25, 'QMUH Ravensburg', 'Bauer', '2019-12-10', '19:30:00', 4),
(26, 'Asien Palast', 'Klein', '2020-04-12', '19:30:00', 4),
(27, 'Asien Palast', 'Lukas Fink', '2019-12-12', '13:00:00', 15),
(28, 'QMUH Ravensburg', 'Jonas Schilling', '2019-12-17', '19:30:00', 0),
(29, 'Asia World', 'Birkhofer', '2019-12-20', '17:30:00', 4),
(30, 'Asia World', 'Herrmann', '2020-03-10', '20:30:00', 4),
(31, 'Asia World', 'Schmidt', '2020-01-01', '14:00:00', 2),
(32, 'Asia World', 'Schneider', '2020-01-02', '14:30:00', 4),
(33, 'Asia World', 'Klein', '2020-01-03', '15:00:00', 5),
(34, 'Asia World', 'Bauer', '2020-01-04', '15:30:00', 4),
(35, 'Asia World', 'Bauer', '2020-01-06', '16:00:00', 4),
(36, 'Asia World', 'Birkhofer', '2020-01-12', '17:30:00', 2),
(37, 'Asia World', 'Herrmann', '2020-02-04', '20:00:00', 2),
(38, 'Asia World', 'Kimpfler', '2020-02-17', '19:30:00', 8),
(39, 'Asia World', 'Zimmermann', '2020-02-01', '20:00:00', 6),
(40, 'Asia World', 'Ehrenmann', '2019-12-22', '19:30:00', 8),
(41, 'Asia World', 'Berlet', '2020-03-13', '19:30:00', 10),
(42, 'Asia World', 'Kötzer', '2020-03-06', '20:30:00', 4),
(43, 'Asia World', 'Templin', '2019-12-13', '19:30:00', 2),
(44, 'Einstein', 'Müller', '2019-12-20', '19:30:00', 2),
(45, 'Forelle', 'Klein', '2020-02-12', '15:30:00', 4),
(46, 'Gleis 9', 'Bochtler', '2019-12-22', '14:30:00', 2),
(47, 'Il Podio', 'Templin', '2019-12-18', '15:30:00', 8),
(48, 'Il Podio', 'Klein', '2019-12-26', '15:30:00', 2),
(49, 'Asien Palast', 'Groß', '2019-12-27', '16:30:00', 5),
(50, 'Gleis 9', 'Schneider', '2019-12-27', '14:30:00', 4),
(51, 'Bellavista', 'Bauer', '2019-12-26', '16:30:00', 6),
(52, 'lukullum', 'Schilling', '2020-02-09', '18:30:00', 4),
(53, 'sWirtshaus', 'Schmidt', '2020-03-15', '19:30:00', 6),
(54, 'sWirtshaus', 'Kimpfler', '2019-12-25', '16:30:00', 3),
(55, 'Spicy Grill', 'Ehrenmann', '2020-03-15', '17:30:00', 4),
(56, 'QMUH Ulm', 'Schilling', '2020-03-04', '18:00:00', 5),
(57, 'Einstein', 'Olssen', '2019-12-20', '14:30:00', 6),
(58, 'losteria', 'Fink', '2019-12-28', '18:00:00', 4),
(59, 'Forelle', 'Schuhmacher', '2019-12-31', '19:30:00', 6),
(60, 'konyasushi', 'Takahashi', '2019-12-31', '20:00:00', 2),
(61, 'sWirtshaus', 'Schmidt', '2019-12-23', '17:30:00', 5),
(62, 'Spicy Grill', 'Schilling', '2020-01-12', '13:30:00', 4),
(63, 'Einstein', 'Peters', '2019-12-25', '14:00:00', 4),
(64, 'lukullum', 'Bauer', '2019-12-26', '15:00:00', 6);

-- --------------------------------------------------------

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

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqNumber`);

--
-- Indizes für die Tabelle `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`resNumber`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `request`
--
ALTER TABLE `request`
  MODIFY `reqNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `reservation`
--
ALTER TABLE `reservation`
  MODIFY `resNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
