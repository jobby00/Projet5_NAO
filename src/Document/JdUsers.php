<?php
namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

class JdUsers
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Field(type="string", length=75)
     * @Assert\Length(
     *     min = 4,
     *     max = 75,
     *     minMessage = "Votre nom ne peut faire moins de {{ limit }} caractères.",
     *     maxMessage = "Votre nom ne peut faire plus de {{ limit }} caractères."
     * )
     */
    private $name;

    /**
     * @MongoDB\Field(type="string", length=75)
     * @Assert\Length(
     *     min = 4,
     *     max = 75,
     *     minMessage = "Votre Prénom ne peut faire moins de {{ limit }} caractères.",
     *     maxMessage = "Votre Prénom ne peut faire plus de {{ limit }} caractères."
     * )
     */
   private $firstname;

   /**
    * @MongoDB\Field(type="string", length=155)
    * @Assert\Length(
    *     min = 6,
    *     max = 155,
    *     minMessage ="Votre adresse email ne peut faire moins de {{ limit }} caractères.",
    *     maxMessage = "Votre adresse email ne peut feire plus de {{ limit }} caractères.
    * )
    */
   private $email;

   /**
    * @MongoDB\Field(type="_md5", length=35)
    * @Assert\Length(
    *     min = 6,
    *     max = 35,
    *     mixMessage = "Votre mot de passe ne peut faire moins de {{ limit }} caractères.",
    *     maxMessage = "Votre mot de passe ne peut faire Plus de {{ limit }} caractères."
    * )
    */
   private $password;

   /**
    * @MongoDB\Field(type="date")
    * @Assert\DateTime()
    * @Assert\GreaterThanOrEqual("today")
    */
   private $createdAt;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}