Auteurs
=======

-   <KADDAM Meryem>
-   <EL HAJJI Safae>

Jalon 4
=======

<description> 

Notre projet est intitulé "M & S", acronyme de "Movie & Serie" et qui coïncide avec les initiales de nos prénoms "Meryem & Safae".

On ce qui concerne les fonctionnalités attendus de ce jalon : 

On a réussi à :
                - Faire des routes publiques / routes protégées .
                - Remplir notre base de donnée ainsi que récupérer ces données pour remplir nos pages.
                - Créer compte utilisateur à l'aide d'un login, un email et un password (par la suite il peut modifier ses donnees).
                - Se connecter au site.
                - Voir et à Mettre à jour le profil (Avatar, nom, prenom, email, password, phone, date de naissance, quote).
                    -------->Pour le password, au cas où, il ne respecte pas les exigences ou bien il n'est pas identique à  "confirm password", il ne sera pas changé.
                - Consulter, rechercher et trier les médias disponibles, on a 5 critères de recherche :
                    --------> Titre : recherche par le titre d'un média.
                    --------> Acteur : recherche par le nom d'un acteur.
                    --------> Genre : recherche par genre (Crime, Drama, Action, ...)
                    --------> Movie : pour afficher tous les films dans le site.
                    --------> Serie : pour afficher tous les séries dans le site.
                - Marquer un média comme vu et l'ajouter à son historique.
                - Attribuer un "❤" à un média et l'ajouter à son favoris.
                - Créer une playlist ou bien d'Ajouter un média à une playlist qui existe déjà .
                - Consulter son historique (Historique triée par date) avec la possibilité de supprimer un film donnée de son historique.
                - Consulter son playlist avec la possibilité de supprimer une playlist ainsi que supprimer un film d'une playlist.
                - Consulter ses favoris avec la possibilité de supprimer un film donnée de son favoris.
                - Consulter les détails d'un média donnée.
                - Ajouter un commentaire à un média ainsi que supprimer ses commentaires.
                - Se déconnecter.
=========================================================================================================================================
                Depuis chaque page quelle soit "Historique, favoris, playlist", on peut à tout moment ajouter ou supprimer un média du "Historique, favoris, playlist" ainsi que afficher plus de détails sur un média donnée. 
=========================================================================================================================================

=========================================================================================================================================
La création, la modification, la suppression de tous ces fonctionnalités se font sans recharger la page (Voir JavaScript).
=========================================================================================================================================

Pour accéder à :
                - La page d'acceuil non connceté, le nom de la route est 'homedeco'
                - La page d'acceuil connecté, le nom de la route est 'homeco' (Vous devrez etre connecter pour acceder à cette page)
                - Sign In, le nom de la route est 'register'
                - Sign Up, d'acceuil le nom de la route est 'login'
                - Profile, le nom de la route est 'profile'  (Vous devrez etre connecter pour acceder à cette page)
                - Playlist, le nom de la route est 'playlist'  (Vous devrez etre connecter pour acceder à cette page)
                - History, le nom de la route est 'history'   (Vous devrez etre connecter pour acceder à cette page)
                - Favorite, le nom de la route est 'favorites' (Vous devrez etre connecter pour acceder à cette page)
                --------> (Pour voir tous les routes implémentées, consulter web.php).

=========================================================================================================================================

Malheureusement, 😔😔😔 ...
On n'a pas eu le temps pour ajouter les fonctionnalités suivantes :
                - Bloquer un compte utilisateur.
                - L'ajout des playlists automatiques.
                - S'abonner à une playlist d'un autre utilisateur.
                - Proposer une playlist de recommandation générée automatiquement sur la base de l'historique de visionnage de l'utilisateur connecté
                - Consulter tous les nouveaux commentaires qui n'ont pas encore été modérés.
                - Modérer un commentaire.
                - Signaler un utilisateur pour banissement éventuel par l'administrateur.
                - Bannir un utilisateur.
                - Promouvoir un utilisateur au rang de modérateur.
                - Supprimer le rôle de modérateur à un utilisateur.