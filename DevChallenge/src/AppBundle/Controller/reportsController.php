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
        return $this->render("catalogue/reports.html.twig");
    }
}