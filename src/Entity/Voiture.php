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
     * @ORM\ManyToOne(targetEntity=Avis::class, inversedBy="voitures")
     */
    private $concerner;

    /**
     * @ORM\OneToMany(targetEntity=Modele::class, mappedBy="voiture")
     */
    private $associer;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->associer = new ArrayCollection();
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

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addListeFavori($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeListeFavori($this);
        }

        return $this;
    }

    public function getConcerner(): ?Avis
    {
        return $this->concerner;
    }

    public function setConcerner(?Avis $concerner): self
    {
        $this->concerner = $concerner;

        return $this;
    }

    /**
     * @return Collection|Modele[]
     */
    public function getAssocier(): Collection
    {
        return $this->associer;
    }

    public function addAssocier(Modele $associer): self
    {
        if (!$this->associer->contains($associer)) {
            $this->associer[] = $associer;
            $associer->setVoiture($this);
        }

        return $this;
    }

    public function removeAssocier(Modele $associer): self
    {
        if ($this->associer->removeElement($associer)) {
            // set the owning side to null (unless already changed)
            if ($associer->getVoiture() === $this) {
                $associer->setVoiture(null);
            }
        }

        return $this;
    }
}
