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

        $controllers->match('/contact', [$this, 'contactAction'])
            ->bind('contact');

        $controllers->match('/support', [$this, 'supportAction'])
            ->bind('support');

        return $controllers;
    }

    public function homeAction(Request $request)
    {
        return $this->app['twig']->render('home/index.html.twig');
    }

    public function contactAction(Request $request)
    {
        if ($request->getMethod() === 'POST') {
            $content['name'] = $request->get('name');
            $content['email'] = $request->get('email');
            $content['phone'] = $request->get('phone');
            $content['message'] = $request->get('message');

            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls')
                ->setUsername('yap.indonesia46@gmail.com')
                ->setPassword('Faster123');

            $message = \Swift_Message::newInstance();
            $message->setSubject('Website Feedback');
            $message->setFrom([$content['email'] => 'YAP! Website']);
            $message->setTo(['yap.indonesia46@gmail.com']);
            $message->setBody(
                $this->app['twig']->render(
                    'client/transport.html.twig',
                    [
                        'data' => $content,
                    ]
                ),
                'text/html'
            );

            $mailer = \Swift_Mailer::newInstance($transport);
            $mailer->send($message);

            return $this->app->redirect($this->app['url_generator']->generate('contact'));
        }

        return $this->app['twig']->render('client/contact.html.twig');
    }

    public function supportAction()
    {
        return $this->app['twig']->render('client/support.html.twig');
    }
}