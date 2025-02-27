<?php

namespace App\Controller;

use App\Services\RecipesService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApplicationController extends AbstractController
{
    public function __construct(
        private RecipesService $recipesService,
    )
    {
        
    }

    #[Route('/searchRecipe', name: 'post_searchRecipe', methods:['POST'])]
    public function searchRecipe(Request $request): Response
    {
        $data = $request->getContent();

        $recipe = $this->recipesService->searchRecipe($data);
        $serialized = $this->container->get('serializer')->serialize($recipe, 'json');

        $response = new Response(
            $serialized,
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
        return $response;
    }

    #[Route('/recipes', name: 'app_recipes')]
    public function getAllRecipes(): Response
    {
        return $this->render('application/index.html.twig', [
            'controller_name' => 'ApplicationController',
        ]);
    }
}
