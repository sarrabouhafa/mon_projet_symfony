<?php

namespace App\Entity;

use App\Repository\AuthorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthorRepository::class)]
class Author
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
<<<<<<< HEAD
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $nbBooks = null;
=======
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column]
    private ?int $nbr_books = null;
>>>>>>> bc36c7eda1c65bfa3ceead6ff712c986f06cb49c

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
=======
    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;
>>>>>>> bc36c7eda1c65bfa3ceead6ff712c986f06cb49c

        return $this;
    }

    public function getEmail(): ?string
    {
<<<<<<< HEAD
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
=======
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;
>>>>>>> bc36c7eda1c65bfa3ceead6ff712c986f06cb49c

        return $this;
    }

<<<<<<< HEAD
    public function getNbBooks(): ?int
    {
        return $this->nbBooks;
    }

    public function setNbBooks(int $nbBooks): static
    {
        $this->nbBooks = $nbBooks;
=======
    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getnbr_books(): ?int
    {
        return $this->nbr_books;
    }

    public function setNbrBooks(int $nbr_books): static
    {
        $this->nbr_books = $nbr_books;
>>>>>>> bc36c7eda1c65bfa3ceead6ff712c986f06cb49c

        return $this;
    }
}
