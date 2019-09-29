<?php


namespace App\Controller;


use App\Repository\EducationRepository;
use App\Repository\ExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homePage(ExperienceRepository $experienceRepository, EducationRepository $educationRepository)
    {
        $experiences = $experienceRepository->findAll();
        $educations = $educationRepository->findAll();

        return $this->render('homePage.html.twig',
            [
                'experiences'=>$experiences,
                'educations'=>$educations
            ]);
    }
}