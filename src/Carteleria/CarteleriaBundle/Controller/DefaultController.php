<?php

namespace Carteleria\CarteleriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $c=$this->get('avanzu_admin_theme.context_helper');
        $c->setOption('boxed_layout',true);
        $c->setOption('skin','skin-green-light');
        $c->setOption('control_sidebar',false);
        $c->setOption('collapsed_sidebar',true);
        return $this->render('carteleriaBundle:Default:index.html.twig');
    }
}
