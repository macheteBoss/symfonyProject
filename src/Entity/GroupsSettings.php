<?php

namespace App\Entity;

use App\Repository\GroupsSettingsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GroupsSettingsRepository::class)
 */
class GroupsSettings
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
     * @ORM\Column(type="string", length=150)
     */
    private $code;

    /**
     * @ORM\OneToMany(targetEntity=Settings::class, mappedBy="groupSetting")
     */
    private $settings;

    public function __construct()
    {
        $this->settings = new ArrayCollection();
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return Collection|Settings[]
     */
    public function getSettings(): Collection
    {
        return $this->settings;
    }

    public function addSetting(Settings $setting): self
    {
        if (!$this->settings->contains($setting)) {
            $this->settings[] = $setting;
            $setting->setGroupSetting($this);
        }

        return $this;
    }

    public function removeSetting(Settings $setting): self
    {
        if ($this->settings->removeElement($setting)) {
            // set the owning side to null (unless already changed)
            if ($setting->getGroupSetting() === $this) {
                $setting->setGroupSetting(null);
            }
        }

        return $this;
    }
}
