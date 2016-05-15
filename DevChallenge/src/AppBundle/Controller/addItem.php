<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/15
 * Time: 11:32 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class addItem extends Controller
{
    /**
     * @Route("/updatestock")
     */
    
    public function showAction() 
    {
        return $this->render("catalogue/add.html.twig");
    }
}