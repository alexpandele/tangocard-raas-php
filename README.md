TangoCard RAAS for PHP
======================

This repository is maintained version of `raas-v2-sdk-php` for TangoCard RAAS.


Installation
============
```
composer require walkboy/tangocard-raas-php
```

Requirements
============
PHP 8 support >= 3.0.0
PHP 7 support <= 2.4.0


How To Use
==========
For using this SDK do the following:

1. Use Composer to install the dependencies. See the section "How To Build".
2. See that you have configured your SDK correctly. See the section "How To Configure".
3. Depending on your project setup, you might need to include composer's autoloader
   in your PHP code to enable autoloading of classes.

   ```PHP
   require_once "vendor/autoload.php";
   ```
4. Import the SDK client in your project: 

    ```PHP
    use RaasLib\RaasClient;
    ```
5. Instantiate the client. After this, you can now get the controllers and call the
    respective methods:

    ```PHP
    Configuration::$environment = 'sandbox'; // "production"
    $client = new RaasClient();
    $controller = $client->getStatus();
    ```

How To Test
===========
Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.
