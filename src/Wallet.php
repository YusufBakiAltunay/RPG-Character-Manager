<?php
declare(strict_types=1);

namespace Game;

/**
 * Class Wallet
 *
 * Manages the money (coins) of a Character.
 */
class Wallet
{
    /**
     * Shows how much gold the wallet contains.
     */
    private int $gold;

    /**
     * @return string
     */
    public function displayGold():string
    {
        return $this->gold . "<br>";
    }

    // Setter

    /**
     * Set the amount of gold.
     * Returns an error message if the value is negative.
     *
     * @param int $gold
     * @return string|null
     */
    public function setGold(int $gold): ?string
    {
        $this->gold = $gold;
        if ($gold < 0) {
            return "Error: Gold cannot be negative. <br> ";
        }
        return null;
    }

    // Getter

    /**
     * Get the amount of gold.
     *
     * @return string
     */
    public function getGold(): string
    {
        return $this->gold . "<br><br>";
    }
}
