<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StockRepository::class)
 */
class Stock
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
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="stock", orphanRemoval=true)
     */
    private $sid;

    public function __construct()
    {
        $this->sid = new ArrayCollection();
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
    public function getSid(): Collection
    {
        return $this->sid;
    }

    public function addSid(Product $sid): self
    {
        if (!$this->sid->contains($sid)) {
            $this->sid[] = $sid;
            $sid->setStock($this);
        }

        return $this;
    }

    public function removeSid(Product $sid): self
    {
        if ($this->sid->removeElement($sid)) {
            // set the owning side to null (unless already changed)
            if ($sid->getStock() === $this) {
                $sid->setStock(null);
            }
        }

        return $this;
    }
}
