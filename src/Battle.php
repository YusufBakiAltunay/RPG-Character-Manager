<?php
declare(strict_types=1);

namespace Game;

/**
 * Class Battle
 *
 * Manages battles between two Characters.
 */
class Battle
{

    /**
     * Stores all battle events in chronological order.
     *
     * @var string[] $battleLog  Array of battle log messages.
     */
    private array $battleLog = [];
    private int $maxRounds = 10;

    /**
     * Calculates the actual damage dealt during an attack.
     *
     * @param Character $attacker
     * @param Character $defender
     * @return int
     */
    private function calculateDamage(Character $attacker, Character $defender): int
    {
        $attack = $attacker->getStats()->getAttack();
        $defense = $defender->getStats()->getDefense();
        $baseDamage = max(1, $attack - $defense);


        $randomFactor = rand(70, 100) / 100;

        $damage = (int) max(1, round($baseDamage * $randomFactor));
        return $damage;
    }

    /**
     * Logs the attack details including health before and after the attack.
     *
     * @param Character $attacker
     * @param Character $defender
     * @param int $damage
     * @return void
     */
    private function logAttack(Character $attacker, Character $defender, int $damage): void
    {
        $healthBefore = $defender->getStats()->getHealth();
        $healthAfter = $healthBefore - $damage;

        $this->battleLog[] = "{$attacker->getName()} attacks {$defender->getName()} for {$damage} damage (Health {$defender->getName()}:  {$healthBefore} → {$healthAfter})";
    }

    /**
     * Starts a fight and determines the winner.
     *
     * @param Character $fighter1
     * @param Character $fighter2
     * @return string
     */
    public function startFight(Character $fighter1, Character $fighter2): string
    {
        $this->battleLog = [];
        $round = 1;

        while (
            $fighter1->getStats()->getHealth() > 0 &&
            $fighter2->getStats()->getHealth() > 0 &&
            $round <= $this->maxRounds
        ) {
            $this->battleLog[] = "Ronde $round:";

            // Fighter 1 attacks Fighter 2
            $damage = $this->calculateDamage($fighter1, $fighter2);
            $this->logAttack($fighter1, $fighter2, $damage);

            if ($fighter2->getStats()->getHealth() <= 0) {
                $this->battleLog[] = $fighter2->getName() . " is verslagen.";
                break;
            }

            // Fighter 2 attacks Fighter 1
            $damage = $this->calculateDamage($fighter2, $fighter1);
            $this->logAttack($fighter2, $fighter1, $damage);

            if ($fighter1->getStats()->getHealth() <= 0) {
                $this->battleLog[] = $fighter1->getName() . " is verslagen.";
                break;
            }

            $round++;
        }

        // Determine winner or draw
        if ($fighter1->getStats()->getHealth() > 0 && $fighter2->getStats()->getHealth() <= 0) {
            $this->battleLog[] = "Winner: " . $fighter1->getName();
        } elseif ($fighter2->getStats()->getHealth() > 0 && $fighter1->getStats()->getHealth() <= 0) {
            $this->battleLog[] = "Winner: " . $fighter2->getName();
        } else {
            $this->battleLog[] = "Draw Game";
        }

        // Reset both fighters' health
        $fighter1->getStats()->resetHealth();
        $fighter2->getStats()->resetHealth();

        return "<ul><li>" . implode("</li><li>", $this->battleLog) . "</li></ul>";
    }

    /**
     * Changes the maximum number of rounds.
     *
     * @param int $rounds
     * @return void
     */
    public function changeMaxRounds(int $rounds): void
    {
        $this->maxRounds = $rounds;
    }

    /**
     * @return string[]
     */
    public function getBattleLog(): array
    {
        return $this->battleLog;
    }

    public function getMaxRounds(): int
    {
        return $this->maxRounds;
    }
}
