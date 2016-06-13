<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/29
 * Time: 4:50 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\stockMeta;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\stockUsers;

class adminContoller extends Controller
{
    /**
     * @Route("/admin")
     * @Method("post")
     */
    public function saveDelAction()
    {
        $checkKeys = array_keys($_POST);
        //return new Response("<html><body>".print_r($_POST)."</body></html>");
        switch ($checkKeys[0]) {
            case 'editUserName':               
                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository('AppBundle:stockUsers')->findOneBy(
                    array('id' => $_POST['editUserId']));              

                $user->setUsername($_POST['editUserName']);
                $user->setEmail($_POST['editEmail']);
                if (($_POST['editPassword'] != "") && $_POST['didEditPassword'] == "yes")
                {
                    $plainpass = $_POST['editPassword'];
                    $encoder = $this->container->get('security.password_encoder');
                    $encoder = $encoder->encodePassword($user, $plainpass);
                    $user->setPassword($encoder);
                }                
                $user->setRoles(array($_POST['editRole']));
                $isActive = false;
                if ($_POST['editActive']=="yes")
                {
                    $isActive = true;
                }
                $user->setIsActive($isActive);
                $em->persist($user);
                $em->flush();
                $this->updateMeta("EDIt USER",$_POST['editUserId']."-".$_POST['editUserName']);
                break;

            case 'addUser':
                //return new Response("<html><body>".print_r($_POST)."</body></html>");
                /*[addUser] => test.add.user 
                [addPsswrd] => test.pass 
                [addEmail] => add.user@test.com 
                [addRole] => ROLE_USER 
                [addActive] => yes ) 1*/
                $user = new stockUsers();
                $user->setUsername($_POST['addUser']);
                $user->setEmail($_POST['addEmail']);
                $plainpass = $_POST['addPsswrd'];                 
                $encoder = $this->container->get('security.password_encoder');
                $encoder = $encoder->encodePassword($user, $plainpass);
                $user->setPassword($encoder);
                
                $user->setRoles(array($_POST['addRole']));
                $isActive = false;
                if ($_POST['addActive']=="yes")
                {
                    $isActive = true;
                }
                $user->setIsActive($isActive);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $this->updateMeta("ADDED USER",$_POST['addUser']);
                break;

            case 'delUserId':
                //return new Response("<html><body>".print_r($_POST)."</body></html>");
                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository('AppBundle:stockUsers')->findOneBy(
                    array('id' => $_POST['delUserId']));
                $username = $user->getUsername();
                $em->remove($user);
                $em->flush();
                $this->updateMeta("REMOVED USER",$_POST['delUserId']."-".$username);
                break;
            default:
                break;
        }
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("AppBundle:stockUsers")->findAll();

        return $this->render(':catalogue:admin.html.twig',[
            'users' => $users
        ]);
    }

    
    /**
     *@Route("/admin")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("AppBundle:stockUsers")->findAll();
        
        return $this->render(':catalogue:admin.html.twig',[
            'users' => $users
        ]);
        //return new Response("<html><body>Admin Page - Welcome ".$user->getUsername()."</body></html>");
    }

    public function updateMeta($action, $desc)
    {
        $userMeta = new stockMeta();
        $user = $this->getUser();
        $date = date('Y-m-d');

        $em = $this->getDoctrine()->getManager();
        $userMeta->setMetaDate(new \DateTime($date));
        $userMeta->setMetaUser($user->getUsername());
        $userMeta->setMetaDesc($desc);
        $userMeta->setMetaAction($action);
        $userMeta->setStockUsers($user);

        $em->persist($userMeta);
        $em->flush();
    }
}