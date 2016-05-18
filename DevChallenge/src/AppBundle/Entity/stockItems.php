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
    private $stockItemid;

    /**
     * @ORM\Column(type="string")
     */
    private $stockItemName;

    /**
     * @ORM\Column(type="string")
     */
    private $stockItemBase;

    /**
     * @ORM\Column(type="string")
     */
    private $stockItemSpec;

    /**
     * @ORM\Column(type="string")
     */
    private $stockItemCont;

    /**
     * @ORM\Column(type="string")
     */
    private $stockItemReq;

    /**
     * @ORM\Column(type="string")
     */
    private $stockItemSerial;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\stockTypes", inversedBy="stock_items")
     * @ORM\JoinColumn(name="stockTypeid", referencedColumnName="stockTypeid")
     */
    private $stockTypeid;


}