# humidity

BackEnd of Humidity App

## Dependencias

-   Xampp with Apache And MySQL
-   PHP > 8.0
-   Composer

# Instalacion

Para instalar este backend en un ambiente de produccion debemos seguir los siguientes pasos:

-   Clonar repositorio
-   Abrir proyecto en consola de preferencia
-   Instalamos dependencias:

```bash
composer install
```

-   configuramos la base de datos y datos de acceso en el archivo .env

-   Generamos una clave

```bash
php artisan key:generate
```

-   Ejecutamos las migraciones

```bash
php artisan migrate:fresh --seed
```
