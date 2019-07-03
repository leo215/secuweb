<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Candidate;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReferencieRepository")
 */
class Reference
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(name="reference",type="string", length=255)
     * @ORM\ManyToOne(targetEntity="Candidate", inversedBy="references")
     */
    private $reference;

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference): void
    {
        $this->reference = $reference;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
