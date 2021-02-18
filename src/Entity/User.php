<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="user", orphanRemoval=true)
    */
    private $uid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
          // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function getSalt(){}

    public function eraseCredentials(){}

    public function serialize()
    {
      return serialize([
        $this->id,
        $this->username,
        $this->email,
        $this->password,
        $this->roles
      ]);
    }
    public function unserialize($string)
    {
      list(
        $this->id,
        $this->username,
        $this->email,
        $this->password,
        $this->roles
      ) = unserialize($string, ['allowed_classes'=> false]);
    }
    /**
     * @return Collection|Product[]
    */
    public function getUid(): Collection
    {
        return $this->uid;
    }

    public function addUid(Product $uid): self
    {
        if (!$this->uid->contains($uid)) {
            $this->uid[] = $uid;
            $uid->setUser($this);
        }

        return $this;
    }

    public function removeUid(Product $uid): self
    {
        if ($this->uid->removeElement($uid)) {
            // set the owning side to null (unless already changed)
            if ($uid->getUser() === $this) {
                $uid->setUser(null);
            }
        }
        return $this;
    }
}
