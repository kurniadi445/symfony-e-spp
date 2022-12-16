<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AutentikasiController extends AbstractController
{
    #[Route('/autentikasi/masuk', name: 'app_autentikasi_masuk')]
    public function masuk(): Response
    {
        return $this->render('tampilan/autentikasi/masuk.html.twig');
    }
}
