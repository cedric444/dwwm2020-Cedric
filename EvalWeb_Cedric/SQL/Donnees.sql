INSERT INTO Eleves (idEleve, nomEleve, prenomEleve, classe) VALUES (NULL, "Durand", "Paul", "CP");
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve, classe) VALUES (NULL, "Dupond", "Charles", "CP");
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve, classe) VALUES (NULL, "Merise", "Cerise", "CE1");
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve, classe) VALUES (NULL, "Prévert", "Paul", "CE1");

INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, "Français");
INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, "Math");
INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, "Histoire");
INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, "Sciences");
INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, "EPS");

INSERT INTO Suivis (idSuivi, idMatiere, idEleve, note, coefficient) VALUES (NULL, 3, 1, 12, 3);
INSERT INTO Suivis (idSuivi, idMatiere, idEleve, note, coefficient) VALUES (NULL, 3, 2, 14, 3);
INSERT INTO Suivis (idSuivi, idMatiere, idEleve, note, coefficient) VALUES (NULL, 3, 3, 8, 3);
INSERT INTO Suivis (idSuivi, idMatiere, idEleve, note, coefficient) VALUES (NULL, 3, 4, 15, 3);

INSERT INTO Utilisateurs (idUtilisateur, login, nomUtilisateur, prenomUtilisateur, motDePasse, role, idMatiere) VALUES (NULL, "CamaraC", "Camara", "Catherine","test1", 1, 1);
INSERT INTO Utilisateurs (idUtilisateur, login, nomUtilisateur, prenomUtilisateur, motDePasse, role, idMatiere) VALUES (NULL, "DuvalH", "Duval", "Henry","test3", 2, 2);
INSERT INTO Utilisateurs (idUtilisateur, login, nomUtilisateur, prenomUtilisateur, motDePasse, role, idMatiere) VALUES (NULL, "TrompiB", "Trompi", "Bernard","test4", 2, 3);
INSERT INTO Utilisateurs (idUtilisateur, login, nomUtilisateur, prenomUtilisateur, motDePasse, role, idMatiere) VALUES (NULL, "MojileD", "Mojile", "Didier","test5", 2, 4);
INSERT INTO Utilisateurs (idUtilisateur, login, nomUtilisateur, prenomUtilisateur, motDePasse, role, idMatiere) VALUES (NULL, "LaloL", "Lalo", "Laurent","test6", 2, 5);