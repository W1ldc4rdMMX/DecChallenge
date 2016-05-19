<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/18
 * Time: 7:34 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stock_types")
 */
class stockTypes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $stockTypeid;

    /**
     * @ORM\Column(type="string")
     */
    private $stockTypeName;

    /**
     * @return mixed
     */
    public function getStockTypeName()
    {
        return $this->stockTypeName;
    }

    /**
     * @param mixed $stockTypeName
     */
    public function setStockTypeName($stockTypeName)
    {
        $this->stockTypeName = $stockTypeName;
    }
    
}


