<?php
/* Smarty version 3.1.30, created on 2017-05-20 22:07:00
  from "C:\Users\dest2\Desktop\OpenServer\domains\AfanasiefShop\views\default\leftColumn.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592093d4b0a337_61592202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3791bd6d8ae24fa6e538b9ca18615f23b1124bb5' => 
    array (
      0 => 'C:\\Users\\dest2\\Desktop\\OpenServer\\domains\\AfanasiefShop\\views\\default\\leftColumn.tpl',
      1 => 1495307215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592093d4b0a337_61592202 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div id="leftColumn">
         
        <div id="leftMenu">
            <div class="manuCaption">
                Меню:
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        </div>
<?php }
}
