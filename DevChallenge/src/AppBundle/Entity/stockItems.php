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
 * @ORM\Entity
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
     * @ORM\Column(type="string")
     */
    private $stockItemBase;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $stockItemSpec;

    /**
     * @ORM\Column(type="blob",nullable=true)
     */
    private $stockItemCont;

    /**
     * @ORM\Column(type="blob",nullable=true)
     */
    private $stockItemReq;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $stockItemSerial;

    /**
     * @ORM\ManyToOne(targetEntity="stockTypes")
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
        if($this->stockItemSpec != ''){
            return stream_get_contents($this->stockItemSpec);
        }
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
        if ($this->stockItemCont != '')
        {
            return stream_get_contents($this->stockItemCont);
        }
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
        if($this->stockItemReq != '')
        {
            return stream_get_contents($this->stockItemReq);
        }
        return $this->stockItemReq;
    }

    /**
     * @param mixed $stockItemReq
     */
    public function setStockItemReq($stockItemReq)
    {
        $this->stockItemReq = $stockItemReq;
    }

    /**
     * @return mixed
     */
    public function getStockItemSerial()
    {
        return $this->stockItemSerial;
    }

    /**
     * @param mixed $stockItemSerial
     */
    public function setStockItemSerial($stockItemSerial)
    {
        $this->stockItemSerial = $stockItemSerial;
    }

    
}