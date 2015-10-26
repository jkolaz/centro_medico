<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-26 17:09:30
         compiled from "C:\xampp\htdocs\centro_medico\admin\views\templates\main.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_562ea49ad97a43_56987442',
  'file_dependency' => 
  array (
    'b768cb5122f68b0b40aa9452cdfba960bf0b05f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\centro_medico\\admin\\views\\templates\\main.tpl',
      1 => 1445897368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_562ea49ad97a43_56987442')) {
function content_562ea49ad97a43_56987442 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
    <?php echo $_smarty_tpl->tpl_vars['contentheader']->value;?>

    <body>
        <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['Desktop']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['Movil']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['content_main']->value;?>

    </body>
</html><?php }
}
