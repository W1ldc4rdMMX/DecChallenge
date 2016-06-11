<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/16
 * Time: 10:22 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class reportsController extends Controller
{
    /**
     * @Route("reports")
     */
    
    public function showAction()
    {
        return $this->render("catalogue/reports.html.twig",[
            'stockItems' => $this->getStockItems(), 
            'serials' => $this->getItemSerials(),
            'sales' => $this->getSales()
        ]);
    }

    public function getStockItems()
    {
        $em = $this->getDoctrine()->getManager();
        $uniqItems = $em->getRepository('AppBundle:stockItems')->findAll();
            //$em->getRepository('AppBundle:stockItems')->getUniqItems();
        return $uniqItems;
    }
    
    public function getItemSerials()
    {
        $em = $this->getDoctrine()->getManager();
        $serials = $em->getRepository('AppBundle:stockSerials')->findAll();
        return $serials;
    }
    
    public function getSales()
    {
        $em  = $this->getDoctrine()->getManager();
        $sales = $em->getRepository('AppBundle:stockSales')->findAll();
        return $sales;
    }
}