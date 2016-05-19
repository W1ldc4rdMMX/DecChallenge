<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/19
 * Time: 8:22 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stock_users")
 */
class stockUsers
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(type="string")
     */
    private $userFName;

    /**
     * @ORM\Column(type="string")
     */
    private $userLName;
    
    /**
     * @ORM\Column(type="string")
     */
    private $userEmail;
    
    /**
     * @ORM\Column(type="string")
     */
    private $userPass;

    /**
     * @return mixed
     */
    public function getUserFName()
    {
        return $this->userFName;
    }

    /**
     * @param mixed $userFName
     */
    public function setUserFName($userFName)
    {
        $this->userFName = $userFName;
    }

    /**
     * @return mixed
     */
    public function getUserLName()
    {
        return $this->userLName;
    }

    /**
     * @param mixed $userLName
     */
    public function setUserLName($userLName)
    {
        $this->userLName = $userLName;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return mixed
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * @param mixed $userPass
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;
    }
    
    
}