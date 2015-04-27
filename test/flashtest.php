<?php 
/**
 * This is an Anax pagecontroller.
 *
 */

// Get environment & autoloader and the $app-object.
require __DIR__.'/config_with_app.php'; 

// Add Flash message service
$di->setShared('flash', function() {
    $flashmessage = new \pmn834\CFlashmessage\CFlashmessage();
    return $flashmessage;
});

// Set the title of the page
$app->theme->setVariable('title', "Test av Flash");

$app->theme->addStylesheet("css/flashmessage.css");
$app->theme->addStylesheet("css/font-awesome-4.3.0/css/font-awesome.css");

$app->session(); // Will load the session service which also starts the session

// ========================================================
// 
// Main page route
// 
$app->router->add('', function() use ($app) {

    $app->flash->info("Info flash message");
    $app->flash->error("Error flash message");
    $app->flash->success("Success flash message");
    $app->flash->warning("Warning flash message");

    $app->views->add('default/page', [
        'title' => 'Flash messages test',
        'content' => $app->flash->output(),
    ]); 

});


// Check for matching routes and dispatch to controller/handler of route
$app->router->handle();

// Render the page
$app->theme->render();
