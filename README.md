##restaurando
Web Programmierung DHBW Ravensburg WWI118

##Dokumentation
Die Web-Applikation ermÃ¶glicht dem Nutzer einen Tisch in einem der Partner-Restaurants in 
verschiedenen StÃ¤dten zu reservieren.

####Technologies
Die Web-Applikation verwendet folgende Technologien:
The web-application uses the following technology stack:

- HTML, CSS, Javascript
- Frameworks (client-side): Bootstrap
- PHP 
- MySQL Database
#####Vorbedingungen und Installation
Die folgenden Vorbedingungen werden benötigt um die Website erfolgreich zum Laufen zu bringen:

1. 	xampp installieren
2. 	Apache und MySQL-Server über xampp Control Panel starten
3.	Backend vorbereiten
		1.	Apache Document-Root und Directory auf Projektpfad umstellen:
		2.	Bei xampp >> Apache >> Konfig >> Document-Root (Zeile 252) auf Projektpfad (z.B. "C:/users/*username*/git/restaurando") und Directory (Zeile 253) auf Projektpfad ändern.
		3.	Apache Server stoppen und neu starten
		4.	Bei xampp >> MySQL >> Admin
			(Browser mit phpmyadmin öffnet sich)
			Datenbank erzeugen: phpmyadmin >> SQL >> *SQL-Datei database_restaurando.sql aus dem github repository einfügen*
		5.	phpmyadmin neu laden
		6.	restaurando Datenbank wurde angelegt
		7.	Datensätze einfügen: phpmyadmin >> SQL >> *SQL-Datei values.sql aus dem github repository einfügen* (evtl. müssen die Datensätze pro Tabelle separat eingefügt werden)
3.	Im Browser *localhost* eingeben --> man sollte jetzt auf die Startseite (index.html) geleitet werden (alternativ auch xampp >> Apache >> Admin)
