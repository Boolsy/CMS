<?php
/* Smarty version 3.1.47, created on 2023-01-01 00:30:06
  from 'C:\wamp64\www\Prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b0c5fe52b9a5_21342253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5451923ee42855dbb9c3c76321d3736093cbd05' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1671467693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b0c5fe52b9a5_21342253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24034125863b0c5fe50add7_34593740', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_70224002063b0c5fe50ff96_76185574 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_202116292263b0c5fe50cff1_00552584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70224002063b0c5fe50ff96_76185574', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_156118968863b0c5fe5189b6_85927843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_118677564463b0c5fe51c626_84109663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_149217972663b0c5fe5163e6_16771547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156118968863b0c5fe5189b6_85927843', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118677564463b0c5fe51c626_84109663', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_76818535063b0c5fe524cb0_74954787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_194619914263b0c5fe522732_44437141 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76818535063b0c5fe524cb0_74954787', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_24034125863b0c5fe50add7_34593740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_24034125863b0c5fe50add7_34593740',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_202116292263b0c5fe50cff1_00552584',
  ),
  'page_title' => 
  array (
    0 => 'Block_70224002063b0c5fe50ff96_76185574',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_149217972663b0c5fe5163e6_16771547',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_156118968863b0c5fe5189b6_85927843',
  ),
  'page_content' => 
  array (
    0 => 'Block_118677564463b0c5fe51c626_84109663',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_194619914263b0c5fe522732_44437141',
  ),
  'page_footer' => 
  array (
    0 => 'Block_76818535063b0c5fe524cb0_74954787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202116292263b0c5fe50cff1_00552584', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149217972663b0c5fe5163e6_16771547', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194619914263b0c5fe522732_44437141', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
