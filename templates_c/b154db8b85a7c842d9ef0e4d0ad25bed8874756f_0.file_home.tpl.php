<?php
/* Smarty version 5.6.0, created on 2025-11-11 18:22:45
  from 'file:home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_691370e50bdaa3_07929682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b154db8b85a7c842d9ef0e4d0ad25bed8874756f' => 
    array (
      0 => 'home.tpl',
      1 => 1762778351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691370e50bdaa3_07929682 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1264376942691370e50b9287_91100131', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_1264376942691370e50b9287_91100131 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/oop/templates';
?>

    <div class="container mt-4">

        <h2 class="text-center mb-4">Welcome to the RPG Character Manager</h2>

        <p class="text-center">
            Manage your RPG characters easily!
            Create new characters, view your existing character list, check stats, equipment and inventory.
            Use the menu above to navigate through the game system.
        </p>

    </div>
<?php
}
}
/* {/block "content"} */
}
