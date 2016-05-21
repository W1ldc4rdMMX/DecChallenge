<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/19
 * Time: 7:45 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="stock_sales")
 */
class stockSales
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $salesPrdt;

    /**
     * @ORM\Column(type="integer")
     */
    private $saleQunty;
    
    /**
     * @ORM\Column(type="string")
     */
    private $salesTrkNo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $salesETA;

    /**
     * @ORM\Column(type="datetime")
     */
    private $salesDateOrd;

    /**
     * @ORM\Column(type="datetime")
     */
    private $salesDateDis;

    /**
     * @return mixed
     */
    public function getSalesId()
    {
        return $this->salesId;
    }
       
    /**
     * @return mixed
     */
    public function getSalesPrdt()
    {
        return $this->salesPrdt;
    }

    /**
     * @param mixed $salesPrdt
     */
    public function setSalesPrdt($salesPrdt)
    {
        $this->salesPrdt = $salesPrdt;
    }

    /**
     * @return mixed
     */
    public function getSaleQunty()
    {
        return $this->saleQunty;
    }

    /**
     * @param mixed $saleQunty
     */
    public function setSaleQunty($saleQunty)
    {
        $this->saleQunty = $saleQunty;
    }

    /**
     * @return mixed
     */
    public function getSalesTrkNo()
    {
        return $this->salesTrkNo;
    }

    /**
     * @param mixed $salesTrkNo
     */
    public function setSalesTrkNo($salesTrkNo)
    {
        $this->salesTrkNo = $salesTrkNo;
    }

    /**
     * @return mixed
     */
    public function getSalesETA()
    {
        return $this->salesETA;
    }

    /**
     * @param mixed $salesETA
     */
    public function setSalesETA($salesETA)
    {
        $this->salesETA = $salesETA;
    }

    /**
     * @return mixed
     */
    public function getSalesDateOrd()
    {
        return $this->salesDateOrd;
    }

    /**
     * @param mixed $salesDateOrd
     */
    public function setSalesDateOrd($salesDateOrd)
    {
        $this->salesDateOrd = $salesDateOrd;
    }

    /**
     * @return mixed
     */
    public function getSalesDateDis()
    {
        return $this->salesDateDis;
    }

    /**
     * @param mixed $salesDateDis
     */
    public function setSalesDateDis($salesDateDis)
    {
        $this->salesDateDis = $salesDateDis;
    }
    
}