<?php
/**
 * Local variables
 * @var \Phalcon\Mvc\Micro $app
 */

/**
 * Add your routes here
 */
use Phalcon\Mvc\Micro\Collection;

$collection = new Collection();

$collection->setHandler(
  new HelloController()
);

$app->get('/', function () {
    echo $this['view']->render('index');
});

$collection->get('/hello/edit/{id}', 'edit');

$app->mount($collection);

/**
 * Not found handler
 */
$app->notFound(function () use($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo $app['view']->render('404');
});
