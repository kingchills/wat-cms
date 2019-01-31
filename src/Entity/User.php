<?php
/**
 * Created by PhpStorm.
 * User: drewbrown
 * Date: 2019-01-30
 * Time: 16:50
 */

namespace Wat\CMF\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;



/**
 * Class User
 * @package Wat\CMF\Entity
 * @ORM\Entity()
 * @ORM\Table(name="wat_user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

}
