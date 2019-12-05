<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArmeController extends AbstractController
{

    /**
     * @Route("/armes", name="armes")
     */
    public function armes()
    {
        Arme::creerArme();
        return $this->render('arme/armes.html.twig', [
            'controller_name' => 'ArmeController',
            'armes' => Arme::$armes
        ]);
    }

    /**
     * @Route("/arme/{nom}", name="afficher_arme")
     */
    public function afficherArme($nom)
    {
        Arme::creerArme();
        $arme = Arme::getArmeByName($nom);
        return $this->render('arme/arme.html.twig', [
            'controller_name' => 'ArmeController',
            'arme' => $arme,
        ]);
    }
}
