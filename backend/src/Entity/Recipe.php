<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecipeRepository::class)]
class Recipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $idMeal = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeal = null;

    #[ORM\Column(length: 255)]
    private ?string $strDrinkAlternate = null;

    #[ORM\Column(length: 255)]
    private ?string $strCategory = null;

    #[ORM\Column(length: 255)]
    private ?string $strArea = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $strInstructions = null;

    #[ORM\Column(length: 255)]
    private ?string $strMealThumb = null;

    #[ORM\Column(length: 255)]
    private ?string $strTags = null;

    #[ORM\Column(length: 255)]
    private ?string $strYoutube = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient1 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient2 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient3 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient4 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient5 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient6 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient7 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient8 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient9 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient10 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient11 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient12 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient13 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient14 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient15 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient16 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient17 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient18 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient19 = null;

    #[ORM\Column(length: 255)]
    private ?string $strIngredient20 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure1 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure2 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure3 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure4 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure5 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure6 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure7 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure8 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure9 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure10 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure11 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure12 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure13 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure14 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure15 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure16 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure17 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure18 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure19 = null;

    #[ORM\Column(length: 255)]
    private ?string $strMeasure20 = null;

    #[ORM\Column(length: 255)]
    private ?string $strSource = null;

    #[ORM\Column(length: 255)]
    private ?string $strImageSource = null;

    #[ORM\Column(length: 255)]
    private ?string $strCreativeCommonsConfirmed = null;

    #[ORM\Column(length: 255)]
    private ?string $dateModified = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMeal(): ?string
    {
        return $this->idMeal;
    }

    public function setIdMeal(string $idMeal): static
    {
        $this->idMeal = $idMeal;

        return $this;
    }

    public function getStrMeal(): ?string
    {
        return $this->strMeal;
    }

    public function setStrMeal(string $strMeal): static
    {
        $this->strMeal = $strMeal;

        return $this;
    }

    public function getStrDrinkAlternate(): ?string
    {
        return $this->strDrinkAlternate;
    }

    public function setStrDrinkAlternate(string $strDrinkAlternate): static
    {
        $this->strDrinkAlternate = $strDrinkAlternate;

        return $this;
    }

    public function getStrCategory(): ?string
    {
        return $this->strCategory;
    }

    public function setStrCategory(string $strCategory): static
    {
        $this->strCategory = $strCategory;

        return $this;
    }

    public function getStrArea(): ?string
    {
        return $this->strArea;
    }

    public function setStrArea(string $strArea): static
    {
        $this->strArea = $strArea;

        return $this;
    }

    public function getStrInstructions(): ?string
    {
        return $this->strInstructions;
    }

    public function setStrInstructions(string $strInstructions): static
    {
        $this->strInstructions = $strInstructions;

        return $this;
    }

    public function getStrMealThumb(): ?string
    {
        return $this->strMealThumb;
    }

    public function setStrMealThumb(string $strMealThumb): static
    {
        $this->strMealThumb = $strMealThumb;

        return $this;
    }

    public function getStrTags(): ?string
    {
        return $this->strTags;
    }

    public function setStrTags(string $strTags): static
    {
        $this->strTags = $strTags;

        return $this;
    }

    public function getStrYoutube(): ?string
    {
        return $this->strYoutube;
    }

    public function setStrYoutube(string $strYoutube): static
    {
        $this->strYoutube = $strYoutube;

        return $this;
    }

    public function getStrIngredient1(): ?string
    {
        return $this->strIngredient1;
    }

    public function setStrIngredient1(string $strIngredient1): static
    {
        $this->strIngredient1 = $strIngredient1;

        return $this;
    }

    public function getStrIngredient2(): ?string
    {
        return $this->strIngredient2;
    }

    public function setStrIngredient2(string $strIngredient2): static
    {
        $this->strIngredient2 = $strIngredient2;

        return $this;
    }

    public function getStrIngredient3(): ?string
    {
        return $this->strIngredient3;
    }

    public function setStrIngredient3(string $strIngredient3): static
    {
        $this->strIngredient3 = $strIngredient3;

        return $this;
    }

    public function getStrIngredient4(): ?string
    {
        return $this->strIngredient4;
    }

    public function setStrIngredient4(string $strIngredient4): static
    {
        $this->strIngredient4 = $strIngredient4;

        return $this;
    }

    public function getStrIngredient5(): ?string
    {
        return $this->strIngredient5;
    }

    public function setStrIngredient5(string $strIngredient5): static
    {
        $this->strIngredient5 = $strIngredient5;

        return $this;
    }

    public function getStrIngredient6(): ?string
    {
        return $this->strIngredient6;
    }

    public function setStrIngredient6(string $strIngredient6): static
    {
        $this->strIngredient6 = $strIngredient6;

        return $this;
    }

    public function getStrIngredient7(): ?string
    {
        return $this->strIngredient7;
    }

    public function setStrIngredient7(string $strIngredient7): static
    {
        $this->strIngredient7 = $strIngredient7;

        return $this;
    }

    public function getStrIngredient8(): ?string
    {
        return $this->strIngredient8;
    }

    public function setStrIngredient8(string $strIngredient8): static
    {
        $this->strIngredient8 = $strIngredient8;

        return $this;
    }

    public function getStrIngredient9(): ?string
    {
        return $this->strIngredient9;
    }

    public function setStrIngredient9(string $strIngredient9): static
    {
        $this->strIngredient9 = $strIngredient9;

        return $this;
    }

    public function getStrIngredient10(): ?string
    {
        return $this->strIngredient10;
    }

    public function setStrIngredient10(string $strIngredient10): static
    {
        $this->strIngredient10 = $strIngredient10;

        return $this;
    }

    public function getStrIngredient11(): ?string
    {
        return $this->strIngredient11;
    }

    public function setStrIngredient11(string $strIngredient11): static
    {
        $this->strIngredient11 = $strIngredient11;

        return $this;
    }

    public function getStrIngredient12(): ?string
    {
        return $this->strIngredient12;
    }

    public function setStrIngredient12(string $strIngredient12): static
    {
        $this->strIngredient12 = $strIngredient12;

        return $this;
    }

    public function getStrIngredient13(): ?string
    {
        return $this->strIngredient13;
    }

    public function setStrIngredient13(string $strIngredient13): static
    {
        $this->strIngredient13 = $strIngredient13;

        return $this;
    }

    public function getStrIngredient14(): ?string
    {
        return $this->strIngredient14;
    }

    public function setStrIngredient14(string $strIngredient14): static
    {
        $this->strIngredient14 = $strIngredient14;

        return $this;
    }

    public function getStrIngredient15(): ?string
    {
        return $this->strIngredient15;
    }

    public function setStrIngredient15(string $strIngredient15): static
    {
        $this->strIngredient15 = $strIngredient15;

        return $this;
    }

    public function getStrIngredient16(): ?string
    {
        return $this->strIngredient16;
    }

    public function setStrIngredient16(string $strIngredient16): static
    {
        $this->strIngredient16 = $strIngredient16;

        return $this;
    }

    public function getStrIngredient17(): ?string
    {
        return $this->strIngredient17;
    }

    public function setStrIngredient17(string $strIngredient17): static
    {
        $this->strIngredient17 = $strIngredient17;

        return $this;
    }

    public function getStrIngredient18(): ?string
    {
        return $this->strIngredient18;
    }

    public function setStrIngredient18(string $strIngredient18): static
    {
        $this->strIngredient18 = $strIngredient18;

        return $this;
    }

    public function getStrIngredient19(): ?string
    {
        return $this->strIngredient19;
    }

    public function setStrIngredient19(string $strIngredient19): static
    {
        $this->strIngredient19 = $strIngredient19;

        return $this;
    }

    public function getStrIngredient20(): ?string
    {
        return $this->strIngredient20;
    }

    public function setStrIngredient20(string $strIngredient20): static
    {
        $this->strIngredient20 = $strIngredient20;

        return $this;
    }

    public function getStrMeasure1(): ?string
    {
        return $this->strMeasure1;
    }

    public function setStrMeasure1(string $strMeasure1): static
    {
        $this->strMeasure1 = $strMeasure1;

        return $this;
    }

    public function getStrMeasure2(): ?string
    {
        return $this->strMeasure2;
    }

    public function setStrMeasure2(string $strMeasure2): static
    {
        $this->strMeasure2 = $strMeasure2;

        return $this;
    }

    public function getStrMeasure3(): ?string
    {
        return $this->strMeasure3;
    }

    public function setStrMeasure3(string $strMeasure3): static
    {
        $this->strMeasure3 = $strMeasure3;

        return $this;
    }

    public function getStrMeasure4(): ?string
    {
        return $this->strMeasure4;
    }

    public function setStrMeasure4(string $strMeasure4): static
    {
        $this->strMeasure4 = $strMeasure4;

        return $this;
    }

    public function getStrMeasure5(): ?string
    {
        return $this->strMeasure5;
    }

    public function setStrMeasure5(string $strMeasure5): static
    {
        $this->strMeasure5 = $strMeasure5;

        return $this;
    }

    public function getStrMeasure6(): ?string
    {
        return $this->strMeasure6;
    }

    public function setStrMeasure6(string $strMeasure6): static
    {
        $this->strMeasure6 = $strMeasure6;

        return $this;
    }

    public function getStrMeasure7(): ?string
    {
        return $this->strMeasure7;
    }

    public function setStrMeasure7(string $strMeasure7): static
    {
        $this->strMeasure7 = $strMeasure7;

        return $this;
    }

    public function getStrMeasure8(): ?string
    {
        return $this->strMeasure8;
    }

    public function setStrMeasure8(string $strMeasure8): static
    {
        $this->strMeasure8 = $strMeasure8;

        return $this;
    }

    public function getStrMeasure9(): ?string
    {
        return $this->strMeasure9;
    }

    public function setStrMeasure9(string $strMeasure9): static
    {
        $this->strMeasure9 = $strMeasure9;

        return $this;
    }

    public function getStrMeasure10(): ?string
    {
        return $this->strMeasure10;
    }

    public function setStrMeasure10(string $strMeasure10): static
    {
        $this->strMeasure10 = $strMeasure10;

        return $this;
    }

    public function getStrMeasure11(): ?string
    {
        return $this->strMeasure11;
    }

    public function setStrMeasure11(string $strMeasure11): static
    {
        $this->strMeasure11 = $strMeasure11;

        return $this;
    }

    public function getStrMeasure12(): ?string
    {
        return $this->strMeasure12;
    }

    public function setStrMeasure12(string $strMeasure12): static
    {
        $this->strMeasure12 = $strMeasure12;

        return $this;
    }

    public function getStrMeasure13(): ?string
    {
        return $this->strMeasure13;
    }

    public function setStrMeasure13(string $strMeasure13): static
    {
        $this->strMeasure13 = $strMeasure13;

        return $this;
    }

    public function getStrMeasure14(): ?string
    {
        return $this->strMeasure14;
    }

    public function setStrMeasure14(string $strMeasure14): static
    {
        $this->strMeasure14 = $strMeasure14;

        return $this;
    }

    public function getStrMeasure15(): ?string
    {
        return $this->strMeasure15;
    }

    public function setStrMeasure15(string $strMeasure15): static
    {
        $this->strMeasure15 = $strMeasure15;

        return $this;
    }

    public function getStrMeasure16(): ?string
    {
        return $this->strMeasure16;
    }

    public function setStrMeasure16(string $strMeasure16): static
    {
        $this->strMeasure16 = $strMeasure16;

        return $this;
    }

    public function getStrMeasure17(): ?string
    {
        return $this->strMeasure17;
    }

    public function setStrMeasure17(string $strMeasure17): static
    {
        $this->strMeasure17 = $strMeasure17;

        return $this;
    }

    public function getStrMeasure18(): ?string
    {
        return $this->strMeasure18;
    }

    public function setStrMeasure18(string $strMeasure18): static
    {
        $this->strMeasure18 = $strMeasure18;

        return $this;
    }

    public function getStrMeasure19(): ?string
    {
        return $this->strMeasure19;
    }

    public function setStrMeasure19(string $strMeasure19): static
    {
        $this->strMeasure19 = $strMeasure19;

        return $this;
    }

    public function getStrMeasure20(): ?string
    {
        return $this->strMeasure20;
    }

    public function setStrMeasure20(string $strMeasure20): static
    {
        $this->strMeasure20 = $strMeasure20;

        return $this;
    }

    public function getStrSource(): ?string
    {
        return $this->strSource;
    }

    public function setStrSource(string $strSource): static
    {
        $this->strSource = $strSource;

        return $this;
    }

    public function getStrImageSource(): ?string
    {
        return $this->strImageSource;
    }

    public function setStrImageSource(string $strImageSource): static
    {
        $this->strImageSource = $strImageSource;

        return $this;
    }

    public function getStrCreativeCommonsConfirmed(): ?string
    {
        return $this->strCreativeCommonsConfirmed;
    }

    public function setStrCreativeCommonsConfirmed(string $strCreativeCommonsConfirmed): static
    {
        $this->strCreativeCommonsConfirmed = $strCreativeCommonsConfirmed;

        return $this;
    }

    public function getDateModified(): ?string
    {
        return $this->dateModified;
    }

    public function setDateModified(string $dateModified): static
    {
        $this->dateModified = $dateModified;

        return $this;
    }
}
