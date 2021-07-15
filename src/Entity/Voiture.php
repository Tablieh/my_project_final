<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPortes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $couleur;

    /**
     * @ORM\Column(type="text")
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $motorisation;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="listeFavoris")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity=Modele::class, inversedBy="voitures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $modele;

    /**
     * @ORM\OneToMany(targetEntity=Avis::class, mappedBy="voiture", orphanRemoval=true)
     */
    private $avis;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="voitures")
     */
    private $listFavoirs;

    

    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->listFavoirs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNbPortes(): ?int
    {
        return $this->nbPortes;
    }

    public function setNbPortes(int $nbPortes): self
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

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

    public function getMotorisation(): ?string
    {
        return $this->motorisation;
    }

    public function setMotorisation(string $motorisation): self
    {
        $this->motorisation = $motorisation;

        return $this;
    }

    public function getModele(): ?Modele
    {
        return $this->modele;
    }

    public function setModele(?Modele $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * @return Collection|Avis[]
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): self
    {
        if (!$this->avis->contains($avi)) {
            $this->avis[] = $avi;
            $avi->setVoiture($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): self
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getVoiture() === $this) {
                $avi->setVoiture(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getListFavoirs(): Collection
    {
        return $this->listFavoirs;
    }

    public function addListFavoir(User $listFavoir): self
    {
        if (!$this->listFavoirs->contains($listFavoir)) {
            $this->listFavoirs[] = $listFavoir;
        }

        return $this;
    }

    public function removeListFavoir(User $listFavoir): self
    {
        $this->listFavoirs->removeElement($listFavoir);

        return $this;
    }

    
}
