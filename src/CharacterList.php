<?php
 namespace Game;


 /**
  * Class CharacterList
  * Manages a list of Character objects.
  */
 class CharacterList
 {

     /**
      * @var Character[] $characters
      */
     private array $characters = [];

     /**
      * Adds a Character to the list.
      * @param Character $character
      * @return string
      */
     public function addCharacter(Character $character): string
     {
         $this->characters[] = $character;
         return "Character {$character->getName()} added to list";
     }

     /**
      * Returns all Character objects.
      * @return Character[]
      */
     public function getCharacters(): array{
         return $this->characters;
     }


     /**
      * Searches for a character by name.
      * @param string $name
      * @return ?Character
      */
     public function getCharacter(string $name): ?Character
     {
         foreach ($this->characters as $character) {
             if ($character->getName() === $name) {
                 return $character;
             }
         }
         return null;
     }


     /**
      * Removes a character from the list.
      * @param Character $character
      * @return string
      */
     public function removeCharacter(Character $character): string
     {
         $key = array_search($character, $this->characters);

         if ($key !== false) {
             unset($this->characters[$key]);
             return "Character {$character->getName()} removed from list.";
         }
         return "Character {$character->getName()} not found.";
     }

 }