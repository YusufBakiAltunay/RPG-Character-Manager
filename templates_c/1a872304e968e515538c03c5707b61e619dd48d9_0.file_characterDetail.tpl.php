<?php
/* Smarty version 5.6.0, created on 2025-11-11 18:23:55
  from 'file:characterDetail.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_6913712b910715_08321056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a872304e968e515538c03c5707b61e619dd48d9' => 
    array (
      0 => 'characterDetail.tpl',
      1 => 1762779553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6913712b910715_08321056 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7002043606913712b902025_98999973', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_7002043606913712b902025_98999973 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
?>

    <div class="container mt-4">

        <?php if ((true && ($_smarty_tpl->hasVariable('showSuccessMessage') && null !== ($_smarty_tpl->getValue('showSuccessMessage') ?? null))) && $_smarty_tpl->getValue('showSuccessMessage')) {?>
            <div class="alert alert-success text-center" role="alert">
                Character successfully created!
            </div>
        <?php }?>

        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header text-center">
                <h4><?php echo $_smarty_tpl->getValue('character')->getName();?>
</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Role</th>
                        <td><?php echo $_smarty_tpl->getValue('character')->getRole();?>
</td>
                    </tr>
                    <tr>
                        <th>Health</th>
                        <td><?php echo $_smarty_tpl->getValue('character')->getStats()->getHealth();?>
</td>
                    </tr>
                    <tr>
                        <th>Attack</th>
                        <td><?php echo $_smarty_tpl->getValue('character')->getStats()->getAttack();?>
</td>
                    </tr>
                    <tr>
                        <th>Defense</th>
                        <td><?php echo $_smarty_tpl->getValue('character')->getStats()->getDefense();?>
</td>
                    </tr>
                    <tr>
                        <th>Max Slots</th>
                        <td><?php echo $_smarty_tpl->getValue('character')->getInventory()->getMaxSlots();?>
</td>
                    </tr>
                </table>
            </div>

            <div class="card-footer text-center">

                <?php if ((true && ($_smarty_tpl->hasVariable('showSuccessMessage') && null !== ($_smarty_tpl->getValue('showSuccessMessage') ?? null))) && $_smarty_tpl->getValue('showSuccessMessage')) {?>
                    <a href="index.php?page=createCharacter" class="btn btn-primary mx-2">
                        Create Another Character
                    </a>
                <?php }?>

                <a href="index.php?page=characterList" class="btn btn-secondary mx-2">
                    Back to Character List
                </a>

                <a href="index.php" class="btn btn-outline-secondary mx-2">
                    Back to Home
                </a>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
