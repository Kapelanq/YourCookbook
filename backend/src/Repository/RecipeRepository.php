<?php

namespace App\Repository;

use App\Entity\Recipe;
use App\Interfaces\RecipeRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class RecipeRepository extends ServiceEntityRepository implements RecipeRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recipe::class);
    }

    public function getAllRecipes(): ?array
    {
        return $this->findAll();
    }
}
