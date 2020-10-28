1. SELECT nomHotel as "nom de l'hôtel", villeHotel as "ville de l'hôtel" FROM hotels

2. SELECT CONCAT(nomClient," ", prenomClient) as "nom du client", adresseClient as "adresse", villeClient as "ville" FROM clients WHERE nomClient = "white"

3. SELECT nomStation as "nom de la station", altitudeStation as "altitude de la station" FROM stations WHERE altitudeStation < 1000

4. SELECT numChambre as "numéro de la chambre", capaciteChambre as "capacité de la chambre" FROM chambres WHERE capaciteChambre > 1

5. SELECT nomClient as "nom du client", villeClient as "ville" FROM clients WHERE villeClient NOT IN ("londres")

6. SELECT nomStation as "nom de la station", nomHotel as "nom de l'hôtel", categorieHotel as "catégorie", villeHotel as "ville de l'hôtel" FROM hotels INNER JOIN stations ON hotels.idStation = stations.idStation

7. SELECT numChambre as "numéro de la chambre", nomHotel as "nom de l'hôtel", categorieHotel as "catégorie", villeHotel as "ville de l'hôtel" FROM chambres INNER JOIN hotels ON chambres.idHotel = hotels.idHotel

8. SELECT nomClient as "nom du client", dateReservationSejour as "date de réservation", dateDebutSejour as "date de début de séjour", dateFinSejour as "date de fin de séjour" FROM reservations INNER JOIN clients WHERE reservations.idClient = clients.idClient

9. SELECT numChambre as "numéro de la chambre", nomHotel as "nom de l'hôtel", nomStation as "nom de la station" FROM chambres INNER JOIN hotels ON chambres.idHotel = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation

10. SELECT chambres.numChambre as "numéro de la chambre", hotels.nomHotel as "nom de l'hôtel", hotels.categorieHotel as "catégorie", hotels.villeHotel as "ville de l'hôtel", chambres.capaciteChambre as "capacité de la chambre" FROM chambres INNER JOIN hotels ON chambres.idHotel = hotels.idHotel WHERE chambres.capaciteChambre > 1 AND hotels.villeHotel = "bretou"

11. SELECT nomStation as "nom de la station", COUNT(*) as "nombre de chambres" FROM hotels INNER JOIN stations ON hotels.idStation = stations.idStation GROUP BY nomStation

12. SELECT nomStation as "nom de la station", COUNT(*) FROM chambres INNER JOIN hotels ON chambres.idHotel = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation GROUP BY nomStation

13. SELECT stations.nomStation as "nom de la station", COUNT(*) FROM chambres INNER JOIN hotels ON chambres.idHotel = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation WHERE chambres.capaciteChambre > 1 GROUP BY stations.nomStation

14. SELECT nomHotel as "nom de l'hôtel" FROM hotels INNER JOIN chambres ON hotels.idHotel = chambres.idHotel INNER JOIN reservations ON chambres.idChambre = reservations.IdChambre INNER JOIN clients ON reservations.idClient = clients.idClient WHERE clients.nomClient = "squire"

15. SELECT nomStation as "nom de la station", ROUND(AVG(dateFinSejour - dateDebutSejour), 2) FROM reservations INNER JOIN chambres ON reservations.IdChambre = chambres.IdChambre INNER JOIN hotels ON chambres.idHotel = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation GROUP BY nomStation

16. CREATE VIEW StationChambre AS SELECT stations.*, hotels.nomHotel, hotels.categorieHotel, hotels.adresseHotel, hotels.villeHotel, chambres.IdChambre, chambres.numChambre, chambres.typeChambre, chambres.capaciteChambre FROM stations INNER JOIN hotels ON stations.idStation = hotels.idStation INNER JOIN chambres ON hotels.idHotel = chambres.idHotel

17. CREATE VIEW StationChambreLeft as SELECT stations.*, hotels.nomHotel, hotels.categorieHotel, hotels.adresseHotel, hotels.villeHotel, chambres.IdChambre, chambres.numChambre, chambres.typeChambre, chambres.capaciteChambre FROM stations LEFT JOIN hotels ON stations.idStation = hotels.idHotel LEFT JOIN chambres ON hotels.idHotel = chambres.idHotel

18. ALTER TABLE reservations ADD archive

19. DELIMITER |
CREATE PROCEDURE archivage() 
    BEGIN 
        UPDATE reservations SET archive = "oui" WHERE dateFinSejour < NOW(); 
    END
    |
DELIMITER ;