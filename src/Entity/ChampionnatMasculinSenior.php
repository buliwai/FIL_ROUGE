<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChampionnatMasculinSeniorRepository")
 */
class ChampionnatMasculinSenior
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $equipe_1;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $equipe_2;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $equipe_3;
    /**
     * @ORM\ManyToOne(targetEntity="Club", inversedBy="championnatmasculinsenior")
     */
    private $club;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEquipe1(): ?string
    {
        return $this->equipe_1;
    }

    public function setEquipe1(string $equipe_1): self
    {
        $this->equipe_1 = $equipe_1;

        return $this;
    }

    public function getEquipe2(): ?string
    {
        return $this->equipe_2;
    }

    public function setEquipe2(?string $equipe_2): self
    {
        $this->equipe_2 = $equipe_2;

        return $this;
    }

    public function getEquipe3(): ?string
    {
        return $this->equipe_3;
    }

    public function setEquipe3(?string $equipe_3): self
    {
        $this->equipe_3 = $equipe_3;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * @param mixed $club
     */
    public function setClub($club): void
    {
        $this->club = $club;
    }

}
