<?php

namespace Carteleria\CarteleriaBundle\Controller;

use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HorariosController extends Controller
{


    public function indexAction(){


        $helper= $this->get('carteleria.helper');
        $helper->SetTemplateOptions();
        $tipos = array('B', 'L', 'N');
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $inicio =  $inicio = (!isset($_GET['time']) || !is_numeric($_GET['time'])) ? mktime(0,0,0) : $_GET['time'];
        $fin = $inicio + 3600 * 24 * 5; //buscar todos los registros para los proximos 5 dias
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('carteleriaBundle:PlanRoom');
        $data=$repo->Rooms($inicio,$fin,$tipos);
        $jsondata='null';
        if(count($data)>0){
            $array=array();
            $materias=array();

            $iter=0;
           foreach($data as $d){

               $obj=new stdClass();
               $objmateria= new stdClass();

               if(!$this->isInArray($materias,$d['name'])){
                   $objmateria->title=$d['name'];
                   $objmateria->id=$helper->getNext($iter);
                $objmateria->eventColor='#'.$helper->rand_color();
                   $materias[]=$objmateria;
               }

               $obj->id=strtolower($helper->getNext($iter));
               $obj->resourceId=$this->isInArray($materias,$d['name'],true);
               $obj->title=$d['room_name'];
               $obj->aula=$d['room_name'];
               $obj->materia=$d['name'];

               $obj->start=date('Y-m-d', $d['start_time']);
               $obj->datehour=date('H:i', $d['start_time']);
               $obj-> end=date('Y-m-d', $d['end_time']);
               $obj-> enddatehour=date('H:i', $d['end_time']);
               $obj-> description=date('H:i', $d['start_time']).' hasta '.date('H:i', $d['end_time']);

               $obj-> comienzo_dia=date('d', $d['start_time']);
               $obj->allDay= false;
               $array[]=$obj;


               $iter++;
         }
            $jsondata=json_encode($array);
            $jsonmaterias=json_encode($materias);
//            $replace=array('"',);
//            $jsondata=str_replace($replace,'',$jsondata);

        }

        return $this->render('carteleriaBundle:Horarios:index.html.twig',array(

                'jsondata'=>$jsondata,
                'jsonmaterias'=>$jsonmaterias

            )
        );
    }


    public  function horariostableAction(){
        $helper= $this->get('carteleria.helper');
        $helper->SetTemplateOptions(
            array(
                'skin'=>'skin-blue',
            )
        );
        $tipos = array('B', 'L', 'N');
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $inicio =  $inicio = (!isset($_GET['time']) || !is_numeric($_GET['time'])) ? mktime(0,0,0) : $_GET['time'];
        $fin = $inicio + 3600 * 24 * 5; //buscar todos los registros para los proximos 5 dias
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('carteleriaBundle:PlanRoom');
        $data=$repo->Rooms($inicio,$fin,$tipos);
        for($i=0;$i<count($data);$i++){

            $data[$i]['descripcion']= date('H:i', $data[$i]['start_time']).' hasta '.date('H:i', $data[$i]['end_time']);
            $data[$i]['start_time']= date('d-m-Y', $data[$i]['start_time']);
        }

//       print_r($data[0]);die();

        return $this->render('carteleriaBundle:Horarios:tableindex.html.twig',array(

            'data'=>$data

            )
        );
    }

    function isInArray($objects,$title,$findid=null){

        foreach($objects as $struct) {
            if ($title == $struct->title)
            {
                if($findid==true)
                    return $struct->id;
                return true;
            }
        }
        return false;
    }


}
