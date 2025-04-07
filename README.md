<h1>Crud basico con Laravel 12!</h1>
<p>para que te inicie correctamente el proyecto por favor sigue paso a paso las siguientes lines.</p>

<h2>Paso 1</h2>
<p>pirmero debes de clonar el repositorio con el comando git clone y la ruta de este repositorio </p>

<h2>Paso 2</h2>
<p>al tener ya clonado el repositorio nos dirigimos a la carapeta y en la consola ejecutamos composer install,Este comando instalará todas las dependencias definidas </p>

<h2>Paso 3</h2>
<p>al ya tener instalasdas todas las dependencias de laravel necesitamos intsalr todas las de Node.js para esto usamos el comando npm install </p>

<h2>Paso 4</h2>
<p>luego debemos de configurar del archivo .env por defecto al clonarlo te aparecera como .env.example quitale el 'example'</p>

<h2>Paso 5</h2>
<p>laravel al clonar el repositorio no te crea ua clave de aplicacion por lo cual debemos crearla de esta manrera php artisan key:generate</p>

<h2>Paso 6</h2>
<p>luego debemos de configurar en el archivo .env la coneccion ala base de datos</p>


<h2>Paso 7</h2>
<p>luego de tener configurado el esquema para crear la base de datos en .env debemos migrar todas sus tablas con el comando php artisan migrate </p>

<h2>Paso 8</h2>
<p>y como ultimo paso solo queda correr el servidor con 'php artisan serve'</p>
