<?php

namespace App\Entity;
use App\Entity\Mail;
use App\Entity\Reference;
use App\Entity\SkillCandidate;
use App\Entity\status;
use App\Entity\CategoryPost;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Candidate
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $civility;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, type="string", nullable=true)
     * @ORM\OneToMany(targetEntity="App\Entity\CategoryPost", mappedBy="candidate")
     */
    private $categoriesPost;
    /**
     * @var string
     * @ORM\Column(name="mails",type="string", length=255, nullable=true)
     * @ORM\OneToMany(targetEntity="App\Entity\Mail", mappedBy="mail" )
     */
    private $mails;
    /**
     * @var string
     * @ORM\Column(name="skills",type="string", length=255, nullable=true)
     * @ORM\OneToMany(targetEntity="SkillCandidate.php", mappedBy="person")
     */
    private $skills;
    /**
     * @var string
     * @ORM\Column(name="status",type="string", length=255,nullable=true)
     * @ORM\OneToMany(targetEntity="App\Entity\Status", mappedBy="candidate")
     */
    private $status;
    /**
     * @var string
     * @ORM\Column(name="reference", length=255,type="string",nullable=true)
     * @ORM\OneToMany(targetEntity="App\Entity\Reference", mappedBy="reference")
     */
    private $references;

   
    /**
     * @return mixed
     */
    public function getMails()
    {
        return $this->mails;
    }

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

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(string $civility): self
    {
        $this->civility = $civility;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getCategoriesPost(): ?string
    {
        return $this->categoriesPost;
    }

    public function setCategoriesPost(string $categoriesPost): self
    {
        $this->categoriesPost = $categoriesPost;

        return $this;
    }

    /**
     * @return string
     */
    public function getSkills(): string
    {
        return $this->skills;
    }

    /**
     * @param string $skills
     */
    public function setSkills(string $skills): void
    {
        $this->skills = $skills;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getReferences(): string
    {
        return $this->references;
    }

    /**
     * @param string $references
     */
    public function setReferences(string $references): void
    {
        $this->references = $references;
    }

   }
