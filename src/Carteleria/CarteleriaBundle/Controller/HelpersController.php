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


    function getNext($numero){
        $iter=0;
        for($x = 'A'; $x < 'ZZ'; $x++)
        {
            if($numero==$iter)
                return $x;
            $iter++;
        }
        return null;
    }


    function random_color_part() {
        return str_pad( dechex( mt_rand( 1, 150 ) ), 2, '0', STR_PAD_LEFT);
    }

    function rand_color() {
        return $this->random_color_part() .$this->random_color_part() .$this->random_color_part();
    }



}
