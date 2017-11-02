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

class ClientController implements ControllerProviderInterface
{

    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        // TODO: Implement connect() method.
    }
}