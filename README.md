# forzevs

My project can be runed localy using application called Wampserver. And by adding files to the www directory in application installation folder, after that go to phpmyadmin panel by typing localhost/phpmyadmin in browsers search bar, there you can login by typing username 'root' and password '' after that create a database and add a table with the script bellow.

Manu projektu var palaist izmantojot programmu wampserver un ieliekot failus www direktorijā un pēc tam ieejot phpmyadmin ar lietotāju root un paroli '', pēc tam izveidoju datu bāzi ar apakšā norādīto sql kodu.

CREATE TABLE IF NOT EXISTS todolist
(
	ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	todo varchar(255) NOT NULL,
	date DATETIME NOT NULL,
	done int(11) NOT NULL
);
