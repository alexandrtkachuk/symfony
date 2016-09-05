<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction($name)
    {
	return new Response('Created product id ');
        #return $this->render('AcmeStoreBundle:Default:index.html.twig');
    }
}
