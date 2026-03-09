<?php
declare(strict_types=1);

namespace Game;

/**
 * Manages a character's inventory.
 * Keeps track of which items a player owns and how much space is available.
 */
class Inventory
{

    /**
     * @var Item[] $items  List of items in the inventory.
     */
    private array $items = [];
    public int $maxSlots = 10;

    /**
     * Inventory constructor.
     *Initializes an empty inventory with a given maximum number of slots.
     *
     * @param int $maxSlots
     */
    public function __construct(int $maxSlots = 10)
    {
        $this->items = [];
        $this->maxSlots = $maxSlots;
    }

    /**
     * Adds an item to the inventory.
     * Checks if the inventory is full before adding.
     *
     * @param Item $item
     * @return string
     */
    public function addItem(Item $item): string
    {
        if (count($this->items) >= $this->maxSlots) {
            return "Inventory is full, cannot add item.";
        }

        $this->items[] = $item;
        return "Item added to inventory: " . $item->getName() . ".";
    }

    /**
     * Remove an item from the inventory by its name.
     *
     * @param string $itemName
     * @return string
     */
    public function removeItem(string $itemName): string
    {
        //index is 0,1,2 etc in de array
        foreach ($this->items as $index => $item) {
            if (strtolower($item->getName()) === strtolower($itemName)) {
                unset($this->items[$index]);

                // Reindex the array to avoid gaps in keys
                $this->items = array_values($this->items);

                return "Item removed from inventory: '$itemName'";
            }
        }
        return "Item '$itemName' not found in inventory.";
    }


    /**
     * Get an item from the inventory by its name.
     *
     * @param string $itemName
     * @return Item|null
     */
    public function getItem(string $itemName): ?Item
    {
        foreach ($this->items as $index => $item) {
            if (strtolower($item->getName())  === strtolower($itemName)) {
                return $this->items[$index];
            }
        }
        return null;
    }


    /**
     * Get all items in the inventory.
     *
     * @return Item[]
     */
    public function getAllItems(): array
    {
        return $this->items;
    }

    /**
     * Get all items count in the inventory
     *
     * @return int
     */
    public function getItemCount(): int
    {
        return count($this->items);
    }

    /**
     * Check if the inventory is full.
     *
     * @return bool
     */
    public function isFull(): bool
    {
        return count($this->items) >= $this->maxSlots;
    }

    /**
     * Check if the inventory is empty.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return count($this->items) === 0;
    }

    /**
     * Get maximum inventory slots.
     *
     * @return int
     */
    public function getMaxSlots(): int
    {
        return $this->maxSlots;
    }


}


