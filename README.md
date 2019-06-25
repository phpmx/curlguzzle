# Clientes HTTP/S: curl o guzzle

PHP México, The Right Way Meetup 27/Junio

## Introducción

Hoy en día esta algo de moda la arquitectura de "_Microservicios_", que permite crear y mantener sistemas complejos, interactuando entre distintos servicios que hacen pocas "operaciones" muy bien, de manera independiente (de recursos). Pero en el desarrollo de este tipo de sistemas, se usan las llamadas de HTTP/S como la amalgama que permite la interacción entre cada uno de esos elementos.

> **Cliente HTTP/S**: Es un "algo" parecido a un navegador Web, pero sin todo lo adicional (js, ui, html, css); solo el puro contenido (texto, mayormente).

## Curl

Es una **librería** propia de PHP, que nos permite conectarnos y comunicarnos con diferentes tipos de servidores usando diferentes tipos de protocolos como http, https, ftp, entre otros.

No es necesario instalar nada adicional, pues PHP ya lo tiene inlcuido dentro de su código.

## Guzzle

Guzzle es un cliente HTTP/S de PHP que facilita el envío de solicitudes HTTP y la integración sencilla con los servicios web. A diferencia de curl, Guzzle solo hace peticiones a HTTP/S, y no considera peticiones bajo algún otro protocolo.

Es necesario instalar este cliente por medio de [Composer](http://getcomposer.org) (es lo recomendado):

### Instalar Guzzle

```bash
# Instalar Composer
curl -sS https://getcomposer.org/installer | php
```

Después, correr el comando de composer para instalar la versión última estable de Guzzle:

```bash
php composer.phar require guzzlehttp/guzzle
```

Después, es necesario agregar el autoloader de Composer al código:

```php
require 'vendor/autoload.php';
```

## Ejemplos y charla

Este repositorio tiene 4 ejemplos de los clientes HTTP/S para PHP antes mencionados, y pueden ejecutarlos tan fácil como:

```bash
php -f curl_01.php
php -f curl_02.php
php -f guzzle_01.php
php -f guzzle_02.php
```

El repositorio fue preparado especialmente para la reunión de programadores que se realiza en Ciudad de México, y están invitados a participar este 27 de Junio; todos los detalles en [meetup.com](https://www.meetup.com/es/PHP-The-Right-Way/events/258972833/).

Además, si no pueden asistir a esta edición se pueden apuntar a la siguiente meetup. Aunque si gustan de PHP, o son solo desarrolladores Web también estan invitados a participar en [el canal de Slack de la comunidad](https://chat.phpmexico.mx/ "Solicitar invitación al Slack de PHPMX").

### Referencias

1. [Guzzle Repo Github](https://github.com/guzzle/guzzle "Repositorio oficial de Guzzle")
2. [Manual de Curl PHP](https://www.php.net/manual/es/book.curl.php "Manual de php.net")
3. [Ejemplos de POST con Guzzle](https://dzone.com/articles/make-a-post-request-from-php-with-guzzle "Artículo de DZone")
4. [Ejemplo de FTP con Curl](http://nlslack.com/ftp-access-using-curl-with-php/ "Conectar a un FTP con Curl")
