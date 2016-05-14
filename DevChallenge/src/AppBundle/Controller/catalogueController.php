<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/14
 * Time: 7:53 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class catalogueController extends Controller
{
    /**
     * @Route("/home")
     */

    public function showAction()
    {
        $stock = [ 'Router' => array('prdName'=>"Router 1",
                                    'prdPrice'=>1200,
                                    'prdDesc'=>"ADSL 2+ router"),
                'Mobile' => array('prdName'=>"Huawei Sumsum",
                                    'prdPrice'=>1199,
                                    'prdDesc'=>"4G enabled MiFi"),
                'Sims' => array('prdName'=>"Mobile voice sim",
                                'prdPrice'=>50,
                                'prdDesc'=>"Voice and data enabled sim"),];
        return $this->render("catalogue/home.html.twig", [
           'someText' => "The Home Page",
            'stock' => $stock
        ]);
    }
}