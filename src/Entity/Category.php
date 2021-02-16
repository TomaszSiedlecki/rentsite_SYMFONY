<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="category", orphanRemoval=true)
     */
    private $cid;

    public function __construct()
    {
        $this->cid = new ArrayCollection();
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
     * @return Collection|Product[]
     */
    public function getCid(): Collection
    {
        return $this->cid;
    }

    public function addCid(Product $cid): self
    {
        if (!$this->cid->contains($cid)) {
            $this->cid[] = $cid;
            $cid->setCategory($this);
        }

        return $this;
    }

    public function removeCid(Product $cid): self
    {
        if ($this->cid->removeElement($cid)) {
            // set the owning side to null (unless already changed)
            if ($cid->getCategory() === $this) {
                $cid->setCategory(null);
            }
        }

        return $this;
    }
}
