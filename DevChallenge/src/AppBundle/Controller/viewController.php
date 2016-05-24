<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/15
 * Time: 12:18 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\stockTypes;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class viewController extends Controller
{

    /**
     * @Route("/view")
     */
    public function showAction()
    {
        return $this->render(':catalogue:view.html.twig',[
                'stockItems' => $this->showAllItems(),
                'stockTypes' => $this->getStockTypes()
        ]
        );
    }

    public function showAllItems()
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("AppBundle:stockItems")->findAll();
        return $items;        
    }

    public function getStockTypes()
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository("AppBundle:stockTypes")->findAll();
        return $types;
    }

    
}
