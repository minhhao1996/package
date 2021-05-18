#Installation
Domo package by Minh Hao
#Requirements
+PHP: ^7.2\|^8.0 

+Laravel: ^8.0
#Installation
Require this package in the composer.json of your Laravel project. This will download the package and PhpSpreadsheet.

 Run **composer require minhhao/laravel-minhhao**

If you want to register it yourself, add the ServiceProvider in config/app.php

    /*
         * Package Service Providers...
    */
    MinhHao\Demo\Providers\DemoServiceProvider::class,


