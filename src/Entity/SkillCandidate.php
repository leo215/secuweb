<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use  App\Entity\Candidate;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkillRepository")
 */
class SkillCandidate
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
    private $compagny;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $detailOfPost;
    /**
     * @ORM\ManyToOne(targetEntity="Candidate", inversedBy="skills")
     */
    private $person;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompagny(): ?string
    {
        return $this->compagny;
    }

    public function setCompagny(?string $compagny): self
    {
        $this->compagny = $compagny;

        return $this;
    }

    public function getDetailOfPost(): ?string
    {
        return $this->detailOfPost;
    }

    public function setDetailOfPost(?string $detailOfPost): self
    {
        $this->detailOfPost = $detailOfPost;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param mixed $person
     */
    public function setPerson($person): void
    {
        $this->person = $person;
    }

}
