# forzevs

Manu projektu var palaist izmantojot programmu wampserver un ieliekot failus www direktorijā un pēc tam ieejot phpmyadmin ar lietotāju root un paroli '', pēc tam izveidoju datu bāzi ar apakšā norādīto sql kodu.

CREATE TABLE IF NOT EXISTS todolist
(
	ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	todo varchar(255) NOT NULL,
	date DATETIME NOT NULL,
	done int(11) NOT NULL
);
