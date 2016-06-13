<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/15
 * Time: 1:21 PM
 */

namespace AppBundle\Controller;



use AppBundle\Entity\stockItems;
use AppBundle\Entity\stockMeta;
use AppBundle\Entity\stockSerials;
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
                $this->updateMeta("ADD",$_POST['productAddName']);
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
                    $this->updateMeta("UPDATED",$_POST['productUpName']);
                }
                break;
            case 'productCountName':
                //return new Response("<html><body>".print_r($checkKeys)."</body></html>");
                $em = $this->getDoctrine()->getManager();
                $stockItem = $em->getRepository('AppBundle:stockItems')->findOneBy(
                    array('stockItemName' => $_POST['productCountName'])
                );
                $x = $_POST['productCountNum'];
                for($i = 0;$i < $x;$i++)
                {
                    $stockSerial = new stockSerials();

                    $stockSerial->setStockSerial('TBD');
                    $stockSerial->setStockItems($stockItem);

                    $em->persist($stockSerial);
                    $em->flush();                    
                }
                $this->updateMeta("ADDED",$_POST['productCountName']." x ".$x);
        }
        
        return $this->render("catalogue/add.html.twig",[
            'types' => $this->getTypes(),
            'currentItems' => $this->getMainItems(),
            'serials' => $this->getSerials()
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
            'currentItems' => $this->getMainItems(),
            'serials' => $this->getSerials()
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

    public function getSerials()
    {
        $em = $this->getDoctrine()->getManager();

        $serials = $em->getRepository('AppBundle:stockSerials')->findAll();
        return $serials;
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