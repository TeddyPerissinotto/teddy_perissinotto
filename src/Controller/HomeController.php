<?php


namespace App\Controller;


use App\Repository\EducationRepository;
use App\Repository\ExperienceRepository;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homePage(ExperienceRepository $experienceRepository, EducationRepository $educationRepository, ProjectRepository $projectRepository)
    {
        $experiences = $experienceRepository->findAll();
        $educations = $educationRepository->findAll();
        $projects = $projectRepository->findAll();

        return $this->render('homePage.html.twig',
            [
                'experiences'=>$experiences,
                'educations'=>$educations,
                'projects'=>$projects
            ]);
    }
}