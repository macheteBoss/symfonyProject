<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"username"}, message="Учетная запись с таким именем пользователя уже существует")
 * @UniqueEntity(fields={"email"}, message="Учетная запись с таким Email уже существует")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40, unique=true)
     * @Groups({"referral"})
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=40)
     * @Groups({"referral"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=254, unique=true)
     * @Groups({"referral"})
     */
    private $email;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     * @Groups({"referral"})
     */
    private $phone;

    /**
     * @ORM\OneToMany(targetEntity=Orders::class, mappedBy="user")
     * @Groups({"referral"})
     */
    private $orders;

    /**
     * @Groups({"referral"})
     */
    private $completedOrders;

    /**
     * @ORM\ManyToMany(targetEntity=PromoCodes::class, mappedBy="users")
     * @Groups({"promoCode"})
     */
    private $promoCodes;

    /**
     * @ORM\Column(type="string", length=8)
     * @Groups({"referral"})
     */
    private $refToken;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="refUsers")
     */
    private $parentUser;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="parentUser")
     */
    private $refUsers;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTime;

    public function __construct() {
        $this->active = true;
        $this->orders = new ArrayCollection();
        $this->promoCodes = new ArrayCollection();
        $this->refUsers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;

        // guarantees that a user always has at least one role for security
        if (empty($roles)) {
            $roles[] = 'ROLE_USER';
        }

        return array_unique($roles);
    }

    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSalt(): ?string
    {
        // We're using bcrypt in security.yaml to encode the password, so
        // the salt value is built-in and and you don't have to generate one
        // See https://en.wikipedia.org/wiki/Bcrypt
        return null;
    }

    /**
     * Removes sensitive data from the user.
     */
    public function eraseCredentials(): void
    {
        // if you had a plainPassword property, you'd nullify it here
        // $this->plainPassword = null;
    }

    public function getUserIdentifier() {
        return $this->id;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->email,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->email,
            ) = unserialize($serialized, array('allowed_classes' => false));
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return Collection|Orders[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    /**
     * @return Collection
     */
    public function getCompletedOrders(): Collection
    {
        $this->completedOrders = new ArrayCollection();

        foreach ($this->getOrders() as $order) {
            if ($order->getStatus()->getCode() == 'completed') {
                $this->completedOrders->add($order);
            }
        }

        return $this->completedOrders;
    }

    public function addOrder(Orders $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setUser($this);
        }

        return $this;
    }

    public function removeOrder(Orders $order): self
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getUser() === $this) {
                $order->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PromoCodes[]
     */
    public function getPromoCodes(): Collection
    {
        return $this->promoCodes;
    }

    public function addPromoCode(PromoCodes $promoCode): self
    {
        if (!$this->promoCodes->contains($promoCode)) {
            $this->promoCodes[] = $promoCode;
            $promoCode->addUser($this);
        }

        return $this;
    }

    public function removePromoCode(PromoCodes $promoCode): self
    {
        if ($this->promoCodes->removeElement($promoCode)) {
            $promoCode->removeUser($this);
        }

        return $this;
    }

    public function getRefToken(): ?string
    {
        return $this->refToken;
    }

    public function setRefToken(string $refToken): self
    {
        $this->refToken = $refToken;

        return $this;
    }

    public function getParentUser(): ?self
    {
        return $this->parentUser;
    }

    public function setParentUser(?self $parentUser): self
    {
        $this->parentUser = $parentUser;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getRefUsers(): Collection
    {
        return $this->refUsers;
    }

    public function addRefUser(self $refUser): self
    {
        if (!$this->refUsers->contains($refUser)) {
            $this->refUsers[] = $refUser;
            $refUser->setParentUser($this);
        }

        return $this;
    }

    public function removeRefUser(self $refUser): self
    {
        if ($this->refUsers->removeElement($refUser)) {
            // set the owning side to null (unless already changed)
            if ($refUser->getParentUser() === $this) {
                $refUser->setParentUser(null);
            }
        }

        return $this;
    }

    public function getDateTime(): ?string
    {
        return $this->dateTime->format('Y-m-d H:i:s');
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }
}
