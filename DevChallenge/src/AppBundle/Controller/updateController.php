<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/15
 * Time: 1:21 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\itemsRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;


class updateController extends Controller
{
    /**
     * @Route("/update")
     */

    public function showAction()
    {
        return $this->render("catalogue/add.html.twig",[
            'types' => $this->getTypes(),
            'currentItems' => $this->getMainItems()
        ]);
    }

    public function getTypes()
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository('AppBundle:stockTypes')->findAll();
        return $types;
    }

    public function getMainItems()
    {
        $em = $this->getDoctrine()->getManager();
        $stockitems = $em->getRepository('AppBundle:stockTypes')
            ->findOneBy(['id' => 5]);

        $uniqItems = $em->getRepository('AppBundle:stockItems')
            ->getUniqItems($stockitems);
        return $uniqItems;
    }
}