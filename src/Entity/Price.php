<?php

namespace App\Entity;

use App\Repository\PriceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PriceRepository::class)
 */
class Price
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="json")
     */
    private $list = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $subsequence;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $icon;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="boolean")
     */
    private $allotted;

    public function __construct() {
        $this->active = true;
        $this->allotted = false;
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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

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

    public function getList(): ?array
    {
        return $this->list;
    }

    public function setList(array $list): self
    {
        $this->list = $list;

        return $this;
    }

    public function getSubsequence(): ?int
    {
        return $this->subsequence;
    }

    public function setSubsequence(int $subsequence): self
    {
        $this->subsequence = $subsequence;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getAllotted(): ?bool
    {
        return $this->allotted;
    }

    public function setAllotted(bool $allotted): self
    {
        $this->allotted = $allotted;

        return $this;
    }
}
