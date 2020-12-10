<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class QuestionController extends AbstractController
{
    /**
     * @Route("/") 
     */
    public function homepage() {
        return $this->render('question/homepage.html.twig');
    }
    
    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug) {
        
        $answers = [
            'Odgoro prvi na nesto sto nema odgovora',
            'Odgovor dva na nesto sto je bezveze',
            'Odgovor tri ne znam ni sta ce mi',
        ];
        
        dump($slug, $this);
        
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }
}

