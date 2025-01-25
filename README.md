# CRUD de Productos - Backend

Este proyecto es el backend de una aplicación CRUD para gestionar productos. Permite crear, actualizar, ver y eliminar productos.

## Tecnologías Utilizadas

- Lenguaje de Programación: PHP
- Framework: [Laravel](https://laravel.com/)
- Base de Datos: MySQL

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalados los siguientes programas:

- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://dev.mysql.com/downloads/installer/)
- [Git](https://git-scm.com/downloads)

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/Tellezk9/Crud_producto_backend.git
2. Navega hasta el proyecto
    ```bash
    cd Crud_producto_backend
3. Instala las dependencias de PHP usando Composer:
    ```bash
    composer install
4. Abre el archivo .env y configura la conexión a la base de datos:
    ```bash
    env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_contraseña
5. Genera la clave de la aplicación:
    ```bash
    php artisan key:generate
6. Ejecuta las migraciones para crear las tablas en la base de datos:
    ```bash
    php artisan migrate
## Ejecución
1. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
2. Abre tu navegador y ve a
    ```bash
    http://localhost:8000

## Endpoints de la API
- GET /api/products: Obtener todos los productos.

- GET /api/products/{id}: Obtener un producto por ID.

- POST /api/products: Crear un nuevo producto.

- PUT /api/products/{id}: Actualizar un producto por ID.

- DELETE /api/products/{id}: Eliminar un producto por ID.

## Validaciones
El nombre no debe estar vacío.

El precio debe ser mayor a cero.

La cantidad debe ser un número entero