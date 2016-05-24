<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/21
 * Time: 10:58 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
//use Symfony\Component\Security\Core\User\UserInterface;

class userRepository extends EntityRepository implements UserLoaderInterface
{

    public function loadUserByUsername($username)
    {

        return $this->createQueryBuilder('u')
            ->where('u.userEmail = :username')
            ->setParameter('username',$username)
            ->getQuery()
            ->getOneOrNullResult();
    }

}