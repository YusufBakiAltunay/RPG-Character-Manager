<?php
declare(strict_types=1);

namespace Game;

/**
 * Class CharacterStats
 *
 * This class manages the statistics of a Character,
 * such as health, attack, and defense.
 */
class CharacterStats
{
    private int $health;
    public int $originalHealth;
    private int $attack;
    private int $defense;

    /**
     * @return string
     */
    public function displayStats(): string
    {
        return $this->health . " " . $this->attack . " " . $this->defense . "<br>";
    }

    // Setters

    /**
     * Set the health.
     *
     * @param int $health
     * @return string|null
     */
    public function setHealth( int $health): ?string
    {
        $this->health = $health;
        if ($health <= 0) {
            return "Error: Health cannot be negative. <br>";
        }

        if (!isset($this->originalHealth)) {
            $this->originalHealth = $health;
        }
        return null;
    }

    /**
     * Set the attack.
     *
     * @param int $attack
     * @return ?string
     */
    public function setAttack(int $attack): ?string
    {
        $this->attack = $attack;
        if ($attack <= 0) {
            return "Error: Attack must be greater than 0. <br>";
        }
        return null;
    }

    /**
     * Set the defense.
     *
     * @param int $defense
     * @return string|null
     */
    public function setDefence(int $defense): ?string
    {
        $this->defense = $defense;
        if ($defense <= 0) {
            return "Error: Defense must be greater than 0. <br>";
        }
        return null;
    }

    // Getters

    /**
     * Get the health.
     *
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * Get the original health.
     *
     * @return int
     */
    public function getOriginalHealth(): int
    {
        return $this->originalHealth;
    }

    /**
     * Get the attack value.
     *
     * @return int
     */
    public function getAttack(): int
    {
        return $this->attack;
    }

    /**
     * Get the defense value.
     *
     * @return int
     */
    public function getDefense(): int
    {
        return $this->defense;
    }

    // Bulk Setter

    /**
     * Set all stats at once.
     *
     * @param int $health
     * @param int $attack
     * @param int $defense
     * @return string
     */
    public function setAllStats(int $health, int $attack, int $defense): string
    {
        $messages = [];
        $messages[] = $this->setHealth($health);
        $messages[] = $this->setAttack($attack);
        $messages[] = $this->setDefence($defense);
        return implode(' ', $messages);
    }

    /**
     * Reset health to the original value.
     *
     * @return void
     */
    public function resetHealth(): void
    {
        $this->health = $this->originalHealth;
    }
}
