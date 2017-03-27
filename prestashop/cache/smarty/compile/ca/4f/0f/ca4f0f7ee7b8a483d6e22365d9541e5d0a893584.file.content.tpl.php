<?php /* Smarty version Smarty-3.1.19, created on 2017-03-10 17:31:10
         compiled from "/Users/aherrador/Google Drive/AGS2/M08/m08herrador/prestashop/admin360dekd4w/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128126700158c2d4ce4928c7-78469373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca4f0f7ee7b8a483d6e22365d9541e5d0a893584' => 
    array (
      0 => '/Users/aherrador/Google Drive/AGS2/M08/m08herrador/prestashop/admin360dekd4w/themes/default/template/controllers/localization/content.tpl',
      1 => 1482157020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128126700158c2d4ce4928c7-78469373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c2d4ce4d1fe9_85219396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c2d4ce4d1fe9_85219396')) {function content_58c2d4ce4d1fe9_85219396($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
