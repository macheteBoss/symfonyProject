<?php

namespace App\Entity;

use App\Repository\MainSliderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MainSliderRepository::class)
 */
class MainSlider
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $button;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $urlButton;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $titleButton;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageUrl;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="integer")
     */
    private $subsequence;

    public function __construct() {
        $this->active = true;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getButton(): ?bool
    {
        return $this->button;
    }

    public function setButton(bool $button): self
    {
        $this->button = $button;

        return $this;
    }

    public function getUrlButton(): ?string
    {
        return $this->urlButton;
    }

    public function setUrlButton(?string $urlButton): self
    {
        $this->urlButton = $urlButton;

        return $this;
    }

    public function getTitleButton(): ?string
    {
        return $this->titleButton;
    }

    public function setTitleButton(?string $titleButton): self
    {
        $this->titleButton = $titleButton;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

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

    public function getSubsequence(): ?int
    {
        return $this->subsequence;
    }

    public function setSubsequence(int $subsequence): self
    {
        $this->subsequence = $subsequence;

        return $this;
    }
}
