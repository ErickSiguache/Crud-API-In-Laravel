# CRUD de API Rest

El proyecto es un ejemplo de las operaciones CRUD realizado en `Laravel 10`, diseñado para aprender y repasar conceptos sobre cómo crear una API REST en PHP utilizando Laravel. En esta aplicación, se intentó utilizar varios conceptos de Laravel, desde los más comunes como el uso de migraciones, modelos y controladores, hasta otros como los códigos de estado de respuesta, validaciones mediante `Requests` y las reglas de validación.

## Clonar e instalar las Dependencias:

```cmd
git clone https://github.com/ErickSiguache/Crud-API-In-Laravel
```

### Instalando dependencias con Composer

Para instalar las dependencias del proyecto, es necesario tener Composer instalado. Composer es una herramienta que se utiliza para gestionar las dependencias de PHP en un proyecto. Para instalar las dependencias, se ejecuta el siguiente comando en la terminal:

```cmd
composer install
```

### Archivo de configuración de Laravel y Base de Datos

El proyecto utiliza una base de datos `MySQL` para realizar las operaciones CRUD en Laravel. Para acceder a la base de datos y proteger la información, se utilizan variables de entorno. Por lo tanto, es necesario crear o editar el archivo `.env`, y copiar todas las variables del archivo `.env.example` o cambiar el nombre del archivo `.env.example` a `.env`, y luego editar las siguientes variables:

```javascript
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="Nombre de la base de datos (deseado)"
DB_USERNAME="Usuario de MySQL"
DB_PASSWORD="Contraseña de MySQL"
```

Después de este proceso debemos ejecutar el siguiente comando:

```cmd
php artisan migrate
```

### Creando un nuevo API key

Como medida de seguridad, cada proyecto de Laravel requiere una `API Key` o clave única del proyecto. Esta clave generalmente no se proporciona de antemano, por lo que debemos generarla nosotros mismos. Para hacerlo, ejecutamos el siguiente comando:

```cmd
php artisan key:generate
```

Para verificar si se ha creado correctamente, debemos revisar el archivo `.env` y asegurarnos de que la variable `APP_KEY` no esté vacía:

```javascript
APP_NAME=Laravel
APP_ENV=local
APP_KEY="Debe tener la llave"
APP_DEBUG=true
APP_URL=http://localhost
```

## Vista de la aplicación

[Documentación del CRUD](https://github.com/ErickSiguache/Crud-API-In-Laravel/blob/main/docs/crud-documentation.md)
