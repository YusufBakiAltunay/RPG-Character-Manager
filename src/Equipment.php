<?php
declare(strict_types=1);

namespace Game;

/**
 * Class Equipment
 *
 * Manages the equipment (weapons, armor, items) of a Character.
 */
class Equipment
{
    private ?string $equippedWeapon = null;
    private ?string $equippedArmor = null;

    /**
     * @return string
     */
    public function displayEquipment()
    {
        return $this->equippedWeapon . " " . $this->equippedArmor . "<br>";
    }

    // Setters

    /**
     * Sets the weapon for the equipment.
     *
     * @param string|null $equippedWeapon
     * @return string
     */
    public function setEquippedWeapon(?string $equippedWeapon)
    {
        $this->equippedWeapon = $equippedWeapon;

        return "Success: Weapon set to " . ($equippedWeapon ?? "null") . ". <br>";
    }

    /**
     * Sets the armor for the equipment.
     *
     * @param string|null $equippedArmor
     * @return string
     */
    public function setEquippedArmor(?string $equippedArmor)
    {
        $this->equippedArmor = $equippedArmor;

        return "Success: Armor set to " . ($equippedArmor ?? "null") . ". <br>";
    }

    // Getters

    /**
     * Gets the currently equipped weapon.
     *
     * @return string
     */
    public function getEquippedWeapon(): ?string
    {
        return $this->equippedWeapon ? "$this->equippedWeapon <br>" : "No weapon equipped <br>";
    }

    /**
     * Gets the currently equipped armor.
     *
     * @return string
     */
    public function getEquippedArmor(): ?string
    {
        return $this->equippedArmor ? "$this->equippedArmor <br><br>" : "No armor equipped <br><br>";
    }

    // Bulk setter

    /**
     * Sets both a weapon and armor at once.
     *
     * @param string|null $weapon
     * @param string|null $armor
     * @return string
     */
    public function setEquipment(?string $weapon, ?string $armor): string
    {
        $messages = [];
        $messages[] = $this->setEquippedWeapon($weapon);
        $messages[] = $this->setEquippedArmor($armor);
        return implode(' ', $messages);
    }
}
