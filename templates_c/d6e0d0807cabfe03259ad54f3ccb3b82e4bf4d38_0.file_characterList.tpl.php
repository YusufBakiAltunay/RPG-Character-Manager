<?php
/* Smarty version 5.6.0, created on 2025-11-18 09:08:24
  from 'file:characterList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_691c2978a4b054_14074795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6e0d0807cabfe03259ad54f3ccb3b82e4bf4d38' => 
    array (
      0 => 'characterList.tpl',
      1 => 1763109589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691c2978a4b054_14074795 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1280414608691c2978a1e4a7_02285252', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_1280414608691c2978a1e4a7_02285252 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
?>


    <div class="container mt-4">
        <h2 class="mb-4 text-center">Character List</h2>

        <?php if ((true && ($_smarty_tpl->hasVariable('characters') && null !== ($_smarty_tpl->getValue('characters') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('characters')) > 0) {?>
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
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('characters'), 'char');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('char')->value) {
$foreach0DoElse = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->getValue('char')->getName();?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('char')->getRole();?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('char')->getStats()->getHealth();?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('char')->getStats()->getAttack();?>
</td>
                        <td><?php echo $_smarty_tpl->getValue('char')->getStats()->getDefense();?>
</td>
                        <td>
                            <ul class="mb-0">
                                <li>Weapon: <?php echo $_smarty_tpl->getValue('char')->getEquipment()->getEquippedWeapon();?>
</li>
                                <li>Armor: <?php echo $_smarty_tpl->getValue('char')->getEquipment()->getEquippedArmor();?>
</li>
                            </ul>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('char')->getInventory()->getAllItems()) > 0) {?>
                                <ul class="mb-0">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('char')->getInventory()->getAllItems(), 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
                                        <li><?php echo $_smarty_tpl->getValue('item')->getName();?>
 (<?php echo $_smarty_tpl->getValue('item')->getType();?>
 - <?php echo $_smarty_tpl->getValue('item')->getValue();?>
)</li>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php } else { ?>
                                <p>No items</p>
                            <?php }?>
                        </td>
                        <td>
                            <a href="index.php?page=viewCharacter&name=<?php echo $_smarty_tpl->getValue('char')->getName();?>
" class="btn btn-primary btn-sm mb-1">
                                View
                            </a>

                            <a href="index.php?page=deleteCharacter&name=<?php echo $_smarty_tpl->getValue('char')->getName();?>
" class="btn btn-danger btn-sm">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php } else { ?>
            <div class="text-center mt-5">
                <p>No characters created yet. Create your first character!</p>
                <a href="index.php?page=createCharacter" class="btn btn-primary">Create Character</a>
            </div>
        <?php }?>
    </div>

<?php
}
}
/* {/block "content"} */
}
