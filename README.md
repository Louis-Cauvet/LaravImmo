# Larav'immo 🏠

>Projet final du cours de Laravel durant le S2 de 3èeme année de Bachelor Ingénierie du Web à l'ESGI Lyon

</br></br>
### Objectif 🎯
L'objectif de ce projet est de concevoir et développer, à l'aide des connaissances de base en Laravel abordées durant le cours, un site fictif d'agence immobilière, proposant plusieurs fonctionnalités aux utilisateurs :
- Consulter tous les biens immobiliers disponibles
- Filter sa recherche de bien immobilier selon plusieurs critères (type de bien, mots clés, ville, prix maximum...)
- Consulter le détail d'un bien (caroussel de photos, surface, détail des pièces, neuf ou non, présence d'un garage ou d'un terrain, localisation sur Maps...)
- Envoyer une demande de contact qui concerne un bien qui lui plaît (ou bien une demande de contact plus générale)
- Enregistrer sa recherche dans son compte pour pouvoir la relancer facilement plus tard (nécéssite d'être connecté à son compte)
- Enregistrer un bien dans ses favoris, afin de le retrouver depuis son compte et recevoir des notifications le concernant (nécéssite d'être connecté à son compte)
- Proposer un nouveau bien immobilier sur le site, en renseignant tous les critères nécéssaires (nécéssite d'être connecté à son compte)
- Créer son compte et pouvoir s'y connecter pour consulter ses notifications, ses biens favoris, ses recherches enregistrées ou modifier ses informations personnelles

De plus , il existe un deuxième type d'utilisateur possédant un compte, les administrateurs du site.
Ces derniers doivent également avoir la possibilité d'accéder à leur interface admin pour :
- Consulter les demandes de contact envoyées par les autres utilisateurs
- Gérer tous les biens immobiliers (les rendre disponible ou non, les supprimer), et consuler la liste des utilisateurs qui ont ajouté chaque bien en favori
- Consulter la liste de tous les utilisateurs possédant un compte, et pouvoir leur envoyer une notification de manière individuelle
- Modifier ses informations personnelles

</br></br>
### Technologies ⚙️
Projet réalisé en **Laravel**, que je n'avais jusque-là jamais étudié ou utilisé. Le Front du site est réalisé avec le moteur de template **Blade**, du **Sass** et du **Vanilla JS**.

</br></br>
### Collaborateurs 👥
*Projet développé en totale autonomie*
- Louis Cauvet

</br></br>
### Prise en main du projet ⬇️
Une fois le projet chargé en local (pensez à indiquer les informations de votre base de données dans un fichier ".env"), lancez votre serveur local PHP, puis exécutez ``php artisan migrate`` pour charger les tables dans la base de données, et ``php artisan db:seed`` pour y injecter les données par défaut définies dans les seeders de Laravel.

Un compte admin de test est crée par défaut dans la base de données, vous pouvez l'utiliser pour tester les fonctionnalités des admins. Son adresse mail est 'admin@laravimmo.com' et son mot de passe est 'admin123!'.

**Remarque** : Si vous souhaitez accéder à la localisation sur la carte Maps d'un bien immobilier lorsque vous allez sur sa page de détail, définissez votre clé d'API Google Maps dans le fichier ".env" de la manière suivante : ``GOOGLE_MAPS_API_KEY=Votre_clé_d'API``.

</br></br>
### Retour personnel sur ce projet 💭
Pour ce projet, j'ai fait le choix de faire une interface simple et épurée (mais évidemment responsive) pour me concentrer rapidement sur le développement des fonctionnalités.

Pour chaque soumission de formulaire j'effectue une vérificiation des données côté client avant de faire de même côté serveur, mais je pense qu'avec un peu plus de temps j'aurais également approfondir certaines fonctionnalités (comme envoyer des notifications par mail aux utilisateurs, ou la possibilité d'indiquer qu'il a oublié son mot de passe par exemple).


</br></br>
### Quelques images du projet 📷
![Haut de la page d'accueil](https://github.com/Louis-Cauvet/Captures-des-projets/blob/main/Larav'immo/capture1.png)
</br></br>
![Bas de la page d'accueil](https://github.com/Louis-Cauvet/Captures-des-projets/blob/main/Larav'immo/capture2.png)
</br></br>
![Carrousel de photos d'un bien](https://github.com/Louis-Cauvet/Captures-des-projets/blob/main/Larav'immo/capture3.png)
</br></br>
![Détail d'un bien](https://github.com/Louis-Cauvet/Captures-des-projets/blob/main/Larav'immo/capture4.png)
</br></br>
![Compte client](https://github.com/Louis-Cauvet/Captures-des-projets/blob/main/Larav'immo/capture5.png)
</br></br>
![Demandes de contact sur le compte admin](https://github.com/Louis-Cauvet/Captures-des-projets/blob/main/Larav'immo/capture6.png)
</br></br>
![Gestion des biens et des clients sur le compte admin](https://github.com/Louis-Cauvet/Captures-des-projets/blob/main/Larav'immo/capture7.png)

