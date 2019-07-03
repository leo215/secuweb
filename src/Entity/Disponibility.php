<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DisponibilityRepository")
 */
class Disponibility
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateOfStart;

    /**
     * @var string
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var string
     * @ORM\Column(type="date", nullable=true)
     */
    private $day;

    /**
     * @var string
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $night;

    /**
     * @var string
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $week;

    /**
     * @var string
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $weekEnd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateOfStart(): ?\DateTimeInterface
    {
        return $this->dateOfStart;
    }

    public function setDateOfStart(?\DateTimeInterface $dateOfStart): self
    {
        $this->dateOfStart = $dateOfStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    public function getDay(): ?\DateTimeInterface
    {
        return $this->day;
    }

    public function setDay(?\DateTimeInterface $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getNight(): ?string
    {
        return $this->night;
    }

    public function setNight(?string $night): self
    {
        $this->night = $night;

        return $this;
    }

    public function getWeek(): ?string
    {
        return $this->week;
    }

    public function setWeek(?string $week): self
    {
        $this->week = $week;

        return $this;
    }

    public function getWeekEnd(): ?string
    {
        return $this->weekEnd;
    }

    public function setWeekEnd(?string $weekEnd): self
    {
        $this->weekEnd = $weekEnd;

        return $this;
    }
}
