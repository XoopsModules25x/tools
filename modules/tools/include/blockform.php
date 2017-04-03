<?php
/**
 * tools Module for XOOPS
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code 
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         tools
 * @since           2.00
 * @author          Susheng Yang <ezskyyoung@gmail.com>
 * @version         $Id$
 */
 
include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
$form = new XoopsForm(_EDIT._AM_TOOLS_BC_BLOCK, 'form', 'blockscall.php', "post", true);
$form->addElement(new XoopsFormLabel(_AM_TOOLS_BC_NAME, $block_data['name']));
$form->addElement(new XoopsFormText(_AM_TOOLS_BC_DESCRIPTION,"desc",60,255,$block_data['desciption']));
if ($block_data['template'] != '') {
            $form->addElement(new XoopsFormLabel(_AM_TOOLS_BC_CONTENT, '<a href="blockscall.php?op=edittpl&amp;bid='.$block_data['bid'].'">'._AM_TOOLS_BC_EDITTPL.'</a>'));
}
if ($block_data['edit_form'] != false) {
    $form->addElement(new XoopsFormLabel(_AM_TOOLS_BC_OPTIONS, $block_data['edit_form']));
}

$cache_select = new XoopsFormSelect(_AM_TOOLS_BC_BCACHETIME, 'bcachetime', $block_data['bcachetime']);
$cache_select->addOptionArray(array('0' => _NOCACHE, '30' => sprintf(_SECONDS, 30), '60' => _MINUTE, '300' => sprintf(_MINUTES, 5), '1800' => sprintf(_MINUTES, 30), '3600' => _HOUR, '18000' => sprintf(_HOURS, 5), '86400' => _DAY, '259200' => sprintf(_DAYS, 3), '604800' => _WEEK, '2592000' => _MONTH));
$form->addElement($cache_select);

$cachemodel_select = new XoopsFormSelect(_AM_TOOLS_BC_BCACHEMODEL, 'bcachemodel', $block_data['bcachemodel']);
$cachemodel_select->addOptionArray(array( '0' => _AM_TOOLS_BC_GLOBAL, '1' => _AM_TOOLS_BC_GROUP, '2' => _AM_TOOLS_BC_USER));
$form->addElement($cachemodel_select);

$form->addElement(new XoopsFormHidden('bid', $block_data['bid']));
$form->addElement(new XoopsFormHidden('op', 'save'));
$form->addElement(new XoopsFormHidden('save', 'blk'));
$button_tray = new XoopsFormElementTray('', '&nbsp;');
$button_tray->addElement(new XoopsFormButton('', 'submitblock', _SUBMIT, "submit"));
$form->addElement($button_tray);

$form->assign($xoopsTpl);
?>
