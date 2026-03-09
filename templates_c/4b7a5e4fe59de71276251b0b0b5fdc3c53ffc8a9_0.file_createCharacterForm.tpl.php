<?php
/* Smarty version 5.6.0, created on 2025-11-10 15:22:22
  from 'file:createCharacterForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_6911f51e7d2576_85284117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b7a5e4fe59de71276251b0b0b5fdc3c53ffc8a9' => 
    array (
      0 => 'createCharacterForm.tpl',
      1 => 1762779606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6911f51e7d2576_85284117 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6385501576911f51e7c6342_78964214', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_6385501576911f51e7c6342_78964214 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
?>


    <?php if ((true && ($_smarty_tpl->hasVariable('error') && null !== ($_smarty_tpl->getValue('error') ?? null)))) {?>
        <div class="alert alert-danger text-center" role="alert">
            <?php echo $_smarty_tpl->getValue('error');?>

        </div>
    <?php }?>

    <h2 class="text-center mb-4">Create a New Character</h2>

    <form action="index.php?page=saveCharacter" method="POST" class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter character name" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" id="role" class="form-select" required>
                <option value="" selected disabled>-- Choose a role --</option>
                <option value="Warrior">Warrior</option>
                <option value="Mage">Mage</option>
                <option value="Archer">Archer</option>
                <option value="Healer">Healer</option>
                <option value="Tank">Tank</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="health" class="form-label">Health</label>
            <input type="number" name="health" id="health" class="form-control" placeholder="Enter health points">
        </div>

        <div class="mb-3">
            <label for="attack" class="form-label">Attack</label>
            <input type="number" name="attack" id="attack" class="form-control" placeholder="Enter attack power">
        </div>

        <div class="mb-3">
            <label for="defense" class="form-label">Defense</label>
            <input type="number" name="defense" id="defense" class="form-control" placeholder="Enter defense points">
        </div>

        <div class="mb-3">
            <label for="maxSlots" class="form-label">Max Slots</label>
            <input type="number" name="maxSlots" id="maxSlots" class="form-control" placeholder="Enter maximum slots">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Create Character</button>
        </div>
    </form>

<?php
}
}
/* {/block "content"} */
}
