<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/15
 * Time: 12:18 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\stockMeta;
use AppBundle\Entity\stockTypes;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class viewController extends Controller
{

    /**
     * @Route("/view")
     * @Method("POST")
     */
    public function updateAction()
    {
        /*$msg="";
        $em = $this->getDoctrine()->getManager();
        $upItems = $em->getRepository('AppBundle:stockItems')->findBy(
            array('stockItemName' => $_POST['productViewUpName'])
        );
        foreach ($upItems as $item) {
            $item->setStockItemBase($_POST['productViewUpBase']);
            $item->setStockItemSpec($_POST['productViewUpSpecs']);
            $item->setStockItemCont($_POST['productViewUpContent']);
            $item->setStockItemReq($_POST['productViewUpSysReq']);

            $em->persist($item);
            $em->flush();
            $this->updateMeta("UPDATED product",$_POST['productViewUpName']." Updated");
        }
        $msg = $_POST['productViewUpName']." has been updated successfully";
        return $this->render(':catalogue:view.html.twig',[
                'stockItems' => $this->showAllItems(),
                'stockTypes' => $this->getStockTypes(),
                'msg' => $msg
            ]
        );*/
        return new Response("<html><body>".print_r($_POST)."</body></html>");
    }
    
    /**
     * @Route("/view")
     */
    public function showAction()
    {
        return $this->render(':catalogue:view.html.twig',[
                'stockItems' => $this->showAllItems(),
                'stockTypes' => $this->getStockTypes(),
                'msg' => ""
        ]
        );
    }

    public function showAllItems()
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository("AppBundle:stockItems")->findAll();
        return $items;        
    }

    public function getStockTypes()
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository("AppBundle:stockTypes")->findAll();
        return $types;
    }

    public function updateMeta($action, $desc)
    {
        $userMeta = new stockMeta();
        $user = $this->getUser();
        $date = date('Y-m-d');

        $em = $this->getDoctrine()->getManager();
        $userMeta->setMetaDate(new \DateTime($date));
        $userMeta->setMetaUser($user->getUsername());
        $userMeta->setMetaDesc($desc);
        $userMeta->setMetaAction($action);
        $userMeta->setStockUsers($user);

        $em->persist($userMeta);
        $em->flush();
    }

    
}
