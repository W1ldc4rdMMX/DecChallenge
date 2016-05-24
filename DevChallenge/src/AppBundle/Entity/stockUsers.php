<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/19
 * Time: 8:22 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\userRepository")
 * @ORM\Table(name="stock_users")
 */
class stockUsers extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     *@ORM\OneToMany(targetEntity="stockMeta",mappedBy="stockUsers")
     */
    private $stockMeta;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
 

    /*public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize()
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->userEmail,
            $this->userPass,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize()
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->userEmail,
            $this->userPass,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }*/
}