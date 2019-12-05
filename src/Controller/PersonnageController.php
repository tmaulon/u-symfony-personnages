<?php

namespace App\Controller;

use App\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
        ]);
    }

    /**
     * @Route("/personnages", name="personnages")
     */
    public function persos()
    {
        Personnage::creerPersonnage();
        return $this->render('personnage/persos.html.twig', [
            'controller_name' => 'PersonnageController',
            'players' => Personnage::$personnages
        ]);
    }

    /**
     * @Route("/personnage/{nom}", name="afficher_personnage")
     */
    public function afficherPerso($nom)
    {
        Personnage::creerPersonnage();
        $perso = Personnage::getPersonnageByName($nom);
        return $this->render('personnage/perso.html.twig', [
            'controller_name' => 'PersonnageController',
            'perso' => $perso
        ]);
    }
}
