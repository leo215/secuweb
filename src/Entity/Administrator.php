<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use  App\Entity\Mail;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdministratorRepository")
 * @ORM\Table(name="administrator")
 */
class Administrator
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="mails", type="string", length=255, nullable=true)
     * @ORM\OneToMany(targetEntity="App\Entity\Mail", mappedBy="admin")
     */
    private $mails;

    /**
     * @var string
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
    )
     */
    private $firstName;
    /**
     * @var string
     * @ORM\Column(name="last_name",type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @param mixed $mails
     */
    public function setMails($mails): void
    {
        $this->mails = $mails;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

}
