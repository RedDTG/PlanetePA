<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isOnSale;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPreOrder;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isSoldOut;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity=ProductTypes::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getIsOnSale(): ?bool
    {
        return $this->isOnSale;
    }

    public function setIsOnSale(bool $isOnSale): self
    {
        $this->isOnSale = $isOnSale;

        return $this;
    }

    public function getIsPreOrder(): ?bool
    {
        return $this->isPreOrder;
    }

    public function setIsPreOrder(bool $isPreOrder): self
    {
        $this->isPreOrder = $isPreOrder;

        return $this;
    }

    public function getIsSoldOut(): ?bool
    {
        return $this->isSoldOut;
    }

    public function setIsSoldOut(bool $isSoldOut): self
    {
        $this->isSoldOut = $isSoldOut;

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

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getType(): ?ProductTypes
    {
        return $this->type;
    }

    public function setType(?ProductTypes $type): self
    {
        $this->type = $type;

        return $this;
    }
}
