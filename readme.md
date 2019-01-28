
# ATLAS METEOROLÓGICO DEL GOLFO DE MÉXICO PARA PLANTEAR ESCENARIOS DE DERRAMES

Este repositorio contiene el [sitio web](http://pronosticos.atmosfera.unam.mx/atlasmeteorologico.gom) que se construyó para la visualización de la información generada para el Atlas Meteorológico del Golfo de México (GoM) para plantear escenarios de derrames, que es la caracterización climatológica de distintas variables atmosféricas sobre el GoM en distintas escalas de tiempo. Desarrollado en [Laravel](http://laravel.com/docs).

## Getting Started

Los requerimientos técnicos para la instalación del sitio web son:
* Servidor web Apache 2.4
* PHP 7.2
* Node.js y npm
* Manejador de base de datos MySQL 14.14

### Prerrequisitos

Para instalar Laravel se necesita el gestor de paquetes Composer

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Agrega composer a la Variable de entorno PATH, segun tu sistema operativo

* macOS:  $HOME/.composer/vendor/bin
* GNU / Linux Distributions:  $HOME/.config/composer/vendor/bin

```
export PATH=$PATH:/path/to/composer
```

Luego descarga el instalador de Laravel usando Composer

```
composer global require laravel/installer
```

### Instalación

Para correr el proyecto en tu local primero debes encontrar dentro de la carpeta raíz en una terminal para instalar las dependencias de Composer y npm

```
composer install
npm install
```

Crea una copia del archivo _env.example para crear un archivo .env

```
cp .env.example .env
```

Genera una clave de cifrado de la aplicación

```
php artisan key:generate
```

Crea una base de datos vacía para la aplicación en Mysql y agrega los datos de la configuración de dicha base al archivo .env para poder migrar la base de datos 

```
php artisan migrate
```

## Deployment

Para usar el servidor de desarrollo incorporado en PHP para ver la aplicación:

```
php artisan serve
```

Este comando iniciará un servidor de desarrollo en http://localhost:8000

## Built With

* [Laravel](http://laravel.com/docs) - The web framework used

## Autores

* **Dulce R. Herrera** 
* **Samantha Pantoja** 
* **Cuauhtémoc Silva** 

Vea también la lista de [colaboradores](https://github.com/sambleu13/atlasmeteorologico.gom/contributors) que participaron en este proyecto.
