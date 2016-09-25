<?php

namespace SophieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecepyController extends Controller
{
    public function indexAction()
    {
        return $this->render('SophieBundle:Default:index.html.twig');
    }
}
