<?php
/* Smarty version 5.6.0, created on 2025-10-30 10:43:43
  from 'file:gameOverview.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_6903334f800680_69353669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c99da7b61b166e5eabafcebbe2213eb4ee29f61' => 
    array (
      0 => 'gameOverview.tpl',
      1 => 1761817422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6903334f800680_69353669 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14964139336903334f7e5bc9_47233902', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_14964139336903334f7e5bc9_47233902 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
?>


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
                    <ul class="mb-0 ps-3">
                        <li>Weapon: <?php echo $_smarty_tpl->getValue('char')->getEquipment()->getEquippedWeapon();?>
</li>
                        <li>Armor: <?php echo $_smarty_tpl->getValue('char')->getEquipment()->getEquippedArmor();?>
</li>
                    </ul>
                </td>
                <td>
                    <ul class="mb-0 ps-3">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('char')->getInventory()->getAllItems(), 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
                            <li><?php echo $_smarty_tpl->getValue('item')->getName();?>
 (<?php echo $_smarty_tpl->getValue('item')->getType();?>
) - <?php echo $_smarty_tpl->getValue('item')->getValue();?>
</li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

    <div class="battle-section bg-light border p-3 mb-4">
        <h2 class="h4 mb-3">First Battle Result</h2>
        <div><?php echo $_smarty_tpl->getValue('battleResult1');?>
</div>
    </div>

    <div class="battle-section bg-light border p-3 mb-4">
        <h2 class="h4 mb-3">Second Battle Result</h2>
        <div><?php echo $_smarty_tpl->getValue('battleResult2');?>
</div>
    </div>

<?php
}
}
/* {/block "content"} */
}
