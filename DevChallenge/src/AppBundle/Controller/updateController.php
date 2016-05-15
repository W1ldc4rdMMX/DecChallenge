<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/15
 * Time: 1:21 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class updateController extends Controller
{
    /**
     * @Route("/update")
     */

    public function showAction()
    {
           return $this->render("catalogue/add.html.twig");
    }
}