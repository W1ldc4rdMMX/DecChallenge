<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/18
 * Time: 10:31 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\stockItemsRepository")
 * @ORM\Table(name="stock_items")
 */
class stockItems
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
    private $stockItemName;

    /**
     * @ORM\Column(type="text")
     */
    private $stockItemBase;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $stockItemSpec;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $stockItemCont;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $stockItemReq;
  

    /**
     * @ORM\ManyToOne(targetEntity="stockTypes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stockTypes;

    /**
     * @return mixed
     */
    public function getStockTypes()
    {
        return $this->stockTypes;
    }

    /**
     * @param mixed $stockTypes
     */
    public function setStockTypes(stockTypes $stockTypes)
    {
        $this->stockTypes = $stockTypes;
    }

    
    /**
     * @return mixed
     */
    public function getStockItemid()
    {
        return $this->id;
    }
    
    
    /**
     * @return mixed
     */
    public function getStockItemName()
    {
        return $this->stockItemName;
    }

    /**
     * @param mixed $stockItemName
     */
    public function setStockItemName($stockItemName)
    {
        $this->stockItemName = $stockItemName;
    }

    /**
     * @return mixed
     */
    public function getStockItemBase()
    {
        return $this->stockItemBase;
    }

    /**
     * @param mixed $stockItemBase
     */
    public function setStockItemBase($stockItemBase)
    {
        $this->stockItemBase = $stockItemBase;
    }

    /**
     * @return mixed
     */
    public function getStockItemSpec()
    {
        return $this->stockItemSpec;
    }

    /**
     * @param mixed $stockItemSpec
     */
    public function setStockItemSpec($stockItemSpec)
    {
        $this->stockItemSpec = $stockItemSpec;
    }

    /**
     * @return mixed
     */
    public function getStockItemCont()
    {
        return $this->stockItemCont;
    }

    /**
     * @param mixed $stockItemCont
     */
    public function setStockItemCont($stockItemCont)
    {
        $this->stockItemCont = $stockItemCont;
    }

    /**
     * @return mixed
     */
    public function getStockItemReq()
    {
        return $this->stockItemReq;
    }

    /**
     * @param mixed $stockItemReq
     */
    public function setStockItemReq($stockItemReq)
    {
        $this->stockItemReq = $stockItemReq;
    }

       

    
}