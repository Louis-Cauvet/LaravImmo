# Larav'immo 🏠

>Projet final du cours de Laravel durant le S2 de 3èeme année de Bachelor Ingénierie du Web à l'ESGI Lyon
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

### Technologies ⚙️
Projet réalisé en **Laravel**, que je n'avais jusque-là jamais étudié ou utilisé. Le Front du site est réalisé avec le moteur de template **Blade**, du **Sass** et du **Vanilla JS**.

### Collaborateurs 👥
*Projet développé en totale autonomie*
- Louis Cauvet

### Prise en main du projet ⬇️
Une fois le projet chargé en local (pensez à indiquer les informations de votre base de données dans un .env), lancez votre serveur local PHP, puis exécutez ``php artisan migrate`` pour charger les tables dans la base de données, et ``php artisan db:seed`` pour y injecter les données par défaut définies dans les seeders de Laravel.

### Retour personnel sur ce projet 💭
Pour ce projet, j'ai fait le choix de faire une interface simple et épurée (mais évidemment responsive) pour me concentrer rapidement sur le développement des fonctionnalités.

Pour chaque soumission de formulaire j'effectue une vérificiation des données côté client avant de faire de même côté serveur, mais je pense qu'avec un peu plus de temps j'aurais également approfondir certaines fonctionnalités (comme envoyer des notifications par mail aux utilisateurs, ou la possibilité d'indiquer qu'il a oublié son mot de passe par exemple).

### Quelques images du projet 📷
