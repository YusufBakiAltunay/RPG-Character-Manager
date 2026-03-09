{extends file='layout.tpl'}

{block name='content'}
    <div class="container mt-4">

        {if isset($showSuccessMessage) && $showSuccessMessage}
            <div class="alert alert-success text-center" role="alert">
                Character successfully created!
            </div>
        {/if}

        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header text-center">
                <h4>{$character->getName()}</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Role</th>
                        <td>{$character->getRole()}</td>
                    </tr>
                    <tr>
                        <th>Health</th>
                        <td>{$character->getStats()->getHealth()}</td>
                    </tr>
                    <tr>
                        <th>Attack</th>
                        <td>{$character->getStats()->getAttack()}</td>
                    </tr>
                    <tr>
                        <th>Defense</th>
                        <td>{$character->getStats()->getDefense()}</td>
                    </tr>
                    <tr>
                        <th>Max Slots</th>
                        <td>{$character->getInventory()->getMaxSlots()}</td>
                    </tr>
                </table>
            </div>

            <div class="card-footer text-center">

                {if isset($showSuccessMessage) && $showSuccessMessage}
                    <a href="index.php?page=createCharacter" class="btn btn-primary mx-2">
                        Create Another Character
                    </a>
                {/if}

                <a href="index.php?page=characterList" class="btn btn-secondary mx-2">
                    Back to Character List
                </a>

                <a href="index.php" class="btn btn-outline-secondary mx-2">
                    Back to Home
                </a>

            </div>
        </div>
    </div>
{/block}
