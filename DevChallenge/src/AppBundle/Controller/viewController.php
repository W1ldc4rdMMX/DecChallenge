<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/15
 * Time: 12:18 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class viewController extends Controller
{

    /**
     * @Route("/view")
     */
    public function showAction()
    {
        return $this->render(':catalogue:view.html.twig');
    }
}
?>