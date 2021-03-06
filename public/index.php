<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 02/11/17
 * Time: 17:45
 */

$loader = require __DIR__ . '/../vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$config = require __DIR__ . '/../app/config.php';

$app = new \Silex\Application($config['common']);

$app['asset_path'] = '../web';

require 'bootstrap.php';

$app->mount('/', new \Jimmy\Yap\Http\Controller\ClientController($app));

$app->run();