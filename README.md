# Configuration / Installation en local

Telecharger le gestionnaire de dépendances PHP composer https://getcomposer.org/Composer-Setup.exe
Telecharger et installer un serveur PHP en local

Telecharger le projet ici https://github.com/Nephilim237/has.git

Placer le projet a la racine de votre serveur
Ouvrir le dossier has en ligne de commandes
Executer les commandes suivantes

1. composer install
2. php bin/console doctrine:database:create pour créer la base des données
3. php bin/console make:migration pour modeliser la base des données
4. php bin/console doctrine:fixtures:load pour créer un utilisateur administrateur en BDD

Démarrer ensuite le serveur et se rendre sur la page d'accueil

Routes

/admin pour le tableau de bord ( Uniquement pour les administrateurs)
