<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompagnyRepository")
 */
class Compagny
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="social_reason",type="string", length=22, nullable=true)
     */
    private $SocialReason;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocialReason(): ?string
    {
        return $this->SocialReason;
    }

    public function setSocialReason(?string $SocialReason): self
    {
        $this->SocialReason = $SocialReason;

        return $this;
    }
}
