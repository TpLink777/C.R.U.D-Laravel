# CRUD Básico con Laravel 12

¡Bienvenido al proyecto CRUD básico con Laravel 12! Para que puedas iniciar correctamente el proyecto, por favor sigue los siguientes pasos.

## Paso 1: Clonar el repositorio

Primero, debes clonar el repositorio con el siguiente comando:

```bash
git clone <URL DEL REPOSITORIO>
Paso 2: Instalar dependencias de PHP
Una vez clonado el repositorio, dirígete a la carpeta del proyecto y en la consola ejecuta:

bash
Copiar
composer install
Este comando instalará todas las dependencias de PHP definidas en el archivo composer.json.

Paso 3: Instalar dependencias de Node.js
Luego, necesitamos instalar todas las dependencias de Node.js. Para esto, usa el siguiente comando:

bash
Copiar
npm install
Paso 4: Configurar el archivo .env
Después de clonar el repositorio, se generará un archivo .env.example. Necesitas renombrarlo a .env y configurarlo según tus necesidades. Puedes hacerlo con el siguiente comando en la terminal:

bash
Copiar
mv .env.example .env
Paso 5: Generar la clave de la aplicación
Laravel no crea automáticamente una clave de aplicación cuando clonas el proyecto. Para generarla, ejecuta el siguiente comando:

bash
Copiar
php artisan key:generate
Paso 6: Configurar la base de datos
Configura la conexión a tu base de datos en el archivo .env ajustando las siguientes variables:

DB_CONNECTION

DB_HOST

DB_PORT

DB_DATABASE

DB_USERNAME

DB_PASSWORD

Paso 7: Migrar las tablas
Una vez que la base de datos esté configurada, debes ejecutar las migraciones de Laravel con el siguiente comando:

bash
Copiar
php artisan migrate
Este comando migrará todas las tablas a la base de datos configurada.

Paso 8: Ejecutar el servidor
Finalmente, ejecuta el servidor de desarrollo con el siguiente comando:

bash
Copiar
php artisan serve
El servidor estará disponible en http://127.0.0.1:8000.

¡Eso es todo! Con estos pasos ya deberías poder correr el proyecto en tu máquina local.
