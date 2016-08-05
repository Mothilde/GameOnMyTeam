<?php

namespace GameTeam\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GameTeamBundle:Default:index.html.twig');
    }
}
