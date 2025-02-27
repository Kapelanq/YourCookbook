<?php
namespace App\Services;

use App\Entity\Recipe;
use App\Interfaces\RecipeRepositoryInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class RecipesService
{

    public function __construct(
        private RecipeRepositoryInterface $recipesRepository,
        private HttpClientInterface $client
    ){}

    public function searchRecipe($name)
    {
        //www.themealdb.com/api/json/v1/1/search.php?s=chicken
        $response = $this->client->request('POST', "http://www.themealdb.com/api/json/v1/1/search.php?s=$name");
    
        $responseArray = $response->toArray();

        return $responseArray;

    }

}