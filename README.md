# Sessions, Middlewares and TwoFactorAuthenticator in Laravel
Desarrollo de una app de prueba para el manejo de diferentes tipos de sesiones y utilización de middlewares al inicio de session, ademas del uso del TwoFactorAuthenticator **(Prueba Desarrollador)**

## Requerimiento de versiones
- Laravel: **9**

## Instalación App Laravel

Primero clonar este repositorio, instalar las dependencias y configurar tu archivo .env

```sh
git clone https://github.com/wilmertri/SessionMiddlewaresLaravel.git
cd SessionMiddlewaresLaravel
composer install
cp .env.example .env
```

Luego correr las migraciones y los seeders necesarios, se creara la base de datos

```sh
php artisan migrate --seed
```

## Usuario de prueba generado para autenticación

- Email: admin@gmail.com
- Password: password

## Instalación App JS

Ubicados en SessionMiddlewaresLaravel

```sh
npm install
```

## Compilar y correr servidor NPM para desarrollo
```sh
npm run serve
```

## Ejecución Aplicación
```
php artisan serve
```
