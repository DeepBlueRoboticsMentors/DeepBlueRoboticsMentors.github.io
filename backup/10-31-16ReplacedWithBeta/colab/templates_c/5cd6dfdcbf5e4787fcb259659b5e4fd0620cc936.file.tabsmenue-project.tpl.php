<?php /* Smarty version Smarty-3.1.13, created on 2015-12-04 01:30:59
         compiled from "/home/dbrobotic/public_html/colab/templates/standard/tabsmenue-project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137744060856615d53355214-77648243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cd6dfdcbf5e4787fcb259659b5e4fd0620cc936' => 
    array (
      0 => '/home/dbrobotic/public_html/colab/templates/standard/tabsmenue-project.tpl',
      1 => 1414597114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137744060856615d53355214-77648243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projecttab' => 0,
    'project' => 0,
    'userpermissions' => 0,
    'milestab' => 0,
    'taskstab' => 0,
    'msgstab' => 0,
    'filestab' => 0,
    'userstab' => 0,
    'timetab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56615d533b6386_29589627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615d533b6386_29589627')) {function content_56615d533b6386_29589627($_smarty_tpl) {?>
<div class="tabswrapper">
	<ul class="tabs">
		<li class="projects"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['projecttab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="manageproject.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('project');?>
</span></a></li>

	<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['milestones']['view']){?>
		<li class="miles"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['milestab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="managemilestone.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('milestones');?>
</span></a></li>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['tasks']['view']){?>
		<li class="tasks"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['taskstab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="managetask.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('tasklists');?>
</span></a></li>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['messages']['view']){?>
		<li class="msgs"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['msgstab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="managemessage.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('messages');?>
</span></a></li>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['files']['view']){?>
		<li class="files"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['filestab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="managefile.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('files');?>
</span></a></li>
	<?php }?>

		<li class="user"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['userstab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="manageuser.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('user');?>
</span></a></li>
	<?php if ($_smarty_tpl->tpl_vars['userpermissions']->value['timetracker']['view']){?>
		<li class="timetrack"><a <?php if ((($tmp = @$_smarty_tpl->tpl_vars['timetab']->value)===null||$tmp==='' ? '' : $tmp)=="active"){?>class="active"<?php }?> href="managetimetracker.php?action=showproject&amp;id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><span><?php echo $_smarty_tpl->getConfigVariable('timetracker');?>
</span></a></li>
	<?php }?>
	</ul>
</div><?php }} ?>