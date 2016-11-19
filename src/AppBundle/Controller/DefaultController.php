<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

     //   $output = $this->get('aimeos_page')->getSections('mypage');
        // do some more stuff
     //   return $this->render( 'default/index.html.twig', $output );
        // replace this example code with whatever you need
        /*
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
        */
        return $this->redirect('/list');

    }
}
