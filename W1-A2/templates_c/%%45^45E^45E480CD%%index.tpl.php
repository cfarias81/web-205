<?php /* Smarty version 2.6.32, created on 2021-11-14 03:59:26
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'index.tpl', 1, false),array('modifier', 'capitalize', 'index.tpl', 8, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "test.conf",'section' => 'setup'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('title' => "Smarty-template")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<PRE>

<?php if ($this->_config[0]['vars']['bold']): ?><b><?php endif; ?>

Title: <?php echo ((is_array($_tmp=$this->_config[0]['vars']['title'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>


<?php if ($this->_config[0]['vars']['bold']): ?></b><?php endif; ?>

<?php echo $this->_tpl_vars['Carlito']; ?>


<?php echo $this->_tpl_vars['news']; ?>








<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>