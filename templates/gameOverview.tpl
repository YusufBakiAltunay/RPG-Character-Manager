{extends file="layout.tpl"}

{block name="content"}

    <h1 class="mt-4 mb-4">RPG Game Character Overview</h1>

    <h2 class="mb-3">Characters</h2>
    <table class="table table-striped table-bordered mb-5">
        <thead class="table-light">
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Health</th>
            <th>Attack</th>
            <th>Defense</th>
            <th>Equipment</th>
            <th>Inventory</th>
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
                    <ul class="mb-0 ps-3">
                        <li>Weapon: {$char->getEquipment()->getEquippedWeapon()}</li>
                        <li>Armor: {$char->getEquipment()->getEquippedArmor()}</li>
                    </ul>
                </td>
                <td>
                    <ul class="mb-0 ps-3">
                        {foreach $char->getInventory()->getAllItems() as $item}
                            <li>{$item->getName()} ({$item->getType()}) - {$item->getValue()}</li>
                        {/foreach}
                    </ul>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>

    <div class="battle-section bg-light border p-3 mb-4">
        <h2 class="h4 mb-3">First Battle Result</h2>
        <div>{$battleResult1}</div>
    </div>

    <div class="battle-section bg-light border p-3 mb-4">
        <h2 class="h4 mb-3">Second Battle Result</h2>
        <div>{$battleResult2}</div>
    </div>

{/block}
