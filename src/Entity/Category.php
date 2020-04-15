<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
    private $name;
    /**
     * @ORM\OneToMany(targetEntity="ChampionnatMasculinSenior", mappedBy="category")
     */
    private $championnatmasculinsenior;


    public function setChampionnatmasculinsenior($championnatmasculinsenior): void
    {
        $this->championnatmasculinsenior = $championnatmasculinsenior;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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
}
