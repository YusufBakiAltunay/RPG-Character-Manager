{extends file="layout.tpl"}

{block name="content"}

    <div class="container mt-5">

        <div class="alert alert-danger text-center" role="alert">
            {if isset($errorMessage)}
                {$errorMessage}
            {else}
                An unexpected error has occurred.
            {/if}
        </div>

        <div class="text-center mt-4">
            <a href="index.php?page=characterList" class="btn btn-secondary mx-2">
                Back to Character List
            </a>

            <a href="index.php" class="btn btn-outline-secondary mx-2">
                Back to Home
            </a>
        </div>

    </div>

{/block}
