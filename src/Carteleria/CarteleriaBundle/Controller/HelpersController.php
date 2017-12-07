<?php

namespace Carteleria\CarteleriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;


class HelpersController extends Controller
{

    public function HolaMundo(){

        return 'Hola symfony3.4';
    }

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function SetTemplateOptions($options=null){



        $ddefaults=array(
            'boxed_layout'=>1,
            'skin'=>'skin-green-light',
            'control_sidebar'=>0,
            'collapsed_sidebar'=>1
        );
        if($options==null){
            $options=$ddefaults;
        }
        else
            foreach ($options as $key=> $option)
                $options[$key]=$option;


        $c=$this->get('avanzu_admin_theme.context_helper');

        foreach ($options as $key=> $option) {
            $c->setOption($key,$option);
        }

    }
}
