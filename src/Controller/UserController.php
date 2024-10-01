<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/', name: 'app_user')]
    public function index(UserRepository $ur): Response
    {
        $user = $ur->findAll();
        return $this->render('user/index.html.twig', [
            'user' => $user,
        ]);
    }
}
