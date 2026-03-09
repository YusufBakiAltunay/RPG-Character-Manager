{extends file="layout.tpl"}
{block name="content"}

    <div class="container mt-4">
        <h2 class="mb-4 text-center">Character List</h2>

        {if isset($characters) && count($characters) > 0}
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Health</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Equipment</th>
                    <th>Inventory</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {foreach $characters as $char}
                    <tr>
                        <td>{$char->getName()}</td>
                        <td>{$char->getRole()}</td>
                        <td>{$char->getStats()->getHealth()}</td>
                        <td>{$char->getStats()->getAttack()}</td>
                        <td>{$char->getStats()->getDefense()}</td>
                        <td>
                            <ul class="mb-0">
                                <li>Weapon: {$char->getEquipment()->getEquippedWeapon()}</li>
                                <li>Armor: {$char->getEquipment()->getEquippedArmor()}</li>
                            </ul>
                        </td>
                        <td>
                            {if count($char->getInventory()->getAllItems()) > 0}
                                <ul class="mb-0">
                                    {foreach $char->getInventory()->getAllItems() as $item}
                                        <li>{$item->getName()} ({$item->getType()} - {$item->getValue()})</li>
                                    {/foreach}
                                </ul>
                            {else}
                                <p>No items</p>
                            {/if}
                        </td>
                        <td>
                            <a href="index.php?page=viewCharacter&name={$char->getName()}" class="btn btn-primary btn-sm mb-1">
                                View
                            </a>

                            <a href="index.php?page=deleteCharacter&name={$char->getName()}" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        {else}
            <div class="text-center mt-5">
                <p>No characters created yet. Create your first character!</p>
                <a href="index.php?page=createCharacter" class="btn btn-primary">Create Character</a>
            </div>
        {/if}
    </div>

{/block}
