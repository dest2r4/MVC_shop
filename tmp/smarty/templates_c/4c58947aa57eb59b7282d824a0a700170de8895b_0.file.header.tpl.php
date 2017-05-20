<?php
/* Smarty version 3.1.30, created on 2017-05-20 16:24:55
  from "C:\Users\dest2\Desktop\OpenServer\domains\AfanasiefShop\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592043a7ef3147_82743795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c58947aa57eb59b7282d824a0a700170de8895b' => 
    array (
      0 => 'C:\\Users\\dest2\\Desktop\\OpenServer\\domains\\AfanasiefShop\\views\\default\\header.tpl',
      1 => 1495286659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftColumn.tpl' => 1,
  ),
),false)) {
function content_592043a7ef3147_82743795 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
 </title>
        <!--говорим где будет располагатся гаш главный цсс файл  -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" / >
              
    
         
    </head>
    <body>
        <div id="header">
            <h1> мой новый интернет магазин</h1>
            
        </div>
                <!-- вставляем левую часть средствами смарти -->
<?php $_smarty_tpl->_subTemplateRender("file:leftColumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
        
        <div id="centerColumn">
            centerColumn
    
<?php }
}
