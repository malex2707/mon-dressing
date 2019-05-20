# Mon Dressing

## Installation

Récupérer les dépendances PHP
```shell
composer install
```

Créer la base de données
```shell
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

Charger les données de test
```shell
php bin/console doctrine:fixtures:load
```

Démarrer le serveur
```shell
php bin/console server:run
```