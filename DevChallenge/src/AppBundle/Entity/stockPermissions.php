<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/19
 * Time: 8:25 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stock_permissions")
 */
class stockPermissions
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $permId;

    /**
     * @ORM\Column(type="string")
     */
    private $permAdd;

    /**
     * @ORM\Column(type="string")
     */
    private $permEdit;

    /**
     * @ORM\Column(type="string")
     */
    private $permDel;

    /**
     * @ORM\Column(type="string")
     */
    private $permOrder;

    /**
     * @ORM\Column(type="string")
     */
    private $permSU;

    /**
     * @return mixed
     */
    public function getPermAdd()
    {
        return $this->permAdd;
    }

    /**
     * @param mixed $permAdd
     */
    public function setPermAdd($permAdd)
    {
        $this->permAdd = $permAdd;
    }

    /**
     * @return mixed
     */
    public function getPermEdit()
    {
        return $this->permEdit;
    }

    /**
     * @param mixed $permEdit
     */
    public function setPermEdit($permEdit)
    {
        $this->permEdit = $permEdit;
    }

    /**
     * @return mixed
     */
    public function getPermDel()
    {
        return $this->permDel;
    }

    /**
     * @param mixed $permDel
     */
    public function setPermDel($permDel)
    {
        $this->permDel = $permDel;
    }

    /**
     * @return mixed
     */
    public function getPermOrder()
    {
        return $this->permOrder;
    }

    /**
     * @param mixed $permOrder
     */
    public function setPermOrder($permOrder)
    {
        $this->permOrder = $permOrder;
    }

    /**
     * @return mixed
     */
    public function getPermSU()
    {
        return $this->permSU;
    }

    /**
     * @param mixed $permSU
     */
    public function setPermSU($permSU)
    {
        $this->permSU = $permSU;
    }
    
    
}