<?php

namespace App\Controller\admin;

use App\Entity\ChampionnatMasculinSenior;
use App\Entity\Club;
use App\Form\ClubType;
use App\Repository\ChampionnatMasculinSeniorRepository;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;

class ClubController extends AbstractController
{
    /**
     * @Route("/admin/clubs", name="admin_clubs_modifier")
     */
    public function accueil(ClubRepository $clubRepository, ChampionnatMasculinSeniorRepository $championnatMasculinSeniorRepository)
    {
        $clubs = $clubRepository->findAll();
        $niveaux = $championnatMasculinSeniorRepository->findAll();

        return $this->render('admin/index_clubs_modifier.html.twig', [
            'clubs' => $clubs,
            'niveaux' => $niveaux

        ]);

    }


    /**
     * @route("admin/club/update/{id}", name="admin_club_update")
     */
    public function updateClub(ClubRepository $clubRepository, $id, Request $request, EntityManagerInterface $entityManager)
    {
        //recuperer un livre en bdd
        $club = $clubRepository->find($id);
        //je crée un formulaire qui est relié a mon nouveau livre
        $formClub = $this->createForm(ClubType::class, $club);

        $formClub->handleRequest($request);
        //je demande a mon formulaire $formBook de gerer les données
        //de ma requete post
        if($formClub->isSubmitted() && $formClub->isValid()){
            //je persist le book
            $entityManager->persist($club);
            $entityManager->flush();
        }
        return $this->render('admin/club_modifier.html.twig', [
            'formClub' => $formClub->createView()
        ]);
    }
/*
    /**
     * @Route("admin/search", name="admin_club_search")
     */

/*
    Public function searchByName(ClubRepository $clubRepository, Request $request)
    {
        $word = $request->query->get('word');
        $clubs = $clubRepository->getByWordInName($word);

        return $this->render('admin/index_clubs_modifier.html.twig',[
            'clubs' => $clubs,
            'word' => $word
        ]);
    }
   PAS REUSSI A LE FAIRE */

}