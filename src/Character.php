<?php
declare(strict_types=1);

namespace Game;

/**
 * Class Character
 *
 * This class represents a character in the game.
 */
class Character
{

    private string $name;
    private string $role;
    private ?CharacterStats $stats = null;

    private Inventory $inventory;
    public Equipment $equipment;


    /**
     * Character constructor.
     * Initializes inventory and equipment properties.
     *
     * @param int $maxSlots
     */
    public function __construct(int $maxSlots = 10)
    {
        $this->inventory = new Inventory($maxSlots);
        $this->equipment = new Equipment();
    }

    /**
     * Equip an armor item from the inventory.
     *
     * @param Item $armor
     * @return string
     */
    public function equipArmor(Item $armor): string
    {
        // 1. Check if the item is of type 'armor'
        if (strtolower($armor->getType()) !== 'armor') {
            return "Item is not armor.";
        }

        // 2. Check if the item exists in the character's inventory
        if (!$this->inventory->getItem($armor->getName())) {
            return "Item not found in inventory.";
        }

        // 3. Equip the armor via the Equipment object
        $this->equipment->setEquippedArmor($armor->getName());

        // 4. Return a success message
        return "Armor equipped: " . $armor->getName();
    }

    /**
     * Equip a weapon from the character's inventory.
     *
     * @param Item $weapon
     * @return string
     */
    public function equipWeapon(Item $weapon): string
    {
        //strtolower(...) Zet de tekst volledig om naar kleine letters.
        if (strtolower($weapon->getType()) !== 'weapon') {
            return "Item is not a weapon.";
        }


        if (!$this->inventory->getItem($weapon->getName())) {
            return "Item not found in inventory.";
        }


        $this->equipment->setEquippedWeapon($weapon->getName());

        return "Weapon equipped: " . $weapon->getName();
    }

    /**
     * Get the character's equipment.
     *
     * @return Equipment
     */
    public function getEquipment(): Equipment
    {
        return $this->equipment;
    }


    /**
     * Get the character's inventory.
     *
     * @return Inventory
     */
    public function getInventory(): Inventory
    {
        return $this->inventory;
    }

    /**
     * @param Inventory $inventory
     * @return $this
     */
    public function setInventory(Inventory $inventory)
    {
        $this->inventory = $inventory;
        return $this;
    }




    /**
     * @return string
     */
    public function displayInfo(): string
    {
        return $this->name . " " . $this->role . "<br>";
    }


    // Setters

    /**
     * Set the name of the character.
     *
     * @param string $name
     * @return string
     */
    public function setName(string $name): string
    {
        $this->name = $name;
        if (empty($name)) {
            return "Error: Name cannot be empty. <br>";
        }

        return "Success: Name set to '$name'. <br>";
    }

    /**
     * Set the role of the character.
     *
     * @param string $role
     * @return string
     */
    public function setRole(string $role): string
    {
        $this->role = $role;
        if (empty($role)) {
            return "Error: Role cannot be empty. <br>";
        }

        return "Success: Role set to '$role'. <br>";
    }


    // Getters

    /**
     * Get the name of the character.
     *
     * @return string
     */
    public function getName(): string
    {
        return ucfirst($this->name);
    }

    /**
     * Get the role of the character.
     *
     * @return string
     */
    public function getRole(): string
    {
        return ucfirst($this->role);
    }

    /**
     * Get the linked stats object.
     *
     * @return ?CharacterStats
     */
    public function getStats(): ?CharacterStats
    {
        return $this->stats;
    }

    // Bulk setter

    /**
     * Set both name and role at once.
     *
     * @param string $name
     * @param string $role
     * @return string
     */
    public function setCharacter(string $name, string $role): string
    {
        $messages = [];
        $messages[] = $this->setName($name);
        $messages[] = $this->setRole($role);
        return implode(' ', $messages);
    }

    // Setter for stats property

    /**
     * @param CharacterStats $stats
     * @return void
     */
    public function setStats(CharacterStats $stats): void
    {
        $this->stats = $stats;
    }

    /**
     * Provide a short description of the character.
     * Shows name, role, and health (if a stats object is available).
     *
     * @return string
     */
    public function getSummary(): string
    {
        $health = $this->stats?->getHealth() ?? 'unknown';
        return "{$this->name} is a {$this->role} with {$health} health. <br>";
    }


    /**
     * Reduces the character's health via the stats object.
     * Health cannot drop below 0.
     *
     * @param int $amount
     * @return void
     */
    public function takeDamage(int $amount): void
    {
        if ($this->stats !== null) {
            $newHealth = $this->stats->getHealth() - $amount;
            if ($newHealth < 0) {
                $newHealth = 0;
            }
            $this->stats->setHealth($newHealth);
        }
    }
}
