Auteurs
=======

-   <KADDAM Meryem>
-   <EL HAJJI Safae>

Jalon 1
=======

<description> 
On ce qui concerne les fonctionnalités attendus de ce Jalon : 

----> CRUD : 
    - On a réussi à :
       * Créer des medias grâce à un formulaire.
       * Afficher des médias avec leur nom, leur catégorie et leur image dans un tableau.
       * Mettre à jour les informations des médias.
       * Supprimer un média.
    
----> MCD : 
Pour cette partie, on a 3 entités : 

1- Media : qui représente les films, les séries, mangas, ..

2- Utilisateur : qui représente les utilisateurs de la plateforme avec comme attribut role(adiminstrateur, moderateur, normal)

3- ParticipantsFilm : qui représente les personnes ayant participé dans le média à savoir les acteurs et les directeurs(fonction)

On a décidé de séparer les utilisateurs et les personnes participantes dans le média, car il est fort probable qu'il y'ait beaucoup plus d'utilisateurs normaux que d'utilisateurs qui sont en meme temps des acteurs ou directeurs, et vu qu'a chaque fois qu'on actualise la page, on a un parcours de l'api pour retrieve les donnees des acteurs et utilisateurs, il serait moins consommant de parcourir la table des acteurs que de parcourir la table des utilisateurs qui est 100 fois plus large en donnée que celle des acteurs. 

Si on a des acteurs qui sont des utilisateurs, on pourra se permettre d'avoir des redondants dans la base de données tant qu'ils sont pas tres nombreux. Dans le cas contraire, on aura des jointures sur des tables tres larges, et ceci posera un probleme qu'on doit anticiper par la suite.

----> MLD :
On voit l'apparition de nouveaux tables : 

1- Suggestions qui représente les médias qui sont similaires aux autres médias.

2- Commentaire qui représente les commentaires des utilisateurs sur les médias.

3- Historique qui représente les médias visionnés par un utilisateur.

4- Playlist qui représente une liste de lecture où l'utilisateur peut ajouter des médias.

5- Participants qui représente les participants dans chaque média.
