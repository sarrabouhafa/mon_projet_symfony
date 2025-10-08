<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AuthorRepository;

class AuthorController extends AbstractController
{
    private AuthorRepository $authorRepository ;

    function __construct(AuthorRepository $authorRepository){
        $this->authorRepository=$authorRepository;
    }

    #[Route('/findAllAuthors', name:'findAllAuthors')]
    public function findAllAuthors():Response{
        $authors=$this->authorRepository->findAll();
        return $this->render('author/listAuthors.html.twig',['authors'=>$authors]);
    }

    #[Route('/find/{$ID}', name:'findAllAuthors')]
    public function findAllAuthors():Response{
        $authors=$this->authorRepository->findAll();
        return $this->render('author/listAuthors.html.twig',['authors'=>$authors]);
    }


    #[Route('/author/{name}', name: 'app_show_author')]
    public function showAuthor(string $name): Response
    {
        return $this->render('author/show.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/authors', name: 'app_authors')]
    public function listAuthors(): Response
    {
        $authors = [
            ['id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
            ['id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
            ['id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
        ];

        return $this->render('author/list.html.twig', [
            'authors' => $authors,
        ]);
    }
    #[Route('/author/details/{id}', name: 'app_author_details')]
public function authorDetails(int $id): Response
{
    $authors = [
        1 => ['id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
        2 => ['id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
        3 => ['id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
    ];

    $author = $authors[$id] ?? null;

    if (!$author) {
        throw $this->createNotFoundException("Auteur introuvable !");
    }

    return $this->render('author/showAuthor.html.twig', [
        'author' => $author,
    ]);
}

}
