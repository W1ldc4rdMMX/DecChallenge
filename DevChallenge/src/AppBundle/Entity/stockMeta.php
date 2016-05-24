<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/19
 * Time: 8:29 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stock_meta")
 */
class stockMeta
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
    private $metaUser;

    /**
     * @ORM\Column(type="string")
     */
    private $metaDate;

    /**
     * @ORM\Column(type="string")
     */
    private $metaAction;

    /**
     * @ORM\Column(type="blob")
     */
    private $metaDesc;

    /**
     * @ORM\ManyToOne(targetEntity="stockUsers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stockUsers;

    /**
     * @return mixed
     */
    public function getStockUsers()
    {
        return $this->stockUsers;
    }

    /**
     * @param mixed $stockUsers
     */
    public function setStockUsers(stockUsers $stockUsers)
    {
        $this->stockUsers = $stockUsers;
    }
    
    
    
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
    public function getMetaUser()
    {
        return $this->metaUser;
    }

    /**
     * @param mixed $metaUser
     */
    public function setMetaUser($metaUser)
    {
        $this->metaUser = $metaUser;
    }

    /**
     * @return mixed
     */
    public function getMetaDate()
    {
        return $this->metaDate;
    }

    /**
     * @param mixed $metaDate
     */
    public function setMetaDate($metaDate)
    {
        $this->metaDate = $metaDate;
    }

    /**
     * @return mixed
     */
    public function getMetaAction()
    {
        return $this->metaAction;
    }

    /**
     * @param mixed $metaAction
     */
    public function setMetaAction($metaAction)
    {
        $this->metaAction = $metaAction;
    }

    /**
     * @return mixed
     */
    public function getMetaDesc()
    {
        return $this->metaDesc;
    }

    /**
     * @param mixed $metaDesc
     */
    public function setMetaDesc($metaDesc)
    {
        $this->metaDesc = $metaDesc;
    }
        
    
}