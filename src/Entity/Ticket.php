<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TciketRepository::class)
 * @ORM\Table(name="`ticket`")
 */
class Ticket
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $category;

    /**
     * @ORM\Column(type="json")
     */
    private $subject = [];

    /**
     * @var string The hashed content
     * @ORM\Column(type="string")
     */
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }
    public function getSubject(): string
    {
        return  return $this->subject;
    }
	public function setSubject(string $subject): self
    {
        $this->subject= $subject;

        return $this;
    }
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
