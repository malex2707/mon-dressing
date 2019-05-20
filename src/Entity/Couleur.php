<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CouleurRepository")
 */
class Couleur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Couleur", inversedBy="couleurs")
     */
    private $couleurs;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Vetement", mappedBy="couleurs")
     */
    private $vetements;

    public function __construct()
    {
        $this->couleurs = new ArrayCollection();
        $this->vetements = new ArrayCollection();
    }

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

    /**
     * @return Collection|self[]
     */
    public function getCouleurs(): Collection
    {
        return $this->couleurs;
    }

    public function addCouleur(self $couleur): self
    {
        if (!$this->couleurs->contains($couleur)) {
            $this->couleurs[] = $couleur;
        }

        return $this;
    }

    public function removeCouleur(self $couleur): self
    {
        if ($this->couleurs->contains($couleur)) {
            $this->couleurs->removeElement($couleur);
        }

        return $this;
    }

    /**
     * @return Collection|Vetement[]
     */
    public function getVetements(): Collection
    {
        return $this->vetements;
    }

    public function addVetement(Vetement $vetement): self
    {
        if (!$this->vetements->contains($vetement)) {
            $this->vetements[] = $vetement;
            $vetement->addCouleur($this);
        }

        return $this;
    }

    public function removeVetement(Vetement $vetement): self
    {
        if ($this->vetements->contains($vetement)) {
            $this->vetements->removeElement($vetement);
            $vetement->removeCouleur($this);
        }

        return $this;
    }
}
