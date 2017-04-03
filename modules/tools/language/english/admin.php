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

//menu
define('_AM_TOOLS_INDEX', 'Update cache');
define('_AM_TOOLS_BLOCKS', 'Block callback');
//update cache
define('_AM_TOOLS_UPDATING', 'Clearing cache...');
define('_AM_TOOLS_TIP', 'tips:');
define('_AM_TOOLS_TIPS', '<ul><li>xoops cache:</li><li>smarty cache:</li><li>smarty compile:</li></ul>');
define('_AM_TOOLS_OPTIONS', 'options');
define('_AM_TOOLS_UPDATECACHESUCCESS', 'Cache cleared successfully.');
define('_AM_TOOLS_UPDATEXOOPSCACHE', 'Clear Xoops Cache');
define('_AM_TOOLS_UPDATESMARTYCACHE', 'Clear Smarty Cache');
define('_AM_TOOLS_UPDATESMARTYCOMPILE', 'Clear Smarty Compile');
//blocks call

define('_AM_TOOLS_BC_MANAGE', 'Blocks manager');
define('_AM_TOOLS_BC_ADDBLOCK', 'Add a block');
define('_AM_TOOLS_BC_EDITBLOCK', 'Edit a block');

define('_AM_TOOLS_BC_GLOBAL', 'Normal');
define('_AM_TOOLS_BC_GROUP', 'By group');
define('_AM_TOOLS_BC_USER', 'By user');

define('_AM_TOOLS_BC_ALLTYPES', 'All');

define('_AM_TOOLS_BC_SAVEDSUCCESS', '%s Save successful.');
define('_AM_TOOLS_BC_DELETEDSUCCESS', 'Delete successful.');
define('_AM_TOOLS_BC_RUSUREDEL', 'Do you sure to delete %s ?');
define('_AM_TOOLS_BC_CREATESUCCESS', 'Block %s add successful.');
define('_AM_TOOLS_BC_NOBLOCKS', 'There are no blocks...');
//define("_AM_TOOLS_BC_NOBLOCKS","Unavailable block");

define('_AM_TOOLS_BC_EDITTPL', 'Edit template');
define('_AM_TOOLS_BC_BLOCK', 'Blocks');
define('_AM_TOOLS_BC_TPLSOURCES', 'Template');
define('_AM_TOOLS_BC_NAME', 'Name');
define('_AM_TOOLS_BC_DESCRIPTION', 'Note');
define('_AM_TOOLS_BC_CONTENT', 'Content');
define('_AM_TOOLS_BC_OPTIONS', 'Options');
define('_AM_TOOLS_BC_BCACHETIME', 'Cache time');
define('_AM_TOOLS_BC_BCACHEMODEL', 'Cache model');
define('_AM_TOOLS_BC_MODULE', 'Module');
define('_AM_TOOLS_BC_DATE', 'Last time');
define('_AM_TOOLS_BC_ACTION', 'Action');
define('_AM_TOOLS_BC_CREATE', 'Create');
define('_AM_TOOLS_BC_TITLE', 'Description');
define('_AM_TOOLS_BC_ENABLEBLOCKS', 'Available block');
define('_AM_TOOLS_BC_SELECTMODULE', 'Select a module:');
define('_AM_TOOLS_BC_QUICKCALL', 'Simple:');
define('_AM_TOOLS_BC_TPLCALL', 'Template format:');

//2.01
define('_AM_TOOLS_UPGRADEFAILED0', "Update failed - couldn't rename field '%s'");
define('_AM_TOOLS_UPGRADEFAILED1', "Update failed - couldn't add new fields");
define('_AM_TOOLS_UPGRADEFAILED2', "Update failed - couldn't rename table '%s'");
define('_AM_TOOLS_ERROR_COLUMN', 'Could not create column in database : %s');
define('_AM_TOOLS_ERROR_BAD_XOOPS', 'This module requires XOOPS %s+ (%s installed)');
define('_AM_TOOLS_ERROR_BAD_PHP', 'This module requires PHP version %s+ (%s installed)');
define('_AM_TOOLS_ERROR_TAG_REMOVAL', 'Could not remove tags from Tag Module');

