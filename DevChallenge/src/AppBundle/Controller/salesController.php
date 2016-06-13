<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/18
 * Time: 8:04 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\stockMeta;
use AppBundle\Entity\stockSales;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\HttpFoundation\Response;


class salesController extends Controller
{

    /**
     * @Route("sales")
     * @Method("POST")
     */
    public function updateSales()
    {
        $sale = new stockSales();
        $date = date('Y-m-d');
        //return new Response("<html><body>".$date->format('Y-m-d H:i:s')."</body></html>");
        $sale->setSaleQunty($_POST['salesCountNum']);
        $sale->setSalesTrkNo($_POST['saleTrackNo']);
        $eta = date_add(new \DateTime($date), date_interval_create_from_date_string('5 days'));
        $sale->setSalesETA($eta);
        $sale->setSalesDateOrd(new \DateTime($date));
        $dispatch = date_add(new \DateTime($date), date_interval_create_from_date_string('3 days'));
        $sale->setSalesDateDis($dispatch);
        $sale->setSalesPrdt($_POST['saleProduct']);
        
        $em = $this->getDoctrine()->getManager();
        $stockItem = $em->getRepository('AppBundle:stockItems')->find($_POST['saleItemId']);
        $sale->setStockItems($stockItem);

        $em->persist($sale);
        $em->flush();
        $this->updateMeta("SALE",$_POST['saleProduct']);
        $_POST = array();
        return $this->render("catalogue/sales.html.twig", [
            'types' => $this->getTypes(),
            'items' => $this->getItems(),
            'serials' => $this->getItemSerials(),
            'orders' => $this->getPendingOrders()
        ]);
        
    }
    
    
    /**
     * @Route("sales")
     */

    public function showAction()
    {
        return $this->render("catalogue/sales.html.twig", [
            'types' => $this->getTypes(),
            'items' => $this->getItems(),
            'serials' => $this->getItemSerials(),
            'orders' => $this->getPendingOrders()
        ]);
    }

    public function getTypes()
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository('AppBundle:stockTypes')->findAll();
        return $types;
    }

    public function getItems()
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository('AppBundle:stockItems')->findAll();
        return $items;
    }

    public function getItemSerials()
    {
        $em = $this->getDoctrine()->getManager();
        $serials = $em->getRepository('AppBundle:stockSerials')->findAll();
        return $serials;
    }

    public function getPendingOrders()
    {
        $em = $this->getDoctrine()->getManager();
        $orders = $em->getRepository('AppBundle:stockSales')->findAll();
        return $orders;
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
        