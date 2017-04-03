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
 * @copyright       XOOPS Project (http://xoops.org)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         tools
 * @since           2.00
 * @author          Susheng Yang <ezskyyoung@gmail.com>
 */

defined('XOOPS_ROOT_PATH') || exit('XOOPS Root Path not defined');

$moduleDirName = basename(__DIR__);

$modversion['version']             = '2.01';
$modversion['module_status']       = 'Beta 1';
$modversion['release_date']        = '2017/01/05';
$modversion['name']                = _MI_TOOLS_NAME;
$modversion['description']         = _MI_TOOLS_DESC;
$modversion['author']              = 'Susheng Yang <ezskyyoung@gmail.com>';
$modversion['credits']             = 'XOOPS Development Team';
$modversion['help']                = 'page=help';
$modversion['license']             = 'GNU GPL 2.0 or later';
$modversion['license_url']         = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['dirname']             = $moduleDirName;
$modversion['modicons16']          = 'assets/images/icons/16';
$modversion['modicons32']          = 'assets/images/icons/32';
$modversion['image']               = 'assets/images/logoModule.png';
$modversion['module_website_url']  = 'www.xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '5.5';
$modversion['min_xoops']           = '2.5.8';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = array('mysql' => '5.5');
$modversion['adminindex']          = 'admin/index.php';
$modversion['adminmenu']           = 'admin/menu.php';

// database tables, not applicable for this module
$modversion['sqlfile']['mysql'] = 'sql/sql.sql';
$modversion['tables']           = array(
    $moduleDirName . '_' . 'blocks',
);

// Admin things, not applicable for this module
$modversion['system_menu']         = 1;
$modversion['hasAdmin']   = 1;
// Main Menu
$modversion['hasMain'] = 0;

// Module install/update, not applicable for this module
$modversion['onInstall']   = '';
$modversion['onUninstall'] = '';
$modversion['onUpdate']    = '';

// ------------------- Help files ------------------- //
$modversion['helpsection'] = array(
    array('name' => _MI_TOOLS_OVERVIEW, 'link' => 'page=help'),
    array('name' => _MI_TOOLS_DISCLAIMER, 'link' => 'page=disclaimer'),
    array('name' => _MI_TOOLS_LICENSE, 'link' => 'page=license'),
    array('name' => _MI_TOOLS_SUPPORT, 'link' => 'page=support')
);

// ------------------- Templates ------------------- //
$modversion['templates']   = array();
$modversion['templates'][] = array(
    'file'        => 'tools_admin_blockscall.tpl',
    'description' => ''
);
$modversion['templates'][] = array(
    'file'        => 'tools_admin_blockscall_new.tpl',
    'description' => ''
);
$modversion['templates'][] = array(
    'file'        => 'tools_admin_blockscall_edit.tpl',
    'description' => ''
);

// ------------------- Blocks ------------------- //
// Blocks, not applicable for this module
$modversion['blocks'] = array();

// Search, not applicable for this module
$modversion['hasSearch'] = 0;

$modversion['search']['file'] = '';
$modversion['search']['func'] = '';

// Configs, not applicable for this module
//$modversion["config"] = array();

// Comments, not applicable for this module
$modversion['hasComments'] = 0;

// Notification, not applicable for this module
$modversion['hasNotification'] = 0;
$modversion['notification']    = array();
