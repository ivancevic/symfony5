<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class TableController extends AbstractController
{
    /**
     * @Route("/table", name="app_table")
     */
    public function table() {
        return $this->render('question/table.html.twig');
    }
    
    /**
     * @Route("/table/{first}/{last}/{handle}", name="app_table_save")
     */
    public function saveTable($first, $last, $handle) {
        return new JsonResponse([
            'first' => $first,
            'last' => $last,
            'handle' => $handle,
        ]);
    }
}

