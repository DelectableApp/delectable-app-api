# Verdandi API

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
# Lancer la migration et le seed de la base de données
php artisan migrate --seed
# Installer passeport pour l'oauth2
php artisan passport:install
# Lancer le projet sur le serveur de développment
php artisan serve --host=localhost
```
