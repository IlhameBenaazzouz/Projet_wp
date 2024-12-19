# Mon Site WordPress Perle D'amour

## Description
Ce projet est un site WordPress développé en local, spécialement conçu pour la vente en ligne d’accessoires. Il propose une interface intuitive pour naviguer parmi une large gamme d’articles, allant des bijoux et montres  et autres accessoires tendance. Le site offre des fonctionnalités clés comme la gestion des produits, le suivi des commandes, et l’intégration de méthodes de paiement sécurisées, le tout avec un design moderne et responsive.


---

## Installation
Pour installer et exécuter ce site en local, suivez les étapes ci-dessous :

### Prérequis
- Un serveur local ( **XAMPP**).
- PHP (version compatible avec WordPress).
- MySQL .

### Étapes
1. **Copiez les fichiers du site** :
   - Placez tous les fichiers WordPress dans le dossier du serveur local (par exemple, `htdocs` pour XAMPP ou `www` pour WAMP).
   - Assurez-vous que le dossier contient :
     - Les fichiers WordPress principaux.
     - Le dossier `wp-content` avec vos thèmes, plugins et médias.

2. **Importez la base de données** :
   - Ouvrez [phpMyAdmin](http://localhost/phpmyadmin).
   - Créez une nouvelle base de données (`P_ecommerce`).
   - Importez le fichier `database.sql` fourni dans cette base.

3. **Configurez `wp-config.php`** :
   - Modifiez les informations de connexion à la base de données dans le fichier `wp-config.php` :
     ```php
     define('DB_NAME', 'P_ecommerce );
     define('DB_USER', 'root');
     define('DB_PASSWORD', '');
     define('DB_HOST', 'localhost');
     ```
   - Enregistrez les modifications.

4. **Accédez au site** :
   - Lancez votre serveur local.
   - Ouvrez votre navigateur et accédez à `http://localhost/MonSITE`.

---

## Identifiants administrateur
- **Nom d'utilisateur** : admin
- **Mot de passe** : ilhame123

---

## Fonctionnalités
- Gestion des produits.
- Intégration des paiements.
- Interface utilisateur responsive.
