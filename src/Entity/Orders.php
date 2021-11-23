<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 * @ORM\EntityListeners({"App\EventListener\OrderChangedListener"})
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"order", "referral"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     * @Groups({"order"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     * @Groups({"order"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20)
     * @Groups({"order"})
     */
    private $phone;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"order"})
     */
    private $countJoystick;

    /**
     * @ORM\Column(type="text")
     * @Groups({"order"})
     */
    private $address;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"order"})
     */
    private $comment;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"order"})
     */
    private $dateTime;

    /**
     * @ORM\Column(type="float")
     * @Groups({"order"})
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"order"})
     */
    private $days;

    /**
     * @ORM\ManyToOne(targetEntity=Statuses::class, inversedBy="orders")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"order"})
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Devices::class, inversedBy="orders")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"order"})
     */
    private $device;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="orders")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=PromoCodes::class, inversedBy="orders")
     * @Groups({"order"})
     */
    private $promoCode;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCountJoystick(): ?int
    {
        return $this->countJoystick;
    }

    public function setCountJoystick(int $countJoystick): self
    {
        $this->countJoystick = $countJoystick;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDays(): ?int
    {
        return $this->days;
    }

    public function setDays(int $days): self
    {
        $this->days = $days;

        return $this;
    }

    public function getStatus(): ?Statuses
    {
        return $this->status;
    }

    public function setStatus(?Statuses $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDevice(): ?Devices
    {
        return $this->device;
    }

    public function setDevice(?Devices $device): self
    {
        $this->device = $device;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPromoCode(): ?PromoCodes
    {
        return $this->promoCode;
    }

    public function setPromoCode(?PromoCodes $promoCode): self
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    public function serializator() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'date' => $this->dateTime->format('Y-m-d H:i:s'),
            'device' => $this->device->getName(),
            'countJoystick' => $this->countJoystick,
            'days' => $this->days,
            'price' => $this->price,
            'address' => $this->address,
            'comment' => $this->comment,
        ];
    }
}
