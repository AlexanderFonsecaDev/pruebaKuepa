# PRUEBA DESARROLLADOR FULL STACK JAVASCRIPT

Este proyecto está hecho con laravel 7 y vue. Para poder utilizarlo es necesario tener instaladas las siguientes dependencias: 


- PHP >= 7.2.5
- <a href="https://getcomposer.org/">Composer</a>
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mb1string PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- <a href="https://nodejs.org/es/">Node.js</a>

El entorno de desarrollo que se utilizó para este proyecto es <a href="https://laragon.org/download/index.html">LARAGON</a> el cual ya viene con toda la dependencia necesaria para comenzar a desarrollar. Es el que se recomienda utilizar para la prueba, aunque cualquier otro entrono de desarrollo que tenga todas las dependencias anteriormente mencionadas podrá correr la aplicación.

## Como correr la aplicación  
1. Primero debemos copiar el archivo .env.example y renombrarlo como .env.Lo pegamos en la carpeta raíz del proyecto
2. Abrimos una terminal dentro de la raíz del proyecto.  
3. Luego ejecutamos el siguiente comando composer install --optimize-autoloader --no-dev
4. Una vez termine de instalarse nuestras dependencias ejecutamos el comando php artisan key:generate
5. Después debemos instalar nuestras dependencias para vue atrás ves del comando npm install && run dev
6. Creamos una base de datos con el nombre kuepachat. Para este proyecto se usó una base de datos mysql
7. Luego ejecutamos las migraciones con el comando php artisan migrate
8. Ejecutamos en la terminal el comando php artisan serve y nos dirigimos a un navegador. Dentro de la barra de búsqueda colocamos localhost:8000

## Servicio de pusher

Debemos crear una cuenta en la página <a href="https://pusher.com/">pusher</a>  y crear un canal de comunicación.Nos vamos a la sección crear app , le damos un nombre a nuestra app, seleccionamos un clúster, en este caso usamos us2 y damos crear app.

Vamos a nuestra app recién creada y damos click en las app keys , las copiamos y las cambiamos en nuestro archivo de configuración .env.

Terminamos nuestra configuración en la sección de app settings y habilitamos client events
