<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/26
 * Time: 6:25 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stock_serials")
 */
class stockSerials
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
    private $stockSerial;

    /**
     * @ORM\ManyToOne(targetEntity="stockItems")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stockItems;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
        
    /**
     * @return mixed
     */
    public function getStockSerial()
    {
        return $this->stockSerial;
    }

    /**
     * @param mixed $stockSerial
     */
    public function setStockSerial($stockSerial)
    {
        $this->stockSerial = $stockSerial;
    }

    /**
     * @return mixed
     */
    public function getStockItems()
    {
        return $this->stockItems;
    }

    /**
     * @param mixed $stockItems
     */
    public function setStockItems($stockItems)
    {
        $this->stockItems = $stockItems;
    }
    
    
    
}