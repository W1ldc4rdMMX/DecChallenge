<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/14
 * Time: 1:05 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class aboutContorller extends Controller
{
    /**
     * @Route("")
     */

    public function showAction()
    {
        return $this->render('catalogue/about.html.twig');
    }
}