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
        return $this->render("catalogue/sales.html.twig");
    }
}