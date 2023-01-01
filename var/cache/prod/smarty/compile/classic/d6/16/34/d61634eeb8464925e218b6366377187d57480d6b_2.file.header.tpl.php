<?php
/* Smarty version 3.1.47, created on 2023-01-01 00:30:06
  from 'C:\wamp64\www\Prestashop\modules\ps_checkout\views\templates\hook\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b0c5fe4ae0e9_85996229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd61634eeb8464925e218b6366377187d57480d6b' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop\\modules\\ps_checkout\\views\\templates\\hook\\header.tpl',
      1 => 1671468510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b0c5fe4ae0e9_85996229 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contentToPrefetch']->value, 'content');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
  <link rel="prefetch" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['link'], ENT_QUOTES, 'UTF-8');?>
" as="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
