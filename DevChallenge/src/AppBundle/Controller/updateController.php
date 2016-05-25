<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/15
 * Time: 1:21 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\itemsRepository;
use AppBundle\Entity\stockItems;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;
use Symfony\Component\HttpFoundation\Response;


class updateController extends Controller
{
    /**
     * @Route("/update")
     * @Method("POST")
     */
    public function doUpdate()
    {
        $checkKeys = array_keys($_POST);
        switch ($checkKeys[0]) {
            case 'productAddType':
                $newItem = new stockItems();

                $newItem->setStockItemName($_POST['productAddName']);
                $newItem->setStockItemBase($_POST['productAddBase']);
                $newItem->setStockItemSpec($_POST['productAddSpecs']);
                $newItem->setStockItemCont($_POST['productAddContent']);
                $newItem->setStockItemReq($_POST['productAddSysReq']);
                $em = $this->getDoctrine()->getManager();
                $stockTypes = $em->getRepository('AppBundle:stockTypes')->find($_POST['productAddStockId']);
                $newItem->setStockTypes($stockTypes);

                $em->persist($newItem);
                $em->flush();
                break;
            case 'productUpName':
                $em = $this->getDoctrine()->getManager();
                $upItems = $em->getRepository('AppBundle:stockItems')->findBy(
                    array('stockItemName' => $_POST['productUpName'])
                );
                foreach ($upItems as $item) {
                    $item->setStockItemBase($_POST['productUpBase']);
                    $item->setStockItemSpec($_POST['productUpSpecs']);
                    $item->setStockItemCont($_POST['productUpContent']);
                    $item->setStockItemReq($_POST['productUpSysReq']);

                    $em->persist($item);
                    $em->flush();
                }
        }
        
        return $this->render("catalogue/add.html.twig",[
            'types' => $this->getTypes(),
            'currentItems' => $this->getMainItems()
        ]);

        //return new Response("<html><body>".$checkKeys[0]."</body></html>");
    }
    
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
        
        $uniqItems = $em->getRepository('AppBundle:stockItems')
            ->getUniqItems();
        return $uniqItems;
    }
}