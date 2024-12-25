<?php

class Recipe
{

    private $id;
    private $title;
    private $ingredients;
    private $instructions;
    private $category;
    private $createdAt;
    private $userId;

    private static $categoryTranslations = array(
        "appetizer" => "Apéritif",
        "starter" => "Entrée",
        "main-course" => "Plat principal",
        "drink" => "Boisson",
        "desert" => "Dessert"
    );

    public function __construct($id, $title, $ingredients, $instructions, $category, $createdAt, $userId)
    {
        $this->id = $id;
        $this->title = $title;
        $this->ingredients = $ingredients;
        $this->instructions = $instructions;
        $this->category = $category;
        $this->createdAt = $createdAt;
        $this->userId = $userId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function getInstructions()
    {
        return $this->instructions;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getTranslatedCategory()
    {
        return Recipe::$categoryTranslations[$this->category];
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUserId()
    {
        return $this->userId;
    }
}
