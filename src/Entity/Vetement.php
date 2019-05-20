<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VetementRepository")
 */
class Vetement
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
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Marque", inversedBy="vetements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Type", inversedBy="vetements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Saison", inversedBy="vetements")
     */
    private $saisons;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Couleur", inversedBy="vetements")
     */
    private $couleurs;

    public function __construct()
    {
        $this->saisons = new ArrayCollection();
        $this->couleurs = new ArrayCollection();
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|Saison[]
     */
    public function getSaisons(): Collection
    {
        return $this->saisons;
    }

    public function addSaison(Saison $saison): self
    {
        if (!$this->saisons->contains($saison)) {
            $this->saisons[] = $saison;
        }

        return $this;
    }

    public function removeSaison(Saison $saison): self
    {
        if ($this->saisons->contains($saison)) {
            $this->saisons->removeElement($saison);
        }

        return $this;
    }

    /**
     * @return Collection|Couleur[]
     */
    public function getCouleurs(): Collection
    {
        return $this->couleurs;
    }

    public function addCouleur(Couleur $couleur): self
    {
        if (!$this->couleurs->contains($couleur)) {
            $this->couleurs[] = $couleur;
        }

        return $this;
    }

    public function removeCouleur(Couleur $couleur): self
    {
        if ($this->couleurs->contains($couleur)) {
            $this->couleurs->removeElement($couleur);
        }

        return $this;
    }
}
