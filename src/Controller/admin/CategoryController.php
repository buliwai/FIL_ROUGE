<?php

namespace App\Controller\admin;

use App\Entity\ChampionnatMasculinSenior;
use App\Entity\Club;
use App\Form\LevelType;
use App\Repository\CategoryRepository;
use App\Repository\ChampionnatMasculinSeniorRepository;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends AbstractController
{
    /**
     * @Route("/admin/categories", name="admin_categories")
     */
    public function accueil(CategoryRepository $categoryRepository)
    {
        $categorie = $categoryRepository->findAll();


        return $this->render('admin/index_categories.html.twig', [
            'categorie' => $categorie

        ]);

    }

}