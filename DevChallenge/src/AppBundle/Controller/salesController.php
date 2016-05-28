<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/18
 * Time: 8:04 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class salesController extends Controller
{
    /**
     * @Route("sales")
     */

    public function showAction()
    {
        return $this->render("catalogue/sales.html.twig", [
            'types' => $this->getTypes(),
            'items' => $this->getItems(),
            'serials' => $this->getItemSerials()
        ]);
    }

    public function getTypes()
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository('AppBundle:stockTypes')->findAll();
        return $types;
    }

    public function getItems()
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository('AppBundle:stockItems')->findAll();
        return $items;
    }

    public function getItemSerials()
    {
        $em = $this->getDoctrine()->getManager();
        $serials = $em->getRepository('AppBundle:stockSerials')->findAll();
        return $serials;
    }
}
        