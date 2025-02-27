<?php
namespace App\Interfaces;

use App\Entity\Recipe;

interface RecipeRepositoryInterface{
    public function getAllRecipes():?Array;
}

