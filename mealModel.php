<?php
    class MealModel{
        function __construct($id , $name, $image ,$youtube, $instruction ,$calo ,$ingredient , $carbo ,$protein){
            $this->id = $id;
            $this->name = $name;
            $this->image = $image;
            $this->youtube = $youtube;
            $this->instruction = $instruction;
            $this->calo = $calo;
            $this->ingredient = $ingredient;
            $this->carbo = $carbo;
            $this->protein = $protein;
        }
    }
?>