<?php

namespace App\Entity;

use App\Repository\PromoCodesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PromoCodesRepository::class)
 * @UniqueEntity(fields={"code"}, message="Такой промо-код уже существует!")
 */
class PromoCodes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=8, unique=true)
     * @Groups({"order", "promoCode"})
     */
    private $code;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"order", "promoCode"})
     */
    private $percent;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="promoCodes")
     */
    private $users;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"promoCode"})
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"promoCode"})
     */
    private $systemic;

    public function __construct()
    {
        $this->systemic = false;
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getPercent(): ?int
    {
        return $this->percent;
    }

    public function setPercent(int $percent): self
    {
        $this->percent = $percent;

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
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->users->removeElement($user);

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSystemic(): ?bool
    {
        return $this->systemic;
    }

    public function setSystemic(bool $systemic): self
    {
        $this->systemic = $systemic;

        return $this;
    }
}
