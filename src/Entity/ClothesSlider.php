<?php

namespace App\Entity;

use App\Repository\ClothesSliderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClothesSliderRepository::class)]
class ClothesSlider
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToMany(targetEntity: Clothes::class, inversedBy: 'clothesSliders')]
    private $clothes;

    public function __construct()
    {
        $this->clothes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Clothes[]
     */
    public function getClothes(): Collection
    {
        return $this->clothes;
    }

    public function addClothes(Clothes $clothes): self
    {
        if (!$this->clothes->contains($clothes)) {
            $this->clothes[] = $clothes;
        }

        return $this;
    }

    public function removeClothes(Clothes $clothes): self
    {
        $this->clothes->removeElement($clothes);

        return $this;
    }
}
