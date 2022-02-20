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
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         tools
 * @since           2.00
 * @author          Susheng Yang <ezskyyoung@gmail.com>
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');

$moduleDirName      = basename(__DIR__);
$moduleDirNameUpper = \mb_strtoupper($moduleDirName);

$modversion                        = [];
$modversion['version']             = '2.1.0';
$modversion['module_status']       = 'Beta 1';
$modversion['release_date']        = '2022/02/20';
$modversion['name']                = _MI_TOOLS_NAME;
$modversion['description']         = _MI_TOOLS_DESC;
$modversion['image']               = 'assets/images/logoModule.png';
$modversion['dirname']             = basename(__DIR__);
$modversion['author']              = 'Susheng Yang <ezskyyoung@gmail.com>';
$modversion['credits']             = 'XOOPS Development Team';
$modversion['license']             = 'GNU GPL 2.0 or later';
$modversion['license_url']         = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['dirname']             = $moduleDirName;
$modversion['modicons16']          = 'assets/images/icons/16';
$modversion['modicons32']          = 'assets/images/icons/32';
$modversion['image']               = 'assets/images/logoModule.png';
$modversion['module_website_url']  = 'https://xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '7.0';
$modversion['min_xoops']           = '2.5.10';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = ['mysql' => '5.5'];
$modversion['system_menu']         = 1;

// database tables, not applicable for this module
$modversion['sqlfile']['mysql'] = 'sql/sql.sql';
$modversion['tables']           = [
    $moduleDirName . '_' . 'blocks',
];

// Admin things, not applicable for this module
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';
// Main Menu
$modversion['hasMain'] = 0;

// Module install/update, not applicable for this module
$modversion['onInstall']   = '';
$modversion['onUninstall'] = '';
$modversion['onUpdate']    = '';

// ------------------- Help files ------------------- //
$modversion['help']        = 'page=help';
$modversion['helpsection'] = [
    ['name' => _MI_TOOLS_OVERVIEW, 'link' => 'page=help'],
    ['name' => _MI_TOOLS_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => _MI_TOOLS_LICENSE, 'link' => 'page=license'],
    ['name' => _MI_TOOLS_SUPPORT, 'link' => 'page=support'],
];

// ------------------- Templates ------------------- //
$modversion['templates'] = [
    ['file' => 'tools_admin_blockscall.tpl', 'description' => '',],
    ['file' => 'tools_admin_blockscall_new.tpl', 'description' => '',],
    ['file' => 'tools_admin_blockscall_edit.tpl', 'description' => '',],
];

// ------------------- Blocks ------------------- //
// Blocks, not applicable for this module
$modversion['blocks'] = [];

// Search, not applicable for this module
$modversion['hasSearch'] = 0;

$modversion['search']['file'] = '';
$modversion['search']['func'] = '';

// Configs, not applicable for this module
//$modversion["config"] = [];

// Comments, not applicable for this module
$modversion['hasComments'] = 0;

// Notification, not applicable for this module
$modversion['hasNotification'] = 0;
$modversion['notification']    = [];
