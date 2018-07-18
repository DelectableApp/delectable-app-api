# Délectable API

## Installation

```bash
# Cloner le repo en local
git clone https://github.com/DelectableApp/delectable-app-api.git
cd delectable-app-api
# Configurer git flow en local
git flow init
# Copier et renommer le fichier .env.example en .env
# Installer le projet et ses dépendances
composer install
# Génerer une clé
php artisan key:generate
# Lancer la migration et le seed de la base de données (mise a jour !!! cf : ligne de commande) 
php artisan migrate --seed
# Installer passeport pour l'oauth2
php artisan passport:install
# Lancer le projet sur le serveur de développment
php artisan serve --host=localhost
```

## Lignes de commande
```bash
# Le lancement de la migration nessessite desormais deux étapes(cause : classement en sous dossier)
# La première effectue les migrations générales des tables oauth et la seconde effectue celles des sous dossiers.
php artisan migrate:fresh && php artisan migrate --path="database/migrations/*" --seed && php artisan passport:install
# Lancer les tests
./vendor/bin/phpunit
```
