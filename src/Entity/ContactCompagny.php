<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Mail;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompagnyOfContactRepository")
 */
class ContactCompagny
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="number_authorization",type="string", length=23, nullable=true)
     */
    private $numberAuthorization;
    /**
     * @var string
     * @ORM\Column(name="number", type="string", length=11, nullable=true)
     */
private $siret;
    /**
     * @var string
     * @ORM\Column(name="phone",type="string", length=10, nullable=true)
     */
    private $phone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberAuthorization(): ?string
    {
        return $this->numberAuthorization;
    }

    public function setNumberAuthorization(?string $numberAuthorization): self
    {
        $this->numberAuthorization = $numberAuthorization;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
