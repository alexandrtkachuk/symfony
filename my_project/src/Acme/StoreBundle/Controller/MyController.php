<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Acme\StoreBundle\Entity\Product;

class MyController extends Controller
{
    public function indexAction($name)
    {
	$product = new Product();
	
	$product->setName('A Foo Bar');
	$product->setPrice('19.99');
	$product->setDescription('Lorem ipsum dolor');
	
	$em = $this->getDoctrine()->getEntityManager();
	$em->persist($product);
	$em->flush();

	return new Response('Created product id '.$product->getId());
	
	return new Response('Created product id ' . $name);
	#return $this->render('AcmeStoreBundle:Default:index.html.twig');
    }

    public function getprodAction($id)
    {
	$product = $this->getDoctrine()
	    ->getRepository('AcmeStoreBundle:Product')
	    ->find($id);

	if (!$product) {
	    throw $this->createNotFoundException('No product found for id '.$id);
	}
	
	
        return new Response('Name ' . $product->getName());

    }

    public function changeAction($id) 
    {
	
	$em = $this->getDoctrine()->getEntityManager();
	$product = $em->getRepository('AcmeStoreBundle:Product')->find($id);

	if (!$product) {
	    throw $this->createNotFoundException('No product found for id '.$id);
	}

	$product->setName('test' . time());

	$em->flush();

	return new Response('Name good change' );

    }

    public function Add($a,$b)
    {
	return $a+$b;
    }
}
