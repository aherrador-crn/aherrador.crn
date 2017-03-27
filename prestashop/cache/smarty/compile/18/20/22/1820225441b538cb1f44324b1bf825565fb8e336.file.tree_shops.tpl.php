<?php /* Smarty version Smarty-3.1.19, created on 2017-03-10 17:03:38
         compiled from "/Users/aherrador/Google Drive/AGS2/M08/m08herrador/prestashop/admin/themes/default/template/helpers/tree/tree_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144325293558c2ce5a1ff817-74748367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1820225441b538cb1f44324b1bf825565fb8e336' => 
    array (
      0 => '/Users/aherrador/Google Drive/AGS2/M08/m08herrador/prestashop/admin/themes/default/template/helpers/tree/tree_shops.tpl',
      1 => 1482157020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144325293558c2ce5a1ff817-74748367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
    'selected_shops' => 0,
    'imploded_selected_shops' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58c2ce5a230c44_66380930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c2ce5a230c44_66380930')) {function content_58c2ce5a230c44_66380930($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<script type="text/javascript">
	function checkAllAssociatedShops($tree)
	{
		$tree.find(":input[type=checkbox]").each(
			function()
			{
				$(this).prop("checked", true);
				$(this).parent().addClass("tree-selected");
			}
		);
	}

	function uncheckAllAssociatedShops($tree)
	{
		$tree.find(":input[type=checkbox]").each(
			function()
			{
				$(this).prop("checked", false);
				$(this).parent().removeClass("tree-selected");
			}
		);
	}

	$(document).ready(function () {
		$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").tree("expandAll");
		$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").find(":input[type=checkbox]").click(
			function()
			{
				if($(this).is(':checked'))
				{
					$(this).parent().addClass("tree-selected");
					$(this).parent().parent().find("ul").find(":input[type=checkbox]").each(
						function()
						{
							$(this).prop("checked", true);
							$(this).parent().addClass("tree-selected");
						}
					);
				}
				else
				{
					$(this).parent().removeClass("tree-selected");
					$(this).parent().parent().find("ul").find(":input[type=checkbox]").each(
						function()
						{
							$(this).prop("checked", false);
							$(this).parent().removeClass("tree-selected");
						}
					);
				}
			}
		);

		<?php if (isset($_smarty_tpl->tpl_vars['selected_shops']->value)) {?>
			<?php $_smarty_tpl->tpl_vars['imploded_selected_shops'] = new Smarty_variable(implode('","',$_smarty_tpl->tpl_vars['selected_shops']->value), null, 0);?>
			var selected_shops = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_shops']->value;?>
");

			$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").find(".tree-item :input").each(
				function()
				{
					if ($.inArray($(this).val(), selected_shops) != -1)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		<?php }?>
	});
</script><?php }} ?>
