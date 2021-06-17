# Collaborate
[![forthebadge](https://forthebadge.com/images/badges/made-with-reason.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/validated-html5.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/uses-css.svg)](https://forthebadge.com)


## Disclamation
* Full documentation of application in polish can be viewed [here](https://github.com/stepkos/Collaborate/blob/main/documentation/application_docs/dokumentacjaCollaborate.pdf)
* Full documentation of database in polish can be viewed [here](https://github.com/stepkos/Collaborate/blob/main/documentation/database_docs/DokumentacjaBazyDanych.pdf)


## Table of Contents
* [How it works](#How-it-works)
* [GUI specification](#GUI-specification)
* [Comments and adnotations](#Comments-and-adnotations)
* [Technologies used](#Used-technologies)
* [How to run](#How-to-run)
* [Licence](#Licence)
* [Authors](#Authors)


## How it works

This is appliaction called Collaborate. Its primary concept was to be a platform to find collaborators to help with your programming projects. Imagine a scenario where you are high school student and you are developing fantastic, big side project just for fun or hobby. It could be nice, if your classmates were into programming and wanted to help you, but what if they are not? There comes with help our Collaborate! You can post your project description on it and technologies used in it. The offert is then visible to other users on platform. They can read it and like it. You can too, choose from among people who liked your project the most suitable for collaboration, start chatting and working on code. Its a bit of mix between sites like LinkedIn.com and Tinder, because here we have similiar "match" system

## GUI specification

lorem ispum


## Comments and adnotations

* As always, not everything is working perfect. What is not is "match" system and chatting functionality
* For "match" system visuals, including animations are working but on backend they are not handled due to teacher's deadline
* For chats, they have also developed visuals but are not handled in any way

## Technologies used
* HTML5
* CSS3
* Javascript ES6
* Jquery.js
* Hammer.js
* PHP
* MySQL

## How to run
- Install PHP and MySQL

- Execute this file
```
db/init.sql
```

- Fill a data to connect with database here
```
db/config.php
```

```php
return [
    'host'      =>  '<your host>',
    'user'      =>  '<your username>',
    'password'  =>  '<your password>',
    'database'  =>  '<your database>'
];
```

## Authors

- Jakub Stępkowski [stepkos](https://github.com/stepkos)
- Jan Napieralski  [R3VANEK](https://github.com/R3VANEK)
- Kamil Paczkowski  [Avngarde](https://github.com/Avngarde)

## License
All rights reserved
