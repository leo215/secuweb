<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubscriptionRepository")
 */
class Subscription
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Visible;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tailored;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVisible(): ?string
    {
        return $this->Visible;
    }

    public function setVisible(?string $Visible): self
    {
        $this->Visible = $Visible;

        return $this;
    }

    public function getTailored(): ?string
    {
        return $this->tailored;
    }

    public function setTailored(?string $tailored): self
    {
        $this->tailored = $tailored;

        return $this;
    }
}
