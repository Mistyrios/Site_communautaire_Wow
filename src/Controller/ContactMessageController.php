<?php

namespace App\Controller;

use App\Entity\ContactMessage;
use App\Form\ContactMessageType;
use App\Repository\ContactMessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/contact')]
class ContactMessageController extends AbstractController
{
    #[Route('/', name: 'contact_message_index', methods: ['GET'])]
    public function index(ContactMessageRepository $contactMessageRepository): Response
    {
        return $this->render('contact_message/index.html.twig', [
            'contact_messages' => $contactMessageRepository->findBy([],['createdAt' => 'DESC']),
        ]);
    }

    #[Route('/{id}', name: 'contact_message_show', methods: ['GET'])]
    public function show(ContactMessage $contactMessage): Response
    {
        return $this->render('contact_message/show.html.twig', [
            'contact_message' => $contactMessage,
        ]);
    }

    #[Route('/{id}', name: 'contact_message_delete', methods: ['POST'])]
    public function delete(Request $request, ContactMessage $contactMessage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contactMessage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contactMessage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('contact_message_index', [], Response::HTTP_SEE_OTHER);
    }
}
