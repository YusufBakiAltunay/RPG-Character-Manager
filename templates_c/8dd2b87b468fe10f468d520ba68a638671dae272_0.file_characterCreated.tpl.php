<?php
/* Smarty version 5.6.0, created on 2025-11-05 14:23:05
  from 'file:characterCreated.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_690b4fb9267fc3_34784884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dd2b87b468fe10f468d520ba68a638671dae272' => 
    array (
      0 => 'characterCreated.tpl',
      1 => 1762348982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_690b4fb9267fc3_34784884 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_617832454690b4fb9261298_61730660', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_617832454690b4fb9261298_61730660 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
?>

    <div class="container mt-4">
        <div class="alert alert-success text-center" role="alert">
            Character successfully created!
        </div>

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
                <a href="index.php?page=createCharacter" class="btn btn-primary">Create Another Character</a>
                <a href="index.php?page=characterList" class="btn btn-secondary">View Character List</a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
