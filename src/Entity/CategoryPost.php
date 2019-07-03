<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Candidate;
use App\Entity\Description;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PostOftypeRepository")
 */
class CategoryPost
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="persons", type="string", length=255)
     * @ORM\ManyToOne(targetEntity="Candidate", inversedBy="categoriesPost")
     */
    private $candidate;

    /**
     * @var string
     * @ORM\Column(name="descriptions",type="string", length=255)
     * @ORM\OneToMany(targetEntity="App\Entity\Description", mappedBy="description")
     */
    private $descriptions;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidate(): ?string
    {
        return $this->candidate;
    }

    public function setCandidate(string $candidate): self
    {
        $this->candidate = $candidate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * @param mixed $descriptions
     */
    public function setDescriptions($descriptions): void
    {
        $this->descriptions = $descriptions;
    }


}
