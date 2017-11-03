<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 02/11/17
 * Time: 17:49
 */

namespace Jimmy\Yap\Http\Controller;


use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientController implements ControllerProviderInterface
{

    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param Application $app
     * @return mixed
     */
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', [$this, 'homeAction'])
            ->bind('home');

        $controllers->post('/', [$this, 'homePostAction'])
            ->bind('home_post');

        return $controllers;
    }

    public function homeAction(Request $request)
    {
        return $this->app['twig']->render('home/index.html.twig');
    }

    public function homePostAction(Request $request)
    {
        return new Response();
    }
}