<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClubRepository")
 */
class Club
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $site_web;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $plan_acces;

    /**
     * @ORM\OneToMany(targetEntity="ChampionnatMasculinSenior", mappedBy="club")
     */
    private $championnatmasculinsenior;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(?int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->site_web;
    }

    public function setSiteWeb(?string $site_web): self
    {
        $this->site_web = $site_web;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getPlanAcces()
    {
        return $this->plan_acces;
    }

    /**
     * @param mixed $plan_acces
     */
    public function setPlanAcces($plan_acces): void
    {
        $this->plan_acces = $plan_acces;
    }

    /**
     * @return mixed
     */
    public function getChampionnatmasculinsenior()
    {
        return $this->championnatmasculinsenior;
    }

    /**
     * @param mixed $championnatmasculinsenior
     */
    public function setChampionnatmasculinsenior($championnatmasculinsenior): void
    {
        $this->championnatmasculinsenior = $championnatmasculinsenior;
    }
}
