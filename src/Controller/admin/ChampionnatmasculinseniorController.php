<?php

namespace App\Controller\admin;

use App\Entity\ChampionnatMasculinSenior;
use App\Entity\Club;
use App\Form\LevelType;
use App\Repository\ChampionnatMasculinSeniorRepository;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;

class ChampionnatmasculinseniorController extends AbstractController
{
    /**
     * @Route("/admin/niveaux", name="admin_niveaux")
     */
    public function accueil(ChampionnatMasculinSeniorRepository $championnatMasculinSeniorRepository)
    {
        $niveaux = $championnatMasculinSeniorRepository->findAll();


        return $this->render('admin/index_niveaux.html.twig', [
            'niveaux' => $niveaux

        ]);

    }
    /**
     * @route("admin/club_level/update/{id}", name="admin_club_level_update")
     */
    public function updateClub(ChampionnatMasculinSeniorRepository $championnatMasculinSeniorRepository, $id, Request $request, EntityManagerInterface $entityManager)
    {
        //recuperer un livre en bdd
        $level = $championnatMasculinSeniorRepository->find($id);
        //je crée un formulaire qui est relié a mon nouveau livre
        $formLevel = $this->createForm(LevelType::class, $level);

        $formLevel->handleRequest($request);
        //je demande a mon formulaire $formBook de gerer les données
        //de ma requete post
        if($formLevel->isSubmitted() && $formLevel->isValid()){
            //je persist le book
            $entityManager->persist($level);
            $entityManager->flush();
        }
        return $this->render('admin/club_level_modifier.html.twig', [
            'formLevel' => $formLevel->createView()
        ]);
    }
}