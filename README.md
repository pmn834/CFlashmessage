# CFlashmessage
Flashmessage for Anax MVC

Available at Packagist as [flashmessage](https://packagist.org/packages/pmn834/flashmessage).
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/pmn834/CFlashmessage/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/pmn834/CFlashmessage/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/pmn834/CFlashmessage/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/pmn834/CFlashmessage/?branch=master)
[![Build Status](https://travis-ci.org/pmn834/CFlashmessage.svg?branch=master)](https://travis-ci.org/pmn834/CFlashmessage)

## Using CFlashmessage

Copy the file *flashmessage.css* from the `CFlashmessage/css` folder to your Anax `webroot/css` folder. This stylesheet can then be added to your frontcontroller.

```php
$app->theme->addStylesheet("css/flashmessage.css");
```

Add CFlashmessage as a service.

```php
$di->setShared('flash', function() {
    $flashmessage = new \pmn834\CFlashmessage\CFlashmessage();
    return $flashmessage;
});
```

Start a session before using CFlashmessage.

```php
$app->session();
```

One or more flashmessages can then be added.

```php
$app->flash->info("Info flash message");
$app->flash->error("Error flash message");
$app->flash->success("Success flash message");
$app->flash->warning("Warning flash message");
```

To get all flashmessages as HTML use `flash->output()`.

```php
$app->flash->output();
```

The `CFlashmessage/webroot` folder includes the frontcontroller `flashtest.php` to test the CFlashmessage service.
