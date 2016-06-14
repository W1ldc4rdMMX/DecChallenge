<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/06/14
 * Time: 6:25 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class metaController extends Controller
{
    /**
     * @Route("/metaData")
     */
    
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $metaData = $em->getRepository('AppBundle:stockMeta')->findAll();
        return $this->render(':catalogue:meta.html.twig',[
            'metaData' => $metaData
        ]);
    }
}