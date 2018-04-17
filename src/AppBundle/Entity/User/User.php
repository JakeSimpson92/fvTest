<?php
/**
 * Created by PhpStorm.
 * User: jakes
 * Date: 16/04/18
 * Time: 15:24
 */

namespace AppBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Class User
 * @package Appbundle\Entity\User
 *
 * @ORM\Entity()
 */
class User{

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $fName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $lName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;

    /**
     * @var string $mobile
     *
     * @ORM\Column(type="string", length=11, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=6, nullable=true)
     */
    private $gender;

    /**
     * @var \DateTime $dateOfBirth
     *
     * @ORM\Column(type="date", nullable=true)
     *
     * @Assert\Date()
     */
    private $dateOfBirth;

    /**
     * @var string $interests
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $comments;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * @param string $fName
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
    }

    /**
     * @return string
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * @param string $lName
     */
    public function setLName($lName)
    {
        $this->lName = $lName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }



}
