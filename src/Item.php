<?php
declare(strict_types=1);

namespace Game;

/**
 * Class Item
 *
 * An Item represents an object in the game, such as a sword or potion.
 */
class Item
{
    private string $name;
    private string $type;
    private int $value;
    private int $attackBonus;
    private int $defenseBonus;
    private int $healthBonus;
    private string $specialEffect;

    public function displayItem(): string
    {
        return "Item Name: " . $this->name .
            "<br>Type: " . $this->type .
            "<br>Value: " . $this->value .
            "<br>Attack Bonus: " . $this->attackBonus .
            "<br>Defense Bonus: " . $this->defenseBonus .
            "<br>Health Bonus: " . $this->healthBonus .
            "<br>Special Effect: " . $this->specialEffect . "<br>";
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "Item:" . $this->name . ", Type: " . $this->type . ", Value: " . $this->value . "<br>";
    }

    // Setters

    /**
     * Set the name of the item.
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

        return "Name set -> $name <br>";
    }

    /**
     * Set the type of the item.
     *
     * @param string $type
     * @return string
     */
    public function setType(string $type): string
    {
        $this->type = $type;
        if (empty($type)) {
            return "Error: Type cannot be empty. <br>";
        }
        return "Type set -> $type <br>";
    }

    /**
     * Set the value of the item.
     *
     * @param int $value
     * @return string|null
     */
    public function setValue(int $value): ?string
    {
        $this->value = $value;
        if ($value < 0) {
            return "Error: Value cannot be negative. <br>";
        }
        return null;
    }

    /**
     * Set the attack bonus of the item.
     *
     * @param int $attackBonus
     * @return string|null
     */
    public function setAttackBonus(int $attackBonus): ?string
    {
        $this->attackBonus = $attackBonus;
        if ($attackBonus < 0) {
            return "Error: Attack Bonus cannot be negative. <br>";
        }
        return null;
    }

    /**
     * Set the defense bonus of the item.
     *
     * @param int $defenseBonus
     * @return string|null
     */
    public function setDefenseBonus(int $defenseBonus): ?string
    {
        $this->defenseBonus = $defenseBonus;
        if ($defenseBonus < 0) {
            return "Error: Defense Bonus cannot be negative. <br>";
        }
        return null;
    }

    /**
     * Set the health bonus of the item.
     *
     * @param int $healthBonus
     * @return string|null
     */
    public function setHealthBonus(int $healthBonus): ?string
    {
        $this->healthBonus = $healthBonus;
        if ($healthBonus < 0) {
            return "Error: Health Bonus cannot be negative. <br>";
        }
        return "Health Bonus set -> $healthBonus <br>";
    }

    /**
     * Set the special effect of the item.
     *
     * @param string $specialEffect
     * @return string
     */
    public function setSpecialEffect(string $specialEffect): string
    {
        if ($specialEffect)
        {
            $this->specialEffect = $specialEffect;
            return "Special effect set -> $specialEffect <br><br>";
        }

        return "Special effect: No special effect <br><br>";

    }

    // Getters

    /**
     * Get the name of the item.
     *
     * @return string
     */
    public function getName():string
    {
        return ucfirst($this->name ?? '');
    }

    /**
     * Get the type of the item.
     *
     * @return string
     */
    public function getType(): string
    {
        return ucfirst($this->type ?? '');
    }

    /**
     * Get the value of the item.
     *
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Get the attack bonus of the item.
     *
     * @return  int
     */
    public function getAttackBonus(): int
    {
        return $this->attackBonus;
    }

    /**
     * Get the defense bonus of the item.
     *
     * @return int
     */
    public function getDefenseBonus(): int
    {
        return $this->defenseBonus;
    }

    /**
     * Get the health bonus of the item.
     *
     * @return int
     */
    public function getHealthBonus(): int
    {
        return $this->healthBonus;
    }

    /**
     * Get the special effect of the item.
     *
     * @return string
     */
    public function getSpecialEffect(): string
    {
        return $this->specialEffect ? "$this->specialEffect <br><br>" : "No special effect <br><br>";
    }

    // Bulk setter

    /**
     * Set all properties of the item at once.
     *
     * @param string $name
     * @param string $type
     * @param int $value
     * @param int $attackBonus
     * @param int $defenseBonus
     * @param int $healthBonus
     * @param string $specialEffect
     * @return string
     */
    public function setItem(string $name, string $type, int $value, int $attackBonus = 0, int $defenseBonus = 0, int $healthBonus = 0, string $specialEffect = ""): string
    {
        $messages = [];
        $messages[] = $this->setName($name);
        $messages[] = $this->setType($type);
        $messages[] = $this->setValue($value);
        $messages[] = $this->setAttackBonus($attackBonus);
        $messages[] = $this->setDefenseBonus($defenseBonus);
        $messages[] = $this->setHealthBonus($healthBonus);
        $messages[] = $this->setSpecialEffect($specialEffect);
        return implode(' ', $messages);
    }
}
