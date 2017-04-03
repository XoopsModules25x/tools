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

if (!defined('XOOPS_ROOT_PATH')) { exit(); }

$modversion = array();
$modversion["name"]         = _MI_TOOLS_NAME;
$modversion["version"]      = "2.00 beta 1";
$modversion["description"]  = _MI_TOOLS_DESC;
$modversion["image"]        = "images/logo.png";
$modversion["dirname"]      = "tools";
$modversion["author"]       = "Susheng Yang <ezskyyoung@gmail.com>";
$modversion["credits"]      = "XOOPS Development Team";

// database tables, not applicable for this module
$modversion["sqlfile"]["mysql"] = "sql/sql.sql";
$modversion["tables"] = array(
"tools_blocks"
);

// Admin things, not applicable for this module
$modversion["hasAdmin"] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";
// Main Menu
$modversion["hasMain"] = 0;

// Module install/update, not applicable for this module
$modversion["onInstall"] = "";
$modversion["onUninstall"] = "";
$modversion["onUpdate"] = "";

/**
* Templates
*/
$modversion['templates']    = array();
$modversion['templates'][]    = array(
    'file'          => 'tools_admin_blockscall.html',
    'description'   => ''
    );
$modversion['templates'][]    = array(
    'file'          => 'tools_admin_blockscall_new.html',
    'description'   => ''
    );
$modversion['templates'][]    = array(
    'file'          => 'tools_admin_blockscall_edit.html',
    'description'   => ''
    );

// Blocks, not applicable for this module
$modversion['blocks']    = array();

// Search, not applicable for this module
$modversion["hasSearch"] = 0;

$modversion['search']['file'] = "";
$modversion['search']['func'] = "";

// Configs, not applicable for this module
//$modversion["config"] = array();


// Comments, not applicable for this module
$modversion["hasComments"] = 0;

// Notification, not applicable for this module
$modversion["hasNotification"] = 0;
$modversion["notification"] = array();
?>