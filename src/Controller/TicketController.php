<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TicketController extends AbstractController
{
    /**
     * @Route("/ticket", name="ticket")
     */
    public function index(): Response
    {
        $companies = [
            'category'=>'Lorem ipsum dolor sit amet', 
            'subject'=> 'Lorem ipsum dolor sit amet', 
            'description'=>'Lorem ipsum dolor sit amet',
            'content'=>'Lorem ipsum dolor sit amet' 
        ];

        return $this->render('list/index.html.twig', [
            'controller_name' => $companies,
        ]);
    }
}
