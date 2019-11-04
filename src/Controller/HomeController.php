<?php


namespace App\Controller;


use App\Repository\EducationRepository;
use App\Repository\ExperienceRepository;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

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

    /**
     * @Route("/project/lescreatifsdepuygareau", name="project_lcdp")
     */
    public function projectLcdp()
    {
        return $this->render('project.html.twig');
    }

}