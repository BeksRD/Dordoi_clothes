<?php

namespace App\Entity;

use App\Repository\ClothesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: ClothesRepository::class)]
#[Vich\Uploadable]
class Clothes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    private $img;

    #[Vich\UploadableField(mapping: 'product_image', fileNameProperty: 'img', size: 'imageSize')]
    private ?File $imgFile = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private $content;

    #[ORM\ManyToMany(targetEntity: ClothesSlider::class, mappedBy: 'clothes')]
    private $clothesSliders;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $published;

    #[ORM\Column(type: 'datetime')]
    private $createdAt;

    #[ORM\Column(type: 'datetime')]
    private $updated_at;

    public function __construct()
    {
        $this->clothesSliders = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->updated_at = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function setImageFile(File $image = null)
    {
        $this->imgFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updated_at = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imgFile;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Collection|ClothesSlider[]
     */
    public function getClothesSliders(): Collection
    {
        return $this->clothesSliders;
    }

    public function addClothesSlider(ClothesSlider $clothesSlider): self
    {
        if (!$this->clothesSliders->contains($clothesSlider)) {
            $this->clothesSliders[] = $clothesSlider;
            $clothesSlider->addClothes($this);
        }

        return $this;
    }

    public function removeClothesSlider(ClothesSlider $clothesSlider): self
    {
        if ($this->clothesSliders->removeElement($clothesSlider)) {
            $clothesSlider->removeClothes($this);
        }

        return $this;
    }

    public function getPublished(): ?bool
    {
        return $this->published;
    }

    public function setPublished(?bool $published): self
    {
        $this->published = $published;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
    public function __toString(): string
    {
        return $this->getTitle();
        // TODO: Implement __toString() method.
    }
}

